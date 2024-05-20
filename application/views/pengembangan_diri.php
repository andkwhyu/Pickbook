<div class="container-fluid">
    <div class="row text-center">

        <?php foreach ($pengembangan_diri as $buku) : ?>
        
             <div class="card ml-3 " style="width: 18rem;">
             <img src="<?php echo base_url().'/uploads/'. $buku->gambar ?>" class="card-img-top" alt="...">
             <div class="card-body">
                 <h5 class="card-title"><?php echo $buku->judul_buku ?></h5>
                 <small><?php echo $buku->keterangan ?></small><br>
                 <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Pinjam</button>
                 <?php echo anchor('dashboard/detail/' .$buku->id_buku, '<div class="btn btn-sm btn-secondary">Detail</div>')?>
            </div>
        </div>
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_pelanggan/tambah_aksi';?>" method="POST">
      
       <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_pelanggan" class="form-control">
      </div>

       <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat_pelanggan" class="form-control">
      </div>

       <div class="form-group">
            <label>No. Handphone</label>
            <input type="text" name="nohp_pelanggan" class="form-control">
      </div>
          <div class="form-group">
            <label>Tanggal Peminjaman</label>
            <input type="date" name="tgl_pinjam" class="form-control">
      </div>

      <div class="form-group">
            <label>Tanggal pengembalian</label>
            <input type="date" name="tgl_kembali" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>

    </form>
    </div>
  </div>
</div>
</div>
        <?php endforeach;?>

    </div>