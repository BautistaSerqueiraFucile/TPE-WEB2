<?php
/* Smarty version 4.3.1, created on 2023-05-26 23:23:14
  from 'D:\Descargas\Xampp\htdocs\proyectos\TPE-WEB2\templates\gama_viewAll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6471234254ac86_26619868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '382441af493d1d1d62a6ab0bd101218fc6170737' => 
    array (
      0 => 'D:\\Descargas\\Xampp\\htdocs\\proyectos\\TPE-WEB2\\templates\\gama_viewAll.tpl',
      1 => 1685135645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6471234254ac86_26619868 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1>Esto es <?php echo $_smarty_tpl->tpl_vars['a']->value;?>
 </h1>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
