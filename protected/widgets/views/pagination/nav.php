<?php
if( $page->url != '#' ){
    $q = '?';
    if( strpos($page->url, '?') !== false ){
        $q = '&';
    }
    $page->url .= $q.'page=';
}
?>

<?php if($totalpages>1){ ?>
<table cellspacing="0" cellpadding="0" class="pagination">
    <tr>
        <td  style="text-align:left">Page <?php echo $current ?> of <?php echo $totalpages ?></td>
        <td width="50%"  style="text-align:right">

                <ul style="float:right">
                    <?php if( $page->isPrev() ){ ?> <li style="display:inline-block"><a class="page_back" data-page="<?php echo ($current-1) ?>" href="<?php echo $page->url . ($current-1) ?>">&lt;&lt;</a></li> <?php } ?>

                    <?php
                    $start = (($current-5)<0)?1:($current-4);
                    $end = (($current+5)>$totalpages)?$totalpages:($current+5);// $totalpages;
                    ?>

                    <?php if ($current>5){ ?>
                         <li style="display:inline-block"><a class="gotopage" href="<?php echo $page->url ?>1" data-page="1" >...</a></li>
                    <?php } ?>
                    <?php for( $i =$start; $i <= $end; $i++ ){ ?>
                        <?php if( $i == $current ){ ?>
                            <li style="display:inline-block"><a href="javascript:;"  class="active"><?php echo $i ?></a></li>
                        <?php }else{ ?>
                            <li style="display:inline-block"><a class="gotopage" href="<?php echo ($page->url . $i) ?>" data-page="<?php echo $i ?>" ><?php echo $i ?></a></li>
                        <?php } ?>
                    <?php } ?>

                    <?php if(($current+5)<$totalpages){ ?>
                         <li style="display:inline-block"><a class="gotopage" href="<?php echo ($page->url . $totalpages) ?>" data-page="<?php echo $totalpages ?>" >...</a></li>
                    <?php } ?>

                    <?php if( $page->isNext() ){ ?>
                    <li style="display:inline-block"><a class="page_next" data-page="<?php echo ($current+1) ?>"  href="<?php echo $page->url.($current+1) ?>">&gt;&gt;</a></li>
                    <?php } ?>

                </ul>
        </td>
    </tr>
</table>
<?php } ?>