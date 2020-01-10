<?php

Route::prefix('/api/bedard/assetmonitor')->group(function() {
    Route::get('size', 'Bedard\AssetMonitor\Http\Controllers\AssetsController@size');
});
