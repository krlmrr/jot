import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from "./components/ExampleComponent.vue";
import ContactsIndex from "./views/ContactsIndex.vue";
import ContactsCreate from "./views/ContactsCreate.vue";
import ContactsShow from "./views/ContactsShow.vue";
import ContactsEdit from "./views/ContactsEdit.vue";
import BirthdaysIndex from "./views/BirthdaysIndex.vue";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        { path : '/', component : ExampleComponent },
        { path : '/contacts', component : ContactsIndex },
        { path : '/contacts/create', component : ContactsCreate },
        { path : '/contacts/:id', component : ContactsShow },
        { path : '/contacts/:id/edit', component : ContactsEdit },
        
        { path : '/birthdays', component : BirthdaysIndex },
    ],
    mode : 'history'
});