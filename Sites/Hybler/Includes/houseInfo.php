<!DOCTYPE html>
<html lang="en">
<head>

    <title>Rediger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="container text-center">    
  <h3>Leilighetsinformasjon</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="<?= $server; ?>./img/house/<?php echo $data['image']; ?>" class="img-responsive" style="width:100%" alt="Image">
      <p></p>
	</div>

    <div class="col-sm-4"> 
    <div class="Spesifikasjoner">
      <p class="house-longdesc"><?= $data['long_description']?></p>     <?php  //trenger ikke echo ?>
    </div>
    <div class="Primary">
       <p>Primærrom: <?= $data['primary_room']?></p>
      </div>
      <div class="Bedroom">
       <p>Soverom: <?= $data['bedroom']?></p>
      </div>
      <div class="Floor">
       <p>Etasje: <?= $data['floor']?></p>
      </div>
      <div class="Price">
       <p>Pris:<?= $data['price']?>,- per måned</p>
      </div>
      <div class="Rent-period">
       <p>Leieperiode: <?= $data['rent_start']?> - <?= $data['rent_end']?></p>
  </div>
  </div>

    <div class="col-sm-4">
    <div class="Info">
       <p>Ytterligere informasjon</p>
      </div>
      <div class="Owner">
       <p>Kontaktperson: <?= $data['owner']?></p>
      </div>
      <div class="Owner-email">
       <p>E-mail: <?= $data['owner_email']?></p>
      </div>
      <div class="Owner-phone">
       <p>Telefon:<?= $data['owner_phone']?></p>

       <form action="../Hybler/components/request/sendRequest.php" method="POST">
       <label for="start">Start date:</label>
       <input type="date" id="start" name="start"/><br>
       
       <label for="end">End date:</label>
       <input type="date" id="end" name="end"/>
       <br>
         <button name="houseID" value="<?php echo $data['id']; ?>" type="submit" class="btn btn-success req-btn">
					<span class="text-white">
            <i class="fa fa-shopping-cart text-white"></i>
						Forespør hybel
					</span>
				</button>
      </form>

      </div>
    </div>
  </div>
</div><br>



</body>
</html>	