@extends('layouts.app')

@section('content')

<div class="tudoIndex">

	<!-- Atualizar exemplo -->
	<img src="{{ URL::asset('/imagens/imgIndex.png') }}" class="img-fluid" id="imgIndex">
	<p id="textoIndex">
		<div class="container">
		  	<div class="row">
		    	<div class="col">
		    		<br/><br/><br/><br/><br/>
			      		
			      	<h1 id="textoIndex2">
						<strong>Meclay - Serviços e Reparos</strong>
					</h1>

					<p id="textoIndex2" style="font-size: 22px;">
						PROPOSTA ATRAENTE E VOLTADA PRA
						SUA NECESSIDADE
					</p>

					<br/>

					<p id="textoIndex2" style="font-size: 20px;">
						A <strong>Meclay</strong> é a uma empresa de manutenção e reformas no <i>Rio de Janeiro</i>. 
						Nossa missão é atender um público exigente, que busca eficiência, 
						qualidade e economia.
					</p>
					
					<a href="{{ url('/menu/servicos') }}" class="btn btn-warning"><strong>Veja Nossos Serviços</strong></a>	
		      		
		    	</div>
		    	<div class="col-md-5">
		    		<br/><br/><br/><br/><br/>

					<div class="orcamentoRapido">
						<center>
							<h3 style="color: yellow">
								<img src="{{ URL::asset('/imagens/icon/cifrao.png') }}" style="margin-top: -7px;">
								Orçamento Rápido
							</h3>
							
						</center>
						<form action="{{ url('/orcamentoRapido') }}" method="POST">
							
							<!-- csrf abaixo responsavel por requisição POST -->
							@csrf
							
							<div class="form-group">
								<span style="color: yellow">Nome completo<span>
								<input type="text" class="form-control" placeholder="Nome Completo" name="nomeOR" required="required">
							</div>
							<div class="form-group">
								<span style="color: yellow">E-mail<span>
								<input type="email" class="form-control" placeholder="E-mail" name="emailOR" required="required">
							</div>
							<div class="form-group">
								<span style="color: yellow">Descreva os serviços</span>
								<textarea class="form-control" rows="3" placeholder="Descreva os serviços desejados!" name="orcamentoOR" required="required"></textarea>
							</div>
							<center>
								<input type="submit" name="Enviar" value="Enviar Orçamento" class="btn btn-warning btn-sm btn-block" style="font-weight: bold;">
							</center>
						</form>
					</div>
		    	</div>
		  	</div>
		</div>
	</p>

	<br/><br/><br/><br/><br/><br/>
	
</div> 

@endsection
