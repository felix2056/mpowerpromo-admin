<template>
    <div class="d-flex store-editor row no-gutters">
        <div class="col-12 store-editor-sidebar">
            <div id="store-menu-view" class="container">
                <div data-id="mPowerNavigation" class="pb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <nav class="small">
                            <ol class="breadcrumb pb-0">
                                <li class="breadcrumb-item">
                                    <router-link :to="{ name: 'store' }" title="close">Menu</router-link>
                                </li>
                                <li class="breadcrumb-item active">Payments</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div data-id="mPower-Payments" class="w-100">
                    <div data-id="MPower-Payment">
                        <h3>Payments</h3>
                        <p class="text-muted">
                            Manage the type of payments available to customers.
                            <a href="https://support.mpowerpromo.com/space/MP/512884769/Payments" target="_blank">Learn
                                More</a>
                        </p>
                        <div class="mb-4">
                            <div class="form-group mt-3">
                                <div class="custom-control custom-checkbox mr-4"><input id="styled-checkbox-1"
                                        type="checkbox" name="requirePayment" class="custom-control-input"><label
                                        for="styled-checkbox-1" class="custom-control-label">Require Payment<i
                                            class="fas fa-question-circle text-light ml-2"></i></label></div>
                            </div>
                            <div class="mb-3 custom-control custom-checkbox"><input type="checkbox"
                                    name="allowCreditCardPayments" class="custom-control-input" value="true"
                                    id="__BVID__3599"><label class="custom-control-label" for="__BVID__3599">Allow credit
                                    card payments
                                    <i class="fas fa-question-circle text-light ml-2"></i></label></div>
                            <div class="mb-3 custom-control custom-checkbox"><input type="checkbox"
                                    class="custom-control-input" value="true" id="__BVID__3601"><label
                                    class="custom-control-label" for="__BVID__3601">Allow echeck payment<i
                                        class="fas fa-question-circle text-light ml-2"></i></label></div>
                            <div class="mb-3 custom-control custom-checkbox"><input type="checkbox"
                                    class="custom-control-input" value="true" id="__BVID__3603"><label
                                    class="custom-control-label" for="__BVID__3603">Allow PO payment<i
                                        class="fas fa-question-circle text-light ml-2"></i></label></div><!---->
                        </div>
                        <div class="card p-3">
                            <form>
                                <div>
                                    <h5>Credit Card Processor</h5>
                                    <div class="d-flex">
                                        <div>
                                            <div class="dropdown b-dropdown btn-group" id="__BVID__3609"><!----><button
                                                    aria-haspopup="menu" aria-expanded="false" type="button"
                                                    class="btn dropdown-toggle btn-light" id="__BVID__3609__BV_toggle_">Add
                                                    Payment Processor</button>
                                                <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                    aria-labelledby="__BVID__3609__BV_toggle_">
                                                    <li role="presentation"><a role="menuitem" href="#" target="_self"
                                                            class="dropdown-item">
                                                            Stripe
                                                        </a></li>
                                                    <li role="presentation"><a role="menuitem" href="#" target="_self"
                                                            class="dropdown-item">
                                                            Authorize.net
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ml-2">
                                            <div class="dropdown b-dropdown btn-group" id="__BVID__3605"><!----><button
                                                    aria-haspopup="menu" aria-expanded="false" type="button"
                                                    class="btn dropdown-toggle btn-light"
                                                    id="__BVID__3605__BV_toggle_">Existing Payment Processors</button>
                                                <ul role="menu" tabindex="-1" class="dropdown-menu"
                                                    aria-labelledby="__BVID__3605__BV_toggle_">
                                                    <li role="presentation"><a role="menuitem" href="#" target="_self"
                                                            class="dropdown-item">
                                                            stripe
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card p-3 my-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <div data-spy="scroll" data-target="#navbar-scroll" class="">
                                                    <form data-id="Provider" autocomplete="on" class="col-12 p-0"><!---->
                                                        <div>
                                                            <div class="form-group"><!---->
                                                                <div><!---->
                                                                    <div><label data-id="paymentType">Payment
                                                                            Type</label><!----><!---->
                                                                        <div>
                                                                            <div class="">
                                                                                <div>
                                                                                    <div class="row">
                                                                                        <div class="col-4"><!----></div>
                                                                                        <div class="col-4"><!----></div>
                                                                                        <div class="col-4"><!----></div>
                                                                                    </div><!---->
                                                                                    <div class="d-flex"><input
                                                                                            data-id="paymentType"
                                                                                            minlength="-Infinity"
                                                                                            autofocus="autofocus"
                                                                                            autocomplete="temp" type="text"
                                                                                            object="[object Object]"
                                                                                            field="paymentType"
                                                                                            id="advanced-input-5"
                                                                                            placeholder=""
                                                                                            disabled="disabled" data-mask=""
                                                                                            data-previous-value="stripe"
                                                                                            class="form-control"><!----><!---->
                                                                                    </div>
                                                                                </div><!----><!---->
                                                                            </div><!---->
                                                                        </div>
                                                                    </div><!---->
                                                                </div>
                                                            </div>
                                                            <div class="form-group"><!---->
                                                                <div><!---->
                                                                    <div><label data-id="publishableKey">Publishable
                                                                            Key</label><!----><!---->
                                                                        <div>
                                                                            <div class="">
                                                                                <div>
                                                                                    <div class="row">
                                                                                        <div class="col-4"><!----></div>
                                                                                        <div class="col-4"><!----></div>
                                                                                        <div class="col-4"><!----></div>
                                                                                    </div><!---->
                                                                                    <div class="d-flex"><input
                                                                                            data-id="publishableKey"
                                                                                            minlength="-Infinity"
                                                                                            required="required"
                                                                                            autofocus="autofocus"
                                                                                            autocomplete="temp" type="text"
                                                                                            object="[object Object]"
                                                                                            field="publishableKey"
                                                                                            id="advanced-input-6"
                                                                                            placeholder="" data-mask=""
                                                                                            data-previous-value="pk_test_kQyYYyGdSp1RebGerHqF1guf"
                                                                                            class="form-control"><!----><!---->
                                                                                    </div>
                                                                                </div><!----><!---->
                                                                            </div><!---->
                                                                        </div>
                                                                    </div><!---->
                                                                </div>
                                                            </div>
                                                            <div class="form-group"><!---->
                                                                <div><!---->
                                                                    <div><label data-id="secretKey">Secret
                                                                            Key</label><!----><!---->
                                                                        <div>
                                                                            <div class="">
                                                                                <div>
                                                                                    <div class="row">
                                                                                        <div class="col-4"><!----></div>
                                                                                        <div class="col-4"><!----></div>
                                                                                        <div class="col-4"><!----></div>
                                                                                    </div><!---->
                                                                                    <div class="d-flex"><input
                                                                                            data-id="secretKey"
                                                                                            minlength="-Infinity"
                                                                                            required="required"
                                                                                            autofocus="autofocus"
                                                                                            autocomplete="temp" type="text"
                                                                                            object="[object Object]"
                                                                                            field="secretKey"
                                                                                            id="advanced-input-7"
                                                                                            placeholder="" data-mask=""
                                                                                            data-previous-value="sk_test_y5vYFDF7C5GW4Jiu9bVqpsnQ"
                                                                                            class="form-control"><!----><!---->
                                                                                    </div>
                                                                                </div><!----><!---->
                                                                            </div><!---->
                                                                        </div>
                                                                    </div><!---->
                                                                </div>
                                                            </div>
                                                            <div class="form-group"><!---->
                                                                <div><!---->
                                                                    <div><label data-id="statementDescriptor">Statement
                                                                            Descriptor</label><a data-id="[object Object]"
                                                                            hide-title="true"><i
                                                                                class="fas fa-question-circle text-light ml-2"></i></a><!---->
                                                                        <div>
                                                                            <div class="">
                                                                                <div>
                                                                                    <div class="row">
                                                                                        <div class="col-4"><!----></div>
                                                                                        <div class="col-4"><!----></div>
                                                                                        <div class="col-4"><!----></div>
                                                                                    </div><!---->
                                                                                    <div class="d-flex"><input
                                                                                            data-id="statementDescriptor"
                                                                                            minlength="-Infinity"
                                                                                            autofocus="autofocus"
                                                                                            autocomplete="temp" type="text"
                                                                                            object="[object Object]"
                                                                                            field="statementDescriptor"
                                                                                            id="advanced-input-8"
                                                                                            placeholder="" data-mask=""
                                                                                            data-previous-value=""
                                                                                            class="form-control"><!----><!---->
                                                                                    </div>
                                                                                </div><!----><!---->
                                                                            </div><!---->
                                                                        </div>
                                                                    </div><!---->
                                                                </div>
                                                            </div>
                                                        </div><!---->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="form-inline mb-5"><button data-id="mPower-Save-Payments" type="button"
                                class="btn btn-primary">
                                Save Payments
                            </button><a class="ml-3">Cancel</a></div>
                    </div>
                </div>
            </div>
        </div><!---->
    </div>
</template>

<script>
export default {

}
</script>

<style></style>