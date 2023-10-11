<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function theme() {
        return DB::table('theme')->where('id', $this->theme_id)->get();

    }

    public function themes() {
        return DB::table('theme')->get();
    }

    public function fonts() {
        return DB::table('fonts')->get();
    }
}
