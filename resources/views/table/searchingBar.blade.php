<input type="text" id="myInput" name="myInput" placeholder="Search for names..">

<table id="myTable">
  <tr class="header">
    <th style="width:25%;">Code</th>
    <th style="width:25%;">Model Name</th>
    <th style="width:25%;">Size</th>
    <th style="width:25%;">Color</th>
  </tr>
<div class="search-result" id="search-result">
   
</div>

</table> 
<script>
$(document).ready(function() {
        $('#myInput').on('keyup', function() {
            var query = $(this).val();
            $.ajax({
                url: "/search",
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