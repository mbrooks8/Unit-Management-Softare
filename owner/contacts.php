<?php
include("../assets/template/owner/topNav.php");
?>
<br>
<div class="container large">
	<h5 class="black-text">Contacts <span class="right">6/30/2016 &bull; 23:38</span></h5>
	<br>

	<div class="row">
		<!--tasks-->
		<div class="col s12">
			<div class="row">
				<div class="col s12">
					<ul class="tabs" style="padding:0;">
						<li class="tab col s3"><a href="#allContacts">All Contacts</a></li>
						<li class="tab col s3"><a class="active" href="#tenants">Tenants</a></li>
						<li class="tab col s3"><a href="#vendors">Vendors</a></li>
					</ul>
				</div>
				<div class="button raised errorButton" title="Deny"><i class="fa fa-times white-text" aria-hidden="true"></i></div>
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
