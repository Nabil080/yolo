<!DOCTYPE html>
<html lang="en" class="w-[100vw]">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
        theme: {
            fontFamily: {
              roboto : 'Roboto',
              title : 'Lato',
            },
            extend: {
            colors: {
            }
            }
        }
        }
    </script>
    <title>Document</title>
</head>
<body class="overflow-x-hidden w-[100vw]">
<?php include('content/include/navbar.php') ?>
    <header class="relative h-[100vh] md:h-[110vh]">
        <h1 class="absolute Lato w-1/2 text-5xl md:text-8xl top-[40%] md:top-[30%] right-[50%] translate-x-[50%] translate-y-[50%] text-center font-bold uppercase md:leading-[4.5rem] md:w-1/4 text-white tracking-widest z-10"><span class="text-gray-950">Rois<br></span> de la route</h1>
        <button class="absolute Roboto md:top-[85vh] top-[70%] right-[50%] translate-x-[50%] translate-y-[50%]  text-md  border-4 text-white py-2 px-16 border-white z-10 hover:bg-white hover:text-black transition-all uppercase">Acheter</button>
        <video autoplay muted loop class="h-[242vh] hidden md:block blur-sm opacity-85 absolute top-0 object-cover z-0">
            <source src="assets/pexels-artem-podrez-4824358-3840x2160-30fps.mp4" type="video/mp4">
        </video>
        <div class="absolute top-0 left-0 w-auto object-cover h-[98vh]">
            <img src="assets/pexels-suliman-sallehi-1484771.jpg" class="object-cover h-full object-center blur-[4px] w-[100vw] opacity-95 md:hidden">
        </div>
        <a class="fixed Roboto bottom-[2vh] hidden md:block text-2xl right-[1%] p-4 text-white bg-black font-bold shadow z-50 shadow-white tracking-widest uppercase" >Discutez avec no...</a>
        <div class="fixed top-[30%] left-6 gap-4 grid-rows-3 z-50 hidden md:grid">
            <a href="#"><img src="assets/fcbk.webp" class="w-4/5" alt=""></a>
            <a href="#"><img src="assets/twitter.webp" class="w-4/5" alt=""></a>
            <a href="#"><img src="assets/insta.webp" class="w-4/5" alt=""></a>
        </div>
    </header>
    <section>
        <div class="bg-white h-auto pb-8 md:pb-24 z-10 relative">
            <div class="w-[98vw] md:w-[60vw] h-auto mx-auto relative pt-4 md:pt-16">
                <div class="bg-gray-200  w-8/12 ml-auto py-28 md:py-24 mr-12">
                    <h3 class="left-right md:tracking-[0.5rem] opacity-0 tracking-[1rem] top-10 left-10 z-30 md:-left-5 text-4xl md:top-20 absolute uppercase font-bold roboto md:w-1/4 leading-[3.5rem] -translate-x-20 ease-in-out duration-[2000ms]">
                        <span class="text-green-400">Nouvelle<br></span> Colle-<br> ction
                    </h3>
                    <a href="#" class="absolute Roboto text-xl bottom-[70%] left-10 md:bottom-[50%] md:top- md:-left-4 px-8 py-2 text-white bg-black tracking-widest uppercase hover:bg-white hover:text-black transition-all hover:border-2 hover:border-black">Tout voir</a>
                    <div class="ml-24">
                        <img src="assets/1e47b2_ab0af0b792c54ff19237dfffef6d1657 (1).webp" class="w-[100%] md:w-[70%] ml-auto rotate-90 md:rotate-0">
                    </div>
                </div>
                <div class="grid ml-12 mr-12 mt-8 grid-cols-2 md:grid-cols-4 md:mt-16 h-auto gap-8">
                <a href="#" class="hover:border-4 hover:border-black transition-all"><img src="assets/1.webp" ></a>
                <a href="#" class="hover:border-4 hover:border-black transition-all"><img src="assets/2.webp" ></a>
                <a href="#" class="hover:border-4 hover:border-black transition-all"><img src="assets/3.webp" ></a>
                <a href="#" class="hover:border-4 hover:border-black transition-all"><img src="assets/4.webp" ></a>
                </div>
            </div>
        </div>
    </section>
    <section class="md:bg-[url('assets/part2.webp')] bg-fixed bg-cover md:h-[100vh] w-[100vw] z-0 relative">
        <div class="">
            <img src="assets/part2m.webp" class="md:hidden object-contain w-[100vw]">
        </div>
        <div class="block md:absolute pb-10 px-4 md:pb-0 top-[20%] left-[50vw] md:w-[40%] bg-black z-10 md:px-24">
            <h3 class="tracking-[1rem] pt-8 -left-16 top-4 text-6xl md:absolute uppercase text-white font-bold roboto md:w-1/4 leading-[3.5rem]">
                A<br> propos
            </h3>
            <p class="text-white block py-4 md:pt-[40%] md:py-16">
                Paragraphe. Vous pouvez le modifier et ajouter votre propre texte. Double-cliquez ici ou cliquez sur « Modifier le texte » pour ajouter votre contenu et personnaliser la police. C'est l'espace idéal pour raconter une histoire et vous présenter à vos visiteurs.
            </p>
            <a href="#" class="md:absolute Roboto text-md right-12 -bottom-4 px-8 py-2 text-black bg-white tracking-widest uppercase hover:border-2 hover:border-black transition-all">Notre Histoire</a>
        </div>
    </section>
    <section>
        <div class="md:bg-[url('assets/roller2.webp')] bg-[url('assets/roller2sm.webp')] h-[15vh] bg-center md:h-[45vh] w-[100vw] bg-cover flex justify-center items-center">
            <a href="" class=" text-3xl md:text-4xl font-bold uppercase tracking-widest">Nous contacter</a>
        </div>
        
    </section>

    <script src="../../assets/js/scriptOnScroll.js"></script>
</body>
</html>