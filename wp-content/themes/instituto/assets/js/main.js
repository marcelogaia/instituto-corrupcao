/**
 *	jQuery Document Ready
 */
jQuery( document ).ready( function($) {
	var windowWidth = $( window ).width();
	var windowHeight = $( window ).height();
	var documentWidth = $( document ).width();
	var documentHeight = $( document ).height();

	$('.mejs-overlay-loading').closest('.mejs-overlay').addClass('load');
	var $video = $('div.video video');
	var vidWidth = $video.attr('width');
	var vidHeight = $video.attr('height');

    function makeBoardProfilePictureRound() {
    	$('.diretoria-e-conselho-estrategico img').wrap("<div><a href='mailto:contato@naoaceitocorrupcao.org.br'></div>");
    }

	function fixMenuHeight() {
		$(window).on('scroll resize',function(){
			var scrollTop     = $(window).scrollTop(),
			    elementOffset = $('#the-menu').offset().top,
			    distance      = (elementOffset - scrollTop),
			    maxHeight	  = window.innerHeight - distance;

			$('#the-menu').css('max-height',maxHeight);
		}).trigger('scroll');
	}

	function selectProject() {
		$('.project-tabs .tab').click(function(event){
			event.preventDefault();
			event.stopPropagation();
			$('.project-tabs .tab').removeClass('active');
			$(this).addClass('active');

			$('#projetos article.row').removeClass('active');
			$('#projetos article.row').eq($('.project-tabs .tab').index(this)).addClass('active');
		}).eq(0).click();
	}

	function addSlickCarousel() {
		// http://kenwheeler.github.io/slick/
		
		$('.slick-home').slick();

		$('.slick-carousel').slick({
			dots: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			centerMode: true,
			variableWidth: false,
			responsive: [
    			{
					breakpoint: 380,
					settings: {
						slidesToShow: 1,
						// variableWidth: true,
					}
				}
    		]
		});

		$('.slick-carousel-ouro').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [
    			{
					breakpoint: 380,
					settings: {
						slidesToShow: 1,
					}
				}
    		]
		});

		$('.slick-carousel-prata').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			responsive: [
    			{
					breakpoint: 380,
					settings: {
						slidesToShow: 1,
					}
				}
    		]
		});

		$('.slick-carousel-bronze').slick({
			slidesToShow: 9,
			slidesToScroll: 1,
			responsive: [
    			{
					breakpoint: 380,
					settings: {
						slidesToShow: 1,
					}
				}
    		]
		});

		$('.slick-carousel-biblioteca').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [
    			{
					breakpoint: 380,
					settings: {
						slidesToShow: 1,
					}
				}
    		]
		});

		$('.slick-carousel-blog').slick({
			slidesToShow: 1,
			slidesToScroll: 1
		});
	}

	// Open Responsive Menu
	function openResponsiveMenu() {
		$( '.open-responsive-menu' ).click( function() {

			if(!$('.responsive-menu').hasClass('active')) {
				$('.shade').fadeIn(400, function(){
					$('.my-navbar').addClass('fix-top');
				});
			} else {
				$('.shade').fadeOut(400, function(){
					$('.my-navbar').removeClass('fix-top');
				});
				
			}
			
			$( '.responsive-menu' ).toggle( 'slow', function() {
				$( this ).toggleClass( 'active' );
			});

			$( this ).siblings('.participe').toggle('slow');
			$( this ).find('.fa.fa-bars').fadeOut(400,function(){
				$(this).toggleClass('small').fadeIn();
			});
		});

		$("#the-menu .close").click(function(){
			$(".open-responsive-menu").trigger('click');
		});
	}

    function addColoredCirclesToBoard() {
    	$('.diretoria-e-conselho-estrategico li h4').each(function(){
    		var h4 = $(this);
    		var bullets = "<span class='bullets'>";

    		if(h4.hasClass('diretoria')) bullets += "<span class='diretoria'></span>";
    		if(h4.hasClass('conselho')) bullets += "<span class='conselho'></span>";
    		
    		bullets += "</span>";

    		if(h4.parents('.right').length){
    			h4.prepend(bullets);
    		} else {
    			h4.append(bullets);
    		}
    	});
    }

    function addHeightToVideoShortcode() {
        var targetWidth = $(this).width(); //using window width here will proportion the video to be full screen; adjust as needed
        $('div.video, div.video .mejs-container').css('height', Math.ceil(vidHeight * (targetWidth / vidWidth)));
    };

	function oInstitutoPageFunctions() {
		$('.diretoria-e-conselho-estrategico .row').removeClass('row').addClass('col-sm-10 col-sm-offset-1');
		
		// Part 1
		var numOfFoundersPerColumns = Math.round($('.fundadores-associados li').length/3);
		var lis = $(".fundadores-associados  ul > li");
		for(var i = 0; i < lis.length; i+=numOfFoundersPerColumns) {
			lis.slice(i, i+numOfFoundersPerColumns).wrapAll("<ul></li>");
		}
		$(".fundadores-associados  ul > ul").unwrap();

		// Part 2
		var numOfFoundersPerColumns = Math.round($('.obrigado li').length/3);
		var lis = $(".obrigado  ul > li");
		for(var i = 0; i < lis.length; i+=numOfFoundersPerColumns) {
			lis.slice(i, i+numOfFoundersPerColumns).wrapAll("<ul></li>");
		}
		$(".obrigado  ul > ul").unwrap();

		addHeightToVideoShortcode();
		makeBoardProfilePictureRound();
		addColoredCirclesToBoard();
	}

	function fixedMenu() {
        $(window).scroll(function(){
			var wTop = $(window).scrollTop();

			if(wTop > $('#header .jumbotron').outerHeight(false)){
				$(".my-navbar").addClass('navbar-fixed-top');
				$('#header').next().css("margin-top",170);
			} else {
				$(".my-navbar").removeClass('navbar-fixed-top');
				$('#header').next().css("margin-top",0);
			}
		}).trigger('scroll');
	}

	function projectFilters() {
		$(".categories li a").click(function(e){
			e.preventDefault();
			e.stopPropagation();
			
			var cat = $(this).parent().attr('class');
			var projects = $(".the-projects");
			var allProjects = $(".the-projects").find('li');
			var theProjects = projects.find('li.'+cat);
			var otherProjects = projects.find('li:not(.'+cat+')');

			if(cat == 'todos') {
				allProjects.fadeOut(200,function(){
					setTimeout(function(){
						allProjects.fadeIn(200);
					},200);
				});	
			} else {
				otherProjects.fadeOut(200,function(){
					setTimeout(function(){
						theProjects.fadeIn(200);
					},200);
				});	
			}

			$(".categories li").removeClass('active');
			$(this).parents("li").addClass('active');
			
			return false;
		});
	}

	function homeJumbotron() {
		$("body#home").each(function(){
			$(window).on('scroll resize',function(){

				var jumbotron = $('#header .jumbotron');
				var menuHeight = $('#header .nav-wrapper').height();

				jumbotron.css('height',window.innerHeight - menuHeight);

			}).trigger("scroll");
		});
	}

	function participeForms() {
		$('body#participe a.my-modal').click(function (e) {
		    e.preventDefault();
		    $(this).ekkoLightbox({
		    	alwaysShowClose : true
		    });
		});
	}

	function newsletterFixed() {
		$('#newsletter-form').each(function(){
			$('.wpcf7').on('wpcf7:submit',function(){
				$('#newsletter-form').addClass('sucesso');
			});

			$('.close-link').click(function(e){
				$('#newsletter-form').toggleClass('closed');
			});
		});
	}

	// Called Functions
	$( function() {
		fixMenuHeight();
		addSlickCarousel();
		openResponsiveMenu();
		selectProject();
		fixedMenu();

		oInstitutoPageFunctions();
		projectFilters();
		homeJumbotron();
		participeForms();
		newsletterFixed();
	});

	// Window Resize
	$( window ).resize( function() {
		// Called Functions
		$( function() {
			fixMenuHeight();
			addHeightToVideoShortcode();
		});
	});
});