<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <title>IPI Quitaúna</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
</head>

<body id="www-url-cz"> 
  <div id="fb-root"></div>
  <script>(
    function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=157564664391398";
      fjs.parentNode.insertBefore(js, fjs);
    }
    (document, 'script', 'facebook-jssdk'));
  </script>
    
  <script type="text/javascript">
    function changeURL(tabname){
      document.getElementById("active").setAttribute("id","");
      document.getElementsByName(tabname)[0].setAttribute("id","active");
      document.getElementById("content").innerHTML = "<iframe id='mainframe' src='" + tabname + ".php' scrolling='no' frameborder='0' width='100%' height='100%'></iframe>";
    }
  </script>
  
<div id="main" class="box">

    <div id="header">

        <h1 id="logo"><a href="./" title="IPI Quitaúna [Voltar ao início]">IPI Quitaúna<span></span></a></h1>
        <hr class="noscreen" />          

    </div>

     <div id="tabs" class="noprint">

            <h3 class="noscreen">Navigation</h3>
            <ul class="box">
                <li name="home" id="active"><a href="#" onclick="changeURL('home')">Início<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li name="news"><a href="#" onclick="changeURL('news')">Notícias<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li name="about"><a href="#" onclick="changeURL('about')">Sobre Nós<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li name="photo"><a href="#" onclick="changeURL('photo')">Fotos<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li name="maps"><a href="#" onclick="changeURL('maps')">Localização<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li name="contact"><a href="#" onclick="changeURL('contact')">Contato<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li name="member"><a href="#" onclick="changeURL('member')">Área do Membro<span class="tab-l"></span><span class="tab-r"></span></a></li>
            </ul>

        <hr class="noscreen" />
     </div>

    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">
        </div>

        <div id="content" height='1000px'>
        </div>

        <div id="col" class="noprint">
            <div id="col-in">

                <h3><span><a href="#">About Me</a></span></h3>

                <div id="about-me">
                  <div class="fb-login-button" data-show-faces="true" data-width="200" data-max-rows="1"></div>
                </div>

                <hr class="noscreen" />

                <!-- Category -->
                <h3 ><span>Category</span></h3>

                <ul id="category">
                    <li id="category-active"><a href="#">Selected category</a></li> <!-- Active -->
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                </ul>

                <hr class="noscreen" />

                <!-- Archive -->
                <h3><span>Archive</span></h3>

                <ul id="archive">
                   <li><a href="#">January 2007</a></li>
                    <li><a href="#">December 2006</a></li>
                    <li><a href="#">November 2006</a></li>
                    <li><a href="#">October 2006</a></li>
                    <li><a href="#">September 2006</a></li>
                    <li id="archive-active"><a href="#">August 2006</a></li> <!-- Active -->
                    <li><a href="#">July 2006</a></li>
                    <li><a href="#">June 2006</a></li>
                    <li><a href="#">May 2006</a></li>
                    <li><a href="#">April 2006</a></li>
                    <li><a href="#">March 2006</a></li>
                    <li><a href="#">February 2006</a></li>
                    <li><a href="#">January 2006</a></li>
                </ul>

                <hr class="noscreen" />

                <!-- Links -->
                <h3><span>Links</span></h3>

                <ul id="links">
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                </ul>
                <div class="fb-like-box" data-href="https://www.facebook.com/pages/Igreja-Presbiteriana-Independente-de-Quita%C3%BAna/233065896779507?fref=ts" data-width="292" data-show-faces="true" data-stream="false" data-header="false"></div>
                <hr class="noscreen" />
            
            </div>
        </div>

    </div>
    </div>

    <div id="footer">
        <div id="top" class="noprint"><p><span class="noscreen">Back on top</span> <a href="#header" title="Voltar ao topo">^<span></span></a></p></div>
        <hr class="noscreen" />
        
        <p id="createdby">created by <a href="http://www.nuvio.cz">Nuvio | Webdesign</a> <!-- DON´T REMOVE, PLEASE! --></p>
        <p id="copyright">&copy; 2013 IPI Quitaúna</p>
    </div>

</div>

</body>
</html>