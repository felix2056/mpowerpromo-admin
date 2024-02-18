<template>
    <navigation />
    <div id="main" class="slideout-panel slideout-panel-left">
        <div class="main-panel container-fluid pt-3">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <router-link :to="{ name: 'all-customers' }">Customers</router-link>
                        </li>
                        <li class="breadcrumb-item">
                            <router-link :to="{ name: 'companies' }">Companies</router-link>
                        </li>
                        <li class="breadcrumb-item active"><span aria-current="page">View Company</span></li>
                    </ol>
                </nav>

                <div class="row mb-5">
                    <div class="col-md-2">
                        <div class="sticky-top sticky-top-app py-3">
                            <h1 class="h2">{{ company.name }}</h1>
                            <div class="list-group">
                                <a href="#info" class="nav-link">Info</a>
                                <a href="#customers" class="nav-link">Customers</a>
                                <a href="#orders" class="nav-link">Orders</a>
                                <a href="#logos" class="nav-link">Logos</a>
                                <a href="#presentations" class="nav-link">Presentations</a>
                            </div>
                            <div class="pt-2">
                                <a href="/customers/companies/create" class="btn btn-light"> New Company </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div id="info" class="pt-3"></div>
                        <div class="card">
                            <div class="card-header mb-2">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">Information</h5>
                                    <!-- <router-link :to="{ name: 'edit-company', params: { slug: company.slug } }" class="float-right">Edit</router-link> -->
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <a :href="company.website" target="_blank" class="mb-3 d-block">
                                            {{ company.website }}
                                        </a>

                                        <fieldset class="form-group mr-5" id="__BVID__1266">
                                            <div>
                                                <div class="form-group">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <label>Account Manager</label> 
                                                        </div> 
                                                    </div>
                                                    
                                                    <!-- <Multiselect mode="tags" v-model="social_media.networks" :options="networks" :close-on-select="false" placeholder="Select option" /> -->
                                                    <div tabindex="-1" class="multiselect" loadonfocus="true"
                                                        query="[object Object]" optionsv="" orderby="name" ascending="1"
                                                        path="/users" isobject="true">
                                                        <div class="multiselect__select"></div>
                                                        <div class="multiselect__tags">
                                                            <div class="multiselect__tags-wrap" style="display: none;">
                                                            </div> 
                                                            <div class="multiselect__spinner" style="display: none;"></div>
                                                            <input name="Account Manager" type="text" autocomplete="nope"
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
                                                                <span></span> 
                                                                <li style="display: none;"><span
                                                                        class="multiselect__option"><span> Oops! No elements
                                                                            found. Consider changing the search query.
                                                                        </span></span></li>
                                                                <li><span class="multiselect__option"><span><span>No Account
                                                                                Manager Options</span></span></span></li>
                                                            </ul>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-3">
                                        <div>
                                            <small>Orders</small>
                                            <h4>0</h4>
                                        </div>
                                        <div class="mt-5">
                                            <small>Avg Order Total</small>
                                            <h5>$0.00</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div>
                                            <small>Total</small>
                                            <h4>$0.00</h4>
                                        </div>
                                        <div class="mt-5">
                                            <small>Total Profit</small>
                                            <h5>$0.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="customers" class="pt-5"></div>
                        <div class="card">
                            <div class="card-header mb-2">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">Customers</h5><a
                                        href="/customers/create?companyId=6532a286f58ce84559e7624d" class="">
                                        Create Customer
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div style=""> 
                                    <div class="overlap" style="">
                                        <div class="w-100 TopTable__table VueTables VueTables--server" filterable="true">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-inline float-left VueTables__search">
                                                        <span></span>
                                                        <div class="VueTables__search-field"><label
                                                                for="VueTables__search_Lxqq4" class="">Filter:</label><input
                                                                type="text" placeholder="Search query"
                                                                id="VueTables__search_Lxqq4" autocomplete="new-password"
                                                                class="VueTables__search__input form-control "
                                                                name="d59389154e1b8" style="background-color: inherit;">
                                                        </div><span></span>
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
                                                                <span title="" class="VueTables__heading">Name</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--jobTitle" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title="" class="VueTables__heading">Job
                                                                    Title</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--manager" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title=""
                                                                    class="VueTables__heading">Manager</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--orders" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title="" class="VueTables__heading">Orders</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--ordersTotal" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title="" class="VueTables__heading">Orders
                                                                    Total</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="VueTables__no-results">
                                                            <td tabindex="0" colspan="5" class="text-center">No matching
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
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div id="orders" class="pt-5"></div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row ml-0 mb-2">
                                    <h4>Orders</h4>
                                </div>
                                <div style=""> 
                                    <div class="overlap" style="">
                                        <div class="w-100 TopTable__table VueTables VueTables--server" filterable="true">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-inline float-left VueTables__search">
                                                        <span></span>
                                                        <div class="VueTables__search-field"><label
                                                                for="VueTables__search_uc0Kz" class="">Filter:</label><input
                                                                type="text" placeholder="Search query"
                                                                id="VueTables__search_uc0Kz" autocomplete="new-password"
                                                                class="VueTables__search__input form-control "
                                                                name="267a5467ecc47" style="background-color: inherit;">
                                                        </div><span></span>
                                                    </div>
                                                    <div class="form-group form-inline float-right VueTables__limit"></div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="VueTables__table table table-striped"
                                                    style="overflow: hidden;">
                                                    <thead>
                                                        <tr>
                                                            <th id="VueTables_th--orderId" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title="" class="VueTables__heading">Order
                                                                    Id</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--customerId" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title=""
                                                                    class="VueTables__heading">Customer</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--orderStatus" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title="" class="VueTables__heading">Order
                                                                    Status</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--orderTotal" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title="" class="VueTables__heading">Order
                                                                    Total</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--orderDate" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title="" class="VueTables__heading">Order
                                                                    Date</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--createdAt" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title="" class="VueTables__heading">Created
                                                                    On</span><span
                                                                    class="VueTables__sort-icon float-right fal fa-sort-amount-down"></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--managers" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title=""
                                                                    class="VueTables__heading">Managers</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
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
                                                    <p class="VuePagination__count text-center col-md-12"
                                                        style="display: none;">0 records</p>
                                                </nav>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div id="logos" class="pt-5"></div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h5 class="card-title">Logos</h5>
                            </div>
                            <div class="card-body">
                                <div query="[object Object]">
                                    <div>
                                        <div>
                                            <div>
                                                <div>
                                                    <form enctype="multipart/form-data" novalidate="novalidate"
                                                        style="height: 100%;">
                                                        <div class="" filecount="0">
                                                            <div class="file-upload-dropbox btn btn-outline-primary btn-block p-4"
                                                                style="position: relative;"><input type="file"
                                                                    multiple="multiple" accept="*" name="files"
                                                                    class="input-file">
                                                                <div><i class="fas fa-cloud-upload fa-2x"></i></div>
                                                                <div>Drag file(s) or click to browse</div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div>
                                                        <div>
                                                            <div class="row upload-via-link">
                                                                <div class="col-12">
                                                                    <div
                                                                        class="pt-3 d-flex align-items-end justify-content-between">
                                                                        <div class="flex-fill pr-3">
                                                                            <div data-v-3a7e9bf2="" class="w-100 pb-0">
                                                                                <fieldset data-v-3a7e9bf2=""
                                                                                    class="form-group" id="__BVID__1286">
                                                                                    
                                                                                    <div>
                                                                                        <div data-v-3a7e9bf2=""
                                                                                            class="d-flex justify-content-between align-items-center">
                                                                                            <div data-v-3a7e9bf2=""><label
                                                                                                    data-v-3a7e9bf2="">Upload
                                                                                                    from URL</label> 
                                                                                            </div> <label data-v-3a7e9bf2=""
                                                                                                class="text-muted small">optional</label>
                                                                                        </div>
                                                                                        <div data-v-3a7e9bf2="" role="group"
                                                                                            class="input-group">
                                                                                             <input
                                                                                                data-v-3a7e9bf2=""
                                                                                                name="link" type="text"
                                                                                                placeholder="https://example.com/image/123.jpg"
                                                                                                autocomplete="on"
                                                                                                class="form-control"
                                                                                                maxlength="255"
                                                                                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                                                                data-hj-allow=""
                                                                                                data-mask=""
                                                                                                data-previous-value=""
                                                                                                id="__BVID__1287"> 
                                                                                        </div> 
                                                                                        <div data-v-3a7e9bf2=""
                                                                                            class="invalid-feedback d-block">

                                                                                        </div> 
                                                                                    </div>
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group pb-1"><button
                                                                                disabled="disabled"
                                                                                class="btn btn-primary d-flex align-items-center justify-content-center">
                                                                                Upload
                                                                                </button></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ml-n2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                            <div class="text-warning text-center">No Data!</div>
                                        </div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="presentations" class="pt-5"></div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h5 class="card-title">Presentations</h5>
                            </div>
                            <div class="card-body">
                                <div style="">
                                    <div class="" style="position: relative;">  
                                        <div id="taskFilters" class="collapse show">
                                            <div class="mb-2">
                                                <div class="d-flex flex-wrap">
                                                    <div data-v-20278007="" class="mr-2 pb-2">
                                                        <div data-v-20278007="" class="dropdown b-dropdown btn-group"
                                                            id="__BVID__1297"><button aria-haspopup="menu"
                                                                aria-expanded="false" type="button"
                                                                class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                                id="__BVID__1297__BV_toggle_">
                                                                Created By
                                                                   <span data-v-20278007=""
                                                                    class="far fa-angle-down fa-xs text-muted"></span></button>
                                                            <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                                aria-labelledby="__BVID__1297__BV_toggle_">
                                                                <div data-v-20278007=""
                                                                    class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                                    <a data-v-20278007="" href="javascript:;">Select all</a>
                                                                    <div data-v-20278007="" class="mx-2">|</div> <a
                                                                        data-v-20278007="" href="javascript:;">Deselect
                                                                        all</a>
                                                                </div>  
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div data-v-20278007="" class="mr-2 pb-2">
                                                        <div data-v-20278007="" class="dropdown b-dropdown btn-group"
                                                            id="__BVID__1300"><button aria-haspopup="menu"
                                                                aria-expanded="false" type="button"
                                                                class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                                id="__BVID__1300__BV_toggle_">
                                                                Is Public
                                                                   <span data-v-20278007=""
                                                                    class="far fa-angle-down fa-xs text-muted"></span></button>
                                                            <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                                aria-labelledby="__BVID__1300__BV_toggle_">
                                                                <div data-v-20278007=""
                                                                    class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                                    <a data-v-20278007="" href="javascript:;">Select all</a>
                                                                    <div data-v-20278007="" class="mx-2">|</div> <a
                                                                        data-v-20278007="" href="javascript:;">Deselect
                                                                        all</a>
                                                                </div> 
                                                                <div data-v-20278007=""
                                                                    class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                                                    style="min-width: 300px;">
                                                                    <div data-v-20278007="" class="optionList">
                                                                        <div data-v-20278007="" class="dropdown-item pb-1">
                                                                            <div data-v-20278007=""
                                                                                class="custom-control custom-checkbox p-0">
                                                                                <input data-v-20278007="" type="checkbox"
                                                                                    id="styled-checkbox-1-0"
                                                                                    class="custom-control-input" value="no">
                                                                                <label data-v-20278007=""
                                                                                    for="styled-checkbox-1-0"
                                                                                    class="custom-control-label">
                                                                                    No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div data-v-20278007="" class="dropdown-item pb-1">
                                                                            <div data-v-20278007=""
                                                                                class="custom-control custom-checkbox p-0">
                                                                                <input data-v-20278007="" type="checkbox"
                                                                                    id="styled-checkbox-1-1"
                                                                                    class="custom-control-input"
                                                                                    value="yes"> <label data-v-20278007=""
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
                                                    <div data-v-20278007="" class="mr-2 pb-2">
                                                        <div data-v-20278007="" class="dropdown b-dropdown btn-group"
                                                            id="__BVID__1303"><button aria-haspopup="menu"
                                                                aria-expanded="false" type="button"
                                                                class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                                                id="__BVID__1303__BV_toggle_">
                                                                Is Template
                                                                   <span data-v-20278007=""
                                                                    class="far fa-angle-down fa-xs text-muted"></span></button>
                                                            <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                                aria-labelledby="__BVID__1303__BV_toggle_">
                                                                <div data-v-20278007=""
                                                                    class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                                    <a data-v-20278007="" href="javascript:;">Select all</a>
                                                                    <div data-v-20278007="" class="mx-2">|</div> <a
                                                                        data-v-20278007="" href="javascript:;">Deselect
                                                                        all</a>
                                                                </div> 
                                                                <div data-v-20278007=""
                                                                    class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                                                    style="min-width: 300px;">
                                                                    <div data-v-20278007="" class="optionList">
                                                                        <div data-v-20278007="" class="dropdown-item pb-1">
                                                                            <div data-v-20278007=""
                                                                                class="custom-control custom-checkbox p-0">
                                                                                <input data-v-20278007="" type="checkbox"
                                                                                    id="styled-checkbox-2-0"
                                                                                    class="custom-control-input" value="no">
                                                                                <label data-v-20278007=""
                                                                                    for="styled-checkbox-2-0"
                                                                                    class="custom-control-label">
                                                                                    No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div data-v-20278007="" class="dropdown-item pb-1">
                                                                            <div data-v-20278007=""
                                                                                class="custom-control custom-checkbox p-0">
                                                                                <input data-v-20278007="" type="checkbox"
                                                                                    id="styled-checkbox-2-1"
                                                                                    class="custom-control-input"
                                                                                    value="yes"> <label data-v-20278007=""
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
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="overlap" style="">
                                        <div class="w-100 TopTable__table VueTables VueTables--server" filterable="true">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-inline float-left VueTables__search">
                                                        <span></span>
                                                        <div class="VueTables__search-field"><label
                                                                for="VueTables__search_qmVB0" class="">Filter:</label><input
                                                                type="text" placeholder="Search query"
                                                                id="VueTables__search_qmVB0" autocomplete="new-password"
                                                                class="VueTables__search__input form-control "
                                                                name="e370112a4ae2e" style="background-color: inherit;">
                                                        </div><span><span><a href="/customers/presentations/create"
                                                                    class="d-block ml-2 text-decoration-none"
                                                                    style="margin-top: 20px;">Add
                                                                    presentation</a></span></span>
                                                    </div>
                                                    <div class="form-group form-inline float-right VueTables__limit"></div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="VueTables__table table table-striped"
                                                    style="overflow: hidden;">
                                                    <thead>
                                                        <tr>
                                                            <th id="VueTables_th--logo" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">Logo</span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--name" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title="" class="VueTables__heading">Name</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--company" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">Company</span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--customers" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">Customers</span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--createdAt" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title=""
                                                                    class="VueTables__heading">Created</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--createdBy" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">By</span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--isTemplate" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title=""
                                                                    class="VueTables__heading">Template</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--publishedAt" tabindex="0"
                                                                class="VueTables__sortable " style="position: relative;">
                                                                <span title="" class="VueTables__heading">Public</span><span
                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                            <th id="VueTables_th--actions" tabindex="0" class=""
                                                                style="position: relative;"><span title=""
                                                                    class="VueTables__heading">Actions</span>
                                                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                                                    class="resize-handle"></div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="VueTables__no-results">
                                                            <td tabindex="0" colspan="9" class="text-center">No matching
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
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="sticky-top sticky-top-app py-3">
                            <div class="card mb-5">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="card-title">Notes</h5><a>New Note</a>
                                </div>
                                <ul class="list-group list-group-flush"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <notification />
</template>

<script>
import Navigation from '../includes/navigation.vue';
import Notification from '../includes/notification.vue';

import Multiselect from '@vueform/multiselect'

export default {
    components: {
        Navigation,
        Notification,
        Multiselect
    },

    data() {
        return {
            isLoading: false,
            errorMsg: null,
            validationErrors: {},

            company: {}
        }
    },

    mounted() {
        this.getCompany();
    },

    methods: {
        getCompany() {
            this.isLoading = true;

            axios.get('/customers/companies/' + this.$route.params.slug)
            .then(response => {
                this.company = response.data.company;
            })
            .catch(error => {
                this.errorMsg = error.response.data.message;
            })
            .finally(() => {
                this.isLoading = false;
            });
        }
    }
}
</script>

<style></style>