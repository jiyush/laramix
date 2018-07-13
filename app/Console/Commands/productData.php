<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Product;

class productData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:product {name} {desc} {quantity}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new product in Product Table';

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
        
        // $name = $this->argument('name');
        // $desc = $this->argument('desc');
        // $quantity = $this->argument('quantity');
        $data = [
            'name' => 'schedule',
            'desc' => 'schedule test',
            'quantity' => 3
        ];
        $product = Product::create($data);
        if($product){
            echo $product->name." Product Inserted add:product Custom Command...!";
        }else {
            echo error_log('Product Not Inserted');
        }
    }
}
