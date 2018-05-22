<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>assets/demo/assets/css/bootstrap-clearmin.min.css">
        <link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>assets/demo/assets/css/roboto.css">
        <link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>assets/demo/assets/css/material-design.css">
        <link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>assets/demo/assets/css/small-n-flat.css">
        <link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>assets/demo/assets/css/font-awesome.min.css">
        <title>MBS intranet</title>
    </head>
    <body class="cm-no-transition cm-1-navbar">
        <div id="cm-menu">
            <nav class="cm-navbar cm-navbar-primary">
                <div  class="cm-flex"> <a  href="<?php echo base_url();?>assets/demo/index.html"></a></div>
                <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
            </nav>
            <div id="cm-menu-content">
                <div id="cm-menu-items-wrapper">
                    <div id="cm-menu-scroller">
                        <ul class="cm-menu-items">
                            <li class="active"><a  href="<?php echo base_url();?>assets/demo/index.html" class="sf-house">Home</a></li>
                            <li><a  href="<?php echo base_url();?>assets/demo/dashboard-sales.html" class="sf-dashboard">Websites</a></li>
                            <li><a  href="<?php echo base_url();?>assets/demo/components-text.html" class="sf-brick">Contacts</a></li>
                            <li class="cm-submenu">
                                <a class="sf-window-layout">Navbar layouts <span class="caret"></span></a>
                                <ul>
                                    <li><a  href="<?php echo base_url();?>assets/demo/layouts-breadcrumb1.html">Chat application</a></li>
                                    <li><a  href="<?php echo base_url();?>assets/demo/layouts-breadcrumb2.html">Profile</a></li>
                                    <li><a  href="<?php echo base_url();?>assets/demo/layouts-tabs.html">Employment</a></li>
                                </ul>
                            </li>
                            <li class="cm-submenu">
                                <a class="sf-cat">Chat application <span class="caret"></span></a>
                                <ul>
                                    <li><a  href="<?php echo base_url();?>assets/demo/ico-sf.html">Small-n-flat</a></li>
                                    <li><a  href="<?php echo base_url();?>assets/demo/ico-md.html">Material Design</a></li>
                                    <li><a  href="<?php echo base_url();?>assets/demo/ico-fa.html">Font Awesome</a></li>
                                </ul>
                            </li>
                            <li><a  href="<?php echo base_url();?>assets/demo/notepad.html" class="sf-notepad">Profile</a></li>
                            <li><a  href="<?php echo base_url();?>assets/demo/login.html" class="sf-lock-open">Employement</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="cm-header">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                <div class="cm-flex">
                    <h1>Home</h1> 
                    <form id="cm-search" action="index.html" method="get">
                        <input type="search" name="q" autocomplete="off" placeholder="Search...">
                    </form>
                </div>
                <div class="pull-right">
                    <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
                </div>
                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-notifications-white" data-toggle="dropdown"> <span class="label label-danger">23</span> </button>
                    <div class="popover cm-popover bottom">
                        <div class="arrow"></div>
                        <div class="popover-content">
                            <div class="list-group">
                                <a  href="<?php echo base_url();?>assets/demo/#" class="list-group-item">
                                    <h4 class="list-group-item-heading text-overflow">
                                        <i class="fa fa-fw fa-envelope"></i> Nunc volutpat aliquet magna.
                                    </h4>
                                    <p class="list-group-item-text text-overflow">Pellentesque tincidunt mollis scelerisque. Praesent vel blandit quam.</p>
                                </a>
                                <a  href="<?php echo base_url();?>assets/demo/#" class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-envelope"></i> Aliquam orci lectus
                                    </h4>
                                    <p class="list-group-item-text">Donec quis arcu non risus sagittis</p>
                                </a>
                                <a  href="<?php echo base_url();?>assets/demo/#" class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-warning"></i> Holy guacamole !
                                    </h4>
                                    <p class="list-group-item-text">Best check yo self, you're not looking too good.</p>
                                </a>
                            </div>
                            <div style="padding:10px"><a class="btn btn-success btn-block"  href="<?php echo base_url();?>assets/demo/#">Show me more...</a></div>
                        </div>
                    </div>
                </div>
                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
                    <ul class="dropdown-menu">
                        <li class="disabled text-center">
                            <a style="cursor:default;"><strong>Shail Desai</strong></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a  href="<?php echo base_url();?>assets/demo/#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a  href="<?php echo base_url();?>assets/demo/#"><i class="fa fa-fw fa-cog"></i> Settings</a>
                        </li>
                        <li>
                            <a  href="<?php echo base_url();?>assets/demo/login.html"><i class="fa fa-fw fa-sign-out"></i> Sign out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div id="global">
            <div class="container-fluid cm-container-white">
                <h2 style="margin-top:0;">Welcome to MBS Radio !</h2> 
                <p>Some random text...bla...blall.balllaaaa</p>
            </div>
            <div class="container-fluid">
                <div class="row cm-fix-height">
                    
                       
                        
                            
                                
                                <div class="col-sm-3">
                                 <div class="panel panel-default">
                            <div class="panel-body">
                                <div> 
                                    <img class="col-sm-12"  src="https://www.theweather.com/wimages/fotoe03ad524a18d0d84f69ecf012306fd76.png" class="img-fluid" alt="Responsive image">
                                </div>

                             </div></div>
                         </div>


                           
                     
                    
                
                   

                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
 <div class="feedgrabbr_widget" id="fgid_990faadac39e091b68986f0f8"></div>
