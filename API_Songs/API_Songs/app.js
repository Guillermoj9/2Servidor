const express = require('express')
const app = express()


app.use(express.json());
app.use(express.urlencoded({ extended: true }));
//Cargar rutas
const songs_routes = require("./routes/songs");
const user_routes = require("./routes/user");
//Rutas base
app.use("/api",songs_routes);
app.use("/api",user_routes);
module.exports = app;
