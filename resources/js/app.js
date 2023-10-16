import "./bootstrap";
import "flowbite";
import "../css/app.css";
import "@fortawesome/fontawesome-free/css/all.css";

// import "./assets/css/tailwind.css";

let tabs = document.querySelectorAll(".tab");
let indicator = document.querySelector(".indicator");
let panels = document.querySelectorAll(".tab-panel");

indicator.style.width = tabs[0].getBoundingClientRect().width + "px";
indicator.style.left =
    tabs[0].getBoundingClientRect().left -
    tabs[0].parentElement.getBoundingClientRect().left +
    "px";

tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        let tabTarget = tab.getAttribute("aria-controls");

        indicator.style.width = tab.getBoundingClientRect().width + "px";
        indicator.style.left =
            tab.getBoundingClientRect().left -
            tab.parentElement.getBoundingClientRect().left +
            "px";

        panels.forEach((panel) => {
            let panelId = panel.getAttribute("id");
            if (tabTarget === panelId) {
                panel.classList.remove("invisible", "opacity-0");
                panel.classList.add("visible", "opacity-100");
            } else {
                panel.classList.add("invisible", "opacity-0");
            }
        });
    });
});

window.getData = function (id, elemen_itu) {
    let itu = document.querySelector(elemen_itu);
    let url = "/tabs/" + id;

    fetch(url, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": window.csrf_token,
        },
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data.view);
            if (data.status == "success") {
                itu.append(data.view);
            } else {
                itu.append("<p>Failed fetching data</p>");
            }
        });
};
