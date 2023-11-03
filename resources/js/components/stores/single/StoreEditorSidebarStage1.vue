<template>
    <div class="w-25 store-editor-sidebar">
        <component-picker></component-picker>
        <!-- <theme-settings></theme-settings> -->
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';

import ThemeSettings from './includes/ThemeSettings.vue';
import ComponentPicker from './storeEditorComponentsStage1/Index.vue';

import VueMultiselect from 'vue-multiselect';

export default {
    name: 'StoreEditorSidebar',

    components: {
        'component-picker': ComponentPicker,
        ThemeSettings,
        VueMultiselect
    },

    data() {
        return {
            isLoading: false,
            errorMsg: null,
            validationErrors: {},
        }
    },

    computed: {
        ...mapGetters({
            theme: 'theme/theme',
        })
    },

    watch: {
        theme: {
            handler: function (val) {
                console.log(val)
            },
            deep: true
        }
    },
    
}
</script>

<style>
</style>