<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeminiAPI\Client;
use GeminiAPI\GeminiAPI;

class ChatController extends Controller
{
  public function handleChat(Request $request)
  {
    $userMessage = $request->input('message');

    $client = new Client('AIzaSyCnlkFMiLD-alTnZB1i20r_RN-Ej_VFtKg'); // Replace with your actual key

    try {
      $response = $client->geminiPro()->generateContent(
        new GeminiAPI\Resources\Parts\TextPart($userMessage)
      );

      return response()->json(['response' => $response->text()]);

    } catch (\Exception $e) {
      return response()->json(['response' => 'There was an error processing your request.'], 500);
    }
  }
}
