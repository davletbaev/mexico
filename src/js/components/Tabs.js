export default {
  data() {
    return {
      tabPaneActive: 1
    }
  },
  props: ['swiperOptions'],
  methods: {
    showPane(id, event) {
      event.preventDefault()
      this.tabPaneActive = id
    }
  }
}