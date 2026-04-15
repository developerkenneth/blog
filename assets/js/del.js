async function del(id) {
    const url = `http://localhost/blog/api/?id=${id}`;

    try{
        const response = await fetch(url, {
            method : "DELETE"
        });

        if(!response.ok){
            throw new Error(`error code: ${response.status}`);
        }

        const result = await response.json();
        console.log(result);
    }catch(e){
            console.error(e);
    }
}

const buttons = document.querySelectorAll(".del");
buttons.forEach(button =>{
    button.addEventListener("click", function(e){
        const id = e.target.dataset.id;
        del(id);

    })
})