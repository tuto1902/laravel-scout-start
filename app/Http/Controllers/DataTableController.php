<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataTableController extends Controller
{
    function index(Request $request) {
        $users = User::all();

        return view('index', compact('users'));
    }
}
