<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RandomUserController extends Controller
{
    public function show(): array {
        $user = User::inRandomOrder()->limit(1);

        $user->increment('views_count');

        dd($user->get()->toArray());
    }
}
