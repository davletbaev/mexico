import { debounce, eventBus } from '../utils'

export default {
  data() {
    return {
      isNavVisible: false,
      isScrolling: false,
    }
  },
  methods: {
    showNav() {
      this.isNavVisible = !this.isNavVisible
      this.$emit('nav-show')
    },
    handleScroll() {
      this.isScrolling = window.pageYOffset > 10 || this.isNavVisible
    }
  },
  props: ['screen-width'],
  mounted() {
    window.addEventListener('scroll', this.handleScroll, { passive: true })

    eventBus.$on('closeNav', debounce(this.showNav, 200));
  }
}