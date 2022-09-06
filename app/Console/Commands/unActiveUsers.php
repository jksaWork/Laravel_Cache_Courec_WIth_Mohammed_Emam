<?php

namespace App\Console\Commands;

use App\Jobs\SendMailToUser;
use App\Models\Customer;
use Illuminate\Console\Command;

class unActiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unActiveUsers:unActiveUser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'cehcl am acive user and actiated it ';

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
        $customers = Customer::where('active', 0)->get();
       foreach($customers as $customer){
           info("i'm in user info");
           $expired_user = $customer->active;
           dispatch(new SendMailToUser($customer));

       }
    }
}
