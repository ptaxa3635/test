<?php

namespace App\Http\Controllers;

use App\Models\Bb;
class BbsController extends Controller {
    public function index() {
        $context = ['bbs' => Bb::latest()->get()];
        return view('index', $context);
        return view('user.index', [
            'users' => Bb::table('users')->paginate(15)
        ]);
    }

    public function detail(Bb $bb) {
        $posts = Bb::paginate (5);
        return view('detail', ['bb' => $bb]);
    }
    
}

