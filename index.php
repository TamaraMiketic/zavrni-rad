<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link rel="icon" href="../../../../favicon.ico">
     <link rel="stylesheet" type="text/css" href="styles/styles.css" />

     <title>Srpski kuvar</title>



</head>

<header>
     <?php include 'header.php'; ?>
</header>

<body>

     <main role="main" class="container">

          <div class="blog-main">

               <?php include "posts.php" ?>

          </div><!-- /.blog-main -->

          <aside class="blog-sidebar">
               <div class="sidebar-module sidebar-module-inset">
                    <h4>Predlog</h4>
                    <p>Pratite nase savete i postanite vrhunski kuvari</p>
               </div>
               <div class="sidebar-module">
                    <img src="data:image/png;base64,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" height="250" width="350">
               </div>
               <div class="sidebar-module">
                    <h4>Pratite nas i na:</h4>
                    <ol class="list-unstyled">
                         <li><a href="#">Instagram</a></li>
                         <li><a href="#">Twitter</a></li>
                         <li><a href="#">Facebook</a></li>
                    </ol>
               </div>
          </aside><!-- /.blog-sidebar -->

          </div><!-- /.row -->

     </main><!-- /.container -->

     <?php include "footer.php"; ?>

</body>

</html>

</html>