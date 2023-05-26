<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {include file= "header.tpl"}
    <div>
        {foreach from=$arreglo item=$elemento}
        <div>
            <a href="////">
                <ul>
                    <li>Motherboard: {$elemento->motherboard}</li>
                    <li>processor: {$elemento->processor}</li>
                    <li>Video Card: {$elemento->video}</li>
                    <li>RAM: {$elemento->RAM}</li>
                    <li>Gama: {$elemento->name}</li>
                </ul>
            </a>
        </div>
        {/foreach}
    </div>
    {include file= "footer.tpl"}
</body>
</html>