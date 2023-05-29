<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <base href="{$url}" />
    <title>Detail pc: {$title}</title>
</head>

<body>
    {include file="header.tpl"}
    <main class="main">    
        {include file= "aside.tpl"}    
        <section class="detail">
            <div class="title">
                <h1>Detail pc {$title}</h1>
            </div>
            <div id="container">
            <article class="x3" id="tablediv">
                    <table>
                        <tbody>
                            <tr>
                                <td>Motherboard</td>
                                <td>{$pc->motherboard}</td>
                            </tr>
                            <tr>
                                <td>Processor</td>
                                <td>{$pc->processor}</td>
                            </tr>
                            <tr>
                                <td>Video card</td>
                                <td>{$pc->video}</td>
                            </tr>
                            <tr>
                                <td>RAM</td>
                                <td>{$pc->RAM}</td>
                            </tr>
                        </tbody>
                    </table>
                </article>
                <article class="x3">
                    <div class="title">
                        <h2>Pc Description</h2>
                    </div>
                    <p>{$pc->description_pc}</p>
                </article>                
                <article class="x3">
                    <div class="title">
                        <h2>Gama Description</h2>
                    </div>
                    <p>{$pc->description_gama}</p>
                </article>

            </div>
        </section>
    </main>
    {include file="footer.tpl"}
</body>

</html>