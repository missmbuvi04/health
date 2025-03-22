<!-- <script>
import { Head, Link } from '@inertiajs/vue3';
  export default {
    data() {
      return {
        questions: [
          { text: "Over the last two weeks, how often have you felt happy and content?", answer: null },
          { text: "Over the last two weeks, how often have you had trouble sleeping due to stress or worry?", answer: null },
          { text: "Over the last two weeks, how often have you felt exhausted even after resting?", answer: null },
          { text: "Over the last two weeks, how often have you struggled to concentrate on daily tasks?", answer: null },
          { text: "Over the last two weeks, how often have you felt hopeless or deeply sad?", answer: null },
          { text: "Over the last two weeks, how often have you avoided social interactions due to stress or anxiety?", answer: null },
          { text: "Over the last two weeks, how often have you felt overwhelmed by your worries?", answer: null },
          { text: "Over the last two weeks, how often have you lost interest in activities you used to enjoy?", answer: null },
          { text: "Over the last two weeks, how often have you experienced sudden mood swings?", answer: null },
          { text: "Over the last two weeks, how often have you felt emotionally drained or mentally exhausted?", answer: null }
        ],
        result: null,
        message: ""
      };
    },
    methods: {
      calculateScore() {
        let totalScore = this.questions.reduce((sum, q) => sum + (q.answer || 0), 0);
        let averageScore = totalScore / this.questions.length;
  
        this.result = averageScore;
        if (averageScore >= 3.75) {
          this.message = "Your mental health score is high. Consider speaking with a professional.";
        } else {
          this.message = "Your mental health score is manageable. Check out our mental health resources.";
        }
      }
    }
  };
  </script>
  

<template>
    <header class="bg-blue-900 text-white py-4 px-6 flex justify-between items-center">
        <div class="flex items-center space-x-3">

          <img src="public/images/Logo.png" alt="Logo" class="h-10" />
          <span class="text-xl font-bold text-yellow-500">Mental Health Resoirce Hub</span>
        </div>
        <nav class="flex space-x-6">
          <div class="space-x-4">
          <Link href="/" class="text-white-700 hover:text-blue-600">Home</Link>
          <Link href="/Resources" class="text-white-700 hover:text-blue-600">Resources</Link>
          <Link href="/Assessments" class="text-white-700 hover:text-blue-600">Assessments</Link>
          <Link href="/about" class="text-white-700 hover:text-blue-600">About</Link>
          <Link href="/contact" class="text-white-700 hover:text-blue-600">Contact</Link>
        </div>
        </nav>
        </header>
    <section class="p-6 max-w-2xl mx-auto">
      <h2 class="text-xl font-semibold mb-4">Mental Health Mood Check</h2>
      <form @submit.prevent="calculateScore">
        <div v-for="(question, index) in questions" :key="index" class="mb-4">
          <p class="text-lg">{{ question.text }}</p>
          <div class="flex gap-2 mt-2">
            <label v-for="num in 5" :key="num" class="flex items-center">
              <input type="radio" :name="'question' + index" :value="num" v-model="question.answer" class="hidden" />
              <span class="px-3 py-1 rounded-md cursor-pointer" 
                    :class="{'bg-blue-500 text-white': question.answer === num, 'bg-gray-200': question.answer !== num}">
                {{ num }}
              </span>
            </label>
          </div>
          <p class="text-sm text-gray-600 mt-1">
            <span class="font-semibold">1</span> = Never, 
            <span class="font-semibold">5</span> = Always
          </p>
        </div>
  
        <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded-md">Submit</button>
      </form>
  
      <div v-if="result !== null" class="mt-6 p-4 border rounded-lg">
        <h3 class="text-lg font-semibold">Your Result:</h3>
        <p class="mt-2">{{ message }}</p>
        <div v-if="result >= 3.75">
          <a href="https://www.example.com/book-appointment" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md inline-block">
            Book an Appointment
          </a>
        </div>
        <div v-else>
          <a href="/resources" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md inline-block">
            View Mental Health Resources
          </a>
        </div>
      </div>
    </section>
     <!-- Footer -->
     <!-- <footer class="bg-gray-900 text-white text-center p-4">
        &copy; 2025 My App. All rights reserved.
      </footer>
  </template>
   --> -->
   <template>
    <div class="bg-gradient-to-b from-green-900 to-black min-h-screen text-white p-6">
        <!-- Header -->
        <header class="text-center mb-8">
            <h1 class="text-4xl font-bold">Mental Health Assessment</h1>
            <p class="mt-2 text-lg">Take this short quiz to assess your mental well-being.</p>
        </header>

        <!-- View Resources Section -->
        <section class="bg-green-800 p-6 rounded-lg shadow-lg mb-8">
            <h2 class="text-2xl font-semibold">Mental Health Resources</h2>
            <p class="mt-2">Explore these resources to support your mental well-being.</p>
            <ul class="mt-4 list-disc pl-5">
                <li><a href="#" class="text-indigo-300 hover:underline">Mindfulness & Meditation</a></li>
                <li><a href="#" class="text-indigo-300 hover:underline">Stress Management Tips</a></li>
                <li><a href="#" class="text-indigo-300 hover:underline">Online Counseling Services</a></li>
            </ul>
        </section>

        <!-- Assessment Quiz -->
        <section class="bg-green-700 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold">Take the Assessment</h2>
            <p class="mt-2">Answer the following questions honestly.</p>

            <div v-if="!showResults">
                <div v-for="(question, index) in questions" :key="index" class="mt-4">
                    <p class="text-lg">{{ question.text }}</p>
                    <div class="mt-2">
                        <label v-for="(option, i) in question.options" :key="i" class="block">
                            <input type="radio" :name="'q' + index" :value="option.value" v-model="answers[index]" />
                            {{ option.text }}
                        </label>
                    </div>
                </div>

                <button @click="calculateScore" class="mt-6 bg-indigo-500 px-4 py-2 rounded-md shadow-md hover:bg-indigo-400">
                    Submit Assessment
                </button>
            </div>

            <!-- Results Section -->
            <div v-if="showResults" class="mt-6">
                <h3 class="text-xl font-bold">Assessment Results</h3>
                <p class="mt-2">{{ resultMessage }}</p>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    data() {
        return {
            questions: [
                { text: "How often do you feel overwhelmed?", options: [
                    { text: "Rarely", value: 1 },
                    { text: "Sometimes", value: 2 },
                    { text: "Often", value: 3 },
                ]},
                { text: "Do you experience difficulty sleeping?", options: [
                    { text: "No", value: 1 },
                    { text: "Occasionally", value: 2 },
                    { text: "Frequently", value: 3 },
                ]},
                { text: "Do you feel anxious or worried most of the time?", options: [
                    { text: "No", value: 1 },
                    { text: "Sometimes", value: 2 },
                    { text: "Yes, a lot", value: 3 },
                ]},
            ],
            answers: [],
            showResults: false,
            resultMessage: "",
        };
    },
    methods: {
        calculateScore() {
            const score = this.answers.reduce((sum, value) => sum + (value || 0), 0);
            if (score >= 7) {
                this.resultMessage = "Your score suggests you may benefit from speaking with a professional.";
            } else {
                this.resultMessage = "Your results indicate mild concerns. You may explore our mental health resources for support.";
            }
            this.showResults = true;
        }
    }
};
</script>
