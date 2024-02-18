<template>
    <div id="store-menu-view" class="container">
        <div class="pb-3">
            <nav class="small">
                <ol class="breadcrumb pb-0">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'store' }" title="close">Menu</router-link>
                    </li>
                    <li class="breadcrumb-item active">Sitemaps</li>
                </ol>
            </nav>
        </div>

        <div>
            <h3>Sitemap</h3>
            <div>
                <div class="tabs nav-tabs-underline" id="__BVID__1435">
                    <div class="">
                        <ul role="tablist" class="nav nav-tabs" id="__BVID__1435__BV_tab_controls_">
                            <li role="presentation" class="nav-item"><a role="tab" aria-selected="true" aria-setsize="2"
                                    aria-posinset="1" href="#" target="_self" class="nav-link active"
                                    id="__BVID__1436___BV_tab_button__" aria-controls="__BVID__1436">Editor</a></li>
                            <li role="presentation" class="nav-item"><a role="tab" tabindex="-1" aria-selected="false"
                                    aria-setsize="2" aria-posinset="2" href="#" target="_self" class="nav-link"
                                    id="__BVID__1442___BV_tab_button__" aria-controls="__BVID__1442">Site Maps</a></li>
                            
                        </ul>
                    </div>
                    
                    <div class="tab-content mt-3" id="__BVID__1435__BV_tab_container_">
                        <div role="tabpanel" aria-hidden="false" class="tab-pane active" id="__BVID__1436"
                            aria-labelledby="__BVID__1436___BV_tab_button__">
                            <div>
                                <fieldset class="form-group" id="__BVID__1439">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div><label>Path</label> </div>
                                        </div>

                                        <div role="group" class="input-group">
                                            <input
                                                v-model="sitemap.path"
                                                name="Path" type="text" autocomplete="on"
                                                class="form-control" maxlength="255" >
                                        </div>

                                        <div v-if="validationErrors.path" class="invalid-feedback d-block">
                                            {{ validationErrors.path[0] }}
                                        </div> 
                                    </div>
                                </fieldset>
                            </div>

                            <div class="vue-codemirror">
                                <Codemirror v-model:value="sitemap.content" />
                            </div>

                            <div class="my-3">
                                <button @click="saveSitemap" type="button" class="btn btn-primary mr-2">
                                    <i v-if="isLoading" class="fa fa-spinner fa-spin"></i>
                                    Save
                                </button>
                            </div>
                        </div>

                        <div role="tabpanel" aria-hidden="true" class="tab-pane" style="display: none;" id="__BVID__1442"
                            aria-labelledby="__BVID__1442___BV_tab_button__">
                            <div class="text-right">
                                <button type="button" class="btn btn-light">
                                    Generate Products Sitemap
                                </button>
                            </div>
                            
                            <div class="card p-3 mt-3 bg-light">
                                <div>
                                    <form enctype="multipart/form-data" novalidate="novalidate">
                                        <h5>Upload Sitemap</h5>
                                        <div class="mt-3">
                                            <div>
                                                <label for="1444" class="btn btn-link">
                                                    Add Sitemap
                                                </label><span class="ml-3">No File Chosen</span>
                                            </div>
                                            <input
                                                type="file" id="1444" multiple="multiple" name="file" accept="text/xml"
                                                class="input-file">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div>
                                <div class="VueTables VueTables--client">
                                    <div class="row" style="display: none;">
                                        <div class="col-md-12">
                                            <div class="form-group form-inline float-left VueTables__search"></div>
                                            <div class="form-group form-inline float-right VueTables__limit"></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="VueTables__table table table-striped" style="overflow: hidden;">
                                            <thead>
                                                <tr>
                                                    <th id="VueTables_th--path" tabindex="0" class="VueTables__sortable "
                                                        style="position: relative;"><span title=""
                                                            class="VueTables__heading">Path</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--filename" tabindex="0"
                                                        class="VueTables__sortable " style="position: relative;"><span
                                                            title="" class="VueTables__heading">Filename</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--link" tabindex="0" class="VueTables__sortable "
                                                        style="position: relative;"><span title=""
                                                            class="VueTables__heading">Link</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--updatedAt" tabindex="0"
                                                        class="VueTables__sortable " style="position: relative;"><span
                                                            title="" class="VueTables__heading">UpdatedAt</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--edit" tabindex="0" class="VueTables__sortable "
                                                        style="position: relative;"><span title=""
                                                            class="VueTables__heading">Edit</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--delete" tabindex="0" class="VueTables__sortable "
                                                        style="position: relative;"><span title=""
                                                            class="VueTables__heading">Delete</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="VueTables__no-results">
                                                    <td tabindex="0" colspan="6" class="text-center">No matching records
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="VuePagination row col-md-12 justify-content-center">
                                        <nav class="text-center">
                                            <ul class="pagination VuePagination__pagination" style="display: none;">
                                                <li
                                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-prev-chunk disabled">
                                                    <a href="javascript:void(0);" disabled="disabled"
                                                        class="page-link">&lt;&lt;</a>
                                                </li>
                                                <li
                                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-prev-page disabled">
                                                    <a href="javascript:void(0);" disabled="disabled"
                                                        class="page-link">&lt;</a>
                                                </li>
                                                <li
                                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-page disabled">
                                                    <a href="javascript:void(0);" disabled="disabled"
                                                        class="page-link">&gt;</a>
                                                </li>
                                                <li
                                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-chunk disabled">
                                                    <a href="javascript:void(0);" disabled="disabled"
                                                        class="page-link">&gt;&gt;</a>
                                                </li>
                                            </ul>
                                            <p class="VuePagination__count text-center col-md-12" style="display: none;">0
                                                records</p>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';

export default {
    data() {
        return {
            validationErrors: {},
            isLoading: false,

            sitemap: {
                path: '',
                content: ''
            }
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        })
    },

    created() {
        this.getSitemap();
    },

    methods: {
        async getSitemap() {
            this.isLoading = true;

            axios.get('/stores/sitemap', {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.sitemap = response.data.sitemap;
            })
            .catch(error => {
                console.log(error);
            })
            .finally(() => {
                this.isLoading = false;
            });
        },

        async saveSitemap() {
            this.isLoading = true;

            axios.post('/stores/sitemap/create', this.sitemap, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.sitemap = response.data.sitemap;
            })
            .catch(error => {
                if (error.response.status === 422) {
                    this.validationErrors = error.response.data.errors;
                }
            })
            .finally(() => {
                this.isLoading = false;
            });
        }
    }
}
</script>

<style></style>