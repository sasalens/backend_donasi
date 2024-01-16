<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Donation;
use App\Models\Donatur;

class DashboardController extends Controller
{
    public function index()
    {

        //donatur
        $donaturs = Donatur::count();

        //campaign
        $campaigns = Campaign::count();

        //donations
        $donations = Donation::where('status', 'success')->sum('amount');

        return view('admin.dashboard.index', compact('donaturs', 'campaigns', 'donations'));
    }
}
