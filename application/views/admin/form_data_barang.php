<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>DATA BARANG</h1>
           </div>


           <div class="card">
           	
           		<div class="card-body">
           			<div class="row">
           				<div class="col-md-6">
           					<div class="form-group">
           						<label>Jenis Barang</label>
           						<select name="kode_barang" class="form-control">
           							<option value="">--PILIH JENIS BARANG--</option>
           							<?php foreach ($type as $tp) : ?>
           								<option value="<?php echo $tp->kode_barang ?>">
           									<?php echo $tp->nama_type ?></option>
           							<?php endforeach; ?>
           						</select>
           					</div>
           				</div>
           				<div class="col-md-6"></div>
           			</div> 
           		</div>
           </div>

      </section>
 </div>