{extends file="{$default}"}
{block name=body}
        {foreach $data as $row}
            {foreach $row as $cell}
            <p>
                {$cell[1]}
                {$cell[2]}
            </p>
            {/foreach}
            
        {/foreach}
{/block}