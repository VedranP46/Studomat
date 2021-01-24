
@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('workplaces.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- workplace name -->
        <div class="form-group">
            <label for="name">workplace name</label>
            <input value="{{ @old('title') }}" name="title" type="text" class="form-control" id="title">
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <!-- workplace name -->
        <div class="form-group">
            <label for="name">started at</label>
            <input value="{{ @old('started_at') }}" name="started_at" type="date" class="form-control" id="started_at">
            @if ($errors->has('started_at'))
                <span class="text-danger">{{ $errors->first('started_at') }}</span>
            @endif
        </div>

        
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('workplaces.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection