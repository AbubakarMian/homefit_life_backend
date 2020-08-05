<?php 
include 'header.php'
?>
<section>
	<div class="innerPage">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="pageTitle">
						<img src="images/lock-38.png" class="img-responsive">	
						<h1>Reset Your Password</h1>
					</div>
				</div>
				<div class="col-sm-6 col-sm-offset-3">
					<div class="ResetForm">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					      	<input id="password" type="password" class="form-control" name="password" placeholder="Password">
					    </div>
					    <br/>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					      	<input id="confirmpassword" type="password" class="form-control" name="confirmpassword" placeholder="confirm Password">
					    </div>
					    <br/>
					    <div class="btnLogIn">
					    	<a href=""  class="btn btn-primary btnLogin">Update</a>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php 
include 'footer.php'
?>