<template>
    <div id="menu" class="p-3">
        <div class="mb-3">
            <h5>Adobe</h5>
            <a href="https://adobe.mpowerpromo.com?noCachePage=1" target="_blank" title="View Store" class="small">
                https://adobe.mpowerpromo.com
            </a>
            <div class="small text-muted">Updated: 10/22/2023 1:52 PM</div>
        </div>

        <div class="card p-3">
            <div class="d-flex align-items-center justify-content-between" data-toggle="collapse"
                data-target="#collapse-logo">
                <h5 class="m-0">Logo</h5>
                <button data-toggle="collapse" data-target="#collapse-logo" type="button" class="btn btn-link not-collapsed"
                    aria-expanded="true" aria-controls="collapse-logo" style="overflow-anchor: none;">
                    <i class="far fa-angle-down text-body"></i>
                </button>
            </div>

            <div id="collapse-logo" class="mt-2 collapse">
                <div class="form-group">
                    <div class="mr-3">
                        <label>Logo</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="file-upload-dropbox btn btn-outline-primary btn-block p-3" @click="$refs.logo.click()"
                            @dragover.prevent @drop.prevent="onLogoChange">
                            <div>
                                <i class="fas fa-cloud-upload fa-2x"></i>
                            </div>
                            <div>
                                Drag file(s) or click to browse
                            </div>

                            <input ref="logo" type="file" name="logo" accept="image/*" class="input-file"
                                @change="onLogoChange" style="display: none;">

                            <p v-if="isUploading">
                                Uploading 1 file...
                                <i class="far fa-2x fa-spinner-third fa-spin text-primary"></i>
                            </p>

                            <p v-if="validationErrors.logo" class="text-danger">
                                {{ validationErrors.logo[0] }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Desktop logo width</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <input type="range" class="custom-range" min="0" max="100" step="1" v-model="store.logo_width">
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" v-model="store.logo_width" min="0" step="0.1">
                                <div class="input-group-append">
                                    <span class="input-group-text">px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invalid-feedback d-block" v-if="validationErrors.logo_width">
                        {{ validationErrors.logo_width[0] }}
                    </div>
                    <div class="small text-muted">
                        <span class="text-primary">56px</span> is the recommended width for the logo.
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Favicon image</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="file-upload-dropbox btn btn-outline-primary btn-block p-3"
                            @click="$refs.favicon.click()" @dragover.prevent @drop.prevent="onFaviconChange">
                            <div>
                                <i class="fas fa-cloud-upload fa-2x"></i>
                            </div>
                            <div>
                                Drag file(s) or click to browse
                            </div>

                            <input ref="favicon" type="file" name="favicon" accept="image/*" class="input-file"
                                @change="onFaviconChange" style="display: none;">

                            <p v-if="isUploading">
                                Uploading 1 file...
                                <i class="far fa-2x fa-spinner-third fa-spin text-primary"></i>
                            </p>

                            <p v-if="validationErrors.favicon" class="text-danger">
                                {{ validationErrors.favicon[0] }}
                            </p>
                        </div>
                    </div>

                    <div class="small text-muted">
                        <span class="text-primary">Will be scaled down to 32 x 32px</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-3">
            <div class="d-flex align-items-center justify-content-between" data-toggle="collapse"
                data-target="#collapse-colors">
                <h5 class="m-0">Colors</h5>
                <button data-toggle="collapse" data-target="#collapse-colors" type="button"
                    class="btn btn-link not-collapsed" aria-expanded="true" aria-controls="collapse-colors"
                    style="overflow-anchor: none;">
                    <i class="far fa-angle-down text-body"></i>
                </button>
            </div>

            <div id="collapse-colors" class="mt-2 collapse">
                <div class="form-group">
                    <div class="mr-3">
                        <label>Schemes</label>
                        <p class="text-muted">Color schemes can be applied to sections throughout your store</p>
                    </div>
                    <div class="container d-flex align-items-center">
                        <div class="row">
                            <button v-for="(scheme, index) in store.color_schemes" :key="index" type="button"
                                class="col-6 btn btn-outline-primary btn-sm p-3" @click="applyScheme(scheme)"
                                style="border: none;background: none;">
                                <div
                                    :style="'--color-text:' + scheme.text + ';' +
                                        '--color-background:' + scheme.background + ';' +
                                        '--color-primary_button:' + scheme.solid_button_background + ';' +
                                        '--color-primary_button_border: ' + scheme.solid_button_background + ';' +
                                        '--color-secondary_button: ' + scheme.outline_button + ';' +
                                        '--color-secondary_button_border: ' + scheme.outline_button + ';' +
                                        '--color-default-border: rgba(201, 204, 207, 0.4);' +
                                        '--color-hover-border: rgba(201, 204, 207, 0.4);' +
                                        '--color-pill-shadow: rgba(0, 0, 0, 0.2); ' +
                                        'background: var(--color-background); box-shadow: 0 0 0 1px var(--color-pill-shadow);padding-top: 10px;padding-bottom: 10px;'">
                                    <div class="scheme-preview__header"
                                        style="border-bottom: 1px solid var(--color-default-border);">
                                        <p class="scheme-preview__header__name" style="color: var(--color-text);">
                                            {{ scheme.name }}
                                        </p>
                                        <div class="scheme-preview__header__actions">
                                            <button type="button" class="btn btn-link btn-sm" @click="editScheme(scheme)"
                                                style="color: var(--color-primary_button); border: 1px solid var(--color-primary_button_border);">
                                                <i class="far fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-link btn-sm" @click="deleteScheme(scheme)"
                                                style="color: var(--color-secondary_button); border: 1px solid var(--color-secondary_button_border);">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-block p-3" @click="addScheme">
                                <div>
                                    <i class="fas fa-plus"></i>
                                </div>
                            </button>
                        </div>

                        <!-- make a panel to slide left -->
                        <div class="row">

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Primary color</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <input type="color" class="form-control" v-model="store.primary_color">
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" v-model="store.primary_color">
                                <div class="input-group-append">
                                    <span class="input-group-text">#</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invalid-feedback d-block" v-if="validationErrors.primary_color">
                        {{ validationErrors.primary_color[0] }}
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-3">
            <div class="d-flex align-items-center justify-content-between" data-toggle="collapse"
                data-target="#collapse-typography">
                <h5 class="m-0">Typography</h5>
                <button data-toggle="collapse" data-target="#collapse-typography" type="button"
                    class="btn btn-link not-collapsed" aria-expanded="true" aria-controls="collapse-typography"
                    style="overflow-anchor: none;">
                    <i class="far fa-angle-down text-body"></i>
                </button>
            </div>

            <div id="collapse-typography" class="mt-2 collapse">
                <div class="form-group">
                    <!-- <div class="mr-3">
                            <label>Headings</label>
                        </div> -->

                    <div class="d-flex align-items-center">
                        <div class="mr-3">
                            <label>Fonts</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <VueMultiselect v-model="store.heading_font" :options="fonts" placeholder="Select one"
                                :class="{ 'is-invalid': validationErrors.heading_font }" style="width:100%">
                            </VueMultiselect>
                        </div>
                    </div>
                    <!-- <p class="text-sm text-muted">Selecting a different font can affect the speed of your store.</p> -->
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Font scale size</label>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="range" class="custom-range" min="0" max="100" v-model="store.font_size">
                        </div>
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" v-model="store.font_size" min="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-3">
            <div class="d-flex align-items-center justify-content-between" data-toggle="collapse"
                data-target="#collapse-layout">
                <h5 class="m-0">Layout</h5>
                <button data-toggle="collapse" data-target="#collapse-layout" type="button"
                    class="btn btn-link not-collapsed" aria-expanded="true" aria-controls="collapse-layout"
                    style="overflow-anchor: none;">
                    <i class="far fa-angle-down text-body"></i>
                </button>
            </div>

            <div id="collapse-layout" class="mt-2 collapse">
                <div class="form-group">
                    <div class="mr-3">
                        <label><strong>Page width</strong></label>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="range" class="custom-range" min="0" max="100" v-model="store.page_width">
                        </div>
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" v-model="store.page_width" min="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Space between template sections</label>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="range" class="custom-range" min="0" max="100" v-model="store.section_spacing">
                        </div>
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" v-model="store.section_spacing" min="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label><strong>Grid</strong></label>
                        <p class="text-muted">Affects areas with multiple columns or rows.</p>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Horizontal Space</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="range" class="custom-range" min="0" max="100" v-model="store.horizontal_space">
                        </div>
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" v-model="store.horizontal_space" min="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Vertical Space</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="range" class="custom-range" min="0" max="100" v-model="store.vertical_space">
                        </div>
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" v-model="store.vertical_space" min="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-3">
            <div class="d-flex align-items-center justify-content-between" data-toggle="collapse"
                data-target="#collapse-animations">
                <h5 class="m-0">Animations</h5>
                <button data-toggle="collapse" data-target="#collapse-animations" type="button"
                    class="btn btn-link not-collapsed" aria-expanded="true" aria-controls="collapse-animations"
                    style="overflow-anchor: none;">
                    <i class="far fa-angle-down text-body"></i>
                </button>
            </div>

            <div id="collapse-animations" class="mt-2 collapse">
                <div class="form-group">
                    <div class="mr-3">
                        <label>Enable animations</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="enableAnimations"
                                v-model="store.enable_animations">
                            <label class="custom-control-label" for="enableAnimations"></label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Hover effects</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <!-- button group (none, vertical lift, 3d lift)-->
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline-primary active">
                                <input type="radio" name="hoverEffects" id="hoverEffectsNone" autocomplete="off" checked>
                                None
                            </label>
                            <label class="btn btn-outline-primary">
                                <input type="radio" name="hoverEffects" id="hoverEffectsVerticalLift" autocomplete="off">
                                Vertical Lift
                            </label>
                            <label class="btn btn-outline-primary">
                                <input type="radio" name="hoverEffects" id="hoverEffects3DLift" autocomplete="off"> 3D Lift
                            </label>
                        </div>
                    </div>
                    <p class="text-muted mt-2">Affects cards and buttons</p>
                </div>
            </div>
        </div>

        <div class="card p-3">
            <div class="d-flex align-items-center justify-content-between" data-toggle="collapse"
                data-target="#collapse-buttons">
                <h5 class="m-0">Buttons</h5>
                <button data-toggle="collapse" data-target="#collapse-buttons" type="button"
                    class="btn btn-link not-collapsed" aria-expanded="true" aria-controls="collapse-buttons"
                    style="overflow-anchor: none;">
                    <i class="far fa-angle-down text-body"></i>
                </button>
            </div>

            <div id="collapse-buttons" class="mt-2 collapse">
                <div class="form-group">
                    <div class="mr-3">
                        <label><strong>Border</strong></label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Thickness</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="range" class="custom-range" min="0" max="100" v-model="store.button_thickness">
                        </div>
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" v-model="store.button_thickness" min="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Opacity</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="range" class="custom-range" min="0" max="100" v-model="store.button_opacity">
                        </div>
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" v-model="store.button_opacity" min="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Corner radius</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="range" class="custom-range" min="0" max="100" v-model="store.button_corner_radius">
                        </div>
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" v-model="store.button_corner_radius" min="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label><strong>Shadow</strong></label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Opacity</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="range" class="custom-range" min="0" max="100" v-model="store.button_opacity">
                        </div>
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" v-model="store.button_opacity" min="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Horizontal offset</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="range" class="custom-range" min="-100" max="100"
                                v-model="store.button_horizontal_offset">
                        </div>
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" v-model="store.button_horizontal_offset"
                                    min="-100">
                                <div class="input-group-append">
                                    <span class="input-group-text">px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Vertical offset</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="range" class="custom-range" min="-100" max="100"
                                v-model="store.button_vertical_offset">
                        </div>
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" v-model="store.button_vertical_offset" min="-100">
                                <div class="input-group-append">
                                    <span class="input-group-text">px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mr-3">
                        <label>Blur</label>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="range" class="custom-range" v-model="store.button_blur">
                        </div>
                        <div class="ml-3">
                            <div class="input-group mb-3">
                                <input type="number" v-model="store.button_blur" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text">px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        theme: {
            type: Object,
            // required: true
        }
    },

    data() {
        return {
            isUploading: false,
            validationErrors: {},

            fonts: [
                'Arial',
                'Helvetica',
                'Times New Roman',
                'Times',
                'Courier New',
                'Courier',
                'Verdana',
                'Georgia',
                'Palatino',
                'Garamond',
                'Bookman',
                'Comic Sans MS',
                'Trebuchet MS',
                'Arial Black',
                'Impact',
                'Lucida Sans Unicode',
                'Tahoma',
                'Lucida Console',
            ],

            store: {
                logo_width: 50,
                color_schemes: [
                    {
                        name: 'Scheme 1',
                        background: '#ffffff',
                        text: '#121212',
                        solid_button_background: '#1773b0',
                        solid_button_label: '#1773b0',
                        outline_button: '#121212',
                        shadow: '#121212',
                    },
                    {
                        name: 'Scheme 2',
                        background: '#f3f3f3',
                        text: '#121212',
                        solid_button_background: '#121212',
                        solid_button_label: '#f3f3f3',
                        outline_button: '#121212',
                        shadow: '#121212',
                    },
                    {
                        name: 'Scheme 3',
                        background: '#242833',
                        text: '#ffffff',
                        solid_button_background: '#ffffff',
                        solid_button_label: '#000000',
                        outline_button: '#ffffff',
                        shadow: '#121212',
                    },
                    {
                        name: 'Scheme 4',
                        background: '#121212',
                        text: '#ffffff',
                        solid_button_background: '#ffffff',
                        solid_button_label: '#121212',
                        outline_button: '#ffffff',
                        shadow: '#121212',
                    },
                    {
                        name: 'Scheme 5',
                        background: '#334fb4',
                        text: '#ffffff',
                        solid_button_background: '#ffffff',
                        solid_button_label: '#334fb4',
                        outline_button: '#ffffff',
                        shadow: '#121212',
                    },
                    {
                        name: 'Scheme 6',
                        background: '#ffffff',
                        text: '#121212',
                        solid_button_background: '#121212',
                        solid_button_label: '#ffffff',
                        outline_button: '#121212',
                        shadow: '#121212',
                    }
                ]
            },
        }
    },
}
</script>

<style></style>