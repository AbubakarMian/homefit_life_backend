<?php 
include 'header.php'
?>
<link href="css/globaldashboard.css" rel="stylesheet">
<link href="css/paymentinfo.css" rel="stylesheet">
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
    <div class="col-sm-6 col-sm-offset-3">
      <div class="vc">
        <!-- Virtual Card Starts Here -->
      <div class="center card_">
      <div class="card_-display">
        <div class="card_-box-inner">
          <div class="card_-box-front">
            <div class="chip"></div>
            <div class="card_number">
              <div class="part-1"></div>
              <div class="part-2"></div>
              <div class="part-3"></div>
              <div class="part-4"></div>
            </div>
            <div class="account-holder-name"></div>
            <div class="expiry">
              <div class="month"></div>
              <div>/</div>
              <div class="year"></div>
            </div>
          </div>
          <div class="card_-box-back">
            <div class="plate"></div>
            <div class="cvv">
              <div class="code"></div>
            </div>
          </div>
        </div>    
      </div>
      <div class="card_-input-box">
        <div class="inputs">
          <div class="input-group form-group">
            <div class=" col-4">
              <label for="">Card number</label>
              <input type="text" class="form-control" id="card_-number-1" maxlength="4" onkeyup="movetoNext(this, 'card_-number-2')">
              <input type="text" class="form-control" id="card_-number-2" maxlength="4" onkeyup="movetoNext(this, 'card_-number-3')">
              <input type="text" class="form-control" id="card_-number-3" maxlength="4" onkeyup="movetoNext(this, 'card_-number-4')">
              <input type="text" class="form-control" id="card_-number-4" maxlength="4">
            </div>
          </div>
          <div class="input-group form-group">
            <label for="">Account holder</label>
            <input type="text" class="form-control" id="account-holder" maxlength="20">
          </div>
          <div class="input-group form-group">
            <div class="row  ">
              <div class="col-sm-6 form-inline">
                <label for="Expiry">Expiry</label>
                <div>
                  <select class="form-control" id="expiry-month">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                  <select class="form-control" id="expiry-year">
                  <option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option></select>
                </div>
              </div>
              <div class="col-sm-6">
                <label for="">CVV / CVC</label>
                <input type="text" class="form-control" id="cvv-code" maxlength="4">
              </div>
            </div>
          </div>
          <div class="input-group form-group">
          <button type="submit" class="btn btn-primary" value="Submit" id="payBtn" style=""> CONFIRM PAYMENT </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Virtual Card Ends Heres-->
    </div>
    </div>
  </div>
</div>
</section>
<script src="js/checkout/virtualcard.js"></script>