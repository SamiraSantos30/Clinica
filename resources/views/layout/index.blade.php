<!DOCTYPE html>
<html lang="en">
<head>

     <title>Health - Medical Website Template</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
     

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         
                         <a href="index.html" class="navbar-brand"><i class=""></i>CLINICA</a>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> (14)3345-8776</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 06:00 - 17:30</span>
                         <span class="instagram"><i class="fa fa-instagram"></i> <a href="">Clinica</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><i class=""></i></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="{{ route('home') }}" class="smoothScroll">Clinica</a></li>
                         <li><a href="{{ route('about') }}" class="smoothScroll">Sobre nós</a></li>
                         <li><a href="{{ route('doctors') }}"  class="smoothScroll">opição</a></li>
                       
                         <li class="appointment-btn"><a href="make">Marque uma consulta</a></li>
                    </ul>
               </div>

          </div>
     </section>
 <!-- fim navebar-->

     <!-- HOME -->
    
     @yield('conteudo')

     <!-- ABOUT -->
    
     @yield('about')

     <!-- TEAM -->
     @yield('doctors')


     <!-- NEWS -->
     @yield('news')


     <!-- MAKE AN APPOINTMENT -->  <!-- FOOTER -->
     @yield('make')
        


     <!-- SCRIPTS -->
     <script src="{{ asset('js/jquery.js') }}"></script>
     <script src="{{ asset('js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/jquery.sticky.js') }}"></script>
     <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
     <script src="{{ asset('js/wow.min.js') }}"></script>
     <script src="{{ asset('js/smoothscroll.js') }}"></script>
     <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
