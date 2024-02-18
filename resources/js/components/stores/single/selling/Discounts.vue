<template>
    <div class="d-flex store-editor row no-gutters">
        <div class="col-12 store-editor-sidebar">
            <div id="store-menu-view" class="container-fluid" store="[object Object]">
                <div data-id="mPowerNavigation" class="pb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <nav class="small">
                            <ol class="breadcrumb pb-0">
                                <li class="breadcrumb-item">
                                    <router-link :to="{ name: 'store' }" title="close">Menu</router-link>
                                </li>
                                <li class="breadcrumb-item active">Special &amp; Discounts</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div data-id="mPower-Special &amp; Discounts" class="w-100">
                    <div class="tabs nav-tabs-underline" id="__BVID__3514"><!---->
                        <div class="">
                            <ul role="tablist" class="nav nav-tabs" id="__BVID__3514__BV_tab_controls_"><!---->
                                <li role="presentation" class="nav-item"><a id="Discounts___BV_tab_button__" role="tab"
                                        aria-selected="true" aria-setsize="2" aria-posinset="1" aria-controls="Discounts"
                                        href="#" target="_self" class="nav-link active">Discounts</a></li>
                                <li role="presentation" class="nav-item"><a id="Specials___BV_tab_button__" role="tab"
                                        tabindex="-1" aria-selected="false" aria-setsize="2" aria-posinset="2"
                                        aria-controls="Specials" href="#" target="_self" class="nav-link">Specials</a></li>
                                <!---->
                            </ul>
                        </div>
                        <div class="tab-content mt-3" id="__BVID__3514__BV_tab_container_">
                            <div role="tabpanel" id="Discounts" aria-hidden="false"
                                aria-labelledby="Discounts___BV_tab_button__" class="tab-pane active">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <h3 class="mb-0">Discounts</h3><i
                                                class="fas fa-question-circle text-light ml-2"></i>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2">
                                                <div>
                                                    <div class="d-flex"><button title="Add Discount" type="button"
                                                            class="btn btn-primary"><i class="far"></i>
                                                            Add Discount
                                                        </button></div><!---->
                                                </div>
                                            </div>
                                            <div><button type="button" class="btn btn-primary"><!----> Import Discounts
                                                </button><!----></div>
                                        </div>
                                    </div>
                                    <div style="">
                                        <div class="" style="position: relative;"><!----> <!----> <!---->
                                            <div id="taskFilters" class="collapse show">
                                                <div class="mb-2">
                                                    <div class="d-flex flex-wrap">
                                                        <div data-v-20278007="" class="mr-2 pb-2">
                                                            <div data-v-20278007="" class="dropdown b-dropdown btn-group"
                                                                id="__BVID__3532"><!----><button aria-haspopup="menu"
                                                                    aria-expanded="false" type="button"
                                                                    class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                                    id="__BVID__3532__BV_toggle_">
                                                                    Type
                                                                    <!----> <!----><!----> <!----> <span data-v-20278007=""
                                                                        class="far fa-angle-down fa-xs text-muted"></span></button>
                                                                <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                                    aria-labelledby="__BVID__3532__BV_toggle_">
                                                                    <div data-v-20278007=""
                                                                        class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                                        <a data-v-20278007="" href="javascript:;">Select
                                                                            all</a>
                                                                        <div data-v-20278007="" class="mx-2">|</div> <a
                                                                            data-v-20278007="" href="javascript:;">Deselect
                                                                            all</a>
                                                                    </div> <!---->
                                                                    <div data-v-20278007=""
                                                                        class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                                                        style="min-width: 300px;">
                                                                        <div data-v-20278007="" class="optionList">
                                                                            <div data-v-20278007=""
                                                                                class="dropdown-item pb-1">
                                                                                <div data-v-20278007=""
                                                                                    class="custom-control custom-checkbox p-0">
                                                                                    <input data-v-20278007=""
                                                                                        type="checkbox"
                                                                                        id="styled-checkbox-0-0"
                                                                                        class="custom-control-input"
                                                                                        value="Allowance"> <label
                                                                                        data-v-20278007=""
                                                                                        for="styled-checkbox-0-0"
                                                                                        class="custom-control-label">
                                                                                        Allowance
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div data-v-20278007=""
                                                                                class="dropdown-item pb-1">
                                                                                <div data-v-20278007=""
                                                                                    class="custom-control custom-checkbox p-0">
                                                                                    <input data-v-20278007=""
                                                                                        type="checkbox"
                                                                                        id="styled-checkbox-0-1"
                                                                                        class="custom-control-input"
                                                                                        value="Flat Dollar Amount"> <label
                                                                                        data-v-20278007=""
                                                                                        for="styled-checkbox-0-1"
                                                                                        class="custom-control-label">
                                                                                        Flat Dollar Amount
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div data-v-20278007=""
                                                                                class="dropdown-item pb-1">
                                                                                <div data-v-20278007=""
                                                                                    class="custom-control custom-checkbox p-0">
                                                                                    <input data-v-20278007=""
                                                                                        type="checkbox"
                                                                                        id="styled-checkbox-0-2"
                                                                                        class="custom-control-input"
                                                                                        value="Flat Percentage"> <label
                                                                                        data-v-20278007=""
                                                                                        for="styled-checkbox-0-2"
                                                                                        class="custom-control-label">
                                                                                        Flat Percentage
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div data-v-20278007="" class="mr-2 pb-2">
                                                            <div data-v-20278007="" class="dropdown b-dropdown btn-group"
                                                                id="__BVID__3535"><!----><button aria-haspopup="menu"
                                                                    aria-expanded="false" type="button"
                                                                    class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                                    id="__BVID__3535__BV_toggle_">
                                                                    Created By
                                                                    <!----> <!----><!----> <!----> <span data-v-20278007=""
                                                                        class="far fa-angle-down fa-xs text-muted"></span></button>
                                                                <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                                    aria-labelledby="__BVID__3535__BV_toggle_">
                                                                    <div data-v-20278007=""
                                                                        class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                                        <a data-v-20278007="" href="javascript:;">Select
                                                                            all</a>
                                                                        <div data-v-20278007="" class="mx-2">|</div> <a
                                                                            data-v-20278007="" href="javascript:;">Deselect
                                                                            all</a>
                                                                    </div> <!----> <!---->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mr-2 pb-2"><button type="button"
                                                                class="btn btn-link btn-block">Clear filters</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!---->
                                        <div class="overlap" style="">
                                            <div class="w-100 TopTable__table VueTables VueTables--server"
                                                filterable="true">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline float-left VueTables__search">
                                                            <span></span>
                                                            <div class="VueTables__search-field"><label
                                                                    for="VueTables__search_PQmtA"
                                                                    class="">Filter:</label><input type="text"
                                                                    placeholder="Search query" id="VueTables__search_PQmtA"
                                                                    autocomplete="off"
                                                                    class="VueTables__search__input form-control "></div>
                                                            <span class="d-flex align-items-end"> <!----> <!----></span>
                                                        </div>
                                                        <div class="form-group form-inline float-right VueTables__limit">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="VueTables__table table table-striped"
                                                        style="overflow: hidden;">
                                                        <thead>
                                                            <tr>
                                                                <th id="VueTables_th--name" tabindex="0"
                                                                    class="VueTables__sortable "
                                                                    style="position: relative;"><span title=""
                                                                        class="VueTables__heading">Name</span><span
                                                                        class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                    <div class="resize-handle"
                                                                        style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                                                    </div>
                                                                </th>
                                                                <th id="VueTables_th--code" tabindex="0" class=""
                                                                    style="position: relative;"><span title=""
                                                                        class="VueTables__heading">Code</span>
                                                                    <div class="resize-handle"
                                                                        style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                                                    </div>
                                                                </th>
                                                                <th id="VueTables_th--type" tabindex="0" class=""
                                                                    style="position: relative;"><span title=""
                                                                        class="VueTables__heading">Type</span>
                                                                    <div class="resize-handle"
                                                                        style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                                                    </div>
                                                                </th>
                                                                <th id="VueTables_th--conditions" tabindex="0" class=""
                                                                    style="position: relative;"><span title=""
                                                                        class="VueTables__heading">Conditions</span>
                                                                    <div class="resize-handle"
                                                                        style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                                                    </div>
                                                                </th>
                                                                <th id="VueTables_th--usedCount" tabindex="0"
                                                                    class="VueTables__sortable "
                                                                    style="position: relative;"><span title=""
                                                                        class="VueTables__heading">Orders</span><span
                                                                        class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                    <div class="resize-handle"
                                                                        style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                                                    </div>
                                                                </th>
                                                                <th id="VueTables_th--totalApplied" tabindex="0"
                                                                    class="VueTables__sortable "
                                                                    style="position: relative;"><span title=""
                                                                        class="VueTables__heading">Total</span><span
                                                                        class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                    <div class="resize-handle"
                                                                        style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                                                    </div>
                                                                </th>
                                                                <th id="VueTables_th--actions" tabindex="0" class=""
                                                                    style="position: relative;"><span title=""
                                                                        class="VueTables__heading">Actions</span>
                                                                    <div class="resize-handle"
                                                                        style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="VueTables__no-results">
                                                                <td tabindex="0" colspan="7" class="text-center">No matching
                                                                    records</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="VuePagination row col-md-12 justify-content-center">
                                                    <nav class="text-center">
                                                        <ul class="pagination VuePagination__pagination"
                                                            style="display: none;">
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
                                                        <p class="VuePagination__count text-center col-md-12"
                                                            style="display: none;">0 records</p>
                                                    </nav>
                                                </div>
                                            </div> <!---->
                                        </div> <!---->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" id="Specials" aria-hidden="true"
                                aria-labelledby="Specials___BV_tab_button__" class="tab-pane" style="display: none;"><!---->
                            </div><!---->
                        </div>
                    </div>
                </div>
            </div>
        </div><!---->
    </div>
</template>

<script>
export default {

}
</script>

<style></style>