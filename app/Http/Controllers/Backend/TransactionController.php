<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TransactionController extends Controller
{
    public function __construct()
    {
        Gate::authorize('app.dashboard');
    }

    public function index()
    {
        
    }
}
