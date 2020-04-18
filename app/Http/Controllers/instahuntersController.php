<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Middleware;
use GuzzleHttp\Client;


class instahuntersController extends Controller
{
    /**
     * $request
     *
     * @var undefined
     */
    protected $request;
    protected $client;


    public function __construct(Request $request) {
        $this->request = $request;
        $this->client = new Client([
            'base_uri' => 'http://localhost/AnalisisBigData/public/'
        ]);
        $this->middleware('auth');
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

    public function getFrmInstaHunterview()
    {
            $response =  $this->client->request('GET', 'apiPreview.php');
            $posts = json_decode($response->getBody()->getContents());

            return view('instahunters\instahunterview', compact('posts'));
    }


    /**
     * postGuzzleRequest
     *
     * @return void
     */
    public function postGuzzleRequest()
    {
        /* http://localhost/AnalisisBigData/public/apiInsert.php */
        $res = $this->client->request('POST', 'apiInsert.php', [
            'json' => [
                'campoSelect' => $this->request->input('campoSelect'),
                'palabraClave' => $this->request->input('palabraClave'),
                ]
            ]

        );

        return view('instahunters\instahunters');

    }


    public function getCsv()
    {
        $client = new Client([
            'base_uri' => 'http://localhost/AnalisisBigData/public/'
        ]);

            $response = $client->request('GET', 'apiPreview.php');
            $posts = json_decode($response->getBody()->getContents(), true);

            $headers = ['img', 'txt','date', 'likes','comentarios'];
            $posts = array_merge([$headers], $posts);

            return (new \LaravelCsvGenerator\LaravelCsvGenerator())
                    ->setData($posts)
                    ->renderStream();
        }

}
