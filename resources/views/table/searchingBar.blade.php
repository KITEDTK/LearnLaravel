<input type="text" id="myInput" name="myInput" placeholder="Search for names..">

<table id="myTable">
  <tr class="header">
    <th style="width:25%;">Code</th>
    <th style="width:25%;">Model Name</th>
    <th style="width:25%;">Size</th>
    <th style="width:25%;">Color</th>
  </tr>
<div id="search-result">
    <tr>
        <td>Alfreds Futterkiste</td>
        <td>Germany</td>
        <td>Berglunds snabbkop</td>
        <td>Sweden</td>
    </tr>
</div>

</table> 
<script>
$(document).ready(function(){
 
 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
     $.ajax({
         url:"{{ route('search') }}",
         method:'GET',
         data:{query:query},
         dataType:'json',
         success:function(data)
         {
            $('#search-result').html(data.table_data)
         }
     })
 }

 $(document).on('keyup', '#myInput', function(){
     var query = $(this).val();
     fetch_customer_data(query);
 });
});
    
    </script>