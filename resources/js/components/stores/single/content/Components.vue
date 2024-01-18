<template>
    <div>
        <nav id="menu" class="px-3">
            <div class="sticky-top bg-white">
                <nav class="small">
                    <ol class="breadcrumb pb-0">
                        <li class="breadcrumb-item">
                            <router-link :to="{ name: 'store' }" title="close">Menu</router-link>
                        </li>
                        <li class="breadcrumb-item active">Components</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between pb-3 align-items-center border-bottom">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0">Components</h4><i class="fas fa-question-circle text-light ml-2"></i>
                    </div><button type="button" class="btn btn-light">Add Component</button>
                </div>
            </div>
            <ul class="nav nav-tabs nav-tabs-underline">
                <li class="nav-item"><a class="nav-link active">Live</a></li>
                <li class="nav-item"><a class="nav-link">Draft</a></li>
            </ul>
            <div tabfilterclass="col-6 pb-2 pt-2" class="table-sm mt-3" style="">
                <div class="" style="position: relative;"><!----> <!----> <!---->
                    <div id="taskFilters" class="collapse show">
                        <div class="mb-2">
                            <div class="d-flex flex-wrap">
                                <div data-v-20278007="" class="mr-2 pb-2">
                                    <div data-v-20278007="" class="dropdown b-dropdown btn-group" id="__BVID__1259">
                                        <!----><button aria-haspopup="menu" aria-expanded="false" type="button"
                                            class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                            id="__BVID__1259__BV_toggle_">
                                            Is Global
                                            <span data-v-20278007="" class="badge badge-primary">1</span> <!----><!---->
                                            <!----> <span data-v-20278007=""
                                                class="far fa-angle-down fa-xs text-muted"></span></button>
                                        <ul role="menu" tabindex="-1" class="dropdown-menu"
                                            aria-labelledby="__BVID__1259__BV_toggle_">
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
                                                    <div data-v-20278007="" class="custom-control custom-checkbox p-0">
                                                        <input data-v-20278007="" type="checkbox"
                                                            id="styled-checkbox-0-0" class="custom-control-input"
                                                            value="No"> <label data-v-20278007=""
                                                            for="styled-checkbox-0-0" class="custom-control-label">
                                                            No
                                                        </label></div>
                                                </div>
                                                <div data-v-20278007="" class="dropdown-item pb-1">
                                                    <div data-v-20278007="" class="custom-control custom-checkbox p-0">
                                                        <input data-v-20278007="" type="checkbox"
                                                            id="styled-checkbox-0-1" class="custom-control-input"
                                                            value="Yes"> <label data-v-20278007=""
                                                            for="styled-checkbox-0-1" class="custom-control-label">
                                                            Yes
                                                        </label></div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="mr-2 pb-2"><button type="button" class="btn btn-link btn-block">Clear
                                    filters</button></div>
                        </div>
                    </div>
                </div>
            </div> <!---->
            <div class="" style="">
                <div class="w-100 TopTable__table VueTables VueTables--server" filterable="true">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-inline float-left VueTables__search"><span></span>
                                <div class="VueTables__search-field"><label for="VueTables__search_AiNVs"
                                        class="">Filter:</label><input type="text" placeholder="Search query"
                                        id="VueTables__search_AiNVs" autocomplete="new-password"
                                        class="VueTables__search__input form-control " name="78bc5ade451be"
                                        style="background-color: inherit;"></div><span class="d-flex align-items-end">
                                    <!----> <!----></span>
                            </div>
                            <div class="form-group form-inline float-right VueTables__limit"></div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="VueTables__table table table-striped" style="overflow: hidden;">
                            <thead>
                                <tr>
                                    <th id="VueTables_th--componentId.tagName" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Name</span><span
                                            class="VueTables__sort-icon float-right fal fa-sort-amount-down"></span>
                                        <div class="resize-handle"
                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 70px;">
                                        </div>
                                    </th>
                                    <th id="VueTables_th--description" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Description</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div class="resize-handle"
                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 70px;">
                                        </div>
                                    </th>
                                    <th id="VueTables_th--isEnabled" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Enabled</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div class="resize-handle"
                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 70px;">
                                        </div>
                                    </th>
                                    <th id="VueTables_th--isGlobal" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Global</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div class="resize-handle"
                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 70px;">
                                        </div>
                                    </th>
                                    <th id="VueTables_th--editMenu" tabindex="0" class="" style="position: relative;">
                                        <span title="" class="VueTables__heading"></span>
                                        <div class="resize-handle"
                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 70px;">
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="VueTables__row undefined">
                                    <td tabindex="0" class="">
                                        <div class="nav-link"><a>Products by Facet</a><!----><!----><!----><!----></div>
                                    </td>
                                    <td tabindex="0" class=""><span class="small">
                                            Facets: Products
                                        </span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="text-right">
                                            <div class="nav-link"><a data-toggle="dropdown" class="btn btn-link"><i
                                                        class="far fa-ellipsis-h fa-1x"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a
                                                        class="dropdown-item"><span>Link Before</span></a><a
                                                        class="dropdown-item"><span>Link After</span></a><a
                                                        class="dropdown-item"><span>Swap</span></a><a
                                                        class="dropdown-item"><span>Delete</span></a></div>
                                            </div>
                                        </span></td>
                                </tr><!---->
                                <tr class="VueTables__row undefined">
                                    <td tabindex="0" class="">
                                        <div class="nav-link"><a>Products by Category</a><!----><!----><!----><!---->
                                        </div>
                                    </td>
                                    <td tabindex="0" class=""><span class="small">
                                            List of products by category
                                        </span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="text-right">
                                            <div class="nav-link"><a data-toggle="dropdown" class="btn btn-link"><i
                                                        class="far fa-ellipsis-h fa-1x"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a
                                                        class="dropdown-item"><span>Link Before</span></a><a
                                                        class="dropdown-item"><span>Link After</span></a><a
                                                        class="dropdown-item"><span>Swap</span></a><a
                                                        class="dropdown-item"><span>Delete</span></a></div>
                                            </div>
                                        </span></td>
                                </tr><!---->
                                <tr class="VueTables__row undefined">
                                    <td tabindex="0" class="">
                                        <div class="nav-link"><a>Navbar</a><!----><small class="d-block">
                                                Linked After: Mega Menu, Info Bar
                                            </small><!----><!----></div>
                                    </td>
                                    <td tabindex="0" class=""><span class="small">
                                            Main navbar
                                        </span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="text-right">
                                            <div class="nav-link"><a data-toggle="dropdown" class="btn btn-link"><i
                                                        class="far fa-ellipsis-h fa-1x"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a
                                                        class="dropdown-item"><span>Link Before</span></a><a
                                                        class="dropdown-item"><span>Link After</span></a><a
                                                        class="dropdown-item"><span>Swap</span></a><a
                                                        class="dropdown-item"><span>Delete</span></a></div>
                                            </div>
                                        </span></td>
                                </tr><!---->
                                <tr class="VueTables__row undefined">
                                    <td tabindex="0" class="">
                                        <div class="nav-link"><a>Mega Menu</a><!----><!----><!----><small
                                                class="d-block">
                                                Linked After Parent: Navbar
                                            </small></div>
                                    </td>
                                    <td tabindex="0" class=""><span class="small">
                                            Main mega menu
                                        </span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="text-right">
                                            <div class="nav-link"><a data-toggle="dropdown" class="btn btn-link"><i
                                                        class="far fa-ellipsis-h fa-1x"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a
                                                        class="dropdown-item"><span>Link Before</span></a><a
                                                        class="dropdown-item"><span>Link After</span></a><a
                                                        class="dropdown-item"><span>Swap</span></a><a
                                                        class="dropdown-item"><span>Delete</span></a></div>
                                            </div>
                                        </span></td>
                                </tr><!---->
                                <tr class="VueTables__row undefined">
                                    <td tabindex="0" class="">
                                        <div class="nav-link"><a>Info Bar</a><!----><!----><!----><small
                                                class="d-block">
                                                Linked After Parent: Navbar
                                            </small></div>
                                    </td>
                                    <td tabindex="0" class=""><span class="small">
                                            Info Bar
                                        </span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="text-right">
                                            <div class="nav-link"><a data-toggle="dropdown" class="btn btn-link"><i
                                                        class="far fa-ellipsis-h fa-1x"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a
                                                        class="dropdown-item"><span>Link Before</span></a><a
                                                        class="dropdown-item"><span>Link After</span></a><a
                                                        class="dropdown-item"><span>Swap</span></a><a
                                                        class="dropdown-item"><span>Delete</span></a></div>
                                            </div>
                                        </span></td>
                                </tr><!---->
                                <tr class="VueTables__row undefined">
                                    <td tabindex="0" class="">
                                        <div class="nav-link"><a>H1</a><!----><!----><!----><!----></div>
                                    </td>
                                    <td tabindex="0" class=""><span class="small">
                                            Categories: H1
                                        </span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="text-right">
                                            <div class="nav-link"><a data-toggle="dropdown" class="btn btn-link"><i
                                                        class="far fa-ellipsis-h fa-1x"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a
                                                        class="dropdown-item"><span>Link Before</span></a><a
                                                        class="dropdown-item"><span>Link After</span></a><a
                                                        class="dropdown-item"><span>Swap</span></a><a
                                                        class="dropdown-item"><span>Delete</span></a></div>
                                            </div>
                                        </span></td>
                                </tr><!---->
                                <tr class="VueTables__row undefined">
                                    <td tabindex="0" class="">
                                        <div class="nav-link"><a>Design Blocks</a><!----><!----><!----><!----></div>
                                    </td>
                                    <td tabindex="0" class=""><span class="small">
                                            Footer
                                        </span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="text-right">
                                            <div class="nav-link"><a data-toggle="dropdown" class="btn btn-link"><i
                                                        class="far fa-ellipsis-h fa-1x"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a
                                                        class="dropdown-item"><span>Link Before</span></a><a
                                                        class="dropdown-item"><span>Link After</span></a><a
                                                        class="dropdown-item"><span>Swap</span></a><a
                                                        class="dropdown-item"><span>Delete</span></a></div>
                                            </div>
                                        </span></td>
                                </tr><!---->
                                <tr class="VueTables__row undefined">
                                    <td tabindex="0" class="">
                                        <div class="nav-link"><a>Category Breadcrumb</a><!----><!----><!----><!---->
                                        </div>
                                    </td>
                                    <td tabindex="0" class=""><span class="small">
                                            Categories: Breadcrumbs
                                        </span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="text-right">
                                            <div class="nav-link"><a data-toggle="dropdown" class="btn btn-link"><i
                                                        class="far fa-ellipsis-h fa-1x"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a
                                                        class="dropdown-item"><span>Link Before</span></a><a
                                                        class="dropdown-item"><span>Link After</span></a><a
                                                        class="dropdown-item"><span>Swap</span></a><a
                                                        class="dropdown-item"><span>Delete</span></a></div>
                                            </div>
                                        </span></td>
                                </tr><!---->
                                <tr class="VueTables__row undefined">
                                    <td tabindex="0" class="">
                                        <div class="nav-link"><a>Blog List</a><!----><!----><!----><!----></div>
                                    </td>
                                    <td tabindex="0" class=""><span class="small">
                                            List of blog posts by blog category.
                                        </span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="d-flex align-items-center"><i
                                                class="far fa-check text-success"></i></span></td>
                                    <td tabindex="0" class=""><span class="text-right">
                                            <div class="nav-link"><a data-toggle="dropdown" class="btn btn-link"><i
                                                        class="far fa-ellipsis-h fa-1x"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a
                                                        class="dropdown-item"><span>Link Before</span></a><a
                                                        class="dropdown-item"><span>Link After</span></a><a
                                                        class="dropdown-item"><span>Swap</span></a><a
                                                        class="dropdown-item"><span>Delete</span></a></div>
                                            </div>
                                        </span></td>
                                </tr><!---->
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
                                    <a href="javascript:void(0);" disabled="disabled" class="page-link">&lt;</a></li>
                                <li class="VuePagination__pagination-item page-item active"><a href="javascript:void(0)"
                                        class="page-link active" role="button">1</a></li>
                                <li
                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-page disabled">
                                    <a href="javascript:void(0);" disabled="disabled" class="page-link">&gt;</a></li>
                                <li
                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-chunk disabled">
                                    <a href="javascript:void(0);" disabled="disabled" class="page-link">&gt;&gt;</a>
                                </li>
                            </ul>
                            <p class="VuePagination__count text-center col-md-12" style="">9 records</p>
                        </nav>
                    </div>
                </div>
            </div> <!---->
        </div>
    </nav>
</div></template>

<script>
export default {

}
</script>

<style></style>