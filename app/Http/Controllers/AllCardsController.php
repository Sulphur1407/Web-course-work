<?php

namespace App\Http\Controllers;


use App\Models\Card;
use Illuminate\Http\Request;

class AllCardsController extends Controller
{
    public function show($cardName)
    {
        if ($cardName != "all") { //Присутня назва карти
            $card = Card::where("card", $cardName)->first();
            if ($card) {
                return view("about-card", compact("card"));
            }
        } 
        else { // Назва карти відсутня, виводимо всі карти
            return view('all-cards');
        }
    }
}
