export default {
  data() {
    return {
    }
  },
  methods: {
    closeModal() {
      this.$emit('modal-close')
    }
  }
}