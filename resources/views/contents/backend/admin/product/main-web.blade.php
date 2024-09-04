@extends('layouts.app')

@section('title', 'Productos en Tienda Virtual')

@section('app-content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

            {{-- Menu --}}
            @include('partials.menu')
            {{-- !Menu --}}

            <!-- Layout container -->
        <div class="layout-page">

                {{-- Navbar --}}
                @include('partials.navbar')
                {{-- !Navbar --}}

                {{-- Content Wrapper --}}
    <div class="content-wrapper">
        {{-- Content --}}
      <div class="container-xxl flex-grow-1 container-p-y">                
        <div class="row">
          <div class="col-12">

            <div class="row mb-4 g-3">
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="content-left">
                        <h3 class="mb-0">{{ $products_local }}</h3>
                       <small>Productos en Tienda Fisica<a href="{{ route('web.product.index') }}"><i class='bx bx-right-arrow-alt'></i></a></small>

                      </div>
                      <span class="badge bg-label-primary rounded-circle p-2">
                        <i class="bx bx-home bx-sm"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="content-left">
                        <h3 class="mb-0">{{ $products_web }}</h3>
                       <small>Productos en Tienda Virtual<a href="javascript:void(0)"><i class='bx bx-radio-circle-marked'></i></a></small>
                      </div>
                      <span class="badge bg-label-success rounded-circle p-2">
                        <i class="bx bx-cloud bx-sm"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="content-left">
                        <h3 class="mb-0">510</h3>
                        <small>Productos con Stock</small>
                      </div>
                      <span class="badge bg-label-success rounded-circle p-2">
                        <i class="bx bx-check-circle bx-sm"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="content-left">
                        <h3 class="mb-0">168</h3>
                        <small>Productos sin Stock</small>
                      </div>
                      <span class="badge bg-label-danger rounded-circle p-2">
                        <i class="bx bx-x-circle bx-sm"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>           


            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">

                <div class="table-responsive table-striped table-sm table-hover text-nowrap">
                    <table class="datatables-users table" id="product-datatable">
                        <caption class="ms-4">Lista de @yield('title')</caption>
                        <thead class="table-light">
                            <tr>
                                <th>SKU</th>
                                <th>Nombre</th>
                                <th>Stock</th>
                                <th>Stock Status</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->               
    </div>
                   
        {{-- !Content --}}
        {{-- Footer --}}
        @include('partials.footer')
        {{-- !Footer --}}
        <div class="content-backdrop fade"></div>
    </div>
    {{-- !Content Wrapper --}}
</div>
<!-- / Layout page -->


</div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
@endsection

@push('scripts')
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../../plugins/toastr/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script type="text/javascript">
$(document).ready( function () {
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 
    $('#product-datatable').DataTable({
        dom: 'Bfrtip',
        processing: true,
        serverSide: true,
        responsive: true,
        lengthChange: true, 
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        paging: false,

        ajax: "{{ url('web/products') }}",
        columns: [
            { data: 'sku', name: 'sku' },
            { data: null,
              render: function (data, type, row, meta) {
                {data = "<div class='d-flex align-items-center'><img src='"+row.images[0].src+"' alt='Oneplus' height='32' width='32' class='me-3'><div class='d-flex flex-column'><h6 class='mb-0'>"+row.name+"</h6><small class='text-body'> Categorias: "+row.categories[0].name+" , "+row.categories[1].name+"</small></div></div>";}
               return data
                } 
            },
            { data: 'stock_quantity',
              render: function (data) {
                if (data>0){
                   {data = "<span class='badge' style='background: green'>"+data+"</span>";}
                }else{
                   {data = "<span class='badge' style='background: red'>"+data+"</span>";}
                }

               return data
                           } 
            },
            { data: 'stock_quantity',
              render: function (data) {
                if (data>0){
                   {data = "<span class='badge' style='background: green'>INSTOCK</span>";}
                }else{
                   {data = "<span class='badge' style='background: red'>OUTSTOCK</span>";}
                }

               return data
                           } 
            },
            { data: 'price',
              render: function (data) {
                {data = "<div class='text-body'><span class='text-primary fw-medium'>"+data+"$</span></div><small class='text-body'> Dolares Americanos</small>";}
               return data
                } 
            },
            { data: 'action', name: 'action', orderable: false, exportable: false},
        ],
        order: [[0, 'desc']],
        buttons: [
        {extend: 'pdf', className: "btn-danger", exportOptions: {columns: [ 0, 1, 2, 3, 4 ]}},
        {extend: 'excel', className: "btn-success", exportOptions: {columns: [ 0, 1, 2, 3, 4 ]}},
        {extend: 'copy', className: "btn-warning", exportOptions: {columns: [ 0, 1, 2, 3, 4]}}

        ]
    });
});
 
</script>

@endpush
