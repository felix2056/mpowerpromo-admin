<?php

namespace App\Console\Commands;

use App\Models\Store;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class VvvebInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vvveb:install {store_id} {user_email} {user_password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Vvveb builder stores directory';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Installing Vvveb builder...');
        $this->output->progressStart(100);

        $store = Store::find($this->argument('store_id'));
        if (!$store) {
            $this->error('Store not found');
            $this->output->progressFinish();
            return 0;
        }

        $user = $store->user;

        $this->info('Store found: ' . $store->name);
        $this->output->progressAdvance(20);

        $vvvebDirectory = env('VVVEB_DIR');
        $storeDir = env('STORES_DIR') . '/' . $store->host;

        $this->info('Copying ' . $vvvebDirectory . ' to ' . $storeDir);
        $this->output->progressAdvance(20);

        if (File::exists($storeDir)) {
            $this->error('Store directory already exists');
            $this->output->progressFinish();
            return 0;
        }
        
        // create store directory
        mkdir($storeDir, 0777, true);
        $this->output->progressAdvance(20);

        // copy vvveb directory to store directory
        File::copyDirectory($vvvebDirectory, $storeDir);
        $this->output->progressAdvance(20);

        if (!File::exists($storeDir)) {
            $this->error('Failed to create store directory');
            $this->output->progressFinish();
            return 0;
        }

        // run terminal command to install vvveb in store directory
        $command = 'cd ' . $storeDir . ' && php cli.php install host=127.0.0.1 user=' . env('DB_USERNAME') . ' password=' . env('DB_PASSWORD') . ' database=' . $store->host . ' admin[username]=' . $store->host . ' admin[first_name]=' . $store->user->first_name . ' admin[last_name]=' . $store->user->last_name . ' admin[email]=' . $this->argument('user_email') . ' admin[password]=' . $this->argument('user_password');
        $this->info('running command: ' . $command);
        $this->output->progressAdvance(10);
        $result = shell_exec($command);

        if (!$result) {
            $this->error('Failed to install Vvveb: ' . $result);
            $this->output->progressFinish();
            return 0;
        }

        // update .env file
        // $envFile = File::get($storeDir . '/.env');
        // $envFile = str_replace('APP_URL=http://localhost', 'APP_URL=http://' . $store->host, $envFile);
        // $envFile = str_replace('DB_DATABASE=laravel', 'DB_DATABASE=' . $store->host, $envFile);
        // $envFile = str_replace('DB_USERNAME=root', 'DB_USERNAME=' . $store->host, $envFile);
        // $envFile = str_replace('DB_PASSWORD=', 'DB_PASSWORD=', $envFile);
        // File::put($storeDir . '/.env', $envFile);
        // $this->output->progressAdvance(20);

        $this->output->progressAdvance(10);
        $store->install_status = 'installed';
        $store->save();

        // end progress bar
        $this->output->progressFinish();

        $this->info('Vvveb installed successfully');
    }
}
