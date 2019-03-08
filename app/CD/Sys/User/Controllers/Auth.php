<?php 

namespace CD\Sys\User\Controllers;

use App\Http\Controllers\Controller;
use CD\Sys\User\Controllers as user;
use user\SessionController;

class Auth extends Controller
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