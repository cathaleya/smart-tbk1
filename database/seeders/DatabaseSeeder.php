<?php

namespace Database\Seeders;

use App\Models\CustomerType;
use App\Models\EkspedisiStatus;
use App\Models\Incot;
use App\Models\ItemUnit;
use App\Models\JenisSuratJalan;
use App\Models\Material;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\Sloc;
use App\Models\Transporter;
use App\Models\User;
use App\Models\VehicleType;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();



        Permission::factory()->create([
            'name' => 'Kontrol Pengguna',
        ]);
        Permission::factory()->create([
            'name' => 'Kontrol Delivery Order',
        ]);
        Permission::factory()->create([
            'name' => 'Warehouse',
        ]);

        Permission::factory()->create([
            'name' => 'Transport',
        ]);

        Role::factory()->create([
            'name' => 'Admin',
        ]);
        Role::factory()->create([
            'name' => 'Sales',
        ]);
        Role::factory()->create([
            'name' => 'tim transport',
        ]);
        Role::factory()->create([
            'name' => 'tim warehouse',
        ]);

        RolePermission::factory()->create([
            'role_id' => 1,
            'permission_id' => 1,
        ]);
        RolePermission::factory()->create([
            'role_id' => 1,
            'permission_id' => 2,
        ]);
        RolePermission::factory()->create([
            'role_id' => 2,
            'permission_id' => 1,
        ]);
        RolePermission::factory()->create([
            'role_id' => 2,
            'permission_id' => 2,
        ]);
        RolePermission::factory()->create([
            'role_id' => 1,
            'permission_id' => 3,
        ]);
        RolePermission::factory()->create([
            'role_id' => 3,
            'permission_id' => 3,
        ]);
        RolePermission::factory()->create([
            'role_id' => 1,
            'permission_id' => 4,
        ]);
        RolePermission::factory()->create([
            'role_id' => 4,
            'permission_id' => 4,
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => 6287788221533,
            'role_id' => 1,
            'gender' => 'L',
            'password' => bcrypt('123'),
        ]);
        User::factory()->create([
            'name' => 'Nanda Amelia',
            'email' => 'amelia@gmail.com',
            'phone' => 62812123232354,
            'role_id' => 2,
            'gender' => 'P',
            'password' => bcrypt('123'),
        ]);


        Material::factory()->create([
            'material_number' => '821408',
            'description' => 'Olera SHT 36-39 RSPO SG(0320) 1x20Kg Ctn'
        ]);

        Material::factory()->create([
            'material_number' => '812088',
            'description' => 'Padi MGRN (1123) 60x200G Sch.'
        ]);
        Material::factory()->create([
            'material_number' => '831601',
            'description' => 'I-soc Premium CF 41 SG.'
        ]);
        Material::factory()->create([
            'material_number' => '822779',
            'description' => 'Flagship SHT RSPOMB (E)(1223) 20Kg Ctn.'
        ]);

        Material::factory()->create([
            'material_number' => '822749',
            'description' => 'Flagship SHT AF (E)(0823) 20Kg Ctn.'
        ]);

        Material::factory()->create([
            'material_number' => '62134122323',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod consectetur nesciunt animi, omnis porro tenetur qui officiis veniam quam iusto.'
        ]);

        Transporter::factory()->create([
            'name' => 'CAKRAINDO',
            'transporter_id' => 312312312
        ]);

        Transporter::factory()->create([
            'name' => 'E-WAY',
            'transporter_id' => 3123123123
        ]);

        Transporter::factory()->create([
            'name' => 'BSA',
            'transporter_id' => 3123213124
        ]);

        Transporter::factory()->create([
            'name' => 'GLOVIS',
            'transporter_id' => 2131233121
        ]);



        Sloc::factory()->create([
            'name' => 'GBJ',
            'desc' => 'Gudang 1'
        ]);


        Incot::factory()->create([
            'name' => 'FOB',
            'desc' => 'peraturan 1'
        ]);

        Incot::factory()->create([
            'name' => 'FCO',
            'desc' => 'peraturan 2'
        ]);
        Incot::factory()->create([
            'name' => 'CIF',
            'desc' => 'peraturan 3'
        ]);

        ItemUnit::factory()->create([
            'name' => 'BOX',
            'desc' => 'satuan unit 1'
        ]);
        ItemUnit::factory()->create([
            'name' => 'PC',
            'desc' => 'satuan unit 2'
        ]);

        JenisSuratJalan::factory()->create([
            'name' => 'IIE',
            'desc' => 'Jenis surat jalan 1'
        ]);

        JenisSuratJalan::factory()->create([
            'name' => 'PO IIE',
            'desc' => 'Jenis surat jalan 2'
        ]);
        VehicleType::factory()->create([
            'name' => 'CDD',
            'desc' => 'tipe kendaraan 1'
        ]);
        VehicleType::factory()->create([
            'name' => 'DDD',
            'desc' => 'tipe kendaraan 2'
        ]);
        CustomerType::factory()->create([
            'name' => 'Branded Industry',
            'desc' => 'tipe 1'
        ]);

        CustomerType::factory()->create([
            'name' => 'Branded',
            'desc' => 'tipe 1'
        ]);

        EkspedisiStatus::factory()->create([
            'name' => 'order_processed',
            'desc' => 'Order diproses'
        ]);
        EkspedisiStatus::factory()->create([
            'name' => 'at_origin_hub',
            'desc' => 'Diterima di Gudang Asal'
        ]);
        EkspedisiStatus::factory()->create([
            'name' => 'in_transit',
            'desc' => 'Dalam perjalanan ke hub regional'
        ]);
        EkspedisiStatus::factory()->create([
            'name' => 'at_destination_hub',
            'desc' => 'Tiba di Gudang Tujuan'
        ]);
        EkspedisiStatus::factory()->create([
            'name' => 'out_for_delivery',
            'desc' => 'Dalam Pengantaran ke Alamat'
        ]);
        EkspedisiStatus::factory()->create([
            'name' => 'delivered',
            'desc' => 'Diterima oleh Penerima'
        ]);
        EkspedisiStatus::factory()->create([
            'name' => 'Fail',
            'desc' => 'Pengiriman gagal'
        ]);
    }
}
