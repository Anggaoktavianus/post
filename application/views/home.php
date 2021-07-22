<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
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
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <a href="<?= site_url('home') ?>">
                        <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                        <h6 class="text-white">Dashboard</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <a href="<?= site_url('suplier') ?>">
                        <h1 class="font-light text-white"><i class="mdi mdi-truck-delivery"></i></h1>
                        <h6 class="text-white">Supplier</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <a href="<?= site_url('customer') ?>">
                        <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                        <h6 class="text-white">Customer</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <a href="<?= site_url('category') ?>">
                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                        <h6 class="text-white">Category</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-info text-center">
                    <a href="<?= site_url('unit') ?>">
                        <h1 class="font-light text-white"><i class="mdi mdi-archive"></i></h1>
                        <h6 class="text-white">Unit</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-info text-center">
                    <a href="<?= site_url('suplier') ?>">
                        <h1 class="font-light text-white"><i class="mdi mdi-cart"></i></h1>
                        <h6 class="text-white">Penjualan</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <a href="<?= site_url('items') ?>">
                        <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                        <h6 class="text-white">Items</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <a href="<?= site_url('suplier') ?>">
                        <h1 class="font-light text-white"><i class="mdi mdi-arrow-down-box"></i></h1>
                        <h6 class="text-white">Stock In</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <a href="<?= site_url('suplier') ?>">
                        <h1 class="font-light text-white"><i class="mdi mdi-arrow-up-box"></i></h1>
                        <h6 class="text-white">Stock Out</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <a href="<?= site_url('suplier') ?>">
                        <h1 class="font-light text-white"><i class="mdi mdi-file-chart"></i></h1>
                        <h6 class="text-white">Laporan</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Analisis Income</h4>
                            <h5 class="card-subtitle">Berdasarkan Bulan</h5>
                        </div>
                    </div>
                    <div class="row">
                        <!-- column -->
                        <div class="col-lg-9">
                            <div class="float-chart">
                                <div class="flot-chart-content" id="chartContainer" style="height: 300px; width: 100%;"></div>
                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                                <!-- <div class="col-lg-9">
                            <div class="line">
                                <div class="flot-chart-content" id="line"></div>
                            </div>
                        </div> -->
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-cart-plus mb-1 font-16"></i>
                                        <h5 class="mb-0 mt-1">2540</h5>
                                        <small class="font-light">Total Transaksi</small>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-plus mb-1 font-16"></i>
                                        <h5 class="mb-0 mt-1">120</h5>
                                        <small class="font-light">Nilai Transaksi</small>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-boxes mb-1 font-16"></i>
                                        <h5 class="mb-0 mt-1">656</h5>
                                        <small class="font-light">Stock Tersedia</small>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-boxes mb-1 font-16"></i>
                                        <h5 class="mb-0 mt-1">9540</h5>
                                        <small class="font-light">Stock Keluar</small>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-table mb-1 font-16"></i>
                                        <h5 class="mb-0 mt-1">100</h5>
                                        <small class="font-light">Pending Orders</small>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-globe mb-1 font-16"></i>
                                        <h5 class="mb-0 mt-1">8540</h5>
                                        <small class="font-light">Online Orders</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h5 class="card-title">Calender</h5>
            <div class="card">
                <div class="">
                    <div class="row">
                        <div class="col-lg-3 border-right pe-0">
                            <div class="card-body border-bottom">
                                <h4 class="card-title mt-2">Drag & Drop Event</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="calendar-events" class="">
                                            <div class="calendar-events mb-3" data-class="bg-info"><i class="fa fa-circle text-info me-2"></i>Event One
                                            </div>
                                            <div class="calendar-events mb-3" data-class="bg-success"><i class="fa fa-circle text-success me-2"></i> Event Two
                                            </div>
                                            <div class="calendar-events mb-3" data-class="bg-danger"><i class="fa fa-circle text-danger me-2"></i>Event Three
                                            </div>
                                            <div class="calendar-events mb-3" data-class="bg-warning"><i class="fa fa-circle text-warning me-2"></i>Event Four
                                            </div>
                                        </div>
                                        <!-- checkbox -->
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="drop-remove">
                                            <label class="form-check-label" for="drop-remove">Remove
                                                after drop</label>
                                        </div>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="btn mt-3 btn-info d-block waves-effect waves-light">
                                            <i class="ti-plus"></i> Add New Event
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card-body b-l calender-sidebar">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN MODAL -->
    <div class="modal none-border" id="my-event">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Add Event</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                        event</button>
                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add Category -->
    <div class="modal fade none-border" id="add-new-event">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Add</strong> a category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Category Name</label>
                                <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Choose Category Color</label>
                                <select class="form-select shadow-none form-white" data-placeholder="Choose a color..." name="category-color">
                                    <option value="success">Success</option>
                                    <option value="danger">Danger</option>
                                    <option value="info">Info</option>
                                    <option value="primary">Primary</option>
                                    <option value="warning">Warning</option>
                                    <option value="inverse">Inverse</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "Data Income "
            },
            axisY: {
                title: "Total(Rupiah)"
            },
            data: [{
                type: "column",
                showInLegend: true,
                legendMarkerColor: "grey",
                legendText: "MMbbl = one million barrels",
                dataPoints: [{
                        y: 300878,
                        label: "Januari"
                    },
                    {
                        y: 266455,
                        label: "Februari"
                    },
                    {
                        y: 169709,
                        label: "Maret"
                    },
                    {
                        y: 158400,
                        label: "April"
                    },
                    {
                        y: 142503,
                        label: "Mei"
                    },
                    {
                        y: 101500,
                        label: "Juni"
                    },
                    {
                        y: 97800,
                        label: "Juli"
                    },
                    {
                        y: 80000,
                        label: "Agustus"
                    },
                    {
                        y: 142503,
                        label: "September"
                    },
                    {
                        y: 101500,
                        label: "Oktober"
                    },
                    {
                        y: 97800,
                        label: "November"
                    },
                    {
                        y: 80000,
                        label: "Desember"
                    }
                ]
            }]
        });
        chart.render();

    }
</script>