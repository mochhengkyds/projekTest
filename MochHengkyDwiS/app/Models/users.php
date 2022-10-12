<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public function showData()
    {
        $data = DB::table('users')->get();
        return $data;
    }
}
