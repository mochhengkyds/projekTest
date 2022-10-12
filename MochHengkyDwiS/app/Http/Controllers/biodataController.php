<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class biodataController extends Controller
{
    //untuk otomatis jalan atau di panggil
    public function __construct()
    {
        $this->users = new users;
    }

    //menampilkan data
    public function index()
    {
        $users = [
            'users' => $this->users->showData()
        ];
        // dd($users);
        return view('biodata', $users);
    }
}
