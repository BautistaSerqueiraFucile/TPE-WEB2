<?php
/* Smarty version 4.3.1, created on 2023-05-28 23:01:04
  from 'D:\Descargas\Xampp\htdocs\proyectos\TPE-WEB2\templates\aside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6473c110e4bcf8_29518343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2761312249f3c90ba09402291c6bd1497df0e48' => 
    array (
      0 => 'D:\\Descargas\\Xampp\\htdocs\\proyectos\\TPE-WEB2\\templates\\aside.tpl',
      1 => 1685307631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6473c110e4bcf8_29518343 (Smarty_Internal_Template $_smarty_tpl) {
?><aside>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gama_arreglo']->value, 'elemento');
$_smarty_tpl->tpl_vars['elemento']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
$_smarty_tpl->tpl_vars['elemento']->do_else = false;
?>
        <a href="gama/<?php echo $_smarty_tpl->tpl_vars['elemento']->value->id_gama;?>
">
            <li><?php echo $_smarty_tpl->tpl_vars['elemento']->value->name;?>
</li>
        </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</aside><?php }
}
