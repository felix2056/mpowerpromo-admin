<template>
    <div style="">
        <div>
            <div class="d-flex flex-nowrap overflow-x-auto overflow-y-auto">

            </div>
            <div class="mb-3 small"><a>Show All</a></div>
            <h3>All</h3>
            <div style="">
                <div class="" style="position: relative;">
                    <div id="taskFilters" class="collapse show">
                        <div class="mb-2">
                            <div class="d-flex flex-wrap">
                                <div class="mr-2 pb-2">
                                    <div class="dropdown b-dropdown btn-group" id="__BVID__177">
                                        <button aria-haspopup="menu" aria-expanded="false" type="button"
                                            class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                            id="__BVID__177__BV_toggle_">
                                            User
                                            <span class="far fa-angle-down fa-xs text-muted"></span></button>
                                        <ul role="menu" tabindex="-1" class="dropdown-menu"
                                            aria-labelledby="__BVID__177__BV_toggle_">
                                            <div class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                                                <a href="javascript:;">Select
                                                    all</a>
                                                <div class="mx-2">|</div> <a href="javascript:;">Deselect
                                                    all</a>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mr-2 pb-2"><button type="button" class="btn btn-link btn-block">Clear
                                        filters</button></div>
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
                                    <div class="VueTables__search-field"><label for="VueTables__search_VfSlA"
                                            class="">Filter:</label><input type="text" placeholder="Search query"
                                            id="VueTables__search_VfSlA" autocomplete="new-password"
                                            class="VueTables__search__input form-control " name="ca39e63c405d7"
                                            style="background-color: inherit;">
                                    </div><span></span>
                                </div>
                                <div class="form-group form-inline float-right VueTables__limit">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="VueTables__table table table-striped" style="overflow: hidden;">
                                <thead>
                                    <tr>
                                        <th id="VueTables_th--view" tabindex="0" class="VueTables__sortable "
                                            style="position: relative;"><span title=""
                                                class="VueTables__heading"></span><span
                                                class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                            <div class="resize-handle"
                                                style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                            </div>
                                        </th>
                                        <th id="VueTables_th--followUpDate" tabindex="0" class="VueTables__sortable "
                                            style="position: relative;"><span title="" class="VueTables__heading">Follow Up
                                                Date</span><span
                                                class="VueTables__sort-icon float-right fal fa-sort-amount-up"></span>
                                            <div class="resize-handle"
                                                style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                            </div>
                                        </th>
                                        <th id="VueTables_th--followUpType" tabindex="0" class="VueTables__sortable "
                                            style="position: relative;"><span title="" class="VueTables__heading">Follow Up
                                                Type</span><span
                                                class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                            <div class="resize-handle"
                                                style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                            </div>
                                        </th>
                                        <th id="VueTables_th--user" tabindex="0" class="" style="position: relative;"><span
                                                title="" class="VueTables__heading">User</span>
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
                                        <th id="VueTables_th--email" tabindex="0" class="VueTables__sortable "
                                            style="position: relative;"><span title=""
                                                class="VueTables__heading">Email</span><span
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
    </div>
</template>

<script>
export default {

}
</script>

<style></style>