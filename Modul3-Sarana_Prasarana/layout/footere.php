</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(".sidebar ul li").on('click', function() {
        $(".sidebar ul li.active").removeClass('active');
        $(this).addClass('active');
    })

    $(".open-btn").on('click', function() {
        $(".sidebar").addClass('active');
    })

    $(".close-btn").on('click', function() {
        $(".sidebar").removeClass('active');
    })
</script>


</script>
</body>

</html>