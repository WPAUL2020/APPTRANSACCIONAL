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
    protected $data2view;


    public function __construct(Request $request) {
        $this->request = $request;
        $this->client = new Client([
            'base_uri' => 'http://localhost/AnalisisBigData/public/'
        ]);
        $this->data2view = null;
        $this->middleware('auth');
    }

    /**
     * getFrmInstaHunter
     *
     * @return Illuminate\Contracts\Support\Renderable
     */
    public function getFrmInstaHunter()
    {
        $data2view = null;
        if ($data2view!=null) {
            return view('instahunters\instahunters', compact('data2view'));
        }
        else {
            return view('instahunters\instahunters' , compact('data2view'));
        }
    }

    public function getFrmInstaHunterview()
    {
            $response =  $this->client->request('GET', 'apiPreview.php');
            $allData = json_decode($response->getBody()->getContents());

            return view('instahunters\instahunterview', compact('allData'));
    }


    /**
     * postGuzzleRequest
     *
     * @return void
     */
    public function postGuzzleRequest()
    {
        $data2view = null;
        /* http://localhost/AnalisisBigData/public/apiInsert.php */
        $res = $this->client->request('POST', 'apiInsert.php', [
            'json' => [
                'campoSelect' => $this->request->input('campoSelect'),
                'palabraClave' => $this->request->input('palabraClave'),
                ]
            ]

        );
        $data2view = json_decode($res->getBody()->getContents());

        if ($data2view!=null) {
            $success = "<script>alert('".$data2view->message."')</script>";
            return view('instahunters\instahunters', compact('success', 'data2view'));
        }
        else {
            return view('instahunters\instahunters', compact('data2view'));
        }





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
