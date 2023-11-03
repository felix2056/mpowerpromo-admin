<template>
    <li :id="'sections--' + announcement_bar.id + '__announcement-bar'" class="store-ul-navitem" tabindex="-1">
        <div class="store-ul-navitem__interior store-ul-navitem--fleeting">
            <button @click="selectComponent" type="button"
                class="store-ul-navitem__primary-action"
                :aria-labelledby="'sections--' + announcement_bar.id + '__announcement-bar-label'">
            </button>
            <span class="store-ul-navitem__prefix">
                <div class="store-ul-disclosure store-ul-disclosure--expanded">
                    <button type="button"
                        class="store-ul-disclosure__action"
                        aria-label="Open sub items menu"
                        data-toggle="collapse"
                        :data-target="'#Collapsible-sections--' + announcement_bar.id + '__announcement-bar'"
                        :aria-controls="'Collapsible-sections--' + announcement_bar.id + '__announcement-bar'">
                        <div class="store-ul-disclosure__icon">
                            <svg viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.72 8.47a.75.75 0 0 1 1.06 0l3.47 3.47 3.47-3.47a.75.75 0 1 1 1.06 1.06l-4 4a.75.75 0 0 1-1.06 0l-4-4a.75.75 0 0 1 0-1.06Z">
                                </path>
                            </svg>
                        </div>
                    </button>
                </div>
            </span>

            <span
                class="store-ul-navitem__title-content store-ul-navitem--item-has-prefix store-ul-navitem--label-alignment-none">
                <span class="store-ul-navitem--title-prefix">
                    <div class="store-ul-resource-thumbnail store-ul-resource-thumbnail--type-icon">
                        <span class="comp-icon comp-icon--color-base comp-icon--apply-color">
                            <span class="comp-text--root comp-text--visually-hidden"></span>
                            <svg viewBox="0 0 20 20" class="comp-icon__svg" focusable="false" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M3.5 5.25c0-.966.784-1.75 1.75-1.75h9.5c.966 0 1.75.784 1.75 1.75v1.5a1.75 1.75 0 0 1-1.75 1.75h-9.5a1.75 1.75 0 0 1-1.75-1.75v-1.5Zm1.75-.25a.25.25 0 0 0-.25.25v1.5c0 .138.112.25.25.25h9.5a.25.25 0 0 0 .25-.25v-1.5a.25.25 0 0 0-.25-.25h-9.5Z">
                                </path>
                                <path
                                    d="M3.5 11.25c0-.966.784-1.75 1.75-1.75h.5a.75.75 0 0 1 0 1.5h-.5a.25.25 0 0 0-.25.25v.5a.75.75 0 0 1-1.5 0v-.5Z">
                                </path>
                                <path
                                    d="M3.5 14.75c0 .966.784 1.75 1.75 1.75h.5a.75.75 0 0 0 0-1.5h-.5a.25.25 0 0 1-.25-.25v-.5a.75.75 0 0 0-1.5 0v.5Z">
                                </path>
                                <path
                                    d="M14.75 9.5c.966 0 1.75.784 1.75 1.75v.5a.75.75 0 0 1-1.5 0v-.5a.25.25 0 0 0-.25-.25h-.5a.75.75 0 0 1 0-1.5h.5Z">
                                </path>
                                <path
                                    d="M14.75 16.5a1.75 1.75 0 0 0 1.75-1.75v-.5a.75.75 0 0 0-1.5 0v.5a.25.25 0 0 1-.25.25h-.5a.75.75 0 0 0 0 1.5h.5Z">
                                </path>
                                <path d="M11.75 10.25a.75.75 0 0 1-.75.75h-2a.75.75 0 0 1 0-1.5h2a.75.75 0 0 1 .75.75Z">
                                </path>
                                <path d="M11 16.5a.75.75 0 0 0 0-1.5h-2a.75.75 0 0 0 0 1.5h2Z">
                                </path>
                            </svg>
                        </span>
                    </div>
                </span>

                <span class="store-ul-navitem--title" :id="'sections--' + announcement_bar.id + '__announcement-bar-label'">
                    <span class="comp-text--root comp-text--body comp-text--medium comp-text--block comp-text--truncate">
                        Announcement bar
                    </span>
                </span>
            </span>

            <span class="store-ul-navitem__suffix">
                <div class="oO_ta">
                    <button
                        class="store-ul-plain-action store-ul-plain-action--font-size-body store-ul-plain-action--slim store-ul-plain-action--icon-only"
                        aria-label="Remove section" aria-disabled="false" type="button">
                        <div class="store-ul-plain-action__interior">
                            <div class="store-ul-plain-action__prefix">
                                <span class="comp-icon">
                                    <span class="comp-text--root comp-text--visually-hidden"></span>
                                    <svg viewBox="0 0 20 20" class="comp-icon__svg" focusable="false" aria-hidden="true">
                                        <path
                                            d="M11.5 8.25a.75.75 0 0 1 .75.75v4.25a.75.75 0 0 1-1.5 0v-4.25a.75.75 0 0 1 .75-.75Z">
                                        </path>
                                        <path d="M9.25 9a.75.75 0 0 0-1.5 0v4.25a.75.75 0 0 0 1.5 0v-4.25Z">
                                        </path>
                                        <path fill-rule="evenodd"
                                            d="M7.25 5.25a2.75 2.75 0 0 1 5.5 0h3a.75.75 0 0 1 0 1.5h-.75v5.45c0 1.68 0 2.52-.327 3.162a3 3 0 0 1-1.311 1.311c-.642.327-1.482.327-3.162.327h-.4c-1.68 0-2.52 0-3.162-.327a3 3 0 0 1-1.311-1.311c-.327-.642-.327-1.482-.327-3.162v-5.45h-.75a.75.75 0 0 1 0-1.5h3Zm1.5 0a1.25 1.25 0 1 1 2.5 0h-2.5Zm-2.25 1.5h7v5.45c0 .865-.001 1.423-.036 1.848-.033.408-.09.559-.128.633a1.5 1.5 0 0 1-.655.655c-.074.038-.225.095-.633.128-.425.035-.983.036-1.848.036h-.4c-.865 0-1.423-.001-1.848-.036-.408-.033-.559-.09-.633-.128a1.5 1.5 0 0 1-.656-.655c-.037-.074-.094-.225-.127-.633-.035-.425-.036-.983-.036-1.848v-5.45Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="oO_ta">
                    <button
                        class="store-ul-plain-action store-ul-plain-action--font-size-body store-ul-plain-action--slim store-ul-plain-action--icon-only"
                        aria-label="Hide section" aria-disabled="false" type="button" aria-pressed="false">

                        <div class="store-ul-plain-action__interior">
                            <div class="store-ul-plain-action__prefix">
                                <span class="comp-icon">
                                    <span class="comp-text--root comp-text--visually-hidden"></span>
                                    <svg viewBox="0 0 20 20" class="comp-icon__svg" focusable="false" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M13 10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-1.5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z">
                                        </path>
                                        <path fill-rule="evenodd"
                                            d="M10 4c-2.476 0-4.348 1.23-5.577 2.532a9.266 9.266 0 0 0-1.4 1.922 5.98 5.98 0 0 0-.37.818c-.082.227-.153.488-.153.728s.071.501.152.728c.088.246.213.524.371.818.317.587.784 1.27 1.4 1.922 1.229 1.302 3.1 2.532 5.577 2.532 2.476 0 4.348-1.23 5.577-2.532a9.265 9.265 0 0 0 1.4-1.922 5.98 5.98 0 0 0 .37-.818c.082-.227.153-.488.153-.728s-.071-.501-.152-.728a5.984 5.984 0 0 0-.371-.818 9.269 9.269 0 0 0-1.4-1.922c-1.229-1.302-3.1-2.532-5.577-2.532Zm-5.999 6.002v-.004c.004-.02.017-.09.064-.223a4.5 4.5 0 0 1 .278-.608 7.768 7.768 0 0 1 1.17-1.605c1.042-1.104 2.545-2.062 4.487-2.062 1.942 0 3.445.958 4.486 2.062a7.77 7.77 0 0 1 1.17 1.605c.13.24.221.447.279.608.047.132.06.203.064.223v.004c-.004.02-.017.09-.064.223a4.503 4.503 0 0 1-.278.608 7.768 7.768 0 0 1-1.17 1.605c-1.042 1.104-2.545 2.062-4.487 2.062-1.942 0-3.445-.958-4.486-2.062a7.766 7.766 0 0 1-1.17-1.605 4.5 4.5 0 0 1-.279-.608c-.047-.132-.06-.203-.064-.223Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="store-ul-drag-handle__container">
                    <button type="button" class="store-ul-drag-handle"
                        aria-label="Re-arrange Announcement bar's order within the list" aria-describedby="DndDescribedBy-4"
                        aria-roledescription="sortable" aria-pressed="false">
                        <div class="store-ul-drag-handle__icon-wrapper">
                            <svg viewBox="0 0 20 20">
                                <path d="M6.75 3.5a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Z">
                                </path>
                                <path d="M6.75 8.5a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Z">
                                </path>
                                <path d="M5.75 14.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1Z">
                                </path>
                                <path d="M12.25 3.5a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Z">
                                </path>
                                <path d="M11.25 9.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1Z">
                                </path>
                                <path d="M12.25 13.5a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Z">
                                </path>
                            </svg>
                        </div>
                    </button>
                </div>
            </span>
        </div>
        <div :id="'Collapsible-sections--' + announcement_bar.id + '__announcement-bar'" aria-hidden="false">
            <ol class="store-ul-sortablelist store-ul-sortable-list--left-alignment-with-icon" role="list">
                <announcement-block v-for="block in announcement_bar.blocks" :key="block.id" :block="block"></announcement-block>
                
                <add-announcement-btn :announcement_bar="announcement_bar"></add-announcement-btn>
            </ol>
        </div>
    </li>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';

