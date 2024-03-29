<!-- jQuery -->
<script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<!--<script src="../../plugins/select2/js/select2.full.min.js"></script>-->
<!-- Bootstrap4 Duallistbox -->
<!--<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>-->
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!--<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>-->
<!-- InputMask -->
<script src="<?php echo base_url(); ?>/assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<!--<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>-->
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<!--<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>-->
<!-- BS-Stepper -->
<!--<script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>-->
<!-- dropzonejs -->
<!--<script src="../../plugins/dropzone/min/dropzone.min.js"></script>-->
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!--<script src="../../dist/js/demo.js"></script>-->
<!-- Page specific script -->
<script>
function check() {
  var checkBox = document.getElementById("checbox");
  var text1 = document.getElementsByClassName("text1");
  var text2 = document.getElementsByClassName("text2");

  for (var i = 0; i < text1.length; i++) {
    if (checkBox.checked == true) {
      text1[i].style.display = "block";
      text2[i].style.display = "none";
    } else if (checkBox.checked == false) {
      text1[i].style.display = "none";
      text2[i].style.display = "block";
    }
  }
}
check();

/* Vendor Payment Integration */

$(document).ready(function () {
  $(document).on("click", ".vendorPlan", function (e) {
    e.preventDefault();

    var plananualprice = document.querySelector(".planpriceannual");
    var plamonthlprice = document.querySelector(".planpricemonth");
    var planName1 = document.querySelector(".planname1");

    var price1 = plananualprice.dataset.annual1;
    var price2 = plamonthlprice.dataset.month1;
    var type1 = plananualprice.dataset.typea1;
    var type2 = plamonthlprice.dataset.typem1;
    var expire1 = plananualprice.dataset.expirea1;
    var expire2 = plamonthlprice.dataset.expirem1;
    var pname = planName1.dataset.plan1;
    console.log('price1 '+price1+' price2 '+price2);
    console.log('type1 '+type1+' type2 '+type2);

    if (document.querySelector(".strikeprice2").style.display === "block") {
    //   document.getElementById("planamount").value = "9000"+" "+price2;
      document.getElementById("planamount").value = price2;
      document.getElementById("planName").value = "Palette Pro";
      document.getElementById("planType").value = type2;
      document.getElementById("expireDate").value = expire2;
    } else if (
      document.querySelector(".strikeprice1").style.display === "block"
    ) {
    //   document.getElementById("planamount").value = "3000"+" "+price1;
      document.getElementById("planamount").value = price1;
      document.getElementById("planName").value = "Palette Pro";
      document.getElementById("planType").value = type1;
      document.getElementById("expireDate").value = expire1;
    } else {
      alert("test");
    }
    var _self = $(this);

    $(_self.attr("href")).modal("show");
  });
});

$(document).ready(function () {
  $(document).on("click", ".vendorPlan2", function (e) {
    e.preventDefault();

    var plananualprice = document.querySelector(".planpriceannual1");
    var plamonthlprice = document.querySelector(".planpricemonth1");
    var planName1 = document.querySelector(".planname1");

    var price1 = plananualprice.dataset.annual2;
    var price2 = plamonthlprice.dataset.month2;
    var type1 = plananualprice.dataset.typea2;
    var type2 = plamonthlprice.dataset.typem2;
    var expire1 = plananualprice.dataset.expirea2;
    var expire2 = plamonthlprice.dataset.expirem2;
    var pname = planName1.dataset.plan1;
    console.log('price1 '+price1+' price2 '+price2);
    console.log('type1 '+type1+' type2 '+type2);

    if (document.querySelector(".strikeprice2").style.display === "block") {
    //   document.getElementById("planamount").value = "18000"+" "+price2;
      document.getElementById("planamount").value = price2;
      document.getElementById("planName").value = "Palette Elite";
      document.getElementById("planType").value = type2;
      document.getElementById("expireDate").value = expire2;
    } else if (
      document.querySelector(".strikeprice1").style.display === "block"
    ) {
    //   document.getElementById("planamount").value = "6000"+" "+price1;
      document.getElementById("planamount").value = price1;
      document.getElementById("planName").value = "Palette Elite";
      document.getElementById("planType").value = type1;
      document.getElementById("expireDate").value = expire1;
    } else {
      alert("test");
    }
    var _self = $(this);

    $(_self.attr("href")).modal("show");
  });
});

