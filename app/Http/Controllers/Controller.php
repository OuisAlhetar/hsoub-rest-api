<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BasicController;

abstract class Controller extends BasicController
{
    use AuthorizesRequests;
}
