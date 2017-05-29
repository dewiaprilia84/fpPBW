
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Pesan
                        </h1>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Pemesanan </th>
                                        <th>Nama</th>
                                        <th>Isi Orderan</th>
                                        <th>Alamat Customer</th>
                                        <th>No Telp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead><?php
                                $no = 1;

                                foreach ($data as $row){
                                    ?>
                                    <tr>
                                            <td> <?php echo $no;?>
                                            <td> <?php echo $row['tanggal_pemesanan'];?></td>
                                            <td> <?php echo $row['nama'];?></td>
                                            <td> <?php echo $row['isi_orderan'];?></td>
                                            <td> <?php echo $row['alamat_customer'];?></td>
                                            <td> <?php echo $row['no_telp'];?></td>
                                            <td>
                                                <a href="<?php echo site_url('index.php/admin/order/delete/'.$row['id_order']);?>"><button type="submit" class = "btn btn-danger fa fa-trash" title="Hapus"></button></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;
                                    }
                                    ?>
                                <tbody>

                                </tbody>
                            </table>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
