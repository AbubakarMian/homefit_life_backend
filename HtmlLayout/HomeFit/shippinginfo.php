<?php 
include 'dashBordHead.php'
?>
<link href="css/shippinginfo.css" rel="stylesheet">

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
<?php 
include 'dashBordFooter.php'
?>