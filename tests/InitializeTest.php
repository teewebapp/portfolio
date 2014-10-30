<?php

namespace Tee\Portfolio\Tests;

use Tee\System\Tests\TestCase;

class InitializeTest extends TestCase {

    public function testSomethingIsTrue()
    {
        $this->assertTrue(\moduleEnabled('portfolio'));
        $this->assertTrue(\moduleEnabled('page'));
        $this->assertTrue(\moduleEnabled('system'));
    }

}