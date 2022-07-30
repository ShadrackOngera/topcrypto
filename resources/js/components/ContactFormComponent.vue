<template>
    <form @submit.prevent="submit">
        <div class="alert alert-success" v-show="success">Message Sent successfully</div>
        <h3 class="text-center">Leave a message for us</h3>

        <div class="form-floating mb-3">
            <input type="text" name="firstName" v-model="fields.firstName" class="form-control" id="floatingInput" placeholder="First Name">
            <label for="floatingInput">First Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="lastName" v-model="fields.lastName" class="form-control" id="floatingInput" placeholder="Last Name">
            <label for="floatingInput">Last Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email" v-model="fields.email" class="form-control" id="floatingInput" placeholder="Example@email.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="justify-content-between d-flex">
            <label for="message" class="form-label">|</label>
            <label for="receive" class="form-label">{{remainingCount}}</label>
        </div>
        <div class="form-floating mb-5">
            <textarea class="form-control" v-model="fields.description" v-on:keyup="countdown" name="description" placeholder="Leave your Message here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Message</label>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary text-white fw-bold" type="submit">Submit</button>
        </div>
    </form>
</template>
<script>
export default {
    data(){
        return{
            fields: {},
            success: false,
            errors: {},
            maxCount: 500,
            remainingCount: 500,
            message: '',
            disabled: 0,

        }
    },
    mounted(){

    },
    methods: {
        submit(){
            axios.post('store', this.fields).then(response => {
                this.fields = {};
                this.success = true;
                this.errors = {};
            }).catch(error => {
                if (error.response.status === 422){
                    this.errors =error.response.data.errors;
                }
                console.log('Error');
            });
        },
        countdown: function() {
            // this.hasError = this.remainingCount < 0;
            if (this.remainingCount >0){
                this.remainingCount = this.maxCount - this.fields.description.length;
            } else {
                this.fields.description = this.disabled = 1;

            }
        }
    }
}
</script>
