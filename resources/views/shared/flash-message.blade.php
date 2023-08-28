@if ($message = Session::get('success'))
    <script>
        let success_html = @json($message);

        Swal.fire({
            icon: 'success',
            title: 'Oops...',
            confirmButtonColor: '#3085d6',
            text: success_html
        })
    </script>
@endif

@if ($message = Session::get('error'))
    <script>
        let error_html = @json($message);

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            confirmButtonColor: '#3085d6',
            text: error_html
        })
    </script>
@endif

@if ($message = Session::get('warning'))
    <script>
        let warning_html = @json($message);

        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            confirmButtonColor: '#3085d6',
            text: warning_html
        })
    </script>
@endif

@if ($message = Session::get('info'))
    <script>
        let info_html = @json($message);

        Swal.fire({
            icon: 'info',
            title: 'Oops...',
            confirmButtonColor: '#3085d6',
            text: info_html
        })
    </script>
@endif

@if ($errors->any())
    <script>
        let errors_html = '<ul class="list-unstyled">';
        let errors = @json($errors->all());
        errors.forEach(message => {
            errors_html += '<li>'  + message + '</li>';
        });
        errors_html += '</ul>';

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            confirmButtonColor: '#3085d6',
            html: errors_html
        })
    </script>
@endif
