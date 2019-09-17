import Vue from 'vue';
import App from './components/App';
require('../css/app.css');

 const $ = require('jquery');

const app = new Vue({
 el: '#app',
 render: h => h(App)
});
