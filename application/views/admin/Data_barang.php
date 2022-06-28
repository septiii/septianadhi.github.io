  <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>DATA BARANG</h1>
          </div>

          <a href="<?php echo base_url('admin/data_barang/tambah_barang') ?>" class="btn btn-primary mb-3">TAMBAH DATA</a>
          <table class="table table-hover table striped table-borderd">
          		<thead>
          			<th>No</th>
          			<th>Gambar</th>
          			<th>Type</th>
          			<th>Jenis</th>
          			<th>Ukuran</th>
          			<th>Status</th>
          			<th>Aksi</th>
          		</thead>
          		<tbody>
          			<?php
          				$no=1;
          				foreach($barang as $br) : ?> 
          					<td><?php echo $no++ ?></td>
          					<td></td>
          					<td><?php echo $br->kode_barang ?> </td>
          					<td><?php echo $br->jenis	 ?> </td>
          					<td><?php echo $br->ukuran  	 ?> </td>
          					<td><?php 
          					if ($br->status == "0") {
          						echo "<span class='badge badge-danger' >Tidak Tersedia </span>";
          					}else {
          						echo "<span class='badge badge-primary' >Tersedia </span>";

          					}

          					 	 ?> </td>
          					 	 <td>
          					 	 	<a href="" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
          					 	 	<a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
          					 	 	<a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
          					 	 </td>
          			<?php endforeach; ?>		
          		</tbody>
          	</table>

    </section>
</div>