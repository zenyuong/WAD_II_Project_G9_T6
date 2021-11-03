
const app2 = Vue.createApp({
    data(){
        return {
            userEmail:'',
            pwd1:'',
            cfmPwd:'',
            showStatus: false,
            ToS: false,
            status: ''
        };
    },
    methods: {
        register() {
            if (this.userEmail !== '' && this.cfmPwd !== '' && this.pwd1 !=='' && this.ToS ===true) {
                this.submitRegistration()
                alert('Signup success!')
                
            } 
            if(this.userEmail === '' || this.cfmPwd === '' || this.pwd1==='' || this.ToS ===false || (this.cfmPwd !== this.pwd1)) {
                alert('Sign up is incomplete. Please fill out every field.')
            }
        },
        submitRegistration(){
            const url = 'http://localhost:8888/WAD_II_Project_G9_T6/db/register.php'
            const data = { userEmail: this.userEmail,
                            cfmPwd: this.cfmPwd
                        }
            
            // GET request
            axios.get(url, {
                params: data
            })
            .then(response => {
                window.location.href="http://localhost:8888/WAD_II_Project_G9_T6/home.html"
            })
            .catch(error => {
                this.showStatus = true
                this.status = 'There was an error: ' + error.message 
            }) 
        }
    }
})
const vm2 = app2.mount("#signup");

const app3 = Vue.createApp({
    data(){
        return {
            loginPwd:'',
            loginEmail:'',
            showStatus: false,
            status: ''
        };
    },
    methods: {
        login() {
            this.submitLogin()
            const stats = this.showStatus
            if (stats) {
                window.location.href="http://localhost:8888/WAD_II_Project_G9_T6/home.html"
                alert('Login success!')
                
            } 
            if(!stats) {
                alert('Login unsuccessful!')
                
            }
        },
        submitLogin(){
            const url = 'http://localhost:8888/WAD_II_Project_G9_T6/db/login.php'
            const data = { loginEmail: this.loginEmail,
                            loginPwd: this.loginPwd
                        }
            
            // GET request
            axios.get(url, {
                params: data
            })
            .then(response => {
                this.showStatus = true
                return this.showStatus

            })
            .catch(error => {
                this.showStatus = false
                return this.showStatus
            }) 
            
        }
    }
})
const vm3 = app3.mount("#login");
