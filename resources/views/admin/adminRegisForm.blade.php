@extends('layout.master')

@section('page_title', 'Admin Registration')

@section('content')

<form action="/Admin" method="POST">
  @csrf
  <h3>Administration Registration</h3>
  <div class="container-fluid d-flex" style="margin: 15px 0px 50px 15px;">
    
    <div class="col-md-6">
      <div class="card card-body" style="padding: 10px 10px 15px 30px; border: none">
        <form action="" method="POST">
          
          <div class="form-row">
            <div class="form-group">
              <label for="inputEmail4" style="padding: 55px 5px 5px 5px; font-family: Calibri">First Name</label>
              <input type="text" class="form-control" id="firstName" placeholder="Enter your first name..." style="font-family: Calibri">
            </div>
            <div class="form-group">
              <label for="inputEmail4" style="padding: 5px 5px 5px 5px; font-family: Calibri">Last Name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Enter your last name..." style="font-family: Calibri">
            </div>
            <div class="form-group">
              <label for="inputEmail4" style="padding: 5px 5px 5px 5px; font-family: Calibri">User Name</label>
              <input type="text" class="form-control" id="userName" placeholder="Type a unique username" style="font-family: Calibri">
            </div>
            <div class="form-group">
              <label for="inputEmail4" style="padding: 5px 5px 5px 5px; font-family: Calibri">Email</label>
              <input type="email" class="form-control" id="email" placeholder="username@gmail.com" style="font-family: Calibri">
            </div>
            <div class="input-group-small">
              <label for="inputPassword4" style="padding: 5px 5px 5px 5px; font-family: Calibri ">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password" style="font-family: Calibri">
            </div>

          </div>

          <button type="submit" class="btn btn-primary" style="margin: 10px 0px 0px 0px; font-family: Calibri">Register</button>
        </form>

      </div>
    </div>

    <div class="col-sm-6">
      <div class="card card-body" style="padding: 25px 0px 0px 30px; border: none;">
        <img src="/images/marissa-grootes-H0YxjMzc6ZQ-unsplash.jpg" alt="" height="490px" width="440px" style="border-radius: 30px">
      </div>
    </div>

  </div> 
</form>
@endsection
