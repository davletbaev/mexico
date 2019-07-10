export default {
  data() {
    return {
      tabPaneActive: 1
    }
  },
  methods: {
    showPane(id, event) {
      event.preventDefault()
      this.tabPaneActive = id
    }
  }
}