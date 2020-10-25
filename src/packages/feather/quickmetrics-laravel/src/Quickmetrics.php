<?php

namespace feather\Quickmetrics;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Quickmetrics
{
    /**
     * undocumented function
     * @param string $name
     * @param float $value
     * @param ?string $dimension = null
     * @return void
     */
    public static function evet(string $name, float $value, ?string $dimension = null)
    {
        $client = new Client([
            'base_uri' => 'https://qckm.io'
        ]);

        $json = [
            'name' => $name,
            'value' => $value
        ];

        if($dimension) {
           $json['dimension'] = $dimension;
        };

        try {
            $res = $client->request('POST', '/json', [
                'json' => $json,
                'headers' => [
                    'x-qm-key' => config('quickmetrics.key')
                ]
            ]);

            return response()->json([
                'code' => $res->getStatusCode(),
                'message' => $res->getReasonPhrase()
            ]);

        } catch (GuzzleException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }

    }
    
}
