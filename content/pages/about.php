<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
        theme: {
            extend: {
            }
        }
        }
    </script>
    <title>Document</title>
</head>
<body class="mx-4">

    <section class="h-40">
        <div class="relative">
            <h1 class="text1 opacity-50 translate-y-full relative my-4 text-black uppercase font-bold text-4xl tracking-[0.2em] leading-[1.2em] font-sans z-10">Notre <br> histoire</h1>
        </div>
        <img src="/yolo/content/img/about1.jpg" id="about1" class="absolute top-4 right-4 bg-no-repeat bg-center h-40 w-44 translate-y-full">
    </section>

    <section class="my-4 px-0">
        <p class="text1 opacity-50 translate-y-full text-lg font-bold leading-tight">
            Paragraphe. Cliquez ici pour le modifier et ajouter votre propre texte. 
            C'est l'espace idéal pour raconter une histoire et vous présenter à vos visiteurs.
        </p>
        <br>
        <div class="leading-5 text-sm">
            <p class="element opacity-50 translate-y-full">
            Paragraphe. Vous pouvez le modifier et ajouter votre texte. Double-cliquez ici ou 
            cliquez sur « Modifier le texte » pour ajouter votre contenu et personnaliser la police. 
            Utilisez cet espace pour raconter une histoire et vous présenter à vos visiteurs. Vous pouvez 
            le faire glisser-déposer où vous le souhaitez sur la page.
            </p>
            <br>
            <p class="element opacity-50 translate-y-full">
                C'est l'espace idéal pour rédiger un long texte. Utilisez-le pour donner plus d'informations sur 
                votre entreprise. Vous pouvez présenter votre équipe et les services que vous proposez. Vous pouvez 
                également expliquer à vos visiteurs vos motivations, votre histoire, vos objectifs, et mettre en avant 
                vos avantages par rapport à vos concurrents. Démarquez-vous pour capter l'attention de vos visiteurs.
            </p>
        </div>
    </section>

    <section>
        <h2 class="element translate-y-full relative my-4 text-black uppercase font-bold text-3xl tracking-[0.2em] leading-none font-sans z-10">Notre <br> équipe</h2>
        <div class="relative my-4">
            <img src="/yolo/content/img/about2.png" class="h-36 w-full object-cover my-4" alt="">
            <h3 class="my-4 text-2xl font-semibold">Daniel Garrot</h3>
            <p class="leading-5 text-sm">Paragraphe. Cliquez ici pour le modifier. Utilisez-le pour vous présenter à vos visiteurs.</p>
        </div>
        <div class="relative my-4">
            <img src="/yolo/content/img/about3.png" class="h-36 w-full object-cover my-4" alt="">
            <h3 class="my-4 text-2xl font-semibold">Julie Ambre</h3>
            <p class="leading-5 text-sm">Paragraphe. Cliquez ici pour le modifier. Utilisez-le pour vous présenter à vos visiteurs.</p>
        </div>
        <div class="relative my-4">
            <img src="/yolo/content/img/about4.png" class="h-36 w-full object-cover my-4" alt="">
            <h3 class="my-4 text-2xl font-semibold">Marc Ravin</h3>
            <p class="leading-5 text-sm">Paragraphe. Cliquez ici pour le modifier. Utilisez-le pour vous présenter à vos visiteurs.</p>
        </div>
    </section>

    <script>
        const about1 = document.getElementById('about1');
        const texts = document.querySelectorAll('.text1');
        const elements = document.querySelectorAll('.element');
    
        // Add click event listener to login heading
        window.addEventListener('load', (event) => {
            about1.classList.add('translate-y-0', 'duration-1000');
            setTimeout (() => {
                texts.forEach(text => {
                text.classList.add('translate-y-0', 'duration-1000', 'opacity-100');
                });
            }, 500)
        });

        window.addEventListener('scroll', (event) => {
            elements.forEach(element => {
                const rect = element.getBoundingClientRect();
                const isVisible = rect.top < window.innerHeight && rect.bottom >= -10;
                if (isVisible) {
                    element.classList.add('translate-y-0', 'duration-1000', 'opacity-100');
                }
            });
        });

        
    </script> 

</body>
</html>


<!-- SELECT 
    film.*,  -- select all columns from the "film" table
    GROUP_CONCAT(DISTINCT genre.nom_genre SEPARATOR ", ") AS genres,  -- concatenate all distinct genre names and create a string with ", " as a separator
    GROUP_CONCAT(DISTINCT realisateur.prenom_realisateur, " ", realisateur.nom_realisateur SEPARATOR ", ") AS realisateurs,  -- concatenate all distinct director names and create a string with ", " as a separator
    GROUP_CONCAT(DISTINCT acteur.prenom_acteur, " ", acteur.nom_acteur SEPARATOR ", ") AS acteurs,  -- concatenate all distinct actor names and create a string with ", " as a separator
    (
        -- select a single image associated with the film using a random order
        SELECT image.nom_image FROM image_film
        LEFT JOIN image ON image.id_image = image_film.id_image
        WHERE image_film.id_film = film.id_film
        ORDER BY RAND() LIMIT 1
    ) AS nom_image,  -- give the selected image an alias of "nom_image"
    (
        -- select a single movie poster associated with the film using a random order
        SELECT affiche.nom_affiche FROM affiche_film
        LEFT JOIN affiche ON affiche.id_affiche = affiche_film.id_affiche
        WHERE affiche_film.id_film = film.id_film
        ORDER BY RAND() LIMIT 1
    ) AS nom_affiche,  -- give the selected movie poster an alias of "nom_affiche"
FROM 
    film
    LEFT JOIN genre_film ON genre_film.id_film = film.id_film
    LEFT JOIN genre ON genre.id_genre = genre_film.id_genre
    LEFT JOIN realisateur_film ON realisateur_film.id_film = film.id_film
    LEFT JOIN realisateur ON realisateur.id_realisateur = realisateur_film.id_realisateur
    LEFT JOIN acteur_film ON acteur_film.id_film = film.id_film
    LEFT JOIN acteur ON acteur.id_acteur = acteur_film.id_acteur
WHERE 
    film.id_film = :id  -- filter the results to only include the film with the given ID
GROUP BY 
    film.id_film;  -- group the results by the film's ID to ensure that each film appears only once in the results set -->


