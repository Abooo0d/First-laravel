@extends("layout")
@section("Title","Computers")
@section("main")
<div class="box">
  <h1>Computers Page</h1>
  @if(count($copmuters) > 0)
    <ul>
      @foreach($copmuters as $computer)
        <a href="{{route('computers.show',['computer' => $computer['id']])}}">
          <li>{{$computer["id"]}} It IS  {{$computer["name"]}} And It IS Form {{$computer["origin"]}}</li>
        </a>
      @endforeach
    </ul>
  @else
  {{ "ther Is No Element In The Database "}}
  @endif
</div>
@endsection
