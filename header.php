<!doctype htmml>

 <html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<?php wp_head(); ?>
<title>Yb News</title>
</head>
<body>

    
    <div id="slideout-menu">
        <ul>
            <li>
                <a href ="<?php echo site_url('');?>">Home</a>
            </li>
            <li>
                <a href ="<?php echo site_url('/blog');?>">blog</a>
            </li>
            <li>
                <a href ="<?php echo site_url('entertaiment');?>">entertaiment</a>
            </li>
            <li>
                <a href ="<?php echo site_url('/projects');?>">News</a>
            </li>
            <li> 
                <input type="text" placeholder="search here">
                <br>
                <a href="#">
                    <i class="fas fa-search"></i>
                </a>
            </li>
        </ul>
    </div> 

<nav>
<div id ="logo-image">
    <a href="#">
        <img src="<?php echo get_template_directory_uri();?>/img/yb.PNG" alt="">
    </a>
</div>  
<div id="menu-icom">
    <i class="fas fa-bars"></i>

        <ul>
            <li>
                <a class="active" href ="index.html">Home</a>
            </li>
            <li>
                <a href ="blog.html">blog</a>
            </li>
            <li>
                <a href ="enter.html">entertaiment</a>
            </li>
            <li>
                <a href ="News.html">News</a>
            </li>
            <li> 
                <input type="text" placeholder="search here">
                <br>
                <a href="#">
                    <i class="fas fa-search"></i>
                </a>
            </li>
        </ul>
    </div> 
</div>
</nav>
   
    