<?php


namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Resource;

class ResourceSeeder extends Seeder
{
    public function run()
    {
        Resource::insert([
            [
                'title' => 'Meditation techniques',
                'description' => 'Discover meditation techniques to improve your mental health.',
                'url' => "https://www.headspace.com" ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Healthy sleeping habits',
                'description' => 'Learn about the importance of sleep and how to develop healthy habits.',
                'url' => "https://www.sleepfoundation.org",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Understanding anxiety',
                'description' => 'An in-depth guide on anxiety and how to cope with it.',
                'url' => "https://www.anxiety.org",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Managing Stress',
                'description' => 'Learn effective ways to manage and reduce stress in daily life..',
                'url' => "https://www.stress.org",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

       