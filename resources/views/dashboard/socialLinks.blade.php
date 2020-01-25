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
      <th scope="col">Image</th>
      <th scope="col">Activaiton</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($allSocial as $item)
            <tr>
                <th scope="row"><p>{{$item->link}}</p></th>
                <td>
                    <a href="{{$item->link}}"><i class="{{$item->icon}}" aria-hidden="true"></i></a>
                </td>
                    <td><a href="{{url('deleteThisIcon')}}/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                </tr>
        @endforeach
  </tbody>
</table>
</div>
<div class="container-fluid">


    <form class="form-inline" enctype="multipart/form-data" action="{{route('saveSocial')}}" method="POST">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Social icon</label>
            <input type="text" class="form-control" id="icon" name="icon" placeholder="Write font awsome icon name">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Social Link</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Write the link">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Save</button>
    </form>

</div>
</div>


@endsection
@section('addNewScript')

@endsection




