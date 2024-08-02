<?php
/*
 * User: Sarathkumar
 * Date: 16/07/2024
 * Time: 09:41 AM
 */
?>
@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h5>Add New Product</h5>
    <div class="container-fluid mt-4 border">
        <form action="{{ route('product.add')}}" method="post" class="mt-4 mb-4">
            @csrf
            <div class="row">
                <div class="col-lg-2">
                    <label for="">ProductName</label>
                    <input type="text" name="product[name]" class="form-control h-50" id="">
                </div>
                <div class="col-lg-2">
                    <label for="">PartNo</label>
                    <input type="text" name="product[partno]" class="form-control h-50" id="">
                </div>
                {{-- <div class="col-lg-2">
                    <label for="">ProductType</label> --}}
                    {{-- <input type="text" name="product[producttype]" class="form-control h-50" id=""> --}}
                    {{-- <select name="product[producttype]" id="" class="form-control">
                        <optgroup>
                            <option value="1">5%</option>
                            <option value="2">12%</option>
                            <option value="3">18%</option>
                        </optgroup>
                    </select>
                </div> --}}
                <div class="col-lg-2">
                    <label for="">Uom</label>
                    {{-- <input type="text" name="product[uom]" class="form-control h-50" id=""> --}}
                    <select name="product[uom]" id="" class="form-control">
                        <optgroup>
                            <option value="1">CFT</option>
                            <option value="2">KG</option>
                            <option value="3">UNIT</option>
                            <option value="4">MTS</option>
                            <option value="5">METER</option>
                            <option value="6">LT</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-lg-2">
                    <label for="">HSN/Code</label>
                    <input type="text" name="product[hsn]" class="form-control h-50" id="">
                </div>
                <div class="col-lg-2">
                    <label for="">SalesPrice</label>
                    <input type="text" name="product[sale]" class="form-control h-50" id="">
                </div>
                <div class="col-lg-2">
                    <label for="">PurchasePrice</label>
                    <input type="text" name="product[purchase]" class="form-control h-50" id="">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-2">
                    <label for="">Quantity</label>
                    <input type="text" name="product[quantiy]" class="form-control h-50" id="">
                </div>
                <div class="col-lg-2">
                    <label for="">Tax</label>
                    {{-- <input type="text" name="product[tax]" class="form-control h-50" id=""> --}}
                    <select name="product[tax]" id="" class="form-control">
                        <optgroup>
                            <option value="">NONE</option>
                            <option value="1">5%</option>
                            <option value="2">12%</option>
                            <option value="3">18%</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-lg-2">
                    <label for="">SalesTax</label>
                    <input type="text" name="product[saletax]" class="form-control h-50" id="">
                </div>
            </div>
            <div class="row mt-4">
               <div class="col-lg-12 text-center">
                    <button class="btn btn-light border">Add New</button>
               </div>
            </div>
        </form>
    </div>
    <br>
    <div class="container-fluid mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>PartNo</th>
                    <th>HSN/Code</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ ++$c }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->part_no }}</td>
                    <td>{{ $item->hsn_code }}</td>
                    <td>{{ $item->purchase_price }}</td>
                    <td><a href="#"><i class="fas fa-ban"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
