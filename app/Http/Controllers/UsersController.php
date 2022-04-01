<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index(Request $request) {
        $users_query = User::query();

        $search_param = $request->query('q');

        if ($search_param) {
            $users_query->where(function ($query) use ($search_param) {
                $query
                    ->orWhere('name', 'like', "%$search_param%")
                    ->orWhere('email', 'like', "%$search_param%")
                    ->orWhere('title', 'like', "%$search_param%")
                    ->orWhere('status', 'like', "%$search_param%")
                    ->orWhere('Role', 'like', "%$search_param%");
            });
        }

        $users = $users_query->get();

        return view('index', compact('users', 'search_param'));
    }
}
