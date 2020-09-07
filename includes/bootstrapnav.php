<!-- NAVIGATION BOOTSTRAP -->
<nav aria-label="Page navigation example">
    <ul class="pagination">

        <?php if($PAGESLIST['ViewPage'] > 1): ?>
            <li class="page-item"><a class="page-link" onclick="changePage(<?=($PAGESLIST['ViewPage']-1)?>)">Назад</a></li>
        <?php endif;?>

        <?php for ($page=$starpage; $page <= $endpage; $page++) : ?>
            <li  class="page-item <?= ($page == $PAGESLIST['ViewPage']) ? "active" : "" ?>"><a class="page-link"  onclick="changePage(<?=$page?>)"><?=$page?></a></li>
        <?php endfor;?>

        <?php if($PAGESLIST['ViewPage'] < $endpage): ?>
            <li class="page-item"><a class="page-link" onclick="changePage(<?=($PAGESLIST['ViewPage']+1)?>)">Вперед</a></li>
        <?php endif;?>
    </ul>
</nav>
<!-- NAVIGATION BOOTSTRAP -->
