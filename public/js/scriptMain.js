let templatePosts = document.querySelector("#templatePost")
let templatePostsContent = templatePosts.content.cloneNode(true)
let main = document.querySelector("main")
console.log(templatePostsContent)

fetch("")
.then(data => data.json())
.then(data => paintPosts(data))
.catch(error => paintError(error))

function paintPosts(posts){
    let fragment = document.createDocumentFragment()
    posts.forEach(post => {
        let newTemplatePost = templatePostsContent.cloneNode()
        console.log(post)

        newTemplatePost.querySelector(".postImg").src =""
        newTemplatePost.querySelector(".pContent").templatePostsContent = ""

        fragment.appendChild(newTemplatePost)
    });

    main.innerHTML=""
    main.appendChild(fragment)
}