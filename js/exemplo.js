$(function(){
	
	var atual = -1;
	var maximo = $('.box-portfolio').length - 1;
	var timer;
	var animacaoDelay = 1;

	executarAnimacao();
	function executarAnimacao(){
		$('.box-portfolio').hide();
		timer = setInterval(logicaAnimacao,animacaoDelay*1000);

		function logicaAnimacao(){
			atual++;
			if(atual > maximo){

				clearInterval(timer);
				return false;
			}

			//alert('chamando intervalo');

			$('.box-portfolio').eq(atual).fadeIn();

		}

	}

})