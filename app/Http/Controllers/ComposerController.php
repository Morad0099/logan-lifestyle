<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class ComposerController extends Controller
{
    public function install()
    {
        $process = new Process(['composer', 'install']);
        $process->run();

        // Executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return response()->json([
            'output' => $process->getOutput(),
            'error' => $process->getErrorOutput(),
        ]);
    }

    public function switchLang($locale)
    {
        if (array_key_exists($locale, config('languages'))) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        }
        return redirect()->back();
    }
}
