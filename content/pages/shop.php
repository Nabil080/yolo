<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <title>Boutique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
        theme: {
            extend: {
            // fontFamily: {
            //     'roboto' : []
            // }
            }
        }
        }
    </script>
</head>
<body class="[&>*]:lg:px-[25%]">
<div class="h-28 w-full border-2 bg-gray-200 p-4"></div>
<div class="block lg:flex flex-wrap">
    <div class="block lg:flex">
        <div id="title" class="my-4 group w-[30%] z-20">
            <h1 class="bot-top lg:hidden uppercase font-extrabold text-[48px] opacity-0 tracking-[0.2em] leading-none pl-4 translate-y-60 ease-in-out duration-[2000ms]" >Nouveaux skate boards</h1>
            <h1 class="left-right hidden lg:block translate-y-10 opacity-0 uppercase font-extrabold text-[62px] tracking-[0.2em] leading-none pl-4 -translate-x-20 ease-in-out duration-[2000ms]" >Nouveaux skate boards</h1>
        </div>


        <div id="shop-grid" class="grid lg:grid-cols-2 w-full">

            <div class="flex flex-col m-4 justify-center space-y-3 relative group">
            <div class="w-full relative">
                <div class="absolute bottom-0 text-center w-full bg-white bg-opacity-80 font-light py-3 z-30 ease-in-out duration-300 opacity-0 translate-y-10 group-hover:translate-y-0 group-hover:opacity-100 ">Aperçu rapide</div>
                <a href="produit.html"><img class="w-full absolute top-0 opacity-0 group-hover:opacity-100" src="https://static.wixstatic.com/media/1e47b2_92bb35b3f6854532b65a15c9f5799edb.jpg/v1/fill/w_330,h_495,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_92bb35b3f6854532b65a15c9f5799edb.jpg" alt=""></a>
                <img class="w-full" src="https://static.wixstatic.com/media/1e47b2_51bde379b91e450e8ea7dfa8da03e9aa.jpg/v1/fill/w_300,h_450,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_51bde379b91e450e8ea7dfa8da03e9aa.jpg">
            </div>

            <div class="">
                    <h2 class="font-bold">Nom de l'article</h2>
                    <p>200,00€</p>
                </div>
                <form action="">
                    <input type="text" class="hidden">
                    <button class="w-full py-2.5 bg-black text-white">Ajouter au panier</button>
                </form>
            </div>

            <div class="flex flex-col m-4 justify-center space-y-3 relative group">
            <div class="w-full relative">
                <div class="absolute bottom-0 text-center w-full bg-white bg-opacity-80 font-light py-3 z-30 ease-in-out duration-300 opacity-0 translate-y-10 group-hover:translate-y-0 group-hover:opacity-100 ">Aperçu rapide</div>
                <a href="produit.html"><img class="w-full absolute top-0 opacity-0 group-hover:opacity-100" src="https://static.wixstatic.com/media/1e47b2_92bb35b3f6854532b65a15c9f5799edb.jpg/v1/fill/w_330,h_495,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_92bb35b3f6854532b65a15c9f5799edb.jpg" alt=""></a>
                <img class="w-full" src="https://static.wixstatic.com/media/1e47b2_33f4ee628e1a4e678402e134d9c7fe30.jpg/v1/fill/w_300,h_450,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_33f4ee628e1a4e678402e134d9c7fe30.jpg">
            </div>

            <div class="">
                    <h2 class="font-bold">Nom de l'article</h2>
                    <p>200,00€</p>
                </div>
                <form action="">
                    <input type="text" class="hidden">
                    <button class="w-full py-2.5 bg-black text-white">Ajouter au panier</button>
                </form>
            </div>

            <div class="flex flex-col m-4 justify-center space-y-3 relative group">
            <div class="w-full relative">
                <div class="absolute bottom-0 text-center w-full bg-white bg-opacity-80 font-light py-3 z-30 ease-in-out duration-300 opacity-0 translate-y-10 group-hover:translate-y-0 group-hover:opacity-100 ">Aperçu rapide</div>

                <a href="produit.html"><img class="w-full absolute top-0 opacity-0 group-hover:opacity-100" src="https://static.wixstatic.com/media/1e47b2_92bb35b3f6854532b65a15c9f5799edb.jpg/v1/fill/w_330,h_495,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_92bb35b3f6854532b65a15c9f5799edb.jpg" alt=""></a>

                <div class="absolute py-1 px-3 bg-cyan-600 top-0 left-0 text-white text-sm">Nouveau</div>
                <img class="w-full" src="https://static.wixstatic.com/media/1e47b2_51bde379b91e450e8ea7dfa8da03e9aa.jpg/v1/fill/w_300,h_450,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_51bde379b91e450e8ea7dfa8da03e9aa.jpg">
            
            </div>
                <div class="">
                    <h2 class="font-bold">Nom de l'article</h2>
                    <p>200,00€</p>
                </div>
                <form action="">
                    <input type="text" class="hidden">
                    <button class="w-full py-2.5 bg-black text-white">Ajouter au panier</button>
                </form>
            </div>

            <div class="flex flex-col m-4 justify-center space-y-3 relative group">
            <div class="w-full relative">
                <div class="absolute bottom-0 text-center w-full bg-white bg-opacity-80 font-light py-3 z-30 ease-in-out duration-300 opacity-0 translate-y-10 group-hover:translate-y-0 group-hover:opacity-100 ">Aperçu rapide</div>
                <a href="produit.html"><img class="w-full absolute top-0 opacity-0 group-hover:opacity-100" src="https://static.wixstatic.com/media/1e47b2_92bb35b3f6854532b65a15c9f5799edb.jpg/v1/fill/w_330,h_495,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_92bb35b3f6854532b65a15c9f5799edb.jpg" alt=""></a>
                <img class="w-full" src="https://static.wixstatic.com/media/1e47b2_33f4ee628e1a4e678402e134d9c7fe30.jpg/v1/fill/w_300,h_450,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_33f4ee628e1a4e678402e134d9c7fe30.jpg">
            </div>
            
             <div class="">
                    <h2 class="font-bold">Nom de l'article</h2>
                    <p>200,00€</p>
                </div>
                <form action="">
                    <input type="text" class="hidden">
                    <button class="w-full py-2.5 bg-black text-white">Ajouter au panier</button>
                </form>
            </div>

        </div>
    </div>
    <div class="block lg:flex">
        <div id="title" class="my-4 group w-[30%] z-20">
            <h1 class="bot-top lg:hidden uppercase font-extrabold text-[48px] opacity-0 tracking-[0.2em] leading-none pl-4 translate-y-60 ease-in-out duration-[2000ms]" >Nouveaux long boards</h1>
            <h1 class="left-right hidden lg:block translate-y-10 opacity-0 uppercase font-extrabold text-[62px] tracking-[0.2em] leading-none pl-4 -translate-x-20 ease-in-out duration-[2000ms]" >Nouveaux long boards</h1>
        </div>


        <div id="shop-grid" class="grid lg:grid-cols-2 w-full">

            <div class="flex flex-col m-4 justify-center space-y-3 relative group">
            <div class="w-full relative">
                <div class="absolute bottom-0 text-center w-full bg-white bg-opacity-80 font-light py-3 z-30 ease-in-out duration-300 opacity-0 translate-y-10 group-hover:translate-y-0 group-hover:opacity-100 ">Aperçu rapide</div>
                <a href="produit.html"><img class="w-full absolute top-0 opacity-0 group-hover:opacity-100" src="https://static.wixstatic.com/media/1e47b2_59d48d80b10840af9bdb79d5127d62d6.jpg/v1/fill/w_329,h_493,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_59d48d80b10840af9bdb79d5127d62d6.jpg" alt=""></a>
                <img class="w-full" src="https://static.wixstatic.com/media/1e47b2_a463d93e572f46f48a5cea49db37fc4c.jpg/v1/fill/w_330,h_494,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_a463d93e572f46f48a5cea49db37fc4c.jpg">
            </div>
            
             <div class="">
                    <h2 class="font-bold">Nom de l'article</h2>
                    <p>200,00€</p>
                </div>
                <form action="">
                    <input type="text" class="hidden">
                    <button class="w-full py-2.5 bg-black text-white">Ajouter au panier</button>
                </form>
            </div>

            <div class="flex flex-col m-4 justify-center space-y-3 relative group">
            <div class="w-full relative">
                <div class="absolute bottom-0 text-center w-full bg-white bg-opacity-80 font-light py-3 z-30 ease-in-out duration-300 opacity-0 translate-y-10 group-hover:translate-y-0 group-hover:opacity-100 ">Aperçu rapide</div>
                <a href="produit.html"><img class="w-full absolute top-0 opacity-0 group-hover:opacity-100" src="https://static.wixstatic.com/media/1e47b2_59d48d80b10840af9bdb79d5127d62d6.jpg/v1/fill/w_329,h_493,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_59d48d80b10840af9bdb79d5127d62d6.jpg" alt=""></a>
                <img class="w-full" src="https://static.wixstatic.com/media/1e47b2_02c7a665df3243b1b23bfe0ca6f95881.jpg/v1/fill/w_330,h_494,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_02c7a665df3243b1b23bfe0ca6f95881.jpg">
            </div>
            
             <div class="">
                    <h2 class="font-bold">Nom de l'article</h2>
                    <p>200,00€</p>
                </div>
                <form action="">
                    <input type="text" class="hidden">
                    <button class="w-full py-2.5 bg-black text-white">Ajouter au panier</button>
                </form>
            </div>

            <div class="flex flex-col m-4 justify-center space-y-3 relative group">
            <div class="w-full relative">
                <div class="absolute bottom-0 text-center w-full bg-white bg-opacity-80 font-light py-3 z-30 ease-in-out duration-300 opacity-0 translate-y-10 group-hover:translate-y-0 group-hover:opacity-100 ">Aperçu rapide</div>

                <a href="produit.html"><img class="w-full absolute top-0 opacity-0 group-hover:opacity-100" src="https://static.wixstatic.com/media/1e47b2_59d48d80b10840af9bdb79d5127d62d6.jpg/v1/fill/w_329,h_493,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_59d48d80b10840af9bdb79d5127d62d6.jpg" alt=""></a>

                <div class="absolute py-1 px-3 bg-cyan-600 top-0 left-0 text-white text-sm">Nouveau</div>
                <img class="w-full" src="https://static.wixstatic.com/media/1e47b2_a463d93e572f46f48a5cea49db37fc4c.jpg/v1/fill/w_330,h_494,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_a463d93e572f46f48a5cea49db37fc4c.jpg">
            
            </div>
                <div class="">
                    <h2 class="font-bold">Nom de l'article</h2>
                    <p>200,00€</p>
                </div>
                <form action="">
                    <input type="text" class="hidden">
                    <button class="w-full py-2.5 bg-black text-white">Ajouter au panier</button>
                </form>
            </div>

            <div class="flex flex-col m-4 justify-center space-y-3 relative group">
            <div class="w-full relative">
                <div class="absolute bottom-0 text-center w-full bg-white bg-opacity-80 font-light py-3 z-30 ease-in-out duration-300 opacity-0 translate-y-10 group-hover:translate-y-0 group-hover:opacity-100 ">Aperçu rapide</div>
                <a href="produit.html"><img class="w-full absolute top-0 opacity-0 group-hover:opacity-100" src="https://static.wixstatic.com/media/1e47b2_59d48d80b10840af9bdb79d5127d62d6.jpg/v1/fill/w_329,h_493,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_59d48d80b10840af9bdb79d5127d62d6.jpg" alt=""></a>
                <img class="w-full" src="https://static.wixstatic.com/media/1e47b2_02c7a665df3243b1b23bfe0ca6f95881.jpg/v1/fill/w_330,h_494,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_02c7a665df3243b1b23bfe0ca6f95881.jpg">
            </div>
            
             <div class="">
                    <h2 class="font-bold">Nom de l'article</h2>
                    <p>200,00€</p>
                </div>
                <form action="">
                    <input type="text" class="hidden">
                    <button class="w-full py-2.5 bg-black text-white">Ajouter au panier</button>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="../../assets/js/script.js"></script>
</body>
</html>
