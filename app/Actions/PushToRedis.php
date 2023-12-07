<?php

namespace App\Actions;

use Illuminate\Support\Facades\Log;
use Statamic\Actions\Action;

class PushToRedis extends Action
{
    /**
     * The run method
     *
     * @return void
     */
    public function run($items, $values)
    {
        foreach($items as $item) {
            Log::info('Item {id} pushed to Redis.', ['id' => $item->id]);
        }
    }
}
