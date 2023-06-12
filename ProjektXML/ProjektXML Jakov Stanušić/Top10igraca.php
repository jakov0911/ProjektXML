<!DOCTYPE html>
<html class="html1">
    <head>
        <meta name="author" content="Jakov Stanušić"/>
        <meta name="description" content="0246102738"/>
        <meta charset="utf-8"/>
        <title>Naslovnica</title>
        <link href="/ProjektXML/Boot/bootstrap-5.1.3-dist/css/bootstrap-grid.css" rel="stylesheet">
        <link rel="stylesheet" href="style1.css">
        <?php $xmldata = simplexml_load_file("podatci.xml") or die("Could not load file"); ?>
    </head>
    <body>
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <h2 class="navbar-brand" href="#">
      <img src="/projektXML/images/nba.jpg" alt="Logo" width="80" height="80" class="d-inline-block align-text-top" margin-right="20px">
      U nastavku se nalaze rangirano najboljih 10 NBA igrača i timovi u kojima igraju te pozicije.
</h2>
  </div>
</nav>
    <div class="col-lg-4 col-12">
        <h4>1. <?php echo $xmldata->Player1->Name; ?> | <?php echo $xmldata->Player1->Team; ?> | <?php echo $xmldata->Player1->Position; ?>  <br></h4>
        <h4>2. <?php echo $xmldata->Player2->Name; ?> | <?php echo $xmldata->Player2->Team; ?> | <?php echo $xmldata->Player2->Position; ?>  <br></h4>
        <h4>3. <?php echo $xmldata->Player3->Name; ?> | <?php echo $xmldata->Player3->Team; ?> | <?php echo $xmldata->Player3->Position; ?>  <br></h4>
        <h4>4. <?php echo $xmldata->Player4->Name; ?> | <?php echo $xmldata->Player4->Team; ?> | <?php echo $xmldata->Player4->Position; ?>  <br></h4>
        <h4>5. <?php echo $xmldata->Player5->Name; ?> | <?php echo $xmldata->Player5->Team; ?> | <?php echo $xmldata->Player5->Position; ?>  <br></h4>
        <h4>6. <?php echo $xmldata->Player6->Name; ?> | <?php echo $xmldata->Player6->Team; ?> | <?php echo $xmldata->Player6->Position; ?>  <br></h4>
        <h4>7. <?php echo $xmldata->Player7->Name; ?> | <?php echo $xmldata->Player7->Team; ?> | <?php echo $xmldata->Player7->Position; ?>  <br></h4>
        <h4>8. <?php echo $xmldata->Player8->Name; ?> | <?php echo $xmldata->Player8->Team; ?> | <?php echo $xmldata->Player8->Position; ?>  <br></h4>
        <h4>9. <?php echo $xmldata->Player9->Name; ?> | <?php echo $xmldata->Player9->Team; ?> | <?php echo $xmldata->Player9->Position; ?>  <br></h4>
        <h4>10. <?php echo $xmldata->Player10->Name; ?> | <?php echo $xmldata->Player10->Team; ?> | <?php echo $xmldata->Player10->Position; ?>  <br></h4>
</div>
<div class="container-fluid">
<img src="/projektXML/images/all.avif" width="100%" height="400px">
<h2>Slika prikazuje All-star natjecanje 2023 godine gdje možemo vidjeti da se većina igrača nalazi na mojoj listi.</h2>
</div>
      </body>
</html>