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
            ->select(['id', 'first_name', 'last_name', 'email', 'company_id'])
            ->with('company:id,name')
            ->orderBy('first_name')
            ->orderBy('last_name')
            ->paginate(15)
            ->withQueryString();

        return Inertia::render('Users', ['users' => $users]);
    }
}
