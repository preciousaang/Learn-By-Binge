<script>
    $(document).ready(function(){
        $.get("{{route('cart-list')}}", function(data, status){
            for(var i=0; i<data.length; i++){
                console.log(data[i].title);
            }
        });
    });
</script>
