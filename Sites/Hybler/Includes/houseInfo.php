<!DOCTYPE html>
<html lang="en">
<head>
<div class="container text-center">    
  <h3>Leilighetsinformasjon</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="<?= $server; ?>./img/house/<?php echo $data['image']; ?>" class="img-responsive" style="width:100%" alt="Image">
      <p>Bilde av hybelen</p>
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
      </div>
    </div>
  </div>
</div><br>

</body>
</html>	