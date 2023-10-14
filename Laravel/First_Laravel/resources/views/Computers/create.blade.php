@extends("layout")
@section("Title","Creat Page")
@section("main")
<div class="box">
  <h1>Creat Page</h1>
  <form action="{{route('computers.store')}}" method="post">
    @csrf
    <div>
      <label for="name">Name:</label>
      <input id="name" type="text" name="name" class="" autocomplete="off" value="{{old('name')}}">
      @error('name')
        <div class="error">{{$message}}</div>
      @enderror
    </div>
    <div>
      <label for="origin">Origin:</label>
      <input id="origin" type="text" name="origin" value="{{old('origin')}}">
      @error('origin')
        <div class="error">{{$message}}</div>
      @enderror
    </div>
    <div>
      <label for="price">Price:</label>
      <input id="price" type="text" name="price" value="{{old('price')}}">
      @error('price')
        <div class="error">{{$message}}</div>
      @enderror
    </div>
    <div>
      <input type="submit" value="Creat">
    </div>
  </form>
</div>
@endsection
