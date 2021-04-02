<html>
    <head>
        <title>My Evo Calendar</title>
        <!-- // evo-calendar.css, followed by [theme-name].css (optional) -->
        <link rel="stylesheet" type="text/css" href="css/evo-calendar.css"/>
        <link rel="stylesheet" type="text/css" href="css/evo-calendar.midnight-blue.css"/>
    </head>
    <body>

        <!-- // this is where your calendar goes.. :) -->
        <div id="calendar"></div>

        <!-- // evo-calendar.js, right after jQuery (required) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/evo-calendar.js"></script>

        <script>
        // initialize your calendar, once the page's DOM is ready
        $(document).ready(function() {
            $('#calendar').evoCalendar({
                'sidebarToggler': false
            })
        })
        </script>

        <!-- <script>
            myEvents = [
                { 
                    id: "required-id-1",
                    name: "New Year", 
                    date: "Wed Jan 01 2020 00:00:00 GMT-0800 (Pacific Standard Time)", 
                    type: "holiday", 
                    everyYear: true 
                },
                { 
                    id: "required-id-2",
                    name: "Valentine's Day", 
                    date: "Fri Feb 14 2020 00:00:00 GMT-0800 (Pacific Standard Time)", 
                    type: "holiday", 
                    everyYear: true,
                    color: "#222"
                },
                { 
                    id: "required-id-3",
                    name: "Custom Date", 
                    badge: "08/03 - 08/05",
                    date: ["August/03/2020", "August/05/2020"],
                    description: "Description here",
                    type: "event", 
                }
                ]

                $('#evoCalendar').evoCalendar({
  calendarEvents: myEvents
});
$("#evoCalendar").evoCalendar('addCalendarEvent', [
  {
   name: "NEW EVENT",
   date: "February/16/2020",
   type: "birthday",
   everyYear: true
  }
]);
        </script> -->
          <!-- <script>
   
            $(document).ready(function() {
                var calendar = $('#calendar').fullCalendar({
                editable:true,
                header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
                },
                events: 'load.php',
                selectable:true,
                selectHelper:true,
                select: function(start, end, allDay)
                {
                var title = prompt("Enter Event Title");
                if(title)
                {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                $.ajax({
                    url:"insert.php",
                    type:"POST",
                    data:{title:title, start:start, end:end},
                    success:function()
                    {
                    calendar.fullCalendar('refetchEvents');
                    alert("Added Successfully");
                    }
                })
                }
                },
                editable:true,
                eventResize:function(event)
                {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                var title = event.title;
                var id = event.id;
                $.ajax({
                url:"update.php",
                type:"POST",
                data:{title:title, start:start, end:end, id:id},
                success:function(){
                    calendar.fullCalendar('refetchEvents');
                    alert('Event Update');
                }
                })
                },
            
                eventDrop:function(event)
                {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                var title = event.title;
                var id = event.id;
                $.ajax({
                url:"update.php",
                type:"POST",
                data:{title:title, start:start, end:end, id:id},
                success:function()
                {
                    calendar.fullCalendar('refetchEvents');
                    alert("Event Updated");
                }
                });
                },
            
                eventClick:function(event)
                {
                if(confirm("Are you sure you want to remove it?"))
                {
                var id = event.id;
                $.ajax({
                    url:"delete.php",
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
    
   </script> -->

    </body>
</html>
