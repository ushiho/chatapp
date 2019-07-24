
import Vue from 'vue'

import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)

require('./bootstrap');

window.Vue = require('vue');


Vue.component('message', require('./components/message.vue').default);


const app = new Vue({
    el: '#app',
    data:{
        message: "",
        chat: {
            messages: [],
        },
    },
    methods: {
        'sendMsg': function(){
            if (this.message.length != 0) {
                this.chat.messages.push(this.message);
                this.message = "";
            }
        },
    },
    mounted: function(){
        Echo.private('chat')
        .listen('App.Events.ChatEvent', (e) => {
            console.log("hola from listen");
        });
        console.log("hola from mounted");
    }
});