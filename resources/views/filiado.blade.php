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
		                	Seja um filiado
		                	<img src="{{ URL::asset('/imagens/logo/G.png') }}" width="90px" align="right" class="img-fluid" alt="Meclay - Serviços e Reparos">
		                </h2>
		            </center>
                </div>

                <div class="row" id="row">
				  <div class="col-sm-4">
				  	<img src="{{ URL::asset('/imagens/logo/D.jpg') }}" class="img-fluid" alt="Meclay - Serviços e Reparos">
				  
                    <br/><br/>

                    <center>
                        <a href="{{ url('/menu/...') }}" class="btn btn-warning" style="box-shadow: 5px 10px 8px #888888;">
                            <strong>Faça seu Orçamento</strong>
                        </a>	
		      		</center>

				  </div>
				  <div class="col-sm-8">

				  	<form action="show" method="POST" class="formContato">
				  		<p>	
				  			Texto a ser desenvolvido 1
				  			<br/>
				  			Texto a ser desenvolvido 2
				  		</p>
					  <div class="form-group">
					    <!--<label for="exampleFormControlInput1">Email address</label>-->
					    <input type="text" class="form-control" placeholder="Nome" maxlength="60" name="nomeFiliado" required="required">
					  </div>
					  <div class="form-group">
					    <input type="email" class="form-control" placeholder="E-mail" maxlength="90" name="emailFiliado" required="required">
					  </div>
                      <div class="form-group">
					    <input type="text" class="form-control" placeholder="Idade" maxlength="3" name="idadeFiliado" required="required">
					  </div>
                      <div class="form-group">
					    <input type="text" class="form-control" placeholder="Profissão" maxlength="20" name="profissaoFiliado" required="required">
					  </div>
					  <div class="form-group">
					    <input type="tel" maxlength="20" class="form-control" placeholder="Telefone" name="numbers" pattern="[0-9]+$" required="required">
					  </div>
					  <div class="form-group">
					    <input type="text" class="form-control" placeholder="Bairro" maxlength="50" name="bairroFiliado" required="required">
					  </div>
                      <div class="form-group">
					    <input type="text" class="form-control" placeholder="Município" maxlength="50" name="municipioFiliado" required="required">
					  </div>
                      <div class="form-group">
					    <input type="text" class="form-control" name="estadoFiliado" value="Rio de Janeiro" required="required" readonly>
					  </div>

					  <input type="submit" name="Enviar" value="Seja um filiado - Meclay" class="btn btn-primary">
					</form>

				  </div>
				</div>
				
                
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
