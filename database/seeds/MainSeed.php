<?php


use Phinx\Seed\AbstractSeed;

class MainSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */

    public function run(): void
    {
        $data = [];
        $password = "Antonio1mex";

        array_push(
            $data,
            [
                'first_name' => 'Antonio',
                'last_name' => 'Mex',
                'username' => 'MexAn10',
                'email' => 'antonio.060896@gmail.com',
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ],
            [
                'first_name' => 'Ricardo',
                'last_name' => 'Mex',
                'username' => 'Antoniox',
                'email' => 'ricardo.mexan@gmail.com',
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ],
            [
                'first_name' => 'Ricardo Antonio',
                'last_name' => 'Mex Tun',
                'username' => 'antonioxowo',
                'email' => 'ricardo.mexan@hotmail.com',
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ]
        );
        $users = $this->table('users');
        $users->insert($data)->save();

        $roles_data = [];
        array_push(
            $roles_data,
            [
                'name' => 'admin',
                'description' => 'Usuario con acceso total a la plataforma. Puede gestionar usuarios, eventos, configuraciones globales y todo el contenido.',
            ],
            [
                'name' => 'moderator',
                'description' => 'Usuario con capacidad para moderar eventos y comentarios a nivel global. Puede intervenir en cualquier evento para gestionar discusiones o problemas.',
            ],
            [
                'name' => 'collaborator',
                'description' => 'Colaborador con acceso limitado a la gestión de eventos, pero que puede tener visibilidad en diferentes áreas de la plataforma.',
            ],
            [
                'name' => 'organizer',
                'description' => 'Usuario que puede crear y gestionar sus propios eventos. Tiene control total sobre los eventos que ha creado, incluyendo la gestión de asistentes y proveedores',
            ],
            [
                'name' => 'organizer_assistant',
                'description' => 'Asistente del organizador con permisos limitados para ayudar en la gestión de los eventos del organizador.',
            ],
            [
                'name' => 'vendor',
                'description' => 'Proveedor de servicios para eventos. Puede interactuar con eventos en los que ha sido contratado.',
            ],
            [
                'name' => 'vip_guest',
                'description' => 'Invitado VIP con acceso a eventos exclusivos, pero sin permisos de administración más allá de los eventos en los que participa.',
            ],
            [
                'name' => 'guest',
                'description' => 'Usuario invitado a eventos. Puede asistir a los eventos a los que ha sido invitado, pero no tiene capacidad de gestión o creación de eventos.',
            ],
        );

        $roles = $this->table('roles');
        $roles->insert($roles_data)->save();
    }
}
