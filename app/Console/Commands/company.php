<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;

class company extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:company {name} {mobile="N/A"}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $company=\App\Company::create([
            'name'=>$this->argument('name'),
            'mobile'=>$this->argument('mobile')
        ]);
        return $this->info('a company has been added');
    }
}
