<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class URLController extends Controller
{
    public function qrGen()
    {
        return QrCode::size(200)
            ->generate('COding Xpress');
    }
}
