@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h1>{{ $direction->name }}</h1>
    <form method="POST" href="{{ route('direction.destroy', ['direction' => $direction->id]) }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection