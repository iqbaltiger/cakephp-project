<style type="text/css">
    .navbar .nav > li > a{padding-bottom: 5px;padding-right:0px;padding-left: 0px;padding-top: 0px;}
    .navbar .nav .dropdown-toggle .caret, .navbar .nav .open.dropdown .caret{
        float: right;

        margin-right: 15px;
        margin-top: 43px;

    }


    .navbar .nav > li > a{text-decoration: underline;color:blue;
    }

    .lightDrpHdr{background: none repeat scroll 0 0 #fafafa;
               
                 margin-top: 15px;    
                 padding: 0 8px 10px;
                 text-align: center;}
    
    
    .dropdown-menu a{padding-left:30px;}

</style>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <a class="brand" href="index.html"><?php echo $this->Html->image('header-logo.png') ?> </a>
            <div class="nav-collapse">
                <ul class="nav  pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">


                            <?php echo $this->Html->image('noPhoto2.png', array('alt' => 'no photo', 'width' => 50, 'height' => 50, 'border' => 0)); ?><b class="caret"></b><span style="margin-left: 10px;">Iqbal</span></a>

<!--                                                    <i class="icon-cog"></i> Account <b class="caret"></b></a>-->
                        <ul class="dropdown-menu">

                            <li>

                                <div class="lightDrpHdr"><?php echo $this->Html->image('noPhoto2.png', array('alt' => 'no photo', 'width' => 100, 'height' => 100, 'border' => 0,'id'=>"lightDrpUserPic")); ?><div id="lightDrpUserName">Iqbal Hossain</div></div>

                            </li> 


                            <li>
                                <a href="javascript:;">Settings</a>
                            </li>
                            <li>
                                <a href="javascript:;">Help</a>
                            </li>
                            <li>
                                <a href="javascript:;">Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout')) ?>">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
        <!-- /container -->
    </div>
    <!-- /navbar-inner -->
</div>