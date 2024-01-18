<template>
    <div class="card p-3">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="m-0">Body</h5><button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse-body" aria-expanded="false"
                aria-controls="collapse-body" style="overflow-anchor: none;"><i
                    class="far fa-angle-down text-body"></i></button>
        </div>

        <div id="collapse-body" class="mt-2 collapse">
            <div class="d-flex align-items-center">
                <VSwatches v-model="body.body_background_color" :swatches="swatches" shapes="circles" show-border popover-x="left"></VSwatches>
                <div class="ml-2" style="margin-top: -5px; cursor: pointer;">
                    Body Background Color
                </div>
            </div>

            <div class="d-flex align-items-center">
                <VSwatches v-model="body.body_text_color" :swatches="swatches" shapes="circles" show-border popover-x="left"></VSwatches>
                <div class="ml-2" style="margin-top: -5px; cursor: pointer;">
                    Body Text Color
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';

export default {
    name: 'ThemeBody',

    data() {
        return {
            body: {},

            swatches: [
                '#FFFFFF',
                '#C0C0C0',
                '#808080',
                '#000000',

                '#FF0000',
                '#800000',
                '#FFFF00',
                '#FFA500',

                '#00FF00',
                '#008000',
                '#00FFFF',
                '#008080',

                '#007BFF',
                '#000080',
                '#FF00FF',
                '#800080'
            ],
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        }),
    },

    mounted() {
        this.getBody();
    },

    methods: {
        async getBody() {
            const { data } = await axios.get(`/stores/theme/body`, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            });

            this.body = data.body;
        }
    },
}
</script>

<style></style>