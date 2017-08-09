<?php

namespace App\Http\Controllers;

use App\Entities\Test;
use LaravelDoctrine\ORM\Facades\EntityManager;

class TestController extends Controller
{

    public function test()
    {
        $test = new Test('test1', 'jdaksjdkajkwdkncnaj nsdn awu nawu');
        EntityManager::persist($test);
        EntityManager::flush();
    }
}
