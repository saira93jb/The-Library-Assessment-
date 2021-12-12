<!-- Begin Page Content -->
<div class="container-fluid">
    <?php print_r($users[0])?>
    <!-- Page Heading -->
    <!--<h1 class="h3 mb-2 text-gray-800">ENGINEERS LIST </h1>-->

    <!--          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary">BOOKS List</h6>
                </div>
                <div class="col-md-6">
                    <a href="<?=base_url('admin/addbook')?>" class="btn btn-primary btn-icon-split btn-sm"
                        style="float:right">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add New Book</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="engineerslist" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Label</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Label</th>
                            <th>actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($users as $user) { ?>
                        <tr>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><span
                                    class=" whitetext badge bg-<?= $user['active']==0? "danger":"success" ?>"><?= $user['active']==0? "inactive":"active" ?></span>
                            </td>
                            <td>
                                <a class='btn btn-danger btn-sm' href="#">del</a>
                            </td>
                        </tr>
                        <?php } ?>
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