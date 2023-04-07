<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
<body class="[&>*]:px-10 [&>*]:lg:px-[25%]">
<div class="h-28 w-full border-2 bg-gray-200 p-4"></div>
<div class="py-6 "><a href="shop.html"><i class="fa fa-chevron-left "></i> Retour à la boutique</div></a>
<div class="space-y-8">
    <img class="w-full " src="https://static.wixstatic.com/media/1e47b2_51bde379b91e450e8ea7dfa8da03e9aa.jpg/v1/fill/w_300,h_450,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1e47b2_51bde379b91e450e8ea7dfa8da03e9aa.jpg">
    <div>
        <p class="text-gray-500 mb-4">SKU : 0001</p>
        <h2 class="font-bold text-2xl"> Nom de l'article </h2>
        <p class="mb-4">200,00€</p>
        <form action="" class="flex flex-wrap mb-4">
            <label for="" class="w-full text-sm mb-2 font-light">Quantité</label>
            <input type="number" class="border w-20 mb-4 p-2 " placeholder="1">
            <button type="submit" class="w-full bg-green-400 text-white py-2 mb-4">Ajouter au panier</button>
            <a href="" class="w-full bg-black text-white py-2 text-center">Commander et payer</a>
        </form>
        <p class="leading-normal mb-4 font-light">Description de l'article. C'est l'espace idéal pour expliquer les avantages de cet article et attirer l'attention de vos clients. Rédigez votre propre description de manière claire et concise en utilisant des mots-clés uniques.</p>
        <div class="[&>*]:w-full divide-y" id="collapse">
            <button class="py-4 text-start text-lg relative" onclick="collapseOne()">Infos de l'article <i class="fa fa-plus font-light absolute right-0" ></i></button>
            <div id="one" class="font-light mb-4 hidden">Détails de l'article. C'est l'espace idéal pour présenter les caractéristiques de votre article : taille, matière, instructions de lavage, etc. Vous pouvez également expliquer ce qui rend votre article spécial et comment vos clients peuvent en bénéficier. Les clients aiment savoir ce qu'ils achètent, alors n'hésitez pas à leur donner un maximum de détails pour qu'ils puissent acheter cet article en toute confiance.</div>
            <button class="py-4 text-start text-lg relative" onclick="collapseTwo()">Politique d'échange et de remboursement<i class="fa fa-plus font-light absolute right-0 top-"></i></button>
            <div id="two" class="font-light mb-4 hidden">Politique d'échange et de remboursement. Informez vos visiteurs des conditions d'échange et de remboursement de votre boutique en ligne. Proposez une politique claire afin d'établir une relation de confiance avec vos clients et leur permettre d'acheter sereinement sur votre site.</div>
        </div>
    </div>
</div>

<script src="../../assets/js/script.js"></script>
</body>
</html>