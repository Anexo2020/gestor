<div class="col-md-10">
    <div class="form-group row">
        <label class="control-label text-right col-md-5">Factura <span class="text-danger">*</span></label>
        <div class="col-md-7 controls">
            <div class="form-group">
                <select name="subcategorypro" id="subcategorypro" class="form-control" aria-invalid="false" ></select>
            </div>
        </div>
    </div>
</div>
<!--/span-->

<script type="text/javascript">
    $(document).ready(function(){
    $("#subcategorypro").on('change', function () {
        $("#subcategorypro option:selected").each(function () {
            var id_fc = $(this).val(); 
            var id_select = id_fc.split('-');
            var fc = id_select[1];
            var saldo = id_select[2];
            var idFc = id_select[0];
            console.log(idFc)

        $("#prov2").empty();
      
        $("#prov2").append('<div class="col-md-10"><div class="form-group row"><label class="control-label text-right col-md-5">Saldo $ <span class="text-danger"></span></label><div class="col-md-7 controls"><div class="form-group"><input type="text" class="form-control" name="saldo" value="'+saldo+'" readonly></div></div></div></div>');
       
        });
   });
});
</script>


                           