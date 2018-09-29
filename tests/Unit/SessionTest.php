<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SessionTest extends TestCase
{

    /**
     * Test in count purchase in session
     *
     *
     */
    public function testPurchaseCount()
    {
        $response = $this->get('/session/1');

        $this->assertEquals('count is ', $response->getContent());
    }

}
