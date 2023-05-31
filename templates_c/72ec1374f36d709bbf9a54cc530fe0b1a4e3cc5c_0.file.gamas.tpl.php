<?php
/* Smarty version 4.3.1, created on 2023-05-31 19:18:45
  from 'C:\xampp\htdocs\proyectos\TPE-WEB2\templates\gamas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64778175ed0ba7_85207323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72ec1374f36d709bbf9a54cc530fe0b1a4e3cc5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-WEB2\\templates\\gamas.tpl',
      1 => 1685553421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64778175ed0ba7_85207323 (Smarty_Internal_Template $_smarty_tpl) {
?><label for="">Elegir gama nueva: </label>
<select name="gama">
    <option value=""></option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gama_arreglo']->value, 'elemento');
$_smarty_tpl->tpl_vars['elemento']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
$_smarty_tpl->tpl_vars['elemento']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['elemento']->value->id_gama;?>
"><?php echo $_smarty_tpl->tpl_vars['elemento']->value->name_gama;?>
;</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select><?php }
}
