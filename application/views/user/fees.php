

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
              <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Fees</h6>
        </div>
        <div class="card-body">
            <div>
                <?php
                if ($this->session->flashdata('successmessage')) {
                    ?>
                    <div class="alert alert-success"><?php echo $this->session->flashdata('successmessage'); ?></div>
                    <?php
                }
                if ($this->session->flashdata('Error')) {
                    ?>
                    <div class="alert alert-warning"><?php echo $this->session->flashdata('errormessage'); ?></div>
                    <?php
                }
                ?>
                <form method="post" action="<?= base_url('admin/fees') ?>" style="    font-size: 14px;">

                    <!--<div class='row'>-->
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Monthly Rent (BD)</label>
                            <input type="number"required value="<?= $fees[0]['fees'] ?>" name="monthly"  class="form-control" aria-describedby="emailHelp" placeholder="Monthly Rent">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Penalty Fee / Day (BD)</label>
                            <input type="number" required value="<?= $fees[1]['fees'] ?>" name="penalty" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Penalty">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">

                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </div>
                    </div>
                    <!--</div>-->
                </form> 
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
            <span>Copyright &copy; CRPEP 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->
