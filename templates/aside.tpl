<aside>
    <ul>
    <a href="home">
            <li>Home</li>
        </a>
         <a href="gamas">
            <li>Informacion de Gamas</li>
        </a>
        {foreach from=$gama_arreglo item=$elemento}
        <a href="gama/{$elemento->id_gama}">
            <li>{$elemento->name}</li>
        </a>
        {/foreach}
    </ul>
</aside>