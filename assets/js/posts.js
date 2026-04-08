async function fetchPosts (){
    // url to the api endpoint
    const url = "http://localhost/blog/api/";
    try{

        const response = await fetch(url);
        if(!response.ok){
            throw new Error(`Error code found : ${response.status}`)
        }
        const data = await response.json();

    }catch(e){

    }
}


fetchPosts();