import smoothscroll from 'smoothscroll-polyfill';

import { eventBus } from '../utils';

const SmoothScroll = {
  methods: {
    smoothScrollingInit() {
      smoothscroll.polyfill();
      
      document.querySelectorAll('[data-smooth]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            e.preventDefault();

            const target = anchor.getAttribute('href').slice(1);

            let delay = 50;
            if (document.body.classList.contains('js-modal-open')) {
              eventBus.$emit('closeNav')
              delay = 300
            }

            setTimeout(() => {
              this.scrollTo(target)
            }, delay)
        });
      });
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