<?php

namespace App\Http\Controllers;

use App\Models\AllVisitor;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::latest()->where('status', 1)->get();
        $products = Product::latest()->where('status', 1)->get();
        $allVisitor = AllVisitor::count();
        $todaysVisitor = AllVisitor::whereDate('date', Carbon::today())->count();
        $currentMonthVisitor = AllVisitor::whereMonth('date', date('m'))->count();
        $lastVisitTime = AllVisitor::orderBy('date', 'desc')->first();
        return view('backend.dashboard.index', compact('categories','products','allVisitor','lastVisitTime', 'todaysVisitor', 'currentMonthVisitor'));
    }
}
