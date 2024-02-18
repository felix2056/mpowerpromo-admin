<template>
    <div class="store-editor-sidebar" :class="containerSize">
        <component v-if="componentToShow" :is="componentToShow" />

        <div v-else id="menu" class="p-3">
            <div class="mb-3">
                <h5>{{ store.name }}</h5>
                <a :href="store.host" target="_blank" title="View Store" class="small">{{ store.host }}</a>
                <div class="small text-muted">Updated: <time>{{ store.updated_at }}</time></div>
            </div><!---->

            <div size="sm" class="card"><!----><!---->
                <div class="card-body"><!----><!---->
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center mr-3">
                            <div>
                                <i class="fa-fw mr-3 far fa-exclamation-triangle text-warning"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Missing communication emails</h6>
                                <div class="small">Add System, Billing, Support and Order communication
                                    email addresses.</div>
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div><!----><!---->
            </div>

            <div size="sm" class="card"><!----><!---->
                <div class="card-body"><!----><!---->
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center mr-3">
                            <div>
                                <i class="fa-fw mr-3 far fa-exclamation-triangle text-warning"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Set up shipping</h6>
                                <div class="small">Add a shipping provider</div>
                            </div>
                        </div>
                        <div><button type="button" class="btn btn-primary">Add</button></div>
                    </div>
                </div><!----><!---->
            </div>

            <div size="sm" class="card"><!----><!---->
                <div class="card-body"><!----><!---->
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center mr-3">
                            <div>
                                <i class="fa-fw mr-3 far fa-exclamation-triangle text-warning"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Users not assigned</h6>
                                <div class="small">Associate a sales user and sales administrator with
                                    the store.</div>
                            </div>
                        </div>
                        <div><button type="button" class="btn btn-primary">Assign</button></div>
                    </div>
                </div><!----><!---->
            </div>

            <div class="mb-4">
                <h6>
                    Content
                </h6>
                <ul class="nav flex-column">
                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'Categories' } }"
                            class="nav-item nav-item-hover p-1 btn-block intro-store-categories">
                            <i class="fa-fw mx-2 far fa-folder-tree"></i>
                            Categories
                            <!---->
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'Components' } }"
                            class="nav-item nav-item-hover p-1 btn-block intro-store-components">
                            <i class="fa-fw mx-2 far fa-grip-horizontal"></i>
                            Components
                            <!---->
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'HeadTags' } }"
                            class="nav-item nav-item-hover p-1 btn-block intro-store-headtags">
                            <i class="fa-fw mx-2 far fa-code"></i>
                            Head Tags
                            <!---->
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'Media' } }"
                            class="nav-item nav-item-hover p-1 btn-block intro-store-media">
                            <i class="fa-fw mx-2 far fa-images"></i>
                            Media
                            <!---->
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'Pages' } }"
                            class="nav-item nav-item-hover p-1 btn-block intro-store-pages">
                            <i class="fa-fw mx-2 far fa-file"></i>
                            Pages
                            <!---->
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'Theme' } }"
                            class="nav-item nav-item-hover p-1 btn-block intro-store-theme">
                            <i class="fa-fw mx-2 far fa-brush"></i>
                            Theme
                            <!---->
                        </router-link>
                    </li>
                </ul>
            </div>

            <div class="mb-4">
                <h6>
                    Products
                </h6>
                <ul class="nav flex-column">
                    <li>
                        <a class="nav-item nav-item-hover p-1 btn-block intro-store-products">
                            <i class="fa-fw mx-2 far fa-tshirt"></i>
                            Products
                            <!---->
                        </a>
                    </li>
                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'Suppliers' } }"
                            class="nav-item nav-item-hover p-1 btn-block intro-store-suppliers">
                            <i class="fa-fw mx-2 far fa-warehouse-alt fa-fw mr-2"></i>
                            Suppliers
                            <!---->
                        </router-link>
                    </li>
                </ul>
            </div>
            <div class="mb-4">
                <h6>
                    Marketing
                </h6>
                <ul class="nav flex-column">
                    <li><a
                            class="nav-item nav-item-hover p-1 btn-block text-muted position-relative intro-store-product-feed"><i
                                class="fa-fw mx-2 far fa-rss-square"></i>
                            Product Feed
                            <i class="fas fa-circle fa-xs text-primary ml-1 position-absolute"></i></a>
                    </li>
                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'SocialMedia' } }" 
                            class="nav-item nav-item-hover p-1 btn-block intro-store-social-media">
                            <i class="fa-fw mx-2 far fa-share fa-fw"></i>
                            Social Media
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'Robots' } }" 
                            class="nav-item nav-item-hover p-1 btn-block intro-store-robots">
                            <i class="fa-fw mx-2 far fa-robot"></i>
                            Robots.txt
                            <!---->
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'Sitemaps' } }"
                             class="nav-item nav-item-hover p-1 btn-block intro-store-sitemaps">
                             <i class="fa-fw mx-2 far fa-sitemap"></i>
                            Sitemaps
                            <!---->
                        </router-link>
                    </li>
                </ul>
            </div>
            <div class="mb-4">
                <h6>
                    Selling
                </h6>
                <ul class="nav flex-column">
                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'Customers' } }"
                            class="nav-item nav-item-hover p-1 btn-block intro-store-customers">
                            <i class="fa-fw mx-2 far fa-users fa-fw mr-2"></i>
                            Customers
                            <!---->
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'Discounts' } }"
                            class="nav-item nav-item-hover p-1 btn-block intro-store-specials">
                            <i class="fa-fw mx-2 far fa-tag"></i>
                            Discounts &amp; Specials
                            <!---->
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'Payment' } }"
                            class="nav-item nav-item-hover p-1 btn-block intro-store-payment">
                            <i class="fa-fw mx-2 far fa-credit-card"></i>
                            Payment
                            <!---->
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'store', query: { tab: 'Reports' } }"
                            class="nav-item nav-item-hover p-1 btn-block intro-store-reports">
                            <i class="fa-fw mx-2 far fa-chart-line fa-fw mr-2"></i>
                            Reports
                            <!---->
                        </router-link>
                    </li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-store-reviews"><i
                                class="fa-fw mx-2 far fa-comment-alt-lines fa-fw mr-2"></i>
                            Reviews
                            <!----></a></li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-store-shipping"><i
                                class="fa-fw mx-2 far fa-shipping-fast"></i>
                            Shipping
                            <!----></a></li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-store-taxes"><i
                                class="fa-fw mx-2 far fa-money-bill"></i>
                            Taxes
                            <!----></a></li>
                </ul>
            </div>
            <div class="mb-4">
                <h6>
                    Settings
                </h6>
                <ul class="nav flex-column">
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-store-artwork"><i
                                class="fa-fw mx-2 far fa-image"></i>
                            Artwork
                            <!----></a></li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-store-information"><i
                                class="fa-fw mx-2 far fa-info-circle"></i>
                            Information
                            <!----></a></li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-store-communication"><i
                                class="fa-fw mx-2 far fa-envelope"></i>
                            Communication
                            <!----></a></li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-store-configuration"><i
                                class="fa-fw mx-2 far fa-sliders-h"></i>
                            Configuration
                            <!----></a></li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-store-carts"><i
                                class="fa-fw mx-2 far fa-shopping-cart"></i>
                            Carts
                            <!----></a></li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-store-roles"><i
                                class="fa-fw mx-2 far fa-user-shield fa-fw mr-2"></i>
                            Customer Roles
                            <!----></a></li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-store-fulfillment"><i
                                class="fa-fw mx-2 far fa-box-full fa-fw mr-2"></i>
                            Fulfillment
                            <!----></a></li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-store-sso"><i
                                class="fa-fw mx-2 far fa-key"></i>
                            Single Sign On
                            <!----></a></li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-reference-fields"><i
                                class="fa-fw mx-2 far fa-sliders-h"></i>
                            Reference Fields
                            <!----></a></li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-store-users"><i
                                class="fa-fw mx-2 far fa-users fa-fw mr-2"></i>
                            Users
                            <!----></a></li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block intro-store-walkthrough"><i
                                class="fa-fw mx-2 far fa-play fa-fw mr-2"></i>
                            Walkthrough
                            <!----></a></li>
                    <li><a class="nav-item nav-item-hover p-1 btn-block"><i class="fa-fw mx-2"></i>

                            <!----></a></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';

