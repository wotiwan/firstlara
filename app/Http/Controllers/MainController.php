<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\MessageBag;

class MainController extends Controller
{
    public function showPage() {
        return view('registration');
    }

    public function addNewUser(Request $user) {
        $user_old = $user;
        $user->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        $name = $user->input('name');
        $user = $user->except('_token');

        Storage::disk('local')->put(Str::ulid().'.json', json_encode($user, 448));
        
        //return "user $name successfully registered!";
        $user_old->session()->flash('success', $name);
        return view('registration');
    }

    public function getUsers() {
        $files = Storage::disk('local')->files();

        $submissions = [];
        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
                $content = json_decode(Storage::get($file), true);
                $submissions[] = $content;
            }
        }

        return view('users_table', ['submissions' => $submissions]);
    }
}
