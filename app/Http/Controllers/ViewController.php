<?php

namespace App\Http\Controllers;

use App\Http\Traits\lang;

class ViewController extends Controller
{
    use lang;

    protected $lang;

    public function __construct()
    {
        $this->lang = $this->lang();
    }

    //ClientPage
    public function cardView()
    {
        $lang = $this->lang();

        return view('ProjectFiles.cardView', [
            'number' => 1,
            'lang' => $this->lang,
        ]);
    }

    //UserPage
    public function userViewCard()
    {
        return view('ProjectFiles.userCard', [
            'number' => 1,
            'lang' => $this->lang,
        ]);
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
