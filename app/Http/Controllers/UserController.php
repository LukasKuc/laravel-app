<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    public function index(): Collection
    {
        $users = User::all();

        $users->each(function($user) {
            $user->increment('views_count');
        });

        dd($users);
    }

    public function show(int $id): array
    {

        $user = User::find($id);

        $user->increment('views_count');

        dd([
            'email' => $user->email,
            'full_name' => $user->name . ' ' . $user->surname,
            'created_at' => $user->created_at->toDateTimeString()
        ]);
    }
}
