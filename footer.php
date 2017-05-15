 <!-- START Footer -->
        <footer>
            <p>
                <small>
                    <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a>
                    <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
                    <a href="disclaimer.html">Disclaimer</a>
                </small>
            </p>
        </footer>
        <!-- END Footer -->

        <script>
            /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </div>

    <!--WP Foooter Function-->
    <?php wp_footer();?>

</body>

</html>