// content
import Categories from './content/Categories.vue'
import Components from './content/Components.vue'
import HeadTags from './content/HeadTags.vue'
import Media from './content/Media.vue'
import Pages from './content/Pages.vue'
import Theme from './content/Theme.vue'

//products
// import Products from './products/Products.vue'
import Suppliers from './products/Suppliers.vue'

// marketing
// import ProductFeed from './marketing/ProductFeed.vue'
import SocialMedia from './marketing/SocialMedia.vue'
import Robots from './marketing/Robots.vue'
import Sitemaps from './marketing/Sitemaps.vue'

// selling
import Customers from './selling/Customers.vue'
import Discounts from './selling/Discounts.vue'
import Payment from './selling/Payment.vue'
import Reports from './selling/Reports.vue'

export default {
    components: {
        Categories,
        Components,
        HeadTags,
        Media,
        Pages,
        Theme,

        // Products,
        Suppliers,

        // ProductFeed,
        SocialMedia,
        Robots,
        Sitemaps,

        Customers,
        Discounts,
        Payment,
        Reports
    },

    data() {
        return {
            isLoading: false,
            validationErrors: {},

            componentToShow: null,
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        }),

        containerSize() {
            if (this.componentToShow === 'Components' || this.componentToShow === 'Pages') { return 'w-50' };
            if (this.componentToShow === 'Categories' ||
                this.componentToShow === 'HeadTags' ||
                this.componentToShow === 'Media' ||
                this.componentToShow === 'Theme' ||
                this.componentToShow === 'SocialMedia' || 
                this.componentToShow === 'Robots' || 
                this.componentToShow === 'Sitemaps' ||
                this.componentToShow === 'Suppliers' ||
                this.componentToShow === 'Customers' ||
                this.componentToShow === 'Discounts' ||
                this.componentToShow === 'Payment' ||
                this.componentToShow === 'Reports'
            ) { return 'col-12'; }
    
            return 'w-25';
        }
    },

    created() {
        this.componentToShow = this.$route.query.tab;
    },

    watch: {
        // Watch for changes in the query parameter
        '$route.query.tab': function (val) {
            this.componentToShow = val;
        }
    },
}
</script>

<style></style>