@extends("layout")
@section("Title","Computers")
@section("main")
<div class="box">
  <h1>Copmuters Page</h1>
  <div class="info">
    <span>
      <span class="id"> ID:</span>{{$computer["id"]}}
    </span>
    <span>
      <span class="name">Name</span> {{$computer["name"]}}
    </span>
    <span>
      <span class="origin">From</span>{{$computer["origin"]}}
    </span>
  </div>
  <a href="{{route('computers.edit',$computer->id)}}" class="">Edite</a>
  <form action="{{route('computers.destroy',$computer->id)}}" method="post">
    @csrf
    @method("DELETE")
    <input type="submit" value="Delete">
  </form>
</div>
@endsection
