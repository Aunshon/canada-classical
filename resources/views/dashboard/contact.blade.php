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

<h1>Contact Info</h1>
<form action="saveContact" method="post">
    @csrf
<div class="container-fluid">

        <div class="form-group mx-sm-3 mb-2">
            <label class="sr-only">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Write Sub title">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label class="sr-only">Number 1</label>
            <input type="text" class="form-control" id="numOne" name="numOne" placeholder="Number 1">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label class="sr-only">Number 2</label>
            <input type="text" class="form-control" id="numTwo" name="numTwo" placeholder="Number 2">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label class="sr-only">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label class="sr-only">Map</label>
            <input type="texy" class="form-control" id="mapLocaiton" name="mapLocaiton" placeholder="Map">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
</div>
</form>




<div class="container-fluid">


<table class="table table-sm table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Number 1</th>
      <th scope="col">Number 2</th>
      <th scope="col">Email</th>
      <th scope="col">Map</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($Contact as $item)
            <tr>
                <th scope="row"><p>{{$item->title}}</p></th>
                <th scope="row"><p>{{$item->numOne}}</p></th>
                <th scope="row"><p>{{$item->numTwo}}</p></th>
                <th scope="row"><p>{{$item->email}}</p></th>
                <th scope="row"><p>{{$item->mapLocaiton}}</p></th>
            </tr>
        @endforeach
  </tbody>
</table>

</div>
</div>


@endsection
@section('addNewScript')

@endsection




