import Vue from 'vue';

import { debounce } from './utils'

import HeaderComponent from './components/Header';
import TabsComponent from './components/Tabs';
import ArticleComponent from './components/Article';
import AccordionComponent from './components/Accordion';
import ModalComponent from './components/Modal';
import ContactForm from './components/Form';

const vm = new Vue({
  el: '#app',
  data: {
    hasWebp: false,
    bodyFixed: false,
    prevScroll: 0,
    screenWidth: window.innerWidth,
    formShow: false,
  },
  methods: {
    supportsWebp() {
      var elem = document.createElement('canvas');
  
      if (!!(elem.getContext && elem.getContext('2d'))) {
          return elem.toDataURL('image/webp').indexOf('data:image/webp') == 0;
      }

      return false;
    },
    fixBody() {
      !this.bodyFixed && (this.prevScroll = window.pageYOffset)


      if (this.bodyFixed) {
        this.bodyFixed = false;

        window.scrollTo(0, this.prevScroll)
        document.body.classList.toggle('js-modal-open', this.bodyFixed)
      } else {
        this.bodyFixed = true
        
        setTimeout(() => {
          document.body.classList.toggle('js-modal-open', this.bodyFixed)
        }, 300)
      }
    },
    handleResize() {
      this.screenWidth = window.innerWidth;
    },
  },
  components: {
    HeaderComponent,
    TabsComponent,
    ArticleComponent,
    AccordionComponent,
    ModalComponent,
    ContactForm
  },
  mounted() {
    this.hasWebp = this.supportsWebp();
    document.body.classList.toggle('has-webp', this.hasWebp)

    window.addEventListener('resize', debounce(this.handleResize, 250), { passive: true })
  },
})