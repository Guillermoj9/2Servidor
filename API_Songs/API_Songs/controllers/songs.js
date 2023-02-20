const Songs = require("../models/songs");

//Funcion para insertar cancion en MONGO
async function createSong(req, res) {
    const songs = new Songs();
    const params = req.body;

    songs.title = params.title;
    songs.group = params.group;
    songs.duration = params.duration;
    songs.year = params.year;
    songs.gender = params.gender;
    songs.assessment = params.assessment;
    
    try {
        const songsStore = await songs.save()

        if (!songsStore) {
            res.status(400).send({ msg: "Task not found" });
        } else {
            res.status(200).send({ songs: songsStore });
        }


    } catch (error) {
        res.status(500).send(error);
    }
}
//Sacar todas las canciones 
async function getSongs(req, res) {
    try {
        const songs = await Songs.find().sort({ created_at: -1 });

        if (!songs) {
            res.status(400).send({ msg: "Task not found" });
        } else {
            res.status(200).send({ songs });
        }

    } catch (error) {
        res.status(500).send({ msg: "Songs not" });
    }

}
//Function for song id
async function getSong(req, res) {

    const idSongs = req.params.id;

    try {
        const song = await Songs.findById(idSongs);
        if (!song) {
            res.status(404).send({ msg: "song not found" });
        } else {
            res.status(200).send(song);
        }
    } catch (error) {
        res.status(500).send("song not found");
    }

};

//Borrar cancion por id
async function deleteSong(req,res) {

    const idSongs = req.params.id;

    try {
        const song = await Songs.findByIdAndDelete(idSongs);

        if (!song) { 
            res.status(400).send({ msg: "No se encuentra para borrar" });
        }else {
            res.status(200).send({msg : "Cancion borrada"});
        }
        
    }catch(error) {
        res.status(500).send(error);
    }
};
//Update song
async function updateSong (req, res, ) {
    const idSong = req.params.id;
    const body = req.body;
    body.assessment;
    try {
        const song = await Songs.findByIdAndUpdate(idSong, {$inc: {assessment:body.assessment }});

        if (!song) { 
            res.status(400).send({ msg: "No se encuentra para insertar" });
        }else {
            res.status(200).send({msg : "Valoración actualizada",
                                 song : song});

        }
        
    }catch(error) {
        res.status(500).send(error);
    }
};
async function topRatedSongs(req, res) {
    try {
        const songs = await Songs.find().sort({ assessment: -1 }).limit(10);

        if (!songs) {
            res.status(400).send({ msg: "No encontrado" });
        } else {
            res.status(200).send({ songs });
        }

    } catch (error) {
        res.status(500).send({ msg: "Songs not" });
    }

}
async function searchGender(req, res) {
    const gender = req.params.gender;
    try {
        const song = await Songs.find({gender:gender});
        if (!song) {
            res.status(404).send({ msg: "song not found" });
        } else {
            res.status(200).send(song);
        }
    } catch (error) {
        res.status(500).send("song not found");
    }


}
module.exports = {
    createSong,
    getSongs,
    getSong ,
    deleteSong,
    updateSong,
    topRatedSongs,
    searchGender
};