function expandFilter()
{
    document.getElementById("dropdown").classList.toggle("show");
}

const filterButtons = document.querySelectorAll(".filterContent button");
const filterableCards = document.querySelectorAll(".grid .card");

const filterCards = e => {
    document.querySelector(".active").classList.remove("active");
    e.target.classList.add("active");
    
    filterableCards.forEach(card => {
        card.classList.add("hide");

     if(card.dataset.name === e.target.dataset.name || e.target.dataset.name === "all"){
        card.classList.remove("hide");
        }
    });
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

const submit_button = document.getElementById('submitbtn')
/*
submit_button.addEventListener("click", () => {
    alert ('Form is submitted!')
})
*/

const urlName = new URLSearchParams(window.location.search);
    const adoptivePet = urlName.get('adoptivePet'); 
    if (adoptivePet) {
        const el = document.getElementById('adoptivePet');
        if (el) {
            el.innerText = "For: " + adoptivePet;
        } else {
            console.error("Element #adoptivePet not found");
        }
    }
