@extends('layouts.app')

@section('title', 'Detalles')

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
                            {{-- SIDEBAR ACCOUNT --}}
                            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                                <!-- User Card -->
                                <div class="card mb-4">
                                  <div class="card-body">
                                    <div class="user-avatar-section">
                                      <div class=" d-flex align-items-center flex-column">
                                        <img class="img-fluid rounded my-4" src="https://mundoeliteve.com/wp-content/uploads/2024/06/back4.jpg.webp" height="110" width="110" alt="User avatar">
                                        <div class="user-info text-center">
                                          <h4 class="mb-2">{{ $product->name }}</h4>
                                        </div>
                                      </div>
                                    </div>
                                    <h5 class="pb-2 border-bottom mb-4">Detalles</h5>
                                    <div class="info-container">
                                      <ul class="list-unstyled">
                                        <li class="mb-3">
                                          <span class="fw-medium me-2">Nombre del Perfume:</span>
                                          <span>{{ $product->name }}</span>
                                        </li>
                                        <li class="mb-3">
                                          <span class="fw-medium me-2">Precio:</span>
                                          <span>{{ $product->price }}</span>
                                        </li>
                                        <li class="mb-3">
                                          <span class="fw-medium me-2">Status:</span>
                                          <span class="badge bg-label-success">Active</span>
                                        </li>
                                        <li class="mb-3">
                                          <span class="fw-medium me-2">SKU:</span>
                                          <span>{{ $product->sku }}</span>
                                        </li>
                                        <li class="mb-3">
                                          <span class="fw-medium me-2">Existencia:</span>
                                          <span>{{ $product->stock }}</span>
                                        </li>
                                      </ul>
                                      <div class="d-flex justify-content-center pt-3">
                                        <a href="javascript:;" class="btn btn-primary me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd" onClick="editFunc({{ $product }})">Editar</a>
                                        <a href="javascript:;" class="btn btn-danger suspend-user" id="delete-compnay" onClick="deleteFunc({{ $product }})">Eliminar</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /User Card -->
                              </div>
                            {{-- END SIDEBAR ACCOUNT --}}


                            {{-- User Content --}}
                                <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">

                                <!-- Billing Address -->
                                <div class="card card-action mb-4">
                                  <div class="card-header align-items-center">
                                    <h5 class="card-action-title mb-0">Detalles de Producto</h5>
                                    <div class="">
                                      <a class="btn btn-primary btn-sm" href="{{ route('admin.product.index') }}">Ir a la Tabla de Productos</a>
                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-xl-7 col-12">
                                        <dl class="row mb-0">
                                          <dt class="col-sm-4 fw-medium mb-3 text-nowrap">Nombre del Perfume:</dt>
                                          <dd class="col-sm-8">{{ $product->name }}</dd>

                                          <dt class="col-sm-4 fw-medium mb-3 text-nowrap">ID:</dt>
                                          <dd class="col-sm-8">{{ $product->id }}</dd>

                                          <dt class="col-sm-4 fw-medium mb-3 text-nowrap">Tax ID:</dt>
                                          <dd class="col-sm-8">TAX-357378</dd>

                                          <dt class="col-sm-4 fw-medium mb-3 text-nowrap">VAT Number:</dt>
                                          <dd class="col-sm-8">SDF754K77</dd>

                                          <dt class="col-sm-4 fw-medium mb-3 text-nowrap">Precio:</dt>
                                          <dd class="col-sm-8">{{ $product->name }}</dd>
                                        </dl>
                                      </div>
                                      <div class="col-xl-5 col-12">
                                        <dl class="row mb-0">
                                          <dt class="col-sm-4 fw-medium mb-3 text-nowrap">SKU:</dt>
                                          <dd class="col-sm-8">{{ $product->sku }}</dd>

                                          <dt class="col-sm-4 fw-medium mb-3 text-nowrap">Descripcion:</dt>
                                          <dd class="col-sm-8">{{ $product->sku}}</dd>

                                          <dt class="col-sm-4 fw-medium mb-3 text-nowrap">Estado:</dt>
                                          <dd class="col-sm-8">Con Existencias</dd>

                                          <dt class="col-sm-4 fw-medium mb-3 text-nowrap">ID:</dt>
                                          <dd class="col-sm-8">{{ $product->id }}</dd>
                                        </dl>
                                      </div>
                                      <div class="col-xl-12 col-12">
                                        <dl class="row mb-0">
                                          <dt class="col-sm-2 fw-medium mb-3 text-nowrap">Descripcion:</dt>
                                          <dd class="col-sm-10">{{ $product->description }}</dd>
                                        </dl>
                                      </div>                                      
                                    </div>
                                  </div>
                                </div>
                                <!--/ Billing Address -->

                              </div>
                            {{-- End User Content --}}
                        </div>
                    </div>
                    {{-- !Content --}}

                    {{-- Footer --}}
                    @include('partials.footer')
                    {{-- !Footer --}}

                    <div class="content-backdrop fade"></div>
                </div>
                {{-- !Content Wrapper --}}

                {{-- Off Canvas --}}
                      <div class="col-lg-3 col-md-6">
                        <small class="text-light fw-medium mb-3">End</small>
                        <div class="mt-3">
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasEndLabel" class="offcanvas-title AddTitle">Producto</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                <form action="javascript:void(0)" id="productForm" name="productForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" id="id">
                                    <div class="mb-3 fv-plugins-icon-container">
                                      <label class="form-label" for="add-user-fullname">Nombre Completo</label>
                                      <input type="text" class="form-control" id="name" placeholder="John Doe" name="name" aria-label="John Doe" value="">
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                    <div class="mb-3 fv-plugins-icon-container">
                                      <label class="form-label" for="add-user-email">Email</label>
                                      <input type="email" id="email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="email" value="">
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                    <div class="mb-3 fv-plugins-icon-container">
                                      <label class="form-label" for="add-user-company">Dirección</label>
                                      <input type="text" id="address" name="address" class="form-control" placeholder="1197NW 87CT Hialeah, FLorida" aria-label="jdoe1" value="">
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>

                                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Enviar</button>
                                    <button type="reset" class="btn btn-secondary navbar-toggle" data-bs-dismiss="offcanvas">Cancel</button>
                                  <input type="hidden">
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                {{-- END Off Canvas --}} 
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
@endsection


@push('scripts')

<script type="text/javascript">
function editFunc(id){
    $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:"POST",
        url: "{{ url('admin/product/edit') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
            $('.AddTitle').html("Editar Producto");
            //$('#product-modal').modal('show');
            $('#id').val(res.id);
            $('#name').val(res.name);
            $('#address').val(res.address);
            $('#email').val(res.email);
        }
    });
}  
 
function deleteFunc(id){
    if (confirm("Delete Record?") == true) {
        var id = id;
        $.ajax({
             headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
            type:"POST",
            url: "{{ url('admin/product/delete') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
                alert("El Producto fue Eliminado y usted sera redirigido a la Tabla de Productos actualizada");
                window.location = '/admin/products';
            }
        });
    }
}
 
$('#productForm').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:'POST',
        url: "{{ url('admin/product/store')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
            $('.navbar-toggle').click()
            $("#btn-save").html('Submit');
            $("#btn-save"). attr("disabled", false);
            //location.reload(true);
            console.log(data.message);
        },
        error: function(data){
            console.log(data);
        }
    });
});
</script>
@endpush
