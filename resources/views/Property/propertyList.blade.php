@extends('layout.master')

@section('page_title', 'List of Properties')

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
      <th scope="col">Property ID</th>
      <th scope="col">Property Name</th>
      <th scope="col">Property Type</th>
      <th scope="col">Property Location</th>
      <th scope="col">Property Status</th>
      <th scope="col">Property Price</th>
      <th scope="col">Property Bedrooms</th>
      <th scope="col">Property Bathrooms</th>
      <th scope="col">Property Image</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($property as $property)
      <tr>
        <th scope="row">{{$property->propertyID}}</th>
        <td>{{$property->propertyName}}</td>
        <td>{{$property->propertyType}}</td>
        <td>{{$property->propertyLocation}}</td>
        <td>{{$property->propertyStatus}}</td>
        <td>{{$property->propertyPrice}}</td>
        <td>{{$property->propertyBedrooms}}</td>
        <td>{{$property->propertyBathrooms}}</td>
        <td>{{$property->propertyImage}}</td>
      </tr>

      @endforeach
  </tbody>
</table>

@endsection
