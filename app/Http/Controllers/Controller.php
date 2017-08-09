<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function serializeResponse($response, array $groups = [])
    {
        $serializer = SerializerBuilder::create()
            ->addMetadataDir(base_path('app/serializer/config'), 'App')
            ->build();
        $context = new SerializationContext();

        if (sizeof($groups) > 0) {
            $context->setGroups($groups);
        }

        return $serializer->serialize($response, 'json', $context);
    }
}
