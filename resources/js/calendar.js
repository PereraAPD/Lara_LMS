document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        // Configure your calendar options here
        plugins: ['dayGrid'],
        initialView: 'dayGridMonth',
        events: [
            // Add your events here
            {
                title: 'Event 1',
                start: '2024-06-01',
                end: '2024-06-03'
            },
            {
                title: 'Event 2',
                start: '2024-06-05'
            }
        ]
    });

    calendar.render();
});
