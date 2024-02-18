<template>
    <div class="dashboard">
        <navigation />
        <div id="main" class="slideout-panel slideout-panel-left">
            <div class="main-panel container-fluid pt-3">
                <div class="mb-4 mx-auto col-lg-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="/customers/all" class="" target="_self">Customers</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <span aria-current="page">Create Customer</span>
                            </li>
                        </ol>
                    </nav>

                    <h1>{{ customer.first_name + ' ' + customer.last_name }}</h1>

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Customer Information</h5>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="col-md-10 p-0 pr-2">
                                                <div class="form-group">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <label>Company</label>
                                                        </div>
                                                    </div>

                                                    <Multiselect v-model="customer.company" :options="companyOptions"
                                                        placeholder="Select option" :class="{'is-invalid': validationErrors.company_id}">
                                                    </Multiselect>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2 p-0" style="margin-top: 14px;">
                                                <div class="d-flex">
                                                    <div class="d-flex align-center">
                                                        <button @click="goTo('create-company')" title="" type="button" class="btn btn-primary">
                                                            <span>Add</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div>
                                            <fieldset class="form-group" id="__BVID__196">
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <label>Job Title</label>
                                                            <a target="_blank" hide-title="true">
                                                                <i class="fas fa-question-circle text-light ml-2 fa-fw"></i>
                                                            </a>
                                                        </div>
                                                        <label class="text-muted small">optional</label>
                                                    </div>
                                                    <div role="group" class="input-group">
                                                        <input v-model="customer.job_title" name="Job Title" type="text"
                                                            autocomplete="on" class="form-control" maxlength="255"
                                                            data-hj-allow="" data-mask="" data-previous-value=""
                                                            id="__BVID__198" :class="{'is-invalid': validationErrors.job_title}">
                                                    </div>

                                                    <div class="invalid-feedback d-block" v-if="validationErrors.job_title">
                                                        {{ validationErrors.job_title[0] }}
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <fieldset class="form-group" id="__BVID__200">
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <label>First Name</label>
                                                        </div>
                                                    </div>
                                                    <div role="group" class="input-group">
                                                        <input v-model="customer.first_name" name="First Name" type="text"
                                                            autocomplete="on" class="form-control" maxlength="255"
                                                            onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                            data-hj-allow="" data-mask="" data-previous-value=""
                                                            id="__BVID__201" :class="{'is-invalid': validationErrors.first_name}">
                                                    </div>
                                                    <div class="invalid-feedback d-block" v-if="validationErrors.first_name">
                                                        {{ validationErrors.first_name[0] }}
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div>
                                            <fieldset class="form-group" id="__BVID__203">
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <label>Last Name</label>
                                                        </div>
                                                    </div>
                                                    <div role="group" class="input-group">
                                                        <input v-model="customer.last_name" name="Last Name" type="text"
                                                            autocomplete="on" class="form-control" maxlength="255"
                                                            onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                            data-hj-allow="" data-mask="" data-previous-value=""
                                                            id="__BVID__204" :class="{'is-invalid': validationErrors.last_name}">
                                                    </div>
                                                    <div class="invalid-feedback d-block" v-if="validationErrors.last_name">
                                                        {{ validationErrors.last_name[0] }}
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="form-row" v-for="(phone, index) in customer.phones" :key="index">
                                        <div class="col-11">
                                            <div class="d-lg-flex">
                                                <div class="d-flex">
                                                    <div>
                                                        <div>
                                                            <fieldset class="form-group" style="max-width: 120px;"
                                                                id="__BVID__918">
                                                                <div>
                                                                    <label>Country</label>
                                                                    <div class="dropdown b-dropdown form-control btn-group"
                                                                        style="padding: 0px;" id="__BVID__919">
                                                                        <button aria-haspopup="menu" aria-expanded="false"
                                                                            type="button" data-toggle="dropdown"
                                                                            class="btn dropdown-toggle btn-white"
                                                                            id="__BVID__919__BV_toggle_"><span>
                                                                                {{ phone.country_code }}
                                                                            </span>
                                                                            <span class="ml-1 mr-1">
                                                                                <img :src="phone.country_flag" style="width: 30px;">
                                                                            </span>
                                                                        </button>

                                                                        <ul role="menu" tabindex="-1"
                                                                            class="dropdown-menu scroll-dropdown overflow-auto"
                                                                            style="height:230px"
                                                                            aria-labelledby="__BVID__919__BV_toggle_">
                                                                            <li v-for="(country, i) in sortedCountries"
                                                                                :key="i" role="presentation"
                                                                                @click="setSelectedCountry(index, country)">
                                                                                <a role="menuitem" href="#" target="_self"
                                                                                    class="dropdown-item">
                                                                                    <div class="d-flex">
                                                                                        <!-- <span class="ml-2">
                                                                                            <img :src="'https://flagsapi.com/' + country.cca2 + '/flat/64.png'" style="width: 30px;">
                                                                                        </span> -->
                                                                                        <span class="ml-2">
                                                                                            <img :src="country.flags.svg" style="width: 30px;">
                                                                                        </span>
                                                                                        <span class="ml-3">{{ country.name.common }}</span>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>

                                                    <fieldset class="form-group flex-grow-1 form-group ml-2"
                                                        id="__BVID__1671">
                                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0"
                                                            id="__BVID__1671__BV_label_">Phone Number</legend>
                                                        <div>
                                                            <input v-model="phone.phone_number" type="tel"
                                                                name="Phone Number" placeholder="000-000-0000"
                                                                class="form-control" data-mask="###-###-####"
                                                                data-previous-value="" aria-required="false"
                                                                aria-invalid="false"><!----><!----><!---->
                                                        </div>
                                                    </fieldset>
                                                </div>

                                                <div class="d-flex">
                                                    <div class="form-group ml-lg-2 w-50" style="width: 100px;">
                                                        <label>Ext</label>
                                                        <input v-model="phone.extension" type="text" name="Ext"
                                                            class="form-control" data-mask="########" data-previous-value=""
                                                            aria-required="false" aria-invalid="false">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-1 text-center pt-4">
                                            <button @click="removePhone(index)" type="button" class="btn btn-link mt-2">
                                                <i class="far fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <a href="javascript:void(0)" @click="addPhone">Add Phone Number</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Account</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div>
                                    <fieldset class="form-group" id="__BVID__207">
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <label>Email</label>
                                                    <a target="_blank" hide-title="true">
                                                        <i class="fas fa-question-circle text-light ml-2 fa-fw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div role="group" class="input-group">
                                                <input v-model="customer.email" type="text" autocomplete="new-password"
                                                    class="form-control" :class="{'is-invalid': validationErrors.email}"
                                                    maxlength="255" data-hj-allow="" data-mask=""
                                                    data-previous-value="" style="background-color: inherit;"
                                                    id="__BVID__209">
                                            </div>

                                            <div class="invalid-feedback d-block" v-if="validationErrors.email">
                                                {{ validationErrors.email[0] }}
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="mb-3">
                                    <div>
                                        <fieldset class="form-group" id="__BVID__1030">
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <label>Password</label>
                                                        <a target="_blank" hide-title="true">
                                                            <i class="fas fa-question-circle text-light ml-2 fa-fw"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div role="group" class="input-group">
                                                    <input v-model="customer.password" :type="showPassword ? 'text' : 'password'"
                                                        autocomplete="new-password" 
                                                        class="form-control" :class="{'is-invalid': validationErrors.password}" maxlength="255"
                                                        style="background-color: inherit;" id="__BVID__1032">
                                                    <div class="input-group-append">
                                                        <button type="button" @click="generatePassword"
                                                            title="Generate Password"
                                                            class="btn btn-primary">
                                                            Generate
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="invalid-feedback d-block" v-if="validationErrors.password">
                                                    {{ validationErrors.password[0] }}
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="text-right">
                                        <a class="text-primary ml-auto small" href="javascript:void(0)"
                                            @click="togglePassword">{{ showPassword ? 'Hide' : 'Show' }} Password
                                        </a>
                                    </div>
                                </div>

                                <fieldset class="form-group" id="__BVID__211">
                                    <div>
                                        <label>Account Manager</label>
                                        <i class="fas fa-question-circle text-light ml-2"></i>
                                        <div class="form-group m-0">
                                            <div tabindex="-1" class="multiselect" loadonfocus="true"
                                                optionsv="[object Object]" orderby="name" ascending="1"
                                                path="/users?withProject=1&amp;limit=25&amp;project=firstName&amp;project=lastName&amp;project=_id&amp;ascending=1&amp;orderBy=firstName"
                                                isobject="true">
                                                <div class="multiselect__select"></div>
                                                <div class="multiselect__tags">
                                                    <div class="multiselect__tags-wrap" style="display: none;"></div>

                                                    <div class="multiselect__spinner" style="display: none;"></div> <input
                                                        name="" type="text" autocomplete="nope" placeholder="Select option"
                                                        tabindex="0" class="multiselect__input"
                                                        style="width: 0px; position: absolute; padding: 0px;"> <span
                                                        class="multiselect__placeholder">
                                                        Select option
                                                    </span>
                                                </div>
                                                <div tabindex="-1" class="multiselect__content-wrapper"
                                                    style="max-height: 300px; display: none;">
                                                    <ul class="multiselect__content" style="display: inline-block;">
                                                        <li class="multiselect__element"><span
                                                                data-select="Press enter to select" data-selected="Selected"
                                                                data-deselect="Press enter to remove"
                                                                class="multiselect__option multiselect__option--highlight">
                                                                Unassigned
                                                            </span> </li>
                                                        <li style="display: none;"><span class="multiselect__option"><span>
                                                                    Oops! No elements found. Consider changing the search
                                                                    query. </span></span></li>
                                                        <li style="display: none;"><span
                                                                class="multiselect__option"><span><span>No
                                                                        Options</span></span></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><a class="d-block mt-2 small">Assign to me</a>
                                    </div>
                                </fieldset>

                                <fieldset class="form-group" id="__BVID__217">
                                    <div><label>Sales Administrator</label><i
                                            class="fas fa-question-circle text-light ml-2"></i>
                                        <div class="form-group m-0">
                                            <div tabindex="-1" class="multiselect" loadonfocus="true"
                                                optionsv="[object Object]" orderby="name" ascending="1"
                                                path="/users?withProject=1&amp;limit=25&amp;project=firstName&amp;project=lastName&amp;project=_id&amp;roleTool=sales-administrator&amp;ascending=1&amp;orderBy=firstName"
                                                isobject="true">
                                                <div class="multiselect__select"></div>
                                                <div class="multiselect__tags">
                                                    <div class="multiselect__tags-wrap" style="display: none;"></div>

                                                    <div class="multiselect__spinner" style="display: none;"></div> <input
                                                        name="" type="text" autocomplete="nope" placeholder="Select option"
                                                        tabindex="0" class="multiselect__input"
                                                        style="width: 0px; position: absolute; padding: 0px;"> <span
                                                        class="multiselect__placeholder">
                                                        Select option
                                                    </span>
                                                </div>
                                                <div tabindex="-1" class="multiselect__content-wrapper"
                                                    style="max-height: 300px; display: none;">
                                                    <ul class="multiselect__content" style="display: inline-block;">
                                                        <li class="multiselect__element"><span
                                                                data-select="Press enter to select" data-selected="Selected"
                                                                data-deselect="Press enter to remove"
                                                                class="multiselect__option multiselect__option--highlight">
                                                                Unassigned
                                                            </span> </li>
                                                        <li style="display: none;"><span class="multiselect__option"><span>
                                                                    Oops! No elements found. Consider changing the search
                                                                    query. </span></span></li>
                                                        <li style="display: none;"><span
                                                                class="multiselect__option"><span><span>No
                                                                        Options</span></span></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="form-group" id="__BVID__223">
                                    <div><label>Source User</label><i class="fas fa-question-circle text-light ml-2"></i>
                                        <div class="form-group m-0">
                                            <div tabindex="-1" class="multiselect" loadonfocus="true"
                                                optionsv="[object Object]" orderby="name" ascending="1"
                                                path="/users?withProject=1&amp;limit=25&amp;project=firstName&amp;project=lastName&amp;project=_id&amp;ascending=1&amp;orderBy=firstName"
                                                isobject="true">
                                                <div class="multiselect__select"></div>
                                                <div class="multiselect__tags">
                                                    <div class="multiselect__tags-wrap" style="display: none;"></div>

                                                    <div class="multiselect__spinner" style="display: none;"></div> <input
                                                        name="" type="text" autocomplete="nope" placeholder="Select option"
                                                        tabindex="0" class="multiselect__input"
                                                        style="width: 0px; position: absolute; padding: 0px;"> <span
                                                        class="multiselect__placeholder">
                                                        Select option
                                                    </span>
                                                </div>
                                                <div tabindex="-1" class="multiselect__content-wrapper"
                                                    style="max-height: 300px; display: none;">
                                                    <ul class="multiselect__content" style="display: inline-block;">
                                                        <li class="multiselect__element"><span
                                                                data-select="Press enter to select" data-selected="Selected"
                                                                data-deselect="Press enter to remove"
                                                                class="multiselect__option multiselect__option--highlight">
                                                                Unassigned
                                                            </span> </li>
                                                        <li style="display: none;"><span class="multiselect__option"><span>
                                                                    Oops! No elements found. Consider changing the search
                                                                    query. </span></span></li>
                                                        <li style="display: none;"><span
                                                                class="multiselect__option"><span><span>No
                                                                        Options</span></span></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><a class="d-block mt-2 small">Assign to me</a>
                                    </div>
                                </fieldset>

                                <fieldset class="form-group" id="__BVID__229">
                                    <div><label>Assigned to Stores</label><i
                                            class="fas fa-question-circle text-light ml-2"></i>
                                        <div class="form-group m-0">
                                            <div tabindex="-1" class="multiselect" loadonfocus="true"
                                                validate="[object Object]" optionsv="" orderby="name" ascending="1"
                                                path="stores/distributors/64f8bf17bedafd072667a712?project=_id&amp;project=storeName&amp;project=storeUrl&amp;project=hasGlobalCategory&amp;project=distributorId._id&amp;orderBy=storeName"
                                                isobject="true">
                                                <div class="multiselect__select"></div>
                                                <div class="multiselect__tags">
                                                    <div class="multiselect__tags-wrap" style="display: none;"></div>

                                                    <div class="multiselect__spinner" style="display: none;"></div> <input
                                                        name="" type="text" autocomplete="nope" placeholder="Select option"
                                                        tabindex="0" class="multiselect__input"
                                                        style="width: 0px; position: absolute; padding: 0px;"> <span
                                                        class="multiselect__placeholder">
                                                        Select option
                                                    </span>
                                                </div>
                                                <div tabindex="-1" class="multiselect__content-wrapper"
                                                    style="max-height: 300px; display: none;">
                                                    <ul class="multiselect__content" style="display: block;">
                                                        <li style="display: none;"><span class="multiselect__option"><span>
                                                                    Oops! No elements found. Consider changing the search
                                                                    query. </span></span></li>
                                                        <li><span class="multiselect__option"><span><span>No
                                                                        Options</span></span></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="form-group" id="__BVID__235">
                                    <div><label>States</label><i class="fas fa-question-circle text-light ml-2"></i>
                                        <div tabindex="-1" class="multiselect">
                                            <div class="multiselect__select"></div>
                                            <div class="multiselect__tags">
                                                <div class="multiselect__tags-wrap" style="display: none;"></div>
                                                <div class="multiselect__spinner" style="display: none;"></div> <input
                                                    name="" type="text" autocomplete="nope" placeholder="States"
                                                    tabindex="0" class="multiselect__input"
                                                    style="width: 0px; position: absolute; padding: 0px;"> <span
                                                    class="multiselect__placeholder">
                                                    States
                                                </span>
                                            </div>
                                            <div tabindex="-1" class="multiselect__content-wrapper"
                                                style="max-height: 300px; display: none;">
                                                <ul class="multiselect__content" style="display: inline-block;">
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option multiselect__option--highlight"><span>Alberta.
                                                                Canada</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>British Columbia.
                                                                Canada</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Manitoba. Canada</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>New Brunswick.
                                                                Canada</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Newfoundland and Labrador.
                                                                Canada</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Nova Scotia.
                                                                Canada</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Nunavut. Canada</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Northwest Territories.
                                                                Canada</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Ontario. Canada</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Prince Edward Island.
                                                                Canada</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Quebec. Canada</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Saskatchewan.
                                                                Canada</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Yukon. Canada</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Armed Forces Central and South
                                                                Americas. USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Armed Forces Europe.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Armed Forces Pacific.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Alabama. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Alaska. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Arizona. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Arkansas. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>California. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Colorado. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Connecticut. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>District of Columbia.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Delaware. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Florida. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Georgia. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Hawaii. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Idaho. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Illinois. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Indiana. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Iowa. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Kansas. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Kentucky. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Louisiana. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Maine. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Maryland. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Massachusetts.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Michigan. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Minnesota. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Mississippi. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Missouri. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Montana. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Nebraska. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Nevada. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>New Hampshire.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>New Jersey. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>New Mexico. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>New York. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>North Carolina.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>North Dakota.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Ohio. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Oklahoma. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Oregon. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Pennsylvania.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Rhode Island.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>South Carolina.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>South Dakota.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Tennessee. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Texas. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Utah. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Vermont. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Virginia. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Washington. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>West Virginia.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Wisconsin. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Wyoming. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>American Samoa.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Guam. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Northern Mariana Islands.
                                                                USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Puerto Rico. USA</span></span>

                                                    </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>United States Minor Outlying
                                                                Islands. USA</span></span> </li>
                                                    <li class="multiselect__element"><span
                                                            data-select="Press enter to select" data-selected="Selected"
                                                            data-deselect="Press enter to remove"
                                                            class="multiselect__option"><span>Virgin Islands.
                                                                USA</span></span> </li>
                                                    <li style="display: none;"><span class="multiselect__option">No elements
                                                            found. Consider changing the search query.</span></li>
                                                    <li style="display: none;"><span class="multiselect__option">List is
                                                            empty.</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <div>
                                    <fieldset class="form-group" id="__BVID__241">
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div><label>QuickBooks ID</label>
                                                    <a target="_blank" hide-title="true">
                                                        <i class="fas fa-question-circle text-light ml-2 fa-fw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div role="group" class="input-group">
                                                <input v-model="customer.quickbooks_id" name="QuickBooks ID" type="text"
                                                    autocomplete="on" class="form-control" maxlength="255" data-hj-allow=""
                                                    data-mask="" data-previous-value="" id="__BVID__243" :class="{'is-invalid': validationErrors.quickbooks_id}">
                                            </div>
                                            <div class="invalid-feedback d-block" v-if="validationErrors.quickbooks_id">
                                                <span v-text="validationErrors.quickbooks_id[0]"></span>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <fieldset class="form-group" id="__BVID__244">
                                    <div>
                                        <label>Rank</label>
                                        <i class="fas fa-question-circle text-light ml-2"></i>
                                        <div class="form-group m-0">
                                            <VueMultiselect v-model="customer.rank" :options="ranks" :multiple="false"
                                                :close-on-select="true" :clear-on-select="false" :preserve-search="true"
                                                placeholder="Select Rank" label="name" track-by="id" :preselect-first="false"
                                                :max-height="300">
                                            </VueMultiselect>
                                        </div>
                                        <div class="invalid-feedback d-block" v-if="validationErrors.rank">
                                            <span v-text="validationErrors.rank[0]"></span>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="custom-control custom-checkbox">
                                    <input v-model="customer.is_active" id="active" type="checkbox" name="isActive"
                                        class="custom-control-input">
                                    <label for="active" class="custom-control-label">
                                        Active<i class="fas fa-question-circle text-light ml-2"></i>
                                    </label>
                                    <div class="invalid-feedback d-block" v-if="validationErrors.is_active">
                                        <span v-text="validationErrors.is_active[0]"></span>
                                    </div>
                                </div>

                                <div class="mt-2 custom-control custom-checkbox">
                                    <input v-model="customer.is_test" id="isTest" type="checkbox" name="isTest"
                                        class="custom-control-input">
                                    <label for="isTest" class="custom-control-label"> Is TEST </label>
                                    <div class="invalid-feedback d-block" v-if="validationErrors.is_test">
                                        <span v-text="validationErrors.is_test[0]"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Billing Address</h5><small>optional</small>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <fieldset class="form-group" id="__BVID__255">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <label>Address Name</label>
                                                            </div>
                                                        </div>
                                                        <div role="group" class="input-group">
                                                            <input v-model="customer.address" name="Address Name"
                                                                type="text" autocomplete="on" class="form-control"
                                                                maxlength="255" data-hj-allow="" data-mask=""
                                                                data-previous-value="" id="__BVID__256">
                                                        </div>
                                                        <div class="invalid-feedback d-block">

                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div>
                                                <fieldset class="form-group" style="max-width: 120px;" id="__BVID__276">

                                                    <div>
                                                        <label>Country</label>

                                                        <div class="dropdown b-dropdown form-control btn-group"
                                                            style="padding: 0px;" id="__BVID__277"><button
                                                                aria-haspopup="menu" aria-expanded="false" type="button"
                                                                class="btn dropdown-toggle btn-white"
                                                                id="__BVID__277__BV_toggle_"><span class="ml-1 mr-1"><img
                                                                        src="https://files.mpowerpromo.com/flags/us.svg"
                                                                        style="width: 30px;"></span></button>
                                                            <ul role="menu" tabindex="-1"
                                                                class="dropdown-menu scroll-dropdown"
                                                                aria-labelledby="__BVID__277__BV_toggle_">
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/af.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Afghanistan (‫افغانستان‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ax.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Åland Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/al.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Albania (Shqipëri)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/dz.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Algeria (‫الجزائر‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/as.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                American Samoa
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ad.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Andorra
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ao.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Angola
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ai.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Anguilla
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/aq.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Antarctica
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ag.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Antigua and Barbuda
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ar.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Argentina
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/am.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Armenia (Հայաստան)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/aw.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Aruba
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/au.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Australia
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/at.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Austria (Österreich)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/az.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Azerbaijan (Azərbaycan)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bs.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Bahamas
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bh.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Bahrain (‫البحرين‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bd.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Bangladesh (বাংলাদেশ)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bb.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Barbados
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/by.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Belarus (Беларусь)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/be.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Belgium (België)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bz.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Belize
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bj.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Benin (Bénin)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bm.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Bermuda
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bt.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Bhutan (འབྲུག)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bo.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Bolivia
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ba.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Bosnia and Herzegovina (Босна и Херцеговина)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bw.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Botswana
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bv.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Bouvet Island
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/br.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Brazil (Brasil)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/io.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                British Indian Ocean Territory
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/vg.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                British Virgin Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bn.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Brunei
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bg.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Bulgaria (България)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bf.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Burkina Faso
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bi.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Burundi (Uburundi)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/kh.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Cambodia (កម្ពុជា)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cm.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Cameroon (Cameroun)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ca.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Canada
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cv.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Cape Verde (Kabu Verdi)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bq.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Caribbean Netherlands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ky.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Cayman Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cf.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Central African Republic (République
                                                                                centrafricaine)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/td.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Chad (Tchad)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cl.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Chile
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cn.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                China (中国)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cx.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Christmas Island
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cc.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Cocos (Keeling) Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/co.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Colombia
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/km.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Comoros (‫جزر القمر‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cd.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Congo (DRC) (Jamhuri ya Kidemokrasia ya
                                                                                Kongo)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cg.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Congo (Republic) (Congo-Brazzaville)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ck.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Cook Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cr.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Costa Rica
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ci.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Côte d’Ivoire
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/hr.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Croatia (Hrvatska)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cu.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Cuba
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cw.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Curaçao
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cy.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Cyprus (Κύπρος)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/cz.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Czech Republic (Česká republika)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/dk.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Denmark (Danmark)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/dj.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Djibouti
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/dm.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Dominica
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/do.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Dominican Republic (República Dominicana)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ec.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Ecuador
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/eg.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Egypt (‫مصر‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sv.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                El Salvador
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gq.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Equatorial Guinea (Guinea Ecuatorial)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/er.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Eritrea
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ee.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Estonia (Eesti)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/et.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Ethiopia
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/fk.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Falkland Islands (Islas Malvinas)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/fo.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Faroe Islands (Føroyar)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/fj.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Fiji
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/fi.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Finland (Suomi)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/fr.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                France
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gf.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                French Guiana (Guyane française)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/pf.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                French Polynesia (Polynésie française)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/tf.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                French Southern and Antarctic Lands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ga.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Gabon
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gm.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Gambia
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ge.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Georgia (საქართველო)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/de.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Germany (Deutschland)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gh.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Ghana (Gaana)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gi.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Gibraltar
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gr.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Greece (Ελλάδα)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gl.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Greenland (Kalaallit Nunaat)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gd.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Grenada
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gp.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Guadeloupe
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gu.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Guam
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gt.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Guatemala
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gg.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Guernsey
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gn.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Guinea (Guinée)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gw.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Guinea-Bissau (Guiné Bissau)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gy.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Guyana
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ht.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Haiti
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/hm.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Heard Island and McDonald Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/hn.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Honduras
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/hk.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Hong Kong (香港)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/hu.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Hungary (Magyarország)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/is.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Iceland (Ísland)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/in.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                India (भारत)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/id.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Indonesia
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ir.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Iran (‫ایران‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/iq.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Iraq (‫العراق‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ie.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Ireland
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/im.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Isle of Man
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/il.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Israel (‫ישראל‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/it.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Italy (Italia)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/jm.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Jamaica
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/jp.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Japan (日本)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/je.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Jersey
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/jo.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Jordan (‫الأردن‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/kz.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Kazakhstan (Казахстан)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ke.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Kenya
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ki.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Kiribati
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/xk.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Kosovo
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/kw.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Kuwait (‫الكويت‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/kg.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Kyrgyzstan (Кыргызстан)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/la.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Laos (ລາວ)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/lv.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Latvia (Latvija)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/lb.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Lebanon (‫لبنان‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ls.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Lesotho
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/lr.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Liberia
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ly.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Libya (‫ليبيا‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/li.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Liechtenstein
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/lt.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Lithuania (Lietuva)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/lu.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Luxembourg
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mo.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Macau (澳門)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mk.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Macedonia (FYROM) (Македонија)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mg.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Madagascar (Madagasikara)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mw.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Malawi
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/my.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Malaysia
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mv.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Maldives
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ml.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Mali
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mt.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Malta
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mh.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Marshall Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mq.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Martinique
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mr.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Mauritania (‫موريتانيا‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mu.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Mauritius (Moris)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/yt.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Mayotte
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mx.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Mexico (México)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/fm.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Micronesia
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/md.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Moldova (Republica Moldova)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mc.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Monaco
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mn.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Mongolia (Монгол)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/me.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Montenegro (Crna Gora)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ms.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Montserrat
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ma.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Morocco (‫المغرب‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mz.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Mozambique (Moçambique)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mm.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Myanmar (Burma) (မြန်မာ)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/na.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Namibia (Namibië)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/nr.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Nauru
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/np.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Nepal (नेपाल)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/nl.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Netherlands (Nederland)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/nc.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                New Caledonia (Nouvelle-Calédonie)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/nz.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                New Zealand
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ni.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Nicaragua
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ne.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Niger (Nijar)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ng.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Nigeria
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/nu.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Niue
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/nf.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Norfolk Island
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/kp.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                North Korea (조선 민주주의 인민 공화국)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mp.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Northern Mariana Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/no.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Norway (Norge)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/om.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Oman (‫عُمان‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/pk.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Pakistan (‫پاکستان‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/pw.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Palau
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ps.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Palestine (‫فلسطين‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/pa.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Panama (Panamá)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/pg.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Papua New Guinea
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/py.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Paraguay
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/pe.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Peru (Perú)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ph.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Philippines
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/pn.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Pitcairn Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/pl.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Poland (Polska)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/pt.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Portugal
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/pr.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Puerto Rico
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/qa.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Qatar (‫قطر‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/re.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Réunion (La Réunion)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ro.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Romania (România)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ru.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Russia (Россия)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/rw.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Rwanda
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/bl.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Saint Barthélemy (Saint-Barthélemy)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sh.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Saint Helena
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/kn.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Saint Kitts and Nevis
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/lc.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Saint Lucia
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/mf.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Saint Martin (Saint-Martin (partie
                                                                                française))
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/pm.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Saint Pierre and Miquelon
                                                                                (Saint-Pierre-et-Miquelon)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/vc.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Saint Vincent and the Grenadines
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ws.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Samoa
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sm.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                San Marino
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/st.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                São Tomé and Príncipe (São Tomé e Príncipe)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sa.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Saudi Arabia (‫المملكة العربية السعودية‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sn.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Senegal (Sénégal)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/rs.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Serbia (Србија)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sc.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Seychelles
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sl.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Sierra Leone
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sg.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Singapore
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sx.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Sint Maarten
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sk.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Slovakia (Slovensko)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/si.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Slovenia (Slovenija)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sb.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Solomon Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/so.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Somalia (Soomaaliya)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/za.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                South Africa
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gs.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                South Georgia and the South Sandwich Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/kr.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                South Korea (대한민국)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ss.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                South Sudan (‫جنوب السودان‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/es.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Spain (España)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/lk.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Sri Lanka (ශ්‍රී ලංකාව)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sd.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Sudan (‫السودان‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sr.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Suriname
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sj.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Svalbard and Jan Mayen
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sz.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Swaziland
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/se.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Sweden (Sverige)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ch.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Switzerland (Schweiz)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/sy.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Syria (‫سوريا‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/tw.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Taiwan (台灣)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/tj.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Tajikistan
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/tz.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Tanzania
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/th.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Thailand (ไทย)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/tl.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Timor-Leste
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/tg.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Togo
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/tk.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Tokelau
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/to.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Tonga
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/tt.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Trinidad and Tobago
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/tn.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Tunisia (‫تونس‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/tr.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Turkey (Türkiye)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/tm.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Turkmenistan
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/tc.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Turks and Caicos Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/tv.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Tuvalu
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/vi.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                U.S. Virgin Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ug.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Uganda
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ua.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Ukraine (Україна)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ae.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                United Arab Emirates (‫الإمارات العربية
                                                                                المتحدة‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/gb.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                United Kingdom
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/us.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                United States
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/um.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                United States Minor Outlying Islands
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/uy.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Uruguay
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/uz.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Uzbekistan (Oʻzbekiston)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/vu.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Vanuatu
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/va.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Vatican City (Città del Vaticano)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ve.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Venezuela
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/vn.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Vietnam (Việt Nam)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/wf.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Wallis and Futuna
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/eh.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Western Sahara
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/ye.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Yemen (‫اليمن‬‎)
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/zm.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Zambia
                                                                            </span></div>
                                                                    </a></li>
                                                                <li role="presentation"><a role="menuitem" href="#"
                                                                        target="_self" class="dropdown-item">
                                                                        <div class="d-flex"><span class="ml-2"><img
                                                                                    src="https://files.mpowerpromo.com/flags/zw.svg"
                                                                                    style="width: 30px;"></span><span
                                                                                class="ml-3">
                                                                                Zimbabwe
                                                                            </span></div>
                                                                    </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label>Street 1</label>
                                                    <label class="text-muted small">optional</label>
                                                </div>
                                                <input v-model="customer.street1" placeholder="Search address..."
                                                    class="form-control pac-target-input" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div>
                                                <fieldset class="form-group" id="__BVID__259">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <label>Street 2</label>
                                                            </div>
                                                            <label class="text-muted small">optional</label>
                                                        </div>
                                                        <div role="group" class="input-group">
                                                            <input v-model="customer.street2" name="Street 2" type="text"
                                                                autocomplete="on" class="form-control" maxlength="255"
                                                                data-hj-allow="" data-mask="" data-previous-value=""
                                                                id="__BVID__260">
                                                        </div>
                                                        <div class="invalid-feedback d-block">

                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <fieldset class="form-group" id="__BVID__262">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <label>City</label>
                                                            </div>
                                                            <label class="text-muted small">optional</label>
                                                        </div>
                                                        <div role="group" class="input-group">
                                                            <input v-model="customer.city" name="City" type="text"
                                                                autocomplete="on" class="form-control" maxlength="255"
                                                                data-hj-allow="" data-mask="" data-previous-value=""
                                                                id="__BVID__263">
                                                        </div>
                                                        <div class="invalid-feedback d-block">

                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <label>State</label>
                                                    </div>
                                                </div>
                                                <div tabindex="-1" class="multiselect" validate="[object Object]"
                                                    outvalkey="true"
                                                    optionsv="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                                                    orderby="name" ascending="1">
                                                    <div class="multiselect__select"></div>
                                                    <div class="multiselect__tags">
                                                        <div class="multiselect__tags-wrap" style="display: none;"></div>

                                                        <div class="multiselect__spinner" style="display: none;"></div>
                                                        <input name="State" type="text" autocomplete="nope"
                                                            placeholder="Select option" tabindex="0"
                                                            class="multiselect__input"
                                                            style="width: 0px; position: absolute; padding: 0px;">
                                                        <span class="multiselect__placeholder">
                                                            Select option
                                                        </span>
                                                    </div>
                                                    <div tabindex="-1" class="multiselect__content-wrapper"
                                                        style="max-height: 300px; display: none;">
                                                        <ul class="multiselect__content" style="display: inline-block;">

                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option multiselect__option--highlight"><span>Armed
                                                                        Forces Central and South Americas</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Armed Forces
                                                                        Europe</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Armed Forces
                                                                        Pacific</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Alabama</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Alaska</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Arizona</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Arkansas</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>California</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Colorado</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Connecticut</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>District of
                                                                        Columbia</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Delaware</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Florida</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Georgia</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Hawaii</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Idaho</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Illinois</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Indiana</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Iowa</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Kansas</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Kentucky</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Louisiana</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Maine</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Maryland</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Massachusetts</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Michigan</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Minnesota</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Mississippi</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Missouri</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Montana</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Nebraska</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Nevada</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>New
                                                                        Hampshire</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>New
                                                                        Jersey</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>New
                                                                        Mexico</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>New York</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>North
                                                                        Carolina</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>North
                                                                        Dakota</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Ohio</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Oklahoma</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Oregon</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Pennsylvania</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Rhode
                                                                        Island</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>South
                                                                        Carolina</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>South
                                                                        Dakota</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Tennessee</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Texas</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Utah</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Vermont</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Virginia</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Washington</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>West
                                                                        Virginia</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Wisconsin</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Wyoming</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>American
                                                                        Samoa</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Guam</span></span>

                                                            </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Northern Mariana
                                                                        Islands</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Puerto
                                                                        Rico</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>United States Minor
                                                                        Outlying Islands</span></span> </li>
                                                            <li class="multiselect__element"><span
                                                                    data-select="Press enter to select"
                                                                    data-selected="Selected"
                                                                    data-deselect="Press enter to remove"
                                                                    class="multiselect__option"><span>Virgin
                                                                        Islands</span></span> </li>
                                                            <li style="display: none;"><span
                                                                    class="multiselect__option"><span> Oops! No elements
                                                                        found. Consider changing the search query.
                                                                    </span></span></li>
                                                            <li style="display: none;"><span
                                                                    class="multiselect__option"><span><span>No State
                                                                            Options</span></span></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div>
                                                <fieldset class="form-group" id="__BVID__269">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <label>Zip/Postal</label>
                                                            </div>
                                                            <label class="text-muted small">optional</label>
                                                        </div>
                                                        <div role="group" class="input-group">
                                                            <input v-model="customer.zip" name="Zip/Postal" type="text"
                                                                autocomplete="on" class="form-control" maxlength="255"
                                                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                                data-hj-allow="" data-mask="" data-previous-value=""
                                                                id="__BVID__270">
                                                        </div>
                                                        <div class="invalid-feedback d-block">

                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-inline">
                        <button @click="saveCustomer" type="button" class="btn btn-primary">
                            <span v-if="isLoading" class="spinner-border spinner-border-sm" role="status"
                                aria-hidden="true"></span>
                            Save Customer
                        </button>

                        <router-link :to="{ name: 'customers' }" class="btn btn-link router-link-active">Cancel</router-link>
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
import Multiselect from '@vueform/multiselect'
import VueMultiselect from 'vue-multiselect'

export default {
    components: {
        Navigation,
        Notification,
        Multiselect,
        // VueMultiselect
    },

    data() {
        return {
            isLoading: false,
            isLoadingContries: false,
            validationErrors: {},
            errorMsg: '',
            showPassword: false,

            companies: [],
            countries: [],
            ranks: [
                { name: 'A' },
                { name: 'B' },
                { name: 'C' },
                { name: 'D' },
                { name: 'E' },
                { name: 'F' }
            ],
            customer: {
                job_title: '',
                first_name: '',
                last_name: '',
                email: '',
                password: '',
                quickbooks_id: '',
                rank: '',
                is_active: true,
                is_test: false,
                address: '',
                country: '',
                street1: '',
                street2: '',
                city: '',
                state: '',
                zip: '',
                company: {},
                phones: [],
            }
        }
    },

    computed: {
        isDisabled() {
            return this.isLoading;
        },

        isInvalid() {
            return Object.keys(this.validationErrors).length > 0;
        },

        companyOptions() {
            return this.companies.map(company => {
                return {
                    value: company.id,
                    label: company.name
                }
            });
        },

        sortedCompanies() {
            return this.companies.sort((a, b) => {
                if (a.name < b.name) return -1;
                if (a.name > b.name) return 1;

                return 0;
            });
        },

        sortedCountries() {
            return this.countries.sort((a, b) => {
                if (a.name.common < b.name.common) return -1;
                if (a.name.common > b.name.common) return 1;

                return 0;
            });
        }
    },

    watch: {
        'customer.first_name': function (val) {
            if (!val) {
                this.validationErrors.first_name = ['The First Name field is required'];
            } else {
                this.validationErrors.first_name = null;
            }
        },

        'customer.last_name': function (val) {
            if (!val) {
                this.validationErrors.last_name = ['The Last Name field is required'];
            } else {
                this.validationErrors.last_name = null;
            }
        },

        'customer.email': function (val) {
            if (!val) {
                this.validationErrors.email = ['The Email field is required'];
            } else {
                this.validationErrors.email = null;
            }

            if (val && !this.validateEmail(val)) {
                this.validationErrors.email = ['The Email field must be a valid email address.'];
            }
        },

        'customer.password': function (val) {
            if (!val) {
                this.validationErrors.password = ['The Password field is required'];
            } else {
                this.validationErrors.password = null;
            }
        },
    },

    mounted() {
        this.getCompanies();
        this.getCountries();
    },

    methods: {
        async getCompanies() {
            try {
                const response = await axios.get('/customers/companies');

                this.companies = response.data.companies;
            } catch (error) {
                // this.$notify({
                //     type: 'error',
                //     title: 'Error',
                //     text: 'There was an error loading the companies.'
                // });
            }
        },

        async getCountries() {
            try {
                this.isLoadingContries = true;
                const response = await axios.get('https://restcountries.com/v3.1/all');

                this.countries = response.data
                this.isLoadingContries = false;
            } catch (error) {
                console.log(error);
            }
        },

        async addPhone() {
            if (this.customer.phones.length >= 3) return;

            this.customer.phones.push({
                country_code: this.countries[0].idd.root + this.countries[0].idd.suffixes[0],
                country_flag: this.countries[0].flags.svg,
                phone_number: '',
                extension: '',
                is_primary: false
            });
        },

        removePhone(index) {
            this.customer.phones.splice(index, 1);
        },

        setSelectedCountry(phone_index, country) {
            this.customer.phones[phone_index].country_code = country.idd.root + country.idd.suffixes[0];
            this.customer.phones[phone_index].country_flag = country.flags.svg;
        },

        generatePassword() {
            // generate a secure password from time and random number
            const time = new Date().getTime();
            const random = Math.random().toString(36).slice(-8);

            this.customer.password = random + time;
        },

        togglePassword() {
            this.showPassword = !this.showPassword
        },

        goTo(route) {
            this.$router.push({ name: route });
        },

        validateEmail(email) {
            // eslint-disable-next-line no-useless-escape
            const re = /\S+@\S+\.\S+/;
            return re.test(email);
        },

        async saveCustomer() {
            this.isLoading = true;
            this.validationErrors = {};
            this.errorMsg = '';

            try {
                const response = await axios.post('/customers/create', this.customer);

                // this.$notify({
                //     type: 'success',
                //     title: 'Success',
                //     text: 'Customer has been created.'
                // });

                this.$router.push({ name: 'all-customers' });
            } catch (error) {
                if (error.response.status === 422) {
                    this.validationErrors = error.response.data.errors;
                } else {
                    this.errorMsg = error.response.data.message;
                }
            }

            this.isLoading = false;

        }
    },
}
</script>

<style src="@vueform/multiselect/themes/default.css"></style>