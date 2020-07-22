// import external dependencies
import 'jquery';
import 'slick-carousel/slick/slick.min.js';
import 'packery/dist/packery.pkgd.js';
import 'imagesloaded/imagesloaded.pkgd.js'
import 'video.js/dist/video.min.js'

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import category from './routes/category';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  category,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
