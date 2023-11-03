<template>
    <div class="dashboard">
        <navigation />
        <div id="main" class="slideout-panel slideout-panel-left">
            <div class="main-panel container-fluid pt-3">
                <div>
                    <div>
                        <div
                            class="d-flex justify-content-start justify-content-md-between align-items-center flex-column flex-md-row">
                            <h1 class="mr-auto">Customers</h1>
                            <div class="mb-3 d-flex justify-content-start align-items-center">
                                <div role="group" class="mr-2 btn-group">
                                    <router-link :to="{ name: 'create-customer' }" class="btn btn btn-light intro-customer-new btn-secondary">New
                                        Customer
                                    </router-link>
                                    <div class="dropdown b-dropdown intro-customer-import btn-group" id="__BVID__152">
                                        <button aria-haspopup="menu" aria-expanded="false" type="button"
                                            class="btn dropdown-toggle btn-light" id="__BVID__152__BV_toggle_"></button>
                                        <ul role="menu" tabindex="-1" class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="__BVID__152__BV_toggle_">
                                            <li role="presentation"><a role="menuitem" href="#" target="_self"
                                                    class="dropdown-item">Import CSV</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <a href="/customers/companies/create"
                                    class="btn btn-light my-2 intro-customer-new-company">New Company</a><a
                                    href="/customers/presentations/create"
                                    class="btn btn-light ml-2 my-2 intro-customer-new-presentation">New Presentation</a>
                            </div>
                        </div>

                        <ul class="nav nav-tabs nav-tabs-underline mb-4">
                            <li class="nav-item intro-customer-follow-ups-tab">
                                <router-link :to="{ name: 'followups' }" class="nav-link text-nowrap d-flex" :class="{'active': $route.name === 'followups'}">
                                    <i class="mr-2 d-none far fa-tasks"></i>
                                    <span class="">Follow Ups</span>
                                </router-link>
                            </li>
                            <li class="nav-item intro-customer-list-tab">
                                <router-link :to="{ name: 'all-customers' }" class="nav-link text-nowrap d-flex" :class="{'active': $route.name === 'all-customers'}">
                                    <i class="mr-2 d-none far fa-users"></i>
                                    <span class="">Customers</span>
                                </router-link>
                            </li>
                            <li class="nav-item intro-customer-company-list-tab">
                                <router-link :to="{ name: 'companies' }" class="nav-link text-nowrap d-flex" :class="{'active': $route.name === 'companies'}">
                                    <i class="mr-2 d-none far fa-company"></i>
                                    <span class="">Companies</span>
                                </router-link>
                            </li>
                            <li class="nav-item intro-customer-presentations-tab">
                                <router-link :to="{ name: 'presentations' }" class="nav-link text-nowrap d-flex" :class="{'active': $route.name === 'presentations'}">
                                    <i class="mr-2 d-none far fa-company"></i>
                                    <span class="">Presentations</span>
                                </router-link>
                            </li>
                            <li class="nav-item intro-customer-email-tab">
                                <router-link :to="{ name: 'emails' }" class="nav-link text-nowrap d-flex" :class="{'active': $route.name === 'emails'}">
                                    <i class="mr-2 d-none far fa-envelope"></i>
                                    <span class="">Email</span>
                                </router-link>
                            </li>
                        </ul>

                        <router-view></router-view>
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
            customers: [],
        }
    },

    methods: {
        getCustomers() {
            this.isLoading = true;
            axios.get('/customers')
                .then(response => {
                    this.customers = response.data.data;
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => {
                    this.isLoading = false;
                });
        }
    },
}
</script>

<style></style>