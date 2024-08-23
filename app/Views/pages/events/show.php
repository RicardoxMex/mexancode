<div class="max-w-6xl mx-auto bg-white sm:rounded-xl shadow-md overflow-hidden">
    <!-- Encabezado -->
    <div class="bg-secondary p-6 text-white">
        <h1 class="text-2xl sm:text-3xl font-bold">
            Evento: <?= $event->title ?>
        </h1>
        <p class="mt-2 text-gray-200">
            Organizado por: <?= $event->organizer->fullName() ?>
        </p>
    </div>

    <!-- Información del evento -->
    <div class="p-6 sm:p-8 flex flex-col justify-center sm:justify-around sm:flex-row sm:items-center">
        <div class="">
            <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">Detalles del Evento</h2>
            <div class="mt-4">
                <p class="text-lg text-gray-600">Descripción:</p>
                <p class="text-xl text-gray-900 font-medium mt-1">
                    <?= $event->description ?>
                </p>
            </div>
            <div class="mt-6">
                <p class="text-lg text-gray-600">Ubicación:</p>
                <p class="text-xl text-gray-900 font-medium mt-1">
                    <?= $event->location ?>
                </p>
            </div>
            <div class="mt-6">
                <p class="text-lg text-gray-600">Fecha del Evento:</p>
                <p class="text-xl text-gray-900 font-medium mt-1">
                    <?= date('d-m-Y', strtotime($event->event_date)); ?>
                </p>
            </div>
        </div>

        <!-- Información del organizador -->
        <div class=" border-gray-200 border-t pt-8 mt-8 sm:border-none sm:pt-0 sm:mt-0">
            <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">
                Detalles del Organizador
            </h2>
            <div class="mt-4">
                <p class="text-lg text-gray-600">Nombre:</p>
                <p class="text-xl text-gray-900 font-medium mt-1">
                    <?= $event->organizer->fullName() ?>
                </p>
            </div>
            <div class="mt-6">
                <p class="text-lg text-gray-600">Usuario:</p>
                <p class="text-xl text-gray-900 font-medium mt-1">
                    <?= $event->organizer->username ?>
                </p>
            </div>
            <div class="mt-6">
                <p class="text-lg text-gray-600">Correo:</p>
                <p class="text-xl text-gray-900 font-medium mt-1">
                <?=$event->organizer->email?>
                </p>
            </div>
        </div>
    </div>

    <!-- Tabla de Colaboradores -->
    <div class="p-6 sm:p-8">
        <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-4">Colaboradores</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-2 px-4 text-left text-gray-600">Nombre</th>
                        <th class="py-2 px-4 text-left text-gray-600">Rol</th>
                        <th class="py-2 px-4 text-left text-gray-600">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($event->guests as $guest) { ?>
                        <tr class="border-t border-gray-200">
                        <td class="py-2 px-4 text-gray-800"><?= $guest->user->username?></td>
                        <td class="py-2 px-4 text-gray-800">Desarrollador</td>
                        <td class="py-2 px-4 text-gray-800">correo1@example.com</td>
                    </tr>
                    <?php } ?>    
                    <!-- Filas de ejemplo -->
                    <tr class="border-t border-gray-200">
                        <td class="py-2 px-4 text-gray-800">Colaborador 1</td>
                        <td class="py-2 px-4 text-gray-800">Desarrollador</td>
                        <td class="py-2 px-4 text-gray-800">correo1@example.com</td>
                    </tr>
                    <tr class="border-t border-gray-200">
                        <td class="py-2 px-4 text-gray-800">Colaborador 2</td>
                        <td class="py-2 px-4 text-gray-800">Diseñador</td>
                        <td class="py-2 px-4 text-gray-800">correo2@example.com</td>
                    </tr>
                    <!-- Más filas aquí -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tabla de Invitados -->
    <div class="p-6 sm:p-8">
        <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-4">Invitados</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-2 px-4 text-left text-gray-600">Nombre</th>
                        <th class="py-2 px-4 text-left text-gray-600">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Filas de ejemplo -->
                    <tr class="border-t border-gray-200">
                        <td class="py-2 px-4 text-gray-800">Invitado 1</td>
                        <td class="py-2 px-4 text-gray-800">invitado1@example.com</td>
                    </tr>
                    <tr class="border-t border-gray-200">
                        <td class="py-2 px-4 text-gray-800">Invitado 2</td>
                        <td class="py-2 px-4 text-gray-800">invitado2@example.com</td>
                    </tr>
                    <!-- Más filas aquí -->
                </tbody>
            </table>
        </div>
    </div>
</div>