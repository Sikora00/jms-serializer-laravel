<?php

namespace App\Http\Controllers;

use App\Entities\Test;
use LaravelDoctrine\ORM\Facades\EntityManager;

class TestController extends Controller
{

    /**
     * @return mixed
     */
    public function test()
    {
        $result = [EntityManager::find(Test::class, 1), EntityManager::find(Test::class, 1), EntityManager::find(Test::class, 1)];
        return $this->serialize($result, ['test2']);
    }
}
