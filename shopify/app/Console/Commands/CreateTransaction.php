<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Item;

class CreateTransaction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        //
        Item::create(['name' => 'sample', 'price' => 55, 'seller_id' => 124]);
    }
}
