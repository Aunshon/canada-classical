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
        <form class="form-inline" enctype="multipart/form-data" action="{{route('saveFaq')}}" method="POST">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Faq main Title</label>
            <input type="text" class="form-control" id="faq" name="faq" placeholder="Write main title">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Save</button>
    </form>
</div>

<h1>Add Sub Colasp</h1>
<form action="saveSubFaq" method="post">
    @csrf
<div class="container-fluid">
    <select name="faq" id="faq" class="form-control">
        @foreach ($Faq as $item)
        <option value="{{$item->id}}">{{$item->title}}</option>
        @endforeach
    </select>
        <div class="form-group mx-sm-3 mb-2">
            <label class="sr-only">Sub Title</label>
            <input type="text" class="form-control" id="subTitle" name="subTitle" placeholder="Write Sub title">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label class="sr-only">Discription</label>
            <textarea cols="30" rows="10" name="dis"></textarea>
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
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($Faq as $item)
            <tr>
                <th scope="row"><p>{{$item->title}}</p></th>
                <td><a href="{{url('deleteFaq')}}/{{$item->id}}" class="btn btn-danger">Delete</a></td>

            </tr>
        @endforeach
  </tbody>
</table>
</div>
<div class="container-fluid">


<table class="table table-sm table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Main Faq</th>
      <th scope="col">Inner Title</th>
      <th scope="col">Discriiption</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($SubFaq as $item)
            <tr>
                <th scope="row"><p>{{$item->relationFaq->title}}</p></th>
                <th scope="row"><p>{{$item->subTitle}}</p></th>
                <td><textarea cols="30" rows="5" name="dis">{{$item->dis}}</textarea></td>
                <td><a href="{{url('deleteSubFaq')}}/{{$item->id}}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
  </tbody>
</table>

</div>
</div>


@endsection
@section('addNewScript')

@endsection




