<!--a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd" onClick="editFunc({{ $id }})" data-original-title="Edit" class="edit btn btn-success edit">
Edit
</a>
<a href="javascript:void(0);" id="delete-compnay" onClick="deleteFunc({{ $id }})" data-toggle="tooltip" data-original-title="Delete" class="delete btn btn-danger">
Delete
</a>
<button class="btn btn-sm btn-icon dropdown-toggle hide-arrow show" data-bs-toggle="dropdown" aria-expanded="true"><i class="bx bx-dots-vertical-rounded"></i></button!-->

<div class="d-inline-block text-nowrap">
{{-- 	<button class="btn btn-sm btn-icon edit-record" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd" onClick="editFunc({{ $id }})" ><i class="text-warning bx bx-edit"></i>
	</button>
	
	<button class="btn btn-sm btn-icon delete-record" id="delete-compnay" onClick="deleteFunc({{ $id }})"><i class="text-danger bx bx-trash"></i></button>
 --}}
	<div class="btn-group">
        <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow show" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" target="_blank" href="https://mundoeliteve.com/product/producto-de-prueba/{{ $slug }}"><i class="text-success bx bx-search"></i>  Ver Detalles del Producto</a></li>
          <li><a class="dropdown-item" href="product/show/{{ $id }}"><i class="text-danger bx bx-loader"></i>  Sincronizar con la Tienda Fisica</a></li>
        </ul>
      </div>
</div>