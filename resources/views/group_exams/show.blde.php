@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h1>{{ $group_exam->name }}</h1>
    <form method="POST" href="{{ route('group_exam.destroy', ['group_exam' => $group_exam->id]) }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection