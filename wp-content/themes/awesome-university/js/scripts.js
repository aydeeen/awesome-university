// 3rd party packages from NPM
import $ from 'jquery';
import slick from 'slick-carousel';

// Our modules / classes
import MobileMenu from './modules/MobileMenu';
import HeroSlider from './modules/HeroSlider';

// Search
import Search from './modules/Search';

// My Notes
import MyNotes from './modules/MyNotes';

// Like 
import Like from './modules/Like';

// Instantiate a new object using our modules/classes
const mobileMenu = new MobileMenu();
const heroSlider = new HeroSlider();
const search = new Search();
const myNotes = new MyNotes();
const like = new Like();