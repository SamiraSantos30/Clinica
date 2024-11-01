$(document).ready(function() {
    // Carregar eventos do banco de dados
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      editable: true,
      events: '/events', // URL para carregar eventos do banco de dados
  
      // Evento ao clicar em um evento existente
      eventClick: function(event) {
        $('#modalTitle').text('Editar Evento');
        $('#eventId').val(event.id);
        $('#eventTitle').val(event.title);
        $('#eventStart').val(moment(event.start).format('YYYY-MM-DD'));
        $('#eventEnd').val(moment(event.end).format('YYYY-MM-DD'));
        $('#eventModal').modal('show');
      },
  
      // Clique para adicionar novo evento
      dayClick: function(date) {
        $('#modalTitle').text('Criar Evento');
        $('#eventForm')[0].reset();
        $('#eventId').val('');
        $('#eventStart').val(date.format('YYYY-MM-DD'));
        $('#eventEnd').val(date.format('YYYY-MM-DD'));
        $('#eventModal').modal('show');
      }
    });
  
    // Salvar evento
    $('#saveEventBtn').click(function() {
      const id = $('#eventId').val();
      const title = $('#eventTitle').val();
      const start = $('#eventStart').val();
      const end = $('#eventEnd').val();
  
      if (title && start && end) {
        const eventData = { title, start, end };
  
        if (id) {
          // Editar evento existente
          $.ajax({
            url: `/events/${id}`,
            method: 'PUT',
            data: eventData,
            success: function() {
              $('#calendar').fullCalendar('refetchEvents'); // Recarregar eventos
              $('#eventModal').modal('hide');
            }
          });
        } else {
          // Criar novo evento
          $.post('/events', eventData, function() {
            $('#calendar').fullCalendar('refetchEvents'); // Recarregar eventos
            $('#eventModal').modal('hide');
          });
        }
      } else {
        alert('Por favor, preencha todos os campos.');
      }
    });
  
    // Excluir evento
    $('#deleteEventBtn').click(function() {
      const id = $('#eventId').val();
      if (id) {
        $.ajax({
          url: `/events/${id}`,
          method: 'DELETE',
          success: function() {
            $('#calendar').fullCalendar('refetchEvents'); // Recarregar eventos
            $('#eventModal').modal('hide');
          }
        });
      }
    });
  });
  