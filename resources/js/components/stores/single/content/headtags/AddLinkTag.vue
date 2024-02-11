<template>
    <div>
        <h4>link</h4>
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
                                                        <input v-model="link_tag.description" minlength="-Infinity"
                                                            autofocus="autofocus" autocomplete="temp" type="text"
                                                            id="advanced-input-26" placeholder="" data-mask=""
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
                                    <div><label class="cursor-pointer">Rel</label><!----><!---->
                                        <div>
                                            <div class="">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                    </div><!---->
                                                    <div class="d-flex">
                                                        <input v-model="link_tag.rel" minlength="-Infinity"
                                                            required="required" autofocus="autofocus" autocomplete="temp"
                                                            type="text" id="advanced-input-28" placeholder="" data-mask=""
                                                            data-previous-value="" class="form-control">
                                                        <i class="fas fa-exclamation-circle text-danger ml-2" v-if="validationErrors.rel"></i>
                                                    </div>
                                                    <div class="invalid-feedback d-block" v-if="validationErrors.rel">
                                                        <p v-for="error in validationErrors.rel" :key="error">
                                                            {{ error }}
                                                        </p>
                                                    </div>
                                                </div><!----><!---->
                                            </div><!---->
                                        </div>
                                    </div><!---->
                                </div>
                            </div>

                            <div v-if="link_tag.is_external" class="form-group"><!---->
                                <div><!---->
                                    <div>
                                        <label class="cursor-pointer">Href</label>
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
                                                        <input v-model="link_tag.href" :disabled="link_tag.is_bootstrap" minlength="-Infinity" required="required"
                                                            autofocus="autofocus" autocomplete="temp" type="text"
                                                            id="advanced-input-34" placeholder="" data-mask=""
                                                            data-previous-value="" class="form-control">
                                                        <i class="fas fa-exclamation-circle text-danger ml-2" v-if="validationErrors.href"></i>
                                                    </div>
                                                    <div class="invalid-feedback d-block" v-if="validationErrors.href">
                                                        <p v-for="error in validationErrors.href" :key="error">
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
                                    <div><!----><!----><!---->
                                        <div>
                                            <div class="custom-control custom-checkbox">
                                                <input v-model="link_tag.is_external" id="checkbox-29"
                                                    type="checkbox" class="custom-control-input">
                                                <label for="checkbox-29" class="custom-control-label">External</label>
                                                <a hide-title="true">
                                                    <i class="fas fa-question-circle text-light ml-2"></i>
                                                </a>
                                            </div>
                                            <div class="invalid-feedback d-block" v-if="validationErrors.is_external">
                                                <p v-for="error in validationErrors.is_external" :key="error">
                                                    {{ error }}
                                                </p>
                                            </div>
                                        </div>
                                    </div><!---->
                                </div>
                            </div>

                            <div class="form-group"><!---->
                                <div><!---->
                                    <div><!----><!----><!---->
                                        <div>
                                            <div class="custom-control custom-checkbox">
                                                <input v-model="link_tag.is_inline" id="checkbox-30"
                                                    type="checkbox" class="custom-control-input">
                                                <label for="checkbox-30" class="custom-control-label">Inline</label>
                                                <a hide-title="true">
                                                    <i class="fas fa-question-circle text-light ml-2"></i>
                                                </a>
                                            </div>
                                            <div class="invalid-feedback d-block" v-if="validationErrors.is_inline">
                                                <p v-for="error in validationErrors.is_inline" :key="error">
                                                    {{ error }}
                                                </p>
                                            </div>
                                        </div>
                                    </div><!---->
                                </div>
                            </div>
                        </div>

                        <div v-if="link_tag.is_inline">
                            <div class="vue-codemirror card w-100">
                                <Codemirror v-model:value="link_tag.content" :options="cmOptions" border placeholder="test placeholder" :height="200" @change="change" />
                                <i class="fas fa-exclamation-circle text-danger ml-2" v-if="validationErrors.content"></i>
                            </div>
                            <div class="invalid-feedback d-block" v-if="validationErrors.content">
                                <p v-for="error in validationErrors.content" :key="error">
                                    {{ error }}
                                </p>
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

            link_tag: {
                href: '',
                rel: '',
                content: '',
                description: '',
                is_inline: false,
                is_external: true,
                is_bootstrap: false,
            }
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        })
    },

    // watch link_tag.is_inline and link_tag.is_external. If either is true, set the other to false
    watch: {
        'link_tag.href': function (val) {
            if (val.length) {
                this.validationErrors.href = []
            } else {
                if (this.link_tag.is_external) {
                    this.validationErrors.href = ['The href field is required for external link tags.']
                }
            }
        },
        'link_tag.rel': function (val) {
            if (val.length) {
                this.validationErrors.rel = []
            } else {
                this.validationErrors.rel = ['The rel field is required.']
            }
        },
        'link_tag.description': function (val) {
            if (val.length) {
                this.validationErrors.description = []
            } else {
                this.validationErrors.description = ['The description field is required.']
            }
        },
        'link_tag.content': function (val) {
            if (val) {
                this.validationErrors.content = []
            } else {
                if (this.link_tag.is_inline) {
                    this.validationErrors.content = ['The content field is required for inline link tags.']
                }
            }
        },
        'link_tag.is_inline': function (val) {
            if (val) {
                this.link_tag.is_external = false
                this.validationErrors.is_external = []
            }
        },
        'link_tag.is_external': function (val) {
            if (val) {
                this.link_tag.is_inline = false
                this.validationErrors.is_inline = []
            }
        }
    },

    created() {
        if (Object.keys(this.is_editing).length) {
            this.link_tag = this.is_editing
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

            if (!this.link_tag.description.length) {
                this.validationErrors.description = ['The description field is required.']
            }

            if (!this.link_tag.rel.length) {
                this.validationErrors.rel = ['The rel field is required.']
            }

            if (this.link_tag.is_external && !this.link_tag.href.length) {
                this.validationErrors.href = ['The href field is required for external link tags.']
            }

            if (this.link_tag.is_inline && !this.link_tag.content.length) {
                this.validationErrors.content = ['The content field is required for inline link tags.']
            }

            if (Object.keys(this.validationErrors).length) {
                return
            }

            this.isLoading = true

            axios.post(`/stores/head-tags/link/create`, this.link_tag, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.isLoading = false
                
                this.link_tag = {
                    href: '',
                    rel: '',
                    content: '',
                    description: '',
                    is_inline: false,
                    is_external: true,
                    is_bootstrap: false,
                }

                this.$emit('tagAdded', response.data.link_tag)
                this.closeTag()
                
            })
            .catch(error => {
                this.isLoading = false
                this.validationErrors = error.response.data.errors
            })
        },

        updateTag() {
            // validate the form
            if (!this.link_tag.description.length) {
                this.validationErrors.description = ['The description field is required.']
            }

            if (!this.link_tag.rel.length) {
                this.validationErrors.rel = ['The rel field is required.']
            }

            if (this.link_tag.is_external && !this.link_tag.href.length) {
                this.validationErrors.href = ['The href field is required for external link tags.']
            }

            if (this.link_tag.is_inline && !this.link_tag.content.length) {
                this.validationErrors.content = ['The content field is required for inline link tags.']
            }

            if (Object.keys(this.validationErrors).length) {
                return
            }

            this.isLoading = true

            axios.post(`/stores/head-tags/link/update`, this.link_tag, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.$emit('tagUpdated', response.data.link_tag)
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