<!DOCTYPE html>
<html>
    <?php
    $header_name;

    switch(@$_GET['p']) {
        case 'products':
            $header_name = "Products";
        break;
    
        case 'about_us':
            $header_name = "About Us";
        break;
        
        case 'contact_us':
            $header_name = "Contact Us";
        break;
        
        default:
            $header_name = "Home";
        break;
    }
    ?>
    <head>
        <link rel="stylesheet" type="text/css" href="css/index_style.css">
    </head>
    <body>
        <div class="container">
            <div class="header"><h1><?php echo $header_name ?></h1></div>
                <div class="navigation">
                    <ul>
                        <li><a href="?p=home">Home</a></li>
                        <li><a href="?p=products">Products</a></li>
                        <li><a href="?p=about_us">About Us</a></li>
                        <li><a href="?p=contact_us">Contact Us</a></li>
                    </ul>
                </div>
            <div class="content">
    </body>
</html>