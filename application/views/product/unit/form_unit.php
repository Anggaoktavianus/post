<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title"><?= ucfirst($page) ?> Unit</h4>
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
    <form action="<?= site_url('unit/proses') ?>" method="POST" class="tm-signup-form row">

        <!--==============================================================-->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Forms Control</h4>
                        <input id="unit_id" name="unit_id" type="hidden" class="form-control validate" value="<?= $row->unit_id ?>" />
                        <div class="form-group col-lg-6">
                            <label for="name">Nama</label>
                            <input id="name" required name="name" type="text" class="form-control validate" value="<?= $row->name ?>" />

                        </div>
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
    </form>
</div>