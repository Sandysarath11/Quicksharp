<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::select('select * from products where status = ?', [1]);
        $i=0;
       return view('product.index',['data'=>$data,'c'=>$i]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post=Request::all();

        DB::insert('insert into products (name,part_no,uom_id,hsn_code,sales_price,purchase_price,quantity,tax_type,tax,company_id,created_by) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$post['product']['name'],$post['product']['partno'],$post['product']['uom'],$post['product']['hsn'],$post['product']['sale'],$post['product']['purchase'],$post['product']['quantiy'],$post['product']['tax'],$post['product']['saletax'],1,1]);

        return redirect()->to('product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
