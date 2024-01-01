let templatePosts = document.querySelector("#templatePost")
let main = document.querySelector("main")

async function requestData(url,param1){
    return await fetch(url).then(res => res.json()).then(res =>res.data).catch(error => paintError(error))

}

async function paintPosts(){
    let fragment = document.createDocumentFragment()
    let posts = await requestData("http://127.0.0.1:8000/api/v1/posts")

    for(let post of posts){
        
       fragment.appendChild(await createPost(post))
    }

    main.innerHTML=""
    main.appendChild(fragment)
}

async function createPost(post){
    console.log(post)

    let newTemplatePost = templatePosts.content.cloneNode(true)
    
    // let user = await requestData("http://localhost:8000/api/v1/users?id="+post.user_id)
    
    // // console.log(user)
    // newTemplatePost.querySelector(".h4UserName").textContent=user[0].name
    // newTemplatePost.querySelector(".h4LastName1").textContent=user[0].lastName1
    // if(user[0].lastName2 !=null){
    //     newTemplatePost.querySelector(".h4LastName2").textContent=user[0].lastName2
    // }else{
    //     newTemplatePost.querySelector(".h4LastName2").setAttribute("hidden","hidden")
    // }
    
    // newTemplatePost.querySelector(".profilePic").src="../img/user.svg"

    if(post.image != null){
        newTemplatePost.querySelector(".postImg").src = post.image
        
    }else{
        newTemplatePost.querySelector(".postImg").setAttribute("hidden","hidden")
    }
    newTemplatePost.querySelector(".pContent").textContent = post.content

    newTemplatePost.querySelector(".imgBtnLike").src = "../img/like.svg"
    newTemplatePost.querySelector(".likesAmount").textContent = "0"
    newTemplatePost.querySelector(".pDatePosted").textContent = post.created_at
    
    
    return newTemplatePost
 
}   

function paintError(error){
    console.log(error)
}

paintPosts()
