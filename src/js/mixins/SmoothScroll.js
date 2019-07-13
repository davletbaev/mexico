import smoothscroll from 'smoothscroll-polyfill';

import { eventBus } from '../utils';

const SmoothScroll = {
  methods: {
    smoothScrollingInit() {
      smoothscroll.polyfill();
      
      document.body.addEventListener('click', (e) => {
        if (e.target.hasAttribute('data-smooth')) {
          e.preventDefault();

          const target = e.target.getAttribute('href').slice(1);
          
          eventBus.$emit('closeNav')
          this.scrollTo(target)
        }
      })
      // document.querySelectorAll('[data-smooth]').forEach(anchor => {
      //   anchor.addEventListener('click', (e) => {
      //       e.preventDefault();

      //       const target = anchor.getAttribute('href').slice(1);
            
      //       this.scrollTo(target)
      //   });
      // });
    },
    scrollTo(target) {
      const element = document.getElementById(target);
    
      window.scroll({
        behavior: 'smooth',
        left: 0,
        top: element.offsetTop - 130
      });
    }
  },
  mounted() {
    this.smoothScrollingInit()

    if (window.location.hash) this.scrollTo(window.location.hash.slice(1));
  }
}

export default SmoothScroll