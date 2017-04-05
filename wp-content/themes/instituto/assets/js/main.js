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
    	$('.diretoria-e-conselho-estrategico img').wrap("<div class='img-circle'><a href='mailto:contato@naoaceitocorrupcao.org.br'></div>");

    	var left = true;

    	$('.img-circle').each(function(){
    		// var img = $(this).find('img').eq(0);
    		// $(this).css({
    		// 	backgroundImage	: "url("+img.attr('src')+")"
    		// });

    		if(!left) $(this).parents("li").addClass('right');

    		left = !left;

    		// img.remove();
    	});
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
		$('.slick-carousel').slick({
			dots: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			centerMode: true,
			variableWidth: true
		});

		$('.slick-carousel-ouro').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
		});

		$('.slick-carousel-prata').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
		});

		$('.slick-carousel-bronze').slick({
			slidesToShow: 9,
			slidesToScroll: 1,
		});

		$('.slick-carousel-biblioteca').slick({
			slidesToShow: 4,
			slidesToScroll: 1
		});

		$('.slick-carousel-blog').slick({
			slidesToShow: 1,
			slidesToScroll: 1
		});
	}

	// Open Responsive Menu
	function openResponsiveMenu() {
		$( '.open-responsive-menu' ).click( function() {
			$( '.responsive-menu' ).toggle( 'slow', function() {
				$( this ).toggleClass( 'active' );
			});

			$( this ).siblings('.participe').toggle('slow');
			$( this ).find('.fa.fa-bars').fadeOut(400,function(){
				$(this).toggleClass('small').fadeIn();
			});
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

	// Called Functions
	$( function() {
		fixMenuHeight();
		addSlickCarousel();
		openResponsiveMenu();
		selectProject();
		fixedMenu();

		oInstitutoPageFunctions();
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