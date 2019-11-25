@extends('layouts.app')

@section('content')
<img src="{{ URL::asset('/imagens/imagemContato.jpg') }}" class="imgAbaixoMenu">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        	<br/>
        	
            <div class="card">
                <div class="card-header">
                	<center>
		                <h2 style="color: #6E6E6E; font-weight: bold;">
		                	Nossa História
		                	<img src="{{ URL::asset('/imagens/logo/G.png') }}" width="90px" align="right" class="img-fluid" alt="Meclay - Serviços e Reparos">
		                </h2>
		            </center>
                </div>

                <div class="row" id="row">
				  <div class="col-sm-6">
				  	<br/>
				  	<img src="{{ URL::asset('/imagens/logo/D.jpg') }}" class="img-fluid">

				  </div>
				  <div class="col-sm-6">

				  	<center><h4><strong>Meclay - Serviços e Reparos</strong></h4></center>

				  	<p>
				  		<h5><strong>Quem Somos</strong></h5>
						Somos uma agência de conteúdo voltado para trabalhos específicos em construção e reparos.
						<br/>Trabalhamos na contrução até o acabamento final do seu imovel.<br/>
						
						Aqui, o negócio é mão na massa para transformar o seu sonho em realidade.<br/>
						
						Somos especialistas em diversas areas aqui destacadas: Rebaixamento de Gesso, pisos e revestimentos, fundação, 
						construção de piscinas com a qualidade de produtos específicos dependendo do seu solo etc.  
				  	</p>
				  	<p>
				  		<h5><strong>Nossa equipe</strong></h5>
				  		Somos formados por uma equipe de tres socios com varios ajudantes dependendo do tamanho da sua necessidade.<br/>

				  		Temos as mais variadas mão de obra com qualidade atendendo assim a sua necessidade e realidade orçamental, 
				  		proporcionando sempre um bem estar financeiro à vocês nossos clientes, assim temos vocês como nosso 
				  		maior parceiro.
				  	</p>
				  	<p>
				  		<h5><strong>Nossa história</strong></h5>
				  		A empresa <b>Meclay - Serviços e Reparos</b> foi fundada no ano de (1998) na cidade de São Gonçalo pelo Senhor <b>Cleyton Dos Anjos Queiroz</b> e sua principal missão é oferecer soluções rapidas porém com qualidade para empresas e para pessoas em geral. Nossos principais clientes são particulares.
				  	</p>

				  </div>
				</div>
				
                
                </div>
            </div>
        </div>
    </div>
</div> 

@endsection
