<template>
  <div>
    <headers></headers>
    <section class="circle-section sec-normal sec-bg1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 text-left">
            <h2 class="section-heading">Our Statistics</h2>
            <p class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt consectetur adipiscing.</p>
            <a href="" class="btn btn-default-yellow-fill mt-5">Learn more</a>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-8 text-left">
            <div class="col-sm-12 col-md-4 col-lg-4 float-left">
              <div class="skill-section">
                <div class="circle-wrapper">
                  <div class="circle-entry clearfix">
                    <div class="circle center-block color-dark-2" data-startdegree="0" data-dimension="180" data-text="<strong class='number'>19.322</strong><div class='title-round'>Clients</div>" data-width="5" data-fontsize="17" data-percent="90" data-fgcolor="#808080" data-bgcolor="transparent" data-bordersize="2"></div>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 float-left">
              <div class="skill-section">
                <div class="circle-wrapper">
                  <div class="circle-entry clearfix">
                    <div class="circle center-block color-dark-2" data-startdegree="0" data-dimension="180" data-text="<strong class='number'>9.510</strong><div class='title-round'>Equipment</div>" data-width="5" data-fontsize="17" data-percent="65" data-fgcolor="#808080" data-bgcolor="transparent" data-bordersize="2"></div>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 float-left">
              <div class="skill-section">
                <div class="circle-wrapper">
                  <div class="circle-entry clearfix">
                    <div class="circle center-block color-dark-2" data-startdegree="0" data-dimension="180" data-text="<strong class='number'>1231</strong><div class='title-round'>Projects</div>" data-width="5" data-fontsize="17" data-percent="45" data-fgcolor="#808080" data-bgcolor="transparent" data-bordersize="2"></div>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
      footers
  },}
</script>
