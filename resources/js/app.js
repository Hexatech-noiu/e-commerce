import "./bootstrap";
import "flowbite";
import "../css/app.css";
import "./Alert";
import "@fortawesome/fontawesome-free/css/all.css";

window.location.pathname == "/produk" ? import("./produk") : null;

window.copyProp = function (prod_id, mode) {
    // alert(prod_id +" \n "+mode);
    const wrapper = document.getElementById("actionWrapper" + prod_id);
    const data = wrapper.dataset;
    switch (mode) {
        case "read":
            document.getElementById("pre-name").innerHTML = data.name;
            document.getElementById("pre-price").innerHTML = data.fixedPrice;
            document.getElementById("pre-category").innerHTML =
                data.categoryName;
            document.getElementById("pre-desc").innerHTML = data.desc;
            document.getElementById("pre-pic").src = "/storage/" + data.picture;
            document.getElementById("pre-pic").src = "/storage/" + data.picture;
            break;
        case "update":
            document.getElementById("update_name").value = data.name;
            document.getElementById("update_price").value = data.fixedPrice;
            document.getElementById("update_category").value = data.categoryId;
            document.getElementById("update_desc").value = data.desc;
            document.getElementById("update_form").action =
                "/dashboard/produk/" + prod_id;
            break;
        case "delete":
            document.getElementById("delete_name").innerText = data.name;
            document.getElementById("delete_form").action =
                "/dashboard/produk/" + prod_id;
            break;
    }
};
