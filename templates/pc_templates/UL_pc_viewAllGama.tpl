<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{$url}css/style.css">
    <base href={$url}>
    <title>Visualizando Gama: {$pc_arreglo[0]->name}</title>
</head>
<body>
    {include file= "../UL_header.tpl"}
    <main class="main">
    {include file= "../aside.tpl"}
    <section>
        <div class="contenido">
        {foreach from=$pc_arreglo item=$elemento}
        <article>
            <a href="detail/{$elemento->id_pc}">
                <ul>                                
                    <img src="https://s3-sa-east-1.amazonaws.com/saasargentina/JsxkDHYTeoqs0meqg4G2/imagen" alt="PC ARMADA">                
                    <li><span class="atributo">Motherboard:</span> {$elemento->motherboard}</li>
                    <li><span class="atributo">Processor:</span> {$elemento->processor}</li>
                    <li><span class="atributo">RAM:</span> {$elemento->RAM}</li>
                    <li><span class="atributo">Disco:</span> {$elemento->disco}</li>  
                    <li><span class="atributo">Video card:</span> {$elemento->video}</li>                    
                    <li><span class="atributo">Gama:</span> {$elemento->name_gama}</li>
                </ul>
            </a>
            <a href="editarPc/{$elemento->id_pc}" id="editar-eliminar">Edit</a>
            <a href="confirmarEliminarPc/{$elemento->id_pc}" id="editar-eliminar">Delete</a>
        </article>
        {/foreach}
    </div>
    </section>
    </main>
    {include file= "../footer.tpl"}
</body>
</html>