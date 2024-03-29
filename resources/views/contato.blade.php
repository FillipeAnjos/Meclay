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
		                	Contato
		                	<img src="{{ URL::asset('/imagens/logo/G.png') }}" width="90px" align="right" class="img-fluid" alt="Meclay - Serviços e Reparos">
		                </h2>
		            </center>
                </div>

                <div class="row" id="row">
				  <div class="col-sm-4">
				  	<img src="{{ URL::asset('/imagens/logo/D.jpg') }}" class="img-fluid" alt="Meclay - Serviços e Reparos">
				  	<br/><br/>
				  	<!--<h5>Meclay - Serviços e Reparos</h5>-->
				  	<h5 class="textoContato"><b><img src="{{ URL::asset('/imagens/icon/trowel.png') }}" width="25px" class="img-fluid" alt="Meclay - Serviços e Reparos">&nbsp;Meclay - Serviços e Reparos</b></h5>
					<p class="textoContato">
						<b>	
						<img src="{{ URL::asset('/imagens/icon/email.png') }}" width="19px" class="img-fluid" alt="Meclay - Serviços e Reparos">
						&nbsp;contatos.meclay@hotmail.com
						<br/>
						<img src="{{ URL::asset('/imagens/icon/phone.png') }}" width="17px" class="img-fluid" alt="Meclay - Serviços e Reparos">
						&nbsp;&nbsp;Cel: (21)9 99144-4947
						<br/><br/>
						<a href="https://api.whatsapp.com/send?phone=5521991444947&text=Solicite%20seu%20Or%C3%A7amento%20Gr%C3%A1tis%20" title="Whatsapp Meclay" target="_blank">
                            <img src="{{ URL::asset('/imagens/redeSociais/zap.png') }}" width="35px" class="img-fluid" alt="Meclay - Serviços e Reparos">
                        </a>
                        &nbsp;&nbsp;
                        <a href="https://www.facebook.com/pg/Meclay.Reformas/services/" title="Facebook Meclay" target="_blank">
                            <img src="{{ URL::asset('/imagens/redeSociais/face.png') }}" width="35px" id="faceRodape" class="img-fluid" alt="Meclay - Serviços e Reparos">
                        </a>
                        &nbsp;&nbsp;
                        <a href="https://www.instagram.com/invites/contact/?i=1ixn8o2slml2e&utm_content=3xqzdsz" title="Instagram Meclay" target="_blank">
                            <img src="{{ URL::asset('/imagens/redeSociais/instagram.png') }}" width="35px" class="img-fluid" alt="Meclay - Serviços e Reparos">
                        </a>
						</b>
					</p>

				  </div>
				  <div class="col-sm-8">

				  	<form action="show" method="POST" class="formContato">
				  		<p>	
				  			Envie-nos uma mensagem.
				  			<br/>
				  			Deixe o seu comentário!
				  		</p>
					  <div class="form-group">
					    <!--<label for="exampleFormControlInput1">Email address</label>-->
					    <input type="text" class="form-control" placeholder="Nome" required="required">
					  </div>
					  <div class="form-group">
					    <input type="email" class="form-control" placeholder="E-mail" required="required">
					  </div>
					  <div class="form-group">
					    <input type="tel" maxlength="20" class="form-control" placeholder="Telefone" name="numbers" pattern="[0-9]+$" required="required">
					  </div>
					  <div class="form-group">
					    <input type="text" class="form-control" placeholder="Assunto" required="required">
					  </div>
					  <div class="form-group">
					    <textarea class="form-control" rows="3" placeholder="Mensagem" required="required"></textarea>
					  </div>

					  <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">
					</form>

				  </div>
				</div>
				
                
                </div>
            </div>
        </div>
    </div>
</div> 

@endsection
