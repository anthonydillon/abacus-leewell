<?php

/**
 * Homepage Template
 *
 *
 * @file           homepage.php
 * @package        Abacus Leewell
 * @author         Anthony Diilon
 * @version        Release: 0.1
 */
 /* Template Name: Home */

get_header(); ?>

    <div class="wrapper">
        <div class="row row-hero no-border">
            <div class="inner-wrapper">
                <h1>Coming soon <br />a brand new <br />Abacus Leewell website</h1>
            </div>
        </div>
        <div class="row clouds-top no-border"></div>

        <div class="row no-border">
            <div class="inner-wrapper">
                <div itemscope itemtype="http://schema.org/ContactPoint" class="main-contact align-center">
                    <div itemscope itemtype="http://schema.org/PostalAddress" class="clearfix">
                        <span itemprop="streetAddress" class="main-contact__item">30B High Street</span>
                        <span itemprop="addressLocality" class="main-contact__item">Langford</span>
                        <span itemprop="addressLocality" class="main-contact__item">Biggleswade</span>
                        <span itemprop="addressRegion" class="main-contact__item">Beds</span>
                        <span itemprop="postalCode" class="main-contact__item--last">SG18 9RR</span>
                    </div>
                    <span itemprop="telephone" class="main-contact__item"><span>T:</span> 01462 700229</span>
                    <span itemprop="faxNumber" class="main-contact__item"><span>F:</span> 01462 701291</span>
                    <span itemprop="email" class="main-contact__item--last">sales@abacus-leewell.co.uk</span>
                </div>
            </div>
        </div>

        <div class="clouds-bottom"></div>
    </div>

<?php get_footer(); ?>
