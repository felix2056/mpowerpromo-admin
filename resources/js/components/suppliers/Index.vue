<template>
  <div class="dashboard">
    <navigation />

    <div id="main" class="slideout-panel slideout-panel-left">
      <div class="main-panel container-fluid pt-3">
        <div>
          <div class="d-flex justify-content-between align-center mb-3">
            <h1 class="m-0">Suppliers</h1>
            <div>
              <a href="/suppliers/create" class="btn btn-light mr-1 info-suppliers-create">Create Supplier</a>
            </div>
          </div>

          <div style="">
            <div class="" style="position: relative;"><!----> <!----> <!---->
              <div id="taskFilters" class="collapse show">
                <div class="mb-2">
                  <div class="d-flex flex-wrap">
                    <div class="mr-2 pb-2">
                      <div class="dropdown b-dropdown btn-group" id="__BVID__509"><!---->
                        <button aria-haspopup="menu" aria-expanded="false" type="button"
                          class="btn dropdown-toggle btn-light dropdown-toggle-no-caret" id="__BVID__509__BV_toggle_">
                          EQP <!----> <!----><!----> <!---->
                          <span class="far fa-angle-down fa-xs text-muted"></span>
                        </button>

                        <ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__509__BV_toggle_">
                          <div class="d-flex justify-content-start mb-2 px-3 pt-2 small">
                            <a href="javascript:;">Select all</a>
                            <div class="mx-2">|</div>
                            <a href="javascript:;">Deselect all</a>
                          </div> <!---->

                          <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0" style="min-width: 300px;">
                            <div class="optionList">
                              <div class="dropdown-item pb-1">
                                <div class="custom-control custom-checkbox p-0">
                                  <input type="checkbox" id="styled-checkbox-0-0" class="custom-control-input"
                                    value="[object Object]">
                                  <label for="styled-checkbox-0-0" class="custom-control-label">No</label>
                                </div>
                              </div>
                              <div class="dropdown-item pb-1">
                                <div class="custom-control custom-checkbox p-0"><input type="checkbox"
                                    id="styled-checkbox-0-1" class="custom-control-input" value="[object Object]"> <label
                                    for="styled-checkbox-0-1" class="custom-control-label">
                                    Yes
                                  </label></div>
                              </div>
                            </div>
                          </div>
                        </ul>
                      </div>
                    </div>

                    <div class="mr-2 pb-2">
                      <div class="dropdown b-dropdown btn-group" id="__BVID__512"><!----><button aria-haspopup="menu"
                          aria-expanded="false" type="button"
                          class="btn dropdown-toggle btn-light dropdown-toggle-no-caret" id="__BVID__512__BV_toggle_">
                          Active
                          <!----> <!----><!----> <!----> <span data-v-20278007=""
                            class="far fa-angle-down fa-xs text-muted"></span></button>
                        <ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__512__BV_toggle_">
                          <div class="d-flex justify-content-start mb-2 px-3 pt-2 small"><a href="javascript:;">Select
                              all</a>
                            <div class="mx-2">|</div> <a href="javascript:;">Deselect all</a>
                          </div> <!---->
                          <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0" style="min-width: 300px;">
                            <div class="optionList">
                              <div class="dropdown-item pb-1">
                                <div class="custom-control custom-checkbox p-0"><input type="checkbox"
                                    id="styled-checkbox-1-0" class="custom-control-input" value="[object Object]"> <label
                                    for="styled-checkbox-1-0" class="custom-control-label">
                                    No
                                  </label></div>
                              </div>
                              <div class="dropdown-item pb-1">
                                <div class="custom-control custom-checkbox p-0"><input type="checkbox"
                                    id="styled-checkbox-1-1" class="custom-control-input" value="[object Object]"> <label
                                    for="styled-checkbox-1-1" class="custom-control-label">
                                    Yes
                                  </label></div>
                              </div>
                            </div>
                          </div>
                        </ul>
                      </div>
                    </div>

                    <div class="mr-2 pb-2">
                      <div class="dropdown b-dropdown btn-group" id="__BVID__515"><!----><button aria-haspopup="menu"
                          aria-expanded="false" type="button"
                          class="btn dropdown-toggle btn-light dropdown-toggle-no-caret" id="__BVID__515__BV_toggle_">
                          PS Credentials
                          <!----> <!----><!----> <!----> <span data-v-20278007=""
                            class="far fa-angle-down fa-xs text-muted"></span></button>
                        <ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__515__BV_toggle_">
                          <div class="d-flex justify-content-start mb-2 px-3 pt-2 small"><a href="javascript:;">Select
                              all</a>
                            <div class="mx-2">|</div> <a href="javascript:;">Deselect all</a>
                          </div> <!---->
                          <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0" style="min-width: 300px;">
                            <div class="optionList">
                              <div class="dropdown-item pb-1">
                                <div class="custom-control custom-checkbox p-0"><input type="checkbox"
                                    id="styled-checkbox-2-0" class="custom-control-input" value="[object Object]"> <label
                                    for="styled-checkbox-2-0" class="custom-control-label">
                                    No
                                  </label></div>
                              </div>
                              <div class="dropdown-item pb-1">
                                <div class="custom-control custom-checkbox p-0"><input type="checkbox"
                                    id="styled-checkbox-2-1" class="custom-control-input" value="[object Object]"> <label
                                    for="styled-checkbox-2-1" class="custom-control-label">
                                    Yes
                                  </label></div>
                              </div>
                            </div>
                          </div>
                        </ul>
                      </div>
                    </div>

                    <div class="mr-2 pb-2">
                      <div class="dropdown b-dropdown btn-group" id="__BVID__518"><!----><button aria-haspopup="menu"
                          aria-expanded="false" type="button"
                          class="btn dropdown-toggle btn-light dropdown-toggle-no-caret" id="__BVID__518__BV_toggle_">
                          PS Active
                          <!----> <!----><!----> <!----> <span data-v-20278007=""
                            class="far fa-angle-down fa-xs text-muted"></span></button>
                        <ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__518__BV_toggle_">
                          <div class="d-flex justify-content-start mb-2 px-3 pt-2 small"><a href="javascript:;">Select
                              all</a>
                            <div class="mx-2">|</div> <a href="javascript:;">Deselect all</a>
                          </div> <!---->
                          <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0" style="min-width: 300px;">
                            <div class="optionList">
                              <div class="dropdown-item pb-1">
                                <div class="custom-control custom-checkbox p-0"><input type="checkbox"
                                    id="styled-checkbox-3-0" class="custom-control-input" value="[object Object]"> <label
                                    for="styled-checkbox-3-0" class="custom-control-label">
                                    No
                                  </label></div>
                              </div>
                              <div class="dropdown-item pb-1">
                                <div class="custom-control custom-checkbox p-0"><input type="checkbox"
                                    id="styled-checkbox-3-1" class="custom-control-input" value="[object Object]"> <label
                                    for="styled-checkbox-3-1" class="custom-control-label">
                                    Yes
                                  </label></div>
                              </div>
                            </div>
                          </div>
                        </ul>
                      </div>
                    </div>

                    <div class="mr-2 pb-2">
                      <button type="button" class="btn btn-link btn-block">Clear filters</button>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!---->

            <div class="overlap" style="">
              <div class="w-100 TopTable__table VueTables VueTables--server" filterable="true">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group form-inline float-left VueTables__search"><span></span>
                      <div class="VueTables__search-field"><label for="VueTables__search_RzYcW"
                          class="">Filter:</label><input type="text" placeholder="Search query"
                          id="VueTables__search_RzYcW" autocomplete="new-password"
                          class="VueTables__search__input form-control " name="afa63c319fd4c"
                          style="background-color: inherit;"></div><span></span>
                    </div>

                    <div class="form-group form-inline float-right VueTables__limit">
                      <div class="VueTables__limit-field"><label for="VueTables__limit_RzYcW"
                          class="">Records:</label><select name="limit" id="VueTables__limit_RzYcW" class="form-control">
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
                        <th id="VueTables_th--name" tabindex="0" class="VueTables__sortable " style="position: relative;">
                          <span title="" class="VueTables__heading">Name</span><span
                            class="VueTables__sort-icon float-right fal fa-sort-amount-up"></span>
                          <div class="resize-handle"
                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                          </div>
                        </th>
                        <th id="VueTables_th--isEQP" tabindex="0" class="VueTables__sortable "
                          style="position: relative;"><span title="" class="VueTables__heading">EQP</span><span
                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                          <div class="resize-handle"
                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                          </div>
                        </th>
                        <th id="VueTables_th--isActive" tabindex="0" class="VueTables__sortable "
                          style="position: relative;"><span title="" class="VueTables__heading">Active</span><span
                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                          <div class="resize-handle"
                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                          </div>
                        </th>
                        <th id="VueTables_th--hasCred" tabindex="0" class="VueTables__sortable "
                          style="position: relative;"><span title="" class="VueTables__heading">PS Credentials</span><span
                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                          <div class="resize-handle"
                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                          </div>
                        </th>
                        <th id="VueTables_th--asiNumber" tabindex="0" class="VueTables__sortable "
                          style="position: relative;"><span title="" class="VueTables__heading">ASI</span><span
                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                          <div class="resize-handle"
                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                          </div>
                        </th>
                        <th id="VueTables_th--psCode" tabindex="0" class="VueTables__sortable "
                          style="position: relative;"><span title="" class="VueTables__heading">Code</span><span
                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                          <div class="resize-handle"
                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                          </div>
                        </th>
                        <th id="VueTables_th--accountNumber" tabindex="0" class="VueTables__sortable "
                          style="position: relative;"><span title="" class="VueTables__heading">Account ID</span><span
                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                          <div class="resize-handle"
                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                          </div>
                        </th>
                        <th id="VueTables_th--readyToGrab" tabindex="0" class="VueTables__sortable "
                          style="position: relative;"><span title="" class="VueTables__heading">PS Active</span><span
                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                          <div class="resize-handle"
                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                          </div>
                        </th>
                        <th id="VueTables_th--endpoints" tabindex="0" class="" style="position: relative;"><span title=""
                            class="VueTables__heading">Endpoints</span>
                          <div class="resize-handle"
                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                          </div>
                        </th>
                        <th id="VueTables_th--productsSellableCount" tabindex="0" class="VueTables__sortable "
                          style="position: relative;"><span title="" class="VueTables__heading">PS Sellable</span><span
                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                          <div class="resize-handle"
                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                          </div>
                        </th>
                        <th id="VueTables_th--activeProducts" tabindex="0" class="VueTables__sortable "
                          style="position: relative;"><span title="" class="VueTables__heading">PS Products</span><span
                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                          <div class="resize-handle"
                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                          </div>
                        </th>
                        <th id="VueTables_th--percent" tabindex="0" class="VueTables__sortable "
                          style="position: relative;"><span title="" class="VueTables__heading">PS Percent</span><span
                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                          <div class="resize-handle"
                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                          </div>
                        </th>
                        <th id="VueTables_th--productsWithErrors" tabindex="0" class="" style="position: relative;"><span
                            title="" class="VueTables__heading">PS Errors</span>
                          <div class="resize-handle"
                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                          </div>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr v-for="supplier in suppliers" :key="supplier.id" class="VueTables__row undefined">
                        <td tabindex="0" class="">
                          <span data-row="name" :title="supplier.name" class="">
                            <router-link :to="{ name: 'supplier', params: { slug: supplier.slug } }">
                              {{ supplier.name }}
                            </router-link>
                          </span>
                        </td>

                        <td tabindex="0" class="">
                          <span data-row="isEQP" title="" class="text-ellipsis">
                            {{ supplier.isEQP ? 'Yes' : 'No' }}
                          </span>
                        </td>

                        <td tabindex="0" class="">
                          <span data-row="isActive" title="true" class="text-ellipsis">
                            {{ supplier.isActive ? 'Yes' : 'No' }}
                          </span>
                        </td>

                        <td tabindex="0" class="">
                          <span data-row="hasCred" title="" class="text-ellipsis">
                            {{ supplier.hasCred ? 'Yes' : 'No' }}
                          </span>
                        </td>

                        <td tabindex="0" class="">
                          <span data-row="asiNumber" :title="supplier.asiNumber" class="text-ellipsis">
                            {{ supplier.asiNumber }}
                          </span>
                        </td>

                        <td tabindex="0" class="">
                          <span data-row="psCode" :title="supplier.psCode" class="text-ellipsis">
                            {{ supplier.psCode }}
                          </span>
                        </td>

                        <td tabindex="0" class="">
                          <span data-row="accountNumber" title="undefined" class="text-ellipsis">
                            {{ supplier.accountNumber }}
                          </span>
                        </td>

                        <td tabindex="0" class="">
                          <span data-row="readyToGrab" title="" class="text-ellipsis">
                            <span> {{ supplier.readyToGrab ? 'Yes' : 'No' }} </span>
                          </span>
                        </td>
                        
                        <td tabindex="0" class="">
                          <span data-row="endpoints" title="" class="text-ellipsis">
                            <div class="d-flex flex-wrap">
                              <a v-for="endpoint in supplier.endpoints" :key="endpoint.id" :href="endpoint.url" class="badge badge-light mr-1">
                                {{ endpoint.name }}
                              </a>
                            </div>
                          </span>
                        </td>
                        
                        <td tabindex="0" class="">
                          <span data-row="productsSellableCount" title="0" class="text-ellipsis">
                            {{ supplier.productsSellableCount }}
                          </span>
                        </td>
                        
                        <td tabindex="0" class="">
                          <span data-row="activeProducts" title="0" class="text-ellipsis">
                            {{ supplier.activeProducts }}
                          </span>
                        </td>

                        <td tabindex="0" class="">
                          <span data-row="percent" title="" class="text-ellipsis">
                            {{ supplier.percent }}
                          </span>
                        </td>
                        
                        <td tabindex="0" class="">
                          <span data-row="productsWithErrors" title="" class="text-ellipsis">
                            <button type="button" data-toggle="dropdown" class="btn btn-warning">
                              <i class="far fa-exclamation-triangle fa-1x"></i>
                            </button>
                            
                            <div class="dropdown-menu">
                              <div class="h5 dropdown-item">Product Data Issues</div>
                            </div>
                          </span>
                        </td>
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
                      <li class="VuePagination__pagination-item page-item active"><a href="javascript:void(0)"
                          class="page-link active" role="button">1</a></li>
                      <li class="VuePagination__pagination-item page-item "><a href="javascript:void(0)"
                          class="page-link " role="button">2</a></li>
                      <li class="VuePagination__pagination-item page-item "><a href="javascript:void(0)" role="button"
                          class="page-link ">3</a></li>
                      <li class="VuePagination__pagination-item page-item "><a href="javascript:void(0)" role="button"
                          class="page-link ">4</a></li>
                      <li class="VuePagination__pagination-item page-item "><a href="javascript:void(0)" role="button"
                          class="page-link ">5</a></li>
                      <li class="VuePagination__pagination-item page-item "><a href="javascript:void(0)" role="button"
                          class="page-link ">6</a></li>
                      <li class="VuePagination__pagination-item page-item "><a href="javascript:void(0)" role="button"
                          class="page-link ">7</a></li>
                      <li class="VuePagination__pagination-item page-item "><a href="javascript:void(0)" role="button"
                          class="page-link ">8</a></li>
                      <li class="VuePagination__pagination-item page-item "><a href="javascript:void(0)" role="button"
                          class="page-link ">9</a></li>
                      <li class="VuePagination__pagination-item page-item "><a href="javascript:void(0)" role="button"
                          class="page-link ">10</a></li>
                      <li class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-page "><a
                          href="javascript:void(0);" class="page-link">&gt;</a></li>
                      <li class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-chunk "><a
                          href="javascript:void(0);" class="page-link">&gt;&gt;</a></li>
                    </ul>
                    <p class="VuePagination__count text-center col-md-12" style="">Showing 1 to 25 of 2,998 records</p>
                  </nav>
                </div>
              </div>
            </div> <!---->
          </div>
        </div>
      </div>
    </div>

    <notification />
  </div>
</template>

<script>
import Navigation from '../includes/navigation.vue';
import Notification from '../includes/notification.vue';

export default {
  components: {
    Navigation,
    Notification
  },

  data() {
    return {
      isLoading: false,
      errorMsg: null,
      validationErrors: {},

      suppliers: []
    }
  },

  created() {
    this.fetchSuppliers();
  },

  methods: {
    async fetchSuppliers() {
      this.isLoading = true;

      axios.get('/suppliers')
        .then(response => {
          this.suppliers = response.data.suppliers;
        })
        .catch(error => {
          this.errorMsg = error.response.data.message;
        })
        .finally(() => this.isLoading = false);
    }
  }
}
</script>

<style></style>