<?php
/* Smarty version 4.3.1, created on 2023-05-28 00:19:32
  from 'C:\xampp\htdocs\TPE-WEB2-copia\templates\aside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647281f4ea6ad6_04329757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3e97af4aa0326911e2f614dae138033931f5da4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2-copia\\templates\\aside.tpl',
      1 => 1685225884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647281f4ea6ad6_04329757 (Smarty_Internal_Template $_smarty_tpl) {
?><aside>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gama_arreglo']->value, 'elemento');
$_smarty_tpl->tpl_vars['elemento']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
$_smarty_tpl->tpl_vars['elemento']->do_else = false;
?>
        
        <a href="////">
            <li><?php echo $_smarty_tpl->tpl_vars['elemento']->value->name;?>
</li>
        </a>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</aside><?php }
}
