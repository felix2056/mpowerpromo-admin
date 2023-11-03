<template>
    <div class="centered">
        <div class="container mb-auto mt-auto signin">
            <div class="card mx-auto card-auth border-0">
                <form class="form-signin">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/mpower_logo_text_nopad.png" alt="MPower Promo" class="logo-h mb-3">
                            <h2>Sign In</h2>
                        </div>

                        <div class="alert alert-danger" v-if="errorMsg">
                            {{ errorMsg }}
                        </div>

                        <span id="reauth-email" class="reauth-email"></span>
                        <div class="form-group">
                            <label>Email</label>
                            <input v-model="auth.email" type="email" id="inputEmail" required="required" class="form-control">
                            <div v-if="Object.keys(validationErrors).length > 0 && validationErrors.email">
                                <span class="text-danger small">{{ validationErrors.email[0] }}</span>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label>Password</label>
                                <input v-model="auth.password" :type="showPassword ? 'text' : 'password'" autocomplete="new-password" required="required" class="form-control" style="background-color: inherit;">
                                <div class="text-right">
                                    <a class="text-primary small" @click="togglePassword" href="javascript:void(0)">
                                        {{ showPassword ? 'Hide' : 'Show' }} Password
                                    </a>
                                </div>
                                
                                <div v-if="Object.keys(validationErrors).length > 0 && validationErrors.password">
                                    <span class="text-danger small">{{ validationErrors.password[0] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-12 text-right">
                                <button type="button" class="btn btn-primary btn-block" @click="login" :disabled="isLoading">
                                    <span v-if="isLoading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Sign in
                                </button>
                            </div>
                            <div class="col-12 pt-2"><a class="small btn btn-link btn-block">Forgot password?</a></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="text-center"><small>v0.1.0</small></div>
        </div>
    </div>
</template>

<script>
import { mapActions } from 'vuex'
// import { useMeta } from 'vue-meta'

export default {
    name: 'Login',

    data() {
        return {
            isLoading: false,
            validationErrors: {},
            errorMsg: null,
            showPassword: false,

            auth:{
                email: "",
                password: ""
            },
        }
    },

    methods: {
        ...mapActions({
            signIn: 'auth/login'
        }),

        async login() {
            this.isLoading = true;

            try {
                // Request CSRF cookie
                await axios.get('/sanctum/csrf-cookie');

                // Send login data
                const response = await axios.post('/login', this.auth);

                // Check for a successful response
                if (response.status === 200) {
                    await this.signIn();
                } else {
                    // Handle unexpected response status
                    alert('Login failed. Unexpected response status.');
                }
            } catch (error) {
                // Handle errors
                console.error(error);

                if (error.response) {
                    if (error.response.status === 422) {
                        // Handle validation errors
                        this.validationErrors = error.response.data.errors;
                    } else {
                        // Clear validation errors and show a general error message
                        this.validationErrors = {};
                        this.errorMsg = error.response.data.message
                    }
                } else {
                    // Handle network or other unexpected errors
                    alert('An error occurred while logging in.');
                }
            } finally {
                this.isLoading = false;
            }
        },

        togglePassword() {
            this.showPassword = !this.showPassword
        }
    },

    // setup() {
    //     useMeta({
    //         title: 'Login | ' + process.env.MIX_APP_NAME,
    //         description: 'Login to your account',
    //         titleTemplate: null
    //     })
    // }
}
</script>