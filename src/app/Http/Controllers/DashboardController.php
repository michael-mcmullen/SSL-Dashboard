<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $domains = Domains::orderBy('domain')->get();

        return view('dashboard.index', compact('domains'));
    }
}
