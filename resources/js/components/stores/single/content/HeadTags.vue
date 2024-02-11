<template>
    <div class="container">
        <div class="sticky-top">
            <nav class="small">
                <ol class="breadcrumb pb-0">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'store' }">Menu</router-link>
                    </li>
                    <li class="breadcrumb-item active">Tags</li>
                </ol>
            </nav>
        </div>

        <component v-if="active_tag" :is="active_tag" :head_tag="head_tag" :is_editing="editing_tag" @closeTag="active_tag = null" @tagAdded="fetchHeadTags" @tagUpdated="fetchHeadTags" />
        <div v-else class="mt-3">
            <h3>Tag Management</h3>
            <div class="row">
                <div class="col-12">
                    <div data-spy="scroll" data-target="#navbar-scroll" class="">
                        <form autocomplete="on" class="col-12 p-0"><!----><!---->
                            <div class="card p-3">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0">Google Tag Manager</h5>
                                        <i class="fas fa-question-circle text-light ml-2"></i>
                                    </div>
                                    <span class="badge badge-success">Recommended</span>
                                </div>

                                <div>
                                    <fieldset class="form-group" id="__BVID__309">
                                        <!---->
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <label>Google Tag Manager ID</label>
                                                    <a target="_blank" hide-title="true">
                                                        <i class="fas fa-question-circle text-light ml-2 fa-fw"></i>
                                                    </a>
                                                </div>
                                                <label class="text-muted small">optional</label>
                                            </div>

                                            <div role="group" class="input-group"><!----><!----> 
                                                <input
                                                    v-model="head_tag.gtm_id"
                                                    name="Google Tag Manager ID" type="text" placeholder="GTM-XXXXXXX"
                                                    autocomplete="on" class="form-control" maxlength="255"
                                                    onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                    data-hj-allow="" data-mask="" data-previous-value="" id="__BVID__311">
                                                <!---->
                                            </div>
                                            <!---->
                                            <div class="invalid-feedback d-block">

                                            </div>
                                            <!----><!----><!---->
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="mt-5 card p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0">Head Tags</h5>
                                        <i class="fas fa-question-circle text-light ml-2"></i>
                                    </div>

                                    <div>
                                        <button type="button" data-toggle="dropdown" class="btn btn-light dropdown-toggle">Add Tag</button>
                                        <div class="dropdown-menu">
                                            <a @click="addTag('Meta')" class="dropdown-item"><span>meta</span></a>
                                            <a @click="addTag('Link')" class="dropdown-item"><span>link</span></a>
                                            <a @click="addTag('Script')" class="dropdown-item"><span>script</span></a>
                                            <a @click="addTag('NoScript')" class="dropdown-item"><span>noscript</span></a>
                                            <a @click="addTag('Style')" class="dropdown-item"><span>style</span></a>
                                            <a @click="addTag('Title')" class="dropdown-item"><span>title</span></a>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-group my-3">
                                    <li v-for="(tag, index) in all_tags" :key="index" class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="small">{{ tag.tag_type }}</div>
                                            <a @click="editTag(tag.id, tag.tag_type)">
                                                <span>{{ tag.description }}</span>
                                            </a>
                                        </div>
                                        <div v-if="!tag.is_bootstrap">
                                            <a @click="deleteTag(tag.id, tag.tag_type)" class="dropdown-item">
                                                <span><i class="far fa-trash"></i></span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="form-inline bg-white py-3 border-top" style="position: sticky; bottom: 0px; z-index: 49;"><!---->
                                <button type="submit" class="btn btn-primary" style="bottom: 0px; z-index: 49;">
                                    <i v-if="isLoading" class="fas fa-spinner fa-spin"></i>
                                    <i v-else class="fas fa-save"></i> 
                                    Save Tags
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
import axios from 'axios';
import { mapState, mapGetters, mapActions } from 'vuex';

import AddMetaTag from './headtags/AddMetaTag.vue'
import AddLinkTag from './headtags/AddLinkTag.vue'
import AddScriptTag from './headtags/AddScriptTag.vue'
import AddNoScriptTag from './headtags/AddNoScriptTag.vue'
import AddStyleTag from './headtags/AddStyleTag.vue'
import AddTitleTag from './headtags/AddTitleTag.vue'

export default {
    name: 'HeadTags',

    components: {
        AddMetaTag, AddLinkTag, AddScriptTag, AddNoScriptTag, AddStyleTag, AddTitleTag
    },

    data() {
        return {
            isLoading: false,
            validationErrors: {},
            active_tag: null,
            editing_tag: {},

            head_tag: {
                gtm_id: '',
                meta_tags: [],
                link_tags: [],
                script_tags: [],
                no_script_tags: [],
                style_tags: [],
                title_tags: []
            }
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        }),

        all_tags() {
            // return tags that are not empty
            let tags = []
            
            if (this.head_tag.meta_tags.length > 0) {
                tags = tags.concat(this.head_tag.meta_tags)
            }

            if (this.head_tag.link_tags.length > 0) {
                tags = tags.concat(this.head_tag.link_tags)
            }

            if (this.head_tag.script_tags.length > 0) {
                tags = tags.concat(this.head_tag.script_tags)
            }

            if (this.head_tag.no_script_tags.length > 0) {
                tags = tags.concat(this.head_tag.no_script_tags)
            }

            if (this.head_tag.style_tags.length > 0) {
                tags = tags.concat(this.head_tag.style_tags)
            }

            if (this.head_tag.title_tags.length > 0) {
                tags = tags.concat(this.head_tag.title_tags)
            }

            return tags
        },
    },

    created() {
        this.fetchHeadTags()
    },

    methods: {
        fetchHeadTags() {
            this.isLoading = true;

            axios.get('/stores/head-tags', {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.head_tag = response.data.head_tag
            })
            .catch(error => console.log(error))
            .finally(() => this.isLoading = false)
        },

        addTag(tag_type) {
            this.active_tag = 'Add' + tag_type + 'Tag'
        },

        editTag(tag_id, tag_type) {
            let tag = this.all_tags.find(tag => tag.id == tag_id && tag.tag_type == tag_type)

            if (!tag) return

            this.editing_tag = tag
            this.active_tag = 'Add' + tag.tag_type + 'Tag'
        },

        deleteTag(tag_id, tag_type) {
            let tag = this.all_tags.find(tag => tag.id == tag_id && tag.tag_type == tag_type)

            if (!tag) return
            if (!confirm('Are you sure you want to delete this tag?')) return
            
            axios.delete('/stores/head-tags/' + tag.tag_type + '/' + tag_id, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            })
            .then(response => {
                this.fetchHeadTags()
            })
            .catch(error => {
                this.validationErrors = error.response.data.errors;
            })
        },

        closeHeadTag() {
            this.$router.push({ name: 'store' })
        }
    }
}
</script>

<style></style>