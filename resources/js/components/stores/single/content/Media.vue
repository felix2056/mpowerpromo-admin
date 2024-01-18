<template>
    <div id="store-menu-view" class="container">
        <div class="pb-3">
            <nav class="small">
                <ol class="breadcrumb pb-0">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'store' }" title="close">Menu</router-link>
                    </li>
                    <li class="breadcrumb-item active">Media</li>
                </ol>
            </nav>
        </div>
        <div>
            <div class="d-flex align-items-center my-3">
                <h3 class="mb-0">Media</h3><i class="fas fa-question-circle text-light ml-2"></i>
            </div>
            <div class="card px-3 pb-2">
                <form enctype="multipart/form-data" novalidate="novalidate"><!---->
                    <div class="mt-3">
                        <div><label for="367" class="btn btn-primary">
                                Choose File(s)
                            </label><span class="ml-3">No File Chosen</span><!----></div><input type="file" id="367"
                            multiple="multiple" name="file" accept="all" class="input-file">
                    </div>
                </form><!----><!----><!---->
            </div>
            <div class="mt-3">
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
                                    <th id="VueTables_th--img" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title="" class="VueTables__heading"></span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div class="resize-handle"
                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                        </div>
                                    </th>
                                    <th id="VueTables_th--filename" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Filename</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div class="resize-handle"
                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                        </div>
                                    </th>
                                    <th id="VueTables_th--originalSize" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Orig</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div class="resize-handle"
                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                        </div>
                                    </th>
                                    <th id="VueTables_th--compressedSize" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Comp</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div class="resize-handle"
                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                        </div>
                                    </th>
                                    <th id="VueTables_th--actions" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title="" class="VueTables__heading"></span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div class="resize-handle"
                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            
                            <tbody v-if="media.length > 0">
                                <tr v-for="file in media" :key="file.id" class="VueTables__row ">
                                    <td tabindex="0" class="">
                                        <span class="text-wrap small">
                                            <img :src="file.path" class="img-thumbnail mr-2" style="width: 50px;">
                                        </span>
                                    </td>
                                    <td tabindex="0" class="">
                                        <a :href="file.path" target="_blank" class="text-wrap small">{{ file.name }}</a>
                                    </td>
                                    <td tabindex="0" class="">
                                        <span class="small">{{ file.original_size }}</span>
                                    </td>
                                    <td tabindex="0" class="">
                                        <span class="small font-weight-bold">{{ file.compress_size }}</span>
                                    </td>
                                    <td tabindex="0" class="">
                                        <span>
                                            <a class="text-primary text-center">
                                                <i class="far fa-link mr-3"></i>
                                            </a>
                                            <a class="text-primary text-center">
                                                <i class="far fa-trash"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr><!---->
                            </tbody>
                            <tbody v-else>
                                <tr class="VueTables__no-results">
                                    <td tabindex="0" colspan="5" class="text-center">No matching records</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="VuePagination row col-md-12 justify-content-center">
                        <nav class="text-center">
                            <ul class="pagination VuePagination__pagination" style="display: none;">
                                <li
                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-prev-chunk disabled">
                                    <a href="javascript:void(0);" disabled="disabled" class="page-link">&lt;&lt;</a>
                                </li>
                                <li
                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-prev-page disabled">
                                    <a href="javascript:void(0);" disabled="disabled" class="page-link">&lt;</a>
                                </li>
                                <li
                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-page disabled">
                                    <a href="javascript:void(0);" disabled="disabled" class="page-link">&gt;</a>
                                </li>
                                <li
                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-chunk disabled">
                                    <a href="javascript:void(0);" disabled="disabled" class="page-link">&gt;&gt;</a>
                                </li>
                            </ul>
                            <p class="VuePagination__count text-center col-md-12" style="display: none;">0 records</p>
                        </nav>
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
            isLoading: false,
            validationErrors: {},

            media: [],
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        })
    },

    mounted() {
        this.getMedia();
    },

    methods: {
        getMedia() {
            axios.get('/stores/media', {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
                .then(response => {
                    this.media = response.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
    },
}
</script>

<style></style>