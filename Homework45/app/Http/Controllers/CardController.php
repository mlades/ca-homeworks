<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cards;


class CardController extends Controller
{
    public function index() {
        
        $cards = cards::all();
       
        return view('index', [
            'cards' => $cards
        ]);
    }

    public function show($card) {
        $cards = Cards::findOrFail($card);
        return view('cards.read', ['card' => $cards]);
    }

    public function create() {
        return view('cards.create');
    }

    public function store(Request $request) {
        $this->validateCard();
        $imageName = $request->img_filename->getClientOriginalName();
        $path = $request->img_filename->storeAs('images', $imageName);
      
        $card = new Cards();
        $card->body = request('body');
        $card->img_filename = $imageName;
        $card->save();
        
        return redirect('/');
    }

    public function edit($card) {
        $card = Cards::findOrFail($card);

        return view('cards.edit', ['card' => $card]);
    }

    public function update(Cards $card) {
        $card->update($this->validateCard());

        return redirect('/');
    }

    public function destroy(Cards $card) {
        $card->delete();
        
        return redirect('/');
    }

    private function validateCard() {
        return request()->validate([
            'body' => 'required|min:15',
            'img_filename' => 'required',
        ]);
    }
}
