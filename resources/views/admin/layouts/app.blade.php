<!doctype html>
<html lang="en" class="minimal-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="{{ asset('public/new-admin/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/style.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/icons.css')}}" rel="stylesheet">
  <link href="{{ asset('public/new-admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="{{ asset('public/new-admin/assets/css/pace.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/light-theme.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/semi-dark.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/header-colors.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="canonical" href="https://printerithelp.com/">
      <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.png')}}">
  <title>Allprinter Ithelp - Admin Template</title>
  @yield('heads')
  @yield('stylesheets')
</head>

<body>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Printer IT Help",
  "url": "https://printerithelp.com/",
  "logo": "https://printerithelp.com/public/assets/images/png/page-logo.png",
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": "",
      "contactType": "technical support",
      "email": "contact@printerithelp.com",
      "areaServed": "US",
      "availableLanguage": "en"
    }
  ]
}
</script>
  <div class="wrapper">
    @include('admin.layouts.header')
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-3">
          @include('admin.layouts.sidebar')
        </div>

        <div class="col-md-9 content_section">
          @yield('content')
        </div>
      </div>
    </div>
  </div>


  <script src="{{asset('public/new-admin/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/easyPieChart/jquery.easypiechart.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/peity/jquery.peity.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/js/pace.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/js/table-datatable.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/js/app.js')}}"></script>
  {{-- <script src="{{asset('public/new-admin/assets/js/index.js')}}"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")
  </script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "About Us",
    "item": "https://printerithelp.com/about"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "HP Printer",
    "item": "https://printerithelp.com/hp_printer"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "Epson Printer",
    "item": "https://printerithelp.com/epson_printer"
  },{
    "@type": "ListItem",
    "position": 4,
    "name": "Brother Printer",
    "item": "https://printerithelp.com/brother_printer"
  },{
    "@type": "ListItem",
    "position": 5,
    "name": "Canon Printer",
    "item": "https://printerithelp.com/canon_printer"
  },{
    "@type": "ListItem",
    "position": 6,
    "name": "Installation & Troubleshooting",
    "item": "https://printerithelp.com/installation_printer"
  },{
    "@type": "ListItem",
    "position": 7,
    "name": "Contact Us",
    "item": "https://printerithelp.com/contact"
  },{
    "@type": "ListItem",
    "position": 8,
    "name": "Blog",
    "item": "https://printerithelp.com/blog"
  }]
}
</script>



   <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
   <script>
   document.addEventListener('DOMContentLoaded', function() {
     ClassicEditor
       .create(document.querySelector('#editor'), {
         toolbar: [
           'heading', '|',
           'bold', 'italic', 'link', '|',
           'numberedList', 'bulletedList', '|',
           'blockQuote', 'insertTable', 'mediaEmbed', '|',
           'undo', 'redo', 'imageUpload' // Ensure 'imageUpload' is included
         ],
         heading: {
           options: [
             { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
             { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
             { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
             { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
             { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
             { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
             { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
           ]
         },

         mediaEmbed: {
           previewsInData: true
         }
       })
       .then(editor => {
         console.log('Editor initialized successfully.', editor);

         // Set the editable element
         const editableElement = editor.ui.view.editable.element;

         // Set fixed height
         const fixedHeight = 'auto';

         // Apply fixed height styles after editor is initialized
         editableElement.style.height = fixedHeight;
         editableElement.style.maxHeight = fixedHeight;
         editableElement.style.minHeight = fixedHeight;
         editableElement.style.overflowY = 'auto';

         // Override CKEditor resizing behavior
         function maintainFixedHeight() {
           editableElement.style.height = fixedHeight;
         }

         // Add listeners for interactions that might change the height
         editor.ui.focusTracker.on('change:isFocused', maintainFixedHeight);
         editor.model.document.on('change:data', maintainFixedHeight);

         // Manually reset height when interacting
         editableElement.addEventListener('focus', maintainFixedHeight);
         editableElement.addEventListener('input', maintainFixedHeight);
         editableElement.addEventListener('blur', maintainFixedHeight);

         // Ensure height is maintained when clicking outside the editor
         document.addEventListener('click', function(event) {
           if (!editableElement.contains(event.target)) {
             maintainFixedHeight();
           }
         });
       })
       .catch(error => {
         console.error('Error initializing CKEditor:', error);
       });
   });
 </script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    ClassicEditor
      .create(document.querySelector('#description'), {
        toolbar: [
          'heading', '|',
          'bold', 'italic', 'link', '|',
          'numberedList', 'bulletedList', '|',
          'blockQuote', 'insertTable', 'mediaEmbed', '|',
          'undo', 'redo'
        ],
        heading: {
          options: [
            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
            { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
            { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
            { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
            { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
          ]
        }
      })
      .then(editor => {
        console.log('Editor was initialized', editor);
      })
      .catch(error => {
        console.error(error);
      });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    ClassicEditor
      .create(document.querySelector('#description1'), {
        toolbar: [
          'heading', '|',
          'bold', 'italic', 'link', '|',
          'numberedList', 'bulletedList', '|',
          'blockQuote', 'insertTable', 'mediaEmbed', '|',
          'undo', 'redo'
        ],
        heading: {
          options: [
            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
            { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
            { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
            { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
            { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
          ]
        }
      })
      .then(editor => {
        console.log('Editor was initialized', editor);
      })
      .catch(error => {
        console.error(error);
      });
  });
</script>

<script>
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#3085d6',
        });
    @endif

    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops!',
            text: '{{ session('error') }}',
            confirmButtonColor: '#d33',
        });
    @endif

    @if($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            html: `{!! implode('<br>', $errors->all()) !!}`,
            confirmButtonColor: '#d33',
        });
    @endif
</script>

  @yield('scripts')
</body>

</html>
