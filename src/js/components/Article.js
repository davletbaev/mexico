// import { requestAnimationFrame } from '../utils'
const requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;

export default {
  data() {
    return {
      isCollapsed: false
    }
  },
  methods: {
    collapseBlock() {
      this.isCollapsed = !this.isCollapsed

      const fullHeight = this.$refs.collapse.firstElementChild.scrollHeight
      const duration = 10 * Math.pow(Math.log(fullHeight), 2)

      const animationKeyframes = [
        { height: '8.5em' },
        { height: fullHeight + 'px' }
      ]

      const animationOptions = {
        duration,
        iterations: 1,
        fill: 'both',
        easing: ['cubic-bezier(0.68, -0.55, 0.265, 1.55)']
      }

      const delay = this.isCollapsed ? 0 : 300
      setTimeout(() => {
        this.$refs.collapse.classList.toggle('js-collapse', this.isCollapsed)
      }, delay)
      
      requestAnimationFrame(() => {
        this.$refs.collapse.animate(animationKeyframes, Object.assign(animationOptions, {
          direction: this.isCollapsed ? 'normal' : 'reverse'
        }))
      })
    }
  }
}