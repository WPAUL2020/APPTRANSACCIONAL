<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Middleware;

class instahuntersController extends Controller
{
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function test()
    {

        return view('instahunters\instahunters');
    }




    public function postGuzzleRequest()
    {
        /* http://localhost/AnalisisBigData/public/apiInsert.php */
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'http://localhost/AnalisisBigData/public/apiInsert.php', [
            'json' => [
                'campoSelect' => 'hashtag',
                'palabraClave' => 'encasa',
                ]
            ]

        );

        dd($res);

    }

/*     public function postGuzzleRequest()
    {
        return $this->request->input('campoSelect');
        return $this->request->input('palabraClave');
    } */
}
