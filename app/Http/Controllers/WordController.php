<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    protected $totalWord, $totalChar;
    public function wordCount(){
        return view('word-count');
    }
    public function result(Request $request){
        $this->totalWord = str_word_count($request->enter_text);
        $this->totalChar = strlen($request->enter_text);
        return redirect()->back()->with([
            'inputText' => $request->enter_text,
            'totalWord' => $this->totalWord,
            'totalChar' => $this->totalChar,
        ]);
    }
}
