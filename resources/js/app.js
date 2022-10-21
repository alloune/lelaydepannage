require('./bootstrap');

import { createApp } from 'vue';
import AddVehicule from './components/AddVehicule.vue';

import { CAlert } from '@coreui/vue';
import 'bootstrap/dist/css/bootstrap.min.css'


createApp({
    components: {
        AddVehicule,
    }
}).mount('#app');
