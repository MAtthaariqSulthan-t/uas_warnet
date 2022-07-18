<section id="header">
		<div class="container ps-0 pt-2">
			<div class="row">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="txt_cari" placeholder="Cari Produk Disini" class="form-control border-secondary" aria-label="Recipient's username" aria-describedby="button-addon2" autocomplete="0ff">
                        <button type="submit" name="cari" class="btn btn-outline-warning text-secondary" id="button-addon2">Search</button>
                    </div>
                </form>
			</div>
		</div>
	</section>
<div class="container pb-5">
	<div class="row">
        <div class="col-md-2"></div>
		<div class="col-md-8 pt-2">
			<div class="row">
                <!-- judul kategori -->
                <?php
                $qpc = mysqli_query($koneksidb, "SELECT * FROM mst_pc");
                ?>
                <h1 class="text text-center pb-3 pt-3 border border">Form Billing</h1>
                <hr>
                <!-- tampil produk -->
                <?php
                foreach($qpc as $p) :   
                ?>
				<div class="col-md-4 pb-4">
					<div class="card">
						<img src="assets/img/Monitor.png" class="card-img-top" height="201px" width="100px" alt="..." />
						<div class="card-body text-center bgcardbody">
							<h5 class="card-title"><?= $p['nmpc'];?></h5>
							<h6 class="harga"><?= $p['jenispc'];?></h6>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item btndetail">
								<a href="?page=detailproduk&id=<?= $lp['idproduk'];?>" class="text-white" data-bs-toggle="modal" data-bs-target="#loginModal">Detail</a>
							</li>
						</ul>
					</div>
				</div>
                <?php 
                endforeach;    
                ?>
			</div>
		</div>
        <div class="col-md-2"></div>
	</div>
</div>
<!-- modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form class="bg-light p-5" action="ceklogin.php" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Form Paket</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
                    <div class="modal-body">              
						<div class="form-check">
 							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
 							<label class="form-check-label" for="flexRadioDefault1">
 						   		Paket 1 jam
						  	</label>
						</div>
						<div class="form-check">
 							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
 							<label class="form-check-label" for="flexRadioDefault1">
 						   		Paket 2 jam
						  	</label>
						</div>
						<div class="form-check">
 							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
 							<label class="form-check-label" for="flexRadioDefault1">
 						   		Paket 3 jam
						  	</label>
						</div>
                        <div class="form-check">
 							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
 							<label class="form-check-label" for="flexRadioDefault1">
 						   		Paket 4 jam
						  	</label>
						</div>
                        <div class="form-check">
 							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
 							<label class="form-check-label" for="flexRadioDefault1">
 						   		Paket 5 jam
						  	</label>
						</div>
                        <div class="form-check">
 							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
 							<label class="form-check-label" for="flexRadioDefault1">
 						   		Paket malam
						  	</label>
						</div>
                        <div class="modal-footer">
						<button type="button" id="btnbatal" class="btn btn-secondary"
							data-bs-dismiss="modal">Batal</button>
						<button type="submit" name="btnlogin" id="btnkeluar" class="btn btn-primary">Bayar</button>
					    </div>
                    </div>
				</div>
			</form>
		</div>
	</div>