<?php include("config.php");include("header.php"); ?>
<html lang="en">
<head>
  
<body>
    <section id="nav-section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="registered.php">
      <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBpZD0iVHdvdG9uZSIgaGVpZ2h0PSI1MTJweCIgdmlld0JveD0iMCAwIDY0IDY0IiB3aWR0aD0iNTEycHgiPjxnIGlkPSJTdHJva2VfY29weV8zIiBkYXRhLW5hbWU9IlN0cm9rZSBjb3B5IDMiPjxwYXRoIGQ9Im0zMiA5di0yaC0ydjZoNHYtMmEyIDIgMCAwIDEgLTItMnoiIGZpbGw9IiNjZmYwOWUiLz48cGF0aCBkPSJtMjAgNDB2LTNoLTZ2MjRoMzZ2LTVoLTE0YTE2IDE2IDAgMCAxIC0xNi0xNnoiIGZpbGw9IiNjZmYwOWUiLz48cGF0aCBkPSJtNTAgNDdoOXYxNGgtOXoiIGZpbGw9IiNhOGRiYTgiLz48cGF0aCBkPSJtNSA0N2g5djE0aC05eiIgZmlsbD0iI2E4ZGJhOCIvPjxwYXRoIGQ9Im0xOSAzM2gyNnY0aC0yNnoiIGZpbGw9IiM3OWJkOWEiLz48cGF0aCBkPSJtMjUgMjJ2LTFoLTN2MTJoMjB2LTNoLTlhOCA4IDAgMCAxIC04LTh6IiBmaWxsPSIjY2ZmMDllIi8+PGcgZmlsbD0iIzc5YmQ5YSI+PHBhdGggZD0ibTMyIDExYTggOCAwIDAgMSA4IDh2MmEwIDAgMCAwIDEgMCAwaC0xNmEwIDAgMCAwIDEgMCAwdi0yYTggOCAwIDAgMSA4LTh6Ii8+PHBhdGggZD0ibTI2IDI1aDR2NGgtNHoiLz48cGF0aCBkPSJtMzQgMjVoNHY0aC00eiIvPjxwYXRoIGQ9Im0xOCA0MWg0djE2aC00eiIvPjxwYXRoIGQ9Im0yNiA0MWg0djE2aC00eiIvPjxwYXRoIGQ9Im0zNCA0MWg0djE2aC00eiIvPjxwYXRoIGQ9Im00MiA0MWg0djE2aC00eiIvPjxwYXRoIGQ9Im01MCA0M2gxMXY0aC0xMXoiLz48cGF0aCBkPSJtMyA0M2gxMXY0aC0xMXoiLz48L2c+PC9nPjxnIGlkPSJTdHJva2VfQ2xvc2VfY29weSIgZmlsbD0iIzNiODY4NiIgZGF0YS1uYW1lPSJTdHJva2UgQ2xvc2UgY29weSI+PHBhdGggZD0ibTMwIDI0aC00YTEgMSAwIDAgMCAtMSAxdjRhMSAxIDAgMCAwIDEgMWg0YTEgMSAwIDAgMCAxLTF2LTRhMSAxIDAgMCAwIC0xLTF6bS0xIDRoLTJ2LTJoMnoiLz48cGF0aCBkPSJtMzggMjRoLTRhMSAxIDAgMCAwIC0xIDF2NGExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtNGExIDEgMCAwIDAgLTEtMXptLTEgNGgtMnYtMmgyeiIvPjxwYXRoIGQ9Im0yMiA0MGgtNGExIDEgMCAwIDAgLTEgMXYxNmExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtMTZhMSAxIDAgMCAwIC0xLTF6bS0xIDE2aC0ydi0xNGgyeiIvPjxwYXRoIGQ9Im0zMCA0MGgtNGExIDEgMCAwIDAgLTEgMXYxNmExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtMTZhMSAxIDAgMCAwIC0xLTF6bS0xIDE2aC0ydi0xNGgyeiIvPjxwYXRoIGQ9Im0zOCA0MGgtNGExIDEgMCAwIDAgLTEgMXYxNmExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtMTZhMSAxIDAgMCAwIC0xLTF6bS0xIDE2aC0ydi0xNGgyeiIvPjxwYXRoIGQ9Im00NiA0MGgtNGExIDEgMCAwIDAgLTEgMXYxNmExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtMTZhMSAxIDAgMCAwIC0xLTF6bS0xIDE2aC0ydi0xNGgyeiIvPjxwYXRoIGQ9Im01NSA1OGExIDEgMCAwIDAgMS0xdi02YTEgMSAwIDAgMCAtMiAwdjZhMSAxIDAgMCAwIDEgMXoiLz48cGF0aCBkPSJtOSA1MGExIDEgMCAwIDAgLTEgMXY2YTEgMSAwIDAgMCAyIDB2LTZhMSAxIDAgMCAwIC0xLTF6Ii8+PHBhdGggZD0ibTYxIDQyaC0xMHYtNWExIDEgMCAwIDAgLTEtMWgtNHYtM2ExIDEgMCAwIDAgLTEtMWgtMnYtMTBoMWExIDEgMCAwIDAgMC0yaC0zdi0xYTkgOSAwIDAgMCAtNi04LjQ3di0zLjUzYTEgMSAwIDAgMCAtMS0xaC0xdi0zYTEgMSAwIDAgMCAtMiAwdjNoLTFhMSAxIDAgMCAwIC0xIDF2My41M2E5IDkgMCAwIDAgLTYgOC40N3YxaC0zYTEgMSAwIDAgMCAwIDJoMXYxMGgtMmExIDEgMCAwIDAgLTEgMXYzaC00YTEgMSAwIDAgMCAtMSAxdjVoLTEwYTEgMSAwIDAgMCAtMSAxdjRhMSAxIDAgMCAwIDEgMWgxdjEzYTEgMSAwIDAgMCAxIDFoNTRhMSAxIDAgMCAwIDEtMXYtMTNoMWExIDEgMCAwIDAgMS0xdi00YTEgMSAwIDAgMCAtMS0xem0tMzAtMzRoMnYyLjA2YTguMzYgOC4zNiAwIDAgMCAtMiAwem0tNiAxMWE3IDcgMCAwIDEgMTQgMHYxaC0xNHptLTIgM2gxOHYxMGgtMTh6bS0zIDEyaDI0djJoLTI0em0tMTYgMTBoOXYyaC05em0yIDRoN3YxMmgtN3ptOS0xMGgzNHYyMmgtMzR6bTQzIDIyaC03di0xMmg3em0yLTE0aC05di0yaDl6Ii8+PC9nPjwvc3ZnPgo=" height="50" width="50"/>
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link customfont" href="registered.php"><b>Home</b> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link customfont" href="#"><b>Link</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link customfont" href="wallet.php"><b>Wallet</b></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle customfont" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <b>
          Profile
        </b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="kyc.php">KYC</a>
          <a class="dropdown-item" href="myBookings.php">My Bookings</a>
          <a class="dropdown-item" href="sample.php">Log Out</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Help?</a>
        </div>
      </li>
    </ul>
  </div>
    </nav>
    </section>
    <form method="POST">
