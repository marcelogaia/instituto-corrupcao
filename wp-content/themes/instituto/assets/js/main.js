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

	var disableEnter = function () {
		$(window).keydown(function(event){
			if(event.keyCode == 13) {
				event.preventDefault();
				console.log("Boom! Cancelled!");
				return false;
			}
		});
	}

	var disableZoom = function() {
		document.addEventListener('touchmove', function(event) {
			event = event.originalEvent || event;
			if(event.scale > 1) {
				event.preventDefault();
			}
		}, false);
	}

	// TODO: Understand why.
    var makeBoardProfilePictureRound = function() {
    	$('.diretoria-e-conselho-estrategico img').wrap("<div><a href='mailto:contato@naoaceitocorrupcao.org.br'></div>");
    }

	var fixMenuHeight = function () {
		$(window).on('scroll resize',function(){
			$("#the-menu").each(function(){
				var scrollTop     = $(window).scrollTop(),
				    elementOffset = $('#the-menu').offset().top,
				    distance      = (elementOffset - scrollTop),
				    maxHeight	  = window.innerHeight - distance;

				$('#the-menu').css('height',maxHeight);
			});
		}).trigger('scroll');
	}

	var selectProject = function () {
		$('.project-tabs .tab').click(function(event){
			event.preventDefault();
			event.stopPropagation();
			$('.project-tabs .tab').removeClass('active');
			$(this).addClass('active');

			$('#projetos article.row').removeClass('active');
			$('#projetos article.row').eq($('.project-tabs .tab').index(this)).addClass('active');
		}).eq(0).click();
	}

	var addSlickCarousel = function() {
		// http://kenwheeler.github.io/slick/
		if($.fn.slick == undefined) return false;

		$('.slick-home').slick();

		$('.slick-carousel').slick({
			dots: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			centerMode: true,
			variableWidth: false,
			responsive: [{
				breakpoint: 380,
				settings: {
					slidesToShow: 1,
				}
			}]
		});

		$('.slick-carousel, .slick-carousel-ouro, .slick-carousel-prata, .slick-carousel-bronze').on('setPosition', function(event, slick){
			$(slick.$list.context).find('li.slick-slide').each(function(){
				var width = $(this)[0].offsetWidth;
				
				console.log($(this).width(), $(this)[0].offsetWidth);
				
				$(this).css('lineHeight',width+"px");
				$(this).css('height',width+"px");
			});
		});

		$('.slick-carousel-ouro').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [{
				breakpoint: 380,
				settings: {
					slidesToShow: 1,
				}
			}]
		});

		$('.slick-carousel-prata').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			responsive: [{
				breakpoint: 380,
				settings: {
					slidesToShow: 1,
				}
			}]
		});

		$('.slick-carousel-bronze').slick({
			slidesToShow: 9,
			slidesToScroll: 1,
			responsive: [{
				breakpoint: 380,
				settings: {
					slidesToShow: 1,
				}
			}]
		});

		$('.slick-carousel-biblioteca').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [{
				breakpoint: 380,
				settings: {
					slidesToShow: 1,
				}
			}]
		});

		$('.slick-carousel-blog').slick({
			slidesToShow: 1,
			slidesToScroll: 1
		});
	}

	// Open Responsive Menu
	var openResponsiveMenu = function() {
		$( '.open-responsive-menu' ).click( function() {

			if(!$('.responsive-menu').hasClass('active')) {
				$('.shade').fadeIn(400, function(){
					$('.my-navbar').addClass('fix-top');
				});
				$(document).keyup(function(e) {
				     if (e.keyCode == 27) { // escape key maps to keycode `27`
						$(".open-responsive-menu").trigger('click');
				    }
				});
			} else {
				$('.shade').fadeOut(400, function(){
					$('.my-navbar').removeClass('fix-top');
				});
				$(document).unbind("keyup");
				$(window).trigger('scroll');
			}
			
			$( '.responsive-menu' ).toggle( 'slow', function() {
				$( this ).toggleClass( 'active' );
			});

			$( this ).siblings('.participe').toggle('slow');
			$( this ).find('.fa.fa-bars').fadeOut(400,function(){
				$(this).toggleClass('small').fadeIn();
			});
		});

		$("#the-menu .close, .shade").click(function(){
			$(".open-responsive-menu").trigger('click');
		});
	}

    var addColoredCirclesToBoard = function() {
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

    var addHeightToVideoShortcode = function() {
        var targetWidth = $(this).width(); //using window width here will proportion the video to be full screen; adjust as needed
        $('div.video, div.video .mejs-container').css('height', Math.ceil(vidHeight * (targetWidth / vidWidth)));
    };

	var oInstitutoPageFunctions = function() {
		$('.diretoria-e-conselho-estrategico .row').removeClass('row').addClass('col-sm-10 col-sm-offset-1');
		
		// Part 1
		var numOfFoundersPerColumns = Math.ceil($('.fundadores-associados li').length/3);
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

	var fixedMenu = function() {
        $(window).scroll(function(){
			var wTop = $(window).scrollTop();
			var navBarHeight = $("#header .my-navbar").height();

			$('body:not(#projeto)').each(function(){return false;});
			
			if(wTop > $('#header .jumbotron').outerHeight(false)){
				$(".my-navbar").addClass('navbar-fixed-top');
				$('#header').next().css("margin-top",navBarHeight);
				$('#newsletter-form').css("opacity",1);
			} else {
				$(".my-navbar").removeClass('navbar-fixed-top');
				$('#header').next().css("margin-top",0);
				$('#newsletter-form').css("opacity",0);
			}
		}).trigger('scroll');
	}

	var projectFilters = function() {
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

	var homeJumbotron = function () {
		$("body#home").each(function(){
			$(window).on('scroll resize',function(){

				var jumbotron = $('#header .jumbotron');
				var menuHeight = $('#header .my-navbar').height();
				jumbotron.css('height',window.innerHeight - menuHeight);
				jumbotron.find('.master-slider-parent').eq(0).css('height',window.innerHeight - menuHeight);

			}).trigger("scroll");
		});
	}

	var participeForms = function() {
		$('body#participe a.my-modal').click(function (e) {
		    e.preventDefault();
		    $(this).ekkoLightbox({
		    	alwaysShowClose : true,
		    	onShown: function() {
		    		elementLoaded('.participe-form',validatePagSeguroForm);
				}
		    });
		    
		});
	}

	var newsletterFixed = function() {
		$('#newsletter-form').each(function(){
			$('.wpcf7').on('wpcf7:submit',function(){
				$('#newsletter-form').addClass('sucesso');
			});

			$('.close-link').click(function(e){
				$('#newsletter-form').toggleClass('closed');
			});
		});
	}

	var bibliotecaLightbox = function () {
		$('body#biblioteca section#videos a').click(function (e) {
		    e.preventDefault();
		    $(this).ekkoLightbox({
		    	alwaysShowClose : true
		    });
		});
	}

	var elementLoaded = function (el, callback) {
		if($(el).exists()) {
			callback($(el));
		} else {
			setTimeout(function(){
				elementLoaded(el, callback);
			},300);
		}
		
	}

	var validatePagSeguroForm = function(formWrapper) {
		// https://stackoverflow.com/a/18221081/4184867
		var theForm;
		console.log($('.participe-form').exists());

		$('.participe-form').each(function(){
			theForm = $(this).find('.wpcf7-form').eq(0);
			console.log(theForm);

			theForm.validate({
				rules: {		
					nome: {
						required: true,
						minlength: 2
					},
					sobrenome: {
						required: true,
						minlength: 2
					},
					email: {
						required: true,
						email: true
					},
					telefone: {
						required: true,
						minlength: 10
					}
				},
				messages: {	
					nome: {
						required: "Campo \"Nome\" obrigatório.",
						minlength: "Seu nome deve conter pelo menos 2 caracteres."
					},
					sobrenome: {
						required:  "Campo \"Sobrenome\" obrigatório.",
						minlength:  "Seu sobrenome deve conter pelo menos 2 caracteres."
					},
					email: {
						required:  "Campo \"Email\" obrigatório.",
						email: "Por favor, insira um email válido."
					},
					telefone: {
						required:  "Campo \"Telefone\" obrigatório.",
						digits: "Por favor, insira um telefone válido."
					}
				}
			});
			
			
		});

		$('.wpcf7-tel').mask("(99) 99999999?9");

		$(document).on('submit','.wpcf7-form',function(event){
			event.preventDefault();
			event.stopPropagation();

			if(theForm.valid()) {
				var formData = $(this).serializeArray();
				// sendToMailchimp
				// on success redirect to:
				window.location.href = "https://pag.ae/bkjpKBb";

			}
		});
	}

	$.fn.exists = $.fn.exists || function() { 
		return !!(this.length && (this[0] instanceof HTMLDocument || this[0] instanceof HTMLElement)); 
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
		bibliotecaLightbox();

		disableEnter();
		disableZoom();
		//validatePagSeguroForm();
	});

	// Window Resize
	$( window ).resize( function() {
		// Called Functions
		$( function() {
			fixMenuHeight();
			addHeightToVideoShortcode();
		});
	}).trigger('resize');
});