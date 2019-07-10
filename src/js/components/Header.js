import { debounce } from '../utils'

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
    window.addEventListener('scroll', debounce(this.handleScroll, 250), { passive: true })
  }
}