<script>if (typeof (fg_widgets) === "undefined") fg_widgets = new Array(); fg_widgets.push("fgid_990faadac39e091b68986f0f8");</script>
<script async src="https://www.feedgrabbr.com/widget/fgwidget.js"></script>
                                <br>
                             
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <input type="text" class="col-sm-4" size="40" name="task1" class="form-control" placeholder="task1" value="<?php echo set_value('task1');?>">
                                <input type="submit" name="todo" placeholder="submit">

                                <ul>
                                    <li>i have some other work to do
                                        <li> no focus on this
                                </ul>

                              
                                <br>
                             
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row cm-fix-height">
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a  href="<?php echo base_url();?>assets/demo/dashboard-sales.html" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="<?php echo base_url();?>assets/demo/assets/img/sf/dashboard.svg" alt="dashboard">
                                </span>
                                <h4>Dashboard</h4> <small>C3.js charts to display some fancy pies.</small>

                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a  href="<?php echo base_url();?>assets/demo/notepad.html" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="<?php echo base_url();?>assets/demo/assets/img/sf/notepad.svg" alt="notepad">
                                </span>
                                <h4>Text editor</h4> <small>Summernote WYSIWYG Editor implementation.</small>

                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a  href="<?php echo base_url();?>assets/demo/components-text.html" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="<?php echo base_url();?>assets/demo/assets/img/sf/brick.svg" alt="brick">
                                </span>
                                <h4>Components</h4> <small>Bootstrap main classes.</small>

                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a  href="<?php echo base_url();?>assets/demo/layouts-breadcrumb1.html" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="<?php echo base_url();?>assets/demo/assets/img/sf/window-layout.svg" alt="window-layout">
                                </span>
                                <h4>Navbar layouts</h4> <small>Put all you need on the top of your screen.</small>

                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a  href="<?php echo base_url();?>assets/demo/ico-sf.html" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="<?php echo base_url();?>assets/demo/assets/img/sf/cat.svg" alt="cat">
                                </span>
                                <h4>Icons</h4> <small>Semantic little pics.</small>

                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a  href="<?php echo base_url();?>assets/demo/login.html" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="<?php echo base_url();?>assets/demo/assets/img/sf/lock-open.svg" alt="lock-open">
                                </span>
                                <h4>Login page</h4> <small>Have a look to the login page.</small>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Check our fancy colors</div>
                    <div class="panel-body" id="demo-buttons">
                        <p>Click buttons below to change navbar main color :</p>
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-primary" data-switch-color="primary">SDS</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-success" data-switch-color="success">Adtree</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-info" data-switch-color="info">Google</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-warning" data-switch-color="warning">Mbsadmin</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-danger" data-switch-color="danger">VT</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-gray" data-switch-color="gray">xyz</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-yellow" data-switch-color="yellow">abc</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-purple" data-switch-color="purple">hello</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-turquoise" data-switch-color="turquoise">wassup</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-midnight" data-switch-color="midnight">midnight</button>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <h1>Hi , Welcome to Login you as a Administrator <?php echo anchor('login/logout', 'Logout');?></h1>
            </div>
            <footer class="cm-footer"><span class="pull-left">Connected as John Smith</span><span class="pull-right">&copy; PAOMEDIA SARL</span></footer>
        </div>
        <script src="<?php echo base_url();?>assets/demo/assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url();?>assets/demo/assets/js/jquery.mousewheel.min.js"></script>
        <script src="<?php echo base_url();?>assets/demo/assets/js/jquery.cookie.min.js"></script>
        <script src="<?php echo base_url();?>assets/demo/assets/js/fastclick.min.js"></script>
        <script src="<?php echo base_url();?>assets/demo/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/demo/assets/js/clearmin.min.js"></script>
        <script src="<?php echo base_url();?>assets/demo/assets/js/demo/home.js"></script>
    </body>
</html>