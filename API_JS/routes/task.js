const express = require('express');
const TaskController = require("../controllers/task");

const api = express.Router();

//ENDPOINT

api.post("/task", TaskController.createTask);
//Consultar todas las tareas
api.get("/task", TaskController.getTasks);
//consultar una tarea 
api.get("/task/:id", TaskController.getTask);
//Borrar tarea
api.delete("/task/:id", TaskController.deleteTask);
//Update task
api.put("/task/:id", TaskController.updateTask);
module.exports = api;