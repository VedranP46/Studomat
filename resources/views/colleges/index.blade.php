@extends('layouts.app')

@section('content')
  <table class="table table-striped mt-5 table-sm">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">colleges</th>
        <th class="text-center" scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($colleges->items() as $colleges)
          <tr>
              <td>{{ $colleges->id }}</td>
              <td>{{ $colleges->name }}</td>
              <td class="text-center">
                <a href="{{ route('colleges.show', ['colleges' => $colleges->id]) }}" class="btn btn-outline-primary btn-sm">Details</a>
                <a href="{{ route('colleges.edit', ['colleges' => $colleges->id]) }}" class="btn btn-outline-primary btn-sm">Edit</a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection