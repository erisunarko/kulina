<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeKulina extends Controller
{
    public function index() {
		$rev_res = DB::table('user_review')->get();
		return view('index', ['rev_res' => $rev_res]);
	}
	
	public function add() {
		return view('add');
	}
	
	public function store(Request $request) {
		date_default_timezone_set('Asia/Jakarta');
		$dateNow = date("Y-m-d H:i:s");
		DB::table('user_review')->insert([
			"order_id" => $request->order_id,
			"product_id" => $request->product_id,
			"user_id" => $request->user_id,
			"rating" => $request->rating,
			"review" => $request->review,
			"created_at" => $dateNow,
			"update_at" => $dateNow
		]);
		return redirect('/review');
	}
	
	public function edit($id) {
		$rev_res = DB::table('user_review')->where('id', $id)->get();
		return view('edit', ['rev_res' => $rev_res]);
	}
	
	public function update(Request $request) {
		date_default_timezone_set('Asia/Jakarta');
		$dateNow = date("Y-m-d H:i:s");
		DB::table('user_review')->where('id', $request->id)->update([
			"order_id" => $request->order_id,
			"product_id" => $request->product_id,
			"user_id" => $request->user_id,
			"rating" => $request->rating,
			"review" => $request->review,
			//"created_at" => $dateNow,
			"update_at" => $dateNow
		]);
		return redirect('/review');
	}
	
	public function remove($id) {
		$rev_res = DB::table('user_review')->where('id', $id)->delete();
		return redirect('/review');
	}
}
