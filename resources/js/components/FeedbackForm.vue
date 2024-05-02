<script setup>
import { ref } from 'vue';
import axios from 'axios';

const form = ref({
    name: '',
    phone: '',
    message: ''
});

const submitForm = async () => {
    try {
        await axios.post('/feedback', form.value);
        alert('Feedback sent successfully!');
        form.value = { name: '', phone: '', message: '' };
    } catch (error) {
        alert('An error occurred.');
    }
};
</script>

<template>
    <form @submit.prevent="submitForm">
        <input v-model="form.name" type="text" placeholder="Your Name" required>
        <input v-model="form.phone" type="text" placeholder="Your Phone" required>
        <textarea v-model="form.message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Feedback</button>
    </form>
</template>
