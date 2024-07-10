<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    public function getCategory(){
        $sql = "SELECT * FROM tblcategory where 1=1 ";
        $rs = DB::select($sql);
        return $rs;
    }
}
