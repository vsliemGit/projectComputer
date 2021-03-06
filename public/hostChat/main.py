#!/usr/bin/python
# -*- coding: utf8 -*-
import nltk
from pyvi import ViTokenizer

import pickle
import numpy
import tflearn
import tensorflow
import random
import json

with open('data.json', 'r', encoding='utf8') as file:
    data = json.load(file)
    
words = []
labels = []
docs_x = []
docs_y = []

ignore_words = ['?','.', 'và', 'à', 'ừ', 'ạ', 'vì', 'từng', 'một_cách']

for intent in data["intents"]:
    for pattern in intent["patterns"]:
        wrds = ViTokenizer.tokenize(pattern).split()
        #wrds = nltk.word_tokenize(pattern)
        #print(type(wrds))
        words.extend(wrds)
        docs_x.append(wrds)
        docs_y.append(intent["tag"])
    if intent["tag"] not in labels:
        labels.append(intent["tag"])

words = [w.lower() for w in words if w not in ignore_words]
words = sorted(list(set(words)))

labels = sorted(labels)

print(words)

training = []
output = []

out_empty = [0 for _ in range(len(labels))]

for x, doc in enumerate(docs_x):
    bag = []

    wrds = [w.lower() for w in doc]

    for w in words:
        if w in wrds:
            bag.append(1)
        else:
            bag.append(0)

    output_row = out_empty[:]
    output_row[labels.index(docs_y[x])] = 1

    training.append(bag)
    output.append(output_row)


training = numpy.array(training)
output = numpy.array(output)
with open("data.pickle", "wb") as f:
        pickle.dump((words, labels, training, output), f)


tensorflow.reset_default_graph()

net = tflearn.input_data(shape=[None, len(training[0])])
net = tflearn.fully_connected(net, 8)
net = tflearn.fully_connected(net, 8)
net = tflearn.fully_connected(net, len(output[0]), activation="softmax")
net = tflearn.regression(net)

model = tflearn.DNN(net)
model.fit(training, output, n_epoch=1000, batch_size=8, show_metric=True)
model.save("model.tflearn")


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


def chat():
    print("Start talking with the bot (type quit to stop)!")
    while True:
        inp = input("You: ")
        if inp.lower() == "quit":
            break

        results = model.predict([bag_of_words(inp, words)])
        results_index = numpy.argmax(results)
        tag = labels[results_index]
        
        for tg in data["intents"]:
            if tg['tag'] == tag:
                responses = tg['responses']

        print(random.choice(responses))

#print('Installing host chatbot!')
