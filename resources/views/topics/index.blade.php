@extends('layouts.app')

@section('content')
  <table class="table table-striped mt-5">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Direction</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($topics->items() as $topic)
          <tr>
              <td>{{ $topic->id }}</td>
              <td>{{ $topic->name }}</td>
              <td>{{ $topic->direction->name ?? '' }}</td>
              <td>
                <a class="btn btn-outline-primary" href="{{ route('topics.show', ['topic' => $topic->id]) }}">Details</a>
                <a class="btn btn-outline-primary" href="{{ route('topics.edit', ['topic' => $topic->id]) }}">Edit</a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-center">
        {{ $topics->links() }}
  </div>
@endsection