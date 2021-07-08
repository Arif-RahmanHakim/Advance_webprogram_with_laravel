<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
class ExampleController extends Controller
{
    public function hello()
    {
        return view("hello");
    }

    public function hii($nama)
    {
        return view("hii")->with("nama", $nama);
    }
    public function bye($nama)
    {
        return view("bye1")->with("nama", $nama);
    }
    public function apaKabar($gelar, $nama)
    {
        return "Hii $gelar $nama";
    }
}