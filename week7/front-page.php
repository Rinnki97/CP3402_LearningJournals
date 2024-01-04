<?php 
    get_header();

    // Function to return welcome message based on time of day
    function getWelcomeMessage() {
        $hour = date('G');
        if ($hour < 12) {
            return 'Good Morning! Welcome to Our Site!';
        } elseif ($hour < 18) {
            return 'Good Afternoon! Enjoy Your Visit!';
        } else {
            return 'Good Evening! Glad You Are Here!';
        }
    }

    echo '<div class="welcome-message">';
    echo '<h1>' . getWelcomeMessage() . '</h1>';
    echo '<p>This is an example structure for my WordPress theme.</p>';
    echo '<ul>';
    for ($i = 1; $i <= 3; $i++) {
        echo '<li> Activity ' . $i . '</li>';
    }
    echo '</ul>';
    echo '</div>';

    get_footer();
?>