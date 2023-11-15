<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ตำรับอาหาร</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/recipe.css" />
  <link rel="stylesheet" href="../css/reciperespon.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Taviraj:ital,wght@1,200&display=swap" rel="stylesheet" />
</head>

<body>
<?php include '../include/navbar.php' ?>
  <div class="content">
    <div class="content_village">
      <h1>ตำรับอาหาร</h1>
    </div>
  </div>
  <div class="main-village">
    <div class="control_village">
      <div class="image-village">
        <img
          src="https://static.thairath.co.th/media/Dtbezn3nNUxytg04aoZ9f77r0DH1c3am84CfR9LvDIvVHh.webp"
          alt="" 
          onclick="mainopenPopup()" class="flex1"
          />
          <div id="mainopenPopup" class="popup">
            <span class="close-button" onclick="mainclosePopup()">&times;</span>
            <img
              src="https://static.thairath.co.th/media/Dtbezn3nNUxytg04aoZ9f77r0DH1c3am84CfR9LvDIvVHh.webp"
              alt="Image" />
          </div>
        <div class="flex_village">
          <div class="Vill-flex">
            <img
              src="https://images.unsplash.com/photo-1682686580391-615b1f28e5ee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
              alt="" onclick="openPopup()" class="flex1" />
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
              alt="" onclick="openPopup1()" class="flex1" />
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
              alt="" onclick="openPopup2()" class="flex1" />
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
              alt="" onclick="openPopup3()" class="flex1" />
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
            <h1 class=" font-100 text-left mt-1 text_h1">ตำรับอาหารที่1. หมกหน่อไม้</h1>
            <h1 class="text-left mt-3  text_h1">ส่วนผสม</h1>
            <p class="text_v">-</p>
            <h1 class="text-left mt-3  text_h1">หน่วยนับ</h1>
            <p class="text_v">-</p>
            <h1 class="text-left mt-3  text_h1">น้ำหนัก</h1>
            <p class="text_v">-</p>
            <h1 class="text-left mt-3  text_h1">วิธีการทำ</h1>
            <p class="text_v">1 </p>
            <p class="text_v">2 </p>
            <p class="text_v">3 </p>
            <p class="text_v">4 </p>
            <p class="text_v">5 </p>
            <p class="text_v">6 </p>
            <p class="text_v">7 </p>
          </div>
        </div>
      </div>
    </div>
    <h1 class="text-2xl text-left text-slate-700">วัตถุดิบ</h1>
    <div class="food-village" id="food-table">
      <div class="food-item">
        <div class="food-image">
          <img
              src="data:image/jpeg;base64,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"
              alt="" />
        </div>
        <div class="food-text">
          <h1 class="fs-4 text-center text-xl mt-2 text_h1">ข้าว</h1>
        </div>
      </div>
      <div class="food-item">
        <div class="food-image">
         <img
              src="data:image/jpeg;base64,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"
              alt="" />
         
        </div>
        <div class="food-text">
          <h1 class="fs-4 text-center text-xl mt-2 text_h1">ปลา</h1>
        </div>
      </div>
      <div class="food-item">
        <div class="food-image">
          <img
              src="data:image/jpeg;base64,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AREQEREBMVu6wP4WNj4NsG9dj6eMypQ6ggg7EawK5SReeIDbXXx6yuBzvtpQC10ygAFQSALC5LKTbymmcNSz1h++P0Bm+9t1P2qN+4v9RM0vMAX0tqbnr3ib+1h6TDd7senmfys1W6C0jMVQuJPJTzC46X095i4ykCukymuEazzGtvhzGHpsLW+YG6noynMp95lV9JirVykecvNVy6j6E4fihVpJUXZ0Vh/EAf7zJmofDjHh8O1O+tJyB/ofvr6XLL/BNvnRLzGFexESUEREBERAREQEREBERAREQEREBERAREQEREBERA1XtfQuVbqMt9LAi538b/Sc3q02QvfS7kjqRfedf47QzUXAGoXMOt172ntb1nKOJXuSfzHL5aEfQzHyTvl3+DXy8XH7MvhVYZ1W/wA116fMpW31mLiamk94e9mU9CD7G95kcZp5arrawDtbyubTGzpaa5qBxCA3tInEaCTrDeRuOo32k5rPeWy/CriBXFZCdKtNl82Tvr/t+1nZJwHsbUyYuief2yfU5D/tdp32dObzHJqcV7ERLKkREBERAREQEREBERAREQEREBERAREQEREBKL6/5/nSVy3U2v0gVETm3a3hpUlQNgXBHNdrac7j6zpN5A8bwZqUndfmViV0ubLZSB/KxErqcxt4N/HXfquZYJxp5/rp/wATPx+veJuSN769PeYuGwpQAt5EdOn9pViVJE5bqO6Z4YRXcTylgc977AS9QoEnbnJTFE00KAAh0tbnmuDe/K1vrK88qbavggFxNNtkp1ULkfMQGBIHpO+0qisoZSCCAQRsQdQZwTEAICCpLH2m3/DTtIVb7pVbRiTRJ5Hcp66keN+s6fHfpxby6jERNWZERAREQEREBERAREQEREBERAREQEREBERASlheVRAxVq5UzH8IN7eG/wCk1fBdt8MP2dQlWXQkWZWI3YW1sd9ucz+M1sXc08PTQ96+YsPBj3TtqR13nNOM9mKi1DndEdjmPeIF2vzylQCb6aDSZ61eXV4vFnWbz7vrvtsNTieBqYl0XMxsMrHQNoDlXrbbvC/LxmWtJM3yWHS+v0E5hxHgVdGIPeNr90hgRte6kiTPA+P4hEKubi1lJ+YHn3uY2mW8y9tpdf02VtmKpqC2UqLHf/xz95FYvFi1hqZjrj888akWNgNTMkcfux8SmYAnlcfW/wDeQWPc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"
              alt="" />
         
        </div>
        <div class="food-text">
          <h1 class="fs-4 text-center text-xl mt-2 text_h1">กุ้ง</h1>
        </div>
      </div>
      <div class="food-item">
        <div class="food-image">
          <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRke5vUCY2gDkkrLTCYfhddvl7am3X7MqdAng&usqp=CAU"
              alt="" />
        </div>
        <div class="food-text">
          <h1 class="fs-4 text-center text-xl mt-2 text_h1">น้ำเปล่า </h1>
        </div>
      </div>
    </div>
  </div>
 <?php include '../include/footer.php' ?>
  <script src="../js/recipe.js"></script>
</body>

</html>