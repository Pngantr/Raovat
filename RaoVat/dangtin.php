<?php
ob_start();
include("includes/include_head.php");
include 'includes/security.php';

$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE UserName = '$username'";
$query_run = mysqli_query($connection, $query);
if ($query_run->num_rows > 0) {
  // Nếu tìm thấy bản ghi, trích xuất thông tin 
  $row = $query_run->fetch_assoc();
  $iduser = $row['IDUser'];
} else {
  echo "Không tìm thấy thông tin người dùng.";
}

?>
<style>
    html {
        background-image: url(img/background.jpg);
    }

    /* * {
        background-image: url(img/background.jpg);
    } */
    form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }

        img {
            max-width: 200px;
            max-height: 200px;
            display: block;
            margin-bottom: 10px;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
</style>

<body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-2 theme-flatsome woocommerce-no-js boxed lightbox">

    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
    <div id="wrapper">
        <header id="header" class="header ">
            <div class="header-wrapper">
                <div id="masthead" class="header-main hide-for-sticky">
                    <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                        <!-- Logo -->
                        <div id="logo" class="flex-col logo">

                            <!-- Header logo -->
                            <a href="index.html" rel="home">
                                <img width="565" height="100" src="img/logo.png" class="header_logo header-logo" /><img width="565" height="100" src="img/logo.png" class="header-logo-dark" /></a>
                        </div>

                        <!-- Mobile Left Elements -->
                        <div class="flex-col show-for-medium flex-left">
                            <ul class="mobile-nav nav nav-left ">
                                <li class="nav-icon has-icon">
                                    <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">

                                        <i class="icon-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Left Elements -->
                        <div class="flex-col hide-for-medium flex-left
            flex-grow">
                            <ul class="header-nav header-nav-main nav nav-left  nav-size-large nav-spacing-xlarge">
                            </ul>
                        </div>
                        <!-- Right Elements -->
                        <div class="flex-col hide-for-medium flex-right">
                            <ul class="header-nav header-nav-main nav nav-right  nav-size-large nav-spacing-xlarge">
                                <li id="menu-item-976" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-976 menu-item-design-default"><a href="http://chotot.giaodienwebmau.com/cua-hang/" class="nav-top-link">Rao Vặt</a></li>
                                <li id="menu-item-981" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-981 menu-item-design-default"><a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/xe-co/" class="nav-top-link">Nhà rao vặt</a></li>
                                <li id="menu-item-982" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-982 menu-item-design-default"><a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/do-dien-tu/" class="nav-top-link">Xe rao vặt</a></li>
                                <li id="menu-item-983" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-983 menu-item-design-default"><a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/me-va-be/" class="nav-top-link">Việc làm rao vặt</a></li>
                            </ul>
                        </div>
                        <!-- Mobile Right Elements -->
                    </div>
                </div>
                <div class="header-bg-container fill">
                    <div class="header-bg-image fill"></div>
                    <div class="header-bg-color fill"></div>
                </div>
            </div><!-- header-wrapper-->
        </header>
    </div><!-- #wrapper -->
    <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
        <div class="sidebar-menu no-scrollbar ">
            <ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-979"><a href="http://chotot.giaodienwebmau.com/" aria-current="page">Trang chủ</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-976"><a href="http://chotot.giaodienwebmau.com/cua-hang/">Cửa hàng</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-981"><a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/xe-co/">Xe cộ</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-982"><a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/do-dien-tu/">Đồ điện tử</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-983"><a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/me-va-be/">Mẹ và bé</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-977"><a href="http://chotot.giaodienwebmau.com/dich-vu/">Dịch vụ</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-978"><a href="http://chotot.giaodienwebmau.com/tin-tuc/">Tin tức</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-980"><a href="http://chotot.giaodienwebmau.com/lien-he/">Liên hệ</a></li>
            </ul>
        </div>
    </div>
    <main>
    <form id="productForm" enctype="multipart/form-data" method="POST" action="code.php">
        <label for="productName">Tên sản phẩm:</label>
        <input type="text" id="productName" name="productName" required>

        <label for="productPrice">Giá:</label>
        <input type="text" id="productPrice" name="productPrice" required>

        <label for="address">Địa chỉ:</label>
        <input type="text" id="address" name="address" required>

        <input type="hidden" id="iduser" name="iduser" value="<?php echo $iduser ?>" required>

        <label for="productDescription">Mô tả:</label>
        <textarea id="productDescription" name="productDescription" rows="4" required></textarea>

        <label for="productImage">Hình ảnh:</label>
        <input type="file" id="productImage" name="productImage" accept="image/*" required>
        <img id="previewImage" src="#" alt="Hình ảnh sản phẩm" style="display: none;">

        <label for="productPrice">Danh mục tin đăng:</label>
        <select type="text" id="category" name="category" required>
            <option value="">Chọn danh mục của tin đăng</option>
            <option value="Việc làm">Việc làm</option>
            <option value="Tin vặt">Tin vặt</option>
        </select>
        <button type="submit" name="btndangtin" style="width: 500px"> Đăng tin</button>
    </form>

    <script>
        // Hiển thị hình ảnh trước khi tải lên
        document.getElementById("productImage").addEventListener("change", function() {
            const fileInput = this;
            const previewImage = document.getElementById("previewImage");

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewImage.style.display = "block";
                }

                reader.readAsDataURL(fileInput.files[0]);
            }
        });
    </script>
    </main>
    <?php
    include("includes/include_footer.php");
    ?>