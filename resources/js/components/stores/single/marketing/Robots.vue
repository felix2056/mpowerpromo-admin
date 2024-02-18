<template>
    <div id="store-menu-view" class="container">
        <div class="pb-3">
            <nav class="small">
                <ol class="breadcrumb pb-0">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'store' }">Menu</router-link>
                    </li>
                    <li class="breadcrumb-item active">Robots</li>
                </ol>
            </nav>
        </div>
        <div>
            <h3>Robots.txt</h3>
            <p>
                A robots.txt file tells search engine crawlers which URLs the crawler can access on your site. See
                <a href="https://developers.google.com/search/docs/crawling-indexing/robots/intro"
                    target="_blank">Introduction to robots.txt</a>
                for more information.
            </p>

            <div>
                <fieldset class="form-group" id="__BVID__1170"><!---->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <label>Path</label> 
                                <!---->
                            </div>
                            <!---->
                        </div>
                        <div role="group" class="input-group">
                            <input v-model="robots.path" name="Path" type="text" autocomplete="on" class="form-control" maxlength="255">
                        </div>

                        <div v-if="validationErrors.path" class="invalid-feedback d-block">
                            {{ validationErrors.path[0] }}
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="vue-codemirror">
                <Codemirror v-model:value="robots.content" />
                <div v-if="validationErrors.content" class="invalid-feedback d-block">
                    {{ validationErrors.content[0] }}
                </div>
            </div>

            <div class="mt-3">
                <a :href="robots.link" target="_blank">View robots.txt</a>
            </div>

            <div class="my-3">
                <button @click="saveRobots" type="button" class="btn btn-primary mr-2">
                    <i v-if="isLoading" class="fa fa-spinner fa-spin"></i>
                    Save Robots.txt
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';

export default {
    data() {
        return {
            isLoading: false,
            validationErrors: {},

            robots: {
                path: '',
                content: '',
                filename: '',
                link: ''
            }
        };
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        })
    },

    created() {
        this.getRobots();
    },

    methods: {
        async getRobots() {
            this.isLoading = true;

            axios.get('/stores/robots', {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.robots = response.data.robots;
            })
            .catch(error => {
                console.log(error);
            })
            .finally(() => {
                this.isLoading = false;
            });
        },

        async saveRobots() {
            this.isLoading = true;

            axios.post('/stores/robots/create', this.robots, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.validationErrors = {};
                this.closeHeadTag();
            })
            .catch(error => {
                if (error.response.status === 422) {
                    this.validationErrors = error.response.data.errors;
                }
            })
            .finally(() => {
                this.isLoading = false;
            });
        },

        closeHeadTag() {
            this.$router.push({ name: 'store' })
        }
    },
}
</script>

<style></style>