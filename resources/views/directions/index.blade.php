@extends('layouts.app')

@section('content')
  <table class="table table-striped mt-5 table-sm">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">directions</th>
        <th class="text-center" scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($directions->items() as $direction)
          <tr>
              <td>{{ $direction->id }}</td>
              <td>{{ $direction->name }}</td>
              <td class="text-center">
                <a href="{{ route('direction.show', ['direction' => $direction->id]) }}" class="btn btn-outline-primary btn-sm">Details</a>
                <a href="{{ route('direction.edit', ['direction' => $direction->id]) }}" class="btn btn-outline-primary btn-sm">Edit</a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection