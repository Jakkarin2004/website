<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../include/nav.css">
    <link rel="stylesheet" href = "../include/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="container-main">
      <nav class="nav-head">
        <div class="logo text-xl">โครงการหมู่บ้าน</div>
        <ul class="nav-main">
          <li>
            <a href="../website/village.php">หน้าหลัก</a>
          </li>
          <li>
            <div class="dropdown">
              <a class="dropbtn">หมู่บ้าน<i class="ml-2 fa-solid fa-caret-right"></i></a>
              <div class="dropdown-content">
                <div class="drop-menu">
                  <a href="../website/deck.php">บ้านหาดเบี้ย</a>
                  <a href="#">บ้านกกคู้</a>
                  <a href="#">บ้านกุดป่อง</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="dropdown">
              <a  class="dropbtn">สำรับอาหาร</a>
              <div class="dropdown-content">
                <div class="drop-menu">
                  <a >บ้านหาดเบี้ย <i class="ml-2 fa-solid fa-caret-right"></i></a>
                  <div class="drop-item">
                    <a href="">สำรับอาหารชุดที่ 1</a>
                    <a href="">สำรับอาหารชุดที่ 2</a>
                    <a href="">สำรับอาหารชุดที่ 3</a>
                  </div>
                </div>
                <div class="drop-menu">
                  <a >บ้านกกคู้ <i class="ml-2 fa-solid fa-caret-right"></i></a>
                  <div class="drop-item">
                    <a href="">สำรับอาหารชุดที่ 4</a>
                    <a href="">สำรับอาหารชุดที่ 5</a>
                    <a href="">สำรับอาหารชุดที่ 6</a>
                  </div>
                </div>
                <div class="drop-menu">
                  <a >บ้านกุดป่อง <i class="ml-2 fa-solid fa-caret-right"></i></a>
                  <div class="drop-item">
                    <a href="">สำรับอาหารชุดที่ 7</a>
                    <a href="">สำรับอาหารชุดที่ 8</a>
                    <a href="">สำรับอาหารชุดที่ 9</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="dropdown">
              <a  class="dropbtn">ตำรับอาหาร</a>
              <div class="dropdown-content">
                <div class="drop-menu">
                  <a >บ้านหาดเบี้ย<i class="ml-2 fa-solid fa-caret-right"></i></a>
                  <div class="drop-item">
                    <a href="">ตำรับอาหารชุดที่ 1</a>
                    <a href="">ตำรับอาหารชุดที่ 2</a>
                    <a href="">ตำรับอาหารชุดที่ 3</a>
                    <a href="">ตำรับอาหารชุดที่ 4</a>
                    <a href="">ตำรับอาหารชุดที่ 5</a>
                    <a href="">ตำรับอาหารชุดที่ 6</a>
                    <a href="">ตำรับอาหารชุดที่ 7</a>
                  </div>
                </div>
                <div class="drop-menu">
                  <a >บ้านกกคู้<i class="ml-2 fa-solid fa-caret-right"></i></a>
                  <div class="drop-item">
                    <a href="">ตำรับอาหารชุดที่ 4</a>
                    <a href="">ตำรับอาหารชุดที่ 5</a>
                    <a href="">ตำรับอาหารชุดที่ 6</a>
                  </div>
                </div>
                <div class="drop-menu">
                  <a>บ้านกุดป่อง<i class="ml-2 fa-solid fa-caret-right"></i></a>
                  <div class="drop-item">
                    <a href="">ตำรับอาหารชุดที่ 7</a>
                    <a href="">ตำรับอาหารชุดที่ 8</a>
                    <a href="">ตำรับอาหารชุดที่ 9</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="dropdown">
              <a  class="dropbtn"><i class="fa-solid fa-caret-down"></i></a>
              <div class="dropdown-content">
                <div class="drop-menu">
                  <a href="#">เข้าสู่ระบบ</a>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div class="menu-toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </header>
    <script>
      document
        .getElementById("mobile-menu")
        .addEventListener("click", function () {
          var navList = document.querySelector(".nav-main");
          navList.classList.toggle("show");
        });
    </script>
  </body>
</html>