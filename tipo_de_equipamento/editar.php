<script>
$().ready(function() {
	var tipo = "#seacher_tipo_equi<?=$exibir['id']?>";
	
    $('#editar_tipo_equi<?=$exibir['id']?>').click(function() {
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
	var sigla = "#seacher_tipo_sigla<?=$exibir['id']?>";

    $('#editar_tipo_equi<?=$exibir['id']?>').click(function() {
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