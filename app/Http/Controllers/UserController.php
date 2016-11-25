<?php

namespace App\Http\Controllers;

use Illuminate\Container\Container;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function showProfile(){
    // echo __METHOD__."<br/>";

    /*$url = route('profile');
    echo $url."<br/>";
    $url = route('admin::dashboard');
    echo $url."<br/>";

    echo csrf_field();*/
    //$redirect = redirect()->route('admin::dashboard');
    //echo $redirect;

    Container::getInstance()->flush();
    
    return __CLASS__;
  }
}
