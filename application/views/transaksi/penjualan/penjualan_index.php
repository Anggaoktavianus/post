<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Sales</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<center><?php echo $this->session->flashdata('msg'); ?></center>

<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">


    <!--==============================================================-->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <form action="<?= site_url('sales/add_to_cart') ?>" method="POST">
                <div class="card">
                    <div class="card-body">
                        <!-- <table>
                            <tr>
                                <th>Kode Barang</th>
                            </tr>
                            <tr>
                                <th><input type="text" name="kode_brg" id="kode_brg" class="form-control input-sm">
                                </th>
                            </tr>

                            <div id="detail_barang" style="position:absolute;">
                            </div>
                        </table> -->
                        <!-- <div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div>
                                            <label for="kode_brg">Barcode*</label>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="hidden" name="id_item" id="id_item">
                                            <input type="text" name="kode_brg" id="kode_brg" class="form-control" required autofocus>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-info text-white" data-toggle="modal" data-target="#modal-item">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                                <button type="button" class="btn btn-secondary text-white" data-toggle="" data-target="">
                                                    <i class="fas fa-qrcode"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div id="detail_barang" class="row">
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div>
                                            <label for="barcode">Barcode*</label>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="hidden" name="id_item" id="id_item">
                                            <input type="text" name="kode_brg" id="kode_brg" class="form-control" required autofocus>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-info text-white" data-toggle="modal" data-target="#modal-item">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                                <button type="button" class="btn btn-secondary text-white" data-toggle="" data-target="">
                                                    <i class="fas fa-qrcode"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>



                                    <div class="col-md-3">

                                        <label for="name">Item Name</label>
                                        <input type="text" name="name" id="name" value="" class="form-control" readonly>
                                    </div>

                                    <div class="col-md-1">
                                        <label for="stock">Stock</label>
                                        <input type="text" name="stock" id="stock" value="" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1">
                                        <div>
                                            <label for="unit">Unit</label>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" name="unit_id" id="unit" value="" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <input type="hidden" required name="harpok" id="harpok" value="" class="form-control">

                                    <div class="col-md-2">
                                        <div>
                                            <label for="price">Harga</label>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" required name="harjul" id="price" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div>
                                            <label for="price">Diskon</label>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="number" name="diskon" id="diskon" value="0" min="0" class="form-control" placeholder="Diskon item">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div>
                                            <label for="jml">Jumlah</label>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="number" required name="qty" id="qty" value="1" min="1" max="" class="form-control" placeholder="Jumlah ">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div>
                                            <label for="">Proses</label>
                                        </div>
                                        <button type="submit" name="" class="btn btn-info text-white">
                                            <i class="fas fa-save">&nbsp; Pilih</i>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="<?php echo base_url() . 'sales/add_to_cart' ?>" method="post">
            </form>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="" class="table table-striped " style="font-size:11px;margin-top:10px;" width="100%">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th style="text-align:center;">Satuan</th>
                                    <th style="text-align:center;">Stock</th>
                                    <th style="text-align:center;">Harga(Rp)</th>
                                    <th style="text-align:center;">Diskon(Rp)</th>
                                    <th style="text-align:center;">Qty</th>
                                    <th style="text-align:center;">Sub Total</th>
                                    <th style="width:100px;text-align:center;">Aksi</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($this->cart->contents() as $items) : ?>
                                    <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
                                    <tr>
                                        <td><?= $items['id']; ?></td>
                                        <td><?= $items['name']; ?></td>
                                        <td style="text-align:center;"><?= $items['nama_unit']; ?></td>
                                        <td style="text-align:center;"><?= $items['stock']; ?></td>
                                        <td style="text-align:right;"><?php echo number_format($items['amount']); ?></td>
                                        <td style="text-align:right;"><?php echo number_format($items['disc']); ?></td>

                                        <td style="text-align:center;"><?php echo number_format($items['qty']); ?></td>
                                        <td style="text-align:right;"><?php echo number_format($items['subtotal']); ?></td>

                                        <td style="text-align:center;"><a href="<?php echo base_url() . 'sales/remove/' . $items['rowid']; ?>" class="btn btn-warning btn-xs"><span class="fa fa-close"></span> Batal</a></td>
                                    </tr>

                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form action="<?php echo base_url() . 'sales/simpan_penjualan_grosir' ?>" method="post">
                <div class="card">
                    <div class="card-body">
                        <table>

                            <tr>
                                <td style="width:760px;" rowspan="2"><button type="submit" class="btn btn-info btn-lg"> Simpan</button></td>

                                <th style="width:140px;">Total Belanja(Rp)</th>
                                <th style="text-align:right;width:140px;"><input type="text" name="total2" value="<?php echo number_format($this->cart->total()); ?>" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly></th>
                                <input type="hidden" id="total" name="total" value="<?php echo $this->cart->total(); ?>" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly>
                            </tr>
                            <tr>
                                <th>Tunai(Rp)</th>
                                <th style="text-align:right;"><input type="text" id="jml_uang" name="jml_uang" class="jml_uang form-control input-sm" style="text-align:right;margin-bottom:5px;" required></th>
                                <input type="hidden" id="jml_uang2" name="jml_uang2" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" required>
                            </tr>
                            <tr>
                                <td></td>
                                <th>Kembalian(Rp)</th>
                                <th style="text-align:right;"><input type="text" id="kembalian" name="kembalian" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" required></th>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <th>Nama Pembeli</th>
                                <th style="text-align:right;"><input type="text" id="pembeli" name="pembeli" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" required></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
            <hr />
        </div>
    </div>


    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>


