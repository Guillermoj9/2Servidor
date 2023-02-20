const express = require('express');
const SongsController = require('../controllers/songs');

const api = express.Router();

//Middleware
const md_auth = require('../middlewares/authenticated');

//ENDPOINT

//Crear cancion
api.post("/songs", SongsController.createSong);
//Todas las canciones 
api.get("/songs",[md_auth.ensureAuth], SongsController.getSongs);
//Una cancion por ID
api.get("/songs/:id", SongsController.getSong);
//put songs suma cancion id una nueva valoracion
//Hacer update de una valoracion en la cancion
api.put("/songs/:id", SongsController.updateSong);
//get songs top rated sacar las 10 mejores valoraciones
api.get("/assessment/",SongsController.topRatedSongs);
//get sacar la cancion por genero
api.get("/search/:gender",SongsController.searchGender);
//Borrar cancion por id
api.delete("/songs/:id", SongsController.deleteSong);

module.exports = api;