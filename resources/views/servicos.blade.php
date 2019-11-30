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
		                	Serviços
		                	<img src="{{ URL::asset('/imagens/logo/G.png') }}" width="90px" align="right" class="img-fluid" alt="Meclay - Serviços e Reparos">
		                </h2>
		            </center>
                </div>

                <div class="container">
                	<div class="row" id="rowServicos">
                		<div class="col-sm" id="colImg">
                			<a href="#" id="linkImgServicos">
                				<center><strong>Gesso - Parede 3D</strong></center>
	                			<img src="{{ URL::asset('/imagens/servicos/gesso.png') }}" class="img-fluid" id="imgServicos">
	                			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                			<p>
								  	<a class="btn btn-outline-dark" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								    	Saiba Mais
								  	</a>
								</p>
								<div class="collapse" id="collapseExample">
								  	<div class="card card-body">
			                			<ul>
			                				<li>Gesso</li>
											<ul>
												<li>
													Placas 
												</li>
												<li>
													Arames Galvanizado
												</li>
												<li>
													Sisal
												</li>
												<li>
													Gesso
												</li>
												<li>
													Pino de Aço
												</li>
											</ul>
											<li>Parede 3D</li>
											<ul>
												<li>
													Gesso Cola
												</li>
												<li>
													Gesso 3D
												</li>
											</ul>
			                			</ul>
								  </div>
								</div>
                			</a>
                		</div>
                		<div class="col-sm" id="colImg">
                			<a href="#" id="linkImgServicos">
                				<center><strong>Pintura</strong></center>
	                			<img src="{{ URL::asset('/imagens/servicos/pintura.png') }}" class="img-fluid" id="imgServicos">
	                			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                			<p>
								  	<a class="btn btn-outline-dark" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample3">
								    	Saiba Mais
								  	</a>
								</p>
								<div class="collapse" id="collapseExample2">
								  	<div class="card card-body">
			                			<ul>
											<li>
			                					Pintura Comum
			                				</li>
			                				<li>
			                					Texturização
			                				</li>
			                				<li>
			                					Grafiato
			                				</li>
			                			</ul>
								  </div>
								</div>
                			</a>
                		</div>
                		<div class="col-sm" id="colImg">
                			<a href="#" id="linkImgServicos">
                				<center><strong>Rebaixamento PVC</strong></center>
	                			<img src="{{ URL::asset('/imagens/servicos/pvc.png') }}" class="img-fluid" id="imgServicos">
	                			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                			<p>
								  	<a class="btn btn-outline-dark" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
								    	Saiba Mais
								  	</a>
								</p>
								<div class="collapse" id="collapseExample3">
								  	<div class="card card-body">
			                			<ul>
			                				<li>
			                					Ferro Metalom 15x15mm Vara de 6 mrs
			                				</li>
			                				<li>
			                					Arame Galvanizado
			                				</li>
			                				<li>
			                					Acabamento PVC
			                				</li>
			                				<li>
			                					POP
			                				</li>
			                				<li>
			                					Parafuso Bucha 8
			                				</li>
			                			</ul>
								  </div>
								</div>
                			</a>
                		</div>
                	</div>
                </div>

                <!-- <br/><br/> -->

                <div class="container">
                	<div class="row" id="rowServicos">
					<div class="col-sm" id="colImg">
                			<a href="#" id="linkImgServicos">
                				<center><strong>Segurança Eletrônica</strong></center>
	                			<img src="{{ URL::asset('/imagens/servicos/segurancaEletronica.jpg') }}" class="img-fluid" id="imgServicos">
	                			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                			<p>
								  	<a class="btn btn-outline-dark" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample5">
								    	Saiba Mais
								  	</a>
								</p>
								<div class="collapse" id="collapseExample4">
								  	<div class="card card-body">
			                			<ul>

			                				<li>
												Câmeras
			                					<ul>
													<li>Bullet / Dome / Speed Dome</li>
												</ul>
			                				</li>
											<li>
												Gravadores
			                					<ul>
													<li>DVR Stand Alone (Canais 32 16 12 8 4)</li>
													<li>HD</li>
													<li>Acessórios de Vídeo</li>
													<li>Adaptador Borne X Conector BNC Macho</li>
													<li>Adaptador Borne X Plug P4 Macho</li>
													<li>Fonte 12v 15a Colmeia</li>
													<li>Cabo 4mm Com Alimentação</li>
												</ul>
			                				</li>
											<li>
												Interfonia
			                					<ul>
													<li>Porteiro Eletronico com Vídeo e sem Vídeo</li>
													<li>Cabo 3 Pares 6x60 3x0 75 MM2 Branco Com Fio De Curso (6x60)</li>
													<li>Fechadura Elétrica</li>
													<li>Fechadura Eletro Ima</li>
													<li>Mola Aerea</li>
												</ul>
			                				</li>
											<li>
												Alarmes
			                					<ul>
													<li>Central De Alarme Active 20 GPRS (CAE)</li>
													<li>Sensor De Detecção Infravermelho</li>
													<li>Sensor Magnético De Sobrepor(Porta De Comercio)</li>
													<li>Sensor Magnético Microprocessador Sem Fio(Para Portas e Janelas)</li>
													<li>Transmissor 3 Botões Para Armar e Desarmar</li>
												</ul>
			                				</li>
											<li>
												Sirene
			                					<ul>
													<li>Bateria Selada 12v</li>
													<li>Cabo 3 Pares 6x60 75 mm</li>
												</ul>
			                				</li>
											<li>
												Automarizadores
			                					<ul>
													<li>Kit Deslizante Solo Para Portão</li>
													<li>Kit Pivotante Duplo Embolo</li>
													<li>Kit Vert Quad Price</li>
													<li>Transmissor 3 Botões Para Armar e Desarmar</li>
													<li>Cancelas</li>
													<li>Barra de Cremalheirea de Aço</li>
												</ul>
			                				</li>
			                				
			                			</ul>
								  </div>
								</div>
                			</a>
                		</div>
                		<div class="col-sm" id="colImg">
                			<a href="#" id="linkImgServicos">
                				<center><strong>Drywall</strong></center>
	                			<img src="{{ URL::asset('/imagens/servicos/drywall.jpg') }}" class="img-fluid" id="imgServicos">
	                			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                			<p>
								  	<a class="btn btn-outline-dark" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample4">
								    	Saiba Mais
								  	</a>
								</p>
								<div class="collapse" id="collapseExample5">
								  	<div class="card card-body">
			                			<ul>
			                				<li>
			                					Chapas
			                				</li>
			                				<li>
			                					Chapas Drywall 1.80 x 2.10 Base De Preço R$ 27,00
			                				</li>
			                				<li>
												Chapa R.U (Resistente a Umidade Cor Verde)
			                				</li>
			                				<li>
												Chapa Anti Chamas (Cor Rosa)
			                				</li>
			                				<li>
			                					Chapa Cimenticia(Gesso e Cimento)
			                				</li>
			                				<li>
												Perfis de Estrutura
			                				</li>
			                				<li>
												Guia / Montante / Canalheta / Canoneira
			                				</li>
			                				<li>
												Parafuso Ponta De Agulha
			                				</li>
											<li>
												Massa Para Tratamento De Juntas 
			                				</li>
											<li>
												Fita Telada e Fita De Junta 
			                				</li>
											<li>
												Manta Termica: Lan De Vidro / Isopor
			                				</li>
											<li>
												Parafuso Bucha n° 8 
			                				</li>
											<li>
												<i>Serviços - Armarios, ninchos, painel tv, camas, closet, cabideiro, armario de cozinha etc...</i> 
			                				</li>
			                			</ul>
								  </div>
								</div>
                			</a>
                		</div>
                		<div class="col-sm" id="colImg">
                			<a href="#" id="linkImgServicos">
                				<center><strong>Eucatex</strong></center>
	                			<img src="{{ URL::asset('/imagens/servicos/eucatex.png') }}" class="img-fluid" id="imgServicos">
	                			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                			<p>
								  	<a class="btn btn-outline-dark" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6">
								    	Saiba Mais
								  	</a>
								</p>
								<div class="collapse" id="collapseExample6">
								  	<div class="card card-body">
			                			<ul>
			                				<li>
												Placa Eucatex 1.20 x 2.10 R$ 80,00
			                				</li>
			                				<li>
			                					Perfis e Estruturas 
			                				</li>
			                				<li>
			                					Guia e Montante
			                				</li>
			                				<li>
			                					Guia Superior 
			                				</li>
			                				<li>
			                					Guia Inferior
			                				</li>
			                				<li>
			                					POP
			                				</li>
			                				<li>
			                					Parafuso e Bucha 8 ou 6
			                				</li>
			                			</ul>
								  </div>
								</div>
                			</a>
                		</div>
                	</div>
                </div>

				<!-- <br/><br/> -->
				
				<div class="container">
                	<div class="row" id="rowServicos">
                		<div class="col-sm" id="colImg">
                			<a href="#" id="linkImgServicos">
                				<center><strong>Elétrica</strong></center>
	                			<img src="{{ URL::asset('/imagens/servicos/eletrica.png') }}" class="img-fluid" id="imgServicos">
	                			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                			<p>
								  	<a class="btn btn-outline-dark" data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample4">
								    	Saiba Mais
								  	</a>
								</p>
								<div class="collapse" id="collapseExample7">
								  	<div class="card card-body">
			                			<ul>
			                				<li>
			                					Iluminação
			                				</li>
			                				<li>
			                					Instalação de Variáveis
			                				</li>
			                			</ul>
								  </div>
								</div>
                			</a>
                		</div>
                		<div class="col-sm" id="colImg">
                			<a href="#" id="linkImgServicos">
                				<center><strong>Pisos e Revestimentos</strong></center>
	                			<img src="{{ URL::asset('/imagens/servicos/piso.png') }}" class="img-fluid" id="imgServicos">
	                			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                			<p>
								  	<a class="btn btn-outline-dark" data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample5">
								    	Saiba Mais
								  	</a>
								</p>
								<div class="collapse" id="collapseExample8">
								  	<div class="card card-body">
			                			<ul>
			                				<li>
			                					Pinturas prediais.
			                				</li>
			                				<li>
			                					Restauração de fachadas.
			                				</li>
			                				<li>
			                					Pintura de fachada Pintura interna.
			                				</li>
			                				<li>
			                					Tratamento de tijolo aparente.
			                				</li>
			                				<li>
			                					Madeiras e metais.
			                				</li>
			                				<li>
			                					Pinturas industriais em epóxi.
			                				</li>
			                				<li>
			                					Poliuretano.
			                				</li>
			                				<li>
			                					Esmalte sintético.
			                				</li>
			                			</ul>
								  </div>
								</div>
                			</a>
                		</div>
                		<div class="col-sm" id="colImg">
                			<a href="#" id="linkImgServicos">
                				<center><strong>Marido de Aluguel</strong></center>
	                			<img src="{{ URL::asset('/imagens/servicos/eletrica.png') }}" class="img-fluid" id="imgServicos">
	                			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                			<p>
								  	<a class="btn btn-outline-dark" data-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample6">
								    	Saiba Mais
								  	</a>
								</p>
								<div class="collapse" id="collapseExample9">
								  	<div class="card card-body">
			                			<ul>
			                				<li>
												Placa Eucatex 1.20 x 2.10 R$ 80,00
			                				</li>
			                				<li>
			                					Perfis e Estruturas 
			                				</li>
			                				<li>
			                					Guia e Montante
			                				</li>
			                				<li>
			                					Guia Superior 
			                				</li>
			                				<li>
			                					Guia Inferior
			                				</li>
			                				<li>
			                					POP
			                				</li>
			                				<li>
			                					Parafuso e Bucha 8 ou 6
			                				</li>
			                			</ul>
								  </div>
								</div>
                			</a>
                		</div>
                	</div>
                </div>

                
                <!-- <br/><br/> -->
                
				<!--
                <div class="container">
                	<div class="row" id="rowServicos">
                		<div class="col-sm">
                			<strong>Abaixo mais alguns de nossos trabalhos</strong>
                			<p> </p>
                			<ul>
			                	<li>
			                		Montagem e manutençao de ArCondicionado
			                	</li>
			                	<li>
			                		Construções de Piscinas em geral
			                	</li>
			                	<li>
			                		Fundação
			                	</li>
			                	<li>
			                		Planta Digital
			                	</li>
			                </ul>
            			</div>
            			<div class="col-sm">
            				<p> </p>
            				<br/>
                			<ul>
			                	<li>
			                		Montagem e manutençao de ArCondicionado
			                	</li>
			                	<li>
			                		Construções de Piscinas em geral
			                	</li>
			                	<li>
			                		Fundação
			                	</li>
			                	<li>
			                		Planta digital
			                	</li>
			                </ul>
            			</div>
            			<div class="col-sm">
            				<p> </p>
            				<br/>
                			<ul>
			                	<li>
			                		Montagem e manutençao de ArCondicionado
			                	</li>
			                	<li>
			                		Construções de Piscinas em geral
			                	</li>
			                	<li>
			                		Fundação
			                	</li>
			                	<li>
			                		Planta digital
			                	</li>
			                </ul>
                		</div>
	                </div>
	            </div>
				-->


            	<br/><br/><br/>
                <!-- ----------------------------------------------------------------------------------------- -->

                </div>
            </div>
        </div>
    </div>
</div> 

<br/>

@endsection
