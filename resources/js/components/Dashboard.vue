<template>
    <div class="dashboard">
        <navigation />
        <div id="main" class="slideout-panel slideout-panel-left">
            <div class="main-panel container-fluid pt-3">
                <div><!---->
                    <h1>Dashboard</h1>
                    <ul class="nav nav-tabs nav-tabs-underline mb-4 overflow-x-auto flex-nowrap overflow-y-hidden">
                        <li class="nav-item" v-for="tab in tabs" :key="tab">
                            <a class="nav-link text-nowrap" :class="{'active': activeTab === tab.name}" @click="activeTab = tab.name">{{ tab.name }}</a>
                        </li>
                    </ul>

                    <div class="manager_tab" v-if="activeTab === 'Manager'">
                        <div class="mb-3 d-flex">
                            <div class="mr-3">
                                <button type="button" data-toggle="dropdown" class="btn btn-light dropdown-toggle">
                                    User Roles
                                </button>
                                <div class="dropdown-menu dropdown-menu-form" style="max-height: 80vh; overflow-y: auto;">
                                    <div class="dropdown-item pl-0 pr-0"><input type="text" placeholder="Search"
                                            class="form-control" id="__BVID__95"></div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox p-0"><input type="checkbox"
                                                id="roles-all" class="custom-control-input"><label for="roles-all"
                                                class="custom-control-label"><b>Select All</b></label></div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox p-0"><input type="checkbox" id="sales-0"
                                                class="custom-control-input" value="sales"><label for="sales-0"
                                                class="custom-control-label">
                                                inside-sales
                                            </label></div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox p-0"><input type="checkbox"
                                                id="outside-sales-1" class="custom-control-input"
                                                value="outside-sales"><label for="outside-sales-1"
                                                class="custom-control-label">
                                                outside-sales
                                            </label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="btn-group mr-2">
                                    <div><input type="hidden" data-input="true" placeholder="10/1/2023,10/16/2023"
                                            name="date" class="btn btn-light flatpickr-input"
                                            value="10/01/2023 to 10/16/2023"><input class="btn btn-light form-control input"
                                            placeholder="10/1/2023,10/16/2023" tabindex="0" type="text" readonly="readonly">
                                    </div>
                                </div><a class="ml-auto"><i class="fas fa-sync"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col">
                                                    <h5>Sales</h5>
                                                    <h3>$0.00</h3>
                                                </div>
                                                <div class="col">
                                                    <h5 class="font-weight-normal">Net Profit</h5>
                                                    <h3 class="font-weight-normal">
                                                        $0.00
                                                    </h3>
                                                </div>
                                                <div class="col">
                                                    <h5 class="font-weight-normal">Gross Margin</h5>
                                                    <h3 class="font-weight-normal">0.00%</h3>
                                                </div>
                                                <div class="col">
                                                    <h5 class="font-weight-normal">Net Margin</h5>
                                                    <h3 class="font-weight-normal">0.00%</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1950" height="750"
                                                    style="display: block; height: 300px; width: 780px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Orders</h5>
                                            <h3>0</h3>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1340" height="750"
                                                    style="display: block; height: 300px; width: 536px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col">
                                                    <h5>Sales Admin</h5>
                                                    <h3>$0.00</h3>
                                                </div>
                                                <div class="col">
                                                    <h5 class="font-weight-normal">Net Profit</h5>
                                                    <h3 class="font-weight-normal">
                                                        $0.00
                                                    </h3>
                                                </div>
                                                <div class="col">
                                                    <h5 class="font-weight-normal">Gross Margin</h5>
                                                    <h3 class="font-weight-normal">0.00%</h3>
                                                </div>
                                                <div class="col">
                                                    <h5 class="font-weight-normal">Net Margin</h5>
                                                    <h3 class="font-weight-normal">0.00%</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1950" height="750"
                                                    style="display: block; height: 300px; width: 780px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Admin Orders</h5>
                                            <h3>0</h3>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1340" height="750"
                                                    style="display: block; height: 300px; width: 536px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Unpaid Commissions</h5>
                                            <h3>$0.00</h3>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1645" height="750"
                                                    style="display: block; height: 300px; width: 658px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Paid Commissions</h5>
                                            <h3>$0.00</h3>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1645" height="750"
                                                    style="display: block; height: 300px; width: 658px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Web vs Non Web Orders</h5>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="doughnut-chart" width="1645" height="625"
                                                    style="display: block; height: 250px; width: 658px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Web vs Non Web Sales</h5>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="doughnut-chart" width="1645" height="625"
                                                    style="display: block; height: 250px; width: 658px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Inside vs Outside Orders</h5>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="doughnut-chart" width="1645" height="625"
                                                    style="display: block; height: 250px; width: 658px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Inside vs Outside Sales</h5>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="doughnut-chart" width="1645" height="625"
                                                    style="display: block; height: 250px; width: 658px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Quotes</h5>
                                            <h3 class="mr-2">0</h3>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1037" height="750"
                                                    style="display: block; height: 300px; width: 415px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Proofs</h5>
                                            <h3 class="mr-2">0</h3>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1037" height="750"
                                                    style="display: block; height: 300px; width: 415px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Carts</h5>
                                            <h3 class="mr-2">0</h3>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1037" height="750"
                                                    style="display: block; height: 300px; width: 415px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Customers Total Follow Ups</h5>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1037" height="750"
                                                    style="display: block; height: 300px; width: 415px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Customers Past Due Follow Ups</h5>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1037" height="750"
                                                    style="display: block; height: 300px; width: 415px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Customers Without Follow Ups</h5>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1037" height="750"
                                                    style="display: block; height: 300px; width: 415px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Gross Margin</h5>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1645" height="750"
                                                    style="display: block; height: 300px; width: 658px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Sales by Store</h5>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1645" height="750"
                                                    style="display: block; height: 300px; width: 658px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Orders by Store</h5>
                                        </div>
                                        <div>
                                            <div class="">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div><canvas id="horizontalbar-chart" width="1645" height="750"
                                                    style="display: block; height: 300px; width: 658px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sales_tab" v-if="activeTab === 'Sales'" userroles="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]">
                        <div class="d-flex align-items-center mb-3">
                            <div slot="right=filter">
                                <button type="button" data-toggle="dropdown" class="btn btn-light dropdown-toggle">
                                    User
                                </button>
                                <div class="dropdown-menu dropdown-menu-form mr-0 mt-0 pb-3 pt-0"
                                    style="max-height: 60vh; overflow-y: auto;">
                                    <div class="DropdownView__filters-container">
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox p-0"><input type="checkbox"
                                                    id="ORDERS_STATISTICS-Active" class="custom-control-input"><label
                                                    for="ORDERS_STATISTICS-Active"
                                                    class="custom-control-label"><b>Active</b></label></div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox p-0"><input type="checkbox"
                                                    id="ORDERS_STATISTICS-Sales" class="custom-control-input"><label
                                                    for="ORDERS_STATISTICS-Sales"
                                                    class="custom-control-label"><b>Sales</b></label></div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox p-0"><input type="checkbox"
                                                    id="ORDERS_STATISTICS-SalesAdmin" class="custom-control-input"><label
                                                    for="ORDERS_STATISTICS-SalesAdmin" class="custom-control-label"><b>Sales
                                                        Admin</b></label>
                                            </div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox p-0"><input type="checkbox"
                                                    id="ORDERS_STATISTICS-OutsideSales" class="custom-control-input"><label
                                                    for="ORDERS_STATISTICS-OutsideSales"
                                                    class="custom-control-label"><b>Outside Sales</b></label></div>
                                        </div>
                                        <hr>
                                        <div class="dropdown-item pl-0 pr-0"><input type="text" placeholder="Search"
                                                class="form-control" id="__BVID__139">
                                        </div>
                                    </div>
                                    <div class="DropdownView__list-container"><!----><!----></div>
                                </div>
                            </div>
                            <a class="ml-auto"><i class="fas fa-sync"></i></a>
                        </div>

                        <div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="card-title text-uppercase mb-2 text-muted">To Do</div>
                                    <div class="row">
                                        <div class="col-6 col-md-3 mb-2 mb-md-0"><a class="text-decoration-none">
                                                <div class="d-flex justify-content-between flex-column">
                                                    <h6 class="text-secondary">New Orders</h6>
                                                    <h1 class="m-0">0</h1>
                                                </div>
                                            </a></div>
                                        <div class="col-6 col-md-3 mb-2 mb-md-0"><a class="text-decoration-none">
                                                <div class="d-flex justify-content-between flex-column">
                                                    <h6 class="text-secondary">New Quotes</h6>
                                                    <h1 class="m-0">0</h1>
                                                </div>
                                            </a></div>
                                        <div class="col-6 col-md-3 mb-2 mb-md-0"><a class="text-decoration-none">
                                                <div class="d-flex justify-content-between flex-column">
                                                    <h6 class="text-secondary">New Proofs</h6>
                                                    <h1 class="m-0">0</h1>
                                                </div>
                                            </a></div>
                                        <div class="col-6 col-md-3 mb-2 mb-md-0"><a class="text-decoration-none">
                                                <div class="d-flex justify-content-between flex-column">
                                                    <h6 class="text-secondary">Ready For Prod</h6>
                                                    <h1 class="m-0">0</h1>
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="card-title text-uppercase mb-2 text-muted">Follow Up's</div>
                                            <div class="row">
                                                <div class="col-6"><a class="text-decoration-none">
                                                        <div class="d-flex justify-content-start align-items-center">
                                                            <div class="mr-4">
                                                                <h6 class="text-secondary">Order</h6>
                                                                <h1 class="m-0">0</h1>
                                                            </div>
                                                            <div class="text-center">
                                                                <div class="">
                                                                    <div class="chartjs-size-monitor">
                                                                        <div class="chartjs-size-monitor-expand">
                                                                            <div class=""></div>
                                                                        </div>
                                                                        <div class="chartjs-size-monitor-shrink">
                                                                            <div class=""></div>
                                                                        </div>
                                                                    </div><canvas id="doughnut-chart" width="102"
                                                                        height="100"
                                                                        style="display: block; height: 40px; width: 41px;"
                                                                        class="chartjs-render-monitor"></canvas>
                                                                </div><small>0 Total</small>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                                <div class="col-6"><a href="/customers" class="text-decoration-none">
                                                        <div class="d-flex justify-content-start align-items-center">
                                                            <div class="mr-4">
                                                                <h6 class="text-secondary">Customer</h6>
                                                                <h1 class="m-0">0</h1>
                                                            </div>
                                                            <div class="text-center">
                                                                <div class="">
                                                                    <div class="chartjs-size-monitor">
                                                                        <div class="chartjs-size-monitor-expand">
                                                                            <div class=""></div>
                                                                        </div>
                                                                        <div class="chartjs-size-monitor-shrink">
                                                                            <div class=""></div>
                                                                        </div>
                                                                    </div><canvas id="doughnut-chart" width="102"
                                                                        height="100"
                                                                        style="display: block; height: 40px; width: 41px;"
                                                                        class="chartjs-render-monitor"></canvas>
                                                                </div><small>0 Total</small>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="card-title text-uppercase mb-2 text-muted">Pipeline</div>
                                            <div class="row">
                                                <div class="col-6"><a class="text-decoration-none">
                                                        <div class="d-flex justify-content-between flex-column">
                                                            <h6 class="text-secondary">Invoices Sent</h6>
                                                            <h1 class="m-0">
                                                                $0.00
                                                            </h1>
                                                        </div>
                                                    </a></div>
                                                <div class="col-6"><a class="text-decoration-none">
                                                        <div class="d-flex justify-content-between flex-column">
                                                            <h6 class="text-secondary">In Production</h6>
                                                            <h1 class="m-0">0</h1>
                                                        </div>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title text-uppercase mb-2 text-muted">Reports</div>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-group mr-2">
                                            <div><input type="hidden" data-input="true" placeholder="10/1/2023,10/20/2023"
                                                    name="date" class="btn btn-light flatpickr-input"
                                                    value="10/01/2023 to 10/20/2023"><input
                                                    class="btn btn-light form-control input"
                                                    placeholder="10/1/2023,10/20/2023" tabindex="0" type="text"
                                                    readonly="readonly"></div>
                                        </div><!---->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card-title">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5>My Sales</h5>
                                                        <h3>$0.00</h3>
                                                    </div>
                                                    <div class="col">
                                                        <h5 class="font-weight-normal">Net Profit</h5>
                                                        <h3 class="font-weight-normal">
                                                            $0.00
                                                        </h3>
                                                    </div>
                                                    <div class="col">
                                                        <h5 class="font-weight-normal">Gross Margin</h5>
                                                        <h3 class="font-weight-normal">0.00%</h3>
                                                    </div>
                                                    <div class="col">
                                                        <h5 class="font-weight-normal">Net Margin</h5>
                                                        <h3 class="font-weight-normal">0.00%</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="">
                                                    <div class="chartjs-size-monitor">
                                                        <div class="chartjs-size-monitor-expand">
                                                            <div class=""></div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink">
                                                            <div class=""></div>
                                                        </div>
                                                    </div><canvas id="line-chart" width="2315" height="750"
                                                        style="display: block; height: 300px; width: 926px;"
                                                        class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-title">
                                                <h5>My Orders</h5>
                                                <h3>0</h3>
                                            </div>
                                            <div class="mb-2">
                                                <div class="">
                                                    <div class="chartjs-size-monitor">
                                                        <div class="chartjs-size-monitor-expand">
                                                            <div class=""></div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink">
                                                            <div class=""></div>
                                                        </div>
                                                    </div><canvas id="line-chart" width="1120" height="750"
                                                        style="display: block; height: 300px; width: 448px;"
                                                        class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h5>Unpaid Commissions</h5>
                                            </div>
                                            <div class="mb-2">
                                                <h3>$0.00</h3>
                                                <div class="">
                                                    <div class="chartjs-size-monitor">
                                                        <div class="chartjs-size-monitor-expand">
                                                            <div class=""></div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink">
                                                            <div class=""></div>
                                                        </div>
                                                    </div><canvas id="line-chart" width="1667" height="500"
                                                        style="display: block; height: 200px; width: 667px;"
                                                        class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h5>Paid Commissions</h5>
                                            </div>
                                            <div class="mb-2">
                                                <h3>$0.00</h3>
                                                <div class="">
                                                    <div class="chartjs-size-monitor">
                                                        <div class="chartjs-size-monitor-expand">
                                                            <div class=""></div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink">
                                                            <div class=""></div>
                                                        </div>
                                                    </div><canvas id="line-chart" width="1667" height="500"
                                                        style="display: block; height: 200px; width: 667px;"
                                                        class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h5>Sales by Person</h5>
                                            </div>
                                            <div>
                                                <div class="">
                                                    <div class="chartjs-size-monitor">
                                                        <div class="chartjs-size-monitor-expand">
                                                            <div class=""></div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink">
                                                            <div class=""></div>
                                                        </div>
                                                    </div><canvas id="horizontalbar-chart" width="1667" height="750"
                                                        style="display: block; height: 300px; width: 667px;"
                                                        class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h5>Orders by Person</h5>
                                            </div>
                                            <div>
                                                <div class="">
                                                    <div class="chartjs-size-monitor">
                                                        <div class="chartjs-size-monitor-expand">
                                                            <div class=""></div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink">
                                                            <div class=""></div>
                                                        </div>
                                                    </div><canvas id="horizontalbar-chart" width="1667" height="750"
                                                        style="display: block; height: 300px; width: 667px;"
                                                        class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
import Navigation from './includes/navigation.vue';
import Notification from './includes/notification.vue';

export default {
    components: {
        Navigation,
        Notification
    },

    data() {
        return {
            activeTab: '',
            tabs: [{
                    name: 'Manager',
                    active: true
                },
                {
                    name: 'Sales',
                    active: false
                }
            ]
        }
    },

    created() {
        this.activeTab = this.tabs[0].name;
    },
}
</script>

<style></style>