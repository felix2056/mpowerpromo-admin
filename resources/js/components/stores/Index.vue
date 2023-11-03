<template>
  <div class="dashboard">
    <nav id="menu" class="slideout-menu slideout-menu-left pr-2 bg-white text-dark">
      <div class="d-none d-md-block slideout-menu-container">
        <ul class="nav flex-column">
          <li class="nav-item"><a href="/dashboard"
              class="nav-link py-3 px-3 nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-tachometer fa-fw mr-2"></i>
                Dashboard
              </div>
            </a></li>
          <li class="nav-item"><a href="/customers"
              class="nav-link py-3 px-3 nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-users fa-fw mr-2"></i>
                Customers
              </div>
            </a></li>
          <li class="nav-item"><a href="/orders"
              class="nav-link py-3 px-3 nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-file-invoice-dollar fa-fw mr-2"></i>
                Orders
              </div>
            </a></li>
          <li class="nav-item"><a href="/products"
              class="nav-link py-3 px-3 nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-tshirt fa-fw mr-2"></i>
                Products
              </div>
            </a></li>
          <li class="nav-item"><a href="/suppliers"
              class="nav-link py-3 px-3 nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-warehouse-alt fa-fw mr-2"></i>
                Suppliers
              </div>
            </a></li>
          <li class="nav-item"><a href="/stores"
              class="nav-link py-3 px-3 nav-link-hover-right rounded-right-lg router-link-exact-active router-link-active text-dark"
              aria-current="page">
              <div class=""><i class="fa-1x far fa-store fa-fw mr-2"></i>
                Stores
              </div>
            </a></li>
          <li class="nav-item"><a href="/proofs"
              class="nav-link py-3 px-3 nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-paint-brush fa-fw mr-2"></i>
                Proofs
              </div>
            </a></li>
          <li class="nav-item"><a href="/reports"
              class="nav-link py-3 px-3 nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-chart-line fa-fw mr-2"></i>
                Reports
              </div>
            </a></li>
        </ul>
        <div class="navbar-items-bottom nav flex-column"><!----><!----><!----></div>
      </div>
      <div class="d-block d-md-none slideout-menu-container">
        <ul class="nav flex-column">
          <li class="nav-item pb-2"><a href="/dashboard" class="nav-link nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-tachometer fa-fw mr-2"></i>
                Dashboard
              </div>
            </a></li>
          <li class="nav-item pb-2"><a href="/customers" class="nav-link nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-users fa-fw mr-2"></i>
                Customers
              </div>
            </a></li>
          <li class="nav-item pb-2"><a href="/orders" class="nav-link nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-file-invoice-dollar fa-fw mr-2"></i>
                Orders
              </div>
            </a></li>
          <li class="nav-item pb-2"><a href="/products" class="nav-link nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-tshirt fa-fw mr-2"></i>
                Products
              </div>
            </a></li>
          <li class="nav-item pb-2"><a href="/suppliers" class="nav-link nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-warehouse-alt fa-fw mr-2"></i>
                Suppliers
              </div>
            </a></li>
          <li class="nav-item pb-2"><a href="/stores"
              class="nav-link nav-link-hover-right rounded-right-lg router-link-exact-active router-link-active text-dark"
              aria-current="page">
              <div class=""><i class="fa-1x far fa-store fa-fw mr-2"></i>
                Stores
              </div>
            </a></li>
          <li class="nav-item pb-2"><a href="/proofs" class="nav-link nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-paint-brush fa-fw mr-2"></i>
                Proofs
              </div>
            </a></li>
          <li class="nav-item pb-2"><a href="/reports" class="nav-link nav-link-hover-right rounded-right-lg text-dark">
              <div class=""><i class="fa-1x far fa-chart-line fa-fw mr-2"></i>
                Reports
              </div>
            </a></li>
        </ul>
        <div class="navbar-items-bottom nav flex-column"><!----><!----><!----></div>
      </div>
    </nav>
    <div class="fixed-top">
      <nav class="navbar bg-white navbar-app flex-wrap flex-md-nowrap border-bottom pl-0"><button type="button"
          class="btn btn-link px-2"><i class="fal fa-chevron-left fa-1x text-dark fa-fw"></i></button><a
          class="navlink intro-app-nav-expand"><i class="far fa-bars fa-1x text-dark mx-1"></i></a><a href="/my-account"
          class="mx-3 d-none d-sm-inline"><img src="/img/mpower_mark.svg" alt="MPower Promo" class="logo"></a>
        <div class="w-100 d-none d-md-inline-block mr-3 intro-app-search-global" style="max-width: 600px;">
          <div class="input-group input-group-lg"><input placeholder="Search Suppliers, Customers, Orders, Products..."
              class="form-control border-0 bg-light"><!----></div>
          <div id="mainList" class="shadow bg-white border rounded"
            style="position: absolute; overflow: auto; max-height: 80vh; display: none;"><!----><!----></div>
        </div>
        <div class="ml-auto d-flex justify-content-end align-items-center">
          <div class="d-none mr-2 text-right d-sm-flex">
            <div><img src="https://files.mpowerpromo.com/temp/_200_200_1694023443744-ACE_Logo.jpg"
                style="max-height: 40px;"></div>
          </div><button type="button"
            class="btn btn-circle d-inline-block d-md-none ml-2 intro-app-search-global bg-light"><i
              class="fas fa-search fa-fw"></i></button>
          <div class="dropdown ml-2 intro-app-create-new"><button type="button" data-toggle="dropdown"
              class="btn btn-light btn-circle dropdown-toggle dropdown-no-caret"><i
                class="fas fa-plus fa-fw"></i></button>
            <div class="dropdown-menu dropdown-menu-right"><a href="/customers/create" class="dropdown-item">New
                Customer</a><a href="/customers/companies/create" class="dropdown-item">New Company</a>
              <div><a class="dropdown-item">New Order</a><!----></div><a href="/customers/presentations/create"
                class="dropdown-item">Create Presentation</a><a href="/stores/create" class="dropdown-item">New Store</a>
            </div>
          </div>
          <div><a data-toggle="modal" data-target="#notification-modal"
              class="btn btn-light btn-circle text-muted ml-2 intro-app-notifications"><i
                class="fas fa-bell fa-fw"></i></a></div>
          <div class="dropdown ml-2 intro-app-help"><button type="button" data-toggle="dropdown"
              class="btn btn-light btn-circle dropdown-toggle dropdown-no-caret"><i
                class="fas fa-question fa-fw"></i><span class="badge badge-danger position-absolute" style="z-index: 2;">
                2
              </span></button>
            <div class="dropdown-menu dropdown-menu-right">
              <li>
                <h6 class="dropdown-header">Help and Support</h6>
              </li><a href="/my-account/quick-start-guide" class="dropdown-item d-flex align-items-center"><i
                  class="far fa-question-circle fa-fw mr-2"></i>Quick Start Guide
                <span class="badge badge-danger ml-2">
                  2
                </span></a><a href="https://docs.mpowerpromo.com" target="_blank" class="dropdown-item"><i
                  class="fas fa-book fa-fw mr-2"></i>Documentation</a><a
                href="https://support.mpowerpromo.com/portal/1/create/18" target="_blank" class="dropdown-item"><i
                  class="fas fa-database fa-fw mr-2"></i>Report incorrect product data</a><a
                href="https://support.mpowerpromo.com/portal/1/create/16" target="_blank" class="dropdown-item"><i
                  class="fas fa-bug fa-fw mr-2"></i>Submit a bug ticket</a><a
                href="https://support.mpowerpromo.com/portal/1/create/12" target="_blank" class="dropdown-item"><i
                  class="fas fa-exclamation-triangle fa-fw mr-2"></i>Report a system outage</a><a
                href="https://support.mpowerpromo.com/portal/1/create/17" target="_blank" class="dropdown-item"><i
                  class="fas fa-bullhorn fa-fw mr-2"></i>Request a new feature</a><a class="dropdown-item"><i
                  class="fas fa-play fa-fw mr-2"></i>Play walkthroughs again</a><a
                href="https://calendly.com/mpower-support" target="_blank" class="dropdown-item"><i
                  class="fa fa-headset mr-2 fa-fw"></i>Schedule a support call</a>
            </div>
          </div>
          <div class="dropdown ml-2"><a data-toggle="dropdown"
              class="btn btn-light p-0 btn-circle text-muted intro-app-account"><span
                class="b-avatar badge-white rounded-circle" title="Danny Test"><span
                  class="b-avatar-text"><span>DT</span></span><!----></span></a>
            <div class="dropdown-menu dropdown-menu-right"><span><a class="dropdown-item"><i
                    class="far fa-building fa-fw mr-2"></i>
                  My Distributor
                </a></span><span><a class="dropdown-item"><i class="far fa-users-cog fa-fw mr-2"></i>
                  Users
                </a></span><span><a href="/my-account" class="dropdown-item"><i
                    class="far fa-user-circle fa-fw mr-2 intro-app-account"></i>
                  My Account
                </a></span><span><a class="dropdown-item"><i class="far fa-sign-out fa-fw mr-2"></i>
                  Sign Out
                </a></span></div>
          </div>
        </div>
      </nav>
    </div>
    <div class="d-none d-md-block nav-panel-container">
      <div class="nav-panel text-light text-center">
        <ul class="nav flex-column pt-3 intro-app-left-nav">
          <li class="nav-item d-flex align-items-center"><a href="/dashboard"
              class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark"><i
                class="fa-1x far fa-tachometer fa-fw mr-2"></i><!----></a></li>
          <li class="nav-item d-flex align-items-center"><a href="/customers"
              class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark"><i
                class="fa-1x far fa-users fa-fw mr-2"></i><!----></a></li>
          <li class="nav-item d-flex align-items-center"><a href="/orders"
              class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark"><i
                class="fa-1x far fa-file-invoice-dollar fa-fw mr-2"></i><!----></a></li>
          <li class="nav-item d-flex align-items-center"><a href="/products"
              class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark"><i
                class="fa-1x far fa-tshirt fa-fw mr-2"></i><!----></a></li>
          <li class="nav-item d-flex align-items-center"><a href="/suppliers"
              class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark"><i
                class="fa-1x far fa-warehouse-alt fa-fw mr-2"></i><!----></a></li>
          <li class="nav-item d-flex align-items-center"><a href="/stores"
              class="py-3 pr-2 pl-3 nav-link-hover-right position-relative router-link-exact-active router-link-active text-dark"
              aria-current="page"><i class="fa-1x far fa-store fa-fw mr-2"></i><!----></a></li>
          <li class="nav-item d-flex align-items-center"><a href="/proofs"
              class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark"><i
                class="fa-1x far fa-paint-brush fa-fw mr-2"></i><!----></a></li>
          <li class="nav-item d-flex align-items-center"><a href="/reports"
              class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark"><i
                class="fa-1x far fa-chart-line fa-fw mr-2"></i><!----></a></li>
        </ul>
        <div class="navbar-items-bottom nav d-flex flex-column justify-content-center w-100"><!----><!----><!----><!---->
        </div>
      </div>
    </div>
    <div id="main" class="slideout-panel slideout-panel-left">
      <div class="main-panel container-fluid pt-3">
        <div>
          <div id="table-company">
            <div class="d-flex justify-content-between flex-sm-row flex-column">
              <h1 class="text-secondary">Stores</h1>
              <div class="pt-2"><a href="/stores/create" class="btn btn-primary mb-3 intro-stores-create">Create Store</a>
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
                        <tr class="VueTables__row undefined">
                          <td tabindex="0" class=""><a href="/stores/64f8c583bedafd07266de4ea" class="">Ace Rubber
                              Stamps</a></td>
                          <td tabindex="0" class=""><span></span></td>
                          <td tabindex="0" class="">ace.mpowerpromo.com</td>
                        </tr><!---->
                        <tr class="VueTables__row undefined">
                          <td tabindex="0" class=""><a href="/stores/64f8bf1959a50f5307a44a93" class="">Minkus Advertising
                              Specialties</a></td>
                          <td tabindex="0" class=""><span></span></td>
                          <td tabindex="0" class="">minkus-advertising-specialties.mpowerpromo.com</td>
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
                      <p class="VuePagination__count text-center col-md-12" style="">2 records</p>
                    </nav>
                  </div>
                </div>
              </div> <!---->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="notification-modal" role="dialog" aria-hidden="true" class="modal right fade">
      <div role="document"
        class="modal-dialog modal-dialog-slideout modal-dialog-slideout-right modial-dialog-slideout-sm">
        <div class="modal-content">
          <div>
            <div class="border-bottom d-flex justify-content-between align-items-center p-3">
              <h4 class="mb-0">Notifications</h4><a data-dismiss="modal" class="text-secondary"><i
                  class="far fa-times fa-1x ml-auto"></i></a>
            </div>
            <div><!----></div>
            <div><!----></div>
            <div class="ml-4 mt-2 custom-control custom-checkbox"><input type="checkbox" class="custom-control-input"
                value="true" id="__BVID__65"><label class="custom-control-label" for="__BVID__65">Only show my orders
              </label></div>
            <div class="ml-4 mt-2 custom-control custom-checkbox"><input type="checkbox" class="custom-control-input"
                value="true" id="__BVID__66"><label class="custom-control-label" for="__BVID__66">
                Test Orders
              </label></div>
            <div class="d-flex align-items-center justify-content-center mt-2"><small class="">Last update: 10/16/2023,
                3:31:18 pm</small><a class="ml-3"><i class="fas fa-sync"></i></a></div>
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