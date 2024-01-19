<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class DeployTenant extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:deploy {--host=} {--user_id=} {--password=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deploy a tenant to the main domain. Use --host=, --user=, and --password= to specify the tenant information';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $host = $this->option('host');
        $user_id = $this->option('user_id');
        $password = $this->option('password');

        // deploy the store website on main domain
        try {
            $response = Http::withHeaders([
                'X-Tenant-UUID' => $host,
                'X-Tenant-DB-Connection' => 'system',
            ])->post(config('app.main_url') . '/deploy-tenant-store', [
                'user_id' => $user_id,
                'password' => $password,
            ]);

            $this->info('Successfully deployed tenant.');
            $this->info($response);
        } catch (\Exception $e) {
            $this->error('Error deploying tenant.');
            $this->error($e->getMessage());
            return Command::FAILURE;
        } catch (\Throwable $th) {
            $this->error('Error deploying tenant.');
            $this->error($th->getMessage());
            return Command::FAILURE;
        }
    }
}
