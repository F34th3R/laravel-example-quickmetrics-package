<?php

namespace App\Http\Controllers;

use feather\Quickmetrics\Quickmetrics;
use Illuminate\Http\Request;

class MetricsController extends Controller
{
    public function test()
    {
        return Quickmetrics::evet('This is a test', 1.30);
    }
}
