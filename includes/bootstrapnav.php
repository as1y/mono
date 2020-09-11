<<<<<<< HEAD


<div style="z-index: -10" class="col-md-12">
    <div class="pagination-wrapper">
        <ul class="pagination">
            <?php if($PAGESLIST['ViewPage'] > 1): ?>
                <li><a href="#" onclick="changePage(<?=($PAGESLIST['ViewPage']-1)?>)">Назад</a></li>
            <?php endif;?>



            <?php for ($page=$starpage; $page <= $endpage; $page++) : ?>
                <li  class="<?= ($page == $PAGESLIST['ViewPage']) ? "active" : "" ?>"><a href="#" onclick="changePage(<?=$page?>)"><?=$page?></a></li>
            <?php endfor;?>





            <?php if($PAGESLIST['ViewPage'] < $endpage): ?>
                <li class="page-item"><a class="page-link" href="#" onclick="changePage(<?=($PAGESLIST['ViewPage']+1)?>)">Вперед <i class="fa fa-angle-right"></i></a></li>
            <?php endif;?>





        </ul>
    </div>
</div>


=======
<!-- NAVIGATION BOOTSTRAP -->
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
 
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
>>>>>>> 7616b42ba8cf5f9c3c6758c09ca168792f7447ca
