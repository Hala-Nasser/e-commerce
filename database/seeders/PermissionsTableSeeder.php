<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'main_menu_access',
            ],
            [
                'id'    => 18,
                'title' => 'setting_create',
            ],
            [
                'id'    => 19,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 20,
                'title' => 'setting_show',
            ],
            [
                'id'    => 21,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 22,
                'title' => 'setting_access',
            ],
            [
                'id'    => 23,
                'title' => 'page_create',
            ],
            [
                'id'    => 24,
                'title' => 'page_edit',
            ],
            [
                'id'    => 25,
                'title' => 'page_show',
            ],
            [
                'id'    => 26,
                'title' => 'page_delete',
            ],
            [
                'id'    => 27,
                'title' => 'page_access',
            ],
            [
                'id'    => 28,
                'title' => 'social_link_create',
            ],
            [
                'id'    => 29,
                'title' => 'social_link_edit',
            ],
            [
                'id'    => 30,
                'title' => 'social_link_show',
            ],
            [
                'id'    => 31,
                'title' => 'social_link_delete',
            ],
            [
                'id'    => 32,
                'title' => 'social_link_access',
            ],
            [
                'id'    => 33,
                'title' => 'item_create',
            ],
            [
                'id'    => 34,
                'title' => 'item_edit',
            ],
            [
                'id'    => 35,
                'title' => 'item_show',
            ],
            [
                'id'    => 36,
                'title' => 'item_delete',
            ],
            [
                'id'    => 37,
                'title' => 'item_access',
            ],
            [
                'id'    => 38,
                'title' => 'contact_us_show',
            ],
            [
                'id'    => 39,
                'title' => 'contact_us_delete',
            ],
            [
                'id'    => 40,
                'title' => 'contact_us_access',
            ],
            [
                'id'    => 41,
                'title' => 'attribute_create',
            ],
            [
                'id'    => 42,
                'title' => 'attribute_edit',
            ],
            [
                'id'    => 43,
                'title' => 'attribute_show',
            ],
            [
                'id'    => 44,
                'title' => 'attribute_delete',
            ],
            [
                'id'    => 45,
                'title' => 'attribute_access',
            ],
            [
                'id'    => 46,
                'title' => 'attribute_value_create',
            ],
            [
                'id'    => 47,
                'title' => 'attribute_value_edit',
            ],
            [
                'id'    => 48,
                'title' => 'attribute_value_show',
            ],
            [
                'id'    => 49,
                'title' => 'attribute_value_delete',
            ],
            [
                'id'    => 50,
                'title' => 'attribute_value_access',
            ],
            [
                'id'    => 51,
                'title' => 'category_create',
            ],
            [
                'id'    => 52,
                'title' => 'category_edit',
            ],
            [
                'id'    => 53,
                'title' => 'category_show',
            ],
            [
                'id'    => 54,
                'title' => 'category_delete',
            ],
            [
                'id'    => 55,
                'title' => 'category_access',
            ],
            [
                'id'    => 56,
                'title' => 'product_create',
            ],
            [
                'id'    => 57,
                'title' => 'product_edit',
            ],
            [
                'id'    => 58,
                'title' => 'product_show',
            ],
            [
                'id'    => 59,
                'title' => 'product_delete',
            ],
            [
                'id'    => 60,
                'title' => 'product_access',
            ],
            [
                'id'    => 61,
                'title' => 'inventory_create',
            ],
            [
                'id'    => 62,
                'title' => 'inventory_edit',
            ],
            [
                'id'    => 63,
                'title' => 'inventory_show',
            ],
            [
                'id'    => 64,
                'title' => 'inventory_delete',
            ],
            [
                'id'    => 65,
                'title' => 'inventory_access',
            ],
            [
                'id'    => 66,
                'title' => 'country_create',
            ],
            [
                'id'    => 67,
                'title' => 'country_edit',
            ],
            [
                'id'    => 68,
                'title' => 'country_show',
            ],
            [
                'id'    => 69,
                'title' => 'country_delete',
            ],
            [
                'id'    => 70,
                'title' => 'country_access',
            ],
            [
                'id'    => 71,
                'title' => 'state_create',
            ],
            [
                'id'    => 72,
                'title' => 'state_edit',
            ],
            [
                'id'    => 73,
                'title' => 'state_show',
            ],
            [
                'id'    => 74,
                'title' => 'state_delete',
            ],
            [
                'id'    => 75,
                'title' => 'state_access',
            ],
            [
                'id'    => 76,
                'title' => 'city_create',
            ],
            [
                'id'    => 77,
                'title' => 'city_edit',
            ],
            [
                'id'    => 78,
                'title' => 'city_show',
            ],
            [
                'id'    => 79,
                'title' => 'city_delete',
            ],
            [
                'id'    => 80,
                'title' => 'city_access',
            ],
            [
                'id'    => 81,
                'title' => 'user_product_favorite_show',
            ],
            [
                'id'    => 82,
                'title' => 'user_product_favorite_delete',
            ],
            [
                'id'    => 83,
                'title' => 'user_product_favorite_access',
            ],
            [
                'id'    => 84,
                'title' => 'delivery_create',
            ],
            [
                'id'    => 85,
                'title' => 'delivery_edit',
            ],
            [
                'id'    => 86,
                'title' => 'delivery_show',
            ],
            [
                'id'    => 87,
                'title' => 'delivery_delete',
            ],
            [
                'id'    => 88,
                'title' => 'delivery_access',
            ],
            [
                'id'    => 89,
                'title' => 'address_show',
            ],
            [
                'id'    => 90,
                'title' => 'address_delete',
            ],
            [
                'id'    => 91,
                'title' => 'address_access',
            ],
            [
                'id'    => 92,
                'title' => 'status_create',
            ],
            [
                'id'    => 93,
                'title' => 'status_edit',
            ],
            [
                'id'    => 94,
                'title' => 'status_show',
            ],
            [
                'id'    => 95,
                'title' => 'status_delete',
            ],
            [
                'id'    => 96,
                'title' => 'status_access',
            ],
            [
                'id'    => 97,
                'title' => 'order_show',
            ],
            [
                'id'    => 98,
                'title' => 'order_delete',
            ],
            [
                'id'    => 99,
                'title' => 'order_access',
            ],
            [
                'id'    => 100,
                'title' => 'rate_show',
            ],
            [
                'id'    => 101,
                'title' => 'rate_delete',
            ],
            [
                'id'    => 102,
                'title' => 'rate_access',
            ],
            [
                'id'    => 103,
                'title' => 'payment_method_create',
            ],
            [
                'id'    => 104,
                'title' => 'payment_method_edit',
            ],
            [
                'id'    => 105,
                'title' => 'payment_method_show',
            ],
            [
                'id'    => 106,
                'title' => 'payment_method_delete',
            ],
            [
                'id'    => 107,
                'title' => 'payment_method_access',
            ],
            [
                'id'    => 108,
                'title' => 'order_detail_show',
            ],
            [
                'id'    => 109,
                'title' => 'order_detail_delete',
            ],
            [
                'id'    => 110,
                'title' => 'order_detail_access',
            ],
            [
                'id'    => 111,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
