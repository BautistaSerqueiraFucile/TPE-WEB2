<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <base href={$url}>
    <title>Visualizando Gamas</title>
</head>
<body>
    {include file= "UL_header.tpl"}
    <main class="main">
    {include file= "UL_aside.tpl"}
    <section class="gama">                    
        <article >
            <form action="modificarGama/{$elemento->id_gama}">
                <label for="">Gama</label>
                <input type="text" name="name_gama" value="{$elemento->name_gama}">
                <label for="">Descripcion</label>
                <input type="text" name="description_gama" value="{$elemento->description_gama}">
                <input type="submit" value="Enviar">
            </form>            
        </article>        
    </section>
    </main>
    {include file= "footer.tpl"}
</body>
</html>