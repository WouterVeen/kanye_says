<?php

namespace App\Http\Controllers;

use App\Services\KanyeSpeakService;
use Illuminate\Http\Request;

class KanyeController extends Controller
{
    /**
     * @var \App\Services\KanyeSpeakService
     */
    public KanyeSpeakService $kanyeSpeakService;

    /**
     * KanyeController constructor.
     *
     * @param \App\Services\KanyeSpeakService $kanyeSpeakService
     */
    public function __construct(KanyeSpeakService $kanyeSpeakService)
    {
        $this->kanyeSpeakService = $kanyeSpeakService;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getQuote(): \Illuminate\Http\JsonResponse
    {
        return response()->json($this->kanyeSpeakService->getQuote());
    }

    /**
     * @param int $total
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getQuotes(int $total): \Illuminate\Http\JsonResponse
    {
        return response()->json($this->kanyeSpeakService->getQuotes($total));
    }
}
