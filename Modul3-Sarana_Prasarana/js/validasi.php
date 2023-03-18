<script>
    //validasi    
    function ValidateAngka(username) {
        var keyCode = username.keyCode || username.which;

        var regex = /^\d*(\.\d+)?$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            alert("Input berupa angka");
        }

        return isValid;
    }

    function ValidateNama(username) {
        var keyCode = username.keyCode || username.which;

        var regex = /^[a-zA-Z\s-, ]+$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            alert("Input berupa huruf!");
        }

        return isValid;
    }
</script>