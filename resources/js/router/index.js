import { createWebHistory, createRouter } from 'vue-router'
import store from '@/store'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'login',
            component: () => import('@/components/Login.vue'),
            meta: {
                middleware: "guest",
                title: `Login`
            }
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: () => import('@/components/Dashboard.vue'),
            meta: {
                middleware: "auth",
                title: `Dashboard`
            }
        },
        {
            path: '/customers',
            name: 'customers',
            redirect: { name: 'followups' },
            component: () => import('@/components/customers/Index.vue'),
            meta: {
                middleware: "auth",
                title: `Customers`
            },
            children: [
                {
                    path: '',
                    name: 'followups',
                    component: () => import('@/components/customers/Followups.vue'),
                    meta: {
                        middleware: "auth",
                        title: `Followups`
                    }
                },
                {
                    path: 'all',
                    name: 'all-customers',
                    component: () => import('@/components/customers/All.vue'),
                    meta: {
                        middleware: "auth",
                        title: `All Customers`
                    }
                },
                {
                    path: 'companies',
                    name: 'companies',
                    component: () => import('@/components/customers/Companies.vue'),
                    meta: {
                        middleware: "auth",
                        title: `Companies`
                    }
                },
                {
                    path: 'presentations',
                    name: 'presentations',
                    component: () => import('@/components/customers/Presentations.vue'),
                    meta: {
                        middleware: "auth",
                        title: `Presentations`
                    }
                },
                {
                    path: 'emails/list',
                    name: 'emails',
                    component: () => import('@/components/customers/Emails.vue'),
                    meta: {
                        middleware: "auth",
                        title: `Emails`
                    }
                }
            ]
        },
        {
            path: '/customers/create',
            name: 'create-customer',
            component: () => import('@/components/customers/Create.vue'),
            meta: {
                middleware: "auth",
                title: `Create Customer`
            }
        },
        // {
        //     path: '/customers/edit/:id',
        //     name: 'edit-customer',
        //     component: () => import('@/components/customers/Edit.vue'),
        //     meta: {
        //         middleware: "auth",
        //         title: `Edit Customer`
        //     }
        // },
        {
            path: '/customers/companies/create',
            name: 'create-company',
            component: () => import('@/components/companies/Create.vue'),
            meta: {
                middleware: "auth",
                title: `Create Company`
            }
        },
        {
            path: '/customers/companies/:slug',
            name: 'company',
            component: () => import('@/components/companies/Show.vue'),
            meta: {
                middleware: "auth",
                title: `Company`
            }
        },
        // {
        //     path: '/customers/companies/edit/:slug',
        //     name: 'edit-company',
        //     component: () => import('@/components/companies/Edit.vue'),
        //     meta: {
        //         middleware: "auth",
        //         title: `Edit Company`
        //     }
        // },
        {
            path: '/orders',
            name: 'orders',
            component: () => import('@/components/Orders.vue'),
            meta: {
                middleware: "auth",
                title: `Orders`
            }
        },
        {
            path: '/products',
            name: 'products',
            component: () => import('@/components/Products.vue'),
            meta: {
                middleware: "auth",
                title: `Products`
            }
        },
        {
            path: '/proofs',
            name: 'proofs',
            component: () => import('@/components/Proofs.vue'),
            meta: {
                middleware: "auth",
                title: `Proofs`
            }
        },
        {
            path: '/reports',
            name: 'reports',
            component: () => import('@/components/Reports.vue'),
            meta: {
                middleware: "auth",
                title: `Reports`
            }
        },
        {
            path: '/storess',
            name: 'stores',
            component: () => import('@/components/stores/Index.vue'),
            meta: {
                middleware: "auth",
                title: `Stores`
            }
        },
        {
            path: '/stores/:slug',
            name: 'store',
            component: () => import('@/components/stores/single/Index.vue'),
            meta: {
                middleware: "auth",
                title: `Store`
            }
        },
        {
            path: '/stores/create',
            name: 'create-store',
            component: () => import('@/components/stores/Create.vue'),
            meta: {
                middleware: "auth",
                title: `Create Stores`
            }
        },
        {
            path: '/suppliers',
            name: 'suppliers',
            component: () => import('@/components/suppliers/Index.vue'),
            meta: {
                middleware: "auth",
                title: `Suppliers`
            }
        },
        {
            path: '/suppliers/:slug',
            name: 'supplier',
            component: () => import('@/components/suppliers/Show.vue'),
            meta: {
                middleware: "auth",
                title: `Supplier`
            }
        },
        // {
        //     path: '/suppliers/create',
        //     name: 'create-supplier',
        //     component: () => import('@/components/suppliers/Create.vue'),
        //     meta: {
        //         middleware: "auth",
        //         title: `Create Supplier`
        //     }
        // }
        // Add more routes here
    ],
    scrollBehavior (to, from, savedPosition) {
        return { top: 0 }
    }
});

router.beforeEach((to, from, next) => {
    if (to.meta.middleware === 'auth') {
        if (!store.getters['auth/authenticated']) {
            return next({
                name: 'login'
            })
        }
    } else if (to.meta.middleware === 'guest') {
        if (store.getters['auth/authenticated']) {
            return next({
                name: 'dashboard'
            })
        }
    } else if (to.meta.middleware === 'admin') {
        if (!store.getters['auth/user'].is_admin) {
            return next({
                name: 'dashboard'
            })
        }
    }

    next();
});

export default router