import AnnouncementBlock from './Blocks.vue'
import AddAnnouncementBtn from './AddBtn.vue';

export default {
    props: {
        announcement_bar: {
            type: Array,
            required: true
        }
    },

    components: {
        AnnouncementBlock,
        AddAnnouncementBtn
    },

    computed: {
        ...mapState({
            shouldShowSidebarEditorStage1: state => state.theme.shouldShowSidebarEditorStage1,
            shouldShowSidebarEditorStage2: state => state.theme.shouldShowSidebarEditorStage2,
            shouldShowSidebarEditorStage3: state => state.theme.shouldShowSidebarEditorStage3,
        }),
    },

    methods: {
        ...mapActions({
            showSidebarEditor: 'theme/showSidebarEditor',
            setSelectComponent: 'components/selectComponent',
            setSelectBlock: 'components/selectBlock',
        }),

        async selectComponent() {
            let selectComponent = await this.setSelectComponent({
                id: this.announcement_bar.id,
                type: 'announcement-bar',
            });
            
            await this.setSelectBlock({
                id: null,
                type: null,
            });

            // activate sidebar editor stage 2
            if (selectComponent) this.showSidebarEditor('stage2');
        },
    }
}
</script>

<style>
.store-ul-disclosure__action[aria-expanded="true"] .store-ul-disclosure__icon {
    transform: rotate(360deg);
}

.store-ul-disclosure__icon {
    transition: transform 0.2s ease-in-out;
    transform: rotate(270deg);
}
</style>