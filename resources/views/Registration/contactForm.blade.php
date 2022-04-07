@extends('layout.master')

@section('page_title', 'Contact Us')

@section('content')

<h1 style="margin: 0px 0px 50px 0px; font-family: Arial; font:bolder">Contact Us</h1>

<div class="container-fluid" style="background-color: rgb(255, 255, 255)">
    
  <p style="font-family: Calibri ; font:800">In case of any inquiries or questions you can fill out the form below and one of our representatives will contact you soon.</p>  
    
    <div class="container-fluid d-flex" style="padding: 5px 5px 10px 5px">

        <div class="col-md-6">
          <div class="card card-body" style="padding: 20px 10px 15px 10px; border: none">
            <h6>For Agency Services to Sell, Let or Manage your Property please get in touch.</h6>
            <form action="" method="POST"> 
              <div class="form-row pb-6">
                  <div class="form-group">
                      <label for="inputAddress" style="padding: 5px 5px 5px 5px;font-family: Calibri;">Name</label>
                      <input type="text" class="form-control" id="inputName" placeholder="Type full name here...">
                  </div>
      
                <div class="form-group">
                  <label for="inputPassword4" style="padding: 5px 5px 5px 5px; font-family: Calibri;">Phone Number</label>
                  <input type="text" class="form-control" id="inputPhone" placeholder="+233xxx xxx xxx">
                </div>
      
                <div class="form-group">
                  <label for="inputEmail4" style="padding: 5px 5px 5px 5px; font-family: Calibri;">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Type email address here...">
                </div>
      
              </div>
      
              <button type="submit" class="btn btn-primary" style="margin-top: 30px">Send Info</button>
            </form>
          </div>
        </div>
      
        <div class="col-md-6">
          <div class="card card-body" style="border: none">
              <p class="icon">Phone</p>
              <p class="content">+233302985950</p>
              <p class="icon">Email</p>
              <p class="content">info@G4Apartments.com</p>
              <p class="icon">Address</p>
              <p class="content">Airport Square 5th Floor. Office no.4 Airport Residential Area</p>
          </div>
          </div>
      </div> 
</div>

@endsection