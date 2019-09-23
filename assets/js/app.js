import Vue from 'vue';
import App from "./components/App.vue";

const $ = require('jquery');

var dataURL = 'https://jsonplaceholder.typicode.com/posts';

const app = new Vue({
    el: '#epl',
    data: {
        posts: [] // initialize empty array
    },
    mounted() { // when the Vue app is booted up, this is run automatically.

        var self = this // create a closure to access component in the callback below
        $.getJSON(dataURL, function(data) {
            self.posts = data;
        });

    },

    render: h => h(App)
})
app.posts = 'Hello there'


