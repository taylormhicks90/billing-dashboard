<?php

namespace Glint\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * Determine the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function version(Request $request): string
    {
        return 'taylor-bp-'.parent::version($request);
    }
}
