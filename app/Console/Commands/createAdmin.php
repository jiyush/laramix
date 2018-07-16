<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class createAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create A admin User..!';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->ask('Enter Name');
        $email = $this->ask('Enter Email');
        $password = $this->ask('Enter Password');
        $pass = Hash::make($password);
        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $pass,
            'role' => 'admin'
        ];
        $user = Admin::create($data);
        if($user){
            echo "Admin User Created Successfully...!";
        }else {
            echo 'Admin User Not Created..!';
        }
    }
}
