<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function getStaffs()
    {
        $staffs = Staff::all();
        return $staffs;
    }
}
