<div class="jumbotron text-center">
    <h1>Welcome to The Library</h1>
    <!-- <p>Resize this responsive page to see the effect!</p> -->
</div>
<?php //print_r($categories);?>
<div class="container">

    <h3>Available Books</h3>

    <div class=" col-md-12  searchformrow">
        <div class="row">
            <div class="col-md-3">
                <h4> Browse available books</h4>
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control col-md-9 searchbookinput" id="searchbookinput"
                    placeholder="Enter a book title" />
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control col-md-9 searchbookinput" id="searchbookinputauthor"
                    placeholder="Enter the Author name" />
            </div>
            <div class="col-md-3">
                <select id='categorysearch' class="form-control searchbookinput">
                    <option selected value="">All Categories</option>
                    <?php foreach($categories as $cat){ ?>
                    <option value="<?= $cat['category'] ?>"><?= $cat['category'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
<div class="clearfix"></div>
    <div id='filteredbooks' class=""></div>


    <script>
    $(document).ready(function() {
        filters();
        $('#searchbookinput').keyup(function() {
            filters();
        });
        $('#searchbookinputauthor').keyup(function() {
            filters();
        });
        $('#categorysearch').on('change', function() {
            filters();
        });

        function filters() {
            var title = $('#searchbookinput').val();
            var author = $('#searchbookinputauthor').val();
            var category = $('#categorysearch').val();

            $.ajax({
                type: "POST",
                url: "<?=base_url('front/filteredbooks')?>",
                dataType: 'html',
                data: {
                    title: title,
                    author: author,
                    category: category
                },
                success: function(res) {
                    if (res) {
                        $('#filteredbooks').html(res);
                    }
                    if (res == 0) {
                        $('#filteredbooks').html(
                            '<div class="center alert alert-danger">No books found with the selected crieteria</div>'
                        );
                    }
                },
                error: function() {
                    $('#filteredbooks').html(
                        '<div class="center alert alert-danger">No book found with the selected crieteria</div>'
                    );
                }
            });
        }
    });
    </script>