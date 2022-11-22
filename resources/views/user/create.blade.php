@extends('layout/admin/masterAdmin')
@section('titleH1')
     Users Management
@endsection


@section('titleH2')
Create User
@endsection


@section('content')
<form action="{{route('storeUser')}}" method="POST">
    @csrf
    <section class="text-center">
        <div class="container">

            <input name="name" class="form-control form-control-lg my-3" type="text" placeholder="name">
            <input name="email" class="form-control form-control-lg my-3" type="text" placeholder="email">

            <input name="password" class="form-control form-control-lg my-3" type="text" placeholder="password">
            </div>

            <div class="text-center my-3">
                <button type="submit" class="btn btn-primary">Save</button>

            </div>
        </section>

</form>
@endsection
