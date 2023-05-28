<aside>
    <ul>
        {foreach from=$gama_arreglo item=$elemento}
        <a href="gama/{$elemento->id_gama}">
            <li>{$elemento->name}</li>
        </a>
        {/foreach}
    </ul>
</aside>