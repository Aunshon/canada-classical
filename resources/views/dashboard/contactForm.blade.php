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
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Individual/</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Menu Interest</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($ContactForm as $item)
            <tr>
                <th scope="row"><p>{{$item->fname}}</p></th>
                <th scope="row"><p>{{$item->lname}}</p></th>
                <th scope="row"><p>{{$item->ind}}</p></th>
                <th scope="row"><p>{{$item->email}}</p></th>
                <th scope="row"><p>{{$item->tele}}</p></th>
                <th scope="row"><p>{{$item->menu}}</p></th>
                {{-- <th scope="row"><p>{{$item->msg}}</p></th>  --}}
                <th scope="row"><textarea name="dis" id="dis" cols="30" rows="5"placeholder="Write Discription">{{$item->msg}}</textarea></th>
                <th>
                    <td><a href="{{url('deletecontactForm')}}/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                </th>
            </tr>
        @endforeach
  </tbody>
</table>
</div>

</div>


@endsection
@section('addNewScript')

@endsection




