<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="text-align:center">Peserta <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Name <?php echo form_error('name') ?></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Fakultas <?php echo form_error('fakultas') ?></label>
            <input type="text" class="form-control" name="fakultas" id="fakultas" placeholder="Fakultas" value="<?php echo $fakultas; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenisperlombaan <?php echo form_error('jenisperlombaan') ?></label>
            <input type="text" class="form-control" name="jenisperlombaan" id="jenisperlombaan" placeholder="Jenisperlombaan" value="<?php echo $jenisperlombaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">No Telpon <?php echo form_error('no_telpon') ?></label>
            <input type="text" class="form-control" name="no_telpon" id="no_telpon" placeholder="No Telpon" value="<?php echo $no_telpon; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Birthday <?php echo form_error('birthday') ?></label>
            <input type="text" class="form-control" name="birthday" id="birthday" placeholder="Birthday" value="<?php echo $birthday; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Peserta <?php echo form_error('id_peserta') ?></label>
            <input type="text" class="form-control" name="id_peserta" id="id_peserta" placeholder="Id Peserta" value="<?php echo $id_peserta; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Created By <?php echo form_error('created_by') ?></label>
            <input type="text" class="form-control" name="created_by" id="created_by" placeholder="Created By" value="<?php echo $created_by; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Updated By <?php echo form_error('updated_by') ?></label>
            <input type="text" class="form-control" name="updated_by" id="updated_by" placeholder="Updated By" value="<?php echo $updated_by; ?>" />
        </div>
	    <input type="hidden" name="nim" value="<?php echo $nim; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('peserta') ?>" class="btn btn-danger">Cancel</a>
	</form>
    </body>
</html>