<div x-data="EventTable" x-init=""
    class="min-h-[750px] grid grid-cols-1  bg-white rounded-lg overflow-x-scroll custom-scrollbar w-full p-2 sm:p-4">
    <div class="w-full">
        <div class="bg-white rounded-lg overflow-x-scroll custom-scrollbar w-full">
            <div class="w-full flex justify-center items-center gap-5">
                <h2 class="text-2xl sm:text-4xl font-bold text-center flex-1"><?= $title ?></h2>
                <a
                    href="<?= url('events.create') ?>"
                    class="bg-primary hover:bg-primary-dark rounded-sm px-6 py-1.5 text-gray-100 hover:shadow-xl transition duration-150">
                    agregar
                </a>
            </div>

            <div
                class="mt-2 mb-3 flex flex-row justify-between items-center md:flex-row  md:items-center md:justify-between w-full">
                <div class="flex items-center justify-center space-x-4 ">
                    <form @submit.prevent="sentFilter()" class="relative flex items-center">
                        <input x-ref="search" type="search" x-model="filters.event_name" name="event_name"
                            id="event_name"
                            class="flex-1 py-0.5 pl-10 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300"
                            placeholder="Search...">
                        <span class="absolute left-2 bg-transparent flex items-center justify-center"
                            @click="show = !show">
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
                <div class="mt-4 md:mt-0 gap-1 hidden sm:flex">
                    <button aria-label="grid on" x-on:click="changeTypeContent()" class="bg-gray-500/35 w-[50px] h-[50px] p-2"
                        x-bind:class="!content_table ? 'bg-gray-600' :'' ">
                        <svg x-bind:class="!content_table ? 'text-white' :'' " xmlns="http://www.w3.org/2000/svg"
                            width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-grid">
                            <rect x="2" y="2" width="7" height="7"></rect>
                            <rect x="12" y="2" width="7" height="7"></rect>
                            <rect x="12" y="12" width="7" height="7"></rect>
                            <rect x="2" y="12" width="7" height="7"></rect>
                        </svg>
                    </button>
                    <button aria-label="table on" x-on:click="changeTypeContent()"
                        class="bg-gray-500/35 w-[50px] h-[50px] p-2 flex items-center justify-center"
                        x-bind:class="content_table ? 'bg-gray-600' :'' ">
                        <svg x-bind:class="content_table ? 'text-white' :'' " xmlns="http://www.w3.org/2000/svg"
                            class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="18" rx="2" ry="2"></rect>
                            <line x1="2" y1="9" x2="22" y2="9"></line>
                            <line x1="2" y1="15" x2="22" y2="15"></line>
                            <line x1="10" y1="3" x2="10" y2="21"></line>
                        </svg>
                    </button>


                </div>
            </div>
            <div x-cloak x-show="filter" x-collapse.duration.300ms>
                <div class="mb-2 py-4 bg-gray-200 px-8 rounded-lg">
                    <h5 class="underline">Filter Results</h5>
                    <form @submit.prevent="sentFilter()" class="py-2">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 my-4">
                            <input x-model="filters.event_id" type="number" name="event_id" min="0"
                                class="flex-1 py-1 border-gray-300 rounded focus:border-gray-300 focus:outline-none focus:ring-0"
                                placeholder="ID del Evento">
                            <input x-model="filters.event_name" x-text="filters.organizer_name" type="search"
                                name="event_name"
                                class="flex-1 py-1 border-gray-300 rounded focus:border-gray-300 focus:outline-none focus:ring-0"
                                placeholder="Nombre del Evento">
                            <div class="w-full">
                                <label class="mr-2">Status:</label>
                                <select x-model="filters.event_status"
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
                            <div>
                                <label x-model="filters.event_date" class="mr-2">Fecha del Evento</label>
                                <input type="date" name="event_date"
                                    class="flex-1 py-1 border-gray-300 mt-1 rounded focus:border-gray-300 focus:outline-none focus:ring-0">
                            </div>
                            <input x-model="filters.organizer_name" type="search" name="organizer_name"
                                class="flex-1 py-1 border-gray-300 rounded focus:border-gray-300 focus:outline-none focus:ring-0"
                                placeholder="Organizador">
                        </div>

                        <button
                            class="bg-primary hover:bg-primary-dark rounded-lg px-8 py-1 text-gray-100 hover:shadow-xl transition duration-150 mt-8 text-sm">Filter</button>
                    </form>
                </div>
            </div>
            <div>
                <div x-show="events.length == 0"
                    class="w-full p-6 flex flex-row justify-center justify-items-center bg-gray-200 rounded-lg" x-cloak>
                    <p>Sin Resultados</p>
                </div>
                <div x-show="false" class="animate-pulse">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="">
                            <tr>
                                <th class="px-6 py-5 bg-secondary rounded h-6 w-full"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <!-- Repite este bloque para simular varias filas -->
                            <tr>
                                <td class="px-6 py-5 bg-gray-100 rounded h-6"></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-5 bg-gray-200 rounded h-6"></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-5 bg-gray-100 rounded h-6"></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-5 bg-gray-200 rounded h-6"></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-5 bg-gray-100 rounded h-6"></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-5 bg-gray-200 rounded h-6"></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-5 bg-gray-100 rounded h-6"></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-5 bg-gray-200 rounded h-6"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <table x-show="content_table && events.length > 0" class="w-full whitespace-nowrap mb-8">
                    <thead class="bg-secondary text-gray-100 font-bold text-center">
                        <tr>
                            <td class="py-2 pl-2">ID</td>
                            <td class="py-2 pl-2" style="min-width: 150px;">Título</td>
                            <td class="py-2 pl-2 ">Organizador</td>
                            <td class="py-2 pl-2 hidden md:table-cell">Ubicación</td>
                            <td class="py-2 pl-2 hidden sm:table-cell">Invitados</td>
                            <td class="py-2 pl-2 hidden sm:table-cell">fecha del evento</td>
                            <td class="py-2 pl-2 w-[400px]"></td>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <template x-data x-for="(event, index) in events" :key="event.id">
                            <tr :class="index % 2 === 0 ? 'bg-gray-100' : 'bg-gray-200'">
                                <td class="py-3 pl-2" x-text="event.id"></td>
                                <td class="py-3 pl-2 capitalize truncate" style="max-width: 150px; text-wrap:wrap;"
                                    x-text="event.title"></td>
                                <td class="py-3 pl-2" x-text="event.organizer"></td>
                                <td class="py-3 pl-2 hidden md:table-cell" x-text="event.location"></td>
                                <td class="py-3 pl-2 text-center hidden sm:table-cell" x-text="event.confirmedGuests">
                                </td>
                                <td class="py-3 pl-2 text-center hidden sm:table-cell" x-text="event.dateEvent"></td>
                                <td class="py-3 pl-2 flex items-center space-x-2 ">
                                    <a :href="'<?= url('events.show')  ?>' + event.id">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4 text-primary hover:text-primary-dark" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                    <a :href="'<?= url('events.show') ?>' + event.id">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4 text-yellow-500 hover:text-yellow-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4 text-red-500 hover:text-red-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
                <div x-show="!content_table && events.length > 0"
                    class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-5 justify-items-center sm:gap-6">
                    <template x-data x-for="(event, index) in events" :key="event.id">
                        <div class=" bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden w-full ">
                            <!-- Imagen del evento -->
                            <img class="w-full h-36 object-cover hidden sm:block" src="/img/no-photo.webp"
                                :alt="event.title">

                            <!-- Contenido del evento -->
                            <div class="p-2 flex-1 h-[140px]">
                                <p class=" font-bold text-gray-900" x-text="event.title">Nombre del Evento</p>

                                <p class="text-xs text-gray-800 mb-2 flex items-center"
                                    x-text="'Fecha del Evento: '+event.dateEvent">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="inline-block w-5 h-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7v10M8 12h8m-4-5h4a2 2 0 012 2v10a2 2 0 01-2 2h-8a2 2 0 01-2-2V9a2 2 0 012-2z" />
                                    </svg>

                                </p>

                                <p class="text-xs text-gray-800 mb-2" x-text="'por: '+event.organizer">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="inline-block w-5 h-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16.88 3.549l-6.847 6.848m4.123-6.546a3.348 3.348 0 011.098 4.908 3.348 3.348 0 01-4.908 1.098L7.888 10.998M9 12a5.977 5.977 0 100-9" />
                                    </svg>
                                    John Doe
                                </p>

                                <div class="flex justify-between items-center p-1">
                                    <a :href="'<?= url('events.show') ?>' + event.id"
                                        class="px-4 py-2 text-sm bg-blue-600 text-white rounded-md shadow hover:bg-blue-900 focus:outline-none">
                                        Ver Detalles
                                    </a>

                                    <p class="bg-green-700 text-gray-100 px-2 py-1 text-xs rounded">
                                        Activo
                                    </p>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <div x-show="events.length > 0" class="flex items-center justify-center mt-4">
                    <template x-for="link in links" :key="link.label">
                        <button x-on:click="loadPaginete(link.url)"
                            class="text-gray-800 text-lg hover:bg-gray-200 px-3 py-0.5 border border-gray-300"
                            x-bind:class="link.active ? 'bg-gray-200' : ''" data-turbolinks>
                            <span x-text="link.label">Previous</span>
                        </button>
                    </template>
                    <template>
                        <a :href="!link.url ? '': '<?= url('admin.events') ?>' + link.url.replace('/','')"
                            class="text-gray-400 text-lg hover:bg-gray-200 px-3 py-0.5 border border-gray-300"
                            x-bind:class="link.active ? 'bg-gray-200' : ''" data-turbolinks>
                            <span x-text="link.label">Previous</span>
                        </a>
                    </template>
                </div>
            </div>

        </div>

    </div>
</div>