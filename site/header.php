<!DOCTYPE html>
<html lang="fr">
    <?php
        function pageTitle() {
            $fileName = basename($_SERVER['PHP_SELF']);
            $clearName = str_replace('.php', '', $fileName);
            $clearName = str_replace(['-', '_'], ' ', $clearName);
            if($clearName == 'cv'){
                $finalName = 'CV';
            }elseif($clearName == 'index'){
                $finalName = 'Accueil';
            }else{
                $finalName = ucfirst($clearName);
            }
            return "LUBINEAU Finn - " . $finalName;
        }
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo pageTitle()?></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav>
            <div class="logo">
                <h1>FinnesHerbes<span>.fr</span></h1>
            </div>
            <div class="links">
                <a href="index.php">Accueil</a>
                <a href="mmi25d08.mmi-troyes.fr">Travaux</a>
                <a href="cv.php">CV</a>
                <a href="cv.php">Portfolio</a>
                <a href="cv.php">Contact</a>
            </div>
        </nav>
    </header>
    <script>
        function setActiveLink() {
            const currentPath = window.location.pathname.split("/").pop();
            const navLinks = document.querySelectorAll('nav ul li a');

            navLinks.forEach(link => {
                const linkPath = link.getAttribute('href');
                link.classList.remove('active')

                if ((currentPath === "" || currentPath === "index.php") && linkPath === "index.php") {
                    link.classList.add('active');
                }
                else if (linkPath === currentPath && linkPath !== "") {
                    link.classList.add('active');
                }
            })
        }

    window.onload = setActiveLink
    </script>

</html>
