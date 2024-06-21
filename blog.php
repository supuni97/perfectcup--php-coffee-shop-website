<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perfect Cup - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Perfect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFFEE
                        <br>
                        <small>OCTOBER 13, 2023</small>
                    </h2>
                    <p>Start your morning off with this great recipe for hot coffee with coconut oil and butter.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH COFFEE
                        <br>
                        <small>SEPTEMBER, 2023</small>
                    </h2>
                    <p>Take the edge off with a Fresh hot cup of coffee made with Irish whiskey and Irish Cream.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>FROZEN CARAMEL LATTE
                        <br>
                        <small>JULY 18, 2023</small>
                    </h2>
                    <p>Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of day.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    <!-- Modal 1 -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Coconut Oil Coffee</h4>
                </div>
                <div class="modal-body">
                    <h3>Ingredients:</h3>
                    <ul>
                        <li>1 cup brewed hot coffee</li>
                        <li>1 tablespoon coconut oil</li>
                        <li>1 tablespoon unsalted butter (optional)</li>
                        <li>1 teaspoon vanilla extract (optional)</li>
                        <li>Sweetener to taste (optional)</li>
                    </ul>
                    <h3>Instructions:</h3>
                    <ol>
                        <li>Brew your favorite coffee as you normally would.</li>
                        <li>In a blender, combine the hot coffee, coconut oil, and butter if using.</li>
                        <li>Blend on high for 20-30 seconds until frothy and well mixed.</li>
                        <li>Pour into a mug, add vanilla extract and sweetener if desired, and enjoy!</li>
                    </ol>
                    <p><strong>Tip:</strong> This energizing drink is perfect for a morning boost, providing healthy fats and a creamy texture.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal 2 -->
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Irish Coffee</h4>
                </div>
                <div class="modal-body">
                    <h3>Ingredients:</h3>
                    <ul>
                        <li>1 cup hot brewed coffee</li>
                        <li>1 tablespoon brown sugar</li>
                        <li>1 1/2 ounces Irish whiskey</li>
                        <li>Fresh whipped cream</li>
                    </ul>
                    <h3>Instructions:</h3>
                    <ol>
                        <li>Brew a strong cup of coffee.</li>
                        <li>Pour the coffee into a warmed mug and stir in the brown sugar until dissolved.</li>
                        <li>Add the Irish whiskey and stir to combine.</li>
                        <li>Top with a generous layer of freshly whipped cream by gently pouring it over the back of a spoon to float on top.</li>
                        <li>Serve immediately and enjoy the perfect balance of warmth and richness.</li>
                    </ol>
                    <p><strong>Tip:</strong> For an authentic experience, preheat your glass or mug by filling it with hot water for a few seconds before preparing your Irish coffee.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal 3 -->
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Frozen Caramel Latte</h4>
                </div>
                <div class="modal-body">
                    <h3>Ingredients:</h3>
                    <ul>
                        <li>1 cup strong brewed coffee, cooled</li>
                        <li>1/2 cup milk (or milk alternative)</li>
                        <li>2 tablespoons caramel sauce</li>
                        <li>1-2 tablespoons sugar (optional)</li>
                        <li>1 cup ice cubes</li>
                        <li>Whipped cream and extra caramel sauce for topping</li>
                    </ul>
                    <h3>Instructions:</h3>
                    <ol>
                        <li>Brew a strong cup of coffee and let it cool to room temperature.</li>
                        <li>In a blender, combine the cooled coffee, milk, caramel sauce, sugar, and ice cubes.</li>
                        <li>Blend until smooth and frothy.</li>
                        <li>Pour into a tall glass and top with whipped cream and a drizzle of caramel sauce.</li>
                        <li>Enjoy this refreshing, sweet treat perfect for a hot day.</li>
                    </ol>
                    <p><strong>Tip:</strong> Adjust the sweetness to your preference by adding more or less sugar and caramel sauce. For a richer flavor, use a dark roast coffee.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Perfect Cup 2024</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>