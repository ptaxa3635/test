<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TtsController extends Controller
{
    public function index() {
        $bbs =Bb::latest()->get();
        $s = "Запись\r\n\r\n";
        foreach ($bbs as $tt) {
            $s .= $tt->title . "\r\n";
            $s .= $tt->content . "\r\n";
            $s .="\r\n";
        }
    }
}
