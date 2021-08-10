<template>
  <footer class="footer">
    <img class="logo-bg logo-footer" src="img/symbol.svg" alt="logo" />
    <div class="container">
      <div class="footer-top">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="heading">Hosting</div>
            <ul class="footer-menu">
              <li class="menu-item"><inertia-link :href="route('shared')">Shared Hosting</inertia-link></li>
              <li class="menu-item"><inertia-link :href="route('dedicated')">Dedicated Server</inertia-link></li>
              <li class="menu-item"><inertia-link :href="route('vps')">Cloud Virtual (VPS)</inertia-link></li>
              <li class="menu-item"><inertia-link :href="route('wordpress')">Wordpress Hosting</inertia-link></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="heading">Services</div>
            <ul class="footer-menu">
              <li class="menu-item"><inertia-link :href="route('domains-registration')">Domain Registration</inertia-link></li>
              <li class="menu-item"><inertia-link :href="route('ssl-certificate')">SSL Certificate</inertia-link></li>
              <li class="menu-item">Disk For Backup</li>
              <li class="menu-item"><inertia-link :href="route('gsuite')">G-Suite</inertia-link></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="heading">Company</div>
            <ul class="footer-menu">
              <li class="menu-item"><a href="about">About Us</a></li>
              <li class="menu-item"><a href="elements">Features</a></li>
              <li class="menu-item"><a href="blog">Blog</a></li>
              <li class="menu-item"><a href="legal">Legal</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3">
            <a><img class="svg logo-footer" src="img/logo.svg" alt="logo"/></a>
            <div class="copyrigh">©2019 Antler - All rights reserved</div>
            <div class="soc-icons">
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-google-plus-g"></i></a>
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="subcribe news">
      <div class="container">
        <div class="row">
          <form action="#" class="w-100">
            <div class="col-md-6 offset-md-3">
              <div class="general-input">
                <input type="email" name="email" placeholder="Enter your email address" class="fill-input" />
                <input type="submit" value="SUBSCRIBE" class="btn btn-default-yellow-fill" />
              </div>
            </div>
            <div class="col-md-6 offset-md-3 text-center pt-4">
              <p>Subscribe to our newsletter to receive news and updates</p>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <ul class="footer-menu">
              <li id="drop-lng" class="btn-group btn-group-toggle" data-toggle="buttons">
                <label data-lng="en-US" class="btn btn-secondary"> <input type="radio" name="options" id="option1" checked /> EN </label>
                <label data-lng="pt-PT" class="btn btn-secondary"> <input type="radio" name="options" id="option2" /> PT </label>
              </li>
              <li class="menu-item by c-grey ml-0">
                Hybrid Design With ♥ by
                <a href="http://inebur.com/" target="_blank">inebur</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="payment-list">
              <li><p>Payments We Accept</p></li>
              <li><i class="fab fa-cc-paypal"></i></li>
              <li><i class="fab fa-cc-visa"></i></li>
              <li><i class="fab fa-cc-mastercard"></i></li>
              <li><i class="fab fa-cc-apple-pay"></i></li>
              <li><i class="fab fa-cc-discover"></i></li>
              <li><i class="fab fa-cc-amazon-pay"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {}
</script>
