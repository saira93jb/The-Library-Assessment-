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
                            <th>Customer Name</th>
                            <th>Rental Period</th>
                            <th>Amount Paid</th>
                            <th>Date Requested</th>
                            <th>Date Rented</th>
                            <th>Due Date</th>
                            <th>Return Date</th>
                            <th>Penalty</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Customer Name</th>
                            <th>Rental Period</th>
                            <th>Amount Paid</th>
                            <th>Date Requested</th>
                            <th>Date Rented</th>
                            <th>Due Date</th>
                            <th>Return Date</th>
                            <th>Penalty</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($books as $book) {?>
                        <tr>
                            <td><?=$book['title']?></td>
                            <td><?=$book['name']?></td>
                            <td><?=$book['months']?> Months</td>
                            <td><?=$book['bill']?>BD</td>
                            <td><?=($book['daterequested']) ? date('d/m/Y', $book['daterequested']) : ""?></td>
                            <td><?=($book['dateborrowed']) ? date('d/m/Y', $book['dateborrowed']) : ""?></td>
                            <td><?=($book['duedate']) ? date('d/m/Y', $book['duedate']) : ""?></td>
                            <td><?=($book['datereturned']) ? date('d/m/Y', $book['datereturned']) : ""?></td>
                            <td><?php
                                if ($book['daterequested'] > 0 && $book['dateborrowed'] && $book['duedate'] > 0) {
                                    if (($book['duedate'] < time()) && !($book['datereturned'])) {
                                        $numDays = round(abs($book['duedate'] - time()) / 60 / 60 / 24);

                                        echo $numDays * 0.1;
                                    }
                                }
                                    ?></td>

                                                            <td>
                                                                <?php
                                if (!$book['dateborrowed']) {?>
                                <a href="<?=base_url('admin/checkout?id=' . $book['id'] . '&months=' . $book['months'])?>"
                                    class='btn btn-success btn-sm'>checkout</a>
                                <?php } elseif ($book['dateborrowed'] && !$book['datereturned'] && !(($book['duedate'] < time()) && !($book['datereturned']))) {?>
                                <a href="<?=base_url('admin/checkin?id=' . $book['id'])?>"
                                    class='btn btn-info btn-sm'>checkin</a>
                                <?php } elseif (($book['duedate'] < time()) && !($book['datereturned'])) {?>
                                <a href="<?=base_url('admin/requestfine?id=' . $book['id'])?>"
                                    class='btn btn-warning btn-sm'>Penalty</a>
                                <?php } else {
        echo "no actions";
    }
    ?>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid 1644603916 -->

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