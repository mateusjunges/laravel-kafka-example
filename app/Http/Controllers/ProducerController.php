<?php

namespace App\Http\Controllers;

use Junges\Kafka\Facades\Kafka;

class ProducerController
{
    public function __invoke()
    {
        Kafka::publishOn('test-topic')
            ->withBodyKey('foo', 'bar')
            ->withHeaders([
                'foo-header' => 'foo-value'
            ])
            ->send();

        return response()->json('Message published!');
    }
}
