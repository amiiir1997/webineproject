<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Attribute;


class PackageController extends Controller
{
    public function insertpackage(Request $request){
    	$id = Package::insertGetId(
    			['name' => $request->input('name'),
    			'price' => $request->input('price')]
			);
    	$att = Attribute::get();
    	$package = Package::find ($id);
    	for($i = 0 ; $i < count($att); $i++){
    		if($request->input('id'. $att[$i]['id'])){
    			$temp1 =$att[$i]['id'];
    			$temp2 =$request->input('value'. $att[$i]['id']);
    			$package->attributes()->attach($temp1 , ['value'  => $temp2]);
    		}
    	}
    	return $this->packages();
    }

    public function createpackage(){
    	$data = Attribute::get();
    	return view('newpackage')->with('data' , $data);
    }

    public function packages(){
    	$packages = Package::orderby("created_at")->get();
    	for ($i = 0 ; $i < count($packages) ; $i++) {
    		$ret[$i]['name'] = $packages[$i]['name']; 
    		$ret[$i]['price'] = $packages[$i]['price'];
    		$ret[$i]['atts'] = Package::find($packages[$i]['id'])->attributes()->get();  
    	}
    	if($i == 0)
    		$ret = [];
    	//return $ret;
    	return view('packages')->with('data' , $ret);
    }
}
