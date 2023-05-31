<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <base href={$url}>
    <title>Visualizando Gama: {$pc_arreglo[0]->name}</title>
</head>
<body>
    {include file= "UL_header.tpl"}
    <main class="main">
    {include file= "UL_aside.tpl"}
    <section>
        <div class="contenido">
        {foreach from=$pc_arreglo item=$elemento}
        <article>
            <a href="detail/{$elemento->id_pc}">
                <ul>                
                <li>ID PC: {$elemento->id_pc}</li>
                    <li>Motherboard: {$elemento->motherboard}</li>
                    <li>Processor: {$elemento->processor}</li>
                    <li>Video Card: {$elemento->video}</li>
                    <li>RAM: {$elemento->RAM}</li>
                    <li>Gama: {$elemento->name_gama}</li>
                </ul>
            </a>
            <a href="editarPc/{$elemento->id_pc}">Edit</a>
            <a href="eliminarPc/$elemento->id_pc">Delete</a>
        </article>
        {/foreach}
    </div>
    </section>
    </main>
    {include file= "footer.tpl"}
</body>
</html>