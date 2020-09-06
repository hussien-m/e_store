<?php


namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;

class AdminBasedController extends Controller
{
    public function __construct()
    {
        $data = "Hello  world";
        view()->share([
           'data' => $data,
        ]);
    }
}
