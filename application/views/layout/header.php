<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('page/index'); ?>">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url('page/index'); ?>"><i class="fa fa-home fa-fw" aria-hidden="true"></i> Home</a></li>
                <li><a href="<?php echo base_url('page/about'); ?>"><i class="fa fa-info" aria-hidden="true"></i> About</a></li>
                <li><a href="<?php echo base_url('page/contact'); ?>">Contact</a></li>
                <li><a href="<?php echo base_url('page/services'); ?>">Services</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url('admin/index'); ?>">Admin</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
