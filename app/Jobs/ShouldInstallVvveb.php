<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;

class ShouldInstallVvveb implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $store_id;
    private $user_email;
    private $user_password;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($store_id, $user_email, $user_password)
    {
        $this->store_id = $store_id;
        $this->user_email = $user_email;
        $this->user_password = $user_password;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Artisan::call('vvveb:install', [
            'store_id' => $this->store_id,
            'user_email' => $this->user_email,
            'user_password' => $this->user_password,
        ]);
    }
}
