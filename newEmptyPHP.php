<?php
include_once(dirname(__FILE__) . '/class/include.php');

//$service=new service(1);
//$result=$service->__construct(1);
//var_dump($result);
//$service=new service(NULL);
//
//$service->title='titlesdhsdh sdhsdhsd';
//$service->image_name='ddssdsds';
//$service->short_description='dssddddsdsds';
//$service->description='sdsdsds ffdfjdf ssdkfj jfdjf fdfmd';
//$service->queue=7;
//
//$result=$service->create();
////
//var_dump($result);
//
//$service=new service(4);
//$result=$service->delete();
//var_dump($result);
//
//$service=new service(5);
//
//$service->title='thtl cdf een djdj';
//$service->image_name='ddssdsds';
//$service->short_description='dssddddsdsds';
//$service->description='sdsdsds ffdfjdf ssdkfj jfdjf fdfmd';
//$service->queue=8;
//
//$result=$service->update();
////
//var_dump($result);
//$service=new Service(NULL);
//$result=$service->all();
//var_dump($result);
//service photos -----------------------------------------------------------------------
//$SERVICE_PHOTO=new Service_photo(1);
//$result=$SERVICE_PHOTO->__construct(1);
//var_dump($result);
//$SERVICE_PHOTO=new Service_photo(NULL);
//
//$SERVICE_PHOTO->service=2;
//$SERVICE_PHOTO->image_name='ddssdsds sdsd';
//$SERVICE_PHOTO->caption='dssddddsdsds';
//$SERVICE_PHOTO->queue=7;
//
//$result=$SERVICE_PHOTO->create();
//var_dump($result);
//$SERVICE_PHOTO=new Service_photo(NULL);
//$result=$SERVICE_PHOTO->all();
//var_dump($result);
//$SERVICE_PHOTO=new Service_photo(1);
//
//$SERVICE_PHOTO->service=3;
//$SERVICE_PHOTO->image_name='ddssdsds all sdsd';
//$SERVICE_PHOTO->caption='dssddd dfdfd fdfdfd alldsdsds';
//$SERVICE_PHOTO->queue=13;
//
//$result=$SERVICE_PHOTO->update();
////
//var_dump($result);
//$SERVICE_PHOTO=new Service_photo(2);
//$result=$SERVICE_PHOTO->delete();
//var_dump($result);
// Tour Package --------------------------------------------------------------------
//$TOUR_PACKAGE=new Tour_package(1);
//$result=$TOUR_PACKAGE->__construct(1);
//var_dump($result);
//$TOUR_PACKAGE=new Tour_package(NULL);
//
//$TOUR_PACKAGE->name='sdsdsdsdsds';
//$TOUR_PACKAGE->image_name='ddssdsds sdsd';
//$TOUR_PACKAGE->price='929';
//$TOUR_PACKAGE->short_description='dssddddsdsds';
//$TOUR_PACKAGE->description='dssddddsdsds';
//$TOUR_PACKAGE->queue=7;
//
//$result=$TOUR_PACKAGE->create();
//var_dump($result);
//$TOUR_PACKAGE=new Tour_package(NULL);
//$result=$TOUR_PACKAGE->all();
//var_dump($result);
//$TOUR_PACKAGE=new Tour_package(1);
//
//$TOUR_PACKAGE->name='sdsdsdsdsds';
//$TOUR_PACKAGE->image_name='ddssdsds sdsd';
//$TOUR_PACKAGE->price='929';
//$TOUR_PACKAGE->short_description='dssddddsdsds';
//$TOUR_PACKAGE->description='dss jjjjj ddddsdsds';
//$TOUR_PACKAGE->queue=7;
//
//$result=$TOUR_PACKAGE->update();
////
//var_dump($result);
//$TOUR_PACKAGE=new Tour_package(2);
//$result=$TOUR_PACKAGE->delete();
//var_dump($result);
//
//
//------------------------------------------------------------------
//$TOUR_DATE=new Tour_date(1);
//$result=$TOUR_DATE->__construct(1);
//var_dump($result);
//$TOUR_DATE=new Tour_dates(NULL);
//
//$TOUR_DATE->tour='1';
//$TOUR_DATE->title='ddssdsds sdsd';
//$TOUR_DATE->image_name='ddfdfdfdfdfdfdf ddfdfdfdfdf';
//$TOUR_DATE->description='dssddddsdsds';
//$TOUR_DATE->queue=9;
//
//$result=$TOUR_DATE->create();
//var_dump($result);
//$TOUR_DATE=new Tour_dates(NULL);
//$result=$TOUR_DATE->all();
//var_dump($result);
//
//$TOUR_DATE=new Tour_dates(1);
//
//
//$TOUR_DATE->tour='2';
//$TOUR_DATE->title='ddssdsds sdsd';
//$TOUR_DATE->image_name='ddfdfdfdfdfdfdf ddfdfdfdfdf';
//$TOUR_DATE->description='dssddddsdsds';
//$TOUR_DATE->queue=9;
//
//$result=$TOUR_DATE->update();
////
//var_dump($result);
//
//
//$TOUR_DATE=new Tour_dates(2);
//$result=$TOUR_DATE->delete();
//var_dump($result);
//
//
//   <?php
//                $vali = new Validator();
//
//                $vali->show_message();
//                
?> 


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Edit Service
                </h2>

            </div>
            <div class="body row">
                <form class="form-horizontal" method="post" action="post-and-get/service.php" enctype="multipart/form-data"> 

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="Title">Title</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="title" class="form-control"  value="<?php echo $SERVICE->title; ?>"  name="title"  required="TRUE">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="image">Image</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" id="image" class="form-control" value="/upload/service/<?php echo $SERVICE->image_name; ?>"  name="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="short_description">Short Description</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="short_description" class="form-control" value="<?php echo $SERVICE->short_description; ?>"  name="short_description"  required="TRUE">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="description">Description</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="description" class="form-control" value="<?php echo $SERVICE->description; ?>"  name="description"  required="TRUE">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">

                            <input type="hidden" id="id" value="<?php echo $SERVICE->id; ?>" name="id"/>
                            <input type="hidden" id="authToken" value="<?php echo $_SESSION["authToken"]; ?>" name="authToken"/>

                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="update" value="update">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>









