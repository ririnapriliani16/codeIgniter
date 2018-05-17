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
        <h2 style="text-align:center">List Pendaftaran</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('pendaftaran/create'),'Create', 'class="btn btn-warning"'); ?><br></br>
				<?php echo anchor(site_url('Perlombaan/'),'Perlombaan', 'class="btn btn-primary"'); ?><br></br>
				<?php echo anchor(site_url('Peserta/'),'Peserta', 'class="btn btn-primary"'); ?>
				</div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pendaftaran/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pendaftaran'); ?>" class="btn btn-warning">Reset</a>
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
		<th>No Telpon</th>
		<th>Created At</th>
		<th>Created By</th>
		<th>Updated At</th>
		<th>Updated By</th>
		<th>Action</th>
            </tr><?php
            foreach ($pendaftaran_data as $pendaftaran)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pendaftaran->name ?></td>
			<td><?php echo $pendaftaran->no_telpon ?></td>
			<td><?php echo $pendaftaran->created_at ?></td>
			<td><?php echo $pendaftaran->created_by ?></td>
			<td><?php echo $pendaftaran->updated_at ?></td>
			<td><?php echo $pendaftaran->updated_by ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('pendaftaran/read/'.$pendaftaran->nim),'Read'); 
				echo ' | '; 
				echo anchor(site_url('pendaftaran/update/'.$pendaftaran->nim),'Update'); 
				echo ' | '; 
				echo anchor(site_url('pendaftaran/delete/'.$pendaftaran->nim),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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