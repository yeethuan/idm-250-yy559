//side panel js start
console.log('hey it works'); 


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
