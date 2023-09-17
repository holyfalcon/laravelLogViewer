<?php

namespace Falcon\Logviewer\Controllers;

use App\Http\Controllers\Controller;
use Falcon\Logviewer\Models\Log;

class LogviewerController extends Controller
{
    const LOG_RECORD_PAGE_COUNT = 5;
    public function index()
    {
        $logs = Log::paginate(self::LOG_RECORD_PAGE_COUNT);
        return view('falcon.logviewer.list', compact("logs"));
    }

    public function create()
    {
        $tasks = Log::all();
        return view('falcon.logviewer.list');
    }
//
//    public function destroy($id)
//    {
//        $task = Log::findOrFail($id);
//        $task->delete();
//        return redirect()->route('task.create');
//    }
}
