<?php
/* Smarty version 4.3.1, created on 2023-05-31 20:32:45
  from 'D:\Descargas\Xampp\htdocs\proyectos\TPE-WEB2\templates\UL_gama_viewAll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647792cd3d9fd0_06256637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2904b2de263d058deba37ee8267c604a6d7c447' => 
    array (
      0 => 'D:\\Descargas\\Xampp\\htdocs\\proyectos\\TPE-WEB2\\templates\\UL_gama_viewAll.tpl',
      1 => 1685557960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:UL_header.tpl' => 1,
    'file:aside.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647792cd3d9fd0_06256637 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <base href=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
>
    <title>LOGUEADO/Visualizando Gamas</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:UL_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="main">
    <?php $_smarty_tpl->_subTemplateRender("file:aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="gama">            
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gama_arreglo']->value, 'elemento');
$_smarty_tpl->tpl_vars['elemento']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
$_smarty_tpl->tpl_vars['elemento']->do_else = false;
?>        
        <article>
            <img src="https://s3-sa-east-1.amazonaws.com/saasargentina/aI9NjVi7UOyVP5Nz24eN/imagen" alt="PCBYGAMA">
            <a href="gama/<?php echo $_smarty_tpl->tpl_vars['elemento']->value->id_gama;?>
">
                <ul>
                <li>ID GAMA: <?php echo $_smarty_tpl->tpl_vars['elemento']->value->id_gama;?>
</li>
                <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['elemento']->value->name_gama;?>
</li>                
                <li>Descripcion: <?php echo $_smarty_tpl->tpl_vars['elemento']->value->description_gama;?>
</li>
                </ul>
            </a>
            <div class="btn_editar-eliminar">
            <a href="editarGama/<?php echo $_smarty_tpl->tpl_vars['elemento']->value->id_gama;?>
">Edit</a>
            <a href="eliminarGama/<?php echo $_smarty_tpl->tpl_vars['elemento']->value->id_gama;?>
">Delete</a>
            </div>
        </article>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
    </section>
    </main>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
