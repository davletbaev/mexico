import Vue from 'vue'
import VueAwesomeSwiper from 'vue-awesome-swiper'
import objectFitImages from 'object-fit-images';

import { Accordion, Article, Header, FormRequest, FormPricing, Modal, Tabs } from './components'
import { SmoothScroll } from './mixins'
import { debounce } from './utils'

Vue.use(VueAwesomeSwiper);

const vm = new Vue({
  el: '#app',
  data: {
    hasWebp: false,
    bodyFixed: false,
    prevScroll: 0,
    screenWidth: window.innerWidth,
    selectedTour: null,
    modals: {
      form: false,
      video: false
    },
    referrer: null,
    videoStatus: 'paused',
    swiperOptions: {
      spaceBetween: 100,
      speed: 500,
      pagination: {
        el: '.swiper-pagination',
        type: 'fraction'
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      allowTouchMove: false
    }
  },
  methods: {
    supportsWebp() {
      var elem = document.createElement('canvas');
  
      if (!!(elem.getContext && elem.getContext('2d'))) {
          return elem.toDataURL('image/webp').indexOf('data:image/webp') == 0;
      }

      return false;
    },
    fixBody(fix, withHack = true) {
      !this.bodyFixed && (this.prevScroll = window.pageYOffset)


      if (fix || this.bodyFixed) {
        this.bodyFixed = false;

        window.scrollTo(0, this.prevScroll)
        document.body.classList.toggle('js-modal-open', this.bodyFixed)
        withHack && document.body.classList.toggle('js-ios-hack', this.bodyFixed)
      } else {
        this.bodyFixed = true
        
        setTimeout(() => {
          document.body.classList.toggle('js-modal-open', this.bodyFixed)
          withHack && document.body.classList.toggle('js-ios-hack', this.bodyFixed)
        }, 300)
      }
    },
    playVideo() {
      const video = this.$refs.video;

      if (video.paused) {
        video.play()
        video.controls = true
        this.videoStatus = 'playing'
      }

    },
    toggleModal(modal, referrer) {
      if (!referrer) this.referrer = null
      this.referrer = referrer
      this.modals[modal] = !this.modals[modal]
      this.fixBody(null, false)
    },
    handleResize() {
      this.screenWidth = window.innerWidth
    },
    handlePricingForm(formData) {
      this.selectedTour = formData
      this.toggleModal('form', 'pricing')
    },
    aviasalesInit() {
      let scriptEl = document.createElement('script');
      scriptEl.setAttribute('src', '//aviasales.energytravel.pro/iframe.js');
      scriptEl.setAttribute('charset', 'utf-8');
      scriptEl.setAttribute('type', 'text/javascript');
      this.$refs.aviasales.appendChild(scriptEl);
    }
  },
  mixins: [
    SmoothScroll
  ],
  components: {
    HeaderComponent: Header,
    TabsComponent: Tabs,
    ArticleComponent: Article,
    AccordionComponent: Accordion,
    ModalComponent: Modal
  },
  mounted() {
    objectFitImages();
    this.hasWebp = this.supportsWebp();
    document.body.classList.toggle('has-webp', this.hasWebp)
    window.addEventListener('resize', debounce(this.handleResize, 250), { passive: true })

    this.aviasalesInit();
  },
})