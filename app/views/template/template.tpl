{extends file="{$default}"}
{block name=body}
        {foreach $data as $row}
            {foreach $row as $cell}
            <p>
                {$cell[1]}
                {$cell[2]}
                {$cell[3]}
            </p>
            {/foreach}
            
        {/foreach}
{/block}