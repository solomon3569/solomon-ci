<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php include APPPATH . 'views/include/lib_js.php'?>
<script>
    $("#lang_choose").change(function()
    {
        var lang_choose = $("#lang_choose").val();
        var base_url = "<?php echo base_url()?>user/ajax_check_lang";
        $.ajax({
            type: "POST",
            url: base_url,
            data: "&lang="+lang_choose,
            // dataType: "JSON",
            cache:false,
            success: function(result){
                console.log(lang_choose);
                // location.reload();
            }
        })
    });
</script>