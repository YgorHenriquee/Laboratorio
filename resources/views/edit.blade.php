<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<script src='../dist/index.global.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events');
    new FullCalendar.Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      now: '2023-01-07',
      editable: true, // enable draggable events
      droppable: true, // this allows things to be dropped onto the calendar
      aspectRatio: 1.8,
      scrollTime: '00:00', // undo default 6am scrollTime
      headerToolbar: {
        left: 'today prev,next',
        center: 'title',
        right: 'resourceTimelineDay,resourceTimelineThreeDays,timeGridWeek,dayGridMonth'
      },
      initialView: 'resourceTimelineDay',
      views: {
        resourceTimelineThreeDays: {
          type: 'resourceTimeline',
          duration: { days: 3 },
          buttonText: '3 days'
        }
      },
      resourceAreaHeaderContent: 'Rooms',
      resources: [
        { id: 'a', title: 'Auditorium A' },
        { id: 'b', title: 'Auditorium B', eventColor: 'green' },
        { id: 'c', title: 'Auditorium C', eventColor: 'orange' },
        { id: 'd', title: 'Auditorium D', children: [
          { id: 'd1', title: 'Room D1' },
          { id: 'd2', title: 'Room D2' }
        ] },
        { id: 'e', title: 'Auditorium E' },
        { id: 'f', title: 'Auditorium F', eventColor: 'red' },
        { id: 'g', title: 'Auditorium G' },
        { id: 'h', title: 'Auditorium H' },
        { id: 'i', title: 'Auditorium I' },
        { id: 'j', title: 'Auditorium J' },
        { id: 'k', title: 'Auditorium K' },
        { id: 'l', title: 'Auditorium L' },
        { id: 'm', title: 'Auditorium M' },
        { id: 'n', title: 'Auditorium N' },
        { id: 'o', title: 'Auditorium O' },
        { id: 'p', title: 'Auditorium P' },
        { id: 'q', title: 'Auditorium Q' },
        { id: 'r', title: 'Auditorium R' },
        { id: 's', title: 'Auditorium S' },
        { id: 't', title: 'Auditorium T' },
        { id: 'u', title: 'Auditorium U' },
        { id: 'v', title: 'Auditorium V' },
        { id: 'w', title: 'Auditorium W' },
        { id: 'x', title: 'Auditorium X' },
        { id: 'y', title: 'Auditorium Y' },
        { id: 'z', title: 'Auditorium Z' }
      ],
      events: [
        { id: '1', resourceId: 'b', start: '2023-01-07T02:00:00', end: '2023-01-07T07:00:00', title: 'event 1' },
        { id: '2', resourceId: 'c', start: '2023-01-07T05:00:00', end: '2023-01-07T22:00:00', title: 'event 2' },
        { id: '3', resourceId: 'd', start: '2023-01-06', end: '2023-01-08', title: 'event 3' },
        { id: '4', resourceId: 'e', start: '2023-01-07T03:00:00', end: '2023-01-07T08:00:00', title: 'event 4' },
        { id: '5', resourceId: 'f', start: '2023-01-07T00:30:00', end: '2023-01-07T02:30:00', title: 'event 5' }
      ],
      drop: function(arg) {
        console.log('drop date: ' + arg.dateStr)

        if (arg.resource) {
          console.log('drop resource: ' + arg.resource.id)
        }

        // is the "remove after drop" checkbox checked?
        if (document.getElementById('drop-remove').checked) {
          // if so, remove the element from the "Draggable Events" list
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
        }
      },
      eventReceive: function(arg) { // called when a proper external event is dropped
        console.log('eventReceive', arg.event);
      },
      eventDrop: function(arg) { // called when an event (already on the calendar) is moved
        console.log('eventDrop', arg.event);
      }
    });
    calendar.render();

  });

</script>
<style>

  body {
    margin-top: 40px;
    font-size: 14px;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  }

  #wrap {
    width: 1100px;
    margin: 0 auto;
  }

  #external-events {
    float: left;
    width: 150px;
    padding: 0 10px;
    border: 1px solid #ccc;
    background: #eee;
    text-align: left;
  }

  #external-events h4 {
    font-size: 16px;
    margin-top: 0;
    padding-top: 1em;
  }

  #external-events .fc-event {
    margin: 10px 0;
    cursor: pointer;
  }

  #external-events p {
    margin: 1.5em 0;
    font-size: 11px;
    color: #666;
  }

  #external-events p input {
    margin: 0;
    vertical-align: middle;
  }

  #calendar {
    float: right;
    width: 1100px;
  }

</style>
</head>
<body>
  <div id='wrap'>

    <div id='external-events'>
      <h4>Draggable Events</h4>
      <div class='fc-event'>My Event 1</div>
      <div class='fc-event'>My Event 2</div>
      <div class='fc-event'>My Event 3</div>
      <div class='fc-event'>My Event 4</div>
      <div class='fc-event'>My Event 5</div>
      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remove after drop</label>
      </p>
    </div>

    <div id='calendar'></div>

    <div style='clear:both'></div>

  </div>
</body>
</html>
