<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Area | Dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="style.css" rel="stylesheet">
        <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    </head>
    <body>

        <?php
        include './admin_menu.php';
        ?>

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown create">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Create Content
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                                <li><a href="#">Add Post</a></li>
                                <li><a href="#">Add User</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </section>

        <section id="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <?php
                        include './admin_side_widgets.php';
                        ?>
                    </div>
                    <div class="col-md-9">
                        <!-- Website Overview -->
                        <div class="panel panel-default">
                            <div class="panel-heading main-color-bg">
                                <h3 class="panel-title">Website Overview</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <div class="well dash-box">
                                        <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h2>
                                        <h4>Users</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="well dash-box">
                                        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 12</h2>
                                        <h4>Pages</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="well dash-box">
                                        <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 33</h2>
                                        <h4>Posts</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="well dash-box">
                                        <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 12,334</h2>
                                        <h4>Visitors</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Latest Users -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Latest Users</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Joined</th>
                                    </tr>
                                    <tr>
                                        <td>Jill Smith</td>
                                        <td>jillsmith@gmail.com</td>
                                        <td>Dec 12, 2016</td>
                                    </tr>
                                    <tr>
                                        <td>Eve Jackson</td>
                                        <td>ejackson@yahoo.com</td>
                                        <td>Dec 13, 2016</td>
                                    </tr>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>jdoe@gmail.com</td>
                                        <td>Dec 13, 2016</td>
                                    </tr>
                                    <tr>
                                        <td>Stephanie Landon</td>
                                        <td>landon@yahoo.com</td>
                                        <td>Dec 14, 2016</td>
                                    </tr>
                                    <tr>
                                        <td>Mike Johnson</td>
                                        <td>mjohnson@gmail.com</td>
                                        <td>Dec 15, 2016</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Modals -->

        <!-- Add Page -->
        <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add Page</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Page Title</label>
                                <input type="text" class="form-control" placeholder="Page Title">
                            </div>
                            <div class="form-group">
                                <label>Page Body</label>
                                <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Published
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Meta Tags</label>
                                <input type="text" class="form-control" placeholder="Add Some Tags...">
                            </div>
                            <div class="form-group">
                                <label>Meta Description</label>
                                <input type="text" class="form-control" placeholder="Add Meta Description...">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
        include './admin_footer.php';
        ?>

    </body>
</html>