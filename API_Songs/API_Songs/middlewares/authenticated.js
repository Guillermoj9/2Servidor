const moment = require('moment');
const jwt = require('../services/jwt');

const SECRET_KEY = 'klam21KQawmdqkwASDmdqm1ñ%Ñ3mamaMmseS';

function ensureAuth(req, res, next) {
    //Cabecera de una petición
    if (!req.headers.authorization) {
        return res.status(403).send({msg: "Token no enviado"});
    }
    //Expresion regular para borrar cosas
     const token = req.headers.authorization.replace(/['"]+/g,"");   
     const payload = jwt.decodeToken(token, SECRET_KEY);
    try {
        //Comprobar la fecha de expiracion del token
        if(payload.exp <= moment().unix()){
            return res.status(400).send({msg:"Token expired"});
        }
    } catch (error) {
        return res.status(400).send({msg: "Token invalid"});
    }

    req.user = payload;
    next();
}


module.exports = {
    ensureAuth,
};