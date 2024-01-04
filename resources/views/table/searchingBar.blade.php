<input type="text" id="myInput" name="myInput" placeholder="Search for names..">

<div id = "search-result">

</div>
<script>
$(document).ready(function() {
        $('#myInput').on('keyup', function() {
            var query = $(this).val();
            $.ajax({
                url: "search",
                type: "GET",
                data: {
                    'query': query,
                },
                success: function(data) {
                    $("#search-result").empty();
                    $("#search-result").html(data);
                    console.log(data);
                }
            });
        });
    });
    
</script>