@extends('layouts.app')

@section('title', 'Productos en Tienda Virtual')
@push('css')
<link  href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
<link  href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet">
<link  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
@endpush
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
              <div class="col-sm-6 col-xl-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="content-left">
                        <h3 class="mb-0">{{ $products_local }}</h3>
                        <small>Total @yield('title')</small>
                      </div>
                      <span class="badge bg-label-primary rounded-circle p-2">
                        <i class="bx bx-home bx-sm"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="content-left">
                        <h3 class="mb-0">{{ $products_web }}</h3>
                        <small>@yield('title')</small>
                      </div>
                      <span class="badge bg-label-success rounded-circle p-2">
                        <i class="bx bx-cloud bx-sm"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>           


{{--             <div class="card">
              <!-- /.card-header -->
              <div class="card-body">

                <div class="table-responsive table-striped table-sm table-hover text-nowrap">
                    <table class="datatables-users table" id="product-datatable">
                        <caption class="ms-4">Lista de @yield('title')</caption>
                        <thead class="table-light">
                            <tr>
                                <th>Id</th>
                                <th>SKU</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div> --}}
            <!-- /.card -->


    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-sm text-nowrap table-border-top-0">
          <thead>
            <tr>
              <th>Producto</th>
              <th>Stock</th>
              <th>Payment</th>
              <th>Order Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($products['data'] as $product)
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="{{ $product->images[0]->src }}" alt="Oneplus" height="32" width="32" class="me-3">
                  <div class="d-flex flex-column">
                    <h6 class="mb-0">{{ $product->name }}</h6>
                    <small class="text-body">{{ $product->categories[0]->name }}</small>
                  </div>
                </div>
              </td>
              <td><span class="badge {{ $product->stock_quantity>0 ? 'bg-label-success' : 'bg-label-danger' }} rounded-pill p-1_5 me-3">{{ $product->stock_quantity }} </span></td>
              <td>
                <div class="text-body"><span class="text-primary fw-medium">${{ $product->regular_price }}</span></div>
                <small class="text-body">Dolares Americanos</small>
              </td>
              <td><span class="badge {{ $product->stock_status=="instock" ? 'bg-label-success' : 'bg-label-danger' }} ">{{ $product->stock_status }}</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" target="_blank" href="https://mundoeliteve.com/product/{{ $product->slug }}"><i class="bx bx-edit-alt me-1"></i> Ver Detalles</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
           
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
// $(document).ready( function () {
//     $.ajaxSetup({
//         headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
 
//     $('#product-datatable').DataTable({
//         dom: 'Bfrtip',
//         processing: true,
//         serverSide: true,
//         responsive: true,
//         lengthChange: true, 
//         searching: true,
//         ordering: true,
//         info: true,
//         autoWidth: false,
//         paging: false,
        
//         ajax: "{{ url('web/products') }}",

//         columns: [
//             { data: 'id', name: 'id' },
//             { data: 'sku', name: 'sku' },
//             { data: 'name', name: 'name' },
//             { data: 'stock_quantity', name: 'stock_quantity' },
//             { data: 'price', name: 'price' },
//             { data: 'action', name: 'action', orderable: false, exportable: false},
//         ],
//         order: [[0, 'desc']],
//         buttons: [
//         {extend: 'pdf', className: "btn-danger", exportOptions: {columns: [ 0, 1, 2, 3, 4 ]}},
//         {extend: 'excel', className: "btn-success", exportOptions: {columns: [ 0, 1, 2, 3, 4 ]}},
//         {extend: 'copy', className: "btn-warning", exportOptions: {columns: [ 0, 1, 2, 3, 4]}}

//         ]
//     });

// });
 
// </script>

@endpush
