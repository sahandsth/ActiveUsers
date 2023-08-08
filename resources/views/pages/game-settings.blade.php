@extends('layouts.Main')
@section('content')

    <form action="{{route('create.room')}}" method="post">
        {{csrf_field()}}
        <label for="player_count">تعداد بازیکنان</label>
        <br>
        <input id="player_count" name="player_count" type="number" value="5">
        <br>
        <input id="submit" class="btn btn-primary" type="submit" value="ایجاد اتاق">
    </form>


@endsection
