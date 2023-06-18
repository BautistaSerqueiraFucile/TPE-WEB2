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
            <form action="modificarPc/{$elemento->id_pc}">                
                    <div>
                        <label for="">Pc Motherboard: </label>
                        <input type="text" name="motherboard" value="{$elemento->motherboard}">
                    </div>
                    <div>
                        <label for="">Processor: </label>
                        <input type="text" name="processor" value="{$elemento->processor}">
                    </div>
                    <div>
                        <label for="">Video: </label>
                        <input type="text" name="video" value="{$elemento->video}">
                    </div>
                    <div>
                        <label for="">RAM</label>
                        <input type="text" name="RAM" value="{$elemento->RAM}">                    
                    </div>
                    <div>
                        <label for="">Description</label>
                        <input type="text" name="description_pc" value="{$elemento->description_pc}">                    
                    </div>
                     <div>
                        <label for="">GAMA</label>
                        <input type="text" name="name_gama" value="{$elemento->name_gama}" readonly>                    
                    </div>
                    <div>                        
                        {include file= "../pc_gamasEdit.tpl"}
                    </div>
                    <input type="submit" value="Editar">            
            
            </form>            
        </article>        
    </section>
    </main>
    {include file= "../footer.tpl"}
</body>
</html>