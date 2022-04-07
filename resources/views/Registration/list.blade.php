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
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Password</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($Registration as $registration)
      <tr>
        <th scope="row">{{$registration->firstName}}</th>
        <td>{{$registration->lastName}}</td>
        <td>{{$registration->phoneNumber}} day(s)</td>
        <td>{{$registration->email}} day(s)</td>
        <td>{{$registration->address}} day(s)</td>
        <td>{{$registration->password}} day(s)</td>
        <td>{{$registration->status}} day(s)</td>
      </tr>

      @endforeach
  </tbody>
</table>

@endsection

