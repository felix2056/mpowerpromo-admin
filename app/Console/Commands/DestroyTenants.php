<?php

namespace App\Console\Commands;

use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;
use Illuminate\Console\Command;

class DestroyTenants extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenants:destroy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Destroy all tenants';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->destroyTenants();
        $this->info('All tenants destroyed successfully.');
    }

    private function destroyTenants()
    {
        $this->info('Destroying all tenants...');
        $websites = Website::all();

        foreach ($websites as $website) {
            $this->info('Destroying tenant: ' . $website->uuid);
            // Delete databases, user accounts, or any other related information
            // app('db')->purge($website->uuid);
            // app('db')->connection($website->uuid)->getPdo()->exec("DROP DATABASE IF EXISTS " . $website->uuid);


            // Delete the hostname
            $hostname = Hostname::where('website_id', $website->id)->first();
            if ($hostname) {
                $this->info('Deleting hostname: ' . $hostname->fqdn);
                $hostname->forceDelete();
            }

            // Delete the website (this will also delete the database if configured)
            $website->forceDelete();
            $this->info('Deleted tenant: ' . $website->uuid);
        }
    }
}
