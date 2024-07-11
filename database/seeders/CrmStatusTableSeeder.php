<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2024-06-03 11:38:03',
                'updated_at' => '2024-06-03 11:38:03',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2024-06-03 11:38:03',
                'updated_at' => '2024-06-03 11:38:03',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2024-06-03 11:38:03',
                'updated_at' => '2024-06-03 11:38:03',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
