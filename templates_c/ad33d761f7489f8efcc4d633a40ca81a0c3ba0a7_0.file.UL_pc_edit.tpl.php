<?php
/* Smarty version 4.3.1, created on 2023-05-31 19:18:45
  from 'C:\xampp\htdocs\proyectos\TPE-WEB2\templates\UL_pc_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64778175dab786_85144560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad33d761f7489f8efcc4d633a40ca81a0c3ba0a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-WEB2\\templates\\UL_pc_edit.tpl',
      1 => 1685553406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:UL_header.tpl' => 1,
    'file:UL_aside.tpl' => 1,
    'file:gamas.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64778175dab786_85144560 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <base href=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
>
    <title>Visualizando PC-Edit</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:UL_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="main">
    <?php $_smarty_tpl->_subTemplateRender("file:UL_aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="gama">                    
        <article class="pc-gama-edit">
            <form action="modificarPc/<?php echo $_smarty_tpl->tpl_vars['elemento']->value->id_pc;?>
">                
                    <div>
                        <label for="">Pc Motherboard: </label>
                        <input type="text" name="motherboard" value="<?php echo $_smarty_tpl->tpl_vars['elemento']->value->motherboard;?>
">
                    </div>
                    <div>
                        <label for="">Processor: </label>
                        <input type="text" name="processor" value="<?php echo $_smarty_tpl->tpl_vars['elemento']->value->processor;?>
">
                    </div>
                    <div>
                        <label for="">Video: </label>
                        <input type="text" name="video" value="<?php echo $_smarty_tpl->tpl_vars['elemento']->value->video;?>
">
                    </div>
                    <div>
                        <label for="">RAM</label>
                        <input type="text" name="RAM" value="<?php echo $_smarty_tpl->tpl_vars['elemento']->value->RAM;?>
">                    
                    </div>
                     <div>
                        <label for="">GAMA</label>
                        <input type="text" name="name_gama" value="<?php echo $_smarty_tpl->tpl_vars['elemento']->value->name_gama;?>
">                    
                    </div>
                    <div>                        
                        <?php $_smarty_tpl->_subTemplateRender("file:gamas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
