@extends('layouts.app')

@section('content')

<div>
    <h3 class="mt-3">Country details</h3>
    <ul class="list-unstyled">
        <li>Id: {{ $workplace->id }}</li>
        <li>Name: {{ $workplace->name }}</li>
        
    </ul>
</div>


<div class="btn-group" role="user">
<a class="btn btn-secondary" href="{{ route('workplace.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('workplace.edit', ['workplace' => $workplace]) }}">Edit</a>

<form class="form-inline" action="{{ route('countries.destroy', ['workplace' => $workplace->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>



@endsection