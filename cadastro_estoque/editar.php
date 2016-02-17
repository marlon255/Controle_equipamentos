<script>
$().ready(function() {
    var tipo = "#consu_esto_pref<?=$exibir_esto['id']?>";
    
    $('#cad_esto_edit<?=$exibir_esto['id']?>').click(function() {
        $(tipo).each(function() {
            if ($(this).attr('disabled')) {
                $(this).removeAttr('disabled');
            }
            else {
                $(this).attr({
                    'disabled': 'disabled'
                });
            }
        });
    });
});
$().ready(function() {
    var sigla = "#consu_esto_cap<?=$exibir_esto['id']?>";

    $('#cad_esto_edit<?=$exibir_esto['id']?>').click(function() {
        $(sigla).each(function() {
            if ($(this).attr('disabled')) {
                $(this).removeAttr('disabled');
            }
            else {
                $(this).attr({
                    'disabled': 'disabled'
                });
            }
        });
    });
});
$().ready(function() {
    var sigla = "#cons_esto_comb<?=$exibir_esto['id']?>";

    $('#cad_esto_edit<?=$exibir_esto['id']?>').click(function() {
        $(sigla).each(function() {
            if ($(this).attr('disabled')) {
                $(this).removeAttr('disabled');
            }
            else {
                $(this).attr({
                    'disabled': 'disabled'
                });
            }
        });
    });
});
</script>