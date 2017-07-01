$('#_biggify').on('click', function() {
  var fontSize = $('html').css('font-size');
  var newFontSize = parseInt(fontSize)+1;

  $('html').css('font-size', newFontSize+'px')
})

$('#_smallify').on('click', function() {
  var fontSize = $('html').css('font-size');
  var newFontSize = parseInt(fontSize)-1;

  $('html').css('font-size', newFontSize+'px')
})

$('#_reset').on('click', function() {
  $('html').css('font-size', '15px')
})
