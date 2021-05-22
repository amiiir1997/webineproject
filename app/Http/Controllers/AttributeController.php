<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attribute;
use App\Http\Controllers\PackageController;

class AttributeController extends Controller
{
    public function insertattribute(Request $request){
    	$newattribute = new Attribute ;
    	$newattribute->name = $request->input('name');
    	$newattribute->save();
    	return app('App\Http\Controllers\PackageController')->packages();
    }

}
