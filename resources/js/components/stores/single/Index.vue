<template>
    <div class="dashboard">
        <navigation />

        <div id="main" class="slideout-panel slideout-panel-left">
            <div class="main-panel container-fluid pt-3 ml-0">
                <div class="no-gutters mt-n3">
                    <store-editor-navbar />

                    <div class="d-flex store-editor row no-gutters">
                        <store-editor-sidebar />

                        <div class="flex-fill align-center bg-light store-preview-container overlay" style="position: relative;">
                            <div class="d-flex align-items-center bg-white p-2 border-bottom">
                                <input v-model="store.host" disabled="true" type="text" class="form-control bg-light border-0 rounded-pill" readonly aria-readonly="">
                                <a title="Reload and clear cache" class="ml-2 btn btn-circle btn-light">
                                    <i class="far fa-redo-alt text-secondary fa-fw"></i>
                                </a>
                            </div>

                            <store-editor-iframe />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <notification />
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';

import Navigation from '../../includes/navigation.vue'
import Notification from '../../includes/notification.vue'

import StoreEditorNavbar from './StoreEditorNavbar.vue'
import StoreEditorSidebar from './StoreEditorSidebar.vue'
import StoreEditorIframe from './StoreEditorIframe.vue'

export default {
    components: {
        Navigation,
        Notification,
        StoreEditorNavbar,
        StoreEditorSidebar,
        StoreEditorIframe,
    },

    data() {
        return {
            isLoading: false,
            validationErrors: {},
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        })
    },

    created() {
        this.fetchStore()
    },

    methods: {
        ...mapActions({
            getStore: 'userstore/get'
        }),

        async fetchStore() {
            try {
                this.isLoading = true

                const response = await this.getStore({
                    store: this.$route.params.slug
                });
            } catch (error) {
                console.log(error)
            } finally {
                this.isLoading = false;
            }
        }
    },
}
</script>