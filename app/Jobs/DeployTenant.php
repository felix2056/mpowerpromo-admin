<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DeployTenant implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $host;
    private $user_id;
    private $password;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($host, $user_id, $password)
    {
        $this->host = $host;
        $this->user_id = $user_id;
        $this->password = $password;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // deploy the store website on main domain
        try {
            $response = Http::withHeaders([
                'X-Tenant-UUID' => $this->host,
                'X-Tenant-DB-Connection' => 'system',
            ])->post(config('app.main_url') . '/deploy-tenant-store', [
                'user_id' => $this->user_id,
                'password' => $this->password,
            ]);

            Log::info('HTTP Request Successful', [
                'response' => $response,
            ]);
        } catch (\Throwable $th) {
            Log::error('HTTP Request Failed', [
                'error' => $th->getMessage(),
            ]);
        } catch (\Exception $e) {
            Log::error('HTTP Request Failed Exception', [
                'error' => $e->getMessage(),
                'trace' => $e->getTrace(),
            ]);
        }

        Log::info('HTTP Request attempted', [
            'host' => $this->host,
            'user_id' => $this->user_id,
            'password' => $this->password,
        ]);
    }
}
