<template>
  <div class="dashboard">
    <navigation />

    <div id="main" class="slideout-panel slideout-panel-left">
      <div class="main-panel container-fluid pt-3">
        <div>
          <div id="table-company">
            <div class="d-flex justify-content-between flex-sm-row flex-column">
              <h1 class="text-secondary">Stores</h1>
              <div class="pt-2">
                <a href="/stores/create" class="btn btn-primary mb-3 intro-stores-create">Create Store</a>
              </div>
            </div>

            <div style=""><!----> <!---->
              <div class="" style="">
                <div class="w-100 TopTable__table VueTables VueTables--server" filterable="true">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group form-inline float-left VueTables__search"><span></span>
                        <div class="VueTables__search-field"><label for="VueTables__search_5GMSo"
                            class="">Filter:</label><input type="text" placeholder="Search query"
                            id="VueTables__search_5GMSo" autocomplete="new-password"
                            class="VueTables__search__input form-control " name="8881983988063"
                            style="background-color: inherit;"></div><span></span>
                      </div>
                      <div class="form-group form-inline float-right VueTables__limit"></div>
                    </div>
                  </div>

                  <div class="table-responsive">
                    <table class="VueTables__table table table-striped" style="overflow: hidden;">
                      <thead>
                        <tr>
                          <th id="VueTables_th--storeName" tabindex="0" class="VueTables__sortable "
                            style="position: relative;"><span title="" class="VueTables__heading">Name</span><span
                              class="VueTables__sort-icon float-right fal fa-sort-amount-up"></span>
                            <div class="resize-handle"
                              style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                            </div>
                          </th>
                          <th id="VueTables_th--template" tabindex="0" class="VueTables__sortable "
                            style="position: relative;"><span title="" class="VueTables__heading">Template</span><span
                              class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                            <div class="resize-handle"
                              style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                            </div>
                          </th>
                          <th id="VueTables_th--storeUrl" tabindex="0" class="VueTables__sortable "
                            style="position: relative;"><span title="" class="VueTables__heading">Domain Name</span><span
                              class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                            <div class="resize-handle"
                              style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 99px;">
                            </div>
                          </th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        <tr v-for="store in stores" :key="store.id" class="VueTables__row undefined">
                          <td tabindex="0" class="">
                            <a :href="`/stores/${store.host}`" class="">{{ store.name }}</a>
                          </td>
                          <td tabindex="0" class="">
                            <span></span>
                          </td>
                          <td tabindex="0" class="">
                            {{ store.host }}
                          </td>
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
                          <a href="javascript:void(0);" disabled="disabled" class="page-link">&lt;</a>
                        </li>
                        <li class="VuePagination__pagination-item page-item active"><a href="javascript:void(0)"
                            class="page-link active" role="button">1</a></li>
                        <li
                          class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-page disabled">
                          <a href="javascript:void(0);" disabled="disabled" class="page-link">&gt;</a>
                        </li>
                        <li
                          class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-chunk disabled">
                          <a href="javascript:void(0);" disabled="disabled" class="page-link">&gt;&gt;</a>
                        </li>
                      </ul>
                      <p class="VuePagination__count text-center col-md-12" style="">{{ stores.length }} records</p>
                    </nav>
                  </div>
                </div>
              </div> <!---->
            </div>
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
import VueMultiselect from 'vue-multiselect';

export default {
  components: {
    Navigation,
    Notification,
    Multiselect: VueMultiselect
  },

  data() {
    return {
      isLoading: false,
      isLoadingCountries: false,
      isUploading: false,
      shouldCompress: true,
      errorMsg: null,
      validationErrors: {},

      stores: []
    }
  },

  created() {
    this.fetchStores();
  },
  
  methods: {
    fetchStores() {
      this.isLoading = true;

      axios.get('/stores')
        .then(({ data }) => {
          this.stores = data.stores
        })
        .catch(error => console.log(error))
        .finally(() => this.isLoading = false);
    },
  }
}
</script>

<style></style>