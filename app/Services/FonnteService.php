<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FonnteService
{
    public function sendMessage(string $target, string $message)
    {
        $response = Http::withHeaders([
            'Authorization' => config('services.fonnte.token'),
        ])
            ->asForm()
            ->timeout(30)
            ->post(config('services.fonnte.url'), [
                'target' => $target,
                'message' => $message,
            ]);

        $response->throw();

        return $response->json();
    }
}