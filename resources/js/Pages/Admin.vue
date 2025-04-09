<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

const form = ref({
    title: '',
    description: '',
    url: ''
});

const submit = () => {
    router.post('/admin/resources', form.value, {
        onSuccess: () => {
            form.value.title = '';
            form.value.description = '';
            form.value.url = '';
        }
    });
};
</script>

<template>
    <div class="min-h-screen flex flex-col bg-gray-900 text-white">
        <!-- Header -->
        <header class="bg-green-700 py-4 px-6 shadow">
            <h1 class="text-2xl font-bold">Admin Panel - Add Resource</h1>
        </header>

        <!-- Main Content -->
        <main class="flex-grow flex justify-center items-center px-4">
            <div class="w-full max-w-3xl bg-gray-800 shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 text-green-400">Add a New Resource</h2>
                
                <form @submit.prevent="submit" class="space-y-4">
                    <div>
                        <label class="block text-green-300 font-semibold">Title</label>
                        <input v-model="form.title" type="text" class="w-full border p-2 rounded bg-gray-700 text-white focus:ring focus:ring-green-400" required />
                    </div>

                    <div>
                        <label class="block text-green-300 font-semibold">Description</label>
                        <textarea v-model="form.description" class="w-full border p-2 rounded bg-gray-700 text-white focus:ring focus:ring-green-400" required></textarea>
                    </div>

                    <div>
                        <label class="block text-green-300 font-semibold">URL</label>
                        <input v-model="form.url" type="url" class="w-full border p-2 rounded bg-gray-700 text-white focus:ring focus:ring-green-400" required />
                    </div>

                    <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 rounded hover:bg-green-800 transition">
                        Add Resource
                    </button>
                </form>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-green-700 text-white text-center py-3">
            <p>&copy; 2025 Health Resources | All Rights Reserved</p>
        </footer>
    </div>
</template>
