<?php

namespace App\Http\Controllers;

use App\Service\UserAgent\UserAgent;
use Illuminate\Http\Request;

class UserAgentController extends Controller
{
    public function index(UserAgent $agent)
    {
        return "У вас ОС:{$agent->system()}  и вы вошли с помощью браузера:{$agent->browser()}";
    }
}
