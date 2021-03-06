<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= bloginfo(template_url);?>/styles/reset.css">
    <link rel="stylesheet" href="<?= bloginfo(template_url);?>/styles/test.css">
    <link rel="stylesheet" href="<?= bloginfo(template_url);?>/styles/media.css">

</head>
<body>
    <div class="test">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <label class="logo" for="logo">logo</label>
                    <label for="main" class="ham">
                        <span class="ham-title">menu</span>
                        <div class="lines">
                            <div></div>
                            <div></div>
                        </div>
                    </label>
                </div>
                <div class="col-md-5 col-lg-4 d-flex align-items-center justify-content-center">
                    <?php get_template_part('components/contactFormMail'); ?>
                </div>
                <div class="col-md-7 col-lg-8">
                    <div class="image">
                        <img src="<?= bloginfo(template_url);?>/assets/images/image3.png" alt="image3">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-6 col-lg-1 col-contact">
                            <div class="contacts left">
                                <div><i class="fas fa-map-marker-alt"></i></div>
                                <div class="pt-3"><i class="fas fa-phone"></i></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-10 col-nav-menu">
                            <?php get_template_part('components/navMenu'); ?>
                        </div>
                        <div class="col-6 col-lg-1 col-contact">
                            <div class="contacts">
                                <div><i class="fab fa-instagram"></i></div>
                                <div class="pt-3"><i class="fab fa-facebook-f"></i></div>
                                <div class="pt-3"><i class="fab fa-twitter"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>