<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-white">Welcome to Your Wellness Hub</h2>
        </template>

        <div class="py-12 bg-gradient-to-br from-black to-green-900 min-h-screen">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Navigation Cards -->
                    <a href="/assessment" class="block p-6 bg-green-800 text-white shadow-md rounded-lg hover:bg-green-700">
                        <h3 class="text-lg font-semibold">Take an Assessment</h3>
                        <p class="text-sm mt-2">Understand your mental wellness with our guided self-assessment.</p>
                    </a>
                    <a href="/about" class="block p-6 bg-green-800 text-white shadow-md rounded-lg hover:bg-green-700">
                        <h3 class="text-lg font-semibold">About Us</h3>
                        <p class="text-sm mt-2">Learn more about our mission and how we support mental well-being.</p>
                    </a>
                </div>
                
                <!-- Profile Section -->
                <div class="mt-10 bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900">Your Profile</h3>
                    <p class="text-sm text-gray-600">Manage your settings and track your journey.</p>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <footer class="bg-green-900 text-white text-center p-4 mt-10">
            <p>&copy; 2025 Your Wellness Hub. All rights reserved.</p>
        </footer>
    </AuthenticatedLayout>
</template>
