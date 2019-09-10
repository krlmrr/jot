<template>
    <div>
        <form @submit.prevent="submitForm">
            <InputField name="name" label="Contact Name" :errors="errors" placeholder ="Contact Name" @update:field="form.name = $event"/>
            <InputField name="email" label="Contact Email" :errors="errors" placeholder ="Contact Email" @update:field="form.email = $event"/>
            <InputField name="company" label="Company" :errors="errors" placeholder ="Company" @update:field="form.company = $event"/>
            <InputField name="birthday" label="Birthday" :errors="errors" placeholder ="MM/DD/YYYY" @update:field="form.birthday = $event"/>

            <div class="flex justify-end">
                <button class="py-2 px-4 border text-red-700 rounded mr-5 hover:border-red-700">Cancel</button>
                <button class="bg-blue-500 py-2 px-4 text-white rounded hover:bg-blue-400">Add New Contact</button>
            </div>
        </form>
    </div>
</template>

<script>
    import InputField from '../components/InputField';
    export default {
        name: "ContactsCreate",

        components : {
            InputField
        },

        data: function() {
            return {
                form: {
                    'name': '',
                    'email': '',
                    'company': '',
                    'birthday': '',
                },
                errors: null,
            }
        },

        methods: {
            submitForm: function() {
                axios.post('/api/contacts', this.form)
                    .then(response => {
                        this.$router.push(response.data.links.self);
                    })
                    .catch(errors => {
                       this.errors = errors.response.data.errors; 
                    });
            }
        }
    }
</script>

<style scoped>

</style>