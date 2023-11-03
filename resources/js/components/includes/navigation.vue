<template>
    <div class="navigation">
        <nav id="menu" class="slideout-menu slideout-menu-left pr-2 bg-white text-dark">
            <div class="d-none d-md-block slideout-menu-container">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <router-link :to="{ name: 'dashboard' }"
                            class="nav-link py-3 px-3 nav-link-hover-right rounded-right-lg text-dark"
                            aria-current="page">
                            <div class="">
                                <i class="fa-1x far fa-tachometer fa-fw mr-2"></i>
                                Dashboard
                            </div>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'customers' }" class="nav-link py-3 px-3 nav-link-hover-right rounded-right-lg text-dark">
                            <div class="">
                                <i class="fa-1x far fa-users fa-fw mr-2"></i>
                                Customers
                            </div>
                        </router-link>
                    </li>
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
                    <li class="nav-item">
                        <router-link :to="{ name: 'stores' }"
                            class="nav-link py-3 px-3 nav-link-hover-right rounded-right-lg text-dark">
                            <div class=""><i class="fa-1x far fa-store fa-fw mr-2"></i>
                                Stores
                            </div>
                        </router-link>
                    </li>
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
                    <li class="nav-item pb-2">
                        <router-link :to="{ name: 'dashboard' }"
                            class="nav-link nav-link-hover-right rounded-right-lg text-dark"
                            aria-current="page">
                            <div class="">
                                <i class="fa-1x far fa-tachometer fa-fw mr-2"></i>
                                Dashboard
                            </div>
                        </router-link>
                    </li>
                    <li class="nav-item pb-2">
                        <router-link :to="{ name: 'customers' }"
                            class="nav-link nav-link-hover-right rounded-right-lg text-dark">
                            <div class="">
                                <i class="fa-1x far fa-users fa-fw mr-2"></i>
                                Customers
                            </div>
                        </router-link>
                    </li>
                    <li class="nav-item pb-2"><a href="/orders"
                            class="nav-link nav-link-hover-right rounded-right-lg text-dark">
                            <div class=""><i class="fa-1x far fa-file-invoice-dollar fa-fw mr-2"></i>
                                Orders
                            </div>
                        </a></li>
                    <li class="nav-item pb-2"><a href="/products"
                            class="nav-link nav-link-hover-right rounded-right-lg text-dark">
                            <div class=""><i class="fa-1x far fa-tshirt fa-fw mr-2"></i>
                                Products
                            </div>
                        </a></li>
                    <li class="nav-item pb-2"><a href="/suppliers"
                            class="nav-link nav-link-hover-right rounded-right-lg text-dark">
                            <div class=""><i class="fa-1x far fa-warehouse-alt fa-fw mr-2"></i>
                                Suppliers
                            </div>
                        </a></li>
                    <li class="nav-item pb-2">
                        <router-link :to="{ name: 'stores' }"
                            class="nav-link nav-link-hover-right rounded-right-lg text-dark">
                            <div class=""><i class="fa-1x far fa-store fa-fw mr-2"></i>
                                Stores
                            </div>
                        </router-link>
                    </li>
                    <li class="nav-item pb-2"><a href="/proofs"
                            class="nav-link nav-link-hover-right rounded-right-lg text-dark">
                            <div class=""><i class="fa-1x far fa-paint-brush fa-fw mr-2"></i>
                                Proofs
                            </div>
                        </a></li>
                    <li class="nav-item pb-2"><a href="/reports"
                            class="nav-link nav-link-hover-right rounded-right-lg text-dark">
                            <div class=""><i class="fa-1x far fa-chart-line fa-fw mr-2"></i>
                                Reports
                            </div>
                        </a></li>
                </ul>
                <div class="navbar-items-bottom nav flex-column"><!----><!----><!----></div>
            </div>
        </nav>
        <div class="fixed-top">
            <nav class="navbar bg-white navbar-app flex-wrap flex-md-nowrap border-bottom pl-0">
                <button type="button" class="btn btn-link px-2">
                    <i class="fal fa-chevron-left fa-1x text-dark fa-fw"></i>
                </button>
                <a @click="toggleBodyClass('slideout-open')" class="navlink intro-app-nav-expand" href="void:javascript(0)">
                    <i class="far fa-bars fa-1x text-dark mx-1"></i>
                </a>
                <a href="/my-account" class="mx-3 d-none d-sm-inline">
                    <img src="/img/mpower_mark.svg" alt="MPower Promo" class="logo">
                </a>
                <div class="w-100 d-none d-md-inline-block mr-3 intro-app-search-global" style="max-width: 600px;">
                    <div class="input-group input-group-lg"><input
                            placeholder="Search Suppliers, Customers, Orders, Products..."
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
                            <div><a class="dropdown-item">New Order</a><!----></div><a
                                href="/customers/presentations/create" class="dropdown-item">Create Presentation</a><a
                                href="/stores/create" class="dropdown-item">New Store</a>
                        </div>
                    </div>
                    <div><a data-toggle="modal" data-target="#notification-modal"
                            class="btn btn-light btn-circle text-muted ml-2 intro-app-notifications"><i
                                class="fas fa-bell fa-fw"></i></a></div>
                    <div class="dropdown ml-2 intro-app-help"><button type="button" data-toggle="dropdown"
                            class="btn btn-light btn-circle dropdown-toggle dropdown-no-caret"><i
                                class="fas fa-question fa-fw"></i><span class="badge badge-danger position-absolute"
                                style="z-index: 2;">
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
                                href="https://support.mpowerpromo.com/portal/1/create/18" target="_blank"
                                class="dropdown-item"><i class="fas fa-database fa-fw mr-2"></i>Report incorrect product
                                data</a><a href="https://support.mpowerpromo.com/portal/1/create/16" target="_blank"
                                class="dropdown-item"><i class="fas fa-bug fa-fw mr-2"></i>Submit a bug ticket</a><a
                                href="https://support.mpowerpromo.com/portal/1/create/12" target="_blank"
                                class="dropdown-item"><i class="fas fa-exclamation-triangle fa-fw mr-2"></i>Report a system
                                outage</a><a href="https://support.mpowerpromo.com/portal/1/create/17" target="_blank"
                                class="dropdown-item"><i class="fas fa-bullhorn fa-fw mr-2"></i>Request a new feature</a><a
                                class="dropdown-item"><i class="fas fa-play fa-fw mr-2"></i>Play walkthroughs again</a><a
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
                    <li class="nav-item d-flex align-items-center">
                        <router-link :to="{ name: 'dashboard' }"
                            class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark"
                            aria-current="page">
                            <i class="fa-1x far fa-tachometer fa-fw mr-2"></i><!---->
                        </router-link>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <router-link :to="{ name: 'customers' }"
                            class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark">
                            <i class="fa-1x far fa-users fa-fw mr-2"></i><!---->
                        </router-link>
                    </li>
                    <li class="nav-item d-flex align-items-center"><a href="/orders"
                            class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark"><i
                                class="fa-1x far fa-file-invoice-dollar fa-fw mr-2"></i><!----></a></li>
                    <li class="nav-item d-flex align-items-center"><a href="/products"
                            class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark"><i
                                class="fa-1x far fa-tshirt fa-fw mr-2"></i><!----></a></li>
                    <li class="nav-item d-flex align-items-center"><a href="/suppliers"
                            class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark"><i
                                class="fa-1x far fa-warehouse-alt fa-fw mr-2"></i><!----></a></li>
                    <li class="nav-item d-flex align-items-center">
                        <router-link :to="{ name: 'stores' }"
                            class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark">
                            <i class="fa-1x far fa-store fa-fw mr-2"></i><!---->
                        </router-link>
                    </li>
                    <li class="nav-item d-flex align-items-center"><a href="/proofs"
                            class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark"><i
                                class="fa-1x far fa-paint-brush fa-fw mr-2"></i><!----></a></li>
                    <li class="nav-item d-flex align-items-center"><a href="/reports"
                            class="py-3 pr-2 pl-3 nav-link-hover-right position-relative text-dark"><i
                                class="fa-1x far fa-chart-line fa-fw mr-2"></i><!----></a></li>
                </ul>
                <div class="navbar-items-bottom nav d-flex flex-column justify-content-center w-100">
                    <!----><!----><!----><!---->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            body: document.body,
            menu: document.getElementById('menu'),
            menuOpen: false,
            menuButton: document.getElementById('menu-button'),
            menuButtonOpen: false,
            menuButtonClose: false,
        }
    },

    methods: {
        toggleBodyClass(className) {
            this.body.classList.toggle(className)
        },
    }
}
</script>

<style></style>