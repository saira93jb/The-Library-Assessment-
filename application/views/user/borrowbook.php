<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
              <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Borrow Book</h6>
        </div>
        <div class="card-body">
            <div id="calculatefee">
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
                <!-- <form method="post" action="" style="    font-size: 14px;"> -->

                    <!--<div class='row'>-->
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Monthly Rent (BD)</label>
                            <input type="number" required value="<?= $fees['fees'] ?>" id="monthly" class="form-control"
                                aria-describedby="emailHelp" placeholder="Monthly Rent">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="exampleInputEmail1">For how many months would you like to rent this
                                book?</label>
                            <select id='selectmonths' class="form-control searchbookinput">
                                <option selected value="1">One Month</option>
                                <option value="2">Two Months</option>
                                <option value="3">Three Months</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="exampleInputEmail1">You Bill (BD)</label>
                            <input type="number" readonly value="" id="bill" class="form-control"
                                aria-describedby="emailHelp" placeholder="bill">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <button id='initiatePayment' class="btn btn-primary btn-sm">Continue to payment</button>
                        </div>
                    </div>
                    <!--</div>-->
                <!-- </form> -->
            </div>
            <form method="post" id="paymentform" style="display:none" action="<?= base_url('user/payments') ?>">
                <input type="hidden" name="book_id" value="<?= $book_id ?>">
                <input type="hidden" name="totalmonths" id="totalmonths" value="">
               <div class="col-md-8">
                    <h3>Payment Details</h3>
                    <div class="row gx-3">
                    <div class="col-12">
                            <div class="d-flex flex-column">
                                <p class="text mb-1">Your Bill</p> <input name="bill" class="form-control mb-3" id='formBill' type="text"
                                    placeholder="bill" value="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex flex-column">
                                <p class="text mb-1">Person Name</p> <input class="form-control mb-3" type="text"
                                    placeholder="Name" name='username' value="<?= $this->session->userdata('userName') ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex flex-column">
                                <p class="text mb-1">Card Number</p> <input class="form-control mb-3" type="text"
                                value="1234 5678 435678" name='cardnum'
                                    placeholder="1234 5678 435678">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column">
                                <p class="text mb-1">Expiry</p> <input class="form-control mb-3" type="text"
                                value="05/2023" name='expiry'
                                    placeholder="MM/YYYY">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column">
                                <p class="text mb-1">CVV/CVC</p> <input class="form-control mb-3 pt-2 " type="password"
                                    value ='123' placeholder="***">
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- <div class="btn btn-primary mb-3"> <span class="ps-3">Pay now</span> <span class="fas fa-arrow-right"></span> </div> -->
                            <input type="submit" class="btn btn-primary mb-3" value="Pay Now" />

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
    var months = parseInt($('#selectmonths').val());
    var monthlyfee = parseInt(<?= $fees['fees'] ?>);
    $('#selectmonths').on('change', function() {
        var months = parseInt($('#selectmonths').val());
        var monthlyfee = parseInt(<?= $fees['fees'] ?>);
        $('#bill').val(months * monthlyfee);
        $('#formBill').val(months * monthlyfee);
        $('#totalmonths').val(months);
    });
    $("#bill").val(months * monthlyfee);
    $("#formBill").val(months * monthlyfee);
    $('#totalmonths').val(months);

    $("#initiatePayment").click(function (){
        $("#calculatefee").fadeOut();
        $("#paymentform").fadeIn();
    });
    </script>