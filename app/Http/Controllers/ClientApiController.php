<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ClientResource;
use App\Models\Client;

class ClientApiController extends Controller
{
    //

    public function index (Request $request){
        $clients = Client::all();

        return ClientResource::collection($clients);
    }

}
