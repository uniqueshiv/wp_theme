jQuery(document).ready(function($){

var frame         =wp.media({
  title:          'Select or Upload Logo',
  button:         {
    text:         "use this media"
  },
  multiple:       false

});


  $('#spnin_uploadlogoimage').click(function(e){
    e.preventDefault();
    frame.open();
  });

  frame.on('select',function(){
    var attachment          = frame.state().get('selection').first().toJSON();
    $('input[name=spnin_inputlogoimage]').val(attachment.url);
  })

})
