<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    public function filterJohns(): Collection
    {
        return User::where('email', 'LIKE', '%john%')->get();
    }
}
