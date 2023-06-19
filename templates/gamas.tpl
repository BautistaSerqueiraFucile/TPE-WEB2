<label for="">Elegir gama nueva: </label>
<select name="gama">
    <option value="{$elemento->id_gama}">Mantener misma gama</option>
    {foreach from=$gama_arreglo item=$elemento}
        <option value="{$elemento->id_gama}">{$elemento->name_gama};</option>
    {/foreach}
</select>