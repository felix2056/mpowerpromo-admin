<template>
    <div class="mt-3">
        <div style="">
            <div class="overlap" style="">
                <DataTable :data="companies" :columns="columns" :options="options" :loading="isLoading" :filterable="true"
                    :pagination="true" :perPage="10" :perPageValues="[10, 25, 50, 100]"
                    :pagination-component="paginationComponent" :pagination-info="true" :pagination-dropdown="true"
                    :pagination-info-template="paginationInfoTemplate"
                    class="w-100 TopTable__table VueTables VueTables--server stripe">
                    <thead>
                        <tr>
                            <th id="VueTables_th--companyName" tabindex="0" class="VueTables__sortable "
                                style="position: relative;"><span title="" class="VueTables__heading">Name</span><span
                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                    class="resize-handle"></div>
                            </th>
                            <th id="VueTables_th--customers" tabindex="0" class="VueTables__sortable "
                                style="position: relative;"><span title="" class="VueTables__heading">Customers</span><span
                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                    class="resize-handle"></div>
                            </th>
                            <th id="VueTables_th--orders" tabindex="0" class="VueTables__sortable "
                                style="position: relative;"><span title="" class="VueTables__heading">Orders</span><span
                                    class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                    class="resize-handle"></div>
                            </th>
                            <th id="VueTables_th--ordersTotal" tabindex="0" class="VueTables__sortable "
                                style="position: relative;"><span title="" class="VueTables__heading">Orders
                                    Total</span><span
                                    class="VueTables__sort-icon float-right fal fa-sort-amount-down"></span>
                                <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                    class="resize-handle"></div>
                            </th>
                        </tr>
                    </thead>

                    <template v-slot:name="props">
                        <div class="d-flex align-center">
                            <router-link :to="{ name: 'company', params: { slug: props.row.id } }" class="text-ellipsis">
                                {{ props.row.name }}
                            </router-link>
                        </div>
                    </template>

                    <template v-slot:customers_count="props">
                        <span>{{ props.row.customers_count }}</span>
                    </template>

                    <template v-slot:orders_count="props">
                        <span>{{ props.row.orders_count }}</span>
                    </template>

                    <template v-slot:orders_sum_total="props">
                        <span>{{ props.row.orders_sum_total }}</span>
                    </template>
                </DataTable>
            </div>
        </div>
    </div>
</template>

<script>
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';
import Select from 'datatables.net-select';

DataTable.use(DataTablesCore);
DataTable.use(Select);

export default {
    name: 'Companies',

    components: {
        DataTable
    },

    data() {
        return {
            isLoading: false,
            
            companies: [],

            columns: [
                {
                    data: 'name',
                    sortField: 'name',
                    titleClass: 'text-center',
                    dataClass: 'text-center',
                    callback: 'name',
                },
                {
                    data: 'customers_count',
                    title: 'Customers',
                    sortField: 'customers_count',
                    titleClass: 'text-center',
                    dataClass: 'text-center',
                    callback: 'customers_count',
                    defaultContent: "-",
                    targets: "_all"
                },
                {
                    data: 'orders_count',
                    title: 'Orders',
                    sortField: 'orders_count',
                    titleClass: 'text-center',
                    dataClass: 'text-center',
                    callback: 'orders_count',
                    defaultContent: "-",
                    targets: "_all"
                },
                {
                    data: 'orders_sum_total',
                    title: 'Orders Total',
                    sortField: 'orders_sum_total',
                    titleClass: 'text-center',
                    dataClass: 'text-center',
                    callback: 'orders_sum_total',
                    defaultContent: "-",
                    targets: "_all"
                },
            ],

            options: {
                headings: {
                    companyName: 'Name',
                    customers: 'Customers',
                    orders: 'Orders',
                    ordersTotal: 'Orders Total',
                },
                sortable: ['name', 'customers_count', 'orders_count', 'orders_sum_total'],
                filterable: ['name', 'customers_count', 'orders_count', 'orders_sum_total'],
                responsive: true,
                dom: 'Bfrtip',
                perPage: 10,
                perPageValues: [10, 25, 50, 100],
                paginationComponent: 'v-pagination',
                paginationInfo: true,
                paginationDropdown: true,
                paginationInfoTemplate: 'Showing {from} to {to} of {total} companies',
                texts: {
                    count: 'One record',
                    first: 'First',
                    last: 'Last',
                    filter: 'Filter:',
                    filterPlaceholder: 'Search query',
                    limit: 'Records:',
                    page: 'Page:',
                    noResults: 'No matching records',
                    filterBy: 'Filter by {column}',
                    loading: 'Loading...',
                    defaultOption: 'Select {column}',
                    columns: 'Columns'
                }
            },

            paginationComponent: 'v-pagination',
            paginationInfoTemplate: 'Showing {from} to {to} of {total} companies',
        }
    },

    created() {
        this.getCompanies();
    },

    methods: {
        getCompanies() {
            this.isLoading = true;
            axios.get('/customers/companies')
                .then(response => {
                    this.companies = response.data.companies;
                })
                .catch(error => {
                    this.errorMsg = error.response.data.message;
                })
                .finally(() => {
                    this.isLoading = false;
                });
        },
    },
}
</script>

<style>
@import url('https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css');
@import 'datatables.net-bs5';
</style>