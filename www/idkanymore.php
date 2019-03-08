<script>
$('#my-div a').click(function(e) {
  var txt = $(e.target).text();
  <?php 
    $_SESSION['link'] = 'hello'; 
    echo '<META HTTP-EQUIV = "Refresh" Content = "0; URL = info.php">'; 
    ?>;
});
</script>