@extends('layouts.frontEndApp')

@section('addNewCss')

@endsection
@section('searchpanel')

@endsection
@section('pageHeading')
    Logo Settings
@endsection
@section('content')

<div class="container">

<div class="container-fluid">


<table class="table table-sm table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Discriiption</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($experienceworld as $item)
            <tr>
                <th scope="row"><p>{{$item->titie}}</p></th>
                <td>
                    <img src="{{asset('uploads/world')}}/{{$item->photo}}" alt="NO" width="150">
                </td>
                <td>
                    <textarea cols="30" rows="10" disabled>{{$item->dis}}</textarea>
                </td>
                <td>
                    <td><a href="{{url('deleteexperienceworld')}}/{{$item->id}}" class="btn btn-danger">Delete</a></td>

                </td>
            </tr>
        @endforeach
  </tbody>
</table>
</div>
<div class="container-fluid">


    <form class="form-inline" enctype="multipart/form-data" action="{{route('saveexperienceworld')}}" method="POST">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Titie</label>
            <input type="text" class="form-control" id="titie" name="titie" placeholder="Write font awsome icon name">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Image</label>
            <input type="file" class="form-control" id="photo" name="photo" placeholder="Write the link">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Discription</label>
            <textarea name="dis" id="dis" cols="30" rows="5"placeholder="Write Discription"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Save</button>
    </form>

</div>
</div>


@endsection
@section('addNewScript')

@endsection




