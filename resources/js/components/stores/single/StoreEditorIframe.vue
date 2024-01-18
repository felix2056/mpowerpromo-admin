<template>
    <iframe :src="store_url" name="thumbnails" frameborder="0"
        ref="storeEditorIframe"
        class="store-preview-iframe overlay"></iframe>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';

export default {
    name: 'StoreEditorIframe',

    data() {
        return {
            isLoading: false,
            validationErrors: {},
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        }),

        store_url() {
            return 'http://' + this.store.subdomain + '.' + this.store.domain
        }
    }
}
</script>

<style></style>