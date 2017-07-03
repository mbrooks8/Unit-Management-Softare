<?php
include("../assets/template/owner/topNav.php");
?>
<br>
<div class="container large">
	<h5 class="black-text">Issues <span class="right">6/30/2016 &bull; 23:38</span></h5>
	<br>
	<br>
	<div class="row">
		<!--tasks-->
		<div class="col s12 m12 l10">
			<p><span class="black-text">Tenant's Workorders</span> filtered by <span class="black-text">None <i class="fa fa-angle-down" aria-hidden="true"></i></span></p>
			<br>
			<style>
				.modalItem{
					transition: all .4s ease;
					-webkit-filter: grayscale(40%); /* Safari */
					filter: grayscale(40%);
				}
				.modalItem:hover{
					-webkit-filter: grayscale(0%); /* Safari */
					filter: grayscale(0%);
				}
			</style>



			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header"><i class="fa fa-phone" aria-hidden="true"></i>First</div>
					<div class="collapsible-body">
								<div class="row">
				<a href="#!" class="modalToggle" data-toggle="myModal">
					<div class="col s3">
						<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
					</div>
				</a>
				<a href="#!" class="modalToggle" data-toggle="myModal">
					<div class="col s3">
						<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
					</div>
				</a>
				<a href="#!" class="modalToggle" data-toggle="myModal">
					<div class="col s3">
						<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
					</div>
				</a>
				<a href="#!" class="modalToggle" data-toggle="myModal">
					<div class="col s3">
						<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
					</div>
				</a>
			</div>
			<!--image stuff-->

			<div id="myModal" class="modal z-depth-2">
				<div class="modalHeader">
					<img src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
				</div>
				<div class="modalBody">
					Image Description
				</div>
				<div class="modalFooter">
					<ul>
						<li><a class="dismiss">Close</a></li>
					</ul>
				</div>
			</div>
			<h5 class="black-text">Description</h5>
			<p class="black-text">Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph. A paragraph is defined as “a group of sentences or a single sentence that forms a unit” (Lunsford and Connors 116). Length and appearance do not determine whether a section in a paper is a paragraph. For instance, in some styles of writing, particularly journalistic styles, a paragraph can be just one sentence long. Ultimately, a paragraph is a sentence or group of sentences that support one main idea. In this handout, we will refer to this as the “controlling idea,” because it controls what happens in the rest of the paragraph.</p>

			<br>
			<div>

				<div class="left">

				</div>
				<div class="right">
					<div class="button raised errorButton" title="Deny"><i class="fa fa-times white-text" aria-hidden="true"></i></div>
					<div class="button raised warningButton" title="In Progress"><i class="fa fa-hourglass white-text" aria-hidden="true"></i></div>
					<div class="button raised successButton" title="Complete"><i class="fa fa-check white-text" aria-hidden="true"></i></div>
				</div>
			</div>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><i class="fa fa-phone" aria-hidden="true"></i>Second</div>
					<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="fa fa-phone" aria-hidden="true"></i>Third</div>
					<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
				</li>
			</ul>






			<table class="bordered highlight hide-on-small-only">
				<thead>
					<tr>
						<th style="padding-top:0;"><i class="fa fa-user" aria-hidden="true"></i> Tenant</th>
						<th style="padding-top:0;"><i class="fa fa-briefcase" aria-hidden="true"></i> Workorder</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<h5 class="responsive-text">
								<span class="black-text" title="Tenant Name">Nicholas Sanjeev Vaishampayan</span>
								<span style="font-size:80%;" title="unit number">#12</span>
							</h5>
							<p class="responsive-text" style="font-size:100%;" title="Date Submitted">9/19/2017 &bull;
								<span class="primary" title="Phone Number">
									<a href="tel:1-510-570-5088"><i class="fa fa-phone" aria-hidden="true"></i> 510-570-5088</a>
								</span>
							</p>
						</td>
						<td>
							<h5 class="primary responsive-text" title="Work Order">Poop is on my walls</h5>
						</td>
					</tr>

					<!--add this stuff-->
				</tbody>
			</table>

			<table class="bordered highlight hide-on-small-only">
				<thead>
					<tr></tr>
				</thead>
				<tbody>
					<!--end of stuff to add-->
					<tr>
						<td>
							<h5 class="responsive-text">
								<span class="black-text">Nicholas Sanjeev Vaishampayan</span>
								<span style="font-size:80%;">#12</span>
							</h5>
							<p style="font-size:100%;">9/19/2017 &bull;
								<span class="primary">
									<i class="fa fa-phone" aria-hidden="true"></i> 510-570-5088
								</span>
							</p>
						</td>
						<td>
							<h5 class="primary responsive-text">This one is responsive Text dont know what to do about it i liek more text cause its cool</h5>
						</td>
					</tr>

					<tr>
						<td>
							<h5 class="responsive-text">
								<span class="black-text">Nicholas Sanjeev Vaishampayan</span>
								<span style="font-size:80%;">#12</span>
							</h5>
							<p style="font-size:100%;">9/19/2017 &bull;
								<span class="primary">
									<i class="fa fa-phone" aria-hidden="true"></i> 510-570-5088
								</span>
							</p>
						</td>
						<td>
							<h5 class="primary responsive-text">This one is responsive Text dont know what to do about it i liek more text cause its cool</h5>
						</td>
					</tr>
				</tbody>
			</table>

			<!--this thing-->
			<div class="hide-on-med-and-up">
				<hr>
				<div class="row" style="margin:0;">
					<div class="col s12 m4 l3" style="padding-left:0;">
						<h5 class="responsive-text">
							<span class="black-text">Nicholas Sanjeev Vaishampayan</span>
							<span style="font-size:80%;">#12</span>
						</h5>
					</div>
					<div class="col s12 m8 l9" style="padding-left:0;">
						<h5 class="primary responsive-text">Poop is on my walls</h5>
					</div>
				</div>
				<div class="col s12" style="padding-left:0;">
					<p class="responsive-text" style="font-size:100%;">9/19/2017 &bull;
						<span class="primary">
							<i class="fa fa-phone" aria-hidden="true"></i> 510-570-5088
						</span>
					</p>
				</div>
				<br>
				<hr>
				<div class="row" style="margin:0;">
					<div class="col s12 m4 l3" style="padding-left:0;">
						<h5 class="responsive-text">
							<span class="black-text">Nicholas Sanjeev Vaishampayan</span>
							<span style="font-size:80%;">#12</span>
						</h5>
					</div>
					<div class="col s12 m8 l9" style="padding-left:0;">
						<h5 class="primary responsive-text">This one is repsonsive text My Toilet is Cracked and I dont know what to do about it i liek more text cause its cool</h5>
					</div>
				</div>
				<div class="col s12" style="padding-left:0;">
					<p class="responsive-text" style="font-size:100%;">9/19/2017 &bull;
						<span class="primary">
							<i class="fa fa-phone" aria-hidden="true"></i> 510-570-5088
						</span>
					</p>
				</div>
				<br>
				<hr>
				<div class="row" style="margin:0;">
					<div class="col s12 m4 l3" style="padding-left:0;">
						<h5 class="responsive-text">
							<span class="black-text">Nicholas Sanjeev Vaishampayan</span>
							<span style="font-size:80%;">#12</span>
						</h5>
					</div>
					<div class="col s12 m8 l9" style="padding-left:0;">
						<h5 class="primary responsive-text">This one is repsonsive text My Toilet is Cracked and I dont know what to do about it i liek more text cause its cool</h5>
					</div>
				</div>
				<div class="col s12" style="padding-left:0;">
					<p class="responsive-text" style="font-size:100%;">9/19/2017 &bull;
						<span class="primary">
							<i class="fa fa-phone" aria-hidden="true"></i> 510-570-5088
						</span>
					</p>
				</div>
				<br>


			</div>
			<hr class="hide-on-med-and-up">
			<br class="hide-on-large-only">
		</div>


		<div class="col s12 m12 l2">
			<p class="black-text">Vendors</p>
			<br>
			<p style="font-size:100%;"><span class="primary">Fertilizer Specilist</span> - <span class="primary">510-656-9196</span><br> Armando Hussein - Company Name
				<br><span class="error">M-F 9am - 5pm</span></p><br>
			<p style="font-size:100%;"><span class="primary">Resident Sleeper</span> - <span class="primary">510-656-9196</span><br> Kelvin Lewin
				<br><span class="error">M-F 9am - 5pm</span></p><br>
			<p style="font-size:100%;"><span class="primary">Ganja Warrior</span> - <span class="primary">510-656-9196</span><br> Bob Marley
				<br><span class="">M-Su 9am - 2am</span></p><br>
			<p style="font-size:100%;"><span class="primary">Fertilizer Specilist</span> - <span class="primary">510-656-9196</span><br> Armando Hussein
				<br><span class="error">M-F 9am - 5pm</span></p><br>
			<p style="font-size:100%;"><span class="primary">Fertilizer Specilist</span> - <span class="primary">510-656-9196</span><br> Armando Hussein
				<br><span class="error">M-F 9am - 5pm</span></p><br>
		</div>
	</div>
</div>




<?php
include("../assets/template/owner/botNav.php");
?>
