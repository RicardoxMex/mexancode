<!-- start::Advance Table Filters -->
<div x-data="{ filter: false }" class="bg-white rounded-lg px-8 py-6 overflow-x-scroll custom-scrollbar p-4">
    <h4 class="text-xl font-semibold">Advance Table Filters</h4>
    <div class="mt-8 mb-3 flex flex-col md:flex-row items-start md:items-center md:justify-between">
        <div class="flex items-center justify-center space-x-4">
            <form class="relative flex items-center">
                <input type="search" name="input_search_without_btn" id="input_search_without_btn"
                    class="flex-1 py-0.5 pl-10 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300"
                    placeholder="Search...">
                <span class="absolute left-2 bg-transparent flex items-center justify-center" @click="show = !show">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </span>
            </form>
            <button @click="filter = !filter"
                class="text-primary hover:text-primary-dark font-semibold hover:underline">Filters</button>
        </div>
        <div class="mt-4 md:mt-0">
            <form>
                <label>Order By:</label>
                <select class="text-sm py-0.5 ml-1">
                    <option></option>
                    <option>Name</option>
                    <option>Name DESC</option>
                    <option>Price</option>
                    <option>Price DESC</option>
                </select>
            </form>
        </div>
    </div>
    <div x-show="filter" x-collapse.duration.300ms>
        <div class="mb-2 py-4 bg-gray-200 px-8 rounded-lg">
            <h5 class="underline">Filter Results</h5>
            <form class="py-2">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 my-4">
                    <input type="text" name="order_id"
                        class="flex-1 py-1 border-gray-300 rounded focus:border-gray-300 focus:outline-none focus:ring-0"
                        placeholder="Order ID">
                    <input type="text" name="customer_name"
                        class="flex-1 py-1 border-gray-300 rounded focus:border-gray-300 focus:outline-none focus:ring-0"
                        placeholder="Customer Name">
                    <div class="w-full">
                        <label class="mr-2">Status:</label>
                        <select
                            class="flex-1 py-1 border-gray-300 rounded focus:border-gray-300 focus:outline-none focus:ring-0">
                            <option></option>
                            <option>Pending</option>
                            <option>Shipped</option>
                            <option>Paid</option>
                            <option>Canceled</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 my-4">
                    <input type="number" name="min_price"
                        class="flex-1 py-1 border-gray-300 rounded focus:border-gray-300 focus:outline-none focus:ring-0"
                        placeholder="Min Price">
                    <input type="number" name="max_price"
                        class="flex-1 py-1 border-gray-300 rounded focus:border-gray-300 focus:outline-none focus:ring-0"
                        placeholder="Max Price">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 my-4">
                    <div>
                        <label class="mr-2">From Date:</label>
                        <input type="date" name="from_date"
                            class="flex-1 py-1 border-gray-300 mt-1 rounded focus:border-gray-300 focus:outline-none focus:ring-0">
                    </div>
                    <div>
                        <label class="mr-2">To Date:</label>
                        <input type="date" name="to_date"
                            class="flex-1 py-1 border-gray-300 mt-1 rounded focus:border-gray-300 focus:outline-none focus:ring-0">
                    </div>
                </div>

                <button
                    class="bg-primary hover:bg-primary-dark rounded-lg px-8 py-1 text-gray-100 hover:shadow-xl transition duration-150 mt-8 text-sm">Filter</button>
            </form>
        </div>
    </div>
    <div x-data="eventTable()">
        <table class="w-full whitespace-nowrap mb-8">
            <thead class="bg-secondary text-gray-100 font-bold">
                <tr>
                    <td class="py-2 pl-2">ID</td>
                    <td class="py-2 pl-2" style="min-width: 150px;">Título</td>
                    <td class="py-2 pl-2">Organizador</td>
                    <td class="py-2 pl-2">Ubicación</td>
                    <td class="py-2 pl-2">Invitados Confirmados</td>
                    <td class="py-2 pl-2"></td>
                </tr>
            </thead>
            <tbody class="text-sm">
                <template x-for="(event, index) in events" :key="event.id">
                    <tr :class="index % 2 === 0 ? 'bg-gray-100' : 'bg-gray-200'">
                        <td class="py-3 pl-2" x-text="event.id"></td>
                        <td class="py-3 pl-2 capitalize truncate" style="max-width: 150px; text-wrap:wrap;" x-text="event.title"></td>
                        <td class="py-3 pl-2" x-text="event.organizer"></td>
                        <td class="py-3 pl-2" x-text="event.location"></td>
                        <td class="py-3 pl-2" x-text="event.confirmedGuests"></td>
                        <td class="py-3 pl-2 flex items-center space-x-2">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-primary hover:text-primary-dark" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-yellow-500 hover:text-yellow-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 hover:text-red-600"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>



    <script>
        function eventTable() {
            return {
                events: [
                    { id: 1, title: 'Evento 1', organizer: 'Juan Pérez', location: 'Sala A', confirmedGuests: 25 },
                ],
                init() {
                    fetch('http://192.168.3.2/api/events')
                        .then(res => res.json())
                        .then(data => {
                            this.events = data.data.map(event => ({
                                id: event.id,
                                title: event.title,
                                organizer: event.organizer_id,
                                location: event.location,
                                confirm: 10
                            }))
                        })

                    console.log()
                }
            }
        }
    </script>

</div>
<!-- end::Advance Table Filters -->