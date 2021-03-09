new Vue({
    el: '#app',
    data() {
        return {
            reviews: [
                {src: 'dist/img/reviews/qincaoil_review_01.jpg', title: '', alt: ''},
                {src: 'dist/img/reviews/qincaoil_review_02.jpg', title: '', alt: ''},
                {src: 'dist/img/reviews/qincaoil_review_03.jpg', title: '', alt: ''},
                {src: 'dist/img/reviews/qincaoil_review_04.jpg', title: '', alt: ''}
            ],
            formData: {
                name: '',
                address: '',
                mobile: '',
                product: '',
                price: '',
                description: '',
                source: ''
            }
        }
    },
    computed: {
        checkFormOrder() {
            return (this.formData.name !== '' &&
                    this.formData.address !== '' &&
                    this.formData.mobile !== '' &&
                    this.formData.product !== '')
                    ? true : false
        }
    },
    methods: {
        confirmOrder() {
            if(this.checkFormOrder) {
                let price = this.formData.product.split(" ")
                this.formData.product = price[0] + " " + price[1]
                this.formData.price = price[2]
                this.formData.source = window.location.origin
                try{
                    axios.post("https://shop.orderpang-sv.com/tmporder/save" , this.formData, {
                        headers: {
                            'Content-Type' : 'application/json'
                        }
                    })
                    .then((response) => {
                        window.location.replace(this.formData.source + "/thankyou.php?price=" + this.formData.price)
                    })
                    .finally(() => {
                        this.formData.name = ''
                        this.formData.address = ''
                        this.formData.mobile = ''
                        this.formData.product = ''
                        this.formData.description = ''
                    })
                }catch(e){
                    throw e
                }
            }
        }
    }
})