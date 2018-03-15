$(function() {

	menuAtivo();
	fechaMenu();
	setTimeout(function(){
		$(".esconde-frases").find(".titulo-1").css("margin-top", "0");
	}, 850);
	var btn1 = $(".servicos-btn1");
	var btn2 = $(".servicos-btn2");
	var btn3 = $(".servicos-btn3");
	var seta = $(".seta");
	var locacao = $(".locacao-maquinas");
	var demolicoes = $(".demolicoes");
	var planagem = $(".planagem");


	btn1.on("click", function(){
		btnAction(btn1, btn2, btn3);
		seta.css("top", "12%");
		servicosAction(locacao,demolicoes,planagem);
	});
	btn2.on("click", function(){
		btnAction(btn2, btn1, btn3);
		seta.css("top", "42%");
		servicosAction(demolicoes,locacao,planagem);

	});
	btn3.on("click", function(){
		btnAction(btn3, btn1, btn2);
		seta.css("top", "75%");
		servicosAction(planagem,demolicoes,locacao);
	});

	$(".scroll").click(function(event) {
		event.preventDefault();
		$('html,body').animate({
			scrollTop: $(this.hash).offset().top - 60
		}, 600);
        // setTimeout(function() {
        //     fechaMenu2()
        // }, 700)
    });

	var alturas = {};
	$('.section').each(function () {
  alturas[$(this).prop('id')] = $(this).offset().top; // ex: alturas['section_2'] = 600
});

// quando fazemos scoll vamos percorrer o nosso obj alturas e comparar a altura de cada secção com o que já andamos em scroll
$(window).on('scroll', function() {
	for(var seccao in alturas) {
		if($(window).scrollTop() >= alturas[seccao] -60 ) {
      $('.header-li').removeClass('active'); // removemos a classe ative
      $('.header-li[data-section="' +seccao+ '"]').addClass('active'); // adicionamos a class active ao item do menu cuja data-section é igual ao id da secção que está a uma maior ou igual distancia do topo do que aquela que percorremos com o scroll
  }
}
});

$(window).resize(function(){
	if ($(window).width() <= 768){	
		btn1.on("click", function(){
			seta.css("left", "12% !important");
		});
		btn2.on("click", function(){
			seta.css("top", "47% !important");
		});
		btn3.on("click", function(){
			seta.css("top", "82% !important");
		});
	}	
});


});

function btnAction (btnOn, btnOf, btnOf2) {
	btnOn.addClass("servicos-botoes-on");
	btnOf.removeClass("servicos-botoes-on");
	btnOf2.removeClass("servicos-botoes-on");
}
function servicosAction (servOn, servOf, servOf2) {
	servOn.addClass("servicos-on");
	servOf.removeClass("servicos-on");
	servOf2.removeClass("servicos-on");	
}
function menuAtivo() {
	$(".menu-abrir").on("click", function() {
		document.documentElement.classList.add('menu-ativo')
	})
}

function fechaMenu() {
	$(".menu-fechar").on("click", function() {
		document.documentElement.classList.remove('menu-ativo')
	});
}