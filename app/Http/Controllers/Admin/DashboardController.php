<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Gallery;
use App\Models\Agenda;
use App\Models\Info;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch total counts from the respective models
        $totalUsers = User::count();
        $totalGalleries = Gallery::count();
        $totalAgendas = Agenda::count();
        $totalInfos = Info::count();

        // Pass the data to the view
        return view('admin.dashboard', compact('totalUsers', 'totalGalleries', 'totalAgendas', 'totalInfos'));
    }
}
