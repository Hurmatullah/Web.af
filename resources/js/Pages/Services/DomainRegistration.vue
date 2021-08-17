<template>
  <div>
    <headers></headers>
    <div class="top-header item6 overlay">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="wrapper">
              <h1 class="heading">Filter Perfect Domain Name</h1>
              <h3 class="subheading mb-4">Registering domains and searching for a domain are the first steps towards creating a website on the internet, web.af provides all types of domain and extensions as there are 100 different domain extensions that you can choose from</h3>
              <form class="mb-5" action="http://inebur.com/whmcs/domainchecker.php?systpl=antler" method="post">
                <div class="general-input w-50">
                  <input type="text" name="domain" placeholder="Get your next domain name here" class="fill-input" />
                  <input type="submit" value="Search" class="btn btn-default-yellow-fill" />
                </div>
              </form>
              <a class="btn btn-default-pink-fill cd-filter-trigger wow animated shake delay-2s"><i class="fa fa-filter"></i> Show Filter</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** CONTROLS ***** -->
    <section class="cd-main-content mb-80 sec-up wow animated fadeInUp fast">
      <div class="cd-filter">
        <form>
          <div class="container">
            <div class="sec-main pb-5 sec-bg1">
              <div class="plans badge feat bg-pink">filter</div>
              <div class="row">
                <a href="#0" class="cd-close"><i class="fas fa-long-arrow-alt-left"></i></a>
                <div class="col-md-6">
                  <div class="cd-filter-block">
                    <h4>Highlight</h4>
                    <ul class="radio-group radios-filter cd-filter-content list">
                      <li>
                        <input value="all" type="radio" name="radioButton" id="radio1" checked />
                        <label class="radio-label" for="radio1">All Domains</label>
                      </li>
                      <li>
                        <input value=".sale" type="radio" name="radioButton" id="radio2" />
                        <label class="radio-label" for="radio2">Sales</label>
                      </li>
                      <li>
                        <input value=".newest" type="radio" name="radioButton" id="radio3" />
                        <label class="radio-label" for="radio3">Newest</label>
                      </li>
                      <li>
                        <input value=".popular" type="radio" name="radioButton" id="radio4" />
                        <label class="radio-label" for="radio4">Popular</label>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="cd-filter-block checkbox-group">
                    <h4>Types</h4>
                    <ul class="cd-filter-content cd-filters list">
                      <li>
                        <input class="filter" value=".gtld" type="checkbox" id="checkbox1" />
                        <label class="checkbox-label" for="checkbox1">gtld (Generic)</label>
                      </li>
                      <li>
                        <input class="filter" value=".cctld" type="checkbox" id="checkbox2" />
                        <label class="checkbox-label" for="checkbox2">cctld (Country)</label>
                      </li>
                      <li>
                        <input class="filter" value=".ngtld" type="checkbox" id="checkbox3" />
                        <label class="checkbox-label" for="checkbox3">ngtld (News)</label>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="cd-filter-block">
                    <div class="cd-filter-content cd-select">
                      <select class="select-filter">
                        <option value="all">Select Category</option>
                        <option value=".business">Business</option>
                        <option value=".commerce">Commerce</option>
                        <option value=".social">Social</option>
                        <option value=".health">Health</option>
                        <option value=".educations">Education</option>
                        <option value=".technology">Technology</option>
                        <option value=".others">Others</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="cd-filter-block checkbox-group">
                    <input type="text" class="input" data-ref="input-search" placeholder="Enter a domain extension (.com)" />
                  </div>
                </div>
                <div class="range-disabled">
                  <input name="minSize" class="range-slider-input tooltip-parent" type="range" min="0" max="5" value="0" />
                  <input name="maxSize" class="range-slider-input tooltip-parent" type="range" min="0" max="5" value="5" />
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- ***** FILTER PLANS ***** -->
    <div class="mixcontainer sec-normal sec-bg2 motpath" data-ref="container">
      <div class="container ">
        <div class="pricing special">
          <div class="p-0 m-0">
            <div class="best-plans pricing">
              <div class="sec-main sec-bg1">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="table-responsive-lg">
                      <table class="table compare">
                        <thead>
                          <tr>
                            <td class="bb-pink pt-0 title ">Domain</td>
                            <td class="bb-pink pt-0 title">	USD/Year</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="mix ext gtld  popular others .com">
                            <td>
                              <div class="badge bg-grey mr-1">popular</div>
                              <span class="c-black">.com</span>
                            </td>
                            <td>$9.89</td>
                          </tr>
                          <tr class="mix ext gtld sale others  .info">
                            <td>
                              <span class="c-black">.net</span>
                            </td>
                            <td>$12.99</td>
                          </tr>
                          <tr class="mix ext ngtld newest health .hospital">
                            <td>
                              <span class="c-black">.org</span>
                            </td>
                            <td>$12.99</td>
                          </tr>
                          <tr class="mix ext gtld popular others .org">
                            <td>
                              <span class="c-black">.biz</span>
                            </td>
                            <td>$12.99</td>
                          </tr>
                          <tr class="mix ext gtld others .co.uk">
                            <td><span class="c-black">.in</span></td>
                            <td>$12.99</td>
                          </tr>
                          <tr class="mix ext ngtld newest health .healthcare">
                            <td>
                              <span class="c-black">.co</span>
                            </td>
                            <td>$12.99</td>
                          </tr>
                          <tr class="mix ext ngtld sale technology .blog">
                            <td>
                              <span class="c-black">.news</span>
                            </td>
                            <td>$12.99</td>
                          </tr>
                          <tr class="mix ext ngtld newest commerce .banque">
                            <td>
                              <span class="c-black">.info</span>
                            </td>
                            <td>$12.99</td>
                          </tr>
                          <tr class="mix ext cctld popular .eu">
                            <td>
                              <span class="c-black">.tech</span>
                            </td>
                            <td>$12.99</td>
                          </tr>
                          <tr class="mix ext cctld popular .pt">
                            <td>
                              <span class="c-black">.tv</span>
                            </td>
                            <td>$29.99</td>
                          </tr>
                          <tr class="mix ext ngtld newest business .company">
                            <td><span class="c-black">.ws</span></td>
                            <td>$21.99</td>
                          </tr>
                          <tr class="mix ext ngtld newest social .church">
                            <td><span class="c-black">.af</span></td>
                            <td>$29.99</td>
                          </tr>
                          <tr class="mix ext ngtld sale social .democrat">
                            <td>
                              <span class="c-black">.com.af</span>
                            </td>
                            <td>$24.99</td>
                          </tr>
                          <tr class="mix ext ngtld popular educations .academy">
                            <td><span class="c-black">.net.af</span></td>
                            <td>$24.99</td>
                          </tr>
                          <tr class="mix ext ngtld sale health .dentist">
                            <td>
                              <span class="c-black">.org.af</span>
                            </td>
                            <td>$24.99</td>
                          </tr>
                          <tr class="mix ext ngtld sale health .dentist">
                            <td>
                              <span class="c-black">.mil.af</span>
                            </td>
                            <td>$24.99</td>
                          </tr>
                          <tr class="mix ext ngtld sale health .dentist">
                            <td>
                              <span class="c-black">.gov.af</span>
                            </td>
                            <td>$24.99</td>
                          </tr>
                          <tr class="mix ext ngtld sale health .dentist">
                            <td>
                              <span class="c-black">.edu.af</span>
                            </td>
                            <td>$24.99</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="cd-fail-message">" No items could be found matching the criteria "</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** FEATURES ***** -->
    <section id="scroll" class="history-section feat01 sec-normal">
      <div class="container">
        <div class="randomline">
          <div class="bigline"></div>
          <div class="smallline"></div>
        </div>
        <div class="sec-main sec-bg1">
          <div class="row">
            <div class="col-md-12 col-lg-6 wow animated fadeInUp fast first">
              <img class="svg" src="patterns/domainmanage.svg" alt="domain management" />
            </div>
            <div class="col-md-12 col-lg-5 offset-lg-1">
              <div class="info-content">
                <h4>Simple Domain Management</h4>
                <p>But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will.</p>
              </div>
              <a href="" class="btn btn-default-yellow-fill mt-3">Learn more</a>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-md-12 col-lg-5">
              <div class="info-content">
                <h4>Automatic Domain Renewal</h4>
                <p>But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will.</p>
              </div>
              <a href="" class="btn btn-default-yellow-fill mt-3">Auto-Renewal</a>
            </div>
            <div class="col-md-12 col-lg-6 offset-lg-1 backups anima wow animated fadeInUp fast second">
              <img class="svg" src="patterns/domainrenewal.svg" alt="domain renewal" />
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-md-12 col-lg-6 wow animated fadeInUp fast third">
              <img class="svg" src="patterns/support.svg" alt="support 24/7/365" />
            </div>
            <div class="col-md-12 col-lg-5 offset-lg-1">
              <div class="info-content">
                <h4>Don't worry! We have support premium 24/7/365</h4>
                <p>But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will.</p>
              </div>
              <a href="" class="btn btn-default-yellow-fill mt-3">Get support</a>
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
    footers,
  },
}
</script>
