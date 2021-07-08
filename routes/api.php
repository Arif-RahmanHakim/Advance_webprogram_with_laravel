<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Siswa;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/data-siswa",function(){
    $data = Siswa::all();
    return $data;
});
Route::get("/kelas-siswa",function(){
    $data = Siswa::where("kelas","7B")->get();
    return $data;
});
Route::get("/show-siswa/{nama}",function($nama){
    $data = Siswa::where("nama",$nama)->get();
    return $data;
});