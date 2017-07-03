<?php
include("../assets/template/owner/topNav.php");
?>
<br>
<div class="container">
	<h5 class="black-text">Contacts <span class="right">6/30/2016 &bull; 23:38</span></h5>
	<br>

	<div class="row">
		<!--tasks-->
		<div class="col s12">
			<div class="row">
				<div class="col s12">
					<ul class="tabs" style="padding:0;">
						<li class="tab col s3"><a class="active" href="#allContacts">All Contacts</a></li>
						<li class="tab col s3"><a href="#tenants">Tenants</a></li>
						<li class="tab col s3"><a href="#vendors">Vendors</a></li>
					</ul>
				</div>
				<div class="row">
					<div>
						<p>test</p>
					</div>
									<div class="button raised successButton" title="Add A Contact"><i class="fa fa-plus white-text" aria-hidden="true"></i> Add</div>
					<div class="button raised successButton" title="Import Contacts"><i class="fa fa-download white-text" aria-hidden="true"></i> Import</div>
				</div>
				<div id="allContacts" class="col s12">Test 1</div>
				<div id="tenants" class="col s12">Test 2</div>
				<div id="vendors" class="col s12">Test 3</div>
			</div>
		</div>
	</div>
</div>




<?php
include("../assets/template/owner/botNav.php");
?>
