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
                'username' => 'MexAn10',
                'email' => 'antonio.060896@gmail.com',
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ],
            [
                'username' => 'Antoniox',
                'email' => 'ricardo.mexan@gmail.com',
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ],
            [
                'username' => 'antonioxowo',
                'email' => 'ricardo.mexan@hotmail.com',
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ]
        );
        $users = $this->table('users');
        $users->insert($data)->save();
    }
}
