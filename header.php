<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4cf6f4ce3.js" crossorigin="anonymous"></script>
    <title>Header</title>
</head>

<body>
    <header>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0);" class="icon" onclick="toggleNav()">
                <i class="fa fa-bars"></i>
            </a>
            <a href="front-page.php"class="active">Home</a>
            <a href="page.php" alt=case-studies.php>Web Design</a>
            <a href="page.php" alt=photography.php>Photography</a>
            <a href="singles.php" alt=resume.php>Resume</a>
        </div>
    
        <!-- open sidepanel -->
        <div class="topnav" id="myTopnav">
            <a href="javascript:void(0);" class="icon" onclick="toggleNav()">
                <i class="fa fa-bars"></i>
            </a>
            <a href="front-page.php"class="active">Home</a>
            <a href="page.php" alt=case-studies.php>Web Design</a>
            <a href="page.php" alt=photography.php>Photography</a>
            <a href="singles.php" alt=resume.php>Resume</a>
        </div>
    
    <!-- side panel js start -->
        <script>
            function openNav() {
                document.getElementById("mySidebar").style.width = "250px";
            }
    
            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
            }
    
            function toggleNav() {
                var sidepanel = document.getElementById("mySidepanel");
                var topnav = document.getElementById("myTopnav");
    
                if (sidepanel.style.width === "250px") {
                    sidepanel.style.width = "0";
                    topnav.style.display = "block";
                } else {
                    sidepanel.style.width = "250px";
                    topnav.style.display = "none";
                }
                
            }
        </script>
    </header>
    