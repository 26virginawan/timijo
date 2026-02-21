<?php

namespace Database\Seeders;

use App\Models\List_ob;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class List_OBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        List_ob::create([
            'name' => 'Ketersediaan tisu R. Meeting',
            'keterangan' => 'setiap pagi',
            'zona_ob_id' => '1',
        ]);
        List_ob::create([
            'name' => 'Pengharum ruangan
',
            'keterangan' => 'setiap pagi',
            'zona_ob_id' => '1',
        ]);
        List_ob::create([
            'name' => 'Ketersediaan galon
',
            'keterangan' => 'setiap pagi',
            'zona_ob_id' => '1',
        ]);
        List_ob::create([
            'name' => 'Kebersihan meja meeting & display
',
            'keterangan' => 'setiap pagi',
            'zona_ob_id' => '1',
        ]);
        List_ob::create([
            'name' => 'Kebersihan meja saji
',
            'keterangan' => 'setiap pagi',
            'zona_ob_id' => '1',
        ]);
        List_ob::create([
            'name' => 'Ketersediaan gelas bersih
',
            'keterangan' => 'setiap pagi',
            'zona_ob_id' => '1',
        ]);
        List_ob::create([
            'name' => 'Kebersihan lantai R. Meeting',
            'keterangan' => 'setiap pagi',
            'zona_ob_id' => '1',
        ]);
        List_ob::create([
            'name' => 'Air minum office
',
            'keterangan' => 'Kebersihan lantai
',
            'zona_ob_id' => '2',
        ]);
        List_ob::create([
            'name' => 'Kebersihan lantai
',
            'keterangan' => 'setiap pagi',
            'zona_ob_id' => '2',
        ]);
        List_ob::create([
            'name' => 'Kebersihan meja office
',
            'keterangan' => 'setiap pagi',
            'zona_ob_id' => '2',
        ]);
        List_ob::create([
            'name' => 'Air minum office
',
            'keterangan' => 'setiap pagi',
            'zona_ob_id' => '2',
        ]);
        List_ob::create([
            'name' => 'Ketersediaan galon
',
            'keterangan' => 'setiap pagi',
            'zona_ob_id' => '2',
        ]);
        List_ob::create([
            'name' => 'Lampu ofice
',
            'keterangan' => 'setiap pagi',
            'zona_ob_id' => '2',
        ]);
        List_ob::create([
            'name' => 'Kebersihan kaca',
            'keterangan' => '1x sehari',
            'zona_ob_id' => '2',
        ]);
        List_ob::create([
            'name' => 'Pengharum ruangan',
            'keterangan' => 'Setiap pagi',
            'zona_ob_id' => '3',
        ]);
        List_ob::create([
            'name' => 'Ketersediaan tisu',
            'keterangan' => '1 jam sekali',
            'zona_ob_id' => '3',
        ]);
        List_ob::create([
            'name' => 'Kebersihan lantai',
            'keterangan' => '1 jam sekali',
            'zona_ob_id' => '3',
        ]);
        List_ob::create([
            'name' => 'Kebersihan dinding',
            'keterangan' => '1 jam sekali',
            'zona_ob_id' => '3',
        ]);
        List_ob::create([
            'name' => 'Kebersihan kaca cermin',
            'keterangan' => '1 jam sekali',
            'zona_ob_id' => '3',
        ]);
        List_ob::create([
            'name' => 'Kebersihan meja meeting & display produk',
            'keterangan' => 'Setiap Malam',
            'zona_ob_id' => '4',
        ]);
        List_ob::create([
            'name' => 'Kebersihan meja saji
',
            'keterangan' => 'Setiap Malam',
            'zona_ob_id' => '4',
        ]);
        List_ob::create([
            'name' => 'Pengharum ruangan
',
            'keterangan' => 'Setiap Malam',
            'zona_ob_id' => '4',
        ]);
        List_ob::create([
            'name' => 'Ketersediaan gelas bersih',
            'keterangan' => 'Setiap Malam',
            'zona_ob_id' => '4',
        ]);
        List_ob::create([
            'name' => 'Kebersihan lantai R. Meeting',
            'keterangan' => 'Setiap Malam',
            'zona_ob_id' => '4',
        ]);
        List_ob::create([
            'name' => 'Kebersihan lantai',
            'keterangan' => 'Pukul 13.00',
            'zona_ob_id' => '5',
        ]);
        List_ob::create([
            'name' => 'Sanitasi peralatan dapur',
            'keterangan' => '-',
            'zona_ob_id' => '5',
        ]);
        List_ob::create([
            'name' => 'Pengambilan sampah office
',
            'keterangan' => '-',
            'zona_ob_id' => '5',
        ]);
        List_ob::create([
            'name' => 'Kebersihan meja office
',
            'keterangan' => '-',
            'zona_ob_id' => '5',
        ]);
        List_ob::create([
            'name' => 'Siram taman area parkir mobil
',
            'keterangan' => '-',
            'zona_ob_id' => '5',
        ]);
        List_ob::create([
            'name' => 'Hard cleaning toilet',
            'keterangan' => 'Malam',
            'zona_ob_id' => '6',
        ]);
        List_ob::create([
            'name' => 'Cuci Taplak Meja Saji
',
            'keterangan' => 'Sabtu',
            'zona_ob_id' => '7',
        ]);
        List_ob::create([
            'name' => 'Cuci lap tangan

',
            'keterangan' => 'Sabtu',
            'zona_ob_id' => '7',
        ]);
        List_ob::create([
            'name' => 'Cuci jas lab

',
            'keterangan' => 'senin & rabu',
            'zona_ob_id' => '7',
        ]);
        List_ob::create([
            'name' => 'Kelambu',
            'keterangan' => '-',
            'zona_ob_id' => '7',
        ]);
    }
}
