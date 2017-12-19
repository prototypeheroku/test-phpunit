<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FooController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function foo1()
    {

        return 'Foo1!!';

    }
}
