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
                            <button class="btn btn-light mr-2">Category Types</button><!----><!---->
                            <button class="btn btn-light" data-toggle="modal" data-target="#add_category_modal">Add Category</button>
                            
                            <div class="dropdown b-dropdown m-md-2 btn-group" id="__BVID__989"><!----><button
                                    aria-haspopup="menu" aria-expanded="false" type="button"
                                    class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                    id="__BVID__989__BV_toggle_">•••</button>
                                <ul role="menu" tabindex="-1" class="dropdown-menu"
                                    aria-labelledby="__BVID__989__BV_toggle_">
                                    <li role="presentation"><a role="menuitem" href="#" target="_self"
                                            class="dropdown-item"><!----></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex row">
                        <div class="col-lg-9">
                            <div class="card p-3">
                                <div class="mr-2">
                                    <div class="m-0">
                                        <fieldset class="form-group" id="__BVID__995"><!---->
                                            <div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <label>Category Type</label>
                                                        <a target="_blank" hide-title="true">
                                                            <i class="fas fa-question-circle text-light ml-2 fa-fw"></i>
                                                        </a>
                                                    </div> <!---->
                                                </div>
                                                <div role="group" class="input-group"><!----><!---->
                                                    <select name="Category Type" class="custom-select"
                                                        id="__BVID__997">
                                                        <option disabled="disabled" value="">Please
                                                            select an option</option>
                                                        <option value="5e78eb3665803f3890f6799f">Products</option>
                                                    </select> <!---->
                                                </div> <!---->
                                                <div class="invalid-feedback d-block">

                                                </div> <!----><!----><!---->
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div style="">
                                    <div class="" style="position: relative;"><!----> <!----> <!---->
                                        <div id="taskFilters" class="collapse show">
                                            <div class="mb-2">
                                                <div class="d-flex flex-wrap">
                                                    <div class="mr-2 pb-2">
                                                        <div class="dropdown b-dropdown btn-group"
                                                            id="__BVID__1003"><!----><button aria-haspopup="menu"
                                                                aria-expanded="false" type="button"
                                                                class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                                id="__BVID__1003__BV_toggle_">
                                                                Populated from Products Shipping
                                                                <!----> <!----><!----> <!----> <span
                                                                    class="far fa-angle-down fa-xs text-muted"></span></button>
                                                            <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                                aria-labelledby="__BVID__1003__BV_toggle_">
                                                                <div
                                                                    class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                                    <a href="javascript:;">Select all</a>
                                                                    <div class="mx-2">|</div> <a
                                                                        href="javascript:;">Deselect
                                                                        all</a>
                                                                </div> <!---->
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                                                    style="min-width: 300px;">
                                                                    <div class="optionList">
                                                                        <div class="dropdown-item pb-1">
                                                                            <div
                                                                                class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-0-0"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                
                                                                                    for="styled-checkbox-0-0"
                                                                                    class="custom-control-label">
                                                                                    No
                                                                                </label></div>
                                                                        </div>
                                                                        <div class="dropdown-item pb-1">
                                                                            <div
                                                                                class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-0-1"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                
                                                                                    for="styled-checkbox-0-1"
                                                                                    class="custom-control-label">
                                                                                    Yes
                                                                                </label></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mr-2 pb-2">
                                                        <div class="dropdown b-dropdown btn-group"
                                                            id="__BVID__1006"><!----><button aria-haspopup="menu"
                                                                aria-expanded="false" type="button"
                                                                class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                                id="__BVID__1006__BV_toggle_">
                                                                Conditions
                                                                <!----> <!----><!----> <!----> <span
                                                                    class="far fa-angle-down fa-xs text-muted"></span></button>
                                                            <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                                aria-labelledby="__BVID__1006__BV_toggle_">
                                                                <div
                                                                    class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                                    <a href="javascript:;">Select all</a>
                                                                    <div class="mx-2">|</div> <a
                                                                        href="javascript:;">Deselect
                                                                        all</a>
                                                                </div> <!---->
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                                                    style="min-width: 300px;">
                                                                    <div class="optionList">
                                                                        <div class="dropdown-item pb-1">
                                                                            <div
                                                                                class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-1-0"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                
                                                                                    for="styled-checkbox-1-0"
                                                                                    class="custom-control-label">
                                                                                    No
                                                                                </label></div>
                                                                        </div>
                                                                        <div class="dropdown-item pb-1">
                                                                            <div
                                                                                class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-1-1"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                
                                                                                    for="styled-checkbox-1-1"
                                                                                    class="custom-control-label">
                                                                                    Yes
                                                                                </label></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mr-2 pb-2">
                                                        <div class="dropdown b-dropdown btn-group"
                                                            id="__BVID__1009"><!----><button aria-haspopup="menu"
                                                                aria-expanded="false" type="button"
                                                                class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                                id="__BVID__1009__BV_toggle_">
                                                                Global
                                                                <!----> <!----><!----> <!----> <span
                                                                    class="far fa-angle-down fa-xs text-muted"></span></button>
                                                            <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                                aria-labelledby="__BVID__1009__BV_toggle_">
                                                                <div
                                                                    class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                                    <a href="javascript:;">Select all</a>
                                                                    <div class="mx-2">|</div> <a
                                                                        href="javascript:;">Deselect
                                                                        all</a>
                                                                </div> <!---->
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                                                    style="min-width: 300px;">
                                                                    <div class="optionList">
                                                                        <div class="dropdown-item pb-1">
                                                                            <div
                                                                                class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-2-0"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                
                                                                                    for="styled-checkbox-2-0"
                                                                                    class="custom-control-label">
                                                                                    No
                                                                                </label></div>
                                                                        </div>
                                                                        <div class="dropdown-item pb-1">
                                                                            <div
                                                                                class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-2-1"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                
                                                                                    for="styled-checkbox-2-1"
                                                                                    class="custom-control-label">
                                                                                    Yes
                                                                                </label></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mr-2 pb-2">
                                                        <div class="dropdown b-dropdown btn-group"
                                                            id="__BVID__1012"><!----><button aria-haspopup="menu"
                                                                aria-expanded="false" type="button"
                                                                class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                                id="__BVID__1012__BV_toggle_">
                                                                Categories With Children
                                                                <!----> <!----><!----> <!----> <span
                                                                    class="far fa-angle-down fa-xs text-muted"></span></button>
                                                            <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                                aria-labelledby="__BVID__1012__BV_toggle_">
                                                                <div
                                                                    class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                                    <a href="javascript:;">Select all</a>
                                                                    <div class="mx-2">|</div> <a
                                                                        href="javascript:;">Deselect
                                                                        all</a>
                                                                </div> <!---->
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                                                    style="min-width: 300px;">
                                                                    <div class="optionList">
                                                                        <div class="dropdown-item pb-1">
                                                                            <div
                                                                                class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-3-0"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                
                                                                                    for="styled-checkbox-3-0"
                                                                                    class="custom-control-label">
                                                                                    No
                                                                                </label></div>
                                                                        </div>
                                                                        <div class="dropdown-item pb-1">
                                                                            <div
                                                                                class="custom-control custom-checkbox p-0">
                                                                                <input type="checkbox"
                                                                                    id="styled-checkbox-3-1"
                                                                                    class="custom-control-input"
                                                                                    value="[object Object]"> <label
                                                                                
                                                                                    for="styled-checkbox-3-1"
                                                                                    class="custom-control-label">
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
                                                    <div class="form-group form-inline float-left VueTables__search">
                                                        <span></span>
                                                        <div class="VueTables__search-field"><label
                                                                for="VueTables__search_qQKih" class="">Filter:</label><input
                                                                type="text" placeholder="Search query"
                                                                id="VueTables__search_qQKih" autocomplete="new-password"
                                                                class="VueTables__search__input form-control "
                                                                name="5f4733a30614e" style="background-color: inherit;">
                                                        </div><span class="d-flex align-items-end"> <!----> <!----></span>
                                                    </div>
                                                    <div class="form-group form-inline float-right VueTables__limit"></div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="VueTables__table table table-striped"
                                                    style="overflow: hidden;">
                                                    <thead>
                                                        <tr>
                                                            <th id="VueTables_th--name" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title=""
                                                                    class="VueTables__heading">Category</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div class="resize-handle"
                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                </div>
                                                            </th>
                                                            <th id="VueTables_th--slug" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title="" class="VueTables__heading">Slug</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div class="resize-handle"
                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                </div>
                                                            </th>
                                                            <th id="VueTables_th--actions" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">Actions</span>
                                                                <div class="resize-handle"
                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                </div>
                                                            </th>
                                                            <th id="VueTables_th--conditions" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">Conditions</span>
                                                                <div class="resize-handle"
                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                </div>
                                                            </th>
                                                            <th id="VueTables_th--productsCount" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">Products</span>
                                                                <div class="resize-handle"
                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                </div>
                                                            </th>
                                                            <th id="VueTables_th--parentCategory" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">Parents</span>
                                                                <div class="resize-handle"
                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                </div>
                                                            </th>
                                                            <th id="VueTables_th--childCategories" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">Children</span>
                                                                <div class="resize-handle"
                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                </div>
                                                            </th>
                                                            <th id="VueTables_th--relatedCategories" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">Related</span>
                                                                <div class="resize-handle"
                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                </div>
                                                            </th>
                                                            <th id="VueTables_th--isGlobal" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">Is Global</span>
                                                                <div class="resize-handle"
                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                </div>
                                                            </th>
                                                            <th id="VueTables_th--shippingPackages" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">Packages</span>
                                                                <div class="resize-handle"
                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                </div>
                                                            </th>
                                                            <th id="VueTables_th--isPopulated" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">Populated</span>
                                                                <div class="resize-handle"
                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                </div>
                                                            </th>
                                                            <th id="VueTables_th--googleShoppingID" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title=""
                                                                    class="VueTables__heading">GoogleID</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div class="resize-handle"
                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                </div>
                                                            </th>
                                                            <th id="VueTables_th--googleShoppingName" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title=""
                                                                    class="VueTables__heading">GoogleNames</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div class="resize-handle"
                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="VueTables__no-results">
                                                            <td tabindex="0" colspan="13" class="text-center">No matching
                                                                records</td>
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
                                                                class="page-link">&lt;&lt;</a></li>
                                                        <li
                                                            class="VuePagination__pagination-item page-item  VuePagination__pagination-item-prev-page disabled">
                                                            <a href="javascript:void(0);" disabled="disabled"
                                                                class="page-link">&lt;</a></li>
                                                        <li
                                                            class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-page disabled">
                                                            <a href="javascript:void(0);" disabled="disabled"
                                                                class="page-link">&gt;</a></li>
                                                        <li
                                                            class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-chunk disabled">
                                                            <a href="javascript:void(0);" disabled="disabled"
                                                                class="page-link">&gt;&gt;</a></li>
                                                    </ul>
                                                    <p class="VuePagination__count text-center col-md-12"
                                                        style="display: none;">0 records</p>
                                                </nav>
                                            </div>
                                        </div>
                                    </div> <!---->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pb-3">
                            <div>
                                <div class="card p-3">
                                    <div class="d-flex justify-content-start flex-column"><!----></div>
                                    <div><button type="button" class="btn btn-primary">Show Categories Tree</button>
                                        <div id="collapse-1" class="mt-2 collapse" style="display: none;">
                                            <div role="tree" class="tree" value="">
                                                <ul class="tree-root"></ul> <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!----><!---->
                    </div>
                </div>
            </div>
        </nav>

        <div id="add_category_modal" role="dialog" aria-labelledby="add_category_modal" aria-describedby="add_category_modal" class="modal fade right" aria-modal="true">
            <div class="modal-dialog modal-md modal-dialog modal-dialog-slideout modal-dialog-slideout-right modal-dialog-slideout-md">
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__761__BV_label_">
                                        <label>Category Type</label>
                                        <i class="fas fa-question-circle text-light ml-2"></i>
                                    </legend>
                                    
                                    <div>
                                        <div class="form-group m-0"><!---->
                                            <div tabindex="-1" class="multiselect" loadonfocus="true"
                                                validate="[object Object]" optionsv="" orderby="name" ascending="1"
                                                path="/categories/category-types" isobject="true">
                                                <div class="multiselect__select"></div>
                                                <div class="multiselect__tags">
                                                    <div class="multiselect__tags-wrap" style="display: none;"></div>
                                                    <!---->
                                                    <div class="multiselect__spinner" style="display: none;"></div>
                                                    <input name="" type="text" autocomplete="nope"
                                                        placeholder="Select option" tabindex="0"
                                                        class="multiselect__input"
                                                        style="width: 0px; position: absolute; padding: 0px;"> <!---->
                                                    <span class="multiselect__placeholder">
                                                        Select option
                                                    </span>
                                                </div>
                                                <div tabindex="-1" class="multiselect__content-wrapper"
                                                    style="max-height: 300px; display: none;">
                                                    <ul class="multiselect__content" style="display: block;"> <!---->
                                                        <li style="display: none;">
                                                            <span class="multiselect__option">
                                                                <span> Oops! No elements found. Consider changing the search query.</span>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="multiselect__option">
                                                                <span>
                                                                    <span>No Options</span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> <!---->
                                        </div><!----><!----><!---->
                                    </div>
                                </fieldset>

                                <div class="form-group">
                                    <div>
                                        <fieldset class="form-group" id="__BVID__768"><!---->
                                            <div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center">
                                                    <div><label>Name</label> <a
                                                            target="_blank" hide-title="true"><i
                                                            
                                                                class="fas fa-question-circle text-light ml-2 fa-fw"></i></a>
                                                    </div> <!---->
                                                </div>
                                                <div role="group" class="input-group"><!----><!---->
                                                    <input name="Name" type="text" autocomplete="on"
                                                        class="form-control" maxlength="255"
                                                        onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                        data-hj-allow="" data-mask="" data-previous-value=""
                                                        id="__BVID__770"> <!----></div> <!---->
                                                <div class="invalid-feedback d-block">

                                                </div> <!----><!----><!---->
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>URL Slug <i class="fas fa-question-circle text-light ml-2"></i></label>
                                    <input type="text" class="form-control">
                                </div>

                                <fieldset class="form-group" id="__BVID__772">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0"
                                        id="__BVID__772__BV_label_"><label>Parent Category</label><i
                                            class="fas fa-question-circle text-light ml-2"></i></legend>
                                    <div>
                                        <div class="form-group m-0"><!---->
                                            <div tabindex="-1" class="multiselect" loadonfocus="true" optionsv=""
                                                orderby="name" ascending="1"
                                                path="/categories/all?categoryType=undefined&amp;excludeParent=undefined&amp;storeId=64f8bf1959a50f5307a44a93"
                                                isobject="true">
                                                <div class="multiselect__select"></div>
                                                <div class="multiselect__tags">
                                                    <div class="multiselect__tags-wrap" style="display: none;"></div>
                                                    <!---->
                                                    <div class="multiselect__spinner" style="display: none;"></div>
                                                    <input name="" type="text" autocomplete="nope"
                                                        placeholder="Choose Parent Category" tabindex="0"
                                                        class="multiselect__input"
                                                        style="width: 0px; position: absolute; padding: 0px;"> <!---->
                                                    <span class="multiselect__placeholder">
                                                        Choose Parent Category
                                                    </span>
                                                </div>
                                                <div tabindex="-1" class="multiselect__content-wrapper"
                                                    style="max-height: 300px; display: none;">
                                                    <ul class="multiselect__content" style="display: block;"> <!---->
                                                        <li style="display: none;"><span
                                                                class="multiselect__option"><span> Oops! No elements
                                                                    found. Consider changing the search query.
                                                                </span></span></li>
                                                        <li><span class="multiselect__option"><span><span>No
                                                                        Options</span></span></span></li>
                                                    </ul>
                                                </div>
                                            </div> <!---->
                                        </div><!----><!----><!---->
                                    </div>
                                </fieldset>

                                <div class="mb-3">
                                    <button @click="showAdvancedOptions = !showAdvancedOptions" type="button" class="btn btn-link btn-block">Advanced options</button>
                                </div>

                                <div class="collapse" :class="{'show': showAdvancedOptions}">
                                    <div class="form-group">
                                        <label>
                                            Description <i class="fas fa-question-circle text-light ml-2"></i>
                                        </label>
                                        
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                    
                                    <fieldset class="form-group disabled" id="__BVID__779">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__779__BV_label_">
                                            Child Categories
                                        </legend>
                                        
                                        <div>
                                            <div class="form-group m-0"><!---->
                                                <div tabindex="-1" class="multiselect" loadonfocus="true" optionsv=""
                                                    orderby="name" ascending="1"
                                                    path="/categories/all?categoryType=undefined&amp;excludeChildren=undefined&amp;storeId=64f8bf1959a50f5307a44a93"
                                                    isobject="true">
                                                    <div class="multiselect__select"></div>
                                                    <div class="multiselect__tags">
                                                        <div class="multiselect__tags-wrap" style="display: none;">
                                                        </div> <!---->
                                                        <div class="multiselect__spinner" style="display: none;"></div>
                                                        <input name="" type="text" autocomplete="nope"
                                                            placeholder="Choose Parent Category" tabindex="0"
                                                            class="multiselect__input"
                                                            style="width: 0px; position: absolute; padding: 0px;">
                                                            <!----> 
                                                        <span class="multiselect__placeholder">
                                                            Choose Parent Category
                                                        </span>
                                                    </div>
                                                    <div tabindex="-1" class="multiselect__content-wrapper"
                                                        style="max-height: 300px; display: none;">
                                                        <ul class="multiselect__content" style="display: block;">
                                                            <!---->
                                                            <li style="display: none;"><span
                                                                    class="multiselect__option">
                                                                    <span> Oops! No elements found. Consider changing the search query.
                                                                    </span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="multiselect__option">
                                                                    <span>No Options</span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div> <!---->
                                            </div><!----><!----><!---->
                                        </div>
                                    </fieldset>

                                    <fieldset class="form-group" id="__BVID__784">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0"
                                            id="__BVID__784__BV_label_"><label>Related Categories</label><i
                                                class="fas fa-question-circle text-light ml-2"></i></legend>
                                        <div>
                                            <div class="form-group m-0"><!---->
                                                <div tabindex="-1" class="multiselect" loadonfocus="true" optionsv=""
                                                    orderby="name" ascending="1"
                                                    path="/categories/all?categoryType=undefined&amp;exclude=undefined&amp;storeId=64f8bf1959a50f5307a44a93"
                                                    isobject="true">
                                                    <div class="multiselect__select"></div>
                                                    <div class="multiselect__tags">
                                                        <div class="multiselect__tags-wrap" style="display: none;">
                                                        </div> <!---->
                                                        <div class="multiselect__spinner" style="display: none;"></div>
                                                        <input name="" type="text" autocomplete="nope"
                                                            placeholder="Choose Parent Category" tabindex="0"
                                                            class="multiselect__input"
                                                            style="width: 0px; position: absolute; padding: 0px;">
                                                        <!----> <span class="multiselect__placeholder">
                                                            Choose Parent Category
                                                        </span>
                                                    </div>
                                                    <div tabindex="-1" class="multiselect__content-wrapper"
                                                        style="max-height: 300px; display: none;">
                                                        <ul class="multiselect__content" style="display: block;">
                                                            <!---->
                                                            <li style="display: none;"><span
                                                                    class="multiselect__option"><span> Oops! No elements
                                                                        found. Consider changing the search query.
                                                                    </span></span></li>
                                                            <li><span class="multiselect__option"><span><span>No
                                                                            Options</span></span></span></li>
                                                        </ul>
                                                    </div>
                                                </div> <!---->
                                            </div><!----><!----><!---->
                                        </div>
                                    </fieldset>

                                    <fieldset class="form-group" id="__BVID__790">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0"
                                            id="__BVID__790__BV_label_"><label>Redirect url(s)</label></legend>
                                        <div>
                                            <div role="group" tabindex="-1" class="b-form-tags form-control h-auto"
                                                id="__BVID__791" aria-describedby="__BVID__791___selected_tags__">
                                                <output role="status" aria-live="off" aria-atomic="true"
                                                    aria-relevant="additions text" class="sr-only"
                                                    id="__BVID__791___selected_tags__"
                                                    for="__BVID__791___input__"></output>
                                                <div role="status" aria-live="off" aria-atomic="true" class="sr-only"
                                                    id="__BVID__791___removed_tags__"></div>
                                                <ul class="b-form-tags-list list-unstyled mb-0 d-flex flex-wrap align-items-center"
                                                    id="__BVID__791___tag_list__">
                                                    <li role="none" aria-live="off"
                                                        class="b-form-tags-field flex-grow-1"
                                                        aria-controls="__BVID__791___tag_list__">
                                                        <div role="group" class="d-flex"><input value="" type="text"
                                                                placeholder="Add redirect url"
                                                                class="b-form-tags-input w-100 flex-grow-1 p-0 m-0 bg-transparent border-0"
                                                                id="__BVID__791___input__"
                                                                style="outline: 0px; min-width: 5rem;"><button
                                                                type="button" disabled="disabled"
                                                                class="btn b-form-tags-button py-0 btn-outline-secondary disabled invisible"
                                                                style="font-size: 90%;">Add</button></div>
                                                    </li>
                                                </ul>
                                                <div aria-live="polite" aria-atomic="true"><!----><!----><!----></div>
                                                <!---->
                                            </div><!----><!----><!---->
                                        </div>
                                    </fieldset><!---->
                                    
                                    <fieldset class="form-group" id="__BVID__792"><!---->
                                        <div>
                                            <div class="form-group">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div><label><!---->
                                                            Store Roles
                                                        </label> <a target="_blank" hide-title="true"><i
                                                                class="fas fa-question-circle text-light ml-2 fa-fw"></i></a>
                                                    </div> <!---->
                                                </div>
                                                <div tabindex="-1" class="multiselect" loadonfocus="true" optionsv=""
                                                    orderby="name" ascending="1"
                                                    path="/stores/64f8bf1959a50f5307a44a93/roles" isobject="true"
                                                    helpoptions="[object Object]">
                                                    <div class="multiselect__select"></div>
                                                    <div class="multiselect__tags">
                                                        <div class="multiselect__tags-wrap" style="display: none;">
                                                        </div> <!---->
                                                        <div class="multiselect__spinner" style="display: none;"></div>
                                                        <input name="Store roles" type="text" autocomplete="nope"
                                                            placeholder="Select option" tabindex="0"
                                                            class="multiselect__input"
                                                            style="width: 0px; position: absolute; padding: 0px;">
                                                        <!----> <span class="multiselect__placeholder">
                                                            Select option
                                                        </span>
                                                    </div>
                                                    <div tabindex="-1" class="multiselect__content-wrapper"
                                                        style="max-height: 300px; display: none;">
                                                        <ul class="multiselect__content" style="display: block;">
                                                            <!---->
                                                            <li style="display: none;"><span
                                                                    class="multiselect__option"><span> Oops! No elements
                                                                        found. Consider changing the search query.
                                                                    </span></span></li>
                                                            <li><span class="multiselect__option"><span><span>No Store
                                                                            roles Options</span></span></span></li>
                                                        </ul>
                                                    </div>
                                                </div> <!---->
                                            </div><!----><!----><!---->
                                        </div>
                                    </fieldset><!----><!----><!----><!---->
                                    <div class="mt-3 w-100"><!----></div>
                                </div><!---->
                            </div>
                        </div>
                        <div class="modal-fixed-footer card-footer text-right bg-white d-flex align-items-center justify-content-end"
                            style="z-index: 1;">
                            <button type="button" class="btn btn-primary">
                                <i v-if="isLoading" class="fas fa-spinner fa-spin"></i>
                                <i v-else class="fas fa-save"></i>
                                Save Category
                            </button>
                            <a class="btn btn-link mr-2" data-dismiss="modal">Cancel</a>
                        </div>
                    </div><!---->
                </div>
                <span tabindex="0"></span>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';

export default {
    name: "Categories",

    data() {
        return {
            isLoading: false,
            showAdvancedOptions: false,

            categories: [],
            category_types: [],

            add_category: {
                name: '',
                slug: '',
                description: '',
                parent_category: '',
                child_categories: [],
                related_categories: [],
                redirect_urls: [],
                store_roles: [],
            }
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        })
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

        addCategory() {
            this.isLoading = true;
            axios.post('/stores/categories/create', this.add_category, {
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

<style></style>