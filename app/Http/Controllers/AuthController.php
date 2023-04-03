<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class AuthController extends Controller
{
    public function signup()
    {
        //dd(Client::first());
        return view('signup');
    } 
    public function create(Request $request)
    {
        $client = new Client($request->all());
        // $client->name = $request->name;
        // $client->login = $request->login;
        // $client->password = $request->password;
        $client->image = $request->image->get();
        //$path = $request->photo->store('images');
        //dd($request->image->get(), $client);

        $client->save();
 
        return redirect('/signup');
    } 

}
