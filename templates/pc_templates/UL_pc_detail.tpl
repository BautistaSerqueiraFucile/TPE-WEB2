<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{$url}css/style.css" />
    <base href="{$url}" />
    <title>Detail pc</title>
</head>

<body>
    {include file="../UL_header.tpl"}
    <main class="main">
        {include file= "../aside.tpl"}
        <section class="detail">
            <div class="container">
                <h1>Detail pc</h1>
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
                            <td>RAM</td>
                            <td>{$pc->RAM}</td>
                        </tr>
                        <tr>
                            <td>Disco</td>
                            <td>{$pc->disco}</td>
                        </tr>
                        <tr>
                            <td>Video card</td>
                            <td>{$pc->video}</td>
                        </tr>
                        <tr>
                            <td>Gama</td>
                            <td>{$pc->name_gama}</td>
                        </tr>

                    </tbody>
                </table>

                <h2>Pc Description</h2>

                <p>{$pc->description_pc}</p>


                <h2>Gama Description</h2>

                <p>{$pc->description_gama}</p>

                <div class="botones-detail">
                    <a href="editarPc/{$pc->id_pc}" id="editar-eliminar">Edit</a>
                    <a href="confirmarEliminarPc/{$pc->id_pc}" id="editar-eliminar">Delete</a>
                </div>
            </div>
        </section>
    </main>
    {include file="../footer.tpl"}
</body>

</html>