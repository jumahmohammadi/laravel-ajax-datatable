<div class="modal fade custom-modal" id="dialog-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-main-content"></div>
            <div class="growing_spinners">
                <?php for($i=0; $i<9; $i++){ echo '<div class="spinner-grow text-primary"></div>';}?>
            </div>
        </div>
    </div>
</div>

<!--   Core JS Files   -->
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/autonumeric.min.4.1.4.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>

<!-- Github buttons -->
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('js/soft-ui-dashboard.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    new AutoNumeric.multiple('.camma_numbers', AutoNumeric.getPredefinedOptions().integer);
    var BASE_URL = {!! json_encode(url('/')) !!};
    
	var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }


     tinymce.init({
        selector: '#richTextEditor',
        plugins: [
          'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
          'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
          'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount',
        ],
        toolbar1: 'undo redo | fontsize formatpainter casechange blocks | bold italic underline  | ' +
          'alignleft aligncenter alignright alignjustify | ',
        toolbar2: "forecolor  backcolor | bullist numlist checklist outdent indent blockquote  | a11ycheck code table |  image removeformat searchreplace  help",

        toolbar_items_size: 'small',
       file_browser_callback: function(field_name, url, type, win){
            win.document.getElementById(field_name).value = 'my browser value';
        }, 
        relative_urls : false,
        convert_urls : true,
        // height : "350",

        setup: function (editor) {
        editor.on('change', function () {
            tinymce.triggerSave();
        });

        

        }
      });
$(".select2").select2();
</script>

@yield("internal_js")
</body>

</html>
