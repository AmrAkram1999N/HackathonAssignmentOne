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
    public function cardView($lang = 'en')
    {
        $language = $this->lang($lang);

        return view('ProjectFiles.cardView', [
            'number' => 1,
            'lang' => $language,
        ]);
    }

    //UserPage
    public function userViewCard($lang = 'en')
    {
        $language = $this->lang($lang);

        return view('ProjectFiles.userCard', [
            'number' => 1,
            'lang' => $language,
        ]);
    }

    //Language Choice
    // public function langChoice($lang)
    // {
    //     $language = $this->lang($lang);

    // }

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
