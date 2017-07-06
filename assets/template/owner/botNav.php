<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col l8 s12">
				<h5 class="white-text">4Dev</h5>
				<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
			</div>
		</div>
		<!--increase / decrease font sizes for accessibility-->
		<button id="_biggify">
			Bigger Text
		</button>

		<button id="_smallify">
			Smaller Text
		</button>
		<button id="_reset">
			Default Text
		</button>
		<!--Google translate Pages for accessibility-->
		<div id="google_translate_element"></div><script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
		}
		</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© 2017 Copyright 4Dev All Rights Reserved
			<a class="grey-text text-lighten-4 right" href="https://www.linkedin.com/in/estebanmagallonperez/">Please Hire Us</a>
		</div>
	</div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../assets/js/fontChange.js" crossorigin="anonymous"></script>
<script src="../assets/js/poverty.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>
<!--Tinymce is a TinyMCE is a platform independent web-based JavaScript HTML WYSIWYG
editor control released as open source under LGPL.-->
 <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <script>
            CKEDITOR.replace( 'editor1' );
	     CKEDITOR.replace( 'editor2' );
        </script>

<script>
	$( document ).ready(function() {
		initModal();
	});
	$(document).ready(function(){
		$('.collapsible').collapsible();
	});
</script>

</html>