$(document).ready(function () {
  $(document).on("click", ".vendorPlan3", function (e) {
    e.preventDefault();

    var planName1 = document.querySelector(".planname3");
    var pname = planName1.dataset.plan3;

    var _self = $(this);

    // alert(pname);

    if (pname === "palette-express") {
      document.getElementById("planamount").value = "000";
      document.getElementById("planName").value = "Palette Express";
    }

    $(_self.attr("href")).modal("show");
  });
});

    $(function () {
    //Initialize Select2 Elements
//    $('.select2').select2()

    //Initialize Select2 Elements
//    $('.select2bs4').select2({
//      theme: 'bootstrap4'
//    })

    //Datemask dd/mm/yyyy
//    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
//    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
//    $('[data-mask]').inputmask()

    //Date picker
//    $('#reservationdate').datetimepicker({
//        format: 'L'
//    });

    //Date and time picker
//    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#exampleInputStartDate').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#exampleInputEndDate').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
//    $('#reservation').daterangepicker()
//    //Date range picker with time picker
//    $('#reservationtime').daterangepicker({
//      timePicker: true,
//      timePickerIncrement: 30,
//      locale: {
//        format: 'MM/DD/YYYY hh:mm A'
//      }
//    })
    //Date range as a button
//    $('#daterange-btn').daterangepicker(
//      {
//        ranges   : {
//          'Today'       : [moment(), moment()],
//          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
//          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
//          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
//          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
//          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
//        },
//        startDate: moment().subtract(29, 'days'),
//        endDate  : moment()
//      },
//      function (start, end) {
//        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
//      }
//    )

    //Timepicker
//    $('#timepicker').datetimepicker({
//      format: 'LT'
//    })

    //Bootstrap Duallistbox
//    $('.duallistbox').bootstrapDualListbox()
//
//    //Colorpicker
//    $('.my-colorpicker1').colorpicker()
//    //color picker with addon
//    $('.my-colorpicker2').colorpicker()
//
//    $('.my-colorpicker2').on('colorpickerChange', function(event) {
//      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
//    })
//
//    $("input[data-bootstrap-switch]").each(function(){
//      $(this).bootstrapSwitch('state', $(this).prop('checked'));
//    })
//
  })
//     BS-Stepper Init
//    document.addEventListener('DOMContentLoaded', function () {
//    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
//    })

    // DropzoneJS Demo Code Start
//  Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
//  var previewNode = document.querySelector("#template")
//  previewNode.id = ""
//  var previewTemplate = previewNode.parentNode.innerHTML
//  previewNode.parentNode.removeChild(previewNode)

//  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
//    url: "/target-url", // Set the url
//    thumbnailWidth: 80,
//    thumbnailHeight: 80,
//    parallelUploads: 20,
//    previewTemplate: previewTemplate,
//    autoQueue: false, // Make sure the files aren't queued until manually added
//    previewsContainer: "#previews", // Define the container to display the previews
//    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
//  })
//
//  myDropzone.on("addedfile", function(file) {
//    // Hookup the start button
//    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
//  })

    // Update the total progress bar
//  myDropzone.on("totaluploadprogress", function(progress) {
//    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
//  })
//
//  myDropzone.on("sending", function(file) {
//    // Show the total progress bar when upload starts
//    document.querySelector("#total-progress").style.opacity = "1"
//    // And disable the start button
//    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
//  })

    // Hide the total progress bar when nothing's uploading anymore
//  myDropzone.on("queuecomplete", function(progress) {
//    document.querySelector("#total-progress").style.opacity = "0"
//  })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
//  document.querySelector("#actions .start").onclick = function() {
//    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
//  }
//  document.querySelector("#actions .cancel").onclick = function() {
//    myDropzone.removeAllFiles(true)
//  }
    // DropzoneJS Demo Code End
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    /*CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });*/
  })
    $(function () {
   // Get all the navigation items
    var navItems = document.querySelectorAll('#nav-sidebar li');
    var value = localStorage.getItem('nav-active');
//        console.log('navItems '+value);
            var element = document.getElementById(value);
            element.classList.add('nav-active');
    // Loop through each navigation item and attach click event listener
    for (var i = 0; i < navItems.length; i++) {
        navItems[i].addEventListener('click', function() {
            // Remove 'active' class from all navigation items
            for (var j = 0; j < navItems.length; j++) {
                navItems[j].classList.remove('nav-active');
            }
            
            // Add 'active' class to the clicked navigation item
            var id  = this.id;
            localStorage.setItem('nav-active', id);
            this.classList.add('nav-active');
        });
    }
    });
</script>
</body>
</html>