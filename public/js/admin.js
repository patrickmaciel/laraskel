$(document).ready(function()
{

  // Redactor - WYSIWYG editor
  $('.htmleditor').redactor();

  $('.bootbox-confirm-default').click(function(event) {
    event.preventDefault();

    form = $(this).parent('form');

    bootbox.confirm('Tem certeza?', function(result)
    {
      if (result) {
        form.submit();
      }
    });
  });

});
