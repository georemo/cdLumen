<?php 

namespace CD\Sys\User\Test;

use CD\Sys\User\Controllers as user;
use user\AuthController;

class TestController extends Controller
{

    public function index()
    {
        $items = array(
            'items' => [
                'xxx',
                'yyy',
                'Arrive in San Juan',
            ],
        );
        dd($items);
        return view('welcome2');
    }

}