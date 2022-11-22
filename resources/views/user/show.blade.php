@extends('layout/admin/masterAdmin')
@section('titleH1')
     Users Management
@endsection


@section('titleH2')
    Show Albums For User
@endsection

@section('content')
<section class="container">
    <h1 class="text-center my-5"></h1>
    <div class="text-center my-5">
    <a class="text-center" href="{{route("createAlbum")}}"><button type="button" class="btn btn-outline-primary">Add</button></a>
    </div>
    <table class="table table-primary table-hover">
        <thead>
            <tr>
                <th colspan="6">

                    <h3 class="text-center">Table of Albums</h3>
                </th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>id_User</th>

                <th class="text-center" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
            <tr>
            <td>{{$album->id}}</td>
            <td>{{$album->name}}</td>
            <td>{{$album->description}}</td>
            <td>{{$album->id_user}}</td>
                <td class="text-center">
                <a href=""><button type="button" class="btn btn-success">Update</button></a></td>
                <td class="text-center">
                <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

