<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
              <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Book <a class='btn btn-primary btn-sm btn-mini' href="<?= base_url('admin/allbooks') ?>"> Available Books</a></h6>
        </div>
        <div class="card-body">
            <p>Please enter at least one input in the list below: <small>(Please make sure to enter correct
                    spellings.)</small></p>
            <div class='row'>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Book Title</label>
                        <input type="text" id="book_title_search" class="form-control" placeholder="Book Title">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Author Name</label>
                        <input type="text" id="book_author_search" class="form-control" placeholder="Author Name">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ISBN</label>
                        <input type="text" id="book_isbn_search" class="form-control" placeholder="ISBN">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <a href="javascript:void(0)" id="search_book_api" class="btn btn-info">Search</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="list-group" style="display:none" id='booksdropdown'></div>


            <?php
if ($this->session->flashdata('successmessage')) {
    ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('successmessage'); ?></div>
            <?php
}
if ($this->session->flashdata('errormessage')) {
    ?>
            <div class="alert alert-warning"><?php echo $this->session->flashdata('errormessage'); ?></div>
            <?php
}
?>

            <form method="post" id="addbookform" action="<?=base_url('admin/addbook')?>"
                style="font-size: 14px; display:none">
                <p>Please fill out the missing book's information in the form below e.g. stock count.</p>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="book_title" name="book_title" placeholder="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Subtitle</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="book_subtitle" name="book_subtitle"
                            placeholder="Subtitle">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="book_category" name="book_category"
                            placeholder="Category">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Author(s)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="book_author" name="book_author"
                            placeholder="Author(s)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <img src="" style="height:100px" id="bookimgsrc" />
                        <input type="text" class="form-control" id="book_img_url" name="book_img_url" placeholder="">
                    </div>
                </div>                
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="book_desc" name="book_desc" placeholder=""></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">ISBN 13</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="book_isbn13" name="book_isbn13"
                            placeholder="ISBN 13">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Page Count</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="book_pagecount" name="book_pagecount"
                            placeholder="Page Count">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Stock Count</label>
                    <div class="col-sm-10">
                        <input type="number" required class="form-control" id="book_stockcount" name="book_stockcount"
                            placeholder="Stock Count">
                    </div>
                </div>
                <input type="hidden" id="book_previewurl" name="book_previewurl" />


                <div class="col-md-2">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Add Book</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; The Library 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

<script>
$(document).ready(function() {
    $("#search_book_api").click(function() {
        $("#addbookform").fadeOut();
        $(".alert").fadeOut();
        $("#booksdropdown").fadeIn();
        var booktitle = $('#book_title_search').val() + $('#book_author_search').val();
        var html = "";
        $.get("https://www.googleapis.com/books/v1/volumes/", {
                q: booktitle,
                langRestrict: 'en',
                maxResults: 10
            })
            .done(function(data) {
                     console.log(data.items);

                var books = data.items;
                var book = {};
                var index = 0;
                books.forEach((element) => {
                    index++;
                    book['title'] = element.volumeInfo.title;
                     var subtitle=  element.volumeInfo.subtitle? element.volumeInfo.subtitle:"" ;
                     book['subtitle']= JSON.stringify(subtitle).replace(/[\/\(\)\']/g, "&apos;");
                     book['category'] = element.volumeInfo.categories ? element.volumeInfo
                        .categories.toString() : "";
                    book['authors'] = element.volumeInfo.authors ? (element.volumeInfo
                        .authors).toString() : "";
                    var imageUrls = ((element.volumeInfo.imageLinks) ? element.volumeInfo
                        .imageLinks : "");
                    book['imageUrl'] = imageUrls.thumbnail;
                     var desc = element.volumeInfo.description? element.volumeInfo.description:"";
                     book['desc'] =JSON.stringify(desc).replace(/[\/\(\)\']/g, "&apos;") ;
                    book['previewUrl'] = element.volumeInfo.previewLink;
                    var isbns = element.volumeInfo.industryIdentifiers;
                    book['pageCount'] = element.volumeInfo.pageCount ? element.volumeInfo
                        .pageCount : "";
                    if (Array.isArray(isbns) && isbns.length > 0) {
                        isbns.forEach((isbn) => {
                            if (isbn.type == 'ISBN_13') {
                                book['isbn_13'] = isbn.identifier;
                            }
                        });
                    }
                    if (!(book['title']) || !(book['category']) || !(book['authors']) ||
                        !(book['imageUrl']) || !(book['isbn_13'])) {
                        return 1;
                    }

                   var descToDisplay = desc.substring(0, 250) + "...";
                    //     console.log(book);
                    //console.log(JSON.stringify(book));
                    
                    html +=
                        ' <a href="javascript:void(0)" data-book=\'' + JSON.stringify( book) + '\' id="addbookbtn_' + index +
                        '" class="list-group-item list-group-item-action flex-column align-items-start ">' +
                        '  <div class="row">' +
                        '    <div class="col-md-3">' +
                        '        <img src="' + book['imageUrl'] +
                        '" style="height:250" alt="">' +
                        '    </div>' +
                        '    <div class="col-md-9">' +
                        '        <div class="d-flex w-100 justify-content-between">' +
                        '           <h5 class="mb-1" booktitle="">' + book['title'] +
                        '</h5>' +
                        '           <small>Page Count: ' + book['pageCount'] + '</small>' +
                        '       </div>' +
                        '        <p class="mb-1">' + subtitle + '</p>' +
                        '        <p class="mb-1"><b>Category: </b>' + book['category'] +
                        '</p>' +
                        '        <small><b>Author(s): </b>' + book['authors'] +
                        ',  <b>ISBN:</b> ' + book['isbn_13'] + '</small>' +
                        '   <p>'+descToDisplay+'</p> </div>' +
                        ' </div>' +
                        ' </a>';
                });
                // console.log(html);
                $('#booksdropdown').html(html);

            });
    });
});

jQuery(document).on("click", "[id^=addbookbtn_]", function(e) {
    e.preventDefault();
    var bookdata = JSON.parse($(this).attr('data-book'));
    console.log(bookdata);
    $("#booksdropdown").fadeOut();
    $("#addbookform").fadeIn();


    $("#book_title").val(bookdata.title);
    $("#book_subtitle").val(JSON.parse( bookdata.subtitle));
    $("#book_desc").val(JSON.parse( bookdata.desc));
    $("#book_category").val(bookdata.category);
    $("#book_author").val(bookdata.authors);
    $("#book_img_url").val(bookdata.imageUrl);
    $("#bookimgsrc").attr("src", bookdata.imageUrl);
    $("#book_isbn13").val(bookdata.isbn_13);
    $("#book_pagecount").val(bookdata.pageCount);
    $("#book_previewurl").val(bookdata.previewUrl);


});
</script>