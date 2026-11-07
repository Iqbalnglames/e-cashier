<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\FonnteService;
use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
    protected $fonnte;

    public function __construct(FonnteService $fonnte)
    {
        $this->fonnte = $fonnte;
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'target' => 'required|string',
            'message' => 'required|string',
        ]);

        try {
            $result = $this->fonnte->sendMessage(
                $validated['target'],
                $validated['message']
            );

            return response()->json([
                'success' => true,
                'message' => 'Pesan berhasil dikirim.',
                'data' => $result,
            ]);

        } catch (\Throwable $e) {
            report($e);

            return response()->json([
                'success' => false,
                'message' => 'Gagal mengirim pesan WhatsApp.',
            ], 500);
        }
    }
}