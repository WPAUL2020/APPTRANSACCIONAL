<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Middleware;

class instahuntersController extends Controller
{
    /**
     * $request
     *
     * @var undefined
     */
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    /**
     * getFrmInstaHunter
     *
     * @return Illuminate\Contracts\Support\Renderable
     */
    public function getFrmInstaHunter()
    {

        return view('instahunters\instahunters');
    }




    /**
     * postGuzzleRequest
     *
     * @return void
     */
    public function postGuzzleRequest()
    {
        /* http://localhost/AnalisisBigData/public/apiInsert.php */
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'http://localhost/AnalisisBigData/public/apiInsert.php', [
            'json' => [
                'campoSelect' => $this->request->input('campoSelect'),
                'palabraClave' => $this->request->input('palabraClave'),
                ]
            ]

        );

        return view('instahunters\instahunters');

    }
}
