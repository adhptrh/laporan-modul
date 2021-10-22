let a = [...document.getElementsByTagName("a")];
let loadingscreen = document.getElementsByClassName("loadingscreen")[0]
console.log(a)

Object.values(a).forEach(v=>{
    v.onclick = (e)=>{
        e.preventDefault()
        loadingscreen.classList.remove("none")
        setTimeout(()=>{
            loadingscreen.classList.remove("invisible")
        },1)
        setTimeout(()=>{
            loadingscreen.classList.remove("invisible")
            document.location.href = v.href
        },200)
    }
})

document.onreadystatechange = (e,v)=>{
    if (document.readyState === "complete") {
        loadingscreen.classList.add("invisible")
        setTimeout(()=>{
            loadingscreen.classList.add("none")
        }, 200)
    }
}