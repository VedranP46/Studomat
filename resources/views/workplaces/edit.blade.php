@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('workplaces.update', ['workplace' => $workplace->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- workplace title -->
        <div class="form-group">
            <label for="title">Title</label>
            <input value="{{ $workplace->title }}" name="title" type="text" class="form-control" id="name">
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->title('title') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="workplace">Started at</label>
            <label for="started_at">Started at</label>
            <input value="{{ $workplace->started_at }}" name="started_at" type="text" class="form-control" id="started_at">
        </div>

        <div class="form-group">
            <label for="workplace">Ended at</label>
            <label for="ended_at">Ended at</label>
            <input value="{{ $workplace->ended_at }}" name="ended_at" type="text" class="form-control" id="ended_at">
        </div>


        <div class="mt-4">
            <button type="submit" class="btn btn-primary float-right">Save</button>
            <a href="{{ route('workplaces.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection