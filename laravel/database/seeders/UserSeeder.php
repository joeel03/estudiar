<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
 
class UserSeeder extends Seeder
{
   public function run()
   {
       $admin = new User([
           'name'      => '2daw05',
           'email'     => '2daw.equip05@fp.insjoaquimmir.cat',
           'password'  => 'xavijoel',
       ]);
       $admin->save();
   }
}
