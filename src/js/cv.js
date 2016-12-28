;(function () {
    "use strict";
    var nav = {
		map: null,
        init: function () {
			if ($.browser.msie) {
				$('body').addClass('isIE');
			}
			var mapOptions, myLatlng, myMarker;

            $('#navTop a[data-role="scroll"]').each(function () {
				var currentHref = $(this).attr('href').replace(/.*(\#.*)/, '$1');
				$(this).attr('href', currentHref);
			});

            nav.positionNavBar();

            $('#navTop')
                .on('click', 'a[data-role="scroll"]', nav.scrollTo);
			
			$('#nav_aPropos').addClass('selected');
            
            $(window).scroll(function (e) {
                if($(window).scrollTop() > $('#navTop').height() && !$('#navBar').hasClass('show')) {
                    $('#navBar').addClass('show');
                } else if ($(window).scrollTop() < $('#navTop').height() && $('#navBar').hasClass('show')) {
                    $('#navBar').removeClass('show');
                }
            })
            .resize(nav.positionNavBar);
			/*
			myLatlng = new google.maps.LatLng(45.333254, 5.486364);
			mapOptions = {
				zoom: 15,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			
			nav.map = new google.maps.Map(document.getElementById('plan'), mapOptions);
			myMarker = new google.maps.Marker({
				// Coordonnées du cinéma
				position: myLatlng,
				map: nav.map,
				title: "1 Chemin de Villebois, 38100 Grenoble"
			});
			*/
        },
        positionNavBar: function () {
            var left = ($('#top .sectionInner').offset().left + $('#top .sectionInner').width()) - $('#navBar').width(),
            rightNav = $('#navTop').offset().left + $('#navTop').width() -  $('#navBar').width();
            $('#navBar')
                .css('left', rightNav + 'px')
                .on('click', 'a[data-role="scroll"]', nav.scrollTo);
        },
        fixedHdler: function (e) {
            $(this).addClass('fixed');
        },
        unfixedHdler: function (e) {
            $(this).removeClass('fixed');
        },
        scrollTo: function (e) {
            e.preventDefault();
            var offset = $($(this).attr('href')).offset();
            $('html, body').animate({ scrollTop: offset.top }, 'slow');
            nav.selectMenu.call(this);
        },
        selectMenu: function () {
			$('#navBar a.selected').removeClass('selected');
            var position = $('#navBar a[href="' + $(this).attr('href') + '"]').addClass('selected').position(),
			backgroundPosition = '4px ' + position.top + 'px';
			$('#navBar ul').animate({backgroundPosition: backgroundPosition });
        }
    };

    var expPro = {
        init: function () {
            $('#experience-details')
                .on('click', '.exp-link', expPro.showDetails);
        },
        showDetails: function (e) {
            e.preventDefault();
            if(!$(this).hasClass('selected')) {
                $('.exp-link.selected, .exp-content.selected').removeClass('selected');
                $(this).addClass('selected');
                $('.exp-content[data-rel="' + $(this).attr('id') + '"]').addClass('selected');
            }
        }
    };
	
	var realisation = {
		init: function () {
			$('#realisations')
				.on('click', 'a[data-rel="realisation"]', realisation.toggleRea)
				.on('click', 'a.rea-close', realisation.closeRea);
		},
        toggleRea: function (e) {
			e.preventDefault();
            if ($(this).parents('.item').hasClass('show-rea')) {
                realisation.closeRea.call(this);
            } else {
                realisation.showRea.call(this);
            }
        },
		showRea: function () {
			$('#realisations .item')
				.not($(this).parents('.item'))
				.removeClass('show-rea')
				.addClass('fadeOut');
			$(this).parents('.item').addClass('show-rea');
		},
		closeRea: function () {
			$('.show-rea').removeClass('show-rea');
			$('#realisations .item').removeClass('fadeOut');
		}
	};
	
    $(document).ready(function () {
        expPro.init();

		realisation.init();
		$(document).on('click', 'a[data-link="external"]', function (e) { e.preventDefault(); window.open($(this).attr('href')); });
        nav.init();

        $('.carousel')
            .jcarousel()
            .jcarousel('scroll', '+=' + ($('.carousel li').length))
            .on('jcarousel:fullyvisiblein', 'li:first', function() {
                $('.carousel-control-prev').fadeOut();        
            })
            .on('jcarousel:fullyvisibleout', 'li:first', function() {
                $('.carousel-control-prev').fadeIn();        
            })
            .on('jcarousel:fullyvisiblein', 'li:last', function() {
                $('.carousel-control-next').fadeOut();        
            })
            .on('jcarousel:fullyvisibleout', 'li:last', function() {
                $('.carousel-control-next').fadeIn();        
            });
			
        $('.carousel-control-prev').click(function(e) {
            e.preventDefault();
            $('.carousel').jcarousel('scroll', '-=1');
        });
        $('.carousel-control-next').click(function(e) {
            e.preventDefault();
            $('.carousel').jcarousel('scroll', '+=1');
        }).fadeOut();
		
		$('a[data-role="email-link"]').on('click', function(e) {
			e.preventDefault();
			$(this).colorbox({width: '80%', maxWidth: '400px'});
		});
		$('body').on('submit', '#emailForm', function(e) {
			e.preventDefault();
			var data = {
				send: 1,
				nom: $('#nom').val(),
				email: $('#email').val(),
				message: $('#message').val()
			};
			$.ajax('email.php', {
				data: data, 
				type: 'POST',
				success: function(data) {
					$.colorbox({html: data});
				}
			});
		});
    });
}());