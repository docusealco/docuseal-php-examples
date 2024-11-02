<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase\JWT\JWT;

class PageController extends Controller
{
    public function showHome()
    {
        return view('home');
    }

    public function showForm()
    {
        return view('form');
    }

    public function showBuilder()
    {
        $payload = [
            'user_email' => 'pete+php@docuseal.com',
            'integration_email' => 'signer@example.com',
            'name' => 'Integration W-9 Test Form',
            'document_urls' => ['https://www.irs.gov/pub/irs-pdf/fw9.pdf'],
        ];

        $apiToken = 'i2U5jn69VgZALd4anfQd9iGoUiBY1CAtSDujYUqSMme';
        $token = JWT::encode($payload, $apiToken, 'HS256');

        return view('builder', ['token' => $token]);
    }
}
