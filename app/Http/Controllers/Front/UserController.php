<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;




class UserController extends BaseController
{
    public function showIndex(){
        $date=[];
        $date['id']=5;
        $date['name']='ahmed';
        return view ('welcome', $date);
    }
    public function showUserinf(){
        $obj= new \stdClass();
        $obj -> name = 'ahmed';
        $obj -> age = '24';
        return view ('welcome', compact('obj'));
    }
    public function showUserAdr(){
        return 'Mila';
    }
}