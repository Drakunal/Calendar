<?php
//index.php




?>
<!DOCTYPE html>
<html>
 <head>
  <title>Calendar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <style>
 
  body {
    /* margin: 40px 10px; */
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }
 
  #calendar {
    /* max-width: 900px; */
    margin: 0 auto;
  }

  .fc-title{
      color:red;
      font-size: 12px;
  }
 
</style>
  <script>
   
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:false,
    header:{
     left:'prev,next today',
     center:'title',
     right:''
    //  right:'month,agendaWeek,agendaDay'
    },
    events: 'load.php',
    

    selectable:false,
    displayEventTime: false,
    selectHelper:false,
    weekends: true,
    // select: function(start, end, allDay)
    // {
    //  var title = prompt("Enter Event Title");
    //  if(title)
    //  {
    //   var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
    //   var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
    //   $.ajax({
    //    url:"insert.php",
    //    type:"POST",
    //    data:{title:title, start:start, end:end},
    //    success:function()
    //    {
    //     calendar.fullCalendar('refetchEvents');
    //     alert("Added Successfully");
    //    }
    //   })
    //  }
    // },
    editable:false,
    // eventResize:function(event)
    // {
    //  var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
    //  var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
    //  var title = event.title;
    //  var id = event.id;
    //  $.ajax({
    //   url:"update.php",
    //   type:"POST",
    //   data:{title:title, start:start, end:end, id:id},
    //   success:function(){
    //    calendar.fullCalendar('refetchEvents');
    //    alert('Event Update');
    //   }
    //  })
    // },

    // eventDrop:function(event)
    // {
    //  var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
    //  var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
    //  var title = event.title;
    //  var id = event.id;
    //  $.ajax({
    //   url:"update.php",
    //   type:"POST",
    //   data:{title:title, start:start, end:end, id:id},
    //   success:function()
    //   {
    //    calendar.fullCalendar('refetchEvents');
    //    alert("Event Updated");
    //   }
    //  });
    // },

    eventClick:function(event)
    {
     if(confirm("Are you sure you want to remove it?"))
     {
      var id = event.id;
      $.ajax({
       url:"show.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Event Removed");
       }
      })
     }
    },

   });
  });
   
  </script>
 </head>
 <body>
  <br />
  <h2 align="center"><a href="#">Calendar</a></h2>
  <br />
  <div class="container">
   <div id="calendar"></div>
  </div>
 </body>
</html>
