<?php

namespace App\Console\Commands;

use App\Jobs\SendEmialTOUSerWithQueue2;
use App\Models\Customer;
use Illuminate\Console\Command;

class SendEmailWithQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SendEmailWithQueue:Send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email With Queses Send The Post To all User';

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
     * @return int
     */
    public function handle()
    {
        $Customers  = Customer::get();

        foreach($Customers as $Customer){
            dispatch(new SendEmialTOUSerWithQueue2($Customer));
        }
    }
}
