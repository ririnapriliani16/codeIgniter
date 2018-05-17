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
        <h2 style="text-align:center">Peserta Read</h2>
        <table class="table">
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Fakultas</td><td><?php echo $fakultas; ?></td></tr>
	    <tr><td>Jenisperlombaan</td><td><?php echo $jenisperlombaan; ?></td></tr>
	    <tr><td>No Telpon</td><td><?php echo $no_telpon; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Birthday</td><td><?php echo $birthday; ?></td></tr>
	    <tr><td>Id Peserta</td><td><?php echo $id_peserta; ?></td></tr>
	    <tr><td>Created At</td><td><?php echo $created_at; ?></td></tr>
	    <tr><td>Created By</td><td><?php echo $created_by; ?></td></tr>
	    <tr><td>Updated At</td><td><?php echo $updated_at; ?></td></tr>
	    <tr><td>Updated By</td><td><?php echo $updated_by; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('peserta') ?>" class="btn btn-danger">Cancel</a></td></tr>
	</table>
        </body>
</html>