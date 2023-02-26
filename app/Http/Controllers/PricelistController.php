<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricelistController extends Controller
{
    public function index() {
    $data = array('title' => 'Homepage');
    return view('priceml.index', $data);
    }

    public function pubg() {
    $data = array('title' => 'Homepage');
    return view('pricepubg.index', $data);
    }

    public function epep() {
    $data = array('title' => 'Homepage');
    return view('priceepep.index', $data);
    }

    public function domino() {
    $data = array('title' => 'Homepage');
    return view('pricedomino.index', $data);
    }

    public function genshin() {
    $data = array('title' => 'Homepage');
    return view('pricegenshin.index', $data);
    }

    public function aov() {
    $data = array('title' => 'Homepage');
    return view('priceaov.index', $data);
    }
}
