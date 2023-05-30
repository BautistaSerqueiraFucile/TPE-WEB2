<div class="aside">
<aside>
    <ul>    
         <a href="gamas">
            <li>Informacion de Gamas</li>
        </a>
        {foreach from=$gama_arreglo item=$elemento}
        <a href="gama/{$elemento->id_gama}">
            <li>{$elemento->name_gama}</li>
        </a>
        {/foreach}
    </ul>
</aside>
</div>