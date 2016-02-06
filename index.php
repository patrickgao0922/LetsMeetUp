<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <!-- Bootstrap core CSS -->
        <link href="bootstrap.min.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="jquery-2.1.4.js"></script>
        <!-- Custom styles for this template -->
        <link href="index.css" rel="stylesheet">

        <script  src="bootstrap.min.js"></script>
        <script type="text/javascript">
          $('#test-modal').on('shown.bs.modal', function () {
            $('#myInput').focus()
          })
        </script>
        <title>Let's Meet Up</title>
    </head>
    <body>
        <div class="site-wrapper">

          <div class="site-wrapper-inner">
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                <h3 class="masthead-brand">相聚</h3>
                    
                <ul class="nav nav-default masthead-nav">
                  <li class="active"><a href="#">主页</a></li>
                  <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#test-modal">登陆</button></li>
                </ul>
              </div> <!-- End container -->
            </nav>

            <div class="cover-container">

              <!-- Modal -->
              <div class="modal fade" id="test-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form class="form-signin">
                      <!-- Modal-header -->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">请登录账户</h4>
                      </div>
                      <!-- End modal-header -->

                      <!-- Modal-body -->
                      <div class="modal-body">
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="remember-me"> Remember me
                          </label>
                        </div>
                          
                        
                      </div>
                      <!-- End modal-body -->

                      <!-- Modal-footer -->
                      <div class="modal-footer">
                        如果您还没有帐户，在这里<a href="#">创建一个新的帐户</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </div>
                      <!-- End modal-footer -->
                    </form> <!-- End form-signin -->
                  </div> <!-- End modal-content -->
                </div> <!-- End Modal-dialog -->
              </div> <!-- End  test-modal -->

              <div class="inner cover">
                <h1 class="cover-heading"><?php echo "在这里相聚"?></h1>
                <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
                <p class="lead">
                  <a href="#" class="btn btn-lg btn-default">Learn more</a>
                </p>
              </div>

              <div class="mastfoot">
                <div class="inner">
                  <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                </div>
              </div>

            </div>

          </div>

        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>     
    </body>
</html>
