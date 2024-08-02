@extends('layouts.app')
@section('content')
<div class="container border">
    <h5 class="mb-4"><b>New Entity</b></h5>
    <form action="{{ route('addentity') }}" method="post" class="mt-3">
        @csrf
        <div class="row">
            <div class="col-md-2 col-lg-2">
                <label for="">Name</label>
                <input type="text" name="en[name]" class="form-control h-50" id="">
            </div>
            <div class="col-md-2 col-lg-2">
                <label for="">Alias</label>
                <input type="text" name="en[alias]" class="form-control h-50" id="">
            </div>
            <div class="col-md-2 col-lg-2">
                <label for="">Url</label>
                <input type="text" name="en[url]" class="form-control h-50" id="">
            </div>
            <div class="col-md-2 col-lg-2">
                <label for="">Api</label>
                <input type="text" name="en[api]" class="form-control h-50" id="">
            </div>
            <div class="col-md-2 col-lg-2">
                <label for="">Email</label>
                <input type="email" name="en[email]" class="form-control h-50" id="">
            </div>
            <div class="col-md-2 col-lg-2">
                <label for="">Address</label>
                <input type="text" name="en[add_1]" class="form-control h-50" id="">
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-md-2 col-lg-2">
                <label for="">Address Two</label>
                <input type="text" name="en[add_2]" class="form-control h-50" id="">
            </div>
            <div class="col-md-2 col-lg-2">
                <label for="">City</label>
                <input type="text" name="en[city]" class="form-control h-50" id="">
            </div>
            <div class="col-md-2 col-lg-2">
                <label for="">State</label>
                <input type="text" name="en[state]" class="form-control h-50" id="">
            </div>
        </div>
        <div class="text-center mt-4 mb-3">
            <button class="btn btn-light border">Add Entity</button>
        </div>
    </form>
</div>
<div class="container mt-4">
    <h5>Entity List</h5>
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Url</td>
                <td>PayMode</td>
                <td>PaidStatus</td>
                <td>Online/Offline</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($model as $data)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->url }}</td>
                <td>{{ $data->payment_mode }}</td>
                <td>{{ $data->paid_status }}</td>
                <td>
                    @if ($data->is_active == 1)
                    {{ 'online' }}
                    @else
                    {{ 'offline' }}
                    @endif
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
