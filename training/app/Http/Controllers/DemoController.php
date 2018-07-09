<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index()
    {
    	return "Method GET:Index";
    }

    public function demotwo()
    {
    	return "Method POST:demotwo";
    }

    public function demothree()
    {
        session(['myname'=>'Hello','myname2'=>'xxx']);
        echo session('myname')."<br />";
        echo session('myname2')."<br />";

        //session()->forget('myname');
        session()->flush();
        echo session('myname')."<br />";
        echo session('myname2')."<br />";
    	// return "Method GET,POST:demothree";
    }

    public function demofour()
    {
    	return "Method GET,POST,PUT/PATCH,DELETE:demofour";
    }

    public function testexcel(){

        $data = [
            [
                'name' => 'Povilas',
                'surname' => 'Korop',
                'email' => 'povilas@laraveldaily.com',
                'twitter' => '@povilaskorop'
            ],
            [
                'name' => 'Taylor',
                'surname' => 'Otwell',
                'email' => 'taylor@laravel.com',
                'twitter' => '@taylorotwell'
            ]
        ];
        return \Excel::download(new BladeExport($data), 'invoices.xlsx');
    }

}
