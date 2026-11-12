import Estudiante from "./components/Estudiante";
import "./App.css";



export default function App() {
    const estudiantes = [
        { id: 1, nombre: "Leonel", carrera: "TIID" },
        { id: 2, nombre: "María", carrera: "Medicina" },
        { id: 3, nombre: "Pedro", carrera: "Arquitectura" },
    ];
    return (
        <main className="Contenedor">
            <h1>Lista de estudiantes</h1>
            <form> 
                <input type="text" placeholder="Escribe tu nombre" />
                <input type="text" placeholder="Escribe tu carrera" />
                <button type="button">Agregar</button>
            </form>
            <h2>Estudiantes Registrados</h2>
            <ul>
                {estudiantes.map((estudiante) => (
                    <Estudiante 
                    key={estudiante.id} estudiante={estudiante} />
                ))
                }
            </ul>                             
            <p>El total de estudiantes registrados es: {estudiantes.length}</p>  
        </main>

    );
}