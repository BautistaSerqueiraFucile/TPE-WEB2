<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{$url}css/style.css">
    <base href={$url}>
    <title>Visualizando PC-Edit</title>
</head>
<body>
    {include file= "../UL_header.tpl"}
    <main class="main">
    {include file= "../aside.tpl"}
    <section class="gama">                    
        <article class="pc-gama-edit">
            <form action="createGama">                
                    <div>
                        <label for="">Name: </label>
                        <input type="text" name="name" required>
                    </div>
                    <div>
                        <label for="">Description: </label>
                        <input type="text" name="description_gama">
                    </div>
                    <input type="submit" value="Crear">            
            </form>            
        </article>        
    </section>
    </main>
    {include file= "../footer.tpl"}
</body>
</html>