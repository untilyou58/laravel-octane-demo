<?php
// app/Http/Controllers/MainController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class MainController extends Controller {
    public static $list = [];
    public function index()  {
        self::$list[]= \random_int(1,6);
        return view('welcome');
    }

    public function show()  {
        return view('show', ["list" => self::$list]);
    }

}