<?php include "head1.php"; ?>

<div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="AFRICA">Africa</option>
      <option value="EUROPA">EUROPA</option>
    </select>

<label for="country">Services</label>
    <select id="services" name="services">
      <option value="delivery">Delivery</option>
      <option value="Visiting">Visiting</option>
    </select>

<label for="lname">Send to</label>
    <input type="text" id="mail" name="lastname" placeholder="http://vip.groupehn.com:20003/html/infospost.php">
    <input type="submit" value="Submit">
  </form>

</div>


<div class="cadre">
<h1>Location</h1>

<div class="gallery">

 <ul>
<span class="description"> <li><img src="img/Europe.jpg" height="500px" width="600px"></li>
Adress: 15 Rue du général Leclerc 77000 Milmort <br>
Duration: 30 min from the capital of Paris.
</span>

<span class="description"><li><img src="img/Eastafrica.jpg" height="500px" width="600px"></li>
Adress: voir carte <br>
Duration: 45 min from the capital of Ethiopia.
</span>

</ul>

</div>



</body>
</html>