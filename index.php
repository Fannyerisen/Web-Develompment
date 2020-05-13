<!DOCTYPE html>

<?php 
    include "show-data.php";
    include "update-data.php"
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Page</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav>
        <div class="menu-mobile">
            <a href="#" onclick="showmenu()">Menu</a>
        </div>

        <ul id="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">My Inventory</a></li>
        </ul>
    </nav>

    <section id="box-profile">
        <div class="img-profile">
            <div class="photo" style="background-image: url(assets/img/profile.jpg);"></div>
        </div>
        <div class="description">
            <h1 id="pname"><?php echo $nama; ?></h1>
            <p id="prole"><?php echo $role; ?></p>
            <a href="#input-form" class="button bg-green" onclick="editform()">Edit</a>
            <a href="#" class="button border-blue">Resume</a>
        </div>
        <div class="information">
            <div class="data">
                <p class="field">Availability </p>
                <p id="pavailable" class="text-grey"><?php echo $availability; ?></p>
            </div>
            <div class="data">
                <p class="field">age</p>
                <p id="page" class="text-grey"><?php echo $age; ?></p>
            </div>
            <div class="data">
                <p class="field">Location</p>
                <p id="plocation" class="text-grey"> <?php echo $location ?></p>
            </div>
            <div class="data" v>
                <p class="field">Years Experience</p>
                <p id="pexperience" class="text-grey"><?= $experience; ?></p>
            </div>
            <div class="data">
                <p class="field">Email</p>
                <p id="pemail" class="text-grey"><?php echo $email ?></p>
            </div>
        </div>
    </section>

    <section id="input-form">
         <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
         <div class="form">
            <label for="">Id User</label>
            <input id="inpiduser" type="text" name="id_user" value="<?php echo $id;?>">
        </div>
        <div class="form">
            <label for="">nama</label>
            <input id="inpname" type="text" name="nama">
        </div>
        <div class="form">
            <label for="">Role</label>
            <input id="inprole" type="text" name="role">
        </div>
        <div class="form">
            <label for="">Availability</label>
            <input id="inpavailability" type="text" name="Availability">
        </div>
        <div class="form">
            <label for="">Age</label>
            <input id="inpage" type="number" name="age">
        </div>
        <div class="form">
            <label for="">Location</label>
            <input id="inplocation" type="text" name="Location">
        </div>
        <div class="form">
            <label for="">Years Experience</label>
            <input id="inpyears" type="number" name="Years">
        </div>
        <div class="form">
            <label for="">Email</label>
            <input id="inpemail" type="email" name="email">
        </div>
        <div class="form">
            <input onclick="" type="submit" name="submit" value="SUBMIT" class="border-blue">
        </div>
         </form>
    </section>


    <script>
        var formenu = document.getElementById("input-form");
        formenu.style.display = "none";

        function editform() {
            if (formenu.style.display === "none") {
                formenu.style.display = "block";
            } else {
                formenu.style.display = "none";
            }

            var name = document.getElementById("pname").innerHTML;
            var role = document.getElementById("prole").innerHTML;
            var available = document.getElementById("pavailable").innerHTML;
            var age = document.getElementById("page").innerHTML;
            var location = document.getElementById("plocation").innerHTML;
            var experience = document.getElementById("pexperience").innerHTML;
            var email = document.getElementById("pemail").innerHTML;
            document.getElementById("inpname").value = name;
            document.getElementById("inprole").value = role;
            document.getElementById("inpavailability").value = available;
            document.getElementById("inpage").value = age;
            document.getElementById("inplocation").value = location;
            document.getElementById("inpyears").value = experience;
            document.getElementById("inpemail").value = email;
        }


        function showmenu() {
            var menu = document.getElementById("menu");
            var box = document.getElementById("box-profile")

            if (menu.style.display === "block") {
                menu.style.display = "none";
                box.style.display = "0px";
            } else {
                menu.style.display = "block";
                box.style.paddingTop = "30px";
            }


        }
    </script>
</body>

</html>