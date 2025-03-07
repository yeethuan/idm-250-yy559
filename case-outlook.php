
<?php get_header(); ?>


    <div class="hero">
        <h1>Outlook Microinteraction Analysis</h1>
        <h5>Redesigning Microsoft Outlook Emails using <br> HTML5, CSS3, JavaScript</h5>
        <a href="https://yy559.netlify.app/idm241/final/build" target="_blank">
            <img src="media/projects/outlook/hero-outlook.png" class="hero-image" alt="hero-image">
        </a>
    </div>
    
    <div class="button-container">
        <a href="https://www.microsoft.com/en-us/microsoft-365/outlook/log-in" class="styled-link" target="blank">Head to Outlook</a>
    </div>

    <div class="casestudybackground">
        <!-- OVERVIEW -->
        <div class="text">
            <br>
            <h2>Overview</h2>
            <p>This redesign focuses on creating a cleaner, more intuitive, and user-friendly experience. The redesign addressed key pain points such as <strong>inbox clutter</strong>, difficulty prioritizing important emails, and hidden features. Through competitor analysis, user interviews, and journey mapping, I identified opportunities to improve navigation, visibility, and usability. The final design featured prominent email prioritization using color-coded highlights, an intuitive starring system, and thoughtful microinteractions to provide instant user feedback. The result was a visually clear, organized, and interactive experience, enabling users to manage emails more efficiently while maintaining a sense of control.</p>
        </div>
    
        <!-- CONTEXT AND CHALLENGE -->
        <div class="text">
            <h2>Context and Challenge</h2>
            <p>Microsoft Outlook is a widely used personal information manager designed to streamline email communication while offering robust features for scheduling, calendaring, task management, contact management, note-taking, and journal logging.</p>
            <p>However, users often face challenges such as cluttered inboxes, difficulty prioritizing important emails, and limited options for pinning messages. The interface can feel overwhelming, with hidden features and slow search functionality. Calendar issues, syncing delays, and inconsistencies across devices further hinder the user experience.</p>
            <p>This 10-week solo project aimed to address these pain points by redesigning the Outlook email interface. By incorporating thoughtful microinteractions, the goal was to create a cleaner, more intuitive, and user-friendly experience—improving navigation, prioritization, and overall usability through research, design, and development.</p>
        </div>

        <!-- PROCESS AND INSIGHT -->
        <div class="text">
            <h2>Process and Insight</h2>
            
            <h3>Competitor Analysis</h3>
            <p>I began my research by analyzing Outlook's biggest competitor, Google’s Gmail, known for its clean, user-friendly design in contrast to Outlook’s rich and complex interface. I particularly focused on the minimalist layout and intuitive organization. Additionally, I explored messaging and food ordering apps for inspiration on organizing dense information into digestible chunks, aiming to improve how Outlook presents its full features while maintaining usability.</p>
            <img src="media/google-interface.webp" alt="journey-mapping">
            <br>

            <h3>Research- Interviews, User Personas + Journey Mapping</h3>
            <p>I conducted several rounds of interviewing to understand collect a variety of perspectives about Email interfaces. Using the data and insights, I created a User Persona and Journey Map to inform human centered design choices, identify paint points, and dicover opportunities to improve user flow.</p>
            <img src="media/journey-mapping.webp" alt="journey-mapping">
        </div>
        

        <!-- THE SOLUTION -->
        <div class="text">
            <h2>The Solution</h2>
            <p>Key testing insights revealed that features should be prominently displayed, not hidden. Effective spacing was essential to organize information and reduce visual clutter. Despite multiple categorization and importance indicators, important emails were still getting lost in the inbox. To address this, I utilized color to highlight entire emails marked as important and incorporated a starring feature. Microinteractions, like subtle animations when starring an email, provided immediate feedback, making the experience more intuitive and engaging.</p>
            <div class="pin">
                <img src="media/final-pin/pin08.jpg" alt="image1">
                <img src="media/final-pin/pin12.webp" alt="image2">
            </div>
        </div>

        <!-- THE RESULTS -->
        <div class="text">
            <h2>The Results</h2>
            <p>The redesigned Outlook email interface addressed key pain points, enhancing visibility, prioritization, and user interaction.</p> 
            <p>By leveraging microinteractions, users received instant feedback through animations, making starring and highlighting important emails more intuitive. Spacing adjustments reduced visual clutter, while the use of color to emphasize important emails improved email prioritization. Research-driven design choices, inspired by competitor analysis and journey mapping, informed a cleaner, more user-friendly experience. The final build successfully streamlined navigation, reduced inbox overwhelm, and improved usability, offering a more efficient and engaging way for users to manage their emails, prioritize tasks, and maintain control over their communication flow.</p>
        </div>
    </div>

    <div class="button-container">
        <a href="https://yy559.netlify.app/idm241/alpha/build" class="styled-link" target="blank">Alpha Build</a>
        <a href="https://yy559.netlify.app/idm241/beta/build" class="styled-link" target="blank">Beta Build</a>
        <a href="https://yy559.netlify.app/idm241/final/build" class="styled-link" target="blank">Final Build</a>
    </div>

<?php get_footer(); ?>