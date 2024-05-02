import './bootstrap';
import '../css/app.css';

import { createApp } from 'vue';
import IncrementCounter from './components/IncrementCounter.vue';
import FeedbackForm from './components/FeedbackForm.vue';

createApp({})
    .component('FeedbackForm', FeedbackForm)
    // .component('IncrementCounter', IncrementCounter)
    .mount('#app')
