#!/usr/bin/python
# -*- coding: utf8 -*-
import nltk
from pyvi import ViTokenizer
from flask import Flask
from flask_socketio import SocketIO, send

import numpy
import tflearn
import tensorflow
import random
import json
import pickle

app = Flask(__name__)
app.config["SECRET_KEY"] = "dfjahdfo23434cvas"
socketio = SocketIO(app, cors_allowed_origins="*")

with open('data.json', 'r', encoding='utf8') as file:
    data = json.load(file)
    
with open("data.pickle", "rb") as f:
        words, labels, training, output = pickle.load(f)

tensorflow.reset_default_graph()

net = tflearn.input_data(shape=[None, len(training[0])])
net = tflearn.fully_connected(net, 8)
net = tflearn.fully_connected(net, 8)
net = tflearn.fully_connected(net, len(output[0]), activation="softmax")
net = tflearn.regression(net)

model = tflearn.DNN(net)
model.load("model.tflearn")

def bag_of_words(s, words):
    bag = [0 for _ in range(len(words))]
    
    s_words = ViTokenizer.tokenize(s).split()
    #s_words = nltk.word_tokenize(s)
    s_words = [word.lower() for word in s_words]

    for se in s_words:
        for i, w in enumerate(words):
            if w == se:
                bag[i] = 1
            
    return numpy.array(bag)

def response(msg):
    results = model.predict([bag_of_words(msg, words)])[0]
    results_index = numpy.argmax(results)
    tag = labels[results_index]

    if results[results_index] > 0.6:
        for tg in data["intents"]:
            if tg["tag"] == tag:
                response = tg["responses"]
                
        return random.choice(response)
    else:
        return "Tôi không hiểu. Cảm phiền bạn nói lại nhé...."

@socketio.on('connect')
def connect():
    print('Message: Client connected!')

@socketio.on('message')
def received(msg):
    mess = response(msg)
    send(mess, broadcast=True)
    
if __name__ == '__main__':
    socketio.run(app, host='localhost', port='1000')