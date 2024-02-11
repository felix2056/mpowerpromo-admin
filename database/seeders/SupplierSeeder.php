<?php

namespace Database\Seeders;

use App\Models\Supplier;
use App\Models\SupplierContact;
use App\Models\SupplierContactPhone;
use App\Models\SupplierDistributor;
use App\Models\SupplierEndpoint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = [
            [
                "slug" => "64e9064920fa3831ccbdf0d4",
                "distributors" => [],
                "name" => "&Collar",
                "asiNumber" => 45639,
                "psCode" => "COLLAR",
                "website" => "https://andcollar.com/",
                "contacts" => [
                    [
                        "slug" => "64e9064920fa3831ccbdf0d5",
                        "email" => "cody@andcollar.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "64e9064920fa3831ccbdf0d6",
                            "source" => "(775) 299-9526",
                            "countryCode" => "1",
                            "phoneNumber" => "775-299-9526",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "isActive" => true,
                "unCaseName" => "&collar",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "dist_supplier" => [
                    "slug" => "65514d6cb6fc73650fab46c9",
                    "isListPrice" => true,
                    "rebate" => 0,
                    // "distributor_id" => "64f8bf17bedafd072667a712",
                    "SupplierContacts" => [],
                    "SupplierAddresses" => [],
                    "SupplierNotes" => [],
                    "created_at" => "2023-11-12T22:10:52.074Z",
                    "updated_at" => "2023-11-13T00:07:09.016Z",
                    
                    "digitalProofNotRequired" => false
                ],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075ba008861b49e07b0d60",
                "isActive" => true,
                "name" => "1-Step Ahead",
                "asiNumber" => 75121,
                "psCode" => "1STEPAHEAD",
                "website" => "www.1-stepahead.com",
                "contacts" => [
                    [
                        "slug" => "5f075ba008861b49e07b0d61",
                        "email" => "hm1stepahead@aol.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "63497335cfd6181993bb298e",
                            "source" => "(714) 594-3457",
                            "countryCode" => "1",
                            "phoneNumber" => "714-594-3457",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "unCaseName" => "1-step ahead",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "dist_supplier" => [
                    "slug" => "65514dcab6fc73650fab491a",
                    "isListPrice" => true,
                    "rebate" => 0,
                    // "distributor_id" => "64f8bf17bedafd072667a712",
                    "SupplierContacts" => [],
                    "SupplierAddresses" => [],
                    "SupplierNotes" => [],
                    "created_at" => "2023-11-12T22:12:26.487Z",
                    "updated_at" => "2023-11-12T22:12:26.487Z",
                ],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "64e9064920fa3831ccbdf077",
                "distributors" => [],
                "name" => "10Titan",
                "asiNumber" => 90870,
                "psCode" => "10TITAN",
                "contacts" => [],
                "isActive" => true,
                "unCaseName" => "10titan",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "64e9064920fa3831ccbdf07f",
                "distributors" => [],
                "name" => "117 Global LLC",
                "asiNumber" => 51818,
                "psCode" => "117GLOBALLLC",
                "website" => "https://www.117global.com/",
                "contacts" => [],
                "isActive" => true,
                "unCaseName" => "117 global llc",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "dist_supplier" => [
                    "slug" => "6551511162de134f8e51d11e",
                    "isListPrice" => true,
                    "rebate" => 0,
                    // "distributor_id" => "64f8bf17bedafd072667a712",
                    "SupplierContacts" => [],
                    "SupplierAddresses" => [],
                    "SupplierNotes" => [],
                    "created_at" => "2023-11-12T22:26:25.199Z",
                    "updated_at" => "2023-11-12T22:26:25.199Z"
                ],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075b9f08861b49e07b09cb",
                "isActive" => true,
                "name" => "123 Emblems",
                "asiNumber" => 75086,
                "psCode" => "123EMBLEMS",
                "website" => "http://www.123emblems.com",
                "contacts" => [
                    [
                        "slug" => "5f075b9f08861b49e07b09cd",
                        "email" => "sales@123emblems.com",
                        "contactType" => "Art",
                        "name" => "Artwork",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "6349730acfd6181993bb2438",
                            "source" => "1(858) 538-8460",
                            "countryCode" => "1",
                            "phoneNumber" => "858-538-8460",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ],
                    [
                        "slug" => "5f075b9f08861b49e07b09cc",
                        "email" => "mhartman@123emblems.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "6349730acfd6181993bb243a",
                            "source" => "1(858) 538-8460",
                            "countryCode" => "1",
                            "phoneNumber" => "858-538-8460",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "distributors" => [],
                "productRating" => 3,
                "psId" => "1",
                "psPassword" => "2",
                "unCaseName" => "123 emblems",
                "hasCred" => true,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "dist_supplier" => [
                    "slug" => "6551516659f09f7ad5dc7971",
                    "isListPrice" => true,
                    "rebate" => 0,
                    // "distributor_id" => "64f8bf17bedafd072667a712",
                    "SupplierContacts" => [],
                    "SupplierAddresses" => [],
                    "SupplierNotes" => [],
                    "created_at" => "2023-11-12T22:27:50.410Z",
                    "updated_at" => "2023-11-12T22:27:50.410Z"
                ],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075b9d08861b49e07b06e8",
                "isActive" => true,
                "name" => "123-Awards.com",
                "asiNumber" => 51815,
                "psCode" => "123AWARDSCOM",
                "contacts" => [
                    [
                        "slug" => "5f075b9d08861b49e07b06e9",
                        "email" => "carmen@123-awards.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "634972e8cfd6181993bb1ffb",
                            "source" => "(650) 898-0181",
                            "countryCode" => "1",
                            "phoneNumber" => "650-898-0181",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "unCaseName" => "123-awards.com",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "dist_supplier" => [
                    "slug" => "6551510759f09f7ad5dc770e",
                    "isListPrice" => true,
                    "rebate" => 0,
                    // "distributor_id" => "64f8bf17bedafd072667a712",
                    "SupplierContacts" => [],
                    "SupplierAddresses" => [],
                    "SupplierNotes" => [],
                    "created_at" => "2023-11-12T22:26:15.831Z",
                    "updated_at" => "2023-11-12T22:26:15.831Z"
                ],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075b9f08861b49e07b09b7",
                "isActive" => true,
                "name" => "135Promos.com",
                "asiNumber" => 73967,
                "psCode" => "135PROMOSCOM",
                "website" => "http://www.135promos.com",
                "contacts" => [
                    [
                        "slug" => "5f075b9f08861b49e07b09b8",
                        "email" => "service@135promos.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "63497303cfd6181993bb2342",
                            "source" => "(877) 799-2368",
                            "countryCode" => "1",
                            "phoneNumber" => "877-799-2368",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "psCodeRemote" => "135promos",
                "status" => 1,
                "unCaseName" => "135promos.com",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [
                    [
                        "slug" => "65b813bdff8feb4704fd0d03",
                        "supplierId" => "5f075b9f08861b49e07b09b7",
                        "serviceName" => "Inventory",
                        "version" => "1.2.1",
                        "liveURL" => "https://psapi.135promos.com/Inventory/InventoryService.svc",
                        "createdBy" => "5f075b9f08861b49e07b09b7",
                        
                        "created_at" => "2024-01-29T21:08:13.600Z",
                        "updated_at" => "2024-01-29T21:08:13.600Z",
                        "code" => "INV"
                    ]
                ],
                "productsWithErrors" => [],
                "dist_supplier" => [
                    "slug" => "6551699bb6fc73650fabc856",
                    "isListPrice" => true,
                    "rebate" => 0,
                    // "distributor_id" => "64f8bf17bedafd072667a712",
                    "SupplierContacts" => [],
                    "SupplierAddresses" => [],
                    "SupplierNotes" => [],
                    "created_at" => "2023-11-13T00:11:07.731Z",
                    "updated_at" => "2023-11-13T00:11:07.731Z"
                ],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075ba008861b49e07b0ebe",
                "isActive" => true,
                "name" => "1800 Baskets A Division of 1800 Flowers",
                "asiNumber" => 51811,
                "psCode" => "1800BASKETSADIVISIONOF1800FLOWERS",
                "website" => "https://www.1800baskets.com/",
                "contacts" => [
                    [
                        "slug" => "5f075ba008861b49e07b0ebf",
                        "email" => "denisec@1800baskets.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "63497346cfd6181993bb2ba7",
                            "source" => "(773) 428-5757",
                            "countryCode" => "1",
                            "phoneNumber" => "773-428-5757",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "unCaseName" => "1800 baskets a division of 1800 flowers",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075ba208861b49e07b1472",
                "isActive" => true,
                "name" => "20 Degrees Below",
                "asiNumber" => 92366,
                "psCode" => "20DEGREESBELOW",
                "website" => "http://www.20belowasi.com",
                "contacts" => [
                    [
                        "slug" => "5f075ba208861b49e07b1473",
                        "email" => "brett@20below.net",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "63497389cfd6181993bb33d4",
                            "source" => "(215) 918-2030",
                            "countryCode" => "1",
                            "phoneNumber" => "215-918-2030",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "unCaseName" => "20 degrees below",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "dist_supplier" => [
                    "slug" => "6551694a59f09f7ad5dd16c6",
                    "isListPrice" => true,
                    "rebate" => 0,
                    // "distributor_id" => "64f8bf17bedafd072667a712",
                    "SupplierContacts" => [],
                    "SupplierAddresses" => [],
                    "SupplierNotes" => [],
                    "created_at" => "2023-11-13T00:09:46.484Z",
                    "updated_at" => "2023-11-13T00:09:46.484Z"
                ],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "64e9064920fa3831ccbdf0a0",
                "distributors" => [],
                "name" => "2020 Embroidery",
                "asiNumber" => 92351,
                "psCode" => "2020EMBROIDERY",
                "website" => "www.2020embroidery.com",
                "contacts" => [],
                "isActive" => true,
                "unCaseName" => "2020 embroidery",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "64e9064920fa3831ccbdf0a8",
                "distributors" => [],
                "name" => "24 Hrs Printing LLC",
                "asiNumber" => 92435,
                "psCode" => "24HRSPRINTINGLLC",
                "website" => "24hrswristband.com",
                "contacts" => [
                    [
                        "slug" => "64e9064920fa3831ccbdf0a9",
                        "email" => "sales@24hrsprinting.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "64e9064920fa3831ccbdf0aa",
                            "source" => "(315) 944-2453",
                            "countryCode" => "1",
                            "phoneNumber" => "315-944-2453",
                            "extension" => null
                        ]
                    ]
                ],
                "isActive" => true,
                "unCaseName" => "24 hrs printing llc",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "64e9064920fa3831ccbdf09c",
                "distributors" => [],
                "name" => "24 Promo Products Inc",
                "asiNumber" => 92381,
                "psCode" => "24PROMOPRODUCTSINC",
                "contacts" => [
                    [
                        "slug" => "64e9064920fa3831ccbdf09d",
                        "email" => "info@24promoproducts.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "64e9064920fa3831ccbdf09e",
                            "source" => "(619) 398-6211",
                            "countryCode" => "1",
                            "phoneNumber" => "619-398-6211",
                            "extension" => null
                        ]
                    ]
                ],
                "isActive" => true,
                "unCaseName" => "24 promo products inc",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075ba008861b49e07b0e44",
                "isActive" => true,
                "name" => "2400 Promotions",
                "asiNumber" => 92390,
                "psCode" => "2400PROMOTIONS",
                "website" => "2400promotions.com",
                "contacts" => [
                    [
                        "slug" => "5f075ba008861b49e07b0e46",
                        "email" => "info@2400promotions.com",
                        "contactType" => "Art",
                        "name" => "Artwork",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "63497347cfd6181993bb2bcb",
                            "source" => "(888) 257-7216",
                            "countryCode" => "1",
                            "phoneNumber" => "888-257-7216",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ],
                    [
                        "slug" => "5f075ba008861b49e07b0e45",
                        "email" => "info@2400promotions.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "63497347cfd6181993bb2bcd",
                            "source" => "(888) 257-7216",
                            "countryCode" => "1",
                            "phoneNumber" => "888-257-7216",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "unCaseName" => "2400 promotions",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075b9f08861b49e07b0c76",
                "isActive" => true,
                "name" => "2Print Studio",
                "asiNumber" => 89967,
                "psCode" => "2PRINTSTUDIO",
                "website" => "www.2printstudio.com",
                "contacts" => [
                    [
                        "slug" => "5f075b9f08861b49e07b0c77",
                        "email" => "sales@2printstudio.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "63497332cfd6181993bb292a",
                            "source" => "(917) 609-6465",
                            "countryCode" => "1",
                            "phoneNumber" => "917-609-6465",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "unCaseName" => "2print studio",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075ba208861b49e07b12c9",
                "isActive" => true,
                "name" => "3 In 1 Golf Towel By Mark Your Greens",
                "asiNumber" => 91237,
                "psCode" => "3IN1GOLFTOWELBYMARKYOURGREENS",
                "website" => "www.markyourgreens.com",
                "contacts" => [
                    [
                        "slug" => "5f075ba208861b49e07b12ca",
                        "email" => "markyourgreens@aol.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "63497372cfd6181993bb30cb",
                            "source" => "(212) 300-6447",
                            "countryCode" => "1",
                            "phoneNumber" => "212-300-6447",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "unCaseName" => "3 in 1 golf towel by mark your greens",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075b9f08861b49e07b0a6d",
                "isActive" => true,
                "name" => "305 Advertising Co.",
                "asiNumber" => 30053,
                "psCode" => "305ADVERTISINGCO",
                "website" => "www.305ad.com",
                "contacts" => [
                    [
                        "slug" => "5f075b9f08861b49e07b0a6e",
                        "email" => "info@305ad.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "63497311cfd6181993bb2500",
                            "source" => "(305) 591-8525",
                            "countryCode" => "1",
                            "phoneNumber" => "305-591-8525",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "unCaseName" => "305 advertising co.",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075ba008861b49e07b0ddb",
                "isActive" => true,
                "name" => "350Swag",
                "asiNumber" => 91152,
                "psCode" => "350SWAG",
                "website" => "http://www.350swag.com",
                "contacts" => [
                    [
                        "slug" => "5f075ba008861b49e07b0ddc",
                        "email" => "caleb@350swag.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "63497341cfd6181993bb2ad9",
                            "source" => "(801) 885-4396",
                            "countryCode" => "1",
                            "phoneNumber" => "801-885-4396",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "unCaseName" => "350swag",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075ba208861b49e07b139f",
                "isActive" => true,
                "name" => "365Wholesale.com",
                "asiNumber" => 91284,
                "psCode" => "365WHOLESALECOM",
                "website" => "http://www.365wholesale.com",
                "contacts" => [
                    [
                        "slug" => "5f075ba208861b49e07b13a1",
                        "email" => "art@365wholesale.com",
                        "contactType" => "Art",
                        "name" => "Artwork",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "6349737ecfd6181993bb326b",
                            "source" => "(877) 834-4389",
                            "countryCode" => "1",
                            "phoneNumber" => "877-834-4389",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ],
                    [
                        "slug" => "5f075ba208861b49e07b13a0",
                        "email" => "sales@365wholesale.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "6349737ecfd6181993bb326d",
                            "source" => "(877) 834-4389",
                            "countryCode" => "1",
                            "phoneNumber" => "877-834-4389",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "unCaseName" => "365wholesale.com",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075b9f08861b49e07b0bed",
                "isActive" => true,
                "name" => "3D PROMOPLASTIC INC (DBA) Asco Global LLC",
                "asiNumber" => 91199,
                "psCode" => "3DPROMOPLASTICINCDBAASCOGLOBALLLC",
                "website" => "www.3dpromoplastic.com",
                "contacts" => [
                    [
                        "slug" => "5f075b9f08861b49e07b0bee",
                        "email" => "sibel.toy@getpromos.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "63497329cfd6181993bb2817",
                            "source" => "(888) 605-4066",
                            "countryCode" => "1",
                            "phoneNumber" => "888-605-4066",
                            "extension" => null
                        ],
                        "isGlobal" => true
                    ]
                ],
                "unCaseName" => "3d promoplastic inc (dba) asco global llc",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "64e9064920fa3831ccbdf0c9",
                "distributors" => [],
                "name" => "3DCrystal.com",
                "asiNumber" => 91275,
                "psCode" => "3DCRYSTALCOM",
                "website" => "www.3dcrystal.com",
                "contacts" => [
                    [
                        "slug" => "64e9064920fa3831ccbdf0ca",
                        "email" => "3d@3dcrystal.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "64e9064920fa3831ccbdf0cb",
                            "source" => "(800) 990-4010",
                            "countryCode" => "1",
                            "phoneNumber" => "800-990-4010",
                            "extension" => null
                        ]
                    ]
                ],
                "isActive" => true,
                "unCaseName" => "3dcrystal.com",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "64e9064920fa3831ccbdf07a",
                "distributors" => [],
                "name" => "3L Promo Inc",
                "asiNumber" => 90516,
                "psCode" => "3LPROMOINC",
                "contacts" => [
                    [
                        "slug" => "64e9064920fa3831ccbdf07b",
                        "email" => "gloria.lee@3lpromo.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "64e9064920fa3831ccbdf07c",
                            "source" => "(626) 271-1923",
                            "countryCode" => "1",
                            "phoneNumber" => "626-271-1923",
                            "extension" => null
                        ]
                    ]
                ],
                "isActive" => true,
                "unCaseName" => "3l promo inc",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5e602d3c216f0e7a24cc8fab",
                "isActive" => true,
                "name" => "3M Promotional Markets",
                "asiNumber" => 91240,
                "website" => "https://promote.3m.com",
                "psCode" => "3M",
                "psId" => "9999105",
                "psPassword" => "957coff#crush",
                "contacts" => [],
                "psCodeRemote" => "3M",
                "distributors" => [],
                "status" => 3,
                "unCaseName" => "3m promotional markets",
                "hasCred" => true,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [
                    [
                        "slug" => "5ef0dce238c9560968c6d267",
                        "serviceName" => "Order Status",
                        "version" => "1.0.0",
                        "liveURL" => "https://www.connectpmd.com/OrderStatus/CustomerOrderStatusService.svc",
                        "testURL" => "https://www.connectpmd.com/OrderStatus/CustomerOrderStatusService.svc",
                        "createdBy" => "5c7edfad208c866f6f7c7fcf",
                        "created_at" => "2020-06-22T16:31:30.628Z",
                        "updated_at" => "2020-06-22T16:31:30.628Z",
                        "code" => "ODRSTAT"
                    ],
                    [
                        "slug" => "5ef0dcee38c9560968c6d270",
                        "serviceName" => "Inventory",
                        "version" => "1.2.1",
                        "liveURL" => "https://connectpmd.com/Inventory/CustomerInventoryService.svc",
                        "testURL" => "https://connectpmd.com/Inventory/CustomerInventoryService.svc",
                        "createdBy" => "5c7edfad208c866f6f7c7fcf",
                        "created_at" => "2020-06-22T16:31:42.604Z",
                        "updated_at" => "2020-06-22T16:31:42.604Z",
                        "code" => "INV"
                    ],
                    [
                        "slug" => "5ef0dcfd38c9560968c6d288",
                        "serviceName" => "Media Content",
                        "version" => "1.1.0",
                        "liveURL" => "https://connectpmd.com/MediaContent/MediaContentService.svc",
                        "testURL" => "https://connectpmd.com/MediaContent/MediaContentService.svc",
                        "createdBy" => "5c7edfad208c866f6f7c7fcf",
                        "created_at" => "2020-06-22T16:31:57.325Z",
                        "updated_at" => "2020-06-22T16:31:57.325Z",
                        "code" => "MED"
                    ],
                    [
                        "slug" => "5ef0dd0938c9560968c6d2a6",
                        "serviceName" => "Order Shipment Notification",
                        "version" => "1.0.0",
                        "liveURL" => "https://www.connectpmd.com/OrderShipment/CustomerOrderShipmentNotificationService.svc",
                        "testURL" => "https://www.connectpmd.com/OrderShipment/CustomerOrderShipmentNotificationService.svc",
                        "createdBy" => "5c7edfad208c866f6f7c7fcf",
                        "created_at" => "2020-06-22T16:32:09.854Z",
                        "updated_at" => "2020-06-22T16:32:09.854Z",
                        "code" => "OSN"
                    ],
                    [
                        "slug" => "5ef0dd1738c9560968c6d2ce",
                        "serviceName" => "Product Data",
                        "version" => "1.0.0",
                        "liveURL" => "",
                        "testURL" => "https://connectpmd.com/ProductData/ProductDataService.svc",
                        "createdBy" => "5c7edfad208c866f6f7c7fcf",
                        "created_at" => "2020-06-22T16:32:23.233Z",
                        "updated_at" => "2022-12-30T20:04:50.985Z",
                        "code" => "Product"
                    ],
                    [
                        "slug" => "5ef0dd2338c9560968c6d2de",
                        "serviceName" => "Product Pricing and Configuration",
                        "version" => "1.0.0",
                        "liveURL" => "",
                        "testURL" => "https://connectpmd.com/PricingAndConfiguration/PricingAndConfigurationService.svc",
                        "createdBy" => "5c7edfad208c866f6f7c7fcf",
                        "created_at" => "2020-06-22T16:32:35.820Z",
                        "updated_at" => "2022-12-30T20:04:50.985Z",
                        "code" => "PPC"
                    ]
                ],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "5f075ba108861b49e07b10b4",
                "isActive" => true,
                "name" => "4 Sizzle Inc",
                "asiNumber" => 55213,
                "psCode" => "4SIZZLEINC",
                "website" => "http://www.4sizzle.com",
                "contacts" => [],
                "unCaseName" => "4 sizzle inc",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "64e9064920fa3831ccbdf068",
                "distributors" => [],
                "name" => "4BRANDMAX INC",
                "asiNumber" => 53517,
                "psCode" => "4BRANDMAXINC",
                "contacts" => [
                    [
                        "slug" => "64e9064920fa3831ccbdf069",
                        "email" => "4brandmaxinc@gmail.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "64e9064920fa3831ccbdf06a",
                            "source" => "(320) 616-1118",
                            "countryCode" => "1",
                            "phoneNumber" => "320-616-1118",
                            "extension" => null
                        ]
                    ]
                ],
                "isActive" => true,
                "unCaseName" => "4brandmax inc",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ],
            [
                "slug" => "64e9064920fa3831ccbdf098",
                "distributors" => [],
                "name" => "4Clover Promotion INC",
                "asiNumber" => 53499,
                "psCode" => "4CLOVERPROMOTIONINC",
                "website" => "www.4cloverpromotion.com",
                "contacts" => [
                    [
                        "slug" => "64e9064920fa3831ccbdf099",
                        "email" => "info@4cloverpromotion.com",
                        "contactType" => "Orders",
                        "name" => "Orders",
                        "isActive" => true,
                        "phone" => [
                            "slug" => "64e9064920fa3831ccbdf09a",
                            "source" => "(408) 890-2018",
                            "countryCode" => "1",
                            "phoneNumber" => "408-890-2018",
                            "extension" => null
                        ]
                    ]
                ],
                "isActive" => true,
                "unCaseName" => "4clover promotion inc",
                "hasCred" => false,
                "activeProducts" => 0,
                "productsSellableCount" => 0,
                "percent" => 0,
                "endpoints" => [],
                "productsWithErrors" => [],
                "readyToGrab" => false,
                "token" => "",
                "proofs" => 0
            ]
        ];

        foreach ($suppliers as $supplier) {
            $saveSupplier = new Supplier();
            $saveSupplier->slug = $supplier['slug'];
            $saveSupplier->isActive = $supplier['isActive'];
            $saveSupplier->name = $supplier['name'];
            $saveSupplier->asiNumber = $supplier['asiNumber'];
            $saveSupplier->psCode = $supplier['psCode'];
            $saveSupplier->website = $supplier['website'] ?? null;
            $saveSupplier->unCaseName = $supplier['unCaseName'];
            $saveSupplier->hasCred = $supplier['hasCred'];
            $saveSupplier->activeProducts = $supplier['activeProducts'];
            $saveSupplier->productsSellableCount = $supplier['productsSellableCount'];
            $saveSupplier->percent = $supplier['percent'];
            $saveSupplier->readyToGrab = $supplier['readyToGrab'];
            $saveSupplier->token = $supplier['token'];
            $saveSupplier->proofs = $supplier['proofs'];
            $saveSupplier->save();

            foreach ($supplier['contacts'] as $contact) {
                $saveContact = new SupplierContact();
                $saveContact->supplier_id = $saveSupplier->id;
                $saveContact->slug = $contact['slug'];
                $saveContact->email = $contact['email'];
                $saveContact->contactType = $contact['contactType'];
                $saveContact->name = $contact['name'];
                $saveContact->isActive = $contact['isActive'];
                $saveContact->isGlobal = $contact['isGlobal'] ?? false;
                $saveContact->save();

                $savePhone = new SupplierContactPhone();
                $savePhone->supplier_contact_id = $saveContact->id;
                $savePhone->slug = $contact['phone']['slug'];
                $savePhone->source = $contact['phone']['source'];
                $savePhone->countryCode = $contact['phone']['countryCode'];
                $savePhone->phoneNumber = $contact['phone']['phoneNumber'];
                $savePhone->extension = $contact['phone']['extension'];
                $savePhone->save();
            }

            foreach ($supplier['endpoints'] as $endpoint) {
                $saveEndpoint = new SupplierEndpoint();
                $saveEndpoint->supplier_id = $saveSupplier->id;
                $saveEndpoint->slug = $endpoint['slug'];
                $saveEndpoint->serviceName = $endpoint['serviceName'];
                $saveEndpoint->version = $endpoint['version'];
                $saveEndpoint->liveURL = $endpoint['liveURL'];
                $saveEndpoint->testURL = $endpoint['testURL'] ?? null;
                // $saveEndpoint->createdBy = $endpoint['createdBy'];
                $saveEndpoint->code = $endpoint['code'];
                $saveEndpoint->save();
            }

            if (isset($supplier['dist_supplier'])) {
                $saveDistSupplier = new SupplierDistributor();
                $saveDistSupplier->supplier_id = $saveSupplier->id;
                $saveDistSupplier->slug = $supplier['dist_supplier']['slug'];
                $saveDistSupplier->isListPrice = $supplier['dist_supplier']['isListPrice'];
                $saveDistSupplier->rebate = $supplier['dist_supplier']['rebate'];
                // $saveDistSupplier->distributor_id = $supplier['dist_supplier']['distributor_id'];
                $saveDistSupplier->save();
            }
        }
    }
}