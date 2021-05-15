<?php

namespace App\Http\Controllers;

use App\Jobs\VisitJob;
use App\Models\Visit;
use App\Service\UserAgent\UserAgent;
use Illuminate\Http\Request;

class UserAgentController extends Controller
{
    public function index(UserAgent $agent)
    {
        VisitJob::dispatch($agent)->onQueue('parsing');

        return "У вас ОС:{$agent->system()}  и вы вошли с помощью браузера:{$agent->browser()}";
    }
}