<center>
<div id="formContent">
        <br><br>
        <h2><b> Book Tickets </b></h4>
        <br><br>
        <!-- Login Form -->
        <select id="busNo" size="1" onchange="makeSubmenu(this.value)" class="select" name="busNo" required onclick="filterBus()" required="">
                      <option value="" disabled="" selected="">Which Bus?</option>
                      <option value="NGOsColony"> 1V - NGOs Colony Bus Stop </option>
                      <option value="ySecunderabad"> 1Y - Secunderabad Junction </option>
                      <option value="KotiBusStop"> 1K/25 - Koti Bus Stop </option>
                      <option value="Ziaguda"> 1J - Ziaguda </option>
                      <option value="Kbs"> 1P/25I - Koti Bus Stop </option>
                      <option value="Falaknuma"> 1F/38S - Falaknuma </option>
                      <option value="Secunderabad"> 2 - Secunderabad Junction </option>
                      <option value="SuperBazar"> Super Bazar </option>
                      <option value="NalgondaXRoads"> Nalgonda X Roads </option>
                      <option value="Malakpet"> Malakpet </option>
                      <option value="Chaderghat"> Chaderghat </option>
                      <option value="Womenscollege"> Womens college </option>
                      <option value="Koti"> Koti Bus Stop </option>
                      <option value="RamKoti"> Ram Koti </option>
                      <option value="Badichowdi"> Badichowdi </option>
                      <option value="MadapatiHanumanthaSchool"> Madapati Hanumantha School </option>
                      <option value="Ymca"> YMCA(Koti) Bus Stop </option>
                      <option value="Narayanguda"> Narayanguda </option>
                      <option value="Chikkadpally"> Chikkadpally </option>
                      <option value="RTC"> RTC Cross Rd </option>
                      <option value="GolcondaXRoads"> Golconda X Roads </option>
                      <option value="SapthagiriTheater"> Sapthagiri Theater </option>
                      <option value="RajaDelux"> Raja Delux </option>
                      <option value="MusheerabadBusStop"> Musheerabad Bus Stop </option>
                      <option value="JailGarden"> Jail Garden </option>
                      <option value="GandhiHospital"> Gandhi Hospital </option>
                      <option value="PadmaraoNagar"> Padmarao Nagar </option>
                      <option value="Bhoiguda"> Bhoiguda </option>
                      </select>
                      <br>
                      <select id="from" size="1" class="select" name="from" required="">
                      <option value="" disabled="" selected="">From</option>
                      </select>
                      <br>
                      <select id="to" size="1" class="select" name="to" required="">
                      <option value="" disabled="" selected="">To</option>
                      </select>
                      <br>
          <input type="date" id="doj" name="doj" min= <?php echo date('Y-m-d'); ?> placeholder="DD/MM/YYYY" required="">
          <br>
          <br>
          <input type="submit" method="POST" name="submit" value="Regsiter">

      </div>
