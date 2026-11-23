from flask import Flask

app=Flask(__name__)

@app.route('/')
def inicio():
    return "Hola mundo Flask"

if __name__=="__main__":
    app.run(debug=True)

@app.route('/soyotraruta', methods=['POST'])
def otra():
    return "Soy otra ruta"
if __name__=="__main__":
    app.run(debug=True)