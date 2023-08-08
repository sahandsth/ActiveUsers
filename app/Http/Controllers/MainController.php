<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function gameSettings(){
        return view('pages.game-settings');
    }
    public function createRoom(Request $request){

        $user = auth()->user();
        $user->hosted_rooms()->create([
           'player_count'=>$request->input('player_count')
        ]);
        $current_room = Room::all()->sortByDesc('id')->first();
        $user->rooms()->attach($current_room);
        return redirect()->route('show.waiting_room',['id'=>$current_room->id]);
    }
    public function waitingRoom($id){
        $users = Room::where('id',$id)->first()->users()->get();
        return view('pages.waiting_room',['users'=>$users]);
    }
    public function roomList(){
        $rooms = Room::all();
        return view('pages.room_list',['rooms'=>$rooms]);
    }
    public function toggleOnline(Request $request){
        $user = auth()->user();
        if ($request->input('status') == 'offline'){
            $user->online_status = true;
        }else{
            $user->online_status = false;
        }
        $user->save();
        return redirect()->route('dashboard');
    }
    public function loginUser(Request $request){
        $rooms = Room::all();
        return view('pages.room_list',['rooms'=>$rooms]);
    }
    public function getAjax(){
        $users = User::all();
        echo '<table >
            <thead>
        <tr>
            <th>وضعیت</th>
            <th>نام</th>
        </tr>
            </thead>';
        foreach ($users as $user){
            if ($user->online_status == 0){
             $status = 'offline';
            }else{
             $status = 'online';
            }
            echo '<tbody>
            <tr>
        <th>'.$status.'</th>
        <th>'.$user->name.'</th>
            </tr>
              </tbody>';
        }
    }
}
