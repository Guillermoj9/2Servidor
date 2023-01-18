const mongoose = require('mongoose');
const app = require('./app');
const port = 3000
const urlMongo = "mongodb://root:toor@localhost:27017/";

mongoose.set('strictQuery', false);

mongoose.connect(urlMongo, {
  useNewUrlParser: true,
   useUnifiedTopology: true
}, 
 (err, es) => {
    try {
      if (err) {
        throw err
      } else {
        console.log("La conexion a la base de datos es correcta");

        app.listen(port, () => {
          console.log(`Example app listening on port ${port}`)
        })

      }
    } catch (error) {
      console.error(err)
    }
  });




