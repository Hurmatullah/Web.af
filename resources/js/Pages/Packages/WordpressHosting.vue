<template>
  <div>
    <headers></headers>
    <!-- ***** SLIDER ***** -->
    <div class="top-header item5 overlay">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="wrapper">
              <h1 class="heading">WordPress Hosting</h1>
              <hr class="border border-white w-3/5" />
              <h3 class="subheading font-bold">
                Our designed platform for WordPress is fine-tuned to deliver superior performance, security, and provide best-in-class hosting.<br />
                <span class="text-justify">
                  WordPress is the world’s most popular website building tool, offers a powerful content management platform that you should not miss. meanwhile, It gives you access to the thousands of free themes and plugins that help simplify the design process and allow you to add powerful features with just a few clicks.
                </span>
                <span class="text-justify">
                  Web.af provides one of the fastest WordPress hosting solutions out there in the marketplace
                </span>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** FEATURES ***** -->
    <section id="scroll" class="history-section feat01 sec-normal sec-bg2 motpath">
      <div class="container">
        <div class="sec-main sec-bg1">
          <div class="row">
            <div class="col-md-12 col-lg-5">
              <div class="info-content">
                <h4>Remote Daily Backups</h4>
                <p>But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will.</p>
              </div>
              <a href="" class="btn btn-default-yellow-fill mt-3">Backup now</a>
            </div>
            <div class="col-md-12 col-lg-6 offset-lg-1 backups anima wow animated fadeInUp fast second">
              <img class="svg" src="patterns/backups.svg" alt="backups" />
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-md-12 col-lg-5">
              <div class="info-content">
                <h4>24/7/365 Monitoring</h4>
                <p>But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will.</p>
              </div>
              <a href="" class="btn btn-default-yellow-fill mt-3">Learn more</a>
            </div>
            <div class="col-md-12 col-lg-6 offset-lg-1 backups anima wow animated fadeInUp fast second">
              <img class="svg" src="patterns/monitoring.svg" alt="monitoring 24/7/365" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** WHY CHOOSE ANTLER ***** -->
    <section class="services sec-normal sec-bg3 cpupath-w">
      <div class="container">
        <div class="service-wrap">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="section-heading text-white">Features of Wordpress Hosting</h2>
              <!-- <p class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p> -->
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="service-section">
                <img class="svg" src="fonts/svg/select.svg" alt="" />
                <div class="title">Pre-installed & Automatic updates</div>
                <p class="subtitle">
                  Quickly setup your WordPress sites with automatic WordPress updates to keep your websites secure.
                </p>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="service-section">
                <img class="svg" src="fonts/svg/speed.svg" alt="" />
                <div class="title">WordPress Managed Services</div>
                <p class="subtitle">
                  Save your time and effort to focus on your core business while we are dealing with the technical details.
                </p>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="service-section">
                <div class="plans badge feat bg-pink">Free</div>
                <img class="svg" src="fonts/svg/inverse.svg" alt="" />
                <div class="title">Daily Security Check-up</div>
                <p class="subtitle">
                  Enjoy peace of mind from security threats to your website.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** TEAM ***** -->
    <section class="sec-normal sec-grad-yellow-to-grey-left">
      <img class="path-left" src="patterns/motpath.svg" alt="" />
    </section>
    <footers></footers>
  </div>
</template>

<script>
import headers from '../Layouts/Headers/headers'
import footers from '../Layouts/Footers/footers'
export default {
  components: {
    headers,
    footers,
  },
}
</script>
