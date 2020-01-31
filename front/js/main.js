var app = new Vue({
    el: '#app',
    data: {
        showEditModal: false,
        showAddModal: false,
        newUser: {firstname: "",lastname: "",email: "",country: "",state:"",bio:"",password:"",phone:""},
    },
    methods: {
        addUser(){
            var formData = app.toFormData(app.newUser);
            axios.post("http://localhost:8080/teste/api/process.php?action=create",formData).then(function(response){
                app.newUser = {firstname: "",lastname: "",email: "",country: "",state: "",bio: "",password: "",phone: ""};
                if(response.data.error){
                    app.errorMsg = response.data.message;
                }
                else{
                    app.successMsg = response.data.message;
                }
            });
        },
        toFormData(obj){
            var fd = new FormData();
            for(var i in obj){
                fd.append(i,obj[i]);
            }
            return fd;
        }
    }
});