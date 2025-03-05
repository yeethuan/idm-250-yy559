<?php get_header(); ?>
<?php include 'functions.php'; ?>

<h1>逸 ~ Yi Huan</h1>
        <h2>Drexel University Undergraduate | UXID</h2>
        <div class="introduction">
            <p>Hello visitor! I'm a digital storyteller passionate about crafting human-centered experiences that connect and inspire.</p> 
            <p>I believe in the power of storytelling to foster empathy and understanding, especially to amplifying the voices of underrepresented communities.</p> 
        </div>
        
        <div class="projects-grid">
            <a href="case-petes.html">
                <div class="project-card">
                    <div class="project-tab">
                        <h3>App Design: Pete's Little Lunchbox</h3>
                        <h4>UX/UI/IX Design | Animation</h4>
                    </div>
                    <div class="project-image">
                        <img src="media/projects/petes-thumb.webp" alt="Pete's Project Thumbanil">
                    </div>
                </div>
            </a>
    
            <a href="case-color.html">
                <div class="project-card">
                    <div class="project-tab">
                        <h3>Website Redesign: Color a Smile</h3>
                        <h4>UX/UI Design | UX/UI Research</h4>
                    </div>
                    <div class="project-image">
                        <img src="media/projects/color-thumb.webp" alt="Color a Smile Thumbnail">
                    </div>
                </div>
            </a>
    



            <!-- fun button project----------------------- -->
            <a href="javascript:void(0);" onclick="openPopup()">
                <div class="project-card">
                    <div class="project-tab">
                        <h3>Fun Button</h3>
                        <h4>UX/UI Design</h4>
                    </div>
                    <div class="project-image">
                        <img src="media/projects/button-thumbnail.jpg" alt="DayNight">
                    </div>
                </div>
            </a>


            <div id="popupModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closePopup()">&times;</span>
                    <h3>Fun Button Project</h3>
                    <video controls>
                        <source src="media/projects/day-night-button.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

            <script>
                // Open the popup
                function openPopup() {
                document.getElementById("popupModal").style.display = "block";
                }

                // Close the popup
                function closePopup() {
                    document.getElementById("popupModal").style.display = "none";
                }

                // Close the popup when clicking outside of the modal content
                window.onclick = function(event) {
                    if (event.target == document.getElementById("popupModal")) {
                        closePopup();
                    }
                }

                // Close the popup when pressing the "Escape" key
                window.addEventListener("keydown", function(event) {
                    if (event.key === "Escape") {
                        closePopup();
                    }
                });
            </script>
        <!-- ------------------------------------------------- -->


    
            <a href="case-outlook.html">
                <div class="project-card">
                    <div class="project-tab">
                        <h3>Microinteractions Analysis: Outlook</h3>
                        <h4>UX/UI Design | Web Development</h4>
                    </div>
                    <div class="project-image">
                        <img src="media/projects/outlook/outlook-thumb.webp" alt="Outlook Thumbnail">
                    </div>
                </div>
            </a>
        </div>

<?php get_footer(); ?>
