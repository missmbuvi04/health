<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Professional;

class ProfessionalSeeder extends Seeder
{
    public function run()
    {
        Professional::insert([
            // [
            //     'name' => 'Dr. Jane Doe',
            //     'specialization' => 'Psychologist',
            //     'email' => 'jane@example.com',
            //     'phone' => '1234567890',
            //     'bio' => 'Experienced psychologist specializing in mental health.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            [
                'name' => 'Dr. John Smith',
                'specialization' => 'Cardiologist',
                'email' => 'john@example.com',
                'phone' => '0987654321',
                'bio' => 'Expert in heart health and cardiovascular diseases.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Lisa Brown',
                'specialization' => 'Dermatologist',
                'email' => 'lisa@example.com',
                'phone' => '1122334455',
                'bio' => 'Skincare expert specializing in acne and eczema treatment.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Mike Wilson',
                'specialization' => 'Neurologist',
                'email' => 'mike@example.com',
                'phone' => '6677889900',
                'bio' => 'Specialist in brain and nervous system disorders.',
                'created_at' => now(),
                'updated_at' => now(),
            ],      
            
        ]);
    }
}
