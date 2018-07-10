<?php
require 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
                include 'header.php';
                 include 'check_if_added.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>"Welcome to our Lifestyle Store!"</h1>
                <p>            We have the best Cameras, Watches and Shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="http://tse4.mm.bing.net/th?id=OIP.-MIgcUJwtZBVLS7w59a61wEsEk&w=224&h=218&c=7&qlt=90&o=4&pid=1.7" alt="Responsive image">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price:Rs.36000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else{
                            //we have created a function to check whether this particular product is added to cart or not.
                            if(check_if_added_to_cart(1)){//this is same as if(check_if_added_to_cart !=0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }else{
                                ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                        }
                        }
                        ?>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="http://tse2.mm.bing.net/th?id=OIP.WqL6vk8m_wOY0vdrWHF6TwEsEJ&w=223&h=198&c=7&qlt=90&o=4&pid=1.7" alt="Responsive image">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs.40000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else{
                            //we have created a function to check whether this particular product is added to cart or not.
                            if(check_if_added_to_cart(1)){//this is same as if(check_if_added_to_cart !=0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }else{
                                ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                        }
                        }
                        ?>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="http://tse2.mm.bing.net/th?id=OIP.C9LfYJmiRsdmFZcAxLMKygEsEI&w=240&h=212&c=7&qlt=90&o=4&pid=1.7" alt="Responsive image">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs.50000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else{
                            //we have created a function to check whether this particular product is added to cart or not.
                            if(check_if_added_to_cart(1)){//this is same as if(check_if_added_to_cart !=0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }else{
                                ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                        }
                        }
                        ?>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="http://tse3.mm.bing.net/th?id=OIP.HXCXcQO_Gzd406njP14sAAEsEs&w=216&h=216&c=7&qlt=90&o=4&pid=1.7" alt="Responsive image">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price:Rs.80000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else{
                            //we have created a function to check whether this particular product is added to cart or not.
                            if(check_if_added_to_cart(1)){//this is same as if(check_if_added_to_cart !=0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }else{
                                ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                        }
                        }
                        ?>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                </div>
            </div>
            </div>
            <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="http://tse1.mm.bing.net/th?id=OIP.te65l1oMjIxH1dCcHhduWAEgEs&w=191&h=198&c=7&qlt=90&o=4&pid=1.7" alt="Responsive image">
                    <div class="caption">
                        <h3>Titan Model#301</h3>
                        <p>Price:Rs.13000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else{
                            //we have created a function to check whether this particular product is added to cart or not.
                            if(check_if_added_to_cart(1)){//this is same as if(check_if_added_to_cart !=0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }else{
                                ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                        }
                        }
                        ?>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                </div>
            </div>
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="data:image/jpeg;base64,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" alt="Responsive image">
                    <div class="caption">
                        <h3>Titan Model#201</h3>
                        <p>Price:Rs.30000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else{
                            //we have created a function to check whether this particular product is added to cart or not.
                            if(check_if_added_to_cart(1)){//this is same as if(check_if_added_to_cart !=0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }else{
                                ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                        }
                        }
                        ?>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                </div>
            </div>
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="http://tse4.mm.bing.net/th?id=OIP.qgcCE6cvlKmJtqemcx8oiAEsEs&w=211&h=211&c=7&qlt=90&o=4&pid=1.7" alt="Responsive image">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price:Rs.8000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else{
                            //we have created a function to check whether this particular product is added to cart or not.
                            if(check_if_added_to_cart(1)){//this is same as if(check_if_added_to_cart !=0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }else{
                                ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                        }
                        }
                        ?>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                </div>
            </div>
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="data:image/jpeg;base64,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" alt="Responsive image">
                    <div class="caption">
                        <h3>Faber Luba#111</h3>
                        <p>Price:Rs.18000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else{
                            //we have created a function to check whether this particular product is added to cart or not.
                            if(check_if_added_to_cart(1)){//this is same as if(check_if_added_to_cart !=0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }else{
                                ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                        }
                        }
                        ?>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                </div>
                </div>
        </div>
           <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="data:image/jpeg;base64,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" alt="Responsive image">
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>Price:Rs.800.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else{
                            //we have created a function to check whether this particular product is added to cart or not.
                            if(check_if_added_to_cart(1)){//this is same as if(check_if_added_to_cart !=0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }else{
                                ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                        }
                        }
                        ?>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                </div>
            </div>
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="http://tse3.mm.bing.net/th?id=OIP.FFYMPcgTq1UO-_ktPJbhLwD6Es&w=160&h=192&c=7&qlt=90&o=4&pid=1.7" alt="Responsive image">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Price:Rs.1000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else{
                            //we have created a function to check whether this particular product is added to cart or not.
                            if(check_if_added_to_cart(1)){//this is same as if(check_if_added_to_cart !=0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }else{
                                ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                        }
                        }
                        ?>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                </div>
            </div>
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="http://tse4.mm.bing.net/th?id=OIP.xkipVbDid4RQKTahFOKh7gD3Es&w=168&h=204&c=7&qlt=90&o=4&pid=1.7" alt="Responsive image">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price:Rs.1500.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else{
                            //we have created a function to check whether this particular product is added to cart or not.
                            if(check_if_added_to_cart(1)){//this is same as if(check_if_added_to_cart !=0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }else{
                                ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                        }
                        }
                        ?>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                </div>
            </div>
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="http://tse2.mm.bing.net/th?id=OIP.RKs13VCHGzuvVEw4OvnpRwD6D6&w=192&h=204&c=7&qlt=90&o=4&pid=1.7" alt="Responsive image">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price:Rs.</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else{
                            //we have created a function to check whether this particular product is added to cart or not.
                            if(check_if_added_to_cart(1)){//this is same as if(check_if_added_to_cart !=0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }else{
                                ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                        }
                        }
                        ?>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                </div>
            </div>
           </div>
        </div>
        <footer>
                        <div class="container">
                            <center>Copyright  Lifestyle Store.All Rights Reserved | Contact Us: +91 90000 00000</center>
                        </div>
                    </footer>
    </body>
</html>
