<?php

namespace App\Http\Controllers;
// namespace App\Models;

use App\Http\Controllers\Controller;
use App\Models\IndexModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
	function FTest()
	{
		// $StrTest = DB::select('select * from product'); // DB:select() output = [key => value] (KEY = só thứ tự tăng dần, VALUE = objects(data SQL đã truy vấn))
		// var_dump($StrTest[0]->NAME);
		// $ArrayTest = array(value($StrTest));
		// var_dump(value($StrTest));
		// $StrTest = 'Testing';
		// foreach($StrTest as $value)
		// {
			// }
		$ObjIndexModel = new IndexModel();
		$ObjProduct = $ObjIndexModel::FRetriveData();
		return view('index')->with('StrPath', '')->with('ObjProduct', $ObjProduct);
	}
}