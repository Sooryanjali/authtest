<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use Illuminate\Support\Facades\DB;
class machinesController extends Controller
{
    public function index()
    {
       /* $machines = Machine::all(); // Fetch all machine records
        return view('machines', compact('machines')); // Pass data to the view*/
        $machines = DB::table('machines')->pluck('Category');
        return view('dashboard', compact('machines'));
    }


}
