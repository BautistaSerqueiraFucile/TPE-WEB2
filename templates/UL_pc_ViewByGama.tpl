<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <base href={$url}>
    <title>{$title}</title>
</head>
<body>
    {include file= "header.tpl"}
    <main class="main">
    {include file= "aside.tpl"}
    <section class="seccionPc">            
        {foreach from=$pc_arreglo item=$elemento}
        <article>
            <a href="detail/{$elemento->id_pc}">
                <ul>
                <img src="https://s3-sa-east-1.amazonaws.com/saasargentina/JsxkDHYTeoqs0meqg4G2/imagen" alt="PC ARMADA">
                <li>ID PC: {$elemento->id_pc}</li>
                    <li>Motherboard: {$elemento->motherboard}</li>
                    <li>Processor: {$elemento->processor}</li>
                    <li>Video Card: {$elemento->video}</li>
                    <li>RAM: {$elemento->RAM}</li>
                    <li>Gama: {$elemento->name_gama}</li>
                </ul>
            </a>              
            <a href="editarPc/{$elemento->id_pc}">Edit</a>
            <a href="eliminarPc/{$elemento->id_pc}">Delete</a>
        </article>
        {/foreach}    
    </section>
    </main>
    {include file= "footer.tpl"}
</body>
</html>
