<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TodosController extends Controller
{

    public function index(Client $client)
    {
        return view('Todos.index');
    }

    public function create(Client $client )
    {
        $response = $client->request('GET', "users");
        $users = json_decode($response->getBody());

        return view('Todos.create',compact('users'));
    }

    public function show($id,Client $client)
    {
        $response=$client->request('GET', ('todos/'.$id));
        if ($response->getStatusCode()==200) {
            $todo = json_decode($response->getBody());
            $response=$client->request('GET', ('users/'.$todo->userId));

            if($response->getStatusCode()==200){
                $user=json_decode($response->getBody());
            }else{
                $user=[];
            }
            
            return view('Todos.show',compact('user','todo'));
        }else{
            abort(404);
        }
    }

    public function edit($id,Client $client)
    {
        $response=$client->request('GET', ('todos/'.$id));
        if ($response->getStatusCode()==200) {
            $todo = json_decode($response->getBody());
            $response=$client->request('GET', ('users/'.$todo->userId));

            if($response->getStatusCode()==200){
                $user=json_decode($response->getBody());
            }else{
                $user=[];
            }
            $response = $client->request('GET', "users");
            $users = json_decode($response->getBody());
            return view('Todos.edit',compact('user','todo','users'));
        }else{
            abort(404);
        }
    }

}
