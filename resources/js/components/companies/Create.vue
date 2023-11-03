<template>
    <div class="dashboard">
        <navigation />
        <div id="main" class="slideout-panel slideout-panel-left">
            <div class="main-panel container-fluid pt-3">
                <div class="mb-4 container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/customers/all" class="" target="_self">Customers</a></li>
                            <li class="breadcrumb-item"><a href="/customers/companies" class="" target="_self">Companies</a>
                            </li>
                            <li class="breadcrumb-item active"><span aria-current="page">Create Company</span></li>
                        </ol>
                    </nav>
                    <h1>Create {{ company.name }}</h1>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <form>
                                <div>
                                    <fieldset class="form-group" id="__BVID__1106">
                                        <div>
                                            <div
                                                class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <label>Company Name</label>
                                                </div>
                                            </div>
                                            <div role="group" class="input-group">
                                                <input
                                                    v-model="company.name"
                                                    name="Company Name" type="text" autocomplete="on"
                                                    class="form-control" maxlength="255"
                                                    :class="{'is-invalid': validationErrors.name}"
                                                    data-hj-allow="" data-mask="" data-previous-value="" id="__BVID__1107">
                                            </div>
                                            <div v-if="validationErrors.name" class="invalid-feedback d-block">
                                                {{ validationErrors.name[0] }}
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div>
                                    <fieldset class="form-group" id="__BVID__1109">
                                        <div>
                                            <div
                                                class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <label>Website</label>
                                                </div>
                                                <label class="text-muted small">optional</label>
                                            </div>
                                            <div role="group" class="input-group">
                                                <input
                                                    v-model="company.website"
                                                    name="Website" type="url" autocomplete="on"
                                                    class="form-control" maxlength="255"
                                                    :class="{'is-invalid': validationErrors.website}"
                                                    data-hj-allow="" data-mask="" data-previous-value="" id="__BVID__1110">
                                            </div>
                                            <div v-if="validationErrors.website" class="invalid-feedback d-block">
                                                {{ validationErrors.website[0] }}
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="form-inline mt-5">
                                    <button @click.prevent="create" type="button" class="btn btn-primary">
                                        <span v-if="isLoading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Save Company
                                    </button>
                                    <a href="/customers/companies" class="btn btn-link router-link-active">
                                        Cancel
                                    </a>
                                </div>
                            </form>
                        </div>
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
            errorMsg: null,
            validationErrors: {},

            company: {
                name: '',
                website: ''
            }
        }
    },

    watch: {
        'company.name': function (val) {
            if (!val) {
                this.validationErrors.name = ['The Company Name field is required'];
            } else {
                this.validationErrors.name = null;
            }
        },
        
        'company.website': function (val) {
            if (!val) {
                this.validationErrors.website = ['The Website field is required']
            } else if (val && !this.validURL(val)) {
                this.validationErrors.website = ['The Website field is not a valid URL'];
            } else {
                this.validationErrors.website = null;
            }
        },
    },

    methods: {
        validURL(str) {
            var pattern = new RegExp('^(https?:\\/\\/)?' + // protocol
                '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
                '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
                '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
                '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
                '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator
            return !!pattern.test(str);
        },

        create() {
            this.isLoading = true;
            this.validationErrors = {};

            axios.post('/customers/companies/create', this.company)
            .then(response => {
                this.isLoading = false;
                this.company = {
                    name: '',
                    website: ''
                };
                this.$router.push({ name: 'company', params: { slug: response.data.company.slug } });
            })
            .catch(error => {
                this.isLoading = false;
                if (error.response.status === 422) {
                    this.validationErrors = error.response.data.errors;
                }
            });
        }
    },
}
</script>

<style></style>