<?php
/* Smarty version 4.3.1, created on 2023-05-31 04:23:42
  from 'C:\xampp\htdocs\proyectos\TPE-WEB2\templates\UL_gama_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6476afae9959a0_95673076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc0cf56a368951038ed68474ab258a583bb8d834' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-WEB2\\templates\\UL_gama_edit.tpl',
      1 => 1685499793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:UL_header.tpl' => 1,
    'file:UL_aside.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6476afae9959a0_95673076 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <base href=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
>
    <title>Visualizando Gamas</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:UL_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="main">
    <?php $_smarty_tpl->_subTemplateRender("file:UL_aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="gama">                    
        <article class="gama-edit">
            <form action="modificarGama/<?php echo $_smarty_tpl->tpl_vars['elemento']->value->id_gama;?>
">                
                    <div>
                        <label for="">Gama: </label>
                        <input type="text" name="name_gama" value="<?php echo $_smarty_tpl->tpl_vars['elemento']->value->name_gama;?>
">
                    </div>
                    <div>
                        <label for="">Descripcion</label>
                        <input type="text" name="description_gama" value="<?php echo $_smarty_tpl->tpl_vars['elemento']->value->description_gama;?>
">                    
                    </div>
                    <input type="submit" value="Editar">              
                
            </form>            
        </article>        
    </section>
    </main>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
