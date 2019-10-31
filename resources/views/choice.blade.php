@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/confirm">
    <div class="jumbotron">
        <h1>Bajaj</h1>
    </div>
    <div class="jumbotron">
        <h1>Lada</h1>
    </div>
</a>
<script>

</script>

    @if($now)
        <form action="" class="form-group">
            <label for="time">Reservation Time</label>
            <input type="time" name="time" id="" class="form-control" placeholder="when do you want to leave">
        </form>
    @endif
</div>
@endsection
