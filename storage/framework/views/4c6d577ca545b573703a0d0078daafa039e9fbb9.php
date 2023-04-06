<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo e(route('admin.dashboard')); ?>" style="font-size: 28px;">Administrator</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="background-color: #fcf8e38f!important;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo e(url('dashboard')); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pencil fa-fw"></i> Posts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo e(route('posts.index')); ?>"><i class="fa fa-list fa-fw"></i>All Posts</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('posts.create')); ?>"><i class="fa fa-plus fa-fw"></i>Add New</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('posts-categories.index')); ?>"><i class="fa fa-circle-o fa-fw"></i>Categories</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo e(url('tags')); ?>"><i class="fa fa-tags" aria-hidden="true"></i> Tags</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-users fa-fw" aria-hidden="true"></i> Users</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav><?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/includes/admin/header.blade.php ENDPATH**/ ?>