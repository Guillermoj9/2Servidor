const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const SongsSchema = Schema({
    title : {
        type: String,
        require : true,
    },
    group: {
        type : String,
        require : true,
    },
    duration: {
        type : String,
        require : true,
        default : null,
    },
    year: {
        type : Date,
        require : true,
        default : Date.now,
    },
    gender: {
        type : String,
        require : true,
    },
    assessment: {
        type : Number,
        require : true,
    },
});

module.exports = mongoose.model('Songs',SongsSchema);