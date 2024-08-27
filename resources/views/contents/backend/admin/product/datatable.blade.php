@extends('layouts.app')

@section('title', 'Productos en Tienda Fisica')
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
                        <h3 class="mb-0">234234</h3>
                        <small>Total Productos en Tienda Fisica</small>
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
                        <h3 class="mb-0">32424</h3>
                        <small>Productos en Tienda Virtual</small>
                      </div>
                      <span class="badge bg-label-success rounded-circle p-2">
                        <i class="bx bx-cloud bx-sm"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>           

<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title mb-0">Search Filters</h5>
    <div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0 g-6">
      <div class="col-md-4 user_role"></div>
      <div class="col-md-4 user_plan"></div>
      <div class="col-md-4 user_status"></div>
    </div>
  </div>
  <div class="card-datatable table-responsive">
    <table class="datatables-users table border-top">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>User</th>
          <th>Role</th>
          <th>Plan</th>
          <th>Billing</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
  <!-- Offcanvas to add new user -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
    <div class="offcanvas-header border-bottom">
      <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 p-6 h-100">
      <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
        <div class="mb-6">
          <label class="form-label" for="add-user-fullname">Full Name</label>
          <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="userFullname" aria-label="John Doe" />
        </div>
        <div class="mb-6">
          <label class="form-label" for="add-user-email">Email</label>
          <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="userEmail" />
        </div>
        <div class="mb-6">
          <label class="form-label" for="add-user-contact">Contact</label>
          <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact" />
        </div>
        <div class="mb-6">
          <label class="form-label" for="add-user-company">Company</label>
          <input type="text" id="add-user-company" class="form-control" placeholder="Web Developer" aria-label="jdoe1" name="companyName" />
        </div>
        <div class="mb-6">
          <label class="form-label" for="country">Country</label>
          <select id="country" class="select2 form-select">
            <option value="">Select</option>
            <option value="Australia">Australia</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Belarus">Belarus</option>
            <option value="Brazil">Brazil</option>
            <option value="Canada">Canada</option>
            <option value="China">China</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Japan">Japan</option>
            <option value="Korea">Korea, Republic of</option>
            <option value="Mexico">Mexico</option>
            <option value="Philippines">Philippines</option>
            <option value="Russia">Russian Federation</option>
            <option value="South Africa">South Africa</option>
            <option value="Thailand">Thailand</option>
            <option value="Turkey">Turkey</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States">United States</option>
          </select>
        </div>
        <div class="mb-6">
          <label class="form-label" for="user-role">User Role</label>
          <select id="user-role" class="form-select">
            <option value="subscriber">Subscriber</option>
            <option value="editor">Editor</option>
            <option value="maintainer">Maintainer</option>
            <option value="author">Author</option>
            <option value="admin">Admin</option>
          </select>
        </div>
        <div class="mb-6">
          <label class="form-label" for="user-plan">Select Plan</label>
          <select id="user-plan" class="form-select">
            <option value="basic">Basic</option>
            <option value="enterprise">Enterprise</option>
            <option value="company">Company</option>
            <option value="team">Team</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary me-3 data-submit">Submit</button>
        <button type="reset" class="btn btn-label-danger" data-bs-dismiss="offcanvas">Cancel</button>
      </form>
    </div>
  </div>
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
<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.0.2/cleave.min.js"></script>
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
$(function() {
  let l, c, i;
  var p = $(".datatables-users"),
    f = $(".select2"),
    m = "https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account",
    d = {
      1: {
        title: "Pending",
        class: "bg-label-warning"
      },
      2: {
        title: "Active",
        class: "bg-label-success"
      },
      3: {
        title: "Inactive",
        class: "bg-label-secondary"
      }
    };
  if (f.length) {
    var x = f;
    x.wrap('<div class="position-relative"></div>').select2({
      placeholder: "Select Country",
      dropdownParent: x.parent()
    })
  }
  if (p.length) {
    var v = p.DataTable({
      ajax: "http://localhost:8000/users.json",
      columns: [{
        data: "id"
      }, {
        data: "id"
      }, {
        data: "full_name"
      }, {
        data: "role"
      }, {
        data: "current_plan"
      }, {
        data: "billing"
      }, {
        data: "status"
      }, {
        data: "action"
      }],
      columnDefs: [{
        className: "control",
        searchable: !1,
        orderable: !1,
        responsivePriority: 2,
        targets: 0,
        render: function(t, r, a, n) {
          return ""
        }
      }, {
        targets: 1,
        orderable: !1,
        checkboxes: {
          selectAllRender: '<input type="checkbox" class="form-check-input">'
        },
        render: function() {
          return '<input type="checkbox" class="dt-checkboxes form-check-input" >'
        },
        searchable: !1
      }, {
        targets: 2,
        responsivePriority: 4,
        render: function(t, r, a, n) {
          var e = a.full_name,
            o = a.email,
            s = a.avatar;
          if (s) var b = '<img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png" alt="Avatar" class="rounded-circle">';
          else {
            var h = Math.floor(Math.random() * 6),
              g = ["success", "danger", "warning", "info", "dark", "primary", "secondary"],
              w = g[h],
              e = a.full_name,
              u = e.match(/\b\w/g) || [];
            u = ((u.shift() || "") + (u.pop() || "")).toUpperCase(), b = '<span class="avatar-initial rounded-circle bg-label-' + w + '">' + u + "</span>"
          }
          var y = '<div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4">' + b + '</div></div><div class="d-flex flex-column"><a href="' + m + '" class="text-heading text-truncate"><span class="fw-medium">' + e + "</span></a><small>" + o + "</small></div></div>";
          return y
        }
      }, {
        targets: 3,
        render: function(t, r, a, n) {
          var e = a.role,
            o = {
              Subscriber: '<i class="bx bx-crown text-primary me-2"></i>',
              Author: '<i class="bx bx-edit text-warning me-2"></i>',
              Maintainer: '<i class="bx bx-user text-success me-2"></i>',
              Editor: '<i class="bx bx-pie-chart-alt text-info me-2"></i>',
              Admin: '<i class="bx bx-desktop text-danger me-2"></i>'
            };
          return "<span class='text-truncate d-flex align-items-center text-heading'>" + o[e] + e + "</span>"
        }
      }, {
        targets: 4,
        render: function(t, r, a, n) {
          var e = a.current_plan;
          return '<span class="text-heading">' + e + "</span>"
        }
      }, {
        targets: 6,
        render: function(t, r, a, n) {
          var e = a.status;
          return '<span class="badge ' + d[e].class + '" text-capitalized>' + d[e].title + "</span>"
        }
      }, {
        targets: -1,
        title: "Actions",
        searchable: !1,
        orderable: !1,
        render: function(t, r, a, n) {
          return '<div class="d-flex align-items-center"><a href="javascript:;" class="btn btn-icon delete-record"><i class="bx bx-trash bx-md"></i></a><a href="' + m + '" class="btn btn-icon"><i class="bx bx-show bx-md"></i></a><a href="javascript:;" class="btn btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded bx-md"></i></a><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" class="dropdown-item">Edit</a><a href="javascript:;" class="dropdown-item">Suspend</a></div></div>'
        }
      }],
      order: [
        [2, "desc"]
      ],
      dom: '<"row"<"col-md-2"<"ms-n2"l>><"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-6 mb-md-0 mt-n6 mt-md-0 gap-md-4"fB>>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      language: {
        sLengthMenu: "_MENU_",
        search: "",
        searchPlaceholder: "Search User",
        paginate: {
          next: '<i class="bx bx-chevron-right bx-18px"></i>',
          previous: '<i class="bx bx-chevron-left bx-18px"></i>'
        }
      },
      buttons: [{
        extend: "collection",
        className: "btn btn-label-secondary dropdown-toggle me-4",
        text: '<i class="bx bx-export me-2 bx-sm"></i>Export',
        buttons: [{
          extend: "print",
          text: '<i class="bx bx-printer me-2" ></i>Print',
          className: "dropdown-item",
          exportOptions: {
            columns: [1, 2, 3, 4, 5],
            format: {
              body: function(t, r, a) {
                if (t.length <= 0) return t;
                var n = $.parseHTML(t),
                  e = "";
                return $.each(n, function(o, s) {
                  s.classList !== void 0 && s.classList.contains("user-name") ? e = e + s.lastChild.firstChild.textContent : s.innerText === void 0 ? e = e + s.textContent : e = e + s.innerText
                }), e
              }
            }
          },
          customize: function(t) {
            $(t.document.body).css("color", i).css("border-color", l).css("background-color", c), $(t.document.body).find("table").addClass("compact").css("color", "inherit").css("border-color", "inherit").css("background-color", "inherit")
          }
        }, {
          extend: "csv",
          text: '<i class="bx bx-file me-2" ></i>Csv',
          className: "dropdown-item",
          exportOptions: {
            columns: [1, 2, 3, 4, 5],
            format: {
              body: function(t, r, a) {
                if (t.length <= 0) return t;
                var n = $.parseHTML(t),
                  e = "";
                return $.each(n, function(o, s) {
                  s.classList !== void 0 && s.classList.contains("user-name") ? e = e + s.lastChild.firstChild.textContent : s.innerText === void 0 ? e = e + s.textContent : e = e + s.innerText
                }), e
              }
            }
          }
        }, {
          extend: "excel",
          text: '<i class="bx bxs-file-export me-2"></i>Excel',
          className: "dropdown-item",
          exportOptions: {
            columns: [1, 2, 3, 4, 5],
            format: {
              body: function(t, r, a) {
                if (t.length <= 0) return t;
                var n = $.parseHTML(t),
                  e = "";
                return $.each(n, function(o, s) {
                  s.classList !== void 0 && s.classList.contains("user-name") ? e = e + s.lastChild.firstChild.textContent : s.innerText === void 0 ? e = e + s.textContent : e = e + s.innerText
                }), e
              }
            }
          }
        }, {
          extend: "pdf",
          text: '<i class="bx bxs-file-pdf me-2"></i>Pdf',
          className: "dropdown-item",
          exportOptions: {
            columns: [1, 2, 3, 4, 5],
            format: {
              body: function(t, r, a) {
                if (t.length <= 0) return t;
                var n = $.parseHTML(t),
                  e = "";
                return $.each(n, function(o, s) {
                  s.classList !== void 0 && s.classList.contains("user-name") ? e = e + s.lastChild.firstChild.textContent : s.innerText === void 0 ? e = e + s.textContent : e = e + s.innerText
                }), e
              }
            }
          }
        }, {
          extend: "copy",
          text: '<i class="bx bx-copy me-2" ></i>Copy',
          className: "dropdown-item",
          exportOptions: {
            columns: [1, 2, 3, 4, 5],
            format: {
              body: function(t, r, a) {
                if (t.length <= 0) return t;
                var n = $.parseHTML(t),
                  e = "";
                return $.each(n, function(o, s) {
                  s.classList !== void 0 && s.classList.contains("user-name") ? e = e + s.lastChild.firstChild.textContent : s.innerText === void 0 ? e = e + s.textContent : e = e + s.innerText
                }), e
              }
            }
          }
        }]
      }, {
        text: '<i class="bx bx-plus bx-sm me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add New User</span>',
        className: "add-new btn btn-primary",
        attr: {
          "data-bs-toggle": "offcanvas",
          "data-bs-target": "#offcanvasAddUser"
        }
      }],
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function(t) {
              var r = t.data();
              return "Details of " + r.full_name
            }
          }),
          type: "column",
          renderer: function(t, r, a) {
            var n = $.map(a, function(e, o) {
              return e.title !== "" ? '<tr data-dt-row="' + e.rowIndex + '" data-dt-column="' + e.columnIndex + '"><td>' + e.title + ":</td> <td>" + e.data + "</td></tr>" : ""
            }).join("");
            return n ? $('<table class="table"/><tbody />').append(n) : !1
          }
        }
      },
      initComplete: function() {
        this.api().columns(3).every(function() {
          var t = this,
            r = $('<select id="UserRole" class="form-select text-capitalize"><option value=""> Select Role </option></select>').appendTo(".user_role").on("change", function() {
              var a = $.fn.dataTable.util.escapeRegex($(this).val());
              t.search(a ? "^" + a + "$" : "", !0, !1).draw()
            });
          t.data().unique().sort().each(function(a, n) {
            r.append('<option value="' + a + '">' + a + "</option>")
          })
        }), this.api().columns(4).every(function() {
          var t = this,
            r = $('<select id="UserPlan" class="form-select text-capitalize"><option value=""> Select Plan </option></select>').appendTo(".user_plan").on("change", function() {
              var a = $.fn.dataTable.util.escapeRegex($(this).val());
              t.search(a ? "^" + a + "$" : "", !0, !1).draw()
            });
          t.data().unique().sort().each(function(a, n) {
            r.append('<option value="' + a + '">' + a + "</option>")
          })
        }), this.api().columns(6).every(function() {
          var t = this,
            r = $('<select id="FilterTransaction" class="form-select text-capitalize"><option value=""> Select Status </option></select>').appendTo(".user_status").on("change", function() {
              var a = $.fn.dataTable.util.escapeRegex($(this).val());
              t.search(a ? "^" + a + "$" : "", !0, !1).draw()
            });
          t.data().unique().sort().each(function(a, n) {
            r.append('<option value="' + d[a].title + '" class="text-capitalize">' + d[a].title + "</option>")
          })
        })
      }
    });
    $(".dt-buttons > .btn-group > button").removeClass("btn-secondary")
  }
  $(".datatables-users tbody").on("click", ".delete-record", function() {
    v.row($(this).parents("tr")).remove().draw()
  }), setTimeout(() => {
    $(".dataTables_filter .form-control").removeClass("form-control-sm"), $(".dataTables_length .form-select").removeClass("form-select-sm")
  }, 300)
});
(function() {
  const l = document.querySelectorAll(".phone-mask"),
    c = document.getElementById("addNewUserForm");
  l && l.forEach(function(i) {
    new Cleave(i, {
      phone: !0,
      phoneRegionCode: "US"
    })
  }), FormValidation.formValidation(c, {
    fields: {
      userFullname: {
        validators: {
          notEmpty: {
            message: "Please enter fullname "
          }
        }
      },
      userEmail: {
        validators: {
          notEmpty: {
            message: "Please enter your email"
          },
          emailAddress: {
            message: "The value is not a valid email address"
          }
        }
      }
    },
    plugins: {
      trigger: new FormValidation.plugins.Trigger,
      bootstrap5: new FormValidation.plugins.Bootstrap5({
        eleValidClass: "",
        rowSelector: function(i, p) {
          return ".mb-6"
        }
      }),
      submitButton: new FormValidation.plugins.SubmitButton,
      autoFocus: new FormValidation.plugins.AutoFocus
    }
  })
})();
 
</script>

@endpush
