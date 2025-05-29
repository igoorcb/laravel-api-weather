<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeather($city)
    {
        try {
            $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
                'q' => $city,
                'appid' => config('services.openweathermap.key'),
                'units' => 'metric',
                'lang' => 'pt_br',
            ]);


            if ($response->failed()) {
                return response()->json([
                    'error' => 'Erro ao buscar dados da API',
                    'message' => $response->json(),
                ], $response->status());
            }

            return response()->json($response->json());

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Erro interno',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    
}
