import { requestAnimationFrame } from '../utils'

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
        { height: '0px' },
        { height: fullHeight + 'px' }
      ]

      const animationOptions = {
        duration,
        iterations: 1,
        fill: 'both',
        easing: ['ease-in-out']
      }

      this.isCollapsed = !this.isCollapsed

      requestAnimationFrame(() => {
        this.$refs.collapse.animate(animationKeyframes, Object.assign(animationOptions, {
          direction: this.isCollapsed ? 'normal' : 'reverse'
        }))
      })
    }
  }
}