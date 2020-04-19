<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

class TranslationController extends Controller
{
    private $base = [
        'A' => '^',
        'B' => 'V', 
        'C' => '<', 
        'D' => ')', 
        'E' => '-', 
        'F' => '=', 
        'G' => '8', 
        'H' => 'T', 
        'I' => '|',
        'J' => 'J', 
        'K' => 'X',
        'L' => '(', 
        'M' => 'W', 
        'N' => '"', 
        'O' => 'O', 
        'P' => ']', 
        'Q' => 'Q', 
        'R' => 'B', 
        'S' => '~', 
        'T' => 'L', 
        'U' => 'C', 
        'V' => '>', 
        'W' => 'U', 
        'X' => '+', 
        'Y' => '\\',
        'Z' => '/', 
        '?' => ':', 
        '.' => '°',
        ' ' => ' ',
    ];

    private $pronounce = [
        "^" => "a",
        "V" => "b",
        "<" => "c",
        ")" => "d",
        "-" => "e",
        "=" => "f",
        "8" => "g",
        "T" => "aa",
        "|" => "i",
        "J" => "j",
        "X" => "k",
        "(" => "l",
        "W" => "m",
        '"' => "n",
        "O" => "o",
        "]" => "p",
        "Q" => "k",
        "B" => "r",
        "~" => "s",
        "L" => "t",
        "C" => "u",
        ">" => "v",
        "U" => "w",
        "+" => "ks",
        "\\" => "y",
        "/" => "z",
        ":" => "?",
        "°" => ".",
        " " => " ",
    ];
    
    public function fromLatinToJekhr($word)
    {
        $base = $this->base;      
        $word = str_split(strtoupper($word));
        $finalWord = '';
        foreach ($word as $i) {
           $finalWord .= $base[$i];
        }
        return $finalWord;
    }

    public function fromJekhrmToLatin($word)
    {
        $base = array_flip($this->base);  
        $word =     
        $word = str_split($word);
        $finalWord = '';
        foreach ($word as $i) {
           $finalWord .= $base[$i];
        }
        return $finalWord;
    }

    public function pronunciation($word)
    {
        $base = $this->pronounce;      
        $word = str_split($word);
        $finalWord = '';
        foreach ($word as $i) {
           $finalWord .= $base[$i];
        }
        return $finalWord;
    }

    public function getTextJSON(Request $request)
    {
        if ($request->input('text')) {
            $word = $request->input('text');
        } else {
            return 'You must provide a text to translate.';
        }

        if ($request->input('method')) {
            $method = strtolower($request->input('method'));
        } else {
            return 'You must provide a method.';
        }
        
        $deepling = ["deepling", "deeplings", "jekhr"];
        $latin = ["english", "latin", "portuguese"];
        
        $response = [];
        $response["requested"] = $word;
        $response["pronounce"] = "";
        
        if (in_array($method, $latin)) {
            $response["translated"] = $this->fromLatinToJekhr($word);
            $response["pronounce"] = $this->pronunciation($this->fromLatinToJekhr($word));
        } elseif (in_array($method, $deepling)) { 
            $response["translated"] = $this->fromJekhrmToLatin($word);
        } else {
            return 'You must provide a valid method, i.e.: latin or deepling.';
        }
        
        return response()->json($response);
     }
}
