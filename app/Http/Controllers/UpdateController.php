<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use ZipArchive;
use App\Http\Controllers\ProcessorController;

class UpdateController extends Controller
{
    public function showVersion()
    {
        // Retrieve current version from config or database
        $currentVersion = '1.3.0'; // Adjust this according to your configuration

        // Retrieve latest version from an external source or database
        $latestVersion = '1.2.0'; // Example: Replace with logic to fetch latest version

        return view('app.settings.version', compact('currentVersion', 'latestVersion'));
    }
}
