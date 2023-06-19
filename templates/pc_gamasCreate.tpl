<label for="">Elegir gama para la pc: </label>
<select name="gama">
    {foreach from=$gama_arreglo item=$elemento}
        <option value="{$elemento->id_gama}">{$elemento->name_gama}</option>
    {/foreach}
</select>