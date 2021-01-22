@extends('layouts.app')

@section('content')
  <table class="table table-striped mt-5 table-sm">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">group_exams</th>
        <th class="text-center" scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($group_exams->items() as $group_exams)
          <tr>
              <td>{{ $group_exams->id }}</td>
              <td>{{ $group_exams->name }}</td>
              <td class="text-center">
                <a href="{{ route('group_exams.show', ['group_exams' => $group_exams->id]) }}" class="btn btn-outline-primary btn-sm">Details</a>
                <a href="{{ route('group_exams.edit', ['group_exams' => $group_exams->id]) }}" class="btn btn-outline-primary btn-sm">Edit</a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection