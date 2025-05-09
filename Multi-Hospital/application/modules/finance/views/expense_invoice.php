<!--main content start-->

<link href="common/extranal/css/finance/expense_invoice.css" rel="stylesheet">

<div class="content-wrapper bg-light">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row my-2 pl-1">
                <div class="col-sm-6">
                    <h1 class="font-weight-bold"><i class="fas fa-file-invoice mr-2"></i><?php echo lang('expense') ?> <?php echo lang('invoice') ?> (<?php echo lang('invoice'); ?> <?php echo lang('id'); ?>: <?php echo $expense->id; ?>)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home"><?php echo lang('home') ?></a></li>
                        <li class="breadcrumb-item active"><?php echo lang('expense') ?> <?php echo lang('invoice') ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="">
                        <!-- /.card-header -->
                        <div class="">
                            <section>
                                <div class="card card-primary">
                                    <!--<div class="card-heading navyblue"> INVOICE</div>-->
                                    <div class="card-body" id="invoice">
                                        <div class="row invoice-list">

                                            <div class="text-center corporate-id">
                                                <h1>
                                                    <?php echo $settings->title ?>
                                                </h1>
                                                <h4>
                                                    <?php echo $settings->address ?>
                                                </h4>
                                                <h4>
                                                    Tel: <?php echo $settings->phone ?>
                                                </h4>
                                            </div>

                                            <div class="col-lg-4 col-sm-4">
                                                <h4><?php echo lang('bill_to'); ?>:</h4>
                                                <p>
                                                    <?php echo $settings->title; ?> <br>
                                                    <?php echo $settings->address; ?><br>
                                                    Tel: <?php echo $settings->phone; ?>
                                                </p>
                                            </div>
                                            <div class="col-lg-4 col-sm-4">
                                                <h4><?php echo lang('invoice_info'); ?></h4>
                                                <ul class="unstyled">
                                                    <li>Invoice Number : <strong>000<?php echo $expense->id; ?></strong></li>
                                                    <li>Date : <?php echo date('m/d/Y', $expense->date); ?></li>
                                                </ul>
                                            </div>
                                            <br>
                                            <?php if (!empty($payment->doctor)) { ?>
                                                <span><strong>Referred By Doctor:</strong></span> <span><?php echo $this->db->get_where('doctor', array('id' => $payment->doctor))->row()->name ?></span>
                                            <?php } ?>
                                        </div>
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th><?php echo lang('description'); ?></th>
                                                    <th><?php echo lang('note'); ?></th>
                                                    <th><?php echo lang('amount'); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo '1'; ?></td>
                                                    <td><?php echo $expense->category; ?> </td>
                                                    <td><?php echo $expense->note; ?> </td>
                                                    <td class=""><?php echo $settings->currency; ?> <?php echo $expense->amount; ?> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-lg-4 invoice-block float-right">
                                                <ul class="unstyled amounts">
                                                    <li><strong><?php echo lang('sub_total'); ?> : </strong><?php echo $settings->currency; ?> <?php echo $expense->amount; ?></li>
                                                    <li><strong><?php echo lang('grand_total'); ?> : </strong><?php echo $settings->currency; ?> <?php echo $expense->amount; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-3 no-print">
                    <div class="">
                        <!-- /.card-header -->
                        <div class="">
                            <section>
                                <div class="">
                                    <!--<div class="card-heading navyblue"> INVOICE</div>-->
                                    <div class="col-md-6" class="options">
                                        <div class="text-center invoice-btn clearfix">
                                            <?php if ($this->ion_auth->in_group(array('admin', 'Accountant'))) { ?>
                                                <a href="finance/editExpense?id=<?php echo $expense->id; ?>" class="btn btn-info btn-sm invoice_button float-left mb-2"><i class="fa fa-edit"></i> Edit Invoice </a>
                                            <?php } ?>
                                        </div>
                                        <div class="text-center invoice-btn clearfix">
                                            <a class="btn btn-secondary btn-sm invoice_button float-left mb-2" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print </a>
                                        </div>
                                        <div class="text-center invoice-btn clearfix">
                                            <a class="btn btn-warning btn-sm invoice_button float-left download float-left mb-2" id="download"><i class="fa fa-download"></i> <?php echo lang('download'); ?> </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- /.content -->
</div>



<!--main content end-->
<!--footer start-->

<script src="common/js/codearistos.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script src="common/extranal/js/finance/expense_invoice.js"></script>