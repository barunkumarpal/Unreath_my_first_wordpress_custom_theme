<?php get_header();?>

<div class="container">
    <div class="row " style="min-height: 60vh; ">
        <div class="col-md-3"></div>
        <div class="col-md-6 justify-content-center align-self-center text-center">
            <h1 class="text-danger">404 error!</h1>
            <h4 class="text-secondary m-4 p-4">Oops! Page could not be found.</h4>
            <a href="<?php echo site_url();?>" class="btn btn-primary text-white ">Go to Homepage</a>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php get_footer();?>