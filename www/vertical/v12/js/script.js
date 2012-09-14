/* esse codigo é para o geral */
	if($('header').length){
		$barra = $('header');
		$barra_or = $barra.offset().top;
			
		$(window).scroll(function(e) {
			if ($(this).scrollTop() > $barra_or) {
				$barra.addClass('header_cima');
			} else {
				$barra.removeClass('header_cima');
			}	
		});
	};
$(function() {
	
	if($('.compartilha').length){
		var top_inicial = $('.compartilha').position().top;	
		var top, window_top;
		$(window).scroll(function(e) {
			top = $('.compartilha').position().top;
			window_top = $(document).scrollTop()+128;

			if ( top_inicial <= window_top) {
				$('.compartilha').css({'top' : (window_top-1)+'px'});
			}

		});
	};
	
	$('.selStyle').selectmenu({style:'dropdown'});

	function exposeclose(expose, target) {
		target.hide();
		expose.removeClass('z_maior').expose();
		$.mask.close();
	}

	$('.bt_imovel').click(function() {
		$(document).mask('#000');
		$('.expose1').fadeIn('100').addClass('z_maior').expose();
		$('.menu_imovel').fadeIn('100', function() {
			$('#exposeMask').bind('click', function() {
				exposeclose($('.expose1'), $('.menu_imovel'));
			});
		});
	});

	$('.bt_fecharexpose').click(function() {
		exposeclose($('.expose1'), $('.menu_imovel'));
	});

	/* Formulários */
	$('[placeholder]').focus(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
			input.val('');
			input.removeClass('placeholder');
		}
		
		if (input.attr('name') == 'telefone') {
			input.mask('(99) 9999-9999');
		}
	}).blur(function() {
		var input = $(this);
		if (input.val() == '' || input.val() == input.attr('placeholder')) {
			input.addClass('placeholder');
			input.val(input.attr('placeholder'));
		}
	}).blur();
		
	$('[placeholder]').parents('form').submit(function() {
		$(this).find('[placeholder]').each(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
			}
		});
	});
	/* fim geral */
	/* esse codigo é só para inicial */
	$('.scroll_painel').scrollable({speed: 1000}).navigator({
		navi:'.navi'
	});
	$('.scroll_img_g').scrollable({speed: 800}).navigator({
		navi:'.navi'
	});
	$('.scroll_img_3').scrollable({speed: 600}).navigator({
		navi:'.navi'
	});
	$('.scroll_img_4').scrollable({speed: 400}).navigator({
		navi:'.navi'
	});

	var api_scroll_imovel;
	var obj_scroll;
	var atual = 0;
	var scroll = false;

	$('.imoveis_princ').bind('mouseenter', function() {
		obj_scroll = $(this).find('.scroll_imovel');
	
		if ( obj_scroll.size() ) {

			if (!scroll) {
				obj_scroll.scrollable({speed: 500}).navigator({
					navi:'.navi_prontomorar'
				}).autoscroll({interval:3000,autoplay:false});

				api_scroll_imovel = obj_scroll.data("scrollable");

				scroll = true;
			}
			
			var total_itens = api_scroll_imovel.getSize();
			api_scroll_imovel.play();

			obj_scroll.find('.item:eq('+api_scroll_imovel.getIndex()+')').find('.track').animate({
			    width: "100%"
			}, 3000, 'linear');

			api_scroll_imovel.onSeek(function() {
					
				atual = this.getIndex();

				if (atual == 0) {
					api_scroll_imovel.play();
				}

				obj_scroll.find('.item:eq('+this.getIndex()+')').find('.track').animate({
				    width: "100%"
				}, 3000, 'linear', function() {
					if ( atual == (total_itens - 1) ) {
						obj_scroll.find('.item').find('.track').width('0%');
						api_scroll_imovel.stop();
						api_scroll_imovel.begin();
					}
				});
			});
		}
	}).bind('mouseleave',function() {
		obj_scroll.find('.item').find('.track').width('0%');
		api_scroll_imovel.stop();
	});

	var api_scroll_imovel2;
	var obj_scroll2;
	var atual2 = 0;
	var scroll2 = false;

	$('.imoveis_princ2').bind('mouseenter', function() {
		obj_scroll2 = $(this).find('.scroll_imovel2');
	
		if ( obj_scroll2.size() ) {

			if (!scroll2) {
				obj_scroll2.scrollable({speed: 500}).navigator({
					navi:'.navi_construcao'
				}).autoscroll({interval:3000,autoplay:false});

				api_scroll_imovel2 = obj_scroll2.data("scrollable");

				scroll2 = true;
			}
			
			var total_itens = api_scroll_imovel2.getSize();
			api_scroll_imovel2.play();

			obj_scroll2.find('.item:eq('+api_scroll_imovel2.getIndex()+')').find('.track').animate({
			    width: "100%"
			}, 3000, 'linear');

			api_scroll_imovel2.onSeek(function() {
					
				atual2 = this.getIndex();

				if (atual2 == 0) {
					api_scroll_imovel2.play();
				}

				obj_scroll2.find('.item:eq('+this.getIndex()+')').find('.track').animate({
				    width: "100%"
				}, 3000, 'linear', function() {
					if ( atual == (total_itens - 1) ) {
						obj_scroll2.find('.item').find('.track').width('0%');
						api_scroll_imovel2.stop();
						api_scroll_imovel2.begin();
					}
				});
			});
		}
	}).bind('mouseleave',function() {
		obj_scroll2.find('.item').find('.track').width('0%');
		api_scroll_imovel2.stop();
	});

	
	$('.bt_fecharexpose').click(function() {
		exposeclose($('.expose1'), $('.menu_imovel'));
	});
	$('.scroll_indice').scrollable({vertical: true, speed: 500, next:'.next_indice', prev:'.prev_indice'});
	$('.atendimento').click(function() {
		$(document).mask('#fff');
		$('.expose2').fadeIn('100').addClass('z_maior').expose();
		$('.bloco_atendimento').fadeIn('100', function() {
			$('#exposeMask').bind('click', function() {
				exposeclose($('.expose2'), $('.bloco_atendimento'));
				$.mask.close();
			});
		});
	});

	$(".bt_trabalhe").click(function(){
	      $(".trabalhe_conosco").slideDown("slow");
	      $("header").addClass("bg_abrir_branco"); 
	      
	      if ($(this).scrollTop() <= $barra_or) {
				$barra.addClass('header_cima');
			}
	 });
	$(".bt_fechar_trabalhe").click(function(){
	      $(".trabalhe_conosco").slideUp("fast");
	      $("header").removeClass("bg_abrir_branco");
	      if ($(this).scrollTop() < $barra_or) {
				$barra.removeClass('header_cima');
			}	
	});

	$(".bt_arearestrita").click(function(){
	      $(".area_restrita").slideDown("slow");
	      $("header").addClass("bg_abrir_branco_restrito"); 

	      if ($(this).scrollTop() <= $barra_or) {
				$barra.addClass('header_cima');
			}
	 });
	$(".bt_fechar_area").click(function(){
	      $(".area_restrita").slideUp("fast");
	      $("header").removeClass("bg_abrir_branco_restrito");
	      if ($(this).scrollTop() < $barra_or) {
				$barra.removeClass('header_cima');
			}	
	});

	$(".bt_atend_on").click(function(){
		$(".atendimento_off").slideUp("slow");
	    $(".atendimento_on").slideDown("slow");
	});
	$(".bt_atend_off").click(function(){
		$(".atendimento_on").slideUp("slow");
	    $(".atendimento_off").slideDown("slow");
	});
	/* fim geral */
	/* pg  imovel */
	$(".bt_abrir_interesse").click(function(){
		if ($(this).parents(".l_ico").hasClass("ico_aberto")){
			$(this).parents(".l_ico").removeClass("ico_aberto");
			$container.isotope('reLayout');
		}else{
			$(this).parents(".l_ico").addClass("ico_aberto"); 	
			$container.isotope('reLayout');
		}  
	 });
	var $container = $('.l_interesses');	
		$container.isotope({
			itemSelector: '.element',
			masonry: {
				gutterWidth: 10
		}
	});
	
	$(document).ready(function() {
		$.waypoints.settings.scrollThrottle = 30;
		$('.bloco_sobre').waypoint(function(event, direction) {
			offset: '-100%'
		}).find('.esq_indicacao').waypoint(function(event, direction) {
			$(this).parent().toggleClass('sticky', direction === "down");
			event.stopPropagation();
			$(window).scroll(function () {
				$(".esq_indicacao").animate({
					top: $(document).scrollTop()+"px"
				}, {
					duration:1000,
					queue:false
				});
			});
		});
	});
	/* fim imovel */
	
});