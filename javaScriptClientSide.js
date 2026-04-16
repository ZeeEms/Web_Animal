function expandFilter()
{
    document.getElementById("dropdown").classList.toggle("show");
}

const filterButtons = document.querySelectorAll(".filterContent button");

const filterCards = (event) => {
    document.querySelector(".active").classList.remove("active"); //finding the first element with the active class and removes it. The active class changes color of the currently chosen option.
    event.target.classList.add("active"); //adding the active class on the clicked filter option/button

    const type = event.target.dataset.name; // gettig the data-name attribute of the button (filter option) that was clicked
    const grid = document.querySelector(".grid");   
    
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            grid.innerHTML = this.responseText;
            const cards = document.querySelectorAll(".card");
            cards.forEach((card) => {
                card.addEventListener("click", function()
                {
                    this.classList.toggle("is-flipped");
                });
            });
        }
    };
    xhr.open("GET", "FetchAnimals.php?type=" + type, true);
    xhr.send();
};

filterButtons.forEach(button => button.addEventListener("click", filterCards));

window.onclick = function(event)
{
    if (!event.target.matches('.buttonVisuals'))
    {
        let filtrOptions = document.getElementsByClassName("filterContent");
        let i;
        for (i = 0; i < filtrOptions.length; i++) {
            var expand = filtrOptions[i];
            if (expand.classList.contains('show')){
                expand.classList.remove('show');
            }

        }
    }
} 

const cards = document.querySelectorAll(".card");

cards.forEach((card) => {
    card.addEventListener("click", function()
    {
        this.classList.toggle("is-flipped");
    });
});

const urlName = new URLSearchParams(window.location.search);
    const adoptivePet = urlName.get('adoptivePet'); 

    if (adoptivePet) {
        const el = document.getElementById('adoptivePet');
        if (el) {
            el.innerText = adoptivePet;
            el.value = adoptivePet;
        } else {
            console.error("Element #adoptivePet not found");
        }
    }

const petName = document.getElementById("adoptivePet").textContent;
document.getElementById("adoptivePetHidden").value = petName;

const submit_button = document.getElementById('submitbtn')
/*
submit_button.addEventListener("click", () => {
    alert ('Form is submitted!')
})
    */