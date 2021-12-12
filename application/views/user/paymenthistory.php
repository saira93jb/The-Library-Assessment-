<!-- Begin Page Content -->
<div class="container-fluid">
    <?php //print_r($books[0])?>
    <!-- Page Heading -->
    <!--<h1 class="h3 mb-2 text-gray-800">ENGINEERS LIST </h1>-->

    <!--          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary">Rentals List</h6>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="engineerslist" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Amount Paid</th>
                            <th>Date</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Amount Paid</th>
                            <th>Date</th>
                            <th>Type</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($rented as $book) {?>
                        <tr>
                            <td><?=$book['bill']?>BD</td>
                            <td><?= ($book['daterequested'])? date('d/m/Y', $book['daterequested']): "" ?></td>
                            <td><?=$book['type']?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
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
    $('#engineerslist').DataTable({
        "paging": true,
        "ordering": true,
        "info": false
    });
});
</script>