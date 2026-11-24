from flask import Blueprint

controladorAlumnoBP=Blueprint('controladorAlumno',__name__)
@controladorAlumnoBP.route('/')
def inicio():
    return "Hola mundo Flask"
"""ruta para insert"""
@controladorAlumnoBP.route('/guardarAlumno', methods=['POST'])
def guardar_alumnos():
    return "se guardaron los alumnos"
""" Consulta todo """
@controladorAlumnoBP.route('/consultatodo')
def consultatodo():
    return "se consulto todo"
""" Ruta para actualizar """
@controladorAlumnoBP.route('/actualizarAlumno', methods=['PUT'])
def actualizar_alumno():
    return "se actualizo el alumno"
"""Ruta para eliminar"""
@controladorAlumnoBP.route('/eliminarAlumno', methods=['DELETE'])
def eliminar_alumno():
    return "se elimino el alumno"