<?php

use Illuminate\Database\Seeder;

class LocationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types=[
          ['type'=>'Restaurant','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
          ['type'=>'Laundry','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
          ['type'=>'Convenience Store','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
        ];

        \App\LocationType::insert($types);
    }
}