﻿<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$TOUR_PACKAGE = new TourPackage(NULL);

if (isset($_GET['delete'])) {
    $TOUR_PACKAGE = new TourPackage($_GET['delete']);
    $imgName = $TOUR_PACKAGE->image_name;
    unlink('../upload/tour-package/' . $imgName);
    $TOUR_PACKAGE->delete();
}
?> 
﻿<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Tour Package</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-red">
<?php
include './navigation-and-header.php';
?>
        <section class="content">
            <div class="container-fluid"> 
                <!-- Manage Brand -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Manage Tour Package
                                </h2>
                                <ul class="header-dropdown">
                                    <li>
                                        <a href="create-tour-package.php">
                                            <i class="material-icons">add</i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <!--                                <div class="table-responsive">-->
                                <div>
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th> 
                                                <th>Price</th> 
                                                <th>Short Description</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th> 
                                                <th>Price</th> 
                                                <th>Short Description</th>
                                                <th>Description</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

<?php
$TOUR_PACKAGE = new TourPackage(NULL);
foreach ($TOUR_PACKAGE->all() as $key => $tour) {
    ?>
                                                <tr>
                                                    <td><?php echo $tour['id']; ?></td> 
                                                    <td><?php echo $tour['title']; ?></td> 
                                                    <td><?php echo $tour['price']; ?></td> 
                                                    <td><?php echo $tour['short_description']; ?></td> 
                                                    <td><?php echo $tour['description']; ?></td> 
                                                    <td> 
                                                        <a href="edit-tour-package.php?id=<?php echo $tour['id']; ?>" class="op-link"><i class="glyphicon glyphicon-pencil"></i></a>  |  
                                                        <a href="?delete=<?php echo $tour['id']; ?>" class="op-link"><i class="glyphicon glyphicon-trash"></i></a> 
                                                    </td>
                                                </tr>
    <?php
}
?>   
                                        </tbody>
                                    </table>
                                </div>
                                <!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Manage brand -->

            </div>
        </section>

        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script>
        <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="plugins/node-waves/waves.js"></script>
        <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

        <script src="js/admin.js"></script>
        <script src="js/pages/tables/jquery-datatable.js"></script>

        <script src="js/demo.js"></script>
    </body>

