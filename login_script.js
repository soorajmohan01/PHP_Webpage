const email=document.getElementById('email')
const phone=document.getElementById('password')

const errorElement=document.getElementById('error')
var regex= /^[a-zA-Z0-9\._]+@[a-zA-Z0-9]+\.[a-z]+(.[a-z]+)?$/

//Form Validation

form.addEventListener('submit',(e) => {
    let messages=[]
    if(email.value===""||email.value==null){
        messages.push("Email is required")
    }
    else if(!email.value.match(regex)){
        messages.push("Enter a valid Email ID")
    }
    if(password.value===""||password.value==null){
        messages.push("Password is required")
    }

    if(messages.length>0){
        e.preventDefault()
        errorElement.innerText=messages.join('\n')
    }
})