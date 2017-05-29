<?php
echo validation_errors();
?>
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-20">
                        <h1 class="page-header">
                            Edit Katalog
                        </h1>
                        <form enctype="multipart/form-data" role="form" class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin/Katalogminuman/editKatalog/<?php echo $data['id_katalog']?>">
                             <div class="form-group">
                                <label for="inputNama" class="control-label col-xs-4">Nama Minuman</label>
                                <div class="col-xs-2">
                                    <input name="nama_minuman" type="text" class="form-control" id="inputNama" value="<?php echo $data['nama_minuman'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputHarga" class="control-label col-xs-4">Harga Minuman</label>
                                <div class="col-xs-2">
                                    <input name="harga_minuman" type="text" class="form-control" id="inputHarga" value="<?php echo $data['harga_minuman'];?>">
                                </div>
                            </di
                             <div class="form-group">
                                <label for="inputGambar" class="control-label col-xs-4"></label>
                                <div class="col-xs2">
                                    <input name="path" type="file" id="inputGambar" placeholder="Gambar" required accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-offset-4 col-xs-9">
                                    <button type="submit" class="btn btn-primary">Edit</button>
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