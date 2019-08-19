<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AboutController extends BaseController
{
    public function showDetails()
    {	
    	return 'Return about Content';
    }

     public function showSubject($theSubject)
    {	
    	return "Details information about $theSubject";
    }
}
