<template>
    <div class="card p-3">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="m-0">Options</h5>
            
            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-options" aria-expanded="false"
                aria-controls="collapse-options" style="overflow-anchor: none;">
                <i class="far fa-angle-down text-body"></i>
            </button>
        </div>

        <div id="collapse-options" class="mt-2 collapse">
            <div class="custom-control custom-checkbox custom-control-lg">
                <input v-model="option.enable_rounded" :true-value="1" :false-value="0" type="checkbox" id="enableRounded" class="custom-control-input">
                <label for="enableRounded" class="custom-control-label">Enable Rounded</label>
            </div>
            
            <div class="custom-control custom-checkbox custom-control-lg">
                <input v-model="option.enable_responsive_font_sizes" :true-value="1" :false-value="0" type="checkbox" id="enableResponsiveFontSizes" class="custom-control-input">
                <label for="enableResponsiveFontSizes" class="custom-control-label">Enable Responsive Font Sizes</label>
            </div>
            
            <div class="custom-control custom-checkbox">
                <input v-model="option.enable_shadows" :true-value="1" :false-value="0" type="checkbox" id="enableShadows" class="custom-control-input">
                <label for="enableShadows" class="custom-control-label">Enable Shadows</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input v-model="option.enable_gradients" :true-value="1" :false-value="0" type="checkbox" id="enableGradients" class="custom-control-input">
                <label for="enableGradients" class="custom-control-label">Enable Gradients</label>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';

export default {
    name: 'ThemeOptions',
    
    data() {
        return {
            option: {},
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        }),
    },

    mounted() {
        this.fetchOptions();
    },

    methods: {
        async fetchOptions() {
            const { data } = await axios.get(`/stores/theme/options`, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            });

            this.option = data.option;
        },
    },

}
</script>

<style></style>