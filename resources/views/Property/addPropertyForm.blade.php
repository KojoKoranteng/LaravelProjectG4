@extends('layout.master')

@section('page_title', 'Registration')

@section('content')

<form action="/Property" method="POST">
  @csrf

  <div class="container-fluid" >
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="inputEmail4" style="padding: 55px 5px 5px 5px; font-family: Calibri">Property ID</label>
          <input type="text" class="form-control" id="propertyID" placeholder="Enter property identification number" style="font-family: Calibri">
        </div>
    
        <div class="form-group">
          <label for="inputEmail4" style="padding: 5px 5px 5px 5px; font-family: Calibri">Name of Property</label>
          <input type="text" class="form-control" id="propertyName" placeholder="Property name..." style="font-family: Calibri">
        </div>
        
        <div class="form-group">
          <label for="inputEmail4" style="padding: 5px 5px 5px 5px; font-family: Calibri">Type of Property</label>
          <input type="text" class="form-control" id="propertyType" placeholder="Property type..." style="font-family: Calibri">
        </div>
    
        <div class="form-group">
          <label for="inputEmail4" style="padding: 5px 5px 5px 5px; font-family: Calibri">Location</label>
          <input type="text" class="form-control" id="propertyLocation" placeholder="Property location..." style="font-family: Calibri">
        </div>

      </div>

      <div class="col-md-6" style="margin-top:50px ">
        <div class="form-group">
          <label for="inputAddress" style="padding: 5px 5px 5px 5px; font-family: Calibri" >Price</label>
          <input type="text" class="form-control" id="propertyPrice" placeholder="Price of property..." style="font-family: Calibri">
        </div>
        
        <div class="input-group-small">
          <label for="inputPassword4" style="padding: 5px 5px 5px 5px; font-family: Calibri ">Bedrooms</label>
          <input type="password" class="form-control" id="propertyBedrooms" placeholder="Number of bedrooms" style="font-family: Calibri">
        </div>
    
        <div class="input-group-small">
          <label for="inputPassword4" style="padding: 5px 5px 5px 5px; font-family: Calibri ">Bathrooms</label>
          <select name="" id="propertyBathrooms" class="form-control">
            <option value="selected">Choosen...</option>
            <option value="">One (1)</option>
            <option value="">Two (2)</option>
            <option value="">Three (3)</option>
            <option value="">Four (4)</option>
          </select>
        </div>
    
        <div class="input-group-small" style="margin-top:15px">
          <label for="inputStatus" style="padding: 5px 5px 5px 5px; font-family: Calibri ">Status</label>
          <select name="status" id="propertyStatus">
            <option value="">Select...</option>
            <option value="">Available</option>
            <option value="">Sold Out</option>
          </select>
        </div>
      </div>
      
    </div>
  </div>

  {{-- <div class="input-group-small col-sm-6">
      <label for="inputPassword4" style="padding: 5px 5px 5px 5px; font-family: Calibri ">Property Image</label>
      <input type="text" class="form-control" id="propertyImage" placeholder="" style="font-family: Calibri">
    </div> --}}

  <button type="submit" class="btn btn-primary" style="margin: 15px 0px 0px 11px; font-family: Calibri">Add Property</button>

</form>

@endsection





$table->string('propertyImage');