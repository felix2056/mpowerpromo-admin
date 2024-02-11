<template>
    <div>
        <h4>meta</h4>
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
                                                        <input v-model="meta_tag.description" minlength="-Infinity" required="required"
                                                            autofocus="autofocus" autocomplete="temp" type="text"
                                                            id="advanced-input-14" placeholder="" data-mask=""
                                                            data-previous-value="" class="form-control">
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
                                        <label class="cursor-pointer">Hid</label><!----><!---->
                                        <div>
                                            <div class="">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                    </div><!---->
                                                    <div class="d-flex">
                                                        <input v-model="meta_tag.hid" minlength="-Infinity" autofocus="autofocus"
                                                            autocomplete="temp" type="text" id="advanced-input-16"
                                                            placeholder="" data-mask="" data-previous-value=""
                                                            class="form-control">
                                                            <i class="fas fa-exclamation-circle text-danger ml-2" v-if="validationErrors.hid"></i>
                                                    </div>
                                                    <div class="invalid-feedback d-block" v-if="validationErrors.hid">
                                                        <p v-for="error in validationErrors.hid" :key="error">
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
                                        <label class="cursor-pointer">Name</label><!----><!---->
                                        <div>
                                            <div class="">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                    </div><!---->
                                                    <div class="d-flex">
                                                        <input v-model="meta_tag.name" minlength="-Infinity" required="required"
                                                            autofocus="autofocus" autocomplete="temp" type="text"
                                                            id="advanced-input-18" placeholder="" data-mask=""
                                                            data-previous-value="" class="form-control">
                                                            <i class="fas fa-exclamation-circle text-danger ml-2" v-if="validationErrors.name"></i>
                                                    </div>
                                                    <div class="invalid-feedback d-block" v-if="validationErrors.name">
                                                        <p v-for="error in validationErrors.name" :key="error">
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
                                        <label class="cursor-pointer">Content</label>
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
                                                        <input v-model="meta_tag.content" minlength="-Infinity" required="required"
                                                            autofocus="autofocus" autocomplete="temp" type="text"
                                                            id="advanced-input-20" placeholder="" data-mask=""
                                                            data-previous-value="" class="form-control">
                                                            <i class="fas fa-exclamation-circle text-danger ml-2" v-if="validationErrors.content"></i>
                                                    </div>
                                                    <div class="invalid-feedback d-block" v-if="validationErrors.content">
                                                        <p v-for="error in validationErrors.content" :key="error">
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
                                        <label class="cursor-pointer">Property</label><!----><!---->
                                        <div>
                                            <div class="">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                    </div><!---->
                                                    <div class="d-flex">
                                                        <input v-model="meta_tag.property" minlength="-Infinity" autofocus="autofocus"
                                                            autocomplete="temp" type="text" id="advanced-input-22"
                                                            placeholder="" data-mask="" data-previous-value=""
                                                            class="form-control">
                                                            <i class="fas fa-exclamation-circle text-danger ml-2" v-if="validationErrors.property"></i>
                                                    </div>
                                                    <div class="invalid-feedback d-block" v-if="validationErrors.property">
                                                        <p v-for="error in validationErrors.property" :key="error">
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
                                        <label class="cursor-pointer">Http Equiv</label>
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
                                                        <input v-model="meta_tag.http_equiv" minlength="-Infinity" autofocus="autofocus"
                                                            autocomplete="temp" type="text" id="advanced-input-24"
                                                            placeholder="" data-mask="" data-previous-value=""
                                                            class="form-control">
                                                            <i class="fas fa-exclamation-circle text-danger ml-2" v-if="validationErrors.http_equiv"></i>
                                                    </div>
                                                    <div class="invalid-feedback d-block" v-if="validationErrors.http_equiv">
                                                        <p v-for="error in validationErrors.http_equiv" :key="error">
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
                            <button @click="resolveAction" type="button" class="btn btn-primary" style="bottom: 0px; z-index: 49;">
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

            meta_tag: {
                hid: '',
                name: '',
                description: '',
                content: '',
                property: '',
                http_equiv: ''
            }
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        })
    },

    // watch meta_tag.name and meta_tag.content for changes
    watch: {
        'meta_tag.name': function (val) {
            if (val.length > 0) {
                this.validationErrors.name = []
            }
  
        },
        'meta_tag.description': function (val) {
            if (val.length > 0) {
                this.validationErrors.description = []
            }
  
        },
        'meta_tag.content': function (val) {
            if (val.length > 0) {
                this.validationErrors.content = []
            }
        }
    },

    created() {
        if (Object.keys(this.is_editing).length) {
            this.meta_tag = this.is_editing
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

            if (this.meta_tag.name.length === 0) {
                this.validationErrors.name = ['The name field is required.']
            }

            if (this.meta_tag.description.length === 0) {
                this.validationErrors.description = ['The description field is required.']
            }

            if (this.meta_tag.content.length === 0) {
                this.validationErrors.content = ['The content field is required.']
            }

            if (Object.keys(this.validationErrors).length > 0) {
                return
            }
            
            this.isLoading = true

            axios.post(`/stores/head-tags/meta/create`, this.meta_tag, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.meta_tag = {
                    hid: '',
                    name: '',
                    description: '',
                    content: '',
                    property: '',
                    http_equiv: ''
                }

                this.$emit('tagAdded', response.data.meta_tag)
                this.closeTag()
            })
            .catch(error => {
                if (error.response.status === 422) {
                    this.validationErrors = error.response.data.errors;
                } else {
                    this.errorMsg = error.response.data.message;
                }
            })
            .finally(() => this.isLoading = false)
        },

        updateTag() {
            // validate the form
            this.validationErrors = {}

            if (this.meta_tag.name.length === 0) {
                this.validationErrors.name = ['The name field is required.']
            }

            if (this.meta_tag.description.length === 0) {
                this.validationErrors.description = ['The description field is required.']
            }

            if (this.meta_tag.content.length === 0) {
                this.validationErrors.content = ['The content field is required.']
            }

            if (Object.keys(this.validationErrors).length > 0) {
                return
            }

            this.isLoading = true

            axios.post(`/stores/head-tags/meta/update`, this.meta_tag, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.$emit('tagUpdated', response.data.meta_tag)
                this.closeTag()
            })
            .catch(error => {
                if (error.response.status === 422) {
                    this.validationErrors = error.response.data.errors;
                } else {
                    this.errorMsg = error.response.data.message;
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