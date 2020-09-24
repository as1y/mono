<hr>
<ul class="pagination float-right">

    <?php if($PAGESLIST['ViewPage'] > 1): ?>
       <a class="page-link" href="#" onclick="changePage(<?=($PAGESLIST['ViewPage']-1)?>)">Назад</a>
    <?php endif;?>

    <?php for ($page=$starpage; $page <= $endpage; $page++) : ?>
        <li  class="page-item <?= ($page == $PAGESLIST['ViewPage']) ? "active" : "" ?>"><a class="page-link" href="#" onclick="changePage(<?=$page?>)"><?=$page?></a></li>
    <?php endfor;?>



    <?php if($PAGESLIST['ViewPage'] < $endpage): ?>
        <a class="page-link" href="#" onclick="changePage(<?=($PAGESLIST['ViewPage']+1)?>)">Вперед <i class="fa fa-angle-right"></i></a>
    <?php endif;?>




</ul>


