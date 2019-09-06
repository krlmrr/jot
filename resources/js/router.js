import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from "./components/ExampleComponent.vue";
import ContactsCreate from "./views/ContactsCreate.vue";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        { path : '/', component : ExampleComponent },
        { path : '/contacts/create', component : ContactsCreate }
    ],
    mode : 'history'
});