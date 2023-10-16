import "./bootstrap";
import "flowbite";
import "../css/app.css";
import "@fortawesome/fontawesome-free/css/all.css";
// Kenapa itu fiz? eh aneh

window.location.pathname == "/produk" ? import("./produk") : null;
