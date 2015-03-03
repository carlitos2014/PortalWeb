function confirmarEliminar(id) {
  var rsp = confirm("¿Esta seguro de querer eliminar el registro indicado?");
  if (rsp == true) {
    $('#idDelete').val(id);
    $('#frmDelete').submit();
  }
}

function borrarSeleccion() {
  var rsp = confirm("¿Esta seguro de querer eliminar los registros seleccionados?");
  if (rsp == true) {
    $('#frmDeleteAll').submit();
  }
}

$(document).ready(function(){
  $('#chkAll').click(function(){
    $('input[name="chk[]"]').each(function(index, element){
      if ($('#chkAll').is(':checked') == true && $(element).is(':checked') == false) {
        $(element).prop('checked', true);
      } else if ($('#chkAll').is(':checked') == false && $(element).is(':checked') == true) {
        $(element).prop('checked', false);
      }
    });
  });
});


if($(window).width() > 768){

// Hide all but first tab content on larger viewports
$('.accordion__content:not(:first)').hide();

// Activate first tab
$('.accordion__title:first-child').addClass('active');

} else {
  
// Hide all content items on narrow viewports
$('.accordion__content').hide();
};

// Wrap a div around content to create a scrolling container which we're going to use on narrow viewports
$( ".accordion__content" ).wrapInner( "<div class='overflow-scrolling'></div>" );

// The clicking action
$('.accordion__title').on('click', function() {
$('.accordion__content').hide();
$(this).next().show().prev().addClass('active').siblings().removeClass('active');
});

