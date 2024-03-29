<!DOCTYPE html>
<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon  -->
    <link rel="shortcut icon" href="{{ asset('imagens/faviconMeclay.jpg')}}" />

    <!-- Chat -->
    <script src="//code.jivosite.com/widget.js" data-jv-id="DBA23fXxgw" async></script>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Meclay - Serviços e Reparos</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body{
            /* Font do site */
            /* 
                font-family: Century Gothic;
            */

        }

        /* Referente ao menu superior o principal */
        #menuSuperior{
            background: #FFFF;
        }
        #linkMenuSuperior{
            font-size: 17px;
        }

        /* Não deixar que o usuário altere o textarea */
        textarea {
          resize: none;
        }

        /* Pading responsavel pela caixa em branco que contem o conteúdo do site */
        #row{
            padding: 30px;
        }

        /* CSS referente a caixa de enviar mensagem da pagina de contato */
        .formContato{
            padding: 50px;
            padding-top: 20px;
            box-shadow: 5px 5px 15px #6E6E6E;
        }
        .textoContato{
            color: #045FB4;
        }

        .imgAbaixoMenu{
            width: 100%;
            height: 200px;
            box-shadow: 1px 10px 15px #6E6E6E;
        }

        /* CSS referente as imagens da pagina de serviços */
        #rowServicos{
            padding: 10px;
        }
        #colImg{
            padding: 10px;
            border-radius: 6px;
        }
        #colImg:hover{
            box-shadow: 5px 5px 15px #6E6E6E;
        }
        #imgServicos{
            border-radius: 8px;
        }
        #linkImgServicos{
            text-decoration: none;
            color: #585858;
        }



        /* Css referente a pagina index */
        .tudoIndex{
          position: relative;
        }

        #imgIndex{
            position: absolute;
            width: 100%;
            height: 100%;
        }

        #textoIndex{
            position: absolute;
        }

        #textoIndex2{
            color: white;
        }

        .orcamentoRapido {
            padding: 30px;
            opacity : 0.9;
            background: #174386;
            border-radius: 8px;
        }
        

        /* CSS Referente ao rodapé do site */
        .rodape{
            width: 100%;
            background-color: #1C1C1C;
            color: #A4A4A4;
        }

        #imgRodape{
            border-radius: 20px;
        }

        #faceRodape{
            /*
                background-color: white;
                border-radius: 50px;
            */
        }

        #textoSigaNosRodape{
            color: yellow;
        }

        .desenvolvedorRodape{
            background-color: black;
            color: white;

            font-size:10px; 
            letter-spacing:2.5px;
        }

    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" id="menuSuperior">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img src="{{ URL::asset('/imagens/logo/C.jpg') }}" title="Home" width="60px" id="imgServicos">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                   

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" id="linkMenuSuperior" href="{{ url('/menu/nossaHistoria') }}">Nossa História</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="linkMenuSuperior" href="{{ url('/menu/servicos') }}">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="linkMenuSuperior" href="{{ url('/menu/contato') }}">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="linkMenuSuperior" href="{{ url('/menu/filiado') }}">Seja-Filiado</a>
                        </li>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        @guest

                            <!-- NÃO LOGADO -->
                            <li class="nav-item">
                                <a class="nav-link" id="linkMenuSuperior" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="linkMenuSuperior" href="{{ route('register') }}">{{ __('Cadastro') }}</a>
                            </li>

                        @else

                            <!-- LOGADO -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <?php 
            /* ********************************************************************************* */
            /* ************************* Parte de mensagens e Alert's ************************** */
            /* ********************************************************************************* */
        ?>

            @if(Session::has('or_cadastrado_sucesso'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('or_cadastrado_sucesso') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{ Session::flush('or_cadastrado_sucesso') }}<!-- Excluindo a session -->
            @endif

            @if(Session::has('or_cadastrado_erro'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ Session::get('or_cadastrado_erro') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{ Session::flush('or_cadastrado_erro') }}<!-- Excluindo a session -->
            @endif
        
        <?php 
            /* ********************************************************************************* */
            /* ********************************************************************************* */
            /* ********************************************************************************* */
        ?>

        <!--<main class="py-4">-->
        <main class="py-0">
            @yield('content')
        </main>
        <!-- Aqui entra o rodapé -->

        @if(!isset($rodape))<!-- Para não aparecer o Roda Pé na index.blade.php -->
        <div class="rodape">

            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <br/><br/>

                        <img src="{{ URL::asset('/imagens/logo/C.jpg') }}" width="153px" id="imgRodape" class="img-fluid" alt="Meclay - Serviços e Reparos">
                        
                    </div>
                    <div class="col-sm">
                        <br/><br/>
                        <p>
                            A empresa Meclay - Serviços e Reparos foi fundada no ano de (2014) na cidade de São Gonçalo e sua principal missão é oferecer soluções rapidas com qualidade.
                            <br/><br/>
                            <b>Email</b>: contatos.meclay@hotmail.com <br/>
                            <b>Telefones</b>: (21)9 99144-4947
                        </p>
                    </div>
                    <div class="col-sm">
                        <br/><br/>
                        
                        <div id="textoSigaNosRodape">
                            <b>SIGA-NOS</b>
                        </div>
                        <div>
                            <p>
                                Aconpanhe nossos serviços nas redes sociais!
                            </p>
                        </div>
                                                    

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
                    </div>
              </div>
            </div>
        <br/>
        </div>
    </div>

    <div class="desenvolvedorRodape">
        <br/><br/>
        <center>
            <p>Copyright © 2020 . All Rights Reserved | Meclay - Serviços e Reparos | Desenvolvedor by Fillipe Anjos - Zap 96684-6099</p>
        </center>
        <br/> 

    </div>
    @endif
</body>
</html> 
