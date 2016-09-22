<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HookController extends Controller
{
    public function hook(Request $request)
    {
        $git_path = "/data/wwwroot/tel";
        shell_exec("cd ".$git_path);
        $res = shell_exec("/usr/bin/sudo /usr/bin/git pull 2>&1");
        \Log::info($res);
    }
}

