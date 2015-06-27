jQuery(document).ready(function($) {
	var twitter_username = 'themefuse';
	var items = 2;
	jQuery.ajax({
		url: 'twitter/getTweets.php',
		data: 'username='+twitter_username+'&items='+items,
		success: function(data) {
			if(data == 'cURL is NOT installed')
			{
				console.log(data);
			}
			if((data != '') && (data != 'cURL is NOT installed'))
			{
				jQuery('.f_col .widget-container.widget-twitter ul').html(data);
			}
		}
	});
// Scroll to top Icon
	$.fn.UItoTop = function(options) {
 		var defaults = {
			text: 'To Top',
			min: 200,
			inDelay:400,
			outDelay:300,
  			containerID: 'toTop',
			containerHoverID: 'toTopHover',
			scrollSpeed: 700,
			easingType: 'linear'
 		};

 		var settings = $.extend(defaults, options);
		var containerIDhash = '#' + settings.containerID;
		var containerHoverIDHash = '#'+settings.containerHoverID;
		
		$('body').append('<span id="'+settings.containerID+'">'+settings.text+'</span>');
		$(containerIDhash).hide().click(function(){
			$('html,body,document').animate({scrollTop:0}, settings.scrollSpeed, settings.easingType);
			$('#'+settings.containerHoverID, this).stop().animate({'opacity': 0 }, settings.inDelay, settings.easingType);
			return false;
		})
		.prepend('<span id="'+settings.containerHoverID+'"></span>')
		.hover(function() {
				$(containerHoverIDHash, this).stop().animate({
					'opacity': 1
				}, 500, 'linear');
			}, function() { 
				$(containerHoverIDHash, this).stop().animate({
					'opacity': 0.7
				}, 600, 'linear');
			});
					
		$(window).scroll(function() {
			var sd = $(window).scrollTop();
			if(typeof document.body.style.maxHeight === "undefined") {
				$(containerIDhash).css({
					'position': 'absolute',
					'top': $(window).scrollTop() + $(window).height() - 50
				});
			}
			if ( sd > settings.min ) 
				$(containerIDhash).fadeIn(settings.inDelay);
			else 
				$(containerIDhash).fadeOut(settings.Outdelay);
		});

};
	
// Featured Posts Grid
	$(".featuredGrid .featured-post").hover(function() {		
		$(this).parent().children().stop().animate({"opacity": 0.50},300);
		$(this).stop().animate({"opacity": 100},300);		
	}, function() {			
		$(this).parent().children().stop().animate({"opacity": 100},300);
	});
		
// Remove links outline in IE 7
	$("a").attr("hideFocus", "true").css("outline", "none");

// style Select, Radio, Checkbox
	if ($("select").hasClass("select_styled")) {
		cuSel({changedEl: ".select_styled", visRows: 15});
	}
	if ($("div,p").hasClass("input_styled")) {
		$(".input_styled input").customInput();
	}
	
// resonsive megamenu			
	var screenRes = $(window).width();   
	
    if (screenRes < 750) {		
		$("li.mega-nav").removeClass("mega-nav");			
	} 
	if (screenRes > 750) {				
		mega_show();		
    } 	
	if (screenRes > 400) {		
		$(".grid_cols2 .post-item:odd").after('<div class="divider"></div>');
	}	
	if (screenRes > 990) {						
		$().UItoTop({ easingType: 'easeOutQuart' });		
    } 
			
// dropdown menu	
	function mega_show(){		
		$('.dropdown li, .dropdown li ul li').hoverIntent({
			sensitivity: 5,
			interval: 100, 
			over: subm_show, 
			timeout: 50, 
			out: subm_hide
		});
	}
	function subm_show(){		
		$(this).children("ul").slideDown(100);		
	}
	function subm_hide(){ 
		$(this).children("ul").slideUp(90);		
	}
// centering dropdown submenu
	$(".dropdown > li").hover(function(){
		var dropDown = $(this).children("ul");
		var dropDownLi = $(this).children().children("li").width();
		var posLeft = ((dropDownLi - $(this).width())/2);
			
	});
			
	$(".dropdown ul").parent("li").addClass("parent");
	$(".dropdown li:first-child, .pricing_box li:first-child, .sidebar .widget-container:first-child").addClass("first");
	$(".dropdown li:last-child, .pricing_box li:last-child, .widget_twitter .tweet_item:last-child, .sidebar .widget-container:last").addClass("last");
	$(".dropdown li:only-child").removeClass("last").addClass("only");	
	$(".sidebar .current-menu-item, .sidebar .current-menu-ancestor").prev().addClass("current-prev");				
	
// tabs		
	if ($("ul").hasClass("tabs")) {		
		$("ul.tabs").tabs("> .tabcontent", {tabs: 'li', effect: 'fade'});	
	}
	if ($("ul").is(".tabs.linked")) {		
		$("ul.tabs").tabs("> .tabcontent");
	}
	
// odd/even
	$("ul.recent_posts > li:odd, ul.popular_posts > li:odd, .styled_table table>tbody>tr:odd, .boxed_list > .boxed_item:odd, .grid_layout .post-item:odd").addClass("odd");
	$(".widget_recent_comments ul > li:even, .widget_recent_entries li:even, .widget_twitter .tweet_item:even, .widget_archive ul > li:even, .widget_categories ul > li:even, .widget_nav_menu ul > li:even, .widget_links ul > li:even, .widget_meta ul > li:even, .widget_pages ul > li:even").addClass("even");
	
// cols
	$(".row .col:first-child").addClass("alpha");
	$(".row .col:last-child").addClass("omega"); 	
    jQuery('.row .post-item-wide').slice(-2).css('border-bottom', 'none'); 
    
// toggle content
	$(".toggle_content").hide(); 	
	$(".toggle").toggle(function(){
		$(this).addClass("active");
		}, function () {
		$(this).removeClass("active");
	});
	
	$(".toggle").click(function(){
		$(this).next(".toggle_content").slideToggle(300,'easeInQuad');
	});


// buttons	
	$(".button_link, .button_styled, .btn-share, .btn, .contact-social img, .btn-submit, .social_content img, .social_content a, .post-share a").hover(function(){
		$(this).stop().animate({"opacity": 0.85});
	},function(){
		$(this).stop().animate({"opacity": 1});
	});	

// input labels

// Topmenu <ul> replace to <select>
	$(function() {
	   if (screenRes < 700) {
		  
		  var mainNavigation = $('#topmenu').clone();

		  /* Replace unordered list with a "select" element to be populated with options, and create a variable to select our new empty option menu */
		  $('#topmenu').html('<select class="select_styled" id="topm-select"></select>');
		  var selectMenu = $('#topm-select');

		  /* Navigate our nav clone for information needed to populate options */
		  $(mainNavigation).children('ul').children('li').each(function() {

			 /* Get top-level link and text */
			 var href = $(this).children('a').attr('href');
			 var text = $(this).children('a').text();
			 
			 /* Append this option to our "select" */
			if ($(this).is(".current-menu-item") && href != '#') {				 
				$(selectMenu).append('<option value="'+href+'" selected>'+text+'</option>');			
			} else if ( href == '#' ) {				 
				$(selectMenu).append('<option value="'+href+'" disabled="disabled">'+text+'</option>');
			} else {
				$(selectMenu).append('<option value="'+href+'">'+text+'</option>');
			}

			 /* Check for "children" and navigate for more options if they exist */
			 if ($(this).children('ul').length > 0) {
				$(this).children('ul').children('li').not(".mega-nav-widget").each(function() {

				   /* Get child-level link and text */
				   var href2 = $(this).children('a').attr('href');
				   var text2 = $(this).children('a').text();

				   /* Append this option to our "select" */
				   if ($(this).is(".current-menu-item") && href2 != '#') {				 
						$(selectMenu).append('<option value="'+href2+'" selected> &nbsp;|-- '+text2+'</option>');
					} else if ( href2 == '#' ) {				 
						$(selectMenu).append('<option value="'+href2+'" disabled="disabled"> &nbsp;|-- '+text2+'</option>');
					} else {
						$(selectMenu).append('<option value="'+href2+'"> &nbsp;|-- '+text2+'</option>');
					}
					
				   // if ($(this).is(".current-menu-item")) {				 
						// $(selectMenu).append('<option value="'+href2+'" class="select-current" selected>'+text2+'</option>');
					// } else {
						// $(selectMenu).append('<option value="'+href2+'"> &nbsp;|-- '+text2+'</option>');
					// }
					
					/* Check for "children" and navigate for more options if they exist */
					 if ($(this).children('ul').length > 0) {
						$(this).children('ul').children('li').each(function() {

						   /* Get child-level link and text */
						   var href3 = $(this).children('a').attr('href');
						   var text3 = $(this).children('a').text();

						   /* Append this option to our "select" */
						   if ($(this).is(".current-menu-item")) {				 
								$(selectMenu).append('<option value="'+href3+'" class="select-current" selected> &nbsp;&nbsp;&nbsp;&nbsp;|-- '+text3+'</option>');
							} else {
								$(selectMenu).append('<option value="'+href3+'"> &nbsp;&nbsp;&nbsp;&nbsp;|-- '+text3+'</option>');
							}
											   
						});
					 }
									   
				});
			 }
			
		  });
	   }

	   /* When our select menu is changed, change the window location to match the value of the selected option. */
	   $(selectMenu).change(function() {
		  location = this.options[this.selectedIndex].value;
	   });
	});	

// Smooth Scroling of ID anchors	
  function filterPath(string) {
  return string
    .replace(/^\//,'')
    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
    .replace(/\/$/,'');
  }
  var locationPath = filterPath(location.pathname);
  var scrollElem = scrollableElement('html', 'body');
 
  $('a[href*=#].anchor').each(function() {
    $(this).click(function(event) {
    var thisPath = filterPath(this.pathname) || locationPath;
    if (  locationPath == thisPath
    && (location.hostname == this.hostname || !this.hostname)
    && this.hash.replace(/#/,'') ) {
      var $target = $(this.hash), target = this.hash;
      if (target && $target.length != 0) {
        var targetOffset = $target.offset().top;
          event.preventDefault();
          $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
            location.hash = target;
          });
      }
    }
   });	
  });
 
  // use the first element that is "scrollable"
  function scrollableElement(els) {
    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
      var el = arguments[i],
          $scrollElement = $(el);
      if ($scrollElement.scrollTop()> 0) {
        return el;
      } else {
        $scrollElement.scrollTop(1);
        var isScrollable = $scrollElement.scrollTop()> 0;
        $scrollElement.scrollTop(0);
        if (isScrollable) {
          return el;
        }
      }
    }
    return [];
  }
  // prettyPhoto lightbox, check if <a> has atrr data-rel and hide for Mobiles
	if($('a').is('[data-rel]') && screenRes > 600) {
        $('a[data-rel]').each(function() {
			$(this).attr('rel', $(this).data('rel'));
		});
		$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false});	
    }
  
});