<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierEndpointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $endpoints = [
            [
                "serviceName" => "Order Status",
                "version" => "1.0.0",
                "liveURL" => "https://www2.arielpremium.com/WS/order-status/api-server",
            ],
            [
                "serviceName" => "Product Data",
                "version" => "2.0.0",
                "liveURL" => "https://www2.arielpremium.com/WS/product-data/V2.0.0/api-server",
            ],
            [
                "serviceName" => "Product Pricing and Configuration",
                "version" => "1.0.0",
                "liveURL" => "https://www2.arielpremium.com/WS/product-pricing-and-configuration/api-server",
            ],
            [
                "serviceName" => "Media Content",
                "version" => "1.1.0",
                "liveURL" => "https://www2.arielpremium.com/WS/media-content/api-server",
                "supplierId" => "5d4066b7f0486341d8348ed3",
            ],
            [
                "serviceName" => "Inventory",
                "version" => "2.0.0",
                "liveURL" => "https://www2.arielpremium.com/WS/inventory/V2.0.0/api-server",
                "supplierId" => "5d4066b7f0486341d8348ed3",
                "testURL" => "https://www2.arielpremium.com/WS/inventory/V2.0.0/api-server"
            ],
            [
                "serviceName" => "Order Shipment Notification",
                "version" => "1.0.0",
                "liveURL" => "https://www2.arielpremium.com/WS/shipment-notification/api-server",
                "supplierId" => "5d4066b7f0486341d8348ed3",
            ],
            [
                "supplierId" => "5d4066b7f0486341d8348ed3",
                "serviceName" => "Invoice",
                "version" => "1.0.0",
                "liveURL" => "https://www2.arielpremium.com/WS/invoice/api-server",
            ]
        ];
    }
}
