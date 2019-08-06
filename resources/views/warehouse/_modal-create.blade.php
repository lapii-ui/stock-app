<div class="create-warehouse">
    <div class="modal fade" id="createWarehouseModal" tabindex="-1" role="dialog" aria-labelledby="createWarehouse"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('proceed-warehouse') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <i class="fas fa-bookmark"></i>
                        <h5 class="modal-title" id="editCredit">@lang('Create Warehouse')</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-inline">
                            <label for="warehouse-name" class="col-ms-3">Name</label>
                            <input type="hidden" name="id" id="id" class="form_input">
                            <input type="text" name="warehouse_name" id="warehouse_name" class="col-ms-9 form_input">
                        </div>
                        <div class="form-inline">
                            <label for="address" class="col-ms-3">Location</label>
                            <textarea name="address" id="address" class="col-ms-9 form_text_area" rows="1"></textarea>
                        </div>
                        <div class="form-inline">
                            <label for="remark" class="col-ms-3">Remark</label>
                            <textarea name="remark" id="remark" class="col-ms-9 form_text_area" rows="1"></textarea>
                            <input type="hidden" name="stock" id="stock" class="form_input" value="0.00">
                            <input type="hidden" name="is_delete" id="is_delete" class="form_input" value="0">
                        </div>
                        <div class="form-inline">
                            <label for="isDefault" class="col-ms-3">Is Default</label>
                            <input type="checkbox" id="is_default" name="is_default" class="col-ms-9">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn_warning reset" data-dismiss="modal">@lang('Cancel')</button>
                        <button type="submit" id="btn-create-warehouse" class="btn_info">@lang('Submit')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>