<?php
namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class KanyeSpeakService
{
    protected Client $client;

    /**
     * KanyeSpeakService constructor.
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.kanye.rest'
        ]);
    }

    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getQuote()
    {
        try{
            return json_decode($this->client->get('')->getBody()->getContents());
        }catch(RequestException $re){
            Log::warning($re->getMessage());
            throw $re;
        }
    }

    /**
     * @param int $total
     *
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getQuotes(int $total): array
    {
        $quotes = [];
        for($i=0; $i < $total; $i++){
            $quotes[] =  $this->getQuote();
        }

        return $quotes;
    }
}
