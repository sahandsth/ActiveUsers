@extends('layouts.Main')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <table>
                <tr>
                   <td>Players</td>

                </tr>
                <tbody>

                @foreach($users as $user)
                    <tr>

                   <td>{{$user->name}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
