<template>
    <div>

    </div>
</template>

<script>
    export default{
        name: "ContactShow",

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