//Sidebar
window.onload = function() {
	$(".sideToggle").click(function(){
		$(".sidebar").toggleClass("active");
	})
	$(".sideBody ul li").click(function()
							   {
		$(this).toggleClass("active");
	})
};
//Modal Control
function initModal()
{
	$(".modalToggle").click(
		function()
		{
			$('body').prepend('<div class="shadow" id="asdfasdfasdsf"></div>');
			setTimeout(
				function()
				{
					$("#asdfasdfasdsf").css("background-color", "rgba(0,0,0,0.4)");
					/*	$("#asdfasdfasdsf").addEventListener('touchmove', function(e) {

						e.preventDefault();

					}, false);*/
					$("#asdfasdfasdsf").click(
						function(){
							$(this).css("background-color", "rgba(0,0,0,0)");
							$("#asdfasdfasdfasdf").removeClass("active");
							let toRemove = $(this);
							setTimeout(function(){toRemove.remove()},400);
						}
					);
				},100
			);
			var el = document.getElementById(""+$(this).data( "toggle" ));
			console.log(el);
			var clone = $(el.cloneNode(true));
			clone.attr("id","asdfasdfasdfasdf").appendTo("#asdfasdfasdsf");
			setTimeout(
				function()
				{
					$("#asdfasdfasdfasdf").addClass("active");
					$("#asdfasdfasdfasdf").click(function(e){ e.stopPropagation();});
					$("#asdfasdfasdfasdf .dismiss").click(function()
														  {
						$("#asdfasdfasdsf").css("background-color", "rgba(0,0,0,0)");
						$("#asdfasdfasdfasdf").removeClass("active");
						let toRemove = $("#asdfasdfasdsf");
						setTimeout(function(){toRemove.remove()},400)
					})
				},100
			);
		});

}





//animations
var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
	var window_height = $window.height();
	var window_top_position = $window.scrollTop();
	var window_bottom_position = (window_top_position + window_height);
	$.each($animation_elements, function() {
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);

		//check to see if this current container is within viewport
		if ((element_bottom_position >= window_top_position) &&
			(element_top_position <= window_bottom_position)) {
			$element.addClass('in-view');
		} else {
			$element.removeClass('in-view');
		}
	});
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');

//boxed animation
function boxed(){
	$(".boxed").click(function(){

		var origin = $(this);
		var windowWidth = window.innerWidth;
		var windowHeight = window.innerHeight;
		var originalWidth = origin.width();
		var originalHeight = origin.height();

		if (origin.hasClass('popOut-img1')){
			origin.removeClass('popOut-img1');
			origin.parent().removeClass('popOut-active');
			$("#tempClass").remove();
			console.log("fuckyourself");
			return;
		}

		// Resize Image
		var ratio = 0;
		var widthPercent = originalWidth / windowWidth;
		var heightPercent = originalHeight / windowHeight;
		var newWidth = 0;
		var newHeight = 0;


		if (widthPercent > heightPercent) {
			ratio = originalHeight / originalWidth;
			newWidth = windowWidth * 0.9;
			newHeight = windowWidth * 0.9 * ratio;

			origin.addClass('popOut-img1');
		}
		else {
			ratio = originalWidth / originalHeight;
			newWidth = (windowHeight * 0.9) * ratio;
			newHeight = windowHeight * 0.9;
			origin.addClass('popOut-img1');
		}

		$("head").append("<div id='tempClass'></div>")

		$("#tempClass").html("<style>.popOut-img1{width:"+newWidth+"px !important;height:"+newHeight+"px !important;position:relative;float:left;top:50%;left:50%;transform:translate(-50%,-50%);z-index:1000;}.popOut-img1:hover{cursor:zoom-out;}</style>");

		origin.parent().addClass('popOut-active');

		$(window).scroll(function(){
			origin.removeClass('popOut-img1');
			origin.parent().removeClass('popOut-active');
			$("#tempClass").remove();
			console.log("fuckyourself");
			$(window).unbind('scroll');
		});

		// Return on ESC
		$(document).keyup(function(e) {

			if (e.keyCode === 27) {   // ESC key
				if (origin.parent().hasClass('popOut-active')) {
					origin.removeClass('popOut-img1');
					origin.parent().removeClass('popOut-active');
					$("#tempClass").remove();
					console.log("fuckyourself");
				}
			}
		});
	});
};



var carousel = {carousels:""};

carousel.carInterval;
carousel.init = function(){
	console.log("init");
	carousel.carousels = $(".carousel");
	var temp = [];
	for (var i = 0; i <carousel.carousels.length;i++)
	{
		if(carousel.carousels.length > 1 && carousel.carousels[i].id == ""){alert("when using multiple carousel.carousels you must give an ID to each carousel");}
		var selectString = "";
		if(carousel.carousels[i].id != "")
		{
			selectString = "#"+carousel.carousels[i].id;
		}
		selectString += ".carousel ul";
		temp.push(selectString);
	}
	carousel.carousels = temp;
	carousel.makeCarousels();
	for(var i =0;i < carousel.carousels.length;i++){
		var temp = $(carousel.carousels[i]+" li");
		var size = temp.length;
		temp = $(carousel.carousels[i]+" li:eq(0)");
		temp.css({left:"50%"});
	}
}
carousel.makeCarousels = function(){
	let carousels = carousel.carousels;
	carInterval = setInterval(function(){
		for(let i =0;i < carousels.length;i++){
			setTimeout(function(){carousel.testtest(i);},1500);
		}
	},6500);

}
carousel.testtest = function(currentCar){
	var temp = $(carousel.carousels[currentCar]+" li");
	var size = temp.length;
	temp = $(carousel.carousels[currentCar]+" li:eq(1)");
	temp.css({left:"50%"});
	temp = $(carousel.carousels[currentCar]+" li:eq(0)");
	temp.css({left:"-100%"});
	setTimeout(function(){carousel.testtesttest(currentCar);},5000);
}
carousel.testtesttest = function(currentCar){
	console.log("testtesttest");
	var temp = $(carousel.carousels[currentCar]+" li");
	var size = temp.length;
	temp = $(carousel.carousels[currentCar]+" li:eq(0)");
	$($(carousel.carousels[currentCar]+" li:eq(0)").clone()).appendTo(carousel.carousels[currentCar]);
	$(carousel.carousels[currentCar]+" li:first").remove();
	$(carousel.carousels[currentCar]+" li:last").css({left:"200%"});
}

