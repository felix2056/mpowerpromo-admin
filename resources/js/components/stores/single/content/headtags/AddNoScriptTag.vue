<template>
    <div>
        <h4>noscript</h4>
        <div class="row">
            <div class="col-12">
                <div data-spy="scroll" data-target="#navbar-scroll" class="">
                    <form autocomplete="on" class="col-12 p-0"><!---->
                        <div>
                            <div class="form-group"><!---->
                                <div><!---->
                                    <div>
                                        <label class="cursor-pointer">Description</label>
                                        <!----><!---->
                                        <div>
                                            <div class="">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                    </div><!---->
                                                    <div class="d-flex">
                                                        <input v-model="noscript_tag.description" minlength="-Infinity" autofocus="autofocus"
                                                            autocomplete="temp" type="text" id="advanced-input-39"
                                                            placeholder="" data-mask="" data-previous-value=""
                                                            class="form-control">
                                                        <i class="fas fa-exclamation-circle text-danger ml-2" v-if="validationErrors.description"></i>
                                                    </div>
                                                    <div class="invalid-feedback d-block" v-if="validationErrors.description">
                                                        <p v-for="error in validationErrors.description" :key="error">
                                                            {{ error }}
                                                        </p>
                                                    </div>
                                                </div><!----><!---->
                                            </div><!---->
                                        </div>
                                    </div><!---->
                                </div>
                            </div>

                            <div class="form-group"><!---->
                                <div><!---->
                                    <div>
                                        <label class="cursor-pointer">Inner HTML</label>
                                        <!----><!---->
                                        <div>
                                            <div class="">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                    </div><!---->
                                                    <div class="d-flex">
                                                        <input minlength="-Infinity" autofocus="autofocus"
                                                            autocomplete="temp" type="text" id="advanced-input-41"
                                                            placeholder="" data-mask="" data-previous-value=""
                                                            class="form-control">
                                                        <i class="fas fa-exclamation-circle text-danger ml-2" v-if="validationErrors.inner_html"></i>
                                                    </div>
                                                    <div class="invalid-feedback d-block" v-if="validationErrors.inner_html">
                                                        <p v-for="error in validationErrors.inner_html" :key="error">
                                                            {{ error }}
                                                        </p>
                                                    </div>
                                                </div><!----><!---->
                                            </div><!---->
                                        </div>
                                    </div><!---->
                                </div>
                            </div>
                        </div>
                        <div class="form-inline bg-white py-3 border-top"
                            style="position: sticky; bottom: 0px; z-index: 49;"><!---->
                            <button type="submit" class="btn btn-primary" style="bottom: 0px; z-index: 49;">
                                <i v-if="isLoading" class="fas fa-spinner fa-spin"></i>
                                <i v-else class="fas fa-save"></i>
                                Save Tag
                            </button>
                            <button @click="closeTag" type="button" class="btn btn-link">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';

export default {
    props: {
        head_tag: {
            type: Object,
            required: true
        },
        is_editing: {
            type: Object,
            required: false
        }
    },

    data() {
        return {
            isLoading: false,
            validationErrors: {},
            errorMsg: '',

            noscript_tag: {
                description: '',
                inner_html: ''
            }
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        })
    },

    // watch noscript_tag.description and noscript_tag.inner_html
    watch: {
        'noscript_tag.description': function (val) {
            if (val.length > 0) {
                this.validationError.description = []
            }
        },
        'noscript_tag.inner_html': function (val) {
            if (val.length > 0) {
                this.validationError.inner_html = []
            }
        }
    },

    created() {
        if (Object.keys(this.is_editing).length) {
            this.noscript_tag = this.is_editing
        }
    },
    
    methods: {
        resolveAction() {
            if (Object.keys(this.is_editing).length) {
                this.updateTag()
            } else {
                this.addTag()
            }
        },

        addTag() {
            // validate the form
            this.validationErrors = {}

            if (this.noscript_tag.description.length === 0) {
                this.validationErrors.description = ['The description field is required.']
            }

            if (this.noscript_tag.inner_html.length === 0) {
                this.validationErrors.inner_html = ['The inner html field is required.']
            }

            if (Object.keys(this.validationErrors).length > 0) {
                return
            }

            this.isLoading = true

            axios.post(`/stores/head-tags/noscript/create`, this.noscript_tag, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.noscript_tag = {
                    description: '',
                    inner_html: ''
                }

                this.$emit('tagAdded', response.data.noscript_tag)
                this.closeTag()
            })
            .catch(error => {
                if (error.response.status === 422) {
                    this.validationErrors = error.response.data.errors
                } else {
                    this.errorMsg = error.response.data.message
                }
            })
            .finally(() => this.isLoading = false)
        },

        updateTag() {
            // validate the form
            this.validationErrors = {}

            if (this.noscript_tag.description.length === 0) {
                this.validationErrors.description = ['The description field is required.']
            }

            if (this.noscript_tag.inner_html.length === 0) {
                this.validationErrors.inner_html = ['The inner html field is required.']
            }

            if (Object.keys(this.validationErrors).length > 0) {
                return
            }

            this.isLoading = true

            axios.post(`/stores/head-tags/noscript/update`, this.noscript_tag, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.$emit('tagUpdated', response.data.noscript_tag)
                this.closeTag()
            })
            .catch(error => {
                if (error.response.status === 422) {
                    this.validationErrors = error.response.data.errors
                } else {
                    this.errorMsg = error.response.data.message
                }
            })
            .finally(() => this.isLoading = false)
        },

        reloadIframe() {
            let iframe = document.getElementById('storeEditorIframe');
            iframe.src = iframe.src;
        },

        closeTag() {
            this.reloadIframe()
            this.$emit('closeTag')
        }
    }
}
</script>

<style></style>