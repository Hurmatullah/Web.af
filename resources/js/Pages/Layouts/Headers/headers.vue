<template>
  <div>
    <div class="menu-wrap">
      <div class="nav-menu">
        <div class="container">
          <div class="row">
            <div class="col-2 col-md-2">
              <a href="index">
                <img class="svg logo-menu" src="img/logo.svg" alt="logo Antler" />
              </a>
            </div>
            <nav id="menu" class="col-10 col-md-10">
              <div class="navigation float-right">
                <button class="menu-toggle">
                  <span class="icon"></span>
                  <span class="icon"></span>
                  <span class="icon"></span>
                </button>
                <ul class="main-menu nav navbar-nav navbar-right">
                  <li class="menu-item mr-4 menu-item-has-children">
                    <a class="m-0 pr-1" href="#">Home</a>
                  </li>
                  <li class="menu-item menu-item-has-children mr-4">
                    <a class="m-0 pr-1 v-stroke" href="#" data-i18n="[html]header.services"></a>
                    <div class="sub-menu menu-large">
                      <div class="service-list">
                        <div class="service">
                          <img class="svg" src="fonts/svg/cloudfiber.svg" alt="Shared Hosting" />
                          <div class="media-body">
                            <inertia-link class="menu-item" :href="route('shared')" data-i18n="[html]submenu.hosting"></inertia-link>
                            <p>Sed ut perspiciatis unde omnis iste natus</p>
                          </div>
                        </div>
                        <div class="service">
                          <img class="svg" src="fonts/svg/reseller.svg" alt="Cloud Reseller" />
                          <div class="media-body">
                            <inertia-link class="menu-item" :href="route('reseller')" data-i18n="[html]submenu.reseller"></inertia-link>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                          </div>
                        </div>
                        <div class="service">
                          <img class="svg" src="fonts/svg/dedicated.svg" alt="Dedicated Server" />
                          <div class="media-body">
                            <inertia-link class="menu-item" :href="route('dedicated')" data-i18n="[html]submenu.dedicated"></inertia-link>
                            <div class="menu badge feat bg-pink"></div>
                            <p>But I must explain to you how all this</p>
                          </div>
                        </div>
                        <div class="service">
                          <img class="svg" src="fonts/svg/vps.svg" alt="Cloud VPS" />
                          <div class="media-body">
                            <inertia-link class="menu-item" :href="route('vps')" data-i18n="[html]submenu.vps"></inertia-link>
                            <div class="menu badge feat bg-grey">SSD</div>
                            <p>At vero eos et accusamus et iusto odio</p>
                          </div>
                        </div>
                        <div class="service">
                          <img class="svg" src="fonts/svg/wordpress.svg" alt="WordPress Hosting" />
                          <div class="media-body">
                            <inertia-link class="menu-item" :href="route('wordpress')" data-i18n="[html]submenu.wordpress"></inertia-link>
                            <p>On the other hand, we denounce with</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="menu-item menu-item-has-children">
                    <a class="v-stroke" href="#" data-i18n="[html]submenu.services"></a>
                    <ul class="sub-menu">
                      <li class="menu-item"><inertia-link class="menu-item" :href="route('domains-registration')" data-i18n="[html]submenu.domainregistration"></inertia-link></li>
                      <li class="menu-item"><inertia-link class="menu-item" :href="route('ssl-certificate')" data-i18n="[html]submenu.certificate"></inertia-link></li>
                      <!-- <inertia-link class="menu-item" :href="route('ssl')" data-i18n="[html]submenu.ssl"></inertia-link> -->
                      <!-- <li class="menu-item"><a href="email" data-i18n="[html]submenu.email"> </a></li>
                      <li class="menu-item"><a href="magento" data-i18n="[html]submenu.magento"> </a></li> -->
                      <li class="menu-item"><inertia-link class="menu-item" :href="route('gsuite')" data-i18n="[html]submenu.gsuite"></inertia-link></li>
                      <!-- <li class="menu-item"><inertia-link class="menu-item" :href="route('backup')" data-i18n="[html]submenu.backup"></inertia-link></li> -->
                    </ul>
                  </li>
                  <li class="menu-item menu-item-has-children menu-last">
                    <a class="v-stroke" href="#" data-i18n="[html]header.support"></a>
                    <div class="sub-menu megamenu">
                      <div class="container">
                        <div class="row">
                          <div class="service-list col-md-9">
                            <div class="row">
                              <div class="col-4 service">
                                <div class="media-left">
                                  <img class="svg" src="fonts/svg/bookmark.svg" alt="Knowledgebase" />
                                </div>
                                <div class="media-body">
                                  <a class="menu-item" href="knowledgebase-list" data-i18n="[html]submenu.knowlist"> </a>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                </div>
                              </div>
                              <div class="col-4 service">
                                <div class="media-left">
                                  <img class="svg" src="fonts/svg/book.svg" alt="Knowledgebase" />
                                </div>
                                <div class="media-body">
                                  <a class="menu-item" href="knowledgebase-article" data-i18n="[html]submenu.knowarticle"> </a>
                                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi</p>
                                </div>
                              </div>
                              <div class="col-4 service">
                                <div class="media-left">
                                  <img class="svg" src="fonts/svg/emailopen.svg" alt="Knowledgebase" />
                                </div>
                                <div class="media-body">
                                  <inertia-link class="menu-item" :href="route('contact')" data-i18n="[html]submenu.contact"></inertia-link>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                </div>
                              </div>
                              <div class="col-4 service">
                                <div class="media-left">
                                  <img class="svg" src="fonts/svg/compare.svg" alt="Knowledgebase" />
                                </div>
                                <div class="media-body">
                                  <a class="menu-item" href="legal" data-i18n="[html]submenu.legal"> </a>
                                  <div class="badge inside bg-grey ml-1">NEW</div>
                                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi</p>
                                </div>
                              </div>
                              <div class="col-4 service">
                                <div class="media-left">
                                  <img class="svg" src="fonts/svg/blog.svg" alt="Knowledgebase" />
                                </div>
                                <div class="media-body">
                                  <div>
                                    <a class="menu-item" href="blog" data-i18n="[html]submenu.blog"> </a>
                                    <div class="badge inside bg-pink ml-1">HOT</div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                </div>
                              </div>
                              <div class="col-4 service">
                                <div class="media-left">
                                  <img class="svg" src="fonts/svg/question.svg" alt="Knowledgebase" />
                                </div>
                                <div class="media-body">
                                  <a class="menu-item" href="faq" data-i18n="[html]submenu.faq"> </a>
                                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="start-offer col-md-3">
                            <div class="inner">
                              <div class="title mb-2">Support Premium</div>
                              <div class="inner-content"><span>Call us:</span> <b>+ (123) 1300-656-1046</b> HeadQuarters - No.01 - 399-0 Lorem Street City Melbourne</div>
                              <a href="contact" class="btn btn-default-yellow-fill mt-4">Contact</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="menu-item">
                    <a class="pr-0 mr-0" href="login">
                      <div class="btn btn-default-yellow-fill question" data-i18n="[html]header.login"><i class="fas fa-lock pr-1"></i></div
                    ></a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** NAV MENU MOBILE ****** -->
    <div class="menu-wrap mobile">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <a href="index"><img class="svg logo-menu" src="img/logo.svg" alt="logo Antler"/></a>
          </div>
          <div class="col-6">
            <nav class="nav-menu">
              <button id="nav-toggle" class="menu-toggle">
                <span class="icon"></span>
                <span class="icon"></span>
                <span class="icon"></span>
              </button>
              <ul class="main-menu">
                <li class="menu-item menu-item-has-children">
                  <a
                    >Home
                    <div class="badge badge-pill bg-purple">NEW</div></a
                  >
                  <ul class="sub-menu">
                    <li class="menu-item"><a href="index">Home Default</a></li>
                    <li class="menu-item">
                      <a href="homevideo">Home Video</a>
                      <div class="badge inside bg-pink">NEW</div>
                    </li>
                    <li class="menu-item">
                      <a href="homeimage">Home Image</a>
                      <div class="badge inside bg-pink">NEW</div>
                    </li>
                  </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                  <a
                    >Hosting
                    <div class="badge badge-pill bg-purple">PRO</div></a
                  >
                  <ul class="sub-menu">
                    <li class="menu-item"><inertia-link :href="route('shared')">Users</inertia-link></li>
                    <li class="menu-item"><a href="reseller">Cloud Reseller</a></li>
                    <li class="menu-item"><a href="dedicated">Dedicated Server</a></li>
                    <li class="menu-item"><a href="vps">Cloud VPS</a></li>
                    <li class="menu-item"><a href="wordpress">WordPress Hosting</a></li>
                    <li class="menu-item"><a href="domains">Domain Names</a></li>
                    <li class="menu-item"><a href="developer">Developer Hosting</a></li>
                  </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                  <a>Services</a>
                  <ul class="sub-menu">
                    <li class="menu-item">
                      <a href="emailsecurity">Email Security</a>
                      <div class="badge inside bg-purple">NEW</div>
                    </li>
                    <li class="menu-item"><a href="ssl">SSL Certificates</a></li>
                    <li class="menu-item"><a href="email">Enterprise Email</a></li>
                    <li class="menu-item"><a href="magento">Magento Pro</a></li>
                    <li class="menu-item">
                      <a href="gsuite">G Suite - Google</a>
                      <div class="badge inside bg-purple">NEW</div>
                    </li>
                    <li class="menu-item">
                      <a href="iptv">IPTV System</a>
                      <div class="badge inside bg-pink">NEW</div>
                    </li>
                    <li class="menu-item"><a href="ddos">DDoS Protection</a></li>
                    <li class="menu-item">
                      <a href="datacenter">Datacenter</a>
                      <div class="badge inside bg-grey">TOP</div>
                    </li>
                    <li class="menu-item"><a href="about">About Us</a></li>
                    <li class="menu-item"><a href="database">Database-as-a-Service</a></li>
                    <li class="menu-item"><a href="elements">Elements</a></li>
                    <li class="menu-item">
                      <a href="voip">Virtual Numbers</a>
                      <div class="badge inside bg-pink">NEW</div>
                    </li>
                    <li class="menu-item">
                      <a href="payments">Payment Methods</a>
                      <div class="badge inside bg-pink">NEW</div>
                    </li>
                    <li class="menu-item">
                      <a href="configurator">Configurator</a>
                      <div class="badge inside bg-grey">HOT</div>
                    </li>
                    <li class="menu-item"><a href="cart">Cart</a></li>
                    <li class="menu-item"><a href="checkout">Checkout</a></li>
                    <li class="menu-item"><a href="soon">Coming Soon</a></li>
                    <li class="menu-item"><a href="promos">Promotions</a> <i class="fas fa-tags c-pink ml-2"></i></li>
                  </ul>
                </li>
                <li class="menu-item menu-item-has-children menu-last">
                  <a>Support</a>
                  <ul class="sub-menu">
                    <li class="menu-item"><a href="knowledgebase-list">Knowlege List</a></li>
                    <li class="menu-item"><a href="knowledgebase-article">Knowlege Article</a></li>
                    <li class="menu-item"><a href="contact">Contact Us</a></li>
                    <li class="menu-item"><a href="legal">Legal</a></li>
                    <li class="menu-item"><a href="blog">Blog</a></li>
                    <li class="menu-item"><a href="faq">Faq</a></li>
                  </ul>
                </li>
                <li class="mt-4">
                  <a href="tel:+0000000000"><p class="c-grey">Phone: + (123) 1300-656-1046</p></a>
                  <a href="mailto:antler@mail.com"><p class="c-grey">Email: antler@mail.com</p></a>
                </li>
                <li>
                  <a href="login"><div class="btn btn-default-yellow-fill mt-3">CLIENT AREA</div></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** COLORS ****** -->
    <section>
      <ul class="color-scheme">
        <li class="pink"><a href="#" data-rel="pink" class="styleswitch"></a></li>
        <li class="blue"><a href="#" data-rel="blue" class="styleswitch"></a></li>
        <li class="green"><a href="#" data-rel="green" class="styleswitch"></a></li>
      </ul>
    </section>
    <!-- ***** TRANSLATION ****** -->
    <section id="drop-lng" class="btn-group btn-group-toggle toplang" data-toggle="buttons">
      <label data-lng="en-US" class="btn btn-secondary mb-2"> <input type="radio" name="options" id="option1" checked /> EN </label>
      <label data-lng="pt-PT" class="btn btn-secondary"> <input type="radio" name="options" id="option2" /> PT </label>
    </section>
  </div>
</template>

<script>
export default {}
</script>
