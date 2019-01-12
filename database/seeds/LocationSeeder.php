<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //-6.202404, 106.780665
        $locations=[
          ['name'=>'Rocky Anggrek','address'=>'Jl. Anggrek Cakra No.17, RT.4/RW.6, Sukabumi Utara, Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11540','longitude'=>-6.202404,'latitude'=>106.780665,'type_id'=>1,'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
          ['name'=>'Bubur Ayam Pasundan','address'=>'Jl. Anggrek Cakra No.27, RT.4/RW.6, Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11540','longitude'=>-6.202524,'latitude'=>106.779627,'type_id'=>1,'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
          ['name'=>'Kwetiau 79','address'=>'Jalan Anggrek Garuda, Cakra No, 17, Kel Palmerah, Kemangisan, RT.4/RW.6, Sukabumi Utara, Kb. Jeruk, DKI Jakarta, Daerah Khusus Ibukota Jakarta 11450','longitude'=>-6.202432,'latitude'=>106.780948,'type_id'=>1,'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
          ['name'=>'Lawson Anggrek','address'=>'Jl. Rw. Belong No.82, RT.4/RW.6, Sukabumi Utara, Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11540','longitude'=>-6.202206,'latitude'=>106.782615,'type_id'=>3,'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
          ['name'=>'Lawson Syahdan','address'=>'Jalan Kh. Syahdan No.9, RT.6/RW.12, Palmerah, RT.6/RW.12, Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480','longitude'=>-6.200614,'latitude'=>106.784813,'type_id'=>3,'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
          ['name'=>'Cookie Laundry','address'=>'Gang Keluarga no.36CL, Palmerah, Binus, jakarta barat, RT.6/RW.12, Palmerah, RT.6/RW.12, Palmerah, West Jakarta City, Jakarta 11480','longitude'=>-6.200566,'latitude'=>106.783584,'type_id'=>2,'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
          ['name'=>'Rocky Syahdan','address'=>'Jl. U Raya No.1, RT.2/RW.11, Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480','longitude'=>-6.200911,'latitude'=>106.785032,'type_id'=>2,'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
          ['name'=>'Warung Jatim','address'=>'Jalan KH. Syahdan No. 10B, Palmerah, RT.7/RW.12, Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480','longitude'=>-6.200870,'latitude'=>106.783945,'type_id'=>2,'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
          ['name'=>'Kuali','address'=>'Jl. Kyai H. Syahdan No.2, RT.2/RW.12, Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480','longitude'=>-6.200494,'latitude'=>106.786411,'type_id'=>2,'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
        ];
        \App\Location::insert($locations);
    }
}
