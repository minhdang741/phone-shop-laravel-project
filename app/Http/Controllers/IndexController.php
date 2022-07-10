<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
	function FTest()
	{
		$StrTest = DB::select('select * from product'); // DB:select() output = [key => value] (KEY = só thứ tự tăng dần, VALUE = objects(data SQL đã truy vấn))
		// var_dump($StrTest[0]->NAME);
		// $ArrayTest = array(value($StrTest));
		// var_dump(value($StrTest));
		// $StrTest = 'Testing';
		// foreach($StrTest as $value)
		// {
		// }
		return view('index')->with('StrPath', '')->with('StrTest', $StrTest);
	}
}