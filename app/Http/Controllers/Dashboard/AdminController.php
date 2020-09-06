<?php


namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AdminController extends AdminBasedController
{
    public $title;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return  view('admin.views.dashboard');
    }

}
