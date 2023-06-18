<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{$url}css/style.css">    
    <base href={$url}>
    <title>{$title}</title>
</head>

<body>
    {include file= "header.tpl"}    
    <main class="main">        
            {include file= "../aside.tpl"}        
        <div class="main-mensaje">            
                <div>
                    <h1>{$mensaje}</h1>
                </div>                        
        </div>        
    </main>
    {include file= "../footer.tpl"}
</body>

</html>