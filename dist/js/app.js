Vue.component("thank-you", {
    template: `<transition name="modal">
                <div class="modal-mask">
                <div class="modal-wrapper">
                    <div class="modal-container">

                    <div class="modal-body my-0 text-center p-0">
                        <slot v-if="$parent.responseStatus === 200" name="body">
                        <h4 class="text-success">ขอบคุณสำหรับการสั่งซื้อ</h4>
                        <p>ทางเราจะทำการจัดส่งสินค้าให้ท่านทันที</p>
                        </slot>
                        
                        <slot v-else name="body">
                        <h3 class="text-danger">เกิดข้อผิดพลาด</h3>
                        <p>กรุณาลองใหม่อีกครั้ง หรือ สั่งซื้อผ่านทางไลน์</p>
                        </slot>
                    </div>

                    <div class="modal-footer mb-0 py-0 end-0">
                        <button class="btn btn-secondary btn-sm" @click="$parent.showResponse = false">X ปิด</button>
                    </div>

                    </div>
                </div>
                </div>
            </transition>`
})

new Vue({
    el: '#app',
    data() {
        return {
            showResponse: false,
            responseStatus: '',
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