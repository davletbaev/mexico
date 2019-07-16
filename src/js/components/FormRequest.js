import Vue from 'vue'
import Inputmask from 'inputmask'

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
  computed: {
    formTitle() {
      switch (this.referrer) {
        case 'program': return 'Заполни форму для получения презентации по туру'
        case 'pricing': return 'Заполни форму<br> для бронирования тура'
        default: return 'Получи 5 советов по восстановлению жизненных сил, находясь в путешествии'
      }
    }
  },
  props: ['selectedTour', 'referrer'],
  methods: {
    submitForm() {
      const isValid = this.validate('all');
      const selectedTour = this.selectedTour || {}

      if (isValid) {
        const data = {
          name: this.name,
          phone: this.phone,
          contact: this.contact,
          city: this.city,
          date: selectedTour.date || null,
          seatsReserved: selectedTour.seatsReserved || null,
          seatsAvailable: selectedTour.seatsAvailable || null,
          seatsTotal: selectedTour.seatsTotal || null,
          duration: selectedTour.duration || null,
          priceCurrent: selectedTour.priceCurrent || null,
          pricePrev: selectedTour.pricePrev || null
        }
        const url = this.$refs.form.getAttribute('action')

        const formData = Object.keys(data).map((key) => {
          return encodeURIComponent(key) + '=' + encodeURIComponent(data[key]);
        }).join('&');

        fetch(url, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
          },
          body: formData,
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