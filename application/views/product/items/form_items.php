<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Stock In</h4>
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
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <form action="<?= site_url('items/proses') ?>" method="POST" class="tm-signup-form row">

        <!--==============================================================-->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <?php $this->view('message'); ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Forms Control</h4>
                        <input id="id_item" name="id_item" type="hidden" class="form-control validate" value="<?= $row->id_item ?>" />
                        <div>
                            <label for="barcode">Barcode*</label>
                        </div>
                        <div class="form-group input-group">
                            <input type="hidden" name="id_barcode" id="id_barcode">
                            <input type="text" name="barcode" id="barcode" class="form-control" value="<?= $row->barcode  ?>" readonly autofocus>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-info text-white" data-toggle="modal" data-target="#modal-item">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button type="button" class="btn btn-secondary text-white" data-toggle="" data-target="">
                                    <i class="fas fa-qrcode"></i>
                                </button>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input id="name" required name="name" type="text" class="form-control validate" value="<?= $row->name ?>" readonly />

                        </div>
                        <div class="form-group">
                            <label for="harpok">Harga Beli</label>
                            <input id="harpok" name="harpok" type="number" class="form-control validate" value="<?= $row->barang_harpok ?>" />
                        </div>
                        <div class="form-group">
                            <label for="price">Harga Jual</label>
                            <input id="price" name="price" type="number" class="form-control validate" value="<?= $row->price ?>" />
                        </div>
                        <div class="form-group">
                            <label for="price">Category</label>
                            <select name="category" class="form-control">
                                <option value="">--Pilih--</option>
                                <?php foreach ($category->result() as $key => $data) { ?>
                                    <option value="<?= $data->category_id ?>" <?= $data->category_id == $row->category_id ? "selected" : null ?>><?= $data->name ?></option>
                                <?php } ?>
                                <!--  -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Unit</label>
                            <select name="unit" class="form-control">
                                <option value="">--Pilih--</option>
                                <?php foreach ($unit->result() as $key => $data) { ?>
                                    <option value="<?= $data->unit_id ?>" <?= $data->unit_id == $row->unit_id ? "selected" : null ?>><?= $data->name ?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label for="image">Image</label>
                            <?php if ($page == 'edit') {
                                if ($row->image != null) { ?>
                                    <div style="margin-bottom: 5px;">
                                        <img src="<?= base_url('upload/item/' . $row->image) ?>" style="width:50%">
                                    </div>
                            <?php
                                }
                            } ?>

                            <input id="image" name="image" type="file" class="form-control validate" value="" />
                            <small>Biarkan kosong jika tidak ada <?= $page == 'edit' ? 'diganti' : 'ada' ?> </small>
                        </div> -->
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success text-white">
                                Simpan
                            </button>
                            <button type="reset" class="btn btn-danger text-white">
                                Reset
                            </button>
                        </div>
                    </div>
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
</div>
<div class="modal fade" id="modal-item">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">

            <!-- Ini adalah Bagian Header Modal -->
            <div class="modal-header">
                <h4 class="modal-title">Header Modal</h4>
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
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($barang->result() as $key => $data) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td> <?= $data->id_barcode ?></td>
                                    <td> <?= $data->nama_barang ?></td>
                                    <td>
                                        <button class="btn btn-primary text-white" id="select" data-id="<?= $data->id_barcode ?>" data-barcode="<?= $data->id_barcode ?>" data-name="<?= $data->nama_barang ?>" <i class="mdi mdi-check-circle">Select</i>
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
            var id_barcode = $(this).data('id');
            var barcode = $(this).data('barcode');
            var name = $(this).data('name');
            $('#id_barcode').val(id_barcode);
            $('#barcode').val(barcode);
            $('#name').val(name);
            $("#modal-item").removeClass("in");
            $(".modal-backdrop").remove();
            $('body').removeClass('modal-open');
            $('body').css('padding-right', '');
            $("#modal-item").hide();


        })
    })
</script>