<div class="modal fade" id="modal-item">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">

            <!-- Ini adalah Bagian Header Modal -->
            <div class="modal-header">
                <h4 class="modal-title">Data Item</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Ini adalah Bagian Body Modal -->
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Barcode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga Beli</th>
                                <th scope="col">Harga Jual</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($item as $key => $data) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td> <?= $data->barcode ?></td>
                                    <td> <?= $data->name ?></td>
                                    <td><?= indo_currency($data->barang_harpok)  ?></td>
                                    <td><?= indo_currency($data->price) ?></td>
                                    <td><?= $data->stock ?> &nbsp;<?= $data->namau ?></td>

                                    <td>
                                        <button class="btn btn-primary text-white" id="select" data-id="<?= $data->id_item ?>" data-kode_brg="<?= $data->barcode ?>" data-name="<?= $data->name ?>" data-unit="<?= $data->namau ?>" data-stock="<?= $data->stock ?>" data-price="<?= $data->price ?>" data-harpok="<?= $data->barang_harpok ?>">
                                            <i class="mdi mdi-check-circle">Select</i>
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Ini adalah Bagian Footer Modal -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(document).on('click', '#select', function() {
            var id_item = $(this).data('id');
            var barcode = $(this).data('kode_brg');
            var name = $(this).data('name');
            var namau = $(this).data('unit');
            var stock = $(this).data('stock');
            var price = $(this).data('price');
            var barang_harpok = $(this).data('harpok');
            $('#id_item').val(id_item);
            $('#kode_brg').val(barcode);
            $('#name').val(name);
            $('#unit').val(namau);
            $('#stock').val(stock);
            $('#price').val(price);
            $('#harpok').val(barang_harpok);
            $("#modal-item").removeClass("in");
            $(".modal-backdrop").remove();
            $('body').removeClass('modal-open');
            $('body').css('padding-right', '');
            $("#modal-item").hide();


        })
    })
</script>

<script type="text/javascript">
    $(document).ready(function() {
        //Ajax kabupaten/kota insert
        $("#kode_brg").focus();
        $("#kode_brg").on("click", function() {
            var kobar = {
                kode_brg: $(this).val()
            };
            $.ajax({
                type: "POST",
                url: "<?php echo base_url() . 'sales/get_barang'; ?>",
                data: kobar,
                success: function(msg) {
                    $('#detail_barang').html(msg);
                }
            });
        });

        $("#kode_brg").keypress(function(e) {
            if (e.which == 13) {
                $("#jumlah").focus();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $('#jml_uang').on("input", function() {
            var total = $('#total').val();
            var jumuang = $('#jml_uang').val();
            var hsl = jumuang.replace(/[^\d]/g, "");
            $('#jml_uang2').val(hsl);
            $('#kembalian').val(hsl - total);
        })

    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#mydata').DataTable();
    });
</script>
<script type="text/javascript">
    $(function() {
        $('.jml_uang').priceFormat({
            prefix: '',
            //centsSeparator: '',
            centsLimit: 0,
            thousandsSeparator: ','
        });
        $('#jml_uang2').priceFormat({
            prefix: '',
            //centsSeparator: '',
            centsLimit: 0,
            thousandsSeparator: ''
        });
        $('#kembalian').priceFormat({
            prefix: '',
            //centsSeparator: '',
            centsLimit: 0,
            thousandsSeparator: ','
        });
        $('.harjul').priceFormat({
            prefix: '',
            //centsSeparator: '',
            centsLimit: 0,
            thousandsSeparator: ','
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= site_url('items/get_ajax') ?>",
                "type": "POST"
            }
            // "columnDefs": [{
            //     "targets": [5, 6],
            //     "className": 'text-right'
            // }, {
            //     "targets": [1, 3],
            //     "className": 'text-center',
            // }]
        })
    })
</script>