<template>
    <div class="d-flex store-editor row no-gutters">
        <div class="col-12 store-editor-sidebar">
            <div id="store-menu-view" class="container-fluid">
                <div data-id="mPowerNavigation" class="pb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <nav class="small">
                            <ol class="breadcrumb pb-0">
                                <li class="breadcrumb-item">
                                    <router-link :to="{ name: 'store' }" title="close">Menu</router-link>
                                </li>
                                <li class="breadcrumb-item active">Report settings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
                <div data-id="mPower-Report settings" class="w-100">
                    <h3>Reports</h3>
                    <div style=""><!----> <!---->
                        <div class="overlap" style="">
                            <div class="w-100 TopTable__table VueTables VueTables--server" filterable="true">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-inline float-left VueTables__search"><span></span>
                                            <div class="VueTables__search-field"><label for="VueTables__search_HmD79"
                                                    class="">Filter:</label><input type="text" placeholder="Search query"
                                                    id="VueTables__search_HmD79" autocomplete="off"
                                                    class="VueTables__search__input form-control "></div><span
                                                class="d-flex align-items-end"><span>
                                                    <div class="ml-2" style="margin-top: 22px;">
                                                        <div>
                                                            <div class="d-flex align-center justify-content-end"><button
                                                                    type="button" class="btn btn-primary">Create
                                                                    Report</button></div><!---->
                                                        </div>
                                                    </div>
                                                </span> <!----> <!----></span>
                                        </div>
                                        <div class="form-group form-inline float-right VueTables__limit"></div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="VueTables__table table table-striped" style="overflow: hidden;">
                                        <thead>
                                            <tr>
                                                <th id="VueTables_th--view" tabindex="0" class=""
                                                    style="position: relative;"><span title=""
                                                        class="VueTables__heading">View</span>
                                                    <div class="resize-handle"
                                                        style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                                    </div>
                                                </th>
                                                <th id="VueTables_th--name" tabindex="0" class="VueTables__sortable "
                                                    style="position: relative;"><span title=""
                                                        class="VueTables__heading">Name</span><span
                                                        class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                    <div class="resize-handle"
                                                        style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                                    </div>
                                                </th>
                                                <th id="VueTables_th--type" tabindex="0" class="VueTables__sortable "
                                                    style="position: relative;"><span title=""
                                                        class="VueTables__heading">Type</span><span
                                                        class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                    <div class="resize-handle"
                                                        style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                                    </div>
                                                </th>
                                                <th id="VueTables_th--createdAt" tabindex="0" class="VueTables__sortable "
                                                    style="position: relative;"><span title=""
                                                        class="VueTables__heading">Created At</span><span
                                                        class="VueTables__sort-icon float-right fal fa-sort-amount-down"></span>
                                                    <div class="resize-handle"
                                                        style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                                    </div>
                                                </th>
                                                <th id="VueTables_th--global" tabindex="0" class=""
                                                    style="position: relative;"><span title=""
                                                        class="VueTables__heading">Global</span>
                                                    <div class="resize-handle"
                                                        style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                                    </div>
                                                </th>
                                                <th id="VueTables_th--store" tabindex="0" class=""
                                                    style="position: relative;"><span title=""
                                                        class="VueTables__heading">Store</span>
                                                    <div class="resize-handle"
                                                        style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                                                    </div>
                                                </th>
                                                <th id="VueTables_th--createdBy" tabindex="0" class=""
                                                    style="position: relative;"><span title=""
                                                        class="VueTables__heading">Created By</span>
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
                                            <tr class="VueTables__row undefined">
                                                <td tabindex="0" class=""><span data-row="view" title=""
                                                        class="text-ellipsis">
                                                        <div><button type="button" class="btn btn-primary"> View
                                                            </button><!----></div>
                                                    </span></td>
                                                <td tabindex="0" class=""><span data-row="name" title="Payments"
                                                        class="text-ellipsis">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                Payments
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td tabindex="0" class=""><span data-row="type" title="Payments"
                                                        class="text-ellipsis">Payments</span></td>
                                                <td tabindex="0" class=""><span data-row="createdAt"
                                                        title="2023-11-28T20:49:16.491Z" class="text-ellipsis">11/28/2023
                                                        09:49PM</span></td>
                                                <td tabindex="0" class=""><span data-row="global" title=""
                                                        class="text-ellipsis">Yes</span></td>
                                                <td tabindex="0" class=""><span data-row="store" title=""
                                                        class="text-ellipsis"></span></td>
                                                <td tabindex="0" class=""><span data-row="createdBy" title="[object Object]"
                                                        class="text-ellipsis">Jason Miller</span></td>
                                                <td tabindex="0" class=""><span data-row="actions" title=""
                                                        class="text-ellipsis">
                                                        <div class="d-flex align-center">
                                                            <div><button title="Manage Filters" type="button"
                                                                    class="btn btn-link"><i
                                                                        class="far fa-filter cursor-pointer"></i></button><!---->
                                                            </div>
                                                            <div><button title="Manage Columns" type="button"
                                                                    class="btn btn-link"><i
                                                                        class="far fa-cog cursor-pointer"></i></button><!---->
                                                            </div><span><a href="javascript:;" title="Delete Payments?"
                                                                    class=""><span><!----><i
                                                                            class="mx-2 far fa-trash"></i></span></a><!----></span>
                                                        </div>
                                                    </span></td>
                                            </tr><!---->
                                            <tr class="VueTables__row undefined">
                                                <td tabindex="0" class=""><span data-row="view" title=""
                                                        class="text-ellipsis">
                                                        <div><button type="button" class="btn btn-primary"> View
                                                            </button><!----></div>
                                                    </span></td>
                                                <td tabindex="0" class=""><span data-row="name" title="Restricitons"
                                                        class="text-ellipsis">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                Restricitons
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td tabindex="0" class=""><span data-row="type" title="Product Restrictions"
                                                        class="text-ellipsis">Product Restrictions</span></td>
                                                <td tabindex="0" class=""><span data-row="createdAt"
                                                        title="2022-10-26T21:48:24.093Z" class="text-ellipsis">10/26/2022
                                                        10:48PM</span></td>
                                                <td tabindex="0" class=""><span data-row="global" title=""
                                                        class="text-ellipsis">Yes</span></td>
                                                <td tabindex="0" class=""><span data-row="store" title=""
                                                        class="text-ellipsis"></span></td>
                                                <td tabindex="0" class=""><span data-row="createdBy" title="[object Object]"
                                                        class="text-ellipsis">Lester Tester</span></td>
                                                <td tabindex="0" class=""><span data-row="actions" title=""
                                                        class="text-ellipsis">
                                                        <div class="d-flex align-center">
                                                            <div><button title="Manage Filters" type="button"
                                                                    class="btn btn-link"><i
                                                                        class="far fa-filter cursor-pointer"></i></button><!---->
                                                            </div>
                                                            <div><button title="Manage Columns" type="button"
                                                                    class="btn btn-link"><i
                                                                        class="far fa-cog cursor-pointer"></i></button><!---->
                                                            </div><span><a href="javascript:;" title="Delete Restricitons?"
                                                                    class=""><span><!----><i
                                                                            class="mx-2 far fa-trash"></i></span></a><!----></span>
                                                        </div>
                                                    </span></td>
                                            </tr><!---->
                                            <tr class="VueTables__row undefined">
                                                <td tabindex="0" class=""><span data-row="view" title=""
                                                        class="text-ellipsis">
                                                        <div><button type="button" class="btn btn-primary"> View
                                                            </button><!----></div>
                                                    </span></td>
                                                <td tabindex="0" class=""><span data-row="name" title="Inventory"
                                                        class="text-ellipsis">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                Inventory
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td tabindex="0" class=""><span data-row="type" title="Inventory"
                                                        class="text-ellipsis">Inventory</span></td>
                                                <td tabindex="0" class=""><span data-row="createdAt"
                                                        title="2021-12-29T16:35:19.640Z" class="text-ellipsis">12/29/2021
                                                        05:35PM</span></td>
                                                <td tabindex="0" class=""><span data-row="global" title=""
                                                        class="text-ellipsis">Yes</span></td>
                                                <td tabindex="0" class=""><span data-row="store" title=""
                                                        class="text-ellipsis"></span></td>
                                                <td tabindex="0" class=""><span data-row="createdBy" title="[object Object]"
                                                        class="text-ellipsis">Lester Tester</span></td>
                                                <td tabindex="0" class=""><span data-row="actions" title=""
                                                        class="text-ellipsis">
                                                        <div class="d-flex align-center">
                                                            <div><button title="Manage Filters" type="button"
                                                                    class="btn btn-link"><i
                                                                        class="far fa-filter cursor-pointer"></i></button><!---->
                                                            </div>
                                                            <div><button title="Manage Columns" type="button"
                                                                    class="btn btn-link"><i
                                                                        class="far fa-cog cursor-pointer"></i></button><!---->
                                                            </div><span><a href="javascript:;" title="Delete Inventory?"
                                                                    class=""><span><!----><i
                                                                            class="mx-2 far fa-trash"></i></span></a><!----></span>
                                                        </div>
                                                    </span></td>
                                            </tr><!---->
                                            <tr class="VueTables__row undefined">
                                                <td tabindex="0" class=""><span data-row="view" title=""
                                                        class="text-ellipsis">
                                                        <div><button type="button" class="btn btn-primary"> View
                                                            </button><!----></div>
                                                    </span></td>
                                                <td tabindex="0" class=""><span data-row="name" title="Products"
                                                        class="text-ellipsis">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                Products
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td tabindex="0" class=""><span data-row="type" title="Products"
                                                        class="text-ellipsis">Products</span></td>
                                                <td tabindex="0" class=""><span data-row="createdAt"
                                                        title="2021-12-29T16:34:40.358Z" class="text-ellipsis">12/29/2021
                                                        05:34PM</span></td>
                                                <td tabindex="0" class=""><span data-row="global" title=""
                                                        class="text-ellipsis">Yes</span></td>
                                                <td tabindex="0" class=""><span data-row="store" title=""
                                                        class="text-ellipsis"></span></td>
                                                <td tabindex="0" class=""><span data-row="createdBy" title="[object Object]"
                                                        class="text-ellipsis">Lester Tester</span></td>
                                                <td tabindex="0" class=""><span data-row="actions" title=""
                                                        class="text-ellipsis">
                                                        <div class="d-flex align-center">
                                                            <div><button title="Manage Filters" type="button"
                                                                    class="btn btn-link"><i
                                                                        class="far fa-filter cursor-pointer"></i></button><!---->
                                                            </div>
                                                            <div><button title="Manage Columns" type="button"
                                                                    class="btn btn-link"><i
                                                                        class="far fa-cog cursor-pointer"></i></button><!---->
                                                            </div><span><a href="javascript:;" title="Delete Products?"
                                                                    class=""><span><!----><i
                                                                            class="mx-2 far fa-trash"></i></span></a><!----></span>
                                                        </div>
                                                    </span></td>
                                            </tr><!---->
                                            <tr class="VueTables__row undefined">
                                                <td tabindex="0" class=""><span data-row="view" title=""
                                                        class="text-ellipsis">
                                                        <div><button type="button" class="btn btn-primary"> View
                                                            </button><!----></div>
                                                    </span></td>
                                                <td tabindex="0" class=""><span data-row="name" title="Details"
                                                        class="text-ellipsis">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                Details
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td tabindex="0" class=""><span data-row="type" title="OrderDetails"
                                                        class="text-ellipsis">OrderDetails</span></td>
                                                <td tabindex="0" class=""><span data-row="createdAt"
                                                        title="2021-12-29T16:32:05.136Z" class="text-ellipsis">12/29/2021
                                                        05:32PM</span></td>
                                                <td tabindex="0" class=""><span data-row="global" title=""
                                                        class="text-ellipsis">Yes</span></td>
                                                <td tabindex="0" class=""><span data-row="store" title=""
                                                        class="text-ellipsis"></span></td>
                                                <td tabindex="0" class=""><span data-row="createdBy" title="[object Object]"
                                                        class="text-ellipsis">Lester Tester</span></td>
                                                <td tabindex="0" class=""><span data-row="actions" title=""
                                                        class="text-ellipsis">
                                                        <div class="d-flex align-center">
                                                            <div><button title="Manage Filters" type="button"
                                                                    class="btn btn-link"><i
                                                                        class="far fa-filter cursor-pointer"></i></button><!---->
                                                            </div>
                                                            <div><button title="Manage Columns" type="button"
                                                                    class="btn btn-link"><i
                                                                        class="far fa-cog cursor-pointer"></i></button><!---->
                                                            </div><span><a href="javascript:;" title="Delete Details?"
                                                                    class=""><span><!----><i
                                                                            class="mx-2 far fa-trash"></i></span></a><!----></span>
                                                        </div>
                                                    </span></td>
                                            </tr><!---->
                                            <tr class="VueTables__row undefined">
                                                <td tabindex="0" class=""><span data-row="view" title=""
                                                        class="text-ellipsis">
                                                        <div><button type="button" class="btn btn-primary"> View
                                                            </button><!----></div>
                                                    </span></td>
                                                <td tabindex="0" class=""><span data-row="name" title="Orders"
                                                        class="text-ellipsis">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                Orders
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td tabindex="0" class=""><span data-row="type" title="Orders"
                                                        class="text-ellipsis">Orders</span></td>
                                                <td tabindex="0" class=""><span data-row="createdAt"
                                                        title="2021-12-29T16:31:30.526Z" class="text-ellipsis">12/29/2021
                                                        05:31PM</span></td>
                                                <td tabindex="0" class=""><span data-row="global" title=""
                                                        class="text-ellipsis">Yes</span></td>
                                                <td tabindex="0" class=""><span data-row="store" title=""
                                                        class="text-ellipsis"></span></td>
                                                <td tabindex="0" class=""><span data-row="createdBy" title="[object Object]"
                                                        class="text-ellipsis">Lester Tester</span></td>
                                                <td tabindex="0" class=""><span data-row="actions" title=""
                                                        class="text-ellipsis">
                                                        <div class="d-flex align-center">
                                                            <div><button title="Manage Filters" type="button"
                                                                    class="btn btn-link"><i
                                                                        class="far fa-filter cursor-pointer"></i></button><!---->
                                                            </div>
                                                            <div><button title="Manage Columns" type="button"
                                                                    class="btn btn-link"><i
                                                                        class="far fa-cog cursor-pointer"></i></button><!---->
                                                            </div><span><a href="javascript:;" title="Delete Orders?"
                                                                    class=""><span><!----><i
                                                                            class="mx-2 far fa-trash"></i></span></a><!----></span>
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
                                                <a href="javascript:void(0);" disabled="disabled"
                                                    class="page-link">&lt;&lt;</a>
                                            </li>
                                            <li
                                                class="VuePagination__pagination-item page-item  VuePagination__pagination-item-prev-page disabled">
                                                <a href="javascript:void(0);" disabled="disabled" class="page-link">&lt;</a>
                                            </li>
                                            <li class="VuePagination__pagination-item page-item active"><a
                                                    href="javascript:void(0)" class="page-link active" role="button">1</a>
                                            </li>
                                            <li
                                                class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-page disabled">
                                                <a href="javascript:void(0);" disabled="disabled" class="page-link">&gt;</a>
                                            </li>
                                            <li
                                                class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-chunk disabled">
                                                <a href="javascript:void(0);" disabled="disabled"
                                                    class="page-link">&gt;&gt;</a>
                                            </li>
                                        </ul>
                                        <p class="VuePagination__count text-center col-md-12" style="">6 records</p>
                                    </nav>
                                </div>
                            </div> <!---->
                        </div> <!---->
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