<script>
    var time =5000;
    toastr.options.closeButton = true;
    toastr.options.showEasing = 'swing';
    toastr.options.hideEasing = 'linear';
    toastr.options.closeEasing = 'linear';
    @if(Session::has('error'))
        toastr.options.timeOut = time;
        toastr.error('{{Session::get('error')}}');
    @elseif(Session::has('info'))
        toastr.options.timeOut = time;
        toastr.info('{{Session::get('info')}}');
    @elseif(Session::has('success'))
        toastr.options.timeOut = time;
        toastr.success('{{Session::get('success')}}');
    @elseif(Session::has('warning'))
        toastr.options.timeOut = time;
        toastr.warning('{{Session::get('warning')}}');
    @endif
</script>  