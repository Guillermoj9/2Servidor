const Task = require("../models/task");

//Funcion para insertar tarea en MONGO
async function createTask(req, res) {
    const task = new Task();
    const params = req.body;

    task.title = params.title;
    task.description = params.description;

    try {
        const taskStore = await task.save()

        if (!taskStore) {
            res.status(400).send({ msg: "Task not found" });
        } else {
            res.status(200).send({ task: taskStore });
        }


    } catch (error) {
        res.status(500).send(error);
    }
}

//Sacar todas las tareas
async function getTasks(req, res) {
    try {
        const tasks = await Task.find().sort({ created_at: -1 });

        if (!tasks) {
            res.status(400).send({ msg: "Task not found" });
        } else {
            res.status(200).send({ tasks });
        }

    } catch (error) {
        res.status(500).send({ msg: "Task not" });
    }

}
//Function for task id
async function getTask(req, res) {

    const idTask = req.params.id;

    try {
        const task = await Task.findById(idTask);
        if (!task) {
            res.status(404).send({ msg: "Task not found" });
        } else {
            res.status(200).send(task);
        }
    } catch (error) {
        res.status(500).send("Task not found");
    }

};
//Delete the task
async function deleteTask(req,res) {

    const idTask = req.params.id;

    try {
        const task = await Task.findByIdAndDelete(idTask);

        if (!task) { 
            res.status(400).send({ msg: "No se encuentra para borrar" });
        }else {
            res.status(200).send({msg : "Tarea borrada"});
        }
        
    }catch(error) {
        res.status(500).send(error);
    }
};

//Update task
async function updateTask (req, res, ) {
    const idTask = req.params.id;
    const bodyChange = req.body;

    try {
        const task = await Task.findByIdAndUpdate(idTask, bodyChange);

        if (!task) { 
            res.status(400).send({ msg: "No se encuentra para actualizar" });
        }else {
            res.status(200).send({msg : "Tarea actualizada",
                                        task : task});

        }
        
    }catch(error) {
        res.status(500).send(error);
    }
};



module.exports = {
    createTask,
    getTasks,
    getTask,
    deleteTask,
    updateTask
};