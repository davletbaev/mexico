import Vue from 'vue'
import VueAwesomeSwiper from 'vue-awesome-swiper'
import VueLazyload from 'vue-lazyload'
import objectFitImages from 'object-fit-images';

import { Accordion, Article, Header, Modal, Tabs } from './components'
import { SmoothScroll } from './mixins'
import { debounce } from './utils'

Vue.use(VueLazyload, {
  preLoad: 1.5,
  loading: 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMiAzMiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjMyIiBmaWxsPSJ3aGl0ZSI+CiAgPHBhdGggZD0iTTAgNCBMMCAyOCBMMzIgMjggTDMyIDQgeiBNNCAyNCBMMTAgMTAgTDE1IDE4IEwxOCAxNCBMMjQgMjR6IE0yNSA3IEE0IDQgMCAwIDEgMjUgMTUgQTQgNCAwIDAgMSAyNSA3Ij48L3BhdGg+Cjwvc3ZnPg==',
  attempt: 1,
  filter: {
    responsive (listener) {
      const isRetina = window.devicePixelRatio > 1;
      const screenWidth = window.innerWidth;
      
      if (screenWidth < 768 && !isRetina) {
        listener.src = listener.src.replace('3x', '1x')
      }

      if (screenWidth < 768 && isRetina) {
        listener.src = listener.src.replace('3x', '2x')
      }

      if (screenWidth >= 768 && !isRetina) {
        listener.src = listener.src.replace('3x', '1.5x')
      }
    },
    webp (listener, options) {
        if (!options.supportWebp) return

        const isHOST = new RegExp('img')
        if (isHOST.test(listener.src)) {
          listener.src = listener.src.replace('png', 'webp')
          listener.src = listener.src.replace('jpg', 'webp')
        }
    }
  }
})

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
    videoStatus: null,
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
  computed: {
    videoSrc() {
      return this.videoStatus ? 'files/video.mp4' : ''
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
      let video = this.$refs.video;

      if (!this.videoStatus || video.paused) {
        this.videoStatus = 'playing'

        if (!video) {
          setTimeout(() => {
            video = this.$refs.video
            video.play()
          }, 400)
        } else {
          video.play()
        }
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