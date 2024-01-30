from flask import Flask , render_template, request, jsonify, json
from flask_cors import CORS
from main import predict

app = Flask(__name__)
CORS(app)
app.config['JSONIFY_PRETTYPRINT_REGULAR'] = False
app.config['DEBUG'] = True

@app.route('/predict', methods=['POST'])
def api():  

    data = request.get_json()

    result = predict(data["date"],data["hour"])
 
    return jsonify(result)

app.run()