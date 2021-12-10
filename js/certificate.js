$(document).ready(function(){
    $('#repeater').createRepeater();

        $('#repeater_certificate_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:"certificate_insert.php",
                method:"POST",
                data:$(this).serialize(),
                success:function(data)
                {
                    $('#repeater_certificate_form')[0].reset();
                    $('#repeater').createRepeater();
                    $('#success_result').html(data);
                  
                }
        
            })
        });
    }) 
