<template>
    <div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="flex-grow-1">
                <h3>Email Lists</h3>
            </div>
            <div class="ml-3"><a href="/customers/email/lists/create" class="btn btn-primary"> Create Email List </a></div>
        </div>
        <div style=""><!----> <!---->
            <div class="overlap" style="">
                <div class="w-100 TopTable__table VueTables VueTables--server" filterable="true">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-inline float-left VueTables__search"><span></span>
                                <div class="VueTables__search-field"><label for="VueTables__search_pe4LB"
                                        class="">Filter:</label><input type="text" placeholder="Search query"
                                        id="VueTables__search_pe4LB" autocomplete="new-password"
                                        class="VueTables__search__input form-control " name="c9be6764a4e7c"
                                        style="background-color: inherit;"></div><span></span>
                            </div>
                            <div class="form-group form-inline float-right VueTables__limit"></div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="VueTables__table table table-striped" style="overflow: hidden;">
                            <thead>
                                <tr>
                                    <th id="VueTables_th--name" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Name</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--customers" tabindex="0" class="" style="position: relative;"><span
                                            title="" class="VueTables__heading">Customers</span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--actions" tabindex="0" class="" style="position: relative;"><span
                                            title="" class="VueTables__heading">Actions</span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="VueTables__no-results">
                                    <td tabindex="0" colspan="3" class="text-center">No matching records</td>
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
            </div> <!---->
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style></style>