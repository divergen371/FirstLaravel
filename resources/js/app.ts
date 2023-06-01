import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import { User } from "./types";

let user = <User>{
    id: 1,
    name: "Ishikawa",
    email: "Ishikawa@xxxx",
};
console.log(user);
