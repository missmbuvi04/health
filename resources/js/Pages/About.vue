<script setup>
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="About Us" />

    <div class="bg-gradient-to-br from-black to-green-900 min-h-screen text-white">
        <div class="container mx-auto px-6 py-12">
            <h1 class="text-4xl font-bold text-center">About Us</h1>
            <p class="text-center text-lg mt-4">Empowering minds, fostering wellness.</p>

            <div class="mt-10 max-w-4xl mx-auto space-y-8">
                <section>
                    <h2 class="text-2xl font-semibold">Our Mission</h2>
                    <p class="mt-2 text-gray-300">We are dedicated to providing accessible mental health resources and support to help individuals lead fulfilling lives.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold">Our Vision</h2>
                    <p class="mt-2 text-gray-300">To create a world where mental well-being is a priority, and everyone has the tools they need to thrive.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold">Our Goals</h2>
                    <ul class="list-disc list-inside mt-2 text-gray-300">
                        <li>Provide free and easy-to-access mental health assessments.</li>
                        <li>Create a supportive community for emotional well-being.</li>
                        <li>Educate individuals on mental wellness and self-care.</li>
                    </ul>
                </section>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="bg-green-800 py-10 text-center">
            <h2 class="text-2xl font-semibold">Contact Us</h2>
            <p class="mt-2">Have questions? Reach out to us!</p>
            <p class="mt-2">📧 Email: <a href="mailto:support@mentalwellness.com" class="underline">support@mentalwellness.com</a></p>
            <p>📞 Phone: +123 456 7890</p>
        </div>

        <!-- Footer -->
        <footer class="bg-green-900 text-white text-center p-4 mt-10">
            <p>&copy; 2025 Your Wellness Hub. All rights reserved.</p>
        </footer>
    </div>
</template>
