const Warehouse ={
    init: function(){
        this.clickEditForm($('.edit-warehouse-form'), $('.btn-update-warehouse'), $('#editWarehouseModal'));
        this.clickDeleteRow($('.delete-warehouse-row'));
    },
    clickEditForm($element, $btnUpdate, $params){
        $element.on('click', function(){
            $params.modal('show');
            const warehouse = $(this).data('form');

            $('.id').val(warehouse.id);
            $('.warehouse-name').val(warehouse.warehouse_name);
            $('.address').val(warehouse.address);
            $('.remark').val(warehouse.remark);
            $('.is-default').attr('checked', warehouse.is_default == 1 ? true : false);
        });

        $btnUpdate.on('click', () => {
            const frmData = $('#frm-update-warehouse').serialize();
            let $id = $('.id').val()
            
            $.ajax({
                method: 'POST',
                url: '/update/warehouse/'+ $id,
                data: frmData,
                success: (data) => {
                    console.log(data.success);
                    if( data.success == true ) {
                        toastr.success(data.message, () => {
                            location.reload();
                        });
                    }else {
                        toastr.error(data.message, () => {
                            // location.reload();
                        });
                    }
                }
            });
        });
    },
    clickDeleteRow($element){
        $element.on('click', function(){
            let $id = $(this).data('form');
            alert('Warning ' + $id + ' !!');
        });
    }
}
export default Warehouse;

$(document).ready( () => {
    Warehouse.init();
});