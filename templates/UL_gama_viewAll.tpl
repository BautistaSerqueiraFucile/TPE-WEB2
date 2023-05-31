<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <base href={$url}>
    <title>LOGUEADO/Visualizando Gamas</title>
</head>
<body>
    {include file= "UL_header.tpl"}
    <main class="main">
    {include file= "aside.tpl"}
    <section class="gama">            
        {foreach from=$gama_arreglo item=$elemento}        
        <article>
            <img src="https://s3-sa-east-1.amazonaws.com/saasargentina/aI9NjVi7UOyVP5Nz24eN/imagen" alt="PCBYGAMA">
            <a href="gama/{$elemento->id_gama}">
                <ul>
                <li>ID GAMA: {$elemento->id_gama}</li>
                <li>Nombre: {$elemento->name_gama}</li>                
                <li>Descripcion: {$elemento->description_gama}</li>
                </ul>
            </a>
            <div class="btn_editar-eliminar">
            <a href="editarGama/{$elemento->id_gama}">Edit</a>
            <a href="eliminarGama/{$elemento->id_gama}">Delete</a>
            </div>
        </article>
        {/foreach}    
    </section>
    </main>
    {include file= "footer.tpl"}
</body>
</html>