<?php
/* Smarty version 4.3.1, created on 2023-05-31 00:12:51
  from 'C:\xampp\htdocs\proyectos\TPE-WEB2\templates\pc_detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647674e398c891_03337748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26a616e4a048e00571cd05f93ff73fa9a058c1a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-WEB2\\templates\\pc_detail.tpl',
      1 => 1685484747,
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
function content_647674e398c891_03337748 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <base href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" />
    <title>Detail pc: <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="main">    
        <?php $_smarty_tpl->_subTemplateRender("file:aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
        <section class="detail">
            <div class="title">
                <h1>Detail pc <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
            </div>
            <div id="container">
            <article class="x3" id="tablediv">
                    <table>
                        <tbody>
                            <tr>
                                <td>Motherboard</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pc']->value->motherboard;?>
</td>
                            </tr>
                            <tr>
                                <td>Processor</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pc']->value->processor;?>
</td>
                            </tr>
                            <tr>
                                <td>Video card</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pc']->value->video;?>
</td>
                            </tr>
                            <tr>
                                <td>RAM</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pc']->value->RAM;?>
</td>
                            </tr>
                        </tbody>
                    </table>
                </article>
                <article class="x3">
                    <div class="title">
                        <h2>Pc Description</h2>
                    </div>
                    <p><?php echo $_smarty_tpl->tpl_vars['pc']->value->description_pc;?>
</p>
                </article>                
                <article class="x3">
                    <div class="title">
                        <h2>Gama Description</h2>
                    </div>
                    <p><?php echo $_smarty_tpl->tpl_vars['pc']->value->description_gama;?>
</p>
                </article>

            </div>
        </section>
    </main>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}
