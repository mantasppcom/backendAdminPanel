<div class="content-wrapper" style="min-height: 946px;">    <!-- Content Header (Page header) --> <?php   if($this->uri->segment(2) == 'addnew'){ ?>    <section class="content-header">        <h1><?php echo $page_title; ?></h1>        <?php echo $breadcrumb; ?>    </section>    <!-- Main content --> <?php } ?>     <?php   if($this->uri->segment(2) == 'edit'){ ?>        <section class="content-header">        <h1>Edit Patients</h1>        		<ol class="breadcrumb">			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>                        <li class="active">Patients</li>                        <li><a href="">Edit Patients</a></li>                        <li><a href="<?php echo base_url('patients/index'); ?>">Go Back</a></li>		</ol>	</section> <?php } ?>        <section class="content">        <div class="row">            <div class="box-body">                <div class="col-md-6">                    <div id="errorsDiv"></div>                    <?php if ( validation_errors() ): ?>                        <div class="alert alert-danger alert-dismissible" role="alert">                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>                            <?php echo validation_errors('<p>', '</p>'); ?>                        </div>                    <?php endif; ?>                    <?php if ( $this->session->flashdata('errors') ): ?>                        <div class="alert alert-danger alert-dismissible" role="alert">                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>                            <?php echo $this->session->flashdata('errors') ?>                        </div>                    <?php endif; ?>                    <?php if ( $this->session->flashdata('success') ): ?>                        <div class="alert alert-success alert-dismissible" role="alert">                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>                            <?php echo $this->session->flashdata('success'); ?>                        </div>                    <?php endif; ?>                    <?php if ( $this->session->flashdata('delete') ): ?>                        <div class="alert alert-warning alert-dismissible" role="alert">                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>                            <?php echo $this->session->flashdata('delete'); ?>                        </div>                    <?php endif; ?>                    <?php if ( $this->session->flashdata('update') ): ?>                        <div class="alert alert-warning alert-dismissible" role="alert">                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>                            <?php echo $this->session->flashdata('update'); ?>                        </div>                    <?php endif; ?>                </div>              </div>        </div>        <div class="row">            <!-- right column -->            <div class="col-md-12">                <!-- Horizontal Form -->                <div class="box box-info">                    <div class="box-header with-border">                        <h3 class="box-title"></h3>                    </div><!-- /.box-header -->                    <!-- form start -->                    <div class="box-body">                                                <?php   if($this->uri->segment(2) == 'addnew'){ ?>                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url() . "patients/addnew"; ?>">                         <?php } ?>                                                    <?php   if($this->uri->segment(2) == 'edit'){ ?>                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url() . "patients/edit/".$this->uri->segment(3); ?>">                        <?php } ?>                            <div class="col-sm-12 col-md-12 col-lg-12" >                                 <div class="col-sm-12 col-md-6">                                    <label for="title required"><h3>Patient First Name:</h3></label>                                    <input type="text"  name="patient_first_name"  class="form-control"                                           placeholder="Patient First Name"  value="<?php echo set_value('patient_first_name', $data['all_data'][0]->patient_first_name ? $data['all_data'][0]->patient_first_name : "" ); ?>">                                </div>                                <div class="col-sm-12 col-md-6">                                    <label for="title required"><h3>Patient Last Name:</h3></label>                                    <input type="text"  name="patient_last_name"  class="form-control"                                           placeholder="Patient Last Name"  value="<?php echo set_value('patient_last_name', $data['all_data'][0]->patient_last_name ? $data['all_data'][0]->patient_last_name : "" ); ?>">                                </div>                                <div class="col-sm-12 col-md-6">                                    <label for="title required"><h3>Patient Email:</h3></label>                                    <input type="email"  name="patient_email"  class="form-control" required                                           placeholder="Patient Email"  value="<?php echo set_value('patient_email', $data['all_data'][0]->patient_email ? $data['all_data'][0]->patient_email : "" ); ?>">                                </div>                                                                <div class="col-sm-12 col-md-6">                                    <label for="title required"><h3>Patient Phone Number:</h3></label>                                    <input type="text"  name="patient_phone_number"  class="form-control"                                           placeholder="Patient Phone Number"  value="<?php echo set_value('patient_phone_number', $data['all_data'][0]->patient_phone_number ? $data['all_data'][0]->patient_phone_number : "" ); ?>">                                </div>                                <div class="col-sm-12 col-md-6">                                    <label for="title required"><h3>Patient Interventions:</h3></label>                                    <input type="text"  name="patient_interventions"  class="form-control"                                           placeholder="Patient Interventions"  value="<?php echo set_value('patient_interventions', $data['all_data'][0]->patient_interventions ? $data['all_data'][0]->patient_interventions : "" ); ?>">                                </div>                            </div><div class="clearfix"></div>                            <br>                            <div class="box-footer">                                <button type="submit" class="btn btn-info pull-left">Save</button> &nbsp;                            </div><!-- /.box-footer -->                            <div class="clearfix"></div>                        </form>                    </div><!-- /.box -->                    <!-- general form elements disabled -->                </div><!--/.col (right) -->            </div>   <!-- /.row -->    </section><!-- /.content --></div>