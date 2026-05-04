<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Halaman utama perusahaan.
     */
    public function index(): View
    {
        return view('home', [
            'companyName' => 'PT Ready Industries Indonesia',
            'pageTitle' => 'PT Ready Industries Indonesia — Manufaktur Stamping Body Otomotif',
            'metaDescription' => 'PT Ready Industries Indonesia bergerak di bidang manufaktur otomotif, khususnya stamping body mobil dengan standar kualitas industri.',
        ]);
    }
}
