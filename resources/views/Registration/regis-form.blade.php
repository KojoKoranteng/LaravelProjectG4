@extends('layout.master')

@section('page_title', 'Registration')

@section('content')


<form action="/Registration" method="POST">
  @csrf
  
  <div class="container-fluid d-flex" style="margin: 30px 0px 50px 30px;">
    
    <div class="col-md-6">
      <h3 style="margin: 0px 0px 0px 0px">Register to Buy or Sell Property</h3>
      <div class="card card-body" style="padding: 25px 0px 0px 0px; border: none;">
        <img src="/images/sarah-khan-8MJqNBSymRE-unsplash.jpg" alt="" height="600px">
      </div>
    </div>
    <div class="col-md-6">
      <div class="card card-body" style="padding: 20px 10px 15px 10px; border: none">
        <form action="" method="POST">
          
          <div class="form-row">
            <div class="form-group col-sm-6">
              <label for="inputEmail4" style="padding: 55px 5px 5px 5px; font-family: Calibri">First Name</label>
              <input type="text" class="form-control" id="firstName" placeholder="Enter your first name..." style="font-family: Calibri">
            </div>
            <div class="form-group col-sm-6">
              <label for="inputEmail4" style="padding: 5px 5px 5px 5px; font-family: Calibri">Last Name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Enter your last name..." style="font-family: Calibri">
            </div>
            <div class="form-group col-sm-6">
              <label for="inputEmail4" style="padding: 5px 5px 5px 5px; font-family: Calibri">Phone Number</label>
              <input type="text" class="form-control" id="phoneNumber" placeholder="+233xxx xxx xxx" style="font-family: Calibri">
            </div>
            <div class="form-group col-sm-6">
              <label for="inputEmail4" style="padding: 5px 5px 5px 5px; font-family: Calibri">Email</label>
              <input type="email" class="form-control" id="email" placeholder="username@gmail.com" style="font-family: Calibri">
            </div>
            <div class="input-group-small">
              <label for="inputAddress" style="padding: 5px 5px 5px 5px; font-family: Calibri" >Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" style="font-family: Calibri">
            </div>
            <div class="input-group-small col-sm-6">
              <label for="inputPassword4" style="padding: 5px 5px 5px 5px; font-family: Calibri ">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password" style="font-family: Calibri">
            </div>
          </div>
          <div class="input-group-small col-md-4">
              <label for="inputState"  style="padding: 5px 5px 5px 5px; font-family: Calibri">Register As</label>
              <select id="status" class="form-control" style="padding: 5px 5px 5px 5px; font-family: Calibri">
                <option selected>Choose...</option>
                <option>Agent</option>
                <option>Buyer</option>
              </select>
            </div>
          </div>

          <button type="submit" class="btn btn-primary" style="margin-left: 10px; font-family: Calibri">Register</button>
        </form>
      </div>
    </div>
  </div> 
</form>
@endsection