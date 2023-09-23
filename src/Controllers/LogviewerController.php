<?php

namespace Falcon\Logviewer\Controllers;

use App\Http\Controllers\Controller;
use Falcon\Logviewer\Models\Log;

class LogviewerController extends Controller
{
    const LOG_RECORD_PAGE_COUNT = 20;
    public function index()
    {
        $logs = Log::paginate(self::LOG_RECORD_PAGE_COUNT);
        return view('falcon.logviewer.list', compact("logs"));
    }

}
