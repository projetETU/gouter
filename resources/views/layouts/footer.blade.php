<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('')}}"></script>
<script>
    $(document).ready(function(){
        $('#file').on('change', function() {
            var fileName = $(this).val().split('\\').pop();
            $('#fileLabel').text(fileName);
        });
    });
    </script>
