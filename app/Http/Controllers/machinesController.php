<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use Illuminate\Support\Facades\DB;
class machinesController extends Controller
{
    public function landing()
    {
        $machines = DB::table('machines')->distinct()->pluck('Category');
        return view('welcome', compact('machines'));
    }
    public function index()
    {
       /* $machines = Machine::all(); // Fetch all machine records
        return view('machines', compact('machines')); // Pass data to the view*/
        $userEmail = auth()->user()->email;
        $machines = DB::table('machines')->distinct()->pluck('Category');
        return view('dashboard', compact('machines', 'userEmail'));
    }
    public function show($category)
    {
    
        //$mach = Machine::where('Category', $category)->first();
        
        $mach = DB::table('machines')->where('Category',$category)->get();
        //$mach = DB::select('select * from machines where Category= $category',[1]);
        //$mach = DB::select('select * from machines where Category= :id', ['id' => $category]);
        return view('machines', compact('mach'));
    }
    public function display()
    {
        return view('addmachine');
    }
    public function displaydetails($Machine_name)
    {
        $mach = DB::table('machines')->where('Machine_name',$Machine_name)->get();
        return view('details', compact('mach'));
        
    }
    public function idea()
    {
        return view('idea');
    }

}
