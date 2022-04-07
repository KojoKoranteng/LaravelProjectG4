@extends('layout.master')

@section('page_title', 'List of Registrations')

@section('content')
{{-- <form class="d-flex" method="GET" action="{{route('showRegistrations')}}" >
  <input
          class="form-control me-2"
          type="search"
          name="search"
          placeholder="Type email to search"
          aria-label="Search">
          <button class="btn btn-outline-success" type="submit">
              Search
          </button>
</form>--}}
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($user as $user)
      <tr>
        <th scope="row">{{$user->firstName}}</th>
        <td>{{$user->lastName}}</td>
        <td>{{$user->userName}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->password}}</td>
      </tr>

      @endforeach
  </tbody>
</table>

@endsection

