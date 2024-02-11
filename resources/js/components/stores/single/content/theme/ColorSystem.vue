<template>
    <div class="card p-3">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="m-0">Color System</h5>
            <button type="button" class="btn btn-link not-collapsed" data-toggle="collapse" data-target="#collapse-colors"
                aria-expanded="true" aria-controls="collapse-colors" style="overflow-anchor: none;">
                <i class="far fa-angle-down text-body"></i>
            </button>
        </div>

        <div id="collapse-colors" class="mt-2 collapse show">
            <div v-for="color in colors" :key="color.id" class="d-flex align-items-center">
                <VSwatches v-model="color.value" :swatches="swatches" shapes="circles" show-border popover-x="left">
                </VSwatches>
                <div class="ml-2" style="margin-top: -5px; cursor: pointer;">
                    {{ color.name }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';

export default {
    name: 'ThemeColorSystem',

    data() {
        return {
            isLoading: false,

            colors: [],

            swatches: [
                '#f8f9fa',
                '#C0C0C0',
                '#6c757d',
                '#343a40',

                '#FF0000',
                '#dc3545',
                '#FFFF00',
                '#ffc107',

                '#00FF00',
                '#28a745',
                '#00FFFF',
                '#17a2b8',

                '#007bff',
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
        this.fetchColorSystem();
    },

    watch: {
        colors: {
            deep: true,
            handler(newColors, oldColors) {
                console.log('Colors changed:', newColors);

                // Iterate through each color object and set up individual watchers
                newColors.forEach((newColor, index) => {
                    // if watcher already exists, remove it
                    // if (this._watchers[index]) {
                    //     this._watchers[index].teardown();
                    // }
                    
                    this.$watch(
                        () => this.colors[index],
                        {
                            deep: true,
                            handler: (newColorValue, oldColorValue) => {
                                console.log(`Color at index ${index} changed:`, newColorValue);

                                // You can perform actions or send a post request for the specific color
                                this.updateColorSystem(index);
                            },
                        }
                    );
                });

                // You can also perform actions or send a post request for the entire array
                // this.updateColorSystem();
            },
        },
    },

    methods: {
        async fetchColorSystem() {
            const { data } = await axios.get(`/stores/theme/color-system`, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            });

            this.colors = data.color_system;
        },

        async updateColorSystem(index) {
            this.isLoading = true;
            this.$emit('updating-color-system');

            axios.post('/stores/theme/color-system', this.colors[index], {
                headers: {
                    'X-Tenant-UUID': this.store.host,
                },
            })
            .then((response) => {
                console.log(response.data.message);
                this.$emit('updated-color-system');
            })
            .catch((error) => {
                this.validationErrors = error.response.data.errors;
            })
            .finally(() => (this.isLoading = false));
        },
    },
};
</script>

<style scoped></style>
