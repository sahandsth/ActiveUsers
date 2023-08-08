@extends('layouts.Main')
@section('content')

   <h1>{{auth()->user()->name}}</h1>

   <form action="{{route('toggle_online')}}" method="post">
       @if(auth()->user()->online_status == 0)
           <input type="hidden" name="status" value="offline">
           <button type="submit" id="circle_offline">

           </button>
       @else
           <input type="hidden" name="status"  value="online">
           <button type="submit" id="circle_online">

           </button>
       @endif
       @csrf
   </form>

   <div id="ajax"></div>


   <script type="text/javascript">
       function getAjax() {

           $.ajax({
               type: "GET",
               url: "{{ route('get_ajax') }}"
           })
               .done(function( data ) {
                   $("#ajax").html(data);

                   setTimeout(getAjax, 1000);
               });
       }
       getAjax();
   </script>

@endsection
