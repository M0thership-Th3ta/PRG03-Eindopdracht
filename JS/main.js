window.addEventListener('load', init);

//globals
let selectionMenu
let vtuberGallery
let selectionWarning
let detailsWarning
let details
let enabledMenu = "none";
let showingVtubers = false;
let selectedVtuberDetails = false;
let vtuberDetails = [];
let vtuberFaves = [];
let debug = false;

function init(){
    selectionMenu = document.querySelector(".selection-menu")
    vtuberGallery = document.querySelector("#vtuber-gallery")
    selectionWarning = document.querySelector(".selection-warning")
    detailsWarning = document.querySelector(".details-warning")
    details = document.querySelector("#details")
    selectionMenu.addEventListener("click", menuClick)
    debugMode()
}

function menuClick(e){
    if(e.target.tagName === "A"){
        loadData("webservice/index.php", vtuberLoaded)
        enabledMenu = e.target.dataset.group
    }
    if(enabledMenu !== "none"){
        selectionWarning.classList.add("disabled")
        showingVtubers = true
    }
    if(showingVtubers === true){
        while(vtuberGallery.hasChildNodes()){
            vtuberGallery.removeChild(vtuberGallery.firstChild)
        }
    }
}

function loadData(url, successHandler){
    fetch(url).then(response => {
        if (!response.ok) {
            throw new Error(response.statusText);
        }
        return response.json();
    })
        .then(successHandler)
        .catch(errorHandler)
}

function errorHandler(error){
    console.error(error)
}

function vtuberLoaded(data) {
    for (let vtuber of data[enabledMenu]) {
        console.log(vtuber)
        let article = document.createElement("article")
        let imgContainer = document.createElement("div")
        let img = document.createElement("img")
        let name = document.createElement("p")
        article.classList.add("vtuber-card")
        img.src = vtuber.url
        img.dataset.id = vtuber.name
        name.innerText = vtuber.name
        name.dataset.id = vtuber.name
        imgContainer.classList.add("imgContainer")
        imgContainer.dataset.id = vtuber.name
        imgContainer.append(img)
        article.dataset.id = vtuber.name
        article.append(imgContainer)
        article.append(name)
        vtuberGallery.append(article)
        favoriteSystem(vtuber.name)

        article.onmouseover = e => {
            if (selectedVtuberDetails === false && e.target.dataset.id === vtuber.name) {
                selectedVtuberDetails = true;
                detailsWarning.classList.add("disabled")
                vtuberDetails.push(vtuber.details)
                loadDetails(vtuber.name)
            }
        }

        article.onmouseout = e => {
            if (selectedVtuberDetails === true && e.target.dataset.id === vtuber.name) {
                while (details.hasChildNodes()) {
                    details.removeChild(details.firstChild)
                }
                vtuberDetails = [];
                selectedVtuberDetails = false;
            }
        }

        article.onclick = e => {
            if (e.target.dataset.id === vtuber.name) {
                if(!vtuberFaves.includes(vtuber.name)){
                    vtuberFaves.push(vtuber.name)
                }
                e.currentTarget.classList.add("fave")
                faveSave()
            }
        }

        article.oncontextmenu = e => {
            e.preventDefault()
            if (e.currentTarget.classList.contains("fave")) {
                e.currentTarget.classList.remove("fave")
                vtuberFaves.splice(vtuberFaves.indexOf(vtuber.name), 1)
                faveSave()
            }
        }
    }
}

function loadDetails(name){
    for(let detail of vtuberDetails) {
        let detailDiv = document.createElement("div")
        let detailTitle = document.createElement("h2")
        let detailList = document.createElement("ul")
        let debut = document.createElement("li")
        let languages = document.createElement("li")
        let subGroup = document.createElement("li")
        detailTitle.innerText = name
        debut.innerText = "Debut: " + detail.debut
        languages.innerText = "Languages: " + detail.languages
        subGroup.innerText = "Sub Group: " + detail.sub_group
        detailDiv.append(detailTitle)
        detailDiv.append(detailList)
        detailList.append(debut)
        detailList.append(languages)
        detailList.append(subGroup)
        details.append(detailDiv)
    }
}

function faveSave(){
    localStorage.removeItem("faves")
    localStorage.setItem("faves", JSON.stringify(vtuberFaves))
}

function favoriteSystem(name){
    let faves = localStorage.getItem("faves")
    if(faves){
        vtuberFaves = JSON.parse(faves)
        for (let vtuberFave of vtuberFaves) {
            if(name === vtuberFave){
                document.querySelector(`[data-id="${vtuberFave}"]`).classList.add("fave");
            }
        }
    }
}

function debugMode(){
    if(debug === true) {
        document.addEventListener("click", elementGun)
    }
}
function elementGun(e){
    e.target.classList.add("disabled")
}