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
        },

        iframeLoaded() {
            const iframe = this.$refs.storeEditorIframe.contentWindow;
            const data = {
                action: 'elementInteractions',
            };

            iframe.postMessage(data, '*'); // Send a message to request adding event listeners

            // Listen for messages sent from the iframe
            window.addEventListener('message', (event) => {
                if (event.source === iframe && event.data.action === 'dataFromEditorIframe') {
                    const receivedData = event.data.data;
                    console.log('Data received from iframe:', receivedData);

                    this.handleReceivedData(receivedData);
                }
            });
        },

        async handleReceivedData(receivedData) {
            if (receivedData.event === 'clickElem') {
                // get data_id and data_type
                const data_id = receivedData.id;
                const data_type = receivedData.type;
                const data_parent_id = receivedData.parent_id || null;

                let data_structure = await this.determineStructureFromType(data_type);
                if (data_structure === 'component') {
                    let selectComponent = await this.setSelectComponent({
                        id: data_id,
                        type: data_type,
                    });

                    await this.setSelectBlock({
                        id: null,
                        type: null,
                    });

                    // activate sidebar editor stage 2
                    if (selectComponent) this.showSidebarEditor('stage2');
                } else if (data_structure === 'block') {
                    if (data_parent_id) {
                        await this.setSelectComponent({
                            id: data_parent_id,
                            type: data_type,
                        });

                        let selectBlock = await this.setSelectBlock({
                            id: data_id,
                            type: data_type,
                        });

                        // activate sidebar editor stage 3
                        if (selectBlock) this.showSidebarEditor('stage3');
                    }
                } else {
                    let selectComponent = await this.setSelectComponent({
                        id: null,
                        type: null,
                    });

                    let selectBlock = await this.setSelectBlock({
                        id: null,
                        type: null,
                    });

                    // activate sidebar editor stage 1
                    this.showSidebarEditor('stage1');
                }
            }
        },

        async determineStructureFromType(type) {
            if (type === 'announcement-bar') return 'component';
            if (type === 'announcement-block') return 'block';

            return null;
        }
    },
}
</script>