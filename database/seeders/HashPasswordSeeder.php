<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HashPasswordSeeder extends Seeder
{
    public function run()
    {
        // Ambil data siswa dengan password yang belum di-hash
        $users = DB::table('users')
                    ->whereRaw('LENGTH(password) < 60') // Menemukan password yang belum di-hash
                    ->get();

        foreach ($users as $user) {
            // Hash password dengan bcrypt
            $hashedPassword = Hash::make($user->password);

            // Update password di database dengan yang sudah di-hash
            DB::table('users')
                ->where('id', $user->id)
                ->update(['password' => $hashedPassword]);
        }
    }
}
