<?php

namespace Bedard\AssetMonitor\Http\Controllers;

use Closure;
use Illuminate\Routing\Controller;
use Illuminate\Filesystem\Filesystem;
use Storage;

class AssetsController extends Controller
{
    /**
     * Measure the size of a set of files.
     *
     * @return array
     */
    public function size()
    {
        $fs = new Filesystem;
        
        $paths = array_map('trim', explode(',', input('path')));

        $size = 0;

        foreach ($paths as $path) {
            $files = $fs->glob(themes_path($path));

            foreach ($files as $file) {
                $size += $fs->size($file);
            }
        }

        $message = $size . 'B';

        if ($size >= 1000000) {
            $message = round($size / 1000000, 2) . ' MB';
        } elseif ($size >= 1000) {
            $message = round($size / 1000, 2) . ' KB';
        }

        return [
            'color' => 'orange',
            'label' => 'size',
            'message' => $message,
            'schemaVersion' => 1,
        ];
    }
}
