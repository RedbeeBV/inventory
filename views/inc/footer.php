</div> <!-- /container -->
<footer>

</footer>
<script>
    $(document).ready(function () {
        $('#data-table').DataTable();
        
        $(".form-horizontal > fieldset legend").on('click', function () {
            $(this)
                    .stop()
                    .parent()
                    .children("div")
                    .slideToggle("slow");
        });

    });
</script>
</body>
</html>
