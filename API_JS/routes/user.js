const express = require('express');
const UserController = require("../controllers/user");

const api = express.Router();

//ENDPOINT
//Registrar usuario
api.post("/user", UserController.register);
//LOGIN y devuelve un token
api.post("/login", UserController.login);

/*api.get("/task", TaskController.getTasks);
//consultar una tarea 
api.get("/task/:id", TaskController.getTask);
//Borrar tarea
api.delete("/task/:id", TaskController.deleteTask);
//Update task
api.put("/task/:id", TaskController.updateTask);
*/
module.exports = api;