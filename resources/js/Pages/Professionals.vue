<template>
    <div class="bg-gradient-to-b from-green-900 to-black min-h-screen text-white">
        <div class="max-w-4xl mx-auto p-8">
            <h1 class="text-3xl font-bold text-center">Meet Our Professionals</h1>
            
            <p class="text-center mt-4">Book an appointment with our experienced mental health professionals.</p>
            
            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div v-for="(professional, index) in professionals" :key="index" class="bg-white text-black p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold">{{ professional.name }}</h2>
                    <p class="mt-2">{{ professional.specialization }}</p>
                    <p class="mt-1 text-sm text-gray-600">{{ professional.experience }} years of experience</p>
                    <button class="mt-4 bg-green-600 hover:bg-green-500 text-white px-4 py-2 rounded" @click="bookAppointment(professional.name)">
                        Book Appointment
                    </button>
                </div>
            </div>
        </div>
        
        <footer class="mt-10 p-4 text-center bg-black text-white">
            <p>&copy; 2024 Mental Wellness. All rights reserved.</p>
        </footer>
    </div>
</template>

<script>
export default {
    data() {
        return {
            professionals: [
                { name: "Dr. Jane Smith", specialization: "Clinical Psychologist", experience: 10 },
                { name: "Dr. John Doe", specialization: "Counseling Therapist", experience: 8 },
                { name: "Dr. Emily White", specialization: "Psychiatrist", experience: 12 },
                { name: "Dr. Michael Brown", specialization: "Behavioral Therapist", experience: 9 }
            ]
        };
    },
    methods: {
        bookAppointment(professionalName) {
            alert(`Appointment booked with ${professionalName}`);
        }
    }
};
</script>
