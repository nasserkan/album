@extends('layout/admin/masterAdmin')
@section('titleH1')
     Photos Management
@endsection


@section('titleH2')
    Edit Photo
@endsection


@section('content')
<form action="{{route("updatePhoto", $photos->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <section class="text-center">
        <div class="container">

        <input name="name" class="form-control form-control-lg my-3" type="text" value="{{$photos->name}}">
        <input name="description" class="form-control form-control-lg my-3" type="text" value="{{$photos->description}}">
        <div class="form-group">
            <input type="file" class="form-control" id="url" name="url">
        </div>

            <select name="id_album"class="form-control form-control-lg">
                @foreach ($albums as $album)

            <option value="{{$album->id}}">{{$album->nom}}</option>
            @endforeach
        </select>
        </div>

            <div class="text-center my-3">
                <button type="submit" class="btn btn-primary">Ajouter</button>

            </div>
        </section>

</form>
@endsection
