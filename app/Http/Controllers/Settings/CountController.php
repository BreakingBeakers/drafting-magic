<?php

namespace App\Http\Controllers\Settings;

use App\Events\CountEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountController extends Controller
{
    public function update(Request $request)
    {
        CountEvent::dispatch($request->get('count'));

        return [
            'count' => $request->get('count')
        ];
    }
}
