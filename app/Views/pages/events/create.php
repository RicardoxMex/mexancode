<div x-data="EventTable" x-init=""
    class="min-h-dvh sm:min-h-[750px]  bg-white rounded-lg overflow-x-scroll custom-scrollbar w-full p-2 sm:p-4">
    <div class="">
        <div>
            <h4 class="text-xl capitalize"><?= $title ?></h4>
            <div class="w-full sm:w-[75%] m-auto mt-6">
                <form class="">
                    <div class="flex flex-col my-4">
                        <label for="organizer_id">Organizador</label>
                        <input type="text" name="organizer_id" id="organizer_id"
                            class="flex-1 py-1 border-gray-300 mt-1 rounded focus:border-gray-300 focus:outline-none focus:ring-0"
                            placeholder="Organizador">
                    </div>
                    <div class="flex flex-col my-4">
                        <label for="title">Nombre del Evento</label>
                        <input type="text" name="title" id="title"
                            class="flex-1 py-1 border-gray-300 mt-1 rounded focus:border-gray-300 focus:outline-none focus:ring-0"
                            placeholder="Nombre del Evento">
                    </div>
                    <div class="flex flex-col my-4">
                        <label for="description">Descripción</label>
                        <input type="email" name="description" id="description"
                            class="flex-1 py-1 border-gray-300 mt-1 rounded focus:outline-none focus:ring-0 focus:border-gray-300"
                            placeholder="Descripción del evento">
                    </div>
                    <div class="flex flex-col my-4">
                        <label for="location">Lugar</label>
                        <input type="text" name="location" id="location"
                            class="flex-1 py-1 border-gray-300 mt-1 rounded focus:outline-none focus:ring-0 focus:border-gray-300"
                            placeholder="Lugar del evento">
                    </div>
                    <div class="flex flex-col my-4">
                        <label for="event_date">Fecha</label>
                        <input type="text" name="event_date" id="event_date"
                            class="flex-1 py-1 border-gray-300 mt-1 rounded focus:outline-none focus:ring-0 focus:border-gray-300"
                            placeholder="Fecha del evento">
                    </div>

                    <div class="flex items-center my-4">
                        <input type="checkbox" name="terms" id="terms"
                            class="text-primary border border-primary focus:ring-0">
                        <label class="ml-2" for="terms">
                            Public
                        </label>
                    </div>

                    <div class="flex gap-2 mt-6">
                        <button
                            class="bg-secondary bg-opacity-20 hover:bg-opacity-40 rounded-lg px-6 py-1.5 text-secondary hover:shadow-xl transition duration-150">Cancel</button>

                        <button
                            class="bg-primary hover:bg-primary-dark rounded-lg px-6 py-1.5 text-gray-100 hover:shadow-xl transition duration-150">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>