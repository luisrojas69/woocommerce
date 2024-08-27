@extends('layouts.app')

@section('title', 'Home')

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
                            @include('contents.backend.admin.home.partials.card-user')
                        </div>
                        <div class="row">
                            @include('contents.backend.admin.home.partials.card-employee')
                        </div>

                        <button type="button" class="btn btn-primary me-1 mb-1" id="basic-alert">
  Basic
</button>
<button type="button" class="btn btn-primary me-1 mb-1" id="with-title">
  With Title
</button>
<button type="button" class="btn btn-primary me-1 mb-1" id="footer-alert">
  With Footer
</button>
<button type="button" class="btn btn-primary mb-1" id="html-alert">
  HTML
</button>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

const basicAlert = document.querySelector('#basic-alert'),
 withTitle = document.querySelector('#with-title'),
 footerAlert = document.querySelector('#footer-alert'),
 htmlAlert = document.querySelector('#html-alert');

// BASIC ALERT
basicAlert.onclick = function() {
  Swal.fire({
    title: 'Any fool can use a computer',
    customClass: {
      confirmButton: 'btn btn-primary'
    },
    buttonsStyling: false
  });
};

// ALERT WITH TITLE
withTitle.onclick = function() {
  Swal.fire({
    title: 'The Internet?,',
    text: 'That thing is still around?',
    customClass: {
      confirmButton: 'btn btn-primary'
    },
    buttonsStyling: false
  })
}

// ALERT WITH FOOTER
footerAlert.onclick = function() {
  Swal.fire({
    type: 'error',
    title: 'Oops...',
    text: 'Something went wrong!',
    footer: '<a href>Why do I have this issue?</a>',
    customClass: {
      confirmButton: 'btn btn-primary'
    },
    buttonsStyling: false
  })
}

// HTML ALERT
htmlAlert.onclick = function() {
  Swal.fire({
    title: '<strong>HTML <u>example</u></strong>',
    type: 'info',
    html:
      "You can use <b>bold text</b>, " +
      '<a href="https://pixinvent.com/" target="_blank">links</a> ' +
      "and other HTML tags",
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
    confirmButtonAriaLabel: 'Thumbs up, great!',
    cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
    cancelButtonAriaLabel: 'Thumbs down',
    customClass: {
      confirmButton: 'btn btn-primary me-1',
      cancelButton: 'btn btn-label-secondary'
    },
    buttonsStyling: false
  })
}
</script>
@endpush
