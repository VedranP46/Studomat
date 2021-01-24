@extends('layouts.app')

@section('content')

<a href="{{ route('workplaces.create') }}" class="btn btn-primary mt-5">Add</a>

  <!-- Search form -->
  <form class="form-inline float-right mt-5" method="GET" action="{{ route('workplaces.index') }}">
    <input class="form-control" type="text" placeholder="Search" name="search">
  </form>

  <table class="table table-striped mt-5">
    <thead>
      <tr>
        <th>Id</th>
        <th>title</th>
        <th>started at</th>
        <th>ended at</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($workplaces->items() as $workplace)
          <tr>
              <td>{{ $workplace->id }}</td>
              <td>{{ $workplace->title }}</td>
              
              <td>{{ $workplace->ended_at }}</td>
              <td>{{ $workplace->started_at}}</td>
              <td>
                <a class="btn btn-outline-primary" href="{{ route('workplaces.show', ['workplace' => $workplace->id]) }}">Details</a>
                <a class="btn btn-outline-primary" href="{{ route('workplaces.edit', ['workplace' => $workplace->id]) }}">Edit</a></td>
          </tr>
      @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-center">
        {{ $workplaces->links() }}
  </div>
@endsection