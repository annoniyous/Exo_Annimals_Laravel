@extends('templates.main')
@section('content')

<div class="container">
    <!-- Default form subscription -->
<form class="text-center border border-light p-5" action="/Animals " methode="POST">

    <p class="h4 mb-4">Add an annimals</p>

    <!-- Name -->
    <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name of the annial">

    
    <!-- Sign in button -->
    <button class="btn btn-info btn-block" type="submit">ADD</button>


</form>
<!-- Default form subscription -->
</div>

    
@endsection