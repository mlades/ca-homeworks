<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cards;


class CardController extends Controller
{
    public function index() {
        $cards = cards::all();
        return view('index', [
            'cards' => $cards
        ]);
    }
}
