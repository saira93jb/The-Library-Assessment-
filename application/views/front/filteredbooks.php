<?php foreach($books as $book) { ?>
<div class=" bookrow clearfix">
    <div class="col-md-2 listimgdiv">
        <img src="<?= $book['imgUrl'] ?>">

    </div>
    <div class="col-md-10">
        <h3> <a href="<?= base_url('bookpage?id='.$book['id']) ?>"> <?= $book['title'] ?></a></h3>
        <h5><?= $book['subtitle'] ?></h5>
        <p><b>Author: </b><?= $book['author'] ?></p>
        <p><b>Category: </b><?= $book['category'] ?></p>
        <p>Page count: <?= $book['pagecount'] ?></p>
        <p><?= substr($book['desc'], 0, 200).'...' ?><a href="<?= base_url('bookpage?id='.$book['id']) ?>">read more</a>
        </p>
        <!-- <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p> -->
    </div>
</div>
<?php } ?>