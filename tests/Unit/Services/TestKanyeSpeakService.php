<?php


namespace Unit\Services;


use App\Services\KanyeSpeakService;
use PHPUnit\Framework\TestCase;

class TestKanyeSpeakService extends TestCase
{
    protected KanyeSpeakService $service;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->service = app(KanyeSpeakService::class);
    }

    public function testGetQuote()
    {
        $this->assertNotNull($this->service->getQuote(), 'getQuote returns null');
    }

    public function testGetQuotes()
    {
        $this->assertCount(5, $this->service->getQuotes(5));
    }
}
