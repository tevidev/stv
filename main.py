import subprocess
from flask import Flask, request

app = Flask(__name__)

@app.route("/bot", methods=["POST"])
def bot():
    result = subprocess.run(
        ["php", "index.php"],
        capture_output=True,
        text=True
    )
    return result.stdout

app.run(host="0.0.0.0", port=5000)
