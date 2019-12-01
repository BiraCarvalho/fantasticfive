<?php include_once "init.php" ?> 
<?php include_once "header.php" ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Perfil</h1>
    </div> 
    <div class="card">
        <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-md-4">
                    <img src="img/persona.jpg" class="img-fluid" >
                </div>
                <div class="col col-md-8">
                <form method="post">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="nome" class="form-control" id="nome" value="Harvey Specter">
                    </div>
                    <div class="form-group">
                        <label for="oab">OAB</label>
                        <input type="oab" class="form-control" id="oab" value="725452-0 / SP">
                    </div>                    
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" class="form-control" id="email" value="harvey42@yahoo.com" >
                    </div>
                    <div class="form-group">
                        <label for="public_key">Ethereum Public Key</label>
                        <textarea class="form-control" id="public_key" rows="10">ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDksh5Rs23kWILW5hYGpYTRcnDR6pxfK6nI6wVtuNUiwy5DjaQLJ2I61HK0e7vytfsb2t4jod76Owhkx0p08ugSTwzD4LSZO1KZECOuVKzyu/SHQ1/xxgxed+/J7Sa/Sb8Sa8H3zHn3dp2fzTkWehYZ3K4ATT18QPGhzIAyKocCfvCEA8ci692kEsUpg3Cv9jDCJEaJXklli/zUHdiXIaBPNxX9nY+obNR/9wUfp6HRTdWfk+PKAaZucNwR2sZXct9sBNWmbh1eeE1Uyyf/V6p5PmkR/xDcog4l1ZkksnYhtlGOP5KsnekbORep4NCc7M1DHiHcrrUWF2VlRaL469f/ hackathon@aasp
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Gravar</button>
                    </form>                    
                </div>                
            </div>
        </div>
    </div>
</main>

<?php include_once "footer.php" ?>