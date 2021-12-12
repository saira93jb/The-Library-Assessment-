<!-- Begin Page Content -->
<div class="container-fluid">
    <?php //print_r($books[0])?>

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
            <div class="table-responsive">
                <table class="table table-bordered" id="engineerslist" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Rental Period</th>
                            <th>Amount Paid</th>
                            <th>Date Requested</th>
                            <th>Date Rented</th>
                            <th>Due Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Rental Period</th>
                            <th>Amount Paid</th>
                            <th>Date Requested</th>
                            <th>Date Rented</th>
                            <th>Due Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($books as $book) {?>
                        <tr>
                            <td><?=$book['title']?></td>
                            <td><?=$book['months']?> Months</td>
                            <td><?=$book['bill']?>BD</td>
                            <td><?= ($book['daterequested'])? date('d/m/Y', $book['daterequested']): "" ?></td>
                            <td><?= ($book['dateborrowed'])? date('d/m/Y', $book['dateborrowed']): "" ?></td>
                            <td><?= ($book['duedate'])? date('d/m/Y', $book['duedate']): "" ?></td>
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