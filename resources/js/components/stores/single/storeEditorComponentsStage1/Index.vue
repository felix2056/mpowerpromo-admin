<template>
    <div id="menu" class="p-3">
        <div class="component-picker mb-4">
            <div class="layout-children-wrapper">
                <section
                    class="layout-section layout-section--spacing-tight layout--padding-extra-tight">
                    <div class="layout-children-wrapper">
                        <div class="vKe1i">
                            <h3 class="comp-text--root comp-text--heading-sm">Header</h3>
                        </div>
                    </div>
                </section>

                <section class="layout-section layout-section--spacing-default layout--padding-extra-tight">
                    <div class="layout-children-wrapper">
                        <div class="comp-box" style="--pc-box-padding-block-end-sm: 0.5rem;">
                            <ol class="store-ul-sortablelist store-ul-sortablelist--left-alignment-none"
                                role="list">
                                <div v-if="components.announcement_bar" class="announcement_bar">
                                    <announcement-bar
                                        :theme="theme"
                                        :announcement_bar="components.announcement_bar">
                                    </announcement-bar>
                                </div>

                                <header-component></header-component>

                                <li id="AddSection-index-header-group" class="store-ul-navitem" tabindex="-1">
                                    <div class="store-ul-navitem__interior store-ul-navitem--interactive">
                                        <button type="button" class="store-ul-navitem__primary-action"
                                            aria-labelledby="AddSection-index-header-group-label" aria-haspopup="dialog"
                                            aria-expanded="false">
                                        </button>
                                        <span class="store-ul-navitem__title-content store-ul-navitem--label-alignment-prefix">
                                            <span class="store-ul-navitem--title-prefix">
                                                <span class="comp-icon">
                                                    <span class="comp-text--root comp-text--visually-hidden"></span>
                                                    <svg
                                                        viewBox="0 0 20 20" class="comp-icon__svg"
                                                        focusable="false" aria-hidden="true">
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
                                                id="AddSection-index-header-group-label">
                                                <span class="comp-text--root comp-text--body comp-text--medium comp-text--block comp-text--truncate">
                                                    Add section
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';

import AnouncementBar from './AnnouncementBar/Index.vue';
import HeaderComponent from './Header/Index.vue';

export default {
    name: 'ComponentPicker',

    components: {
        'announcement-bar': AnouncementBar,
        'header-component': HeaderComponent,
    },

    data() {
        return {
            isLoading: false,
            errorMsg: null,
            validationErrors: {},
            selectedComponent: null,
        }
    },

    computed: {
        ...mapGetters({
            theme: 'theme/theme',
            components: 'components/components',
        })
    },

    created() {
        this.fetchTheme();
    },

    methods: {
        ...mapActions({
            getTheme: 'theme/get',
            getComponents: 'components/get',
        }),

        async fetchTheme() {
            try {
                this.isLoading = true;

                // get theme
                await this.getTheme({
                    store: this.$route.params.slug,
                });

                // get theme components
                await this.getComponents({
                    theme: this.theme.slug
                });
            } catch (error) {
                console.log(error)
            } finally {
                this.isLoading = false
            }
        },

        selectComponent(component) {
            this.selectedComponent = component;
        },
    }
}
</script>

<style >
    html.comp-summer-editons-2023 {
        --p-border-radius-0: 0;
        --p-border-radius-050: 0.125rem;
        --p-border-radius-100: 0.25rem;
        --p-border-radius-150: 0.375rem;
        --p-border-radius-200: 0.5rem;
        --p-border-radius-300: 0.75rem;
        --p-border-radius-400: 1rem;
        --p-border-radius-500: 1.25rem;
        --p-border-radius-750: 1.875rem;
        --p-border-width-0165: 0.04125rem;
        --p-border-width-025: 0.0625rem;
        --p-border-width-050: 0.125rem;
        --p-border-width-100: 0.25rem;
        --p-color-bg-surface: #fff;
        --p-color-bg-surface-secondary: #f7f7f7;
        --p-color-bg-surface-secondary-hover: #f1f1f1;
        --p-color-bg-surface-secondary-active: #ebebeb;
        --p-color-bg-surface-tertiary: #f3f3f3;
        --p-color-bg-fill-tertiary: #e3e3e3;
        --p-color-bg-fill-tertiary-hover: #d4d4d4;
        --p-color-bg-fill-tertiary-active: #ccc;
        --p-color-input-bg-surface: #fdfdfd;
        --p-color-input-bg-surface-hover: #fafafa;
        --p-color-input-bg-surface-active: #f7f7f7;
        --p-color-bg-surface-selected: #fafafa;
        --p-color-bg-fill-success: #29845a;
        --p-color-bg-fill-success-hover: #136f45;
        --p-color-bg-fill-success-active: #0c5132;
        --p-color-bg-fill-success-secondary: #cdfee1;
        --p-color-bg-surface-success: #cdfee1;
        --p-color-bg-surface-success-hover: #b4fed2;
        --p-color-bg-surface-success-active: #92fec2;
        --p-color-bg-fill-critical: #e51c00;
        --p-color-bg-fill-critical-hover: #b5260b;
        --p-color-bg-fill-critical-active: #8e1f0b;
        --p-color-bg-fill-critical-secondary: #fedad9;
        --p-color-bg-surface-critical: #fee9e8;
        --p-color-bg-surface-critical-hover: #fee2e1;
        --p-color-bg-surface-critical-active: #fedad9;
        --p-color-bg-fill-caution: #ffe600;
        --p-color-bg-fill-caution-secondary: #ffef9d;
        --p-color-bg-surface-caution: #fff8db;
        --p-color-bg-surface-caution-hover: #fff4bf;
        --p-color-bg-surface-caution-active: #ffef9d;
        --p-color-bg-fill-info: #91d0ff;
        --p-color-bg-fill-info-secondary: #e0f0ff;
        --p-color-bg-surface-info: #eaf4ff;
        --p-color-bg-surface-info-hover: #e0f0ff;
        --p-color-bg-surface-info-active: #cae6ff;
        --p-color-bg-fill-warning: #ffb800;
        --p-color-bg-fill-warning-secondary: #ffd6a4;
        --p-color-bg-surface-warning: #fff1e3;
        --p-color-bg-fill-magic: #8051ff;
        --p-color-bg-fill-magic-secondary: #e4deff;
        --p-color-bg-fill-magic-secondary-hover: #dfd9ff;
        --p-color-bg-fill-magic-secondary-active: #d4ccff;
        --p-color-bg-surface-magic-hover: #efecff;
        --p-color-bg-fill-secondary: #f1f1f1;
        --p-color-bg-fill-inverse: #303030;
        --p-color-bg-fill-inverse-hover: #4a4a4a;
        --p-color-bg-fill-inverse-active: #616161;
        --p-color-bg-surface-transparent: #0000;
        --p-color-bg-fill-transparent-hover: #0000000d;
        --p-color-bg-fill-transparent-active: #0000000f;
        --p-color-bg-fill-disabled: #0000000d;
        --p-color-bg-fill-transparent-secondary: #0000000f;
        --p-color-bg-fill-brand-disabled: #0000002b;
        --p-color-backdrop-bg: #000000b5;
        --p-color-avatar-bg-fill: #b5b5b5;
        --p-color-avatar-one-bg-fill: #fbcffb;
        --p-color-avatar-two-bg-fill: #38faa3;
        --p-color-avatar-three-bg-fill: #92edde;
        --p-color-avatar-four-bg-fill: #c0e1ff;
        --p-color-avatar-five-bg-fill: #fed1dd;
        --p-color-text-secondary: #616161;
        --p-color-text-emphasis: #005bd3;
        --p-color-text-emphasis-hover: #004299;
        --p-color-text-emphasis-active: #002e6a;
        --p-color-text-brand: #4a4a4a;
        --p-color-text-brand-hover: #303030;
        --p-color-text-info-on-bg-fill: #002133;
        --p-color-text-inverse-secondary: #b5b5b5;
        --p-color-avatar-text-on-bg-fill: #fff;
        --p-color-avatar-one-text-on-bg-fill: #791a79;
        --p-color-avatar-two-text-on-bg-fill: #0c5132;
        --p-color-avatar-three-text-on-bg-fill: #095346;
        --p-color-avatar-four-text-on-bg-fill: #00527c;
        --p-color-avatar-five-text-on-bg-fill: #8d0448;
        --p-color-icon-secondary: #8a8a8a;
        --p-color-icon-emphasis: #005bd3;
        --p-color-icon-emphasis-hover: #004299;
        --p-color-icon-emphasis-active: #002e6a;
        --p-color-icon-brand: #1a1a1a;
        --p-color-border-secondary: #ebebeb;
        --p-color-input-border: #8a8a8a;
        --p-color-input-border-hover: #616161;
        --p-color-input-border-active: #1a1a1a;
        --p-color-border-emphasis-hover: #004299;
        --p-color-border-emphasis-active: #002e6a;
        --p-color-border-focus: #005bd3;
        --p-color-border-brand: #e3e3e3;
        --p-color-border-critical-secondary: #8e1f0b;
        --p-color-border-magic-secondary: #8051ff;
        --p-color-bg-inverse: #1a1a1a;
        --p-color-bg-inset-strong: #303030;
        --p-color-bg-inverse-hover: #4a4a4a;
        --p-color-bg-inverse-active: #616161;
        --p-color-bg-strong-hover: #d4d4d4;
        --p-color-bg-strong-active: #ccc;
        --p-color-bg-strong: #e3e3e3;
        --p-color-bg-subdued-active: #ebebeb;
        --p-color-bg-disabled: #ebebeb;
        --p-color-bg-interactive-disabled: #ebebeb;
        --p-color-bg-app: #f1f1f1;
        --p-color-bg-app-hover: #fdfdfd;
        --p-color-bg-app-selected: #fafafa;
        --p-color-bg-active: #f7f7f7;
        --p-color-bg-subdued-hover: #f1f1f1;
        --p-color-bg-inset: #f1f1f1;
        --p-color-bg-hover: #fafafa;
        --p-color-bg-subdued: #f7f7f7;
        --p-color-bg-input: #fff;
        --p-color-bg: #fff;
        --p-color-bg-primary-active: #1a1a1a;
        --p-color-bg-primary-hover: #1a1a1a;
        --p-color-bg-primary: #303030;
        --p-color-bg-success-strong: #29845a;
        --p-color-bg-success: #cdfee1;
        --p-color-bg-primary-subdued-active: #f1f1f1;
        --p-color-bg-success-subdued: #cdfee1;
        --p-color-bg-primary-subdued-hover: #ebebeb;
        --p-color-bg-success-subdued-hover: #92fec2;
        --p-color-bg-primary-subdued: #e3e3e3;
        --p-color-bg-primary-subdued-selected: #f1f1f1;
        --p-color-bg-critical-strong-active: #8e1f0b;
        --p-color-bg-critical-strong-hover: #b5260b;
        --p-color-bg-critical-strong: #e51c00;
        --p-color-bg-critical-subdued-active: #fedad9;
        --p-color-bg-critical: #fedad9;
        --p-color-bg-critical-subdued: #fee9e8;
        --p-color-bg-critical-subdued-hover: #fee2e1;
        --p-color-bg-caution-strong: #ffe600;
        --p-color-bg-caution: #ffef9d;
        --p-color-bg-caution-subdued-active: #ffef9d;
        --p-color-bg-caution-subdued: #fff8db;
        --p-color-bg-caution-subdued-hover: #fff4bf;
        --p-color-bg-info-strong: #91d0ff;
        --p-color-bg-info-subdued-active: #cae6ff;
        --p-color-bg-info: #e0f0ff;
        --p-color-bg-info-subdued: #eaf4ff;
        --p-color-bg-info-subdued-hover: #e0f0ff;
        --p-color-bg-interactive-active: #4a4a4a;
        --p-color-bg-interactive-hover: #303030;
        --p-color-bg-interactive: #1a1a1a;
        --p-color-bg-interactive-subdued-active: #f1f1f1;
        --p-color-bg-interactive-subdued-hover: #ebebeb;
        --p-color-bg-interactive-subdued: #e3e3e3;
        --p-color-bg-interactive-selected: #f1f1f1;
        --p-color-bg-warning: #ffd6a4;
        --p-color-bg-magic-strong: #8051ff;
        --p-color-bg-magic-hover: #dfd9ff;
        --p-color-bg-magic-active: #d4ccff;
        --p-color-bg-magic: #e4deff;
        --p-color-bg-magic-subdued-hover: #efecff;
        --p-color-bg-magic-subdued-active: #e4deff;
        --p-color-bg-magic-subdued: #f3f1ff;
        --p-color-border-input-hover: #616161;
        --p-color-border-inverse: #616161;
        --p-color-border-strong-hover: #b5b5b5;
        --p-color-border-input: #8a8a8a;
        --p-color-border-hover: #ccc;
        --p-color-border-strong: #ccc;
        --p-color-border: #e3e3e3;
        --p-color-border-disabled: #ebebeb;
        --p-color-border-subdued: #ebebeb;
        --p-color-border-interactive-disabled: #ebebeb;
        --p-color-border-primary: #e3e3e3;
        --p-color-border-success: #92fec2;
        --p-color-border-success-subdued: #92fec2;
        --p-color-border-critical-active: #ef4d2f;
        --p-color-border-critical-hover: #fd817a;
        --p-color-border-critical: #fdb0ac;
        --p-color-border-critical-subdued: #fdb0ac;
        --p-color-border-caution: #ffeb78;
        --p-color-border-caution-subdued: #ffeb78;
        --p-color-border-info: #91d0ff;
        --p-color-border-info-subdued: #91d0ff;
        --p-color-border-interactive-active: #002e6a;
        --p-color-border-interactive-hover: #004299;
        --p-color-border-interactive: #005bd3;
        --p-color-border-interactive-focus: #005bd3;
        --p-color-border-interactive-subdued: #005bd3;
        --p-color-border-magic-strong: #8051ff;
        --p-color-border-magic: #aa95ff;
        --p-color-icon-hover: #303030;
        --p-color-icon: #4a4a4a;
        --p-color-icon-subdued: #8a8a8a;
        --p-color-icon-disabled: #ccc;
        --p-color-icon-interactive-disabled: #ccc;
        --p-color-icon-inverse: #e3e3e3;
        --p-color-icon-on-color: #fff;
        --p-color-icon-primary: #1a1a1a;
        --p-color-icon-success: #29845a;
        --p-color-icon-critical: #ef4d2f;
        --p-color-icon-caution: #998a00;
        --p-color-icon-info: #0094d5;
        --p-color-icon-warning: #b28400;
        --p-color-icon-interactive-active: #002e6a;
        --p-color-icon-interactive-hover: #004299;
        --p-color-icon-interactive: #005bd3;
        --p-color-icon-interactive-inverse: #c5d0ff;
        --p-color-icon-magic: #7126ff;
        --p-color-text: #303030;
        --p-color-text-subdued: #616161;
        --p-color-text-disabled: #b5b5b5;
        --p-color-text-interactive-disabled: #ccc;
        --p-color-text-inverse-subdued: #ccc;
        --p-color-text-inverse: #e3e3e3;
        --p-color-text-on-color: #fff;
        --p-color-text-success-strong: #083d25;
        --p-color-text-success: #083d25;
        --p-color-text-primary: #4a4a4a;
        --p-color-text-primary-hover: #4a4a4a;
        --p-color-text-critical-strong: #8e1f0b;
        --p-color-text-critical-active: #2f0a04;
        --p-color-text-critical: #8e1f0b;
        --p-color-text-caution-strong: #332e00;
        --p-color-text-caution: #332e00;
        --p-color-text-info-strong: #002133;
        --p-color-text-info: #00527c;
        --p-color-text-warning-strong: #251a00;
        --p-color-text-interactive-active: #002e6a;
        --p-color-text-interactive-hover: #004299;
        --p-color-text-interactive: #005bd3;
        --p-color-text-interactive-inverse: #c5d0ff;
        --p-color-text-magic-strong: #3b0093;
        --p-color-text-magic: #5700d1;
        --p-font-size-275: 0.6875rem;
        --p-font-size-325: 0.8125rem;
        --p-font-size-350: 0.875rem;
        --p-font-size-750: 1.875rem;
        --p-font-size-900: 2.25rem;
        --p-font-size-1000: 2.5rem;
        --p-font-line-height-300: 0.75rem;
        --p-font-line-height-400: 1rem;
        --p-font-line-height-500: 1.25rem;
        --p-font-line-height-600: 1.5rem;
        --p-font-line-height-700: 1.75rem;
        --p-font-line-height-800: 2rem;
        --p-font-line-height-1000: 2.5rem;
        --p-font-line-height-1200: 3rem;
        --p-font-family-sans: "Inter",-apple-system,BlinkMacSystemFont,"San Francisco","Segoe UI",Roboto,"Helvetica Neue",sans-serif;
        --p-font-size-500: 1.875rem;
        --p-font-size-600: 2.25rem;
        --p-motion-ease-out: cubic-bezier(0.19,0.91,0.38,1);
        --p-space-050: 0.125rem;
        --p-space-100: 0.25rem;
        --p-space-150: 0.375rem;
        --p-space-200: 0.5rem;
        --p-space-300: 0.75rem;
        --p-space-400: 1rem;
        --p-space-500: 1.25rem;
        --p-space-600: 1.5rem;
        --p-space-800: 2rem;
        --p-space-1000: 2.5rem;
        --p-space-1200: 3rem;
        --p-space-1600: 4rem;
        --p-space-2000: 5rem;
        --p-space-2400: 6rem;
        --p-space-2800: 7rem;
        --p-space-3200: 8rem;
        --p-shadow-inset-lg: inset -0.0625rem 0 0.0625rem #0003,inset 0.0625rem 0 0.0625rem #0003,inset 0 0.125rem 0.0625rem #0009;
        --p-shadow-inset-md: inset -0.0625rem 0 0.0625rem #0000001f,inset 0.0625rem 0 0.0625rem #0000001f,inset 0 0.125rem 0.0625rem #0003;
        --p-shadow-inset-sm: inset 0 0.0625rem 0.0625rem #00000026,inset 0 0.0625rem 0.125rem #ffffff26;
        --p-shadow-xs: 0 0.0625rem 0 #00000012;
        --p-shadow-sm: 0 0.1875rem 0.0625rem -0.0625rem #00000012;
        --p-shadow-md: 0 0.25rem 0.375rem -0.125rem #0003;
        --p-shadow-lg: 0 0.5rem 1rem -0.25rem #00000038;
        --p-shadow-xl: 0 0.75rem 1.25rem -0.5rem #0000003d;
        --p-shadow-2xl: 0 1.25rem 1.25rem -0.5rem #00000047
    }

    :root {
        --p-space-05: 0.125rem;
        --p-space-1: 0.25rem;
        --p-space-1_5-experimental: 0.375rem;
        --p-space-2: 0.5rem;
        --p-space-3: 0.75rem;
        --p-space-4: 1rem;
        --p-space-5: 1.25rem;
        --p-space-6: 1.5rem;
        --p-space-8: 2rem;
        --p-space-10: 2.5rem;
        --p-space-12: 3rem;
        --p-space-16: 4rem;
        --p-space-20: 5rem;
        --p-space-24: 6rem;
        --p-space-28: 7rem;
        --p-space-32: 8rem;
        --p-border-radius-full: 624.9375rem;
        --p-border-radius-0-experimental: 0rem;
        --p-border-radius-05: 0.125rem;
        --p-border-radius-1: 0.25rem;
        --p-border-radius-2: 0.5rem;
        --p-border-radius-3: 0.75rem;
        --p-border-radius-4: 1rem;
        --p-border-radius-5: 1.25rem;
        --p-border-radius-6: 1.875rem;
        --p-border-radius-1_5-experimental: 0.375rem;
        --p-border-width-1: 0.0625rem;
        --p-border-width-2: 0.125rem;
        --p-border-width-3: 0.1875rem;
        --p-border-width-4: 0.25rem;
        --p-border-width-5: 0.3125rem;
        --p-border-width-1-experimental: 0.04125rem;
        --p-border-width-2-experimental: 0.0625rem;
        --p-breakpoints-xs: 0rem;
        --p-breakpoints-sm: 30.625rem;
        --p-breakpoints-md: 48rem;
        --p-breakpoints-lg: 65rem;
        --p-breakpoints-xl: 90rem;
        --p-color-border-inverse-active: #e3e3e3;
        --p-color-border-inverse-hover: #ccc;
        --p-color-border-warning: #ffc879;
        --p-color-checkbox-icon-disabled: #fff;
        --p-color-checkbox-bg-surface-disabled: #00000014;
        --p-color-bg-fill-active: #f7f7f7;
        --p-color-bg-fill-brand-selected: #303030;
        --p-color-bg-fill-caution-active: #e1cb00;
        --p-color-bg-fill-caution-hover: #ead300;
        --p-color-bg-fill-critical-selected: #8e1f0b;
        --p-color-bg-fill-emphasis-active: #002e6a;
        --p-color-bg-fill-emphasis-hover: #004299;
        --p-color-bg-fill-emphasis: #005bd3;
        --p-color-bg-fill-hover: #fafafa;
        --p-color-bg-fill-info-active: #0094d5;
        --p-color-bg-fill-info-hover: #51c0ff;
        --p-color-bg-fill-secondary-active: #e3e3e3;
        --p-color-bg-fill-secondary-hover: #ebebeb;
        --p-color-bg-fill-selected: #ccc;
        --p-color-bg-fill-transparent-secondary-active: #0000001c;
        --p-color-bg-fill-transparent-secondary-hover: #00000014;
        --p-color-bg-fill-transparent-selected: #0000000f;
        --p-color-bg-fill-transparent: #0000;
        --p-color-bg-fill-warning-active: #b28400;
        --p-color-bg-fill-warning-hover: #e5a500;
        --p-color-bg-fill: #fff;
        --p-color-icon-secondary-active: #4a4a4a;
        --p-color-icon-secondary-hover: #616161;
        --p-color-text-link-active: #002e6a;
        --p-color-text-link-hover: #004299;
        --p-color-text-link: #005bd3;
        --p-color-nav-bg: #ebebeb;
        --p-color-nav-bg-surface-active: #fafafa;
        --p-color-nav-bg-surface-hover: #f1f1f1;
        --p-color-nav-bg-surface-selected: #fafafa;
        --p-color-nav-bg-surface: #00000005;
        --p-color-radio-button-icon-disabled: #fff;
        --p-color-radio-button-bg-surface-disabled: #00000014;
        --p-color-bg-surface-emphasis-active: #e2e7ff;
        --p-color-bg-surface-emphasis-hover: #eaedff;
        --p-color-bg-surface-emphasis: #f0f2ff;
        --p-color-bg-surface-inverse: #303030;
        --p-color-bg-surface-magic-active: #e4deff;
        --p-color-bg-surface-secondary-selected: #ebebeb;
        --p-color-bg-surface-tertiary-active: #e3e3e3;
        --p-color-bg-surface-tertiary-hover: #ebebeb;
        --p-color-bg-surface-warning-active: #ffe4c6;
        --p-color-bg-surface-warning-hover: #ffebd5;
        --p-color-text-brand-on-bg-fill-active: #ccc;
        --p-color-text-brand-on-bg-fill-disabled: #fff;
        --p-color-text-brand-on-bg-fill-hover: #e3e3e3;
        --p-color-text-brand-on-bg-fill: #fff;
        --p-color-text-caution-active: #1f1c00;
        --p-color-text-caution-hover: #332e00;
        --p-color-text-caution-on-bg-fill: #332e00;
        --p-color-text-critical-on-bg-fill: #fffbfb;
        --p-color-text-emphasis-on-bg-fill-active: #d5dcff;
        --p-color-text-emphasis-on-bg-fill-hover: #e2e7ff;
        --p-color-text-emphasis-on-bg-fill: #fcfdff;
        --p-color-text-info-active: #002133;
        --p-color-text-info-hover: #003a5a;
        --p-color-text-magic-on-bg-fill: #fdfdff;
        --p-color-text-success-active: #092a1b;
        --p-color-text-success-hover: #083d25;
        --p-color-text-success-on-bg-fill: #f8fffb;
        --p-color-text-warning-active: #251a00;
        --p-color-text-warning-hover: #412d00;
        --p-color-text-warning-on-bg-fill: #251a00;
        --p-color-video-thumbnail-play-button-bg-fill-hover: #000000cf;
        --p-color-video-thumbnail-play-button-bg-fill: #000000b5;
        --p-color-video-thumbnail-play-button-text-on-bg-fill: #fff;
        --p-color-bg-surface-hover: #f7f7f7;
        --p-color-bg-surface-active: #f3f3f3;
        --p-color-bg-surface-disabled: #0000000d;
        --p-color-bg-fill-brand: #303030;
        --p-color-bg-fill-brand-hover: #1a1a1a;
        --p-color-bg-fill-brand-active: #1a1a1a;
        --p-color-bg-surface-brand: #e3e3e3;
        --p-color-bg-surface-brand-hover: #ebebeb;
        --p-color-bg-surface-brand-active: #f1f1f1;
        --p-color-bg-surface-brand-selected: #f1f1f1;
        --p-color-bg-surface-magic: #f3f1ff;
        --p-color-text-critical-hover: #5f1507;
        --p-color-text-warning: #5e4200;
        --p-color-text-link-inverse: #c5d0ff;
        --p-color-border-tertiary: #ccc;
        --p-color-border-emphasis: #005bd3;
        --p-color-bg-inverse: #1f2124;
        --p-color-bg-inset-strong: #616a75;
        --p-color-bg-inverse-hover: #616a75;
        --p-color-bg-inverse-active: #87909b;
        --p-color-bg-strong-hover: #caced3;
        --p-color-bg-strong-active: #caced3;
        --p-color-bg-strong: #dde0e4;
        --p-color-bg-subdued-active: #ebecef;
        --p-color-bg-disabled: #ebecef;
        --p-color-bg-interactive-disabled: #ebecef;
        --p-color-bg-app: #f1f2f4;
        --p-color-bg-app-active: #dde0e4;
        --p-color-bg-app-hover: #ebecef;
        --p-color-bg-app-selected: #ebecef;
        --p-color-bg-active: #ebecef;
        --p-color-bg-subdued-hover: #f1f2f4;
        --p-color-bg-inset: #f1f2f4;
        --p-color-bg-hover: #f1f2f4;
        --p-color-bg-subdued: #f9fafb;
        --p-color-bg-input: #fff;
        --p-color-bg: #fff;
        --p-color-bg-primary-active: #0c3b2f;
        --p-color-bg-primary-hover: #125443;
        --p-color-bg-primary: #007a5c;
        --p-color-bg-success-strong: #16a679;
        --p-color-bg-success: #a1edd0;
        --p-color-bg-primary-subdued-active: #c0f2dd;
        --p-color-bg-success-subdued-active: #c0f2dd;
        --p-color-bg-success-subdued: #e0f8ee;
        --p-color-bg-primary-subdued-hover: #e0f8ee;
        --p-color-bg-success-subdued-hover: #f0fdf8;
        --p-color-bg-primary-subdued: #f0fdf8;
        --p-color-bg-primary-subdued-selected: #f0fdf8;
        --p-color-bg-critical-strong-active: #731807;
        --p-color-bg-critical-strong-hover: #9f200a;
        --p-color-bg-critical-strong: #c5280c;
        --p-color-bg-critical-subdued-active: #fbc5bc;
        --p-color-bg-critical: #fbc5bc;
        --p-color-bg-critical-subdued: #fde2dd;
        --p-color-bg-critical-subdued-hover: #fef3f1;
        --p-color-bg-caution-strong: #d89b0d;
        --p-color-bg-caution: #f8d990;
        --p-color-bg-caution-subdued-active: #fae5b2;
        --p-color-bg-caution-subdued: #fcf0d4;
        --p-color-bg-caution-subdued-hover: #fef8ec;
        --p-color-bg-info-strong: #2aacbb;
        --p-color-bg-info-subdued-active: #b8e9ef;
        --p-color-bg-info: #b8e9ef;
        --p-color-bg-info-subdued: #def5f7;
        --p-color-bg-info-subdued-hover: #eefafb;
        --p-color-bg-interactive-active: #0e356c;
        --p-color-bg-interactive-hover: #144995;
        --p-color-bg-interactive: #2463bc;
        --p-color-bg-interactive-subdued-active: #bbd4f7;
        --p-color-bg-interactive-subdued-hover: #e8f0fd;
        --p-color-bg-interactive-subdued: #f0f5fd;
        --p-color-bg-interactive-selected: #f0f5fd;
        --p-color-bg-warning: #fac9a8;
        --p-color-bg-magic-strong: #7945e3;
        --p-color-bg-magic-hover: #e2d6fa;
        --p-color-bg-magic-active: #cbb4f8;
        --p-color-bg-magic: #ece3fd;
        --p-color-bg-magic-subdued-hover: #ece3fd;
        --p-color-bg-magic-subdued-active: #e2d6fa;
        --p-color-bg-magic-subdued: #f2edfd;
        --p-color-border-input-hover: #616a75;
        --p-color-border-inverse: #616a75;
        --p-color-border-strong-hover: #87909b;
        --p-color-border-input: #abb1ba;
        --p-color-border-hover: #abb1ba;
        --p-color-border-strong: #abb1ba;
        --p-color-border: #caced3;
        --p-color-border-disabled: #dde0e4;
        --p-color-border-subdued: #dde0e4;
        --p-color-border-interactive-disabled: #dde0e4;
        --p-color-border-primary: #007a5c;
        --p-color-border-success: #16a679;
        --p-color-border-success-subdued: #50dca9;
        --p-color-border-critical-active: #430e04;
        --p-color-border-critical-hover: #731807;
        --p-color-border-critical: #c5280c;
        --p-color-border-critical-subdued: #f56b52;
        --p-color-border-caution: #d89b0d;
        --p-color-border-caution-subdued: #f5c452;
        --p-color-border-info: #3bc3d3;
        --p-color-border-info-subdued: #6dd3de;
        --p-color-border-interactive-active: #0e356c;
        --p-color-border-interactive-hover: #144995;
        --p-color-border-interactive: #3e7dd5;
        --p-color-border-interactive-focus: #3e7dd5;
        --p-color-border-interactive-subdued: #bbd4f7;
        --p-color-border-magic-strong: #7945e3;
        --p-color-border-magic: #ad8bf1;
        --p-color-icon-hover: #1f2124;
        --p-color-icon: #616a75;
        --p-color-icon-active: #1f2124;
        --p-color-icon-subdued: #87909b;
        --p-color-icon-disabled: #abb1ba;
        --p-color-icon-interactive-disabled: #abb1ba;
        --p-color-icon-inverse: #dde0e4;
        --p-color-icon-on-color: #fff;
        --p-color-icon-primary: #007a5c;
        --p-color-icon-success: #16a679;
        --p-color-icon-critical: #c5280c;
        --p-color-icon-caution: #b77e0b;
        --p-color-icon-info: #2aacbb;
        --p-color-icon-warning: #f27522;
        --p-color-icon-interactive-active: #0e356c;
        --p-color-icon-interactive-hover: #144995;
        --p-color-icon-interactive: #2463bc;
        --p-color-icon-interactive-inverse: #6699e1;
        --p-color-icon-magic: #7945e3;
        --p-color-text: #1f2124;
        --p-color-text-subdued: #616a75;
        --p-color-text-disabled: #87909b;
        --p-color-text-interactive-disabled: #87909b;
        --p-color-text-inverse-subdued: #abb1ba;
        --p-color-text-inverse: #f1f2f4;
        --p-color-text-on-color: #fff;
        --p-color-text-success-strong: #0c3b2f;
        --p-color-text-success: #007a5c;
        --p-color-text-primary: #007a5c;
        --p-color-text-primary-hover: #125443;
        --p-color-text-critical-strong: #430e04;
        --p-color-text-critical-active: #731807;
        --p-color-text-critical: #c5280c;
        --p-color-text-caution-strong: #4d2e05;
        --p-color-text-caution: #875c08;
        --p-color-text-info-strong: #104147;
        --p-color-text-info: #20828d;
        --p-color-text-warning-strong: #4d2405;
        --p-color-text-interactive-active: #0e356c;
        --p-color-text-interactive-hover: #144995;
        --p-color-text-interactive: #2463bc;
        --p-color-text-interactive-inverse: #6699e1;
        --p-color-text-magic-strong: #310d78;
        --p-color-text-magic: #5a24cd;
        --p-color-bg-backdrop-experimental: #000000b5;
        --p-color-bg-primary-disabled-experimental: #d4d4d4;
        --p-color-bg-secondary-experimental: #f3f3f3;
        --p-color-bg-input-hover-experimental: #fafafa;
        --p-color-border-input-active-experimental: #1a1a1a;
        --p-color-border-critical-strong-experimental: #8e1f0b;
        --p-color-bg-input-active-experimental: #f7f7f7;
        --p-color-bg-transparent-experimental: #0000;
        --p-color-bg-transparent-subdued-experimental: #0000000f;
        --p-color-bg-transparent-hover-experimental: #0000000d;
        --p-color-bg-transparent-active-experimental: #0000000f;
        --p-color-bg-transparent-disabled-experimental: #0000000d;
        --p-color-bg-transparent-secondary-disabled-experimental: #00000014;
        --p-color-bg-transparent-primary-disabled-experimental: #0000002b;
        --p-color-bg-transparent-primary-experimental: #0000009e;
        --p-color-bg-success-strong-hover-experimental: #136f45;
        --p-color-bg-success-strong-active-experimental: #0c5132;
        --p-color-bg-warning-subdued-experimental: #fff1e3;
        --p-color-bg-warning-strong-experimental: #ffb800;
        --p-color-text-warning-experimental: #412d00;
        --p-color-text-critical-hover-experimental: #5f1507;
        --p-color-icon-info-strong-experimental: #00527c;
        --p-color-icon-warning-strong-experimental: #7c5800;
        --p-color-icon-success-strong-experimental: #0c5132;
        --p-color-icon-critical-strong-experimental: #8e1f0b;
        --p-color-icon-critical-strong-hover-experimental: #5f1507;
        --p-color-icon-critical-strong-active-experimental: #2f0a04;
        --p-color-avatar-background-experimental: #b5b5b5;
        --p-color-avatar-color-experimental: #fff;
        --p-color-avatar-style-one-background-experimental: #fbcffb;
        --p-color-avatar-style-one-color-experimental: #791a79;
        --p-color-avatar-style-two-background-experimental: #38faa3;
        --p-color-avatar-style-two-color-experimental: #0c5132;
        --p-color-avatar-style-three-background-experimental: #92edde;
        --p-color-avatar-style-three-color-experimental: #095346;
        --p-color-avatar-style-four-background-experimental: #c0e1ff;
        --p-color-avatar-style-four-color-experimental: #00527c;
        --p-color-avatar-style-five-background-experimental: #fed1dd;
        --p-color-avatar-style-five-color-experimental: #8d0448;
        --p-font-family-sans: -apple-system,BlinkMacSystemFont,"San Francisco","Segoe UI",Roboto,"Helvetica Neue",sans-serif;
        --p-font-family-mono: ui-monospace,SFMono-Regular,"SF Mono",Consolas,"Liberation Mono",Menlo,monospace;
        --p-font-size-70-experimental: 0.6875rem;
        --p-font-size-75: 0.75rem;
        --p-font-size-80-experimental: 0.8125rem;
        --p-font-size-100: 0.875rem;
        --p-font-size-200: 1rem;
        --p-font-size-300: 1.25rem;
        --p-font-size-400: 1.5rem;
        --p-font-size-500: 1.75rem;
        --p-font-size-600: 2rem;
        --p-font-size-700: 2.5rem;
        --p-font-weight-regular: 400;
        --p-font-weight-medium: 500;
        --p-font-weight-semibold: 600;
        --p-font-weight-bold: 700;
        --p-font-letter-spacing-densest: -0.03375rem;
        --p-font-letter-spacing-denser: -0.01875rem;
        --p-font-letter-spacing-dense: -0.0125rem;
        --p-font-letter-spacing-normal: 0rem;
        --p-font-line-height-1: 1rem;
        --p-font-line-height-2: 1.25rem;
        --p-font-line-height-3: 1.5rem;
        --p-font-line-height-4: 1.75rem;
        --p-font-line-height-5: 2rem;
        --p-font-line-height-6: 2.5rem;
        --p-font-line-height-7: 3rem;
        --p-height-0: 0rem;
        --p-height-025: 0.0625rem;
        --p-height-050: 0.125rem;
        --p-height-100: 0.25rem;
        --p-height-150: 0.375rem;
        --p-height-200: 0.5rem;
        --p-height-300: 0.75rem;
        --p-height-400: 1rem;
        --p-height-500: 1.25rem;
        --p-height-600: 1.5rem;
        --p-height-700: 1.75rem;
        --p-height-800: 2rem;
        --p-height-900: 2.25rem;
        --p-height-1000: 2.5rem;
        --p-height-1200: 3rem;
        --p-height-1600: 4rem;
        --p-height-2000: 5rem;
        --p-height-2400: 6rem;
        --p-height-2800: 7rem;
        --p-height-3200: 8rem;
        --p-motion-duration-0: 0ms;
        --p-motion-duration-50: 50ms;
        --p-motion-duration-100: 100ms;
        --p-motion-duration-150: 150ms;
        --p-motion-duration-200: 200ms;
        --p-motion-duration-250: 250ms;
        --p-motion-duration-300: 300ms;
        --p-motion-duration-350: 350ms;
        --p-motion-duration-400: 400ms;
        --p-motion-duration-450: 450ms;
        --p-motion-duration-500: 500ms;
        --p-motion-duration-5000: 5000ms;
        --p-motion-ease: cubic-bezier(0.25,0.1,0.25,1);
        --p-motion-ease-in: cubic-bezier(0.42,0,1,1);
        --p-motion-ease-out: cubic-bezier(0,0,0.58,1);
        --p-motion-ease-in-out: cubic-bezier(0.42,0,0.58,1);
        --p-motion-linear: cubic-bezier(0,0,1,1);
        --p-motion-keyframes-bounce: p-motion-keyframes-bounce;
        --p-motion-keyframes-fade-in: p-motion-keyframes-fade-in;
        --p-motion-keyframes-pulse: p-motion-keyframes-pulse;
        --p-motion-keyframes-spin: p-motion-keyframes-spin;
        --p-motion-keyframes-appear-above: p-motion-keyframes-appear-above;
        --p-motion-keyframes-appear-below: p-motion-keyframes-appear-below;
        --p-shadow-0: none;
        --p-shadow-100: 0rem 0rem 0.125rem #1f21243d;
        --p-shadow-200: 0rem 0.0625rem 0.0625rem #1f21241a;
        --p-shadow-300: 0rem 0.125rem 0.25rem #1f21241a,0rem 0.0625rem 0.375rem #1f21240d;
        --p-shadow-400: 0rem 0.25rem 0.75rem #1f212433,0rem 0.125rem 0.375rem #1f21240d;
        --p-shadow-500: 0rem 0.25rem 1.125rem -0.125rem #1f212414,0rem 0.75rem 1.125rem -0.125rem #1f212426;
        --p-shadow-600: 0rem 2rem 2rem #1f212426,0rem 2rem 3.5rem -0.125rem #1f212429;
        --p-shadow-bevel-100: 0.0625rem 0rem 0rem 0rem #00000021 inset,-0.0625rem 0rem 0rem 0rem #00000021 inset,0rem -0.0625rem 0rem 0rem #0000002b inset,0rem 0.0625rem 0rem 0rem #cccccc80 inset;
        --p-shadow-inset-100: inset 0rem 0rem 0.1875rem #1f21248f;
        --p-shadow-inset-200: inset 0rem 0.125rem 0.25rem #1f212452;
        --p-shadow-button: inset 0rem -0.0625rem 0rem #b5b5b5,inset -0.0625rem 0rem 0rem #e3e3e3,inset 0.0625rem 0rem 0rem #e3e3e3,inset 0rem 0.0625rem 0rem #e3e3e3;
        --p-shadow-button-hover: inset 0rem -0.0625rem 0rem #ccc,inset 0.0625rem 0rem 0rem #ebebeb,inset -0.0625rem 0rem 0rem #ebebeb,inset 0rem 0.0625rem 0rem #ebebeb;
        --p-font-line-height-075-experimental: 0.75rem;
        --p-shadow-button-primary: 0rem 0.125rem 0rem 0rem #fff3 inset,0.125rem 0rem 0rem 0rem #fff3 inset,-0.125rem 0rem 0rem 0rem #fff3 inset,0rem -0.0625rem 0rem 0.0625rem #000 inset,0rem 0.0625rem 0rem 0rem #000 inset;
        --p-shadow-button-primary-hover: 0rem 0.0625rem 0rem 0rem #ffffff3d inset,0.0625rem 0rem 0rem 0rem #ffffff29 inset,-0.0625rem 0rem 0rem 0rem #ffffff29 inset,0rem -0.09375rem 0rem 0rem #ffffff12 inset,0rem 0rem 0rem 0.03125rem #1a1a1a;
        --p-shadow-button-primary-inset: 0rem 0.1875rem 0rem 0rem #000 inset;
        --p-shadow-button-primary-critical: 0rem 0.0625rem 0rem 0rem #fff6 inset,0.0625rem 0rem 0rem 0rem #fff3 inset,-0.0625rem 0rem 0rem 0rem #fff3 inset,0rem -0.09375rem 0rem 0rem #00000040 inset;
        --p-shadow-button-primary-critical-hover: -0.0625rem 0rem 0rem 0rem #fff3 inset,0.0625rem 0rem 0rem 0rem #fff3 inset,0rem 0.03125rem 0rem 0rem #00000040,0rem -0.09375rem 0rem 0rem #ffffff12 inset,0rem 0.0625rem 0rem 0rem #ffffff3d inset;
        --p-shadow-button-primary-critical-inset: 0rem 0.125rem 0rem 0rem #0009 inset,0.0625rem 0rem 0.0625rem 0rem #0003 inset,-0.0625rem 0rem 0.0625rem 0rem #0003 inset;
        --p-shadow-button-primary-success: 0rem 0.0625rem 0rem 0rem #fff6 inset,0.0625rem 0rem 0rem 0rem #fff3 inset,-0.0625rem 0rem 0rem 0rem #fff3 inset,0rem -0.09375rem 0rem 0rem #00000040 inset;
        --p-shadow-button-primary-success-hover: -0.0625rem 0rem 0rem 0rem #fff3 inset,0.0625rem 0rem 0rem 0rem #fff3 inset,0rem 0.03125rem 0rem 0rem #00000040,0rem -0.09375rem 0rem 0rem #ffffff12 inset,0rem 0.0625rem 0rem 0rem #ffffff3d inset;
        --p-shadow-button-primary-success-inset: 0rem 0.125rem 0rem 0rem #0009 inset,0.0625rem 0rem 0.0625rem 0rem #0003 inset,-0.0625rem 0rem 0.0625rem 0rem #0003 inset;
        --p-shadow-border-inset: 0rem 0rem 0rem 0.0625rem #00000014 inset;
        --p-shadow-inset-lg: inset 0rem 0rem 0.4375rem 0.125rem #1f21242e;
        --p-shadow-inset-md: inset 0rem 0.125rem 0.25rem #1f212452;
        --p-shadow-inset-sm: inset 0rem 0rem 0.1875rem #1f21248f;
        --p-shadow-none: none;
        --p-shadow-xs: 0rem 0rem 0.125rem #1f21243d;
        --p-shadow-sm: 0rem 0.0625rem 0.0625rem #1f21241a;
        --p-shadow-md: 0rem 0.125rem 0.25rem #1f21241a,0rem 0.0625rem 0.375rem #1f21240d;
        --p-shadow-lg: 0rem 0.25rem 0.75rem #1f212433,0rem 0.125rem 0.375rem #1f21240d;
        --p-shadow-xl: 0rem 0.25rem 1.125rem -0.125rem #1f212414,0rem 0.75rem 1.125rem -0.125rem #1f212426;
        --p-shadow-2xl: 0rem 2rem 2rem #1f212426,0rem 2rem 3.5rem -0.125rem #1f212429;
        --p-shadow-bevel-experimental: 0.0625rem 0rem 0rem 0rem #00000021 inset,-0.0625rem 0rem 0rem 0rem #00000021 inset,0rem -0.0625rem 0rem 0rem #0000002b inset,0rem 0.0625rem 0rem 0rem #cccccc80 inset;
        --p-shadow-card-sm-experimental: 0rem 0.125rem 0rem #00000012,0rem 0.0625rem 0rem #00000012,0.0625rem 0rem 0rem #e3e3e3,-0.0625rem 0rem 0rem #e3e3e3,0rem -0.0625rem 0rem #e3e3e3;
        --p-shadow-card-md-experimental: 0rem 0.1875rem 0.0625rem -0.0625rem #00000012,0rem -0.0625rem 0rem 0rem #00000029,0.0625rem 0rem 0rem 0rem #e3e3e3,-0.0625rem 0rem 0rem 0rem #e3e3e3,0rem 0.0625rem 0rem 0rem #e3e3e3;
        --p-shadow-card-lg-experimental: 0rem 0.25rem 0.375rem -0.125rem #0003,inset 0rem -0.0625rem 0rem #d4d4d4,inset -0.0625rem 0rem 0rem #e3e3e3,inset 0.0625rem 0rem 0rem #e3e3e3,inset 0rem 0.0625rem 0rem #e3e3e3;
        --p-shadow-button-experimental: inset 0rem -0.0625rem 0rem #b5b5b5,inset -0.0625rem 0rem 0rem #e3e3e3,inset 0.0625rem 0rem 0rem #e3e3e3,inset 0rem 0.0625rem 0rem #e3e3e3;
        --p-shadow-button-hover-experimental: inset 0rem -0.0625rem 0rem #ccc,inset 0.0625rem 0rem 0rem #ebebeb,inset -0.0625rem 0rem 0rem #ebebeb,inset 0rem 0.0625rem 0rem #ebebeb;
        --p-shadow-button-disabled-experimental: inset 0rem 0rem 0rem 0.0625rem #e3e3e3;
        --p-shadow-button-primary-strong-inset-experimental: 0rem 0.1875rem 0rem 0rem #000 inset;
        --p-shadow-button-primary-strong-hover-experimental: 0rem 0.0625rem 0rem 0rem #ffffff3d inset,0.0625rem 0rem 0rem 0rem #ffffff29 inset,-0.0625rem 0rem 0rem 0rem #ffffff29 inset,0rem -0.09375rem 0rem 0rem #ffffff12 inset,0rem 0rem 0rem 0.03125rem #1a1a1a;
        --p-shadow-button-primary-strong-experimental: 0rem 0.125rem 0rem 0rem #fff3 inset,0.125rem 0rem 0rem 0rem #fff3 inset,-0.125rem 0rem 0rem 0rem #fff3 inset,0rem -0.0625rem 0rem 0.0625rem #000 inset,0rem 0.0625rem 0rem 0rem #000 inset;
        --p-shadow-button-primary-experimental: 0rem 0.0625rem 0rem 0rem #fff6 inset,0.0625rem 0rem 0rem 0rem #fff3 inset,-0.0625rem 0rem 0rem 0rem #fff3 inset,0rem -0.09375rem 0rem 0rem #00000040 inset;
        --p-shadow-button-primary-hover-experimental: -0.0625rem 0rem 0rem 0rem #fff3 inset,0.0625rem 0rem 0rem 0rem #fff3 inset,0rem 0.03125rem 0rem 0rem #00000040,0rem -0.09375rem 0rem 0rem #ffffff12 inset,0rem 0.0625rem 0rem 0rem #ffffff3d inset;
        --p-shadow-button-inset-experimental: 0rem 0.125rem 0rem 0rem #0009 inset,0.0625rem 0rem 0.0625rem 0rem #0003 inset,-0.0625rem 0rem 0.0625rem 0rem #0003 inset;
        --p-shadow-border-inset-experimental: 0rem 0rem 0rem 0.0625rem #00000014 inset;
        --p-space-0: 0rem;
        --p-space-025: 0.0625rem;
        --p-width-0: 0rem;
        --p-width-025: 0.0625rem;
        --p-width-050: 0.125rem;
        --p-width-100: 0.25rem;
        --p-width-150: 0.375rem;
        --p-width-200: 0.5rem;
        --p-width-300: 0.75rem;
        --p-width-400: 1rem;
        --p-width-500: 1.25rem;
        --p-width-600: 1.5rem;
        --p-width-700: 1.75rem;
        --p-width-800: 2rem;
        --p-width-900: 2.25rem;
        --p-width-1000: 2.5rem;
        --p-width-1200: 3rem;
        --p-width-1600: 4rem;
        --p-width-2000: 5rem;
        --p-width-2400: 6rem;
        --p-width-2800: 7rem;
        --p-width-3200: 8rem;
        --p-z-index-1: 100;
        --p-z-index-2: 400;
        --p-z-index-3: 510;
        --p-z-index-4: 512;
        --p-z-index-5: 513;
        --p-z-index-6: 514;
        --p-z-index-7: 515;
        --p-z-index-8: 516;
        --p-z-index-9: 517;
        --p-z-index-10: 518;
        --p-z-index-11: 519;
        --p-z-index-12: 520;
        color-scheme: light;

        --p-border-radius-0: var(--p-border-radius-0-experimental);
        --p-border-radius-050: var(--p-border-radius-05);
        --p-border-radius-100: var(--p-border-radius-1);
        --p-border-radius-150: var(--p-border-radius-1_5-experimental);
        --p-border-radius-200: var(--p-border-radius-2);
        --p-border-radius-300: var(--p-border-radius-3);
        --p-border-radius-400: var(--p-border-radius-4);
        --p-border-radius-500: var(--p-border-radius-5);
        --p-border-radius-750: var(--p-border-radius-6);
        --p-border-width-0165: var(--p-border-width-1-experimental);
        --p-border-width-025: var(--p-border-width-1);
        --p-border-width-050: var(--p-border-width-2);
        --p-border-width-100: var(--p-border-width-4);
        
        --p-color-bg-surface: var(--p-color-bg);
        
        --p-color-bg-surface-secondary: var(--p-color-bg-subdued);
        --p-color-bg-surface-secondary-hover: var(--p-color-bg-subdued-hover);
        --p-color-bg-surface-secondary-active: var(--p-color-bg-subdued-active);
        --p-color-bg-surface-tertiary: var(--p-color-bg-secondary-experimental);
        --p-color-bg-fill-tertiary: var(--p-color-bg-strong);
        --p-color-bg-fill-tertiary-hover: var(--p-color-bg-strong-hover);
        --p-color-bg-fill-tertiary-active: var(--p-color-bg-strong-active);
        --p-color-input-bg-surface: var(--p-color-bg-input);
        --p-color-input-bg-surface-hover: var(--p-color-bg-input-hover-experimental);
        --p-color-input-bg-surface-active: var(--p-color-bg-input-active-experimental);
        
        --p-color-bg-surface-selected: var(--p-color-bg-app-selected);
        --p-color-bg-fill-success: var(--p-color-bg-success-strong);
        --p-color-bg-fill-success-hover: var(--p-color-bg-success-strong-hover-experimental);
        --p-color-bg-fill-success-active: var(--p-color-bg-success-strong-active-experimental);
        --p-color-bg-fill-success-secondary: var(--p-color-bg-success);
        --p-color-bg-surface-success: var(--p-color-bg-success-subdued);
        --p-color-bg-surface-success-hover: var(--p-color-bg-success-subdued-hover);
        --p-color-bg-surface-success-active: var(--p-color-bg-success-subdued-active);
        --p-color-bg-fill-critical: var(--p-color-bg-critical-strong);
        --p-color-bg-fill-critical-hover: var(--p-color-bg-critical-strong-hover);
        --p-color-bg-fill-critical-active: var(--p-color-bg-critical-strong-active);
        --p-color-bg-fill-critical-secondary: var(--p-color-bg-critical);
        --p-color-bg-surface-critical: var(--p-color-bg-critical-subdued);
        --p-color-bg-surface-critical-hover: var(--p-color-bg-critical-subdued-hover);
        --p-color-bg-surface-critical-active: var(--p-color-bg-critical-subdued-active);
        --p-color-bg-fill-caution: var(--p-color-bg-caution-strong);
        --p-color-bg-fill-caution-secondary: var(--p-color-bg-caution);
        --p-color-bg-surface-caution: var(--p-color-bg-caution-subdued);
        --p-color-bg-surface-caution-hover: var(--p-color-bg-caution-subdued-hover);
        --p-color-bg-surface-caution-active: var(--p-color-bg-caution-subdued-active);
        --p-color-bg-fill-info: var(--p-color-bg-info-strong);
        --p-color-bg-fill-info-secondary: var(--p-color-bg-info);
        --p-color-bg-surface-info: var(--p-color-bg-info-subdued);
        --p-color-bg-surface-info-hover: var(--p-color-bg-info-subdued-hover);
        --p-color-bg-surface-info-active: var(--p-color-bg-info-subdued-active);
        --p-color-bg-fill-warning: var(--p-color-bg-warning-strong-experimental);
        --p-color-bg-fill-warning-secondary: var(--p-color-bg-warning);
        --p-color-bg-surface-warning: var(--p-color-bg-warning-subdued-experimental);
        --p-color-bg-fill-magic: var(--p-color-bg-magic-strong);
        --p-color-bg-fill-magic-secondary: var(--p-color-bg-magic);
        --p-color-bg-fill-magic-secondary-hover: var(--p-color-bg-magic-hover);
        --p-color-bg-fill-magic-secondary-active: var(--p-color-bg-magic-active);
        
        --p-color-bg-surface-magic-hover: var(--p-color-bg-magic-subdued-hover);
        --p-color-bg-fill-secondary: var(--p-color-bg-inset);
        --p-color-bg-fill-inverse: var(--p-color-bg-inset-strong);
        --p-color-bg-fill-inverse-hover: var(--p-color-bg-inverse-hover);
        --p-color-bg-fill-inverse-active: var(--p-color-bg-inverse-active);
        --p-color-bg-surface-transparent: var(--p-color-bg-transparent-experimental);
        --p-color-bg-fill-transparent-hover: var(--p-color-bg-transparent-hover-experimental);
        --p-color-bg-fill-transparent-active: var(--p-color-bg-transparent-active-experimental);
        --p-color-bg-fill-disabled: var(--p-color-bg-transparent-disabled-experimental);
        --p-color-bg-fill-transparent-secondary: var(--p-color-bg-transparent-subdued-experimental);
        --p-color-bg-fill-brand-disabled: var(--p-color-bg-transparent-primary-disabled-experimental);
        --p-color-backdrop-bg: var(--p-color-bg-backdrop-experimental);
        --p-color-avatar-bg-fill: var(--p-color-avatar-background-experimental);
        --p-color-avatar-one-bg-fill: var(--p-color-avatar-style-one-background-experimental);
        --p-color-avatar-two-bg-fill: var(--p-color-avatar-style-two-background-experimental);
        --p-color-avatar-three-bg-fill: var(--p-color-avatar-style-three-background-experimental);
        --p-color-avatar-four-bg-fill: var(--p-color-avatar-style-four-background-experimental);
        --p-color-avatar-five-bg-fill: var(--p-color-avatar-style-five-background-experimental);
        --p-color-text-secondary: var(--p-color-text-subdued);
        --p-color-text-emphasis: var(--p-color-text-interactive);
        --p-color-text-emphasis-hover: var(--p-color-text-interactive-hover);
        --p-color-text-emphasis-active: var(--p-color-text-interactive-active);
        --p-color-text-brand: var(--p-color-text-primary);
        --p-color-text-brand-hover: var(--p-color-text-primary-hover);
        
        --p-color-text-info-on-bg-fill: var(--p-color-text-info-strong);
        
        --p-color-text-inverse-secondary: var(--p-color-text-inverse-subdued);
        
        --p-color-avatar-text-on-bg-fill: var(--p-color-avatar-color-experimental);
        --p-color-avatar-one-text-on-bg-fill: var(--p-color-avatar-style-one-color-experimental);
        --p-color-avatar-two-text-on-bg-fill: var(--p-color-avatar-style-two-color-experimental);
        --p-color-avatar-three-text-on-bg-fill: var(--p-color-avatar-style-three-color-experimental);
        --p-color-avatar-four-text-on-bg-fill: var(--p-color-avatar-style-four-color-experimental);
        --p-color-avatar-five-text-on-bg-fill: var(--p-color-avatar-style-five-color-experimental);
        --p-color-icon-secondary: var(--p-color-icon-subdued);
        --p-color-icon-emphasis: var(--p-color-icon-interactive);
        --p-color-icon-emphasis-hover: var(--p-color-icon-interactive-hover);
        --p-color-icon-emphasis-active: var(--p-color-icon-interactive-active);
        --p-color-icon-brand: var(--p-color-icon-primary);
        --p-color-border-secondary: var(--p-color-border-subdued);
        
        --p-color-input-border: var(--p-color-border-input);
        --p-color-input-border-hover: var(--p-color-border-input-hover);
        --p-color-input-border-active: var(--p-color-border-input-active-experimental);
        
        --p-color-border-emphasis-hover: var(--p-color-border-interactive-hover);
        --p-color-border-emphasis-active: var(--p-color-border-interactive-active);
        --p-color-border-focus: var(--p-color-border-interactive-focus);
        --p-color-border-brand: var(--p-color-border-primary);
        --p-color-border-critical-secondary: var(--p-color-border-critical-strong-experimental);
        --p-color-border-magic-secondary: var(--p-color-border-magic-strong);
       
        --p-font-size-275: var(--p-font-size-70-experimental);
        --p-font-size-325: var(--p-font-size-80-experimental);
        --p-font-size-350: var(--p-font-size-100);
        --p-font-size-750: var(--p-font-size-500);
        --p-font-size-900: var(--p-font-size-600);
        --p-font-size-1000: var(--p-font-size-700);
        
        --p-font-line-height-300: var(--p-font-line-height-075-experimental);
        --p-font-line-height-400: var(--p-font-line-height-1);
        --p-font-line-height-500: var(--p-font-line-height-2);
        --p-font-line-height-600: var(--p-font-line-height-3);
        --p-font-line-height-700: var(--p-font-line-height-4);
        --p-font-line-height-800: var(--p-font-line-height-5);
        --p-font-line-height-1000: var(--p-font-line-height-6);
        --p-font-line-height-1200: var(--p-font-line-height-7);
        
        
        --p-shadow-button-inset: var(--p-shadow-inset-200);
        
        --p-space-050: var(--p-space-05);
        --p-space-100: var(--p-space-1);
        --p-space-150: var(--p-space-1_5-experimental);
        --p-space-200: var(--p-space-2);
        --p-space-300: 0.75rem;
        --p-space-400: var(--p-space-4);
        --p-space-500: var(--p-space-5);
        --p-space-600: var(--p-space-6);
        --p-space-800: var(--p-space-8);
        --p-space-1000: var(--p-space-10);
        --p-space-1200: var(--p-space-12);
        --p-space-1600: var(--p-space-16);
        --p-space-2000: var(--p-space-20);
        --p-space-2400: var(--p-space-24);
        --p-space-2800: var(--p-space-28);
        --p-space-3200: var(--p-space-32);
        --p-space-button-group-gap: 0.5rem;
        --p-space-card-gap: var(--p-space-400);
        --p-space-card-padding: var(--p-space-400);
        --p-space-table-cell-padding: var(--p-space-150);
        --p-text-heading-3xl-font-family: var(--p-font-family-sans);
        --p-text-heading-3xl-font-size: var(--p-font-size-900);
        --p-text-heading-3xl-font-weight: var(--p-font-weight-bold);
        --p-text-heading-3xl-font-letter-spacing: var(--p-font-letter-spacing-densest);
        --p-text-heading-3xl-font-line-height: var(--p-font-line-height-1200);
        --p-text-heading-2xl-font-family: var(--p-font-family-sans);
        --p-text-heading-2xl-font-size: var(--p-font-size-750);
        --p-text-heading-2xl-font-weight: var(--p-font-weight-bold);
        --p-text-heading-2xl-font-letter-spacing: var(--p-font-letter-spacing-denser);
        --p-text-heading-2xl-font-line-height: var(--p-font-line-height-1000);
        --p-text-heading-xl-font-family: var(--p-font-family-sans);
        --p-text-heading-xl-font-size: var(--p-font-size-600);
        --p-text-heading-xl-font-weight: var(--p-font-weight-bold);
        --p-text-heading-xl-font-letter-spacing: var(--p-font-letter-spacing-dense);
        --p-text-heading-xl-font-line-height: var(--p-font-line-height-800);
        --p-text-heading-lg-font-family: var(--p-font-family-sans);
        --p-text-heading-lg-font-size: var(--p-font-size-500);
        --p-text-heading-lg-font-weight: var(--p-font-weight-semibold);
        --p-text-heading-lg-font-letter-spacing: var(--p-font-letter-spacing-dense);
        --p-text-heading-lg-font-line-height: var(--p-font-line-height-600);
        --p-text-heading-md-font-family: var(--p-font-family-sans);
        --p-text-heading-md-font-size: var(--p-font-size-350);
        --p-text-heading-md-font-weight: var(--p-font-weight-semibold);
        --p-text-heading-md-font-letter-spacing: var(--p-font-letter-spacing-normal);
        --p-text-heading-md-font-line-height: var(--p-font-line-height-500);
        --p-text-heading-sm-font-family: var(--p-font-family-sans);
        --p-text-heading-sm-font-size: var(--p-font-size-325);
        --p-text-heading-sm-font-weight: var(--p-font-weight-semibold);
        --p-text-heading-sm-font-letter-spacing: var(--p-font-letter-spacing-normal);
        --p-text-heading-sm-font-line-height: var(--p-font-line-height-500);
        --p-text-body-lg-font-family: var(--p-font-family-sans);
        --p-text-body-lg-font-size: var(--p-font-size-350);
        --p-text-body-lg-font-weight: var(--p-font-weight-regular);
        --p-text-body-lg-font-letter-spacing: var(--p-font-letter-spacing-normal);
        --p-text-body-lg-font-line-height: var(--p-font-line-height-500);
        --p-text-body-md-font-family: var(--p-font-family-sans);
        --p-text-body-md-font-size: var(--p-font-size-325);
        --p-text-body-md-font-weight: var(--p-font-weight-regular);
        --p-text-body-md-font-letter-spacing: var(--p-font-letter-spacing-normal);
        --p-text-body-md-font-line-height: var(--p-font-line-height-500);
        --p-text-body-sm-font-family: var(--p-font-family-sans);
        --p-text-body-sm-font-size: var(--p-font-size-300);
        --p-text-body-sm-font-weight: var(--p-font-weight-regular);
        --p-text-body-sm-font-letter-spacing: var(--p-font-letter-spacing-normal);
        --p-text-body-sm-font-line-height: var(--p-font-line-height-400);
        --p-text-body-xs-font-family: var(--p-font-family-sans);
        --p-text-body-xs-font-size: var(--p-font-size-275);
        --p-text-body-xs-font-weight: var(--p-font-weight-regular);
        --p-text-body-xs-font-letter-spacing: var(--p-font-letter-spacing-normal);
        --p-text-body-xs-font-line-height: var(--p-font-line-height-300);
    }

    body,html {
        color: #303030;
        font-size: var(--p-font-size-350);
        font-weight: var(--p-font-weight-regular);
        letter-spacing: normal;
        line-height: var(--p-font-line-height-500)
    }

    html[class~=comp-summer-editons-2023] body {
        font-size: var(--p-font-size-325)
    }

    body,button,html {
        font-family: var(--p-font-family-sans)
    }

    html {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -webkit-text-size-adjust: 100%;
        -moz-text-size-adjust: 100%;
        text-size-adjust: 100%;
        font-size: 100%;
        position: relative;
        text-rendering: optimizeLegibility
    }

    @supports (font: -apple-system-body) {
        @media (max-width:30.6225em) {
            html {
                font:-apple-system-body
            }
        }
    }

    body {
        background-color: #f1f2f4;
        margin: 0;
        min-height: 100%;
        padding: 0
    }

    @media print {
        body {
            background-color: initial!important
        }
    }

    *,:after,:before {
        box-sizing: border-box
    }

    h1,h2,h3,h4,h5,h6,p {
        font-size: 1em;
        font-weight: var(--p-font-weight-regular);
        margin: 0
    }

    [type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner {
        border-style: none
    }

    @keyframes p-motion-keyframes-bounce {
        0%,65%,85% {
            transform: scale(1)
        }

        75% {
            transform: scale(.85)
        }

        82.5% {
            transform: scale(1.05)
        }
    }

    @keyframes p-motion-keyframes-fade-in {
        to {
            opacity: 1
        }
    }

    @keyframes p-motion-keyframes-pulse {
        0%,75% {
            opacity: 1;
            transform: scale(.85)
        }

        to {
            opacity: 0;
            transform: scale(2.5)
        }
    }

    @keyframes p-motion-keyframes-spin {
        to {
            transform: rotate(1turn)
        }
    }

    @keyframes p-motion-keyframes-appear-above {
        0% {
            opacity: 0;
            transform: translateY(0.25rem)
        }

        to {
            opacity: 1;
            transform: none
        }
    }

    @keyframes p-motion-keyframes-appear-below {
        0% {
            opacity: 0;
            transform: translateY(calc(0.25rem*-1))
        }

        to {
            opacity: 1;
            transform: none
        }
    }

    .Polaris-Button_r99lw {
        --pc-button-micro-min-height: var(--p-font-line-height-500);
        --pc-button-slim-min-height: var(--p-font-line-height-700);
        --pc-button-large-min-height: 2.75rem;
        --pc-button-vertical-padding: calc((2.25rem - var(--p-font-line-height-500) - var(--p-space-050))/2);
        --pc-button-slim-vertical-padding: calc((var(--pc-button-slim-min-height) - var(--p-font-line-height-500) - var(--p-space-050))/2);
        --pc-button-large-vertical-padding: calc((var(--pc-button-large-min-height) - var(--p-font-line-height-500) - var(--p-space-050))/2);
        --pc-button-spinner-size: 1.25rem;
        --pc-button-segment: 10;
        --pc-button-focused: 20;
        --pc-button-disclosure-icon-offset: -0.375rem;
        -webkit-tap-highlight-color: transparent;
        align-items: center;
        background: var(--p-color-bg-surface);
        border: var(--p-border-width-025) solid var(--p-color-border-strong);
        border-radius: 0.25rem;
        box-shadow: var(--p-shadow-sm);
        color: #303030;
        cursor: pointer;
        display: inline-flex;
        justify-content: center;
        line-height: 1;
        margin: 0;
        min-height: 2.25rem;
        min-width: 2.25rem;
        padding: calc((2.25rem - var(--p-font-line-height-500) - var(--p-space-050))/2) var(--p-space-400);
        position: relative;
        text-align: center;
        text-decoration: none;
        -webkit-user-select: none;
        user-select: none
    }

    .Polaris-Button_r99lw:after {
        border-radius: 0.25rem;
        bottom: calc(var(--p-border-width-025)*-1 - .0625rem);
        box-shadow: 0 0 0 calc(var(--p-border-width-025)*-1 - .0625rem) var(--p-color-border-focus);
        content: "";
        display: block;
        left: calc(var(--p-border-width-025)*-1 - .0625rem);
        pointer-events: none;
        position: absolute;
        right: calc(var(--p-border-width-025)*-1 - .0625rem);
        top: calc(var(--p-border-width-025)*-1 - .0625rem);
        z-index: 1
    }

    .Polaris-ActionMenu-MenuGroup__Details_1bdkj {
        margin-top: calc(var(--p-space-400)*-1);
        padding: var(--p-space-400)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i a,html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i button {
        background-color: var(--p-color-bg-fill-tertiary)!important;
        border: none;
        border-radius: 0.5rem!important;
        min-height: 1.75rem;
        padding: 0.25rem 0.75rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i a:is(:hover,:focus),html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i button:is(:hover,:focus) {
        background-color: var(--p-color-bg-fill-tertiary-hover)!important
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i a:active,html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i button:active {
        background-color: var(--p-color-bg-fill-tertiary-active)!important;
        box-shadow: var(--p-shadow-inset-md)!important
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i a:focus-visible,html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i button:focus-visible {
        outline: var(--p-border-width-050) solid var(--p-color-border-focus);
        outline-offset: var(--p-space-050)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i a:focus-visible:after,html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i button:focus-visible:after {
        content: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i a[aria-disabled=true],html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i button[aria-disabled=true] {
        background-color: var(--p-color-bg-fill-disabled)!important
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 a,html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 button {
        color: var(--p-color-text-critical)!important
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 a:is(:hover,:focus),html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 button:is(:hover,:focus) {
        background-color: var(--p-color-bg-fill-tertiary-hover)!important
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 a:active,html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 button:active {
        background-color: var(--p-color-bg-fill-tertiary-active)!important
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 a svg,html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 button svg {
        fill: var(--p-color-icon-critical-strong-experimental)
    }

    :root {
        --polaris-version-number: "11.24.0"
    }

    html[class~=comp-summer-editons-2023] {
        --pc-app-provider-shadow-bevel-content: "";
        --pc-app-provider-shadow-bevel-border: none
    }

    html[class~=Polaris-SE23-Shadow-Bevel-Opt-Out] {
        --pc-app-provider-shadow-bevel-content: none;
        --pc-app-provider-shadow-bevel-border: var(--p-border-width-025) solid var(--p-color-border)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw {
        border: none;
        border-radius: 0.5rem;
        min-height: 1.75rem;
        min-width: 1.75rem;
        padding: var(--p-space-150) 0.75rem
    }

    .Polaris-Button_r99lw svg {
        fill: #4a4a4a
    }

    .Polaris-Button_r99lw:hover {
        background: #fafafa;
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-Button_r99lw:focus-visible {
        box-shadow: var(--p-shadow-sm);
        outline: 0
    }

    .Polaris-Button_r99lw:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw:focus-visible {
        outline: var(--p-border-width-050) solid var(--p-color-border-focus);
        outline-offset: var(--p-space-025)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw:focus-visible:after {
        content: none
    }

    .Polaris-Button_r99lw:active:after {
        border: none;
        box-shadow: none
    }

    .Polaris-Button_r99lw.Polaris-Button--pressed_17w8v {
        background: var(--p-color-bg-fill-inverse);
        border-color: var(--p-color-border-inverse);
        box-shadow: var(--p-shadow-inset-md);
        color: var(--p-color-text-on-color)
    }

    .Polaris-Button_r99lw.Polaris-Button--pressed_17w8v svg {
        fill: currentColor
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw.Polaris-Button--pressed_17w8v {
        background: var(--p-color-bg-fill-tertiary-active);
        box-shadow: var(--p-shadow-inset-md);
        color: #303030
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw.Polaris-Button--pressed_17w8v:hover {
        background: var(--p-color-bg-fill-tertiary-hover);
        box-shadow: var(--p-shadow-inset-md)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw.Polaris-Button--pressed_17w8v:active {
        background: var(--p-color-bg-fill-tertiary-active);
        box-shadow: var(--p-shadow-inset-md)
    }

    @media (-ms-high-contrast:active) {
        .Polaris-Button_r99lw {
            border: var(--p-border-width-025) solid windowText
        }
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw {
        --pc-button-shadow: inset 0 -0.0625rem 0 #b5b5b5,inset -0.0625rem 0 0 #e3e3e3,inset 0.0625rem 0 0 #e3e3e3,inset 0 0.0625rem 0 #e3e3e3;
        --pc-button-shadow-hover: inset 0 -0.0625rem 0 #ccc,inset 0.0625rem 0 0 #ebebeb,inset -0.0625rem 0 0 #ebebeb,inset 0 0.0625rem 0 #ebebeb;
        --pc-button-shadow-primary: inset 0 -0.0625rem 0 #00000040,inset 0.0625rem 0 0 #ffffff40,inset -0.0625rem 0 0 #ffffff40;
        --pc-button-large-min-height: 2rem;
        --pc-button-large-vertical-padding: 0.5rem;
        --pc-button-micro-min-height: var(--p-font-line-height-600);
        box-shadow: var(--pc-button-shadow);
        transition: background-color 75ms var(--p-motion-ease-out),box-shadow 75ms var(--p-motion-ease-out)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw:active {
        --pc-button-shadow: var(--p-shadow-inset-md);
        background: var(--p-color-bg-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw:active .Polaris-Button__Content_xd1mk {
        transform: translateY(.0625rem)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw:focus-visible:not(.Polaris-Button--primary_7k9zs):not(.Polaris-Button--plain_2z97r),html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw:focus:not(.Polaris-Button--primary_7k9zs):not(.Polaris-Button--plain_2z97r) {
        box-shadow: var(--pc-button-shadow)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw:hover {
        box-shadow: var(--pc-button-shadow-hover)
    }

    .Polaris-Button_r99lw.Polaris-Button--disabled_hcuh9 {
        background: var(--p-color-bg-disabled);
        border-color: var(--p-color-border-disabled);
        box-shadow: none;
        color: var(--p-color-text-disabled);
        transition: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw.Polaris-Button--disabled_hcuh9 {
        background: #0000
    }

    .Polaris-Button_r99lw.Polaris-Button--disabled_hcuh9 svg {
        fill: var(--p-color-icon-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw.Polaris-Button--disabled_hcuh9 {
        background: var(--p-color-bg-fill-disabled);
        box-shadow: none
    }

    .Polaris-Button_r99lw.Polaris-Button--connectedDisclosure_153ua {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
        z-index: var(--pc-button-segment)
    }

    .Polaris-Button_r99lw.Polaris-Button--connectedDisclosure_153ua:after {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0
    }

    .Polaris-Button_r99lw.Polaris-Button--connectedDisclosure_153ua:focus {
        z-index: var(--pc-button-focused)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw.Polaris-Button--connectedDisclosure_153ua,html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw.Polaris-Button--connectedDisclosure_153ua:after,html[class~=comp-summer-editons-2023] .Polaris-Button_r99lw.Polaris-Button--connectedDisclosure_153ua:before {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0
    }

    .Polaris-Button__Content_xd1mk {
        align-items: center;
        display: flex;
        font-size: var(--p-font-size-350);
        font-weight: 500;
        justify-content: center;
        letter-spacing: normal;
        line-height: var(--p-font-line-height-400);
        min-height: .0625rem;
        min-width: .0625rem;
        position: relative
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button__Content_xd1mk {
        font-size: var(--p-font-size-325);
        line-height: var(--p-font-line-height-500);
        transform: translateY(0);
        transition: transform 75ms cubic-bezier(.19,.91,.38,1)
    }

    @media (min-width: 48em) {
        html[class~=comp-summer-editons-2023] .Polaris-Button__Content_xd1mk {
            font-size:var(--p-font-size-75);
            line-height: var(--p-font-line-height-400)
        }
    }

    .Polaris-Button_r99lw:not(.Polaris-Button--plain_2z97r) .Polaris-Button__Content_xd1mk {
        width: 100%
    }

    .Polaris-Button--textAlignLeft_1yjwh {
        justify-content: flex-start;
        text-align: left
    }

    .Polaris-Button--textAlignLeft_1yjwh .Polaris-Button__Content_xd1mk {
        justify-content: flex-start
    }

    .Polaris-Button--textAlignStart_5hw7p {
        justify-content: flex-start;
        text-align: start
    }

    .Polaris-Button--textAlignStart_5hw7p .Polaris-Button__Content_xd1mk {
        justify-content: flex-start
    }

    .Polaris-Button--textAlignCenter_1kere {
        justify-content: center;
        text-align: center
    }

    .Polaris-Button--textAlignRight_1nn4o {
        justify-content: flex-end;
        text-align: right
    }

    .Polaris-Button--textAlignRight_1nn4o .Polaris-Button__Content_xd1mk {
        justify-content: flex-end
    }

    .Polaris-Button--textAlignEnd_1ea3w {
        justify-content: flex-end;
        text-align: end
    }

    .Polaris-Button--textAlignEnd_1ea3w .Polaris-Button__Content_xd1mk {
        justify-content: flex-end
    }

    .Polaris-Button__Icon_yj27d {
        margin-left: calc((0.25rem)*-1)
    }

    @media (min-width: 48em) {
        html[class~=comp-summer-editons-2023] .Polaris-Button__Icon_yj27d {
            margin-bottom:calc(var(--p-space-050)*-1);
            margin-top: calc(var(--p-space-050)*-1)
        }
    }

    .Polaris-Button__Icon_yj27d:last-child {
        margin-left: 0.25rem;
        margin-right: var(--pc-button-disclosure-icon-offset)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button__Icon_yj27d:last-child {
        margin-left: var(--p-space-050)
    }

    .Polaris-Button--fullWidth_zyvh4.Polaris-Button--textAlignLeft_1yjwh .Polaris-Button__Icon_yj27d:last-child:not(:only-child) {
        margin-left: auto
    }

    .Polaris-Button__Icon_yj27d+:not(.Polaris-Button__Icon_yj27d) {
        margin-left: 0.25rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button__Icon_yj27d+:not(.Polaris-Button__Icon_yj27d) {
        margin-left: var(--p-space-050)
    }

    .Polaris-Button--hidden_riqie {
        visibility: hidden
    }

    .Polaris-Button__Spinner_mzr5w {
        left: 50%;
        margin-left: calc((var(--pc-button-spinner-size)/2)*-1);
        margin-top: calc((var(--pc-button-spinner-size)/2)*-1);
        position: absolute;
        top: 50%
    }

    .Polaris-Button--destructive_zy6o5,.Polaris-Button--primaryPlain_1uin8,.Polaris-Button--primary_7k9zs {
        background: var(--pc-button-color);
        border-color: #0000;
        border-width: 0;
        box-shadow: var(--p-shadow-sm);
        color: var(--pc-button-text);
        position: relative
    }

    .Polaris-Button--destructive_zy6o5:after,.Polaris-Button--primaryPlain_1uin8:after,.Polaris-Button--primary_7k9zs:after {
        border-radius: 0.25rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    .Polaris-Button--destructive_zy6o5:hover,.Polaris-Button--primaryPlain_1uin8:hover,.Polaris-Button--primary_7k9zs:hover {
        background: var(--pc-button-color-hover);
        border-color: #0000;
        color: var(--pc-button-text)
    }

    .Polaris-Button--destructive_zy6o5:focus,.Polaris-Button--primaryPlain_1uin8:focus,.Polaris-Button--primary_7k9zs:focus {
        border-color: #0000;
        box-shadow: var(--p-shadow-sm)
    }

    .Polaris-Button--destructive_zy6o5:active,.Polaris-Button--primaryPlain_1uin8:active,.Polaris-Button--primary_7k9zs:active {
        background: var(--pc-button-color-active);
        border-color: #0000;
        box-shadow: var(--p-shadow-sm)
    }

    .Polaris-Button--destructive_zy6o5.Polaris-Button--pressed_17w8v,.Polaris-Button--primaryPlain_1uin8.Polaris-Button--pressed_17w8v,.Polaris-Button--primary_7k9zs.Polaris-Button--pressed_17w8v {
        background: var(--pc-button-color-depressed);
        border-color: #0000;
        box-shadow: var(--p-shadow-sm);
        color: var(--pc-button-text)
    }

    .Polaris-Button--destructive_zy6o5.Polaris-Button--pressed_17w8v:focus,.Polaris-Button--destructive_zy6o5.Polaris-Button--pressed_17w8v:hover,.Polaris-Button--primaryPlain_1uin8.Polaris-Button--pressed_17w8v:focus,.Polaris-Button--primaryPlain_1uin8.Polaris-Button--pressed_17w8v:hover,.Polaris-Button--primary_7k9zs.Polaris-Button--pressed_17w8v:focus,.Polaris-Button--primary_7k9zs.Polaris-Button--pressed_17w8v:hover {
        background: var(--pc-button-color-depressed);
        box-shadow: var(--p-shadow-sm)
    }

    .Polaris-Button--destructive_zy6o5.Polaris-Button--disabled_hcuh9,.Polaris-Button--primaryPlain_1uin8.Polaris-Button--disabled_hcuh9,.Polaris-Button--primary_7k9zs.Polaris-Button--disabled_hcuh9 {
        border-color: #0000;
        box-shadow: none;
        color: var(--p-color-text-disabled)
    }

    .Polaris-Button--destructive_zy6o5.Polaris-Button--disabled_hcuh9 svg,.Polaris-Button--primaryPlain_1uin8.Polaris-Button--disabled_hcuh9 svg,.Polaris-Button--primary_7k9zs.Polaris-Button--disabled_hcuh9 svg {
        fill: var(--p-color-icon-disabled)
    }

    .Polaris-Button--primary_7k9zs {
        --pc-button-color: var(--p-color-bg-primary);
        --pc-button-text: var(--p-color-text-on-color);
        --pc-button-color-hover: var(--p-color-bg-primary-hover);
        --pc-button-color-active: var(--p-color-bg-primary-active);
        --pc-button-color-depressed: var(--p-color-bg-primary-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs:not(.Polaris-Button--disabled_hcuh9) {
        box-shadow: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs:before {
        background: linear-gradient(180deg,#ffffff12 80%,#ffffff26);
        border-radius: .5625rem;
        bottom: 0;
        box-shadow: var(--p-shadow-button-primary-strong-experimental);
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: opacity 75ms cubic-bezier(.19,.91,.38,1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs:hover {
        --pc-button-text: var(--p-color-text-inverse)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs:hover:before {
        box-shadow: var(--p-shadow-button-primary-strong-experimental)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs:hover svg {
        fill: var(--p-color-text-inverse)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs:active {
        --pc-button-text: var(--p-color-text-inverse-secondary);
        background: var(--pc-button-color-active);
        box-shadow: var(--p-shadow-button-inset-experimental)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs:active:before {
        background: linear-gradient(180deg,#ffffff1a,#fff0);
        box-shadow: var(--p-shadow-button-primary-strong-inset-experimental);
        opacity: 1
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs:active svg {
        fill: var(--p-color-text-inverse-secondary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--disabled_hcuh9 {
        background: var(--p-color-bg-fill-brand-disabled);
        box-shadow: none;
        color: var(--pc-button-text)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--disabled_hcuh9:before {
        display: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--disabled_hcuh9 svg {
        fill: var(--pc-button-text)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--destructive_zy6o5:before,html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--success_z03ht:before {
        background: none;
        border-radius: inherit;
        bottom: .03125rem;
        box-shadow: var(--p-shadow-button-primary-experimental);
        left: .03125rem;
        right: .03125rem;
        top: .03125rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--destructive_zy6o5:hover,html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--success_z03ht:hover {
        --pc-button-text: var(--p-color-text-inverse)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--destructive_zy6o5:hover:before,html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--success_z03ht:hover:before {
        box-shadow: var(--p-shadow-button-primary-experimental)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--destructive_zy6o5:hover svg,html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--success_z03ht:hover svg {
        fill: var(--p-color-text-inverse)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--destructive_zy6o5:active,html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--success_z03ht:active {
        --pc-button-text: var(--p-color-text-inverse-secondary);
        box-shadow: var(--p-shadow-button-inset-experimental)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--destructive_zy6o5:active:before,html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--success_z03ht:active:before {
        opacity: 0
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--destructive_zy6o5:active svg,html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--success_z03ht:active svg {
        fill: var(--p-color-text-inverse-secondary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--destructive_zy6o5 {
        --pc-button-color: var(--p-color-bg-fill-critical);
        --pc-button-text: var(--p-color-text-on-color);
        --pc-button-color-hover: var(--p-color-bg-fill-critical-hover);
        --pc-button-color-active: var(--p-color-bg-fill-critical-active);
        --pc-button-color-depressed: var(--p-color-bg-fill-critical-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--destructive_zy6o5:not(.Polaris-Button--disabled_hcuh9) {
        box-shadow: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--destructive_zy6o5 svg {
        fill: var(--p-color-icon-on-color)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--destructive_zy6o5:active {
        box-shadow: var(--p-shadow-button-inset-experimental)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--destructive_zy6o5.Polaris-Button--disabled_hcuh9:before {
        display: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--destructive_zy6o5.Polaris-Button--disabled_hcuh9 svg {
        fill: var(--pc-button-text)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primary_7k9zs.Polaris-Button--success_z03ht {
        --pc-button-color: var(--p-color-bg-fill-success);
        --pc-button-text: var(--p-color-text-on-color);
        --pc-button-color-hover: var(--p-color-bg-fill-success-hover);
        --pc-button-color-active: var(--p-color-bg-fill-success-active);
        --pc-button-color-depressed: var(--p-color-bg-fill-success-active);
        box-shadow: none
    }

    .Polaris-Button--primary_7k9zs svg {
        fill: var(--p-color-icon-on-color)
    }

    .Polaris-Button--primary_7k9zs.Polaris-Button--disabled_hcuh9 {
        background: var(--p-color-bg-disabled)
    }

    .Polaris-Button--destructive_zy6o5 {
        --pc-button-color: var(--p-color-bg-fill-critical);
        --pc-button-text: var(--p-color-text-on-color);
        --pc-button-color-hover: var(--p-color-bg-fill-critical-hover);
        --pc-button-color-active: var(--p-color-bg-fill-critical-active);
        --pc-button-color-depressed: var(--p-color-bg-fill-critical-active)
    }

    .Polaris-Button--destructive_zy6o5 svg {
        fill: var(--p-color-icon-on-color)
    }

    .Polaris-Button--destructive_zy6o5.Polaris-Button--disabled_hcuh9 {
        background: var(--p-color-bg-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--destructive_zy6o5 {
        --pc-button-color: var(--p-color-bg-surface);
        --pc-button-text: var(--p-color-text-critical);
        --pc-button-color-hover: #fafafa;
        --pc-button-color-active: var(--p-color-bg-active);
        --pc-button-color-depressed: var(--p-color-bg-active);
        box-shadow: var(--pc-button-shadow)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--destructive_zy6o5 svg {
        fill: var(--pc-button-text)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--destructive_zy6o5.Polaris-Button--disabled_hcuh9 svg {
        fill: var(--p-color-text-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--destructive_zy6o5:focus,html[class~=comp-summer-editons-2023] .Polaris-Button--destructive_zy6o5:focus-visible {
        box-shadow: var(--pc-button-shadow)
    }

    .Polaris-Button--primaryPlain_1uin8 {
        --pc-button-color: var(--p-color-bg-interactive-subdued-active);
        --pc-button-text: var(--p-color-text-emphasis-hover);
        --pc-button-color-hover: var(--p-color-bg-interactive-subdued-active);
        --pc-button-color-active: var(--p-color-bg-interactive-subdued-active);
        --pc-button-color-depressed: var(--p-surface-selected-depressed);
        box-shadow: none
    }

    .Polaris-Button--primaryPlain_1uin8 path {
        fill: var(--p-color-icon-on-color)
    }

    .Polaris-Button--primaryPlain_1uin8:is(:hover,:focus,:active) {
        box-shadow: none;
        color: var(--p-color-text-emphasis-active)
    }

    .Polaris-Button--primaryPlain_1uin8.Polaris-Button--disabled_hcuh9 {
        background: var(--p-color-bg-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8 {
        --pc-button-color: #0000;
        --pc-button-text: #303030;
        --pc-button-color-hover: var(--p-color-bg-fill-transparent-hover);
        --pc-button-color-active: var(--p-color-bg-fill-transparent-active);
        box-shadow: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8 path {
        fill: var(--pc-button-text)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8:active {
        --pc-button-text: #303030;
        box-shadow: none;
        color: var(--pc-button-text)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8:active .Polaris-Button__Content_xd1mk {
        transform: translateY(0)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8:hover {
        --pc-button-text: #303030;
        box-shadow: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8:focus:not(.Polaris-Button--disabled_hcuh9),html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8:hover {
        color: var(--pc-button-text);
        text-decoration: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8:before {
        display: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8.Polaris-Button--disabled_hcuh9 {
        --pc-button-text: var(--p-color-text-disabled);
        background: #0000
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8.Polaris-Button--destructive_zy6o5 {
        --pc-button-color: #0000;
        --pc-button-text: var(--p-color-text-critical);
        --pc-button-color-hover: var(--p-color-bg-fill-transparent-hover);
        --pc-button-color-active: var(--p-color-bg-fill-transparent-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8.Polaris-Button--destructive_zy6o5:active,html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8.Polaris-Button--destructive_zy6o5:hover {
        --pc-button-text: var(--p-color-text-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8.Polaris-Button--destructive_zy6o5.Polaris-Button--destructive_zy6o5 {
        box-shadow: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8.Polaris-Button--destructive_zy6o5.Polaris-Button--disabled_hcuh9 {
        --pc-button-text: var(--p-color-text-disabled);
        background: #0000
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8.Polaris-Button--iconOnly_viazp {
        margin: calc(0.25rem*-1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8.Polaris-Button--iconOnly_viazp path {
        fill: var(--p-color-icon-secondary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8.Polaris-Button--iconOnly_viazp:active path,html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8.Polaris-Button--iconOnly_viazp:hover path {
        fill: #4a4a4a
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8.Polaris-Button--iconOnly_viazp.Polaris-Button--destructive_zy6o5 path {
        fill: var(--p-color-text-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--primaryPlain_1uin8.Polaris-Button--iconOnly_viazp.Polaris-Button--disabled_hcuh9 path {
        fill: var(--p-color-icon-disabled)
    }
    

    .Polaris-Button--outline_1urzi {
        background: #0000;
        border: var(--p-border-width-025) solid var(--p-color-border);
        box-shadow: none;
        color: #303030;
        position: relative
    }

    .Polaris-Button--outline_1urzi:after {
        border-radius: 0.25rem;
        bottom: -.125rem;
        box-shadow: 0 0 0 -.125rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.125rem;
        pointer-events: none;
        position: absolute;
        right: -.125rem;
        top: -.125rem;
        z-index: 1
    }

    .Polaris-Button--outline_1urzi:hover {
        background: #fafafa;
        border: var(--p-border-width-025) solid var(--p-color-border);
        box-shadow: none
    }

    .Polaris-Button--outline_1urzi:focus-visible {
        border: var(--p-border-width-025) solid var(--p-color-border);
        box-shadow: none
    }

    .Polaris-Button--outline_1urzi:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-Button--outline_1urzi:active {
        background: var(--p-color-bg-active);
        border: var(--p-border-width-025) solid var(--p-color-border);
        box-shadow: none
    }

    .Polaris-Button--outline_1urzi:active:after {
        box-shadow: none
    }

    .Polaris-Button--outline_1urzi.Polaris-Button--pressed_17w8v {
        background: var(--p-color-bg-surface-secondary-active);
        border: var(--p-border-width-025) solid var(--p-color-border);
        box-shadow: none;
        color: var(--pc-button-text)
    }

    .Polaris-Button--outline_1urzi.Polaris-Button--disabled_hcuh9 {
        background: #0000;
        border: var(--p-border-width-025) solid var(--p-color-border-disabled);
        box-shadow: none;
        color: var(--p-color-text-disabled)
    }

    .Polaris-Button--outline_1urzi.Polaris-Button--destructive_zy6o5 {
        background: #0000;
        border: var(--p-border-width-025) solid var(--p-color-border-critical);
        box-shadow: none;
        color: var(--p-color-text-critical)
    }

    .Polaris-Button--outline_1urzi.Polaris-Button--destructive_zy6o5 svg {
        fill: var(--p-color-icon-critical)
    }

    .Polaris-Button--outline_1urzi.Polaris-Button--destructive_zy6o5:hover {
        background: var(--p-color-bg-surface-critical);
        border: var(--p-border-width-025) solid var(--p-color-border-critical)
    }

    .Polaris-Button--outline_1urzi.Polaris-Button--destructive_zy6o5:focus-visible {
        border: var(--p-border-width-025) solid var(--p-color-border-critical)
    }

    .Polaris-Button--outline_1urzi.Polaris-Button--destructive_zy6o5:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-Button--outline_1urzi.Polaris-Button--destructive_zy6o5:active {
        background: var(--p-color-bg-surface-critical);
        border: var(--p-border-width-025) solid var(--p-color-border-critical)
    }

    .Polaris-Button--outline_1urzi.Polaris-Button--destructive_zy6o5.Polaris-Button--disabled_hcuh9 {
        background: #0000;
        border: var(--p-border-width-025) solid var(--p-color-border-disabled);
        color: var(--p-color-text-disabled)
    }

    .Polaris-Button--outline_1urzi.Polaris-Button--destructive_zy6o5.Polaris-Button--pressed_17w8v {
        background: var(--p-color-bg-surface-critical);
        border: var(--p-border-width-025) solid var(--p-color-border-critical);
        color: var(--p-color-text-critical)
    }

    .Polaris-Button--disabled_hcuh9 {
        cursor: default;
        pointer-events: none
    }

    .Polaris-Button--loading_1brcv {
        position: relative
    }

    .Polaris-Button--loading_1brcv,.Polaris-Button--loading_1brcv.Polaris-Button--disabled_hcuh9,.Polaris-Button--loading_1brcv:hover,html[class~=comp-summer-editons-2023] .Polaris-Button--loading_1brcv,html[class~=comp-summer-editons-2023] .Polaris-Button--loading_1brcv.Polaris-Button--disabled_hcuh9,html[class~=comp-summer-editons-2023] .Polaris-Button--loading_1brcv:hover {
        color: #0000
    }

    .Polaris-Button--loading_1brcv.Polaris-Button--disabled_hcuh9 svg {
        fill: var(--p-color-icon-secondary)
    }

    .Polaris-Button--plain_2z97r {
        background: #0000;
        border: 0;
        box-shadow: none;
        color: var(--p-color-text-emphasis);
        margin: calc(var(--pc-button-vertical-padding)*-1) calc(0.5rem*-1);
        padding-left: 0.5rem;
        padding-right: 0.5rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r {
        box-shadow: none;
        margin: calc(var(--pc-button-vertical-padding)*-1) calc(0.75rem*-1)
    }

    .Polaris-Button--plain_2z97r svg {
        fill: var(--p-color-icon-emphasis)
    }

    .Polaris-Button--plain_2z97r>.Polaris-Button__Content_xd1mk {
        font-weight: var(--p-font-weight-regular);
        position: relative
    }

    .Polaris-Button--plain_2z97r>.Polaris-Button__Content_xd1mk:after {
        border-radius: 0.25rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r>.Polaris-Button__Content_xd1mk {
        font-size: var(--p-font-size-325);
        line-height: var(--p-font-line-height-400)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r>.Polaris-Button__Content_xd1mk:after {
        content: none
    }

    .Polaris-Button--plain_2z97r:focus:not(.Polaris-Button--disabled_hcuh9),.Polaris-Button--plain_2z97r:hover {
        background: #0000;
        box-shadow: none;
        color: var(--p-color-text-emphasis-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r:focus:not(.Polaris-Button--disabled_hcuh9),html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r:hover {
        box-shadow: none
    }

    .Polaris-Button--plain_2z97r:focus:not(.Polaris-Button--disabled_hcuh9) svg,.Polaris-Button--plain_2z97r:hover svg {
        fill: var(--p-color-icon-emphasis-hover)
    }

    .Polaris-Button--plain_2z97r:focus:not(.Polaris-Button--disabled_hcuh9):not(.Polaris-Button--removeUnderline_adav6),.Polaris-Button--plain_2z97r:hover:not(.Polaris-Button--removeUnderline_adav6) {
        text-decoration: underline
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--pressed_17w8v,.Polaris-Button--plain_2z97r:active {
        background: #0000;
        box-shadow: none;
        color: var(--p-color-text-emphasis-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--pressed_17w8v,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r:active {
        background-color: initial;
        color: var(--p-color-text-emphasis-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--pressed_17w8v>.Polaris-Button__Content_xd1mk,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r:active>.Polaris-Button__Content_xd1mk {
        transform: translateY(0)
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--pressed_17w8v svg,.Polaris-Button--plain_2z97r:active svg,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--pressed_17w8v svg,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r:active svg {
        fill: var(--p-color-icon-emphasis-active)
    }

    @media (-ms-high-contrast:active) {
        .Polaris-Button--plain_2z97r.Polaris-Button--pressed_17w8v,.Polaris-Button--plain_2z97r:active {
            outline: none
        }
    }

    .Polaris-Button--plain_2z97r:focus-visible:after {
        content: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r:focus-visible {
        outline: none
    }

    @media (-ms-high-contrast:active) {
        .Polaris-Button--plain_2z97r:focus-visible {
            outline: none
        }
    }

    @media (-ms-high-contrast:active) {
        .Polaris-Button--plain_2z97r:focus-visible>.Polaris-Button__Content_xd1mk {
            outline: var(--p-border-width-050) dotted
        }
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r:focus-visible>.Polaris-Button__Content_xd1mk {
        border-radius: var(--p-border-radius-150);
        outline: var(--p-border-width-050) solid var(--p-color-border-focus);
        outline-offset: var(--p-space-050)
    }

    .Polaris-Button--plain_2z97r:focus-visible:not(:active)>.Polaris-Button__Content_xd1mk:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r:focus-visible:not(:active)>.Polaris-Button__Content_xd1mk:after {
        content: none
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--pressed_17w8v:not(.Polaris-Button--iconOnly_viazp)>.Polaris-Button__Content_xd1mk,.Polaris-Button--plain_2z97r:active:not(.Polaris-Button--iconOnly_viazp)>.Polaris-Button__Content_xd1mk {
        background: #0000;
        border-radius: 0.25rem;
        margin: calc(var(--p-space-050)*-1) calc(0.25rem*-1);
        padding: var(--p-space-050) 0.25rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--pressed_17w8v:not(.Polaris-Button--iconOnly_viazp)>.Polaris-Button__Content_xd1mk,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r:active:not(.Polaris-Button--iconOnly_viazp)>.Polaris-Button__Content_xd1mk {
        margin: unset;
        padding: unset
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--fullWidth_zyvh4 {
        margin-left: 0;
        margin-right: 0
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--disabled_hcuh9 {
        background: none;
        color: var(--p-color-text-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--disabled_hcuh9 {
        background: none;
        box-shadow: none
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--disabled_hcuh9.Polaris-Button--loading_1brcv,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--disabled_hcuh9.Polaris-Button--loading_1brcv {
        color: #0000
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5 {
        color: var(--p-color-text-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5 {
        box-shadow: none
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5 svg {
        fill: var(--p-color-icon-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5 svg {
        fill: var(--p-color-icon-critical-strong-experimental)
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5:hover {
        color: var(--p-color-bg-fill-critical-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5:focus:not(:active):not(.Polaris-Button--pressed_17w8v):not(.Polaris-Button--disabled_hcuh9),html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5:hover {
        color: var(--p-color-text-critical-hover-experimental)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5:focus:not(:active):not(.Polaris-Button--pressed_17w8v):not(.Polaris-Button--disabled_hcuh9) svg,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5:hover svg {
        fill: var(--p-color-icon-critical-strong-hover-experimental)
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--pressed_17w8v,.Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5:active,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--pressed_17w8v,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5:active {
        color: var(--p-color-text-critical-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--pressed_17w8v svg,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5:active svg {
        fill: var(--p-color-icon-critical-strong-active-experimental)
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--disabled_hcuh9 {
        color: var(--p-color-text-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--disabled_hcuh9 svg {
        fill: var(--p-color-icon-disabled)
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--sizeSlim_1p6ue {
        margin-bottom: calc(var(--pc-button-slim-vertical-padding)*-1);
        margin-top: calc(var(--pc-button-slim-vertical-padding)*-1)
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--sizeLarge_61dxo {
        margin: calc(var(--pc-button-large-vertical-padding)*-1) calc(var(--p-space-500)*-1)
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp {
        margin: calc(0.5rem*-1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp {
        margin: 0;
        min-height: var(--p-font-line-height-500);
        min-width: var(--p-font-line-height-500);
        padding: 0
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp svg {
        fill: #4a4a4a
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp svg {
        fill: var(--p-color-icon-secondary)
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp:hover svg,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp:hover svg {
        fill: #303030
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp.Polaris-Button--pressed_17w8v svg,.Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp:active svg,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp.Polaris-Button--pressed_17w8v svg,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp:active svg {
        fill: var(--p-color-icon-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp:focus svg {
        fill: #303030
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp.Polaris-Button--disabled_hcuh9 svg,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp.Polaris-Button--disabled_hcuh9 svg {
        fill: var(--p-color-icon-disabled)
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--iconOnly_viazp svg {
        fill: var(--p-color-bg-fill-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--iconOnly_viazp svg {
        fill: var(--p-color-icon-critical-strong-experimental)
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--iconOnly_viazp:hover svg {
        fill: var(--p-color-bg-fill-critical-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--iconOnly_viazp:hover svg {
        fill: var(--p-color-icon-critical-strong-hover-experimental)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--iconOnly_viazp:focus:not(:active):not(.Polaris-Button--pressed_17w8v):not(.Polaris-Button--disabled_hcuh9) svg {
        fill: var(--p-color-icon-critical-strong-experimental)
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--iconOnly_viazp.Polaris-Button--pressed_17w8v svg,.Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--iconOnly_viazp:active svg {
        fill: var(--p-color-bg-fill-critical-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--iconOnly_viazp.Polaris-Button--pressed_17w8v svg,html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--iconOnly_viazp:active svg {
        fill: var(--p-color-icon-critical-strong-active-experimental)
    }

    .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--iconOnly_viazp.Polaris-Button--disabled_hcuh9 svg {
        fill: var(--p-color-bg-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--plain_2z97r.Polaris-Button--destructive_zy6o5.Polaris-Button--iconOnly_viazp.Polaris-Button--disabled_hcuh9 svg {
        fill: var(--p-color-icon-disabled)
    }

    .Polaris-Button--plain_2z97r .Polaris-Button__Icon_yj27d {
        margin-left: 0;
        margin-right: 0
    }

    .Polaris-Button--fullWidth_zyvh4 {
        display: flex;
        width: 100%
    }

    .Polaris-Button--iconOnly_viazp {
        padding-left: 0.5rem;
        padding-right: 0.5rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--iconOnly_viazp {
        padding-left: var(--p-space-150);
        padding-right: var(--p-space-150)
    }

    @media (min-width: 48em) {
        html[class~=comp-summer-editons-2023] .Polaris-Button--iconOnly_viazp {
            padding-left:0.25rem;
            padding-right: 0.25rem
        }
    }

    .Polaris-Button--iconOnly_viazp.Polaris-Button--sizeLarge_61dxo {
        padding-left: 0.75rem;
        padding-right: 0.75rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--iconOnly_viazp.Polaris-Button--sizeLarge_61dxo {
        padding-left: var(--pc-button-large-vertical-padding);
        padding-right: var(--pc-button-large-vertical-padding)
    }

    @media (min-width: 48em) {
        html[class~=comp-summer-editons-2023] .Polaris-Button--iconOnly_viazp.Polaris-Button--sizeLarge_61dxo {
            padding-left:var(--p-space-150);
            padding-right: var(--p-space-150)
        }
    }

    .Polaris-Button--iconOnly_viazp.Polaris-Button--sizeSlim_1p6ue {
        padding-left: 0.25rem;
        padding-right: 0.25rem
    }

    .Polaris-Button--iconOnly_viazp .Polaris-Button__Icon_yj27d:first-child,html[class~=comp-summer-editons-2023] .Polaris-Button--iconOnly_viazp .Polaris-Button__Icon_yj27d:first-child {
        margin-left: 0
    }

    .Polaris-Button--iconOnly_viazp .Polaris-Button__Icon_yj27d:last-child {
        margin-right: calc(0.25rem*-1)
    }

    .Polaris-Button--iconOnly_viazp .Polaris-Button__Icon_yj27d:only-child {
        margin-right: 0
    }

    .Polaris-Button--sizeMicro_pq72j {
        border-radius: 0.25rem;
        min-height: var(--pc-button-micro-min-height);
        padding: 0.25rem 0.5rem
    }

    .Polaris-Button--sizeMicro_pq72j .Polaris-Button__Content_xd1mk {
        font-size: var(--p-font-size-350);
        font-weight: var(--p-font-weight-semibold);
        line-height: var(--p-font-line-height-500)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--sizeMicro_pq72j {
        min-height: var(--pc-button-micro-min-height);
        padding: 0.25rem 0.5rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--sizeMicro_pq72j .Polaris-Button__Content_xd1mk {
        font-weight: 500
    }

    @media (min-width: 48em) {
        .Polaris-Button--sizeMicro_pq72j {
            padding:var(--p-space-050) 0.5rem
        }

        .Polaris-Button--sizeMicro_pq72j .Polaris-Button__Content_xd1mk {
            font-size: var(--p-font-size-75);
            line-height: var(--p-font-line-height-400)
        }

        html[class~=comp-summer-editons-2023] .Polaris-Button--sizeMicro_pq72j {
            min-height: var(--pc-button-micro-min-height);
            padding: 0.25rem 0.5rem
        }
    }

    .Polaris-Button--sizeSlim_1p6ue {
        min-height: var(--pc-button-slim-min-height);
        padding: var(--pc-button-slim-vertical-padding) 0.75rem
    }

    .Polaris-Button--sizeLarge_61dxo {
        min-height: var(--pc-button-large-min-height);
        min-width: var(--pc-button-large-min-height);
        padding: var(--pc-button-large-vertical-padding) var(--p-space-600)
    }

    .Polaris-Button--sizeLarge_61dxo .Polaris-Button__Content_xd1mk {
        font-size: var(--p-font-size-200);
        font-weight: 500;
        letter-spacing: normal;
        line-height: var(--p-font-line-height-500)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--sizeLarge_61dxo {
        min-height: var(--pc-button-large-min-height);
        min-width: var(--pc-button-large-min-height);
        padding: var(--pc-button-large-vertical-padding) 0.75rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button--sizeLarge_61dxo .Polaris-Button__Content_xd1mk {
        font-size: var(--p-font-size-325)
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r {
        color: currentColor
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r svg {
        fill: currentColor
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:active,.Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:focus,.Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:hover,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r:active,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r:focus,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r:hover {
        color: currentColor
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:active svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:focus svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:hover svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r:active svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r:focus svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r:hover svg {
        fill: currentColor
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi.Polaris-Button--disabled_hcuh9,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r.Polaris-Button--disabled_hcuh9 {
        color: currentColor;
        opacity: .4
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi.Polaris-Button--disabled_hcuh9 svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r.Polaris-Button--disabled_hcuh9 svg {
        fill: currentColor
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi.Polaris-Button--loading_1brcv .Polaris-Button__Text_yj3uv,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r.Polaris-Button--loading_1brcv .Polaris-Button__Text_yj3uv {
        visibility: hidden
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi.Polaris-Button--iconOnly_viazp svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi.Polaris-Button--iconOnly_viazp.Polaris-Button--disabled_hcuh9 svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi.Polaris-Button--iconOnly_viazp:active svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi.Polaris-Button--iconOnly_viazp:focus svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp.Polaris-Button--disabled_hcuh9 svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp:active svg,.Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r.Polaris-Button--iconOnly_viazp:focus svg {
        fill: currentColor
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--plain_2z97r .Polaris-Button__Text_yj3uv:not(.Polaris-Button--removeUnderline_adav6) {
        text-decoration: underline
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi {
        border-color: currentColor;
        box-shadow: 0 0 0 var(--p-border-width-025) currentColor;
        position: relative
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:after {
        border-radius: 0.25rem;
        bottom: -.1875rem;
        box-shadow: 0 0 0 -.1875rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.1875rem;
        pointer-events: none;
        position: absolute;
        right: -.1875rem;
        top: -.1875rem;
        z-index: 1
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:before {
        background-color: currentColor;
        bottom: 0;
        content: "";
        left: 0;
        opacity: 0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi.Polaris-Button--pressed_17w8v {
        background: #0000;
        box-shadow: none;
        color: currentColor
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi.Polaris-Button--pressed_17w8v:before {
        opacity: .2
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:active,.Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:focus,.Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:hover {
        background-color: initial;
        border-color: currentColor
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:active:before,.Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:focus:before,.Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:hover:before {
        opacity: .07
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:focus-visible {
        box-shadow: 0 0 0 var(--p-border-width-025) currentColor
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:active:after {
        box-shadow: none
    }

    .Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:active:before,.Polaris-Button--monochrome_14jw2.Polaris-Button--outline_1urzi:hover:before {
        opacity: .05
    }

    .Polaris-Button__ConnectedDisclosureWrapper_90uyh {
        display: flex
    }

    .Polaris-Button__ConnectedDisclosure_153ua {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
        height: 100%;
        margin-left: calc(var(--p-space-025)*-1);
        z-index: var(--pc-button-segment)
    }

    .Polaris-Button__ConnectedDisclosure_153ua:active,.Polaris-Button__ConnectedDisclosure_153ua:focus {
        z-index: var(--pc-button-focused)
    }

    .Polaris-Button__ConnectedDisclosure_153ua.Polaris-Button--destructive_zy6o5,.Polaris-Button__ConnectedDisclosure_153ua.Polaris-Button--primary_7k9zs {
        margin-left: var(--p-space-025)
    }

    .Polaris-Button__ConnectedDisclosure_153ua.Polaris-Button--destructive_zy6o5.Polaris-Button--outline_1urzi,.Polaris-Button__ConnectedDisclosure_153ua.Polaris-Button--primary_7k9zs.Polaris-Button--outline_1urzi {
        border-left: 0;
        margin-left: 0
    }

    .Polaris-Button__ConnectedDisclosure_153ua:after {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button__ConnectedDisclosure_153ua {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
        margin-left: calc(var(--p-space-050)*-1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button__ConnectedDisclosure_153ua:before {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0
    }

    html[class~=comp-summer-editons-2023] .Polaris-Button__ConnectedDisclosure_153ua:active .Polaris-Button__Icon_yj27d {
        transform: translateY(.0625rem)
    }

    [data-buttongroup-segmented=true] .Polaris-Button_r99lw,[data-buttongroup-segmented=true] .Polaris-Button_r99lw:after,html[class~=comp-summer-editons-2023] [data-buttongroup-segmented=true] .Polaris-Button_r99lw,html[class~=comp-summer-editons-2023] [data-buttongroup-segmented=true] .Polaris-Button_r99lw:after {
        border-radius: 0
    }

    html[class~=comp-summer-editons-2023] [data-buttongroup-segmented=true] .Polaris-Button_r99lw.Polaris-Button--pressed_17w8v {
        clip-path: none!important
    }

    [data-buttongroup-segmented=true]>:first-child .Polaris-Button_r99lw,[data-buttongroup-segmented=true]>:first-child .Polaris-Button_r99lw:after,[data-buttongroup-segmented=true]>:first-child .Polaris-Button_r99lw:before {
        border-radius: 0;
        border-bottom-left-radius: 0.25rem;
        border-top-left-radius: 0.25rem
    }

    html[class~=comp-summer-editons-2023] [data-buttongroup-segmented=true]>:first-child .Polaris-Button_r99lw,html[class~=comp-summer-editons-2023] [data-buttongroup-segmented=true]>:first-child .Polaris-Button_r99lw:after,html[class~=comp-summer-editons-2023] [data-buttongroup-segmented=true]>:first-child .Polaris-Button_r99lw:before {
        border-bottom-left-radius: 0.5rem;
        border-top-left-radius: 0.5rem
    }

    [data-buttongroup-segmented=true]>:last-child .Polaris-Button_r99lw,[data-buttongroup-segmented=true]>:last-child .Polaris-Button_r99lw:after,[data-buttongroup-segmented=true]>:last-child .Polaris-Button_r99lw:before {
        border-radius: 0;
        border-bottom-right-radius: 0.25rem;
        border-top-right-radius: 0.25rem
    }

    html[class~=comp-summer-editons-2023] [data-buttongroup-segmented=true]>:last-child .Polaris-Button_r99lw,html[class~=comp-summer-editons-2023] [data-buttongroup-segmented=true]>:last-child .Polaris-Button_r99lw:after,html[class~=comp-summer-editons-2023] [data-buttongroup-segmented=true]>:last-child .Polaris-Button_r99lw:before {
        border-bottom-right-radius: 0.5rem;
        border-top-right-radius: 0.5rem
    }

    [data-buttongroup-segmented=true]>:last-child:first-child .Polaris-Button_r99lw,[data-buttongroup-segmented=true]>:last-child:first-child .Polaris-Button_r99lw:after {
        border-radius: 0.25rem
    }

    html[class~=comp-summer-editons-2023] [data-buttongroup-segmented=true]>:last-child:first-child .Polaris-Button_r99lw,html[class~=comp-summer-editons-2023] [data-buttongroup-segmented=true]>:last-child:first-child .Polaris-Button_r99lw:after {
        border-radius: 0.5rem
    }

    [data-buttongroup-connected-top=true]>:first-child .Polaris-Button_r99lw,[data-buttongroup-connected-top=true]>:first-child .Polaris-Button_r99lw:after,[data-buttongroup-connected-top=true]>:first-child .Polaris-Button_r99lw:before {
        border-top-left-radius: 0
    }

    [data-buttongroup-connected-top=true]>:last-child .Polaris-Button_r99lw,[data-buttongroup-connected-top=true]>:last-child .Polaris-Button_r99lw:after,[data-buttongroup-connected-top=true]>:last-child .Polaris-Button_r99lw:before {
        border-top-right-radius: 0
    }

    [data-buttongroup-full-width=true] .Polaris-Button_r99lw {
        display: flex;
        width: 100%
    }

    .comp-icon {
        display: block;
        height: 1.25rem;
        margin: auto;
        max-height: 100%;
        max-width: 100%;
        width: 1.25rem
    }

    .comp-icon--apply-color {
        color: var(--p-color-bg-surface)
    }

    .Polaris-Icon--hasBackdrop_1anyy {
        align-items: center;
        display: flex;
        margin: 0.25rem;
        position: relative
    }

    .Polaris-Icon--hasBackdrop_1anyy:before {
        border-radius: var(--p-border-radius-full);
        bottom: calc(0.25rem*-1);
        content: "";
        left: calc(0.25rem*-1);
        position: absolute;
        right: calc(0.25rem*-1);
        top: calc(0.25rem*-1)
    }

    .comp-icon--color-base svg {
        fill: #4a4a4a
    }

    .comp-icon--color-base:before {
        background-color: var(--p-color-bg-fill-tertiary)
    }

    .Polaris-Icon--colorSubdued_113xs svg {
        fill: var(--p-color-icon-secondary)
    }

    .Polaris-Icon--colorCritical_glskc svg {
        fill: var(--p-color-icon-critical)
    }

    .Polaris-Icon--colorCritical_glskc:before {
        background-color: var(--p-color-bg-fill-critical-secondary)
    }

    .Polaris-Icon--colorInteractive_1wzbd svg {
        fill: var(--p-color-icon-emphasis)
    }

    .Polaris-Icon--colorWarning_14tqz svg {
        fill: var(--p-color-icon-caution)
    }

    .Polaris-Icon--colorWarning_14tqz:before {
        background-color: var(--p-color-bg-fill-warning-secondary)
    }

    .Polaris-Icon--colorHighlight_2qv4t svg {
        fill: var(--p-color-icon-info)
    }

    .Polaris-Icon--colorHighlight_2qv4t:before {
        background-color: var(--p-color-bg-fill-info-secondary)
    }

    .Polaris-Icon--colorSuccess_k0sue svg {
        fill: var(--p-color-icon-success)
    }

    .Polaris-Icon--colorSuccess_k0sue:before {
        background-color: var(--p-color-bg-fill-success-secondary)
    }

    .Polaris-Icon--colorPrimary_4ruww svg {
        fill: var(--p-color-icon-brand)
    }

    .Polaris-Icon--colorMagic_1mkpp svg {
        fill: var(--p-color-icon-magic)
    }

    .Polaris-Icon__Img_375hq,.comp-icon__svg {
        display: block;
        max-height: 100%;
        max-width: 100%;
        position: relative;
        width: 100%
    }

    .Polaris-Icon__Placeholder_w9ga3 {
        background: currentColor;
        padding-bottom: 100%
    }

    .comp-text--root {
        margin: 0;
        text-align: inherit
    }

    .comp-text--block {
        display: block
    }

    .comp-text--truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .comp-text--visually-hidden {
        border: 0!important;
        clip-path: inset(50%)!important;
        height: .0625rem!important;
        margin: 0!important;
        overflow: hidden!important;
        padding: 0!important;
        position: absolute!important;
        top: 0;
        white-space: nowrap!important;
        width: .0625rem!important
    }

    .Polaris-Text--start_30ir5 {
        text-align: start
    }

    .Polaris-Text--center_z4ik6 {
        text-align: center
    }

    .Polaris-Text--end_375c0 {
        text-align: end
    }

    .Polaris-Text--justify_f67oi {
        text-align: justify
    }

    .Polaris-Text--success_z03ht {
        color: var(--p-color-text-success)
    }

    .Polaris-Text--critical_uivil {
        color: var(--p-color-text-critical)
    }

    .Polaris-Text--warning_1brnr {
        color: var(--p-color-text-caution)
    }

    .Polaris-Text--subdued_17vaa {
        color: var(--p-color-text-secondary)
    }

    .Polaris-Text__text--inverse_1v0hu {
        color: var(--p-color-text-inverse)
    }

    .Polaris-Text--headingXs_9lann {
        font-size: var(--p-font-size-75);
        font-weight: var(--p-font-weight-semibold);
        line-height: var(--p-font-line-height-400)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Text--headingXs_9lann {
        font-size: var(--p-font-size-325);
        line-height: var(--p-font-line-height-500)
    }

    .comp-text--heading-sm {
        font-size: var(--p-font-size-350);
        font-weight: var(--p-font-weight-semibold);
        line-height: var(--p-font-line-height-500)
    }

    html[class~=comp-summer-editons-2023] .comp-text--heading-sm {
        font-size: var(--p-font-size-325);
        line-height: var(--p-font-line-height-500)
    }

    .Polaris-Text--headingMd_lwjt4 {
        font-size: var(--p-font-size-200);
        font-weight: var(--p-font-weight-semibold);
        line-height: var(--p-font-line-height-600)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Text--headingMd_lwjt4 {
        font-size: var(--p-font-size-350);
        line-height: var(--p-font-line-height-500)
    }

    .Polaris-Text--headingLg_yyh4u {
        font-size: var(--p-font-size-200);
        font-weight: var(--p-font-weight-semibold);
        line-height: var(--p-font-line-height-500)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Text--headingLg_yyh4u {
        font-size: var(--p-font-size-300);
        font-weight: var(--p-font-weight-bold);
        line-height: var(--p-font-line-height-600)
    }

    @media (min-width: 48em) {
        .Polaris-Text--headingLg_yyh4u {
            font-size:var(--p-font-size-300);
            line-height: var(--p-font-line-height-600)
        }
    }

    .Polaris-Text--headingXl_1dele {
        font-size: var(--p-font-size-300);
        font-weight: var(--p-font-weight-semibold);
        line-height: var(--p-font-line-height-600)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Text--headingXl_1dele {
        font-weight: var(--p-font-weight-bold)
    }

    @media (min-width: 48em) {
        .Polaris-Text--headingXl_1dele {
            font-size:var(--p-font-size-400);
            line-height: var(--p-font-line-height-700)
        }

        html[class~=comp-summer-editons-2023] .Polaris-Text--headingXl_1dele {
            line-height: var(--p-font-line-height-800)
        }
    }

    .Polaris-Text--heading2xl_1aguw {
        font-size: var(--p-font-size-300);
        font-weight: var(--p-font-weight-semibold);
        line-height: var(--p-font-line-height-600)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Text--heading2xl_1aguw {
        font-size: var(--p-font-size-400);
        font-weight: var(--p-font-weight-bold);
        line-height: var(--p-font-line-height-800)
    }

    @media (min-width: 48em) {
        .Polaris-Text--heading2xl_1aguw {
            font-size:var(--p-font-size-500);
            line-height: var(--p-font-line-height-800)
        }

        html[class~=comp-summer-editons-2023] .Polaris-Text--heading2xl_1aguw {
            font-size: var(--p-font-size-500);
            line-height: var(--p-font-line-height-1000)
        }
    }

    .Polaris-Text--heading3xl_ue5la {
        font-size: var(--p-font-size-400);
        font-weight: var(--p-font-weight-semibold);
        line-height: var(--p-font-line-height-700)
    }

    @media (min-width: 48em) {
        .Polaris-Text--heading3xl_ue5la {
            font-size:var(--p-font-size-600);
            line-height: var(--p-font-line-height-1000)
        }
    }

    html[class~=comp-summer-editons-2023] .Polaris-Text--heading3xl_ue5la {
        font-size: var(--p-font-size-500);
        font-weight: var(--p-font-weight-bold);
        line-height: var(--p-font-line-height-1000)
    }

    @media (min-width: 48em) {
        html[class~=comp-summer-editons-2023] .Polaris-Text--heading3xl_ue5la {
            font-size:var(--p-font-size-600);
            line-height: var(--p-font-line-height-1200)
        }
    }

    .Polaris-Text--heading4xl_1jwa0 {
        font-size: var(--p-font-size-600);
        font-weight: var(--p-font-weight-bold);
        line-height: var(--p-font-line-height-1000)
    }

    @media (min-width: 48em) {
        .Polaris-Text--heading4xl_1jwa0 {
            font-size:var(--p-font-size-1000);
            line-height: var(--p-font-line-height-1200)
        }
    }

    html[class~=comp-summer-editons-2023] .Polaris-Text--heading4xl_1jwa0 {
        font-size: var(--p-font-size-500);
        font-weight: var(--p-font-weight-bold);
        line-height: var(--p-font-line-height-1000)
    }

    @media (min-width: 48em) {
        html[class~=comp-summer-editons-2023] .Polaris-Text--heading4xl_1jwa0 {
            font-size:var(--p-font-size-600);
            line-height: var(--p-font-line-height-1200)
        }
    }

    .Polaris-Text--bodySm_nvqxj {
        font-size: var(--p-font-size-75);
        line-height: var(--p-font-line-height-400)
    }

    .comp-text--body {
        font-size: var(--p-font-size-350);
        line-height: var(--p-font-line-height-500)
    }

    html[class~=comp-summer-editons-2023] .comp-text--body {
        font-size: var(--p-font-size-325)
    }

    .Polaris-Text--bodyLg_mi7qq {
        font-size: var(--p-font-size-200);
        line-height: var(--p-font-line-height-500)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Text--bodyLg_mi7qq {
        font-size: var(--p-font-size-350)
    }

    .Polaris-Text--regular_pjgr0 {
        font-weight: var(--p-font-weight-regular)
    }

    .comp-text--medium {
        font-weight: 500
    }

    .Polaris-Text--semibold_k1k0m {
        font-weight: var(--p-font-weight-semibold)
    }

    .Polaris-Text--bold_yirzs {
        font-weight: var(--p-font-weight-bold)
    }

    .Polaris-Text--break_32vap {
        overflow-wrap: anywhere;
        word-break: normal
    }

    .Polaris-Text--numeric_1r59u {
        font-variant-numeric: tabular-nums lining-nums
    }

    .Polaris-Text__line--through_1cl7a {
        text-decoration-line: line-through
    }

    .Polaris-Spinner_mzr5w svg {
        fill: var(--p-color-border-info);
        animation: var(--p-motion-keyframes-spin) var(--p-motion-duration-500) linear infinite
    }

    html[class~=comp-summer-editons-2023] .Polaris-Spinner_mzr5w svg {
        fill: var(--p-color-bg-interactive)
    }

    .Polaris-Spinner--sizeSmall_7647q svg {
        height: 1.25rem;
        width: 1.25rem
    }

    .Polaris-Spinner--sizeLarge_61dxo svg {
        height: 2.75rem;
        width: 2.75rem
    }

    .Polaris-Popover_mj4rb {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 0.5rem;
        box-shadow: var(--p-shadow-xl);
        margin: .3125rem 0.5rem var(--p-space-400);
        max-width: calc(100vw - var(--p-space-800));
        will-change: left,top
    }

    html[class~=comp-summer-editons-2023] .Polaris-Popover_mj4rb {
        border: var(--pc-app-provider-shadow-bevel-border);
        border-radius: var(--p-border-radius-300);
        box-shadow: var(--p-shadow-md);
        position: relative
    }

    html[class~=comp-summer-editons-2023] .Polaris-Popover_mj4rb:before {
        border-radius: var(--p-border-radius-300);
        bottom: 0;
        box-shadow: var(--p-shadow-bevel-experimental);
        content: var(--pc-app-provider-shadow-bevel-content);
        left: 0;
        mix-blend-mode: luminosity;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 2
    }

    .Polaris-Popover__PopoverOverlay_emiux {
        opacity: 0;
        transform: translateY(-.3125rem);
        transition: opacity var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1),transform var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1)
    }

    .Polaris-Popover__PopoverOverlay--entering_n4nyg {
        opacity: 1;
        transform: translateY(0)
    }

    .Polaris-Popover__PopoverOverlay--open_4ccww {
        opacity: 1;
        transform: none
    }

    .Polaris-Popover--measuring_wb2tw:not(.Polaris-Popover__PopoverOverlay--exiting_1qydg) {
        opacity: 0;
        transform: translateY(-.3125rem)
    }

    .Polaris-Popover--fullWidth_zyvh4 {
        margin: .3125rem auto 0 auto
    }

    .Polaris-Popover--fullWidth_zyvh4 .Polaris-Popover__Content_xd1mk {
        max-width: none
    }

    .Polaris-Popover--positionedAbove_1f44z {
        margin: var(--p-space-400) 0.5rem .3125rem
    }

    .Polaris-Popover--positionedAbove_1f44z.Polaris-Popover--fullWidth_zyvh4 {
        margin: 0 auto .3125rem auto
    }

    .Polaris-Popover__ContentContainer_vq40t {
        background: var(--p-color-bg-surface);
        border-radius: 0.5rem;
        isolation: isolate;
        overflow: hidden;
        position: relative
    }

    html[class~=comp-summer-editons-2023] .Polaris-Popover__ContentContainer_vq40t {
        border-radius: 0.75rem
    }

    .Polaris-Popover__Content_xd1mk {
        border-radius: 0.25rem;
        display: flex;
        flex-direction: column;
        max-height: 31.25rem;
        max-width: 25rem;
        position: relative
    }

    .Polaris-Popover__Content_xd1mk:focus {
        outline: none
    }

    .Polaris-Popover__Content--fullHeight_cka7c {
        max-height: 100vh
    }

    .Polaris-Popover__Content--fluidContent_141kh {
        max-height: none;
        max-width: none
    }

    .Polaris-Popover__Pane_yisof {
        flex: 1 1 auto;
        max-width: 100%
    }

    .Polaris-Popover__Pane_yisof+.Polaris-Popover__Pane_yisof {
        border-top: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Popover__Pane_yisof+.Polaris-Popover__Pane_yisof {
        border-top: none
    }

    .Polaris-Popover__Pane_yisof:focus {
        outline: none
    }

    .Polaris-Popover__Pane--fixed_qp836 {
        flex: 0 0 auto;
        overflow: visible
    }

    .Polaris-Popover__Pane--subdued_gvus6 {
        background-color: var(--p-color-bg-surface-secondary)
    }

    .Polaris-Popover__Pane--captureOverscroll_6wwdt {
        overscroll-behavior: contain
    }

    .Polaris-Popover__Section_1b1h1+.Polaris-Popover__Section_1b1h1 {
        border-top: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Polaris-Popover__FocusTracker_1y0x8 {
        border: 0!important;
        clip-path: inset(50%)!important;
        height: .0625rem!important;
        margin: 0!important;
        overflow: hidden!important;
        padding: 0!important;
        position: absolute!important;
        top: 0;
        white-space: nowrap!important;
        width: .0625rem!important
    }

    @media print {
        .Polaris-Popover__PopoverOverlay--hideOnPrint_1e1e1 {
            display: none!important
        }
    }

    .Polaris-PositionedOverlay_2y1hl {
        position: absolute;
        z-index: var(--p-z-index-2)
    }

    .Polaris-PositionedOverlay--fixed_2pq5o {
        position: fixed
    }

    .Polaris-PositionedOverlay--calculating_fzare {
        visibility: hidden
    }

    .Polaris-PositionedOverlay--preventInteraction_11hw5 {
        pointer-events: none
    }

    .Polaris-Scrollable_1ed9o {
        --pc-scrollable-shadow-size: var(--p-space-500);
        --pc-scrollable-shadow-color: #00000026;
        --pc-scrollable-shadow-bottom: 0 var(--pc-scrollable-shadow-size) var(--pc-scrollable-shadow-size) var(--pc-scrollable-shadow-size) var(--pc-scrollable-shadow-color);
        --pc-scrollable-shadow-top: 0 calc(var(--pc-scrollable-shadow-size)*-1) var(--pc-scrollable-shadow-size) var(--pc-scrollable-shadow-size) var(--pc-scrollable-shadow-color);
        --pc-scrollable-max-height: none;
        -webkit-overflow-scrolling: touch;
        isolation: isolate;
        max-height: var(--pc-scrollable-max-height);
        overflow-x: hidden;
        overflow-y: hidden;
        position: relative
    }

    .Polaris-Scrollable_1ed9o:focus {
        outline: var(--p-border-width-050) solid var(--p-color-border-focus);
        outline-offset: var(--p-space-050)
    }

    .Polaris-Scrollable_1ed9o.Polaris-Scrollable--hasBottomShadow_all2n:after,.Polaris-Scrollable_1ed9o.Polaris-Scrollable--hasBottomShadow_all2n:before,.Polaris-Scrollable_1ed9o.Polaris-Scrollable--hasTopShadow_cgwp0:after,.Polaris-Scrollable_1ed9o.Polaris-Scrollable--hasTopShadow_cgwp0:before {
        content: "";
        display: block;
        height: var(--p-space-0);
        left: 0;
        pointer-events: none;
        position: sticky;
        width: 100%;
        z-index: 32
    }

    .Polaris-Scrollable_1ed9o.Polaris-Scrollable--hasBottomShadow_all2n:before,.Polaris-Scrollable_1ed9o.Polaris-Scrollable--hasTopShadow_cgwp0:before {
        top: 0
    }

    .Polaris-Scrollable_1ed9o.Polaris-Scrollable--hasBottomShadow_all2n:after,.Polaris-Scrollable_1ed9o.Polaris-Scrollable--hasTopShadow_cgwp0:after {
        bottom: 0
    }

    .Polaris-Scrollable_1ed9o.Polaris-Scrollable--hasTopShadow_cgwp0:before {
        box-shadow: var(--pc-scrollable-shadow-top)
    }

    .Polaris-Scrollable_1ed9o.Polaris-Scrollable--hasBottomShadow_all2n:after {
        box-shadow: var(--pc-scrollable-shadow-bottom)
    }

    .Polaris-Scrollable--horizontal_17qq4 {
        overflow-x: auto
    }

    .Polaris-Scrollable--vertical_uiuuj {
        overflow-y: auto
    }

    .Polaris-Box--listReset_1gz07 {
        list-style-type: none;
        margin-block-end:0;margin-block-start:0;outline: none;
        padding-inline-start:0}

    .comp-box {
        --pc-box-padding-block-end-xs: initial;
        --pc-box-padding-block-end-sm: initial;
        --pc-box-padding-block-end-md: initial;
        --pc-box-padding-block-end-lg: initial;
        --pc-box-padding-block-end-xl: initial;
        --pc-box-padding-block-start-xs: initial;
        --pc-box-padding-block-start-sm: initial;
        --pc-box-padding-block-start-md: initial;
        --pc-box-padding-block-start-lg: initial;
        --pc-box-padding-block-start-xl: initial;
        --pc-box-padding-inline-start-xs: initial;
        --pc-box-padding-inline-start-sm: initial;
        --pc-box-padding-inline-start-md: initial;
        --pc-box-padding-inline-start-lg: initial;
        --pc-box-padding-inline-start-xl: initial;
        --pc-box-padding-inline-end-xs: initial;
        --pc-box-padding-inline-end-sm: initial;
        --pc-box-padding-inline-end-md: initial;
        --pc-box-padding-inline-end-lg: initial;
        --pc-box-padding-inline-end-xl: initial;
        --pc-box-shadow: initial;
        --pc-box-background: initial;
        --pc-box-border-radius: initial;
        --pc-box-border-radius-end-start: var(--pc-box-border-radius);
        --pc-box-border-radius-end-end: var(--pc-box-border-radius);
        --pc-box-border-radius-start-start: var(--pc-box-border-radius);
        --pc-box-border-radius-start-end: var(--pc-box-border-radius);
        --pc-box-color: initial;
        --pc-box-min-height: initial;
        --pc-box-min-width: initial;
        --pc-box-max-width: initial;
        --pc-box-outline-color: initial;
        --pc-box-outline-style: initial;
        --pc-box-outline-width: initial;
        --pc-box-overflow-x: initial;
        --pc-box-overflow-y: initial;
        --pc-box-width: initial;
        --pc-box-border-style: initial;
        --pc-box-border-color: initial;
        --pc-box-border-width: 0;
        --pc-box-border-block-start-width: var(--pc-box-border-width);
        --pc-box-border-block-end-width: var(--pc-box-border-width);
        --pc-box-border-inline-start-width: var(--pc-box-border-width);
        --pc-box-border-inline-end-width: var(--pc-box-border-width);
        --pc-box-inset-block-start: initial;
        --pc-box-inset-block-end: initial;
        --pc-box-inset-inline-start: initial;
        --pc-box-inset-inline-end: initial;
        -webkit-overflow-scrolling: touch;
        background-color: var(--pc-box-background);
        border-block-end-width:var(--pc-box-border-block-end-width);border-block-start-width: var(--pc-box-border-block-start-width);
        border-color: var(--pc-box-border-color);
        border-end-end-radius: var(--pc-box-border-radius-end-end);
        border-end-start-radius: var(--pc-box-border-radius-end-start);
        border-inline-end-width:var(--pc-box-border-inline-end-width);border-inline-start-width: var(--pc-box-border-inline-start-width);
        border-start-end-radius: var(--pc-box-border-radius-start-end);
        border-start-start-radius: var(--pc-box-border-radius-start-start);
        border-style: var(--pc-box-border-style);
        box-shadow: var(--pc-box-shadow);
        color: var(--pc-box-color);
        inset-block-end: var(--pc-box-inset-block-end);
        inset-block-start: var(--pc-box-inset-block-start);
        inset-inline-end: var(--pc-box-inset-inline-end);
        inset-inline-start: var(--pc-box-inset-inline-start);
        max-width: var(--pc-box-max-width);
        min-height: var(--pc-box-min-height);
        min-width: var(--pc-box-min-width);
        outline-color: var(--pc-box-outline-color);
        outline-style: var(--pc-box-outline-style);
        outline-width: var(--pc-box-outline-width);
        overflow-x: var(--pc-box-overflow-x);
        overflow-y: var(--pc-box-overflow-y);
        padding-block-end:var(--pc-box-padding-block-end-xs);padding-block-start: var(--pc-box-padding-block-start-xs);
        padding-inline-end:var(--pc-box-padding-inline-end-xs);padding-inline-start: var(--pc-box-padding-inline-start-xs);
        width: var(--pc-box-width)
    }

    @media (min-width: 30.625em) {
        .comp-box {
            padding-block-end:var(--pc-box-padding-block-end-sm,var(--pc-box-padding-block-end-xs))
        }
    }

    @media (min-width: 48em) {
        .comp-box {
            padding-block-end:var(--pc-box-padding-block-end-md,var(--pc-box-padding-block-end-sm,var(--pc-box-padding-block-end-xs)))
        }
    }

    @media (min-width: 65em) {
        .comp-box {
            padding-block-end:var(--pc-box-padding-block-end-lg,var(--pc-box-padding-block-end-md,var(--pc-box-padding-block-end-sm,var(--pc-box-padding-block-end-xs))))
        }
    }

    @media (min-width: 90em) {
        .comp-box {
            padding-block-end:var(--pc-box-padding-block-end-xl,var(--pc-box-padding-block-end-lg,var(--pc-box-padding-block-end-md,var(--pc-box-padding-block-end-sm,var(--pc-box-padding-block-end-xs)))))
        }
    }

    @media (min-width: 30.625em) {
        .comp-box {
            padding-block-start:var(--pc-box-padding-block-start-sm,var(--pc-box-padding-block-start-xs))
        }
    }

    @media (min-width: 48em) {
        .comp-box {
            padding-block-start:var(--pc-box-padding-block-start-md,var(--pc-box-padding-block-start-sm,var(--pc-box-padding-block-start-xs)))
        }
    }

    @media (min-width: 65em) {
        .comp-box {
            padding-block-start:var(--pc-box-padding-block-start-lg,var(--pc-box-padding-block-start-md,var(--pc-box-padding-block-start-sm,var(--pc-box-padding-block-start-xs))))
        }
    }

    @media (min-width: 90em) {
        .comp-box {
            padding-block-start:var(--pc-box-padding-block-start-xl,var(--pc-box-padding-block-start-lg,var(--pc-box-padding-block-start-md,var(--pc-box-padding-block-start-sm,var(--pc-box-padding-block-start-xs)))))
        }
    }

    @media (min-width: 30.625em) {
        .comp-box {
            padding-inline-start:var(--pc-box-padding-inline-start-sm,var(--pc-box-padding-inline-start-xs))
        }
    }

    @media (min-width: 48em) {
        .comp-box {
            padding-inline-start:var(--pc-box-padding-inline-start-md,var(--pc-box-padding-inline-start-sm,var(--pc-box-padding-inline-start-xs)))
        }
    }

    @media (min-width: 65em) {
        .comp-box {
            padding-inline-start:var(--pc-box-padding-inline-start-lg,var(--pc-box-padding-inline-start-md,var(--pc-box-padding-inline-start-sm,var(--pc-box-padding-inline-start-xs))))
        }
    }

    @media (min-width: 90em) {
        .comp-box {
            padding-inline-start:var(--pc-box-padding-inline-start-xl,var(--pc-box-padding-inline-start-lg,var(--pc-box-padding-inline-start-md,var(--pc-box-padding-inline-start-sm,var(--pc-box-padding-inline-start-xs)))))
        }
    }

    @media (min-width: 30.625em) {
        .comp-box {
            padding-inline-end:var(--pc-box-padding-inline-end-sm,var(--pc-box-padding-inline-end-xs))
        }
    }

    @media (min-width: 48em) {
        .comp-box {
            padding-inline-end:var(--pc-box-padding-inline-end-md,var(--pc-box-padding-inline-end-sm,var(--pc-box-padding-inline-end-xs)))
        }
    }

    @media (min-width: 65em) {
        .comp-box {
            padding-inline-end:var(--pc-box-padding-inline-end-lg,var(--pc-box-padding-inline-end-md,var(--pc-box-padding-inline-end-sm,var(--pc-box-padding-inline-end-xs))))
        }
    }

    @media (min-width: 90em) {
        .comp-box {
            padding-inline-end:var(--pc-box-padding-inline-end-xl,var(--pc-box-padding-inline-end-lg,var(--pc-box-padding-inline-end-md,var(--pc-box-padding-inline-end-sm,var(--pc-box-padding-inline-end-xs)))))
        }
    }

    .Polaris-Box--visuallyHidden_yrtt6 {
        border: 0!important;
        clip-path: inset(50%)!important;
        height: .0625rem!important;
        margin: 0!important;
        overflow: hidden!important;
        padding: 0!important;
        position: absolute!important;
        top: 0;
        white-space: nowrap!important;
        width: .0625rem!important
    }

    @media print {
        .Polaris-Box--printHidden_15ag0 {
            display: none!important
        }
    }

    .Polaris-ActionList__Item_yiyol {
        --pc-action-list-item-min-height: var(--p-space-1000);
        --pc-action-list-item-vertical-padding: calc((var(--pc-action-list-item-min-height) - var(--p-font-line-height-500))/2);
        -webkit-appearance: none;
        appearance: none;
        background: none;
        border: none;
        border-radius: 0.25rem;
        border-top: var(--p-border-width-025) solid #0000;
        color: inherit;
        cursor: pointer;
        display: block;
        font-size: inherit;
        line-height: inherit;
        margin: 0;
        min-height: var(--pc-action-list-item-min-height);
        padding: 0;
        padding: var(--pc-action-list-item-vertical-padding) 0.5rem;
        position: relative;
        text-align: left;
        text-decoration: none;
        width: 100%
    }

    .Polaris-ActionList__Item_yiyol.Polaris-ActionList--default_y9uu3 {
        --pc-action-list-image-size: 1.25rem
    }

    .Polaris-ActionList__Item_yiyol:focus {
        outline: none
    }

    .Polaris-ActionList__Item_yiyol:after {
        border-radius: 0.25rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol {
        --pc-action-list-item-min-height: var(--p-space-800);
        align-items: center;
        border-radius: 0.5rem;
        display: flex;
        padding: var(--p-space-150);
        position: relative
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol:after {
        border-radius: 0.5rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    @media (forced-colors:active) {
        .Polaris-ActionList__Item_yiyol {
            border: var(--p-border-width-025) solid #0000
        }
    }

    .Polaris-ActionList__Item_yiyol:hover {
        background-color: #fafafa;
        outline: var(--p-border-width-3) solid #0000;
        text-decoration: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol:hover {
        background-color: var(--p-color-bg-surface-secondary-hover)
    }

    .Polaris-ActionList__Item_yiyol:active {
        background-color: var(--p-color-bg-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol:active {
        background-color: var(--p-color-bg-surface-secondary-hover)
    }

    .Polaris-ActionList__Item_yiyol:active svg {
        fill: var(--p-color-icon-emphasis)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol:active svg {
        fill: #4a4a4a
    }

    .Polaris-ActionList__Item_yiyol:focus-visible:not(:active) {
        outline: var(--p-border-width-3) solid #0000
    }

    .Polaris-ActionList__Item_yiyol:focus-visible:not(:active):after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol:focus-visible:not(:active) {
        background-color: var(--p-color-bg-surface);
        outline: var(--p-border-width-050) solid var(--p-color-border-focus)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol:focus-visible:not(:active):after {
        content: none
    }

    .Polaris-ActionList__Item_yiyol:visited {
        color: inherit
    }

    .Polaris-ActionList__Item_yiyol.Polaris-ActionList--active_jeq8y {
        background-color: var(--p-color-bg-interactive-selected)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol.Polaris-ActionList--active_jeq8y {
        background-color: var(--p-color-bg-surface-secondary-active);
        font-weight: var(--p-font-weight-semibold)
    }

    .Polaris-ActionList__Item_yiyol.Polaris-ActionList--active_jeq8y svg {
        fill: var(--p-color-icon-emphasis)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol.Polaris-ActionList--active_jeq8y svg {
        fill: var(--p-color-icon-brand)
    }

    .Polaris-ActionList__Item_yiyol.Polaris-ActionList--active_jeq8y:before {
        background-color: var(--p-color-bg-interactive);
        border-bottom-right-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        content: "";
        display: block;
        height: 100%;
        left: calc(0.5rem*-1);
        position: absolute;
        top: 0;
        width: var(--p-border-width-3)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol.Polaris-ActionList--active_jeq8y:before {
        display: none
    }

    .Polaris-ActionList__Item_yiyol.Polaris-ActionList--destructive_zy6o5 {
        color: var(--p-color-text-critical)
    }

    .Polaris-ActionList__Item_yiyol.Polaris-ActionList--destructive_zy6o5 svg,html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol.Polaris-ActionList--destructive_zy6o5 svg {
        fill: var(--p-color-icon-critical)
    }

    .Polaris-ActionList__Item_yiyol.Polaris-ActionList--destructive_zy6o5:hover,html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol.Polaris-ActionList--destructive_zy6o5:hover {
        background-color: var(--p-color-bg-surface-critical-hover)
    }

    .Polaris-ActionList__Item_yiyol.Polaris-ActionList--destructive_zy6o5.Polaris-ActionList--active_jeq8y,.Polaris-ActionList__Item_yiyol.Polaris-ActionList--destructive_zy6o5:active,html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol.Polaris-ActionList--destructive_zy6o5.Polaris-ActionList--active_jeq8y,html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol.Polaris-ActionList--destructive_zy6o5:active {
        background-color: var(--p-color-bg-surface-critical-active)
    }

    .Polaris-ActionList__Item_yiyol.Polaris-ActionList--disabled_hcuh9 {
        background-image: none;
        color: var(--p-color-text-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol.Polaris-ActionList--disabled_hcuh9 {
        cursor: default
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol.Polaris-ActionList--disabled_hcuh9:hover {
        background-color: unset
    }

    .Polaris-ActionList__Item_yiyol.Polaris-ActionList--disabled_hcuh9 .Polaris-ActionList__Prefix_10fbz svg,.Polaris-ActionList__Item_yiyol.Polaris-ActionList--disabled_hcuh9 .Polaris-ActionList__Suffix_10fbu svg,html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol.Polaris-ActionList--disabled_hcuh9 .Polaris-ActionList__Prefix_10fbz svg,html[class~=comp-summer-editons-2023] .Polaris-ActionList__Item_yiyol.Polaris-ActionList--disabled_hcuh9 .Polaris-ActionList__Suffix_10fbu svg {
        fill: var(--p-color-icon-disabled)
    }

    .Polaris-ActionList__Item_yiyol.Polaris-ActionList--indented_mrmpf {
        --pc-action-list-image-size: 1.5rem;
        margin-left: calc(var(--p-space-500) + var(--p-space-050));
        max-width: calc(100% - var(--p-space-500) - var(--p-space-050));
        position: relative
    }

    .Polaris-ActionList__Item_yiyol.Polaris-ActionList--indented_mrmpf:before {
        border-left: var(--p-border-width-025) solid var(--p-color-border);
        bottom: 0;
        content: "";
        left: 0;
        margin-left: calc(var(--p-space-150)*-1);
        position: absolute;
        top: calc(0.75rem*-1)
    }

    .Polaris-ActionList__Item_yiyol.Polaris-ActionList--menu_yj4zy {
        --pc-action-list-image-size: 1.5rem
    }

    .Polaris-ActionList__Prefix_10fbz {
        align-items: center;
        background-position: 50%;
        background-size: cover;
        border-radius: 0.25rem;
        display: flex;
        flex: 0 0 auto;
        height: var(--pc-action-list-image-size);
        justify-content: center;
        margin: calc(var(--pc-action-list-image-size)*-.5) 0 calc(var(--pc-action-list-image-size)*-.5) 0;
        width: var(--pc-action-list-image-size)
    }

    .Polaris-ActionList__Prefix_10fbz svg,.Polaris-ActionList__Suffix_10fbu svg {
        fill: #4a4a4a
    }

    .Polaris-ActionList__Text_yj3uv {
        flex: 1 1 auto;
        max-width: 100%;
        min-width: 0
    }

    .Polaris-Badge_2qgie {
        --pc-badge-horizontal-padding: 0.5rem;
        --pc-badge-vertical-padding: var(--p-space-050);
        align-items: center;
        background-color: var(--p-color-bg-fill-tertiary);
        border-radius: var(--p-border-radius-500);
        color: #303030;
        display: inline-flex;
        padding: var(--pc-badge-vertical-padding) var(--pc-badge-horizontal-padding)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge_2qgie {
        background-color: #0000000f;
        border-radius: 0.5rem;
        color: var(--p-color-text-secondary);
        font-weight: 500
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge_2qgie svg {
        fill: var(--p-color-text-secondary)
    }

    @media print {
        .Polaris-Badge_2qgie {
            border: solid var(--p-border-width-025) var(--p-color-border)
        }
    }

    .Polaris-Badge--statusSuccess_pc5rl {
        background-color: var(--p-color-bg-fill-success-secondary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusSuccess_pc5rl {
        background-color: var(--p-color-bg-fill-success-secondary);
        color: var(--p-color-text-success)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusSuccess_pc5rl svg {
        fill: var(--p-color-icon-success)
    }

    .Polaris-Badge--statusSuccessStrongExperimental_ti0xb {
        background-color: var(--p-color-bg-fill-success);
        color: var(--p-color-text-on-color)
    }

    .Polaris-Badge--statusSuccessStrongExperimental_ti0xb svg {
        fill: var(--p-color-icon-on-color)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusSuccessStrongExperimental_ti0xb {
        background-color: var(--p-color-bg-fill-success);
        color: var(--p-color-text-on-color)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusSuccessStrongExperimental_ti0xb svg {
        fill: var(--p-color-icon-on-color)
    }

    .Polaris-Badge--statusInfo_knr66 {
        background-color: var(--p-color-bg-fill-info-secondary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusInfo_knr66 {
        background-color: var(--p-color-bg-fill-info-secondary);
        color: var(--p-color-text-info)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusInfo_knr66 svg {
        fill: var(--p-color-icon-info)
    }

    .Polaris-Badge--statusInfoStrongExperimental_4vzgo {
        background-color: var(--p-color-bg-fill-info);
        color: var(--p-color-text-info-on-bg-fill)
    }

    .Polaris-Badge--statusInfoStrongExperimental_4vzgo svg {
        fill: var(--p-color-text-info-on-bg-fill)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusInfoStrongExperimental_4vzgo {
        background-color: var(--p-color-bg-fill-info);
        color: var(--p-color-text-info-on-bg-fill)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusInfoStrongExperimental_4vzgo svg {
        fill: var(--p-color-text-info-on-bg-fill)
    }

    .Polaris-Badge--statusAttention_i61kn {
        background-color: var(--p-color-bg-fill-caution-secondary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusAttention_i61kn {
        background-color: var(--p-color-bg-fill-caution-secondary);
        color: var(--p-color-text-caution)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusAttention_i61kn svg {
        fill: var(--p-color-icon-caution)
    }

    .Polaris-Badge--statusAttentionStrongExperimental_19j8a {
        background-color: var(--p-color-bg-fill-caution);
        color: var(--p-color-text-caution-strong)
    }

    .Polaris-Badge--statusAttentionStrongExperimental_19j8a svg {
        fill: var(--p-color-text-caution)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusAttentionStrongExperimental_19j8a {
        background-color: var(--p-color-bg-fill-caution);
        color: var(--p-color-text-caution-strong)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusAttentionStrongExperimental_19j8a svg {
        fill: var(--p-color-text-caution)
    }

    .Polaris-Badge--statusWarning_1x66d {
        background-color: var(--p-color-bg-fill-warning-secondary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusWarning_1x66d {
        background-color: var(--p-color-bg-fill-warning-secondary);
        color: var(--p-color-text-warning-experimental)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusWarning_1x66d svg {
        fill: var(--p-color-icon-warning)
    }

    .Polaris-Badge--statusWarningStrongExperimental_fn2a1 {
        background-color: var(--p-color-bg-fill-warning);
        color: var(--p-color-text-warning-experimental)
    }

    .Polaris-Badge--statusWarningStrongExperimental_fn2a1 svg {
        fill: var(--p-color-text-warning-experimental)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusWarningStrongExperimental_fn2a1 {
        background-color: var(--p-color-bg-fill-warning);
        color: var(--p-color-text-warning-experimental)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusWarningStrongExperimental_fn2a1 svg {
        fill: var(--p-color-text-warning-experimental)
    }

    .Polaris-Badge--statusCritical_1iy3d {
        background-color: var(--p-color-bg-fill-critical-secondary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusCritical_1iy3d {
        background-color: var(--p-color-bg-fill-critical-secondary);
        color: var(--p-color-text-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusCritical_1iy3d svg {
        fill: var(--p-color-icon-critical-strong-experimental)
    }

    .Polaris-Badge--statusCriticalStrongExperimental_16m8d {
        background-color: var(--p-color-bg-fill-critical);
        color: var(--p-color-text-on-color)
    }

    .Polaris-Badge--statusCriticalStrongExperimental_16m8d svg {
        fill: var(--p-color-icon-on-color)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusCriticalStrongExperimental_16m8d {
        background-color: var(--p-color-bg-fill-critical);
        color: var(--p-color-text-on-color)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusCriticalStrongExperimental_16m8d svg {
        fill: var(--p-color-icon-on-color)
    }

    .Polaris-Badge--statusNew_cj8gz {
        border: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusNew_cj8gz {
        background-color: #0000000f;
        border-radius: 0.5rem;
        color: var(--p-color-text-secondary);
        font-weight: var(--p-font-weight-bold)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusNew_cj8gz svg {
        fill: var(--p-color-text-secondary)
    }

    .Polaris-Badge--statusReadOnlyExperimental_1k71e {
        background-color: initial;
        color: var(--p-color-text-secondary)
    }

    .Polaris-Badge--statusReadOnlyExperimental_1k71e svg {
        fill: var(--p-color-icon-secondary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusReadOnlyExperimental_1k71e {
        background-color: initial;
        color: var(--p-color-text-secondary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge--statusReadOnlyExperimental_1k71e svg {
        fill: var(--p-color-icon-secondary)
    }

    .Polaris-Badge__statusEnabled--experimental_1lv4p {
        color: #303030
    }

    .Polaris-Badge__statusEnabled--experimental_1lv4p svg {
        fill: var(--p-color-icon-success)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge__statusEnabled--experimental_1lv4p {
        color: #303030
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge__statusEnabled--experimental_1lv4p svg {
        fill: var(--p-color-icon-success)
    }

    .Polaris-Badge__sizeLarge--experimental_5gj07,html[class~=comp-summer-editons-2023] .Polaris-Badge__sizeLarge--experimental_5gj07 {
        padding: 0.25rem 0.5rem
    }

    .Polaris-Badge--withinFilter_11dcy {
        border-radius: 0.25rem
    }

    .Polaris-Badge__Icon_yj27d {
        margin-left: calc((0.25rem)*-1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge__Icon_yj27d {
        margin: calc(var(--p-space-050)*-1) 0 calc(var(--p-space-050)*-1) calc(0.5rem*-1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge__Icon_yj27d svg {
        display: inline-block;
        vertical-align: top
    }

    .Polaris-Badge__sizeLarge--experimental_5gj07 .Polaris-Badge__Icon_yj27d,html[class~=comp-summer-editons-2023] .Polaris-Badge__sizeLarge--experimental_5gj07 .Polaris-Badge__Icon_yj27d {
        margin: 0 0.25rem 0 calc(var(--p-space-050)*-1)
    }

    .Polaris-Badge__Icon_yj27d+* {
        margin-left: 0.25rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge__Icon_yj27d+* {
        margin-left: 0
    }

    .Polaris-Badge__PipContainer_dsjox {
        align-items: center;
        display: grid;
        margin-left: calc(var(--p-space-050)*-1);
        margin-right: 0.25rem
    }

    .Polaris-Badge-Pip_375sr {
        --pc-pip-size: 0.5rem;
        --pc-pip-color: #4a4a4a;
        --pc-border-width: 0.07813rem;
        border: var(--p-border-width-050) solid var(--pc-pip-color);
        border-radius: var(--p-border-radius-full);
        color: var(--pc-pip-color);
        display: inline-block;
        flex-shrink: 0;
        height: var(--pc-pip-size);
        width: var(--pc-pip-size)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge-Pip_375sr {
        --pc-pip-color: var(--p-color-text-secondary);
        border-radius: .1875rem;
        border-width: var(--pc-border-width)
    }

    .Polaris-Badge-Pip--statusInfo_knr66,html[class~=comp-summer-editons-2023] .Polaris-Badge-Pip--statusInfo_knr66 {
        --pc-pip-color: var(--p-color-icon-info)
    }

    .Polaris-Badge-Pip--statusSuccess_pc5rl,html[class~=comp-summer-editons-2023] .Polaris-Badge-Pip--statusSuccess_pc5rl {
        --pc-pip-color: var(--p-color-icon-success)
    }

    .Polaris-Badge-Pip--statusNew_cj8gz {
        --pc-pip-color: #4a4a4a
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge-Pip--statusNew_cj8gz {
        --pc-pip-color: var(--p-color-text-secondary)
    }

    .Polaris-Badge-Pip--statusAttention_i61kn,.Polaris-Badge-Pip--statusWarning_1x66d,html[class~=comp-summer-editons-2023] .Polaris-Badge-Pip--statusAttention_i61kn {
        --pc-pip-color: var(--p-color-icon-caution)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge-Pip--statusWarning_1x66d {
        --pc-pip-color: var(--p-color-icon-warning)
    }

    .Polaris-Badge-Pip--statusCritical_1iy3d,html[class~=comp-summer-editons-2023] .Polaris-Badge-Pip--statusCritical_1iy3d {
        --pc-pip-color: var(--p-color-icon-critical)
    }

    .Polaris-Badge-Pip--progressIncomplete_1jg92 {
        background: #0000
    }

    .Polaris-Badge-Pip--progressPartiallyComplete_11p0t {
        background: linear-gradient(0deg,currentColor,currentColor 50%,#0000 0,#0000)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge-Pip--progressPartiallyComplete_11p0t.Polaris-Badge-Pip_375sr {
        background: none;
        overflow: hidden;
        position: relative
    }

    html[class~=comp-summer-editons-2023] .Polaris-Badge-Pip--progressPartiallyComplete_11p0t.Polaris-Badge-Pip_375sr:after {
        border-left: var(--pc-border-width) solid currentColor;
        border-right: var(--pc-border-width) solid currentColor;
        content: "";
        font-size: 0;
        height: .5rem;
        left: calc(var(--pc-border-width)*-1);
        margin: 0 .1275rem;
        position: absolute;
        top: calc(var(--pc-border-width)*-1);
        transform: rotate(-45deg);
        width: .25rem
    }

    @media print {
        .Polaris-Badge-Pip--progressPartiallyComplete_11p0t {
            background: none;
            box-shadow: inset 0 -6.375rem 0 -6.25rem currentColor
        }
    }

    .Polaris-Badge-Pip--progressComplete_189p5 {
        background: currentColor
    }

    @media print {
        .Polaris-Badge-Pip--progressComplete_189p5 {
            background: none;
            box-shadow: inset 0 0 0 6.25rem currentColor
        }
    }

    .Polaris-HorizontalStack_dv6q6 {
        --pc-horizontal-stack-gap-xs: initial;
        --pc-horizontal-stack-gap-sm: initial;
        --pc-horizontal-stack-gap-md: initial;
        --pc-horizontal-stack-gap-lg: initial;
        --pc-horizontal-stack-gap-xl: initial;
        --pc-horizontal-stack-wrap: initial;
        --pc-horizontal-stack-block-align: initial;
        --pc-horizontal-stack-align: initial;
        align-items: var(--pc-horizontal-stack-block-align);
        display: flex;
        flex-wrap: var(--pc-horizontal-stack-wrap);
        gap: var(--pc-horizontal-stack-gap-xs);
        justify-content: var(--pc-horizontal-stack-align)
    }

    @media (min-width: 30.625em) {
        .Polaris-HorizontalStack_dv6q6 {
            gap:var(--pc-horizontal-stack-gap-sm,var(--pc-horizontal-stack-gap-xs))
        }
    }

    @media (min-width: 48em) {
        .Polaris-HorizontalStack_dv6q6 {
            gap:var(--pc-horizontal-stack-gap-md,var(--pc-horizontal-stack-gap-sm,var(--pc-horizontal-stack-gap-xs)))
        }
    }

    @media (min-width: 65em) {
        .Polaris-HorizontalStack_dv6q6 {
            gap:var(--pc-horizontal-stack-gap-lg,var(--pc-horizontal-stack-gap-md,var(--pc-horizontal-stack-gap-sm,var(--pc-horizontal-stack-gap-xs))))
        }
    }

    @media (min-width: 90em) {
        .Polaris-HorizontalStack_dv6q6 {
            gap:var(--pc-horizontal-stack-gap-xl,var(--pc-horizontal-stack-gap-lg,var(--pc-horizontal-stack-gap-md,var(--pc-horizontal-stack-gap-sm,var(--pc-horizontal-stack-gap-xs)))))
        }
    }

    .Polaris-Tooltip-TooltipOverlay_16r9b {
        --pc-tooltip-chevron-x-pos: initial;
        --pc-tooltip-border-radius: initial;
        --pc-tooltip-padding: initial;
        --pc-tooltip-overlay-offset: 0.75rem;
        --pc-tooltip-shadow-bevel-z-index: 1;
        --pc-tooltip-tail-z-index: calc(var(--pc-tooltip-shadow-bevel-z-index) + 1);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: var(--pc-tooltip-border-radius);
        box-shadow: var(--p-shadow-lg);
        margin: var(--pc-tooltip-overlay-offset) 0.25rem 0.25rem;
        opacity: 1;
        pointer-events: none;
        position: relative;
        transform: none;
        transition: none;
        will-change: opacity,left,top,transform
    }

    html[class~=comp-summer-editons-2023] .Polaris-Tooltip-TooltipOverlay_16r9b {
        border: none;
        border-radius: var(--pc-tooltip-border-radius);
        box-shadow: var(--p-shadow-md);
        position: relative
    }

    html[class~=comp-summer-editons-2023] .Polaris-Tooltip-TooltipOverlay_16r9b:before {
        border-radius: var(--pc-tooltip-border-radius);
        bottom: 0;
        box-shadow: var(--p-shadow-bevel-experimental);
        content: "";
        left: 0;
        mix-blend-mode: luminosity;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
        z-index: var(--pc-tooltip-shadow-bevel-z-index)
    }

    @media screen and (-ms-high-contrast:active) {
        .Polaris-Tooltip-TooltipOverlay_16r9b {
            border: var(--p-border-width-050) solid windowText
        }
    }

    .Polaris-Tooltip-TooltipOverlay_16r9b:after {
        border-color: #0000 #0000 var(--p-color-bg-surface) #0000;
        border-style: solid;
        border-width: 0.5rem;
        content: "";
        height: 0;
        left: calc(var(--pc-tooltip-chevron-x-pos) - 0.5rem - var(--p-space-400));
        position: absolute;
        top: calc(var(--p-space-400)*-1);
        width: 0
    }

    html[class~=comp-summer-editons-2023] .Polaris-Tooltip-TooltipOverlay_16r9b:after {
        content: none
    }

    .Polaris-Tooltip-TooltipOverlay_16r9b .Polaris-Tooltip-TooltipOverlay__Tail_yixpw {
        left: calc(var(--pc-tooltip-chevron-x-pos) - var(--p-space-150) - var(--p-space-400));
        position: absolute;
        top: calc(0.5rem*-1 + .05rem);
        z-index: var(--pc-tooltip-tail-z-index)
    }

    .Polaris-Tooltip-TooltipOverlay_16r9b.Polaris-Tooltip-TooltipOverlay--positionedAbove_1f44z:after {
        border-color: var(--p-color-bg-surface) #0000 #0000 #0000;
        bottom: calc(var(--p-space-400)*-1);
        top: auto
    }

    .Polaris-Tooltip-TooltipOverlay_16r9b.Polaris-Tooltip-TooltipOverlay--positionedAbove_1f44z .Polaris-Tooltip-TooltipOverlay__Tail_yixpw {
        bottom: calc(0.5rem*-1);
        filter: drop-shadow(0 .1875rem .125rem rgba(26,26,26,.1));
        top: unset
    }

    .Polaris-Tooltip-TooltipOverlay--measuring_wb2tw {
        opacity: 0
    }

    .Polaris-Tooltip-TooltipOverlay--measured_sk4vh:not(.Polaris-Tooltip-TooltipOverlay--instant_xfprd) {
        animation: var(--p-motion-keyframes-appear-below) var(--p-motion-duration-50) var(--p-motion-ease-out) var(--p-motion-duration-100) 1 both
    }

    @media (prefers-reduced-motion) {
        .Polaris-Tooltip-TooltipOverlay--measured_sk4vh:not(.Polaris-Tooltip-TooltipOverlay--instant_xfprd) {
            animation: none
        }
    }

    .Polaris-Tooltip-TooltipOverlay--measured_sk4vh.Polaris-Tooltip-TooltipOverlay--positionedAbove_1f44z:not(.Polaris-Tooltip-TooltipOverlay--instant_xfprd) {
        animation: var(--p-motion-keyframes-appear-above) var(--p-motion-duration-50) var(--p-motion-ease-out) var(--p-motion-duration-100) 1 both
    }

    @media (prefers-reduced-motion) {
        .Polaris-Tooltip-TooltipOverlay--measured_sk4vh.Polaris-Tooltip-TooltipOverlay--positionedAbove_1f44z:not(.Polaris-Tooltip-TooltipOverlay--instant_xfprd) {
            animation: none
        }
    }

    .Polaris-Tooltip-TooltipOverlay--positionedAbove_1f44z {
        margin: 0.25rem 0.25rem var(--pc-tooltip-overlay-offset)
    }

    .Polaris-Tooltip-TooltipOverlay__Content_xd1mk {
        background-color: var(--p-color-bg-surface);
        border-radius: var(--pc-tooltip-border-radius);
        color: #303030;
        padding: var(--pc-tooltip-padding);
        position: relative;
        word-break: break-word
    }

    .Polaris-Tooltip-TooltipOverlay--default_y9uu3 {
        max-width: 12.5rem
    }

    .Polaris-Tooltip-TooltipOverlay--wide_yisjh {
        max-width: 17.1875rem
    }

    [data-polaris-tooltip-activator] {
        outline: 0;
        position: relative
    }

    [data-polaris-tooltip-activator]:after {
        border-radius: 0.25rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    [data-polaris-tooltip-activator]:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-Tooltip__TooltipContainer_mtgy1 {
        display: flex
    }

    .Polaris-Tooltip__HasUnderline_c9bix {
        border-bottom: var(--p-border-width-050) dotted var(--p-color-border-secondary)
    }

    .Polaris-VerticalStack_1fqes {
        --pc-vertical-stack-gap-xs: initial;
        --pc-vertical-stack-gap-sm: initial;
        --pc-vertical-stack-gap-md: initial;
        --pc-vertical-stack-gap-lg: initial;
        --pc-vertical-stack-gap-xl: initial;
        --pc-vertical-stack-align: initial;
        --pc-vertical-stack-inline-align: initial;
        --pc-vertical-stack-order: initial;
        align-items: var(--pc-vertical-stack-inline-align);
        display: flex;
        flex-direction: var(--pc-vertical-stack-order);
        gap: var(--pc-vertical-stack-gap-xs);
        justify-content: var(--pc-vertical-stack-align)
    }

    @media (min-width: 30.625em) {
        .Polaris-VerticalStack_1fqes {
            gap:var(--pc-vertical-stack-gap-sm,var(--pc-vertical-stack-gap-xs))
        }
    }

    @media (min-width: 48em) {
        .Polaris-VerticalStack_1fqes {
            gap:var(--pc-vertical-stack-gap-md,var(--pc-vertical-stack-gap-sm,var(--pc-vertical-stack-gap-xs)))
        }
    }

    @media (min-width: 65em) {
        .Polaris-VerticalStack_1fqes {
            gap:var(--pc-vertical-stack-gap-lg,var(--pc-vertical-stack-gap-md,var(--pc-vertical-stack-gap-sm,var(--pc-vertical-stack-gap-xs))))
        }
    }

    @media (min-width: 90em) {
        .Polaris-VerticalStack_1fqes {
            gap:var(--pc-vertical-stack-gap-xl,var(--pc-vertical-stack-gap-lg,var(--pc-vertical-stack-gap-md,var(--pc-vertical-stack-gap-sm,var(--pc-vertical-stack-gap-xs)))))
        }
    }

    .Polaris-VerticalStack--listReset_1gz07 {
        list-style-type: none;
        margin-block-end:0;margin-block-start:0;padding-inline-start:0}

    .Polaris-VerticalStack--fieldsetReset_1w49p {
        border: none;
        margin: 0;
        padding: 0
    }

    .Polaris-ActionList-SearchField_ek145 {
        --pc-search-field-backdrop: 1;
        --pc-search-field-input: 2;
        --pc-search-field-icon: 3;
        --pc-search-field-action: 3;
        align-items: center;
        border: var(--p-border-width-025) solid #0000;
        display: flex;
        flex: 1 1 auto;
        position: relative;
        width: 100%;
        z-index: var(--p-z-index-11)
    }

    .Polaris-ActionList-SearchField--focused_17w4h .Polaris-ActionList-SearchField__Input_30ock,.Polaris-ActionList-SearchField__Input_30ock:focus {
        border: none;
        color: #303030
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField--focused_17w4h .Polaris-ActionList-SearchField__Input_30ock,html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Input_30ock:focus {
        color: #303030
    }

    .Polaris-ActionList-SearchField--focused_17w4h .Polaris-ActionList-SearchField__Input_30ock::placeholder,.Polaris-ActionList-SearchField__Input_30ock:focus::placeholder {
        color: var(--p-color-text-secondary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField--focused_17w4h .Polaris-ActionList-SearchField__Input_30ock::placeholder,html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Input_30ock:focus::placeholder {
        color: var(--p-color-text-inverse-secondary)
    }

    .Polaris-ActionList-SearchField__Input_30ock:focus-visible~.Polaris-ActionList-SearchField__Backdrop_1x2i2:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Input_30ock:focus-visible~.Polaris-ActionList-SearchField__Backdrop_1x2i2 {
        outline: var(--p-border-width-050) solid var(--p-color-border-focus);
        outline-offset: var(--p-space-025)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Input_30ock:focus-visible~.Polaris-ActionList-SearchField__Backdrop_1x2i2:after {
        content: none
    }

    .Polaris-ActionList-SearchField__Input_30ock:focus-visible~.Polaris-ActionList-SearchField__Icon_yj27d svg {
        fill: #4a4a4a
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Input_30ock:focus-visible~.Polaris-ActionList-SearchField__Icon_yj27d svg {
        fill: var(--p-color-icon-secondary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Input_30ock:focus-visible:not(:active)~.Polaris-ActionList-SearchField__Backdrop_1x2i2 {
        outline: var(--p-border-width-050) solid var(--p-color-border-focus);
        outline-offset: var(--p-space-025)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Input_30ock:focus-visible:not(:active)~.Polaris-ActionList-SearchField__Backdrop_1x2i2:after {
        content: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Input_30ock:focus-visible:not(:active)~.Polaris-ActionList-SearchField__Icon_yj27d svg {
        fill: var(--p-color-icon-secondary)
    }

    .Polaris-ActionList-SearchField__Input_30ock {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        background-color: initial;
        border: none;
        color: #303030;
        font-size: var(--p-font-size-200);
        font-weight: var(--p-font-weight-regular);
        height: 2.25rem;
        letter-spacing: normal;
        line-height: var(--p-font-line-height-600);
        outline: none;
        padding: 0 0 0 calc(1.25rem + var(--p-space-400));
        transition: fill var(--p-motion-duration-200) cubic-bezier(0.25,0.1,0.25,1),color var(--p-motion-duration-200) cubic-bezier(0.25,0.1,0.25,1);
        width: 100%;
        will-change: fill,color;
        z-index: var(--pc-search-field-input)
    }

    @media (min-width: 48em) {
        .Polaris-ActionList-SearchField__Input_30ock {
            font-size:var(--p-font-size-350)
        }
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Input_30ock {
        border: var(--p-border-width-0165) solid var(--p-color-border-inverse);
        border-radius: 0.5rem;
        color: var(--p-color-text-inverse-secondary);
        height: 2rem;
        padding: 0 calc(1.125rem + 0.75rem) 0 calc(1.125rem + 0.75rem)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Input_30ock:hover {
        background-color: var(--p-color-input-bg-surface-hover);
        border-color: var(--p-color-input-border-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Input_30ock:active,html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Input_30ock:focus {
        box-shadow: inset 0 0 0 var(--p-border-width-025) var(--p-color-border)
    }

    .Polaris-ActionList-SearchField__Input_30ock::placeholder {
        color: #303030
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Input_30ock::placeholder {
        color: var(--p-color-text-inverse-secondary)
    }

    .Polaris-ActionList-SearchField__Input_30ock::-webkit-search-cancel-button,.Polaris-ActionList-SearchField__Input_30ock::-webkit-search-decoration {
        -webkit-appearance: none;
        appearance: none
    }

    .Polaris-ActionList-SearchField__Icon_yj27d {
        display: flex;
        height: 1.25rem;
        left: 0.5rem;
        pointer-events: none;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: var(--pc-search-field-icon)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Icon_yj27d {
        height: 1.125rem;
        width: 1.125rem
    }

    .Polaris-ActionList-SearchField__Icon_yj27d svg {
        fill: #4a4a4a
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Icon_yj27d svg {
        fill: var(--p-color-icon-secondary)
    }

    .Polaris-ActionList-SearchField__Clear_37wax {
        -webkit-appearance: none;
        appearance: none;
        background: #0000;
        border: none;
        padding: 0.5rem;
        position: relative;
        z-index: var(--pc-search-field-action)
    }

    .Polaris-ActionList-SearchField__Clear_37wax:after {
        border-radius: 0.5rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Clear_37wax {
        padding: 0.25rem;
        position: absolute;
        right: 0.25rem
    }

    .Polaris-ActionList-SearchField__Clear_37wax svg {
        fill: #4a4a4a
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Clear_37wax svg {
        fill: var(--p-color-icon-secondary)
    }

    .Polaris-ActionList-SearchField__Clear_37wax:focus,.Polaris-ActionList-SearchField__Clear_37wax:hover {
        outline: none
    }

    .Polaris-ActionList-SearchField__Clear_37wax:focus svg,.Polaris-ActionList-SearchField__Clear_37wax:hover svg {
        fill: #303030
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Clear_37wax:focus svg,html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Clear_37wax:hover svg {
        fill: var(--p-color-icon-inverse)
    }

    .Polaris-ActionList-SearchField__Clear_37wax:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-ActionList-SearchField__Clear_37wax:active svg {
        fill: var(--p-color-icon-active)
    }

    .Polaris-ActionList-SearchField__Clear_37wax:active:after {
        border: none
    }

    .Polaris-ActionList-SearchField__Backdrop_1x2i2 {
        background-color: var(--p-color-input-bg-surface);
        border-radius: 0.25rem;
        bottom: 0;
        left: 0;
        pointer-events: none;
        position: relative;
        position: absolute;
        right: 0;
        top: 0;
        z-index: var(--pc-text-field-backdrop)
    }

    .Polaris-ActionList-SearchField__Backdrop_1x2i2:after {
        border-radius: 0.25rem;
        bottom: -.125rem;
        box-shadow: 0 0 0 -.125rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.125rem;
        pointer-events: none;
        position: absolute;
        right: -.125rem;
        top: -.125rem;
        z-index: 1
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionList-SearchField__Backdrop_1x2i2 {
        border-radius: 0.5rem
    }

    .Polaris-TextContainer_szg8b {
        --pc-text-container-spacing: var(--p-space-400)
    }

    .Polaris-TextContainer_szg8b>:not(:first-child) {
        margin-top: var(--pc-text-container-spacing)
    }

    .Polaris-TextContainer--spacingTight_1o4d6 {
        --pc-text-container-spacing: 0.5rem
    }

    .Polaris-TextContainer--spacingLoose_yte7q {
        --pc-text-container-spacing: var(--p-space-500)
    }

    .Polaris-ButtonGroup_yy85z {
        --pc-button-group-item: 10;
        --pc-button-group-focused: 20;
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        margin-left: calc(0.5rem*-1);
        margin-top: calc(0.5rem*-1)
    }

    .Polaris-ButtonGroup__Item_yiyol {
        margin-left: 0.5rem;
        margin-top: 0.5rem
    }

    .Polaris-ButtonGroup__Item--plain_1lavi:not(:first-child) {
        margin-left: var(--p-space-400)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ButtonGroup__Item--plain_1lavi:not(:first-child) {
        margin-left: 0.5rem
    }

    .Polaris-ButtonGroup__Item--plain_1lavi:not(:last-child) {
        margin-right: 0.5rem
    }

    .Polaris-ButtonGroup--segmented_150jh {
        display: flex;
        flex-wrap: nowrap;
        margin-left: 0;
        margin-top: 0
    }

    .Polaris-ButtonGroup--segmented_150jh .Polaris-ButtonGroup__Item_yiyol {
        line-height: 1;
        margin-left: 0;
        margin-top: 0;
        position: relative;
        z-index: var(--pc-button-group-item)
    }

    .Polaris-ButtonGroup--segmented_150jh .Polaris-ButtonGroup__Item_yiyol:not(:first-child) {
        margin-left: calc(var(--p-space-025)*-1)
    }

    .Polaris-ButtonGroup--segmented_150jh .Polaris-ButtonGroup__Item--focused_1iwi4 {
        z-index: var(--pc-button-group-focused)
    }

    .Polaris-ButtonGroup--fullWidth_zyvh4 .Polaris-ButtonGroup__Item_yiyol {
        flex: 1 1 auto
    }

    .Polaris-ButtonGroup--extraTight_1xh3x {
        margin-left: calc(0.25rem*-1);
        margin-top: calc(0.25rem*-1)
    }

    .Polaris-ButtonGroup--extraTight_1xh3x .Polaris-ButtonGroup__Item_yiyol {
        margin-left: 0.25rem;
        margin-top: 0.25rem
    }

    .Polaris-ButtonGroup--tight_312wf {
        margin-left: calc(0.5rem*-1);
        margin-top: calc(0.5rem*-1)
    }

    .Polaris-ButtonGroup--tight_312wf .Polaris-ButtonGroup__Item_yiyol {
        margin-left: 0.5rem;
        margin-top: 0.5rem
    }

    .Polaris-ButtonGroup--loose_2qq07 {
        margin-left: calc(var(--p-space-500)*-1);
        margin-top: calc(var(--p-space-500)*-1)
    }

    .Polaris-ButtonGroup--loose_2qq07 .Polaris-ButtonGroup__Item_yiyol {
        margin-left: var(--p-space-500);
        margin-top: var(--p-space-500)
    }

    .Polaris-ButtonGroup--noWrap_vecks {
        display: flex;
        flex-wrap: nowrap
    }

    body,html {
        height: 100%;
        min-height: 100%
    }

    .Polaris-Page_yisnh {
        margin: 0 auto;
        max-width: 62.375rem;
        padding: 0
    }

    @media (min-width: 30.625em) {
        .Polaris-Page_yisnh {
            padding:0 var(--p-space-600)
        }
    }

    .Polaris-Page_yisnh:after {
        content: "";
        display: table
    }

    .Polaris-Page--fullWidth_zyvh4 {
        max-width: none
    }

    .Polaris-Page--narrowWidth_yaeah {
        max-width: 41.375rem
    }

    .Polaris-Page__Content_xd1mk {
        padding: 0.5rem 0
    }

    @media (min-width: 48em) {
        .Polaris-Page__Content_xd1mk {
            padding-top:var(--p-space-500)
        }
    }

    .Polaris-Page--divider_myoiu {
        border-top: var(--p-border-width-025) solid var(--p-color-border-secondary);
        padding-top: var(--p-space-800)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Page--divider_myoiu {
        border-top: 0;
        padding-top: 0
    }

    .Polaris-Page-Header__TitleWrapper_bejfn {
        align-self: center;
        flex: 1 1 auto;
        grid-area: title;
        margin-top: 0.25rem
    }

    @media (min-width: 30.625em) {
        .Polaris-Page-Header__TitleWrapper_bejfn {
            margin-top:0
        }
    }

    .Polaris-Page-Header__BreadcrumbWrapper_1tgwk {
        grid-area: breadcrumbs
    }

    html[class~=comp-summer-editons-2023] .Polaris-Page-Header__BreadcrumbWrapper_1tgwk a,html[class~=comp-summer-editons-2023] .Polaris-Page-Header__BreadcrumbWrapper_1tgwk button {
        background-color: initial;
        border-radius: 0.5rem;
        box-shadow: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Page-Header__BreadcrumbWrapper_1tgwk a:is(:hover,:focus,:focus-visible),html[class~=comp-summer-editons-2023] .Polaris-Page-Header__BreadcrumbWrapper_1tgwk button:is(:hover,:focus,:focus-visible) {
        box-shadow: none!important
    }

    html[class~=comp-summer-editons-2023] .Polaris-Page-Header__BreadcrumbWrapper_1tgwk a:is(:hover,:focus-visible),html[class~=comp-summer-editons-2023] .Polaris-Page-Header__BreadcrumbWrapper_1tgwk button:is(:hover,:focus-visible) {
        background-color: var(--p-color-bg-fill-tertiary-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Page-Header__BreadcrumbWrapper_1tgwk a:active,html[class~=comp-summer-editons-2023] .Polaris-Page-Header__BreadcrumbWrapper_1tgwk button:active {
        background-color: var(--p-color-bg-fill-tertiary-active);
        box-shadow: var(--p-shadow-inset-md)!important
    }

    .Polaris-Page-Header__PaginationWrapper_x52mr {
        line-height: 1;
        margin-left: 0.25rem
    }

    .Polaris-Page-Header__PaginationWrapper_x52mr button {
        box-shadow: none!important
    }

    .Polaris-Page-Header__PaginationWrapper_x52mr button,.Polaris-Page-Header__PaginationWrapper_x52mr button:active,.Polaris-Page-Header__PaginationWrapper_x52mr button:focus,.Polaris-Page-Header__PaginationWrapper_x52mr button:hover {
        border: var(--p-border-width-025) solid var(--p-color-border-strong)!important
    }

    html[class~=comp-summer-editons-2023] .Polaris-Page-Header__PaginationWrapper_x52mr {
        margin-left: 0.5rem
    }

    .Polaris-Page-Header__PrimaryActionWrapper_w8or9 {
        margin-left: 0.25rem;
        margin-top: 0
    }

    @media (min-width: 48em) {
        .Polaris-Page-Header__PrimaryActionWrapper_w8or9 {
            margin-left:0.5rem
        }
    }

    .Polaris-Page-Header__Row_375v7 {
        display: flex;
        justify-content: space-between;
        line-height: normal
    }

    .Polaris-Page-Header__Row_375v7:first-child {
        min-height: 2.25rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Page-Header__Row_375v7:first-child {
        min-height: 1.75rem
    }

    .Polaris-Page-Header__Row_375v7+.Polaris-Page-Header__Row_375v7 {
        margin-top: 0.25rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Page-Header__Row_375v7+.Polaris-Page-Header__Row_375v7 {
        margin-top: var(--p-space-050)
    }

    .Polaris-Page-Header--mobileView_i07vm .Polaris-Page-Header__Row_375v7+.Polaris-Page-Header__Row_375v7 {
        margin-top: 0.5rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Page-Header--mobileView_i07vm .Polaris-Page-Header__Row_375v7+.Polaris-Page-Header__Row_375v7 {
        margin-top: 0.25rem
    }

    .Polaris-Page-Header__Row_375v7+.Polaris-Page-Header__Row_375v7 .Polaris-Page-Header__RightAlign_1ok1p {
        margin-left: 0
    }

    .Polaris-Page-Header__RightAlign_1ok1p {
        align-content: flex-end;
        align-items: center;
        align-self: flex-start;
        display: flex;
        flex: 1 1 auto;
        grid-area: actions;
        justify-content: flex-end;
        margin-left: var(--p-space-400);
        white-space: nowrap
    }

    @media (max-width: 30.6225em) {
        .Polaris-Page-Header--noBreadcrumbs_bdstf .Polaris-Page-Header__RightAlign_1ok1p {
            margin-left:0
        }
    }

    @media (min-width: 30.625em) {
        .Polaris-Page-Header__AdditionalMetaData_1isxr {
            margin-left:calc(var(--p-space-500)*2 + 0.5rem + 0.25rem)
        }

        html[class~=comp-summer-editons-2023] .Polaris-Page-Header__AdditionalMetaData_1isxr {
            margin-left: calc(var(--p-space-500) + 0.5rem + 0.25rem)
        }
    }

    .Polaris-Page-Header--noBreadcrumbs_bdstf .Polaris-Page-Header__AdditionalMetaData_1isxr,html[class~=comp-summer-editons-2023] .Polaris-Page-Header--noBreadcrumbs_bdstf .Polaris-Page-Header__AdditionalMetaData_1isxr {
        margin-left: 0
    }

    .Polaris-Page-Header__Actions_17m67 {
        align-items: center;
        display: flex;
        justify-content: flex-end;
        text-align: right;
        width: 100%
    }

    @media (max-width: 64.9975em) {
        .Polaris-Page-Header--longTitle_18mg0 .Polaris-Page-Header__AdditionalMetaData_1isxr {
            margin-left:0
        }

        .Polaris-Page-Header--longTitle_18mg0 .Polaris-Page-Header__Row_375v7 {
            display: grid;
            gap: 0.5rem var(--p-space-400);
            grid-template-areas: "breadcrumbs actions" "title title";
            grid-template-columns: auto 1fr
        }

        .Polaris-Page-Header--longTitle_18mg0 .Polaris-Page-Header__Row_375v7+.Polaris-Page-Header__Row_375v7 {
            gap: 0
        }
    }

    @media (max-width: 47.9975em) {
        .Polaris-Page-Header--mediumTitle_bfol6:not(.Polaris-Page-Header--noBreadcrumbs_bdstf) .Polaris-Page-Header__AdditionalMetaData_1isxr {
            margin-left:0
        }

        .Polaris-Page-Header--mediumTitle_bfol6:not(.Polaris-Page-Header--noBreadcrumbs_bdstf) .Polaris-Page-Header__Row_375v7 {
            display: grid;
            gap: 0.5rem var(--p-space-400);
            grid-template-areas: "breadcrumbs actions" "title title";
            grid-template-columns: auto 1fr
        }

        .Polaris-Page-Header--mediumTitle_bfol6:not(.Polaris-Page-Header--noBreadcrumbs_bdstf) .Polaris-Page-Header__Row_375v7+.Polaris-Page-Header__Row_375v7 {
            gap: 0
        }
    }

    .Polaris-Page-Header--mediumTitle_bfol6.Polaris-Page-Header--noBreadcrumbs_bdstf .Polaris-Page-Header__TitleWrapper_bejfn {
        margin-top: 0
    }

    .Polaris-Page-Header--mediumTitle_bfol6.Polaris-Page-Header--noBreadcrumbs_bdstf .Polaris-Page-Header__RightAlign_1ok1p {
        margin-bottom: 0.25rem
    }

    @media (min-width: 48em) {
        .Polaris-Page-Header--mediumTitle_bfol6.Polaris-Page-Header--noBreadcrumbs_bdstf .Polaris-Page-Header__RightAlign_1ok1p {
            margin-bottom:0
        }
    }

    .Polaris-Page-Header--mediumTitle_bfol6.Polaris-Page-Header--noBreadcrumbs_bdstf .Polaris-Page-Header__Row_375v7 {
        flex-wrap: wrap-reverse
    }

    @media (min-width: 48em) {
        .Polaris-Page-Header--mediumTitle_bfol6.Polaris-Page-Header--noBreadcrumbs_bdstf .Polaris-Page-Header__Row_375v7 {
            flex-wrap:nowrap
        }
    }

    .Polaris-Page-Header--isSingleRow_172ur .Polaris-Page-Header__Row_375v7 {
        gap: 0
    }

    .Polaris-Breadcrumbs__Breadcrumb_llsun {
        align-items: center;
        -webkit-appearance: none;
        appearance: none;
        background: none;
        border: none;
        border: var(--p-border-width-025) solid var(--p-color-border-strong);
        border-radius: 0.25rem;
        color: inherit;
        color: var(--p-color-text-secondary);
        cursor: pointer;
        display: flex;
        font-size: inherit;
        justify-content: center;
        line-height: inherit;
        margin: 0;
        min-height: 2.25rem;
        min-width: 2.25rem;
        padding: 0;
        padding: var(--p-space-050);
        position: relative;
        text-decoration: none
    }

    .Polaris-Breadcrumbs__Breadcrumb_llsun:focus {
        outline: none
    }

    .Polaris-Breadcrumbs__Breadcrumb_llsun:after {
        border-radius: 0.25rem;
        bottom: -.125rem;
        box-shadow: 0 0 0 -.125rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.125rem;
        pointer-events: none;
        position: absolute;
        right: -.125rem;
        top: -.125rem;
        z-index: 1
    }

    .Polaris-Breadcrumbs__Breadcrumb_llsun:hover {
        background-color: #fafafa
    }

    .Polaris-Breadcrumbs__Breadcrumb_llsun:active {
        background-color: var(--p-color-bg-active)
    }

    .Polaris-Breadcrumbs__Breadcrumb_llsun:active,.Polaris-Breadcrumbs__Breadcrumb_llsun:hover {
        color: #303030;
        text-decoration: none
    }

    .Polaris-Breadcrumbs__Breadcrumb_llsun:active .Polaris-Breadcrumbs__Icon_yj27d svg,.Polaris-Breadcrumbs__Breadcrumb_llsun:hover .Polaris-Breadcrumbs__Icon_yj27d svg {
        fill: var(--p-color-icon-active)
    }

    .Polaris-Breadcrumbs__Breadcrumb_llsun:focus-visible {
        outline: none
    }

    .Polaris-Breadcrumbs__Breadcrumb_llsun:focus-visible:not(:active):after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    html[class~=comp-summer-editons-2023] .Polaris-Breadcrumbs__Breadcrumb_llsun {
        background-color: initial;
        border: none;
        border-radius: 0.5rem;
        min-height: 1.75rem;
        min-width: 1.75rem;
        padding: 0
    }

    html[class~=comp-summer-editons-2023] .Polaris-Breadcrumbs__Breadcrumb_llsun:hover {
        background-color: var(--p-color-bg-fill-tertiary-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Breadcrumbs__Breadcrumb_llsun:active,html[class~=comp-summer-editons-2023] .Polaris-Breadcrumbs__Breadcrumb_llsun:focus {
        background-color: var(--p-color-bg-fill-tertiary-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Breadcrumbs__Breadcrumb_llsun:focus {
        outline: var(--p-border-width-050) solid var(--p-color-border-focus);
        outline-offset: var(--p-space-050)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Breadcrumbs__Breadcrumb_llsun:focus:after {
        content: none
    }

    .Polaris-Breadcrumbs__Content_xd1mk {
        overflow: hidden;
        position: relative;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .Polaris-Breadcrumbs__Icon_yj27d {
        --pc-breadcrumbs-icon-size: 1.25rem;
        height: var(--pc-breadcrumbs-icon-size);
        margin: calc(var(--pc-breadcrumbs-icon-size)*-.5) 0 calc(var(--pc-breadcrumbs-icon-size)*-.5) calc(0.5rem*-1);
        margin: 0;
        width: var(--pc-breadcrumbs-icon-size)
    }

    .Polaris-Breadcrumbs__Icon_yj27d svg {
        fill: #4a4a4a
    }

    html[class~=comp-summer-editons-2023] .Polaris-Pagination_1af4k button {
        background-color: var(--p-color-bg-fill-tertiary);
        border: none!important;
        box-shadow: none!important
    }

    html[class~=comp-summer-editons-2023] .Polaris-Pagination_1af4k button:hover {
        background-color: var(--p-color-bg-fill-tertiary-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Pagination_1af4k button:active {
        box-shadow: var(--p-shadow-inset-md)!important
    }

    html[class~=comp-summer-editons-2023] .Polaris-Pagination_1af4k button:active,html[class~=comp-summer-editons-2023] .Polaris-Pagination_1af4k button:focus {
        background-color: var(--p-color-bg-fill-tertiary-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Pagination_1af4k.Polaris-Pagination--table_2qj3n button {
        --button-min-height: var(--p-space-600);
        background-color: var(--p-color-bg-surface-secondary);
        height: var(--button-min-height);
        min-height: var(--button-min-height);
        min-width: var(--button-min-height);
        padding: unset;
        width: var(--button-min-height)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Pagination_1af4k.Polaris-Pagination--table_2qj3n button:hover {
        background-color: var(--p-color-bg-fill-tertiary-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Pagination_1af4k.Polaris-Pagination--table_2qj3n button:hover svg {
        fill: #303030
    }

    html[class~=comp-summer-editons-2023] .Polaris-Pagination_1af4k.Polaris-Pagination--table_2qj3n button:active,html[class~=comp-summer-editons-2023] .Polaris-Pagination_1af4k.Polaris-Pagination--table_2qj3n button:focus {
        background-color: var(--p-color-bg-fill-tertiary-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Pagination_1af4k.Polaris-Pagination--table_2qj3n button:active svg,html[class~=comp-summer-editons-2023] .Polaris-Pagination_1af4k.Polaris-Pagination--table_2qj3n button:focus svg {
        fill: var(--p-color-icon-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Pagination_1af4k.Polaris-Pagination--table_2qj3n button:disabled svg {
        fill: var(--p-color-icon-disabled)
    }

    .Polaris-Header-Title_2qj8j {
        word-wrap: break-word;
        font-size: var(--p-font-size-300);
        font-weight: var(--p-font-weight-semibold);
        line-height: var(--p-font-line-height-600);
        overflow-wrap: break-word;
        word-break: break-word
    }

    html[class~=comp-summer-editons-2023] .Polaris-Header-Title_2qj8j {
        font-weight: var(--p-font-weight-bold)
    }

    .Polaris-Header-Title__TitleWithSubtitle_1wspp {
        margin-top: 0.25rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Header-Title__TitleWithSubtitle_1wspp {
        margin-top: 0
    }

    .Polaris-Header-Title__SubTitle_1j5vz {
        color: var(--p-color-text-secondary);
        margin-top: 0.25rem
    }

    .Polaris-Header-Title__SubTitle_1j5vz.Polaris-Header-Title__SubtitleCompact_1fq2b {
        margin-top: 0
    }

    html[class~=comp-summer-editons-2023] .Polaris-Header-Title__SubTitle_1j5vz,html[class~=comp-summer-editons-2023] .Polaris-Header-Title__SubTitle_1j5vz.Polaris-Header-Title__SubtitleCompact_1fq2b {
        margin-top: var(--p-space-050)
    }

    .Polaris-Header-Title__TitleWithMetadataWrapper_pdqv7 {
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        row-gap: 0.5rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Header-Title__TitleWithMetadataWrapper_pdqv7 {
        padding-block:var(--p-space-050)}

    .Polaris-Header-Title__TitleWithMetadataWrapper_pdqv7 .Polaris-Header-Title_2qj8j {
        display: inline;
        margin-right: 0.5rem
    }

    .Polaris-Header-Title__TitleWithMetadataWrapper_pdqv7 .Polaris-Header-Title_2qj8j>* {
        display: inline
    }

    .Polaris-Header-Title__TitleWithMetadataWrapper_pdqv7 .Polaris-Header-Title__TitleMetadata_19y17 {
        margin-top: 0;
        vertical-align: bottom
    }

    .Polaris-ActionMenu_1hlnt {
        display: flex;
        justify-content: flex-end;
        width: 100%
    }

    @media print {
        .Polaris-ActionMenu_1hlnt {
            display: none!important
        }
    }

    .Polaris-ActionMenu-RollupActions__RollupActivator_88nso {
        text-align: right
    }

    .Polaris-ActionMenu-RollupActions__RollupActivator_88nso button[type=button] {
        border: var(--p-border-width-025) solid var(--p-color-border-strong);
        margin: 0
    }

    .Polaris-ActionMenu-RollupActions__RollupActivator_88nso button[type=button]:active,.Polaris-ActionMenu-RollupActions__RollupActivator_88nso button[type=button]:focus,.Polaris-ActionMenu-RollupActions__RollupActivator_88nso button[type=button]:hover {
        border: var(--p-border-width-025) solid var(--p-color-border-strong)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-RollupActions__RollupActivator_88nso button[type=button] {
        background: var(--p-color-bg-fill-tertiary);
        border: none;
        border-radius: 0.5rem;
        box-shadow: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-RollupActions__RollupActivator_88nso button[type=button]:hover {
        background: var(--p-color-bg-fill-tertiary-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-RollupActions__RollupActivator_88nso button[type=button]:focus:not(:active) {
        background: var(--p-color-bg-fill-tertiary-active);
        outline: var(--p-border-width-050) solid var(--p-color-border-focus);
        outline-offset: var(--p-space-050)
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-RollupActions__RollupActivator_88nso button[type=button]:focus:not(:active):after {
        content: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-ActionMenu-RollupActions__RollupActivator_88nso button[type=button]:active {
        background: var(--p-color-bg-fill-tertiary-active)
    }

    .Polaris-ActionMenu-SecondaryAction_1dl4i {
        --pc-secondary-action-button-spacing: 0.75rem
    }

    .Polaris-ActionMenu-SecondaryAction_1dl4i a,.Polaris-ActionMenu-SecondaryAction_1dl4i button {
        background: #0000!important;
        border-radius: 0.25rem!important;
        box-shadow: none!important;
        padding-left: var(--pc-secondary-action-button-spacing);
        padding-right: var(--pc-secondary-action-button-spacing);
        position: relative
    }

    .Polaris-ActionMenu-SecondaryAction_1dl4i a:after,.Polaris-ActionMenu-SecondaryAction_1dl4i button:after {
        border-radius: 0.25rem;
        bottom: -.125rem;
        box-shadow: 0 0 0 -.125rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.125rem;
        pointer-events: none;
        position: absolute;
        right: -.125rem;
        top: -.125rem;
        z-index: 1
    }

    .Polaris-ActionMenu-SecondaryAction_1dl4i a:hover,.Polaris-ActionMenu-SecondaryAction_1dl4i button:hover {
        background: var(--p-color-bg-app-hover)!important
    }

    .Polaris-ActionMenu-SecondaryAction_1dl4i a:active,.Polaris-ActionMenu-SecondaryAction_1dl4i button:active {
        background: var(--p-color-bg-app-active)!important
    }

    @media (min-width: 48em) {
        .Polaris-ActionMenu-SecondaryAction_1dl4i a,.Polaris-ActionMenu-SecondaryAction_1dl4i button {
            border:none!important;
            position: relative
        }

        .Polaris-ActionMenu-SecondaryAction_1dl4i a:after,.Polaris-ActionMenu-SecondaryAction_1dl4i button:after {
            border-radius: 0.25rem;
            bottom: -.0625rem;
            box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
            content: "";
            display: block;
            left: -.0625rem;
            pointer-events: none;
            position: absolute;
            right: -.0625rem;
            top: -.0625rem;
            z-index: 1
        }
    }

    .Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 a,.Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 button {
        color: var(--p-color-text-critical)
    }

    .Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 a svg,.Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 button svg {
        fill: var(--p-color-icon-critical)
    }

    .Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 a:hover,.Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 button:hover {
        background-color: var(--p-color-bg-surface-critical-hover)!important
    }

    .Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 a:active,.Polaris-ActionMenu-SecondaryAction_1dl4i.Polaris-ActionMenu-SecondaryAction--destructive_zy6o5 button:active {
        background-color: var(--p-color-bg-surface-critical-active)!important
    }

    .Polaris-ActionMenu-Actions__ActionsLayout_w56ri {
        align-items: center;
        display: flex;
        flex: 1 1 auto;
        flex-wrap: wrap;
        justify-content: flex-end
    }

    .Polaris-ActionMenu-Actions__ActionsLayout_w56ri>* {
        flex: 0 0 auto
    }

    .Online-Store-UI-AppProvider_174p5 {
        --osui_version: "5.7.0";
        --osui_animation-name-fade-in: osui_fade-in;
        --osui_animation-name-fade-out: osui_fade-out;
        --osui_animation-name-drag-handle-pulse: osui_drag-handle-pulse;
        --osui_motion-suspended-travel: 25%;
        --osui_easing-bounce: cubic-bezier(0.18,0.67,0.6,1.22);
        --osui_breakpoint-phablet: 41.6875rem;
        --osui_breakpoint-tablet: 53.75rem;
        --osui_breakpoint-desktop: 67.5rem;
        --osui_breakpoint-widescreen: 100.875rem;
        --osui_color-panel-bg: var(--p-color-bg-surface);
        --osui_color-frame-bg: var(--p-color-bg-app);
        --osui_color-frame-surface-bg: var(--p-color-bg-surface);
        --osui_color-plain-action-bg-active-light: var(--p-color-bg-interactive-selected);
        --osui_color-plain-action-bg-active-base: var(--p-color-bg-interactive-subdued-hover);
        --osui_color-plain-action-bg-active-dark: var(--p-color-bg-interactive-subdued-active);
        --osui_color-plain-button-bg: var(--p-color-bg-fill-tertiary);
        --osui_color-plain-button-bg-active: #212b3614;
        --osui_size-common-spacing: var(--p-space-400);
        --osui_size-min-action-mobile: 2.75rem;
        --osui_size-resource-thumbnail: 2.5rem;
        --osui_height-frame-footer: 4rem;
        --osui_height-frame-header: 3.5rem;
        --osui_width-action-bar: 3.25rem;
        --osui_height-nav-action: 2.125rem;
        --osui_height-nav-action-legacy: 2.25rem;
        --osui_width-sidebar-desktop: 18.75rem;
        --osui_width-sidebar-interior-desktop: calc(18.75rem - var(--p-space-400)*2);
        --osui_width-sidebar-interior-card-desktop: calc(18.75rem - var(--p-space-400)*2 - var(--p-space-400)*2);
        --osui_width-topbar-sidebar-desktop: calc(18.75rem - var(--p-space-400));
        --osui_radius-sidebar-children: 0.5rem;
        --osui_radius-sidebar-children-legacy: 0.25rem;
        --osui_height-common-control: var(--p-space-800);
        --osui_height-common-control-slim: var(--p-space-600);
        --osui_high-contrast-outline: var(--p-border-width-1) solid #0000
    }

    @keyframes osui_fade-in {
        0% {
            opacity: 0
        }

        to {
            opacity: 1
        }
    }

    @keyframes osui_fade-out {
        0% {
            opacity: 1
        }

        to {
            opacity: 0
        }
    }

    @keyframes osui_drag-handle-pulse {
        0% {
            background-color: inherit;
            outline: var(--osui_high-contrast-outline)
        }

        to {
            background-color: #0000001a;
            outline: solid #0000
        }
    }

    @media screen and (prefers-reduced-motion:reduce) {
        .Online-Store-UI-AppProvider_174p5 * {
            animation-duration: .001ms!important;
            transition-duration: .001ms!important
        }
    }

    @media (min-width: 48em) {
        .Polaris-EmptyState--imageContained_z6t0k {
            position:static;
            width: 100%
        }
    }

    .Polaris-Link_yj5sy {
        -webkit-appearance: none;
        appearance: none;
        background: none;
        border: 0;
        color: var(--p-color-text-emphasis);
        cursor: pointer;
        display: inline;
        font-size: inherit;
        font-weight: inherit;
        padding: 0;
        text-align: inherit;
        text-decoration: underline
    }

    .Polaris-Link_yj5sy:hover {
        color: var(--p-color-text-emphasis-hover);
        text-decoration: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Link_yj5sy:hover {
        text-decoration: underline
    }

    .Polaris-Link_yj5sy:focus:not(:active) {
        outline: var(--p-color-border-focus) auto var(--p-border-width-025)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Link_yj5sy:focus,html[class~=comp-summer-editons-2023] .Polaris-Link_yj5sy:focus-visible {
        border-radius: var(--p-border-radius-150);
        outline: var(--p-color-border-focus) auto var(--p-border-width-050);
        outline-offset: var(--p-space-050)
    }

    .Polaris-Link_yj5sy:active {
        color: var(--p-color-text-emphasis-active);
        position: relative
    }

    .Polaris-Link_yj5sy:active:before {
        border-radius: 0.25rem;
        bottom: -.125rem;
        content: "";
        display: block;
        left: -.3125rem;
        position: absolute;
        right: -.3125rem;
        top: -.125rem;
        z-index: -1
    }

    html[class~=comp-summer-editons-2023] .Polaris-Link_yj5sy:active:before {
        content: none
    }

    @media print {
        .Polaris-Link_yj5sy {
            text-decoration-color: var(--p-color-border-strong)
        }
    }

    .Polaris-Link--monochrome_14jw2,.Polaris-Link--monochrome_14jw2:active,.Polaris-Link--monochrome_14jw2:focus,.Polaris-Link--monochrome_14jw2:hover {
        color: inherit
    }

    .Polaris-Link--removeUnderline_adav6 {
        text-decoration: none
    }

    .Polaris-Link--removeUnderline_adav6:hover {
        text-decoration: underline
    }
</style>



<style>
    :root {
        --osui-nav-item-interior-padding: 0.5rem;
        --osui_nav-action-connected-button-width: 1.75rem;
        --osui_nav-action-connected-button-width-slim: 1.25rem;
        --osui_nav-action-common-prefix-size: 1.25rem;
        --osui_nav-action-common-prefix-gap: 0.5rem;
        --osui-nav-item-alignment-none: 0;
        --osui-nav-item-alignment-base-tight: 0.75rem;
        --osui_nav-item-alignment-common-icon: calc(1.25rem + 0.5rem + 0.75rem);
        --osui_nav-item-alignment-common-action-with-icon: calc(1.25rem + 1.25rem + 0.5rem);
        --osui_nav-item-alignment-nested-offset: 0.25rem
    }

    .Polaris-List_yj3nl {
        list-style: disc none outside;
        margin-bottom: 0;
        margin-top: 0;
        padding-left: var(--p-space-500)
    }

    .Polaris-List_yj3nl+.Polaris-List_yj3nl {
        margin-top: var(--p-space-400)
    }

    .Polaris-List--typeNumber_bbvwn {
        list-style: decimal none outside;
        padding-left: var(--p-space-800)
    }

    .Polaris-List__Item_yiyol .Polaris-List_yj3nl:first-child {
        margin-top: 0.5rem
    }

    .Polaris-List--spacingLoose_yte7q .Polaris-List__Item_yiyol {
        margin-bottom: 0.5rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-List--spacingLoose_yte7q .Polaris-List__Item_yiyol {
        margin-bottom: 0.25rem
    }

    .Polaris-List__Item_yiyol:last-child {
        margin-bottom: 0
    }

    .Polaris-Checkbox_1d6zr {
        margin: var(--p-space-025);
        position: relative
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__ChoiceLabel_16hp3 .Polaris-Checkbox__Backdrop_1x2i2 {
        border-width: 0;
        box-shadow: inset 0 0 0 var(--p-border-width-0165) var(--p-color-input-border);
        transform: translateZ(0);
        transition: border-color var(--p-motion-duration-100) var(--p-motion-ease-out),border-width var(--p-motion-duration-100) var(--p-motion-ease-out),box-shadow var(--p-motion-duration-100) var(--p-motion-ease-out)
    }

    .Polaris-Checkbox__ChoiceLabel_16hp3:hover .Polaris-Checkbox__Backdrop_1x2i2 {
        border-color: var(--p-color-input-border-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__ChoiceLabel_16hp3:hover .Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-input-bg-surface-hover);
        box-shadow: inset 0 0 0 var(--p-border-width-0165) var(--p-color-input-border-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__ChoiceLabel_16hp3:active .Polaris-Checkbox__Backdrop_1x2i2,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__ChoiceLabel_16hp3:checked .Polaris-Checkbox__Backdrop_1x2i2 {
        border-color: var(--p-color-bg-primary);
        border-width: 0;
        box-shadow: inset 0 0 0 var(--p-space-050) var(--p-color-bg-primary)
    }

    .Polaris-Checkbox__Input_30ock {
        border: 0!important;
        clip-path: inset(50%)!important;
        height: .0625rem!important;
        margin: 0!important;
        overflow: hidden!important;
        padding: 0!important;
        position: absolute!important;
        top: 0;
        white-space: nowrap!important;
        width: .0625rem!important
    }

    .Polaris-Checkbox__Input_30ock:focus-visible+.Polaris-Checkbox__Backdrop_1x2i2:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:focus-visible+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-input-bg-surface-hover);
        border-width: 0;
        outline: var(--p-border-width-050) solid var(--p-color-border-focus);
        outline-offset: var(--p-space-025)
    }

    .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2,.Polaris-Checkbox__Input_30ock:checked+.Polaris-Checkbox__Backdrop_1x2i2 {
        border-color: var(--p-color-border-interactive)
    }

    .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2:before,.Polaris-Checkbox__Input_30ock:checked+.Polaris-Checkbox__Backdrop_1x2i2:before {
        opacity: 1;
        transform: scale(1)
    }

    @media (-ms-high-contrast:active) {
        .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2:before,.Polaris-Checkbox__Input_30ock:checked+.Polaris-Checkbox__Backdrop_1x2i2:before {
            border: var(--p-border-width-050) solid windowText
        }
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:checked+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-primary);
        border-color: var(--p-color-bg-primary);
        box-shadow: inset 0 0 0 var(--p-space-800) var(--p-color-bg-primary)
    }

    .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx~.Polaris-Checkbox__Icon_yj27d,.Polaris-Checkbox__Input_30ock:checked~.Polaris-Checkbox__Icon_yj27d {
        opacity: 1;
        transform: translate3d(-50%,-50%,0) scale(1);
        transition: opacity 150ms cubic-bezier(0.25,0.1,0.25,1),transform 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx~.Polaris-Checkbox__Icon_yj27d,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:checked~.Polaris-Checkbox__Icon_yj27d {
        transition: opacity 150ms var(--p-motion-ease-out),transform 150ms var(--p-motion-ease-out)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx~.Polaris-Checkbox__Icon_yj27d.Polaris-Checkbox--animated_mk14a,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:checked~.Polaris-Checkbox__Icon_yj27d.Polaris-Checkbox--animated_mk14a {
        transition: initial
    }

    .Polaris-Checkbox__Input_30ock:disabled+.Polaris-Checkbox__Backdrop_1x2i2 {
        border-color: var(--p-color-border-disabled)
    }

    .Polaris-Checkbox__Input_30ock:disabled+.Polaris-Checkbox__Backdrop_1x2i2:before {
        background-color: var(--p-color-bg-disabled)
    }

    .Polaris-Checkbox__Input_30ock:disabled+.Polaris-Checkbox__Backdrop_1x2i2:hover {
        cursor: default
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:disabled+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-transparent-secondary-disabled-experimental);
        border-color: #0000;
        box-shadow: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:disabled+.Polaris-Checkbox__Backdrop_1x2i2:before {
        background-color: initial
    }

    .Polaris-Checkbox__Input_30ock:disabled.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2,.Polaris-Checkbox__Input_30ock:disabled.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2:before,.Polaris-Checkbox__Input_30ock:disabled:checked+.Polaris-Checkbox__Backdrop_1x2i2,.Polaris-Checkbox__Input_30ock:disabled:checked+.Polaris-Checkbox__Backdrop_1x2i2:before {
        background: var(--p-color-border-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:disabled.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:disabled:checked+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-transparent-secondary-disabled-experimental)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:disabled.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2:before,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:disabled:checked+.Polaris-Checkbox__Backdrop_1x2i2:before {
        background-color: initial
    }

    .Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-surface);
        border: var(--p-border-width-050) solid var(--p-color-input-border);
        border-radius: 0.25rem;
        display: block;
        height: 100%;
        position: relative;
        width: 100%
    }

    .Polaris-Checkbox__Backdrop_1x2i2:before {
        background-color: var(--p-color-bg-interactive);
        border-radius: 0.25rem;
        bottom: calc(var(--p-border-width-050)*-1);
        content: "";
        left: calc(var(--p-border-width-050)*-1);
        opacity: 0;
        position: absolute;
        right: calc(var(--p-border-width-050)*-1);
        top: calc(var(--p-border-width-050)*-1);
        transform: scale(.25);
        transition: opacity var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1),transform var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Backdrop_1x2i2:before {
        content: none
    }

    .Polaris-Checkbox__Backdrop_1x2i2.Polaris-Checkbox--hover_37sww,.Polaris-Checkbox__Backdrop_1x2i2:hover {
        border-color: var(--p-color-border-hover);
        cursor: pointer
    }

    .Polaris-Checkbox__Backdrop_1x2i2:after {
        border-radius: 0.25rem;
        bottom: calc(var(--p-border-width-050)*-1 - .0625rem);
        box-shadow: 0 0 0 calc(var(--p-border-width-050)*-1 - .0625rem) var(--p-color-border-focus);
        content: "";
        display: block;
        left: calc(var(--p-border-width-050)*-1 - .0625rem);
        pointer-events: none;
        position: absolute;
        right: calc(var(--p-border-width-050)*-1 - .0625rem);
        top: calc(var(--p-border-width-050)*-1 - .0625rem);
        z-index: 1
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Backdrop_1x2i2 {
        border: var(--p-border-width-0165) solid var(--p-color-input-border)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Backdrop_1x2i2:after {
        content: none
    }

    .Polaris-Checkbox__Backdrop_1x2i2:hover {
        border-color: var(--p-color-input-border-hover)
    }

    .Polaris-Checkbox__Icon_yj27d {
        left: 50%;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 50%;
        transform: translate3d(-50%,-50%,0) scale(.25);
        transform-origin: 50% 50%;
        transition: opacity var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1),transform var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Icon_yj27d {
        bottom: calc(var(--p-space-050)*-1);
        left: calc(var(--p-space-050)*-1);
        right: calc(var(--p-space-050)*-1);
        top: calc(var(--p-space-050)*-1);
        transform: none!important;
        transition: opacity var(--p-motion-duration-100) var(--p-motion-ease-out),transform var(--p-motion-duration-100) var(--p-motion-ease-out)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Icon_yj27d.Polaris-Checkbox--animated_mk14a {
        bottom: 0;
        left: 0;
        margin: var(--p-space-050);
        right: 0;
        top: 0;
        transform: none;
        transition: initial
    }

    .Polaris-Checkbox__Icon_yj27d svg {
        fill: var(--p-color-icon-on-color)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Icon_yj27d svg {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0
    }

    @media (-ms-high-contrast:active) {
        .Polaris-Checkbox__Icon_yj27d {
            fill: windowText
        }
    }

    .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Icon_yj27d svg {
        fill: var(--p-color-icon-on-color)
    }

    .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-fill-critical-secondary);
        border-color: var(--p-color-border-critical)
    }

    .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock+.Polaris-Checkbox__Backdrop_1x2i2.Polaris-Checkbox--hover_37sww,.Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock+.Polaris-Checkbox__Backdrop_1x2i2:hover {
        border-color: var(--p-color-border-critical)
    }

    .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock+.Polaris-Checkbox__Backdrop_1x2i2:before {
        background-color: var(--p-color-border-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-surface-critical);
        box-shadow: inset 0 0 0 var(--p-border-width-0165) var(--p-color-bg-fill-critical-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Backdrop_1x2i2:active {
        box-shadow: inset 0 0 0 var(--p-space-050) var(--p-color-bg-fill-critical-active)
    }

    .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2,.Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock:checked+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-border-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2,html[class~=comp-summer-editons-2023] .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock:checked+.Polaris-Checkbox__Backdrop_1x2i2 {
        box-shadow: inset 0 0 0 0.75rem var(--p-color-bg-fill-critical-active)!important
    }

    .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock:active+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-border-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock:active+.Polaris-Checkbox__Backdrop_1x2i2 {
        box-shadow: inset 0 0 0 var(--p-space-050) var(--p-color-bg-fill-critical-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock:focus-visible+.Polaris-Checkbox__Backdrop_1x2i2,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__ChoiceLabel_16hp3:hover .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock:focus-visible+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-surface-critical);
        border-color: var(--p-color-border-critical-secondary)
    }

    .Polaris-Checkbox--animated_mk14a svg>path {
        stroke-dasharray: 2;
        stroke-dashoffset: 2
    }

    .Polaris-Checkbox--animated_mk14a svg>path.Polaris-Checkbox--checked_17qxt {
        animation-direction: normal;
        animation-duration: 150ms;
        animation-fill-mode: forwards;
        animation-iteration-count: 1;
        animation-name: Polaris-Checkbox--pathAnimation_xxdul;
        animation-timing-function: linear;
        opacity: 1
    }

    @keyframes Polaris-Checkbox--pathAnimation_xxdul {
        0% {
            stroke-dashoffset: 2
        }

        to {
            stroke-dashoffset: 0
        }
    }

    .Online-Store-UI-UppercaseText_1m15a {
        text-transform: uppercase
    }

    .Online-Store-UI-PanelArea_tm93o {
        height: 100%;
        position: relative;
        width: 100%
    }

    @media (min-width: 41.6875em) {
        .Online-Store-UI-PanelArea_tm93o {
            width:var(--osui_width-sidebar-desktop)
        }
    }

    .Online-Store-UI-PanelArea_tm93o:empty {
        display: none
    }

    .store-ul-sortablelist {
        --osui_gap-pe-sortable-list: 0.25rem /2;
        --osui_margin-top-pe-sortable-list-divider: 0.25rem;
        --osui-margin-x-sortable-list-ghost: 0.75rem;
        background-color: var(--p-color-bg-surface);
        display: flex;
        flex-direction: column;
        list-style: none;
        margin: 0;
        padding: 0;
        padding-left: var(--osui_padding-left-pe-sortable-list)
    }

    @media (max-width: 41.6775em) {
        .store-ul-sortablelist {
            --osui_nav-action-connected-button-width:var( --osui_size-min-action-mobile );
            --osui_nav-action-connected-button-width-slim: var( --osui_size-min-action-mobile );
            --osui_height-nav-action: var(--osui_size-min-action-mobile)
        }
    }

    .store-ul-sortablelist li+li {
        margin-top: var(--osui_gap-pe-sortable-list)
    }

    .store-ul-sortablelist>* {
        -webkit-user-select: none;
        user-select: none
    }

    @media (max-width: 41.6775em) {
        .store-ul-sortablelist {
            --osui_gap-pe-sortable-list:0.5rem;
            --osui_margin-top-pe-sortable-list-divider: 0.75rem
        }
    }

    .store-ul-sortablelist+.store-ul-sortablelist:before {
        background-color: var(--p-color-border-secondary);
        content: "";
        height: var(--p-border-width-025);
        margin: var(--osui_margin-top-pe-sortable-list-divider) var(--p-space-400)
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-sortablelist .store-ul-sortablelist {
        --osui_height-nav-action-legacy: 2rem
    }

    @media (max-width: 41.6775em) {
        .store-ul-sortablelist .store-ul-sortablelist {
            --osui_gap-pe-sortable-list:0.25rem
        }

        .store-ul-sortablelist .store-ul-sortablelist li:first-child {
            margin-top: var(--osui_gap-pe-sortable-list)
        }
    }

    .store-ul-sortablelist .store-ul-sortablelist.Online-Store-UI-SortableList--preventDragOffset_7499l {
        --osui-margin-x-sortable-list-ghost: 0.25rem
    }

    .store-ul-sortablelist.Online-Store-UI-SortableList--activeList_1vpne {
        position: relative
    }

    .store-ul-sortablelist.Online-Store-UI-SortableList--activeList_1vpne:after {
        border: var(--p-border-width-025) dashed #0000;
        border-color: var(--p-color-border-interactive);
        border-radius: 0.5rem;
        content: "";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%
    }

    .store-ul-sortablelist+.store-ul-sortablelist.store-ul-sortablelist.Online-Store-UI-SortableList--activeList_1vpne:after {
        height: calc(100% - var(--osui_margin-top-pe-sortable-list-divider)*2);
        top: calc(var(--osui_margin-top-pe-sortable-list-divider)*2)
    }

    .store-ul-sortablelist.store-ul-sortablelist--left-alignment-none {
        --osui_padding-left-pe-sortable-list: var( --osui-nav-item-alignment-spacing-none )
    }

    .store-ul-sortablelist.Online-Store-UI-SortableList--leftAlignmentBaseTight_fj4cs {
        --osui_padding-left-pe-sortable-list: var( --osui-nav-item-alignment-base-tight )
    }

    .store-ul-sortablelist .store-ul-sortablelist.Online-Store-UI-SortableList--leftAlignmentBaseTight_fj4cs {
        --osui_padding-left-pe-sortable-list: calc(0.75rem - var(--osui_nav-item-alignment-nested-offset))
    }

    .store-ul-sortablelist.Online-Store-UI-SortableList--leftAlignmentPrefix_16ocx {
        --osui_padding-left-pe-sortable-list: var( --osui_nav-action-connected-button-width-slim )
    }

    .store-ul-sortablelist .store-ul-sortablelist.Online-Store-UI-SortableList--leftAlignmentPrefix_16ocx {
        --osui_padding-left-pe-sortable-list: calc(1.25rem - var(--osui_nav-item-alignment-nested-offset))
    }

    .store-ul-sortablelist.Online-Store-UI-SortableList--leftAlignmentIcon_ce8re {
        --osui_padding-left-pe-sortable-list: var( --osui_nav-item-alignment-common-icon )
    }

    .store-ul-sortablelist .store-ul-sortablelist.Online-Store-UI-SortableList--leftAlignmentIcon_ce8re {
        --osui_padding-left-pe-sortable-list: calc(var(--osui_nav-item-alignment-common-icon) - var(--osui_nav-item-alignment-nested-offset))
    }

    .store-ul-sortablelist .store-ul-sortable-list--left-alignment-with-icon {
        padding-left: 35px;
    }

    .store-ul-sortablelist .store-ul-sortablelist.store-ul-sortable-list--left-alignment-with-icon {
        padding-left: 35px;
    }

    .Online-Store-UI-Clone_ctpnw {
        list-style: none;
        margin: 0;
        padding: 0
    }

    @keyframes Online-Store-UI-NavItem--dragLiftX_fjzfk {
        to {
            transform: translate3d(1.5625rem,0,0)
        }
    }

    @keyframes Online-Store-UI-NavItem--dragLiftY_4gx2q {
        to {
            transform: translate3d(0,-.8125rem,0)
        }
    }

    .store-ul-navitem {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        flex: 1 1 auto;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        position: relative;
        will-change: transform
    }

    @media (max-width: 41.6775em) {
        html[class~=comp-summer-editons-2023] .store-ul-navitem {
            --osui_padding-x-nav-item:0.75rem
        }

        .store-ul-navitem {
            --osui_nav-action-connected-button-width: var( --osui_size-min-action-mobile );
            --osui_nav-action-connected-button-width-slim: var( --osui_size-min-action-mobile );
            --osui_height-nav-action: var(--osui_size-min-action-mobile)
        }
    }

    .store-ul-navitem.Online-Store-UI-NavItem--nested_7zt26 {
        padding-left: 0;
        padding-right: 0
    }

    .store-ul-navitem.Online-Store-UI-NavItem--disabled_znugc .store-ul-navitem--title-prefix svg,.store-ul-navitem.Online-Store-UI-NavItem--disabled_znugc svg {
        fill: var(--p-color-icon-disabled)
    }

    .store-ul-navitem.Online-Store-UI-NavItem--disabled_znugc .store-ul-navitem--title {
        color: var(--p-color-text-disabled)
    }

    .store-ul-navitem:focus {
        outline: 0
    }

    :not(.Online-Store-UI-NavItem--disabled_znugc):not(.Online-Store-UI-NavItem--hidden_9ctlx)>.Online-Store-UI-NavItem--selected_14pmv:not(.Online-Store-UI-NavItem--error_15f2q) .store-ul-navitem svg {
        fill: var(--p-color-icon-emphasis)
    }

    .Online-Store-UI-NavItem--clone_154dt {
        --osui_margin-x-nav-item-clone: 0.75rem;
        animation: Online-Store-UI-NavItem--dragLiftX_fjzfk 150ms var(--osui_easing-bounce) both;
        background-color: var(--p-color-bg-surface);
        border-radius: 0.5rem;
        box-shadow: 0 .0625rem .1875rem 0 #00000080;
        cursor: grabbing;
        padding-left: 0;
        padding-right: 0
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-NavItem--clone_154dt {
        border-radius: 0.25rem
    }

    .Online-Store-UI-NavItem--clone_154dt:not(.Online-Store-UI-NavItem--nested_7zt26) {
        margin-left: var(--osui_margin-x-nav-item-clone);
        margin-right: var(--osui_margin-x-nav-item-clone)
    }

    .Online-Store-UI-NavItem--clone_154dt:not(.Online-Store-UI-NavItem--nested_7zt26).Online-Store-UI-NavItem--preventCloneOffset_1fs49 {
        --osui_margin-x-nav-item-clone: 0
    }

    .Online-Store-UI-NavItem--clone_154dt.Online-Store-UI-NavItem--preventCloneOffset_1fs49 {
        animation: Online-Store-UI-NavItem--dragLiftY_4gx2q 150ms var(--osui_easing-bounce) both;
        box-shadow: 0 0 .1875rem #0000001a,0 .25rem 1.25rem #00000026
    }

    .Online-Store-UI-NavItem--clone_154dt button {
        pointer-events: none;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .store-ul-navitem__interior {
        align-items: center;
        border-radius: 0.5rem;
        display: grid;
        grid-template-areas: "prefix title suffix";
        grid-template-columns: auto 1fr auto;
        grid-template-rows: 100%;
        height: 2.125rem;
        position: relative;
        width: 100%
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-navitem__interior {
        --osui_height-nav-action: 2.25rem;
        border-radius: 0.25rem
    }

    @media (max-width: 41.6775em) {
        html:not([class~=comp-summer-editons-2023]) .store-ul-navitem__interior {
            --osui_nav-action-connected-button-width:var( --osui_size-min-action-mobile );
            --osui_nav-action-connected-button-width-slim: var( --osui_size-min-action-mobile );
            --osui_height-nav-action: var(--osui_size-min-action-mobile)
        }
    }

    .store-ul-navitem__interior.Online-Store-UI-NavItem--backgroundColorHighlight_1o5qj {
        background-color: var(--p-color-bg-interactive-selected)
    }

    .store-ul-navitem__interior.Online-Store-UI-NavItem--backgroundColorSecondary_4k951 {
        background-color: var(--p-color-bg-app)
    }

    .store-ul-navitem__prefix,.store-ul-navitem__suffix,.store-ul-navitem__title-content {
        align-items: center;
        display: flex;
        height: 100%
    }

    .store-ul-navitem__title-content {
        flex-grow: 1;
        gap: 0.5rem;
        grid-area: title;
        max-width: 100%;
        min-width: 0;
        padding-left: var(--osui_padding-left-nav-item-title-content);
        pointer-events: none;
        z-index: 2
    }

    .store-ul-navitem--fleeting .store-ul-navitem__title-content:not(.Online-Store-UI-NavItem--hasPreventFleeting_1y88z) {
        grid-column-end: suffix;
        grid-column-start: title;
        transition: grid-area var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-navitem--fleeting:focus-within .store-ul-navitem__title-content:not(.Online-Store-UI-NavItem--hasPreventFleeting_1y88z),.store-ul-navitem--fleeting:hover .store-ul-navitem__title-content:not(.Online-Store-UI-NavItem--hasPreventFleeting_1y88z) {
        grid-area: title
    }

    .Online-Store-UI-NavItem--nested_7zt26 .store-ul-navitem__title-content,.store-ul-navitem__title-content.store-ul-navitem--label-alignment-none {
        --osui_padding-left-nav-item-title-content: var( --osui-nav-item-alignment-none )
    }

    .Online-Store-UI-NavItem--nested_7zt26:not(.Online-Store-UI-NavItem--preventNestedOffset_kc70y) .store-ul-navitem__title-content {
        --osui_padding-left-nav-item-title-content: var( --osui_nav-item-alignment-nested-offset )
    }

    .store-ul-navitem__title-content.Online-Store-UI-NavItem--labelAlignmentBaseTight_ply1m {
        --osui_padding-left-nav-item-title-content: var( --osui-nav-item-alignment-base-tight )
    }

    .store-ul-navitem__title-content.store-ul-navitem--label-alignment-prefix {
        --osui_padding-left-nav-item-title-content: var( --osui_nav-action-connected-button-width-slim )
    }

    .store-ul-navitem__title-content.Online-Store-UI-NavItem--labelAlignmentPrefixWithIcon_18ezj {
        --osui_padding-left-nav-item-title-content: var( --osui_nav-item-alignment-common-action-with-icon )
    }

    .store-ul-navitem__title-content.Online-Store-UI-NavItem--labelAlignmentIcon_1e6br {
        --osui_padding-left-nav-item-title-content: var( --osui_nav-item-alignment-common-icon )
    }

    .store-ul-navitem__title-content.Online-Store-UI-NavItem--labelAlignmentIcon_1e6br.store-ul-navitem--item-has-prefix {
        --osui_padding-left-nav-item-title-content: calc(1.25rem + 0.5rem)
    }

    .Online-Store-UI-NavItem--disabled_znugc .store-ul-navitem__prefix,.Online-Store-UI-NavItem--disabled_znugc .store-ul-navitem__suffix {
        pointer-events: none;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-NavItem--selected_14pmv:before {
        background-color: var(--p-color-bg-interactive);
        border-bottom-right-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        content: "";
        display: block;
        height: 100%;
        left: calc(0.5rem*-1);
        position: absolute;
        top: 0;
        width: var(--p-border-width-3)
    }

    .Online-Store-UI-NavItem--nested_7zt26 .Online-Store-UI-NavItem--selected_14pmv:before {
        content: none
    }

    .store-ul-navitem__prefix {
        grid-area: prefix;
        z-index: 2
    }

    .store-ul-navitem__primary-action {
        fill: #4a4a4a;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        align-items: center;
        -webkit-appearance: none;
        appearance: none;
        background: none;
        background-color: initial;
        border: none;
        border-radius: 0.5rem;
        bottom: 0;
        color: inherit;
        color: #303030;
        cursor: pointer;
        display: inline-flex;
        display: flex;
        font-size: inherit;
        font-weight: 500;
        height: 2.125rem;
        height: 100%;
        justify-content: center;
        justify-content: left;
        left: 0;
        letter-spacing: normal;
        line-height: inherit;
        line-height: 1;
        margin: 0;
        max-width: 100%;
        min-height: 2rem;
        min-height: auto;
        min-width: 0;
        min-width: 2rem;
        min-width: auto;
        outline: none;
        padding: 0;
        position: relative;
        position: absolute;
        right: 0;
        text-align: left;
        text-decoration: none;
        text-transform: none;
        top: 0;
        transition-duration: 150ms;
        transition-property: color,background-color;
        transition-timing-function: cubic-bezier(0.25,0.1,0.25,1);
        transition: background-color 150ms cubic-bezier(0.25,0.1,0.25,1);
        width: 100%
    }

    .store-ul-navitem__primary-action:focus {
        outline: none
    }

    .store-ul-navitem__primary-action:after {
        border-radius: calc(0.5rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    .store-ul-navitem__primary-action:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-navitem__primary-action:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        .store-ul-navitem__primary-action:focus:not(:focus-visible):after {
            outline: none
        }
    }

    .store-ul-navitem__primary-action:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-navitem__primary-action:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    .store-ul-navitem__primary-action svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-navitem__primary-action:focus-visible {
        background-color: #0000000f;
        color: #4a4a4a
    }

    .store-ul-navitem__primary-action:focus-visible svg {
        fill: #4a4a4a
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-navitem__primary-action:hover {
            background-color:#0000000f;
            color: #4a4a4a
        }

        .store-ul-navitem__primary-action:hover svg {
            fill: #4a4a4a
        }
    }

    .store-ul-navitem__primary-action:active {
        background-color: #f3f3f3;
        color: #4a4a4a
    }

    .store-ul-navitem__primary-action:active svg {
        fill: #4a4a4a
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-navitem__primary-action {
        --osui_height-nav-action: 2.25rem;
        border-radius: 0.25rem
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-navitem__primary-action:after {
        border-radius: 0.25rem
    }

    .Online-Store-UI-NavItem--hasIndicator_1yowk .store-ul-navitem__primary-action:before {
        background-color: var(--p-color-bg-primary-active);
        border-radius: 100%;
        content: "";
        display: block;
        height: .5rem;
        margin-left: -.875rem;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: .5rem
    }

    .Online-Store-UI-NavItem--nested_7zt26 .Online-Store-UI-NavItem--hasIndicator_1yowk .store-ul-navitem__primary-action:before {
        margin-left: -.625rem
    }

    @media (max-width: 41.6775em) {
        .Online-Store-UI-NavItem--hasIndicator_1yowk .store-ul-navitem__primary-action:before {
            margin-left:-1.625rem
        }

        .Online-Store-UI-NavItem--nested_7zt26 .Online-Store-UI-NavItem--hasIndicator_1yowk .store-ul-navitem__primary-action:before {
            margin-left: -1.375rem
        }
    }

    .store-ul-navitem__primary-action:focus-visible {
        background-color: #fafafa;
        color: #303030
    }

    .store-ul-navitem__primary-action:focus-visible svg {
        fill: #303030
    }

    @media (-ms-high-contrast:active) {
        .store-ul-navitem__primary-action:focus-visible svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-navitem__primary-action:hover {
            background-color:#fafafa;
            color: #303030
        }

        .store-ul-navitem__primary-action:hover svg {
            fill: #303030
        }
    }

    @media (hover: hover) and (pointer:fine) and (-ms-high-contrast:active) {
        .store-ul-navitem__primary-action:hover svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-navitem:not(.Online-Store-UI-NavItem--hidden_9ctlx)>.store-ul-navitem__interior:not(.Online-Store-UI-NavItem--error_15f2q):not(.store-ul-navitem--interactive):not(.Online-Store-UI-NavItem--selected_14pmv) .store-ul-navitem__primary-action:hover~.store-ul-navitem__title-content>.store-ul-navitem--title-prefix svg {
            fill:#303030
        }
    }

    .store-ul-navitem__primary-action:active {
        background-color: #fafafa;
        background-color: var(--p-color-bg-active);
        color: #303030
    }

    .store-ul-navitem__primary-action:active svg {
        fill: #303030
    }

    @media (-ms-high-contrast:active) {
        .store-ul-navitem__primary-action:active svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    .Online-Store-UI-NavItem--disabled_znugc .store-ul-navitem__primary-action,.Online-Store-UI-NavItem--plain_1568a .store-ul-navitem__primary-action {
        pointer-events: none;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-NavItem--selected_14pmv .store-ul-navitem__primary-action {
        background-color: var(--p-color-bg-interactive-selected)
    }

    .Online-Store-UI-NavItem--pressed_1epud .store-ul-navitem__primary-action {
        background-color: var(--p-color-bg-active)
    }

    .store-ul-navitem--title-prefix svg {
        fill: #4a4a4a
    }

    .Online-Store-UI-NavItem--hidden_9ctlx .store-ul-navitem--title-prefix svg {
        fill: var(--p-color-icon-secondary)
    }

    .store-ul-navitem--interactive .store-ul-navitem--title-prefix svg {
        fill: var(--p-color-icon-emphasis)
    }

    .store-ul-navitem--interactive.Online-Store-UI-NavItem--pressed_1epud .store-ul-navitem--title-prefix svg {
        fill: var(--p-color-icon-emphasis-active)
    }

    .Online-Store-UI-NavItem--error_15f2q .store-ul-navitem--title-prefix svg {
        fill: var(--p-color-icon-critical)
    }

    .store-ul-navitem--title {
        max-width: 100%;
        min-width: 0
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-navitem--title {
        font-weight: 600;
        margin-bottom: -.14em;
        overflow: hidden;
        padding-bottom: .14em;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-NavItem--nested_7zt26 .store-ul-navitem--title {
        font-weight: 400
    }

    .Online-Store-UI-NavItem--hidden_9ctlx .store-ul-navitem--title {
        color: var(--p-color-text-secondary)
    }

    .store-ul-navitem--interactive .store-ul-navitem--title {
        color: var(--p-color-text-emphasis)
    }

    .store-ul-navitem--interactive.Online-Store-UI-NavItem--pressed_1epud .store-ul-navitem--title {
        color: var(--p-color-text-emphasis-active)
    }

    .Online-Store-UI-NavItem--error_15f2q .store-ul-navitem--title {
        color: var(--p-color-text-critical)
    }

    .store-ul-navitem__suffix {
        align-items: center;
        display: flex;
        flex: 0 0 auto;
        grid-area: suffix;
        justify-self: self-end;
        position: relative;
        z-index: 2
    }

    .store-ul-navitem--fleeting .store-ul-navitem__suffix>:not(.Online-Store-UI-NavItem__PreventFleeting_x1na9) {
        opacity: 0;
        transition: opacity var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-navitem--fleeting:focus-within .store-ul-navitem__suffix>:not(.Online-Store-UI-NavItem__PreventFleeting_x1na9),.store-ul-navitem--fleeting:hover .store-ul-navitem__suffix>:not(.Online-Store-UI-NavItem__PreventFleeting_x1na9) {
        opacity: 1
    }

    .Online-Store-UI-NavItem--hovered_1epcj {
        background-color: #fafafa;
        color: #303030
    }

    .Online-Store-UI-NavItem--hovered_1epcj svg {
        fill: #303030
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-NavItem--hovered_1epcj svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    .store-ul-navitem--title .Online-Store-UI-NavItem__Subtitle_1th6y {
        color: var(--p-color-text-secondary);
        font-size: var(--p-font-size-75);
        padding-left: .3125rem
    }

    .Online-Store-UI-Chevron_n30pf {
        display: grid;
        place-items: center;
        width: 1.25rem
    }

    .store-ul-disclosure__action {
        fill: #4a4a4a;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        align-items: center;
        -webkit-appearance: none;
        appearance: none;
        background: none;
        background-color: initial;
        border: none;
        border-radius: 0.5rem;
        color: inherit;
        color: #303030;
        cursor: pointer;
        display: inline-flex;
        display: flex;
        font-size: inherit;
        font-weight: 500;
        height: 2.125rem;
        justify-content: center;
        letter-spacing: normal;
        line-height: inherit;
        line-height: 1;
        margin: 0;
        max-width: 100%;
        min-height: 2rem;
        min-height: auto;
        min-width: 0;
        min-width: 2rem;
        min-width: auto;
        outline: none;
        padding: 0;
        position: relative;
        text-decoration: none;
        text-transform: none;
        transition-duration: 150ms;
        transition-property: color,background-color;
        transition-timing-function: cubic-bezier(0.25,0.1,0.25,1);
        width: 1.25rem
    }

    .store-ul-disclosure__action:focus {
        outline: none
    }

    .store-ul-disclosure__action:after {
        border-radius: calc(0.5rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    .store-ul-disclosure__action:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-disclosure__action:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        .store-ul-disclosure__action:focus:not(:focus-visible):after {
            outline: none
        }
    }

    .store-ul-disclosure__action:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-disclosure__action:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    .store-ul-disclosure__action svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-disclosure__action:focus-visible {
        background-color: #0000000f;
        color: #4a4a4a
    }

    .store-ul-disclosure__action:focus-visible svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-disclosure__action:focus-visible svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-disclosure__action:hover {
            background-color:#0000000f;
            color: #4a4a4a
        }

        .store-ul-disclosure__action:hover svg {
            fill: #4a4a4a
        }
    }

    @media (hover: hover) and (pointer:fine) and (-ms-high-contrast:active) {
        .store-ul-disclosure__action:hover svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    .store-ul-disclosure__action:active {
        background-color: #f3f3f3;
        color: #4a4a4a
    }

    .store-ul-disclosure__action:active svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-disclosure__action:active svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-disclosure__action {
        --osui_height-nav-action: 2.25rem;
        border-radius: 0.25rem
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-disclosure__action:after {
        border-radius: 0.25rem
    }

    .store-ul-disclosure__icon {
        align-items: center;
        display: flex;
        flex: 0 0 auto;
        height: 1.25rem;
        justify-content: center;
        width: 1.25rem
    }

    .store-ul-disclosure__icon svg {
        flex: 0 0 auto;
        height: 100%;
        margin: auto;
        overflow: visible;
        width: 100%
    }

    html[class~=comp-summer-editons-2023] .store-ul-disclosure__icon svg {
        fill: var(--p-color-icon-secondary)
    }

    .store-ul-disclosure:not(.store-ul-disclosure--expanded) .store-ul-disclosure__icon {
        transform: rotate(-90deg)
    }

    .store-ul-drag-handle {
        fill: #4a4a4a;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        align-items: center;
        -webkit-appearance: none;
        appearance: none;
        background: none;
        background-color: initial;
        border: none;
        border-radius: 0.5rem;
        color: inherit;
        color: #303030;
        cursor: pointer;
        cursor: grab;
        display: inline-flex;
        display: flex;
        font-size: inherit;
        font-weight: 500;
        height: 2.125rem;
        justify-content: center;
        letter-spacing: normal;
        line-height: inherit;
        line-height: 1;
        margin: 0;
        max-width: 100%;
        min-height: 2rem;
        min-height: auto;
        min-width: 0;
        min-width: 2rem;
        min-width: auto;
        outline: none;
        padding: 0;
        position: relative;
        text-decoration: none;
        text-transform: none;
        touch-action: none;
        transition-duration: 150ms;
        transition-property: color,background-color;
        transition-timing-function: cubic-bezier(0.25,0.1,0.25,1);
        width: var(--osui_nav-action-connected-button-width)
    }

    .store-ul-drag-handle:focus {
        outline: none
    }

    .store-ul-drag-handle:after {
        border-radius: calc(0.5rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    .store-ul-drag-handle:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-drag-handle:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        .store-ul-drag-handle:focus:not(:focus-visible):after {
            outline: none
        }
    }

    .store-ul-drag-handle:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-drag-handle:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    .store-ul-drag-handle svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-drag-handle:focus-visible {
        background-color: #0000000f;
        color: #4a4a4a
    }

    .store-ul-drag-handle:focus-visible svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-drag-handle:focus-visible svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-drag-handle:hover {
            background-color:#0000000f;
            color: #4a4a4a
        }

        .store-ul-drag-handle:hover svg {
            fill: #4a4a4a
        }
    }

    @media (hover: hover) and (pointer:fine) and (-ms-high-contrast:active) {
        .store-ul-drag-handle:hover svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    .store-ul-drag-handle:active {
        background-color: #f3f3f3;
        color: #4a4a4a
    }

    .store-ul-drag-handle:active svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-drag-handle:active svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-drag-handle {
        --osui_height-nav-action: 2.25rem;
        border-radius: var(--p-border-width-025)
    }

    @media (hover: hover) and (pointer:fine) {
        html:not([class~=comp-summer-editons-2023]) .store-ul-drag-handle:hover {
            color:#303030
        }

        html:not([class~=comp-summer-editons-2023]) .store-ul-drag-handle:hover svg {
            fill: #303030
        }
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-drag-handle:after {
        border-radius: var(--p-border-radius-050)
    }

    .Online-Store-UI-DragHandle--fleeting_iukl8 .store-ul-drag-handle {
        opacity: 0;
        transition: opacity var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1)
    }

    .Online-Store-UI-DragHandle--fleeting_iukl8:focus-within .store-ul-drag-handle,.Online-Store-UI-DragHandle--fleeting_iukl8:hover .store-ul-drag-handle {
        opacity: 1
    }

    @media (max-width: 41.6775em) {
        .store-ul-drag-handle {
            width:2.125rem
        }
    }

    .store-ul-drag-handle:disabled {
        pointer-events: none;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .store-ul-drag-handle:disabled svg {
        fill: var(--p-color-icon-disabled)
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4 {
        fill: #4a4a4a;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        align-items: center;
        -webkit-appearance: none;
        appearance: none;
        background: none;
        background-color: initial;
        border: none;
        border-radius: 0.5rem;
        color: inherit;
        color: #303030;
        cursor: pointer;
        display: inline-flex;
        display: flex;
        font-size: inherit;
        font-weight: 500;
        height: 2.125rem;
        justify-content: center;
        letter-spacing: normal;
        line-height: inherit;
        line-height: 1;
        margin: 0;
        max-width: 100%;
        min-height: 2rem;
        min-height: auto;
        min-width: 0;
        min-width: 2rem;
        min-width: auto;
        outline: none;
        padding: 0;
        position: relative;
        text-decoration: none;
        text-transform: none;
        transition-duration: 150ms;
        transition-property: color,background-color;
        transition-timing-function: cubic-bezier(0.25,0.1,0.25,1);
        width: 1.25rem
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus {
        outline: none
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:after {
        border-radius: calc(0.5rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus:not(:focus-visible):after {
            outline: none
        }
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4 svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus-visible {
        background-color: #0000000f;
        color: #4a4a4a
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus-visible svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus-visible svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:hover {
            background-color:#0000000f;
            color: #4a4a4a
        }

        .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:hover svg {
            fill: #4a4a4a
        }
    }

    @media (hover: hover) and (pointer:fine) and (-ms-high-contrast:active) {
        .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:hover svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:active {
        background-color: #f3f3f3;
        color: #4a4a4a
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:active svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:active svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4 {
        --osui_height-nav-action: 2.25rem
    }

    .store-ul-drag-handle__icon-wrapper {
        align-items: center;
        display: flex;
        flex: 0 0 auto;
        height: .75rem;
        justify-content: center;
        width: .75rem
    }

    .store-ul-drag-handle__icon-wrapper svg {
        fill: #4a4a4a;
        flex: 0 0 auto;
        height: 100%;
        margin: auto;
        overflow: visible;
        width: 100%
    }

    .Online-Store-UI-DragHandle--pressed_1xcp2 {
        color: #4a4a4a;
        cursor: grabbing
    }

    .Online-Store-UI-DragHandle--pressed_1xcp2:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .Online-Store-UI-DragHandle--pressed_1xcp2 svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-DragHandle--pressed_1xcp2 svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-DragHandle--pressed_1xcp2 {
        color: #303030
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-DragHandle--pressed_1xcp2 svg {
        fill: #303030
    }

    .store-ul-drag-handle__container {
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-Collapsible--collapsed_1tzfi {
        display: none
    }

    .Online-Store-UI-Ghost_mporc {
        background-color: var(--p-color-bg-interactive-selected);
        border-radius: 0.25rem;
        height: 2.125rem;
        margin-left: var(--osui-margin-x-sortable-list-ghost);
        margin-right: var(--osui-margin-x-sortable-list-ghost)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Ghost_mporc {
        height: 2.25rem
    }

    @media (max-width: 41.6775em) {
        .Online-Store-UI-Ghost_mporc {
            --osui_height-nav-action:var(--osui_size-min-action-mobile)
        }
    }

    .Online-Store-UI-Ghost--spacingBase_5anqd {
        padding-left: 0.5rem;
        padding-right: 0.75rem
    }

    .Online-Store-UI-Ghost--spacingTight_11gb7 {
        padding-left: 0.25rem;
        padding-right: 0.25rem
    }

    .Online-Store-UI-Ghost--spacingNone_4y83l {
        padding-left: 0;
        padding-right: 0
    }

    .Polaris-DropZone_1ehhx {
        --pc-drop-zone-outline: 29;
        --pc-drop-zone-overlay: 30;
        background-color: var(--p-color-bg-surface);
        border-radius: 0.5rem;
        display: flex;
        justify-content: center;
        position: relative
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone_1ehhx {
        background-color: var(--p-color-input-bg-surface)
    }

    .Polaris-DropZone_1ehhx:after {
        border: var(--p-border-width-025) dashed #0000;
        border-radius: 0.5rem;
        bottom: 0;
        content: "";
        left: 0;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
        z-index: var(--pc-drop-zone-outline)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone_1ehhx:after {
        border-width: var(--p-border-width-0165)
    }

    .Polaris-DropZone_1ehhx:not(.Polaris-DropZone--focused_17w4h):after {
        border: var(--p-border-width-025) dashed #0000;
        bottom: 0;
        left: 0;
        opacity: 1;
        right: 0;
        top: 0;
        transform: scale(1)
    }

    .Polaris-DropZone_1ehhx:hover {
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-DropZone--hasOutline_1z0fh {
        padding: var(--p-space-025)
    }

    .Polaris-DropZone--hasOutline_1z0fh:after {
        border-color: var(--p-color-border-strong)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--isDisabled_7e21n):after {
        border-color: var(--p-color-input-border)
    }

    .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--isDisabled_7e21n):hover {
        background-color: var(--p-color-bg-surface-secondary);
        cursor: pointer
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--isDisabled_7e21n):hover {
        background-color: var(--p-color-input-bg-surface-hover)
    }

    .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--isDisabled_7e21n):hover:after {
        border-color: var(--p-color-border-emphasis-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--isDisabled_7e21n):hover:after {
        border-color: var(--p-color-input-border-hover)
    }

    .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--focused_17w4h):after {
        border: var(--p-border-width-025) dashed #0000;
        border-color: var(--p-color-border-strong);
        border-radius: 0.5rem;
        bottom: 0;
        left: 0;
        opacity: 1;
        right: 0;
        top: 0;
        transform: scale(1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--focused_17w4h):not(.Polaris-DropZone--isDisabled_7e21n):not(:hover):after {
        border-color: var(--p-color-input-border)
    }

    .Polaris-DropZone--isDragging_yvz0y:not(.Polaris-DropZone--isDisabled_7e21n) {
        background-color: #fafafa
    }

    .Polaris-DropZone--isDisabled_7e21n {
        cursor: not-allowed
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone--isDisabled_7e21n {
        background-color: var(--p-color-bg-fill-disabled);
        color: var(--p-color-text-disabled)
    }

    .Polaris-DropZone--isDisabled_7e21n:after,html[class~=comp-summer-editons-2023] .Polaris-DropZone--isDisabled_7e21n:after {
        border-color: var(--p-color-border-disabled)
    }

    .Polaris-DropZone--sizeLarge_61dxo {
        min-height: 7.5rem
    }

    .Polaris-DropZone--sizeMedium_5f35p {
        align-items: center;
        min-height: 6.25rem
    }

    .Polaris-DropZone--sizeSmall_7647q {
        align-items: center;
        min-height: 3.125rem;
        padding: 0
    }

    .Polaris-DropZone--measuring_wb2tw {
        min-height: 0;
        visibility: hidden
    }

    .Polaris-DropZone__Container_13mbo {
        flex: 1 1;
        position: relative
    }

    .Polaris-DropZone__Container_13mbo:after {
        bottom: calc(var(--p-border-width-025)*-1 - .0625rem);
        box-shadow: 0 0 0 calc(var(--p-border-width-025)*-1 - .0625rem) var(--p-color-border-focus);
        content: "";
        display: block;
        left: calc(var(--p-border-width-025)*-1 - .0625rem);
        right: calc(var(--p-border-width-025)*-1 - .0625rem);
        top: calc(var(--p-border-width-025)*-1 - .0625rem);
        z-index: 1
    }

    .Polaris-DropZone__Container_13mbo:after,.Polaris-DropZone__Overlay_ib7rj {
        border-radius: 0.5rem;
        pointer-events: none;
        position: absolute
    }

    .Polaris-DropZone__Overlay_ib7rj {
        align-items: center;
        background-color: var(--p-color-bg-interactive-selected);
        border: var(--p-border-width-025) dashed var(--p-color-border-interactive);
        bottom: 0;
        color: var(--p-color-text-emphasis);
        display: flex;
        justify-content: center;
        left: 0;
        padding: var(--p-space-400);
        right: 0;
        text-align: center;
        top: 0;
        z-index: var(--pc-drop-zone-overlay)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone__Overlay_ib7rj {
        background-color: var(--p-color-input-bg-surface-active);
        border: var(--p-border-width-025) solid var(--p-color-input-border-active);
        color: #303030
    }

    .Polaris-DropZone--sizeSmall_7647q .Polaris-DropZone__Overlay_ib7rj {
        padding: 0
    }

    .Polaris-DropZone--hasError_7q9ec>.Polaris-DropZone__Overlay_ib7rj {
        background-color: var(--p-color-bg-surface-critical);
        border-color: var(--p-color-border-critical);
        color: var(--p-color-text-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone--hasError_7q9ec>.Polaris-DropZone__Overlay_ib7rj {
        background-color: var(--p-color-bg-surface-critical);
        border-color: var(--p-color-border-critical-secondary);
        border-style: dashed;
        border-width: var(--p-border-width-0165);
        color: var(--p-color-text-critical)
    }

    .Polaris-DropZone--focused_17w4h:not(.Polaris-DropZone--isDisabled_7e21n) .Polaris-DropZone__Container_13mbo:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-DropZone-FileUpload_1fbjx {
        align-items: center;
        display: flex;
        height: 100%;
        justify-content: center;
        padding: var(--p-space-400);
        text-align: center
    }

    .Polaris-DropZone-FileUpload--large_2qh0r {
        padding: var(--p-space-800)
    }

    .Polaris-DropZone-FileUpload--small_2v637 {
        padding: 0.75rem
    }

    .Polaris-DropZone-FileUpload_1fbjx img {
        vertical-align: bottom
    }

    .Polaris-DropZone-FileUpload__Action_r96cs {
        -webkit-appearance: none;
        appearance: none;
        background: var(--p-color-bg-interactive-subdued);
        border: none;
        border-radius: 0.25rem;
        color: var(--p-color-text-emphasis);
        cursor: pointer;
        display: inline-flex;
        flex: 0 0 auto;
        font-size: var(--p-font-size-75);
        font-weight: var(--p-font-weight-semibold);
        line-height: 1;
        margin: 0;
        padding: 0.25rem 0.5rem;
        position: relative;
        text-align: center;
        text-decoration: none
    }

    .Polaris-DropZone-FileUpload__Action_r96cs:after {
        border-radius: 0.25rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    .Polaris-DropZone-FileUpload__Action_r96cs:hover {
        color: var(--p-color-text-emphasis-active)
    }

    .Polaris-DropZone-FileUpload__Action_r96cs.Polaris-DropZone-FileUpload--disabled_hcuh9 {
        background: var(--p-color-bg-disabled);
        border-color: var(--p-color-border-disabled);
        box-shadow: none;
        color: var(--p-color-text-disabled);
        cursor: not-allowed;
        transition: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone-FileUpload__Action_r96cs.Polaris-DropZone-FileUpload--disabled_hcuh9 {
        box-shadow: unset;
        color: var(--p-color-text-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone-FileUpload__Action_r96cs.Polaris-DropZone-FileUpload--disabled_hcuh9.Polaris-DropZone-FileUpload--disabled_hcuh9 {
        background-color: var(--p-color-bg-fill-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone-FileUpload__Action_r96cs.Polaris-DropZone-FileUpload--disabled_hcuh9 {
        background: #0000
    }

    .Polaris-DropZone-FileUpload__Action_r96cs.Polaris-DropZone-FileUpload--disabled_hcuh9 svg {
        fill: var(--p-color-icon-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone-FileUpload__Action_r96cs {
        background-color: var(--p-color-input-bg-surface);
        border-radius: 0.5rem;
        box-shadow: var(--p-shadow-button-experimental);
        color: #303030;
        padding: var(--p-space-150) 0.75rem
    }

    .Polaris-DropZone-FileUpload__ActionTitle_e3cta {
        color: var(--p-color-text-emphasis);
        text-decoration: none
    }

    .Polaris-DropZone-FileUpload__ActionTitle_e3cta:not(.Polaris-DropZone-FileUpload__ActionTitle--disabled_1fqj9) {
        cursor: pointer
    }

    .Polaris-DropZone-FileUpload__ActionTitle_e3cta:not(.Polaris-DropZone-FileUpload__ActionTitle--disabled_1fqj9):active,.Polaris-DropZone-FileUpload__ActionTitle_e3cta:not(.Polaris-DropZone-FileUpload__ActionTitle--disabled_1fqj9):hover {
        color: var(--p-color-text-emphasis-active);
        text-decoration: underline
    }

    .Polaris-DropZone-FileUpload__ActionTitle--focused_3671t {
        text-decoration: underline
    }

    .Polaris-DropZone-FileUpload__ActionTitle--disabled_1fqj9 {
        color: var(--p-color-text-interactive-disabled)
    }

    .Polaris-DropZone-FileUpload__UploadIcon_17xjj {
        fill: #4a4a4a
    }

    .Polaris-DropZone-FileUpload__UploadIcon_17xjj.Polaris-DropZone-FileUpload--disabled_hcuh9 {
        fill: var(--p-color-icon-disabled)
    }

    .Polaris-Thumbnail_15hj1 {
        --pc-thumbnail-extra-small-size: 1.5rem;
        --pc-thumbnail-small-size: 2.5rem;
        --pc-thumbnail-medium-size: 3.75rem;
        --pc-thumbnail-large-size: 5rem;
        background: var(--p-color-bg-surface);
        border: var(--p-border-width-025) solid var(--p-color-border-secondary);
        border-radius: 0.25rem;
        display: block;
        max-width: 100%;
        min-width: var(--pc-thumbnail-extra-small-size);
        overflow: hidden;
        position: relative
    }

    html[class~=comp-summer-editons-2023] .Polaris-Thumbnail_15hj1 {
        border: none;
        border-radius: 0.5rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Thumbnail_15hj1:after {
        border-radius: 0.5rem;
        bottom: 0;
        box-shadow: var(--p-shadow-border-inset-experimental);
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0
    }

    html[class~=comp-summer-editons-2023] .Polaris-Thumbnail_15hj1.Polaris-Thumbnail--sizeExtraSmall_1twbb,html[class~=comp-summer-editons-2023] .Polaris-Thumbnail_15hj1.Polaris-Thumbnail--sizeExtraSmall_1twbb:after {
        border-radius: var(--p-border-radius-150)
    }

    .Polaris-Thumbnail_15hj1:after,html[class~=comp-summer-editons-2023] .Polaris-Thumbnail_15hj1:before {
        content: "";
        display: block;
        padding-bottom: 100%
    }

    .Polaris-Thumbnail--sizeExtraSmall_1twbb {
        width: var(--pc-thumbnail-extra-small-size)
    }

    .Polaris-Thumbnail--sizeSmall_7647q {
        width: var(--pc-thumbnail-small-size)
    }

    .Polaris-Thumbnail--sizeMedium_5f35p {
        width: var(--pc-thumbnail-medium-size)
    }

    .Polaris-Thumbnail--sizeLarge_61dxo {
        width: var(--pc-thumbnail-large-size)
    }

    .Polaris-Thumbnail--transparent_19sk8 {
        background: #0000
    }

    .Polaris-Thumbnail_15hj1>* {
        bottom: 0;
        color: var(--p-color-icon-secondary);
        left: 0;
        margin: auto;
        max-height: 100%;
        max-width: 100%;
        position: absolute;
        right: 0;
        top: 0
    }

    .Polaris-Thumbnail_15hj1>* svg {
        fill: currentColor
    }

    .Polaris-LegacyTabs_qap71 {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 0
    }

    .Polaris-LegacyTabs--fitted_ijluy {
        flex-wrap: nowrap
    }

    .Polaris-LegacyTabs--fitted_ijluy .Polaris-LegacyTabs__TabContainer_dsj6d {
        flex: 1 1 100%
    }

    .Polaris-LegacyTabs--fitted_ijluy .Polaris-LegacyTabs__Title_2qj8j {
        padding: 0.5rem var(--p-space-400);
        width: 100%
    }

    .Polaris-LegacyTabs--fillSpace_yc42y .Polaris-LegacyTabs__TabContainer_dsj6d {
        flex: 1 1 auto
    }

    .Polaris-LegacyTabs__TabContainer_dsj6d {
        display: flex;
        margin: 0;
        padding: 0
    }

    .Polaris-LegacyTabs__Tab_375k2 {
        -webkit-appearance: none;
        appearance: none;
        background: none;
        border: none;
        color: inherit;
        color: #303030;
        cursor: pointer;
        font-size: inherit;
        justify-content: center;
        line-height: inherit;
        margin: 0;
        margin-bottom: calc(var(--p-space-025)*-1);
        margin-top: var(--p-space-025);
        min-width: 100%;
        outline: none;
        padding: 0;
        padding: 0.5rem 0.25rem;
        position: relative;
        text-align: center;
        text-decoration: none;
        white-space: nowrap;
        width: 100%
    }

    .Polaris-LegacyTabs__Tab_375k2:focus {
        outline: none
    }

    .Polaris-LegacyTabs__Tab_375k2:hover {
        text-decoration: none
    }

    .Polaris-LegacyTabs__Tab_375k2:hover .Polaris-LegacyTabs__Title_2qj8j {
        background-color: initial;
        color: #303030;
        font-weight: var(--p-font-weight-regular)
    }

    .Polaris-LegacyTabs__Tab_375k2:hover .Polaris-LegacyTabs__Title_2qj8j:before {
        background-color: var(--p-color-bg-fill-tertiary-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-LegacyTabs__Tab_375k2:hover .Polaris-LegacyTabs__Title_2qj8j {
        color: #4a4a4a;
        font-weight: var(--p-font-weight-semibold)
    }

    .Polaris-LegacyTabs__Tab_375k2:active .Polaris-LegacyTabs__Title_2qj8j {
        background-color: initial
    }

    .Polaris-LegacyTabs__Tab_375k2:active .Polaris-LegacyTabs__Title_2qj8j:before {
        background: var(--p-color-bg-fill-tertiary-active)
    }

    .Polaris-LegacyTabs__Tab_375k2:focus-visible .Polaris-LegacyTabs__Title_2qj8j {
        color: #303030;
        font-weight: var(--p-font-weight-regular)
    }

    html[class~=comp-summer-editons-2023] .Polaris-LegacyTabs__Tab_375k2:focus-visible .Polaris-LegacyTabs__Title_2qj8j {
        color: #4a4a4a;
        font-weight: var(--p-font-weight-semibold)
    }

    .Polaris-LegacyTabs__Tab_375k2:focus-visible:not(:active) .Polaris-LegacyTabs__Title_2qj8j:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-LegacyTabs__Tab_375k2:visited {
        color: inherit
    }

    .Polaris-LegacyTabs__Tab--selected_11sap {
        color: #303030;
        font-weight: var(--p-font-weight-regular)
    }

    .Polaris-LegacyTabs__Tab--selected_11sap:focus .Polaris-LegacyTabs__Title_2qj8j {
        outline: var(--p-border-width-3) solid #0000
    }

    .Polaris-LegacyTabs__Tab--selected_11sap:focus .Polaris-LegacyTabs__Title_2qj8j:before {
        background: var(--p-color-bg-primary)
    }

    .Polaris-LegacyTabs__Tab--selected_11sap .Polaris-LegacyTabs__Title_2qj8j {
        color: #303030;
        outline: var(--p-border-width-3) solid #0000
    }

    .Polaris-LegacyTabs__Tab--selected_11sap .Polaris-LegacyTabs__Title_2qj8j:before {
        background: var(--p-color-bg-primary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-LegacyTabs__Tab--selected_11sap .Polaris-LegacyTabs__Title_2qj8j {
        color: #4a4a4a
    }

    html[class~=comp-summer-editons-2023] .Polaris-LegacyTabs__Tab--selected_11sap {
        color: #4a4a4a;
        font-weight: var(--p-font-weight-semibold)
    }

    .Polaris-LegacyTabs__Title_2qj8j {
        border-radius: 0.25rem;
        color: var(--p-color-text-secondary);
        display: block;
        min-width: 3.125rem;
        padding: 0.5rem var(--p-space-400);
        position: relative
    }

    .Polaris-LegacyTabs__Title_2qj8j:after {
        border-radius: 0.25rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    .Polaris-LegacyTabs__Title_2qj8j:before {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        bottom: calc(0.5rem*-1);
        content: "";
        height: var(--p-border-width-3);
        left: 0;
        position: absolute;
        right: 0
    }

    html[class~=comp-summer-editons-2023] .Polaris-LegacyTabs__Title_2qj8j {
        color: #4a4a4a;
        font-weight: var(--p-font-weight-semibold);
        padding: var(--p-space-150) 0.75rem
    }

    .Polaris-LegacyTabs--titleWithIcon_11lkm {
        display: flex
    }

    .Polaris-LegacyTabs__Panel_2vct4 {
        display: block
    }

    .Polaris-LegacyTabs__Panel_2vct4:focus {
        outline: none
    }

    .Polaris-LegacyTabs__Panel--hidden_1h4kj {
        display: none
    }

    .Polaris-LegacyTabs__Item_yiyol {
        -webkit-appearance: none;
        appearance: none;
        background: none;
        border: none;
        border-radius: 0.25rem;
        color: inherit;
        cursor: pointer;
        display: block;
        font-size: inherit;
        line-height: inherit;
        margin: 0;
        min-height: 1rem;
        padding: 0;
        padding: .5rem var(--p-space-400);
        position: relative;
        text-align: left;
        text-decoration: none;
        width: 100%
    }

    .Polaris-LegacyTabs__Item_yiyol:focus {
        outline: none
    }

    .Polaris-LegacyTabs__Item_yiyol:after {
        border-radius: 0.25rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    .Polaris-LegacyTabs__Item_yiyol::-moz-focus-inner {
        border: none
    }

    .Polaris-LegacyTabs__Item_yiyol:hover {
        background-color: #fafafa
    }

    .Polaris-LegacyTabs__Item_yiyol:active {
        background-color: var(--p-color-bg-primary-subdued-active)
    }

    .Polaris-LegacyTabs__Item_yiyol:focus-visible:not(:active):after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-LegacyTabs__Item_yiyol:visited {
        color: inherit
    }

    .Polaris-LegacyTabs__DisclosureTab_1qbhg {
        display: none
    }

    .Polaris-LegacyTabs__DisclosureTab--visible_1v5xr {
        display: flex
    }

    .Polaris-LegacyTabs__DisclosureActivator_1mita {
        background-color: initial;
        border: none;
        cursor: pointer;
        height: 100%;
        margin: var(--p-space-025) var(--p-space-025) calc(var(--p-space-025)*-1) 0;
        outline: none;
        position: relative
    }

    .Polaris-LegacyTabs__DisclosureActivator_1mita:after {
        border-radius: 0.25rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    .Polaris-LegacyTabs__DisclosureActivator_1mita:focus svg,.Polaris-LegacyTabs__DisclosureActivator_1mita:hover svg {
        fill: #4a4a4a
    }

    .Polaris-LegacyTabs__DisclosureActivator_1mita:focus-visible .Polaris-LegacyTabs__Title_2qj8j:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-LegacyTabs__DisclosureActivator_1mita:hover .Polaris-LegacyTabs__Title_2qj8j:before {
        background-color: var(--p-color-border-hover)
    }

    .Polaris-LegacyTabs__TabMeasurer_1aget {
        display: flex;
        height: 0;
        visibility: hidden
    }

    .Online-Store-UI-BottomSheet_19bj4 {
        align-items: center;
        bottom: 0;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        left: 0;
        pointer-events: none;
        position: fixed;
        right: 0;
        top: 0;
        z-index: 110
    }

    .Online-Store-UI-BottomSheet_19bj4.Online-Store-UI-BottomSheet--isModal_17o3h {
        pointer-events: all;
        z-index: 120
    }

    .Online-Store-UI-BottomSheet_19bj4.Online-Store-UI-BottomSheet--isModal_17o3h:not(.Online-Store-UI-BottomSheet--expanded_12117) {
        pointer-events: none
    }

    .Online-Store-UI-BottomSheet__BottomSheetInterior_15ja6 {
        height: var(--osui_max-height-bottom-sheet);
        max-width: var(--osui_breakpoint-phablet);
        position: relative;
        width: 100%
    }

    .Online-Store-UI-BottomSheet__BottomSheetInterior_15ja6.Online-Store-UI-BottomSheet--isModal_17o3h {
        z-index: var(--p-z-index-11)
    }

    .Online-Store-UI-BottomSheet--paddingExtraTight_1hvj6 {
        --osui_bottom-sheet-header-padding-horizontal: 0.25rem
    }

    .Online-Store-UI-BottomSheet--paddingTight_1qbjg {
        --osui_bottom-sheet-header-padding-horizontal: 0.5rem
    }

    .Online-Store-UI-BottomSheet--paddingBaseTight_ke9ex {
        --osui_bottom-sheet-header-padding-horizontal: 0.75rem
    }

    .Online-Store-UI-BottomSheet--paddingBase_bpzq1 {
        --osui_bottom-sheet-header-padding-horizontal: var(--p-space-400)
    }

    .Online-Store-UI-BottomSheet--paddingLoose_1wu3p {
        --osui_bottom-sheet-header-padding-horizontal: var(--p-space-500)
    }

    .Online-Store-UI-BottomSheet--paddingExtraLoose_12m2k {
        --osui_bottom-sheet-header-padding-horizontal: var(--p-space-800)
    }

    .Online-Store-UI-Frame__GenericFrame_15o4m,.Online-Store-UI-Frame_m83gz {
        background-color: var(--osui_color-frame-bg)
    }

    .Online-Store-UI-Frame_m83gz {
        display: grid;
        grid-template-areas: "header" "main" "children" "primary-aux-sidebar" "primary-sidebar" "secondary-sidebar" "footer";
        grid-template-columns: 100%;
        grid-template-rows: auto 1fr auto auto;
        height: 100vh;
        max-width: 100%;
        min-width: 0;
        overflow: hidden;
        width: 100vw
    }

    @supports (-webkit-touch-callout:none) {
        .Online-Store-UI-Frame_m83gz {
            height: -webkit-fill-available
        }
    }

    @media (min-width: 41.6875em) {
        .Online-Store-UI-Frame_m83gz {
            grid-template-areas:"header header header header" "primary-aux-sidebar primary-sidebar main secondary-sidebar" "primary-aux-sidebar primary-sidebar children secondary-sidebar" "footer footer footer footer";
            grid-template-columns: minmax(0,auto) minmax(0,auto) 1fr minmax(0,auto)
        }
    }

    .Online-Store-UI-Frame--experimental_18i7e {
        --osui_color-panel-bg: var(--p-color-bg-app)
    }

    .Online-Store-UI-Frame--dragging_rtvxx {
        cursor: grabbing;
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-Frame--slimHeader_1m9qm {
        --osui_height-frame-header: 2.75rem
    }

    .Online-Store-UI-Frame__ChildrenArea_nqzbk {
        grid-area: children;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-DraggableRegion_1g8ny {
        --osui_border-radius-bottomsheet: var(--p-space-400);
        background: var(--p-color-bg-surface);
        bottom: calc(var(--osui_max-height-bottom-sheet)*-1 + var(--osui_height-bottom-sheet-collapsed-drag-handle));
        display: grid;
        grid-template-areas: "header" "children";
        grid-template-columns: 100%;
        grid-template-rows: auto 1fr;
        height: var(--osui_max-height-bottom-sheet);
        pointer-events: all;
        transform: translate3d(0,var(--osui_translate-y-bottom-sheet-draggable-region),0);
        transition: transform .15s ease-out 0s
    }

    .Online-Store-UI-DraggableRegion_1g8ny,.Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--hasBackgroundSheet_1gr68:before {
        border-radius: var(--osui_border-radius-bottomsheet) var(--osui_border-radius-bottomsheet) 0 0;
        box-shadow: var(--osui_box-shadow-bottom-sheet);
        position: absolute;
        width: 100%
    }

    .Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--hasBackgroundSheet_1gr68:before {
        --osui_min-height-bottom-sheet-background-sheet: 1.625rem;
        --osui_height-bottom-sheet-background-sheet-overlap: calc(var(--osui_border-radius-bottomsheet) + var(--p-space-050));
        align-items: center;
        background: var(--p-color-bg-interactive);
        bottom: calc(100% - var(--osui_height-bottom-sheet-background-sheet-overlap));
        color: var(--p-color-bg-surface);
        content: var(--osui_content-bottom-sheet-background-sheet-content);
        display: flex;
        font-size: .6875rem;
        font-weight: 500;
        justify-content: center;
        line-height: var(--p-font-line-height-2);
        min-height: calc(var(--osui_min-height-bottom-sheet-background-sheet) + var(--osui_height-bottom-sheet-background-sheet-overlap));
        padding-bottom: var(--osui_height-bottom-sheet-background-sheet-overlap);
        text-align: center;
        z-index: -1
    }

    .Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--hasBackgroundSheet_1gr68.Online-Store-UI-DraggableRegion--showBackgroundSheet_10639:before {
        transform: translateZ(0);
        transition: transform .15s ease-out 0s
    }

    .Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--hasBackgroundSheet_1gr68:not(.Online-Store-UI-DraggableRegion--showBackgroundSheet_10639):before {
        transform: translate3d(0,100%,0);
        transition: transform .15s ease-out 0s
    }

    .Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--fullCollapse_1ngx0 {
        --osui_height-bottom-sheet-collapsed-drag-handle: 0
    }

    .Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--dragging_1hqeh {
        transition: none
    }

    .Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--expanded_1vpb9 {
        --osui_height-bottom-sheet-collapsed-drag-handle: var( --osui_height-bottom-sheet-header );
        transform: translate3d(0,calc((var(--osui_translate-height-bottom-sheet) - var(--osui_height-bottom-sheet-header))*-1 + var(--osui_translate-y-bottom-sheet-draggable-region)),0)
    }

    .Online-Store-UI-DraggableRegion__DragHandle_vqzym {
        align-items: flex-start;
        background: inherit;
        border-radius: var(--osui_border-radius-bottomsheet) var(--osui_border-radius-bottomsheet) 0 0;
        display: flex;
        grid-area: header;
        height: var(--osui_height-bottom-sheet-header);
        padding-top: var(--p-space-050);
        touch-action: none;
        width: 100%
    }

    .Online-Store-UI-DraggableRegion__DragHandle_vqzym.Online-Store-UI-DraggableRegion--reducedHeightDragHandle_1i6ha {
        --osui_height-bottom-sheet-header: rem(2.75rem)
    }

    .Online-Store-UI-DraggableRegion__Content_fpydn {
        --osui_translate-y-bottom-sheet-draggable-region: initial;
        grid-area: children;
        height: 100%;
        overflow-y: scroll;
        position: relative;
        width: 100%
    }

    .Online-Store-UI-DraggableRegion__ContentInterior_1d275 {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%
    }

    .Online-Store-UI-DraggableRegion--isModal_szc4e.Online-Store-UI-DraggableRegion--exiting_a84te {
        transform: translate3d(0,var(--osui_height-bottom-sheet-header),0)
    }

    .Online-Store-UI-HeaderArea_1viwe {
        grid-area: header;
        position: relative;
        width: 100%;
        z-index: 50
    }

    .Online-Store-UI-Header_7t4pf {
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        height: 100%;
        width: 100%
    }

    .Online-Store-UI-Header__Interior_7q0mc {
        display: grid;
        grid-template-areas: "secondary middle primary";
        grid-template-columns: minmax(6.25rem,1fr) minmax(0,2fr) minmax(6.25rem,1fr);
        height: 100%;
        padding-left: var(--osui_bottom-sheet-header-padding-horizontal);
        padding-right: var(--osui_bottom-sheet-header-padding-horizontal);
        position: relative
    }

    .Online-Store-UI-Header__SecondaryAction_1062b {
        grid-area: secondary
    }

    html[class~=comp-summer-editons-2023] .Online-Store-UI-Header__SecondaryAction_1062b {
        display: grid;
        grid-template-areas: "drag-icon-offset" "secondary-action";
        grid-template-rows: 1.125rem 1fr
    }

    html[class~=comp-summer-editons-2023] .Online-Store-UI-Header__SecondaryAction_1062b button {
        grid-area: secondary-action;
        min-height: 2.75rem;
        min-width: 2.75rem
    }

    .Online-Store-UI-Header__PrimaryAction_bkofz {
        grid-area: primary
    }

    .Online-Store-UI-Header__PrimaryActionGroup_p7s67 {
        display: grid;
        grid-area: primary;
        grid-template-areas: "drag-icon-offset" "primary-action-group";
        grid-template-rows: 1.125rem 1fr
    }

    .Online-Store-UI-Header__PrimaryActionGroupWrapper_st8t8 {
        display: flex;
        grid-area: primary-action-group;
        justify-content: flex-end
    }

    .Online-Store-UI-Header__PrimaryActionGroupWrapper_st8t8 button {
        min-height: 2.75rem;
        min-width: 2.75rem
    }

    .Online-Store-UI-Header__MiddleAction_1w6v0 {
        grid-area: middle
    }

    .Online-Store-UI-Header__MiddleAction_1w6v0 button {
        -webkit-appearance: none;
        appearance: none;
        background: none;
        border: none;
        color: inherit;
        cursor: pointer;
        display: grid;
        font-size: inherit;
        grid-template-areas: "drag-icon" "title";
        grid-template-rows: 1.125rem 1fr;
        height: 100%;
        line-height: inherit;
        margin: 0;
        min-height: 2.75rem;
        padding: 0;
        width: 100%
    }

    .Online-Store-UI-Header__MiddleAction_1w6v0 button:focus {
        outline: none
    }

    .Online-Store-UI-Header__MiddleAction_1w6v0 button:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .Online-Store-UI-Header__DragHandleIcon_q6o6e {
        align-items: center;
        grid-area: drag-icon;
        opacity: .6
    }

    .Online-Store-UI-Header__DragHandleIcon_q6o6e svg {
        fill: var(--p-color-icon-disabled)
    }

    .Online-Store-UI-Header__Title_1q91l {
        align-items: center;
        display: flex;
        flex-direction: column;
        grid-area: title;
        height: 100%;
        justify-content: center;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-Header__SubtitleWrapper_bm56s,.Online-Store-UI-Header__TitleWrapper_2g140 {
        display: grid;
        grid-template-columns: 1fr auto 1fr
    }

    .Online-Store-UI-Header__SubtitlePrefixWrapper_yf2vj,.Online-Store-UI-Header__SubtitleSuffixWrapper_glew3,.Online-Store-UI-Header__TitlePrefixWrapper_17ib2 {
        display: flex;
        justify-content: right
    }

    .Online-Store-UI-Header__TitlePrefixWrapper_17ib2 {
        padding-right: 0.25rem
    }

    .Online-Store-UI-Header__SubtitlePrefixWrapper_yf2vj,.Online-Store-UI-Header__SubtitleSuffixWrapper_glew3 {
        height: 1rem
    }

    .Online-Store-UI-Header__SuffixWrapper_1wqj3 {
        display: flex;
        justify-content: left;
        padding-left: 0.25rem
    }

    .Online-Store-UI-Header__SubtitleWrapper_bm56s {
        margin-top: calc(var(--p-space-050)*-1)
    }

    .Online-Store-UI-Header__Button_1p5g3 {
        background: inherit;
        border: none;
        display: grid;
        grid-template-areas: "." "content";
        grid-template-rows: 1.125rem 1fr;
        height: 100%;
        padding: 0;
        width: 100%
    }

    .Online-Store-UI-Header__Button_1p5g3:disabled,.Online-Store-UI-Header__Button_1p5g3[aria-disabled=true] {
        color: var(--p-color-text-disabled);
        pointer-events: none;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-Header__Button_1p5g3:disabled svg,.Online-Store-UI-Header__Button_1p5g3[aria-disabled=true] svg {
        fill: var(--p-color-text-disabled)
    }

    .Online-Store-UI-Header__Button_1p5g3:hover {
        color: var(--p-color-bg-primary-hover)
    }

    .Online-Store-UI-Header__Button_1p5g3.Online-Store-UI-Header--semibold_166o1 {
        font-weight: var(--p-font-weight-semibold)
    }

    .Online-Store-UI-Header__Button_1p5g3.Online-Store-UI-Header--alignRight_4f2zu {
        justify-content: flex-end;
        text-align: right
    }

    .Online-Store-UI-Header__ButtonContentWrapper_raehh {
        align-items: center;
        display: flex;
        grid-area: content;
        height: 100%;
        max-width: 100%;
        min-width: 0;
        width: 100%
    }

    .Online-Store-UI-Header__ButtonContentWrapper_raehh.Online-Store-UI-Header--hasPrefix_cwbe1 {
        margin-left: calc(0.5rem*-1)
    }

    .Online-Store-UI-Header__ButtonContentWrapper_raehh .Online-Store-UI-Header__Prefix_1n7pn svg {
        fill: #4a4a4a
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Header__ButtonContentWrapper_raehh .Online-Store-UI-Header__Prefix_1n7pn svg {
        fill: #4a4a4a
    }

    .Online-Store-UI-Header__ButtonContentWrapper_raehh .Online-Store-UI-Header__Content_1phrr {
        color: #303030;
        font-size: var(--p-font-size-200);
        line-height: var(--p-font-line-height-2);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Header__ButtonContentWrapper_raehh .Online-Store-UI-Header__Content_1phrr {
        color: #4a4a4a
    }

    .Online-Store-UI-Header__ButtonContentWrapper_raehh .Online-Store-UI-Header__LoadingSpinner_axhxp {
        line-height: 0
    }

    .Online-Store-UI-Header__PrimaryAndMoreActions_15577 {
        display: grid;
        gap: var(--p-space-400);
        grid-area: primary;
        grid-template-columns: 1fr auto
    }

    .Online-Store-UI-FooterArea_5b0fl {
        grid-area: footer;
        height: var(--osui_height-frame-footer);
        position: relative;
        z-index: 70
    }

    :root {
        --osui-align-bottom-sheet-header: flex-start;
        --osui_box-shadow-bottom-sheet: 0 -0.0625rem 0.5rem #0000000f;
        --osui_height-bottom-sheet-header: 4rem;
        --osui_height-bottom-sheet-collapsed-drag-handle: 4rem;
        --osui_translate-y-bottom-sheet-draggable-region: 0
    }

    .Online-Store-UI-DroppableRegion__Droppable_1ickc {
        bottom: 0;
        height: var(--osui_max-droppable-height-bottom-sheet);
        position: absolute;
        width: 100%
    }

    .Online-Store-UI-DroppableRegion__DroppableInterior_9s3qg {
        height: 100%;
        position: relative;
        width: 100%
    }

    .Online-Store-UI-DroppableRegion__DroppableBottom_1lurq,.Online-Store-UI-DroppableRegion__DroppableMid_11xpm,.Online-Store-UI-DroppableRegion__DroppableTop_1whaj {
        left: 0;
        position: absolute;
        right: 0;
        width: 100%
    }

    .Online-Store-UI-DroppableRegion__DroppableBottom_1lurq {
        bottom: 0;
        height: 33.33%
    }

    .Online-Store-UI-DroppableRegion__DroppableMid_11xpm {
        bottom: 33.33%;
        height: 33.33%
    }

    .Online-Store-UI-DroppableRegion__DroppableTop_1whaj {
        bottom: 66.66%;
        height: 33.33%
    }

    .Online-Store-UI-StaticPanel_1hinh {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 20
    }

    .Online-Store-UI-StaticPanel--suspend_1qx89 {
        opacity: 0;
        pointer-events: none;
        visibility: hidden
    }

    .Online-Store-UI-StaticPanel__ChildrenWrapper_1a4a2 {
        background-color: var(--osui_color-frame-surface-bg);
        display: flex;
        flex-direction: column;
        height: 100%
    }

    .Online-Store-UI-Shelf_gw0wa {
        position: relative;
        z-index: 3
    }

    .Online-Store-UI-Layout_bgs4h {
        --osui_sidebar-action-offset: 0.25rem;
        display: flex;
        flex: 0 0 auto;
        flex-direction: column
    }

    .Online-Store-UI-Layout_bgs4h>.Online-Store-UI-Layout_bgs4h.Online-Store-UI-Layout--sticky_hznz0 {
        position: sticky;
        z-index: 5
    }

    .Online-Store-UI-Layout_bgs4h>.Online-Store-UI-Layout_bgs4h.Online-Store-UI-Layout--sticky_hznz0:first-child {
        top: 0
    }

    .Online-Store-UI-Layout_bgs4h>.Online-Store-UI-Layout_bgs4h.Online-Store-UI-Layout--sticky_hznz0:last-child {
        bottom: var(--p-border-width-025);
        margin-top: auto;
        padding-top: 0
    }

    .Online-Store-UI-Layout--spaceBefore_k05b1 {
        padding-top: var(--osui_static-panel-layout-spacing)
    }

    .Online-Store-UI-Layout--spaceAfter_xcq3o {
        padding-bottom: var(--osui_static-panel-layout-spacing)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Layout--sticky_hznz0:first-child:after {
        bottom: 0;
        box-shadow: 0 .125rem .1875rem 0 #3f3f4426;
        content: "";
        height: 100%;
        left: 0;
        opacity: var(--osui-static-panel-shadow-opacity,0);
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
        transition: opacity .25s ease;
        width: 100%
    }

    .Online-Store-UI-Layout--sticky_hznz0:first-child.Online-Store-UI-Layout--isStuck_100s9 {
        border-bottom: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Layout--sticky_hznz0:first-child.Online-Store-UI-Layout--isStuck_100s9 {
        --osui-static-panel-shadow-opacity: 1;
        border-bottom: none
    }

    .Online-Store-UI-Layout--sticky_hznz0:last-child {
        border-top: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Online-Store-UI-Layout--sticky_hznz0 .layout-children-wrapper {
        background-color: var(--p-color-bg-surface)
    }

    .Online-Store-UI-Layout--fullHeight_39bg7 {
        flex: 1 1 auto
    }

    .Online-Store-UI-Layout--scrollable_1w4yi {
        -webkit-overflow-scrolling: touch;
        height: 100%;
        overflow-y: scroll
    }

    @media (max-width: 41.6775em) {
        .Online-Store-UI-Layout--scrollable_1w4yi {
            overflow-x:hidden
        }
    }

    .Online-Store-UI-Layout--layoutSpacingNone_1rwza,.layout-section--spacing-default:first-of-type,.layout-section--spacing-default:only-child,.Online-Store-UI-Layout--sectionSpacingNone_xxlv0 {
        --osui_static-panel-layout-spacing: var(--p-space-0)
    }

    .Online-Store-UI-Layout--layoutSpacingExtraTight_kxosd,.Online-Store-UI-Layout--sectionSpacingExtraTight_orgi1 {
        --osui_static-panel-layout-spacing: 0.25rem
    }

    .Online-Store-UI-Layout--layoutSpacingTight_1ad42,.layout-section--spacing-tight {
        --osui_static-panel-layout-spacing: 0.5rem
    }

    .Online-Store-UI-Layout--layoutSpacingBaseTight_6ztpp,.Online-Store-UI-Layout--sectionSpacingBaseTight_q4ic4 {
        --osui_static-panel-layout-spacing: 0.75rem
    }

    .Online-Store-UI-Layout--layoutSpacingBase_1nu1i,.Online-Store-UI-Layout--layoutSpacingDefault_1sn8h,.Online-Store-UI-Layout--sectionSpacingBase_1hi45 {
        --osui_static-panel-layout-spacing: var(--p-space-400)
    }

    .Online-Store-UI-Layout--layoutSpacingLoose_t5gox,.Online-Store-UI-Layout--sectionSpacingLoose_ibok8 {
        --osui_static-panel-layout-spacing: var(--p-space-500)
    }

    .Online-Store-UI-Layout--layoutSpacingExtraLoose_1ikfo,.Online-Store-UI-Layout--sectionSpacingExtraLoose_142a8 {
        --osui_static-panel-layout-spacing: var(--p-space-800)
    }

    .Online-Store-UI-Layout--dividerBefore_17rcp {
        border-top: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Online-Store-UI-Layout--dividerAfter_ikg4l {
        border-bottom: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Online-Store-UI-Layout--divided_1yadn>.layout-section:before,.Online-Store-UI-Layout--divider_17hxs:before {
        background-color: var(--p-color-border-secondary);
        content: "";
        display: block;
        height: var(--p-border-width-025);
        margin-bottom: var(--osui_static-panel-layout-spacing);
        margin-left: var(--osui_static-panel-section-padding,var(--p-space-400));
        width: 100%;
        width: calc(100% - var(--osui_static-panel-section-padding, var(--p-space-400))*2)
    }

    .Online-Store-UI-Layout--dividerFull_tvp2j:before {
        background-color: var(--p-color-border-secondary);
        content: "";
        display: block;
        height: var(--p-border-width-025);
        margin-bottom: var(--osui_static-panel-layout-spacing);
        width: 100%
    }

    .Online-Store-UI-Layout--divided_1yadn>.Online-Store-UI-Layout--dividerFull_tvp2j:before {
        margin-left: 0;
        width: 100%
    }

    .Online-Store-UI-Layout--alignToBottom_2ppm0:not(.Online-Store-UI-Layout--divider_17hxs):before,.Online-Store-UI-Layout--divided_1yadn.Online-Store-UI-Layout--layoutSpacingNone_1rwza .layout-section--spacing-default:before,.Online-Store-UI-Layout--divided_1yadn.Online-Store-UI-Layout--layoutSpacingNone_1rwza .Online-Store-UI-Layout--sectionSpacingNone_xxlv0:before,.Online-Store-UI-Layout--divided_1yadn>.Online-Store-UI-Layout--dividerHide_90ynz:before,.Online-Store-UI-Layout--divided_1yadn>.layout-section:first-of-type:before,.Online-Store-UI-Layout--divided_1yadn>.layout-section:only-child:before,.Online-Store-UI-Layout--dividerHide_90ynz:before,.Online-Store-UI-Layout--divider_17hxs.Online-Store-UI-Layout--sectionSpacingNone_xxlv0:before,.Online-Store-UI-Layout--divider_17hxs:first-of-type:before,.Online-Store-UI-Layout--divider_17hxs:only-child:before {
        content: none
    }

    .layout-section {
        padding-top: var(--osui_static-panel-layout-spacing);
        position: relative;
        width: 100%;
        z-index: 2
    }

    .layout-section.Online-Store-UI-Layout--sticky_hznz0 {
        position: sticky;
        z-index: 5
    }

    .layout-section.Online-Store-UI-Layout--sticky_hznz0:first-child {
        top: 0
    }

    .layout-section.Online-Store-UI-Layout--sticky_hznz0:last-child {
        border-top: none;
        bottom: var(--p-border-width-025);
        margin-top: auto;
        padding-top: 0
    }

    .layout-section.Online-Store-UI-Layout--sticky_hznz0:last-child:before {
        border-bottom: var(--p-border-width-025) solid var(--p-color-border-secondary);
        content: "";
        display: block;
        height: var(--osui_static-panel-layout-spacing)
    }

    .Online-Store-UI-Layout--alignToActionBar_1hppi {
        padding-top: 0.5rem
    }

    @media (max-width: 100.865em) {
        .Online-Store-UI-Layout--alignToActionBar_1hppi {
            padding-top:0.5rem
        }
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Layout--alignToActionBar_1hppi {
        padding-top: var(--p-space-600)
    }

    @media (max-width: 100.865em) {
        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Layout--alignToActionBar_1hppi {
            padding-top:0.75rem
        }
    }

    .Online-Store-UI-Layout--alignToBottom_2ppm0 {
        --osui_static-panel-layout-spacing: var(--p-space-1600);
        margin-top: auto
    }

    .Online-Store-UI-Layout--alignToBottom_2ppm0:before,.Online-Store-UI-Layout--divided_1yadn>.Online-Store-UI-Layout--alignToBottom_2ppm0:before {
        margin-bottom: var(--p-space-400)
    }

    .layout-children-wrapper {
        padding-left: var(--osui_static-panel-section-padding);
        padding-right: var(--osui_static-panel-section-padding)
    }

    .Online-Store-UI-Layout--paddingNone_1og3e {
        --osui_static-panel-section-padding: var(--p-space-0)
    }

    .layout--padding-extra-tight {
        --osui_static-panel-section-padding: 0.25rem
    }

    .Online-Store-UI-Layout--paddingTight_19c8v {
        --osui_static-panel-section-padding: 0.5rem
    }

    .Online-Store-UI-Layout--paddingBaseTight_1h9h0 {
        --osui_static-panel-section-padding: 0.75rem
    }

    .Online-Store-UI-Layout--paddingBase_vlmqd {
        --osui_static-panel-section-padding: var(--p-space-400)
    }

    .Online-Store-UI-Layout--paddingLoose_hojxa {
        --osui_static-panel-section-padding: var(--p-space-500)
    }

    .Online-Store-UI-Layout--paddingExtraLoose_6zx2p {
        --osui_static-panel-section-padding: var(--p-space-800)
    }

    .Online-Store-UI-Footer_sopbk {
        position: relative
    }

    .Online-Store-UI-Footer__ChildrenWrapper_ic5ip {
        position: relative;
        z-index: 4
    }

    .Online-Store-UI-Footer__ChildrenWrapper_ic5ip:not(:only-child):last-child:before {
        background-color: var(--p-color-border-secondary);
        content: "";
        display: block;
        height: var(--p-border-width-025);
        margin-bottom: var(--osui_static-panel-layout-spacing);
        margin-bottom: 0;
        width: 100%
    }

    .Online-Store-UI-Actions_162ja {
        align-items: center;
        display: flex;
        justify-content: space-between;
        padding: 0.5rem
    }

    .Online-Store-UI-Actions--offsetLeft_1xm4v {
        margin-left: calc(0.5rem*-1)
    }

    .Online-Store-UI-Actions--offsetRight_9e8im {
        margin-right: calc(0.5rem*-1)
    }

    .Online-Store-UI-Actions--offsetBoth_1yx06 {
        margin-left: calc(0.5rem*-1);
        margin-right: calc(0.5rem*-1)
    }

    .Online-Store-UI-Actions__ActionsWrapper_1l8ca,.Online-Store-UI-Actions__ChildrenWrapper_1re3h {
        align-items: center;
        display: flex
    }

    .Online-Store-UI-Actions__ChildrenWrapper_1re3h {
        flex: 0 1 auto;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-Actions__ActionsWrapper_1l8ca {
        flex: 0 0 auto;
        margin-left: auto
    }

    .Online-Store-UI-Actions__ChildrenWrapper_1re3h+.Online-Store-UI-Actions__ActionsWrapper_1l8ca {
        margin-left: var(--p-space-400)
    }

    .Online-Store-UI-Actions__PrimaryActionWrapper_18ycg,.Online-Store-UI-Actions__SecondaryActionsWrapper_16aeo {
        flex: 0 0 auto;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-Actions__SecondaryActionsWrapper_16aeo+.Online-Store-UI-Actions__PrimaryActionWrapper_18ycg {
        margin-left: 0.5rem
    }

    .Online-Store-UI-Info_1w192 {
        color: var(--p-color-text-secondary);
        font-size: calc(var(--p-font-size-75) + .0625rem);
        font-weight: 400;
        line-height: var(--p-font-line-height-2);
        padding: 0.75rem
    }

    @media (min-width: 48em) {
        .Online-Store-UI-Info_1w192 {
            font-size:var(--p-font-size-75);
            line-height: var(--p-font-line-height-1)
        }
    }

    .Online-Store-UI-Info_1w192 a,.Online-Store-UI-Info_1w192 button {
        color: var(--p-color-text-secondary);
        text-decoration: underline;
        transition: color 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    @media (hover: hover) and (pointer:fine) {
        .Online-Store-UI-Info_1w192 a:hover,.Online-Store-UI-Info_1w192 button:hover {
            color:var(--p-color-icon-active)
        }
    }

    .Online-Store-UI-Info_1w192 a:active,.Online-Store-UI-Info_1w192 button:active {
        color: var(--p-color-text-secondary)
    }

    @media (max-width: 41.6775em) {
        .Online-Store-UI-Info_1w192 {
            font-size:.875rem
        }
    }

    .Online-Store-UI-Preview_13jat {
        outline: none
    }

    .Online-Store-UI-ResourceAction__ResourceActionWrapper_1hjnj {
        --osui_resource-action-height: 4rem;
        --osui_resource-action-background-color: var(--p-color-bg-surface);
        max-width: 100%;
        min-width: 0;
        position: relative
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-ResourceAction__ResourceActionWrapper_1hjnj {
        --osui_radius-sidebar-children: var(--osui_radius-sidebar-children-legacy)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-ResourceAction__ResourceActionWrapper_1hjnj.Online-Store-UI-ResourceAction--hasDragHandle_1a72e .Online-Store-UI-ResourceAction__Actions_ibl4f {
        padding-right: calc(0.25rem*.5)
    }

    .Online-Store-UI-ResourceAction--sizeSmall_f9j5s {
        --osui_resource-action-height: 2.75rem
    }

    .Online-Store-UI-ResourceAction--sizeMedium_1q0b8 {
        --osui_resource-action-height: 3.625rem
    }

    .Online-Store-UI-ResourceAction--sizeLarge_14xjc {
        --osui_resource-action-height: 4rem
    }

    .Online-Store-UI-ResourceAction--hasControl_tetrp {
        background-color: var(--p-color-bg-surface);
        padding: 0 0.5rem
    }

    .Online-Store-UI-ResourceAction_ifww0 {
        --osui_width-resource-action-drag-handle: 2.125rem;
        align-items: center;
        background-color: var(--osui_resource-action-background-color);
        display: flex;
        height: var(--osui_resource-action-height);
        position: relative;
        transition-duration: var(--p-motion-duration-200);
        transition-property: color,background-color;
        transition-timing-function: cubic-bezier(0.25,0.1,0.25,1);
        width: 100%;
        z-index: 1
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-ResourceAction_ifww0 {
        --osui_width-resource-action-drag-handle: var( --osui_height-nav-action-legacy )
    }

    .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceSubdued_1iw7h,.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--disabled_1qyec {
        --osui_resource-action-background-color: var(--p-color-bg-disabled);
        background-color: var(--p-color-bg-disabled);
        color: var(--p-color-text-secondary)
    }

    .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk {
        --osui_resource-action-background-color: var(--p-color-bg-interactive-selected)
    }

    .Online-Store-UI-ResourceAction_ifww0:not(.Online-Store-UI-ResourceAction--fillContent_t9sf9) {
        padding-left: 0.75rem;
        padding-right: 0.75rem
    }

    .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--disabled_1qyec:not(.Online-Store-UI-ResourceAction--hasTooltip_6inwp) {
        pointer-events: none;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-ResourceAction--hasSecondaryAction_1ho4v:not(.Online-Store-UI-ResourceAction--hasDragHandle_1a72e) .Online-Store-UI-ResourceAction_ifww0 {
        padding-right: calc(0.25rem + 2rem + (2rem - 1.25rem)*.5)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-ResourceAction--hasSecondaryAction_1ho4v:not(.Online-Store-UI-ResourceAction--hasDragHandle_1a72e) .Online-Store-UI-ResourceAction_ifww0 {
        padding-right: calc(0.25rem + 2.75rem)
    }

    .Online-Store-UI-ResourceAction--hasDragHandle_1a72e:not(.Online-Store-UI-ResourceAction--hasSecondaryAction_1ho4v) .Online-Store-UI-ResourceAction_ifww0 {
        padding-right: calc(0.25rem + var(--osui_width-resource-action-drag-handle))
    }

    .Online-Store-UI-ResourceAction--hasSecondaryAction_1ho4v.Online-Store-UI-ResourceAction--hasDragHandle_1a72e .Online-Store-UI-ResourceAction_ifww0 {
        padding-right: calc(0.25rem + 2rem + var(--osui_width-resource-action-drag-handle))
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-ResourceAction--hasSecondaryAction_1ho4v.Online-Store-UI-ResourceAction--hasDragHandle_1a72e .Online-Store-UI-ResourceAction_ifww0 {
        padding-right: calc(0.25rem + 2.25rem + var(--osui_width-resource-action-drag-handle))
    }

    .Online-Store-UI-ResourceAction--hasControl_tetrp .Online-Store-UI-ResourceAction_ifww0 {
        border-radius: var(--osui_radius-sidebar-children)
    }

    .Online-Store-UI-ResourceAction--hasControl_tetrp .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--active_v9ajm {
        --osui_resource-action-background-color: var( --p-color-bg-interactive-selected )
    }

    .Online-Store-UI-ResourceAction--hasControl_tetrp .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--active_v9ajm:before {
        background-color: var(--p-color-bg-interactive);
        border-bottom-right-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        content: "";
        display: block;
        height: 100%;
        left: calc(0.5rem*-1);
        position: absolute;
        top: 0;
        width: var(--p-border-width-3)
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-ResourceAction--hasControl_tetrp .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--disabled_1qyec .Online-Store-UI-ResourceAction__Content_4y3bf {
            color: grayText
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .Online-Store-UI-ResourceAction--hasControl_tetrp .Online-Store-UI-ResourceAction_ifww0:hover {
            --osui_resource-action-background-color:#fafafa
        }

        .Online-Store-UI-ResourceAction--hasControl_tetrp .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--active_v9ajm:hover {
            --osui_resource-action-background-color: var( --p-color-bg-interactive-subdued-hover )
        }
    }

    a.Online-Store-UI-ResourceAction_ifww0 {
        color: inherit;
        text-decoration: none
    }

    a.Online-Store-UI-ResourceAction_ifww0:visited {
        color: inherit
    }

    button.Online-Store-UI-ResourceAction_ifww0 {
        -webkit-appearance: none;
        appearance: none;
        background: none;
        background-color: var(--osui_resource-action-background-color);
        border: none;
        color: inherit;
        cursor: pointer;
        font-size: inherit;
        line-height: inherit;
        margin: 0;
        padding: 0;
        text-align: left
    }

    button.Online-Store-UI-ResourceAction_ifww0:focus {
        outline: none
    }

    a.Online-Store-UI-ResourceAction_ifww0,button.Online-Store-UI-ResourceAction_ifww0,label.Online-Store-UI-ResourceAction_ifww0 {
        outline: none;
        position: relative
    }

    a.Online-Store-UI-ResourceAction_ifww0:after,button.Online-Store-UI-ResourceAction_ifww0:after,label.Online-Store-UI-ResourceAction_ifww0:after {
        border-radius: calc(0.5rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    a.Online-Store-UI-ResourceAction_ifww0:focus:after,button.Online-Store-UI-ResourceAction_ifww0:focus:after,label.Online-Store-UI-ResourceAction_ifww0:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    a.Online-Store-UI-ResourceAction_ifww0:focus:not(:focus-visible):after,button.Online-Store-UI-ResourceAction_ifww0:focus:not(:focus-visible):after,label.Online-Store-UI-ResourceAction_ifww0:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        a.Online-Store-UI-ResourceAction_ifww0:focus:not(:focus-visible):after,button.Online-Store-UI-ResourceAction_ifww0:focus:not(:focus-visible):after,label.Online-Store-UI-ResourceAction_ifww0:focus:not(:focus-visible):after {
            outline: none
        }
    }

    a.Online-Store-UI-ResourceAction_ifww0:focus-visible:after,button.Online-Store-UI-ResourceAction_ifww0:focus-visible:after,label.Online-Store-UI-ResourceAction_ifww0:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    a.Online-Store-UI-ResourceAction_ifww0:after,button.Online-Store-UI-ResourceAction_ifww0:after,label.Online-Store-UI-ResourceAction_ifww0:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    html:not([class~=comp-summer-editons-2023]) a.Online-Store-UI-ResourceAction_ifww0:after,html:not([class~=comp-summer-editons-2023]) button.Online-Store-UI-ResourceAction_ifww0:after,html:not([class~=comp-summer-editons-2023]) label.Online-Store-UI-ResourceAction_ifww0:after {
        border-radius: var(--p-border-radius-050)
    }

    a.Online-Store-UI-ResourceAction_ifww0:focus-visible,button.Online-Store-UI-ResourceAction_ifww0:focus-visible,label.Online-Store-UI-ResourceAction_ifww0:focus-visible {
        --osui_resource-action-background-color: #fafafa
    }

    @media (hover: hover) and (pointer:fine) {
        a.Online-Store-UI-ResourceAction_ifww0:hover,button.Online-Store-UI-ResourceAction_ifww0:hover,label.Online-Store-UI-ResourceAction_ifww0:hover {
            --osui_resource-action-background-color:#fafafa
        }
    }

    a.Online-Store-UI-ResourceAction_ifww0:active,button.Online-Store-UI-ResourceAction_ifww0:active,label.Online-Store-UI-ResourceAction_ifww0:active {
        --osui_resource-action-background-color: var(--p-color-bg-active)
    }

    a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk:focus-visible,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk:focus-visible {
        --osui_resource-action-background-color: var(--p-color-text-on-color)
    }

    @media (hover: hover) and (pointer:fine) {
        a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk:hover,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk:hover {
            --osui_resource-action-background-color:var(--p-color-text-on-color)
        }
    }

    a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk:active,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk:active {
        --osui_resource-action-background-color: var(--p-color-bg-interactive-selected)
    }

    a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw {
        color: var(--p-color-text-emphasis)
    }

    a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw:focus-visible,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw:focus-visible {
        --osui_resource-action-background-color: var(--p-color-bg-interactive-selected)
    }

    @media (hover: hover) and (pointer:fine) {
        a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw:hover,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw:hover {
            --osui_resource-action-background-color:var(--p-color-bg-interactive-selected)
        }
    }

    a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw:active,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw:active {
        --osui_resource-action-background-color: var(--p-color-text-on-color)
    }

    label.Online-Store-UI-ResourceAction_ifww0 {
        cursor: pointer
    }

    label.Online-Store-UI-ResourceAction_ifww0:not(.Online-Store-UI-ResourceAction--disabled_1qyec):focus-within:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .Online-Store-UI-ResourceAction__Content_4y3bf,.Online-Store-UI-ResourceAction__Prefix_eebz0,.Online-Store-UI-ResourceAction__Suffix_eec37 {
        align-content: center;
        align-items: center;
        display: flex;
        height: var(--osui_resource-action-height);
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-ResourceAction__Prefix_eebz0,.Online-Store-UI-ResourceAction__Suffix_eec37 {
        flex: 0 0 auto;
        justify-content: center
    }

    .Online-Store-UI-ResourceAction__Prefix_eebz0>*,.Online-Store-UI-ResourceAction__Suffix_eec37>* {
        flex: 1 1 auto;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-ResourceAction__Prefix_eebz0 svg,.Online-Store-UI-ResourceAction__Suffix_eec37 svg {
        transition: fill var(--p-motion-duration-200) cubic-bezier(0.25,0.1,0.25,1)
    }

    .Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk .Online-Store-UI-ResourceAction__Prefix_eebz0 svg,.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk .Online-Store-UI-ResourceAction__Suffix_eec37 svg {
        fill: var(--p-color-icon-emphasis);
        color: var(--p-color-icon-on-color)
    }

    .Online-Store-UI-ResourceAction--appearanceSubdued_1iw7h .Online-Store-UI-ResourceAction__Prefix_eebz0 svg,.Online-Store-UI-ResourceAction--appearanceSubdued_1iw7h .Online-Store-UI-ResourceAction__Suffix_eec37 svg,.Online-Store-UI-ResourceAction--disabled_1qyec .Online-Store-UI-ResourceAction__Prefix_eebz0 svg,.Online-Store-UI-ResourceAction--disabled_1qyec .Online-Store-UI-ResourceAction__Suffix_eec37 svg {
        fill: var(--p-color-icon-secondary)
    }

    .Online-Store-UI-ResourceAction__Prefix_eebz0 {
        width: 2.5rem
    }

    .Online-Store-UI-ResourceAction__Suffix_eec37 {
        margin-left: 0.5rem
    }

    .Online-Store-UI-ResourceAction__Suffix_eec37 .Online-Store-UI-ResourceAction__TooltipSuffixIcon_btb8a:not(:only-child) {
        margin-left: 0.25rem
    }

    .Online-Store-UI-ResourceAction__ExternalIcon_1b21n {
        display: flex;
        margin-left: 0.25rem
    }

    .Online-Store-UI-ResourceAction__ExternalIcon_1b21n svg {
        fill: #4a4a4a
    }

    .Online-Store-UI-ResourceAction__TitleBadgeWrapper_uzs8r .Online-Store-UI-ResourceAction--emphasis_1tbw7+.Online-Store-UI-ResourceAction__ExternalIcon_1b21n {
        margin-left: 0.75rem
    }

    .Online-Store-UI-ResourceAction__Content_4y3bf {
        flex: 1 1 auto;
        flex-wrap: wrap
    }

    .Online-Store-UI-ResourceAction__Prefix_eebz0+.Online-Store-UI-ResourceAction__Content_4y3bf {
        margin-left: 0.75rem
    }

    .Online-Store-UI-ResourceAction__Overline_1izli,.Online-Store-UI-ResourceAction__Subtitle_1hxah,.Online-Store-UI-ResourceAction__TitleBadgeWrapper_uzs8r {
        flex: 1 1 100%;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-ResourceAction__TitleBadgeWrapper_uzs8r {
        align-items: center;
        display: flex
    }

    .Online-Store-UI-ResourceAction__Title_1eggg {
        flex: 0 1 auto;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-ResourceAction__Title_1eggg.Online-Store-UI-ResourceAction--emphasis_1tbw7 {
        max-width: calc(100% - var(--p-font-size-100)*.5 - .03125rem)
    }

    .Online-Store-UI-ResourceAction--truncate_1fxol {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .Online-Store-UI-ResourceAction--strongTitle_1lzeu {
        font-weight: 700
    }

    .Online-Store-UI-ResourceAction__BadgeWrapper_lyaqe {
        flex: 0 0 auto;
        height: 0;
        margin-top: calc(var(--p-border-width-050)*2*-1 - 1.125rem)
    }

    .Online-Store-UI-ResourceAction__Title_1eggg+.Online-Store-UI-ResourceAction__BadgeWrapper_lyaqe {
        margin-left: 0.5rem
    }

    .Online-Store-UI-ResourceAction__Overline_1izli {
        color: var(--p-color-text-secondary);
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .Online-Store-UI-ResourceAction__Subtitle_1hxah.Online-Store-UI-ResourceAction--string_wpxur {
        color: var(--p-color-text-secondary);
        font-size: calc(var(--p-font-size-75) + .0625rem);
        font-weight: 400;
        line-height: var(--p-font-line-height-2);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    @media (min-width: 48em) {
        .Online-Store-UI-ResourceAction__Subtitle_1hxah.Online-Store-UI-ResourceAction--string_wpxur {
            font-size:var(--p-font-size-75);
            line-height: var(--p-font-line-height-1)
        }
    }

    .Online-Store-UI-ResourceAction__Actions_ibl4f {
        display: flex;
        margin-top: calc((2rem)*-1*.5);
        min-height: 2rem;
        padding-right: calc((2rem - 1.25rem)*.5);
        position: absolute;
        right: 0;
        top: 50%;
        z-index: 2
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-ResourceAction__Actions_ibl4f {
        margin-top: -1.125rem;
        min-height: 2.25rem;
        padding-right: .5rem
    }

    .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7,.Online-Store-UI-ResourceAction__SecondaryAction_dfu80 {
        flex: 0 0 auto
    }

    .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7 {
        margin-bottom: calc((var(--osui_resource-action-height) - 2rem + 0.25rem)/2*-1);
        margin-left: calc(0.25rem*.5*-1);
        margin-top: calc((var(--osui_resource-action-height) - 2rem + 0.25rem)/2*-1)
    }

    @media (hover: hover) and (pointer:fine) {
        .Online-Store-UI-ResourceAction_ifww0:hover+.Online-Store-UI-ResourceAction__Actions_ibl4f .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7 svg {
            fill:var(--p-color-icon-active)
        }
    }

    .Online-Store-UI-ResourceAction_ifww0:active+.Online-Store-UI-ResourceAction__Actions_ibl4f .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7 {
        outline: var(--osui_high-contrast-outline)
    }

    .Online-Store-UI-ResourceAction_ifww0:active+.Online-Store-UI-ResourceAction__Actions_ibl4f .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7 svg {
        fill: #303030
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-ResourceAction_ifww0:active+.Online-Store-UI-ResourceAction__Actions_ibl4f .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7 svg {
            fill: #4a4a4a
        }
    }

    .Online-Store-UI-ResourceAction_ifww0:active+.Online-Store-UI-ResourceAction__Actions_ibl4f .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7 button {
        animation: var(--osui_animation-name-drag-handle-pulse) calc(var(--p-motion-duration-400)*2) var(--p-motion-duration-500) ease-in-out alternate infinite
    }

    .Online-Store-UI-Control_12au0 {
        border: 0!important;
        clip-path: inset(50%)!important;
        height: .0625rem!important;
        height: 100%!important;
        left: 0;
        margin: 0!important;
        margin: 0;
        opacity: 0;
        overflow: hidden!important;
        overflow: visible;
        padding: 0!important;
        position: absolute!important;
        white-space: nowrap!important;
        width: .0625rem!important;
        width: 100%!important
    }

    .Online-Store-UI-ControlSpinner_110z4 {
        background-color: var(--p-color-bg-interactive-selected);
        border-radius: 50%;
        margin-top: calc(0.25rem*2*.5*-1 - .625rem);
        padding: 0.25rem;
        pointer-events: none;
        position: absolute;
        right: calc(0.5rem*.5 + 0.75rem - 0.25rem);
        top: 50%;
        transition: opacity var(--p-motion-duration-200) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 3
    }

    .Online-Store-UI-ControlSpinner_110z4,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--appearActive_jbd39,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--appearDone_gelgl,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--appear_16bt9,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--exitDone_15mp5 {
        display: none
    }

    .Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--enterActive_uptf8,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--enterDone_o6c7d,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--enter_vf2sy,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--exitActive_1a4mu,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--exit_18095 {
        display: block
    }

    .Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--enterActive_uptf8,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--enterDone_o6c7d,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--exit_18095 {
        opacity: 1
    }

    .Online-Store-UI-ControlSpinner_110z4,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--enter_vf2sy,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--exitActive_1a4mu,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--exitDone_15mp5 {
        opacity: 0
    }

    .Online-Store-UI-ControlSpinner__LoadingIndicator_1lfv1 {
        height: 1.25rem;
        width: 1.25rem
    }

    .Online-Store-UI-NestedTooltip_f30w7 span[tabindex] {
        bottom: 0;
        left: 0;
        margin: auto;
        opacity: 0;
        outline: none;
        position: absolute;
        right: 0;
        top: 0
    }

    .Online-Store-UI-NestedTooltip_f30w7 span[tabindex]:focus {
        opacity: 1
    }

    .Online-Store-UI-NestedTooltip__FocusRing_9bw08 {
        height: 100%;
        pointer-events: none;
        position: relative;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none;
        width: 100%
    }

    .Online-Store-UI-NestedTooltip__FocusRing_9bw08:after {
        border-radius: calc(0.25rem + .0625rem);
        bottom: calc(var(--p-border-width-025)*-1 - .0625rem);
        box-shadow: 0 0 0 calc(var(--p-border-width-025)*-1 - .0625rem) var(--p-color-border-focus);
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: calc(var(--p-border-width-025)*-1 - .0625rem);
        outline: var(--osui_high-contrast-outline);
        pointer-events: none;
        position: absolute;
        right: calc(var(--p-border-width-025)*-1 - .0625rem);
        top: calc(var(--p-border-width-025)*-1 - .0625rem);
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    .Online-Store-UI-NestedTooltip--inset_usr7b:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-NestedTooltip--inset_usr7b:after {
        border-radius: var(--p-border-radius-050)
    }

    .Polaris-Truncate_4qxoo {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .Online-Store-UI-EmphasisMarker_1e37r {
        display: flex;
        max-width: 100%
    }

    .Online-Store-UI-EmphasisMarker_1e37r>* {
        flex: 0 0 auto;
        max-width: 100%;
        min-width: 0
    }

    .store-ul-resource-thumbnail {
        align-items: center;
        display: inline-flex;
        justify-content: center;
        vertical-align: middle
    }

    .store-ul-resource-thumbnail:not(.Online-Store-UI-ResourceThumbnail--typeImage_1if91) {
        position: relative
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr {
        background-color: var(--p-color-bg-surface-secondary);
        border-radius: var(--p-border-radius-100,calc(var(--p-border-radius-050) + .0625rem))
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr:before {
        border: var(--p-border-width-025) solid var(--p-color-border-secondary);
        border-radius: var(--p-border-radius-100,calc(var(--p-border-radius-050) + .0625rem));
        bottom: 0;
        content: "";
        display: block;
        left: 0;
        margin: auto;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr.Online-Store-UI-ResourceThumbnail--whiteBackground_1q9q1 {
        background-color: var(--p-color-bg-surface)
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr.Online-Store-UI-ResourceThumbnail--highlight_llir4 {
        background-color: var(--p-color-bg-surface-info)
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr.Online-Store-UI-ResourceThumbnail--highlight_llir4:before {
        border: var(--p-border-width-025) solid var(--p-color-border-info-subdued)
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr.Online-Store-UI-ResourceThumbnail--typeImage_1if91 {
        border: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr.Online-Store-UI-ResourceThumbnail--typeImage_1if91:before {
        border: none
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr.store-ul-resource-thumbnail--type-icon,.Online-Store-UI-ResourceThumbnail--framed_1y5vr.Online-Store-UI-ResourceThumbnail--typeThumbshot_632ua {
        height: var(--osui_size-resource-thumbnail);
        width: var(--osui_size-resource-thumbnail)
    }

    .Online-Store-UI-ResourceThumbnail--typeImage_1if91.Online-Store-UI-ResourceThumbnail--subdued_16k9b,.Online-Store-UI-ResourceThumbnail--typeThumbshot_632ua.Online-Store-UI-ResourceThumbnail--subdued_16k9b {
        background-color: var(--p-color-bg-disabled);
        opacity: .5
    }

    .Online-Store-UI-ResourceThumbnail__EditButton_1j3sk {
        bottom: 0.5rem;
        position: absolute;
        right: 0.5rem;
        z-index: 20
    }

    .Online-Store-UI-ThumbnailsGrid_16q4t {
        flex: 0 0 auto;
        height: 2.5rem;
        width: 2.5rem
    }

    .Online-Store-UI-ThumbnailsGrid--sizeTiny_mwakf.Online-Store-UI-ThumbnailsGrid--noPadding_p86q0 {
        height: 1rem;
        width: 1rem
    }

    .Online-Store-UI-ThumbnailsGrid--sizeTiny_mwakf:not(.Online-Store-UI-ThumbnailsGrid--noPadding_p86q0) {
        padding: .75rem
    }

    .Online-Store-UI-ThumbnailsGrid--sizeSmall_f7cuv.Online-Store-UI-ThumbnailsGrid--noPadding_p86q0 {
        height: 1.25rem;
        width: 1.25rem
    }

    .Online-Store-UI-ThumbnailsGrid--sizeSmall_f7cuv:not(.Online-Store-UI-ThumbnailsGrid--noPadding_p86q0) {
        padding: .625rem
    }

    .Online-Store-UI-ThumbnailsGrid--sizeMedium_19pwx.Online-Store-UI-ThumbnailsGrid--noPadding_p86q0 {
        height: 2rem;
        width: 2rem
    }

    .Online-Store-UI-ThumbnailsGrid--sizeMedium_19pwx:not(.Online-Store-UI-ThumbnailsGrid--noPadding_p86q0) {
        padding: .25rem
    }

    .Online-Store-UI-ThumbnailsGrid__List_wcx9v {
        grid-gap: calc(0.25rem*.5);
        border-radius: calc(var(--p-border-radius-050) + .0625rem);
        display: grid;
        height: 100%;
        list-style: none;
        margin: 0;
        overflow: hidden;
        padding: 0
    }

    .Online-Store-UI-ThumbnailsGrid--sizeTiny_mwakf .Online-Store-UI-ThumbnailsGrid__List_wcx9v {
        grid-template-columns: repeat(auto-fit,minmax(calc(.5rem - 0.25rem*.5),1fr))
    }

    .Online-Store-UI-ThumbnailsGrid--sizeSmall_f7cuv .Online-Store-UI-ThumbnailsGrid__List_wcx9v {
        grid-template-columns: repeat(auto-fit,minmax(calc(.625rem - 0.25rem*.5),1fr))
    }

    .Online-Store-UI-ThumbnailsGrid--sizeMedium_19pwx .Online-Store-UI-ThumbnailsGrid__List_wcx9v {
        grid-template-columns: repeat(auto-fit,minmax(calc(1rem - 0.25rem*.5),1fr))
    }

    .Online-Store-UI-ThumbnailsGrid--sizeFull_l01vx .Online-Store-UI-ThumbnailsGrid__List_wcx9v {
        grid-template-columns: repeat(auto-fit,minmax(calc(1.25rem - 0.25rem*.5),1fr))
    }

    .Online-Store-UI-ThumbnailsGrid__Item_wdek4 {
        background-color: var(--osui_color-frame-bg);
        height: auto
    }

    .Online-Store-UI-ThumbnailsGrid__Item_wdek4:nth-child(odd):last-child {
        grid-column: 1/span 2
    }

    .Online-Store-UI-ThumbnailsGrid--sizeTiny_mwakf .Online-Store-UI-ThumbnailsGrid__Item_wdek4 {
        min-height: calc(.5rem - 0.25rem*.5)
    }

    .Online-Store-UI-ThumbnailsGrid--sizeSmall_f7cuv .Online-Store-UI-ThumbnailsGrid__Item_wdek4 {
        min-height: calc(.625rem - 0.25rem*.5)
    }

    .Online-Store-UI-ThumbnailsGrid--sizeMedium_19pwx .Online-Store-UI-ThumbnailsGrid__Item_wdek4 {
        min-height: calc(1rem - 0.25rem*.5)
    }

    .Online-Store-UI-ThumbnailsGrid--sizeFull_l01vx .Online-Store-UI-ThumbnailsGrid__Item_wdek4 {
        min-height: calc(1.25rem - 0.25rem*.5)
    }

    .Online-Store-UI-ThumbnailsGrid__Image_2nw03 {
        height: 100%;
        object-fit: cover;
        width: 100%
    }

    .Online-Store-UI-StackedActions_15gm2 {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .Online-Store-UI-StackedActions__Item_1c2eb+.Online-Store-UI-StackedActions__Item_1c2eb {
        border-top: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a,.Online-Store-UI-StackedActions__Item_1c2eb button {
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        --p-border-radius-100: 0;
        font-weight: 400;
        outline: none;
        padding-bottom: 0.75rem;
        padding-top: 0.75rem;
        position: relative
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:after,.Online-Store-UI-StackedActions__Item_1c2eb button:after {
        border-radius: calc(0.5rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:focus:after,.Online-Store-UI-StackedActions__Item_1c2eb button:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:focus:not(:focus-visible):after,.Online-Store-UI-StackedActions__Item_1c2eb button:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-StackedActions__Item_1c2eb a:focus:not(:focus-visible):after,.Online-Store-UI-StackedActions__Item_1c2eb button:focus:not(:focus-visible):after {
            outline: none
        }
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible:after,.Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:after,.Online-Store-UI-StackedActions__Item_1c2eb button:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a svg,.Online-Store-UI-StackedActions__Item_1c2eb button svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible,.Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible {
        background-color: #0000000f;
        color: #4a4a4a
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible svg,.Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible svg,.Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .Online-Store-UI-StackedActions__Item_1c2eb a:hover,.Online-Store-UI-StackedActions__Item_1c2eb button:hover {
            background-color:#0000000f;
            color: #4a4a4a
        }

        .Online-Store-UI-StackedActions__Item_1c2eb a:hover svg,.Online-Store-UI-StackedActions__Item_1c2eb button:hover svg {
            fill: #4a4a4a
        }
    }

    @media (hover: hover) and (pointer:fine) and (-ms-high-contrast:active) {
        .Online-Store-UI-StackedActions__Item_1c2eb a:hover svg,.Online-Store-UI-StackedActions__Item_1c2eb button:hover svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:active,.Online-Store-UI-StackedActions__Item_1c2eb button:active {
        background-color: #f3f3f3;
        color: #4a4a4a
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:active svg,.Online-Store-UI-StackedActions__Item_1c2eb button:active svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-StackedActions__Item_1c2eb a:active svg,.Online-Store-UI-StackedActions__Item_1c2eb button:active svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button {
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        outline: none;
        position: relative
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:after,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:after {
        border-radius: calc(0.25rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:focus:after,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:focus:not(:focus-visible):after,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:focus:not(:focus-visible):after,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:focus:not(:focus-visible):after {
            outline: none
        }
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible:after,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:after,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a svg,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible {
        background-color: var(--osui_color-plain-button-bg);
        color: #303030
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible svg,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible svg {
        fill: #303030
    }

    @media (hover: hover) and (pointer:fine) {
        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:hover,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:hover {
            background-color:var(--osui_color-plain-button-bg);
            color: #303030
        }

        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:hover svg,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:hover svg {
            fill: #303030
        }
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:active,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:active {
        background-color: var(--osui_color-plain-button-bg-active)
    }

    @media (hover: hover) and (pointer:fine) {
        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:active:hover,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:active:hover {
            background-color:var(--p-color-bg-fill-transparent-hover)
        }
    }

    .Online-Store-UI-StackedActions--dividerBefore_1t5ew {
        border-top: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Online-Store-UI-StackedActions--alignToNav_p1xyg {
        padding-left: var(--p-space-400)
    }

    .Online-Store-UI-OverlayAction_1em9m {
        background-color: var(--p-color-bg-surface);
        padding: .125rem;
        position: absolute;
        transform: translateX(-.125rem);
        transition: opacity var(--p-motion-duration-200) cubic-bezier(0.25,0.1,0.25,1);
        width: var(--osui_overlay-action-width,auto)
    }

    .Online-Store-UI-OverlayAction_1em9m,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--appearActive_101x3,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--appearDone_1demv,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--appear_axt05,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--exitDone_1qlg5 {
        display: none
    }

    .Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--enterActive_1n7l0,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--enterDone_5ss7k,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--enter_6sb8t,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--exitActive_1nww7,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--exit_19egb {
        display: block
    }

    .Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--enterActive_1n7l0,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--enterDone_5ss7k,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--exit_19egb {
        opacity: 1
    }

    .Online-Store-UI-OverlayAction_1em9m,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--enter_6sb8t,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--exitActive_1nww7,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--exitDone_1qlg5 {
        opacity: 0
    }

    .Online-Store-UI-OverlayAction_1em9m>button {
        vertical-align: middle
    }

    .Online-Store-UI-OverlayAction--alignRight_1k4xo {
        transform: translateX(.125rem)
    }

    @media (min-width: 41.6875em) {
        .Online-Store-UI-Sidebar_bciv9 {
            grid-area:primary-sidebar;
            overflow: hidden;
            position: relative;
            z-index: 10
        }

        .Online-Store-UI-Sidebar_bciv9:not(.Online-Store-UI-Sidebar--secondary_1hh8x) {
            border-right: var(--p-border-width-025) solid var(--p-color-border-secondary)
        }

        .Online-Store-UI-Sidebar--secondary_1hh8x {
            border-left: var(--p-border-width-025) solid var(--p-color-border-secondary);
            grid-area: secondary-sidebar
        }

        .Online-Store-UI-Sidebar--aux_1hwst {
            grid-area: primary-aux-sidebar
        }
    }

    .Online-Store-UI-Sidebar--hide_3b74g {
        display: none
    }

    .Online-Store-UI-Header_adt0d {
        --osui_static-panel-header-padding-y: 0;
        padding-bottom: var(--osui_static-panel-header-padding-y);
        padding-top: var(--osui_static-panel-header-padding-y)
    }

    .Online-Store-UI-Header--sticky_iljqj {
        --osui_static-panel-header-padding-y: var(--p-space-400)
    }

    .Online-Store-UI-Header--sticky_iljqj.Online-Store-UI-Header--hasBack_c4trp,.Online-Store-UI-Header--sticky_iljqj.Online-Store-UI-Header--hasClose_184dz {
        --osui_static-panel-header-padding-y: 0.5rem
    }

    .Online-Store-UI-Header--alignToActionBar_14o5h {
        padding-bottom: calc(0.75rem + var(--p-space-050));
        padding-top: calc(0.75rem + var(--p-space-050))
    }

    .Online-Store-UI-Header--alignToActionBar_14o5h.Online-Store-UI-Header--hasBack_c4trp {
        padding-bottom: 0.75rem;
        padding-top: 0.75rem
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Header--alignToActionBar_14o5h {
        padding-bottom: 0.75rem;
        padding-top: var(--p-space-600)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Header--alignToActionBar_14o5h.Online-Store-UI-Header--hasBack_c4trp {
        padding-bottom: 0.5rem;
        padding-top: var(--p-space-500)
    }

    .Online-Store-UI-Header__HeaderContentWrapper_eg1sw {
        align-items: center;
        display: grid;
        grid-template-columns: 1fr
    }

    .Online-Store-UI-Header--hasBack_c4trp:not(.Online-Store-UI-Header--hasActions_dx7al) .Online-Store-UI-Header__HeaderContentWrapper_eg1sw {
        grid-template-columns: auto 1fr
    }

    .Online-Store-UI-Header--hasActions_dx7al:not(.Online-Store-UI-Header--hasBack_c4trp) .Online-Store-UI-Header__HeaderContentWrapper_eg1sw {
        grid-template-columns: 1fr auto
    }

    .Online-Store-UI-Header--hasActions_dx7al .Online-Store-UI-Header__HeaderContentWrapper_eg1sw {
        grid-template-columns: auto 1fr auto
    }

    .Online-Store-UI-Header--hasClose_184dz .Online-Store-UI-Header__HeaderContentWrapper_eg1sw {
        grid-template-columns: 1fr auto
    }

    .Online-Store-UI-Header__TitleWrapper_c11qw {
        align-items: center;
        display: flex;
        gap: 0.5rem;
        min-width: 0
    }

    .Online-Store-UI-Header__TitleWrapper_c11qw.Online-Store-UI-Header--subtitle_1u4du {
        margin-top: 0.5rem
    }

    .Online-Store-UI-Header__TitleMiddleSection_1u3iu {
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-Header__ActionWrapper_1dscs {
        display: flex;
        justify-content: space-between;
        line-height: normal
    }

    .Online-Store-UI-Header__BackActionWrapper_1vuce {
        display: grid;
        margin-left: calc((2rem - 1.25rem)*.5*-1);
        margin-right: 0.25rem
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Header__BackActionWrapper_1vuce {
        margin-left: -.5rem
    }

    .Online-Store-UI-Header__CloseActionWrapper_117r7 {
        display: grid;
        margin-left: 0.25rem;
        margin-right: calc((2rem - 1.25rem)*-1*.5)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Header__CloseActionWrapper_117r7 {
        margin-right: -.5rem
    }

    .Online-Store-UI-RollupMenu_3vyj3 {
        max-width: 20rem
    }

    .Online-Store-UI-RollupMenu__Header_117ib {
        border-bottom: var(--p-border-width-025) solid var(--p-color-border-secondary);
        padding: var(--p-space-400)
    }

    .Online-Store-UI-MainArea_15wjo {
        --osui_margin-bottom-main-area: -(border-radius());
        display: flex;
        grid-area: main;
        max-width: 100%;
        min-width: 0;
        position: relative;
        z-index: 40
    }

    .Online-Store-UI-MainArea_15wjo.Online-Store-UI-MainArea--usesBottomSheet_lza5e {
        --osui_margin-bottom-main-area: calc(var(--p-space-400)*-1)
    }

    @media (max-width: 41.6775em) {
        .Online-Store-UI-MainArea_15wjo {
            margin-bottom:var(--osui_margin-bottom-main-area)
        }
    }

    @media (min-width: 41.6875em) {
        .Online-Store-UI-MainArea_15wjo {
            padding:0.5rem
        }

        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-MainArea_15wjo {
            padding: var(--p-space-400)
        }
    }
</style>



<style>
    :root {
        --osui-nav-item-interior-padding: 0.5rem;
        --osui_nav-action-connected-button-width: 1.75rem;
        --osui_nav-action-connected-button-width-slim: 1.25rem;
        --osui_nav-action-common-prefix-size: 1.25rem;
        --osui_nav-action-common-prefix-gap: 0.5rem;
        --osui-nav-item-alignment-none: 0;
        --osui-nav-item-alignment-base-tight: 0.75rem;
        --osui_nav-item-alignment-common-icon: calc(1.25rem + 0.5rem + 0.75rem);
        --osui_nav-item-alignment-common-action-with-icon: calc(1.25rem + 1.25rem + 0.5rem);
        --osui_nav-item-alignment-nested-offset: 0.25rem
    }

    .Polaris-List_yj3nl {
        list-style: disc none outside;
        margin-bottom: 0;
        margin-top: 0;
        padding-left: var(--p-space-500)
    }

    .Polaris-List_yj3nl+.Polaris-List_yj3nl {
        margin-top: var(--p-space-400)
    }

    .Polaris-List--typeNumber_bbvwn {
        list-style: decimal none outside;
        padding-left: var(--p-space-800)
    }

    .Polaris-List__Item_yiyol .Polaris-List_yj3nl:first-child {
        margin-top: 0.5rem
    }

    .Polaris-List--spacingLoose_yte7q .Polaris-List__Item_yiyol {
        margin-bottom: 0.5rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-List--spacingLoose_yte7q .Polaris-List__Item_yiyol {
        margin-bottom: 0.25rem
    }

    .Polaris-List__Item_yiyol:last-child {
        margin-bottom: 0
    }

    .Polaris-Checkbox_1d6zr {
        margin: var(--p-space-025);
        position: relative
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__ChoiceLabel_16hp3 .Polaris-Checkbox__Backdrop_1x2i2 {
        border-width: 0;
        box-shadow: inset 0 0 0 var(--p-border-width-0165) var(--p-color-input-border);
        transform: translateZ(0);
        transition: border-color var(--p-motion-duration-100) var(--p-motion-ease-out),border-width var(--p-motion-duration-100) var(--p-motion-ease-out),box-shadow var(--p-motion-duration-100) var(--p-motion-ease-out)
    }

    .Polaris-Checkbox__ChoiceLabel_16hp3:hover .Polaris-Checkbox__Backdrop_1x2i2 {
        border-color: var(--p-color-input-border-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__ChoiceLabel_16hp3:hover .Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-input-bg-surface-hover);
        box-shadow: inset 0 0 0 var(--p-border-width-0165) var(--p-color-input-border-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__ChoiceLabel_16hp3:active .Polaris-Checkbox__Backdrop_1x2i2,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__ChoiceLabel_16hp3:checked .Polaris-Checkbox__Backdrop_1x2i2 {
        border-color: var(--p-color-bg-primary);
        border-width: 0;
        box-shadow: inset 0 0 0 var(--p-space-050) var(--p-color-bg-primary)
    }

    .Polaris-Checkbox__Input_30ock {
        border: 0!important;
        clip-path: inset(50%)!important;
        height: .0625rem!important;
        margin: 0!important;
        overflow: hidden!important;
        padding: 0!important;
        position: absolute!important;
        top: 0;
        white-space: nowrap!important;
        width: .0625rem!important
    }

    .Polaris-Checkbox__Input_30ock:focus-visible+.Polaris-Checkbox__Backdrop_1x2i2:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:focus-visible+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-input-bg-surface-hover);
        border-width: 0;
        outline: var(--p-border-width-050) solid var(--p-color-border-focus);
        outline-offset: var(--p-space-025)
    }

    .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2,.Polaris-Checkbox__Input_30ock:checked+.Polaris-Checkbox__Backdrop_1x2i2 {
        border-color: var(--p-color-border-interactive)
    }

    .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2:before,.Polaris-Checkbox__Input_30ock:checked+.Polaris-Checkbox__Backdrop_1x2i2:before {
        opacity: 1;
        transform: scale(1)
    }

    @media (-ms-high-contrast:active) {
        .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2:before,.Polaris-Checkbox__Input_30ock:checked+.Polaris-Checkbox__Backdrop_1x2i2:before {
            border: var(--p-border-width-050) solid windowText
        }
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:checked+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-primary);
        border-color: var(--p-color-bg-primary);
        box-shadow: inset 0 0 0 var(--p-space-800) var(--p-color-bg-primary)
    }

    .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx~.Polaris-Checkbox__Icon_yj27d,.Polaris-Checkbox__Input_30ock:checked~.Polaris-Checkbox__Icon_yj27d {
        opacity: 1;
        transform: translate3d(-50%,-50%,0) scale(1);
        transition: opacity 150ms cubic-bezier(0.25,0.1,0.25,1),transform 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx~.Polaris-Checkbox__Icon_yj27d,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:checked~.Polaris-Checkbox__Icon_yj27d {
        transition: opacity 150ms var(--p-motion-ease-out),transform 150ms var(--p-motion-ease-out)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx~.Polaris-Checkbox__Icon_yj27d.Polaris-Checkbox--animated_mk14a,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:checked~.Polaris-Checkbox__Icon_yj27d.Polaris-Checkbox--animated_mk14a {
        transition: initial
    }

    .Polaris-Checkbox__Input_30ock:disabled+.Polaris-Checkbox__Backdrop_1x2i2 {
        border-color: var(--p-color-border-disabled)
    }

    .Polaris-Checkbox__Input_30ock:disabled+.Polaris-Checkbox__Backdrop_1x2i2:before {
        background-color: var(--p-color-bg-disabled)
    }

    .Polaris-Checkbox__Input_30ock:disabled+.Polaris-Checkbox__Backdrop_1x2i2:hover {
        cursor: default
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:disabled+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-transparent-secondary-disabled-experimental);
        border-color: #0000;
        box-shadow: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:disabled+.Polaris-Checkbox__Backdrop_1x2i2:before {
        background-color: initial
    }

    .Polaris-Checkbox__Input_30ock:disabled.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2,.Polaris-Checkbox__Input_30ock:disabled.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2:before,.Polaris-Checkbox__Input_30ock:disabled:checked+.Polaris-Checkbox__Backdrop_1x2i2,.Polaris-Checkbox__Input_30ock:disabled:checked+.Polaris-Checkbox__Backdrop_1x2i2:before {
        background: var(--p-color-border-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:disabled.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:disabled:checked+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-transparent-secondary-disabled-experimental)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:disabled.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2:before,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Input_30ock:disabled:checked+.Polaris-Checkbox__Backdrop_1x2i2:before {
        background-color: initial
    }

    .Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-surface);
        border: var(--p-border-width-050) solid var(--p-color-input-border);
        border-radius: 0.25rem;
        display: block;
        height: 100%;
        position: relative;
        width: 100%
    }

    .Polaris-Checkbox__Backdrop_1x2i2:before {
        background-color: var(--p-color-bg-interactive);
        border-radius: 0.25rem;
        bottom: calc(var(--p-border-width-050)*-1);
        content: "";
        left: calc(var(--p-border-width-050)*-1);
        opacity: 0;
        position: absolute;
        right: calc(var(--p-border-width-050)*-1);
        top: calc(var(--p-border-width-050)*-1);
        transform: scale(.25);
        transition: opacity var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1),transform var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Backdrop_1x2i2:before {
        content: none
    }

    .Polaris-Checkbox__Backdrop_1x2i2.Polaris-Checkbox--hover_37sww,.Polaris-Checkbox__Backdrop_1x2i2:hover {
        border-color: var(--p-color-border-hover);
        cursor: pointer
    }

    .Polaris-Checkbox__Backdrop_1x2i2:after {
        border-radius: 0.25rem;
        bottom: calc(var(--p-border-width-050)*-1 - .0625rem);
        box-shadow: 0 0 0 calc(var(--p-border-width-050)*-1 - .0625rem) var(--p-color-border-focus);
        content: "";
        display: block;
        left: calc(var(--p-border-width-050)*-1 - .0625rem);
        pointer-events: none;
        position: absolute;
        right: calc(var(--p-border-width-050)*-1 - .0625rem);
        top: calc(var(--p-border-width-050)*-1 - .0625rem);
        z-index: 1
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Backdrop_1x2i2 {
        border: var(--p-border-width-0165) solid var(--p-color-input-border)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Backdrop_1x2i2:after {
        content: none
    }

    .Polaris-Checkbox__Backdrop_1x2i2:hover {
        border-color: var(--p-color-input-border-hover)
    }

    .Polaris-Checkbox__Icon_yj27d {
        left: 50%;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 50%;
        transform: translate3d(-50%,-50%,0) scale(.25);
        transform-origin: 50% 50%;
        transition: opacity var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1),transform var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Icon_yj27d {
        bottom: calc(var(--p-space-050)*-1);
        left: calc(var(--p-space-050)*-1);
        right: calc(var(--p-space-050)*-1);
        top: calc(var(--p-space-050)*-1);
        transform: none!important;
        transition: opacity var(--p-motion-duration-100) var(--p-motion-ease-out),transform var(--p-motion-duration-100) var(--p-motion-ease-out)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Icon_yj27d.Polaris-Checkbox--animated_mk14a {
        bottom: 0;
        left: 0;
        margin: var(--p-space-050);
        right: 0;
        top: 0;
        transform: none;
        transition: initial
    }

    .Polaris-Checkbox__Icon_yj27d svg {
        fill: var(--p-color-icon-on-color)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox__Icon_yj27d svg {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0
    }

    @media (-ms-high-contrast:active) {
        .Polaris-Checkbox__Icon_yj27d {
            fill: windowText
        }
    }

    .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Icon_yj27d svg {
        fill: var(--p-color-icon-on-color)
    }

    .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-fill-critical-secondary);
        border-color: var(--p-color-border-critical)
    }

    .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock+.Polaris-Checkbox__Backdrop_1x2i2.Polaris-Checkbox--hover_37sww,.Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock+.Polaris-Checkbox__Backdrop_1x2i2:hover {
        border-color: var(--p-color-border-critical)
    }

    .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock+.Polaris-Checkbox__Backdrop_1x2i2:before {
        background-color: var(--p-color-border-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-surface-critical);
        box-shadow: inset 0 0 0 var(--p-border-width-0165) var(--p-color-bg-fill-critical-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Backdrop_1x2i2:active {
        box-shadow: inset 0 0 0 var(--p-space-050) var(--p-color-bg-fill-critical-active)
    }

    .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2,.Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock:checked+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-border-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock.Polaris-Checkbox__Input--indeterminate_wtlpx+.Polaris-Checkbox__Backdrop_1x2i2,html[class~=comp-summer-editons-2023] .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock:checked+.Polaris-Checkbox__Backdrop_1x2i2 {
        box-shadow: inset 0 0 0 0.75rem var(--p-color-bg-fill-critical-active)!important
    }

    .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock:active+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-border-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock:active+.Polaris-Checkbox__Backdrop_1x2i2 {
        box-shadow: inset 0 0 0 var(--p-space-050) var(--p-color-bg-fill-critical-active)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock:focus-visible+.Polaris-Checkbox__Backdrop_1x2i2,html[class~=comp-summer-editons-2023] .Polaris-Checkbox__ChoiceLabel_16hp3:hover .Polaris-Checkbox--error_37uk1 .Polaris-Checkbox__Input_30ock:focus-visible+.Polaris-Checkbox__Backdrop_1x2i2 {
        background-color: var(--p-color-bg-surface-critical);
        border-color: var(--p-color-border-critical-secondary)
    }

    .Polaris-Checkbox--animated_mk14a svg>path {
        stroke-dasharray: 2;
        stroke-dashoffset: 2
    }

    .Polaris-Checkbox--animated_mk14a svg>path.Polaris-Checkbox--checked_17qxt {
        animation-direction: normal;
        animation-duration: 150ms;
        animation-fill-mode: forwards;
        animation-iteration-count: 1;
        animation-name: Polaris-Checkbox--pathAnimation_xxdul;
        animation-timing-function: linear;
        opacity: 1
    }

    @keyframes Polaris-Checkbox--pathAnimation_xxdul {
        0% {
            stroke-dashoffset: 2
        }

        to {
            stroke-dashoffset: 0
        }
    }

    .Online-Store-UI-UppercaseText_1m15a {
        text-transform: uppercase
    }

    .Online-Store-UI-PanelArea_tm93o {
        height: 100%;
        position: relative;
        width: 100%
    }

    @media (min-width: 41.6875em) {
        .Online-Store-UI-PanelArea_tm93o {
            width:var(--osui_width-sidebar-desktop)
        }
    }

    .Online-Store-UI-PanelArea_tm93o:empty {
        display: none
    }

    .store-ul-sortablelist {
        --osui_gap-pe-sortable-list: 0.25rem /2;
        --osui_margin-top-pe-sortable-list-divider: 0.25rem;
        --osui-margin-x-sortable-list-ghost: 0.75rem;
        background-color: var(--p-color-bg-surface);
        display: flex;
        flex-direction: column;
        list-style: none;
        margin: 0;
        padding: 0;
        padding-left: var(--osui_padding-left-pe-sortable-list)
    }

    @media (max-width: 41.6775em) {
        .store-ul-sortablelist {
            --osui_nav-action-connected-button-width:var( --osui_size-min-action-mobile );
            --osui_nav-action-connected-button-width-slim: var( --osui_size-min-action-mobile );
            --osui_height-nav-action: var(--osui_size-min-action-mobile)
        }
    }

    .store-ul-sortablelist li+li {
        margin-top: var(--osui_gap-pe-sortable-list)
    }

    .store-ul-sortablelist>* {
        -webkit-user-select: none;
        user-select: none
    }

    @media (max-width: 41.6775em) {
        .store-ul-sortablelist {
            --osui_gap-pe-sortable-list:0.5rem;
            --osui_margin-top-pe-sortable-list-divider: 0.75rem
        }
    }

    .store-ul-sortablelist+.store-ul-sortablelist:before {
        background-color: var(--p-color-border-secondary);
        content: "";
        height: var(--p-border-width-025);
        margin: var(--osui_margin-top-pe-sortable-list-divider) var(--p-space-400)
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-sortablelist .store-ul-sortablelist {
        --osui_height-nav-action-legacy: 2rem
    }

    @media (max-width: 41.6775em) {
        .store-ul-sortablelist .store-ul-sortablelist {
            --osui_gap-pe-sortable-list:0.25rem
        }

        .store-ul-sortablelist .store-ul-sortablelist li:first-child {
            margin-top: var(--osui_gap-pe-sortable-list)
        }
    }

    .store-ul-sortablelist .store-ul-sortablelist.Online-Store-UI-SortableList--preventDragOffset_7499l {
        --osui-margin-x-sortable-list-ghost: 0.25rem
    }

    .store-ul-sortablelist.Online-Store-UI-SortableList--activeList_1vpne {
        position: relative
    }

    .store-ul-sortablelist.Online-Store-UI-SortableList--activeList_1vpne:after {
        border: var(--p-border-width-025) dashed #0000;
        border-color: var(--p-color-border-interactive);
        border-radius: 0.5rem;
        content: "";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%
    }

    .store-ul-sortablelist+.store-ul-sortablelist.store-ul-sortablelist.Online-Store-UI-SortableList--activeList_1vpne:after {
        height: calc(100% - var(--osui_margin-top-pe-sortable-list-divider)*2);
        top: calc(var(--osui_margin-top-pe-sortable-list-divider)*2)
    }

    .store-ul-sortablelist.store-ul-sortablelist--left-alignment-none {
        --osui_padding-left-pe-sortable-list: var( --osui-nav-item-alignment-spacing-none )
    }

    .store-ul-sortablelist.Online-Store-UI-SortableList--leftAlignmentBaseTight_fj4cs {
        --osui_padding-left-pe-sortable-list: var( --osui-nav-item-alignment-base-tight )
    }

    .store-ul-sortablelist .store-ul-sortablelist.Online-Store-UI-SortableList--leftAlignmentBaseTight_fj4cs {
        --osui_padding-left-pe-sortable-list: calc(0.75rem - var(--osui_nav-item-alignment-nested-offset))
    }

    .store-ul-sortablelist.Online-Store-UI-SortableList--leftAlignmentPrefix_16ocx {
        --osui_padding-left-pe-sortable-list: var( --osui_nav-action-connected-button-width-slim )
    }

    .store-ul-sortablelist .store-ul-sortablelist.Online-Store-UI-SortableList--leftAlignmentPrefix_16ocx {
        --osui_padding-left-pe-sortable-list: calc(1.25rem - var(--osui_nav-item-alignment-nested-offset))
    }

    .store-ul-sortablelist.Online-Store-UI-SortableList--leftAlignmentIcon_ce8re {
        --osui_padding-left-pe-sortable-list: var( --osui_nav-item-alignment-common-icon )
    }

    .store-ul-sortablelist .store-ul-sortablelist.Online-Store-UI-SortableList--leftAlignmentIcon_ce8re {
        --osui_padding-left-pe-sortable-list: calc(var(--osui_nav-item-alignment-common-icon) - var(--osui_nav-item-alignment-nested-offset))
    }

    .store-ul-sortablelist .store-ul-sortable-list--left-alignment-with-icon {
        --osui_padding-left-pe-sortable-list: var( --osui_nav-item-alignment-common-action-with-icon )
    }

    .store-ul-sortablelist .store-ul-sortablelist.store-ul-sortable-list--left-alignment-with-icon {
        --osui_padding-left-pe-sortable-list: calc(var(--osui_nav-item-alignment-common-action-with-icon) - var(--osui_nav-item-alignment-nested-offset))
    }

    .Online-Store-UI-Clone_ctpnw {
        list-style: none;
        margin: 0;
        padding: 0
    }

    @keyframes Online-Store-UI-NavItem--dragLiftX_fjzfk {
        to {
            transform: translate3d(1.5625rem,0,0)
        }
    }

    @keyframes Online-Store-UI-NavItem--dragLiftY_4gx2q {
        to {
            transform: translate3d(0,-.8125rem,0)
        }
    }

    .store-ul-navitem {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        flex: 1 1 auto;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        position: relative;
        will-change: transform
    }

    @media (max-width: 41.6775em) {
        html[class~=comp-summer-editons-2023] .store-ul-navitem {
            --osui_padding-x-nav-item:0.75rem
        }

        .store-ul-navitem {
            --osui_nav-action-connected-button-width: var( --osui_size-min-action-mobile );
            --osui_nav-action-connected-button-width-slim: var( --osui_size-min-action-mobile );
            --osui_height-nav-action: var(--osui_size-min-action-mobile)
        }
    }

    .store-ul-navitem.Online-Store-UI-NavItem--nested_7zt26 {
        padding-left: 0;
        padding-right: 0
    }

    .store-ul-navitem.Online-Store-UI-NavItem--disabled_znugc .store-ul-navitem--title-prefix svg,.store-ul-navitem.Online-Store-UI-NavItem--disabled_znugc svg {
        fill: var(--p-color-icon-disabled)
    }

    .store-ul-navitem.Online-Store-UI-NavItem--disabled_znugc .store-ul-navitem--title {
        color: var(--p-color-text-disabled)
    }

    .store-ul-navitem:focus {
        outline: 0
    }

    :not(.Online-Store-UI-NavItem--disabled_znugc):not(.Online-Store-UI-NavItem--hidden_9ctlx)>.Online-Store-UI-NavItem--selected_14pmv:not(.Online-Store-UI-NavItem--error_15f2q) .store-ul-navitem svg {
        fill: var(--p-color-icon-emphasis)
    }

    .Online-Store-UI-NavItem--clone_154dt {
        --osui_margin-x-nav-item-clone: 0.75rem;
        animation: Online-Store-UI-NavItem--dragLiftX_fjzfk 150ms var(--osui_easing-bounce) both;
        background-color: var(--p-color-bg-surface);
        border-radius: 0.5rem;
        box-shadow: 0 .0625rem .1875rem 0 #00000080;
        cursor: grabbing;
        padding-left: 0;
        padding-right: 0
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-NavItem--clone_154dt {
        border-radius: 0.25rem
    }

    .Online-Store-UI-NavItem--clone_154dt:not(.Online-Store-UI-NavItem--nested_7zt26) {
        margin-left: var(--osui_margin-x-nav-item-clone);
        margin-right: var(--osui_margin-x-nav-item-clone)
    }

    .Online-Store-UI-NavItem--clone_154dt:not(.Online-Store-UI-NavItem--nested_7zt26).Online-Store-UI-NavItem--preventCloneOffset_1fs49 {
        --osui_margin-x-nav-item-clone: 0
    }

    .Online-Store-UI-NavItem--clone_154dt.Online-Store-UI-NavItem--preventCloneOffset_1fs49 {
        animation: Online-Store-UI-NavItem--dragLiftY_4gx2q 150ms var(--osui_easing-bounce) both;
        box-shadow: 0 0 .1875rem #0000001a,0 .25rem 1.25rem #00000026
    }

    .Online-Store-UI-NavItem--clone_154dt button {
        pointer-events: none;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .store-ul-navitem__interior {
        align-items: center;
        border-radius: 0.5rem;
        display: grid;
        grid-template-areas: "prefix title suffix";
        grid-template-columns: auto 1fr auto;
        grid-template-rows: 100%;
        height: 2.125rem;
        position: relative;
        width: 100%
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-navitem__interior {
        --osui_height-nav-action: 2.25rem;
        border-radius: 0.25rem
    }

    @media (max-width: 41.6775em) {
        html:not([class~=comp-summer-editons-2023]) .store-ul-navitem__interior {
            --osui_nav-action-connected-button-width:var( --osui_size-min-action-mobile );
            --osui_nav-action-connected-button-width-slim: var( --osui_size-min-action-mobile );
            --osui_height-nav-action: var(--osui_size-min-action-mobile)
        }
    }

    .store-ul-navitem__interior.Online-Store-UI-NavItem--backgroundColorHighlight_1o5qj {
        background-color: var(--p-color-bg-interactive-selected)
    }

    .store-ul-navitem__interior.Online-Store-UI-NavItem--backgroundColorSecondary_4k951 {
        background-color: var(--p-color-bg-app)
    }

    .store-ul-navitem__prefix,.store-ul-navitem__suffix,.store-ul-navitem__title-content {
        align-items: center;
        display: flex;
        height: 100%
    }

    .store-ul-navitem__title-content {
        flex-grow: 1;
        gap: 0.5rem;
        grid-area: title;
        max-width: 100%;
        min-width: 0;
        padding-left: var(--osui_padding-left-nav-item-title-content);
        pointer-events: none;
        z-index: 2
    }

    .store-ul-navitem--fleeting .store-ul-navitem__title-content:not(.Online-Store-UI-NavItem--hasPreventFleeting_1y88z) {
        grid-column-end: suffix;
        grid-column-start: title;
        transition: grid-area var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-navitem--fleeting:focus-within .store-ul-navitem__title-content:not(.Online-Store-UI-NavItem--hasPreventFleeting_1y88z),.store-ul-navitem--fleeting:hover .store-ul-navitem__title-content:not(.Online-Store-UI-NavItem--hasPreventFleeting_1y88z) {
        grid-area: title
    }

    .Online-Store-UI-NavItem--nested_7zt26 .store-ul-navitem__title-content,.store-ul-navitem__title-content.store-ul-navitem--label-alignment-none {
        --osui_padding-left-nav-item-title-content: var( --osui-nav-item-alignment-none )
    }

    .Online-Store-UI-NavItem--nested_7zt26:not(.Online-Store-UI-NavItem--preventNestedOffset_kc70y) .store-ul-navitem__title-content {
        --osui_padding-left-nav-item-title-content: var( --osui_nav-item-alignment-nested-offset )
    }

    .store-ul-navitem__title-content.Online-Store-UI-NavItem--labelAlignmentBaseTight_ply1m {
        --osui_padding-left-nav-item-title-content: var( --osui-nav-item-alignment-base-tight )
    }

    .store-ul-navitem__title-content.store-ul-navitem--label-alignment-prefix {
        --osui_padding-left-nav-item-title-content: var( --osui_nav-action-connected-button-width-slim )
    }

    .store-ul-navitem__title-content.Online-Store-UI-NavItem--labelAlignmentPrefixWithIcon_18ezj {
        --osui_padding-left-nav-item-title-content: var( --osui_nav-item-alignment-common-action-with-icon )
    }

    .store-ul-navitem__title-content.Online-Store-UI-NavItem--labelAlignmentIcon_1e6br {
        --osui_padding-left-nav-item-title-content: var( --osui_nav-item-alignment-common-icon )
    }

    .store-ul-navitem__title-content.Online-Store-UI-NavItem--labelAlignmentIcon_1e6br.store-ul-navitem--item-has-prefix {
        --osui_padding-left-nav-item-title-content: calc(1.25rem + 0.5rem)
    }

    .Online-Store-UI-NavItem--disabled_znugc .store-ul-navitem__prefix,.Online-Store-UI-NavItem--disabled_znugc .store-ul-navitem__suffix {
        pointer-events: none;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-NavItem--selected_14pmv:before {
        background-color: var(--p-color-bg-interactive);
        border-bottom-right-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        content: "";
        display: block;
        height: 100%;
        left: calc(0.5rem*-1);
        position: absolute;
        top: 0;
        width: var(--p-border-width-3)
    }

    .Online-Store-UI-NavItem--nested_7zt26 .Online-Store-UI-NavItem--selected_14pmv:before {
        content: none
    }

    .store-ul-navitem__prefix {
        grid-area: prefix;
        z-index: 2
    }

    .store-ul-navitem__primary-action {
        fill: #4a4a4a;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        align-items: center;
        -webkit-appearance: none;
        appearance: none;
        background: none;
        background-color: initial;
        border: none;
        border-radius: 0.5rem;
        bottom: 0;
        color: inherit;
        color: #303030;
        cursor: pointer;
        display: inline-flex;
        display: flex;
        font-size: inherit;
        font-weight: 500;
        height: 2.125rem;
        height: 100%;
        justify-content: center;
        justify-content: left;
        left: 0;
        letter-spacing: normal;
        line-height: inherit;
        line-height: 1;
        margin: 0;
        max-width: 100%;
        min-height: 2rem;
        min-height: auto;
        min-width: 0;
        min-width: 2rem;
        min-width: auto;
        outline: none;
        padding: 0;
        position: relative;
        position: absolute;
        right: 0;
        text-align: left;
        text-decoration: none;
        text-transform: none;
        top: 0;
        transition-duration: 150ms;
        transition-property: color,background-color;
        transition-timing-function: cubic-bezier(0.25,0.1,0.25,1);
        transition: background-color 150ms cubic-bezier(0.25,0.1,0.25,1);
        width: 100%
    }

    .store-ul-navitem__primary-action:focus {
        outline: none
    }

    .store-ul-navitem__primary-action:after {
        border-radius: calc(0.5rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    .store-ul-navitem__primary-action:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-navitem__primary-action:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        .store-ul-navitem__primary-action:focus:not(:focus-visible):after {
            outline: none
        }
    }

    .store-ul-navitem__primary-action:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-navitem__primary-action:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    .store-ul-navitem__primary-action svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-navitem__primary-action:focus-visible {
        background-color: #0000000f;
        color: #4a4a4a
    }

    .store-ul-navitem__primary-action:focus-visible svg {
        fill: #4a4a4a
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-navitem__primary-action:hover {
            background-color:#0000000f;
            color: #4a4a4a
        }

        .store-ul-navitem__primary-action:hover svg {
            fill: #4a4a4a
        }
    }

    .store-ul-navitem__primary-action:active {
        background-color: #f3f3f3;
        color: #4a4a4a
    }

    .store-ul-navitem__primary-action:active svg {
        fill: #4a4a4a
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-navitem__primary-action {
        --osui_height-nav-action: 2.25rem;
        border-radius: 0.25rem
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-navitem__primary-action:after {
        border-radius: 0.25rem
    }

    .Online-Store-UI-NavItem--hasIndicator_1yowk .store-ul-navitem__primary-action:before {
        background-color: var(--p-color-bg-primary-active);
        border-radius: 100%;
        content: "";
        display: block;
        height: .5rem;
        margin-left: -.875rem;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: .5rem
    }

    .Online-Store-UI-NavItem--nested_7zt26 .Online-Store-UI-NavItem--hasIndicator_1yowk .store-ul-navitem__primary-action:before {
        margin-left: -.625rem
    }

    @media (max-width: 41.6775em) {
        .Online-Store-UI-NavItem--hasIndicator_1yowk .store-ul-navitem__primary-action:before {
            margin-left:-1.625rem
        }

        .Online-Store-UI-NavItem--nested_7zt26 .Online-Store-UI-NavItem--hasIndicator_1yowk .store-ul-navitem__primary-action:before {
            margin-left: -1.375rem
        }
    }

    .store-ul-navitem__primary-action:focus-visible {
        background-color: #fafafa;
        color: #303030
    }

    .store-ul-navitem__primary-action:focus-visible svg {
        fill: #303030
    }

    @media (-ms-high-contrast:active) {
        .store-ul-navitem__primary-action:focus-visible svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-navitem__primary-action:hover {
            background-color:#fafafa;
            color: #303030
        }

        .store-ul-navitem__primary-action:hover svg {
            fill: #303030
        }
    }

    @media (hover: hover) and (pointer:fine) and (-ms-high-contrast:active) {
        .store-ul-navitem__primary-action:hover svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-navitem:not(.Online-Store-UI-NavItem--hidden_9ctlx)>.store-ul-navitem__interior:not(.Online-Store-UI-NavItem--error_15f2q):not(.store-ul-navitem--interactive):not(.Online-Store-UI-NavItem--selected_14pmv) .store-ul-navitem__primary-action:hover~.store-ul-navitem__title-content>.store-ul-navitem--title-prefix svg {
            fill:#303030
        }
    }

    .store-ul-navitem__primary-action:active {
        background-color: #fafafa;
        background-color: var(--p-color-bg-active);
        color: #303030
    }

    .store-ul-navitem__primary-action:active svg {
        fill: #303030
    }

    @media (-ms-high-contrast:active) {
        .store-ul-navitem__primary-action:active svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    .Online-Store-UI-NavItem--disabled_znugc .store-ul-navitem__primary-action,.Online-Store-UI-NavItem--plain_1568a .store-ul-navitem__primary-action {
        pointer-events: none;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-NavItem--selected_14pmv .store-ul-navitem__primary-action {
        background-color: var(--p-color-bg-interactive-selected)
    }

    .Online-Store-UI-NavItem--pressed_1epud .store-ul-navitem__primary-action {
        background-color: var(--p-color-bg-active)
    }

    .store-ul-navitem--title-prefix svg {
        fill: #4a4a4a
    }

    .Online-Store-UI-NavItem--hidden_9ctlx .store-ul-navitem--title-prefix svg {
        fill: var(--p-color-icon-secondary)
    }

    .store-ul-navitem--interactive .store-ul-navitem--title-prefix svg {
        fill: var(--p-color-icon-emphasis)
    }

    .store-ul-navitem--interactive.Online-Store-UI-NavItem--pressed_1epud .store-ul-navitem--title-prefix svg {
        fill: var(--p-color-icon-emphasis-active)
    }

    .Online-Store-UI-NavItem--error_15f2q .store-ul-navitem--title-prefix svg {
        fill: var(--p-color-icon-critical)
    }

    .store-ul-navitem--title {
        max-width: 100%;
        min-width: 0
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-navitem--title {
        font-weight: 600;
        margin-bottom: -.14em;
        overflow: hidden;
        padding-bottom: .14em;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-NavItem--nested_7zt26 .store-ul-navitem--title {
        font-weight: 400
    }

    .Online-Store-UI-NavItem--hidden_9ctlx .store-ul-navitem--title {
        color: var(--p-color-text-secondary)
    }

    .store-ul-navitem--interactive .store-ul-navitem--title {
        color: var(--p-color-text-emphasis)
    }

    .store-ul-navitem--interactive.Online-Store-UI-NavItem--pressed_1epud .store-ul-navitem--title {
        color: var(--p-color-text-emphasis-active)
    }

    .Online-Store-UI-NavItem--error_15f2q .store-ul-navitem--title {
        color: var(--p-color-text-critical)
    }

    .store-ul-navitem__suffix {
        align-items: center;
        display: flex;
        flex: 0 0 auto;
        grid-area: suffix;
        justify-self: self-end;
        position: relative;
        z-index: 2
    }

    .store-ul-navitem--fleeting .store-ul-navitem__suffix>:not(.Online-Store-UI-NavItem__PreventFleeting_x1na9) {
        opacity: 0;
        transition: opacity var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-navitem--fleeting:focus-within .store-ul-navitem__suffix>:not(.Online-Store-UI-NavItem__PreventFleeting_x1na9),.store-ul-navitem--fleeting:hover .store-ul-navitem__suffix>:not(.Online-Store-UI-NavItem__PreventFleeting_x1na9) {
        opacity: 1
    }

    .Online-Store-UI-NavItem--hovered_1epcj {
        background-color: #fafafa;
        color: #303030
    }

    .Online-Store-UI-NavItem--hovered_1epcj svg {
        fill: #303030
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-NavItem--hovered_1epcj svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    .store-ul-navitem--title .Online-Store-UI-NavItem__Subtitle_1th6y {
        color: var(--p-color-text-secondary);
        font-size: var(--p-font-size-75);
        padding-left: .3125rem
    }

    .Online-Store-UI-Chevron_n30pf {
        display: grid;
        place-items: center;
        width: 1.25rem
    }

    .store-ul-disclosure__action {
        fill: #4a4a4a;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        align-items: center;
        -webkit-appearance: none;
        appearance: none;
        background: none;
        background-color: initial;
        border: none;
        border-radius: 0.5rem;
        color: inherit;
        color: #303030;
        cursor: pointer;
        display: inline-flex;
        display: flex;
        font-size: inherit;
        font-weight: 500;
        height: 2.125rem;
        justify-content: center;
        letter-spacing: normal;
        line-height: inherit;
        line-height: 1;
        margin: 0;
        max-width: 100%;
        min-height: 2rem;
        min-height: auto;
        min-width: 0;
        min-width: 2rem;
        min-width: auto;
        outline: none;
        padding: 0;
        position: relative;
        text-decoration: none;
        text-transform: none;
        transition-duration: 150ms;
        transition-property: color,background-color;
        transition-timing-function: cubic-bezier(0.25,0.1,0.25,1);
        width: 1.25rem
    }

    .store-ul-disclosure__action:focus {
        outline: none
    }

    .store-ul-disclosure__action:after {
        border-radius: calc(0.5rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    .store-ul-disclosure__action:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-disclosure__action:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        .store-ul-disclosure__action:focus:not(:focus-visible):after {
            outline: none
        }
    }

    .store-ul-disclosure__action:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-disclosure__action:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    .store-ul-disclosure__action svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-disclosure__action:focus-visible {
        background-color: #0000000f;
        color: #4a4a4a
    }

    .store-ul-disclosure__action:focus-visible svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-disclosure__action:focus-visible svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-disclosure__action:hover {
            background-color:#0000000f;
            color: #4a4a4a
        }

        .store-ul-disclosure__action:hover svg {
            fill: #4a4a4a
        }
    }

    @media (hover: hover) and (pointer:fine) and (-ms-high-contrast:active) {
        .store-ul-disclosure__action:hover svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    .store-ul-disclosure__action:active {
        background-color: #f3f3f3;
        color: #4a4a4a
    }

    .store-ul-disclosure__action:active svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-disclosure__action:active svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-disclosure__action {
        --osui_height-nav-action: 2.25rem;
        border-radius: 0.25rem
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-disclosure__action:after {
        border-radius: 0.25rem
    }

    .store-ul-disclosure__icon {
        align-items: center;
        display: flex;
        flex: 0 0 auto;
        height: 1.25rem;
        justify-content: center;
        width: 1.25rem
    }

    .store-ul-disclosure__icon svg {
        flex: 0 0 auto;
        height: 100%;
        margin: auto;
        overflow: visible;
        width: 100%
    }

    html[class~=comp-summer-editons-2023] .store-ul-disclosure__icon svg {
        fill: var(--p-color-icon-secondary)
    }

    .store-ul-disclosure:not(.store-ul-disclosure--expanded) .store-ul-disclosure__icon {
        transform: rotate(-90deg)
    }

    .store-ul-drag-handle {
        fill: #4a4a4a;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        align-items: center;
        -webkit-appearance: none;
        appearance: none;
        background: none;
        background-color: initial;
        border: none;
        border-radius: 0.5rem;
        color: inherit;
        color: #303030;
        cursor: pointer;
        cursor: grab;
        display: inline-flex;
        display: flex;
        font-size: inherit;
        font-weight: 500;
        height: 2.125rem;
        justify-content: center;
        letter-spacing: normal;
        line-height: inherit;
        line-height: 1;
        margin: 0;
        max-width: 100%;
        min-height: 2rem;
        min-height: auto;
        min-width: 0;
        min-width: 2rem;
        min-width: auto;
        outline: none;
        padding: 0;
        position: relative;
        text-decoration: none;
        text-transform: none;
        touch-action: none;
        transition-duration: 150ms;
        transition-property: color,background-color;
        transition-timing-function: cubic-bezier(0.25,0.1,0.25,1);
        width: var(--osui_nav-action-connected-button-width)
    }

    .store-ul-drag-handle:focus {
        outline: none
    }

    .store-ul-drag-handle:after {
        border-radius: calc(0.5rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    .store-ul-drag-handle:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-drag-handle:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        .store-ul-drag-handle:focus:not(:focus-visible):after {
            outline: none
        }
    }

    .store-ul-drag-handle:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-drag-handle:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    .store-ul-drag-handle svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-drag-handle:focus-visible {
        background-color: #0000000f;
        color: #4a4a4a
    }

    .store-ul-drag-handle:focus-visible svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-drag-handle:focus-visible svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-drag-handle:hover {
            background-color:#0000000f;
            color: #4a4a4a
        }

        .store-ul-drag-handle:hover svg {
            fill: #4a4a4a
        }
    }

    @media (hover: hover) and (pointer:fine) and (-ms-high-contrast:active) {
        .store-ul-drag-handle:hover svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    .store-ul-drag-handle:active {
        background-color: #f3f3f3;
        color: #4a4a4a
    }

    .store-ul-drag-handle:active svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-drag-handle:active svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-drag-handle {
        --osui_height-nav-action: 2.25rem;
        border-radius: var(--p-border-width-025)
    }

    @media (hover: hover) and (pointer:fine) {
        html:not([class~=comp-summer-editons-2023]) .store-ul-drag-handle:hover {
            color:#303030
        }

        html:not([class~=comp-summer-editons-2023]) .store-ul-drag-handle:hover svg {
            fill: #303030
        }
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-drag-handle:after {
        border-radius: var(--p-border-radius-050)
    }

    .Online-Store-UI-DragHandle--fleeting_iukl8 .store-ul-drag-handle {
        opacity: 0;
        transition: opacity var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1)
    }

    .Online-Store-UI-DragHandle--fleeting_iukl8:focus-within .store-ul-drag-handle,.Online-Store-UI-DragHandle--fleeting_iukl8:hover .store-ul-drag-handle {
        opacity: 1
    }

    @media (max-width: 41.6775em) {
        .store-ul-drag-handle {
            width:2.125rem
        }
    }

    .store-ul-drag-handle:disabled {
        pointer-events: none;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .store-ul-drag-handle:disabled svg {
        fill: var(--p-color-icon-disabled)
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4 {
        fill: #4a4a4a;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        align-items: center;
        -webkit-appearance: none;
        appearance: none;
        background: none;
        background-color: initial;
        border: none;
        border-radius: 0.5rem;
        color: inherit;
        color: #303030;
        cursor: pointer;
        display: inline-flex;
        display: flex;
        font-size: inherit;
        font-weight: 500;
        height: 2.125rem;
        justify-content: center;
        letter-spacing: normal;
        line-height: inherit;
        line-height: 1;
        margin: 0;
        max-width: 100%;
        min-height: 2rem;
        min-height: auto;
        min-width: 0;
        min-width: 2rem;
        min-width: auto;
        outline: none;
        padding: 0;
        position: relative;
        text-decoration: none;
        text-transform: none;
        transition-duration: 150ms;
        transition-property: color,background-color;
        transition-timing-function: cubic-bezier(0.25,0.1,0.25,1);
        width: 1.25rem
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus {
        outline: none
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:after {
        border-radius: calc(0.5rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus:not(:focus-visible):after {
            outline: none
        }
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4 svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus-visible {
        background-color: #0000000f;
        color: #4a4a4a
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus-visible svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:focus-visible svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:hover {
            background-color:#0000000f;
            color: #4a4a4a
        }

        .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:hover svg {
            fill: #4a4a4a
        }
    }

    @media (hover: hover) and (pointer:fine) and (-ms-high-contrast:active) {
        .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:hover svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:active {
        background-color: #f3f3f3;
        color: #4a4a4a
    }

    .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:active svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4:active svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-drag-handle.Online-Store-UI-DragHandle--sizeSlim_1jbd4 {
        --osui_height-nav-action: 2.25rem
    }

    .store-ul-drag-handle__icon-wrapper {
        align-items: center;
        display: flex;
        flex: 0 0 auto;
        height: .75rem;
        justify-content: center;
        width: .75rem
    }

    .store-ul-drag-handle__icon-wrapper svg {
        fill: #4a4a4a;
        flex: 0 0 auto;
        height: 100%;
        margin: auto;
        overflow: visible;
        width: 100%
    }

    .Online-Store-UI-DragHandle--pressed_1xcp2 {
        color: #4a4a4a;
        cursor: grabbing
    }

    .Online-Store-UI-DragHandle--pressed_1xcp2:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .Online-Store-UI-DragHandle--pressed_1xcp2 svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-DragHandle--pressed_1xcp2 svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-DragHandle--pressed_1xcp2 {
        color: #303030
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-DragHandle--pressed_1xcp2 svg {
        fill: #303030
    }

    .store-ul-drag-handle__container {
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-Collapsible--collapsed_1tzfi {
        display: none
    }

    .Online-Store-UI-Ghost_mporc {
        background-color: var(--p-color-bg-interactive-selected);
        border-radius: 0.25rem;
        height: 2.125rem;
        margin-left: var(--osui-margin-x-sortable-list-ghost);
        margin-right: var(--osui-margin-x-sortable-list-ghost)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Ghost_mporc {
        height: 2.25rem
    }

    @media (max-width: 41.6775em) {
        .Online-Store-UI-Ghost_mporc {
            --osui_height-nav-action:var(--osui_size-min-action-mobile)
        }
    }

    .Online-Store-UI-Ghost--spacingBase_5anqd {
        padding-left: 0.5rem;
        padding-right: 0.75rem
    }

    .Online-Store-UI-Ghost--spacingTight_11gb7 {
        padding-left: 0.25rem;
        padding-right: 0.25rem
    }

    .Online-Store-UI-Ghost--spacingNone_4y83l {
        padding-left: 0;
        padding-right: 0
    }

    .Polaris-DropZone_1ehhx {
        --pc-drop-zone-outline: 29;
        --pc-drop-zone-overlay: 30;
        background-color: var(--p-color-bg-surface);
        border-radius: 0.5rem;
        display: flex;
        justify-content: center;
        position: relative
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone_1ehhx {
        background-color: var(--p-color-input-bg-surface)
    }

    .Polaris-DropZone_1ehhx:after {
        border: var(--p-border-width-025) dashed #0000;
        border-radius: 0.5rem;
        bottom: 0;
        content: "";
        left: 0;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
        z-index: var(--pc-drop-zone-outline)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone_1ehhx:after {
        border-width: var(--p-border-width-0165)
    }

    .Polaris-DropZone_1ehhx:not(.Polaris-DropZone--focused_17w4h):after {
        border: var(--p-border-width-025) dashed #0000;
        bottom: 0;
        left: 0;
        opacity: 1;
        right: 0;
        top: 0;
        transform: scale(1)
    }

    .Polaris-DropZone_1ehhx:hover {
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-DropZone--hasOutline_1z0fh {
        padding: var(--p-space-025)
    }

    .Polaris-DropZone--hasOutline_1z0fh:after {
        border-color: var(--p-color-border-strong)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--isDisabled_7e21n):after {
        border-color: var(--p-color-input-border)
    }

    .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--isDisabled_7e21n):hover {
        background-color: var(--p-color-bg-surface-secondary);
        cursor: pointer
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--isDisabled_7e21n):hover {
        background-color: var(--p-color-input-bg-surface-hover)
    }

    .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--isDisabled_7e21n):hover:after {
        border-color: var(--p-color-border-emphasis-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--isDisabled_7e21n):hover:after {
        border-color: var(--p-color-input-border-hover)
    }

    .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--focused_17w4h):after {
        border: var(--p-border-width-025) dashed #0000;
        border-color: var(--p-color-border-strong);
        border-radius: 0.5rem;
        bottom: 0;
        left: 0;
        opacity: 1;
        right: 0;
        top: 0;
        transform: scale(1)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone--hasOutline_1z0fh:not(.Polaris-DropZone--focused_17w4h):not(.Polaris-DropZone--isDisabled_7e21n):not(:hover):after {
        border-color: var(--p-color-input-border)
    }

    .Polaris-DropZone--isDragging_yvz0y:not(.Polaris-DropZone--isDisabled_7e21n) {
        background-color: #fafafa
    }

    .Polaris-DropZone--isDisabled_7e21n {
        cursor: not-allowed
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone--isDisabled_7e21n {
        background-color: var(--p-color-bg-fill-disabled);
        color: var(--p-color-text-disabled)
    }

    .Polaris-DropZone--isDisabled_7e21n:after,html[class~=comp-summer-editons-2023] .Polaris-DropZone--isDisabled_7e21n:after {
        border-color: var(--p-color-border-disabled)
    }

    .Polaris-DropZone--sizeLarge_61dxo {
        min-height: 7.5rem
    }

    .Polaris-DropZone--sizeMedium_5f35p {
        align-items: center;
        min-height: 6.25rem
    }

    .Polaris-DropZone--sizeSmall_7647q {
        align-items: center;
        min-height: 3.125rem;
        padding: 0
    }

    .Polaris-DropZone--measuring_wb2tw {
        min-height: 0;
        visibility: hidden
    }

    .Polaris-DropZone__Container_13mbo {
        flex: 1 1;
        position: relative
    }

    .Polaris-DropZone__Container_13mbo:after {
        bottom: calc(var(--p-border-width-025)*-1 - .0625rem);
        box-shadow: 0 0 0 calc(var(--p-border-width-025)*-1 - .0625rem) var(--p-color-border-focus);
        content: "";
        display: block;
        left: calc(var(--p-border-width-025)*-1 - .0625rem);
        right: calc(var(--p-border-width-025)*-1 - .0625rem);
        top: calc(var(--p-border-width-025)*-1 - .0625rem);
        z-index: 1
    }

    .Polaris-DropZone__Container_13mbo:after,.Polaris-DropZone__Overlay_ib7rj {
        border-radius: 0.5rem;
        pointer-events: none;
        position: absolute
    }

    .Polaris-DropZone__Overlay_ib7rj {
        align-items: center;
        background-color: var(--p-color-bg-interactive-selected);
        border: var(--p-border-width-025) dashed var(--p-color-border-interactive);
        bottom: 0;
        color: var(--p-color-text-emphasis);
        display: flex;
        justify-content: center;
        left: 0;
        padding: var(--p-space-400);
        right: 0;
        text-align: center;
        top: 0;
        z-index: var(--pc-drop-zone-overlay)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone__Overlay_ib7rj {
        background-color: var(--p-color-input-bg-surface-active);
        border: var(--p-border-width-025) solid var(--p-color-input-border-active);
        color: #303030
    }

    .Polaris-DropZone--sizeSmall_7647q .Polaris-DropZone__Overlay_ib7rj {
        padding: 0
    }

    .Polaris-DropZone--hasError_7q9ec>.Polaris-DropZone__Overlay_ib7rj {
        background-color: var(--p-color-bg-surface-critical);
        border-color: var(--p-color-border-critical);
        color: var(--p-color-text-critical)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone--hasError_7q9ec>.Polaris-DropZone__Overlay_ib7rj {
        background-color: var(--p-color-bg-surface-critical);
        border-color: var(--p-color-border-critical-secondary);
        border-style: dashed;
        border-width: var(--p-border-width-0165);
        color: var(--p-color-text-critical)
    }

    .Polaris-DropZone--focused_17w4h:not(.Polaris-DropZone--isDisabled_7e21n) .Polaris-DropZone__Container_13mbo:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-DropZone-FileUpload_1fbjx {
        align-items: center;
        display: flex;
        height: 100%;
        justify-content: center;
        padding: var(--p-space-400);
        text-align: center
    }

    .Polaris-DropZone-FileUpload--large_2qh0r {
        padding: var(--p-space-800)
    }

    .Polaris-DropZone-FileUpload--small_2v637 {
        padding: 0.75rem
    }

    .Polaris-DropZone-FileUpload_1fbjx img {
        vertical-align: bottom
    }

    .Polaris-DropZone-FileUpload__Action_r96cs {
        -webkit-appearance: none;
        appearance: none;
        background: var(--p-color-bg-interactive-subdued);
        border: none;
        border-radius: 0.25rem;
        color: var(--p-color-text-emphasis);
        cursor: pointer;
        display: inline-flex;
        flex: 0 0 auto;
        font-size: var(--p-font-size-75);
        font-weight: var(--p-font-weight-semibold);
        line-height: 1;
        margin: 0;
        padding: 0.25rem 0.5rem;
        position: relative;
        text-align: center;
        text-decoration: none
    }

    .Polaris-DropZone-FileUpload__Action_r96cs:after {
        border-radius: 0.25rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    .Polaris-DropZone-FileUpload__Action_r96cs:hover {
        color: var(--p-color-text-emphasis-active)
    }

    .Polaris-DropZone-FileUpload__Action_r96cs.Polaris-DropZone-FileUpload--disabled_hcuh9 {
        background: var(--p-color-bg-disabled);
        border-color: var(--p-color-border-disabled);
        box-shadow: none;
        color: var(--p-color-text-disabled);
        cursor: not-allowed;
        transition: none
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone-FileUpload__Action_r96cs.Polaris-DropZone-FileUpload--disabled_hcuh9 {
        box-shadow: unset;
        color: var(--p-color-text-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone-FileUpload__Action_r96cs.Polaris-DropZone-FileUpload--disabled_hcuh9.Polaris-DropZone-FileUpload--disabled_hcuh9 {
        background-color: var(--p-color-bg-fill-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone-FileUpload__Action_r96cs.Polaris-DropZone-FileUpload--disabled_hcuh9 {
        background: #0000
    }

    .Polaris-DropZone-FileUpload__Action_r96cs.Polaris-DropZone-FileUpload--disabled_hcuh9 svg {
        fill: var(--p-color-icon-disabled)
    }

    html[class~=comp-summer-editons-2023] .Polaris-DropZone-FileUpload__Action_r96cs {
        background-color: var(--p-color-input-bg-surface);
        border-radius: 0.5rem;
        box-shadow: var(--p-shadow-button-experimental);
        color: #303030;
        padding: var(--p-space-150) 0.75rem
    }

    .Polaris-DropZone-FileUpload__ActionTitle_e3cta {
        color: var(--p-color-text-emphasis);
        text-decoration: none
    }

    .Polaris-DropZone-FileUpload__ActionTitle_e3cta:not(.Polaris-DropZone-FileUpload__ActionTitle--disabled_1fqj9) {
        cursor: pointer
    }

    .Polaris-DropZone-FileUpload__ActionTitle_e3cta:not(.Polaris-DropZone-FileUpload__ActionTitle--disabled_1fqj9):active,.Polaris-DropZone-FileUpload__ActionTitle_e3cta:not(.Polaris-DropZone-FileUpload__ActionTitle--disabled_1fqj9):hover {
        color: var(--p-color-text-emphasis-active);
        text-decoration: underline
    }

    .Polaris-DropZone-FileUpload__ActionTitle--focused_3671t {
        text-decoration: underline
    }

    .Polaris-DropZone-FileUpload__ActionTitle--disabled_1fqj9 {
        color: var(--p-color-text-interactive-disabled)
    }

    .Polaris-DropZone-FileUpload__UploadIcon_17xjj {
        fill: #4a4a4a
    }

    .Polaris-DropZone-FileUpload__UploadIcon_17xjj.Polaris-DropZone-FileUpload--disabled_hcuh9 {
        fill: var(--p-color-icon-disabled)
    }

    .Polaris-Thumbnail_15hj1 {
        --pc-thumbnail-extra-small-size: 1.5rem;
        --pc-thumbnail-small-size: 2.5rem;
        --pc-thumbnail-medium-size: 3.75rem;
        --pc-thumbnail-large-size: 5rem;
        background: var(--p-color-bg-surface);
        border: var(--p-border-width-025) solid var(--p-color-border-secondary);
        border-radius: 0.25rem;
        display: block;
        max-width: 100%;
        min-width: var(--pc-thumbnail-extra-small-size);
        overflow: hidden;
        position: relative
    }

    html[class~=comp-summer-editons-2023] .Polaris-Thumbnail_15hj1 {
        border: none;
        border-radius: 0.5rem
    }

    html[class~=comp-summer-editons-2023] .Polaris-Thumbnail_15hj1:after {
        border-radius: 0.5rem;
        bottom: 0;
        box-shadow: var(--p-shadow-border-inset-experimental);
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0
    }

    html[class~=comp-summer-editons-2023] .Polaris-Thumbnail_15hj1.Polaris-Thumbnail--sizeExtraSmall_1twbb,html[class~=comp-summer-editons-2023] .Polaris-Thumbnail_15hj1.Polaris-Thumbnail--sizeExtraSmall_1twbb:after {
        border-radius: var(--p-border-radius-150)
    }

    .Polaris-Thumbnail_15hj1:after,html[class~=comp-summer-editons-2023] .Polaris-Thumbnail_15hj1:before {
        content: "";
        display: block;
        padding-bottom: 100%
    }

    .Polaris-Thumbnail--sizeExtraSmall_1twbb {
        width: var(--pc-thumbnail-extra-small-size)
    }

    .Polaris-Thumbnail--sizeSmall_7647q {
        width: var(--pc-thumbnail-small-size)
    }

    .Polaris-Thumbnail--sizeMedium_5f35p {
        width: var(--pc-thumbnail-medium-size)
    }

    .Polaris-Thumbnail--sizeLarge_61dxo {
        width: var(--pc-thumbnail-large-size)
    }

    .Polaris-Thumbnail--transparent_19sk8 {
        background: #0000
    }

    .Polaris-Thumbnail_15hj1>* {
        bottom: 0;
        color: var(--p-color-icon-secondary);
        left: 0;
        margin: auto;
        max-height: 100%;
        max-width: 100%;
        position: absolute;
        right: 0;
        top: 0
    }

    .Polaris-Thumbnail_15hj1>* svg {
        fill: currentColor
    }

    .Polaris-LegacyTabs_qap71 {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 0
    }

    .Polaris-LegacyTabs--fitted_ijluy {
        flex-wrap: nowrap
    }

    .Polaris-LegacyTabs--fitted_ijluy .Polaris-LegacyTabs__TabContainer_dsj6d {
        flex: 1 1 100%
    }

    .Polaris-LegacyTabs--fitted_ijluy .Polaris-LegacyTabs__Title_2qj8j {
        padding: 0.5rem var(--p-space-400);
        width: 100%
    }

    .Polaris-LegacyTabs--fillSpace_yc42y .Polaris-LegacyTabs__TabContainer_dsj6d {
        flex: 1 1 auto
    }

    .Polaris-LegacyTabs__TabContainer_dsj6d {
        display: flex;
        margin: 0;
        padding: 0
    }

    .Polaris-LegacyTabs__Tab_375k2 {
        -webkit-appearance: none;
        appearance: none;
        background: none;
        border: none;
        color: inherit;
        color: #303030;
        cursor: pointer;
        font-size: inherit;
        justify-content: center;
        line-height: inherit;
        margin: 0;
        margin-bottom: calc(var(--p-space-025)*-1);
        margin-top: var(--p-space-025);
        min-width: 100%;
        outline: none;
        padding: 0;
        padding: 0.5rem 0.25rem;
        position: relative;
        text-align: center;
        text-decoration: none;
        white-space: nowrap;
        width: 100%
    }

    .Polaris-LegacyTabs__Tab_375k2:focus {
        outline: none
    }

    .Polaris-LegacyTabs__Tab_375k2:hover {
        text-decoration: none
    }

    .Polaris-LegacyTabs__Tab_375k2:hover .Polaris-LegacyTabs__Title_2qj8j {
        background-color: initial;
        color: #303030;
        font-weight: var(--p-font-weight-regular)
    }

    .Polaris-LegacyTabs__Tab_375k2:hover .Polaris-LegacyTabs__Title_2qj8j:before {
        background-color: var(--p-color-bg-fill-tertiary-hover)
    }

    html[class~=comp-summer-editons-2023] .Polaris-LegacyTabs__Tab_375k2:hover .Polaris-LegacyTabs__Title_2qj8j {
        color: #4a4a4a;
        font-weight: var(--p-font-weight-semibold)
    }

    .Polaris-LegacyTabs__Tab_375k2:active .Polaris-LegacyTabs__Title_2qj8j {
        background-color: initial
    }

    .Polaris-LegacyTabs__Tab_375k2:active .Polaris-LegacyTabs__Title_2qj8j:before {
        background: var(--p-color-bg-fill-tertiary-active)
    }

    .Polaris-LegacyTabs__Tab_375k2:focus-visible .Polaris-LegacyTabs__Title_2qj8j {
        color: #303030;
        font-weight: var(--p-font-weight-regular)
    }

    html[class~=comp-summer-editons-2023] .Polaris-LegacyTabs__Tab_375k2:focus-visible .Polaris-LegacyTabs__Title_2qj8j {
        color: #4a4a4a;
        font-weight: var(--p-font-weight-semibold)
    }

    .Polaris-LegacyTabs__Tab_375k2:focus-visible:not(:active) .Polaris-LegacyTabs__Title_2qj8j:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-LegacyTabs__Tab_375k2:visited {
        color: inherit
    }

    .Polaris-LegacyTabs__Tab--selected_11sap {
        color: #303030;
        font-weight: var(--p-font-weight-regular)
    }

    .Polaris-LegacyTabs__Tab--selected_11sap:focus .Polaris-LegacyTabs__Title_2qj8j {
        outline: var(--p-border-width-3) solid #0000
    }

    .Polaris-LegacyTabs__Tab--selected_11sap:focus .Polaris-LegacyTabs__Title_2qj8j:before {
        background: var(--p-color-bg-primary)
    }

    .Polaris-LegacyTabs__Tab--selected_11sap .Polaris-LegacyTabs__Title_2qj8j {
        color: #303030;
        outline: var(--p-border-width-3) solid #0000
    }

    .Polaris-LegacyTabs__Tab--selected_11sap .Polaris-LegacyTabs__Title_2qj8j:before {
        background: var(--p-color-bg-primary)
    }

    html[class~=comp-summer-editons-2023] .Polaris-LegacyTabs__Tab--selected_11sap .Polaris-LegacyTabs__Title_2qj8j {
        color: #4a4a4a
    }

    html[class~=comp-summer-editons-2023] .Polaris-LegacyTabs__Tab--selected_11sap {
        color: #4a4a4a;
        font-weight: var(--p-font-weight-semibold)
    }

    .Polaris-LegacyTabs__Title_2qj8j {
        border-radius: 0.25rem;
        color: var(--p-color-text-secondary);
        display: block;
        min-width: 3.125rem;
        padding: 0.5rem var(--p-space-400);
        position: relative
    }

    .Polaris-LegacyTabs__Title_2qj8j:after {
        border-radius: 0.25rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    .Polaris-LegacyTabs__Title_2qj8j:before {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        bottom: calc(0.5rem*-1);
        content: "";
        height: var(--p-border-width-3);
        left: 0;
        position: absolute;
        right: 0
    }

    html[class~=comp-summer-editons-2023] .Polaris-LegacyTabs__Title_2qj8j {
        color: #4a4a4a;
        font-weight: var(--p-font-weight-semibold);
        padding: var(--p-space-150) 0.75rem
    }

    .Polaris-LegacyTabs--titleWithIcon_11lkm {
        display: flex
    }

    .Polaris-LegacyTabs__Panel_2vct4 {
        display: block
    }

    .Polaris-LegacyTabs__Panel_2vct4:focus {
        outline: none
    }

    .Polaris-LegacyTabs__Panel--hidden_1h4kj {
        display: none
    }

    .Polaris-LegacyTabs__Item_yiyol {
        -webkit-appearance: none;
        appearance: none;
        background: none;
        border: none;
        border-radius: 0.25rem;
        color: inherit;
        cursor: pointer;
        display: block;
        font-size: inherit;
        line-height: inherit;
        margin: 0;
        min-height: 1rem;
        padding: 0;
        padding: .5rem var(--p-space-400);
        position: relative;
        text-align: left;
        text-decoration: none;
        width: 100%
    }

    .Polaris-LegacyTabs__Item_yiyol:focus {
        outline: none
    }

    .Polaris-LegacyTabs__Item_yiyol:after {
        border-radius: 0.25rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    .Polaris-LegacyTabs__Item_yiyol::-moz-focus-inner {
        border: none
    }

    .Polaris-LegacyTabs__Item_yiyol:hover {
        background-color: #fafafa
    }

    .Polaris-LegacyTabs__Item_yiyol:active {
        background-color: var(--p-color-bg-primary-subdued-active)
    }

    .Polaris-LegacyTabs__Item_yiyol:focus-visible:not(:active):after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-LegacyTabs__Item_yiyol:visited {
        color: inherit
    }

    .Polaris-LegacyTabs__DisclosureTab_1qbhg {
        display: none
    }

    .Polaris-LegacyTabs__DisclosureTab--visible_1v5xr {
        display: flex
    }

    .Polaris-LegacyTabs__DisclosureActivator_1mita {
        background-color: initial;
        border: none;
        cursor: pointer;
        height: 100%;
        margin: var(--p-space-025) var(--p-space-025) calc(var(--p-space-025)*-1) 0;
        outline: none;
        position: relative
    }

    .Polaris-LegacyTabs__DisclosureActivator_1mita:after {
        border-radius: 0.25rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    .Polaris-LegacyTabs__DisclosureActivator_1mita:focus svg,.Polaris-LegacyTabs__DisclosureActivator_1mita:hover svg {
        fill: #4a4a4a
    }

    .Polaris-LegacyTabs__DisclosureActivator_1mita:focus-visible .Polaris-LegacyTabs__Title_2qj8j:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-LegacyTabs__DisclosureActivator_1mita:hover .Polaris-LegacyTabs__Title_2qj8j:before {
        background-color: var(--p-color-border-hover)
    }

    .Polaris-LegacyTabs__TabMeasurer_1aget {
        display: flex;
        height: 0;
        visibility: hidden
    }

    .Online-Store-UI-BottomSheet_19bj4 {
        align-items: center;
        bottom: 0;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        left: 0;
        pointer-events: none;
        position: fixed;
        right: 0;
        top: 0;
        z-index: 110
    }

    .Online-Store-UI-BottomSheet_19bj4.Online-Store-UI-BottomSheet--isModal_17o3h {
        pointer-events: all;
        z-index: 120
    }

    .Online-Store-UI-BottomSheet_19bj4.Online-Store-UI-BottomSheet--isModal_17o3h:not(.Online-Store-UI-BottomSheet--expanded_12117) {
        pointer-events: none
    }

    .Online-Store-UI-BottomSheet__BottomSheetInterior_15ja6 {
        height: var(--osui_max-height-bottom-sheet);
        max-width: var(--osui_breakpoint-phablet);
        position: relative;
        width: 100%
    }

    .Online-Store-UI-BottomSheet__BottomSheetInterior_15ja6.Online-Store-UI-BottomSheet--isModal_17o3h {
        z-index: var(--p-z-index-11)
    }

    .Online-Store-UI-BottomSheet--paddingExtraTight_1hvj6 {
        --osui_bottom-sheet-header-padding-horizontal: 0.25rem
    }

    .Online-Store-UI-BottomSheet--paddingTight_1qbjg {
        --osui_bottom-sheet-header-padding-horizontal: 0.5rem
    }

    .Online-Store-UI-BottomSheet--paddingBaseTight_ke9ex {
        --osui_bottom-sheet-header-padding-horizontal: 0.75rem
    }

    .Online-Store-UI-BottomSheet--paddingBase_bpzq1 {
        --osui_bottom-sheet-header-padding-horizontal: var(--p-space-400)
    }

    .Online-Store-UI-BottomSheet--paddingLoose_1wu3p {
        --osui_bottom-sheet-header-padding-horizontal: var(--p-space-500)
    }

    .Online-Store-UI-BottomSheet--paddingExtraLoose_12m2k {
        --osui_bottom-sheet-header-padding-horizontal: var(--p-space-800)
    }

    .Online-Store-UI-Frame__GenericFrame_15o4m,.Online-Store-UI-Frame_m83gz {
        background-color: var(--osui_color-frame-bg)
    }

    .Online-Store-UI-Frame_m83gz {
        display: grid;
        grid-template-areas: "header" "main" "children" "primary-aux-sidebar" "primary-sidebar" "secondary-sidebar" "footer";
        grid-template-columns: 100%;
        grid-template-rows: auto 1fr auto auto;
        height: 100vh;
        max-width: 100%;
        min-width: 0;
        overflow: hidden;
        width: 100vw
    }

    @supports (-webkit-touch-callout:none) {
        .Online-Store-UI-Frame_m83gz {
            height: -webkit-fill-available
        }
    }

    @media (min-width: 41.6875em) {
        .Online-Store-UI-Frame_m83gz {
            grid-template-areas:"header header header header" "primary-aux-sidebar primary-sidebar main secondary-sidebar" "primary-aux-sidebar primary-sidebar children secondary-sidebar" "footer footer footer footer";
            grid-template-columns: minmax(0,auto) minmax(0,auto) 1fr minmax(0,auto)
        }
    }

    .Online-Store-UI-Frame--experimental_18i7e {
        --osui_color-panel-bg: var(--p-color-bg-app)
    }

    .Online-Store-UI-Frame--dragging_rtvxx {
        cursor: grabbing;
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-Frame--slimHeader_1m9qm {
        --osui_height-frame-header: 2.75rem
    }

    .Online-Store-UI-Frame__ChildrenArea_nqzbk {
        grid-area: children;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-DraggableRegion_1g8ny {
        --osui_border-radius-bottomsheet: var(--p-space-400);
        background: var(--p-color-bg-surface);
        bottom: calc(var(--osui_max-height-bottom-sheet)*-1 + var(--osui_height-bottom-sheet-collapsed-drag-handle));
        display: grid;
        grid-template-areas: "header" "children";
        grid-template-columns: 100%;
        grid-template-rows: auto 1fr;
        height: var(--osui_max-height-bottom-sheet);
        pointer-events: all;
        transform: translate3d(0,var(--osui_translate-y-bottom-sheet-draggable-region),0);
        transition: transform .15s ease-out 0s
    }

    .Online-Store-UI-DraggableRegion_1g8ny,.Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--hasBackgroundSheet_1gr68:before {
        border-radius: var(--osui_border-radius-bottomsheet) var(--osui_border-radius-bottomsheet) 0 0;
        box-shadow: var(--osui_box-shadow-bottom-sheet);
        position: absolute;
        width: 100%
    }

    .Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--hasBackgroundSheet_1gr68:before {
        --osui_min-height-bottom-sheet-background-sheet: 1.625rem;
        --osui_height-bottom-sheet-background-sheet-overlap: calc(var(--osui_border-radius-bottomsheet) + var(--p-space-050));
        align-items: center;
        background: var(--p-color-bg-interactive);
        bottom: calc(100% - var(--osui_height-bottom-sheet-background-sheet-overlap));
        color: var(--p-color-bg-surface);
        content: var(--osui_content-bottom-sheet-background-sheet-content);
        display: flex;
        font-size: .6875rem;
        font-weight: 500;
        justify-content: center;
        line-height: var(--p-font-line-height-2);
        min-height: calc(var(--osui_min-height-bottom-sheet-background-sheet) + var(--osui_height-bottom-sheet-background-sheet-overlap));
        padding-bottom: var(--osui_height-bottom-sheet-background-sheet-overlap);
        text-align: center;
        z-index: -1
    }

    .Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--hasBackgroundSheet_1gr68.Online-Store-UI-DraggableRegion--showBackgroundSheet_10639:before {
        transform: translateZ(0);
        transition: transform .15s ease-out 0s
    }

    .Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--hasBackgroundSheet_1gr68:not(.Online-Store-UI-DraggableRegion--showBackgroundSheet_10639):before {
        transform: translate3d(0,100%,0);
        transition: transform .15s ease-out 0s
    }

    .Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--fullCollapse_1ngx0 {
        --osui_height-bottom-sheet-collapsed-drag-handle: 0
    }

    .Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--dragging_1hqeh {
        transition: none
    }

    .Online-Store-UI-DraggableRegion_1g8ny.Online-Store-UI-DraggableRegion--expanded_1vpb9 {
        --osui_height-bottom-sheet-collapsed-drag-handle: var( --osui_height-bottom-sheet-header );
        transform: translate3d(0,calc((var(--osui_translate-height-bottom-sheet) - var(--osui_height-bottom-sheet-header))*-1 + var(--osui_translate-y-bottom-sheet-draggable-region)),0)
    }

    .Online-Store-UI-DraggableRegion__DragHandle_vqzym {
        align-items: flex-start;
        background: inherit;
        border-radius: var(--osui_border-radius-bottomsheet) var(--osui_border-radius-bottomsheet) 0 0;
        display: flex;
        grid-area: header;
        height: var(--osui_height-bottom-sheet-header);
        padding-top: var(--p-space-050);
        touch-action: none;
        width: 100%
    }

    .Online-Store-UI-DraggableRegion__DragHandle_vqzym.Online-Store-UI-DraggableRegion--reducedHeightDragHandle_1i6ha {
        --osui_height-bottom-sheet-header: rem(2.75rem)
    }

    .Online-Store-UI-DraggableRegion__Content_fpydn {
        --osui_translate-y-bottom-sheet-draggable-region: initial;
        grid-area: children;
        height: 100%;
        overflow-y: scroll;
        position: relative;
        width: 100%
    }

    .Online-Store-UI-DraggableRegion__ContentInterior_1d275 {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%
    }

    .Online-Store-UI-DraggableRegion--isModal_szc4e.Online-Store-UI-DraggableRegion--exiting_a84te {
        transform: translate3d(0,var(--osui_height-bottom-sheet-header),0)
    }

    .Online-Store-UI-HeaderArea_1viwe {
        grid-area: header;
        position: relative;
        width: 100%;
        z-index: 50
    }

    .Online-Store-UI-Header_7t4pf {
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        height: 100%;
        width: 100%
    }

    .Online-Store-UI-Header__Interior_7q0mc {
        display: grid;
        grid-template-areas: "secondary middle primary";
        grid-template-columns: minmax(6.25rem,1fr) minmax(0,2fr) minmax(6.25rem,1fr);
        height: 100%;
        padding-left: var(--osui_bottom-sheet-header-padding-horizontal);
        padding-right: var(--osui_bottom-sheet-header-padding-horizontal);
        position: relative
    }

    .Online-Store-UI-Header__SecondaryAction_1062b {
        grid-area: secondary
    }

    html[class~=comp-summer-editons-2023] .Online-Store-UI-Header__SecondaryAction_1062b {
        display: grid;
        grid-template-areas: "drag-icon-offset" "secondary-action";
        grid-template-rows: 1.125rem 1fr
    }

    html[class~=comp-summer-editons-2023] .Online-Store-UI-Header__SecondaryAction_1062b button {
        grid-area: secondary-action;
        min-height: 2.75rem;
        min-width: 2.75rem
    }

    .Online-Store-UI-Header__PrimaryAction_bkofz {
        grid-area: primary
    }

    .Online-Store-UI-Header__PrimaryActionGroup_p7s67 {
        display: grid;
        grid-area: primary;
        grid-template-areas: "drag-icon-offset" "primary-action-group";
        grid-template-rows: 1.125rem 1fr
    }

    .Online-Store-UI-Header__PrimaryActionGroupWrapper_st8t8 {
        display: flex;
        grid-area: primary-action-group;
        justify-content: flex-end
    }

    .Online-Store-UI-Header__PrimaryActionGroupWrapper_st8t8 button {
        min-height: 2.75rem;
        min-width: 2.75rem
    }

    .Online-Store-UI-Header__MiddleAction_1w6v0 {
        grid-area: middle
    }

    .Online-Store-UI-Header__MiddleAction_1w6v0 button {
        -webkit-appearance: none;
        appearance: none;
        background: none;
        border: none;
        color: inherit;
        cursor: pointer;
        display: grid;
        font-size: inherit;
        grid-template-areas: "drag-icon" "title";
        grid-template-rows: 1.125rem 1fr;
        height: 100%;
        line-height: inherit;
        margin: 0;
        min-height: 2.75rem;
        padding: 0;
        width: 100%
    }

    .Online-Store-UI-Header__MiddleAction_1w6v0 button:focus {
        outline: none
    }

    .Online-Store-UI-Header__MiddleAction_1w6v0 button:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .Online-Store-UI-Header__DragHandleIcon_q6o6e {
        align-items: center;
        grid-area: drag-icon;
        opacity: .6
    }

    .Online-Store-UI-Header__DragHandleIcon_q6o6e svg {
        fill: var(--p-color-icon-disabled)
    }

    .Online-Store-UI-Header__Title_1q91l {
        align-items: center;
        display: flex;
        flex-direction: column;
        grid-area: title;
        height: 100%;
        justify-content: center;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-Header__SubtitleWrapper_bm56s,.Online-Store-UI-Header__TitleWrapper_2g140 {
        display: grid;
        grid-template-columns: 1fr auto 1fr
    }

    .Online-Store-UI-Header__SubtitlePrefixWrapper_yf2vj,.Online-Store-UI-Header__SubtitleSuffixWrapper_glew3,.Online-Store-UI-Header__TitlePrefixWrapper_17ib2 {
        display: flex;
        justify-content: right
    }

    .Online-Store-UI-Header__TitlePrefixWrapper_17ib2 {
        padding-right: 0.25rem
    }

    .Online-Store-UI-Header__SubtitlePrefixWrapper_yf2vj,.Online-Store-UI-Header__SubtitleSuffixWrapper_glew3 {
        height: 1rem
    }

    .Online-Store-UI-Header__SuffixWrapper_1wqj3 {
        display: flex;
        justify-content: left;
        padding-left: 0.25rem
    }

    .Online-Store-UI-Header__SubtitleWrapper_bm56s {
        margin-top: calc(var(--p-space-050)*-1)
    }

    .Online-Store-UI-Header__Button_1p5g3 {
        background: inherit;
        border: none;
        display: grid;
        grid-template-areas: "." "content";
        grid-template-rows: 1.125rem 1fr;
        height: 100%;
        padding: 0;
        width: 100%
    }

    .Online-Store-UI-Header__Button_1p5g3:disabled,.Online-Store-UI-Header__Button_1p5g3[aria-disabled=true] {
        color: var(--p-color-text-disabled);
        pointer-events: none;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-Header__Button_1p5g3:disabled svg,.Online-Store-UI-Header__Button_1p5g3[aria-disabled=true] svg {
        fill: var(--p-color-text-disabled)
    }

    .Online-Store-UI-Header__Button_1p5g3:hover {
        color: var(--p-color-bg-primary-hover)
    }

    .Online-Store-UI-Header__Button_1p5g3.Online-Store-UI-Header--semibold_166o1 {
        font-weight: var(--p-font-weight-semibold)
    }

    .Online-Store-UI-Header__Button_1p5g3.Online-Store-UI-Header--alignRight_4f2zu {
        justify-content: flex-end;
        text-align: right
    }

    .Online-Store-UI-Header__ButtonContentWrapper_raehh {
        align-items: center;
        display: flex;
        grid-area: content;
        height: 100%;
        max-width: 100%;
        min-width: 0;
        width: 100%
    }

    .Online-Store-UI-Header__ButtonContentWrapper_raehh.Online-Store-UI-Header--hasPrefix_cwbe1 {
        margin-left: calc(0.5rem*-1)
    }

    .Online-Store-UI-Header__ButtonContentWrapper_raehh .Online-Store-UI-Header__Prefix_1n7pn svg {
        fill: #4a4a4a
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Header__ButtonContentWrapper_raehh .Online-Store-UI-Header__Prefix_1n7pn svg {
        fill: #4a4a4a
    }

    .Online-Store-UI-Header__ButtonContentWrapper_raehh .Online-Store-UI-Header__Content_1phrr {
        color: #303030;
        font-size: var(--p-font-size-200);
        line-height: var(--p-font-line-height-2);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Header__ButtonContentWrapper_raehh .Online-Store-UI-Header__Content_1phrr {
        color: #4a4a4a
    }

    .Online-Store-UI-Header__ButtonContentWrapper_raehh .Online-Store-UI-Header__LoadingSpinner_axhxp {
        line-height: 0
    }

    .Online-Store-UI-Header__PrimaryAndMoreActions_15577 {
        display: grid;
        gap: var(--p-space-400);
        grid-area: primary;
        grid-template-columns: 1fr auto
    }

    .Online-Store-UI-FooterArea_5b0fl {
        grid-area: footer;
        height: var(--osui_height-frame-footer);
        position: relative;
        z-index: 70
    }

    :root {
        --osui-align-bottom-sheet-header: flex-start;
        --osui_box-shadow-bottom-sheet: 0 -0.0625rem 0.5rem #0000000f;
        --osui_height-bottom-sheet-header: 4rem;
        --osui_height-bottom-sheet-collapsed-drag-handle: 4rem;
        --osui_translate-y-bottom-sheet-draggable-region: 0
    }

    .Online-Store-UI-DroppableRegion__Droppable_1ickc {
        bottom: 0;
        height: var(--osui_max-droppable-height-bottom-sheet);
        position: absolute;
        width: 100%
    }

    .Online-Store-UI-DroppableRegion__DroppableInterior_9s3qg {
        height: 100%;
        position: relative;
        width: 100%
    }

    .Online-Store-UI-DroppableRegion__DroppableBottom_1lurq,.Online-Store-UI-DroppableRegion__DroppableMid_11xpm,.Online-Store-UI-DroppableRegion__DroppableTop_1whaj {
        left: 0;
        position: absolute;
        right: 0;
        width: 100%
    }

    .Online-Store-UI-DroppableRegion__DroppableBottom_1lurq {
        bottom: 0;
        height: 33.33%
    }

    .Online-Store-UI-DroppableRegion__DroppableMid_11xpm {
        bottom: 33.33%;
        height: 33.33%
    }

    .Online-Store-UI-DroppableRegion__DroppableTop_1whaj {
        bottom: 66.66%;
        height: 33.33%
    }

    .Online-Store-UI-StaticPanel_1hinh {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 20
    }

    .Online-Store-UI-StaticPanel--suspend_1qx89 {
        opacity: 0;
        pointer-events: none;
        visibility: hidden
    }

    .Online-Store-UI-StaticPanel__ChildrenWrapper_1a4a2 {
        background-color: var(--osui_color-frame-surface-bg);
        display: flex;
        flex-direction: column;
        height: 100%
    }

    .Online-Store-UI-Shelf_gw0wa {
        position: relative;
        z-index: 3
    }

    .Online-Store-UI-Layout_bgs4h {
        --osui_sidebar-action-offset: 0.25rem;
        display: flex;
        flex: 0 0 auto;
        flex-direction: column
    }

    .Online-Store-UI-Layout_bgs4h>.Online-Store-UI-Layout_bgs4h.Online-Store-UI-Layout--sticky_hznz0 {
        position: sticky;
        z-index: 5
    }

    .Online-Store-UI-Layout_bgs4h>.Online-Store-UI-Layout_bgs4h.Online-Store-UI-Layout--sticky_hznz0:first-child {
        top: 0
    }

    .Online-Store-UI-Layout_bgs4h>.Online-Store-UI-Layout_bgs4h.Online-Store-UI-Layout--sticky_hznz0:last-child {
        bottom: var(--p-border-width-025);
        margin-top: auto;
        padding-top: 0
    }

    .Online-Store-UI-Layout--spaceBefore_k05b1 {
        padding-top: var(--osui_static-panel-layout-spacing)
    }

    .Online-Store-UI-Layout--spaceAfter_xcq3o {
        padding-bottom: var(--osui_static-panel-layout-spacing)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Layout--sticky_hznz0:first-child:after {
        bottom: 0;
        box-shadow: 0 .125rem .1875rem 0 #3f3f4426;
        content: "";
        height: 100%;
        left: 0;
        opacity: var(--osui-static-panel-shadow-opacity,0);
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
        transition: opacity .25s ease;
        width: 100%
    }

    .Online-Store-UI-Layout--sticky_hznz0:first-child.Online-Store-UI-Layout--isStuck_100s9 {
        border-bottom: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Layout--sticky_hznz0:first-child.Online-Store-UI-Layout--isStuck_100s9 {
        --osui-static-panel-shadow-opacity: 1;
        border-bottom: none
    }

    .Online-Store-UI-Layout--sticky_hznz0:last-child {
        border-top: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Online-Store-UI-Layout--sticky_hznz0 .layout-children-wrapper {
        background-color: var(--p-color-bg-surface)
    }

    .Online-Store-UI-Layout--fullHeight_39bg7 {
        flex: 1 1 auto
    }

    .Online-Store-UI-Layout--scrollable_1w4yi {
        -webkit-overflow-scrolling: touch;
        height: 100%;
        overflow-y: scroll
    }

    @media (max-width: 41.6775em) {
        .Online-Store-UI-Layout--scrollable_1w4yi {
            overflow-x:hidden
        }
    }

    .Online-Store-UI-Layout--layoutSpacingNone_1rwza,.layout-section--spacing-default:first-of-type,.layout-section--spacing-default:only-child,.Online-Store-UI-Layout--sectionSpacingNone_xxlv0 {
        --osui_static-panel-layout-spacing: var(--p-space-0)
    }

    .Online-Store-UI-Layout--layoutSpacingExtraTight_kxosd,.Online-Store-UI-Layout--sectionSpacingExtraTight_orgi1 {
        --osui_static-panel-layout-spacing: 0.25rem
    }

    .Online-Store-UI-Layout--layoutSpacingTight_1ad42,.layout-section--spacing-tight {
        --osui_static-panel-layout-spacing: 0.5rem
    }

    .Online-Store-UI-Layout--layoutSpacingBaseTight_6ztpp,.Online-Store-UI-Layout--sectionSpacingBaseTight_q4ic4 {
        --osui_static-panel-layout-spacing: 0.75rem
    }

    .Online-Store-UI-Layout--layoutSpacingBase_1nu1i,.Online-Store-UI-Layout--layoutSpacingDefault_1sn8h,.Online-Store-UI-Layout--sectionSpacingBase_1hi45 {
        --osui_static-panel-layout-spacing: var(--p-space-400)
    }

    .Online-Store-UI-Layout--layoutSpacingLoose_t5gox,.Online-Store-UI-Layout--sectionSpacingLoose_ibok8 {
        --osui_static-panel-layout-spacing: var(--p-space-500)
    }

    .Online-Store-UI-Layout--layoutSpacingExtraLoose_1ikfo,.Online-Store-UI-Layout--sectionSpacingExtraLoose_142a8 {
        --osui_static-panel-layout-spacing: var(--p-space-800)
    }

    .Online-Store-UI-Layout--dividerBefore_17rcp {
        border-top: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Online-Store-UI-Layout--dividerAfter_ikg4l {
        border-bottom: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Online-Store-UI-Layout--divided_1yadn>.layout-section:before,.Online-Store-UI-Layout--divider_17hxs:before {
        background-color: var(--p-color-border-secondary);
        content: "";
        display: block;
        height: var(--p-border-width-025);
        margin-bottom: var(--osui_static-panel-layout-spacing);
        margin-left: var(--osui_static-panel-section-padding,var(--p-space-400));
        width: 100%;
        width: calc(100% - var(--osui_static-panel-section-padding, var(--p-space-400))*2)
    }

    .Online-Store-UI-Layout--dividerFull_tvp2j:before {
        background-color: var(--p-color-border-secondary);
        content: "";
        display: block;
        height: var(--p-border-width-025);
        margin-bottom: var(--osui_static-panel-layout-spacing);
        width: 100%
    }

    .Online-Store-UI-Layout--divided_1yadn>.Online-Store-UI-Layout--dividerFull_tvp2j:before {
        margin-left: 0;
        width: 100%
    }

    .Online-Store-UI-Layout--alignToBottom_2ppm0:not(.Online-Store-UI-Layout--divider_17hxs):before,.Online-Store-UI-Layout--divided_1yadn.Online-Store-UI-Layout--layoutSpacingNone_1rwza .layout-section--spacing-default:before,.Online-Store-UI-Layout--divided_1yadn.Online-Store-UI-Layout--layoutSpacingNone_1rwza .Online-Store-UI-Layout--sectionSpacingNone_xxlv0:before,.Online-Store-UI-Layout--divided_1yadn>.Online-Store-UI-Layout--dividerHide_90ynz:before,.Online-Store-UI-Layout--divided_1yadn>.layout-section:first-of-type:before,.Online-Store-UI-Layout--divided_1yadn>.layout-section:only-child:before,.Online-Store-UI-Layout--dividerHide_90ynz:before,.Online-Store-UI-Layout--divider_17hxs.Online-Store-UI-Layout--sectionSpacingNone_xxlv0:before,.Online-Store-UI-Layout--divider_17hxs:first-of-type:before,.Online-Store-UI-Layout--divider_17hxs:only-child:before {
        content: none
    }

    .layout-section {
        padding-top: var(--osui_static-panel-layout-spacing);
        position: relative;
        width: 100%;
        z-index: 2
    }

    .layout-section.Online-Store-UI-Layout--sticky_hznz0 {
        position: sticky;
        z-index: 5
    }

    .layout-section.Online-Store-UI-Layout--sticky_hznz0:first-child {
        top: 0
    }

    .layout-section.Online-Store-UI-Layout--sticky_hznz0:last-child {
        border-top: none;
        bottom: var(--p-border-width-025);
        margin-top: auto;
        padding-top: 0
    }

    .layout-section.Online-Store-UI-Layout--sticky_hznz0:last-child:before {
        border-bottom: var(--p-border-width-025) solid var(--p-color-border-secondary);
        content: "";
        display: block;
        height: var(--osui_static-panel-layout-spacing)
    }

    .Online-Store-UI-Layout--alignToActionBar_1hppi {
        padding-top: 0.5rem
    }

    @media (max-width: 100.865em) {
        .Online-Store-UI-Layout--alignToActionBar_1hppi {
            padding-top:0.5rem
        }
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Layout--alignToActionBar_1hppi {
        padding-top: var(--p-space-600)
    }

    @media (max-width: 100.865em) {
        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Layout--alignToActionBar_1hppi {
            padding-top:0.75rem
        }
    }

    .Online-Store-UI-Layout--alignToBottom_2ppm0 {
        --osui_static-panel-layout-spacing: var(--p-space-1600);
        margin-top: auto
    }

    .Online-Store-UI-Layout--alignToBottom_2ppm0:before,.Online-Store-UI-Layout--divided_1yadn>.Online-Store-UI-Layout--alignToBottom_2ppm0:before {
        margin-bottom: var(--p-space-400)
    }

    .layout-children-wrapper {
        padding-left: var(--osui_static-panel-section-padding);
        padding-right: var(--osui_static-panel-section-padding)
    }

    .Online-Store-UI-Layout--paddingNone_1og3e {
        --osui_static-panel-section-padding: var(--p-space-0)
    }

    .layout--padding-extra-tight {
        --osui_static-panel-section-padding: 0.25rem
    }

    .Online-Store-UI-Layout--paddingTight_19c8v {
        --osui_static-panel-section-padding: 0.5rem
    }

    .Online-Store-UI-Layout--paddingBaseTight_1h9h0 {
        --osui_static-panel-section-padding: 0.75rem
    }

    .Online-Store-UI-Layout--paddingBase_vlmqd {
        --osui_static-panel-section-padding: var(--p-space-400)
    }

    .Online-Store-UI-Layout--paddingLoose_hojxa {
        --osui_static-panel-section-padding: var(--p-space-500)
    }

    .Online-Store-UI-Layout--paddingExtraLoose_6zx2p {
        --osui_static-panel-section-padding: var(--p-space-800)
    }

    .Online-Store-UI-Footer_sopbk {
        position: relative
    }

    .Online-Store-UI-Footer__ChildrenWrapper_ic5ip {
        position: relative;
        z-index: 4
    }

    .Online-Store-UI-Footer__ChildrenWrapper_ic5ip:not(:only-child):last-child:before {
        background-color: var(--p-color-border-secondary);
        content: "";
        display: block;
        height: var(--p-border-width-025);
        margin-bottom: var(--osui_static-panel-layout-spacing);
        margin-bottom: 0;
        width: 100%
    }

    .Online-Store-UI-Actions_162ja {
        align-items: center;
        display: flex;
        justify-content: space-between;
        padding: 0.5rem
    }

    .Online-Store-UI-Actions--offsetLeft_1xm4v {
        margin-left: calc(0.5rem*-1)
    }

    .Online-Store-UI-Actions--offsetRight_9e8im {
        margin-right: calc(0.5rem*-1)
    }

    .Online-Store-UI-Actions--offsetBoth_1yx06 {
        margin-left: calc(0.5rem*-1);
        margin-right: calc(0.5rem*-1)
    }

    .Online-Store-UI-Actions__ActionsWrapper_1l8ca,.Online-Store-UI-Actions__ChildrenWrapper_1re3h {
        align-items: center;
        display: flex
    }

    .Online-Store-UI-Actions__ChildrenWrapper_1re3h {
        flex: 0 1 auto;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-Actions__ActionsWrapper_1l8ca {
        flex: 0 0 auto;
        margin-left: auto
    }

    .Online-Store-UI-Actions__ChildrenWrapper_1re3h+.Online-Store-UI-Actions__ActionsWrapper_1l8ca {
        margin-left: var(--p-space-400)
    }

    .Online-Store-UI-Actions__PrimaryActionWrapper_18ycg,.Online-Store-UI-Actions__SecondaryActionsWrapper_16aeo {
        flex: 0 0 auto;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-Actions__SecondaryActionsWrapper_16aeo+.Online-Store-UI-Actions__PrimaryActionWrapper_18ycg {
        margin-left: 0.5rem
    }

    .Online-Store-UI-Info_1w192 {
        color: var(--p-color-text-secondary);
        font-size: calc(var(--p-font-size-75) + .0625rem);
        font-weight: 400;
        line-height: var(--p-font-line-height-2);
        padding: 0.75rem
    }

    @media (min-width: 48em) {
        .Online-Store-UI-Info_1w192 {
            font-size:var(--p-font-size-75);
            line-height: var(--p-font-line-height-1)
        }
    }

    .Online-Store-UI-Info_1w192 a,.Online-Store-UI-Info_1w192 button {
        color: var(--p-color-text-secondary);
        text-decoration: underline;
        transition: color 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    @media (hover: hover) and (pointer:fine) {
        .Online-Store-UI-Info_1w192 a:hover,.Online-Store-UI-Info_1w192 button:hover {
            color:var(--p-color-icon-active)
        }
    }

    .Online-Store-UI-Info_1w192 a:active,.Online-Store-UI-Info_1w192 button:active {
        color: var(--p-color-text-secondary)
    }

    @media (max-width: 41.6775em) {
        .Online-Store-UI-Info_1w192 {
            font-size:.875rem
        }
    }

    .Online-Store-UI-Preview_13jat {
        outline: none
    }

    .Online-Store-UI-ResourceAction__ResourceActionWrapper_1hjnj {
        --osui_resource-action-height: 4rem;
        --osui_resource-action-background-color: var(--p-color-bg-surface);
        max-width: 100%;
        min-width: 0;
        position: relative
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-ResourceAction__ResourceActionWrapper_1hjnj {
        --osui_radius-sidebar-children: var(--osui_radius-sidebar-children-legacy)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-ResourceAction__ResourceActionWrapper_1hjnj.Online-Store-UI-ResourceAction--hasDragHandle_1a72e .Online-Store-UI-ResourceAction__Actions_ibl4f {
        padding-right: calc(0.25rem*.5)
    }

    .Online-Store-UI-ResourceAction--sizeSmall_f9j5s {
        --osui_resource-action-height: 2.75rem
    }

    .Online-Store-UI-ResourceAction--sizeMedium_1q0b8 {
        --osui_resource-action-height: 3.625rem
    }

    .Online-Store-UI-ResourceAction--sizeLarge_14xjc {
        --osui_resource-action-height: 4rem
    }

    .Online-Store-UI-ResourceAction--hasControl_tetrp {
        background-color: var(--p-color-bg-surface);
        padding: 0 0.5rem
    }

    .Online-Store-UI-ResourceAction_ifww0 {
        --osui_width-resource-action-drag-handle: 2.125rem;
        align-items: center;
        background-color: var(--osui_resource-action-background-color);
        display: flex;
        height: var(--osui_resource-action-height);
        position: relative;
        transition-duration: var(--p-motion-duration-200);
        transition-property: color,background-color;
        transition-timing-function: cubic-bezier(0.25,0.1,0.25,1);
        width: 100%;
        z-index: 1
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-ResourceAction_ifww0 {
        --osui_width-resource-action-drag-handle: var( --osui_height-nav-action-legacy )
    }

    .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceSubdued_1iw7h,.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--disabled_1qyec {
        --osui_resource-action-background-color: var(--p-color-bg-disabled);
        background-color: var(--p-color-bg-disabled);
        color: var(--p-color-text-secondary)
    }

    .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk {
        --osui_resource-action-background-color: var(--p-color-bg-interactive-selected)
    }

    .Online-Store-UI-ResourceAction_ifww0:not(.Online-Store-UI-ResourceAction--fillContent_t9sf9) {
        padding-left: 0.75rem;
        padding-right: 0.75rem
    }

    .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--disabled_1qyec:not(.Online-Store-UI-ResourceAction--hasTooltip_6inwp) {
        pointer-events: none;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-ResourceAction--hasSecondaryAction_1ho4v:not(.Online-Store-UI-ResourceAction--hasDragHandle_1a72e) .Online-Store-UI-ResourceAction_ifww0 {
        padding-right: calc(0.25rem + 2rem + (2rem - 1.25rem)*.5)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-ResourceAction--hasSecondaryAction_1ho4v:not(.Online-Store-UI-ResourceAction--hasDragHandle_1a72e) .Online-Store-UI-ResourceAction_ifww0 {
        padding-right: calc(0.25rem + 2.75rem)
    }

    .Online-Store-UI-ResourceAction--hasDragHandle_1a72e:not(.Online-Store-UI-ResourceAction--hasSecondaryAction_1ho4v) .Online-Store-UI-ResourceAction_ifww0 {
        padding-right: calc(0.25rem + var(--osui_width-resource-action-drag-handle))
    }

    .Online-Store-UI-ResourceAction--hasSecondaryAction_1ho4v.Online-Store-UI-ResourceAction--hasDragHandle_1a72e .Online-Store-UI-ResourceAction_ifww0 {
        padding-right: calc(0.25rem + 2rem + var(--osui_width-resource-action-drag-handle))
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-ResourceAction--hasSecondaryAction_1ho4v.Online-Store-UI-ResourceAction--hasDragHandle_1a72e .Online-Store-UI-ResourceAction_ifww0 {
        padding-right: calc(0.25rem + 2.25rem + var(--osui_width-resource-action-drag-handle))
    }

    .Online-Store-UI-ResourceAction--hasControl_tetrp .Online-Store-UI-ResourceAction_ifww0 {
        border-radius: var(--osui_radius-sidebar-children)
    }

    .Online-Store-UI-ResourceAction--hasControl_tetrp .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--active_v9ajm {
        --osui_resource-action-background-color: var( --p-color-bg-interactive-selected )
    }

    .Online-Store-UI-ResourceAction--hasControl_tetrp .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--active_v9ajm:before {
        background-color: var(--p-color-bg-interactive);
        border-bottom-right-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        content: "";
        display: block;
        height: 100%;
        left: calc(0.5rem*-1);
        position: absolute;
        top: 0;
        width: var(--p-border-width-3)
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-ResourceAction--hasControl_tetrp .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--disabled_1qyec .Online-Store-UI-ResourceAction__Content_4y3bf {
            color: grayText
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .Online-Store-UI-ResourceAction--hasControl_tetrp .Online-Store-UI-ResourceAction_ifww0:hover {
            --osui_resource-action-background-color:#fafafa
        }

        .Online-Store-UI-ResourceAction--hasControl_tetrp .Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--active_v9ajm:hover {
            --osui_resource-action-background-color: var( --p-color-bg-interactive-subdued-hover )
        }
    }

    a.Online-Store-UI-ResourceAction_ifww0 {
        color: inherit;
        text-decoration: none
    }

    a.Online-Store-UI-ResourceAction_ifww0:visited {
        color: inherit
    }

    button.Online-Store-UI-ResourceAction_ifww0 {
        -webkit-appearance: none;
        appearance: none;
        background: none;
        background-color: var(--osui_resource-action-background-color);
        border: none;
        color: inherit;
        cursor: pointer;
        font-size: inherit;
        line-height: inherit;
        margin: 0;
        padding: 0;
        text-align: left
    }

    button.Online-Store-UI-ResourceAction_ifww0:focus {
        outline: none
    }

    a.Online-Store-UI-ResourceAction_ifww0,button.Online-Store-UI-ResourceAction_ifww0,label.Online-Store-UI-ResourceAction_ifww0 {
        outline: none;
        position: relative
    }

    a.Online-Store-UI-ResourceAction_ifww0:after,button.Online-Store-UI-ResourceAction_ifww0:after,label.Online-Store-UI-ResourceAction_ifww0:after {
        border-radius: calc(0.5rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    a.Online-Store-UI-ResourceAction_ifww0:focus:after,button.Online-Store-UI-ResourceAction_ifww0:focus:after,label.Online-Store-UI-ResourceAction_ifww0:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    a.Online-Store-UI-ResourceAction_ifww0:focus:not(:focus-visible):after,button.Online-Store-UI-ResourceAction_ifww0:focus:not(:focus-visible):after,label.Online-Store-UI-ResourceAction_ifww0:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        a.Online-Store-UI-ResourceAction_ifww0:focus:not(:focus-visible):after,button.Online-Store-UI-ResourceAction_ifww0:focus:not(:focus-visible):after,label.Online-Store-UI-ResourceAction_ifww0:focus:not(:focus-visible):after {
            outline: none
        }
    }

    a.Online-Store-UI-ResourceAction_ifww0:focus-visible:after,button.Online-Store-UI-ResourceAction_ifww0:focus-visible:after,label.Online-Store-UI-ResourceAction_ifww0:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    a.Online-Store-UI-ResourceAction_ifww0:after,button.Online-Store-UI-ResourceAction_ifww0:after,label.Online-Store-UI-ResourceAction_ifww0:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    html:not([class~=comp-summer-editons-2023]) a.Online-Store-UI-ResourceAction_ifww0:after,html:not([class~=comp-summer-editons-2023]) button.Online-Store-UI-ResourceAction_ifww0:after,html:not([class~=comp-summer-editons-2023]) label.Online-Store-UI-ResourceAction_ifww0:after {
        border-radius: var(--p-border-radius-050)
    }

    a.Online-Store-UI-ResourceAction_ifww0:focus-visible,button.Online-Store-UI-ResourceAction_ifww0:focus-visible,label.Online-Store-UI-ResourceAction_ifww0:focus-visible {
        --osui_resource-action-background-color: #fafafa
    }

    @media (hover: hover) and (pointer:fine) {
        a.Online-Store-UI-ResourceAction_ifww0:hover,button.Online-Store-UI-ResourceAction_ifww0:hover,label.Online-Store-UI-ResourceAction_ifww0:hover {
            --osui_resource-action-background-color:#fafafa
        }
    }

    a.Online-Store-UI-ResourceAction_ifww0:active,button.Online-Store-UI-ResourceAction_ifww0:active,label.Online-Store-UI-ResourceAction_ifww0:active {
        --osui_resource-action-background-color: var(--p-color-bg-active)
    }

    a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk:focus-visible,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk:focus-visible {
        --osui_resource-action-background-color: var(--p-color-text-on-color)
    }

    @media (hover: hover) and (pointer:fine) {
        a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk:hover,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk:hover {
            --osui_resource-action-background-color:var(--p-color-text-on-color)
        }
    }

    a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk:active,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk:active {
        --osui_resource-action-background-color: var(--p-color-bg-interactive-selected)
    }

    a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw {
        color: var(--p-color-text-emphasis)
    }

    a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw:focus-visible,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw:focus-visible {
        --osui_resource-action-background-color: var(--p-color-bg-interactive-selected)
    }

    @media (hover: hover) and (pointer:fine) {
        a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw:hover,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw:hover {
            --osui_resource-action-background-color:var(--p-color-bg-interactive-selected)
        }
    }

    a.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw:active,button.Online-Store-UI-ResourceAction_ifww0.Online-Store-UI-ResourceAction--appearanceCta_1wlnw:active {
        --osui_resource-action-background-color: var(--p-color-text-on-color)
    }

    label.Online-Store-UI-ResourceAction_ifww0 {
        cursor: pointer
    }

    label.Online-Store-UI-ResourceAction_ifww0:not(.Online-Store-UI-ResourceAction--disabled_1qyec):focus-within:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .Online-Store-UI-ResourceAction__Content_4y3bf,.Online-Store-UI-ResourceAction__Prefix_eebz0,.Online-Store-UI-ResourceAction__Suffix_eec37 {
        align-content: center;
        align-items: center;
        display: flex;
        height: var(--osui_resource-action-height);
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-ResourceAction__Prefix_eebz0,.Online-Store-UI-ResourceAction__Suffix_eec37 {
        flex: 0 0 auto;
        justify-content: center
    }

    .Online-Store-UI-ResourceAction__Prefix_eebz0>*,.Online-Store-UI-ResourceAction__Suffix_eec37>* {
        flex: 1 1 auto;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-ResourceAction__Prefix_eebz0 svg,.Online-Store-UI-ResourceAction__Suffix_eec37 svg {
        transition: fill var(--p-motion-duration-200) cubic-bezier(0.25,0.1,0.25,1)
    }

    .Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk .Online-Store-UI-ResourceAction__Prefix_eebz0 svg,.Online-Store-UI-ResourceAction--appearanceHighlight_1lxfk .Online-Store-UI-ResourceAction__Suffix_eec37 svg {
        fill: var(--p-color-icon-emphasis);
        color: var(--p-color-icon-on-color)
    }

    .Online-Store-UI-ResourceAction--appearanceSubdued_1iw7h .Online-Store-UI-ResourceAction__Prefix_eebz0 svg,.Online-Store-UI-ResourceAction--appearanceSubdued_1iw7h .Online-Store-UI-ResourceAction__Suffix_eec37 svg,.Online-Store-UI-ResourceAction--disabled_1qyec .Online-Store-UI-ResourceAction__Prefix_eebz0 svg,.Online-Store-UI-ResourceAction--disabled_1qyec .Online-Store-UI-ResourceAction__Suffix_eec37 svg {
        fill: var(--p-color-icon-secondary)
    }

    .Online-Store-UI-ResourceAction__Prefix_eebz0 {
        width: 2.5rem
    }

    .Online-Store-UI-ResourceAction__Suffix_eec37 {
        margin-left: 0.5rem
    }

    .Online-Store-UI-ResourceAction__Suffix_eec37 .Online-Store-UI-ResourceAction__TooltipSuffixIcon_btb8a:not(:only-child) {
        margin-left: 0.25rem
    }

    .Online-Store-UI-ResourceAction__ExternalIcon_1b21n {
        display: flex;
        margin-left: 0.25rem
    }

    .Online-Store-UI-ResourceAction__ExternalIcon_1b21n svg {
        fill: #4a4a4a
    }

    .Online-Store-UI-ResourceAction__TitleBadgeWrapper_uzs8r .Online-Store-UI-ResourceAction--emphasis_1tbw7+.Online-Store-UI-ResourceAction__ExternalIcon_1b21n {
        margin-left: 0.75rem
    }

    .Online-Store-UI-ResourceAction__Content_4y3bf {
        flex: 1 1 auto;
        flex-wrap: wrap
    }

    .Online-Store-UI-ResourceAction__Prefix_eebz0+.Online-Store-UI-ResourceAction__Content_4y3bf {
        margin-left: 0.75rem
    }

    .Online-Store-UI-ResourceAction__Overline_1izli,.Online-Store-UI-ResourceAction__Subtitle_1hxah,.Online-Store-UI-ResourceAction__TitleBadgeWrapper_uzs8r {
        flex: 1 1 100%;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-ResourceAction__TitleBadgeWrapper_uzs8r {
        align-items: center;
        display: flex
    }

    .Online-Store-UI-ResourceAction__Title_1eggg {
        flex: 0 1 auto;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-ResourceAction__Title_1eggg.Online-Store-UI-ResourceAction--emphasis_1tbw7 {
        max-width: calc(100% - var(--p-font-size-100)*.5 - .03125rem)
    }

    .Online-Store-UI-ResourceAction--truncate_1fxol {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .Online-Store-UI-ResourceAction--strongTitle_1lzeu {
        font-weight: 700
    }

    .Online-Store-UI-ResourceAction__BadgeWrapper_lyaqe {
        flex: 0 0 auto;
        height: 0;
        margin-top: calc(var(--p-border-width-050)*2*-1 - 1.125rem)
    }

    .Online-Store-UI-ResourceAction__Title_1eggg+.Online-Store-UI-ResourceAction__BadgeWrapper_lyaqe {
        margin-left: 0.5rem
    }

    .Online-Store-UI-ResourceAction__Overline_1izli {
        color: var(--p-color-text-secondary);
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .Online-Store-UI-ResourceAction__Subtitle_1hxah.Online-Store-UI-ResourceAction--string_wpxur {
        color: var(--p-color-text-secondary);
        font-size: calc(var(--p-font-size-75) + .0625rem);
        font-weight: 400;
        line-height: var(--p-font-line-height-2);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    @media (min-width: 48em) {
        .Online-Store-UI-ResourceAction__Subtitle_1hxah.Online-Store-UI-ResourceAction--string_wpxur {
            font-size:var(--p-font-size-75);
            line-height: var(--p-font-line-height-1)
        }
    }

    .Online-Store-UI-ResourceAction__Actions_ibl4f {
        display: flex;
        margin-top: calc((2rem)*-1*.5);
        min-height: 2rem;
        padding-right: calc((2rem - 1.25rem)*.5);
        position: absolute;
        right: 0;
        top: 50%;
        z-index: 2
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-ResourceAction__Actions_ibl4f {
        margin-top: -1.125rem;
        min-height: 2.25rem;
        padding-right: .5rem
    }

    .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7,.Online-Store-UI-ResourceAction__SecondaryAction_dfu80 {
        flex: 0 0 auto
    }

    .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7 {
        margin-bottom: calc((var(--osui_resource-action-height) - 2rem + 0.25rem)/2*-1);
        margin-left: calc(0.25rem*.5*-1);
        margin-top: calc((var(--osui_resource-action-height) - 2rem + 0.25rem)/2*-1)
    }

    @media (hover: hover) and (pointer:fine) {
        .Online-Store-UI-ResourceAction_ifww0:hover+.Online-Store-UI-ResourceAction__Actions_ibl4f .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7 svg {
            fill:var(--p-color-icon-active)
        }
    }

    .Online-Store-UI-ResourceAction_ifww0:active+.Online-Store-UI-ResourceAction__Actions_ibl4f .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7 {
        outline: var(--osui_high-contrast-outline)
    }

    .Online-Store-UI-ResourceAction_ifww0:active+.Online-Store-UI-ResourceAction__Actions_ibl4f .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7 svg {
        fill: #303030
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-ResourceAction_ifww0:active+.Online-Store-UI-ResourceAction__Actions_ibl4f .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7 svg {
            fill: #4a4a4a
        }
    }

    .Online-Store-UI-ResourceAction_ifww0:active+.Online-Store-UI-ResourceAction__Actions_ibl4f .Online-Store-UI-ResourceAction__DragHandleWrapper_cv5z7 button {
        animation: var(--osui_animation-name-drag-handle-pulse) calc(var(--p-motion-duration-400)*2) var(--p-motion-duration-500) ease-in-out alternate infinite
    }

    .Online-Store-UI-Control_12au0 {
        border: 0!important;
        clip-path: inset(50%)!important;
        height: .0625rem!important;
        height: 100%!important;
        left: 0;
        margin: 0!important;
        margin: 0;
        opacity: 0;
        overflow: hidden!important;
        overflow: visible;
        padding: 0!important;
        position: absolute!important;
        white-space: nowrap!important;
        width: .0625rem!important;
        width: 100%!important
    }

    .Online-Store-UI-ControlSpinner_110z4 {
        background-color: var(--p-color-bg-interactive-selected);
        border-radius: 50%;
        margin-top: calc(0.25rem*2*.5*-1 - .625rem);
        padding: 0.25rem;
        pointer-events: none;
        position: absolute;
        right: calc(0.5rem*.5 + 0.75rem - 0.25rem);
        top: 50%;
        transition: opacity var(--p-motion-duration-200) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 3
    }

    .Online-Store-UI-ControlSpinner_110z4,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--appearActive_jbd39,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--appearDone_gelgl,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--appear_16bt9,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--exitDone_15mp5 {
        display: none
    }

    .Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--enterActive_uptf8,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--enterDone_o6c7d,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--enter_vf2sy,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--exitActive_1a4mu,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--exit_18095 {
        display: block
    }

    .Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--enterActive_uptf8,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--enterDone_o6c7d,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--exit_18095 {
        opacity: 1
    }

    .Online-Store-UI-ControlSpinner_110z4,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--enter_vf2sy,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--exitActive_1a4mu,.Online-Store-UI-ControlSpinner_110z4.Online-Store-UI-ControlSpinner--exitDone_15mp5 {
        opacity: 0
    }

    .Online-Store-UI-ControlSpinner__LoadingIndicator_1lfv1 {
        height: 1.25rem;
        width: 1.25rem
    }

    .Online-Store-UI-NestedTooltip_f30w7 span[tabindex] {
        bottom: 0;
        left: 0;
        margin: auto;
        opacity: 0;
        outline: none;
        position: absolute;
        right: 0;
        top: 0
    }

    .Online-Store-UI-NestedTooltip_f30w7 span[tabindex]:focus {
        opacity: 1
    }

    .Online-Store-UI-NestedTooltip__FocusRing_9bw08 {
        height: 100%;
        pointer-events: none;
        position: relative;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none;
        width: 100%
    }

    .Online-Store-UI-NestedTooltip__FocusRing_9bw08:after {
        border-radius: calc(0.25rem + .0625rem);
        bottom: calc(var(--p-border-width-025)*-1 - .0625rem);
        box-shadow: 0 0 0 calc(var(--p-border-width-025)*-1 - .0625rem) var(--p-color-border-focus);
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: calc(var(--p-border-width-025)*-1 - .0625rem);
        outline: var(--osui_high-contrast-outline);
        pointer-events: none;
        position: absolute;
        right: calc(var(--p-border-width-025)*-1 - .0625rem);
        top: calc(var(--p-border-width-025)*-1 - .0625rem);
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    .Online-Store-UI-NestedTooltip--inset_usr7b:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-NestedTooltip--inset_usr7b:after {
        border-radius: var(--p-border-radius-050)
    }

    .Polaris-Truncate_4qxoo {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .Online-Store-UI-EmphasisMarker_1e37r {
        display: flex;
        max-width: 100%
    }

    .Online-Store-UI-EmphasisMarker_1e37r>* {
        flex: 0 0 auto;
        max-width: 100%;
        min-width: 0
    }

    .store-ul-resource-thumbnail {
        align-items: center;
        display: inline-flex;
        justify-content: center;
        vertical-align: middle
    }

    .store-ul-resource-thumbnail:not(.Online-Store-UI-ResourceThumbnail--typeImage_1if91) {
        position: relative
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr {
        background-color: var(--p-color-bg-surface-secondary);
        border-radius: var(--p-border-radius-100,calc(var(--p-border-radius-050) + .0625rem))
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr:before {
        border: var(--p-border-width-025) solid var(--p-color-border-secondary);
        border-radius: var(--p-border-radius-100,calc(var(--p-border-radius-050) + .0625rem));
        bottom: 0;
        content: "";
        display: block;
        left: 0;
        margin: auto;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr.Online-Store-UI-ResourceThumbnail--whiteBackground_1q9q1 {
        background-color: var(--p-color-bg-surface)
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr.Online-Store-UI-ResourceThumbnail--highlight_llir4 {
        background-color: var(--p-color-bg-surface-info)
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr.Online-Store-UI-ResourceThumbnail--highlight_llir4:before {
        border: var(--p-border-width-025) solid var(--p-color-border-info-subdued)
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr.Online-Store-UI-ResourceThumbnail--typeImage_1if91 {
        border: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr.Online-Store-UI-ResourceThumbnail--typeImage_1if91:before {
        border: none
    }

    .Online-Store-UI-ResourceThumbnail--framed_1y5vr.store-ul-resource-thumbnail--type-icon,.Online-Store-UI-ResourceThumbnail--framed_1y5vr.Online-Store-UI-ResourceThumbnail--typeThumbshot_632ua {
        height: var(--osui_size-resource-thumbnail);
        width: var(--osui_size-resource-thumbnail)
    }

    .Online-Store-UI-ResourceThumbnail--typeImage_1if91.Online-Store-UI-ResourceThumbnail--subdued_16k9b,.Online-Store-UI-ResourceThumbnail--typeThumbshot_632ua.Online-Store-UI-ResourceThumbnail--subdued_16k9b {
        background-color: var(--p-color-bg-disabled);
        opacity: .5
    }

    .Online-Store-UI-ResourceThumbnail__EditButton_1j3sk {
        bottom: 0.5rem;
        position: absolute;
        right: 0.5rem;
        z-index: 20
    }

    .Online-Store-UI-ThumbnailsGrid_16q4t {
        flex: 0 0 auto;
        height: 2.5rem;
        width: 2.5rem
    }

    .Online-Store-UI-ThumbnailsGrid--sizeTiny_mwakf.Online-Store-UI-ThumbnailsGrid--noPadding_p86q0 {
        height: 1rem;
        width: 1rem
    }

    .Online-Store-UI-ThumbnailsGrid--sizeTiny_mwakf:not(.Online-Store-UI-ThumbnailsGrid--noPadding_p86q0) {
        padding: .75rem
    }

    .Online-Store-UI-ThumbnailsGrid--sizeSmall_f7cuv.Online-Store-UI-ThumbnailsGrid--noPadding_p86q0 {
        height: 1.25rem;
        width: 1.25rem
    }

    .Online-Store-UI-ThumbnailsGrid--sizeSmall_f7cuv:not(.Online-Store-UI-ThumbnailsGrid--noPadding_p86q0) {
        padding: .625rem
    }

    .Online-Store-UI-ThumbnailsGrid--sizeMedium_19pwx.Online-Store-UI-ThumbnailsGrid--noPadding_p86q0 {
        height: 2rem;
        width: 2rem
    }

    .Online-Store-UI-ThumbnailsGrid--sizeMedium_19pwx:not(.Online-Store-UI-ThumbnailsGrid--noPadding_p86q0) {
        padding: .25rem
    }

    .Online-Store-UI-ThumbnailsGrid__List_wcx9v {
        grid-gap: calc(0.25rem*.5);
        border-radius: calc(var(--p-border-radius-050) + .0625rem);
        display: grid;
        height: 100%;
        list-style: none;
        margin: 0;
        overflow: hidden;
        padding: 0
    }

    .Online-Store-UI-ThumbnailsGrid--sizeTiny_mwakf .Online-Store-UI-ThumbnailsGrid__List_wcx9v {
        grid-template-columns: repeat(auto-fit,minmax(calc(.5rem - 0.25rem*.5),1fr))
    }

    .Online-Store-UI-ThumbnailsGrid--sizeSmall_f7cuv .Online-Store-UI-ThumbnailsGrid__List_wcx9v {
        grid-template-columns: repeat(auto-fit,minmax(calc(.625rem - 0.25rem*.5),1fr))
    }

    .Online-Store-UI-ThumbnailsGrid--sizeMedium_19pwx .Online-Store-UI-ThumbnailsGrid__List_wcx9v {
        grid-template-columns: repeat(auto-fit,minmax(calc(1rem - 0.25rem*.5),1fr))
    }

    .Online-Store-UI-ThumbnailsGrid--sizeFull_l01vx .Online-Store-UI-ThumbnailsGrid__List_wcx9v {
        grid-template-columns: repeat(auto-fit,minmax(calc(1.25rem - 0.25rem*.5),1fr))
    }

    .Online-Store-UI-ThumbnailsGrid__Item_wdek4 {
        background-color: var(--osui_color-frame-bg);
        height: auto
    }

    .Online-Store-UI-ThumbnailsGrid__Item_wdek4:nth-child(odd):last-child {
        grid-column: 1/span 2
    }

    .Online-Store-UI-ThumbnailsGrid--sizeTiny_mwakf .Online-Store-UI-ThumbnailsGrid__Item_wdek4 {
        min-height: calc(.5rem - 0.25rem*.5)
    }

    .Online-Store-UI-ThumbnailsGrid--sizeSmall_f7cuv .Online-Store-UI-ThumbnailsGrid__Item_wdek4 {
        min-height: calc(.625rem - 0.25rem*.5)
    }

    .Online-Store-UI-ThumbnailsGrid--sizeMedium_19pwx .Online-Store-UI-ThumbnailsGrid__Item_wdek4 {
        min-height: calc(1rem - 0.25rem*.5)
    }

    .Online-Store-UI-ThumbnailsGrid--sizeFull_l01vx .Online-Store-UI-ThumbnailsGrid__Item_wdek4 {
        min-height: calc(1.25rem - 0.25rem*.5)
    }

    .Online-Store-UI-ThumbnailsGrid__Image_2nw03 {
        height: 100%;
        object-fit: cover;
        width: 100%
    }

    .Online-Store-UI-StackedActions_15gm2 {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .Online-Store-UI-StackedActions__Item_1c2eb+.Online-Store-UI-StackedActions__Item_1c2eb {
        border-top: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a,.Online-Store-UI-StackedActions__Item_1c2eb button {
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        --p-border-radius-100: 0;
        font-weight: 400;
        outline: none;
        padding-bottom: 0.75rem;
        padding-top: 0.75rem;
        position: relative
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:after,.Online-Store-UI-StackedActions__Item_1c2eb button:after {
        border-radius: calc(0.5rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:focus:after,.Online-Store-UI-StackedActions__Item_1c2eb button:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:focus:not(:focus-visible):after,.Online-Store-UI-StackedActions__Item_1c2eb button:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-StackedActions__Item_1c2eb a:focus:not(:focus-visible):after,.Online-Store-UI-StackedActions__Item_1c2eb button:focus:not(:focus-visible):after {
            outline: none
        }
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible:after,.Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:after,.Online-Store-UI-StackedActions__Item_1c2eb button:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a svg,.Online-Store-UI-StackedActions__Item_1c2eb button svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible,.Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible {
        background-color: #0000000f;
        color: #4a4a4a
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible svg,.Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible svg,.Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .Online-Store-UI-StackedActions__Item_1c2eb a:hover,.Online-Store-UI-StackedActions__Item_1c2eb button:hover {
            background-color:#0000000f;
            color: #4a4a4a
        }

        .Online-Store-UI-StackedActions__Item_1c2eb a:hover svg,.Online-Store-UI-StackedActions__Item_1c2eb button:hover svg {
            fill: #4a4a4a
        }
    }

    @media (hover: hover) and (pointer:fine) and (-ms-high-contrast:active) {
        .Online-Store-UI-StackedActions__Item_1c2eb a:hover svg,.Online-Store-UI-StackedActions__Item_1c2eb button:hover svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:active,.Online-Store-UI-StackedActions__Item_1c2eb button:active {
        background-color: #f3f3f3;
        color: #4a4a4a
    }

    .Online-Store-UI-StackedActions__Item_1c2eb a:active svg,.Online-Store-UI-StackedActions__Item_1c2eb button:active svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .Online-Store-UI-StackedActions__Item_1c2eb a:active svg,.Online-Store-UI-StackedActions__Item_1c2eb button:active svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button {
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        outline: none;
        position: relative
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:after,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:after {
        border-radius: calc(0.25rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:focus:after,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:focus:not(:focus-visible):after,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:focus:not(:focus-visible):after,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:focus:not(:focus-visible):after {
            outline: none
        }
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible:after,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:after,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:after {
        border-radius: 0.5rem;
        bottom: var(--p-border-width-3);
        left: var(--p-border-width-3);
        right: var(--p-border-width-3);
        top: var(--p-border-width-3)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a svg,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible {
        background-color: var(--osui_color-plain-button-bg);
        color: #303030
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:focus-visible svg,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:focus-visible svg {
        fill: #303030
    }

    @media (hover: hover) and (pointer:fine) {
        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:hover,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:hover {
            background-color:var(--osui_color-plain-button-bg);
            color: #303030
        }

        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:hover svg,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:hover svg {
            fill: #303030
        }
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:active,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:active {
        background-color: var(--osui_color-plain-button-bg-active)
    }

    @media (hover: hover) and (pointer:fine) {
        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb a:active:hover,html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-StackedActions__Item_1c2eb button:active:hover {
            background-color:var(--p-color-bg-fill-transparent-hover)
        }
    }

    .Online-Store-UI-StackedActions--dividerBefore_1t5ew {
        border-top: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Online-Store-UI-StackedActions--alignToNav_p1xyg {
        padding-left: var(--p-space-400)
    }

    .Online-Store-UI-OverlayAction_1em9m {
        background-color: var(--p-color-bg-surface);
        padding: .125rem;
        position: absolute;
        transform: translateX(-.125rem);
        transition: opacity var(--p-motion-duration-200) cubic-bezier(0.25,0.1,0.25,1);
        width: var(--osui_overlay-action-width,auto)
    }

    .Online-Store-UI-OverlayAction_1em9m,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--appearActive_101x3,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--appearDone_1demv,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--appear_axt05,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--exitDone_1qlg5 {
        display: none
    }

    .Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--enterActive_1n7l0,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--enterDone_5ss7k,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--enter_6sb8t,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--exitActive_1nww7,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--exit_19egb {
        display: block
    }

    .Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--enterActive_1n7l0,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--enterDone_5ss7k,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--exit_19egb {
        opacity: 1
    }

    .Online-Store-UI-OverlayAction_1em9m,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--enter_6sb8t,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--exitActive_1nww7,.Online-Store-UI-OverlayAction_1em9m.Online-Store-UI-OverlayAction--exitDone_1qlg5 {
        opacity: 0
    }

    .Online-Store-UI-OverlayAction_1em9m>button {
        vertical-align: middle
    }

    .Online-Store-UI-OverlayAction--alignRight_1k4xo {
        transform: translateX(.125rem)
    }

    @media (min-width: 41.6875em) {
        .Online-Store-UI-Sidebar_bciv9 {
            grid-area:primary-sidebar;
            overflow: hidden;
            position: relative;
            z-index: 10
        }

        .Online-Store-UI-Sidebar_bciv9:not(.Online-Store-UI-Sidebar--secondary_1hh8x) {
            border-right: var(--p-border-width-025) solid var(--p-color-border-secondary)
        }

        .Online-Store-UI-Sidebar--secondary_1hh8x {
            border-left: var(--p-border-width-025) solid var(--p-color-border-secondary);
            grid-area: secondary-sidebar
        }

        .Online-Store-UI-Sidebar--aux_1hwst {
            grid-area: primary-aux-sidebar
        }
    }

    .Online-Store-UI-Sidebar--hide_3b74g {
        display: none
    }

    .Online-Store-UI-Header_adt0d {
        --osui_static-panel-header-padding-y: 0;
        padding-bottom: var(--osui_static-panel-header-padding-y);
        padding-top: var(--osui_static-panel-header-padding-y)
    }

    .Online-Store-UI-Header--sticky_iljqj {
        --osui_static-panel-header-padding-y: var(--p-space-400)
    }

    .Online-Store-UI-Header--sticky_iljqj.Online-Store-UI-Header--hasBack_c4trp,.Online-Store-UI-Header--sticky_iljqj.Online-Store-UI-Header--hasClose_184dz {
        --osui_static-panel-header-padding-y: 0.5rem
    }

    .Online-Store-UI-Header--alignToActionBar_14o5h {
        padding-bottom: calc(0.75rem + var(--p-space-050));
        padding-top: calc(0.75rem + var(--p-space-050))
    }

    .Online-Store-UI-Header--alignToActionBar_14o5h.Online-Store-UI-Header--hasBack_c4trp {
        padding-bottom: 0.75rem;
        padding-top: 0.75rem
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Header--alignToActionBar_14o5h {
        padding-bottom: 0.75rem;
        padding-top: var(--p-space-600)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Header--alignToActionBar_14o5h.Online-Store-UI-Header--hasBack_c4trp {
        padding-bottom: 0.5rem;
        padding-top: var(--p-space-500)
    }

    .Online-Store-UI-Header__HeaderContentWrapper_eg1sw {
        align-items: center;
        display: grid;
        grid-template-columns: 1fr
    }

    .Online-Store-UI-Header--hasBack_c4trp:not(.Online-Store-UI-Header--hasActions_dx7al) .Online-Store-UI-Header__HeaderContentWrapper_eg1sw {
        grid-template-columns: auto 1fr
    }

    .Online-Store-UI-Header--hasActions_dx7al:not(.Online-Store-UI-Header--hasBack_c4trp) .Online-Store-UI-Header__HeaderContentWrapper_eg1sw {
        grid-template-columns: 1fr auto
    }

    .Online-Store-UI-Header--hasActions_dx7al .Online-Store-UI-Header__HeaderContentWrapper_eg1sw {
        grid-template-columns: auto 1fr auto
    }

    .Online-Store-UI-Header--hasClose_184dz .Online-Store-UI-Header__HeaderContentWrapper_eg1sw {
        grid-template-columns: 1fr auto
    }

    .Online-Store-UI-Header__TitleWrapper_c11qw {
        align-items: center;
        display: flex;
        gap: 0.5rem;
        min-width: 0
    }

    .Online-Store-UI-Header__TitleWrapper_c11qw.Online-Store-UI-Header--subtitle_1u4du {
        margin-top: 0.5rem
    }

    .Online-Store-UI-Header__TitleMiddleSection_1u3iu {
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-Header__ActionWrapper_1dscs {
        display: flex;
        justify-content: space-between;
        line-height: normal
    }

    .Online-Store-UI-Header__BackActionWrapper_1vuce {
        display: grid;
        margin-left: calc((2rem - 1.25rem)*.5*-1);
        margin-right: 0.25rem
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Header__BackActionWrapper_1vuce {
        margin-left: -.5rem
    }

    .Online-Store-UI-Header__CloseActionWrapper_117r7 {
        display: grid;
        margin-left: 0.25rem;
        margin-right: calc((2rem - 1.25rem)*-1*.5)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-Header__CloseActionWrapper_117r7 {
        margin-right: -.5rem
    }

    .Online-Store-UI-RollupMenu_3vyj3 {
        max-width: 20rem
    }

    .Online-Store-UI-RollupMenu__Header_117ib {
        border-bottom: var(--p-border-width-025) solid var(--p-color-border-secondary);
        padding: var(--p-space-400)
    }

    .Online-Store-UI-MainArea_15wjo {
        --osui_margin-bottom-main-area: -(border-radius());
        display: flex;
        grid-area: main;
        max-width: 100%;
        min-width: 0;
        position: relative;
        z-index: 40
    }

    .Online-Store-UI-MainArea_15wjo.Online-Store-UI-MainArea--usesBottomSheet_lza5e {
        --osui_margin-bottom-main-area: calc(var(--p-space-400)*-1)
    }

    @media (max-width: 41.6775em) {
        .Online-Store-UI-MainArea_15wjo {
            margin-bottom:var(--osui_margin-bottom-main-area)
        }
    }

    @media (min-width: 41.6875em) {
        .Online-Store-UI-MainArea_15wjo {
            padding:0.5rem
        }

        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-MainArea_15wjo {
            padding: var(--p-space-400)
        }
    }
</style>



<style>
    .Polaris-Modal-Section_1b1h1 {
        flex: 0 0 auto
    }

    .Polaris-Modal-Section_1b1h1:not(:last-of-type) {
        border-bottom: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Polaris-Modal-Section--titleHidden_14zrw {
        padding-right: calc(var(--p-space-1200) + 0.25rem)
    }

    html[class~=comp-summer-editons-2023] .Polaris-Modal-Section--titleHidden_14zrw {
        padding-right: calc(var(--p-space-1200) + 0.25rem + 0.25rem)
    }

    .Polaris-Modal__Body_yjdx1 {
        width: 100%
    }

    .Polaris-Modal__IFrame_j9n24 {
        border: none;
        display: block;
        max-width: 100vw;
        width: 38.75rem
    }

    @media (min-width: 48em) {
        .Polaris-Modal__IFrame_j9n24 {
            max-width:38.75rem
        }
    }

    .Polaris-Modal-Dialog__Container_13mbo {
        bottom: 0;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        left: 0;
        pointer-events: none;
        position: fixed;
        right: 0;
        top: 0;
        z-index: var(--p-z-index-11)
    }

    @media (min-width: 48em) {
        .Polaris-Modal-Dialog__Container_13mbo {
            justify-content:center
        }
    }

    .Polaris-Modal-Dialog_n3qgo:focus {
        outline: 0
    }

    .Polaris-Modal-Dialog__Modal_2v9yc {
        background: var(--p-color-bg-surface);
        bottom: 0;
        box-shadow: var(--p-shadow-2xl);
        display: flex;
        flex-direction: column;
        left: 0;
        max-height: calc(100vh - 3.75rem);
        pointer-events: auto;
        position: fixed;
        right: 0;
        width: 100%
    }

    @media (forced-colors:active) {
        .Polaris-Modal-Dialog__Modal_2v9yc {
            border: var(--p-border-width-025) solid #0000
        }
    }

    @media (max-width: 47.9975em) {
        .Polaris-Modal-Dialog__Modal_2v9yc {
            bottom:0;
            max-height: 100%
        }
    }

    @media (min-width: 48em) {
        .Polaris-Modal-Dialog__Modal_2v9yc {
            border-radius:0.5rem;
            margin: 0 auto;
            max-width: 38.75rem;
            position: relative
        }

        html[class~=comp-summer-editons-2023] .Polaris-Modal-Dialog__Modal_2v9yc {
            border-radius: var(--p-border-radius-400)
        }
    }

    @media (min-width: 48em) and (min-height:41.25em) {
        .Polaris-Modal-Dialog__Modal_2v9yc.Polaris-Modal-Dialog--limitHeight_1hum8 {
            max-height:37.5rem
        }
    }

    @media (min-width: 48em) {
        .Polaris-Modal-Dialog__Modal_2v9yc.Polaris-Modal-Dialog--sizeSmall_7647q {
            max-width:calc(100% - var(--p-space-1600))
        }
    }

    @media (min-width: 30.625em) {
        .Polaris-Modal-Dialog__Modal_2v9yc.Polaris-Modal-Dialog--sizeSmall_7647q {
            max-width:23.75rem
        }
    }

    @media (min-width: 48em) {
        .Polaris-Modal-Dialog__Modal_2v9yc.Polaris-Modal-Dialog--sizeLarge_61dxo {
            max-width:calc(100% - var(--p-space-1600))
        }
    }

    @media (min-width: 65em) {
        .Polaris-Modal-Dialog__Modal_2v9yc.Polaris-Modal-Dialog--sizeLarge_61dxo {
            max-width:61.25rem
        }
    }

    .Polaris-Modal-Dialog__Modal_2v9yc.Polaris-Modal-Dialog--fullScreen_1o27i {
        height: 100%
    }

    @media (min-width: 48em) {
        .Polaris-Modal-Dialog__Modal_2v9yc.Polaris-Modal-Dialog--fullScreen_1o27i {
            height:unset
        }
    }

    html[class~=comp-summer-editons-2023] .Polaris-Modal-Dialog__Modal_2v9yc {
        overflow: hidden
    }

    .Polaris-Modal-Dialog--animateFadeUp_1ok63 {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        opacity: 1;
        transform: translateY(0);
        transition: transform cubic-bezier(0.25,0.1,0.25,1) var(--p-motion-duration-200),opacity cubic-bezier(0.25,0.1,0.25,1) var(--p-motion-duration-200);
        will-change: transform,opacity
    }

    .Polaris-Modal-Dialog--animateFadeUp_1ok63.Polaris-Modal-Dialog--entering_dwhxg,.Polaris-Modal-Dialog--animateFadeUp_1ok63.Polaris-Modal-Dialog--exited_ijm9z,.Polaris-Modal-Dialog--animateFadeUp_1ok63.Polaris-Modal-Dialog--exiting_1brpc {
        opacity: 0;
        transform: translateY(12.5rem)
    }

    .Polaris-Modal-Dialog--animateFadeUp_1ok63.Polaris-Modal-Dialog--entered_17x8x {
        opacity: 1;
        transform: translateY(0)
    }

    .Polaris-Backdrop_1x2i2 {
        animation: var(--p-motion-keyframes-fade-in) var(--p-motion-duration-200) 1 forwards;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        background-color: #00000080;
        bottom: 0;
        display: block;
        left: 0;
        opacity: 0;
        position: fixed;
        right: 0;
        top: 0;
        will-change: opacity;
        z-index: var(--p-z-index-10)
    }

    .Polaris-Backdrop--transparent_19sk8 {
        background-color: initial
    }

    .Polaris-Backdrop--belowNavigation_1y5t0 {
        z-index: var(--p-z-index-7)
    }

    .Polaris-Modal-CloseButton_bl13t {
        -webkit-appearance: none;
        appearance: none;
        background: none;
        border: none;
        border-radius: 0.5rem;
        color: inherit;
        cursor: pointer;
        font-size: inherit;
        line-height: inherit;
        margin: 0;
        margin-left: var(--p-space-500);
        margin-right: calc(0.5rem*-1);
        padding: 0;
        padding: 0.5rem;
        position: relative
    }

    .Polaris-Modal-CloseButton_bl13t:focus {
        outline: none
    }

    .Polaris-Modal-CloseButton_bl13t:after {
        border-radius: 0.25rem;
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        z-index: 1
    }

    .Polaris-Modal-CloseButton_bl13t:hover {
        background: #fafafa
    }

    .Polaris-Modal-CloseButton_bl13t:hover svg {
        fill: #303030
    }

    .Polaris-Modal-CloseButton_bl13t.Polaris-Modal-CloseButton--pressed_17w8v,.Polaris-Modal-CloseButton_bl13t:active {
        background: var(--p-color-bg-active)
    }

    .Polaris-Modal-CloseButton_bl13t:focus-visible:not(:active):after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--p-border-width-025) solid #0000
    }

    .Polaris-Modal-CloseButton_bl13t.Polaris-Modal-CloseButton--titleHidden_14zrw {
        margin: 0.5rem
    }

    [data-lock-scrolling] {
        margin: 0;
        overflow-y: scroll
    }

    [data-lock-scrolling][data-lock-scrolling-hidden] {
        overflow-y: hidden
    }

    [data-lock-scrolling] [data-lock-scrolling-wrapper] {
        height: 100%;
        overflow: hidden
    }

    .Polaris-HorizontalGrid_titug {
        --pc-horizontal-grid-gap-xs: initial;
        --pc-horizontal-grid-gap-sm: initial;
        --pc-horizontal-grid-gap-md: initial;
        --pc-horizontal-grid-gap-lg: initial;
        --pc-horizontal-grid-gap-xl: initial;
        --pc-horizontal-grid-grid-template-columns-xs: initial;
        --pc-horizontal-grid-grid-template-columns-sm: initial;
        --pc-horizontal-grid-grid-template-columns-md: initial;
        --pc-horizontal-grid-grid-template-columns-lg: initial;
        --pc-horizontal-grid-grid-template-columns-xl: initial;
        --pc-horizontal-grid-align-items: initial;
        align-items: var(--pc-horizontal-grid-align-items);
        display: grid;
        gap: var(--pc-horizontal-grid-gap-xs);
        grid-template-columns: var(--pc-horizontal-grid-grid-template-columns-xs)
    }

    @media (min-width: 30.625em) {
        .Polaris-HorizontalGrid_titug {
            gap:var(--pc-horizontal-grid-gap-sm,var(--pc-horizontal-grid-gap-xs))
        }
    }

    @media (min-width: 48em) {
        .Polaris-HorizontalGrid_titug {
            gap:var(--pc-horizontal-grid-gap-md,var(--pc-horizontal-grid-gap-sm,var(--pc-horizontal-grid-gap-xs)))
        }
    }

    @media (min-width: 65em) {
        .Polaris-HorizontalGrid_titug {
            gap:var(--pc-horizontal-grid-gap-lg,var(--pc-horizontal-grid-gap-md,var(--pc-horizontal-grid-gap-sm,var(--pc-horizontal-grid-gap-xs))))
        }
    }

    @media (min-width: 90em) {
        .Polaris-HorizontalGrid_titug {
            gap:var(--pc-horizontal-grid-gap-xl,var(--pc-horizontal-grid-gap-lg,var(--pc-horizontal-grid-gap-md,var(--pc-horizontal-grid-gap-sm,var(--pc-horizontal-grid-gap-xs)))))
        }
    }

    @media (min-width: 30.625em) {
        .Polaris-HorizontalGrid_titug {
            grid-template-columns:var(--pc-horizontal-grid-grid-template-columns-sm,var(--pc-horizontal-grid-grid-template-columns-xs))
        }
    }

    @media (min-width: 48em) {
        .Polaris-HorizontalGrid_titug {
            grid-template-columns:var(--pc-horizontal-grid-grid-template-columns-md,var(--pc-horizontal-grid-grid-template-columns-sm,var(--pc-horizontal-grid-grid-template-columns-xs)))
        }
    }

    @media (min-width: 65em) {
        .Polaris-HorizontalGrid_titug {
            grid-template-columns:var(--pc-horizontal-grid-grid-template-columns-lg,var(--pc-horizontal-grid-grid-template-columns-md,var(--pc-horizontal-grid-grid-template-columns-sm,var(--pc-horizontal-grid-grid-template-columns-xs))))
        }
    }

    @media (min-width: 90em) {
        .Polaris-HorizontalGrid_titug {
            grid-template-columns:var(--pc-horizontal-grid-grid-template-columns-xl,var(--pc-horizontal-grid-grid-template-columns-lg,var(--pc-horizontal-grid-grid-template-columns-md,var(--pc-horizontal-grid-grid-template-columns-sm,var(--pc-horizontal-grid-grid-template-columns-xs)))))
        }
    }

    .store-ul-plain-action {
        --osui_plain-action-content-padding-x: var(--p-space-150);
        --osui_plain-action-prefix-max-size: 1.875rem;
        fill: #4a4a4a;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        align-items: center;
        -webkit-appearance: none;
        appearance: none;
        background: none;
        border: none;
        border-radius: 0.5rem;
        color: inherit;
        color: #303030;
        cursor: pointer;
        display: inline-flex;
        font-size: inherit;
        font-weight: 500;
        justify-content: center;
        letter-spacing: normal;
        line-height: inherit;
        line-height: 1;
        margin: 0;
        max-width: 100%;
        min-height: 2rem;
        min-width: 0;
        min-width: 2rem;
        outline: none;
        padding: 0;
        position: relative;
        text-decoration: none;
        text-transform: none;
        transition-duration: 150ms;
        transition-property: color,background-color;
        transition-timing-function: cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-plain-action:focus {
        outline: none
    }

    .store-ul-plain-action:after {
        border-radius: calc(0.5rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    .store-ul-plain-action:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-plain-action:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        .store-ul-plain-action:focus:not(:focus-visible):after {
            outline: none
        }
    }

    .store-ul-plain-action:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    .store-ul-plain-action svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    .store-ul-plain-action:focus-visible {
        background-color: #0000000f;
        color: #4a4a4a
    }

    .store-ul-plain-action:focus-visible svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-plain-action:focus-visible svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-plain-action:hover {
            background-color:#0000000f;
            color: #4a4a4a
        }

        .store-ul-plain-action:hover svg {
            fill: #4a4a4a
        }
    }

    @media (hover: hover) and (pointer:fine) and (-ms-high-contrast:active) {
        .store-ul-plain-action:hover svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    .store-ul-plain-action:active {
        background-color: #f3f3f3;
        color: #4a4a4a
    }

    .store-ul-plain-action:active svg {
        fill: #4a4a4a
    }

    @media (-ms-high-contrast:active) {
        .store-ul-plain-action:active svg {
            fill: var(--p-color-icon-secondary)
        }
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action {
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        --osui_plain-action-content-padding-x: 0.5rem;
        border-radius: 0.25rem;
        font-size: calc(var(--p-font-size-100) + .0625rem);
        font-weight: 500;
        letter-spacing: normal;
        line-height: var(--p-font-line-height-1);
        line-height: 1;
        min-height: 2.25rem;
        min-width: 2.25rem;
        outline: none;
        position: relative;
        text-transform: none
    }

    @media (min-width: 48em) {
        html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action {
            font-size:var(--p-font-size-100)
        }
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action:after {
        border-radius: calc(0.25rem + .0625rem);
        bottom: -.0625rem;
        box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
        content: "";
        display: block;
        left: -.0625rem;
        pointer-events: none;
        position: absolute;
        right: -.0625rem;
        top: -.0625rem;
        transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
        z-index: 1
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action:focus:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action:focus:not(:focus-visible):after {
        box-shadow: 0 0 0 0 #0000
    }

    @media (-ms-high-contrast:active) {
        html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action:focus:not(:focus-visible):after {
            outline: none
        }
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action:focus-visible:after {
        box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
        outline: var(--osui_high-contrast-outline)
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action svg {
        transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action:focus-visible {
        background-color: var(--osui_color-plain-button-bg);
        color: #303030
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action:focus-visible svg {
        fill: #303030
    }

    @media (hover: hover) and (pointer:fine) {
        html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action:hover {
            background-color:var(--osui_color-plain-button-bg);
            color: #303030
        }

        html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action:hover svg {
            fill: #303030
        }
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action:active {
        background-color: var(--osui_color-plain-button-bg-active)
    }

    @media (hover: hover) and (pointer:fine) {
        html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action:active:hover {
            background-color:var(--p-color-bg-fill-transparent-hover)
        }
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action.Online-Store-UI-PlainAction--noPadding_1rswy {
        --osui_plain-action-content-padding-x: 0
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action.Online-Store-UI-PlainAction--looseLineHeight_1y0bf {
        line-height: var(--p-space-500)
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action.Online-Store-UI-PlainAction--extraLooseLineHeight_1tup2 {
        line-height: 2.75rem
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action.Online-Store-UI-PlainAction--subtitle_nqrem {
        font-size: var(--p-font-size-100);
        line-height: var(--p-font-line-height-2)
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action.Online-Store-UI-PlainAction--subtitleAndContent_10648 {
        border-radius: 0.5rem
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action.Online-Store-UI-PlainAction--pressed_bna52 {
        background-color: var(--osui_color-plain-action-bg-active-light)
    }

    @media (hover: hover) and (pointer:fine) {
        html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action.Online-Store-UI-PlainAction--pressed_bna52:hover {
            background-color:var(--osui_color-plain-action-bg-active-base);
            color: var(--p-color-text-emphasis-hover)
        }

        html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action.Online-Store-UI-PlainAction--pressed_bna52:hover svg {
            fill: var(--p-color-icon-emphasis-hover);
            color: var(--p-color-text-inverse)
        }
    }

    .store-ul-plain-action.Online-Store-UI-PlainAction--hyperlink_1k942:focus-visible {
        background-color: initial
    }

    @media (hover: hover) and (pointer:fine) {
        .store-ul-plain-action.Online-Store-UI-PlainAction--hyperlink_1k942:hover {
            background-color:initial
        }
    }

    .store-ul-plain-action.Online-Store-UI-PlainAction--hyperlink_1k942,.store-ul-plain-action.Online-Store-UI-PlainAction--hyperlink_1k942:active {
        background-color: initial
    }

    .store-ul-plain-action.Online-Store-UI-PlainAction--subtitle_nqrem {
        font-size: var(--p-font-size-100);
        line-height: var(--p-font-line-height-2)
    }

    .store-ul-plain-action.Online-Store-UI-PlainAction--looseLineHeight_1y0bf {
        line-height: var(--p-space-500)
    }

    .store-ul-plain-action.Online-Store-UI-PlainAction--extraLooseLineHeight_1tup2 {
        line-height: 2.75rem
    }

    .store-ul-plain-action--font-size-body {
        font-size: var(--p-font-size-80-experimental)
    }

    .Online-Store-UI-PlainAction--fontSizeBodyLg_o7rea,.Online-Store-UI-PlainAction--small_kzurl,html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action--font-size-body {
        font-size: var(--p-font-size-100)
    }

    .Online-Store-UI-PlainAction--fontSizeBodyXl_o7xod {
        font-size: .9375rem
    }

    .Online-Store-UI-PlainAction--noPadding_1rswy {
        --osui_plain-action-content-padding-x: 0
    }

    .Online-Store-UI-PlainAction--hasContent_q24xi:not(.store-ul-plain-action--slim):not(.Online-Store-UI-PlainAction--noPadding_1rswy) {
        --osui_plain-action-content-padding-x: 0.75rem
    }

    @media (max-width: 41.6775em) {
        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89) {
            -webkit-tap-highlight-color:rgba(0,0,0,0);
            height: var(--osui_size-min-action-mobile);
            outline: none;
            position: relative;
            width: var(--osui_size-min-action-mobile)
        }

        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):after {
            border-radius: calc(0.5rem + .0625rem);
            bottom: -.0625rem;
            box-shadow: 0 0 0 -.0625rem var(--p-color-border-focus);
            content: "";
            display: block;
            left: -.0625rem;
            pointer-events: none;
            position: absolute;
            right: -.0625rem;
            top: -.0625rem;
            transition: box-shadow var(--p-motion-duration-100) cubic-bezier(0.25,0.1,0.25,1);
            z-index: 1
        }

        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):focus:after {
            box-shadow: 0 0 0 .125rem var(--p-color-border-focus);
            outline: var(--osui_high-contrast-outline)
        }

        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):focus:not(:focus-visible):after {
            box-shadow: 0 0 0 0 #0000
        }
    }

    @media (max-width: 41.6775em) and (-ms-high-contrast:active) {
        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):focus:not(:focus-visible):after {
            outline:none
        }
    }

    @media (max-width: 41.6775em) {
        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):focus-visible:after {
            box-shadow:0 0 0 .125rem var(--p-color-border-focus);
            outline: var(--osui_high-contrast-outline)
        }

        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):after {
            border-radius: 0.5rem;
            bottom: var(--p-border-width-3);
            left: var(--p-border-width-3);
            right: var(--p-border-width-3);
            top: var(--p-border-width-3)
        }

        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89) svg {
            transition: fill 150ms cubic-bezier(0.25,0.1,0.25,1)
        }

        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):focus-visible {
            background-color: #0000000f;
            color: #4a4a4a
        }

        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):focus-visible svg {
            fill: #4a4a4a
        }
    }

    @media (max-width: 41.6775em) and (-ms-high-contrast:active) {
        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):focus-visible svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    @media (max-width: 41.6775em) and (hover:hover) and (pointer:fine) {
        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):hover {
            background-color:#0000000f;
            color: #4a4a4a
        }

        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):hover svg {
            fill: #4a4a4a
        }
    }

    @media (max-width: 41.6775em) and (hover:hover) and (pointer:fine) and (-ms-high-contrast:active) {
        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):hover svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    @media (max-width: 41.6775em) {
        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):active {
            background-color:#f3f3f3;
            color: #4a4a4a
        }

        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):active svg {
            fill: #4a4a4a
        }
    }

    @media (max-width: 41.6775em) and (-ms-high-contrast:active) {
        .store-ul-plain-action--icon-only:not(.Online-Store-UI-PlainAction--disclosure_4hx89):active svg {
            fill:var(--p-color-icon-secondary)
        }
    }

    .Online-Store-UI-PlainAction--extraPadding_ikxh3 {
        padding: var(--p-space-500)
    }

    .Online-Store-UI-PlainAction--paddingLoose_c5g9r {
        --osui_plain-action-content-padding-x: 0;
        padding: .625rem
    }

    .Online-Store-UI-PlainAction--backgroundSubdued_j16bm,.Online-Store-UI-PlainAction--withSurfaceSubduedBackground_3i42h {
        background-color: var(--p-color-bg-surface-secondary)
    }

    .Online-Store-UI-PlainAction--backgroundDark_1twl3 {
        background-color: var(--p-color-bg-inverse)
    }

    .Online-Store-UI-PlainAction--backgroundGrey_1e1as {
        background-color: var(--p-color-bg-app)
    }

    .Online-Store-UI-PlainAction--interactive_9blqi:not(.Online-Store-UI-PlainAction--disabled_xci3a):not(.Online-Store-UI-PlainAction--pressed_bna52) {
        background-color: var(--p-color-bg-interactive-selected);
        color: var(--p-color-text-emphasis)
    }

    .Online-Store-UI-PlainAction--interactive_9blqi:not(.Online-Store-UI-PlainAction--disabled_xci3a):not(.Online-Store-UI-PlainAction--pressed_bna52) svg {
        fill: var(--p-color-icon-emphasis)
    }

    .Online-Store-UI-PlainAction--interactive_9blqi:not(.Online-Store-UI-PlainAction--disabled_xci3a):not(.Online-Store-UI-PlainAction--pressed_bna52):hover {
        background-color: var(--p-color-bg-interactive-subdued-hover);
        color: var(--p-color-text-emphasis-hover)
    }

    .Online-Store-UI-PlainAction--interactive_9blqi:not(.Online-Store-UI-PlainAction--disabled_xci3a):not(.Online-Store-UI-PlainAction--pressed_bna52):hover svg {
        fill: var(--p-color-icon-emphasis-hover)
    }

    .Online-Store-UI-PlainAction--interactive_9blqi.Online-Store-UI-PlainAction--disabled_xci3a {
        background-color: var(--p-color-bg-disabled)
    }

    .Online-Store-UI-PlainAction--interactive_9blqi.Online-Store-UI-PlainAction--pressed_bna52,.Online-Store-UI-PlainAction--interactive_9blqi.Online-Store-UI-PlainAction--pressed_bna52:hover {
        background-color: var(--p-color-bg-interactive-subdued-hover);
        color: var(--p-color-text-emphasis-hover)
    }

    .Online-Store-UI-PlainAction--interactive_9blqi.Online-Store-UI-PlainAction--pressed_bna52 svg,.Online-Store-UI-PlainAction--interactive_9blqi.Online-Store-UI-PlainAction--pressed_bna52:hover svg {
        fill: var(--p-color-icon-emphasis-hover)
    }

    .Online-Store-UI-PlainAction--destructive_262dt {
        color: var(--p-color-text-critical)
    }

    .Online-Store-UI-PlainAction--destructive_262dt svg {
        fill: var(--p-color-text-critical)
    }

    .Online-Store-UI-PlainAction--destructive_262dt:active,.Online-Store-UI-PlainAction--destructive_262dt:focus-visible {
        background-color: var(--osui_color-plain-button-bg);
        color: var(--p-color-text-critical)
    }

    .Online-Store-UI-PlainAction--destructive_262dt:active svg,.Online-Store-UI-PlainAction--destructive_262dt:focus-visible svg {
        fill: var(--p-color-text-critical)
    }

    @media (hover: hover) and (pointer:fine) {
        .Online-Store-UI-PlainAction--destructive_262dt:hover {
            background-color:var(--osui_color-plain-button-bg);
            color: var(--p-color-text-critical)
        }

        .Online-Store-UI-PlainAction--destructive_262dt:hover svg {
            fill: var(--p-color-text-critical)
        }
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9,.Online-Store-UI-PlainAction--dark_bee0w {
        color: #a7aaad
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9 svg,.Online-Store-UI-PlainAction--dark_bee0w svg {
        fill: #a7aaad
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9 .Online-Store-UI-PlainAction__Subtitle_nqrel,.Online-Store-UI-PlainAction--dark_bee0w .Online-Store-UI-PlainAction__Subtitle_nqrel {
        color: #999fa4
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9.Online-Store-UI-PlainAction--disabled_xci3a,.Online-Store-UI-PlainAction--dark_bee0w.Online-Store-UI-PlainAction--disabled_xci3a {
        color: #a7aaad66
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9.Online-Store-UI-PlainAction--disabled_xci3a svg,.Online-Store-UI-PlainAction--dark_bee0w.Online-Store-UI-PlainAction--disabled_xci3a svg {
        fill: #a7aaad66
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9.Online-Store-UI-PlainAction--disabled_xci3a .Online-Store-UI-PlainAction__Subtitle_nqrel,.Online-Store-UI-PlainAction--dark_bee0w.Online-Store-UI-PlainAction--disabled_xci3a .Online-Store-UI-PlainAction__Subtitle_nqrel {
        color: #6f7377
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9.Online-Store-UI-PlainAction--destructive_262dt,.Online-Store-UI-PlainAction--dark_bee0w.Online-Store-UI-PlainAction--destructive_262dt {
        color: #f56b6b
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9.Online-Store-UI-PlainAction--destructive_262dt svg,.Online-Store-UI-PlainAction--dark_bee0w.Online-Store-UI-PlainAction--destructive_262dt svg {
        fill: #f56b6b
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9.Online-Store-UI-PlainAction--destructive_262dt:active,.Online-Store-UI-PlainAction--darkInverse_wi4c9.Online-Store-UI-PlainAction--destructive_262dt:focus-visible,.Online-Store-UI-PlainAction--dark_bee0w.Online-Store-UI-PlainAction--destructive_262dt:active,.Online-Store-UI-PlainAction--dark_bee0w.Online-Store-UI-PlainAction--destructive_262dt:focus-visible {
        background-color: #303133;
        color: #f56b6b
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9.Online-Store-UI-PlainAction--destructive_262dt:active svg,.Online-Store-UI-PlainAction--darkInverse_wi4c9.Online-Store-UI-PlainAction--destructive_262dt:focus-visible svg,.Online-Store-UI-PlainAction--dark_bee0w.Online-Store-UI-PlainAction--destructive_262dt:active svg,.Online-Store-UI-PlainAction--dark_bee0w.Online-Store-UI-PlainAction--destructive_262dt:focus-visible svg {
        fill: #f56b6b
    }

    @media (hover: hover) and (pointer:fine) {
        .Online-Store-UI-PlainAction--darkInverse_wi4c9.Online-Store-UI-PlainAction--destructive_262dt:hover,.Online-Store-UI-PlainAction--dark_bee0w.Online-Store-UI-PlainAction--destructive_262dt:hover {
            background-color:#303133;
            color: #f56b6b
        }

        .Online-Store-UI-PlainAction--darkInverse_wi4c9.Online-Store-UI-PlainAction--destructive_262dt:hover svg,.Online-Store-UI-PlainAction--dark_bee0w.Online-Store-UI-PlainAction--destructive_262dt:hover svg {
            fill: #f56b6b
        }
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9:active,.Online-Store-UI-PlainAction--darkInverse_wi4c9:focus-visible,.Online-Store-UI-PlainAction--dark_bee0w:active,.Online-Store-UI-PlainAction--dark_bee0w:focus-visible {
        background-color: #303133;
        color: var(--p-color-text-on-color)
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9:active svg,.Online-Store-UI-PlainAction--darkInverse_wi4c9:focus-visible svg,.Online-Store-UI-PlainAction--dark_bee0w:active svg,.Online-Store-UI-PlainAction--dark_bee0w:focus-visible svg {
        fill: var(--p-color-icon-on-color);
        color: var(--p-color-text-inverse)
    }

    @media (hover: hover) and (pointer:fine) {
        .Online-Store-UI-PlainAction--darkInverse_wi4c9:hover,.Online-Store-UI-PlainAction--dark_bee0w:hover {
            background-color:#303133;
            color: var(--p-color-text-on-color)
        }

        .Online-Store-UI-PlainAction--darkInverse_wi4c9:hover svg,.Online-Store-UI-PlainAction--dark_bee0w:hover svg {
            fill: var(--p-color-icon-on-color);
            color: var(--p-color-text-inverse)
        }
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9 {
        color: var(--p-color-text-inverse)
    }

    .Online-Store-UI-PlainAction--darkInverse_wi4c9 svg {
        fill: var(--p-color-icon-inverse)
    }

    .store-ul-plain-action--slim {
        min-height: var(--osui_height-common-control-slim);
        min-width: var(--osui_height-common-control-slim)
    }

    .store-ul-plain-action--slim:not(.Online-Store-UI-PlainAction--hasContent_q24xi):not(.Online-Store-UI-PlainAction--noPadding_1rswy):not(.Online-Store-UI-PlainAction--disclosure_4hx89) {
        --osui_plain-action-content-padding-x: var(--p-space-050)
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action--slim:not(.Online-Store-UI-PlainAction--hasContent_q24xi):not(.Online-Store-UI-PlainAction--noPadding_1rswy):not(.Online-Store-UI-PlainAction--disclosure_4hx89) {
        --osui_plain-action-content-padding-x: 0.25rem
    }

    html:not([class~=comp-summer-editons-2023]) .store-ul-plain-action--slim {
        min-height: 1.75rem;
        min-width: 1.75rem
    }

    .Online-Store-UI-PlainAction--unstyled_x7yvg {
        color: var(--p-color-text-emphasis)
    }

    .Online-Store-UI-PlainAction--unstyled_x7yvg svg {
        fill: var(--p-color-icon-emphasis)
    }

    .Online-Store-UI-PlainAction--unstyled_x7yvg:focus-visible {
        color: var(--p-color-text-emphasis-hover)
    }

    .Online-Store-UI-PlainAction--unstyled_x7yvg:focus-visible svg {
        fill: var(--p-color-icon-emphasis-hover);
        color: var(--p-color-text-inverse)
    }

    @media (hover: hover) and (pointer:fine) {
        .Online-Store-UI-PlainAction--unstyled_x7yvg:hover {
            color:var(--p-color-text-emphasis-hover)
        }

        .Online-Store-UI-PlainAction--unstyled_x7yvg:hover svg {
            fill: var(--p-color-icon-emphasis-hover);
            color: var(--p-color-text-inverse)
        }
    }

    .Online-Store-UI-PlainAction--unstyled_x7yvg:active {
        color: var(--p-color-text-emphasis-hover)
    }

    .Online-Store-UI-PlainAction--unstyled_x7yvg:active svg {
        fill: var(--p-color-icon-emphasis-hover);
        color: var(--p-color-text-inverse)
    }

    .Online-Store-UI-PlainAction--alignLeft_1jmyc {
        justify-content: left;
        text-align: left
    }

    .Online-Store-UI-PlainAction--fullWidth_1084e {
        width: 100%
    }

    .Online-Store-UI-PlainAction--pressed_bna52 {
        background-color: var(--p-color-bg-fill-transparent-active);
        color: var(--p-color-text-emphasis)
    }

    .Online-Store-UI-PlainAction--pressed_bna52 svg {
        fill: var(--p-color-icon-emphasis)
    }

    html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-PlainAction--pressed_bna52 {
        background-color: var(--osui_color-plain-action-bg-active-light)
    }

    @media (hover: hover) and (pointer:fine) {
        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-PlainAction--pressed_bna52:hover {
            background-color:var(--osui_color-plain-action-bg-active-base);
            color: var(--p-color-text-emphasis-hover)
        }

        html:not([class~=comp-summer-editons-2023]) .Online-Store-UI-PlainAction--pressed_bna52:hover svg {
            fill: var(--p-color-icon-emphasis-hover);
            color: var(--p-color-text-inverse)
        }
    }

    .Online-Store-UI-PlainAction--pressed_bna52:focus-visible {
        background-color: var(--p-color-bg-fill-transparent-hover);
        color: var(--p-color-text-emphasis-hover)
    }

    .Online-Store-UI-PlainAction--pressed_bna52:focus-visible svg {
        fill: var(--p-color-icon-emphasis-hover);
        color: var(--p-color-text-inverse)
    }

    @media (hover: hover) and (pointer:fine) {
        .Online-Store-UI-PlainAction--pressed_bna52:hover {
            background-color:var(--p-color-bg-fill-transparent-hover);
            color: var(--p-color-text-emphasis-hover)
        }

        .Online-Store-UI-PlainAction--pressed_bna52:hover svg {
            fill: var(--p-color-icon-emphasis-hover);
            color: var(--p-color-text-inverse)
        }
    }

    .Online-Store-UI-PlainAction--pressed_bna52:active {
        background-color: var(--osui_color-plain-action-bg-active-dark);
        color: var(--p-color-text-emphasis-active)
    }

    .Online-Store-UI-PlainAction--pressed_bna52:active svg {
        fill: var(--p-color-icon-emphasis-active);
        color: var(--p-color-text-inverse)
    }

    .Online-Store-UI-PlainAction--loading_1mi14 {
        background-color: var(--osui_color-plain-button-bg-active)
    }

    .Online-Store-UI-PlainAction--disabled_xci3a {
        color: var(--p-color-text-secondary);
        pointer-events: none;
        touch-action: none;
        -webkit-user-select: none;
        user-select: none
    }

    .Online-Store-UI-PlainAction--disabled_xci3a svg {
        fill: var(--p-color-icon-disabled)
    }

    .Online-Store-UI-PlainAction--disabled_xci3a .Online-Store-UI-PlainAction__Subtitle_nqrel {
        color: var(--p-color-text-disabled)
    }

    .Online-Store-UI-PlainAction--disabled_xci3a.Online-Store-UI-PlainAction--pressed_bna52 {
        background-color: var(--osui_color-plain-action-bg-active-light)
    }

    .Online-Store-UI-PlainAction--disabled_xci3a.Online-Store-UI-PlainAction--pressed_bna52:focus-visible {
        background-color: var(--osui_color-plain-action-bg-active-light)
    }

    .Online-Store-UI-PlainAction--outline_6mo0d {
        border: var(--p-border-width-025) solid var(--p-color-border-secondary)
    }

    .Online-Store-UI-PlainAction--vertical_1wre9.Online-Store-UI-PlainAction--hyperlink_1k942 {
        text-align: center
    }

    .store-ul-plain-action__interior {
        align-items: center;
        display: grid;
        padding-left: var(--osui_plain-action-content-padding-x);
        padding-right: var(--osui_plain-action-content-padding-x);
        width: 100%
    }

    .Online-Store-UI-PlainAction--loading_1mi14 .store-ul-plain-action__interior {
        opacity: 0
    }

    .store-ul-plain-action:not(.Online-Store-UI-PlainAction--vertical_1wre9) .store-ul-plain-action__interior {
        gap: 0.5rem;
        grid-auto-columns: auto 1fr auto;
        grid-auto-flow: column
    }

    .Online-Store-UI-PlainAction--vertical_1wre9 .store-ul-plain-action__interior {
        grid-template-areas: "top" "bottom";
        justify-content: center
    }

    .Online-Store-UI-PlainAction--vertical_1wre9:not(.Online-Store-UI-PlainAction--noPadding_1rswy) .store-ul-plain-action__interior {
        padding-bottom: 0.25rem;
        padding-top: 0.25rem
    }

    .store-ul-plain-action__interior.Online-Store-UI-PlainAction--noPadding_1rswy {
        padding: 0
    }

    .Online-Store-UI-PlainAction__Disclosure_4hx8a,.store-ul-plain-action__prefix,.Online-Store-UI-PlainAction__SubtitleWrapperContent_nac9k,.Online-Store-UI-PlainAction__Subtitle_nqrel,.Online-Store-UI-PlainAction__WrappedContent_155h0 {
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-PlainAction__Disclosure_4hx8a,.Online-Store-UI-PlainAction__ExternalIcon_7eghn,.store-ul-plain-action__prefix {
        display: grid;
        flex: 0 0 auto;
        place-items: center
    }

    .Online-Store-UI-PlainAction__PrefixItem_1op0m {
        max-height: var(--osui_plain-action-prefix-max-size);
        max-width: var(--osui_plain-action-prefix-max-size);
        overflow: hidden
    }

    .Online-Store-UI-PlainAction--fullWidth_1084e:not(.Online-Store-UI-PlainAction--vertical_1wre9) .store-ul-plain-action__prefix {
        justify-self: flex-start
    }

    .Online-Store-UI-PlainAction--vertical_1wre9 .store-ul-plain-action__prefix {
        grid-area: top
    }

    .Online-Store-UI-PlainAction--disabled_xci3a .store-ul-plain-action__prefix {
        opacity: .5
    }

    .Online-Store-UI-PlainAction--disabled_xci3a .store-ul-plain-action__prefix svg {
        fill: var(--p-color-icon-disabled)
    }

    .Online-Store-UI-PlainAction__WrappedContent_155h0 {
        align-items: center;
        display: flex;
        flex: 1 1 auto
    }

    .Online-Store-UI-PlainAction--vertical_1wre9 .Online-Store-UI-PlainAction__WrappedContent_155h0 {
        grid-area: bottom;
        margin-top: 0.5rem
    }

    .Online-Store-UI-PlainAction__SubtitleWrapperContent_nac9k {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        margin: var(--p-space-050)
    }

    .Online-Store-UI-PlainAction__Subtitle_nqrel {
        color: var(--p-color-text-secondary);
        flex: 1 1 auto;
        font-size: var(--p-font-size-75)
    }

    .Online-Store-UI-PlainAction--truncate_c4a4q .Online-Store-UI-PlainAction__Subtitle_nqrel {
        margin-bottom: -.14em;
        overflow: hidden;
        padding-bottom: .14em;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    @supports (-webkit-line-clamp:var(--osui_plain-action-multiline-truncate,2)) {
        .Online-Store-UI-PlainAction--multilineTruncate_5718f .Online-Store-UI-PlainAction__Subtitle_nqrel {
            -webkit-box-orient: vertical;
            -webkit-line-clamp: var(--osui_plain-action-multiline-truncate,2);
            display: -webkit-box;
            overflow: hidden
        }
    }

    .Online-Store-UI-PlainAction__Content_n8qqn {
        flex: 1 1 auto;
        max-width: 100%;
        min-width: 0
    }

    .Online-Store-UI-PlainAction--hyperlink_1k942:not(.Online-Store-UI-PlainAction--removeUnderline_1t0b2) .Online-Store-UI-PlainAction__Content_n8qqn {
        text-decoration: underline
    }

    .Online-Store-UI-PlainAction--truncate_c4a4q .Online-Store-UI-PlainAction__Content_n8qqn {
        margin-bottom: -.14em;
        overflow: hidden;
        padding-bottom: .14em;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    @supports (-webkit-line-clamp:var(--osui_plain-action-multiline-truncate,2)) {
        .Online-Store-UI-PlainAction--multilineTruncate_5718f .Online-Store-UI-PlainAction__Content_n8qqn {
            -webkit-box-orient: vertical;
            -webkit-line-clamp: var(--osui_plain-action-multiline-truncate,2);
            display: -webkit-box;
            overflow: hidden
        }
    }

    .Online-Store-UI-PlainAction--semiboldFontWeight_ulovz .Online-Store-UI-PlainAction__Content_n8qqn {
        font-weight: var(--p-font-weight-semibold)
    }

    .Online-Store-UI-PlainAction__ExternalIcon_7eghn {
        flex: 0 0 auto
    }

    .store-ul-plain-action:not(.Online-Store-UI-PlainAction--vertical_1wre9) .Online-Store-UI-PlainAction__ExternalIcon_7eghn {
        margin-left: 0.25rem;
        overflow: hidden;
        width: 1rem
    }

    .store-ul-plain-action:not(.Online-Store-UI-PlainAction--vertical_1wre9) .Online-Store-UI-PlainAction__ExternalIcon_7eghn .Online-Store-UI-PlainAction__IconWrapper_1pbh5 {
        margin-left: -.125rem;
        width: 1.25rem
    }

    .store-ul-plain-action:not(.Online-Store-UI-PlainAction--vertical_1wre9) .Online-Store-UI-PlainAction__Disclosure_4hx8a {
        overflow: hidden;
        width: .75rem
    }

    .store-ul-plain-action:not(.Online-Store-UI-PlainAction--vertical_1wre9) .Online-Store-UI-PlainAction__Disclosure_4hx8a .Online-Store-UI-PlainAction__IconWrapper_1pbh5 {
        margin-left: -.25rem;
        width: 1.25rem
    }

    .Online-Store-UI-PlainAction--fullWidth_1084e:not(.Online-Store-UI-PlainAction--vertical_1wre9) .Online-Store-UI-PlainAction__Disclosure_4hx8a {
        justify-self: flex-end
    }

    .Online-Store-UI-PlainAction--vertical_1wre9 .Online-Store-UI-PlainAction__Disclosure_4hx8a {
        grid-area: top
    }

    .Online-Store-UI-PlainAction--vertical_1wre9 .Online-Store-UI-PlainAction__SubtitleWrapperContent_nac9k+.Online-Store-UI-PlainAction__Disclosure_4hx8a,.Online-Store-UI-PlainAction--vertical_1wre9 .Online-Store-UI-PlainAction__WrappedContent_155h0+.Online-Store-UI-PlainAction__Disclosure_4hx8a {
        margin-left: calc(1.875rem + 0.5rem)
    }

    .Online-Store-UI-PlainAction__LoadingIndicator_1n8hp {
        align-items: center;
        bottom: 0;
        display: flex;
        justify-content: center;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0
    }
</style>