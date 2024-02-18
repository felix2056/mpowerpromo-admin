<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                "_id" => "5e1341ccb79cdc0001ea6cd4",
                "supplierCode" => "PL",
                "productId" => "MG380",
                "isCloseout" => false,
                "primaryMaterial" => "Stainless Steel",
                "productName" => "12 oz. Budget Stemless Wine Tumbler with Lid",
                "description" => "<ul><li>12 oz. (354 mL) double wall insulated stemless wine tumbler.</li><li>201 Stainless Steel exterior, Polypropylene Plastic lining, AS Plastic lid.&nbsp;</li><li>Designed for use with both hot and cold beverages.</li><li>Hand-wash only.</li><li>Do not microwave, do not place in freezer.</li></ul>",
                "minQuantity" => 50,
                "updatedAt" => "2023-07-26T03:16:43.529Z",
                "status" => "inactive",
                "slug" => "12-oz-budget-stemless-wine-tumbler-with-lid-mg380-pl",
                "imageDefault" => [
                    "_id" => "6187cd5ba4ab930b98cd9993",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG380/MG380White/_300_300_/37219203/id37219203c3626311ht_RAKBkRjthv4QjXhguvFkFj49mxK-KW-LBBc_BuYcwY__T-.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG380/MG380White//37219203/id37219203c3626311ht_RAKBkRjthv4QjXhguvFkFj49mxK-KW-LBBc_BuYcwY__T-.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5da73b855335815bd1d74486",
                    "5da73b905335815bd1d74492",
                    "5df800f29707b36771f74a20",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5da73b855335815bd1d74486"
                ],
                "facets" => [
                    [
                        "_id" => "5dfcfc7463af461688a79a53",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Stainless Steel",
                        "slug" => "stainless-steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e058e1fc2827bd29a903a",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Steel",
                        "slug" => "steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e05db1fc2827bd29a9049",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Insulated",
                        "slug" => "insulated",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "609b0cc3f111026beb7ac826",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Silver",
                        "slug" => "silver"
                    ],
                    [
                        "_id" => "609b0cd6f111026beb7ac848",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "White",
                        "slug" => "white"
                    ],
                    [
                        "_id" => "616863e5d8bd8f3f9c47f24f",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "12 oz",
                        "slug" => "12-oz"
                    ],
                    [
                        "_id" => "63b5cfbac3d4160e8b9a2afb",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Stemless",
                        "slug" => "stemless"
                    ]
                ],
                "categories" => [
                    "5ce2e3f95e61cc3b654d465e"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-20T08:33:33.296Z",
                "timeGrabSpent" => 148,
                "total_sales" => 99,
                "costMin" => 3.162,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 517,
                "decorationProducts" => [],
                "grabActions" => [],
                "discountCode" => "C",
                "inventoryStatusRate" => 10,
                "rank_error" => 5,
                "inventoryStatus" => "In Stock",
                "issues" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG380/MG380White//37219203/id37219203c3626311ht_RAKBkRjthv4QjXhguvFkFj49mxK-KW-LBBc_BuYcwY__T-.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG380/MG380White/_300_300_/37219203/id37219203c3626311ht_RAKBkRjthv4QjXhguvFkFj49mxK-KW-LBBc_BuYcwY__T-.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3f95e61cc3b654d465e",
                        "name" => "Wine Tumblers",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e1354c4b79cdc0001ea723a",
                "supplierCode" => "PL",
                "productId" => "MG850",
                "isCloseout" => false,
                "primaryMaterial" => "Acrylic",
                "productName" => "16 oz. Double Wall Cool Acrylic Tumbler",
                "description" => "<ul>\r\n<li>16 oz. (470 mL) BPA-free double wall Acrylic tumbler with matching color rigid straw included (9\"l).&nbsp;</li><li> Each straw includes Plastic stopper to keep in place. </li><li> Designed for use with cold and room-temperature beverages only. </li><li> Features screw-on lid.&nbsp;</li><li>Hand-wash only.<br></li><li> Not microwave safe. </li><li> Fits most auto cup holders. </li></ul><br>Note: FOB CA only available for Silk Screen imprint option.<br><br>Silk Screen standard, 1 color only; optional 4CP Transfer standard production time is approximately 7-10 days <b>(No rush available)</b>.&nbsp;",
                "minQuantity" => 50,
                "updatedAt" => "2023-10-12T12:54:54.311Z",
                "status" => "inactive",
                "slug" => "16-oz-double-wall-cool-acrylic-tumbler-mg850-pl",
                "imageDefault" => [
                    "_id" => "5e5d158800d2ef000186026f",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG850/MG850Clear/_300_300_id4196356c3626311ha735e562a2a2cb516a86.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG850/MG850Clear/id4196356c3626311ha735e562a2a2cb516a86.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127"
                ],
                "facets" => [
                    [
                        "_id" => "5e0e05b31fc2827bd29a9043",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Acrylic",
                        "slug" => "acrylic",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0970f111026beb7ac648",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Green",
                        "slug" => "green"
                    ],
                    [
                        "_id" => "609b0b15f111026beb7ac748",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Purple",
                        "slug" => "purple"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "61686e1dd51b964bf73f70a3",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "16 oz",
                        "slug" => "16-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3e55e61cc3b654d4657",
                    "5ce2e3e55e61cc3b654d4657"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-20T21:17:03.858Z",
                "timeGrabSpent" => 124,
                "total_sales" => 30,
                "costMin" => 2.568,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 529,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "inventoryStatusRate" => 10,
                "rank_error" => 4,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG850/MG850Clear/id4196356c3626311ha735e562a2a2cb516a86.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG850/MG850Clear/_300_300_id4196356c3626311ha735e562a2a2cb516a86.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e55e61cc3b654d4657",
                        "name" => "Tumblers & Travel Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e13464db79cdc0001ea6dfe",
                "supplierCode" => "PL",
                "productId" => "MG407",
                "isCloseout" => false,
                "primaryMaterial" => "Polypropylene (PP)",
                "productName" => "12 oz. Vacuum Insulated Coffee Mug with Handle",
                "description" => "<ul>\r\n<li>Matte finish powder-coated 12 oz. (354 mL) double wall vacuum insulated coffee mug.</li><li>Features 304 SS interior, 201 SS exterior and clear AS Plastic lid.</li><li>Vacuum insulation helps keep your beverages hot or cold longer than traditional insulation.</li><li>Designed for use with both hot and cold liquids. </li><li>Hand-wash only.</li><li>Do not microwave. Do not place in freezer.</li><li><a href=\"https://www.primeline.com/12-oz-vacuum-insulated-coffee-mug-with-handle-in-individual-mailer-95685.html\" target=\"_blank\">Also available with individual mailer</a>.</li>\r\n</ul>",
                "minQuantity" => 25,
                "updatedAt" => "2023-07-18T11:37:38.437Z",
                "status" => "inactive",
                "slug" => "12-oz-vacuum-insulated-coffee-mug-with-handle-mg407-pl",
                "imageDefault" => [
                    "_id" => "5e5d154e00d2ef00018601a5",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG407/MG407Black/_300_300_id39539217c3626311h33ecbd84808cb8a3c15a.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG407/MG407Black/id39539217c3626311h33ecbd84808cb8a3c15a.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127"
                ],
                "facets" => [
                    [
                        "_id" => "5e0e05db1fc2827bd29a9049",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Insulated",
                        "slug" => "insulated",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5ebdb7cc15118e10ef8e8a52",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With Handle",
                        "slug" => "with-handle",
                        "isSuffix" => true,
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b090bf111026beb7ac5fa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Gray",
                        "slug" => "gray"
                    ],
                    [
                        "_id" => "609b0970f111026beb7ac648",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Green",
                        "slug" => "green"
                    ],
                    [
                        "_id" => "609b0b15f111026beb7ac748",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Purple",
                        "slug" => "purple"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "609b0cd6f111026beb7ac848",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "White",
                        "slug" => "white"
                    ],
                    [
                        "_id" => "616863e5d8bd8f3f9c47f24f",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "12 oz",
                        "slug" => "12-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3e55e61cc3b654d4657"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-20T17:31:11.901Z",
                "timeGrabSpent" => 190,
                "total_sales" => 1,
                "costMin" => 7.254,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 491,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "rank_error" => 7,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG407/MG407Black/id39539217c3626311h33ecbd84808cb8a3c15a.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG407/MG407Black/_300_300_id39539217c3626311h33ecbd84808cb8a3c15a.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e55e61cc3b654d4657",
                        "name" => "Tumblers & Travel Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e1343e7b79cdc0001ea6d67",
                "supplierCode" => "PL",
                "productId" => "MG403",
                "isCloseout" => false,
                "primaryMaterial" => "Stainless Steel",
                "productName" => "20 oz. Intrigue Vacuum Straw Tumbler",
                "description" => "<ul><li>20 oz. (591 mL) Double-wall vacuum insulated Stainless Steel straw tumbler.\r\n</li><li> Includes ABS Plastic press-on lid and Polypropylene Plastic straw\r\n</li><li> Designed for use with both hot and cold beverages\r\n</li><li> Vacuum insulation helps keep your hot beverages warm longer and cold beverages cool longer than bottles and tumblers without vacuum insulation.\r\n</li><li> Hand wash only.\r\n</li><li> Do not microwave or place in freezer</li></ul>",
                "minQuantity" => 24,
                "updatedAt" => "2023-06-13T22:20:00.559Z",
                "status" => "inactive",
                "slug" => "20-oz-intrigue-vacuum-straw-tumbler-mg403-pl",
                "imageDefault" => [
                    "_id" => "5e5d154500d2ef0001860181",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG403/MG403Black/_300_300_id44622734c3626311hb2611bd6e2befe8c966f.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG403/MG403Black/id44622734c3626311hb2611bd6e2befe8c966f.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127",
                    "5da73b855335815bd1d74486",
                    "5da73b855335815bd1d74486"
                ],
                "facets" => [
                    [
                        "_id" => "5dfcfc7463af461688a79a53",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Stainless Steel",
                        "slug" => "stainless-steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e058e1fc2827bd29a903a",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Steel",
                        "slug" => "steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e05db1fc2827bd29a9049",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Insulated",
                        "slug" => "insulated",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0cd6f111026beb7ac848",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "White",
                        "slug" => "white"
                    ],
                    [
                        "_id" => "61687848d51b964bf7405674",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "20 oz",
                        "slug" => "20-oz"
                    ],
                    [
                        "_id" => "61aa2c21d84dd659d27be225",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Hand Wash Only",
                        "slug" => "hand-wash-only"
                    ]
                ],
                "categories" => [
                    "5ce2e3e55e61cc3b654d4657",
                    "5ce2e3e55e61cc3b654d4657"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-13T22:20:04.668Z",
                "timeGrabSpent" => 105,
                "costMin" => 7.56,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 815,
                "discountCode" => "C",
                "rank_error" => 3,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG403/MG403Black/id44622734c3626311hb2611bd6e2befe8c966f.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG403/MG403Black/_300_300_id44622734c3626311hb2611bd6e2befe8c966f.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e55e61cc3b654d4657",
                        "name" => "Tumblers & Travel Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 1
            ],
            [
                "_id" => "5d3ea55fceb9af5e1663996f",
                "description" => "This expandable / collapsible beverage dispenser is made from BPA-free polypropylene and holds up to 124 oz. when expanded. Container doubles in height from 3 7/8” to 8 1/2\". Just unscrew the top and pull the sides up.  It also features a durable spigot and carry handle for transport.",
                "productId" => "KW5601",
                "productName" => "124 oz Expandable Beverage Dispenser",
                "supplierCode" => "LMRK",
                "updatedAt" => "2024-01-01T01:04:28.641Z",
                "slug" => "124-oz-expandable-beverage-dispenser-kw5601-lmrk",
                "isCloseout" => false,
                "status" => "active",
                "minQuantity" => 96,
                "supplierId" => "5cd3429f2ede8b6e760aacd8",
                "facetGroups" => [
                    "5da73b905335815bd1d74492",
                    "61a00af14a44bc6004746b63",
                    "5df803359707b36771f74ab8",
                    "5df803359707b36771f74ab8",
                    "5da73b7f5335815bd1d74480",
                    "5da73b7f5335815bd1d74480",
                    "5da73b795335815bd1d74475",
                    "5e2b3e35680c47467f77d368",
                    "5e724671fa78df32e1c490c8",
                    "605d19db80f4ef1ff4dade67",
                    "5df800f29707b36771f74a20",
                    "5df800f29707b36771f74a20",
                    "5edeadda94b643732a751691",
                    "5efb6acd3990770fc110efa2",
                    "5ebc4d02c167641020b63b82",
                    "5efb6acd3990770fc110efa2",
                    "5df800f29707b36771f74a20",
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5da73b7f5335815bd1d74480",
                    "5da73b905335815bd1d74492",
                    "5eff665869074f0ae9fbdde5",
                    "5d81538f7bf31460650a0fc3",
                    "5da73b7f5335815bd1d74480"
                ],
                "facets" => [
                    [
                        "_id" => "5ec44ed0cb176a259ae978b9",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Collapsible",
                        "slug" => "collapsible",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f4cbdaad2ab285f701854f5",
                        "name" => "Valuemark",
                        "facetGroup" => "5da73b7f5335815bd1d74480",
                        "slug" => "valuemark",
                        "inActive" => true
                    ],
                    [
                        "_id" => "60947f15923aeb6bb3558225",
                        "inActive" => true,
                        "name" => "Beverage",
                        "facetGroup" => "5da73b7f5335815bd1d74480",
                        "slug" => "beverage"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "609b0cd6f111026beb7ac848",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "White",
                        "slug" => "white"
                    ]
                ],
                "categories" => [
                    "5d5591364ad54e4964b63ea9"
                ],
                "source" => "PromoStandards",
                "decorationProducts" => [],
                "issue_ids" => [],
                "sorting_rate" => [
                    "5c7edfd8208c866f6f7c7fd0" => "1",
                    "6567e9fde1bfd00377d2618b" => "5"
                ],
                "costMin" => 2.556,
                "discountCode" => "C",
                "productRating" => "5",
                "grabbedAt" => "2023-12-20T20:45:14.360Z",
                "imageDefault" => [
                    "_id" => "63056287a4ab931f1854ecee",
                    "urlSmall" => "https://products.mpowerpromo.com/LMRK/KW5601/KW5601R/_300_300_Group800/KW5601.jpg",
                    "url" => "https://products.mpowerpromo.com/LMRK/KW5601/KW5601R/Group800/KW5601.jpg",
                    "color" => "N/A"
                ],
                "originDiscountCode" => "C",
                "primaryMaterial" => "Polypropylene",
                "timeGrabSpent" => 133,
                "indexId" => 173,
                "inventoryStatusRate" => 10,
                "rank_error" => 3,
                "issues" => [],
                "imgUrl" => "https://products.mpowerpromo.com/LMRK/KW5601/KW5601R/Group800/KW5601.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/LMRK/KW5601/KW5601R/_300_300_Group800/KW5601.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5d5591364ad54e4964b63ea9",
                        "name" => "Pitchers & Jugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e134c17b79cdc0001ea6ff7",
                "supplierCode" => "PL",
                "productId" => "MG691",
                "isCloseout" => false,
                "primaryMaterial" => "Stainless Steel",
                "productName" => "16.9 oz Iron  Stainless Steel Log Cabin Mug",
                "description" => "<ul><li>Camping and scouting classic 16.9 oz. (500 mL) Iron mug with enamel finish and 304 Stainless Steel rim.</li><li>Hand-wash only.&nbsp;</li><li>Do not microwave or place in freezer.&nbsp;</li><li>Designed for use with both hot and cold beverages.&nbsp;</li></ul>",
                "minQuantity" => 60,
                "updatedAt" => "2023-12-11T19:39:29.165Z",
                "status" => "inactive",
                "slug" => "169-oz-iron-stainless-steel-log-cabin-mug-mg691-pl",
                "imageDefault" => [
                    "_id" => "5e5d156200d2ef0001860203",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG691/MG691Black/_300_300_id32990583c3626311h643afb824a2a92ce387b.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG691/MG691Black/id32990583c3626311h643afb824a2a92ce387b.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5da73b905335815bd1d74492",
                    "62b4cef9dc29d606aec60615",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127",
                    "5da73b855335815bd1d74486",
                    "5da73b855335815bd1d74486"
                ],
                "facets" => [
                    [
                        "_id" => "5dfcfc7463af461688a79a53",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Stainless Steel",
                        "slug" => "stainless-steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e058e1fc2827bd29a903a",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Steel",
                        "slug" => "steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "609b0cd6f111026beb7ac848",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "White",
                        "slug" => "white"
                    ],
                    [
                        "_id" => "61294e3e7413c35ae81f0cac",
                        "inActive" => false,
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Enamel",
                        "slug" => "enamel"
                    ],
                    [
                        "_id" => "62b4f33cdc29d606aec8f253",
                        "inActive" => false,
                        "facetGroup" => "62b4cef9dc29d606aec60615",
                        "name" => "Camping",
                        "slug" => "camping"
                    ]
                ],
                "categories" => [
                    "5ce2e3bb5e61cc3b654d4647"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-13T22:18:08.884Z",
                "timeGrabSpent" => 126,
                "total_sales" => 2,
                "costMin" => 4.326,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 847,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "rank_error" => 4,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG691/MG691Black/id32990583c3626311h643afb824a2a92ce387b.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG691/MG691Black/_300_300_id32990583c3626311h643afb824a2a92ce387b.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3bb5e61cc3b654d4647",
                        "name" => "Camping Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5dfab6a968ea5f000150e5d7",
                "supplierCode" => "PL",
                "productId" => "CM100",
                "status" => "inactive",
                "updatedAt" => "2023-06-12T15:54:22.604Z",
                "description" => "<ul><li> 11 oz. (325 mL) Ceramic mugs are a classic item for home and office.</li><li> Budget friendly C-handle Ceramic stoneware mug.</li><li> Hand-wash only.&nbsp;</li><li>Item is also available in&nbsp;<a id=\"null\" href=\"https://primeline.com/11-oz-two-tone-c-handle-mug-50213.html\" target=\"_self\">two-tone colors</a>.&nbsp;</li><li><a href=\"https://www.primeline.com/11-oz-basic-c-handle-ceramic-mug-in-individual-mailer-95510.html\" target=\"_blank\">Also available with individual mailer</a>.</li><li>Note: Blank pricing for ceramics is the same as decorated due to special packaging required for all shipments.</li></ul><br>*24-hour rush service only applies to catalog quantities up to 288 units.\r",
                "isCloseout" => false,
                "primaryMaterial" => "Ceramic",
                "productName" => "11 oz. Basic C Handle Ceramic Mug",
                "slug" => "11-oz-basic-c-handle-ceramic-mug-cm100-pl",
                "minQuantity" => 144,
                "imageDefault" => [
                    "_id" => "5f8f7755a4ab931f34d379d2",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/CM100/CM100Black/_300_300_id18030871c3626311h6f7ba7e9661a411117ae.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/CM100/CM100Black/id18030871c3626311h6f7ba7e9661a411117ae.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127"
                ],
                "facets" => [
                    [
                        "_id" => "5e0e05871fc2827bd29a9039",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Ceramic",
                        "slug" => "ceramic",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e05e31fc2827bd29a904d",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Microwave Safe",
                        "slug" => "microwave-safe",
                        "inActive" => false
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0970f111026beb7ac648",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Green",
                        "slug" => "green"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "609b0cd6f111026beb7ac848",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "White",
                        "slug" => "white"
                    ],
                    [
                        "_id" => "6168639cd8bd8f3f9c47efc9",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "11 oz",
                        "slug" => "11-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3be5e61cc3b654d4648"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-12T15:54:26.828Z",
                "timeGrabSpent" => 180,
                "costMin" => 1.578,
                "total_sales" => 2,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 679,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "rank_error" => 7,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/CM100/CM100Black/id18030871c3626311h6f7ba7e9661a411117ae.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/CM100/CM100Black/_300_300_id18030871c3626311h6f7ba7e9661a411117ae.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3be5e61cc3b654d4648",
                        "name" => "Classic C Handle Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5d8faf429680490001450d01",
                "supplierCode" => "ARIEL",
                "productId" => "WBA-WG19",
                "status" => "active",
                "updatedAt" => "2024-02-09T20:33:32.173Z",
                "description" => "2-Liter Waterproof Gear Bag with Touch-Thru Phone Pocket features 300D heathered polyester with PVC lining. Roll down top of bag and buckle ends together for a waterproof seal. Clear interior phone pocket lets you control the phone through the window.  Interested in a larger sizes, see WBA-WB20 or WBA-WT20.",
                "isCloseout" => null,
                "primaryMaterial" => "300D Polyester - PVC",
                "productName" => "2-Liter Waterproof Gear Bag with Touch-Thru Phone Pocket",
                "minQuantity" => 100,
                "slug" => "2-liter-waterproof-gear-bag-with-touch-thru-phone-pocket-wba-wg19-ariel",
                "supplierId" => "5d4066b7f0486341d8348ed3",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5d81538f7bf31460650a0fc3",
                    "5daf05c66185895151248127"
                ],
                "facets" => [
                    [
                        "_id" => "5df8013d9707b36771f74a35",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Waterproof",
                        "slug" => "waterproof",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5df8149a9707b36771f74edd",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Polyester",
                        "slug" => "polyester",
                        "inActive" => false
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b090bf111026beb7ac5fa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Gray",
                        "slug" => "gray"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ]
                ],
                "categories" => [
                    "5ce2ed815e61cc3b654d47b0",
                    "65a0b48fcc57624827f23ccc",
                    "65a5714f1c63522b561fcd48",
                    "65a5bf156a30be7df0b9130e"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2024-02-09T20:33:36.732Z",
                "timeGrabSpent" => 60,
                "imageDefault" => [
                    "_id" => "5e7b454619db1d0001ffdfe3",
                    "urlSmall" => "https://products.mpowerpromo.com/ARIEL/WBA-WG19/WBA-WG19BL/_300_300_large/wba-wg19rd.jpg",
                    "url" => "https://products.mpowerpromo.com/ARIEL/WBA-WG19/WBA-WG19BL/large/wba-wg19rd.jpg"
                ],
                "costMin" => 2.58,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 741,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "prices" => [
                    [
                        "discountCode" => "C",
                        "originDiscountCode" => "C",
                        "priceMax" => 5.35,
                        "priceMin" => 4.3,
                        "costMin" => 2.58,
                        "localizationCountry" => "US",
                        "minQuantity" => 100
                    ]
                ],
                "rank_error" => 3,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/ARIEL/WBA-WG19/WBA-WG19BL/large/wba-wg19rd.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/ARIEL/WBA-WG19/WBA-WG19BL/_300_300_large/wba-wg19rd.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2ed815e61cc3b654d47b0",
                        "name" => "Waterproof Dry Bags",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e133c7ab79cdc0001ea6b50",
                "supplierCode" => "PL",
                "productId" => "MG207",
                "isCloseout" => false,
                "primaryMaterial" => "Tri-Edge",
                "productName" => "16 oz. THE PARTY CUP",
                "description" => "<ul><li>Reusable 16 oz. (473 mL) Plastic party cup like the ones you used to play beer pong in college.</li><li>Made of double wall tri-edge Plastic (similar to polypropylene plastic).</li><li>Designed for use with hot and cold beverages.&nbsp;</li><li>Do not microwave.</li><li>Hand-wash only.</li><li>BPA-free.</li><li>USA made.</li></ul>",
                "minQuantity" => 100,
                "updatedAt" => "2023-10-16T16:33:06.437Z",
                "status" => "inactive",
                "slug" => "16-oz-gameday-tailgate-cup-mg207-pl",
                "imageDefault" => [
                    "_id" => "5e5d151d00d2ef0001860129",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG207/MG207White/_300_300_id24186274c3626311h4d09c6a422484e059ed4.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG207/MG207White/id24186274c3626311h4d09c6a422484e059ed4.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5d91f7536797bb1cbbc3888b",
                    "5daf05c66185895151248127",
                    "5e2b3e35680c47467f77d368"
                ],
                "facets" => [
                    [
                        "_id" => "5e2b3eac680c47467f77d3a1",
                        "facetGroup" => "5e2b3e35680c47467f77d368",
                        "name" => "Made in USA",
                        "slug" => "made-in-usa",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0970f111026beb7ac648",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Green",
                        "slug" => "green"
                    ],
                    [
                        "_id" => "609b0ab5f111026beb7ac6d8",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Orange",
                        "slug" => "orange"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "609b0cd6f111026beb7ac848",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "White",
                        "slug" => "white"
                    ],
                    [
                        "_id" => "61686e1dd51b964bf73f70a3",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "16 oz",
                        "slug" => "16-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3e55e61cc3b654d4657",
                    "641f3a91a7655e12609973a4",
                    "65283df0e80a9a544929a52c"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-20T17:25:49.469Z",
                "timeGrabSpent" => 173,
                "costMin" => 1.44,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 100,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "rank_error" => 6,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG207/MG207White/id24186274c3626311h4d09c6a422484e059ed4.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG207/MG207White/_300_300_id24186274c3626311h4d09c6a422484e059ed4.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e55e61cc3b654d4657",
                        "name" => "Tumblers & Travel Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5dfab70d68ea5f000150e5f9",
                "supplierCode" => "PL",
                "productId" => "CM114",
                "status" => "inactive",
                "updatedAt" => "2023-06-12T15:46:36.340Z",
                "description" => "<ul><li>16 oz. (473 mL) ceramic mug with angular body and flecked gray exterior (color interior)\r\n</li><li> Features glossy color interior\r\n</li><li> Made of 100% Ceramic Stoneware. \r\n</li><li> Dishwasher safe; however we recommend hand washing all imprinted products.</li><li>Note: Blank pricing for ceramics is the same as decorated due to special packaging required for all shipments.</li><li><a href=\"https://www.primeline.com/16-oz-fleck-timbre-ceramic-mug-in-individual-mailer-95662.html\" target=\"_blank\">Also available with individual mailer</a>.</li></ul>\r\n<br><br>\r\n*24-hour rush service only applies to catalog quantities up to 288 units. ",
                "isCloseout" => false,
                "primaryMaterial" => "Ceramic",
                "productName" => "16 oz. Fleck  Timbre Ceramic Mug",
                "slug" => "16-oz-fleck-timbre-ceramic-mug-cm114-pl",
                "minQuantity" => 72,
                "imageDefault" => [
                    "_id" => "5e5d05bc00d2ef000185c500",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/CM114/CM114Black/_300_300_id44414800c3626311hf80acbe6895d7db52c0b.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/CM114/CM114Black/id44414800c3626311hf80acbe6895d7db52c0b.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127"
                ],
                "facets" => [
                    [
                        "_id" => "5e0e05871fc2827bd29a9039",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Ceramic",
                        "slug" => "ceramic",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e1901ff63f4875d939e0588",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Dishwasher Safe",
                        "slug" => "dishwasher-safe",
                        "inActive" => false
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "609b0cd6f111026beb7ac848",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "White",
                        "slug" => "white"
                    ],
                    [
                        "_id" => "61686e1dd51b964bf73f70a3",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "16 oz",
                        "slug" => "16-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3b95e61cc3b654d4646"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-12T15:46:40.289Z",
                "timeGrabSpent" => 130,
                "total_sales" => 4,
                "costMin" => 2.748,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 261,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "rank_error" => 4,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/CM114/CM114Black/id44414800c3626311hf80acbe6895d7db52c0b.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/CM114/CM114Black/_300_300_id44414800c3626311hf80acbe6895d7db52c0b.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3b95e61cc3b654d4646",
                        "name" => "Cafe Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e134ad4b79cdc0001ea6f4d",
                "supplierCode" => "PL",
                "productId" => "MG685",
                "isCloseout" => false,
                "primaryMaterial" => "Stainless Steel",
                "productName" => "20 oz. Emperor Vacuum Tumbler",
                "description" => "<ul>\r\n<li> 20 oz. (591 mL) BPA-free vacuum insulated double wall Stainless Steel tumbler.\r\n</li><li> Includes clear AS Plastic spill-resistant slide-lock lid.\r\n</li><li> Vacuum insulation helps keep your hot beverages warm longer and cold beverages cool longer than bottles and tumblers without vacuum insulation.\r\n</li><li> Hand-wash only. Do not place in freezer or microwave.</li><li>Black, Orange and White color have a matte finish, the rest of colors have a metallic finish.</li>\r\n</ul><br>\r\n\r\nCaution: item may leak if tipped or held upside-down.<br><br>Note: FOB CA only available with Silk Screen imprint option, 1-color only.<br><br>Silk Screen standard, optional VibraTec standard production time is approximately 5-7 days, catalog quantities, one imprint location (No rush available). Refer to&nbsp;<a id=\"null\" href=\"https://www.primeline.com/general-info#setup-and-production-times\" target=\"_self\">General Information</a> for add'l details.",
                "minQuantity" => 24,
                "updatedAt" => "2023-07-09T08:45:40.443Z",
                "status" => "inactive",
                "slug" => "20-oz-emperor-vacuum-tumbler-mg685-pl",
                "imageDefault" => [
                    "_id" => "5e5d155e00d2ef00018601e7",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG685/MG685Black/_300_300_id42625017c3626311h241bff1a588a6234df83.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG685/MG685Black/id42625017c3626311h241bff1a588a6234df83.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127",
                    "5da73b855335815bd1d74486",
                    "5da73b855335815bd1d74486"
                ],
                "facets" => [
                    [
                        "_id" => "5dfcfc7463af461688a79a53",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Stainless Steel",
                        "slug" => "stainless-steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e058e1fc2827bd29a903a",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Steel",
                        "slug" => "steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e05db1fc2827bd29a9049",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Insulated",
                        "slug" => "insulated",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0970f111026beb7ac648",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Green",
                        "slug" => "green"
                    ],
                    [
                        "_id" => "609b0ab5f111026beb7ac6d8",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Orange",
                        "slug" => "orange"
                    ],
                    [
                        "_id" => "609b0acbf111026beb7ac710",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Pink",
                        "slug" => "pink"
                    ],
                    [
                        "_id" => "609b0b15f111026beb7ac748",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Purple",
                        "slug" => "purple"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "609b0cc3f111026beb7ac826",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Silver",
                        "slug" => "silver"
                    ],
                    [
                        "_id" => "609b0cd6f111026beb7ac848",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "White",
                        "slug" => "white"
                    ],
                    [
                        "_id" => "61687848d51b964bf7405674",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "20 oz",
                        "slug" => "20-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3e55e61cc3b654d4657",
                    "5ce2e3e55e61cc3b654d4657"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-13T22:24:39.807Z",
                "timeGrabSpent" => 264,
                "total_sales" => 1,
                "costMin" => 6.726,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 852,
                "discountCode" => "C",
                "rank_error" => 10,
                "inventoryStatus" => "In Stock",
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG685/MG685Black/id42625017c3626311h241bff1a588a6234df83.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG685/MG685Black/_300_300_id42625017c3626311h241bff1a588a6234df83.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e55e61cc3b654d4657",
                        "name" => "Tumblers & Travel Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e1346e9b79cdc0001ea6e34",
                "supplierCode" => "PL",
                "productId" => "MG410",
                "isCloseout" => false,
                "primaryMaterial" => "Stainless Steel",
                "productName" => "16 oz. Silver Streak Tumbler",
                "description" => "<ul><li> 16 oz. (473 mL) insulated tumbler with Stainless Steel exterior and BPA-free Plastic interior.</li><li> Features matching color PVC grip and thumb slide Plastic lid. </li><li> Fits most automobile cup holders. </li><li> Not microwave or dishwasher safe. Hand-wash only.</li></ul><br>Caution: Item may leak if tipped or held upside-down.<br><br>Note: FOB CA only available for Silk Screen imprint option.<br><br>Silk Screen standard, optional VibraTec standard production time is approximately 5-7 days, catalog quantities, one imprint location (No rush available). Refer to <a id=\"null\" href=\"https://www.primeline.com/general-info#setup-and-production-times\" target=\"_blank\">General Information</a> for add'l details.",
                "minQuantity" => 50,
                "updatedAt" => "2023-06-13T22:10:40.801Z",
                "status" => "inactive",
                "slug" => "16-oz-silver-streak-tumbler-mg410-pl",
                "issue_ids" => [],
                "imageDefault" => [
                    "_id" => "5e5d155000d2ef00018601b1",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG410/MG410Black/_300_300_id42562723c3626311ha438ef0b2bde8672e9ef.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG410/MG410Black/id42562723c3626311ha438ef0b2bde8672e9ef.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127",
                    "5da73b855335815bd1d74486",
                    "5da73b855335815bd1d74486"
                ],
                "facets" => [
                    [
                        "_id" => "5dfcfc7463af461688a79a53",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Stainless Steel",
                        "slug" => "stainless-steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e058e1fc2827bd29a903a",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Steel",
                        "slug" => "steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e05db1fc2827bd29a9049",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Insulated",
                        "slug" => "insulated",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0970f111026beb7ac648",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Green",
                        "slug" => "green"
                    ],
                    [
                        "_id" => "609b0ab5f111026beb7ac6d8",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Orange",
                        "slug" => "orange"
                    ],
                    [
                        "_id" => "609b0b15f111026beb7ac748",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Purple",
                        "slug" => "purple"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "61686e1dd51b964bf73f70a3",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "16 oz",
                        "slug" => "16-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3e55e61cc3b654d4657",
                    "5ce2e3e55e61cc3b654d4657"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-13T22:10:45.314Z",
                "timeGrabSpent" => 190,
                "total_sales" => 10,
                "costMin" => 2.748,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 282,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "rank_error" => 7,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG410/MG410Black/id42562723c3626311ha438ef0b2bde8672e9ef.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG410/MG410Black/_300_300_id42562723c3626311ha438ef0b2bde8672e9ef.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e55e61cc3b654d4657",
                        "name" => "Tumblers & Travel Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5d3ea0b3ceb9af5e16633b56",
                "description" => "16.9 oz. (500 ml) aluminum flask with dome covered pull top.",
                "productId" => "GC0402",
                "productName" => "16.9 oz. Domed Flask",
                "supplierCode" => "LMRK",
                "updatedAt" => "2024-01-01T01:04:28.641Z",
                "slug" => "169-oz-domed-flask-gc0402-lmrk",
                "isCloseout" => false,
                "status" => "active",
                "primaryMaterial" => "Aluminum",
                "minQuantity" => 100,
                "imageDefault" => [
                    "_id" => "5f4e9833a4ab93162c5f341a",
                    "urlSmall" => "https://products.mpowerpromo.com/LMRK/GC0402/GC0402N/_300_300_GC0402.jpg",
                    "url" => "https://products.mpowerpromo.com/LMRK/GC0402/GC0402N/GC0402.jpg",
                    "color" => "N/A"
                ],
                "issue_ids" => [],
                "supplierId" => "5cd3429f2ede8b6e760aacd8",
                "facetGroups" => [
                    "5da73b7f5335815bd1d74480",
                    "5da73b905335815bd1d74492",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5eff665869074f0ae9fbdde3",
                    "5d81538f7bf31460650a0fc3",
                    "5daf05c66185895151248127",
                    "5da73b7f5335815bd1d74480"
                ],
                "facets" => [
                    [
                        "_id" => "5e04e419b6012236148e7619",
                        "facetGroup" => "5da73b7f5335815bd1d74480",
                        "name" => "Giftcor",
                        "slug" => "giftcor",
                        "inActive" => true
                    ],
                    [
                        "_id" => "5f1f3cc08d20a74c0786f55a",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Aluminum",
                        "slug" => "aluminum",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f4cbdaad2ab285f701854f5",
                        "name" => "Valuemark",
                        "facetGroup" => "5da73b7f5335815bd1d74480",
                        "slug" => "valuemark",
                        "inActive" => true
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0cc3f111026beb7ac826",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Silver",
                        "slug" => "silver"
                    ]
                ],
                "categories" => [
                    "5ce2e3e95e61cc3b654d4658"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-12-21T05:18:41.094Z",
                "timeGrabSpent" => 56,
                "total_sales" => 1,
                "costMin" => 2.85,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "sorting_rate" => [
                    "5c7edfd8208c866f6f7c7fd0" => "1",
                    "6567e9fde1bfd00377d2618b" => "5"
                ],
                "indexId" => 1043,
                "discountCode" => "C",
                "rank_error" => 1,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/LMRK/GC0402/GC0402N/GC0402.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/LMRK/GC0402/GC0402N/_300_300_GC0402.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e95e61cc3b654d4658",
                        "name" => "Water Bottles",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e134347b79cdc0001ea6d45",
                "supplierCode" => "PL",
                "productId" => "MG402",
                "isCloseout" => false,
                "primaryMaterial" => "Stainless Steel",
                "productName" => "19 oz. Double Wall Vacuum Bottle with Cork Lid",
                "description" => "<ul><li>19 oz. (561 mL) double wall Vacuum insulated bottle, 304 Stainless Steel interior, 201 Stainless Steel exterior with Cork lid.&nbsp;</li><li> Cork lid (screws on).\r\n</li><li> Vacuum insulation helps keep your hot beverages warm longer and cold beverages cool longer than bottles and tumblers without vacuum insulation.\r\n</li><li> Hand-wash only. Designed for use with hot and cold beverages</li></ul>",
                "minQuantity" => 36,
                "updatedAt" => "2023-06-20T16:53:12.139Z",
                "status" => "inactive",
                "slug" => "19-oz-double-wall-vacuum-bottle-with-cork-lid-mg402-pl",
                "issue_ids" => [],
                "imageDefault" => [
                    "_id" => "5e5d154300d2ef0001860178",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG402/MG402Black/_300_300_id44619410c3626311h450b03a4236d5493bd08.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG402/MG402Black/id44619410c3626311h450b03a4236d5493bd08.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127",
                    "5da73b855335815bd1d74486",
                    "5da73b855335815bd1d74486"
                ],
                "facets" => [
                    [
                        "_id" => "5dfcfc7463af461688a79a53",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Stainless Steel",
                        "slug" => "stainless-steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e058e1fc2827bd29a903a",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Steel",
                        "slug" => "steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e05db1fc2827bd29a9049",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Insulated",
                        "slug" => "insulated",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f231ca650f5ee202bd4bda1",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Double Wall",
                        "slug" => "double-wall",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "60833fbbc1874477a66cc921",
                        "inActive" => false,
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Cork",
                        "slug" => "cork"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0cc3f111026beb7ac826",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Silver",
                        "slug" => "silver"
                    ],
                    [
                        "_id" => "616877cbd51b964bf7404f2b",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "19 oz",
                        "slug" => "19-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3e95e61cc3b654d4658"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-20T16:53:16.032Z",
                "timeGrabSpent" => 101,
                "costMin" => 8.112,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 796,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "rank_error" => 3,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG402/MG402Black/id44619410c3626311h450b03a4236d5493bd08.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG402/MG402Black/_300_300_id44619410c3626311h450b03a4236d5493bd08.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e95e61cc3b654d4658",
                        "name" => "Water Bottles",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e134e99b79cdc0001ea70c7",
                "supplierCode" => "PL",
                "productId" => "MG757",
                "isCloseout" => false,
                "primaryMaterial" => "Stainless Steel",
                "productName" => "20 oz. Streetwise Insulated Tumbler",
                "description" => "<ul><li>20 oz. (591 mL) double wall tumbler with 201 Stainless Steel exterior and Polypropylene Plastic interior.</li><li>Includes&nbsp;slide-action lid.</li><li>Hand-wash only.</li><li>Designed for use with hot and cold liquids.</li><br><li>Note: FOB CA only available for Silk Screen imprint option.<br><br>Silk Screen standard, optional VibraTec standard production time is approximately 5-7 days, catalog quantities, one imprint location (No rush available). Refer to <a href=\"https://www.primeline.com/general-info#setup-and-production-times\" id=\"null\" target=\"_blank\">General Information</a> for add'l details.</li></ul>",
                "minQuantity" => 25,
                "updatedAt" => "2023-08-10T12:18:05.243Z",
                "status" => "inactive",
                "slug" => "20-oz-streetwise-insulated-tumbler-mg757-pl",
                "imageDefault" => [
                    "_id" => "5e5d156b00d2ef0001860233",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG757/MG757Black/_300_300_id22400206c3626311h4edeb263d3a9a425bba2.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG757/MG757Black/id22400206c3626311h4edeb263d3a9a425bba2.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127",
                    "5da73b855335815bd1d74486",
                    "5da73b855335815bd1d74486"
                ],
                "facets" => [
                    [
                        "_id" => "5dfcfc7463af461688a79a53",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Stainless Steel",
                        "slug" => "stainless-steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e058e1fc2827bd29a903a",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Steel",
                        "slug" => "steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e05db1fc2827bd29a9049",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Insulated",
                        "slug" => "insulated",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0970f111026beb7ac648",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Green",
                        "slug" => "green"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "609b0cc3f111026beb7ac826",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Silver",
                        "slug" => "silver"
                    ],
                    [
                        "_id" => "609b0cd6f111026beb7ac848",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "White",
                        "slug" => "white"
                    ],
                    [
                        "_id" => "61687848d51b964bf7405674",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "20 oz",
                        "slug" => "20-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3e55e61cc3b654d4657",
                    "5ce2e3e55e61cc3b654d4657"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-13T22:27:47.557Z",
                "timeGrabSpent" => 170,
                "total_sales" => 12,
                "costMin" => 3.984,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 951,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "inventoryStatusRate" => 10,
                "rank_error" => 6,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG757/MG757Black/id22400206c3626311h4edeb263d3a9a425bba2.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG757/MG757Black/_300_300_id22400206c3626311h4edeb263d3a9a425bba2.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e55e61cc3b654d4657",
                        "name" => "Tumblers & Travel Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e3c21c36d9268534ded671b",
                "supplierCode" => "ARIEL",
                "productId" => "WBA-WT20",
                "updatedAt" => "2024-01-22T19:04:39.384Z",
                "status" => "active",
                "description" => "10-Liter Waterproof Gear Bag With Touch-Thru Pouch is made of 210T polyester grid cloth with carabiner clip. Roll down top of bag and buckle ends together for a waterproof seal. Also available in smaller sizes. Interested in smaller sizes, see WBA-WB20 & WBA-MP19.",
                "isCloseout" => null,
                "minQuantity" => 50,
                "primaryMaterial" => "Polyester - PVC",
                "productName" => "10-Liter Waterproof Gear Bag With Touch-Thru Pouch",
                "slug" => "10-liter-waterproof-gear-bag-with-touch-thru-pouch-wba-wt20-ariel",
                "supplierId" => "5d4066b7f0486341d8348ed3",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5d81538f7bf31460650a0fc3",
                    "5daf05c66185895151248127"
                ],
                "facets" => [
                    [
                        "_id" => "5df8013d9707b36771f74a35",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Waterproof",
                        "slug" => "waterproof",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5df8149a9707b36771f74edd",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Polyester",
                        "slug" => "polyester",
                        "inActive" => false
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0970f111026beb7ac648",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Green",
                        "slug" => "green"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ]
                ],
                "categories" => [
                    "5ce2ed815e61cc3b654d47b0"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-12-19T21:16:02.818Z",
                "timeGrabSpent" => 66,
                "imageDefault" => [
                    "_id" => "5e7d83dfcbee600001480f5d",
                    "urlSmall" => "https://products.mpowerpromo.com/ARIEL/WBA-WT20/WBA-WT20BK/_300_300_wba-wt20bl.jpg",
                    "url" => "https://products.mpowerpromo.com/ARIEL/WBA-WT20/WBA-WT20BK/wba-wt20bl.jpg"
                ],
                "costMin" => 3.69,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 369,
                "discountCode" => "C",
                "rank_error" => 3,
                "inventoryStatus" => "In Stock",
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/ARIEL/WBA-WT20/WBA-WT20BK/wba-wt20bl.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/ARIEL/WBA-WT20/WBA-WT20BK/_300_300_wba-wt20bl.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2ed815e61cc3b654d47b0",
                        "name" => "Waterproof Dry Bags",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5dfab72b68ea5f000150e5fd",
                "supplierCode" => "PL",
                "productId" => "CM124",
                "status" => "inactive",
                "updatedAt" => "2023-06-12T15:57:48.895Z",
                "description" => "<ul><li>12 oz. (354 mL) Ceramic mug with color exterior and white interior with white spoon.&nbsp;</li><li>Ceramic spoon measures approx. 4.56\"l x 1\"w.&nbsp;</li><li>For use with hot and cold beverages.</li><li>Hand-wash only.</li><li>Spoons ship in bulk separately from mugs.&nbsp;</li><li>Note: Blank pricing for ceramics is the same as decorated due to special packaging required for all shipments.</li><li><a href=\"https://www.primeline.com/12-oz-dapper-ceramic-mug-with-spoon-in-individual-mailer-95667.html\" target=\"_blank\">Also available with individual mailer</a>.</li></ul>\r\n<br>*24-hour rush service only applies to catalog quantities up to 288 units.\r",
                "isCloseout" => false,
                "primaryMaterial" => "Ceramic",
                "productName" => "12 oz. Dapper Ceramic Mug with Spoon",
                "slug" => "12-oz-dapper-ceramic-mug-with-spoon-cm124-pl",
                "minQuantity" => 72,
                "imageDefault" => [
                    "_id" => "5e5d05c100d2ef000185c512",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/CM124/CM124Black/_300_300_id39856326c3626311h955757ac4febd930eded.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/CM124/CM124Black/id39856326c3626311h955757ac4febd930eded.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127"
                ],
                "facets" => [
                    [
                        "_id" => "5e0e05871fc2827bd29a9039",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Ceramic",
                        "slug" => "ceramic",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e05f21fc2827bd29a9054",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Spoon",
                        "isSuffix" => true,
                        "slug" => "with-a-spoon",
                        "inActive" => false
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "609b0cd6f111026beb7ac848",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "White",
                        "slug" => "white"
                    ],
                    [
                        "_id" => "616863e5d8bd8f3f9c47f24f",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "12 oz",
                        "slug" => "12-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3b95e61cc3b654d4646"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-12T15:57:52.894Z",
                "timeGrabSpent" => 131,
                "total_sales" => 31,
                "costMin" => 2.268,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 687,
                "discountCode" => "C",
                "inventoryStatus" => "Limited Stock",
                "rank_error" => 4,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/CM124/CM124Black/id39856326c3626311h955757ac4febd930eded.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/CM124/CM124Black/_300_300_id39856326c3626311h955757ac4febd930eded.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3b95e61cc3b654d4646",
                        "name" => "Cafe Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5d3ea3daceb9af5e16637b94",
                "description" => "16 oz. double wall AS tumbler has an integrated juicer to squeeze in your favorite fruit. Includes a hinged color dome lid, polypropylene color accent band and matching color straw. BPA-free.",
                "productId" => "KM6136",
                "productName" => "16 oz Juicer Tumbler",
                "supplierCode" => "LMRK",
                "updatedAt" => "2024-01-05T04:54:07.620Z",
                "slug" => "16-oz-juicer-tumbler-km6136-lmrk",
                "isCloseout" => false,
                "status" => "active",
                "primaryMaterial" => "AS Plastic",
                "minQuantity" => 100,
                "imageDefault" => [
                    "_id" => "5f4e25c9a4ab93162c5ee39e",
                    "urlSmall" => "https://products.mpowerpromo.com/LMRK/KM6136/KM6136C/_300_300_KM6136.jpg",
                    "url" => "https://products.mpowerpromo.com/LMRK/KM6136/KM6136C/KM6136.jpg",
                    "color" => "N/A"
                ],
                "issue_ids" => [],
                "supplierId" => "5cd3429f2ede8b6e760aacd8",
                "facetGroups" => [
                    "5da73b7f5335815bd1d74480",
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5d81538f7bf31460650a0fc3",
                    "5daf05c66185895151248127"
                ],
                "facets" => [
                    [
                        "_id" => "5e0e05b91fc2827bd29a9047",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Plastic",
                        "slug" => "plastic",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f4cbdaad2ab285f701854f5",
                        "name" => "Valuemark",
                        "facetGroup" => "5da73b7f5335815bd1d74480",
                        "slug" => "valuemark",
                        "inActive" => true
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "61686e1dd51b964bf73f70a3",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "16 oz",
                        "slug" => "16-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3e55e61cc3b654d4657",
                    "5ce2e3e55e61cc3b654d4657",
                    "6591aada2659ba62baf34731",
                    "659749aceffba91d23813adb"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-12-21T07:50:45.843Z",
                "timeGrabSpent" => 62,
                "costMin" => 1.812,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "sorting_rate" => [
                    "5c7edfd8208c866f6f7c7fd0" => "1",
                    "6567e9fde1bfd00377d2618b" => "5"
                ],
                "indexId" => 371,
                "discountCode" => "C",
                "rank_error" => 2,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/LMRK/KM6136/KM6136C/KM6136.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/LMRK/KM6136/KM6136C/_300_300_KM6136.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e55e61cc3b654d4657",
                        "name" => "Tumblers & Travel Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e1350b0b79cdc0001ea7177",
                "supplierCode" => "PL",
                "productId" => "MG779",
                "isCloseout" => false,
                "primaryMaterial" => "Tritan Plastic",
                "productName" => "24 oz. Pastime Tritan Water Bottle",
                "description" => "<ul><li>24 oz.(750 mL) Tritan™ water bottle with Stainless Steel lid and base</li><li>Features screw-on cap.</li><li>Hand-wash only. Do not microwave.</li></ul><br /><i>Silk Screen standard, 1 color only</i>",
                "minQuantity" => 50,
                "updatedAt" => "2023-06-13T22:32:04.866Z",
                "status" => "inactive",
                "slug" => "24-oz-pastime-tritan-water-bottle-mg779-pl",
                "imageDefault" => [
                    "_id" => "5e5d157300d2ef0001860251",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG779/MG779Clear/_300_300_id17674404c3626311hbac3b736900c111324c9.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG779/MG779Clear/id17674404c3626311hbac3b736900c111324c9.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127",
                    "5da73b855335815bd1d74486",
                    "5da73b855335815bd1d74486"
                ],
                "facets" => [
                    [
                        "_id" => "5dfcfc7463af461688a79a53",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Stainless Steel",
                        "slug" => "stainless-steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e05b91fc2827bd29a9047",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Plastic",
                        "slug" => "plastic",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0970f111026beb7ac648",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Green",
                        "slug" => "green"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "61687967d51b964bf740617e",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "24 oz",
                        "slug" => "24-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3e95e61cc3b654d4658",
                    "5ce2e3e95e61cc3b654d4658"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-13T22:32:08.999Z",
                "timeGrabSpent" => 97,
                "total_sales" => 5,
                "costMin" => 3.78,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 1110,
                "discountCode" => "C",
                "rank_error" => 3,
                "inventoryStatus" => "In Stock",
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG779/MG779Clear/id17674404c3626311hbac3b736900c111324c9.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG779/MG779Clear/_300_300_id17674404c3626311hbac3b736900c111324c9.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e95e61cc3b654d4658",
                        "name" => "Water Bottles",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e134dfcb79cdc0001ea7073",
                "supplierCode" => "PL",
                "productId" => "MG708",
                "isCloseout" => false,
                "primaryMaterial" => "Stainless Steel",
                "productName" => "16 oz. Blue Monday Travel Tumbler",
                "description" => "<ul><li> Classic shaped 16 oz. (473 mL) double wall insulated travel tumbler with stainless steel exterior and BPA-free Plastic interior.\r\n</li><li> Accent color band with matching color thumb slide Plastic lid.\r\n</li><li> Fits most automobile cup holders.&nbsp;</li><li> Not microwave or dishwasher safe. Hand-wash only.</li></ul>\r\n<br>Note: FOB CA only available for Silk Screen imprint option.<br><br>\r\nCaution: item may leak if tipped or held upside-down.<br><br>\r\nSilk Screen standard, optional VibraTec standard production time is approximately 5-7 days, catalog quantities, one imprint location (No rush available). Refer to <a id=\"null\" href=\"https://www.primeline.com/general-info#setup-and-production-times\" target=\"_blank\">General Information</a> for add'l details.",
                "minQuantity" => 50,
                "updatedAt" => "2023-06-13T22:07:17.569Z",
                "status" => "inactive",
                "slug" => "16-oz-blue-monday-travel-tumbler-mg708-pl",
                "imageDefault" => [
                    "_id" => "5e5d156900d2ef0001860225",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG708/MG708Black/_300_300_id4196294c3626311h22573609b364400afa04.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG708/MG708Black/id4196294c3626311h22573609b364400afa04.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127",
                    "5da73b855335815bd1d74486",
                    "5da73b855335815bd1d74486"
                ],
                "facets" => [
                    [
                        "_id" => "5dfcfc7463af461688a79a53",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Stainless Steel",
                        "slug" => "stainless-steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e058e1fc2827bd29a903a",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Steel",
                        "slug" => "steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e05db1fc2827bd29a9049",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Insulated",
                        "slug" => "insulated",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0970f111026beb7ac648",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Green",
                        "slug" => "green"
                    ],
                    [
                        "_id" => "609b0ab5f111026beb7ac6d8",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Orange",
                        "slug" => "orange"
                    ],
                    [
                        "_id" => "609b0b15f111026beb7ac748",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Purple",
                        "slug" => "purple"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "61686e1dd51b964bf73f70a3",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "16 oz",
                        "slug" => "16-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3e55e61cc3b654d4657",
                    "5ce2e3e55e61cc3b654d4657"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-13T22:07:22.027Z",
                "timeGrabSpent" => 223,
                "total_sales" => 14,
                "costMin" => 2.574,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 206,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "inventoryStatusRate" => 10,
                "rank_error" => 8,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG708/MG708Black/id4196294c3626311h22573609b364400afa04.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG708/MG708Black/_300_300_id4196294c3626311h22573609b364400afa04.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e55e61cc3b654d4657",
                        "name" => "Tumblers & Travel Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e134b77b79cdc0001ea6fc6",
                "supplierCode" => "PL",
                "productId" => "MG687",
                "isCloseout" => false,
                "primaryMaterial" => "Stainless Steel",
                "productName" => "20 oz. Sovereign Insulated Tumbler",
                "description" => "<ul><li>20 oz. (591 mL) double wall tumbler with 201 Stainless Steel exterior, black PP Plastic interior and EVA non-slip base.&nbsp;</li><li>Includes&nbsp;slide action lid with silicone gasket.</li><li>Designed for use with hot and cold liquids.</li><li>Hand-wash only.</li></ul>Note: FOB CA only available for Silk Screen imprint option.<br><br>Silk Screen standard, optional VibraTec standard production time is approximately 5-7 days, catalog quantities, one imprint location (No rush available). Refer to <a href=\"https://www.primeline.com/general-info#setup-and-production-times\" id=\"null\" target=\"_blank\">General Information</a> for add'l details.",
                "minQuantity" => 25,
                "updatedAt" => "2023-06-13T22:30:17.121Z",
                "status" => "inactive",
                "slug" => "20-oz-sovereign-insulated-tumbler-mg687-pl",
                "imageDefault" => [
                    "_id" => "5e5d156000d2ef00018601fb",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG687/MG687Black/_300_300_id23752390c3626311h2fc616994d0e54ad21ba.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG687/MG687Black/id23752390c3626311h2fc616994d0e54ad21ba.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127",
                    "5df800f29707b36771f74a20",
                    "5df800f29707b36771f74a20",
                    "5da73b855335815bd1d74486",
                    "5da73b855335815bd1d74486"
                ],
                "facets" => [
                    [
                        "_id" => "5dfcfc7463af461688a79a53",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Stainless Steel",
                        "slug" => "stainless-steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e058e1fc2827bd29a903a",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Steel",
                        "slug" => "steel",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e05db1fc2827bd29a9049",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Insulated",
                        "slug" => "insulated",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "5fb5471117b6d4181810b113",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Non-Slip",
                        "slug" => "non-slip"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "609b0cc3f111026beb7ac826",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Silver",
                        "slug" => "silver"
                    ],
                    [
                        "_id" => "609b0cd6f111026beb7ac848",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "White",
                        "slug" => "white"
                    ],
                    [
                        "_id" => "61687848d51b964bf7405674",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "20 oz",
                        "slug" => "20-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3e55e61cc3b654d4657",
                    "5ce2e3e55e61cc3b654d4657"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-13T22:30:21.386Z",
                "timeGrabSpent" => 141,
                "total_sales" => 28,
                "costMin" => 4.464,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 1010,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "rank_error" => 5,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG687/MG687Black/id23752390c3626311h2fc616994d0e54ad21ba.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG687/MG687Black/_300_300_id23752390c3626311h2fc616994d0e54ad21ba.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e55e61cc3b654d4657",
                        "name" => "Tumblers & Travel Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5e133fc9b79cdc0001ea6c86",
                "supplierCode" => "PL",
                "productId" => "MG225",
                "isCloseout" => false,
                "primaryMaterial" => "HDPE Plastic",
                "productName" => "24 oz. Color-Changing Water Bottle",
                "description" => "<ul><li>24 oz. (709 mL) bike bottle changes color when you add refrigerated water.</li><li>Made of HDPE plastic in the USA.</li><li>Leak resistant screw top with wide mouth design and pull-spout.</li><li>Not microwave or dishwasher safe. Hand wash.</li><li>BPA-free. Recyclable under symbol #2.</li><li>Bottle colors start out clear frosted and turn color when filled.</li></ul>",
                "minQuantity" => 150,
                "updatedAt" => "2023-06-20T15:44:34.926Z",
                "status" => "inactive",
                "slug" => "24-oz-color-changing-water-bottle-mg225-pl",
                "imageDefault" => [
                    "_id" => "5e5d153500d2ef000186015a",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/MG225/MG225Blue/_300_300_id4196267c3626311he58bad10c7c773cfd295.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/MG225/MG225Blue/id4196267c3626311he58bad10c7c773cfd295.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5da73b795335815bd1d74475",
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5da73b795335815bd1d74475",
                    "5d91f7536797bb1cbbc3888b",
                    "5daf05c66185895151248127"
                ],
                "facets" => [
                    [
                        "_id" => "5da8a74f225ac71941145ddf",
                        "facetGroup" => "5da73b795335815bd1d74475",
                        "name" => "Recyclable",
                        "slug" => "recyclable",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e05b91fc2827bd29a9047",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Plastic",
                        "slug" => "plastic",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0970f111026beb7ac648",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Green",
                        "slug" => "green"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "61687967d51b964bf740617e",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "24 oz",
                        "slug" => "24-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3e95e61cc3b654d4658",
                    "5ce2e3e95e61cc3b654d4658",
                    "641f3a91a7655e12609973a4"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-20T15:44:38.996Z",
                "timeGrabSpent" => 98,
                "total_sales" => 1,
                "costMin" => 1.644,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 1013,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "rank_error" => 3,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/MG225/MG225Blue/id4196267c3626311he58bad10c7c773cfd295.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/MG225/MG225Blue/_300_300_id4196267c3626311he58bad10c7c773cfd295.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e95e61cc3b654d4658",
                        "name" => "Water Bottles",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5d914e8696804900014c64ab",
                "supplierCode" => "AB",
                "productId" => "BE009",
                "status" => "active",
                "updatedAt" => "2024-02-07T14:14:20.633Z",
                "issue_ids" => [],
                "description" => "12 oz., 100% cotton;18\" self-fabric straps; zippered closure; inside zippered hanging pocket;",
                "isCloseout" => false,
                "productName" => "12 oz. Canvas Zippered Book Tote",
                "slug" => "12-oz-canvas-zippered-book-tote-be009-ab",
                "imageDefault" => [
                    "_id" => "649cb05da4ab931facc69ac5",
                    "urlSmall" => "https://products.mpowerpromo.com/AB/BE009/B79815510/_300_300_be009_51_z.jpg",
                    "url" => "https://products.mpowerpromo.com/AB/BE009/B79815510/be009_51_z.jpg",
                    "color" => "BLACK"
                ],
                "supplierId" => "5cd0b4c1f83ffe3446488d91",
                "facetGroups" => [
                    "5da73b7f5335815bd1d74480",
                    "5da73b905335815bd1d74492",
                    "5df800f29707b36771f74a20",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5d814fd15e97885fb7398ca1",
                    "5d81538f7bf31460650a0fc3",
                    "5daf05c66185895151248127",
                    "5e724671fa78df32e1c490c8",
                    "5edeadda94b643732a751691",
                    "5edeadda94b643732a751691",
                    "5edeadda94b643732a751691",
                    "5edeadda94b643732a751691",
                    "5edeadda94b643732a751691",
                    "5edeadda94b643732a751691",
                    "5edeadda94b643732a751691",
                    "5edeadda94b643732a751691"
                ],
                "facets" => [
                    [
                        "_id" => "5df800ba9707b36771f74a1a",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Canvas",
                        "slug" => "canvas",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5df800bf9707b36771f74a1b",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Cotton",
                        "slug" => "cotton",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e04dfe7b6012236148e7515",
                        "facetGroup" => "5da73b7f5335815bd1d74480",
                        "name" => "BAGedge",
                        "slug" => "bagedge",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5ed0032f4ec14c040eb8e84a",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With Zipper",
                        "slug" => "with-zipper",
                        "isSuffix" => true,
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f3bfd52071e764f81608183",
                        "facetGroup" => "5e724671fa78df32e1c490c8",
                        "name" => "Unisex",
                        "slug" => "unisex",
                        "inActive" => false
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "62a21cf2c9a9cc19a0454104",
                        "inActive" => false,
                        "name" => "Embroidery",
                        "slug" => "embroidery",
                        "facetGroup" => "5edeadda94b643732a751691"
                    ],
                    [
                        "_id" => "62a9010deb8f5128f5244ea2",
                        "inActive" => false,
                        "name" => "Screen Print",
                        "slug" => "screen-print",
                        "facetGroup" => "5edeadda94b643732a751691"
                    ]
                ],
                "categories" => [
                    "5ce2e34a5e61cc3b654d4616"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2024-02-07T14:14:24.663Z",
                "timeGrabSpent" => 55,
                "total_sales" => 1,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "primaryMaterial" => "Cotton Canvas",
                "sorting_rate" => [
                    "62572c9da203a05321140659" => "1",
                    "641398a79c1d0e5014a979bb" => "7"
                ],
                "indexId" => 279,
                "inventoryStatus" => "In Stock",
                "prices" => [
                    [
                        "discountCode" => "A",
                        "originDiscountCode" => "A",
                        "priceMax" => 11.32,
                        "priceMin" => 10.26,
                        "costMin" => 5.13,
                        "localizationCountry" => "US",
                        "minQuantity" => 1
                    ]
                ],
                "costMin" => 5.13,
                "discountCode" => "A",
                "minQuantity" => 1,
                "originDiscountCode" => "A",
                "rank_error" => 5,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/AB/BE009/B79815510/be009_51_z.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/AB/BE009/B79815510/_300_300_be009_51_z.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e34a5e61cc3b654d4616",
                        "name" => "Tote Bags",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5dfab70668ea5f000150e5f3",
                "supplierCode" => "PL",
                "productId" => "CM113",
                "status" => "inactive",
                "updatedAt" => "2024-01-02T21:31:24.760Z",
                "description" => "<ul><li>15 oz. (443 mL) Ceramic mug with square handle\r\n</li><li> Features matte finish on exterior with glossy gray interior\r\n</li><li> Made of 100% Ceramic Stoneware. \r\n</li><li> Dishwasher safe; however we recommend hand washing all imprinted products.</li><li>Note: Blank pricing for ceramics is the same as decorated due to special packaging required for all shipments.</li><li><a href=\"https://www.primeline.com/15-oz-geo-square-handle-ceramic-mug-in-individual-mailer-95612.html\" target=\"_blank\">Also available with individual mailer</a>.</li></ul><br>*24-hour rush service only applies to catalog quantities up to 288 units. ",
                "isCloseout" => false,
                "primaryMaterial" => "Ceramic",
                "productName" => "15 oz. Geo Square Handle Ceramic Mug",
                "slug" => "15-oz-geo-square-handle-ceramic-mug-cm113-pl",
                "minQuantity" => 72,
                "imageDefault" => [
                    "_id" => "5e5d05b600d2ef000185c4ea",
                    "urlSmall" => "https://products.mpowerpromo.com/PL/CM113/CM113Black/_300_300_id44790277c3626311he86078c688c0e8c8e537.jpg",
                    "url" => "https://products.mpowerpromo.com/PL/CM113/CM113Black/id44790277c3626311he86078c688c0e8c8e537.jpg"
                ],
                "supplierId" => "5cd34cd32ede8b6e760aace0",
                "issue_ids" => [],
                "facetGroups" => [
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5daf05c66185895151248127"
                ],
                "facets" => [
                    [
                        "_id" => "5e0e05871fc2827bd29a9039",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Ceramic",
                        "slug" => "ceramic",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e1901ff63f4875d939e0588",
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "Dishwasher Safe",
                        "slug" => "dishwasher-safe",
                        "inActive" => false
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0803f111026beb7ac532",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Black",
                        "slug" => "black"
                    ],
                    [
                        "_id" => "609b090bf111026beb7ac5fa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Gray",
                        "slug" => "gray"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "609b0cd6f111026beb7ac848",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "White",
                        "slug" => "white"
                    ],
                    [
                        "_id" => "61686b7ad8bd8f3f9c4861a5",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "15 oz",
                        "slug" => "15-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3b95e61cc3b654d4646"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-06-20T08:30:53.976Z",
                "timeGrabSpent" => 120,
                "total_sales" => 41,
                "costMin" => 3.294,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "originDiscountCode" => "C",
                "indexId" => 219,
                "discountCode" => "C",
                "inventoryStatus" => "In Stock",
                "rank_error" => 4,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/PL/CM113/CM113Black/id44790277c3626311he86078c688c0e8c8e537.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/PL/CM113/CM113Black/_300_300_id44790277c3626311he86078c688c0e8c8e537.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3b95e61cc3b654d4646",
                        "name" => "Cafe Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 0
            ],
            [
                "_id" => "5d3ea3aaceb9af5e16637843",
                "description" => "15 oz. capacity double wall ceramic tumbler fits most auto cup holders and features a white body and color base with matching polypropylene sipper lid with flip-up cover and silicone seal.",
                "productId" => "KM5901",
                "productName" => "15 oz. Ceramic Travel Tumbler",
                "supplierCode" => "LMRK",
                "updatedAt" => "2024-01-01T01:04:28.641Z",
                "slug" => "15-oz-ceramic-travel-tumbler-km5901-lmrk",
                "isCloseout" => false,
                "status" => "active",
                "primaryMaterial" => "Ceramic",
                "minQuantity" => 48,
                "imageDefault" => [
                    "_id" => "5e5a26036d92680ec984e845",
                    "urlSmall" => "https://products.mpowerpromo.com/LMRK/KM5901/KM5901N/_300_300_KM5901.jpg",
                    "url" => "https://products.mpowerpromo.com/LMRK/KM5901/KM5901N/KM5901.jpg",
                    "color" => "N/A"
                ],
                "issue_ids" => [],
                "supplierId" => "5cd3429f2ede8b6e760aacd8",
                "facetGroups" => [
                    "5da73b7f5335815bd1d74480",
                    "5df800f29707b36771f74a20",
                    "5da73b905335815bd1d74492",
                    "5e0e7ae71fc2827bd29b36e3",
                    "5da73b855335815bd1d74486",
                    "5eff665869074f0ae9fbdde5",
                    "5d81538f7bf31460650a0fc3",
                    "5daf05c66185895151248127",
                    "5da73b7f5335815bd1d74480"
                ],
                "facets" => [
                    [
                        "_id" => "5e04e776b6012236148e7729",
                        "facetGroup" => "5da73b7f5335815bd1d74480",
                        "name" => "Sovrano",
                        "slug" => "sovrano",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5e0e05871fc2827bd29a9039",
                        "facetGroup" => "5da73b855335815bd1d74486",
                        "name" => "Ceramic",
                        "slug" => "ceramic",
                        "inActive" => false
                    ],
                    [
                        "_id" => "5f4caf19d2ab28e64918547a",
                        "name" => "Logomark",
                        "facetGroup" => "5da73b7f5335815bd1d74480",
                        "slug" => "logomark",
                        "inActive" => true
                    ],
                    [
                        "_id" => "5f99a3349956501c1999e43c",
                        "inActive" => false,
                        "facetGroup" => "5df800f29707b36771f74a20",
                        "name" => "With A Lid",
                        "slug" => "with-a-lid"
                    ],
                    [
                        "_id" => "609adbcdcd35be2c59baf3aa",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Blue",
                        "slug" => "blue"
                    ],
                    [
                        "_id" => "609b0c99f111026beb7ac7ee",
                        "inActive" => false,
                        "facetGroup" => "5da73b905335815bd1d74492",
                        "name" => "Red",
                        "slug" => "red"
                    ],
                    [
                        "_id" => "61686b7ad8bd8f3f9c4861a5",
                        "inActive" => false,
                        "facetGroup" => "5e0e7ae71fc2827bd29b36e3",
                        "name" => "15 oz",
                        "slug" => "15-oz"
                    ]
                ],
                "categories" => [
                    "5ce2e3e55e61cc3b654d4657",
                    "5ce2e3e55e61cc3b654d4657"
                ],
                "source" => "PromoStandards",
                "grabbedAt" => "2023-12-21T11:37:31.801Z",
                "timeGrabSpent" => 53,
                "costMin" => 2.526,
                "inventoryStatusRate" => 10,
                "productRating" => "5",
                "discountCode" => "C",
                "originDiscountCode" => "C",
                "sorting_rate" => [
                    "5c7edfd8208c866f6f7c7fd0" => "1",
                    "6567e9fde1bfd00377d2618b" => "5"
                ],
                "indexId" => 159,
                "issues" => [],
                "decorationProducts" => [],
                "imgUrl" => "https://products.mpowerpromo.com/LMRK/KM5901/KM5901N/KM5901.jpg",
                "imgUrlSmall" => "https://products.mpowerpromo.com/LMRK/KM5901/KM5901N/_300_300_KM5901.jpg",
                "category" => null,
                "_categories" => [],
                "global_categories" => [
                    [
                        "_id" => "5ce2e3e55e61cc3b654d4657",
                        "name" => "Tumblers & Travel Mugs",
                        "isGlobal" => true
                    ]
                ],
                "partsWithoutShippingPackages" => 0,
                "partsWithoutDimension" => 2
            ]
        ];

        foreach ($products as $product) {
            $saveProduct = new Product();
            $saveProduct->supplierCode = $product['supplierCode'];
            $saveProduct->productId = $product['productId'];
            $saveProduct->isCloseout = $product['isCloseout'];
            $saveProduct->primaryMaterial = $product['primaryMaterial'];
            $saveProduct->productName = $product['productName'];
            $saveProduct->description = $product['description'];
            $saveProduct->minQuantity = $product['minQuantity'];
            $saveProduct->updatedAt = $product['updatedAt'];
            $saveProduct->status = $product['status'];
            $saveProduct->slug = $product['slug'];
            $saveProduct->imageDefault = $product['imageDefault'];
            $saveProduct->supplierId = $product['supplierId'];
            $saveProduct->issue_ids = $product['issue_ids'];
            $saveProduct->facetGroups = $product['facetGroups'];
            $saveProduct->facets = $product['facets'];
            $saveProduct->categories = $product['categories'];
            $saveProduct->source = $product['source'];
            $saveProduct->grabbedAt = $product['grabbedAt'];
            $saveProduct->timeGrabSpent = $product['timeGrabSpent'];
            $saveProduct->total_sales = $product['total_sales'];
            $saveProduct->costMin = $product['costMin'];
            $saveProduct->inventoryStatusRate = $product['inventoryStatusRate'];
            $saveProduct->productRating = $product['productRating'];
            $saveProduct->originDiscountCode = $product['originDiscountCode'];
            $saveProduct->indexId = $product['indexId'];
            $saveProduct->discountCode = $product['discountCode'];
            $saveProduct->inventoryStatus = $product['inventoryStatus'];
            $saveProduct->rank_error = $product['rank_error'];
            $saveProduct->issues = $product['issues'];
            $saveProduct->decorationProducts = $product['decorationProducts'];
            $saveProduct->imgUrl = $product['imgUrl'];
            $saveProduct->imgUrlSmall = $product['imgUrlSmall'];
            $saveProduct->category = $product['category'];
            $saveProduct->_categories = $product['_categories'];
            $saveProduct->global_categories = $product['global_categories'];
            $saveProduct->partsWithoutShippingPackages = $product['partsWithoutShippingPackages'];
            $saveProduct->partsWithoutDimension = $product['partsWithoutDimension'];
            $saveProduct->save();
        }
    }
}
