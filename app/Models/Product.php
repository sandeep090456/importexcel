<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = ['school_name','name','class','subject'];

    public static function getProducts()
    {
        $records = DB::table('students')->select('id','name','admission_no');
        return $records;
    }
}
