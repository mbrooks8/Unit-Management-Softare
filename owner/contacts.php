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
				<div class="col s12" style="padding-bottom:20px;">
					<ul class="tabs" style="padding:0;">
						<li class="tab col s3"><a class="active" href="#allContacts">All Contacts</a></li>
						<li class="tab col s3"><a href="#tenants">Tenants</a></li>
						<li class="tab col s3"><a href="#vendors">Vendors</a></li>
					</ul>
				</div>
				<div class="button raised successButton" title="Add A Contact"><i class="fa fa-plus white-text" aria-hidden="true"></i> Add</div>
				<div class="button raised successButton" title="Import Contacts"><i class="fa fa-download white-text" aria-hidden="true"></i> Import</div>
				<div id="allContacts" class="col s12">


					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsibleHeader">
								<table>
									<tbody>
										<tr>
											<td>
												<h5 class="responsive-text">
													<span class="black-text" title="Tenant Name">Nicholas Vaishampayan</span>
													<span style="font-size:80%;" title="unit number">#12</span>
												</h5>
												<p class="responsive-text" style="font-size:100%;" title="Date Submitted">nvaishampayan@ucmerced.edu &bull;
													<span class="primary" title="Phone Number">
														<a href="tel:1-510-570-5088" style="white-space: nowrap"><i class="fa fa-phone" aria-hidden="true"></i> 510-570-5088</a>
													</span>
												</p>
											</td>
										</tr>
										<!--add this stuff-->
									</tbody>
								</table>

							</div>
						</li>
					</ul>

				</div>



				<div id="tenants" class="col s12">




				</div>
				<div id="vendors" class="col s12">




				</div>
			</div>
		</div>
	</div>
</div>




<?php
include("../assets/template/owner/botNav.php");
?>
