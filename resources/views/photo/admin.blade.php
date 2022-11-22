@extends('layout/admin/masterAdmin')
@section('titleH1')
     Photos Management
@endsection

@section('titleH2')

@endsection

@section('content')
    <section class="container">
        <h1 class="text-center my-5"></h1>
        <div class="text-center my-5">
        <a class="text-center" href="{{route("createPhoto")}}"><button type="button" class="btn btn-outline-primary">Add</button></a>
        </div>
        <table class="table table-primary table-hover">
            <thead>
                <tr>
                    <th colspan="6">

                    </th>
                </tr>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>img</th>
                    <th>Description</th>
                    <th>id_Album</th>

                    <th class="text-center" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photos as $photo)
                <tr>
                <td>{{$photo->id}}</td>
                <td>{{$photo->name}}</td>
                <td> <img src="{{ asset('assets/uploads/'.$photo->url) }}" alt="" width="100px" height="100px"></td>

                <td>{{$photo->description}}</td>
                <td>{{$photo->id_album}}</td>
                    <td class="text-center">
                    <a href="{{route("editPhoto", $photo->id)}}"><button type="button" class="btn btn-success">Update</button></a></td>
                    <td class="text-center">
                    <a href="{{route("destroyPhoto", $photo->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
