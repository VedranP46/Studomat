@extends('layouts.app')

@section('content')

<div>
    <h3 class="mt-3">Workplace details</h3>
    <ul class="list-unstyled">
        <li>Id: {{ $workplace->id }}</li>
        <li>Title: {{ $workplace->title }}</li>
        <li>Started at: {{ $workplace->started_at }}</li>
        <li>Ended at: {{ $workplace->ended_at }}</li>
    </ul>
</div>


<div class="btn-group" role="workplace">
<a class="btn btn-secondary" href="{{ route('workplaces.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('workplaces.edit', ['workplace' => $workplace]) }}">Edit</a>

<form class="form-inline" action="{{ route('workplaces.destroy', ['workplace' => $workplace->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>



@endsection