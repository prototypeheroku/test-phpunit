<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Example002Test extends TestCase
{
    // テスト対象のオジェクト
    private $target = null;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testA()
    {
        $this->target = new Example002();

        $a = $this->target->A();

        //なんかテストコード書く
        $this->assertEquals(1,$a);
    }

    public function testB()
    {
        $this->target = new Example002();

        $b = $this->target->B();

        //なんかテストコード書く
        $this->assertEquals(1,$b);
    }
}
