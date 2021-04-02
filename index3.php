<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<!-- <link href='fullcalendar.min.css' rel='stylesheet' />
<link href='fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='lib/moment.min.js'></script>
<script src='lib/jquery.min.js'></script>
<script src='fullcalendar.min.js'></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
 
<script>
 
$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
 header: {
 left: 'prev,next today',
 center: 'title',
 right: ''
 },
 navLinks: true, // can click day/week names to navigate views
 editable: true,
 eventLimit: true,
        events: "load.php",
        displayEventTime: false,
        // eventRender: function (event, element, view) {
        //     if (event.allDay === 'true') {
        //         event.allDay = true;
        //     } else {
        //         event.allDay = false;
        //     }
        // }
 
    });
});
 
 
</script>
 
<style>
 .fc-title{
      color:white;
      font-size: 12px;
  }
  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }
 
  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }
 
</style>
</head>
<body>
 
  <div id='calendar'></div>
 
</body>
</html>