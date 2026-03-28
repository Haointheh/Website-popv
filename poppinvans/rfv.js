const name=document.getElementById('name')
const password=document.getElementById('password')
const rform= document.getElementById('rform')
const errorElement=document.getElementById('error')

rform.addEventListener('submit', (e)=> {
    let messages=[]

    if (password.value.length <= 4)
    {
        messages.push("password must be longer than 4 characters")

    }

    if (messages.length>0)
    {
        e.preventDefault()
        errorElement.innerText = messages.join(", ")
    }
})