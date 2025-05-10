<?php

namespace Database\Seeders;

use App\Models\CustomerType;
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
            'role_id' => 1,
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
            'material_number' => '8123123123',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod consectetur nesciunt animi, omnis porro tenetur qui officiis veniam quam iusto.'
        ]);

        Material::factory()->create([
            'material_number' => '62134123123',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod consectetur nesciunt animi, omnis porro tenetur qui officiis veniam quam iusto.'
        ]);

        Material::factory()->create([
            'material_number' => '62132123123',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod consectetur nesciunt animi, omnis porro tenetur qui officiis veniam quam iusto.'
        ]);

        Material::factory()->create([
            'material_number' => '62134122323',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod consectetur nesciunt animi, omnis porro tenetur qui officiis veniam quam iusto.'
        ]);

        Transporter::factory()->create([
            'name' => 'PT.indah Sentosa',
            'transporter_id' => 312312312
        ]);
    
        Transporter::factory()->create([
            'name' => 'PT.Sentosa Jaya',
            'transporter_id' => 3123123123
        ]);
 
        Transporter::factory()->create([
            'name' => 'PT.Haji makmur',
            'transporter_id' => 3123213124
        ]);
  
        Transporter::factory()->create([
            'name' => 'PT.Velocity',
            'transporter_id' => 2131233121
        ]);



        Sloc::factory()->create([
            'name' => 'GBJ',
            'desc' => 'Gudang 1'
        ]);
   
        Sloc::factory()->create([
            'name' => 'HBK',
            'desc' => 'Gudang 2'
        ]);
        Sloc::factory()->create([
            'name' => 'ABV',
            'desc' => 'Gudang 3'
        ]);
   
   
        Incot::factory()->create([
            'name' => 'CFF',
            'desc' => 'peraturan 1'
        ]);
     
        Incot::factory()->create([
            'name' => 'FCO',
            'desc' => 'peraturan 2'
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
    }
}
