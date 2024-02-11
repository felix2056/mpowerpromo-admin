<template>
    <div id="store-menu-view" class="container">
        <div class="pb-3">
            <nav class="small">
                <ol class="breadcrumb pb-0">
                    <li class="breadcrumb-item"><a title="close">Menu</a></li>
                    <li class="breadcrumb-item active">Suppliers</li>
                </ol>
            </nav>
        </div>

        <div class="tabs nav-tabs-underline" id="__BVID__3415">
            <!---->
            <div class="">
                <ul
                    role="tablist"
                    class="nav nav-tabs"
                    id="__BVID__3415__BV_tab_controls_"
                >
                    <!---->
                    <li role="presentation" class="nav-item">
                        <a
                            role="tab"
                            aria-selected="true"
                            aria-setsize="4"
                            aria-posinset="1"
                            href="#"
                            target="_self"
                            class="nav-link active"
                            id="__BVID__3416___BV_tab_button__"
                            aria-controls="__BVID__3416"
                            >Include Suppliers</a
                        >
                    </li>
                    <li role="presentation" class="nav-item">
                        <a
                            role="tab"
                            tabindex="-1"
                            aria-selected="false"
                            aria-setsize="4"
                            aria-posinset="2"
                            href="#"
                            target="_self"
                            class="nav-link"
                            id="__BVID__3418___BV_tab_button__"
                            aria-controls="__BVID__3418"
                            >Exclude Suppliers</a
                        >
                    </li>
                    <li role="presentation" class="nav-item">
                        <a
                            role="tab"
                            tabindex="-1"
                            aria-selected="false"
                            aria-setsize="4"
                            aria-posinset="3"
                            href="#"
                            target="_self"
                            class="nav-link"
                            id="__BVID__3420___BV_tab_button__"
                            aria-controls="__BVID__3420"
                            >Blank Suppliers</a
                        >
                    </li>
                    <li role="presentation" class="nav-item">
                        <a
                            role="tab"
                            tabindex="-1"
                            aria-selected="false"
                            aria-setsize="4"
                            aria-posinset="4"
                            href="#"
                            target="_self"
                            class="nav-link"
                            id="__BVID__3422___BV_tab_button__"
                            aria-controls="__BVID__3422"
                            >Supplier Rank</a
                        >
                    </li>
                    <!---->
                </ul>
            </div>

            <div class="tab-content mt-3" id="__BVID__3415__BV_tab_container_">
                <div
                    role="tabpanel"
                    aria-hidden="false"
                    class="tab-pane active"
                    id="__BVID__3416"
                    aria-labelledby="__BVID__3416___BV_tab_button__"
                >
                    <div store="[object Object]">
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="mb-0">Include Suppliers</h3>
                            <i
                                class="fas fa-question-circle text-light ml-2"
                            ></i>
                        </div>
                        <p class="text-muted"></p>
                        <div class="form-group">
                            <div
                                class="d-flex justify-content-between align-items-center"
                            >
                                <div>
                                    <label
                                        ><!---->
                                        Only Allow These Supplier(s) Products
                                    </label>

                                    <a target="_blank" hide-title="true">
                                        <i
                                            class="fas fa-question-circle text-light ml-2 fa-fw"
                                        ></i>
                                    </a>
                                </div>
                                <!---->
                            </div>

                            <Multiselect mode="tags" v-model="selectedSuppliers" :options="supplierNamesObj" :close-on-select="false" />
                            <!---->
                        </div>
                    </div>
                </div>

                <div
                    role="tabpanel"
                    aria-hidden="true"
                    class="tab-pane"
                    id="__BVID__3418"
                    aria-labelledby="__BVID__3418___BV_tab_button__"
                    style="display: none"
                ></div>
                <div
                    role="tabpanel"
                    aria-hidden="true"
                    class="tab-pane"
                    id="__BVID__3420"
                    aria-labelledby="__BVID__3420___BV_tab_button__"
                    style="display: none"
                ></div>
                <div
                    role="tabpanel"
                    aria-hidden="true"
                    class="tab-pane"
                    id="__BVID__3422"
                    aria-labelledby="__BVID__3422___BV_tab_button__"
                    style="display: none"
                ></div>
                <!---->
            </div>
        </div>
    </div>
</template>

<script>
import Multiselect from '@vueform/multiselect'
import { mapState, mapGetters, mapActions } from "vuex";

export default {
        components: {
                Multiselect,
        },

    data() {
        return {
            isLoading: false,

            suppliers: [],
            selectedSuppliers: [],
        };
    },

    computed: {
        supplierNames() {
            return this.suppliers.map(supplier => supplier.name);
        },

        supplierNamesObj() {
                return this.suppliers.map(supplier => {
                        return { value: supplier.slug, label: supplier.name };
                });
        },
        },

    created() {
        this.fetchSuppliers();
    },

    methods: {
        async fetchSuppliers() {
                this.isLoading = true;
                
                axios.get('/suppliers')
                .then(response => {
                        this.suppliers = response.data.suppliers;
                })
                .catch(error => {
                        this.errorMsg = error.response.data.message;
                })
                .finally(() => this.isLoading = false);
        },
    },
};
</script>

<style src="@vueform/multiselect/themes/default.css"></style>
