import './bootstrap';

import { createApp } from 'vue';
import App from '../js/views/oneTimeUseComponents/App.vue';
import router from '../js/router/index';

const app = createApp(App);
app.use(router);

app.mount('#app');