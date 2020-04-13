<script>
    $(document).ready(function(){
        loadCart();
    });

    function loadCart(){
        $.get("{{route('cart-list')}}", function(data, status){
            result =Object.values(data);
            for(var i=0; i<result.length; i++){
                $("#cart-items").append("<a href=\"\">"+result[i].item.title+" - "+result[i].quantity+"</a>");
            }
        });
    }

    function clearCart(){
        $("#cart-items").html('');
    }
</script>
