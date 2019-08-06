<div class="edit-warehouse">
    <div class="modal fade" id="editWarehouseModal" tabindex="-1" role="dialog" aria-labelledby="editWarehouse"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="frm-update-warehouse" method="post">
                @csrf
                    <div class="modal-header">
                        <i class="fas fa-bookmark"></i>
                        <h5 class="modal-title" id="editCredit">@lang('Edit Warehouse')</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-inline">
                            <label for="warehouse-name" class="col-ms-3">Name</label>
                            <input type="hidden" name="id" id="id" class="col-ms-9 form_input id" readonly>
                            <input type="text" name="warehouse_name" id="warehouse-name" class="col-ms-9 form_input warehouse-name">
                        </div>
                        <div class="form-inline">
                            <label for="address" class="col-ms-3">Location</label>
                            <textarea name="address" id="address" class="col-ms-9 form_text_area address" rows="1"></textarea>
                        </div>
                        <div class="form-inline">
                            <label for="remark" class="col-ms-3">Remark</label>
                            <textarea name="remark" id="remark" class="col-ms-9 form_text_area remark" rows="1"></textarea>
                        </div>
                        <div class="form-inline">
                            <label for="is_default" class="col-ms-3">Is Default</label>
                            <input type="checkbox" id="is-default" name="is_default" class="col-ms-9 is-default">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn_warning reset" data-dismiss="modal">@lang('Cancel')</button>
                        <button type="button" id="btn-update-warehouse" class="btn_info btn-update-warehouse">@lang('Update')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>