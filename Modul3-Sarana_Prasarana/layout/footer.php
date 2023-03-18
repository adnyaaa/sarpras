</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="styles.css"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tabel').DataTable();
    });
</script>

<footer id="foot" style="background-color:#00B2BD " class="container-fluid py-5 mt-5 foot">
    <div class="container-fluid text-light text-center">
        <h4>SI SARPRAS</h4>
        <small class="text-white-50">&copy; Copyright Rumah Sakit Prognet. All rights reserved</small>
    </div>
</footer>

</body>

</html>