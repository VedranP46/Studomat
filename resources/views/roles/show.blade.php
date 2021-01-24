@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h1>{{ $role->name }}</h1>
    <form method="POST" href="{{ route('role.destroy', ['role' => $role->id]) }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection