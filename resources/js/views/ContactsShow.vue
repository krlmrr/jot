<template>
    <div>
        <div class="flex justify-between">
            <div class="text-blue-400"> 
                < Back 
            </div>
            <div>
                <router-link to="'/contact/' + contact.id + '/edit'" class="px-4 py-2 mr-2 rounded text-sm text-green-500 border border-green-500 text-sm font-bold">Edit</router-link>
                <a href="#" class="px-4 py-2 border border-red-500 rounded text-sm font-bold text-red-500">Delete</a>
            </div>
        </div>

        <div class="flex items-center pt-6">
            <UserCircle :name="contact.name"/>

            <p class="pl-5 text-xl">{{contact.name}}</p>
        </div>
        
        <p class="pt-6 text-gray-600 font-bold uppercase text-sm">Contact</p>
            <p class="pt-2 text-blue-400"> {{contact.email}} </p>
            
        <p class="pt-6 text-gray-600 font-bold uppercase text-sm">Company</p>
            <p class="pt-2 text-blue-400"> {{contact.company}} </p>

        <p class="pt-6 text-gray-600 font-bold uppercase text-sm">Birthday</p>
            <p class="pt-2 text-blue-400"> {{contact.birthday}} </p>

    </div>
</template>

<script>
    import UserCircle from '../components/UserCircle';
    export default{
        name: "ContactShow",

        components: {
            UserCircle,
        },

        mounted() {
            axios.get('/api/contacts/' + this.$route.params.id)
                .then(response => {
                    this.contact = response.data.data;
                })
                .catch(errors => {

                })
        },

        data: function() {
            return {
                contact: null,
            }
        }
    }
</script>

<style scoped>

</style>