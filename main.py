import subprocess
from flask import Flask, request

app = Flask(__name__)

@app.route("/bot", methods=["POST"])
def bot():
    update = request.get_data()

    result = subprocess.run(
        ["php", "index.php"],
        input=update,
        capture_output=True
    )

    return result.stdout

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000)
