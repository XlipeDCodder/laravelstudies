<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link type="text/css" rel="stylesheet" href="{{asset('css/siteindex.css')}}"    >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
</head>
<body>

    <header>
        <div class="headercontainer">
            
            <div class="logogeral">
                <img src="{{asset('images/logo01.png')}}" alt="">
            </div>


        </div>
        
    </header>
 

    <div class="herocontainer">

        <div class="glasscard">
            <h1>Teste pull2</h1>
        </div>

        <div class="glasscard">
            <h1>Teste de titulo!</h1>
        </div>

        <div class="glasscard">
            <h1>Teste de titulo!</h1>
        </div>

        <div class="glasscard">
            <h1>Teste de titulo!</h1>
        </div>

        <div class="glasscard">
            <h1>Teste de titulo!</h1>
        </div>

        <div class="glasscard">
            <h1>Teste de titulo!</h1>
        </div>

        <div class="glasscard">
            <h1>Teste de titulo!</h1>
        </div>

        <div class="glasscard">
            <h1>Teste de titulo!</h1>
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

<script>
@if(!empty($ErrorMsg2))
    const msg1 = '{!! $ErrorMsg2 !!}';
    alert( msg1 );
@endif
</script>

</body>
</html>