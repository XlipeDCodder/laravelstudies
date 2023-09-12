<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link type="text/css" rel="stylesheet" href="{{asset('css/siteindex.css')}}"    >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">    
</head>
<body>

    <header>
        <div class="headercontainer">

            <div class="headerlogo">
                <img src="{{asset('images/logo01.png')}}"/>
            </div>

            <div class="headermenu">
                <nav>
                    <ul>
                        <li><a href="{{ route('site.index') }}">Home</a></li>
                        <li><a href="{{ route('site.aboutus') }}">About-us</a></li>
                        <li><a href="{{ route('site.contact') }}">Contact</a></li>
                    </ul>
                </nav>

            </div>

        </div>
        
    </header>

    <div class="herocontainer">

        <div class="aboutcontainer">
            <h1>Sobre o projeto</h1>
            <br>
            <p>A xeroteca, ou xerô para os íntimos, é um acervo digital de provas e trabalhos universitários, que tem como objetivo auxiliar os alunos em seus estudos de forma gratuita.</p> 
        </div>                             

        <div class="title01">
            <h1>Objetivos</h1>
        </div>

        <div class="aboutcontainer1">

            <div>
                <img src="{{asset('images/professor 1.png')}}" alt="" width="231" height="232">
                <div class="subm">
                    Fornecer informações sobre aquele professor da matéria que você está precisando.
                </div>
            </div>

            <div>           
                <img src="{{asset('images/qualification 1.png')}}" alt="" width="231" height="231">
                <div class="subm">
                    Ser um repositório de provas, para ajudar nos estudos.
                </div>                
            </div>

            <div>  
                <img src="{{asset('images/community 1.png')}}" alt="" width="231" height="231">
                <div class="subm">
                    Crescer como uma grande comunidade estudantil, facilitando o acesso a conteúdos de nossa universidade.
                </div>
            </div>



        </div> 

        <div class="aboutcontainer2">

            <div class="title02"> 
                <h1>Nossos deveres e Suas responsabilidades!</h1>
                <img src="{{asset('images/responsibility 1.png')}}">               
            </div>

            <div>                
                <div class="subm1">
                O intuito do projeto Xeroteca é centralizar meios de estudos e informações pertinentes para os alunos de nossa universidade, e para tal, todo o conteúdo será disponibilizados por alunos e professores de forma GRATUITA, e com isso pedimos a todos os usuários para sempre se atentar ao que será enviado e à sua qualidade e pertinência, pois a intenção é ajudar não somente a uma pessoa mas sim toda uma COMUNIDADE. 
                </div>                
            </div>

        </div>

    </div>

    



    <div class="footer-dark">
        <footer>
            <div class="footercontainer">
                <div class="services">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            {{-- <li><a href="#">Hosting</a></li> --}}
                        </ul>
                    </div>

                    <div class="about">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Team</a></li>
                                {{-- <li><a href="#">Careers</a></li> --}}
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="col-md-6 item text">
                            <h3>//</h3>
                            <p>Another thing made by me .</p>
                        </div>
                    </div>

                    <div class="col item social"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a><a href="https://github.com/XlipeDCodder" target="_blank"><ion-icon name="logo-github"></ion-icon></a><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></div>
                </div>
                <p class="copyright">Gancho Products</p><ion-icon name="walk"></ion-icon>
            </div>
        </footer>
    </div>








<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>   
</body>
</html>