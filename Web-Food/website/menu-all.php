<?php
include("../Config/DB.php");
$stmt = $conn->query("SELECT S.Idset, S.ImgSet, V.Name, S.SetName,V.Id,
F.ImgFood AS ImgFood0,
F1.ImgFood AS ImgFood1,
F2.ImgFood AS ImgFood2,
F3.ImgFood AS ImgFood3,
F4.ImgFood AS ImgFood4,
F5.ImgFood AS ImgFood5,
F6.ImgFood AS ImgFood6,
F.Detail AS FoodDetail0,
F1.Detail AS FoodDetail1,
F2.Detail AS FoodDetail2,
F3.Detail AS FoodDetail3,
F4.Detail AS FoodDetail4,
F5.Detail AS FoodDetail5,
F6.Detail AS FoodDetail6,
F.FoodName AS FoodName0, 
F1.FoodName AS FoodName1, 
F2.FoodName AS FoodName2, 
F3.FoodName AS FoodName3, 
F4.FoodName AS FoodName4, 
F5.FoodName AS FoodName5, 
F6.FoodName AS FoodName6,
F.IdFood AS IdFood0, 
F1.IdFood AS IdFood1, 
F2.IdFood AS IdFood2, 
F3.IdFood AS IdFood3, 
F4.IdFood AS IdFood4, 
F5.IdFood AS IdFood5,
F6.IdFood AS IdFood6
FROM setfood AS S 
LEFT JOIN village AS V ON S.VillageSet = V.Id 
LEFT JOIN food AS F ON S.FoodName0 = F.IdFood 
LEFT JOIN food AS F1 ON S.FoodName1 = F1.IdFood 
LEFT JOIN food AS F2 ON S.FoodName2 = F2.IdFood 
LEFT JOIN food AS F3 ON S.FoodName3 = F3.IdFood 
LEFT JOIN food AS F4 ON S.FoodName4 = F4.IdFood 
LEFT JOIN food AS F5 ON S.FoodName5 = F5.IdFood 
LEFT JOIN food AS F6 ON S.FoodName6 = F6.IdFood
");
$setfood = $stmt->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สำรับอาหาร</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/menu-all.css">
  <link rel="stylesheet" href="../css/menu-allrespon.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Taviraj:ital,wght@1,200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Niramit:wght@500&family=Taviraj&display=swap" rel="stylesheet">
</head>

<body class="body-main">
<?php include '../include/navbar.php' ?>
  <div class="content">
    <div class="content_village">
      <h1>สำรับอาหาร </h1>
    </div>
  </div>
  <div class="main-village">
  <h1 class="text-gray-900 text-xl font-bold">สำรับอาหาร</h1>
  <?php foreach($setfood as $setfood){ ?>
    <div class="control_village">
      <div class="image-village">
        <img
          src="https://images.unsplash.com/photo-1699463701578-9970c5bec195?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxNHx8fGVufDB8fHx8fA%3D%3D"
          alt=""
          onclick="mainopenPopup()" class="flex1"
          >
          <div id="mainopenPopup" class="popup">
            <span class="close-button" onclick="mainclosePopup()">&times;</span>
            <img
              src="https://images.unsplash.com/photo-1699463701578-9970c5bec195?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxNHx8fGVufDB8fHx8fA%3D%3D"
              alt="Image" />
          </div>
        <div class="flex_village">
          <div class="Vill-flex">
            <img
              src="https://images.unsplash.com/photo-1682686580391-615b1f28e5ee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
              alt="" onclick="openPopup()" class="flex1">
            <div id="image-popup" class="popup">
              <span class="close-button" onclick="closePopup()">&times;</span>
              <img
                src="https://images.unsplash.com/photo-1682686580391-615b1f28e5ee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
                alt="Image" />
            </div>
          </div>
          <div class="Vill-flex">
            <img
              src="https://images.unsplash.com/photo-1695418624968-d027093abdb9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
              alt="" onclick="openPopup1()" class="flex1">
            <div id="image-popup1" class="popup">
              <span class="close-button" onclick="closePopup1()">&times;</span>
              <img
                src="https://images.unsplash.com/photo-1695418624968-d027093abdb9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
                alt="Image" />
            </div>
          </div>
          <div class="Vill-flex">
            <img
              src="https://images.unsplash.com/photo-1695751240056-c9aea1e799df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxM3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
              alt="" onclick="openPopup2()" class="flex1">
            <div id="image-popup2" class="popup">
              <span class="close-button" onclick="closePopup2()">&times;</span>
              <img
                src="https://images.unsplash.com/photo-1695751240056-c9aea1e799df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxM3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
                alt="Image" />
            </div>
          </div>
          <div class="Vill-flex">
            <img
              src="https://images.unsplash.com/photo-1682685797660-3d847763208e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwyMXx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
              alt="" onclick="openPopup3()" class="flex1">
            <div id="image-popup3" class="popup">
              <span class="close-button" onclick="closePopup3()">&times;</span>
              <img
                src="https://images.unsplash.com/photo-1682685797660-3d847763208e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwyMXx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
                alt="Image" />
            </div>
          </div>
        </div>
      </div>
            
      <div class="village-story">
        <div class="text-village">
          <div class="text_vill">
            
            <h1 class="text-left mt-1 text_h1"><?php echo $setfood['SetName'] ?></h1>
            <h1 class="text_h1 text-left mt-3">มีตำรับอาหารดังนี้</h1>
            <p class="text_v"> 
            <?php  $totalsetfood = 0;
                    for ($i = 0; $i < 7; $i++) { 
                        if ($setfood['FoodName' . $i] != null) {
                            $totalsetfood++;
                        } else {
                            break; 
                        }
                    } 
                    for ($i = 0; $i < $totalsetfood; $i++) {
                      $food = $setfood['FoodName' . $i];
                      $Idfood = $setfood['IdFood' . $i];
                    ?> 
              <a href="../website/recipe.php?id=<?php echo $Idfood?>"><?php echo $i+1 , $food ?><i class="ml-1 fa-solid fa-caret-left"></i></a><br>
              <?php } ?>
            </p>
            
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>

  <?php include '../include/footer.php' ?>
  <script src="../js/page3.js"></script>
</body>

</html>