<footer>
    <?php
echo "<p>T&euml; gjitha t&euml; rezervuara &copy; ".date("Y")."</p>";
    ?>
</footer>
<script>
function dropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>
</body>
</html>