document.body.innerHTML+= "<script>var serverDate = <?= time() ?> var dateDiff = new Date - serverDate; console.log(serverDate);</script>";
