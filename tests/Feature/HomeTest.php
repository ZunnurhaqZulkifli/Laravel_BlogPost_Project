<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{

    public function testHomePageIsWorkingCorrectly()
    {
        $response = $this->get('/');

        $response->assertSeeText('Zunnurhaq - Home'); 
        $response->assertSeeText('This is where you will start your journey!');
    }

    public function testContactPageIsWorkingCorrectly()
    {
        $response = $this->get('/contact');

        $response->assertSeeText("one"); 
        $response->assertSeeText('This is where all of your contacts will be');
    }
}
