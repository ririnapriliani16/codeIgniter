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
        <h2 style="text-align:center">List Peserta </h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('peserta/create'),'Create', 'class="btn btn-warning"'); ?><br></br>
				<?php echo anchor(site_url('Perlombaan/'),'Perlombaan', 'class="btn btn-primary"'); ?><br></br>
				<?php echo anchor(site_url('Pendaftaran/'),'Pendaftaran', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('peserta/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('peserta'); ?>" class="btn btn-warning">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-success" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Name</th>
		<th>Fakultas</th>
		<th>Jenisperlombaan</th>
		<th>No Telpon</th>
		<th>Alamat</th>
		<th>Birthday</th>
		<th>Id Peserta</th>
		<th>Created At</th>
		<th>Created By</th>
		<th>Updated At</th>
		<th>Updated By</th>
		<th>Action</th>
            </tr><?php
            foreach ($peserta_data as $peserta)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $peserta->name ?></td>
			<td><?php echo $peserta->fakultas ?></td>
			<td><?php echo $peserta->jenisperlombaan ?></td>
			<td><?php echo $peserta->no_telpon ?></td>
			<td><?php echo $peserta->alamat ?></td>
			<td><?php echo $peserta->birthday ?></td>
			<td><?php echo $peserta->id_peserta ?></td>
			<td><?php echo $peserta->created_at ?></td>
			<td><?php echo $peserta->created_by ?></td>
			<td><?php echo $peserta->updated_at ?></td>
			<td><?php echo $peserta->updated_by ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('peserta/read/'.$peserta->nim),'Read'); 
				echo ' | '; 
				echo anchor(site_url('peserta/update/'.$peserta->nim),'Update'); 
				echo ' | '; 
				echo anchor(site_url('peserta/delete/'.$peserta->nim),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-info">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>