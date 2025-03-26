
<template>
    <div class="container">
      <h2 class="text-lg font-bold mb-4">Add a Resource</h2>
      
      <form @submit.prevent="submitResource">
        <div class="mb-4">
          <label class="block font-semibold">Title</label>
          <input v-model="form.title" type="text" class="border p-2 w-full rounded">
        </div>
  
        <div class="mb-4">
          <label class="block font-semibold">Description</label>
          <textarea v-model="form.description" class="border p-2 w-full rounded"></textarea>
        </div>
  
        <div class="mb-4">
          <label class="block font-semibold">URL</label>
          <input v-model="form.url" type="text" class="border p-2 w-full rounded">
        </div>
  
        <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">
          Add Resource
        </button>
      </form>
  
      <p v-if="successMessage" class="text-green-600 mt-4">{{ successMessage }}</p>
    </div>
  </template>
  
  <script>
  import { ref } from 'vue';
  import { router } from '@inertiajs/vue3';
  
  export default {
    setup() {
      const form = ref({
        title: '',
        description: '',
        url: ''
      });
  
      const successMessage = ref('');
  
      const submitResource = () => {
        router.post('/admin/resources', form.value, {
          onSuccess: () => {
            successMessage.value = 'Resource added successfully!';
            form.value = { title: '', description: '', url: '' }; // Reset form
          },
          onError: (errors) => {
            console.error(errors);
          }
        });
      };
  
      return { form, submitResource, successMessage };
    }
  };
  </script>
  
  <style scoped>
  .container {
    max-width: 600px;
    margin: auto;
    padding: 20px;
  }
  </style>
  