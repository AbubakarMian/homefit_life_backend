<?php 
include 'header.php'
?>
<link href="css/globaldashboard.css" rel="stylesheet">
<link href="css/shippinginfo.css" rel="stylesheet">
<section>
<div class="sidebar">
	<div class="pageName">
		USER <span>DASHBOARD</span>
	</div>
  <a class="active" href="#"><i class="flaticon-user"></i> My Profile</a>
  <a href="#"><i class="flaticon-loupe"></i> Search Trainers</a>
  <a href="#"><i class="flaticon-trainer"></i> Featured Trainers</a>
  <a href="#"><i class="flaticon-live"></i> Live Sessions</a>
  <a href="#"><i class="flaticon-monitor"></i> Free Live Sessions</a>
  <a href="#"><i class="flaticon-team"></i> Group Classes</a>
  <a href="#"><i class="flaticon-calculator"></i> Nutration Calculator</a>
  <a href="#"><i class="flaticon-calendar"></i> My Schedule</a>
  <a href="#"><i class="flaticon-logout"></i> Logout</a>
</div>

<div class="content">
  <div class="innerPage">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="shippingForm">
        <div class="col-sm-6">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="First Name" >
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Last Name">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Company Name (Optional)">
          </div>
          <div class="form-group">
            <select class="form-control" id="sel1">
              <option>Country Region</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Street Address">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Address">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Town / City">
          </div>
          <div class="form-group">
            <select class="form-control" id="sel1">
              <option>State / Country</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Phone No">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Email Address">
          </div>
          <center>
            <button type="button" class="btn btn-primary">Save</button>
          </center>
        </div>
      </div>
    </div>
  </div>
</section>