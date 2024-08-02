@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form method="POST" action="{{ route('adduser') }}" enctype="multipart/form-data">
        @csrf
        <div class="container border rounded">
            <div class="row text-center ml-2 mr-2 mt-4 mb-4">
                <div class="col-lg-6 col-md-6 justify-content-center">
                    <div class="h6">Full Name</div>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-6">
                    <span>Email</span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-6 mt-4">
                    <span>UserGroup</span>
                    {{-- <input type="text" class="form-control " name="usergroup" value="" required> --}}
                    <select name="usergroup" class="form-control" id="">
                        @foreach ($group as $groups )
                            <option value="{{ $groups->id }}">{{ $groups->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 mt-4">
                    <span>Company</span>
                    {{-- <input type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" required> --}}
                    <select name="company" class="form-control" id="">
                        @foreach ($company as $com )
                            <option value="{{ $com->id }}">{{ $com->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 mt-4">
                    <span>Password</span>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-6 mt-4">
                    <span>Confirm Password</span>
                    <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="col-lg-12 col-md-12 mt-4">
                    <input type="file" class="form-control" id="customFile" name="image">
                </div>
                <div class="col-lg-12 col-md-12 mt-4 text-center">
                    <button class="btn btn-secondary form-control">Add New User</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
