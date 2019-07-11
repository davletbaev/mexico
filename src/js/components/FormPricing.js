import Vue from 'vue'

export default Vue.component('form-pricing', {
  data() {
    return {
      selected: 1,
      tours: [
        {
          id: 1,
          date: '9 ноября 2019 - 23 ноября 2019',
          seatsAvailable: 9,
          seatsTotal: 15,
          duration: 14,
          priceCurrent: 4100,
          pricePrev: 13000
        },
        {
          id: 2,
          date: '27 ноября 2019 - 11 декабря 2019',
          seatsAvailable: 5,
          seatsTotal: 14,
          duration: 14,
          priceCurrent: 3700,
          pricePrev: 12500
        },
        {
          id: 3,
          date: '15 декабря 2019 - 20 декабря 2019',
          seatsAvailable: 10,
          seatsTotal: 18,
          duration: 14,
          priceCurrent: 5300,
          pricePrev: 15800
        }
      ],
      seats: 1,
    }
  },
  computed: {
    selectedTour() {
      return this.tours.find(tour => tour.id === this.selected);
    },
    tourDuration() {
      const duration = this.selectedTour.duration

      if (duration % 10 === 1) {
        return `${duration} день`;
      } else if (duration > 5 && duration < 21) {
        return `${duration} дней`;
      } else if (duration % 10 > 1 && duration % 10 < 5) {
        return `${duration} дня`;
      }

      return `${duration} дней`;
    }
  },
  methods: {
    formSubmit() {
      const formData = Object.assign({}, this.selectedTour, { seatsReserved: this.seats })

      this.$emit('form-submit', formData)
    },
    addSeats() {
      if (this.seats < this.selectedTour.seatsAvailable) {
        this.seats++
      } else {
        this.seats = this.selectedTour.seatsAvailable
      }
    },
    subtractSeats() {
      if (this.seats > 1) {
        this.seats--
      } else {
        this.seats = 1
      }
    },
    checkSeats() {
      if (this.seats > this.selectedTour.seatsAvailable) {
        this.seats = this.selectedTour.seatsAvailable
      }
    }
  },
  mounted() {
  }
})