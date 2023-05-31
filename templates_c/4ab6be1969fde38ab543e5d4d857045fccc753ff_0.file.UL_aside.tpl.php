<?php
/* Smarty version 4.3.1, created on 2023-05-31 00:12:41
  from 'C:\xampp\htdocs\proyectos\TPE-WEB2\templates\UL_aside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647674d959eff6_25672216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ab6be1969fde38ab543e5d4d857045fccc753ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-WEB2\\templates\\UL_aside.tpl',
      1 => 1685484745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647674d959eff6_25672216 (Smarty_Internal_Template $_smarty_tpl) {
?>
<aside>
    <ul>    
         <a href="gamas">
            <li>Informacion de Gamas</li>
        </a>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gama_arreglo']->value, 'elemento');
$_smarty_tpl->tpl_vars['elemento']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
$_smarty_tpl->tpl_vars['elemento']->do_else = false;
?>
        <a href="gama/<?php echo $_smarty_tpl->tpl_vars['elemento']->value->id_gama;?>
">
            <li><?php echo $_smarty_tpl->tpl_vars['elemento']->value->name_gama;?>
</li>
        </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</aside>
<?php }
}
