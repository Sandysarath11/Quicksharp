<?php
/*
 * User: Sarathkumar
 * Date: 16/07/2024
 * Time: 09:41 AM
 */
?>

@extends('layouts.app')
@section('content')
<div class="container border">
    <h5 class="mb-4">New Company</h5>
    <form action="{{ route('addcompany') }}" method="POST" class="mt-3 mb-3" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <label for="">Name</label>
                <input type="text" name="com[name]" class="form-control h-50" id="">
            </div>
            <div class="col-lg-2 col-md-2">
                <label for="">Email</label>
                <input type="email" name="com[email]" class="form-control  h-50" id="">
            </div>
            <div class="col-lg-2 col-md-2">
                <label for="">GST</label>
                <input type="text" name="com[gst]" class="form-control  h-50" id="">
            </div>
            <div class="col-lg-2 col-md-2">
                <label for="">Finance Start</label>
                <input type="date" name="com[fy-start]" class="form-control date h-50" id="">
            </div>
            <div class="col-lg-2 col-md-2">
                <label for="">Finance End</label>
                <input type="date" name="com[fy-end]" class="form-control date h-50" id="">
            </div>
            <div class="col-lg-2 col-md-2">
                <label for="">Address</label>
                <input type="text" name="com[add_1]" class="form-control  h-50" id="">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-2 col-md-2">
                <label for="">Second Address</label>
                <input type="text" name="com[add_2]" class="form-control  h-50" id="">
            </div>
            <div class="col-lg-2 col-md-2">
                <label for="">City</label>
                <input type="text" name="com[city]" class="form-control  h-50" id="">
            </div>
            <div class="col-lg-2 col-md-2">
                <label for="">State</label>
                <input type="text" name="com[state]" class="form-control  h-50" id="">
            </div>
            <div class="col-lg-2 col-md-2">
                <label for="">Code</label>
                <input type="text" name="com[pin]" class="form-control  h-50" id="">
            </div>
            <div class="col-lg-2 col-md-2">
                <label for="">Entity</label>
                <select class="form-control h-50" id="" name="com[entity]">
                    @foreach ($entity as $val)
                        <option value="{{ $val->id }}">{{ $val->alias }}</option>
                    @endforeach
                </select>
                {{-- <input type="text" name="com[entity]" class="form-control  h-50" id=""> --}}
            </div>
            <div class="col-lg-2 col-md-2">
                <label for="">Logo</label>
                <input type="file" name="logo" class="" id="">
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="mt-3">
                <button class="btn border btn-light">Add Company</button>
            </div>
        </div>
    </form>
</div>
<br>
<div class="container mt-4">
    <h5>Company List</h5>
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Email</td>
                <td>State</td>
                <td>Logo</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->state }}</td>
                <td>
                @if($item->logo)
                    <img src="{{ asset($item->logo) }}" alt="Profile Image" style="max-width: 100px; max-height: 100px;" width="60" height="60" class="rounded-circle">
                @else
                    No Image
                @endif
                </td>
                <td><i class="fas fa-ban"></i></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
