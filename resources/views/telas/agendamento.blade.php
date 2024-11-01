<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>

  <!-- loader-->
  <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet"/>
  <script src="{{ asset('assets/js/pace.min.js') }}"></script>

  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

  <!--Full Calendar Css-->
  <link href="{{ asset('assets/plugins/fullcalendar/css/fullcalendar.min.css') }}" rel='stylesheet'/>
  <!-- jQuery UI CSS -->
  <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
  
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
  

   
   <div id="wrapper">
 
  
     <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
       <div class="brand-logo">
        <a href="{{ url('/pacientes') }}">
         <img src="{{ asset('images/logo.png') }}" class="logo-icon" alt="logo icon">
         <h5 class="logo-text">Dashtreme Admin</h5>
       </a>
     </div>
     <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
      </ul>
     </div>
    

     <header class="topbar-nav">
       <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link toggle-menu" href="javascript:void();"><i class="icon-menu menu-icon"></i></a>
          </li>
          <li class="nav-item">
            <form class="search-bar">
              <input type="text" class="form-control" placeholder="Enter keywords">
              <a href="javascript:void();"><i class="icon-magnifier"></i></a>
            </form>
          </li>
        </ul>
      </nav>
     </header>
   

     <div class="clearfix"></div>
     <div class="content-wrapper">
      <div class="container-fluid">
        <div class="mt-3">
          <div id='calendar'></div>
          <button id="addEventButton" class="btn btn-primary mt-3">Adicionar Evento</button>
     
          <input type="text" id="eventDate" class="form-control mt-2" placeholder="Selecione a data" readonly/>
        </div>
      </div>
     </div>
     
     <footer class="footer">
        <div class="container">
          <div class="text-center">
            Samira © 2018 Dashtreme Admin
          </div>
        </div>
      </footer>

     <!-- Scripts -->
     <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
     <script src="{{ asset('assets/js/popper.min.js') }}"></script>
     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/simplebar/js/simplebar.js') }}"></script>
     <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
     <script src="{{ asset('assets/js/app-script.js') }}"></script>
     <script src="{{ asset('assets/plugins/fullcalendar/js/moment.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> <!-- jQuery UI JS -->
     <script>
        $(document).ready(function() {
            var calendar = $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: true,
                events: [], 

                
                dayRender: function(date, cell) {
                    if (date.isSame(moment(), 'day')) {
                        cell.css("background-color", "#836FFF"); 
                        cell.css("color", "#000"); 
                    }
                },

                // Evento clicado
                eventClick: function(event) {
                    if (confirm("Você quer excluir este evento?")) {
                        calendar.fullCalendar('removeEvents', event._id);
                    }
                }
            });

            // Inicializa o jQuery UI Datepicker
            $("#eventDate").datepicker({
                dateFormat: "yy-mm-dd", // Formato da data
                onSelect: function(dateText) {
                    $(this).val(dateText); // Atualiza o campo de entrada com a data selecionada
                }
            });

            // Adiciona um evento
            $('#addEventButton').on('click', function() {
                var eventTitle = prompt("Título do evento:");
                var eventDate = $("#eventDate").val(); // Pega a data do campo de entrada
                if (eventTitle && eventDate) {
                    calendar.fullCalendar('renderEvent', {
                        title: eventTitle,
                        start: eventDate,
                        allDay: true
                    }, true); // Stick the event
                    $("#eventDate").val(''); // Limpa o campo após adicionar o evento
                } else {
                    alert("Por favor, preencha o título e selecione uma data.");
                }
            });
        });
     </script>
     <script src="{{ asset('assets/plugins/fullcalendar/js/fullcalendar-custom-script.js') }}"></script>

  </body>
</html>
