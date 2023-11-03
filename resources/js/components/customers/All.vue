<template>
    <div class="mt-3 table-responsive">
        <div style="">
            <div class="" style="position: relative;">
                <div class="mb-3 text-right d-flex justify-content-end">
                    <div>
                        <button type="button" class="btn btn-light">
                            <i class="fa fa-cloud-download mr-2"></i>csv
                        </button>
                    </div>
                </div>
                <div id="taskFilters" class="collapse show">
                    <div class="mb-2">
                        <div class="d-flex flex-wrap">
                            <div class="mr-2 pb-2">
                                <div class="dropdown b-dropdown btn-group" id="__BVID__1560">
                                    <button aria-haspopup="menu" aria-expanded="false" type="button"
                                        class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                        id="__BVID__1560__BV_toggle_">
                                        Is Active
                                        <span class="far fa-angle-down fa-xs text-muted"></span></button>
                                    <ul role="menu" tabindex="-1" class="dropdown-menu"
                                        aria-labelledby="__BVID__1560__BV_toggle_">
                                        <div class="d-flex justify-content-start mb-2 px-3 pt-2 small"><a
                                                href="javascript:;">Select all</a>
                                            <div class="mx-2">|</div> <a href="javascript:;">Deselect all</a>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                            style="min-width: 300px;">
                                            <div class="optionList">
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-0-0"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-0-0" class="custom-control-label">
                                                            Active
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-0-1"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-0-1" class="custom-control-label">
                                                            Not Active
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="mr-2 pb-2">
                                <div class="dropdown b-dropdown btn-group" id="__BVID__1563">
                                    <button aria-haspopup="menu" aria-expanded="false" type="button"
                                        class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                        id="__BVID__1563__BV_toggle_">
                                        Is Test
                                        <span class="far fa-angle-down fa-xs text-muted"></span></button>
                                    <ul role="menu" tabindex="-1" class="dropdown-menu"
                                        aria-labelledby="__BVID__1563__BV_toggle_">
                                        <div class="d-flex justify-content-start mb-2 px-3 pt-2 small"><a
                                                href="javascript:;">Select all</a>
                                            <div class="mx-2">|</div> <a href="javascript:;">Deselect all</a>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                            style="min-width: 300px;">
                                            <div class="optionList">
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-1-0"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-1-0" class="custom-control-label">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-1-1"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-1-1" class="custom-control-label">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="mr-2 pb-2">
                                <div class="dropdown b-dropdown btn-group" id="__BVID__1566">
                                    <button aria-haspopup="menu" aria-expanded="false" type="button"
                                        class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                        id="__BVID__1566__BV_toggle_">
                                        Rank
                                        <span class="far fa-angle-down fa-xs text-muted"></span></button>
                                    <ul role="menu" tabindex="-1" class="dropdown-menu"
                                        aria-labelledby="__BVID__1566__BV_toggle_">
                                        <div class="d-flex justify-content-start mb-2 px-3 pt-2 small"><a
                                                href="javascript:;">Select all</a>
                                            <div class="mx-2">|</div> <a href="javascript:;">Deselect all</a>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                            style="min-width: 300px;">
                                            <div class="optionList">
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-2-0"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-2-0" class="custom-control-label">
                                                            A
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-2-1"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-2-1" class="custom-control-label">
                                                            B
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-2-2"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-2-2" class="custom-control-label">
                                                            C
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-2-3"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-2-3" class="custom-control-label">
                                                            D
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-2-4"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-2-4" class="custom-control-label">
                                                            F
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="mr-2 pb-2">
                                <div class="dropdown b-dropdown btn-group" id="__BVID__1569">
                                    <button aria-haspopup="menu" aria-expanded="false" type="button"
                                        class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                        id="__BVID__1569__BV_toggle_">
                                        Stores
                                        <span class="far fa-angle-down fa-xs text-muted"></span></button>
                                    <ul role="menu" tabindex="-1" class="dropdown-menu"
                                        aria-labelledby="__BVID__1569__BV_toggle_">
                                        <div class="d-flex justify-content-start mb-2 px-3 pt-2 small"><a
                                                href="javascript:;">Select all</a>
                                            <div class="mx-2">|</div> <a href="javascript:;">Deselect all</a>
                                        </div>
                                        <div class="px-3 pb-2" style="min-width: 300px;"><input type="text"
                                                placeholder="Search" class="form-control" id="__BVID__1571"></div>
                                    </ul>
                                </div>
                            </div>
                            <div class="mr-2 pb-2">
                                <div class="dropdown b-dropdown btn-group" id="__BVID__1573">
                                    <button aria-haspopup="menu" aria-expanded="false" type="button"
                                        class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                        id="__BVID__1573__BV_toggle_">
                                        Manager
                                        <span class="far fa-angle-down fa-xs text-muted"></span></button>
                                    <ul role="menu" tabindex="-1" class="dropdown-menu"
                                        aria-labelledby="__BVID__1573__BV_toggle_">
                                        <div class="d-flex justify-content-start mb-2 px-3 pt-2 small"><a
                                                href="javascript:;">Select all</a>
                                            <div class="mx-2">|</div> <a href="javascript:;">Deselect all</a>
                                        </div>
                                        <div class="px-3 pb-2" style="min-width: 300px;"><input type="text"
                                                placeholder="Search" class="form-control" id="__BVID__1575"></div>
                                        <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                            style="min-width: 300px;">
                                            <div class="optionList">
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-4-0"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-4-0" class="custom-control-label">
                                                            Without Manager
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="mr-2 pb-2">
                                <div class="dropdown b-dropdown btn-group" id="__BVID__1577">
                                    <button aria-haspopup="menu" aria-expanded="false" type="button"
                                        class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                        id="__BVID__1577__BV_toggle_">
                                        Sales Admin
                                        <span class="far fa-angle-down fa-xs text-muted"></span></button>
                                    <ul role="menu" tabindex="-1" class="dropdown-menu"
                                        aria-labelledby="__BVID__1577__BV_toggle_">
                                        <div class="d-flex justify-content-start mb-2 px-3 pt-2 small"><a
                                                href="javascript:;">Select all</a>
                                            <div class="mx-2">|</div> <a href="javascript:;">Deselect all</a>
                                        </div>
                                        <div class="px-3 pb-2" style="min-width: 300px;"><input type="text"
                                                placeholder="Search" class="form-control" id="__BVID__1579"></div>
                                        <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                            style="min-width: 300px;">
                                            <div class="optionList">
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-5-0"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-5-0" class="custom-control-label">
                                                            Without Admin
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="mr-2 pb-2">
                                <div class="dropdown b-dropdown btn-group" id="__BVID__1581">
                                    <button aria-haspopup="menu" aria-expanded="false" type="button"
                                        class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                        id="__BVID__1581__BV_toggle_">
                                        Source user
                                        <span class="far fa-angle-down fa-xs text-muted"></span></button>
                                    <ul role="menu" tabindex="-1" class="dropdown-menu"
                                        aria-labelledby="__BVID__1581__BV_toggle_">
                                        <div class="d-flex justify-content-start mb-2 px-3 pt-2 small"><a
                                                href="javascript:;">Select all</a>
                                            <div class="mx-2">|</div> <a href="javascript:;">Deselect all</a>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                            style="min-width: 300px;">
                                            <div class="optionList">
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-6-0"
                                                            class="custom-control-input" value="64fe407620245f1850c1acc2">
                                                        <label for="styled-checkbox-6-0" class="custom-control-label">
                                                            Danny Test(1)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="mr-2 pb-2">
                                <div class="dropdown b-dropdown btn-group" id="__BVID__1584">
                                    <button aria-haspopup="menu" aria-expanded="false" type="button"
                                        class="btn dropdown-toggle btn-light dropdown-toggle-no-caret"
                                        id="__BVID__1584__BV_toggle_">
                                        States
                                        <span class="far fa-angle-down fa-xs text-muted"></span></button>
                                    <ul role="menu" tabindex="-1" class="dropdown-menu"
                                        aria-labelledby="__BVID__1584__BV_toggle_">
                                        <div class="d-flex justify-content-start mb-2 px-3 pt-2 small"><a
                                                href="javascript:;">Select all</a>
                                            <div class="mx-2">|</div> <a href="javascript:;">Deselect all</a>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-form pb-2 px-3 border-0"
                                            style="min-width: 300px;">
                                            <div class="optionList">
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-0"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-0" class="custom-control-label">
                                                            Alabama. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-1"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-1" class="custom-control-label">
                                                            Alaska. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-2"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-2" class="custom-control-label">
                                                            Alberta. Canada
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-3"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-3" class="custom-control-label">
                                                            American Samoa. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-4"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-4" class="custom-control-label">
                                                            Arizona. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-5"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-5" class="custom-control-label">
                                                            Arkansas. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-6"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-6" class="custom-control-label">
                                                            Armed Forces Central and South Americas. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-7"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-7" class="custom-control-label">
                                                            Armed Forces Europe. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-8"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-8" class="custom-control-label">
                                                            Armed Forces Pacific. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-9"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-9" class="custom-control-label">
                                                            British Columbia. Canada
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-10"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-10" class="custom-control-label">
                                                            California. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-11"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-11" class="custom-control-label">
                                                            Colorado. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-12"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-12" class="custom-control-label">
                                                            Connecticut. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-13"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-13" class="custom-control-label">
                                                            Delaware. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-14"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-14" class="custom-control-label">
                                                            District of Columbia. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-15"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-15" class="custom-control-label">
                                                            Florida. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-16"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-16" class="custom-control-label">
                                                            Georgia. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-17"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-17" class="custom-control-label">
                                                            Guam. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-18"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-18" class="custom-control-label">
                                                            Hawaii. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-19"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-19" class="custom-control-label">
                                                            Idaho. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-20"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-20" class="custom-control-label">
                                                            Illinois. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-21"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-21" class="custom-control-label">
                                                            Indiana. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-22"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-22" class="custom-control-label">
                                                            Iowa. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-23"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-23" class="custom-control-label">
                                                            Kansas. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-24"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-24" class="custom-control-label">
                                                            Kentucky. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-25"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-25" class="custom-control-label">
                                                            Louisiana. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-26"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-26" class="custom-control-label">
                                                            Maine. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-27"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-27" class="custom-control-label">
                                                            Manitoba. Canada
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-28"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-28" class="custom-control-label">
                                                            Maryland. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-29"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-29" class="custom-control-label">
                                                            Massachusetts. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-30"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-30" class="custom-control-label">
                                                            Michigan. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-31"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-31" class="custom-control-label">
                                                            Minnesota. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-32"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-32" class="custom-control-label">
                                                            Mississippi. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-33"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-33" class="custom-control-label">
                                                            Missouri. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-34"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-34" class="custom-control-label">
                                                            Montana. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-35"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-35" class="custom-control-label">
                                                            Nebraska. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-36"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-36" class="custom-control-label">
                                                            Nevada. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-37"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-37" class="custom-control-label">
                                                            New Brunswick. Canada
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-38"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-38" class="custom-control-label">
                                                            New Hampshire. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-39"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-39" class="custom-control-label">
                                                            New Jersey. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-40"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-40" class="custom-control-label">
                                                            New Mexico. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-41"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-41" class="custom-control-label">
                                                            New York. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-42"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-42" class="custom-control-label">
                                                            Newfoundland and Labrador. Canada
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-43"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-43" class="custom-control-label">
                                                            North Carolina. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-44"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-44" class="custom-control-label">
                                                            North Dakota. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-45"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-45" class="custom-control-label">
                                                            Northern Mariana Islands. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-46"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-46" class="custom-control-label">
                                                            Northwest Territories. Canada
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-47"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-47" class="custom-control-label">
                                                            Nova Scotia. Canada
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-48"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-48" class="custom-control-label">
                                                            Nunavut. Canada
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-49"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-49" class="custom-control-label">
                                                            Ohio. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-50"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-50" class="custom-control-label">
                                                            Oklahoma. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-51"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-51" class="custom-control-label">
                                                            Ontario. Canada
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-52"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-52" class="custom-control-label">
                                                            Oregon. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-53"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-53" class="custom-control-label">
                                                            Pennsylvania. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-54"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-54" class="custom-control-label">
                                                            Prince Edward Island. Canada
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-55"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-55" class="custom-control-label">
                                                            Puerto Rico. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-56"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-56" class="custom-control-label">
                                                            Quebec. Canada
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-57"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-57" class="custom-control-label">
                                                            Rhode Island. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-58"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-58" class="custom-control-label">
                                                            Saskatchewan. Canada
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-59"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-59" class="custom-control-label">
                                                            South Carolina. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-60"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-60" class="custom-control-label">
                                                            South Dakota. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-61"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-61" class="custom-control-label">
                                                            Tennessee. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-62"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-62" class="custom-control-label">
                                                            Texas. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-63"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-63" class="custom-control-label">
                                                            United States Minor Outlying Islands. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-64"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-64" class="custom-control-label">
                                                            Utah. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-65"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-65" class="custom-control-label">
                                                            Vermont. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-66"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-66" class="custom-control-label">
                                                            Virgin Islands. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-67"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-67" class="custom-control-label">
                                                            Virginia. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-68"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-68" class="custom-control-label">
                                                            Washington. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-69"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-69" class="custom-control-label">
                                                            West Virginia. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-70"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-70" class="custom-control-label">
                                                            Wisconsin. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-71"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-71" class="custom-control-label">
                                                            Wyoming. USA
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item pb-1">
                                                    <div class="custom-control custom-checkbox p-0">
                                                        <input type="checkbox" id="styled-checkbox-7-72"
                                                            class="custom-control-input" value="[object Object]"> <label
                                                            for="styled-checkbox-7-72" class="custom-control-label">
                                                            Yukon. Canada
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="mr-2 pb-2">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-group mr-2">
                                            <div><input type="hidden" data-input="true" placeholder="Select create dates"
                                                    name="date" class="btn btn-light flatpickr-input"><input
                                                    class="btn btn-light form-control input"
                                                    placeholder="Select create dates" tabindex="0" type="text"
                                                    readonly="readonly"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mr-2 pb-2">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-group mr-2">
                                            <div><input type="hidden" data-input="true" placeholder="Select order dates"
                                                    name="date" class="btn btn-light flatpickr-input"><input
                                                    class="btn btn-light form-control input"
                                                    placeholder="Select order dates" tabindex="0" type="text"
                                                    readonly="readonly"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mr-2 pb-2"><button type="button" class="btn btn-link btn-block">Clear
                                    filters</button></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overlap" style="">
                <div class="w-100 TopTable__table VueTables VueTables--server" filterable="true">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-inline float-left VueTables__search"><span></span>
                                <div class="VueTables__search-field"><label for="VueTables__search_9bWBy"
                                        class="">Filter:</label><input type="text" placeholder="Search query"
                                        id="VueTables__search_9bWBy" autocomplete="new-password"
                                        class="VueTables__search__input form-control " name="acbe977e1716f"
                                        style="background-color: inherit;"></div><span></span>
                            </div>
                            <div class="form-group form-inline float-right VueTables__limit"></div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="VueTables__table table table-striped" style="overflow: hidden;">
                            <thead>
                                <tr>
                                    <th id="VueTables_th--checkbox" tabindex="0" class="" style="position: relative;"><span
                                            title="" class="VueTables__heading">
                                            <div class="custom-control custom-checkbox m-0"><input
                                                    id="1697808539570checkbox-selectall" type="checkbox"
                                                    class="custom-control-input"> <label
                                                    for="1697808539570checkbox-selectall"
                                                    class="custom-control-label">&nbsp;</label></div>
                                        </span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--actions" tabindex="0" class="" style="position: relative;"><span
                                            title="" class="VueTables__heading"></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--firstName" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">First</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--lastName" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Last</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--rank" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Rank</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--company" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Company</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--email" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Email</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--stores" tabindex="0" class="" style="position: relative;"><span
                                            title="" class="VueTables__heading">Stores</span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--manager" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Manager</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--lists" tabindex="0" class="" style="position: relative;"><span
                                            title="" class="VueTables__heading">Lists</span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--followUps" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title="" class="VueTables__heading">Follow
                                            Ups</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--lastFollowUp" tabindex="0" class="" style="position: relative;">
                                        <span title="" class="VueTables__heading">Last Follow Up</span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--orders" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Orders</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--ordersTotal" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Total</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--lastOrderDate" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title="" class="VueTables__heading">Last
                                            Order</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--createdAt" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title=""
                                            class="VueTables__heading">Created</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--sourceUserId" tabindex="0" class="" style="position: relative;">
                                        <span title="" class="VueTables__heading">Source User Id</span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--isActive" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title="" class="VueTables__heading">Is
                                            Active</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                    <th id="VueTables_th--isTest" tabindex="0" class="VueTables__sortable "
                                        style="position: relative;"><span title="" class="VueTables__heading">Is
                                            Test</span><span
                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                        <div style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;"
                                            class="resize-handle"></div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="VueTables__row ">
                                    <td tabindex="0" class="">
                                        <div class="custom-control custom-checkbox"><input
                                                id="checkbox-6531eb4df58ce84559dfac8a" true-value="[object Object]"
                                                type="checkbox" class="custom-control-input"> <label
                                                for="checkbox-6531eb4df58ce84559dfac8a"
                                                class="custom-control-label">&nbsp;</label></div>
                                    </td>
                                    <td tabindex="0" class=""><span data-row="actions" title="" class="text-ellipsis"><a
                                                href="/customers/6531eb4df58ce84559dfac8a"
                                                class="btn btn-secondary btn-sm">View</a></span></td>
                                    <td tabindex="0" class=""><span data-row="firstName" title="Daniel"
                                            class="text-ellipsis">Daniel</span></td>
                                    <td tabindex="0" class=""><span data-row="lastName" title="Felix"
                                            class="text-ellipsis">Felix</span></td>
                                    <td tabindex="0" class=""><span data-row="rank" title="B" class="text-ellipsis">B</span>
                                    </td>
                                    <td tabindex="0" class=""><span data-row="company" title=""
                                            class="text-ellipsis"><span></span></span></td>
                                    <td tabindex="0" class=""><span data-row="email" title="felixdaniel2056@gmail.com"
                                            class="text-ellipsis"><span>felixdaniel2056@gmail.com</span></span></td>
                                    <td tabindex="0" class=""><span data-row="stores" title="[object Object]"
                                            class="text-ellipsis"><span>Ace Rubber Stamps</span></span></td>
                                    <td tabindex="0" class=""><span data-row="manager" title=""
                                            class="text-ellipsis"><span>Daniel Feldman</span></span></td>
                                    <td tabindex="0" class=""><span data-row="lists" title="" class="text-ellipsis">
                                            <div>
                                                <div class="d-flex align-center"><span>
                                                        0
                                                    </span></div>
                                            </div>
                                        </span></td>
                                    <td tabindex="0" class=""><span data-row="followUps" title="0"
                                            class="text-ellipsis">0</span></td>
                                    <td tabindex="0" class=""><span data-row="lastFollowUp" title=""
                                            class="text-ellipsis"></span></td>
                                    <td tabindex="0" class=""><span data-row="orders" title="0"
                                            class="text-ellipsis">0</span></td>
                                    <td tabindex="0" class=""><span data-row="ordersTotal" title=""
                                            class="text-ellipsis"><span>$0.00</span></span></td>
                                    <td tabindex="0" class=""><span data-row="lastOrderDate" title=""
                                            class="text-ellipsis"><span></span></span></td>
                                    <td tabindex="0" class=""><span data-row="createdAt" title="2023-10-20T02:51:57.449Z"
                                            class="text-ellipsis"><span>10/20/2023</span></span></td>
                                    <td tabindex="0" class=""><span data-row="sourceUserId" title="[object Object]"
                                            class="text-ellipsis"><span class="b-avatar badge-white rounded-circle"
                                                title="Danny Test"><span
                                                    class="b-avatar-text"><span>DT</span></span></span></span></td>
                                    <td tabindex="0" class=""><span data-row="isActive" title="true"
                                            class="text-ellipsis"><span>Yes</span></span></td>
                                    <td tabindex="0" class=""><span data-row="isTest" title=""
                                            class="text-ellipsis"><span>No</span></span></td>
                                </tr>
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
                            <p class="VuePagination__count text-center col-md-12" style="">One record</p>
                        </nav>
                    </div>
                </div>

                <DataTable :columns="columns" :data="customers" :options="options" class="table table-striped table-bordered" ref="dt"></DataTable>
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
    name: 'All Customers',

    components: {
        DataTable
    },

    data() {
        return {
            isLoading: false,

            customers: [],

            columns: [
                {
                    data: 'first_name',
                    title: 'First'
                },
                {
                    data: 'last_name',
                    title: 'Last'
                },
                {
                    data: 'rank',
                    title: 'Rank'
                },
                {
                    data: 'company',
                    title: 'Company'
                },
                {
                    data: 'email',
                    title: 'Email'
                },
                {
                    data: 'stores',
                    title: 'Stores'
                },
                {
                    data: 'manager',
                    title: 'Manager'
                },
                {
                    data: 'lists',
                    title: 'Lists'
                },
                {
                    data: 'followUps',
                    title: 'Follow Ups'
                },
                {
                    data: 'lastFollowUp',
                    title: 'Last Follow Up'
                },
                {
                    data: 'orders',
                    title: 'Orders'
                }
            ],

            options: {
                select: {
                    style: 'multi'
                },
                dom: 'Bfrtip',
                buttons: [
                    'selectAll',
                    'selectNone'
                ],
                paginationComponent: 'v-pagination',
                perPage: 10,
                perPageValues: [10, 25, 50, 100, 500, 1000, 5000, 10000, 50000, 100000, 500000, 1000000],
                paginationInfoTemplate: 'Showing {from} to {to} of {total} companies',
                language: {
                    paginate: {
                        first: 'First',
                        previous: '&lt;',
                        next: '&gt;',
                        last: 'Last'
                    }
                }
            }
        }
    },

    mounted() {
        this.getCustomers();
    },

    methods: {
        getCustomers() {
            this.isLoading = true;

            axios.get('/customers')
            .then(response => {
                this.customers = response.data.customers;
            })
            .catch(error => {
                console.log(error);
            })
            .finally(() => {
                this.isLoading = false;
            });
        }
    }

}
</script>

<style></style>