<?php
/* Smarty version 4.3.1, created on 2023-05-31 19:52:16
  from 'C:\xampp\htdocs\proyectos\TPE-WEB2\templates\UL_pc_viewByGama.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64778950c8a0a4_67590555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f173a7e2858364abe0faf8d59ef693cb6987511' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-WEB2\\templates\\UL_pc_viewByGama.tpl',
      1 => 1685555535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:aside.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64778950c8a0a4_67590555 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <base href=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="main">
    <?php $_smarty_tpl->_subTemplateRender("file:aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="seccionPc">            
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pc_arreglo']->value, 'elemento');
$_smarty_tpl->tpl_vars['elemento']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
$_smarty_tpl->tpl_vars['elemento']->do_else = false;
?>
        <article>
            <a href="detail/<?php echo $_smarty_tpl->tpl_vars['elemento']->value->id_pc;?>
">
                <ul>
                <img src="https://s3-sa-east-1.amazonaws.com/saasargentina/JsxkDHYTeoqs0meqg4G2/imagen" alt="PC ARMADA">
                <li>ID PC: <?php echo $_smarty_tpl->tpl_vars['elemento']->value->id_pc;?>
</li>
                    <li>Motherboard: <?php echo $_smarty_tpl->tpl_vars['elemento']->value->motherboard;?>
</li>
                    <li>Processor: <?php echo $_smarty_tpl->tpl_vars['elemento']->value->processor;?>
</li>
                    <li>Video Card: <?php echo $_smarty_tpl->tpl_vars['elemento']->value->video;?>
</li>
                    <li>RAM: <?php echo $_smarty_tpl->tpl_vars['elemento']->value->RAM;?>
</li>
                    <li>Gama: <?php echo $_smarty_tpl->tpl_vars['elemento']->value->name_gama;?>
</li>
                </ul>
            </a>              
            <a href="editarPc/<?php echo $_smarty_tpl->tpl_vars['elemento']->value->id_pc;?>
">Edit</a>
            <a href="eliminarPc/<?php echo $_smarty_tpl->tpl_vars['elemento']->value->id_pc;?>
">Delete</a>
        </article>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
    </section>
    </main>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
