import Alpine from "alpinejs";

export function eventTable() {
    const params = new URLSearchParams(window.location.search);
    return {
        events: [],
        links: [],
        isLoad: false,
        page: new URLSearchParams(window.location.search).get('page') ?? 1,
        init() {
            this.fetchEvents();
        },
        loadPaginete(page) {
            this.fetchEvents(page)
        },
        async fetchEvents(page = '') {
            this.isLoad = true;
            const res = await fetch(`http://192.168.3.2/api/events${page}`)
            const data = await res.json()
            this.events = data.data.map(event => ({
                id: event.id,
                title: event.title,
                organizer: event.organizer.username,
                location: event.location,
                confirmedGuests: event.guests_count,
                dateEvent: this.formatDate(event.event_date)
            }));

            this.links = data.links
            Alpine.store('eventsData').setEvents(this.events, this.links)
            this.isLoad = false;
        },
        formatDate(dateString) {
            const date = new Date(dateString);
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const year = date.getFullYear();
            return `${day}/${month}/${year}`;
        }
    }
}