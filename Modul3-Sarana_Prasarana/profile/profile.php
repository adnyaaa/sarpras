<?php
session_start();
include '../layout/headerp.php';
?>

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card col-sm-4 pt-3 pb-3 mt-5 text-light text-center" style="background-color:#00B2BD">
                <div class="profil-text pb-2">
                    <h1>Profil</h1>
                </div>                                    
                <div class="profile-pic-div">                        
                    <img src="image.jpg" id="photo">
                    <input type="file" id="file">
                    <label for="file" id="uploadBtn">Pilih Foto</label>                    
                </div>                 
                <div class="profil-text pt-4">
                    <h3><?php echo $_SESSION['username'];?></h3>
                    <p><?php echo $_SESSION['level'];?></p>              
                </div>
            </div>                
        </div>
    </div>

    <script src="app.js"></script>
    
<?php
include '../layout/footer.php';
?>