
<script src="{{asset('asset/js/vendor/modernizr-2.8.3.min.js')}}"></script>
<!-- all js here -->
<script src="{{asset('asset/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('asset/js/popper.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/YTplayer.js')}}"></script>
<script src="{{asset('asset/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('asset/js/plugins.js')}}"></script>
<script src="{{asset('asset/js/main.js')}}"></script>
<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{asset('asset/js/select2.min.js?')}}"></script>
<!-- jQuery and JS bundle w/ Popper.js -->
<script>
    $(document).ready(function(){
        if("{{\Illuminate\Support\Facades\Session::has('error')}}"){
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{\Illuminate\Support\Facades\Session::get('error')}}'
            })
        }

        if("{{\Illuminate\Support\Facades\Session::has('success')}}"){
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{\Illuminate\Support\Facades\Session::get('success')}}'
            })
        }
        if("{{\Illuminate\Support\Facades\Session::has('warning')}}"){
            Swal.fire({
                icon: 'warning',
                title: 'warning',
                text: '{{\Illuminate\Support\Facades\Session::get('warning')}}'
            })
        }
    })

</script>
