import Vue from 'vue'
import Inputmask from 'inputmask'
import { debounce } from '../utils'


var im = new Inputmask("+7 (999) 999 99 99", { showMaskOnHover: false, placeholder: "  ", onComplete: () => this.validation.phone = true });

export default Vue.component('form-request', {
  data() {
    return {
      success: false,
      error: false,
      name: '',
      phone: '',
      contact: '',
      city: '',
      agree: true,
      validation: {
        name: null,
        phone: null,
        contact: null,
        city: null,
        agree: true
      }
    }
  },
  props: ['selectedTour'],
  methods: {
    submitForm() {
      const isValid = this.validate('all');

      if (isValid) {
        const data = {
          name: this.name,
          phone: this.phone,
          contact: this.contact,
          city: this.city,
          agree: this.agree,
          tour: this.selectedTour || null
        }
        const url = this.$refs.form.getAttribute('action')

        fetch(url, {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
        })
        .then(res => {
          if (res.ok) {
            this.success = true;
          } else {
            this.error = true;
          }
        })
      }
    },
    initMask() {
      this.im = new Inputmask("+7 (999) 999 99 99", { showMaskOnHover: false, placeholder: " "});
      im.mask(this.$refs.phone);
    },
    validate($event) {
      if ($event === 'all') {
        return Object.values(this.validation).every(value => !!value);
      }

      const name = $event.target.name
      const value = $event.target.value
      
      if (name === 'phone') {
        return this.validation[name] = /^\+\d \(\d{3}\) \d{3} \d{2} \d{2}$/.test(value)
      }

      if (name === 'agree') {
        return this.validation[name] = $event.target.checked
      }

      this.validation[name] = !!value
    }
  },
  mounted() {
    this.initMask()
  }
})