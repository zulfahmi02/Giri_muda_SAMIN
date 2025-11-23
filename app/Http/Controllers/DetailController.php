<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display Ajaran page
     */
    public function ajaran()
    {
        return view('detail.ajaran');
    }
    
    /**
     * Display Sejarah page
     */
    public function sejarah()
    {
        return view('detail.sejarah');
    }
    
    /**
     * Display Tokoh page
     */
    public function tokoh()
    {
        return view('detail.tokoh');
    }
    
    /**
     * Display Kepercayaan page
     */
    public function kepercayaan()
    {
        return view('detail.kepercayaan');
    }
}