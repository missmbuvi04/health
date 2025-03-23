<template>
    <div class="bg-gradient-to-b from-green-900 to-black min-h-screen text-white">
        <div class="max-w-4xl mx-auto p-8">
            <h1 class="text-3xl font-bold text-center">Mental Health Resources</h1>
            
            <p class="text-center mt-4">Explore these resources to support your mental well-being.</p>
            
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div v-for="resource in resources" :key="resource.id" class="bg-white text-black p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold">{{ resource.title }}</h2>
                    <p class="mt-2">{{ resource.description }}</p>
                    <a :href="resource.link" target="_blank" class="mt-4 inline-block bg-blue-600 hover:bg-blue-500 text-white px-4 py-2 rounded">Read More</a>
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
            resources: [
                { id: 1, title: "Managing Stress", description: "Learn effective ways to manage and reduce stress in daily life.", link: "https://www.stress.org" },
                { id: 2, title: "Understanding Anxiety", description: "An in-depth guide on anxiety and how to cope with it.", link: "https://www.anxiety.org" },
                { id: 3, title: "Meditation Techniques", description: "Discover meditation techniques to improve your mental health.", link: "https://www.headspace.com" },
                { id: 4, title: "Healthy Sleep Habits", description: "Learn about the importance of sleep and how to develop healthy habits.", link: "https://www.sleepfoundation.org" }
            ]
        };
    }
};
</script>
