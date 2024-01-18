<template>
    <div id="store-menu-view" class="container-fluid">
        <div class="pb-3">
            <nav class="small">
                <ol class="breadcrumb pb-0">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'store' }" title="close">Menu</router-link>
                    </li>
                    <li class="breadcrumb-item active">Theme</li>
                </ol>
            </nav>
        </div>

        <div class="d-flex justify-content-between align-items-center my-3 pb-3 border-bottom">
            <h3 class="mb-0">Theme</h3>
            <button type="button" class="btn btn-primary">Save Theme</button>
        </div>

        <div>
            <div class="row">
                <div class="col-3">
                    <theme-color-system @updating-color-system="isLoadingIframe = true" @updated-color-system="fetchTheme"></theme-color-system>
                    <theme-body></theme-body>
                    <theme-typography></theme-typography>
                    <theme-options></theme-options>

                    <div class="card p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Breadcrumbs</h5><button type="button" class="btn btn-link collapsed"
                                aria-expanded="false" aria-controls="collapse-breadcrumbs" style="overflow-anchor: none;"><i
                                    class="far fa-angle-down text-body"></i></button>
                        </div>
                        <div id="collapse-breadcrumbs" class="mt-2 collapse" style="display: none;">
                            <div data-v-3a7e9bf2="">
                                <fieldset data-v-3a7e9bf2="" class="form-group" id="__BVID__486"><!---->
                                    <div>
                                        <div data-v-3a7e9bf2="" class="d-flex justify-content-between align-items-center">
                                            <div data-v-3a7e9bf2=""><label data-v-3a7e9bf2="">Breadcrumb Padding X</label>
                                                <!---->
                                            </div> <!---->
                                        </div>
                                        <div data-v-3a7e9bf2="" role="group" class="input-group"><!----><!----> <input
                                                data-v-3a7e9bf2="" name="Breadcrumb Padding X" type="text" autocomplete="on"
                                                class="form-control" maxlength="255"
                                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                data-hj-allow="" data-mask="" data-previous-value="0rem" id="__BVID__487">
                                            <!---->
                                        </div> <!---->
                                        <div data-v-3a7e9bf2="" class="invalid-feedback d-block">

                                        </div> <!----><!----><!---->
                                    </div>
                                </fieldset>
                            </div>
                            <div class="d-flex align-items-center">
                                <div tabindex="-1" class="vue-swatches">
                                    <div class="vue-swatches__trigger__wrapper">
                                        <div class="vue-swatches__trigger"
                                            style="width: 30px; height: 30px; background-color: rgb(255, 255, 255); border-radius: 50%;">
                                            <div class="vue-swatches__diagonal__wrapper vue-swatches--has-children-centered"
                                                style="display: none;">
                                                <div class="vue-swatches__diagonal"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vue-swatches__container"
                                        style="background-color: rgb(255, 255, 255); padding: 5px; margin-bottom: 5px; display: none;">
                                        <div class="vue-swatches__wrapper"
                                            style="padding-top: 11px; padding-left: 11px; width: 212px;">
                                            <div class="vue-swatches__row">
                                                <div aria-label="#FFFFFF" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border vue-swatches__swatch--selected"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(255, 255, 255); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div
                                                        class="vue-swatches__check__wrapper vue-swatches--has-children-centered">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                                <div aria-label="#C0C0C0" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(192, 192, 192); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                                <div aria-label="#808080" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(128, 128, 128); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                                <div aria-label="#000000" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(0, 0, 0); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                            </div>
                                            <div class="vue-swatches__row">
                                                <div aria-label="#FF0000" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(255, 0, 0); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                                <div aria-label="#800000" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(128, 0, 0); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                                <div aria-label="#FFFF00" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(255, 255, 0); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                                <div aria-label="#808000" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(128, 128, 0); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                            </div>
                                            <div class="vue-swatches__row">
                                                <div aria-label="#00FF00" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(0, 255, 0); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                                <div aria-label="#008000" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(0, 128, 0); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                                <div aria-label="#00FFFF" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(0, 255, 255); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                                <div aria-label="#008080" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(0, 128, 128); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                            </div>
                                            <div class="vue-swatches__row">
                                                <div aria-label="#0000FF" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(0, 0, 255); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                                <div aria-label="#000080" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(0, 0, 128); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                                <div aria-label="#FF00FF" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(255, 0, 255); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                                <div aria-label="#800080" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(128, 0, 128); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <!---->
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                            </div>
                                            <div class="vue-swatches__row">
                                                <div aria-label="" role="button" tabindex="0"
                                                    class="vue-swatches__swatch vue-swatches__swatch--border"
                                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: rgb(255, 255, 255); cursor: pointer; margin-right: 11px; margin-bottom: 11px;">
                                                    <div
                                                        class="vue-swatches__diagonal__wrapper vue-swatches--has-children-centered">
                                                        <div class="vue-swatches__diagonal"></div>
                                                    </div>
                                                    <div class="vue-swatches__check__wrapper vue-swatches--has-children-centered"
                                                        style="display: none;">
                                                        <div
                                                            class="vue-swatches__check__circle vue-swatches--has-children-centered">
                                                            <svg version="1.1" role="presentation" width="12" height="12"
                                                                viewBox="0 0 1792 1792" class="check">
                                                                <path
                                                                    d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"
                                                                    class="vue-swatches__check__path"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vue-swatches__fallback__wrapper"
                                            style="margin-left: 11px; padding-bottom: 11px; width: 201px;"><span
                                                class="vue-swatches__fallback__input--wrapper"><input type="color"
                                                    class="vue-swatches__fallback__input"></span><button
                                                class="vue-swatches__fallback__button"> Ok </button></div>
                                    </div>
                                </div>
                                <div class="ml-2" style="margin-top: -5px; cursor: pointer;">
                                    Breadcrumb Background
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Links</h5><button type="button" class="btn btn-link collapsed"
                                aria-expanded="false" aria-controls="collapse-links" style="overflow-anchor: none;"><i
                                    class="far fa-angle-down text-body"></i></button>
                        </div>
                        <div id="collapse-links" class="mt-2 collapse" style="display: none;">
                            <div data-v-3a7e9bf2="">
                                <fieldset data-v-3a7e9bf2="" class="form-group" id="__BVID__491"><!---->
                                    <div>
                                        <div data-v-3a7e9bf2="" class="d-flex justify-content-between align-items-center">
                                            <div data-v-3a7e9bf2=""><label data-v-3a7e9bf2="">Link Decoration</label>
                                                <!---->
                                            </div> <!---->
                                        </div>
                                        <div data-v-3a7e9bf2="" role="group" class="input-group"><!----><!----> <select
                                                data-v-3a7e9bf2="" name="Link Decoration" class="custom-select"
                                                id="__BVID__492">
                                                <option data-v-3a7e9bf2="" disabled="disabled" value="">Please select an
                                                    option</option>
                                                <option value="none">none</option>
                                                <option value="underline">underline</option>
                                            </select> <!----></div> <!---->
                                        <div data-v-3a7e9bf2="" class="invalid-feedback d-block">

                                        </div> <!----><!----><!---->
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Components</h5><button type="button" class="btn btn-link collapsed"
                                aria-expanded="false" aria-controls="collapse-components" style="overflow-anchor: none;"><i
                                    class="far fa-angle-down text-body"></i></button>
                        </div>
                        <div id="collapse-components" class="mt-2 collapse" style="display: none;">
                            <div data-v-3a7e9bf2="">
                                <fieldset data-v-3a7e9bf2="" class="form-group" id="__BVID__496"><!---->
                                    <div>
                                        <div data-v-3a7e9bf2="" class="d-flex justify-content-between align-items-center">
                                            <div data-v-3a7e9bf2=""><label data-v-3a7e9bf2="">Border Width</label> <!---->
                                            </div> <!---->
                                        </div>
                                        <div data-v-3a7e9bf2="" role="group" class="input-group"><!----><!----> <input
                                                data-v-3a7e9bf2="" name="Border Width" type="text" autocomplete="on"
                                                class="form-control" maxlength="255"
                                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                data-hj-allow="" data-mask="" data-previous-value="1px" id="__BVID__497">
                                            <!---->
                                        </div> <!---->
                                        <div data-v-3a7e9bf2="" class="invalid-feedback d-block">

                                        </div> <!----><!----><!---->
                                    </div>
                                </fieldset>
                            </div>
                            <div data-v-3a7e9bf2="">
                                <fieldset data-v-3a7e9bf2="" class="form-group" id="__BVID__499"><!---->
                                    <div>
                                        <div data-v-3a7e9bf2="" class="d-flex justify-content-between align-items-center">
                                            <div data-v-3a7e9bf2=""><label data-v-3a7e9bf2="">Border Radius</label> <!---->
                                            </div> <!---->
                                        </div>
                                        <div data-v-3a7e9bf2="" role="group" class="input-group"><!----><!----> <input
                                                data-v-3a7e9bf2="" name="Border Radius" type="text" autocomplete="on"
                                                class="form-control" maxlength="255"
                                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                data-hj-allow="" data-mask="" data-previous-value=".25rem" id="__BVID__500">
                                            <!---->
                                        </div> <!---->
                                        <div data-v-3a7e9bf2="" class="invalid-feedback d-block">

                                        </div> <!----><!----><!---->
                                    </div>
                                </fieldset>
                            </div>
                            <div data-v-3a7e9bf2="">
                                <fieldset data-v-3a7e9bf2="" class="form-group" id="__BVID__502"><!---->
                                    <div>
                                        <div data-v-3a7e9bf2="" class="d-flex justify-content-between align-items-center">
                                            <div data-v-3a7e9bf2=""><label data-v-3a7e9bf2="">Border Radius Sm</label>
                                                <!---->
                                            </div> <!---->
                                        </div>
                                        <div data-v-3a7e9bf2="" role="group" class="input-group"><!----><!----> <input
                                                data-v-3a7e9bf2="" name="Border Radius Sm" type="text" autocomplete="on"
                                                class="form-control" maxlength="255"
                                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                data-hj-allow="" data-mask="" data-previous-value=".2rem" id="__BVID__503">
                                            <!---->
                                        </div> <!---->
                                        <div data-v-3a7e9bf2="" class="invalid-feedback d-block">

                                        </div> <!----><!----><!---->
                                    </div>
                                </fieldset>
                            </div>
                            <div data-v-3a7e9bf2="">
                                <fieldset data-v-3a7e9bf2="" class="form-group" id="__BVID__505"><!---->
                                    <div>
                                        <div data-v-3a7e9bf2="" class="d-flex justify-content-between align-items-center">
                                            <div data-v-3a7e9bf2=""><label data-v-3a7e9bf2="">Border Radius Lg</label>
                                                <!---->
                                            </div> <!---->
                                        </div>
                                        <div data-v-3a7e9bf2="" role="group" class="input-group"><!----><!----> <input
                                                data-v-3a7e9bf2="" name="Border Radius Lg" type="text" autocomplete="on"
                                                class="form-control" maxlength="255"
                                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                data-hj-allow="" data-mask="" data-previous-value=".3rem" id="__BVID__506">
                                            <!---->
                                        </div> <!---->
                                        <div data-v-3a7e9bf2="" class="invalid-feedback d-block">

                                        </div> <!----><!----><!---->
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Forms</h5><button type="button" class="btn btn-link collapsed"
                                aria-expanded="false" aria-controls="collapse-forms" style="overflow-anchor: none;"><i
                                    class="far fa-angle-down text-body"></i></button>
                        </div>
                        <div id="collapse-forms" class="mt-2 collapse" style="display: none;">
                            <div data-v-3a7e9bf2="">
                                <fieldset data-v-3a7e9bf2="" class="form-group" id="__BVID__510"><!---->
                                    <div>
                                        <div data-v-3a7e9bf2="" class="d-flex justify-content-between align-items-center">
                                            <div data-v-3a7e9bf2=""><label data-v-3a7e9bf2="">Button Border Radius</label>
                                                <!---->
                                            </div> <!---->
                                        </div>
                                        <div data-v-3a7e9bf2="" role="group" class="input-group"><!----><!----> <input
                                                data-v-3a7e9bf2="" name="Button Border Radius" type="text" autocomplete="on"
                                                class="form-control" maxlength="255"
                                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                data-hj-allow="" data-mask="" data-previous-value=".25rem" id="__BVID__511">
                                            <!---->
                                        </div> <!---->
                                        <div data-v-3a7e9bf2="" class="invalid-feedback d-block">

                                        </div> <!----><!----><!---->
                                    </div>
                                </fieldset>
                            </div>
                            <div data-v-3a7e9bf2="">
                                <fieldset data-v-3a7e9bf2="" class="form-group" id="__BVID__513"><!---->
                                    <div>
                                        <div data-v-3a7e9bf2="" class="d-flex justify-content-between align-items-center">
                                            <div data-v-3a7e9bf2=""><label data-v-3a7e9bf2="">Button Border Radius
                                                    Small</label> <!----></div> <!---->
                                        </div>
                                        <div data-v-3a7e9bf2="" role="group" class="input-group"><!----><!----> <input
                                                data-v-3a7e9bf2="" name="Button Border Radius Small" type="text"
                                                autocomplete="on" class="form-control" maxlength="255"
                                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                data-hj-allow="" data-mask="" data-previous-value=".2rem" id="__BVID__514">
                                            <!---->
                                        </div> <!---->
                                        <div data-v-3a7e9bf2="" class="invalid-feedback d-block">

                                        </div> <!----><!----><!---->
                                    </div>
                                </fieldset>
                            </div>
                            <div data-v-3a7e9bf2="">
                                <fieldset data-v-3a7e9bf2="" class="form-group" id="__BVID__516"><!---->
                                    <div>
                                        <div data-v-3a7e9bf2="" class="d-flex justify-content-between align-items-center">
                                            <div data-v-3a7e9bf2=""><label data-v-3a7e9bf2="">Button Border Radius
                                                    Large</label> <!----></div> <!---->
                                        </div>
                                        <div data-v-3a7e9bf2="" role="group" class="input-group"><!----><!----> <input
                                                data-v-3a7e9bf2="" name="Button Border Radius Large" type="text"
                                                autocomplete="on" class="form-control" maxlength="255"
                                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                data-hj-allow="" data-mask="" data-previous-value=".3rem" id="__BVID__517">
                                            <!---->
                                        </div> <!---->
                                        <div data-v-3a7e9bf2="" class="invalid-feedback d-block">

                                        </div> <!----><!----><!---->
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="position-relative">
                        <div v-if="isLoadingIframe" class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center pt-5" style="top: 0px; background: white; opacity: 0.5;">
                            <i class="far fa-spinner-third fa-spin fa-3x"></i>
                        </div>
                        <iframe v-show="!isLoadingIframe" ref="bootstrapIframe" width="100%" height="6000" frameborder="0" src="/templates/bootstrap.html"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';

import ThemeColorSystem from './theme/ColorSystem.vue';
import ThemeBody from './theme/Body.vue';
import ThemeTypography from './theme/Typography.vue';
import ThemeOptions from './theme/Options.vue';

export default {
    components: {
        ThemeColorSystem,
        ThemeBody,
        ThemeTypography,
        ThemeOptions,
    },

    data() {
        return {
            isLoading: false,
            isLoadingIframe: false,
            validationErrors: {},

            theme: {}
        }
    },

    computed: {
        ...mapGetters({
            store: 'userstore/store',
        }),
    },

    created() {
        this.fetchTheme()
    },

    methods: {
        async fetchTheme() {
            this.isLoadingIframe = true;

            const { data } = await axios.get(`/stores/theme`, {
                headers: {
                    'X-Tenant-UUID': this.store.host
                }
            });
        
            this.theme = data.theme;

            // embed css link tag into iframe head
            const iframeHead = this.$refs.bootstrapIframe.contentDocument.head;
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.type = 'text/css';
            link.href = this.theme.css_file
            iframeHead.appendChild(link);

            // console.log(link)
            this.isLoadingIframe = false;
        }
    }

    
}
</script>

<style lang="scss">
// @import "../../../assets/scss/variables.scss";
</style>