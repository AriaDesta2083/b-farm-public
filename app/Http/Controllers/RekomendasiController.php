<?php

namespace App\Http\Controllers;

use App\Models\Rekomendasi;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{

    private $params;

    public function index()
    {
        $this->params['rekomendasi'] = Rekomendasi::get();
        return view('rekomendasi.index', $this->params);
    }
}
