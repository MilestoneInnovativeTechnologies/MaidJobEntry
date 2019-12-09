<?php

namespace Milestone\MaidJobEntry\Controllers;

use Illuminate\Http\Request;

class MaidJobController extends Controller
{
    public function todayDate($form,$field,$data){
        return date('Y-m-d');
    }
}
