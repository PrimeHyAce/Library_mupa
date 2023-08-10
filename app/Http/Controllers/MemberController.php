<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * index
     * 
     * @return void
     */

    public function index()
    {
        return view('member.index');
    }
}
