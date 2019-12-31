<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:40:04
  from '/var/www/html/modules/an_productfields/views/templates/admin/script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b4fb421cc42_33943220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '628b8f3caca66e0077229bb5d5db16846385526c' => 
    array (
      0 => '/var/www/html/modules/an_productfields/views/templates/admin/script.tpl',
      1 => 1577795554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b4fb421cc42_33943220 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    var hidedFields = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_getFieldsRelations']->value,'quotes' ));?>
;
    var shower = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_getTypeFieldsHider']->value,'quotes' ));?>
;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
        $(document).ready(function () {
            $(".multishop_toolbar").hide();

            $('input[type="radio"][name="type"]').click(function () {
                for (var field in hidedFields) {
                    var elem = $('input[name^="' + hidedFields[field] + '"]');
                    elem.each(function () {
                        $(this).parents('.form-group').hide();
                    });
                }

                var type = $(this).val();
                if (typeof shower[type] == 'object') {
                    for (var field in shower[type]) {
                        var elem = $('input[name^="' + shower[type][field] + '"]');
                        elem.each(function () {
                            $(this).parents('.form-group').show();
                        });
                    }
                }
            });

            $('input[type="radio"][name="type"]:checked').click();
        });
<?php echo '</script'; ?>
><?php }
}
