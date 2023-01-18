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

async function getTasks(req, res) {
    try {
        const tasks = await Task.find().sort({created_at: -1});

        if (!tasks) {
            res.status(400).send({ msg: "Task not found" });
        } else {
            res.status(200).send({ tasks });
        }

    } catch (error) {
        res.status(500).send({ msg: "Task not" });
    }

}

module.exports = {
    createTask,
    getTasks,
};