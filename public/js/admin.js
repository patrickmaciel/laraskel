$(document).ready(function()
{

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
