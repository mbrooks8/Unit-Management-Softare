<?php
include("../assets/template/owner/topNav.php");
?>
<br>
<div class="container large">
	<h5 class="black-text"><span><a href="contacts.php">Workorder</a></span><span> / <i class="fa fa-briefcase" aria-hidden="true"></i> #1156</span><span class="right">6/30/2016 &bull; 23:38</span></h5>
	<br>
	<br>

	<div class="row">
		<div class="col s12 m12 l3">
			<h5><span class="black-text">Nicholas</span> <span>#12</span></h5>
			<h5 class="black-text">Phone</h5>
			<a title="Phone Number" href="tel:1-510-570-5088"><i class="fa fa-phone" aria-hidden="true"></i> 510-579-5088</a>
			<br>
			<h5 class="black-text">Email</h5>
			<a title="Email Address" href="mailto:nvaishampayan@ucmerced.edu" style="word-wrap: break-word;"><i class="fa fa-envelope" aria-hidden="true"></i> nvaish@ucmerced.edu</a>
			<br>
			<h5 class="black-text">Address</h5>
			<a title="Home Address" href="https://www.google.com/maps/place/46710+Crawford+St+%2312,+Fremont,+CA+94539/@37.4924963,-121.9268821,17z/data=!3m1!4b1!4m5!3m4!1s0x808fc65d5670e733:0x7e1b3f6506ab592e!8m2!3d37.4924963!4d-121.9246934"><i class="fa fa-home" aria-hidden="true"></i> 46710 Crawford St. Apt #12</a>
		</div>
		<div class="col s12 l7">
			<div class="row">
				<div class="col s12">
					<div class="col s12" style="padding-bottom:20px;">
						<ul class="tabs" style="padding:0;">
						<li class="tab col s3 m6 l5" title="Send A Message"><a class="active" href="#email"><i class="fa fa-envelope" aria-hidden="true"></i> Send Message</a></li>
							<li class="tab col s3 m6 l4" title="Add A Note"><a  href="#note"><i class="fa fa-sticky-note" aria-hidden="true"></i> Add A Note</a></li>

						</ul>
					</div>


					<div id="note" class="col s12">
						<textarea name="editor1" onkeyup="auto_grow(this)" placeholder="Add a note about this person" required></textarea>

					</div>

					<div id="email" class="col s12">
						<textarea name="editor2" onkeyup="auto_grow(this)" placeholder="Send an email to this person" required></textarea>

					</div>
				</div>
				<div class="col s12">
					<br>
					<p>Displaying <span class="primary">all activity <i class="fa fa-angle-down" aria-hidden="true"></i></span></p>
					<ul class="collapsible" data-collapsible="accordion">
						<a href="workorders.php">
							<li>
								<div class="collapsibleHeader">
									<table class="highlight">
										<tbody>
											<tr>
												<td>
													<h5 class="responsive-text">
														<span class="black-text" title="Activity">Submitted a workorder</span>

															<span title="Date" class="defaultText right" style="font-size:80%;">7/6/2017</span>
													</h5>

													<p class="responsive-text black-text" style="font-size:120%;">
													Work order text goes here

													</p>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</li>
						</a>
					</ul>
				</div>
			</div>
		</div>
		<div class="col s12 m12 l2">
		<h5>Notes</h5>
		<p class="black-text">This guy may be a terrorist</p>
		<p class="black-text">Be careful</p>
		</div>
	</div>
</div>




<?php
include("../assets/template/owner/botNav.php");
?>
