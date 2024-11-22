Neo.load(function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth', // default view
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        allDaySlot: false,
        events: $core.search,
        locale: document.documentElement.lang,
        datesSet: function(info) {
            const prev = document.querySelector(".fc-prev-button"),
                next = document.querySelector(".fc-next-button");
            prev.innerHTML = `<svg class="block pointer-events-none w-8 h-8 rtl:rotate-180" fill="currentColor" viewBox="0 -960 960 960"><path d="M528-251 331-449q-7-6-10.5-14t-3.5-18q0-9 3.5-17.5T331-513l198-199q13-12 32-12t33 12q13 13 12.5 33T593-646L428-481l166 166q13 13 13 32t-13 32q-14 13-33.5 13T528-251Z"></path></svg>`;
            next.innerHTML = `<svg class="block pointer-events-none w-8 h-8 rtl:rotate-180" fill="currentColor" viewBox="0 -960 960 960"><path d="M344-251q-14-15-14-33.5t14-31.5l164-165-165-166q-14-12-13.5-32t14.5-33q13-14 31.5-13.5T407-712l199 199q6 6 10 14.5t4 17.5q0 10-4 18t-10 14L408-251q-13 13-32 12.5T344-251Z"></path></svg>`;
        }
    });

    calendar.render();
});