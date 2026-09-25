<?php

namespace App\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FacebookPageService
{
    /**
     * @return array<int, array<string, mixed>>
     */
    public function recentPosts(): array
    {
        $pageId = config('services.facebook.page_id');
        $accessToken = config('services.facebook.access_token');

        if (blank($pageId) || blank($accessToken)) {
            return [];
        }

        try {
            $response = Http::retry(2, 250)
                ->timeout(5)
                ->connectTimeout(3)
                ->acceptJson()
                ->get(sprintf('%s/%s/posts', config('services.facebook.graph_url'), $pageId), [
                    'access_token' => $accessToken,
                    'fields' => 'id,message,full_picture,permalink_url,created_time',
                    'limit' => config('services.facebook.posts_limit', 3),
                ]);
        } catch (ConnectionException $exception) {
            Log::warning('No se pudo conectar con Facebook.', [
                'page_id' => $pageId,
                'exception' => $exception::class,
            ]);

            return [];
        }

        if ($response->failed()) {
            Log::warning('Facebook Graph API devolvió un error.', [
                'page_id' => $pageId,
                'status' => $response->status(),
            ]);

            return [];
        }

        return collect($response->json('data', []))
            ->filter(fn (mixed $post): bool => is_array($post) && filled($post['message'] ?? null))
            ->map(fn (array $post): array => [
                'message' => $post['message'],
                'image' => $post['full_picture'] ?? null,
                'url' => $post['permalink_url'] ?? sprintf('https://www.facebook.com/%s', $post['id'] ?? ''),
                'published_at' => $post['created_time'] ?? null,
            ])
            ->values()
            ->all();
    }
}
