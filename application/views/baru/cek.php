
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Koreksi
		<small> Jawaban</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo site_url(); ?>/manager"><i class="fa fa-dashboard"></i> Koreksi</a></li>
		<li class="active">Edit User</li>
	</ol>
</section>

<section class="content">

	<div class="row">
    <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit User</h3>
            </div><!-- /.box-header -->
</div>
</div>
     
<div class="row">
    <div class="box box-primary">
            <div class="box-header">
            <div class="row">
  <div class="col-md-6">

  <form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Nama Tes</label>
    <div class="col-sm-8">
    <select class="form-control">
            <?php 
                foreach ($daftar as $d):?>
  <option value="<?= $d['topik_id']?>"><?= $d['topik_nama']?></option>                  
                <?php endforeach;?>
  
</select>
    </div>
  </div>
</form>
 
  </div>
  <div class="col-md-6"><?php var_dump($soal)?></div>
</div>              
            </div><!-- /.box-header -->   
</section>
