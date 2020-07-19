<?php get_header(); ?>
    <!-- ==========      
        Hero
     ===========-->
    <div class="banner">
    <div class="bannerBlind"></div>
    <div class="bannerContent">
        <div class="bannerHead">Awesome's Borderless</div>
        <div class="bannerSub">catering to the needs of innovators in non-obvious commercial cities.</div>
        <a href="/"><button class="subBtn">learn more</button></a>
        </div>
    </div>
    <!-- ==========      
      PARTNERS
     ===========-->
     <div class="partners">
     <h4 class="divider">supported by</h4>
     <div class="partnersContent">
        <div class="partnerImage">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner.png" />
        </div>
        <div class="partnerImage">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner.png" />
        </div>
        <div class="partnerImage">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner.png" />
        </div>
        <div class="partnerImage">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner.png" />
        </div>
        <div class="partnerImage">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner.png" />
        </div>
     </div>
     <!-- <a href="#"><button class="partnersButton">see all partners</button></a> -->
     </div>
     <!-- ==========      
      JOIN OUR COMMUNITY
     ===========-->
     <div class="section d-flex align-items-center flex-column">
        <h2 class="sectionLabel">join our community</h2>
        <div class="row">
            <!--  -->
            <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center flex-column text-center mb-5 mb-lg-0">
                <div class="homeCommunityImage mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/startups-icon.png" />
                </div>
                <h3 class="title green">startups</h3>
                <p class="grey">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <div class="d-flex justify-content-center">
                    <a href="/community" class="mainBtn">learn more</a>
                </div>
            </div>
            <!--  -->
             <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center flex-column text-center mb-5 mb-lg-0">
                <div class="homeCommunityImage mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/hub-icon.png" />
                </div>
                <h3 class="title green">hubs</h3>
                <p class="grey">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <div class="d-flex justify-content-center">
                    <a href="/community" class="mainBtn">learn more</a>
                </div>
            </div>
             <!--  -->
             <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center flex-column text-center mb-5 mb-lg-0">
                <div class="homeCommunityImage mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/angel-icon.png" />
                </div>
                <h3 class="title green">angel network</h3>
                <p class="grey">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <div class="d-flex justify-content-center">
                    <a href="/community" class="mainBtn">learn more</a>
                </div>
            </div>
             <!--  -->
             <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center flex-column text-center mb-5 mb-lg-0">
                <div class="homeCommunityImage mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/event-icon.png" />
                </div>
                <h3 class="title green">events</h3>
                <p class="grey">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <div class="d-flex justify-content-center">
                    <a href="/event" class="mainBtn">learn more</a>
                </div>
            </div>
            <!--  -->
        </div>
     </div>
      <!-- ==========      
      UNIVERSE
     ===========-->
     <div class="section universe d-flex flex-column align-items-center">
        <h1 class="sectionLabel">11 states, 13 cities, 120,000+km2 and over 60 million people.</h1>
        <div class="d-flex">
            <a href="#" class="mainBtn">explore our universe</a>
        </div>
     </div>
     <!-- ==========      
      CONNECT WITH MENTORS
     ===========-->
     <?php get_template_part('includes/mentors-feed');?>
     <!-- ==========      
      NEWSLETTER
     ===========-->
     <?php get_template_part('includes/newsletter');?>
     <!-- ==========      
      UPDATES
     ===========-->
     <?php get_template_part('includes/updates') ?>
    <!-- ==========      
      FOOTER
     ===========-->
    <?php get_footer(); ?>