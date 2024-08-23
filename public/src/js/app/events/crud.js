import Alpine from "alpinejs";

export function eventTable() {
    const params = new URLSearchParams(window.location.search);
    return {
        events: [],
        links: [],
        filters: {
            event_id: 0,
            event_name: '',
            event_status: '',
            event_date: '',
            organizer_name: ''
        },
        isLoad: false,
        filter: false,
        page: new URLSearchParams(window.location.search).get('page') ?? 1,
        init() {
            this.fetchEvents();
            this.$watch('filters.event_name', ()=>{
                if(this.filters.event_name==''){
                    this.fetchEvents()
                }
            })
        },
        loadPaginete(page) {
            this.fetchEvents(page)
        },
        async fetchEvents(filter = '') {
            this.isLoad = true;
            const res = await fetch(`http://192.168.3.2/api/events${filter}`)
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
            this.isLoad = false;
        },
        formatDate(dateString) {
            const date = new Date(dateString);
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const year = date.getFullYear();
            return `${day}/${month}/${year}`;
        },
        sentFilter() {
            const filter_inputs = this.filter_inputs()

            this.fetchEvents(filter_inputs)


        },
        filter_inputs() {
            let final_filter = [];

            if (this.filters.event_id != '') {
                final_filter.push(`event_id=${this.filters.event_id}`);
            }

            if (this.filters.event_name != '') {
                final_filter.push(`event_name=${this.filters.event_name}`);
            }

            if (this.filters.event_status != '') {
                final_filter.push(`event_status=${this.filters.event_status}`);
            }

            if (this.filters.event_date != '') {
                final_filter.push(`event_date=${this.filters.event_date}`);
            }

            // Unir los filtros con '&' para formar la query string
            final_filter = final_filter.join('&');

            return `?${final_filter}`;
        }

    }
}