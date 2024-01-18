<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Hyn\Tenancy\Models\Website;
use Hyn\Tenancy\Contracts\Website as WebContract;

class ShowTenantDBPassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:db-password {--database=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show the database password for a tenant. Use --database= to specify the tenant';

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
        $database=$this->option('database');

        $website = Website::where('uuid', $database)->first();
        $password = $this->generate($website);
        $this->info('password :'.$password);

        return Command::SUCCESS;

        // php artisan tenant:db-password --database=teststore.mpowerpromo.localhost
    }

    private function generate(WebContract $website) : string
    {
        $key = config('tenancy.key');

        // Backward compatibility
        if ($key === null) {
            return md5(sprintf(
                '%s.%d',
                $this->app['config']->get('app.key'),
                $website->id
            ));
        }

        return md5(sprintf(
            '%d.%s.%s.%s',
            $website->id,
            $website->uuid,
            $website->created_at,
            $key
        ));
    }
}
