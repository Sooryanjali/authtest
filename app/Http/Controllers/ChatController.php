<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatController extends Controller
{
    public function handleChat(Request $request)
    {
        $userMessage = $request->input('message');
        
        // Example API URL and headers (adjust according to your Gemini API specifics)
        $apiUrl = 'https://api.gemini.com/v1/validate-idea';
        $client = new Client();

        try {
            $response = $client->post($apiUrl, [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('GEMINI_API_KEY'),
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'message' => $userMessage,
                ],
            ]);

            $responseBody = json_decode($response->getBody(), true);
            return response()->json(['response' => $responseBody['response']]);

        } catch (\Exception $e) {
            return response()->json(['response' => 'There was an error processing your request.'], 500);
        }
    }
}

