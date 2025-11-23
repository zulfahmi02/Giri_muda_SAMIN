<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VRController extends Controller
{
    /**
     * Display VR gallery page
     */
    public function index()
    {
        return view('vr.index');
    }
    
    /**
     * Display specific VR scene
     */
    public function view($scene)
    {
        // Validate scene name
        $allowedScenes = [
            'rumah-tradisional',
            'ladang-pertanian',
            'upacara-adat',
            'kehidupan-sehari',
            'kerajinan-tangan',
            'pemandangan-alam'
        ];
        
        if (!in_array($scene, $allowedScenes)) {
            abort(404);
        }
        
        return view('vr.view', compact('scene'));
    }
}