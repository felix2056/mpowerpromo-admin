<template>
    <div>
        <h4>title</h4>
        <div class="row">
            <div class="col-12">
                <div data-spy="scroll" data-target="#navbar-scroll" class="">
                    <form autocomplete="on" class="col-12 p-0"><!---->
                        <div>
                            <div class="form-group"><!---->
                                <div><!---->
                                    <div><label class="cursor-pointer">Title</label><!----><!---->
                                        <div>
                                            <div class="">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                        <div class="col-4"><!----></div>
                                                    </div><!---->
                                                    <div class="d-flex"><input minlength="-Infinity" autofocus="autofocus"
                                                            autocomplete="temp" type="text" id="advanced-input-49"
                                                            placeholder="" data-mask="" data-previous-value=""
                                                            class="form-control"><!----><!----></div>
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
        }
    },

    data() {
        return {
            isLoading: false,
            validationErrors: {},

            add_title_tag: {
                title: ''
            }
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        })
    },
    
    methods: {
        addTag() {
            this.isLoading = true

            axios.post(`/stores/head-tags/title/create`, this.add_title_tag, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.isLoading = false
                this.$emit('tagAdded', response.data.title_tag)
            })
            .catch(error => {
                this.isLoading = false
                this.validationErrors = error.response.data.errors
            })
        },

        closeTag() {
            this.$emit('closeTag')
        }
    }
}
</script>

<style></style>