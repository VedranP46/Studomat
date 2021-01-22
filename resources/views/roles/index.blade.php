@extends('layouts.app')

@section('content')
  <table class="table table-striped mt-5 table-sm">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">role</th>
        <th class="text-center" scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($role->items() as $role)
          <tr>
              <td>{{ $role->id }}</td>
              <td>{{ $role->name }}</td>
              <td class="text-center">
                <a href="{{ route('roles.show', ['roles' => $roles->id]) }}" class="btn btn-outline-primary btn-sm">Details</a>
                <a href="{{ route('roles.edit', ['roles' => $roles->id]) }}" class="btn btn-outline-primary btn-sm">Edit</a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection