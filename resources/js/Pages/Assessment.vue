<template>
  <div class="bg-gradient-to-b from-green-900 to-black min-h-screen text-white">
      <div class="max-w-4xl mx-auto p-8">
          <h1 class="text-3xl font-bold text-center">Mental Health Assessment</h1>
          
          <p class="text-center mt-4">Take this quick assessment to check your mental well-being.</p>
          
          <div class="mt-6 bg-white text-black p-6 rounded-lg shadow-lg">
              <form @submit.prevent="calculateResults">
                  <div v-for="(question, index) in questions" :key="index" class="mb-4">
                      <p class="font-semibold">{{ question.text }}</p>
                      <div class="mt-2">
                          <label v-for="(option, i) in question.options" :key="i" class="block">
                              <input type="radio" :name="'q' + index" v-model="answers[index]" :value="option.value" class="mr-2"> {{ option.text }}
                          </label>
                      </div>
                  </div>
                  <button type="submit" class="mt-4 bg-green-600 hover:bg-green-500 text-white px-6 py-2 rounded-md">Submit Assessment</button>
              </form>
          </div>
          
          <div v-if="showResults" class="mt-6 text-center">
              <p v-if="score > 5" class="text-lg font-bold text-red-500">Your score is high. It is recommended that you seek professional help.</p>
              <p v-else class="text-lg font-bold text-green-400">Your score is within a safe range. Explore our resources for support.</p>
              
              <<div class="mt-4 flex justify-center gap-4">
    <a v-if="score > 5" href="/professionals" class="bg-red-600 hover:bg-red-500 text-white px-4 py-2 rounded">
        Find a Professional
    </a>
    <a v-else href="/resources" class="bg-blue-600 hover:bg-blue-500 text-white px-4 py-2 rounded">
        Explore Resources
    </a>
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
          questions: [
              { text: "How often do you feel overwhelmed?", options: [{ text: "Rarely", value: 1 }, { text: "Sometimes", value: 2 }, { text: "Often", value: 3 }] },
              { text: "Do you struggle with sleep?", options: [{ text: "No", value: 1 }, { text: "Occasionally", value: 2 }, { text: "Frequently", value: 3 }] },
              { text: "Do you feel socially withdrawn?", options: [{ text: "No", value: 1 }, { text: "Sometimes", value: 2 }, { text: "Yes", value: 3 }] },
              { text: "How often do you experience mood swings?", options: [{ text: "Rarely", value: 1 }, { text: "Sometimes", value: 2 }, { text: "Frequently", value: 3 }] },
              { text: "Do you find joy in things you used to enjoy?", options: [{ text: "Yes", value: 1 }, { text: "Sometimes", value: 2 }, { text: "No", value: 3 }] }
          ],
          answers: {},
          score: 0,
          showResults: false
      };
  },
  methods: {
      calculateResults() {
          this.score = Object.values(this.answers).reduce((acc, val) => acc + val, 0);
          this.showResults = true;
      }
  }
};
</script>
