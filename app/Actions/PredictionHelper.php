<?php

// namespace App\Actions;

// use GuzzleHttp\Client;

// class PredictionHelper
// {
//     public static function predict($image_path)
//     {
//         $predict_url = env('https://2fdd-35-188-96-222.ngrok-free.app/predict').'/';

//         $client = new Client();

//         $body = [
//             'multipart' => [
//                 [
//                     'name' => 'image',
//                     'contents' => fopen(public_path('storage/images/' . $image_path), 'r')
//                 ]
//             ]
//         ];

//         $response = $client->request('POST', $predict_url, $body);

//         if ($response->getStatusCode() == 200) {
//             $responseData = json_decode($response->getBody()->getContents(), true);

//             return $responseData;
//         } else {
//             return null;
//         }
//     }
// }
