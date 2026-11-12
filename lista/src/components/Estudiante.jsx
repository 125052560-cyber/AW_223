export default function Estudiante(estudiante) {
    return (
        <li>
            <strong>Hola soy {estudiante.nombre}</strong>{"--"}{estudiante.carrera}
            <button type="button"> eliminar </button>   
        </li>
    );
}  