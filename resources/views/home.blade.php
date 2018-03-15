@extends('layouts.app')

@section('content')

<section id="Inicio" class="section">
	<div class="img-container">
	<img src="img/banner/banner.png">
	</div>
	<span class="blend"></span>
	<div class="container">
		<span class="esconde-frases">
		<h1 class="titulo-1" id="h1-inicio">Alta qualidade em produtos para a construção</h1>
		<h2 class="subtitulo">Vários tipos de areias e britas e outros produtos</h2>
		<a href="#Produtos" class="button button-primary">Ver todos</a>
		</span>
	</div>
</section>

<section id="Sobre" class="section">
	<div class="container">
		<main>
			<div class="sobre-descricao">
				<h2 class="titulo-1">Sobre JRF</h2>
				<p class="texto-comum-1">A empresa JRF trabalha na especialização e comercio de areias, grossa, fina e ensacadas, britas, pó de pedra, barro/areia para a terro, rachão, meio fio e paralelos, serviços de terraplanagem, demolição locações de maquinas.
					Há 20 anos no mercado, fornecendo materiais de alta qualidade e levando satisfação aos nossos clientes. 
				</p>
			</div>
			<div class="sobre-foto">
				<img src="img/sobre/sobre-foto.png">q
			</div>
		</main>
	</div>
</section>

<section id="Produtos" class="section">
	<div class="container">
		<main>
			<h2 class="titulo-1">Produtos</h2>
			<div class="produtos-container">
				<div class="produtos-box">
					<img src="img/produtos/areia-fina.jpg">
					<span class="gradient"></span>
					<p class="texto-comum-1">Areia fina</p>
				</div>
				<div class="produtos-box">
					<img src="img/produtos/areia-grossa.jpg">
					<span class="gradient"></span>
					<p class="texto-comum-1">Areia grossa</p>
				</div>
				<div class="produtos-box">
					<img src="img/produtos/britas-19.jpg">
					<span class="gradient"></span>
					<p class="texto-comum-1">Brita 19 </p>
				</div>
				<div class="produtos-box">
					<img src="img/produtos/britas-diversas.jpg">
					<span class="gradient"></span>
					<p class="texto-comum-1">Britas diversas</p>
				</div>
				<div class="produtos-box">
					<img src="img/produtos/areia-media.jpg">
					<span class="gradient"></span>
					<p class="texto-comum-1">Areia média</p>
				</div>
				<div class="produtos-box">
					<img src="img/produtos/areia-brita.jpg">
					<span class="gradient"></span>
					<p class="texto-comum-1">Areia e brita</p>
				</div>
				<div class="produtos-box">
					<img src="img/produtos/brita-25.jpg">
					<span class="gradient"></span>
					<p class="texto-comum-1">Brita 25</p>
				</div>
				<div class="produtos-box">
					<img src="img/produtos/po-pedras.jpg">
					<span class="gradient"></span>
					<p class="texto-comum-1">Pó de pedras</p>
				</div>
			</main>
		</div>
</section>

