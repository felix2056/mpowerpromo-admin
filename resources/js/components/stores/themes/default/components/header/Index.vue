<template>
    <header class="header">
        <announcement-bar></announcement-bar>

        <navbar></navbar>
    </header>
</template>

<script>
import AnnouncementBar from './AnnouncementBar.vue'
import Navbar from './Navbar.vue'

export default {
    components: {
        AnnouncementBar,
        Navbar
    }
}
</script>

<style></style>