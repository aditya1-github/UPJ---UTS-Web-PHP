 <!-- Portfolio Grid Section -->
 <section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Portfolio</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">

        <?php
            $query = mysqli_query($conn, $queryProjectlist);
            while($data = mysqli_fetch_array($query)){
        ?>
                <div class="col-sm-4 portfolio-item">
                    <a href='<?=myfunction() ?>' class="portfolioModal portfolio-link" data-toggle="modal" data-id="<?php echo $data['id']; ?>">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $data['screenshoot_project']; ?>" class="img-responsive" alt="">
                    </a>
                </div>
        <?php
            }
        ?>

        </div>
    </div>
</section>

<a href='portfolio.php?hello=true' class="portfolio-link" data-toggle="modal">xyz qw </a>

<?php


    function myfunction()
    {   
        echo "#portfolioModal";

        // $query = mysqli_query($conn, $queryProjectDetail);
        // while($data = mysqli_fetch_array($query)){
        //     //feed var
        //      $title = $data['title_project'];
        //     // $desc = $data['desc_project'];
        //     // $client = $data['client_project'];
        //     // $date = $data['date_project'];
        //     // $service = $data['service_project'];
        //     break;
        // }
    }

?>


<div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>asa</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
