const requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;

export default {
  data() {
    return {
      isCollapsed: false
    }
  },
  methods: {
    collapseBlock() {
      const fullHeight = this.$refs.collapse.scrollHeight
      const duration = 10 * Math.pow(Math.log(fullHeight), 2)

      const animationKeyframes = [
        { height: '10em' },
        { height: fullHeight + 'px' }
      ]

      const animationOptions = {
        duration,
        iterations: 1,
        fill: 'both',
        easing: ['cubic-bezier(0.68, -0.55, 0.265, 1.55)']
      }

      this.isCollapsed = !this.isCollapsed

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