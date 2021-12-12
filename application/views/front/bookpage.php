<div class="jumbotron text-center">
    <h1><?= $book['title'] ?></h1>
    <p><?= $book['subtitle'] ?> by <i><?= $book['author'] ?></i></p>
</div>
<?php //print_r($book);  ?>
<div class="container">

    <div class="row bookrow">
        <div class="col-md-2 ">
            <img class='listimgdiv' src="<?= $book['imgUrl'] ?>" />
            <br>
            <br>
            <p><b>Author: </b><?= $book['author'] ?></p>
            <p><b>Page count: </b><?= $book['pagecount'] ?></p>
            <p><b>Available in stock: </b><?= $book['quantity'] ?></p>

            <a class='btn btn-info' href="<?= base_url('user/borrowbook?id='.$book['id']) ?>">Borrow This Book</a>

        </div>
        <div class="col-md-10">
            <h3> <a href="<?= base_url('bookpage?id='.$book['id']) ?>"> <?= $book['title'] ?></a></h3>
            <h5><?= $book['subtitle'] ?></h5>

            <p><b>Category: </b><?= $book['category'] ?></p>

            <p><?= $book['desc']?></p>

        </div>
    </div>