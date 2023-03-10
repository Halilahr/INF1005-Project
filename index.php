<!DOCTYPE html>

<html lang="en">
    
    <?php
        include "head.inc.php";
    ?>
    
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="popup-img" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <img  id="popup-img" src="images" alt="Image">
            </div>
        </div>
    </div>
    
    <?php
        include "link.inc.php";
    ?>
 
    <?php
        include "nav.inc.php";
    ?>
        
    <header class="jumbotron text-center">
        <h1 class="display-4">Welcome to Up the Cakes!</h1>
        <h2>Home of The Best Cheesecakes</h2>
    </header>
       
        <main class="container">
            <section id="dogs">
                <h2>All About Dogs!</h2>
                <div class="row">
                    <article class="col-sm">
                        <h3>Poodles</h3>
                        <figure>
                            <img class="img-thumbnail popup" src="images/poodle_small.jpg" alt="Image"
                            title="View larger image...">
                        <figcaption>Poodle</figcaption>
                        </figure>
                        <p>
                            Poodles are a group of formal dog breeds, the Standard
                            Poodle, Miniature Poodle and Toy Poodle.
                        </p>
                    </article>
                    <article class="col-sm">
                        <h3>Chihuahua</h3>
                        <figure>
                            <img class="img-thumbnail popup" src="images/chihuahua_small.jpg" alt="Image"
                            title="View larger image...">
                        <figcaption>Chihuahua</figcaption>
                        </figure>
                        <p>
                            The Chihuahua is the smallest breed of dog, and is named
                            after the Mexican state of Chihuahua.
                        </p>
                    </article>
                </div>
            </section>
            <section id="cats">
                <h2>All About Cats!</h2>
                <div class="row">
                    <article class="col-sm">
                        <h3>Tabby</h3>
                        <figure>
                            <img class="img-thumbnail popup" src="images/tabby_small.jpg" alt="Image"
                            title="View larger image...">
                            <figcaption>Tabby</figcaption>
                        </figure>
                        <p>
                            A tabby is any domestic cat with an 'M' on its forehead,
                            stripes by its eyes and across its cheeks.
                        </p>
                    </article>
                    <article class="col-sm">
                        <h3>Calico</h3>
                        <figure>
                            <img class="img-thumbnail popup" src="images/calico_small.jpg" alt="Image"
                            title="View larger image...">
                            <figcaption>Calico</figcaption>
                        </figure>
                        <p>
                            A calico cat is a domestic cat with a coat that is
                            typically 25% to 75% white and has large orange and 
                            black patches.
                        </p>
                    </article>
                </div>
            </section>
        </main>  
        <?php
            include "footer.inc.php";
        ?>
</html>
