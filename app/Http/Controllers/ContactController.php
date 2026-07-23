<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        // Save to JSON file directly
        $messageData = [
            'id' => uniqid(),
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'] ?? 'No Subject',
            'message' => $validated['message'],
            'created_at' => now()->format('Y-m-d H:i:s'),
        ];

        $filePath = storage_path('app/messages/contacts.json');
        $dirPath = dirname($filePath);

        // Ensure directory exists
        if (!is_dir($dirPath)) {
            mkdir($dirPath, 0755, true);
        }

        $messages = [];
        if (file_exists($filePath)) {
            $content = file_get_contents($filePath);
            $messages = json_decode($content, true) ?? [];
        }

        array_unshift($messages, $messageData);
        file_put_contents($filePath, json_encode($messages, JSON_PRETTY_PRINT));

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Pesan berhasil dikirim! Terima kasih telah menghubungi saya.'
            ]);
        }

        return redirect()->route('contact.index')->with('success', 'Pesan berhasil dikirim! Terima kasih telah menghubungi saya.');
    }
}
