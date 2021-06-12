<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   <input type="text" id="val1" value="">
   <button class='action'> + </button>
   <input type="text" id="val2" value="">
   <button class='action'> = </button>
   <input type="text" id="val3" value=""><br>

<script>
$(document).ready(function(){
    $(".action").on('click', function(){
        var arg1 = $("#val1").val()
        var arg2 = $("#val2").val()

        $.ajax({
            url: "add.php",
            type: "POST",
			dataType : "json",
            data:{
                arg1: arg1,
                arg2: arg2
            },
            error: function() {alert("Что-то пошло не так...");},
            success: function(answer){
           	$('#val3').val(answer.result);				
            }
            
        })
    });

});
</script>

	