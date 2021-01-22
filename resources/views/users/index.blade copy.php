<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Studomat</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('workplaces.index') }}">Workplaces</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('topic.index') }}">Topics</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('group_exams.index') }}">Group_Exams</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('directions.index') }}">Directions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('collegs.index') }}">Colleges</a>
        </li>
    </ul>
  </div>
</nav>




@foreach ($user->items() as $user)
@endforeach
    
<tabl<table class="table table-striped mt-5">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name / Email</th>
        <th>Workplaces</th>
        <th>Role</th>
        <th>Last online</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users->items() as $user)
          <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}<br />{{ $user->email }}</td>
              <td>{{ $user->workplaces>title ?? '' }}</td>
              <td>{{ $user->role->name }}</td>
              <td>{{ $user->last_online }}</td>
              <td>
                <a class="btn btn-outline-primary" href="{{ route('users.show', ['user' => $user->id]) }}">Details</a>
                <a class="btn btn-outline-primary" href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
                <a class="btn btn-outline-primary" href="{{ route('change_password.edit', ['user' => $user->id]) }}">Change password</a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-center">
        {{ $users->links() }}
  </div>
    @endforeach
    
  </tbody>
</table>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>