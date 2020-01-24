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
        @foreach ($allLogo as $item)
            <tr>
                <th scope="row"><img src="{{asset('uploads/logo')}}/{{$item->photo}}" alt="no Image" width="50"></th>
                <td>
                    @if ($item->status == 0)
                    <a href="{{url('activeThisLogo')}}/{{$item->id}}" class="btn btn-danger">Deactive</a>
                    @else
                    <p disabled class="btn btn-success">Activated</p>
                    @endif
                    </td>
                    <td><a href="{{url('deleteThisLogo')}}/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                </tr>
        @endforeach
  </tbody>
</table>
</div>
<div class="container-fluid">


    <form class="form-inline" enctype="multipart/form-data" action="{{route('saveNewLogo')}}" method="POST">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">New Logo</label>
            <input type="file" class="form-control" id="photo" name="photo" placeholder="Select Photo">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Save</button>
    </form>

</div>
</div>


@endsection
@section('addNewScript')

@endsection




