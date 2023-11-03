<template>
    <li id="AddBlock-sections--21449318957373__announcement-bar"
        class="store-ul-navitem Online-Store-UI-NavItem--nested_7zt26" tabindex="-1">
        <div class="store-ul-navitem__interior store-ul-navitem--interactive">
            <button @click="addAnnouncement" type="button" class="store-ul-navitem__primary-action" 
                aria-labelledby="AddBlock-sections--21449318957373__announcement-bar-label">
            </button>

            <span class="store-ul-navitem__title-content store-ul-navitem--label-alignment-prefix">
                <span class="store-ul-navitem--title-prefix">
                    <span class="comp-icon">
                        <span class="comp-text--root comp-text--visually-hidden"></span>
                        <svg viewBox="0 0 20 20" class="comp-icon__svg" focusable="false" aria-hidden="true">
                            <path
                                d="M6.25 10a.75.75 0 0 1 .75-.75h2.25v-2.25a.75.75 0 0 1 1.5 0v2.25h2.25a.75.75 0 0 1 0 1.5h-2.25v2.25a.75.75 0 0 1-1.5 0v-2.25h-2.25a.75.75 0 0 1-.75-.75Z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M10 17a7 7 0 1 0 0-14 7 7 0 0 0 0 14Zm0-1.5a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z">
                            </path>
                        </svg>
                    </span>
                </span>
                
                <span class="store-ul-navitem--title"
                    id="AddBlock-sections--21449318957373__announcement-bar-label">
                    <span class="comp-text--root comp-text--body comp-text--medium comp-text--block comp-text--truncate">
                        Add Announcement
                    </span>
                </span>
            </span>
        </div>
    </li>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
export default {
    name: 'AddAnnouncementBtn',

    props: {
        announcement_bar: {
            type: Array,
            required: true,
        }
    },

    data() {
        return {
            isLoading: false,
            errorMsg: null,
        }
    },

    methods: {
        ...mapActions({
            reloadComponents: 'components/get',
        }),

        addAnnouncement() {
            this.isLoading = true

            axios.post(`/stores/theme/components/announcement-bar/announcement-block/create`, {
                component_id: this.announcement_bar.id,
                text: 'Welcome to our store',
                position: this.announcement_bar.blocks ? this.announcement_bar.blocks.length : 0,
            })
            .then(response => {
                this.reloadComponents({ theme: this.$store.getters['theme/theme'].slug });
            })
            .catch(error => {
                console.log(error.response.data)
                this.errorMsg = error.response.data.message
            })
            .finally(() => {
                this.isLoading = false
            })
        }
    }
}
</script>

<style></style>