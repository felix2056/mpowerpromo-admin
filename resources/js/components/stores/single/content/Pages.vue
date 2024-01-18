<template>
    <div store="[object Object]">
        <div id="menu">
            <div class="sticky-top bg-white">
                <nav class="mx-3 small py-0">
                    <ol class="breadcrumb pb-0">
                        <li class="breadcrumb-item">
                            <router-link :to="{ name: 'store' }" title="close">Menu</router-link>
                        </li>
                        <li class="breadcrumb-item active">Pages</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between border-bottom p-2 align-items-center mx-2">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0">Pages</h5>
                        <i class="fas fa-question-circle text-light ml-2"></i>
                    </div>
                    <button type="button" class="btn btn-light">
                        Add Page
                    </button>
                </div>
            </div>
            
            <div class="p-3">
                <div limit="10" class="table-sm" style="">
                    <div class="" style="position: relative;"><!----> <!----> <!---->
                        <div id="taskFilters" class="collapse show">
                            <div class="mb-2">
                                <div class="d-flex flex-wrap">
                                    <div data-v-20278007="" class="mr-2 pb-2">
                                        <div data-v-20278007="" class="dropdown b-dropdown btn-group" id="__BVID__1003">
                                            <!----><button aria-haspopup="menu" aria-expanded="false" type="button"
                                                class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                id="__BVID__1003__BV_toggle_">
                                                Type
                                                <!----> <!----><!----> <!----> <span data-v-20278007=""
                                                    class="far fa-angle-down fa-xs text-muted"></span></button>
                                            <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                aria-labelledby="__BVID__1003__BV_toggle_">
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
                                                                Blog
                                                            </label></div>
                                                    </div>
                                                    <div data-v-20278007="" class="dropdown-item pb-1">
                                                        <div data-v-20278007=""
                                                            class="custom-control custom-checkbox p-0"><input
                                                                data-v-20278007="" type="checkbox"
                                                                id="styled-checkbox-0-1" class="custom-control-input"
                                                                value="[object Object]"> <label data-v-20278007=""
                                                                for="styled-checkbox-0-1" class="custom-control-label">
                                                                Brand
                                                            </label></div>
                                                    </div>
                                                    <div data-v-20278007="" class="dropdown-item pb-1">
                                                        <div data-v-20278007=""
                                                            class="custom-control custom-checkbox p-0"><input
                                                                data-v-20278007="" type="checkbox"
                                                                id="styled-checkbox-0-2" class="custom-control-input"
                                                                value="[object Object]"> <label data-v-20278007=""
                                                                for="styled-checkbox-0-2" class="custom-control-label">
                                                                Category
                                                            </label></div>
                                                    </div>
                                                    <div data-v-20278007="" class="dropdown-item pb-1">
                                                        <div data-v-20278007=""
                                                            class="custom-control custom-checkbox p-0"><input
                                                                data-v-20278007="" type="checkbox"
                                                                id="styled-checkbox-0-3" class="custom-control-input"
                                                                value="[object Object]"> <label data-v-20278007=""
                                                                for="styled-checkbox-0-3" class="custom-control-label">
                                                                Facet
                                                            </label></div>
                                                    </div>
                                                    <div data-v-20278007="" class="dropdown-item pb-1">
                                                        <div data-v-20278007=""
                                                            class="custom-control custom-checkbox p-0"><input
                                                                data-v-20278007="" type="checkbox"
                                                                id="styled-checkbox-0-4" class="custom-control-input"
                                                                value="[object Object]"> <label data-v-20278007=""
                                                                for="styled-checkbox-0-4" class="custom-control-label">
                                                                Knowledge Base
                                                            </label></div>
                                                    </div>
                                                    <div data-v-20278007="" class="dropdown-item pb-1">
                                                        <div data-v-20278007=""
                                                            class="custom-control custom-checkbox p-0"><input
                                                                data-v-20278007="" type="checkbox"
                                                                id="styled-checkbox-0-5" class="custom-control-input"
                                                                value="[object Object]"> <label data-v-20278007=""
                                                                for="styled-checkbox-0-5" class="custom-control-label">
                                                                Product
                                                            </label></div>
                                                    </div>
                                                    <div data-v-20278007="" class="dropdown-item pb-1">
                                                        <div data-v-20278007=""
                                                            class="custom-control custom-checkbox p-0"><input
                                                                data-v-20278007="" type="checkbox"
                                                                id="styled-checkbox-0-6" class="custom-control-input"
                                                                value="[object Object]"> <label data-v-20278007=""
                                                                for="styled-checkbox-0-6" class="custom-control-label">
                                                                Theme
                                                            </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div data-v-20278007="" class="mr-2 pb-2">
                                    <div data-v-20278007="" class="dropdown b-dropdown btn-group" id="__BVID__1006">
                                        <!----><button aria-haspopup="menu" aria-expanded="false" type="button"
                                            class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                            id="__BVID__1006__BV_toggle_">
                                            Enabled
                                            <!----> <!----><!----> <!----> <span data-v-20278007=""
                                                class="far fa-angle-down fa-xs text-muted"></span></button>
                                        <ul role="menu" tabindex="-1" class="dropdown-menu"
                                            aria-labelledby="__BVID__1006__BV_toggle_">
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
                                                                id="styled-checkbox-1-0" class="custom-control-input"
                                                                value="[object Object]"> <label data-v-20278007=""
                                                                for="styled-checkbox-1-0" class="custom-control-label">
                                                                No
                                                            </label></div>
                                                    </div>
                                                    <div data-v-20278007="" class="dropdown-item pb-1">
                                                        <div data-v-20278007=""
                                                            class="custom-control custom-checkbox p-0"><input
                                                                data-v-20278007="" type="checkbox"
                                                                id="styled-checkbox-1-1" class="custom-control-input"
                                                                value="[object Object]"> <label data-v-20278007=""
                                                                for="styled-checkbox-1-1" class="custom-control-label">
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
                                    <div class="VueTables__search-field"><label for="VueTables__search_cHP8F"
                                            class="">Filter:</label><input type="text" placeholder="Search query"
                                            id="VueTables__search_cHP8F" autocomplete="new-password"
                                            class="VueTables__search__input form-control " name="22087de71461c"
                                            style="background-color: inherit;"></div><span
                                        class="d-flex align-items-end"> <!----> <!----></span>
                                </div>
                                <div class="form-group form-inline float-right VueTables__limit">
                                    <div class="VueTables__limit-field"><label for="VueTables__limit_cHP8F"
                                            class="">Records:</label><select name="limit" id="VueTables__limit_cHP8F"
                                            class="form-control">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="VueTables__table table table-striped" style="overflow: hidden;">
                                <thead>
                                    <tr>
                                        <th id="VueTables_th--navigationTitle" tabindex="0" class="VueTables__sortable "
                                            style="position: relative;"><span title=""
                                                class="VueTables__heading">Title</span><span
                                                class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                            <div class="resize-handle"
                                                style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                            </div>
                                        </th>
                                        <th id="VueTables_th--urlSlug" tabindex="0" class="VueTables__sortable "
                                            style="position: relative;"><span title="" class="VueTables__heading">Page
                                                URL</span><span
                                                class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                            <div class="resize-handle"
                                                style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                            </div>
                                        </th>
                                        <th id="VueTables_th--editMenu" tabindex="0" class=""
                                            style="position: relative;"><span title=""
                                                class="VueTables__heading"></span>
                                            <div class="resize-handle"
                                                style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle" title="About"
                                                class="text-ellipsis"><span><a>About</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="about"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/about<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Supplier: Global" class="text-ellipsis"><span><a>Supplier:
                                                        Global</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="supplier"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/supplier<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle" title="Authors"
                                                class="text-ellipsis"><span><a>Authors</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="authors"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/authors<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle" title="Occasions"
                                                class="text-ellipsis"><span><a>Occasions</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="occasions"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/occasions<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle" title="Events"
                                                class="text-ellipsis"><span><a>Events</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="events"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/events<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle" title="Industries"
                                                class="text-ellipsis"><span><a>Industries</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="industries"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/industries<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle" title="Themes"
                                                class="text-ellipsis"><span><a>Themes</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="themes"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/themes<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Event: (Template)" class="text-ellipsis"><span><a>Event:
                                                        (Template)</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="event/template"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/event/template<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Industry: (Template)" class="text-ellipsis"><span><a>Industry:
                                                        (Template)</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="industry/template"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/industry/template<!----></a></span></span>
                                        </td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Occasion: (Template)" class="text-ellipsis"><span><a>Occasion:
                                                        (Template)</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="occasion/template"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/occasion/template<!----></a></span></span>
                                        </td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Theme: (Template)" class="text-ellipsis"><span><a>Theme:
                                                        (Template)</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="theme/template"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/theme/template<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Proof Checkout Confirmation" class="text-ellipsis"><span><a>Proof
                                                        Checkout Confirmation</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug"
                                                title="proofcheckoutconfirmation" class="text-ellipsis"><span><a
                                                        class="text-muted">/proofcheckoutconfirmation<!----></a></span></span>
                                        </td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Proof Checkout" class="text-ellipsis"><span><a>Proof
                                                        Checkout</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="proofcheckout"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/proofcheckout<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle" title="Proof Cart"
                                                class="text-ellipsis"><span><a>Proof Cart</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="proofcart"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/proofcart<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Proof Item Added" class="text-ellipsis"><span><a>Proof Item
                                                        Added</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="proofitemsadded"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/proofitemsadded<!----></a></span></span>
                                        </td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Quote Checkout Confirmation" class="text-ellipsis"><span><a>Quote
                                                        Checkout Confirmation</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug"
                                                title="quotecheckoutconfirmation" class="text-ellipsis"><span><a
                                                        class="text-muted">/quotecheckoutconfirmation<!----></a></span></span>
                                        </td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Quote Checkout" class="text-ellipsis"><span><a>Quote
                                                        Checkout</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="quotecheckout"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/quotecheckout<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Quote Items Added" class="text-ellipsis"><span><a>Quote Items
                                                        Added</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="quoteitemsadded"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/quoteitemsadded<!----></a></span></span>
                                        </td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle" title="Quote Cart"
                                                class="text-ellipsis"><span><a>Quote Cart</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="quotecart"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/quotecart<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Sample Confirmation" class="text-ellipsis"><span><a>Sample
                                                        Confirmation</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug"
                                                title="samplecheckoutconfirmation" class="text-ellipsis"><span><a
                                                        class="text-muted">/samplecheckoutconfirmation<!----></a></span></span>
                                        </td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Sample Checkout" class="text-ellipsis"><span><a>Sample
                                                        Checkout</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="samplecheckout"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/samplecheckout<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle" title="Sample Cart"
                                                class="text-ellipsis"><span><a>Sample Cart</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="samplecart"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/samplecart<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle" title="Draft"
                                                class="text-ellipsis"><span><a>Draft</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="draft"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/draft<!----></a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle"
                                                title="Contact Confirmation" class="text-ellipsis"><span><a>Contact
                                                        Confirmation</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="contactconfirmation"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/contactconfirmation<!----></a></span></span>
                                        </td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                    <tr class="VueTables__row undefined">
                                        <td tabindex="0" class=""><span data-row="navigationTitle" title="No Minimum"
                                                class="text-ellipsis"><span><a>No Minimum</a></span></span></td>
                                        <td tabindex="0" class=""><span data-row="urlSlug" title="products"
                                                class="text-ellipsis"><span><a
                                                        class="text-muted">/products<span>/no-minimum</span></a></span></span>
                                        </td>
                                        <td tabindex="0" class=""><span data-row="editMenu" title=""
                                                class="text-ellipsis"><span>
                                                    <div
                                                        class="text-right d-flex align-items-center justify-content-end">
                                                        <!----><a data-toggle="dropdown" class="btn btn-link"><i
                                                                class="far fa-ellipsis-h fa-1x fa-fw"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item"><span>Duplicate</span></a><a
                                                                class="dropdown-item"><span>Edit</span></a><a
                                                                class="dropdown-item"><span>Delete</span></a></div>
                                                    </div>
                                                </span></span></td>
                                    </tr><!---->
                                </tbody>
                            </table>
                        </div>
                        <div class="VuePagination row col-md-12 justify-content-center">
                            <nav class="text-center">
                                <ul class="pagination VuePagination__pagination" style="">
                                    <li
                                        class="VuePagination__pagination-item page-item  VuePagination__pagination-item-prev-chunk disabled">
                                        <a href="javascript:void(0);" disabled="disabled" class="page-link">&lt;&lt;</a>
                                    </li>
                                    <li
                                        class="VuePagination__pagination-item page-item  VuePagination__pagination-item-prev-page disabled">
                                        <a href="javascript:void(0);" disabled="disabled" class="page-link">&lt;</a>
                                    </li>
                                    <li class="VuePagination__pagination-item page-item active"><a
                                            href="javascript:void(0)" class="page-link active" role="button">1</a></li>
                                    <li class="VuePagination__pagination-item page-item "><a href="javascript:void(0)"
                                            class="page-link " role="button">2</a></li>
                                    <li class="VuePagination__pagination-item page-item "><a href="javascript:void(0)"
                                            role="button" class="page-link ">3</a></li>
                                    <li class="VuePagination__pagination-item page-item "><a href="javascript:void(0)"
                                            role="button" class="page-link ">4</a></li>
                                    <li
                                        class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-page ">
                                        <a href="javascript:void(0);" class="page-link">&gt;</a></li>
                                    <li
                                        class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-chunk disabled">
                                        <a href="javascript:void(0);" disabled="disabled" class="page-link">&gt;&gt;</a>
                                    </li>
                                </ul>
                                <p class="VuePagination__count text-center col-md-12" style="">Showing 1 to 25 of 77
                                    records</p>
                            </nav>
                        </div>
                    </div>
                </div> <!---->
            </div>
        </div>
    </div>
</div></template>

<script>
export default {

}
</script>

<style></style>