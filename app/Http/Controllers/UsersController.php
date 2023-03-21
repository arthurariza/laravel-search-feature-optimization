<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->with('company')
            ->paginate(15)
            ->withQueryString();

        return Inertia::render('Users', ['users' => $users]);
    }
}