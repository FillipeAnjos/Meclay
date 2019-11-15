@extends('layouts.app')

@section('content')

<div class="tudoIndex">

	<img src="/imagens/imagem2.jpg" class="img-fluid" id="imgIndex">
	<p id="textoIndex">
		<div class="container">
		  	<div class="row">
		    	<div class="col">
		    		<br/><br/><br/><br/>
			      		
			      	<h1 id="textoIndex2">
						<strong>PROPOSTA ATRAENTE <br/>E VOLTADA PRA
						SUA NECESSIDADE</strong>
					</h1>
					<a href="/menu/servicos" class="btn btn-warning"><strong>Nossos Serviços</strong></a>	
		      		
		    	</div>
		    	<div class="col-md-4">
		    		<br/><br/><br/><br/>

					<form action="show" method="POST">
					  	<div class="form-group">
				    		<input type="text" class="form-control" placeholder="Nome" required="required">
					  	</div>
				 	 	<div class="form-group">
					    	<input type="email" class="form-control" placeholder="E-mail" required="required">
				 	 	</div>
					  	<div class="form-group">
					    	<textarea class="form-control" rows="3" placeholder="Mensagem" required="required"></textarea>
					  	</div>
					  	<input type="submit" name="Enviar" value="Enviar" class="btn btn-warning">
					</form>

		    	</div>
		  	</div>
		</div>
	</p>

</div>

@endsection
