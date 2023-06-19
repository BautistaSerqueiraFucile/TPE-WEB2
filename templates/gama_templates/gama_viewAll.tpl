<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{$url}css/style.css">
    <base href={$url}>
    <title>Visualizando Gamas</title>
</head>

<body>
    {include file= "../header.tpl"}
    <main class="main">
        {include file= "../aside.tpl"}
        <section class="gama">
            {foreach from=$gama_arreglo item=$elemento}
                <article>
                    <img src="https://s3-sa-east-1.amazonaws.com/saasargentina/aI9NjVi7UOyVP5Nz24eN/imagen" alt="PCBYGAMA">
                    <a href="gama/{$elemento->id_gama}">
                        <ul>
                            <li><samp class="atributo">Gama:</samp> {$elemento->name_gama}</li>
                            <li><span class="atributo">Descripcion:</span> {$elemento->description_gama}</li>
                        </ul>
                    </a>
                </article>
            {/foreach}
        </section>
    </main>
    {include file= "../footer.tpl"}
</body>

</html>