<template>
    <div class="col-12 store-editor-sidebar">
        <nav id="menu" class="w-100 px-3">
            <div class="sticky-top">
                <nav class="small">
                    <ol class="breadcrumb pb-0">
                        <li class="breadcrumb-item">
                            <router-link :to="{ name: 'store' }">Menu</router-link>
                        </li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </nav>
            </div>

            <div>
                <div>
                    <div class="d-flex justify-content-between mb-2 align-items-center">
                        <h3 class="mb-0">Categories</h3>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-light mr-2">Category Types</button>
                            <button class="btn btn-light" data-toggle="modal" data-target="#add_category_modal">Add
                                Category</button>

                            <div class="dropdown b-dropdown m-md-2 btn-group" id="__BVID__989"><button
                                    aria-haspopup="menu" aria-expanded="false" type="button"
                                    class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                    id="__BVID__989__BV_toggle_">•••</button>
                                <ul role="menu" tabindex="-1" class="dropdown-menu"
                                    aria-labelledby="__BVID__989__BV_toggle_">
                                    <li role="presentation"><a role="menuitem" href="#" target="_self"
                                            class="dropdown-item"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex row">
                        <div class="col-lg-9">
                            <div class="card p-3">
                                <div class="mr-2">
                                    <div class="m-0">
                                        <fieldset class="form-group" id="__BVID__995">
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <label>Category Type</label>
                                                        <a target="_blank" hide-title="true">
                                                            <i class="fas fa-question-circle text-light ml-2 fa-fw"></i>
                                                        </a>
                                                    </div> 
                                                </div>
                                                <div role="group" class="input-group">
                                                    <select name="Category Type" class="custom-select" id="__BVID__997">
                                                        <option disabled="disabled" value="">
                                                            Please select an option
                                                        </option>
                                                        <option v-for="category_type in category_types" :key="category_type.id" :value="category_type.id">
                                                            {{ category_type.name }}
                                                        </option>
                                                    </select> 
                                                </div> 
                                                <div class="invalid-feedback d-block"></div> 
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>

                                <div style="">
                                    <div class="" style="position: relative;">  
                                        <div id="taskFilters" class="collapse show">
                                            <div class="mb-2">
                                                <div class="d-flex flex-wrap">
                                                    <div class="mr-2 pb-2">
                                                        <div class="dropdown b-dropdown btn-group" id="__BVID__1003">
                                                            <button aria-haspopup="menu" aria-expanded="false"
                                                                type="button"
                                                                class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                                id="__BVID__1003__BV_toggle_">
                                                                Populated from Products Shipping
                                                                <span class="far fa-angle-down fa-xs text-muted"></span>
                                                            </button>

                                                            <ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__1003__BV_toggle_">
                                                                <div
                                                                    class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                                    <a href="javascript:;">Select all</a>
                                                                    <div class="mx-2">|</div>
                                                                    <a href="javascript:;">Deselect all</a>
                                                                </div>

                                                                <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                                                    style="min-width: 300px;">
                                                                    <div class="optionList">
                                                                        <div class="dropdown-item pb-1">
                                                                            <div class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-0-0"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                    for="styled-checkbox-0-0"
                                                                                    class="custom-control-label">
                                                                                    No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item pb-1">
                                                                            <div class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-0-1"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                    for="styled-checkbox-0-1"
                                                                                    class="custom-control-label">
                                                                                    Yes
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="mr-2 pb-2">
                                                        <div class="dropdown b-dropdown btn-group" id="__BVID__1006">
                                                            <button aria-haspopup="menu" aria-expanded="false"
                                                                type="button"
                                                                class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                                id="__BVID__1006__BV_toggle_">
                                                                Conditions
                                                                   <span
                                                                    class="far fa-angle-down fa-xs text-muted"></span>
                                                            </button>
                                                            <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                                aria-labelledby="__BVID__1006__BV_toggle_">
                                                                <div
                                                                    class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                                    <a href="javascript:;">Select all</a>
                                                                    <div class="mx-2">|</div> <a
                                                                        href="javascript:;">Deselect
                                                                        all</a>
                                                                </div> 
                                                                <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                                                    style="min-width: 300px;">
                                                                    <div class="optionList">
                                                                        <div class="dropdown-item pb-1">
                                                                            <div class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-1-0"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                    for="styled-checkbox-1-0"
                                                                                    class="custom-control-label">
                                                                                    No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item pb-1">
                                                                            <div class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-1-1"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                    for="styled-checkbox-1-1"
                                                                                    class="custom-control-label">
                                                                                    Yes
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="mr-2 pb-2">
                                                        <div class="dropdown b-dropdown btn-group" id="__BVID__1009">
                                                            <button aria-haspopup="menu" aria-expanded="false"
                                                                type="button"
                                                                class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                                id="__BVID__1009__BV_toggle_">
                                                                Global
                                                                   <span
                                                                    class="far fa-angle-down fa-xs text-muted"></span>
                                                            </button>
                                                            <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                                aria-labelledby="__BVID__1009__BV_toggle_">
                                                                <div
                                                                    class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                                    <a href="javascript:;">Select all</a>
                                                                    <div class="mx-2">|</div> <a
                                                                        href="javascript:;">Deselect
                                                                        all</a>
                                                                </div> 
                                                                <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                                                    style="min-width: 300px;">
                                                                    <div class="optionList">
                                                                        <div class="dropdown-item pb-1">
                                                                            <div class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-2-0"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                    for="styled-checkbox-2-0"
                                                                                    class="custom-control-label">
                                                                                    No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item pb-1">
                                                                            <div class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-2-1"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                    for="styled-checkbox-2-1"
                                                                                    class="custom-control-label">
                                                                                    Yes
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="mr-2 pb-2">
                                                        <div class="dropdown b-dropdown btn-group" id="__BVID__1012">
                                                            <button aria-haspopup="menu" aria-expanded="false"
                                                                type="button"
                                                                class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                                id="__BVID__1012__BV_toggle_">
                                                                Categories With Children
                                                                   <span
                                                                    class="far fa-angle-down fa-xs text-muted"></span>
                                                            </button>
                                                            <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                                aria-labelledby="__BVID__1012__BV_toggle_">
                                                                <div
                                                                    class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                                    <a href="javascript:;">Select all</a>
                                                                    <div class="mx-2">|</div> <a
                                                                        href="javascript:;">Deselect
                                                                        all</a>
                                                                </div> 
                                                                <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                                                    style="min-width: 300px;">
                                                                    <div class="optionList">
                                                                        <div class="dropdown-item pb-1">
                                                                            <div class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-3-0"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                    for="styled-checkbox-3-0"
                                                                                    class="custom-control-label">
                                                                                    No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item pb-1">
                                                                            <div class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-3-1"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                    for="styled-checkbox-3-1"
                                                                                    class="custom-control-label">
                                                                                    Yes
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="overlap" style="">
                                        <v-client-table :columns="columns" :data="categoriesData" :options="categoriesOptions"></v-client-table>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pb-3">
                            <div>
                                <div class="card p-3">
                                    <div class="d-flex justify-content-start flex-column"></div>
                                    <div><button type="button" class="btn btn-primary">Show Categories Tree</button>
                                        <div id="collapse-1" class="mt-2 collapse" style="display: none;">
                                            <div role="tree" class="tree" value="">
                                                <ul class="tree-root"></ul> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div id="add_category_modal" role="dialog" aria-labelledby="add_category_modal"
            aria-describedby="add_category_modal" class="modal fade right" aria-modal="true">
            <div
                class="modal-dialog modal-md modal-dialog modal-dialog-slideout modal-dialog-slideout-right modal-dialog-slideout-md">
                <span tabindex="0"></span>
                <div tabindex="-1" class="modal-content no-max-height">
                    <header class="modal-header">
                        <h5 class="modal-title">Create Category</h5>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close">×</button>
                    </header>
                    <div class="modal-body p-0">
                        <div class="modal-body-fixed-footer" style="height: calc(100vh - 63px);">
                            <div class="p-3 mb-1">
                                <fieldset class="form-group" id="__BVID__761">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0"
                                        id="__BVID__761__BV_label_">
                                        <label>Category Type</label>
                                        <i class="fas fa-question-circle text-light ml-2"></i>
                                    </legend>

                                    <div>
                                        <div class="form-group m-0">
                                            <Multiselect v-model="add_category.category_type_id" :options="categoryTypeNames" placeholder="Choose option" />
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="form-group">
                                    <div>
                                        <fieldset class="form-group" id="__BVID__768">
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <label>Name</label>
                                                        <a target="_blank" hide-title="true">
                                                            <i class="fas fa-question-circle text-light ml-2 fa-fw"></i>
                                                        </a>
                                                    </div> 
                                                </div>
                                                <div role="group" class="input-group">
                                                    <input v-model="add_category.name" name="Name" type="text"
                                                        autocomplete="on" class="form-control" maxlength="255"
                                                        onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                        data-hj-allow="" data-mask="" data-previous-value=""
                                                        id="__BVID__770" :class="{'is-invalid': validationErrors.job_title}"> 
                                                </div>
                                                <div class="invalid-feedback d-block" v-if="validationErrors.name">
                                                    {{ validationErrors.name[0] }}
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>URL Slug <i class="fas fa-question-circle text-light ml-2"></i></label>
                                    <input v-model="add_category.slug" type="text" class="form-control">
                                    <div class="invalid-feedback d-block" v-if="validationErrors.slug">
                                        {{ validationErrors.slug[0] }}
                                    </div>
                                </div>

                                <fieldset class="form-group" id="__BVID__772">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0"
                                        id="__BVID__772__BV_label_"><label>Parent Category</label><i
                                            class="fas fa-question-circle text-light ml-2"></i></legend>
                                    <div>
                                        <div class="form-group m-0">
                                            <Multiselect v-model="add_category.parent_id" :options="categoryNames" placeholder="Choose parent category" />
                                            <div class="invalid-feedback d-block" v-if="validationErrors.parent_id">
                                                {{ validationErrors.parent_id[0] }}
                                            </div>    
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="mb-3">
                                    <button @click="showAdvancedOptions = !showAdvancedOptions" type="button"
                                        class="btn btn-link btn-block">Advanced options</button>
                                </div>

                                <div class="collapse" :class="{ 'show': showAdvancedOptions }">
                                    <div class="form-group">
                                        <label>
                                            Description <i class="fas fa-question-circle text-light ml-2"></i>
                                        </label>

                                        <textarea v-model="add_category.description" name="description" class="form-control"></textarea>
                                        <div class="invalid-feedback d-block" v-if="validationErrors.description">
                                            {{ validationErrors.description[0] }}
                                        </div>
                                    </div>

                                    <fieldset class="form-group disabled" id="__BVID__779">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0"
                                            id="__BVID__779__BV_label_">
                                            Child Categories
                                        </legend>

                                        <div>
                                            <div class="form-group m-0">
                                                <Multiselect v-model="add_category.child_id" :options="categoryNames" placeholder="Choose child category" />
                                                <div class="invalid-feedback d-block" v-if="validationErrors.child_id">
                                                    {{ validationErrors.child_id[0] }}
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="form-group" id="__BVID__784">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0"
                                            id="__BVID__784__BV_label_"><label>Related Categories</label><i
                                                class="fas fa-question-circle text-light ml-2"></i></legend>
                                        <div>
                                            <div class="form-group m-0">
                                                <Multiselect mode="tags" v-model="add_category.related_categories" :options="categoryNames" :close-on-select="false" placeholder="Choose related categories" />
                                                <div class="invalid-feedback d-block" v-if="validationErrors.related_categories">
                                                    {{ validationErrors.related_categories[0] }}
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="form-group" id="__BVID__790">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0"
                                            id="__BVID__790__BV_label_"><label>Redirect url(s)</label></legend>
                                        <div>
                                            <Multiselect v-model="add_category.redirect_urls" :options="redirect_urls" track-by="code" :multiple="true" :taggable="true" @tag="addRedirectUrl" tag-placeholder="Add redirect url" />
                                            <div class="invalid-feedback d-block" v-if="validationErrors.redirect_urls">
                                                {{ validationErrors.redirect_urls[0] }}
                                            </div> 
                                        </div>
                                    </fieldset>

                                    <!-- <fieldset class="form-group" id="__BVID__792">
                                        <div>
                                            <div class="form-group">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div><label>
                                                            Store Roles
                                                        </label> <a target="_blank" hide-title="true"><i
                                                                class="fas fa-question-circle text-light ml-2 fa-fw"></i></a>
                                                    </div> 
                                                </div>
                                                <div tabindex="-1" class="multiselect" loadonfocus="true" optionsv=""
                                                    orderby="name" ascending="1"
                                                    path="/stores/64f8bf1959a50f5307a44a93/roles" isobject="true"
                                                    helpoptions="[object Object]">
                                                    <div class="multiselect__select"></div>
                                                    <div class="multiselect__tags">
                                                        <div class="multiselect__tags-wrap" style="display: none;">
                                                        </div> 
                                                        <div class="multiselect__spinner" style="display: none;"></div>
                                                        <input name="Store roles" type="text" autocomplete="nope"
                                                            placeholder="Select option" tabindex="0"
                                                            class="multiselect__input"
                                                            style="width: 0px; position: absolute; padding: 0px;">
                                                         <span class="multiselect__placeholder">
                                                            Select option
                                                        </span>
                                                    </div>
                                                    <div tabindex="-1" class="multiselect__content-wrapper"
                                                        style="max-height: 300px; display: none;">
                                                        <ul class="multiselect__content" style="display: block;">
                                                            
                                                            <li style="display: none;"><span
                                                                    class="multiselect__option"><span> Oops! No elements
                                                                        found. Consider changing the search query.
                                                                    </span></span></li>
                                                            <li><span class="multiselect__option"><span><span>No Store
                                                                            roles Options</span></span></span></li>
                                                        </ul>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </fieldset> -->

                                    <div class="mt-3 w-100"></div>
                                </div>

                                <div class="alert alert-danger m-0" v-if="errorMsg">
                                    <div>{{ errorMsg }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-fixed-footer card-footer text-right bg-white d-flex align-items-center justify-content-end"
                            style="z-index: 1;">
                            <button @click.prevent="addCategory" type="button" class="btn btn-primary">
                                <i v-if="isLoading" class="fas fa-spinner fa-spin"></i>
                                <i v-else class="fas fa-save"></i>
                                Save Category
                            </button>
                            <a class="btn btn-link mr-2" data-dismiss="modal">Cancel</a>
                        </div>
                    </div>
                </div>
                <span tabindex="0"></span>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';

import Multiselect from '@vueform/multiselect'

export default {
    name: "Categories",

    components: {
        Multiselect
    },

    data() {
        return {
            isLoading: false,
            validationErrors: {},
            errorMsg: '',
            showAdvancedOptions: false,

            columns: ['name', 'slug', 'actions', 'conditions', 'productsCount', 'parentCategory', 'childCategories', 'relatedCategories', 'isGlobal', 'shippingPackages', 'isPopulated', 'googleShoppingID', 'googleShoppingName'],
            categoriesOptions: {
                headings: {
                    name: 'Category',
                    slug: 'Slug',
                    actions: 'Actions',
                    conditions: 'Conditions',
                    productsCount: 'Products',
                    parentCategory: 'Parents',
                    childCategories: 'Children',
                    relatedCategories: 'Related',
                    isGlobal: 'Is Global',
                    shippingPackages: 'Packages',
                    isPopulated: 'Populated',
                    googleShoppingID: 'GoogleID',
                    googleShoppingName: 'GoogleNames',
                },

                editableColumns: ['name'],
                sortable: ['name', 'slug'],
                filterable: ['name', 'slug'],
            },

            categories: [],
            category_types: [],
            redirect_urls: [],

            add_category: {
                name: '',
                slug: '',
                description: '',
                category_type_id: '',
                parent_id: '',
                child_id: '',
                related_categories: [],
                redirect_urls: [],
                store_roles: [],
            }
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        }),

        categoriesData() {
            return this.categories.map(category => {
                return {
                    name: category.name,
                    slug: category.slug,
                    actions: '',
                    conditions: '',
                    productsCount: '',
                    parentCategory: '',
                    childCategories: '',
                    relatedCategories: '',
                    isGlobal: '',
                    shippingPackages: '',
                    isPopulated: '',
                    googleShoppingID: '',
                    googleShoppingName: '',
                }
            });
        },

        categoryNames() {
            return this.categories.map(category => {
                return {
                    value: category.id,
                    label: category.name
                }
            });
        },

        categoryTypeNames() {
            return this.category_types.map(category_type => {
                return {
                    value: category_type.id,
                    label: category_type.name
                }
            });
        }
    },

    watch: {
        'add_category.name': function (val) {
            this.add_category.slug = val.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        }
    },

    created() {
        this.fetchCategories();
    },

    methods: {
        fetchCategories() {
            axios.get('/stores/categories', {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.categories = response.data.categories;
                this.category_types = response.data.category_types;
            })
            .catch(error => {
                console.log(error.response.data);
            })
        },

        addRedirectUrl(newUrl) {
            const url = {
                name: newUrl,
                code: newUrl.substring(0, 2) + Math.floor((Math.random() * 10000000))
            }

            this.redirect_urls.push(url)
            this.value.push(url)
        },

        addCategory() {
            this.isLoading = true;

            let form = new FormData();
            form.append('name', this.add_category.name);
            form.append('slug', this.add_category.slug);
            form.append('description', this.add_category.description);
            form.append('category_type_id', this.add_category.category_type_id);
            form.append('parent_id', this.add_category.parent_id);
            form.append('child_id', this.add_category.child_id);
            form.append('related_categories', this.add_category.related_categories);
            form.append('redirect_urls', this.add_category.redirect_urls);
            // form.append('store_roles', this.add_category.store_roles);

            axios.post('/stores/categories/create', form, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                console.log(response.data);
                $('#add_category_modal').modal('hide');
            })
            .catch(error => {
                console.log(error.response.data);
            })
            .finally(() => {
                this.isLoading = false;
            })
        }
    }

}
</script>

<style src="@vueform/multiselect/themes/default.css"></style>