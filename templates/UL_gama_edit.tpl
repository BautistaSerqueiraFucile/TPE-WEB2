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
        <article class="pc-gama-edit">
            <form action="modificarGama/{$elemento->id_gama}">                
                    <div>
                        <label for="">Gama: </label>
                        <input type="text" name="name_gama" value="{$elemento->name_gama}">
                    </div>
                    <div>
                        <label for="">Descripcion</label>
                        <input type="text" name="description_gama" value="{$elemento->description_gama}">                    
                    </div>
                    <input type="submit" value="Editar">     
            </form>            
        </article>        
    </section>
    </main>
    {include file= "footer.tpl"}
</body>
</html>