<?php

namespace App\Http\Controllers;

class Quiz1Controller extends Controller
{
    public function hello()
    {
        return "Hello Arif";
    }
    public function Bio($nama,)
    {
        return view("biodata")->with("nama",$nama);
    }
}
?>