<section id="Servicos" class="section">
		<div class="container">
			<main>
				<h2 class="titulo-1">Serviços</h2>
				<div class="servicos-container">
					<div class="servicos-botoes">
						<button class="servicos-btn servicos-btn1 subtitulo servicos-botoes-on">Locação de máquinas</button>
						<button class="servicos-btn servicos-btn2 subtitulo">Demolições</button>
						<button class="servicos-btn servicos-btn3 subtitulo">Terraplanagem</button>
					</div>
					<div class="servicos-conteudo">
						<span class="seta"></span>
						<div class="locacao-maquinas servicos-on">
							<div class="servicos-box">
								<span class="servicos-img">
									<img src="img/servicos/servico1.jpg">
								</span>
								<span class="servicos-descricao">
									<p class="texto-comum-1">Maquina 1</p>
									<p class="texto-comum-2">MCSE boot camps have its supporters and its detractors. boot camps have its supporters and its detractor
									</p>
								</span>
							</div>
							<div class="servicos-box">
								<span class="servicos-img">
									<img src="img/servicos/servico1.jpg">
								</span>
								<span class="servicos-descricao">
									<p class="texto-comum-1">Maquina 1</p>
									<p class="texto-comum-2">MCSE boot camps have its supporters and its detractors. boot camps have its supporters and its detractor
									</p>
								</span>
							</div>
							<div class="servicos-box">
								<span class="servicos-img">
									<img src="img/servicos/servico1.jpg">
								</span>
								<span class="servicos-descricao">
									<p class="texto-comum-1">Maquina 1</p>
									<p class="texto-comum-2">MCSE boot camps have its supporters and its detractors. boot camps have its supporters and its detractor
									</p>
								</span>
							</div>
							<div class="servicos-box">
								<span class="servicos-img">
									<img src="img/servicos/servico1.jpg">
								</span>
								<span class="servicos-descricao">
									<p class="texto-comum-1">Maquina 1</p>
									<p class="texto-comum-2">MCSE boot camps have its supporters and its detractors. boot camps have its supporters and its detractor
									</p>
								</span>
							</div>
						</div>
						<div class="demolicoes">
							<div class="servicos-box">
								<span class="servicos-img">
									<img src="img/servicos/servico2.jpg">
								</span>
								<span class="servicos-descricao">
									<p class="texto-comum-1">Maquina 1</p>
									<p class="texto-comum-2">MCSE boot camps have its supporters and its detractors. boot camps have its supporters and its detractor
									</p>
								</span>
							</div>
							<div class="servicos-box">
								<span class="servicos-img">
									<img src="img/servicos/servico2.jpg">
								</span>
								<span class="servicos-descricao">
									<p class="texto-comum-1">Maquina 1</p>
									<p class="texto-comum-2">MCSE boot camps have its supporters and its detractors. boot camps have its supporters and its detractor
									</p>
								</span>
							</div>
							<div class="servicos-box">
								<span class="servicos-img">
									<img src="img/servicos/servico2.jpg">
								</span>
								<span class="servicos-descricao">
									<p class="texto-comum-1">Maquina 1</p>
									<p class="texto-comum-2">MCSE boot camps have its supporters and its detractors. boot camps have its supporters and its detractor
									</p>
								</span>
							</div>
							<div class="servicos-box">
								<span class="servicos-img">
									<img src="img/servicos/servico2.jpg">
								</span>
								<span class="servicos-descricao">
									<p class="texto-comum-1">Maquina 1</p>
									<p class="texto-comum-2">MCSE boot camps have its supporters and its detractors. boot camps have its supporters and its detractor
									</p>
								</span>
							</div>
						</div>
						<div class="planagem">
							<div class="servicos-box">
								<span class="servicos-img">
									<img src="img/servicos/servico3.jpg">
								</span>
								<span class="servicos-descricao">
									<p class="texto-comum-1">Maquina 1</p>
									<p class="texto-comum-2">MCSE boot camps have its supporters and its detractors. boot camps have its supporters and its detractor
									</p>
								</span>
							</div>
							<div class="servicos-box">
								<span class="servicos-img">
									<img src="img/servicos/servico3.jpg">
								</span>
								<span class="servicos-descricao">
									<p class="texto-comum-1">Maquina 1</p>
									<p class="texto-comum-2">MCSE boot camps have its supporters and its detractors. boot camps have its supporters and its detractor
									</p>
								</span>
							</div>
							<div class="servicos-box">
								<span class="servicos-img">
									<img src="img/servicos/servico3.jpg">
								</span>
								<span class="servicos-descricao">
									<p class="texto-comum-1">Maquina 1</p>
									<p class="texto-comum-2">MCSE boot camps have its supporters and its detractors. boot camps have its supporters and its detractor
									</p>
								</span>
							</div>
							<div class="servicos-box">
								<span class="servicos-img">
									<img src="img/servicos/servico3.jpg">
								</span>
								<span class="servicos-descricao">
									<p class="texto-comum-1">Maquina 1</p>
									<p class="texto-comum-2">MCSE boot camps have its supporters and its detractors. boot camps have its supporters and its detractor
									</p>
								</span>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
</section>


<section id="Contato" class="section">
		<div class="banner-contato">
			<div class="img-contato">
				<span class="blend"></span>
				<img src="img/banner/mapa-banner.png">
			</div>
		</div>
		<div class="container">
			<main>
				<h1 class="titulo-1">Contato</h1>
				<div class="contato-content">
					<form>
						<h1 class="titulo-2">Entre já em contado conosco</h1>
						<label for="nome" class="label">Seu nome</label>
						<input type="text" id="nome" name="nome" class="input input-text" placeholder="Digite aqui seu nome">
						<label for="email" class="label">Seu e-mail</label>
						<input type="email" id="email" name="email" class="input input-text" placeholder="seuemail@email.com">
						<label for="telefone" class="label">Seu telefone</label>
						<input type="tel" id="telefone" name="telefone" class="input input-text" placeholder="(00) 90000-0000">
						<textarea name="mensagem" class="input input-text" placeholder="Digite aqui sua mensagem"></textarea>
						<button class="button button-secondary">Enviar</button>
					</form>
				</div>
			</main>
		</div>
</section>


<section id="Clientes" class="section">
		<div class="container">
			<main>
				<h2 class="subtitulo">Principais Clientes</h2>
				<span class="img-clientes"><img src="img/parceiros/parceiro2.png"></span>
				<span class="img-clientes"><img src="img/parceiros/parceiro1.png"></span>
				<span class="img-clientes"><img src="img/parceiros/parceiro5.png"></span>
				<span class="img-clientes"><img src="img/parceiros/parceiro4.png"></span>
				<span class="img-clientes"><img src="img/parceiros/parceiro3.png"></span>
			</div>
		</div>
</section>
	@stop