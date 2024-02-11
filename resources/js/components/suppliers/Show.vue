<template>
    <div class="dashboard">
        <navigation />

        <div id="main" class="slideout-panel slideout-panel-left">
            <div class="main-panel container-fluid pt-3">
                <div>
                    <nav aria-label="breadcrumb" distsupplier="[object Object]">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <router-link :to="{ name: 'suppliers' }">Suppliers</router-link>
                            </li>
                            <li class="breadcrumb-item active"><span aria-current="page">View Supplier</span></li>
                        </ol>
                    </nav>

                    <div>
                        <h1>{{ supplier.name }}</h1>
                        <div class="tabs nav-tabs-underline mt-3" id="__BVID__162"><!---->
                            <div class="">
                                <ul role="tablist" class="nav nav-tabs" id="__BVID__162__BV_tab_controls_"><!---->
                                    <li role="presentation" class="nav-item intro-supplier-general-tab"><a role="tab"
                                            aria-selected="true" aria-setsize="2" aria-posinset="1" href="#" target="_self"
                                            class="nav-link active" id="__BVID__163___BV_tab_button__"
                                            aria-controls="__BVID__163">
                                            <div class="d-flex"><span class="">General</span><!----></div>
                                        </a></li>
                                    <li role="presentation" class="nav-item intro-supplier-pricing-tab"><a role="tab"
                                            tabindex="-1" aria-selected="false" aria-setsize="2" aria-posinset="2" href="#"
                                            target="_self" class="nav-link" id="__BVID__166___BV_tab_button__"
                                            aria-controls="__BVID__166">
                                            <div class="d-flex"><span class="">Pricing</span><!----></div>
                                        </a></li><!---->
                                </ul>
                            </div>

                            <div class="tab-content mt-3" id="__BVID__162__BV_tab_container_">
                                <div role="tabpanel" aria-hidden="false" class="tab-pane active" id="__BVID__163"
                                    aria-labelledby="__BVID__163___BV_tab_button__">
                                    <div class="pb-5">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="sticky-top sticky-top-app">
                                                    <nav class="nav flex-column"><a href="#info"
                                                            class="nav-link nav-link-hover-right">Info</a><a
                                                            href="#documents"
                                                            class="nav-link nav-link-hover-right">Documents</a><a
                                                            href="#contacts"
                                                            class="nav-link nav-link-hover-right">Contacts</a><a
                                                            href="#account"
                                                            class="nav-link nav-link-hover-right">Account</a><a
                                                            href="#notes" class="nav-link nav-link-hover-right">Notes</a>
                                                    </nav>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div id="info" class="pb-5"></div>
                                                <div class="mb-5">
                                                    <div class="card">
                                                        <div class="card-header d-flex justify-content-between">
                                                            <h5 class="card-title">Supplier Information</h5><!---->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="table-responsive">
                                                                    <table class="table table-borderless table-sm my-2">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Code</td>
                                                                                <td>{{ supplier.psCode }}</td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>Phone</td>
                                                                                <td>
                                                                                    <div v-if="(supplier.contacts && supplier.contacts.length) && (supplier.contacts[0].firstPhone)" class="d-flex align-items-center">
                                                                                        <span class="mr-2">
                                                                                            <img src="https://files.mpowerpromo.com/flags/us.svg" style="width: 18px;">
                                                                                            <!-- <img :src="'https://files.mpowerpromo.com/flags/' + supplier.contacts[0].firstPhone.countryCode + '.svg'" style="width: 18px;"> -->
                                                                                        </span>
                                                                                        <span>{{ supplier.contacts[0].firstPhone.phoneNumber }}</span><!----><!---->
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>Website</td>
                                                                                <td>
                                                                                    <a :href="supplier.website" target="_blank">
                                                                                        {{ supplier.website }}
                                                                                        <i class="ml-2 far fa-external-link"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>ASI#</td>
                                                                                <td>{{ supplier.asiNumber }}</td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>PPAI#</td>
                                                                                <td></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <div v-if="supplier.dist_supplier && supplier.dist_supplier.length" class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                            class="custom-control-input"
                                                                                            value="true"
                                                                                            :model="supplier.dist_supplier.digitalProofNotRequired"
                                                                                            id="__BVID__176">

                                                                                        <label class="custom-control-label" for="__BVID__176">
                                                                                            Digital Proof Not Required <i class="fas fa-question-circle text-light ml-2"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="card-body">
                                                                    <div class="card card-img-top">
                                                                        <div class="vue-map-container"
                                                                            style="width: 100%; height: 250px;">
                                                                            <div class="vue-map" style="overflow: hidden;">
                                                                                <div
                                                                                    style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                                                    <div style="overflow: hidden;"></div>
                                                                                    <div tabindex="0" aria-label="Map"
                                                                                        aria-roledescription="map"
                                                                                        role="region"
                                                                                        aria-describedby="C76E5B01-96DF-4E64-9B37-A04A2E3F141A"
                                                                                        style="position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                                                                        <div id="C76E5B01-96DF-4E64-9B37-A04A2E3F141A"
                                                                                            style="display: none;"><span>To
                                                                                                navigate the map with touch
                                                                                                gestures double-tap and hold
                                                                                                your finger on the map, then
                                                                                                drag the map.</span></div>
                                                                                    </div>
                                                                                    <div class="gm-style"
                                                                                        style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                                                        <div
                                                                                            style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                                                                            <div
                                                                                                style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform;">
                                                                                                <div
                                                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                                                </div>
                                                                                                <div
                                                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                                                                                                </div>
                                                                                                <div
                                                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;">
                                                                                                </div>
                                                                                                <div
                                                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                                                                <div
                                                                                                    style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform;">
                                                                                                    <div
                                                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                                                                        <span
                                                                                                            id="B36EACC5-2A5E-48E0-9705-1AA168DA1826"
                                                                                                            style="display: none;">To
                                                                                                            navigate, press
                                                                                                            the arrow
                                                                                                            keys.</span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="gm-style-moc"
                                                                                                style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.8s;">
                                                                                                <p class="gm-style-mot">Use
                                                                                                    ctrl + scroll to zoom
                                                                                                    the map</p>
                                                                                            </div>
                                                                                        </div><iframe aria-hidden="true"
                                                                                            frameborder="0" tabindex="-1"
                                                                                            style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none; opacity: 0;"></iframe>
                                                                                        <div
                                                                                            style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vue-map-hidden"><!----></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        158 W Oakland Ave, South Salt Lake,
                                                                        UT 84115-3009 USA
                                                                    </div><a
                                                                        href="https://www.google.com/maps?q=158 W Oakland Ave 84115-3009&amp;z=13&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3"
                                                                        target="_blank" class="small">
                                                                        Open in Google Maps
                                                                        <i class="far fa-external-link"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="documents" class="card">
                                                    <div class="card-header d-flex justify-content-between">
                                                        <h5 class="card-title">Documents</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div>
                                                            <div>
                                                                <form enctype="multipart/form-data" novalidate="novalidate">
                                                                    <!----><!----><!---->
                                                                    <div class="d-flex align-items-center"><!----><span
                                                                            class="mt-1"><label for="file-upload"
                                                                                class="btn btn-secondary mb-0"><i
                                                                                    class="far fa-cloud-upload mr-2"></i>Select
                                                                                File
                                                                            </label><input type="file" id="file-upload"
                                                                                multiple="multiple" name="file"
                                                                                class="input-file"></span></div>
                                                                </form>
                                                            </div>
                                                            <div class="mt-3">
                                                                <div style=""><!----> <!---->
                                                                    <div class="" style="">
                                                                        <div class="w-100 TopTable__table VueTables VueTables--server"
                                                                            filterable="true">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div
                                                                                        class="form-group form-inline float-left VueTables__search">
                                                                                        <span></span>
                                                                                        <div
                                                                                            class="VueTables__search-field">
                                                                                            <label
                                                                                                for="VueTables__search_S3EG0"
                                                                                                class="">Filter:</label><input
                                                                                                type="text"
                                                                                                placeholder="Search query"
                                                                                                id="VueTables__search_S3EG0"
                                                                                                autocomplete="off"
                                                                                                class="VueTables__search__input form-control ">
                                                                                        </div><span
                                                                                            class="d-flex align-items-end">
                                                                                            <!----> <!----></span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="form-group form-inline float-right VueTables__limit">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="VueTables__table table table-striped"
                                                                                    style="overflow: hidden;">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th id="VueTables_th--fileName"
                                                                                                tabindex="0"
                                                                                                class="VueTables__sortable "
                                                                                                style="position: relative;">
                                                                                                <span title=""
                                                                                                    class="VueTables__heading">File
                                                                                                    Name</span><span
                                                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                                                <div class="resize-handle"
                                                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                                                </div>
                                                                                            </th>
                                                                                            <th id="VueTables_th--fileType"
                                                                                                tabindex="0"
                                                                                                class="VueTables__sortable "
                                                                                                style="position: relative;">
                                                                                                <span title=""
                                                                                                    class="VueTables__heading">File
                                                                                                    Type</span><span
                                                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                                                <div class="resize-handle"
                                                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                                                </div>
                                                                                            </th>
                                                                                            <th id="VueTables_th--title"
                                                                                                tabindex="0"
                                                                                                class="VueTables__sortable "
                                                                                                style="position: relative;">
                                                                                                <span title=""
                                                                                                    class="VueTables__heading">Title</span><span
                                                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                                                <div class="resize-handle"
                                                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                                                </div>
                                                                                            </th>
                                                                                            <th id="VueTables_th--uploadDate"
                                                                                                tabindex="0"
                                                                                                class="VueTables__sortable "
                                                                                                style="position: relative;">
                                                                                                <span title=""
                                                                                                    class="VueTables__heading">Upload
                                                                                                    Date</span><span
                                                                                                    class="VueTables__sort-icon float-right fal fa-sort-amount-down"></span>
                                                                                                <div class="resize-handle"
                                                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                                                </div>
                                                                                            </th>
                                                                                            <th id="VueTables_th--userId"
                                                                                                tabindex="0"
                                                                                                class="VueTables__sortable "
                                                                                                style="position: relative;">
                                                                                                <span title=""
                                                                                                    class="VueTables__heading">User
                                                                                                    Id</span><span
                                                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                                                <div class="resize-handle"
                                                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                                                </div>
                                                                                            </th>
                                                                                            <th id="VueTables_th--delete"
                                                                                                tabindex="0"
                                                                                                class="VueTables__sortable "
                                                                                                style="position: relative;">
                                                                                                <span title=""
                                                                                                    class="VueTables__heading">Delete</span><span
                                                                                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                                                                <div class="resize-handle"
                                                                                                    style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 98px;">
                                                                                                </div>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr class="VueTables__no-results">
                                                                                            <td tabindex="0" colspan="6"
                                                                                                class="text-center">No
                                                                                                matching records</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>

                                                                            <div
                                                                                class="VuePagination row col-md-12 justify-content-center">
                                                                                <nav class="text-center">
                                                                                    <ul class="pagination VuePagination__pagination"
                                                                                        style="display: none;">
                                                                                        <li
                                                                                            class="VuePagination__pagination-item page-item  VuePagination__pagination-item-prev-chunk disabled">
                                                                                            <a href="javascript:void(0);"
                                                                                                disabled="disabled"
                                                                                                class="page-link">&lt;&lt;</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="VuePagination__pagination-item page-item  VuePagination__pagination-item-prev-page disabled">
                                                                                            <a href="javascript:void(0);"
                                                                                                disabled="disabled"
                                                                                                class="page-link">&lt;</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-page disabled">
                                                                                            <a href="javascript:void(0);"
                                                                                                disabled="disabled"
                                                                                                class="page-link">&gt;</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-chunk disabled">
                                                                                            <a href="javascript:void(0);"
                                                                                                disabled="disabled"
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
                                                    </div>
                                                </div>
                                                
                                                <div>
                                                    <div id="contacts" class="pb-5"></div>
                                                    <div class="card mb-3">
                                                        <div class="card-header d-flex justify-content-between">
                                                            <h5 class="card-title">Contacts</h5><a class="text-primary">New
                                                                Contact</a>
                                                        </div>
                                                        <ul class="list-group list-group-flush"><!----></ul>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div id="account" class="pb-5"></div>
                                                    <div class="card mb-3">
                                                        <div class="card-header d-flex justify-content-between">
                                                            <div class="row justify-content-between m-0 w-100">
                                                                <h5 class="card-title">Account</h5><a>Edit</a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group list-group-flush">
                                                            <div class="list-group-item">
                                                                <div>
                                                                    <table class="table table-borderless table-sm">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Account #</td>
                                                                                <td><strong></strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Terms</td>
                                                                                <td><strong></strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Rebate</td>
                                                                                <td><strong>0%</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>PromoStandards ID</td>
                                                                                <td><strong></strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>PromoStandards Password</td>
                                                                                <td><strong></strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>QuickBooks Vendor Id</td>
                                                                                <td><strong></strong></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div id="notes" class="pb-5"></div>
                                                <div class="card mb-3">
                                                    <div class="card-header d-flex justify-content-between">
                                                        <h5 class="card-title">Notes</h5><a>New Note</a>
                                                    </div>
                                                    <ul class="list-group list-group-flush"><!----></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" aria-hidden="true" class="tab-pane" id="__BVID__166"
                                    aria-labelledby="__BVID__166___BV_tab_button__" style="display: none;"><!----></div>
                                <!---->
                            </div>
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

            supplier: {}
        }
    },

    created() {
        this.fetchSupplier();
    },

    methods: {
        fetchSupplier() {
            this.isLoading = true;

            axios.get(`/suppliers/single/${this.$route.params.slug}`)
            .then(response => {
                this.supplier = response.data.supplier;
            })
            .catch(error => {
                this.errorMsg = error.response.data.message || 'An error occurred. Please try again.';
            })
            .finally(() => {
                this.isLoading = false;
            });
        }
    }
}
</script>
  
<style></style>