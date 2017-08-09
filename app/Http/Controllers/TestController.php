<?php

namespace App\Http\Controllers;

use App\Entities\Test;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use LaravelDoctrine\ORM\Facades\EntityManager;
use Metadata\ClassMetadata;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;

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
