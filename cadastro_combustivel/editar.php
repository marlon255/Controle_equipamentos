<script>
$().ready(function() {
	var tipo = "#cad_nome_comb<?=$exibir_comb['id']?>";
	
    $('#editar_comb<?=$exibir_comb['id']?>').click(function() {
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
	var sigla = "#cad_pref_comb<?=$exibir_comb['id']?>";

    $('#editar_comb<?=$exibir_comb['id']?>').click(function() {
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
    var sigla = "#cad_unid_comb<?=$exibir_comb['id']?>";

    $('#editar_comb<?=$exibir_comb['id']?>').click(function() {
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