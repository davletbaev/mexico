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
    closeNav() {
      this.isNavVisible = false
      this.$emit('nav-close')
    },
    handleScroll() {
      this.isScrolling = window.pageYOffset > 10 || this.isNavVisible
    }
  },
  props: ['screen-width'],
  mounted() {
    window.addEventListener('scroll', this.handleScroll, { passive: true })

    eventBus.$on('closeNav', debounce(this.closeNav, 200));
  }
}