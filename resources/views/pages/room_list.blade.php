@extends('layouts.Main')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <table>
                <tr>
                    <td>پیوستن به بازی</td>
                    <td>تعداد بازیکنان مجاز</td>
                    <td>سازنده اتاق</td>

                </tr>
                <tbody>

                @foreach($rooms as $room)
                <tr>
                    <td>
                        <a id="join_room" href="{{route('show.room_list')}}" class="btn btn-primary">join</a>
                    </td>
                    <td>{{$room->player_count}}</td>
                    <td>{{$room->host->name}}</td>

                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
