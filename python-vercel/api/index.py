# Import OS to get environment variables
import os
import requests
# Get Flask and associated modules
from flask import Flask, request, render_template, jsonify,request

# Define the Flask app name from the filename

app = Flask(__name__)
# Get environment
env = os.environ.get('appenv', 'Development')

################
# Begin Routes #
################

# Root
@app.route('/')
def default_route():
    resp=requests.get("https://api.quotable.io/random?maxLength=120")
    json=resp.json()
    keyCode = request.args.get('k')
    tplName="time";
    if keyCode is None:
        keyCode=""
    else:
        json["keycode"]= "(" + keyCode + ")"
    
    #payload={"author":"test","content":"test"}
    if(keyCode=="94"):
        tplName="time"
        
    return render_template(f'body_{tplName}.html',payload=json,env=env)


# Start development webserver on $PORT (or 8080 if environment variable not set) when file ran directly)
# if __name__ == "__main__":
#     app.run(debug=True,host='0.0.0.0',port=int(os.environ.get('PORT', 8080)))