</html> 




<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$SERVICE = new Service(NULL);

if (isset($_GET['delete'])) {
    $SERVICE = new Service($_GET['delete']);
    $imgName = $SERVICE->image_name;
    unlink('../upload/service/' . $imgName);
    $SERVICE->delete();
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Services</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
        <link href="css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-red">
<?php
include './navigation-and-header.php';
?>

        <section class="content">
            <div class="container-fluid"> 
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Manage Service
                                </h2>
                                <ul class="header-dropdown">
                                    <li>
                                        <a href="create-service.php">
                                            <i class="material-icons">add</i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <!--                                <div class="table-responsive">-->
                                <div>
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th> 
                                                <th>Short Description</th>
                                                <th>Description</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th> 
                                                <th>Short Description</th>
                                                <th>Description</th>
                                                <th>Option</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

<?php
$SERVICE = new Service(NULL);
foreach ($SERVICE->all() as $key => $service) {
    ?>
                                                <tr>
                                                    <td><?php echo $service['id']; ?></td> 
                                                    <td><?php echo $service['title']; ?></td> 
                                                    <td><?php echo $service['short_description']; ?></td> 
                                                    <td><?php echo $service['description']; ?></td> 
                                                    <td> 
                                                        <a href="edit-service.php?id=<?php echo $service['id']; ?>" class="op-link"><i class="glyphicon glyphicon-pencil"></i></a>  |  
                                                        <a href="?delete=<?php echo $service['id']; ?>" class="op-link"><i class="glyphicon glyphicon-trash"></i></a> |
                                                        <a href="view-service-photos.php?id=<?php echo $service['id']; ?>" class="op-link"><i class="glyphicon glyphicon-picture"></i></a> 
                                                    </td>
                                                </tr>
    <?php
}
?>   
                                        </tbody>
                                    </table>
                                </div>
                                <!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <!--                 #END# Manage Unit -->
                </div>
            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script> 
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="plugins/node-waves/waves.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/demo.js"></script>
        <script src="js/add-new-ad.js" type="text/javascript"></script>


        <script src="tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: "#description",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });


        </script>
    </body>

</html>




<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$PHOTO_ALBUM = new PhotoAlbum(NULL);

if (isset($_GET['delete'])) {
    $PHOTO_ALBUM = new PhotoAlbum($_GET['delete']);
    $imgName = $PHOTO_ALBUM->image_name;
    unlink('../upload/photo-album/' . $imgName);
    $PHOTO_ALBUM->delete();
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Photo Album</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
        <link href="css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-red">
<?php
include './navigation-and-header.php';
?>

        <section class="content">
            <div class="container-fluid"> 
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Manage Photo Album
                                </h2>
                                <ul class="header-dropdown">
                                    <li>
                                        <a href="create-photo-album.php">
                                            <i class="material-icons">add</i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <!--                                <div class="table-responsive">-->
                                <div>
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th> 
                                                <th>Description</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th> 
                                                <th>Description</th>
                                                <th>Option</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

<?php
$PHOTO_ALBUM = new PhotoAlbum(NULL);
foreach ($PHOTO_ALBUM->all() as $key => $photo_album) {
    ?>
                                                <tr>
                                                    <td><?php echo $photo_album['id']; ?></td> 
                                                    <td><?php echo $photo_album['title']; ?></td> 
                                                    <td><?php echo $photo_album['description']; ?></td> 
                                                    <td> 
                                                        <a href="edit-photo-album.php?id=<?php echo $photo_album['id']; ?>" class="op-link"><i class="glyphicon glyphicon-pencil"></i></a>  |  
                                                        <a href="?delete=<?php echo $photo_album['id']; ?>" class="op-link"><i class="glyphicon glyphicon-trash"></i></a> 
                                                        <a href="view-album-photos.php?id=<?php echo $photo_album['id']; ?>" class="op-link"><i class="glyphicon glyphicon-picture"></i></a> 
                                                    </td>
                                                </tr>
    <?php
}
?>   
                                        </tbody>
                                    </table>
                                </div>
                                <!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <!--                 #END# Manage Unit -->
                </div>
            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script> 
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="plugins/node-waves/waves.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/demo.js"></script>
        <script src="js/add-new-ad.js" type="text/javascript"></script>


        <script src="tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: "#description",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });


        </script>
    </body>

</html>



<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$OFFER = new Offer(NULL);

if (isset($_GET['delete'])) {
    $OFFER = new Offer($_GET['delete']);
    $imgName = $OFFER->image_name;
    unlink('../upload/offer/' . $imgName);
    $OFFER->delete();
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Offer</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
        <link href="css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-red">
<?php
include './navigation-and-header.php';
?>

        <section class="content">
            <div class="container-fluid"> 
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Manage Offer
                                </h2>
                                <ul class="header-dropdown">
                                    <li>
                                        <a href="create-offer.php">
                                            <i class="material-icons">add</i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <!--                                <div class="table-responsive">-->
                                <div>
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th> 
                                                <th>Short Description</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Discount</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th> 
                                                <th>Short Description</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Discount</th>
                                                <th>Option</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>

<?php
$OFFER = new Offer(NULL);
foreach ($OFFER->all() as $key => $offer) {
    ?>
                                                <tr>
                                                    <td><?php echo $offer['id']; ?></td> 
                                                    <td><?php echo $offer['title']; ?></td> 
                                                    <td><?php echo $offer['short_description']; ?></td> 
                                                    <td><?php echo $offer['description']; ?></td> 
                                                    <td><?php echo $offer['price']; ?></td> 
                                                    <td><?php echo $offer['discount']; ?></td> 
                                                    <td> 
                                                        <a href="edit-offer.php?id=<?php echo $offer['id']; ?>" class="op-link"><i class="glyphicon glyphicon-pencil"></i></a>  |  
                                                        <a href="?delete=<?php echo $offer['id']; ?>" class="op-link"><i class="glyphicon glyphicon-trash"></i></a> 
                                                        <a href="view-offer-photos.php?id=<?php echo $offer['id']; ?>" class="op-link"><i class="glyphicon glyphicon-picture"></i></a> 
                                                    </td>
                                                </tr>
    <?php
}
?>   
                                        </tbody>
                                    </table>
                                </div>
                                <!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <!--                 #END# Manage Unit -->
                </div>
            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script> 
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="plugins/node-waves/waves.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/demo.js"></script>
        <script src="js/add-new-ad.js" type="text/javascript"></script>


        <script src="tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: "#description",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });


        </script>
    </body>

</html>






public function delete() {

$this->deletePhotos();

$ATTRACTION = new Attraction(NULL);

unlink(Helper::getSitePath() . "upload/attraction/" . $ATTRACTION->image_name);

$query = 'DELETE FROM `attraction` WHERE id="' . $this->id . '"';

$db = new Database();

return $db->readQuery($query);
}

public function deletePhotos() {

$ATTRACTION_PHOTO = new AttractionPhoto(NULL);

$allPhotos = $ATTRACTION_PHOTO->getAttractionPhotosById($this->id);


foreach ($allPhotos as $photo) {

$ATTRACTION_PHOTO->id = $photo["id"];

$ATTRACTION_PHOTO->delete();
}
}