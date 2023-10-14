@extends("layout")
@section("Title","Creat Page")
@section("main")
<div class="box">
  <h1>Edite Page</h1>
  <form action="{{route('computers.update',['computer' => $computer->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div>
      <label for="name">Name:</label>
      <input id="name" type="text" name="name" class="" autocomplete="off" value="{{$computer['name']}}">
    </div>
    <div>
      <label for="origin">Origin:</label>
      <input id="origin" type="text" name="origin" value="{{$computer['origin']}}">
    </div>
    <div>
      <label for="price">Price:</label>
      <input id="price" type="text" name="price" value="{{$computer['price']}}">
    </div>
    <div>
      <input type="submit" value="Edite">
    </div>
  </form>
</div>
@endsection
