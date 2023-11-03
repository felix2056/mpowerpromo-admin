<template>
    <div class="dashboard">
        <navigation />
        <div id="main" class="slideout-panel slideout-panel-left">
            <div class="main-panel container-fluid pt-3">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/stores" class="" target="_self">Stores</a></li>
                            <li class="breadcrumb-item active"><span aria-current="page">Create Store</span></li>
                        </ol>
                    </nav>
                    <h1>Create Store</h1>
                    <div class="pb-3">
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <label>
                                        Create From Template
                                    </label>
                                </div>
                            </div>
                            <div tabindex="-1" class="multiselect" loadonfocus="true" query="[object Object]" optionsv=""
                                orderby="name" ascending="1"
                                path="/stores/distributors/64f8bf17bedafd072667a712?isTemplate=true&amp;project=storeName&amp;project=_id&amp;project=storeUrl"
                                isobject="true">
                                <div class="multiselect__select"></div>
                                <div class="multiselect__tags">
                                    <div class="multiselect__tags-wrap" style="display: none;"></div>
                                    <div class="multiselect__spinner" style="display: none;"></div> <input
                                        name="Create From Template" type="text" autocomplete="nope"
                                        placeholder="Select option" tabindex="0" class="multiselect__input"
                                        style="width: 0px; position: absolute; padding: 0px;"> <span
                                        class="multiselect__placeholder">
                                        Select option
                                    </span>
                                </div>
                                <div tabindex="-1" class="multiselect__content-wrapper"
                                    style="max-height: 300px; display: none;">
                                    <ul class="multiselect__content" style="display: block;">
                                        <li style="display: none;"><span class="multiselect__option"><span> Oops! No
                                                    elements
                                                    found. Consider changing the search query. </span></span></li>
                                        <li><span class="multiselect__option"><span><span>No Create From Template
                                                        Options</span></span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div data-spy="scroll" data-target="#navbar-scroll" class="">
                                <form autocomplete="on" class="col-12 p-0">
                                    <div>
                                        <div class="form-group">
                                            <div>
                                                <div>
                                                    <label class="cursor-pointer">Store Name</label>
                                                    <a hide-title="true">
                                                        <i class="fas fa-question-circle text-light ml-2"></i>
                                                    </a>
                                                    <div>
                                                        <div class="">
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col-4"></div>
                                                                    <div class="col-4"></div>
                                                                    <div class="col-4"></div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <input v-model="store.name" minlength="-Infinity"
                                                                        required="required" autofocus="autofocus"
                                                                        autocomplete="temp" type="text"
                                                                        id="advanced-input-4" placeholder="" data-mask=""
                                                                        data-previous-value="" class="form-control"
                                                                        :class="{ 'is-invalid': validationErrors.name }">
                                                                </div>

                                                                <div v-if="validationErrors.name" class="invalid-feedback d-block">
                                                                    {{ validationErrors.name[0] }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div>
                                                <div>
                                                    <label class="cursor-pointer">Store Logo</label>
                                                    <a hide-title="true">
                                                        <i class="fas fa-question-circle text-light ml-2"></i>
                                                    </a>
                                                    <div>
                                                        <div class="">
                                                            <div>
                                                                <div>
                                                                    <div v-if="store.logo" class="mr-2 mb-3">
                                                                        <img :src="store.logo" class="img-thumbnail" style="max-height: 80px; max-width: 200px;">
                                                                    </div>

                                                                    <div class="d-flex">
                                                                        <button type="button" class="btn btn-primary mr-3" data-toggle="modal" data-target="#__BVID__851">Upload</button>
                                                                        
                                                                        <input minlength="-Infinity" autofocus="autofocus"
                                                                            autocomplete="temp" type="text"
                                                                            id="advanced-input-5" placeholder=""
                                                                            data-mask=""
                                                                            :data-previous-value="store.logo"
                                                                            v-model="store.logo"
                                                                            class="form-control">
                                                                    </div>

                                                                    <div v-if="validationErrors.logo" class="invalid-feedback d-block">
                                                                        {{ validationErrors.logo[0] }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div>
                                                        <div class="pt-2 mt-2">
                                                            <div><label>Store URL</label>
                                                                <div class="d-flex mb-2">
                                                                    <div>
                                                                        <div role="group" class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">https://</div>
                                                                            </div>
                                                                            <input v-model="store.subdomain" type="text" placeholder="Sub Domain" class="form-control" id="__BVID__88" :class="{ 'is-invalid': validationErrors.url }">
                                                                        </div>
                                                                    </div>
                                                                    <div style="padding: 22px 5px 0px; line-height: 16px;">.
                                                                    </div>
                                                                    <div>
                                                                        <VueMultiselect v-model="store.domain" :options="domains" :multiple="false" :close-on-select="true" :clear-on-select="false" :preserve-search="true" :placeholder="'Select or search a domain'" :searchable="true" :show-labels="false" :taggable="false" :allow-empty="false"></VueMultiselect>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 small"><b>Your StoreUrl:</b> {{ storeUrl }}</div>
                                                                <div v-if="validationErrors.subdomain" class="invalid-feedback d-block">
                                                                    {{ validationErrors.subdomain[0] }}
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pt-2">
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
                                                                                                {{ store.country_code }}
                                                                                            </span>
                                                                                            <span class="ml-1 mr-1">
                                                                                                <img :src="store.country_flag" style="width: 30px;">
                                                                                            </span>
                                                                                        </button>

                                                                                        <ul role="menu" tabindex="-1"
                                                                                            class="dropdown-menu scroll-dropdown overflow-auto"
                                                                                            style="height:230px"
                                                                                            aria-labelledby="__BVID__919__BV_toggle_">
                                                                                            <li v-for="(country, i) in sortedCountries"
                                                                                                :key="i" role="presentation"
                                                                                                @click="setSelectedCountry(country)">
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
                                                                        <legend tabindex="-1" 
                                                                            class="bv-no-focus-ring col-form-label pt-0" 
                                                                            id="__BVID__1671__BV_label_">
                                                                            Phone Number
                                                                        </legend>

                                                                        <div>
                                                                            <input v-model="store.phone_number" type="tel"
                                                                                name="Phone Number" placeholder="123-456-7890"
                                                                                class="form-control" :class="{ 'is-invalid': validationErrors.phone_number }"
                                                                                data-mask="###-###-####" data-previous-value="" aria-required="false"
                                                                                aria-invalid="false">
                                                                        </div>

                                                                        <div v-if="validationErrors.phone_number" class="invalid-feedback d-block">
                                                                            {{ validationErrors.phone_number[0] }}
                                                                        </div>
                                                                    </fieldset>
                                                                </div>

                                                                <div class="d-flex">
                                                                    <div class="form-group ml-lg-2 w-50" style="width: 100px;">
                                                                        <label>Ext</label>
                                                                        <input v-model="store.extension" type="text" name="Ext"
                                                                            class="form-control" data-mask="########" data-previous-value=""
                                                                            aria-required="false" aria-invalid="false">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div>
                                                <div class="card p-3" id="redirectURLsStore">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="mt-2">Redirect URLs</h5>
                                                        <a @click="store.redirectUrls.push('')" href="javascript:void(0)">
                                                            Add 
                                                        </a>
                                                    </div>
                                                    <div v-for="(redirectURL, index) in store.redirectUrls" :key="index" class="form-group">
                                                        <div class="row m-0">
                                                            <div class="col-11">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            https://
                                                                        </span>
                                                                    </div>
                                                                    <input class="form-control" type="text" v-model="store.redirectUrls[index]" placeholder="www.example.com">
                                                                </div>
                                                            </div>
                                                            <div class="col-1 text-right">
                                                                <a @click="store.redirectUrls.splice(index, 1)" href="javascript:void(0)">
                                                                    <i class="far fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3" style="position: sticky; top: 0px; z-index: 1000;">
                                        <button @click.prevent="saveStore" :disabled="isDisabled"
                                            type="submit" class="btn btn-primary" style="top: 0px; z-index: 1000;"> 
                                            <span v-if="isLoading" class="spinner-border spinner-border-sm" role="status"
                                                aria-hidden="true">
                                            </span>
                                            Save Store
                                        </button>
                                        <button type="button" class="btn btn-link">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="__BVID__851" role="dialog" aria-labelledby="__BVID__851___BV_modal_title_"
            aria-describedby="__BVID__851___BV_modal_body_" class="modal fade" aria-modal="true">
            <div class="modal-dialog modal-md">
                <span tabindex="0"></span>
                <div id="__BVID__851___BV_modal_content_" tabindex="-1" class="modal-content">
                    <header id="__BVID__851___BV_modal_header_" class="modal-header">
                        <h5 id="__BVID__851___BV_modal_title_" class="modal-title">Upload Image</h5>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close">×</button>
                    </header>
                    <div id="__BVID__851___BV_modal_body_" class="modal-body">
                        <div>
                            <form enctype="multipart/form-data" novalidate="novalidate" style="height: 100%;">
                                <div class="file-upload-dropbox btn btn-outline-primary btn-block p-3" @click="$refs.file.click()" @dragover.prevent="onDragOver" @drop.prevent="onFileChange">
                                    <input ref="file" type="file" name="file" accept="image/*" class="input-file" @change="onFileChange">
                                    <div>
                                        <i class="fas fa-cloud-upload fa-2x"></i>
                                    </div>
                                    <div>
                                        Drag file(s) or click to browse
                                    </div>

                                    <p v-if="isUploading">
                                        Uploading 1 file...
                                        <i class="far fa-2x fa-spinner-third fa-spin text-primary"></i>
                                    </p>

                                    <p v-if="validationErrors.logo" class="text-danger">
                                        {{ validationErrors.logo[0] }}
                                    </p>
                                </div>
                            </form>

                            <div class="custom-control custom-checkbox">
                                <input v-model="shouldCompress" id="styled-checkbox" type="checkbox" class="custom-control-input">
                                <label for="styled-checkbox" class="custom-control-label">Compress</label>
                            </div><!---->
                            
                            <div v-if="store.logo" class="my-2 d-flex" style="align-items: center;">
                                <div class="d-flex flex-column text-center">
                                    <img :src="store.logo"
                                        class="img-responsive img-thumbnail"
                                        style="max-height: 100px; min-height: 100px; min-width: 100px;">
                                        
                                    <button @click="store.logo = ''" class="btn btn-sm btn-link mt-1">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </div>
                                <div class="flex-grow-1"></div>
                            </div>
                        </div>
                    </div><!---->
                </div>
                <span tabindex="0"></span>
            </div>
        </div>

        <notification />
    </div>
</template>

<script>
import Navigation from '../includes/navigation.vue';
import Notification from '../includes/notification.vue';
import VueMultiselect from 'vue-multiselect';

export default {
    components: {
        Navigation,
        Notification,
        VueMultiselect
    },

    data() {
        return {
            isLoading: false,
            isLoadingContries: false,
            isUploading: false,
            shouldCompress: true,
            errorMsg: null,
            validationErrors: {},

            countries: [],
            domains: ['mpowerpromo.localhost'],

            store: {
                name: '',
                logo: '',
                domain: '',
                subdomain: '',
                country_code: '',
                country_flag: '',
                phone_number: '',
                extension: '',
                redirectUrls: []
            },
        }
    },

    computed: {
        isDisabled() {
            return this.isLoading;
        },

        isInvalid() {
            return Object.keys(this.validationErrors).length > 0;
        },

        storeUrl() {
            let storeUrl = 'https://';

            if(!this.store.subdomain && this.store.domain) {
                storeUrl += this.store.domain.toLowerCase();
            }

            if(this.store.subdomain && this.store.domain) {
                storeUrl += this.store.subdomain.toLowerCase() + '.' + this.store.domain;
            }

            return storeUrl;
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
        'store.name': function (val) {
            if (!val) {
                this.validationErrors.name = ['The Store Name field is required'];
            } else {
                this.validationErrors.name = null;
            }
        },

        'store.subdomain': function (val) {
            if (!val) {
                this.validationErrors.subdomain = ['The Store Subdomain field is required'];
            } else {
                this.validationErrors.subdomain = null;
            }
        },

        'store.logo': function (val) {
            if (val && !this.validURL(val)) {
                this.validationErrors.logo = ['The Store Logo must be a valid URL'];
            } else {
                this.validationErrors.logo = null;
            }
        },

        'store.country_code': function (val) {
            if (!val) {
                this.validationErrors.country_code = ['The Store Country Code field is required'];
            } else {
                this.validationErrors.country_code = null;
            }
        },

        'store.phone_number': function (val) {
            if (!val) {
                this.validationErrors.phone_number = ['The Store Phone Number field is required'];
            } else if (val && !this.validPhoneNumber(val)) {
                this.validationErrors.phone_number = ['The Store Phone Number field is not a valid phone number'];
            } else {
                this.validationErrors.phone_number = null;
            }
        },

        'store.extension': function (val) {
            if (!val) {
                this.validationErrors.extension = ['The Store Extension field is required'];
            } else {
                this.validationErrors.extension = null;
            }
        }
    },

    mounted() {
        this.getCountries();
    },

    methods: {
        async getCountries() {
            try {
                this.isLoadingContries = true;
                const response = await axios.get('https://restcountries.com/v3.1/all');

                this.countries = response.data
                // set country to usa
                this.setSelectedCountry(this.countries.find(country => country.cca2 === 'US'));
                this.isLoadingContries = false;
            } catch (error) {
                console.log(error);
            }
        },

        setSelectedCountry(country) {
            this.store.country_code = country.idd.root + country.idd.suffixes[0];
            this.store.country_flag = country.flags.svg;
        },

        onFileChange(e) {
            this.validationErrors.logo = null;

            // validate file type and size
            const file = e.target.files[0];
            const fileType = file['type'];
            const validImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
            const validFileSize = 4 * 1024 * 1024; // 4MB

            if (!validImageTypes.includes(fileType)) {
                this.validationErrors.logo = ['The Logo must be a file of type: jpeg, jpg, png, gif.'];
                return;
            }

            if (file.size > validFileSize) {
                this.validationErrors.logo = ['The Logo must not be greater than 4MB.'];
                return;
            }

            // upload to a temp folder
            this.isUploading = true;

            const formData = new FormData();
            formData.append('logo', file);
            formData.append('shouldCompress', this.shouldCompress);

            axios.post('/stores/upload', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(response => {
                this.store.logo = response.data.temporary_file.path;
            }).catch(error => {
                if (error.response.status === 422) {
                    this.validationErrors = error.response.data.errors;
                } else {
                    this.errorMsg = error.response.data.message;
                }
            })
            .finally(() => {
                this.isUploading = false;
            });
        },

        onDragOver(e) {
            e.preventDefault();
        },

        validURL(str) {
            var pattern = new RegExp(
                "^(https?:\\/\\/)?" +
                "((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|"
                +
                "((\\d{1,3}\\.){3}\\d{1,3}))" +
                "(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*" +
                "(\\?[;&amp;a-z\\d%_.~+=-]*)?" +
                "(\\#[-a-z\\d_]*)?$",
                "i"
            );
            return !!pattern.test(str);
        },

        validPhoneNumber(str) {
            const pattern = new RegExp(
                "^(?:(?:\\+|00)(\\d{1,3})[- ]?)?" + // International dialing code
                "(?!0{4,})" +                       // Not all zeros
                "(?!9{4,})" +                       // Not all nines
                "\\d{1,4}[- ]?\\d{1,4}[- ]?\\d{1,4}$",
                "i"
            );
            return pattern.test(str);
        },

        saveStore() {
            this.isLoading = true;
            this.errorMsg = null;
            this.validationErrors = {};

            axios.post('/stores/create', this.store)
            .then(response => {
                this.$router.push({ name: 'store', params: { slug: response.data.store.slug } });
            })
            .catch(error => {
                this.errorMsg = error.response.data.message;
                this.validationErrors = error.response.data.errors;
            })
            .finally(() => {
                this.isLoading = false;
            });
        }
    }
}
</script>

<style></style>