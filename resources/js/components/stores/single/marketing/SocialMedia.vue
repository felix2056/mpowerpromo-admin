<template>
    <div id="store-menu-view" class="container">
        <div class="pb-3">
            <nav class="small">
                <ol class="breadcrumb pb-0">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'store' }">Menu</router-link>
                    </li>
                    <li class="breadcrumb-item active">Social Media</li>
                </ol>
            </nav>
        </div>
        <div>
            <h3>Social Media</h3>
            <p>Enable social media sharing links by social network on blog posts and product pages.</p>
            <div class="row">
                <div class="col-12">
                    <div data-spy="scroll" data-target="#navbar-scroll" class="">
                        <form autocomplete="on" class="col-12 p-0"><!---->
                            <div>
                                <div class="form-group"><!---->
                                    <div><!---->
                                        <div id="socialSharingSocial Media"><a
                                                class="h5 d-inline-block cursor-pointer text-body">Social Sharing</a><!---->
                                            <div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div data-spy="scroll" data-target="#navbar-scroll" class="">
                                                            <form autocomplete="on" class="col-12 p-0"><!---->
                                                                <div>
                                                                    <div class="form-group"><!---->
                                                                        <div><!---->
                                                                            <div><!----><!----><!---->
                                                                                <div>
                                                                                    <div class="custom-control custom-checkbox">
                                                                                        <input true-value="true"
                                                                                            id="checkbox-7" type="checkbox"
                                                                                            v-model="social_media.show"
                                                                                            class="custom-control-input">
                                                                                        <label for="checkbox-7" class="custom-control-label">Show</label>
                                                                                        <div class="small text-muted">Enable social media sharing links by social network on blog posts and product pages.</div><!---->
                                                                                    </div>
                                                                                    <div v-if="validationErrors.show" class="invalid-feedback d-block">
                                                                                        {{ validationErrors.show[0] }}
                                                                                    </div>
                                                                                </div>
                                                                            </div><!---->
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group"><!---->
                                                                        <div><!---->
                                                                            <div><label>Networks</label><!----><!---->
                                                                                <div>
                                                                                    <div>
                                                                                        <div>
                                                                                            <Multiselect mode="tags" v-model="social_media.networks" :options="networks" :close-on-select="false" placeholder="Select option" />
                                                                                        </div>
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
                                                                                        <input true-value="true"
                                                                                            id="checkbox-9" type="checkbox"
                                                                                            v-model="social_media.is_rounded"
                                                                                            class="custom-control-input">
                                                                                        <label for="checkbox-9" class="custom-control-label">Is Rounded</label>
                                                                                        <!---->
                                                                                    </div>
                                                                                    <div v-if="validationErrors.is_rounded" class="invalid-feedback d-block">
                                                                                        {{ validationErrors.is_rounded[0] }}
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
                                                                                        <input true-value="true"
                                                                                            id="checkbox-10" type="checkbox"
                                                                                            v-model="social_media.has_labels"
                                                                                            class="custom-control-input">
                                                                                        <label for="checkbox-10" class="custom-control-label">Has Labels</label>
                                                                                        <!---->
                                                                                    </div>
                                                                                    <div v-if="validationErrors.has_labels" class="invalid-feedback d-block">
                                                                                        {{ validationErrors.has_labels[0] }}
                                                                                    </div>
                                                                                </div>
                                                                            </div><!---->
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group"><!---->
                                                                        <div><!---->
                                                                            <div><!----><!----><!---->
                                                                                <div><!----><!----></div>
                                                                            </div><!---->
                                                                        </div>
                                                                    </div>
                                                                </div><!---->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!---->
                                    </div>
                                </div>
                            </div>

                            <div class="form-inline bg-white py-3 border-top" style="position: sticky; bottom: 0px; z-index: 49;"><!---->
                                <button type="button" class="btn btn-primary" @click="saveSocialMedia">
                                    <i v-if="isLoading" class="fa fa-spinner fa-spin"></i>
                                    Save Social media
                                </button>
                                <button @click="closeHeadTag" type="button" class="btn btn-link">
                                    Close
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';
import Multiselect from '@vueform/multiselect'

export default {
    name: 'SocialMedia',

    components: {
        Multiselect
    },

    data() {
        return {
            isLoading: false,
            validationErrors: {},

            social_media: {
                show: false,
                networks: [],
                is_rounded: false,
                has_labels: false,
            },
            networks: [
                'buffer',
                'email',
                'evernote',
                'facebook',
                'flipboard',
                'hackernews',
                'line',
                'linkedin',
                'odnoklassniki',
                'pinterest',
                'reddit',
                'skype',
                'stumbleupon',
                'telegram',
                'tumblr',
                'twitter',
                'viber',
                'vk',
                'weibo',
                'whatsapp',
                'wordpress',
                'xing',
                'yammer',
            ],
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        })
    },

    created() {
        this.getSocialMedia()
    },

    methods: {
        async getSocialMedia() {
            this.isLoading = true;

            axios.get('/stores/social-media', {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.social_media = response.data.social_media
            })
            .catch(error => {
                console.log(error)
            })
            .finally(() => {
                this.isLoading = false;
            })
        },

        async saveSocialMedia() {
            this.isLoading = true;

            axios.post('/stores/social-media/create', this.social_media, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.closeHeadTag();
            })
            .catch(error => {
                console.log(error)
                this.validationErrors = error.response.data.errors
            })
            .finally(() => {
                this.isLoading = false;
            })
        },

        closeHeadTag() {
            this.$router.push({ name: 'store' })
        }
    }
}
</script>

<style></style>