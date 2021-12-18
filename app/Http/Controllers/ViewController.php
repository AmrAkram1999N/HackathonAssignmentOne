<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    //ClientPage
    public function cardView()
    {
        return view('ProjectFiles.cardView', ['number' => 1]);
    }

    //UserServicePage
    public function userViewCard()
    {
        return view('ProjectFiles.userCard',['number'=> 1]);
    }

    //Project System
    public function databaseSystem()
    {
        return view('ProjectSystem.DatabaseMap');
    }
    public function interfaceSystem()
    {
        return view('ProjectSystem.InterfaceMap');
    }
    public function controllerModelSystem()
    {
        return view('ProjectSystem.Controller&Models');
    }
}