</center>
  </form>
  <?php
  if(isset($_POST["submit"]))
  {
    $user=$_SESSION['user'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    
    if($from == $to)
    {
        echo "<script>alert('from and destination cannot be same!!!')</script>";
    }
    else
    {
    $sql="INSERT INTO `ticket_bookings`(`from`, `to`, `doj`)
          VALUES ('$from','$to','$doj')";
    $result=$mysqli->query($sql);
    echo $sql;
    if($result)
    echo "<script>alert('ticket booked !!')</script>";
    }
  }
?>
    <script type="text/javascript">
      var placesByBus = {
        NGOsColony: ["Select Place","NGOs Colony Bus Stop","Panama Godown","LB Nagar Bus Stop","	Kothapet Bus Stop","Chaitanyapuri","Dilsukhnagar Bus station","Mosarambagh","Super Bazar","Nalgonda X Roads Bus Stop","Malakpet","Chaderghat Bus Stop","Womens college Bus Stop","Koti Bus Stop","Ram Koti","Badichowdi","Madapati Hanumantha School","YMCA(Koti) Bus Stop","Narayanguda","Chikkadpally","RTC Cross Rd","Golconda X Roads","Sapthagiri Theater","Raja Delux","	Musheerabad Bus Stop"
        ,"Jail Garden","	Gandhi Hospital","Padmarao Nagar","Bhoiguda","Secunderabad Junction"],
        ySecunderabad: ["Select Place","Secunderabad Junction","Bhoiguda","Padmarao Nagar","Gandhi Hospital","Jail Garden","Musheerabad Bus Stop","Raja Delux","Sapthagiri Theater","Golconda X Roads","RTC Cross Rd","Chikkadpally","Narayanguda","YMCA(Koti) Bus Stop","Madapati Hanumantha School","Badichowdi","Ram Koti","Koti Bus Stop","Putlibowli","CBS Bus Stop","Gowliguda","Afzalgunj Bus Stop","Osmania Hospital(OGH)",
        "Madina Market","City College","East Bahadurpura","Zoo Park"],
        KotiBusStop: ["Select Place","Koti Bus Stop","Ram Koti","Badichowdi","Madapati Hanumantha School","YMCA(Koti) Bus Stop","Narayanguda","Chikkadpally","RTC Cross Rd","Golconda X Roads","Sapthagiri Theater","Raja Delux","Musheerabad Bus Stop","Jail Garden","Gandhi Hospital","Padmarao Nagar","Bhoiguda","Secunderabad Junction"],
        Ziaguda: ["Select Place","Ziaguda","Osmania Hospital(OGH)","Afzalgunj Bus Stop","Gowliguda","CBS Bus Stop","Putlibowli","Koti Bus Stop","Ram Koti","Badichowdi","Kachiguda Bus Stop","Madapati Hanumantha School","YMCA(Koti) Bus Stop","Narayanguda","Chikkadpally","RTC Cross Rd","Golconda X Roads","Sapthagiri Theater","Raja Delux","Musheerabad Bus Stop","Jail Garden","Gandhi Hospital","Padmarao Nagar","Bhoiguda","Secunderabad Junction"],
        KotiBusStop: ["Select Place","Koti Bus Stop","Ram Koti","Badichowdi","Madapati Hanumantha School","YMCA(Koti) Bus Stop","Narayanguda","Chikkadpally","RTC Cross Rd","Golconda X Roads","Sapthagiri Theater","Raja Delux","Musheerabad Bus Stop","Jail Garden","Gandhi Hospital","Padmarao Nagar","Bhoiguda","Secunderabad Junction","patny","JBS Bus Stop","Kharkhana Bus Stop","Hanuman Temple(Tirumulgherry)","Tirumalgherry","Lal Bazar Bus Stop","Lothkunta Bus Stop",
        "Alwal Bus Station","Alwal Police Station","Temple Alwal","Old Alwal(IG Statue) Bus Stop"],
        Kbs: ["Select Place","Koti Bus Stop","Ram Koti","Badichowdi","Madapati Hanumantha School","YMCA(Koti) Bus Stop","Narayanguda","Chikkadpally","RTC Cross Rd","Golconda X Roads","Sapthagiri Theater","Raja Delux","Musheerabad Bus Stop","Jail Garden","Gandhi Hospital","Padmarao Nagar","Bhoiguda","Secunderabad Junction","Clock Tower","patny","JBS Bus Stop","Kharkhana Bus Stop","Tirumalgherry","Hanuman Temple(Tirumulgherry)","Lal Bazar Bus Stop",
        "Lothkunta Bus Stop","Alwal Bus Station","Alwal Police Station","Temple Alwal","Old Alwal(IG Statue) Bus Stop"],
        Falaknuma: ["Select Place",],
        Secunderabad: ["Select Place",],
        SuperBazar: ["Select Place",],
        NalgondaXRoads: ["Select Place",],
        Malakpet: ["Select Place",],
        Chaderghat: ["Select Place",],
        Womenscollege: ["Select Place",],
        Koti: ["Select Place",],
        RamKoti: ["Select Place",],
        Badichowdi: ["Select Place",],
        MadapatiHanumanthaSchool: [],
        Ymca: [],
        Narayanguda: [],
        Chikkadpally: [],
        Rtc: [],
        GolcondaXRoads: [],
        SapthagiriTheater: [],
        RajaDelux: [],
        MusheerabadBusStop: [],
        JailGarden: [],
        GandhiHospital: [],
        PadmaraoNagar: [],
        Bhoiguda: []
      }
      function makeSubmenu(value)
      {
        if(value.length==0)
        {
          document.getElementById("from").innerHTML = "<option></option>";
          document.getElementById("to").innerHTML = "<option></option>";
        }
        else
        {
          var busOptions = "";
          for(busNum in placesByBus[value])
          {
            busOptions+="<option>"+placesByBus[value][busNum]+"</option>";
          }
          document.getElementById("from").innerHTML = busOptions;
          document.getElementById("to").innerHTML = busOptions;
        }
      }
      function displaySelected()
      {
         var busNo = document.getElementById("busNo").value;
         var from = document.getElementById("from").value;
         alert(busNo+"\n"+from);
      }
      function resetSelection()
      {
        document.getElementById("busNo").selectedIndex = 0;
        document.getElementById("from").selectedIndex = 0;
      }
    </script>
</body>
</html>
