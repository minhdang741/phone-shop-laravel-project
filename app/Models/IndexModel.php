<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IndexModel extends Model
{
    protected static function FRetriveData()
	{
		$ObjProduct = DB::select('select * from product'); // DB:select() output = [key => value] (KEY = só thứ tự tăng dần, VALUE = objects(data SQL đã truy vấn))
		return $ObjProduct;
	}
}
