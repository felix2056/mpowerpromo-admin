<template>
    <div id="notification-modal" role="dialog" aria-hidden="true" class="modal right fade">
        <div role="document"
            class="modal-dialog modal-dialog-slideout modal-dialog-slideout-right modial-dialog-slideout-sm">
            <div class="modal-content">
                <div>
                    <div class="border-bottom d-flex justify-content-between align-items-center p-3">
                        <h4 class="mb-0">Notifications</h4><a data-dismiss="modal" class="text-secondary"><i
                                class="far fa-times fa-1x ml-auto"></i></a>
                    </div>
                    <div><!----></div>
                    <div><!----></div>
                    <div class="ml-4 mt-2 custom-control custom-checkbox"><input type="checkbox"
                            class="custom-control-input" value="true" id="__BVID__65"><label class="custom-control-label"
                            for="__BVID__65">Only show my orders
                        </label></div>
                    <div class="ml-4 mt-2 custom-control custom-checkbox"><input type="checkbox"
                            class="custom-control-input" value="true" id="__BVID__66"><label class="custom-control-label"
                            for="__BVID__66">
                            Test Orders
                        </label></div>
                    <div class="d-flex align-items-center justify-content-center mt-2"><small class="">Last update:
                            10/16/2023, 3:23:20 pm</small><a class="ml-3"><i class="fas fa-sync"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style></style>