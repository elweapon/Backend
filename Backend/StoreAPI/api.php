<?php

$title = [
    "D4",
    "D6",
    "D8",
    "D10",
    "D12",
    "D20",
    "Player's handbook",
    "Dungeon Master's handbook",
    "Rulebook",
    "Character sheet"
];

$descp = [
    "A four sided dice",
    "A six sided dice",
    "An eight sided dice",
    "A ten sided dice",
    "A twelve sided dice",
    "A twenty sided dice",
    "Handbook for players",
    "Handbook for the Dungeon Master",
    "Rulebook for DnD",
    "A sheet for character creation"
];

$picture = [
    "https://cdn11.bigcommerce.com/s-70184/images/stencil/350x350/products/2926/7133/opaque-black-gold-d4-top-read__88796.1559662536.jpg?c=2",
    "https://q-workshop.com/img/p/2/0/7/3/2073-large_default.jpg",
    "https://q-workshop.com/img/p/1/9/6/3/1963-large_default.jpg",
    "https://q-workshop.com/img/p/3/1/3/9/3139-large_default.jpg",
    "https://cdn11.bigcommerce.com/s-70184/images/stencil/1280x1280/products/571/7432/d12-black-red-dice-chessex__15903.1559662891.jpg?c=2",
    "https://images2.sw-cdn.net/product/picture/710x528_27147155_8690243_1597828852.jpg",
    "https://despelvogel.com/wp-content/uploads/2019/06/MesaMundi_D20PRO_PHBSale-Blog.jpg",
    "https://prodimage.images-bn.com/pimages/9780786965625_p0_v3_s550x406.jpg",
    "https://2.bp.blogspot.com/-FILRvt0Dsdo/U-uD7mmwFsI/AAAAAAAABo0/noM1ZgAeqLcIc29kGG9-vM6kKiGVm9YtQCPcBGAYYCw/s1600/Basic%2BGame%2BCover%2B-%2BSmall.jpg",
    "https://i5.walmartimages.com/asr/17542222-161d-4b8f-b4c3-4e42fe0e69fb_1.006af0257b9f27b81f53f6baf567f288.jpeg?odnWidth=612&odnHeight=612&odnBg=ffffff"
];

$price = [2, 1, 2, 1, 2, 1, 50, 50, 60, 1];

$cat = ["dice", "dice", "dice", "dice", "dice", "dice", "book", "book", "book", "other"];

$products = [];

for ($i = 0; $i < count($title); $i++) {
    $product = ["title" => $title[$i], "descp" => $descp[$i], "price" => $price[$i], "picture" => $picture[$i], "cat" => $cat[$i]];
    array_push($products, $product);
}

$json = json_encode($products);
echo $json;