(function ($) {
  $.fn.collapsible = function(options, methodParam) {
    var defaults = {
      accordion: undefined,
      onOpen: undefined,
      onClose: undefined
    };

    var methodName = options;
    options = $.extend(defaults, options);


    return this.each(function() {

      var $this = $(this);

      var $panel_headers = $(this).find('> li > .collapsibleHeader');

      var collapsible_type = $this.data("collapsible");

      /****************
      Helper Functions
      ****************/

      // Accordion Open
      function accordionOpen(object) {
        $panel_headers = $this.find('> li > .collapsibleHeader');
        if (object.hasClass('active')) {
          object.parent().addClass('active');
        }
        else {
          object.parent().removeClass('active');
        }
        if (object.parent().hasClass('active')){
          object.siblings('.collapsible-body').stop(true,false).slideDown({ duration: 350, easing: "easeOutQuart", queue: false, complete: function() {$(this).css('height', '');}});
        }
        else{
          object.siblings('.collapsible-body').stop(true,false).slideUp({ duration: 350, easing: "easeOutQuart", queue: false, complete: function() {$(this).css('height', '');}});
        }

        $panel_headers.not(object).removeClass('active').parent().removeClass('active');

        // Close previously open accordion elements.
        $panel_headers.not(object).parent().children('.collapsible-body').stop(true,false).each(function() {
          if ($(this).is(':visible')) {
            $(this).slideUp({
              duration: 350,
              easing: "easeOutQuart",
              queue: false,
              complete:
                function() {
                  $(this).css('height', '');
                  execCallbacks($(this).siblings('.collapsibleHeader'));
                }
            });
          }
        });
      }

      // Expandable Open
      function expandableOpen(object) {
        if (object.hasClass('active')) {
          object.parent().addClass('active');
        }
        else {
          object.parent().removeClass('active');
        }
        if (object.parent().hasClass('active')){
          object.siblings('.collapsible-body').stop(true,false).slideDown({ duration: 350, easing: "easeOutQuart", queue: false, complete: function() {$(this).css('height', '');}});
        }
        else {
          object.siblings('.collapsible-body').stop(true,false).slideUp({ duration: 350, easing: "easeOutQuart", queue: false, complete: function() {$(this).css('height', '');}});
        }
      }

      // Open collapsible. object: .collapsibleHeader
      function collapsibleOpen(object) {
        object.toggleClass('active');

        if (options.accordion || collapsible_type === "accordion" || collapsible_type === undefined) { // Handle Accordion
          accordionOpen(object);
        } else { // Handle Expandables
          expandableOpen(object);
        }

        execCallbacks(object);
      }

      // Handle callbacks
      function execCallbacks(object) {
        if (object.hasClass('active')) {
          if (typeof(options.onOpen) === "function") {
            options.onOpen.call(this, object.parent());
          }
        } else {
          if (typeof(options.onClose) === "function") {
            options.onClose.call(this, object.parent());
          }
        }
      }

      /**
       * Check if object is children of panel header
       * @param  {Object}  object Jquery object
       * @return {Boolean} true if it is children
       */
      function isChildrenOfPanelHeader(object) {

        var panelHeader = getPanelHeader(object);

        return panelHeader.length > 0;
      }

      /**
       * Get panel header from a children element
       * @param  {Object} object Jquery object
       * @return {Object} panel header object
       */
      function getPanelHeader(object) {

        return object.closest('li > .collapsibleHeader');
      }

      /*****  End Helper Functions  *****/


      // Methods
      if (methodParam >= 0 &&
          methodParam < $panel_headers.length) {
        var $curr_header = $panel_headers.eq(methodParam);
        if ($curr_header.length &&
            (methodName === 'open' ||
            (methodName === 'close' &&
            $curr_header.hasClass('active')))) {
          collapsibleOpen($curr_header);
        }
        return;
      }


      // Turn off any existing event handlers
      $this.off('click.collapse', '> li > .collapsibleHeader');
      $panel_headers.off('click.collapse');


      // Add click handler to only direct collapsible header children
      $this.on('click.collapse', '> li > .collapsibleHeader', function(e) {
        var element = $(e.target);

        if (isChildrenOfPanelHeader(element)) {
          element = getPanelHeader(element);
        }

        collapsibleOpen(element);
      });


      // Open first active
      if (options.accordion || collapsible_type === "accordion" || collapsible_type === undefined) { // Handle Accordion
        collapsibleOpen($panel_headers.filter('.active').first());

      } else { // Handle Expandables
        $panel_headers.filter('.active').each(function() {
          collapsibleOpen($(this));
        });
      }

    });
  };

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
}( jQuery ));
