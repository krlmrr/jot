<template>
    <ContactsList endpoint="/api/birthdays"/>
</template>

<script>
    import ContactsList from '../components/ContactsList';
    export default {
        name: "ContactsIndex", 

        components: {
            ContactsList,
        }
    }
</script>