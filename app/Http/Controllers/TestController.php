<?php

namespace App\Http\Controllers;

use App\Entities\Test;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use LaravelDoctrine\ORM\Facades\EntityManager;

class TestController extends Controller
{

    public function test()
    {
        return $this->serializeResponse(EntityManager::find(Test::class, 1), []);
    }
}
