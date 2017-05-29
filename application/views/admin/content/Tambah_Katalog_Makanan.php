
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tambah Katalog Makanan
                        </h1>
                        <form role="form" class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin/Katalogmakanan/addKatalog" enctype="multipart/form-data">
                             <div class="form-group">
                                <label for="inputNama" class="control-label col-xs-4">Nama Makanan</label>
                                <div class="col-xs-4">
                                    <input name="nama_makanan" type="text" class="form-control" id="inputNama" placeholder="Nama Makanan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputHarga" class="control-label col-xs-4">Harga Makanan</label>
                                <div class="col-xs-4">
                                    <input name="harga_makanan" type="text" class="form-control" id="inputHarga" placeholder="Harga Makanan">
                                </div>
                            </div>
                           
                       <div class="form-group">
                                <label for="inputGambar" class="control-label col-xs-4">Gambar Makanan</label>
                                <div class="col-xs-4">
                                    <input name="path" type="file" id="inputGambar" placeholder="Gambar" required accept="image/*">
                            </div>
                
                            <div class="form-group">
                                <div class="col-xs-offset-4 col-xs-9">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->