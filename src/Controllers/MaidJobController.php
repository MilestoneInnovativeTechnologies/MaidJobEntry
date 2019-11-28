<?php

namespace Milestone\MaidJobEntry\Controllers;

use Illuminate\Http\Request;

class MaidJobController extends Controller
{
    public function todayDate($form,$field,$data){
        $this->bag->store('DependValue',$form,['date' => date('Y-m-d')],true);
    }
}
