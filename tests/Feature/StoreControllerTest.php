<?php

namespace Tests\Feature;

use App\Models\Store;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class StoreControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function test_can_create_a_store()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        Storage::fake('temp');

        $data = [
            'name' => $this->faker->company,
            // 'logo' => UploadedFile::fake()->image('logo.jpg'),
            'logo' => $this->faker->imageUrl(),
            'domain' => $this->faker->domainName,
            'subdomain' => $this->faker->userName,
            'country_code' => $this->faker->countryCode,
            'country_flag' => $this->faker->imageUrl(),
            'phone_number' => $this->faker->phoneNumber,
            'extension' => $this->faker->word,
            'redirectUrls' => [$this->faker->url],
        ];

        $response = $this->postJson(route('stores.store'), $data);

        $response->assertStatus(201)
            ->assertJsonStructure([
                'message',
                'store' => [
                    'id',
                    'name',
                    'logo',
                    'domain',
                    'subdomain',
                    'slug',
                    'country_code',
                    'country_flag',
                    'phone_number',
                    'extension',
                    'created_at',
                    'updated_at',
                    'redirectUrls',
                ],
            ]);

        $store = Store::find($response['store']['id']);

        $this->assertNotNull($store);
        $this->assertEquals($data['name'], $store->name);
        $this->assertEquals($data['domain'], $store->domain);
        $this->assertEquals($data['subdomain'], $store->subdomain);
        $this->assertEquals($data['country_code'], $store->country_code);
        $this->assertEquals($data['country_flag'], $store->country_flag);
        $this->assertEquals($data['phone_number'], $store->phone_number);
        $this->assertEquals($data['extension'], $store->extension);
        $this->assertCount(1, $store->redirectUrls);
    }

    // /** @test */
    // public function test_can_update_a_store()
    // {
    //     $store = Store::factory()->create();

    //     $data = [
    //         'name' => $this->faker->company,
    //         'url' => $this->faker->url,
    //         'country_code' => $this->faker->countryCode,
    //         'country_flag' => $this->faker->imageUrl(),
    //         'phone_number' => $this->faker->phoneNumber,
    //     ];

    //     $response = $this->putJson(route('stores.update', $store->id), $data);

    //     $response->assertStatus(200)
    //         ->assertJsonStructure([
    //             'message',
    //             'store' => [
    //                 'id',
    //                 'name',
    //                 'logo',
    //                 'domain',
    //                 'subdomain',
    //                 'slug',
    //                 'country_code',
    //                 'country_flag',
    //                 'phone_number',
    //                 'extension',
    //                 'created_at',
    //                 'updated_at',
    //                 'redirectUrls',
    //             ],
    //         ]);

    //     $store->refresh();

    //     $this->assertEquals($data['name'], $store->name);
    //     $this->assertEquals($data['url'], $store->domain);
    //     $this->assertEquals($data['country_code'], $store->country_code);
    //     $this->assertEquals($data['country_flag'], $store->country_flag);
    //     $this->assertEquals($data['phone_number'], $store->phone_number);
    // }

    // /** @test */
    // public function test_can_upload_a_store_logo()
    // {
    //     Storage::fake('temp');

    //     $store = Store::factory()->create();

    //     $data = [
    //         'logo' => UploadedFile::fake()->image('logo.jpg'),
    //     ];

    //     $response = $this->postJson(route('stores.upload', $store->id), $data);

    //     $response->assertStatus(200)
    //         ->assertJsonStructure([
    //             'message',
    //             'temporary_file' => [
    //                 'id',
    //                 'path',
    //                 'expires_at',
    //                 'created_at',
    //                 'updated_at',
    //             ],
    //         ]);

    //     $temporaryFile = $store->temporaryFiles()->first();

    //     $this->assertNotNull($temporaryFile);
    //     $this->assertStringContainsString('logos', $temporaryFile->path);
    // }

    // /** @test */
    // public function test_can_show_a_store()
    // {
    //     $store = Store::factory()->create();

    //     $response = $this->getJson(route('stores.show', $store->slug));

    //     $response->assertStatus(200)
    //         ->assertJsonStructure([
    //             'message',
    //             'store' => [
    //                 'id',
    //                 'name',
    //                 'logo',
    //                 'domain',
    //                 'subdomain',
    //                 'slug',
    //                 'country_code',
    //                 'country_flag',
    //                 'phone_number',
    //                 'extension',
    //                 'created_at',
    //                 'updated_at',
    //                 'redirectUrls',
    //             ],
    //         ]);
    // }

    // /** @test */
    // public function test_can_list_all_stores()
    // {
    //     $stores = Store::factory()->count(3)->create();

    //     $response = $this->getJson(route('stores.index'));

    //     $response->assertStatus(200)
    //         ->assertJsonStructure([
    //             'message',
    //             'stores' => [
    //                 '*' => [
    //                     'id',
    //                     'name',
    //                     'logo',
    //                     'domain',
    //                     'subdomain',
    //                     'slug',
    //                     'country_code',
    //                     'country_flag',
    //                     'phone_number',
    //                     'extension',
    //                     'created_at',
    //                     'updated_at',
    //                     'redirectUrls',
    //                 ],
    //             ],
    //         ]);

    //     $this->assertCount(3, $response['stores']);
    // }
}
