<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Album;
use App\Photo;

class ServiceController extends Controller
{
    //
    public function index()
    {
        return view ('pages.service.service');
        
    }

    public function konstruksi_index()
    {
        return view ('pages.service.konstruksi');
    }

    public function mekanikal_index()
    {
        return view ('pages.service.mekanikal');
    }

    public function tailor_index()
    {
        return view ('pages.service.tailor');
    }

    public function ti_index()
    {
        return view ('pages.service.ti');
    }

    public function welding_index()
    {
        return view ('pages.service.welding');
    }

    public function support_index()
    {
        return view ('pages.service.support');
    }
    
}
