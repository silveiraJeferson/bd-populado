@extends('welcome')
@section('content')

<div id="app" class="row">
    
    @foreach(range(1,60) as $i)
    <div class="col s2 ">
        <input type="checkbox" id="test{{$i}}" />
        <label for="test{{$i}}">{{$i}}</label>
    </div>

    @endforeach
</div>
@endsection


