<form action="{{route('logout')}}" method="post">
    {{csrf_field()}}
    <input id="logout" class="btn btn-sm" type="submit" value="Logout">
</form>
