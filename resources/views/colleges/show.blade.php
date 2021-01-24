@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h1>{{ $colleg->name }}</h1>
    <form method="POST" href="{{ route('colleges.destroy', ['colleges' => $colleges->id]) }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection