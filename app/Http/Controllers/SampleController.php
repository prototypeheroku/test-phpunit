<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search()
    {
        return view('sample.search', [
            'title' => 'サンプル画面',
            'body' => 'テスト'
        ]);
    }
}
