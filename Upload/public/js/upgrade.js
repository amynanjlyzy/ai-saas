

/*************************************************
 *  Process File Synthesize Mode
 *************************************************/
$('#upgrade').on('click',function(e) {

    "use strict";

    e.preventDefault()

    let checkbox = document.getElementById("concent");
    
    if(checkbox.checked) {

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: $('#upgrade-form').attr('action'),
            beforeSend: function() {
                $('#upgrade').html('');
                $('#upgrade').prop('disabled', true);
                $('#processing').show().clone().appendTo('#upgrade');  
                $('#processing').hide();         
            },
            complete: function() {
                $('#upgrade').prop('disabled', false);
                $('#processing', '#upgrade').empty().remove();
                $('#processing').hide();
                $('#upgrade').html('Check New Version');            
            },
            success: function(data) {           
                if(data) {
                    let notInstalled = document.getElementById('not-installed-info');
                    let installed = document.getElementById('installed-info');
                    
                    if(notInstalled) {
                        document.getElementById('not-installed-info').style.display = 'none';
                    }
                    
                    if (installed) {
                        document.getElementById('installed-info').style.display = 'block';
                        toastr.success('Update has been installed successfully');
                    } 
                }
            },
            error: function(data) {
                $('#upgrade').prop('disabled', false);
                $('#processing').remove();
                $('#upgrade').html('Download & Install Upgrade');            
            }
        }).done(function(data) {})
    
    } else {
        toastr.warning('Make sure to read the checkbox information first and agree on it before updating');
    }
});




  
 