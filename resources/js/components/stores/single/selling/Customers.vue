<template>
    <div class="col-12 store-editor-sidebar">
        <div id="store-menu-view" class="container-fluid">
            <div data-id="mPowerNavigation" class="pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <nav class="small">
                        <ol class="breadcrumb pb-0">
                            <li class="breadcrumb-item">
                                <router-link :to="{ name: 'store' }" title="close">Menu</router-link>
                            </li>
                            <li class="breadcrumb-item active">Customers</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div data-id="mPower-Customers" class="w-100">
                <h3>Store Customers</h3>
                <div class="d-flex"><button type="button" data-id="Add Customer" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#Add_Customer">
                        Add Customer
                    </button>
                    <div>
                        <div class="d-flex align-center"><button title="Import" type="button"
                                class="btn mr-2 btn-primary">Import customers</button></div><!---->
                    </div>
                </div>
                <div class="text-ellipsis-inline-block" style="">
                    <div class="" style="position: relative;"><!----> <!----> <!---->
                        <div id="taskFilters" class="collapse show">
                            <div class="mb-2">
                                <div class="d-flex flex-wrap">
                                    <div data-v-20278007="" class="mr-2 pb-2">
                                        <div data-v-20278007="" class="dropdown b-dropdown btn-group" id="__BVID__964">
                                            <!----><button aria-haspopup="menu" aria-expanded="false" type="button"
                                                class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                id="__BVID__964__BV_toggle_">
                                                Registration Status
                                                <!----> <!----><!----> <!----> <span data-v-20278007=""
                                                    class="far fa-angle-down fa-xs text-muted"></span></button>
                                            <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                aria-labelledby="__BVID__964__BV_toggle_">
                                                <div data-v-20278007=""
                                                    class="d-flex justify-content-start mb-2 px-3 pt-2 small"><a
                                                        data-v-20278007="" href="javascript:;">Select all</a>
                                                    <div data-v-20278007="" class="mx-2">|</div> <a data-v-20278007=""
                                                        href="javascript:;">Deselect all</a>
                                                </div> <!---->
                                                <div data-v-20278007=""
                                                    class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                                    style="min-width: 300px;">
                                                    <div data-v-20278007="" class="optionList">
                                                        <div data-v-20278007="" class="dropdown-item pb-1">
                                                            <div data-v-20278007=""
                                                                class="custom-control custom-checkbox p-0"><input
                                                                    data-v-20278007="" type="checkbox"
                                                                    id="styled-checkbox-0-0" class="custom-control-input"
                                                                    value="[object Object]"> <label data-v-20278007=""
                                                                    for="styled-checkbox-0-0" class="custom-control-label">
                                                                    No
                                                                </label></div>
                                                        </div>
                                                        <div data-v-20278007="" class="dropdown-item pb-1">
                                                            <div data-v-20278007=""
                                                                class="custom-control custom-checkbox p-0"><input
                                                                    data-v-20278007="" type="checkbox"
                                                                    id="styled-checkbox-0-1" class="custom-control-input"
                                                                    value="[object Object]"> <label data-v-20278007=""
                                                                    for="styled-checkbox-0-1" class="custom-control-label">
                                                                    Yes
                                                                </label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>
                                    </div> <!---->
                                </div>
                            </div>
                        </div>
                    </div> <!---->
                    <div class="overlap" style="">
                        <div class="w-100 TopTable__table VueTables VueTables--server" filterable="true">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-inline float-left VueTables__search"><span></span>
                                        <div class="VueTables__search-field"><label for="VueTables__search_FWaSB"
                                                class="">Filter:</label><input type="text" placeholder="Search query"
                                                id="VueTables__search_FWaSB" autocomplete="off"
                                                class="VueTables__search__input form-control "></div><span
                                            class="d-flex align-items-end">
                                            <div class="no-gutters d-flex flex-wrap align-items-center w-100"
                                                style="margin-top: 33px; margin-left: 8px;">
                                                <div class="mr-2 d-flex">
                                                    <div class="mr-2 mb-2">
                                                        <div class="d-flex align-center"><button type="button"
                                                                class="btn btn-primary">Batch Add Allowance</button></div>
                                                        <!---->
                                                    </div><!---->
                                                </div>
                                            </div> <!----> <!---->
                                        </span>
                                    </div>
                                    <div class="form-group form-inline float-right VueTables__limit"></div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="VueTables__table table table-striped" style="overflow: hidden;">
                                    <thead>
                                        <tr>
                                            <th id="VueTables_th--checkbox" tabindex="0" class=""
                                                style="position: relative;"><span title="" class="VueTables__heading">
                                                    <div class="custom-control custom-checkbox m-0"><input
                                                            id="1708210165168checkbox-selectall" type="checkbox"
                                                            class="custom-control-input"> <label
                                                            for="1708210165168checkbox-selectall"
                                                            class="custom-control-label">&nbsp;</label></div>
                                                </span>
                                                <div class="resize-handle"
                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                </div>
                                            </th>
                                            <th id="VueTables_th--actions" tabindex="0" class=""
                                                style="position: relative;"><span title=""
                                                    class="VueTables__heading">Actions</span>
                                                <div class="resize-handle"
                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                </div>
                                            </th>
                                            <th id="VueTables_th--fullName" tabindex="0" class="VueTables__sortable "
                                                style="position: relative;"><span title="" class="VueTables__heading">Full
                                                    Name</span><span
                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                <div class="resize-handle"
                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                </div>
                                            </th>
                                            <th id="VueTables_th--company" tabindex="0" class="VueTables__sortable "
                                                style="position: relative;"><span title=""
                                                    class="VueTables__heading">Company</span><span
                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                <div class="resize-handle"
                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                </div>
                                            </th>
                                            <th id="VueTables_th--email" tabindex="0" class="VueTables__sortable "
                                                style="position: relative;"><span title=""
                                                    class="VueTables__heading">Email</span><span
                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                <div class="resize-handle"
                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                </div>
                                            </th>
                                            <th id="VueTables_th--roles" tabindex="0" class="" style="position: relative;">
                                                <span title="" class="VueTables__heading">Roles</span>
                                                <div class="resize-handle"
                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                </div>
                                            </th>
                                            <th id="VueTables_th--credit" tabindex="0" class="" style="position: relative;">
                                                <span title="" class="VueTables__heading">Credit</span>
                                                <div class="resize-handle"
                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                </div>
                                            </th>
                                            <th id="VueTables_th--allowance" tabindex="0" class=""
                                                style="position: relative;"><span title=""
                                                    class="VueTables__heading">Allowance</span>
                                                <div class="resize-handle"
                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                </div>
                                            </th>
                                            <th id="VueTables_th--lastRegisterSent" tabindex="0"
                                                class="VueTables__sortable " style="position: relative;"><span title=""
                                                    class="VueTables__heading">Last Register Sent</span><span
                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                <div class="resize-handle"
                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                </div>
                                            </th>
                                            <th id="VueTables_th--createdAt" tabindex="0" class=""
                                                style="position: relative;"><span title=""
                                                    class="VueTables__heading">Created At</span>
                                                <div class="resize-handle"
                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="VueTables__no-results">
                                            <td tabindex="0" colspan="10" class="text-center">No matching records</td>
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
                                    <p class="VuePagination__count text-center col-md-12" style="display: none;">0 records
                                    </p>
                                </nav>
                            </div>
                        </div> <!---->
                    </div> <!---->
                </div><!----><!---->
            </div>
        </div>

        <div id="Add_Customer" role="dialog" aria-labelledby="Add Customer___BV_modal_title_"
            aria-describedby="Add Customer___BV_modal_body_" class="modal fade right" aria-modal="true">
            <div class="modal-dialog modal-xl modal-dialog modal-dialog-slideout modal-dialog-slideout-right modal-dialog-slideout-xl">
                <span tabindex="0"></span>

                <div id="Add Customer___BV_modal_content_" tabindex="-1" class="modal-content no-max-height">
                    <header id="Add Customer___BV_modal_header_" class="modal-header">
                        <h5 id="Add Customer___BV_modal_title_" class="modal-title">Add Customer</h5>
                        <button type="button" aria-label="Close" class="close">×</button>
                    </header>

                    <div id="Add Customer___BV_modal_body_" class="modal-body">
                        <router-link :to="{ name: 'create-customer', params: { storeId: store.slug } }" 
                        class="btn btn-primary mb-2" data-id="New Customer">New Customer</router-link>

                        <div style=""><!----> <!---->
                            <div class="overlap" style="">
                                <div class="w-100 TopTable__table VueTables VueTables--server" filterable="true">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group form-inline float-left VueTables__search">
                                                <span></span>
                                                <div class="VueTables__search-field"><label
                                                        for="VueTables__search_FDmt2" class="">Filter:</label><input
                                                        type="text" placeholder="Search query"
                                                        id="VueTables__search_FDmt2" autocomplete="off"
                                                        class="VueTables__search__input form-control "></div><span
                                                    class="d-flex align-items-end"> <!----> <!----></span>
                                            </div>
                                            <div class="form-group form-inline float-right VueTables__limit"></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="VueTables__table table table-striped" style="overflow: hidden;">
                                            <thead>
                                                <tr>
                                                    <th id="VueTables_th--actions" tabindex="0" class=""
                                                        style="position: relative;"><span title=""
                                                            class="VueTables__heading"></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--fullName" tabindex="0"
                                                        class="VueTables__sortable " style="position: relative;"><span
                                                            title="" class="VueTables__heading">Name</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--company" tabindex="0"
                                                        class="VueTables__sortable " style="position: relative;"><span
                                                            title="" class="VueTables__heading">Company</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--email" tabindex="0"
                                                        class="VueTables__sortable " style="position: relative;"><span
                                                            title="" class="VueTables__heading">Email</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--stores" tabindex="0" class=""
                                                        style="position: relative;"><span title=""
                                                            class="VueTables__heading">Stores</span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--manager" tabindex="0"
                                                        class="VueTables__sortable " style="position: relative;"><span
                                                            title="" class="VueTables__heading">Manager</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--isActive" tabindex="0"
                                                        class="VueTables__sortable " style="position: relative;"><span
                                                            title="" class="VueTables__heading">Active</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="VueTables__row undefined">
                                                    <td tabindex="0" class=""><span data-row="actions" title=""
                                                            class="text-ellipsis"><button type="button"
                                                                class="btn btn-primary">Add</button></span></td>
                                                    <td tabindex="0" class=""><span data-row="fullName"
                                                            title="Daniel Felix" class="text-ellipsis">Daniel
                                                            Felix</span></td>
                                                    <td tabindex="0" class=""><span data-row="company" title=""
                                                            class="text-ellipsis"><span></span></span></td>
                                                    <td tabindex="0" class=""><span data-row="email"
                                                            title="felixdaniel2056@gmail.com"
                                                            class="text-ellipsis"><span>felixdaniel2056@gmail.com</span></span>
                                                    </td>
                                                    <td tabindex="0" class=""><span data-row="stores"
                                                            title="[object Object]" class="text-ellipsis"><span>Ace
                                                                Rubber Stamps</span></span></td>
                                                    <td tabindex="0" class=""><span data-row="manager" title=""
                                                            class="text-ellipsis"><span>Daniel Feldman</span></span>
                                                    </td>
                                                    <td tabindex="0" class=""><span data-row="isActive" title="true"
                                                            class="text-ellipsis"><span>Yes</span></span></td>
                                                </tr><!---->
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
                                                <li class="VuePagination__pagination-item page-item active"><a
                                                        href="javascript:void(0)" class="page-link active"
                                                        role="button">1</a></li>
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
                                            <p class="VuePagination__count text-center col-md-12" style="">One record
                                            </p>
                                        </nav>
                                    </div>
                                </div> <!---->
                            </div> <!---->
                        </div>
                    </div><!---->
                </div><span tabindex="0"></span>
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
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        })
    }
}
</script>

<style></style>